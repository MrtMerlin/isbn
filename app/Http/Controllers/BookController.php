<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{

    public function showBook()
    {
        return route('showBook');
    }

    public function fetchBook(Request $request)
    {
        $request->validate([

            'search' => 'required|alpha_num'

        ]);

        $search = $request->input('search');

        // if validation fails search != null or empty.
        if ($search !== null && $search !== '') {

            // check if model is cached, if is use model.
            $book = Book::where('isbn', '=', $search)->first();

            if (is_null($book)) {
                // if model is not cached get details of book from api
                $book = Http::withHeaders([
                            'accept' => 'application/json'
                          ])
                        ->get('https://openlibrary.org/isbn/'.$search)
                        ->json();
            }
        }

        // make sure $book has been set.
        if (isset($book)) {

            if (isset($book['works'])) {

                // get further details for description and author
                $description = Http::withHeaders([
                                    'accept' => 'application/json'
                                ])
                                ->get('https://openlibrary.org'.$book['works'][0]['key'].'.json')
                                ->json();

                $author = Http::withHeaders([
                                'accept' => 'application/json'
                            ])
                            ->get('https://openlibrary.org'.$book['authors'][0]['key'])
                            ->json();

                // create new book save to db.
                $returnBook = new Book();
                $returnBook->isbn = $search;
                $returnBook->title = $book['title'];
                $returnBook->description = $description['description'] ?? 'N/A';
                $returnBook->author = $author['name'];
                $returnBook->save();

            } else {

                // if model is found return details of returnbook.
                $returnBook = $book;

            }

            return view('showBook')->with(compact('returnBook'));

        } else {

            // if validate fails return to welcome screen.
            return view('welcome');

        }

    }

}

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
        $num = $request->input('search');

        $book = Http::withHeaders([
                        'accept' => 'application/json'
                      ])
                        ->get('https://openlibrary.org/isbn/'.$num)
                        ->json();

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

        $returnedCollection = array(
            'title' => $book['title'],
            'description' => $description['description'],
            'author' => $author['name'],
        );

        return view('showBook')->with(compact('returnedCollection'));

    }

}

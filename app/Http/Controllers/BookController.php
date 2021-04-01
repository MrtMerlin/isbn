<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;

class BookController extends Controller
{

    public function fetchBook(Request $request)
    {
        $reponse = Http::get('https://openlibrary.org/api/' . $request->input());
    }

}

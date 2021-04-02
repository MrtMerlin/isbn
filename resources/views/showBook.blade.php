@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row mb-3">
            <div class="col-md-12">
                <a href="{{ route('welcome') }}" class="btn btn-primary float-right">Back</a>
            </div>
        </div>

        <div class="row">
            <h3>
                Your book Information:
            </h3>
        </div>

        <ul style="list-style: none" class="mt-2">
            <li class="mb-3 w-50">
                <h4>Title</h4>
                <span>{{$returnBook['title']}}</span>
            </li>
            <li class="mb-3 w-50">
                <h4>Description</h4>
                <span>{{$returnBook['description']}}</span>
            </li>
            <li class="mb-3 w-50">
                <h4>Author</h4>
                <span>{{$returnBook['author']}}</span>
            </li>
        </ul>


    </div>

@endsection

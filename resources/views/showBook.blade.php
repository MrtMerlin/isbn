@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row mb-3">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Back</a>
            </div>
        </div>

        <div class="row">
            <h3>
                Your book Information:
            </h3>
        </div>

        <ul style="list-style: none">
            <li class="mb-1">
                <h4>Title : {{$returnedCollection['title']}}</h4>
            </li>
            <li class="mb-1">
                <h4>Description : {{$returnedCollection['description']}}</h4>
            </li>
            <li class="mb-1">
                <h4>Author : {{$returnedCollection['author']}}</h4>
            </li>
        </ul>


    </div>

@endsection

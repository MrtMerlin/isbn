@extends('layouts.app')

@section('content')

    <div class="container">

{{--   form input for search --}}
        <form method="POST" action="{{ route('fetchBook') }}">
            @csrf
            <div class="row">

                <div class="col-md-12">

                    <label
                        for="search"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    >

                        Search

                    </label>

                    <input
                        type="text"
                        class="border border-gray-400 w-100 form-control"
                        name="search"
                        id="search"
                        placeholder="Search for Book, Author, ISBN..."
                        value="{{ old('search') }}"
                        required
                    >

                    @error('search')

                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>

                    @enderror

                </div>

            </div>

            <div class="row mt-2">

                <div class="col-md-12">

                    <button

                        class="btn btn-primary float-right"

                        id="search-submit"

                        type="submit">

                        Submit

                    </button>

                </div>

            </div>
        </form>

    </div>

@endsection




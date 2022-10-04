@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h2>Crea il tuo nuovo Post</h2>
        </header>

        <hr>

        @include('includes.posts.form')

@endsection
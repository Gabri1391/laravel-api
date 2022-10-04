@extends('layouts.app')

@section('content')

<div class="container">
    <header>
        <h2 class="ml-5">Crea il tuo nuovo Post</h2>
    </header>
    <hr>
    @include('includes.posts.form')
</div>
@endsection
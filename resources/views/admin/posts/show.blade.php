@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <header>
        <h2>{{ $post->title}}</h2>
    </header>

    <hr>

    <div class="clearfix ml-5 mt-3"></div>
        @if ($post->image)
            <img class="float-left ml-3 mr-3" src="{{ $post->image }}" alt="{{ $post->title }}">
        @endif
        <p><strong>Categoria: </strong>
            @if ($post->category)
            {{$post->category->label}}
            @else
            -
            @endif
        </p>
        <p><strong>Autore: </strong>
            @if ($post->user_id)
            {{$post->user->name}}
            @else
            -
            @endif
        </p>
        <p>{{ $post->content }}</p>
        <div>
            <time class="mr-2"><strong>Creato il: </strong>{{ $post->created_at}}</time>
        </div>
        <time><strong>Ultima modifica: </strong>{{ $post->updated_at}}</time>
    </div>
    
    <footer class="d-flex align-items-center justify-content-between container mt-3">
        <a href="{{ route('admin.posts.index')}}" class="btn btn-secondary mr-5">
            <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
        </a>
        <div class="d-flex align-items-center justify-content-end">
            <a class="btn btn-warning mr-2" href="{{ route('admin.posts.edit', $post)}}">
                <i class="fa-solid fa-pencil"></i>Modifica
            </a>
           <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger mr-5" type="submit">
                    <i class="fa-solid fa-trash mr-2"></i>Elimina
                </button>
           </form>
        </div>
    </footer>
  </div>


@endsection
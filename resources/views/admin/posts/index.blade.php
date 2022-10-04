@extends('layouts.app')

@section('content')
   @include('includes.alert')
<div class="container">

    <header class="d-flex align-items-center justify-content-between">
        <div>
            <h2 class="ml-3">Lista dei Post</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('admin.posts.create')}}">
                <i class="fa-solid fa-plus mr-2"></i>Crea nuovo post
            </a>
        </div>
    </header>
    
    <main>
        <table class="table table-dark mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Categoria</th>
                <th scope="col">Creato il</th>
                <th scope="col">Modificato il</th>
                <th class="text-center">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id}}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->user)
                        {{ $post->user->name }}
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if ($post->category)
                            <span class="badge badge-pill badge-{{$post->category->color ?? 'light'}}">{{ $post->category->label }}</span>
                        @endif
                    </td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.posts.show', $post)}}">
                            <i class="fa-solid fa-eye mr-2"></i>Vedi
                        </a>
                        <a class="btn btn-sm btn-warning mr-2" href="{{ route('admin.posts.edit', $post)}}">
                            <i class="fa-solid fa-pencil"></i>Modifica
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fa-solid fa-trash mr-2"></i>Elimina
                                </button>
                           </form>
                        
                    </td>
                  </tr>
                @empty
                    <tr>
                        <td colspan="8"> 
                        <h3 class="text-center">Non ci sono post </h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
          </table>
    </main>
        
</div>
@endsection
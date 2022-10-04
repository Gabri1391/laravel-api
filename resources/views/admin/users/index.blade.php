@extends('layouts.app')

@section('content')
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
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nome completo</th>
                  <th scope="col">Età</th>
                  <th scope="col">Indirizzo</th>
                  <th class="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <th scope="col">{{ $user->id}}</th>
                        <th scope="col">{{ $user->name}}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->phone}}</th>
                        <th scope="col">{{ $user->address}}</th>
                        <th scope="col">{{ $user->birthyear}}</th>
                    </tr>
                @empty
                    <tr><td colspan="8"><p>Nessun utente loggato</p></td></tr>
                @endforelse
            </tbody>
        </table>
    </main>
@endsection
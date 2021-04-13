@extends('disseny')

@section('content')

<h1>Llista d'Usuaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Username</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Email</td>
          <td>Telèfon Móbil</td>
          <td>Admin</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $usr)
        <tr>
            <td>{{$usr->id}}</td>
            <td>{{$usr->username}}</td>
            <td>{{$usr->nom}}</td>
            <td>{{$usr->cognoms}}</td>
            <td>{{$usr->email}}</td>
            <td>{{$usr->mobil}}</td>
            <!--@if($usr->utpublica == "Si")
              <td><img src="images/tick.webp"></td>
            @else
              <td><img src="images/cross.png"></td>
            @endif-->
            <td>{{$usr->admin}}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usr->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $usr->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'Usuaris</a>
@endsection
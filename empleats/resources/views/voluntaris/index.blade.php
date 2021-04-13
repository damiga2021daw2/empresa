@extends('disseny')

@section('content')

<h1>Llista de Socis</h1>
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
          <td>NIF</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Telèfon Fixe</td>
          <td>Telèfon Mòbil</td>
          <td>Email</td>
          <td>Edat</td>
          <td>Professió</td>
          <td>Hores Dedicades</td>
          <td>Nom ONG</td>
          <td>Data d'alta</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($voluntari as $vol)
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->nif}}</td>
            <td>{{$vol->nom}}</td>
            <td>{{$vol->cognoms}}</td>
            <td>{{$vol->adreca}}</td>
            <td>{{$vol->poblacio}}</td>
            <td>{{$vol->comarca}}</td>
            <td>{{$vol->fixe}}</td>
            <td>{{$vol->mobil}}</td>
            <td>{{$vol->email}}</td>
            <td>{{$vol->edat}}</td>
            <td>{{$vol->professio}}</td>
            <td>{{$vol->horesDedicades}}</td>
            <td>{{$vol->nomONG}}</td>
            <td>{{$vol->created_at}}</td>
            <td class="text-left">
                <a href="{{ route('voluntaris.edit', $vol->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('voluntaris.destroy', $vol->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('voluntaris/create') }}">Accés directe a la vista de creació de Voluntaris</a>
@endsection
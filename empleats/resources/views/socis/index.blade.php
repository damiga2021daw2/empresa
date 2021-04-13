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
          <td>Quota Mensual</td>
          <td>Aportacio Anual</td>
          <td>Nom ONG</td>
          <td>Data d'alta</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $so)
        <tr>
            <td>{{$so->id}}</td>
            <td>{{$so->nif}}</td>
            <td>{{$so->nom}}</td>
            <td>{{$so->cognoms}}</td>
            <td>{{$so->adreca}}</td>
            <td>{{$so->poblacio}}</td>
            <td>{{$so->comarca}}</td>
            <td>{{$so->fixe}}</td>
            <td>{{$so->mobil}}</td>
            <td>{{$so->email}}</td>
            <td>{{$so->quotaMes}}</td>
            <td>{{$so->aportAny}}</td>
            <td>{{$so->nomONG}}</td>
            <td>{{$so->created_at}}</td>
            <td class="text-left">
                <a href="{{ route('socis.edit', $so->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis.destroy', $so->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('socis/create') }}">Accés directe a la vista de creació de Socis</a>
@endsection
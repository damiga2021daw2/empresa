@extends('disseny')

@section('content')

<h1>Llista de Professionals</h1>
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
          <td>Càrrec</td>
          <td>Pagament Seguritat-Social</td>
          <td>Percentatge d'IRFP</td>
          <td>Nom ONG</td>
          <td>Data d'alta</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($professional as $prof)
        <tr>
            <td>{{$prof->id}}</td>
            <td>{{$prof->nif}}</td>
            <td>{{$prof->nom}}</td>
            <td>{{$prof->cognoms}}</td>
            <td>{{$prof->adreca}}</td>
            <td>{{$prof->poblacio}}</td>
            <td>{{$prof->comarca}}</td>
            <td>{{$prof->fixe}}</td>
            <td>{{$prof->mobil}}</td>
            <td>{{$prof->email}}</td>
            <td>{{$prof->carrec}}</td>
            <td>{{$prof->pagamentSegSoc}}</td>
            <td>{{$prof->irpfPercent}}</td>
            <td>{{$prof->nomONG}}</td>
            <td>{{$prof->created_at}}</td>
            <td class="text-left">
                <a href="{{ route('professionals.edit', $prof->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('professionals.destroy', $prof->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('professionals/create') }}">Accés directe a la vista de creació de Professionals</a>
@endsection
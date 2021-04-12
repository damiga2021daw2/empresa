@extends('disseny')

@section('content')

<h1>Llista d'ONGs</h1>
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
          <td>CIF</td>
          <td>Nom</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Tipus</td>
          <td>Utilitat Pública</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ong as $on)
        <tr>
            <td>{{$on->id}}</td>
            <td>{{$on->cif}}</td>
            <td>{{$on->nom}}</td>
            <td>{{$on->adreca}}</td>
            <td>{{$on->poblacio}}</td>
            <td>{{$on->comarca}}</td>
            <td>{{$on->tipus}}</td>
                        <!--@if($on->utpublica == "Si")
              <td><img src="images/tick.webp"></td>
            @else
              <td><img src="images/cross.png"></td>
            @endif-->
            <td>{{$on->utpublica}}</td>
            <td class="text-left">
                <a href="{{ route('ongs.edit', $on->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('ongs.destroy', $on->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('ongs/create') }}">Accés directe a la vista de creació d'ONGs</a>
@endsection
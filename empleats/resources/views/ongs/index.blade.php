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
            @if($on->utpublica == 1)
              <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fes%2Fvectors%2Ftick-mark-corregir-elecci%25C3%25B3n-signo-40143%2F&psig=AOvVaw3hZEYia-nagZo91uLnSNje&ust=1618254673826000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJCFnsry9u8CFQAAAAAdAAAAABAQ"></td>
            @else
              <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngkey.com%2Fmaxpic%2Fu2q8r5w7r5y3t4q8%2F&psig=AOvVaw123EC6CzREqIAQI_rfzPGz&ust=1618254828789000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJjg_5Pz9u8CFQAAAAAdAAAAABAL"></td>
            @endif
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
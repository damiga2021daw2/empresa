@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'empleats</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou empleat
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('empleats.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="telefon">Telèfon</label>
              <input type="tel" class="form-control" name="telefon"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('empleats') }}">Accés directe a la Llista d'empleats</a>
@endsection
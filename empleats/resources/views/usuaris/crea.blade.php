@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'Usuaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Usuari
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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="username">Nom d'usuari</label>
              <input type="username" class="form-control" name="username"/>
          </div>
          <div class="form-group">
              <label for="passwd">Contrassenya</label>
              <input type="passwd" class="form-control" name="passwd"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="nom" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognoms">Cognoms</label>
              <input type="cognoms" class="form-control" name="cognoms"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="mobil">Telèfon móbil</label>
              <input type="mobil" class="form-control" name="mobil"/>
          </div>
          <div class="form-group">
              <label for="admin">Admin</label><br>
              <input type="radio" name="admin" value="Si">Si</input>
		          <input type="radio" name="admin" value="No">No</input>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'Usuaris</a>
@endsection
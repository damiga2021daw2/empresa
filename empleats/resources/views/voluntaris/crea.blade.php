@extends('disseny')

@section('content')

<h1>Aplicació d'administració de Voluntaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Voluntari
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
      <form method="post" action="{{ route('voluntaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nif">NIF</label>
              <input type="nif" class="form-control" name="nif"/>
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
              <label for="adreca">Adreça</label>
              <input type="adreca" class="form-control" name="adreca"/>
          </div>
          <div class="form-group">
              <label for="poblacio">Població</label>
              <input type="poblacio" class="form-control" name="poblacio"/>
          </div>
          <div class="form-group">
              <label for="comarca">Comarca</label>
              <input type="comarca" class="form-control" name="comarca"/>
          </div>
          <div class="form-group">
              <label for="fixe">Telèfon fixe</label>
              <input type="fixe" class="form-control" name="fixe"/>
          </div>
          <div class="form-group">
              <label for="mobil">Telèfon Mòbil</label>
              <input type="mobil" class="form-control" name="mobil"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="edat">Edat</label>
              <input type="edat" class="form-control" name="edat"/>
          </div>
          <div class="form-group">
              <label for="professio">Professió</label>
              <input type="professio" class="form-control" name="professio"/>
          </div>
          <div class="form-group">
              <label for="horesDedicades">Hores Dedicades</label>
              <input type="horesDedicades" class="form-control" name="horesDedicades"/>
          </div>
          <div class="form-group">
              <label for="nomONG">Nom de la ONG a la que pertany</label>
              <input type="nomONG" class="form-control" name="nomONG"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de Voluntaris</a>
@endsection
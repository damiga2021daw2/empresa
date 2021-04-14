@extends('disseny')

@section('content')

<h1>Aplicació d'administració de Professionals</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Professional
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
      <form method="post" action="{{ route('professionals.store') }}">
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
              <label for="carrec">Càrrec</label>
              <input type="carrec" class="form-control" name="carrec"/>
          </div>
          <div class="form-group">
              <label for="pagamentSegSoc">Pagament Seguritat-Social</label>
              <input type="pagamentSegSoc" class="form-control" name="pagamentSegSoc"/>
          </div>
          <div class="form-group">
              <label for="irpfPercent">Percentatge d'IRFP</label>
              <input type="irpfPercent" class="form-control" name="irpfPercent"/>
          </div>
          <div class="form-group">
              <label for="nomONG">Nom de la ONG a la que pertany</label>
              <input type="nomONG" class="form-control" name="nomONG"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('professionals') }}">Accés directe a la Llista de Professionals</a>
@endsection
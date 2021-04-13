@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('socis.update', $soci->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" value="{{ $soci->nif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $soci->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $soci->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $soci->adreca }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $soci->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $soci->comarca }}" />
            </div>
            <div class="form-group">
                <label for="fixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="fixe" value="{{ $soci->fixe }}" />
            </div>
            <div class="form-group">
                <label for="mobil">Telèfon Móbil</label>
                <input type="text" class="form-control" name="mobil" value="{{ $soci->mobil }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $soci->email }}" />
            </div>
            <div class="form-group">
                <label for="quotaMes">Quota Mensual</label>
                <input type="text" class="form-control" name="quotaMes" value="{{ $soci->quotaMes }}" />
            </div>
            <div class="form-group">
                <label for="aportAny">Aportació Anual</label>
                <input type="text" class="form-control" name="aportAny" value="{{ $soci->aportAny }}" />
            </div>
            <div class="form-group">
                <label for="nomONG">Nom de la ONG</label>
                <input type="text" class="form-control" name="nomONG" value="{{ $soci->nomONG }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de Socis</a
@endsection
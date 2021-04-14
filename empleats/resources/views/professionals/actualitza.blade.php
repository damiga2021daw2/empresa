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
        <form method="post" action="{{ route('professionals.update', $professional->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" value="{{ $professional->nif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $professional->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $professional->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $professional->adreca }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $professional->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $professional->comarca }}" />
            </div>
            <div class="form-group">
                <label for="fixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="fixe" value="{{ $professional->fixe }}" />
            </div>
            <div class="form-group">
                <label for="mobil">Telèfon Móbil</label>
                <input type="text" class="form-control" name="mobil" value="{{ $professional->mobil }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $professional->email }}" />
            </div>
            <div class="form-group">
                <label for="carrec">Càrrec</label>
                <input type="text" class="form-control" name="carrec" value="{{ $professional->carrec }}" />
            </div>
            <div class="form-group">
                <label for="pagamentSegSoc">Pagament Seguritat-Social</label>
                <input type="text" class="form-control" name="pagamentSegSoc" value="{{ $professional->pagamentSegSoc }}" />
            </div>
            <div class="form-group">
                <label for="irpfPercent">Percentatge d'IRFP</label>
                <input type="text" class="form-control" name="irpfPercent" value="{{ $professional->irpfPercent }}" />
            </div>
            <div class="form-group">
                <label for="nomONG">Nom de la ONG</label>
                <input type="text" class="form-control" name="nomONG" value="{{ $professional->nomONG }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('professionals') }}">Accés directe a la Llista de Professional</a
@endsection
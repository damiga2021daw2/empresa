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
        <form method="post" action="{{ route('voluntaris.update', $voluntari->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" value="{{ $voluntari->nif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $voluntari->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $voluntari->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $voluntari->adreca }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $voluntari->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $voluntari->comarca }}" />
            </div>
            <div class="form-group">
                <label for="fixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="fixe" value="{{ $voluntari->fixe }}" />
            </div>
            <div class="form-group">
                <label for="mobil">Telèfon Móbil</label>
                <input type="text" class="form-control" name="mobil" value="{{ $voluntari->mobil }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $voluntari->email }}" />
            </div>
            <div class="form-group">
                <label for="edat">Edat</label>
                <input type="text" class="form-control" name="edat" value="{{ $voluntari->edat }}" />
            </div>
            <div class="form-group">
                <label for="professio">Professio</label>
                <input type="text" class="form-control" name="professio" value="{{ $voluntari->professio }}" />
            </div>
            <div class="form-group">
                <label for="horesDedicades">Hores Dedicades</label>
                <input type="text" class="form-control" name="horesDedicades" value="{{ $voluntari->horesDedicades }}" />
            </div>
            <div class="form-group">
                <label for="nomONG">Nom de la ONG</label>
                <input type="text" class="form-control" name="nomONG" value="{{ $voluntari->nomONG }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('voluntaris') }}">Accés directe a la Llista de Voluntari</a
@endsection
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
        <form method="post" action="{{ route('usuaris.update', $usuari->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="username">Nom d'usuari</label>
                <input type="text" class="form-control" name="username" value="{{ $usuari->username }}" />
            </div>
            <div class="form-group">
                <label for="passwd">Contrassenya</label>
                <input type="text" class="form-control" name="passwd" value="{{ $usuari->passwd }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $usuari->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $usuari->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $usuari->email }}" />
            </div>
            <div class="form-group">
                <label for="mobil">Telèfon Móbil</label>
                <input type="text" class="form-control" name="mobil" value="{{ $usuari->mobil }}" />
            </div>
            @if($usuari->admin == "Si")
            <div class="form-group">
                <label for="admin">Admin</label><br>
                <input checked type="radio" name="admin" value="Si">Si</input>
		        <input type="radio" name="admin" value="No">No</input>
            </div>
            @else
            <div class="form-group">
                <label for="admin">Admin</label><br>
                <input type="radio" name="admin" value="Si">Si</input>
		        <input checked type="radio" name="admin" value="No">No</input>
            </div>
            @endif

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'Usuaris</a
@endsection
@extends('layouts.app')

@section('content')

<h1>Editar Categoria</h1>

<form action="{{ route('categories.update', $categoru->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Descripcion</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>

@endsection

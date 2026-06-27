@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-4 text-center">Registro de Centro de Formación</h2>

    <form action="{{ route('trainingcenters.datos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre del Centro:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Ubicación del Centro:</label>
            <input type="text" name="location" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary w-100">Guardar Centro</button>
    </form>
</div>
@endsection
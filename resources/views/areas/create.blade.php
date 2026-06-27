@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-4 text-center">Registro de Área</h2>

    <form action="{{ route('areas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre del Área:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Registrar Área</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-4 text-center">Registro de Computador</h2>

    <form action="{{ route('computer.model') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Número del Equipo:</label>
            <input type="number" name="numero" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca del Dispositivo:</label>
            <input type="text" name="marca" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Guardar Computador</button>
    </form>
</div>
@endsection
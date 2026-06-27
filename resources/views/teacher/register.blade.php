@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-4 text-center">Registro de Instructor</h2>

    <form action="{{ route('teacher.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="area_id" class="form-label">Área</label>
            <select name="area_id" id="area_id" class="form-select">
                <option value="">Seleccione una área</option>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="training_center_id" class="form-label">Centro de Formación</label>
            <select name="training_center_id" id="training_center_id" class="form-select">
                <option value="">Seleccione un centro de formación</option>
                @foreach ($training_centers as $training)
                    <option value="{{ $training->id }}">{{ $training->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar Formulario</button>
    </form>
</div>
@endsection
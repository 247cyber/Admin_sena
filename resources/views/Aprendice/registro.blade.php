@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-4 text-center">Registro de Aprendiz</h2>

    <form action="{{ route('Aprendice.admin') }}" method="POST" enctype="multipart/form-data">
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
            <label class="form-label">Número de Celular:</label>
            <input type="number" name="cell_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">Curso:</label>
            <select name="course_id" id="course_id" class="form-select">
                <option value="">Seleccione un curso</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">
                        {{ $course->course_number }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="computer_id" class="form-label">Computador Asignado:</label>
            <select name="computer_id" id="computer_id" class="form-select">
                <option value="">Seleccione un computador</option>
                @foreach ($computers as $computer)
                    <option value="{{ $computer->id }}">
                        {{ $computer->number }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar Formulario</button>
    </form>
</div>
@endsection
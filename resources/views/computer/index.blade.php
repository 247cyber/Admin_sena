@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Inventario de Computadores</h4>
            <a href="{{ route('computer.computador') }}" class="btn btn-light btn-sm fw-bold">Nuevo Computador</a>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Número de Equipo</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($computers as $computer)
                        <tr>
                            <td>{{ $computer->id }}</td>
                            <td>{{ $computer->number }}</td>
                            <td>{{ $computer->brand }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Lista de Aprendices</h4>
            <a href="{{ route('Aprendice.registro') }}" class="btn btn-primary btn-sm fw-bold">Nuevo Aprendiz</a>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apprentices as $aprendiz)
                        <tr>
                            <td>{{ $aprendiz->id }}</td>
                            <td>{{ $aprendiz->name }}</td>
                            <td>{{ $aprendiz->email }}</td>
                            <td>{{ $aprendiz->cell_number }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold">Centros de Formación</h4>
            <a href="{{ route('trainingcenters.registrar') }}" class="btn btn-dark btn-sm fw-bold">Nuevo Centro</a>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Centro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($training_centers as $center)
                        <tr>
                            <td>{{ $center->id }}</td>
                            <td>{{ $center->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
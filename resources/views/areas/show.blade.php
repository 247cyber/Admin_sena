@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    {{ $area['name'] }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control">
                            {{ $area['id'] }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Usuario</label>
                        <div class="form-control">
                            {{ $area['user_id'] }}
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $area['name'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Descripción</label>
                    <textarea class="form-control" rows="3" readonly>{{ $area['description'] }}</textarea>
                </div>

                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label class="fw-bold">Precio</label>
                        <div class="form-control text-success fw-bold">
                            ${{ number_format($area['precio'], 0, ',', '.') }}
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-bold">Cantidad</label>
                        <div class="form-control">
                            {{ $area['quantity'] }}
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-bold">Peso</label>
                        <div class="form-control">
                            {{ $area['weight'] }} g
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-bold">Tamaño</label>
                        <div class="form-control">
                            {{ $area['size'] }} cm
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6">
                        <label class="fw-bold">Fecha de creación</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($area['created_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($area['updated_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="d-flex justify-content-end mt-4">

            <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">
                <i class="bi bi-arrow-left"></i> Volver
            </a>

            {{-- Si prefieres regresar a una ruta específica --}}
            {{-- <a href="{{ route('products.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Volver
             </a> --}}

        </div>


    </div>
@endsection
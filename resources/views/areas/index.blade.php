@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Aciones</th>
                 
            </thead>
            <tbody>
                <a href="{{ route('areas.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Área
                </a>

                <br><br>
                @foreach ($areas as $area)
                    <tr>
                        
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                      
                        <td><a href="{{ route('areas.show', $area->id) }}">Mostrar</a></td>
                  

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection
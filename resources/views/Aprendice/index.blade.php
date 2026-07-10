@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE APRENDICES</h1>

    <div class="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Numero de Celular</th>
                    <th>course_id</th>
                    <th>computer_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('apprentice.registro') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Aprendis
                </a>
                <br><br>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $aprentice->id }}</td> 
                        <td>{{ $aprentice->name}}</td> 
                        <td>{{ $aprentice->email}}</td> 
                        <td>{{ $aprentice->cell_number}}</td> 
                        <td>{{ $aprentice->computer_id }}</td>
                        <td>{{ $aprentice->computer_id }}</td>
        
                        <td>
                            <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
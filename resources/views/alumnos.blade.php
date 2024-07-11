@extends('layout')

@section('title', 'Alumnos')

@section('content')
    <h2>Listado de Alumnos</h2>
    <tr>
        <td colspan="4">
            <a href="{{ route('alumnos.create') }}"> Nuevo Alumno</a>
        </td>
    </tr>
    <tr>
        @if($alumnos)
        <ol class="list-group list-group-numbered">
        @foreach ($alumnos as $alumno)
            <li class="list-group-item">
                <a href="{{ route('alumnos.show', $alumno) }}">{{$alumno->nombre}}</a>
            </li>
        @endforeach
        </ol>
        @else
            <td colspan="4" >No hay alumnos que mostrar</td>
        @endif
    </tr>
     
    <nav>
        <ul class="pagination">
            {{$alumnos->links('pagination::bootstrap-5')}}
        </ul>
    </nav>   
@endsection




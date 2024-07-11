@extends('layout')

@section('title', 'Alumnos | '.$alumno->nombre)

@section('content')
<table class="table">
    <thead>
        <tr>
          <th scope="col" colspan="2">Nombre Alumno</th>
          <th scope="col" colspan="2">Curso</th>
          <th scope="col" colspan="2">Nota 1</th>
          <th scope="col" colspan="2">Nota 2</th>
          <th scope="col" colspan="2">Promedio</th>
          <th scope="col" colspan="2">Estado</th>
          <th scope="col" colspan="2">Fecha de Registro</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row" colspan="2">{{ $alumno->nombre }}</td>
            <td  scope="row" colspan="2">{{ $alumno->curso }}</td>
            <td  scope="row" colspan="2">{{ $alumno->nota1 }}</td>
            <td  scope="row" colspan="2">{{ $alumno->nota2 }}</td>
            <td scope="row" colspan="2">
                {{ $promedio = calcular_promedio([$alumno->nota1, $alumno->nota2]) }}
            </td>
            <td scope="row" colspan="2">
                <span class="{{ $promedio >= minimo() ? 'text-aprobado' : 'text-desaprobado' }}">
                    {{ esta_aprobado($promedio) }}
                </span>
            </td>
            <td scope="row" colspan="2">{{ $alumno->created_at }}</td>
        <tr>
    </tbody>
</table>
@endsection



@extends('layout')

@section('title', 'Crear Alumno')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Crear nuevo Alumno</th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('alumnos.store') }}" method="post" class="row g-3 needs-validation" novalidate>
            @include('partials.form', ['btnText' => 'Guardar']) 
        </form>
    </table>
@endsection



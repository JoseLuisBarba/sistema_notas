@csrf
<tr>
    <th class="form-label">Nombre</th>
    <td><input type="text" name="nombre" value="{{ old('nombre', $alumno->nombre) }}"></td>
</tr>
<tr>
    <th class="form-label">Curso</th>
    <td>
        <select name="curso" value="{{ old('curso', $alumno->curso) }}" class="form-control">
            <option value="matematica">Matemática</option>
            <option value="ciencia">Ciencia</option>
            <option value="historia">Historia</option>
            <option value="literatura">Literatura</option>
        </select>
    </td>
</tr>
<tr>
    <th class="form-label">Nota 1</th>
    <td><input type="number" name="nota1" min="0" max="20" value="{{ old('nota1', $alumno->nota1) }}" class="form-control"></td>
</tr>
<tr>
    <th class="form-label">Nota 2</th>
    <td><input type="number" name="nota2" min="0" max="20" value="{{ old('nota2', $alumno->nota2) }}" class="form-control"></td>
</tr>
<tr>
    <td colspan="2" align="center"><button type="submit" class="btn btn-primary" class="form-control">{{$btnText}}</button></td>
</tr>
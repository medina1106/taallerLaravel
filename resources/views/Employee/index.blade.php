@extends('Template.Template')
@section('plantillaweb')
<h2>Lista de empleados</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Dirección</th>
        <th scope="col">Fecha nacimiento</th>
        <th scope="col">Salario</th>
        <th scope="col">Hora de inicio</th>
        <th scope="col">Hora de salida</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->nombres}}</td>
            <td>{{$employee->apellidos}}</td>
            <td>{{$employee->telefono}}</td>
            <td>{{$employee->direccion}}</td>
            <td>{{$employee->fecha_nacimiento}}</td>
            <td>{{$employee->salario}}</td>
            <td>{{$employee->hora_inicio}}</td>
            <td>{{$employee->hora_salida}}</td>
            <td>
              <a class="btn btn-warning btn-sm" href="{{route('employee.edit', $employee)}} " role="button">Editar</a>
            </td>
            <td>
              <form action="{{route('employee.destroy', $employee)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
            </td>
            </td>
          </tr>      
        @endforeach
    </tbody>
  </table>
  {{ $employees->links() }}

@endsection
@extends('Template.Template')
@section('plantillaweb')
<h2>Formulario ingreso</h2>
<form action="{{route('employee.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Ingrese su nombre: </label>
            <input type="text" name="nombres">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Telefono: </label>
            <input type="text" name="telefono">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Dirección: </label>
            <input type="text" name="direccion">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Fecha: </label>
            <input type="date" name="fecha_nacimiento" placeholder="escriba su fecha de nacimiento">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Salario: </label>
            <input type="number" name="salario">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora inicio: </label>
            <input type="time" name="hora_inicio">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora salida: </label>
            <input type="time" name="hora_salida">
          </div>

        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection
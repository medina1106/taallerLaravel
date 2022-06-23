@extends('Template.Template')
@section('plantillaweb')
<h2>Servicios</h2>
 <form action="{{route('service.store')}}" method="post"> 
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Ingrese su nombre: </label>
            <input type="text" name="nombre">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">descripcion: </label>
            <input type="text" name="descripcion">
          </div>


          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">tiempo maximo: </label>
            <input type="time" name="tiempo_max">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">costo extra: </label>
            <input type="number" name="costo_extra">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">clave: </label>
            <input type="password" name="clave">
          </div>

        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection
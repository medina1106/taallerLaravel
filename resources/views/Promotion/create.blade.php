@extends('Template.Template')
@section('plantillaweb')
<h2>Promociones</h2>


 {{-- <form action="{{route('service.store')}}" method="post">  --}}
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">nombre del producto: </label>
            <input type="text" name="nombre">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">descripcion: </label>
            <input type="text" name="descripcion">
          </div>


          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">precio: </label>
            <input type="number" name="precio">
          </div>
          
          

        
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection
@extends('Template.Template')
@section('plantillaweb')
<h2>Formulario ingreso</h2>
<form action="{{route('quote.store')}}" name="cita" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora programada: </label>
            <input type="time" name="hora_programada">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de inicio:  </label>
            <input type="time" name="hora_inicio" onkeyup="operacion()">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de finalización:  </label>
            <input type="time" name="hora_fin" onkeyup="operacion()">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Tiempo total:  </label>
            <input type="text" name="tiempo_total" onkeyup="operacion()">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Total a pagar:  </label>
            <input type="number" name="total_pago">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
          <label for="cars">Empleado No:</label>
          <select id="cars" name="employee_id">
            <option selected="true" disabled="disabled"> empleado </option>
            @foreach ($employees as $employee)
              <option value="{{$employee->id}}">{{$employee->nombres}} {{$employee->apellidos}}</option>    
            @endforeach
            
          </select> 
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
          <label for="cars">Forma de pago:</label>
          <select id="cars" name="waytopay_id">
            <option selected="true" disabled="disabled">forma de pago</option>
            @foreach ($waytopays as $waytopay)
              <option value="{{$waytopay->id}}">{{$waytopay->nombre}}</option>    
            @endforeach
            
          </select> 
          </div>

        </div>
      </div>
      <div class="row">
      <div class="col-lg-6 col-md-6 offset-md-3">
        <input type="submit" onclick="operacion()" name="btn_enviar" value="Aceptar">
      </div>
      </div>
</form>

<script>

  function operacion() {
      var h_inicio = document.cita.hora_inicio.value;
      /* alert(h_inicio.substr(3, 2)); */
      var h_fin = document.cita.hora_fin.value;
      /* alert(h_fin.substr(3, 2)); */
      
      if ((h_fin.substr(1, 2))>(h_inicio.substr(1, 2))) { 
        var todo= ((h_fin.substr(3, 2) - h_inicio.substr(3, 2)));
        document.cita.tiempo_total.value=(todo + 60)
      } else {

      }

      try {
/*           h_inicio = (isNaN(parseInt(h_inicio))) ? 0 : parseInt(h_inicio);
          h_fin = (isNaN(parseInt(h_fin))) ? 0 : parseInt(h_fin); */
          document.cita.tiempo_total.value= (h_fin.substr(3, 2) - h_inicio.substr(3, 2));
      } catch (e) {
          
      }
      
      
  }

</script>
@endsection
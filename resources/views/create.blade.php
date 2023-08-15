@extends('template.main')

@section('title') 
    Registro 
@endsection

@section('contenido') 

<script type="text/javascript">
  function compararDatos() 
  {
    var p = $("#password").val();
    var v = $("#verificarPass").val();

    var ma = $("#matricula").val();
    var vema = $("#verificarMatri").val();
        
        if(p != v)
        {
          alert("Tu Contraseña no coincide, verifica porfavor");
          return false;
        }

        if(ma != vema)
        {
          alert("Tu Matrícula no coincide, verifica porfavor");
          return false;
        }

          return true;
  }
</script> 

<style type="text/css" media="screen">
.caja {
font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
color: #ffffff;
font-size: 0px;
font-weight: 200;
text-align: center;
background: #337AB7;
margin: 0 0 25px;
overflow: hidden;
padding: 0px;
border-radius: 30px 30px 30px 30px;
-moz-border-radius: 30px 30px 30px 30px;
-webkit-border-radius: 30px 30px 30px 30px;
border: 2px solid #337AB7;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>


<script language="JavaScript" type="text/javascript">
alert("B  I E N V E N I D @ \n \nCompleta primero todas las secciones, cuando termines procede a presionar el botón guardar. \n \nSi presentas un error o falla en el sistema contacta con el Área de desarrollo web con el M.A.T.I. Reinerio Zapata Salazar Whatsapp. 9141110444. Última Actualización 24-febrero-2021");
</script>

@include('template.mensajes')
  @if (session('success'))
        <div class="alert alert-danger"  role="alert">
            {{ session('success') }}
        </div>
@endif

{!! Form::open(['route'=>'store', 'id'=>'form', 'method' => 'post', 'onsubmit'=>'return compararDatos()']) !!}
  
  <center><p class="caja"> Completa el formulario de acuerdo a cada apartado </p> </center>
  <br>

     <div id="msj-errors" class="alert alert-danger fade in" style="display:none"> 
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          <span id="msj-errors-text"></span> 
      </div> 


      <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none"> 
              <strong>Tus datos se han guardado satisfactoriamente</strong> 
      </div>

  <br>

      <div class="tabbable tabs-left">

        <ul class="nav nav-tabs">
           <li class="active"><a href="#a" data-toggle="tab">AUTENTICACIÓN</a></li>
          <li><a href="#b" data-toggle="tab">DATOS PERSONALES</a></li>
          <li><a href="#c" data-toggle="tab">DATOS DEL RESPONSABLE</a></li>
          <li><a href="#d" data-toggle="tab">DATOS DEL DOMICILIO</a></li>
           <li><a href="#e" data-toggle="tab">HISTORIAL CLÍNICO</a></li>
          <li><a href="#f" data-toggle="tab">DATOS SOCIOECONÓMICOS</a></li>
          <li><a href="#g" data-toggle="tab">DATOS ACADÉMICOS</a></li>
        
         
        </ul>

        <div class="container" >
          <div class="tab-content">

              <div class="tab-pane active" id="a">
<div class="centrar-form">                
                  <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('email', 'Correo Electrónico Personal') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@correo.com']) !!}
                         </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                             {!! Form::label('password', 'CURP') !!}
                             {!! Form::text('curp', null, ['class' => 'form-control', 'placeholder' => 'Requerido', 'id'=>'password']) !!}
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                             {!! Form::label('password', 'Verificar tu CURP') !!}
                             {!! Form::text('verificarPass', null, ['class' => 'form-control', 'placeholder' => 'Requerido','id'=>'verificarPass']) !!}
                          </div>
                      </div>
                  </div>
</div>
              </div>
    
              <div class="tab-pane" id="b">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                           {!! Form::label('appat', 'Apellido Paterno') !!}
                           {!! Form::text('ape_pat', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                           {!! Form::label('apmat', 'Apellido Materno') !!}
                           {!! Form::text('ape_mat', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                      <div class="col-md-2 ">
                        <div class="form-group">
                          {!! Form::label('sex', 'Sexo') !!}
                          {!! Form::select('sexo', ['' => 'Selecciona','mujer' => 'Mujer', 'hombre' => 'Hombre'],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          {!! Form::label('est_civ', 'Estado Civíl') !!}
                          {!! Form::select('estado_civ', ['' => 'Selecciona','soltero' => 'Soltero', 'casado' => 'Casado', 'union_libre' => 'Unión Libre'],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                           {!! Form::label('eda', 'Edad') !!}
                           {!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                     <div class="col-md-3">
                        <div class="form-group">
                            <div class='input-group date' id='divMiCalendario'>
                                {!! Form::label('fec_nac', 'Fecha de Nacimiento') !!}
                                {!! Form::text('fecha_nac', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'id'=>'txtFecha']) !!}
                                 <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                      
                      <div class="col-md-2">
                        <div class="form-group">
                           {!! Form::label('tel', 'Celular') !!}
                           {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                           {!! Form::label('telcas', 'Teléfono Casa') !!}
                           {!! Form::text('telefono_casa', null, ['class' => 'form-control', 'placeholder' => 'Opcional']) !!}
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          {!! Form::label('dial', 'Dialecto / Idioma') !!} 
                            <div>

                          {!! Form::select('lenguaje', ['' => 'Selecciona',
                                                             '1' => 'Ninguno',
                                                             '2' => 'Chol',
                                                             '3' => 'Chontal',
                                                             '4' => 'Lacandon',
                                                             '5' => 'Tojolabal',
                                                             '6' => 'Zoque',
                                                             '7' => 'Tzeltal',
                                                             '8' => 'Tzotzil',
                                                             '9' => 'Ingles',
                                                             '10' => 'Otro'
                                                            ],
                                                              null, ['class' => 'form-control','id'=>'lenguaje','hidden','onclick'=>'ocultaLenguaje()'])!!}

                            </div>
                            </br>
                        </div>
                     </div>

                <div id="lenguajeID" style="display: none;">
                  <div class="tab-content">
                      <table >
                            <tr>
                                <td>
                                  <td style="width: 800px">  
                                     {!! Form::label('dia-otros', 'Especificar') !!}
                                     {!! Form::text('lenguaje_otro', null, ['class' => 'form-control']) !!}
                                  </td>
                                </td>
                            </tr>
                        </table>
                      </div>
                    </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap-datetimepicker.min.css')}}">
                <script src="{{asset('plugins/bootstrap/js/moment.min.js')}}"></script>
                <script src="{{asset('plugins/bootstrap/js/bootstrap-datetimepicker.es.js')}}"></script>
                <script src="{{asset('plugins/bootstrap/js/bootstrap-datetimepicker.min.js')}}"></script>

                <script type="text/javascript">
                         $('#divMiCalendario').datetimepicker(
                         {
                              format: 'YYYY-MM-DD'       
                          });
                          $('#divMiCalendario').data("DateTimePicker");
                </script> 
                    </div>
              </div>    
                    
              <div class="tab-pane" id="c">

                <div class="row">
                  <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Información del Primer Tutor</legend>
                    <div class="col-md-4 ">
                        <div class="form-group">
                          {!! Form::label('tut1', 'Parentesco') !!}
                          {!! Form::select('tutor_1', ['' =>'Selecciona','padre' => 'Padre', 'madre' => 'Madre', 'hermano' => 'Hermano (a)', 'Tio' => 'Tio (a)', 'abuelo' => 'Abuelo (a)', 'esposo' => 'Esposo (a)', 'cuñado' => 'Cuñado (a)', 'hijo' => 'Hijo (a)', 'novia' => 'Novio (a)', 'primo' => 'Primo (a)', 'amigo' => 'Amigo (a)', 'conocido' => 'Conocido (a)'],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>
                    
                      <div class="col-md-8 ">
                        <div class="form-group">
                            {!! Form::label('nom1', 'Nombre Completo') !!}
                            {!! Form::text('nombre_1', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>             
                      </div>

                     <div class="col-md-3 ">
                        <div class="form-group">
                            {!! Form::label('cel1', 'Celular') !!}
                            {!! Form::text('celular_1', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>             
                      </div>

                      <div class="col-md-3 ">
                        <div class="form-group">
                            {!! Form::label('tel1', 'Telefono casa') !!}
                            {!! Form::text('telefono_1', null, ['class' => 'form-control', 'placeholder' => 'Opcional']) !!}
                        </div>             
                      </div>
                      
                     <div class="col-md-3 ">
                      <div class="form-group">
                          {!! Form::label('est1', 'Estado') !!}
                          {!! Form::select('estado_1',$estados,null,['class' => 'form-control','id'=>'estado_1', old('estado_1')])!!}
                        </div>


                      </div>
                      <div class="col-md-3 ">
                        <div class="form-group">
                          {!! Form::label('mun1', 'Municipio') !!}
                          {!! Form::select('municipio_1',[''=>'Selecciona'],null,['class' => 'form-control','id'=>'municipio_1', old('municipio_1')])!!}
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                           {!! Form::label('col1', 'Colonia / Comunidad') !!}
                           {!! Form::text('colonia_1', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'width' => '100' ]) !!}
                        </div>
                      </div>

                    <div class="col-md-7">
                        <div class="form-group">
                           {!! Form::label('call1', 'Calle con Número') !!}
                           {!! Form::text('calle_1', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'width' => '100' ]) !!}
                        </div>
                      </div>

                </fieldset>

                <fieldset class="scheduler-border">
                  <legend class="scheduler-border">Información del Segundo Tutor</legend>
                      
                                      <div class="col-md-4 ">
                        <div class="form-group">
                          {!! Form::label('tut2', 'Parentesco') !!}
                          {!! Form::select('tutor_2', ['' => 'Selecciona','padre' => 'Padre', 'madre' => 'Madre', 'hermano' => 'Hermano (a)', 'Tio' => 'Tio (a)', 'abuelo' => 'Abuelo (a)', 'esposo' => 'Esposo (a)', 'cuñado' => 'Cuñado (a)', 'hijo' => 'Hijo (a)', 'novia' => 'Novio (a)', 'primo' => 'Primo (a)', 'amigo' => 'Amigo (a)', 'conocido' => 'Conocido (a)'],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>
                    
                      <div class="col-md-8 ">
                        <div class="form-group">
                            {!! Form::label('nom2', 'Nombre Completo') !!}
                            {!! Form::text('nombre_2', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>             
                      </div>

                     <div class="col-md-3 ">
                        <div class="form-group">
                            {!! Form::label('cel2', 'Celular') !!}
                            {!! Form::text('celular_2', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>             
                      </div>

                      <div class="col-md-3 ">
                        <div class="form-group">
                            {!! Form::label('tel2', 'Telefono casa') !!}
                            {!! Form::text('telefono_2', null, ['class' => 'form-control', 'placeholder' => 'Opcional']) !!}
                        </div>             
                      </div>
                      
                     <div class="col-md-3 ">
                      <div class="form-group">
                          {!! Form::label('est2', 'Estado') !!}
                          {!! Form::select('estado_2',$estados,null,['class' => 'form-control','id'=>'estado_2'])!!}
                        </div>
                      </div>
                      <div class="col-md-3 ">
                        <div class="form-group">
                          {!! Form::label('mun2', 'Municipio') !!}
                         {!! Form::select('municipio_2',[''=>'Selecciona'],null,['class' => 'form-control','id'=>'municipio_2'])!!}
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                           {!! Form::label('col2', 'Colonia / Comunidad') !!}
                           {!! Form::text('colonia_2', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'width' => '100' ]) !!}
                        </div>
                      </div>

                    <div class="col-md-7">
                        <div class="form-group">
                           {!! Form::label('call2', 'Calle con Número') !!}
                           {!! Form::text('calle_2', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'width' => '100' ]) !!}
                        </div>
                      </div>

                </fieldset>  

                </div>

              </div>
                    
              <div class="tab-pane" id="d">

        
                  <div class="row">

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Domicilio Particular</legend>

                      <div class="col-md-4 ">
                        <div class="form-group">
                          {!! Form::label('est', 'Estado') !!}
                          {!! Form::select('estado',$estados,null,['class' => 'form-control','id'=>'estado_3'])!!}
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="form-group">
                          {!! Form::label('mun', 'Municipio') !!}
                         {!! Form::select('municipio',[''=>'Selecciona'],null,['class' => 'form-control','id'=>'municipio_3'])!!}
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                           {!! Form::label('col', 'Colonia') !!}
                           {!! Form::text('colonia', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                      <div class="col-md-8">
                        <div class="form-group">
                           {!! Form::label('call', 'Calle') !!}
                           {!! Form::text('calle', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio', 'width' => '100' ]) !!}
                        </div>
                      </div>

                  </fieldset>
                  <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Domicilio de renta o estadía</legend>

                        <div class="col-md-4">
                        <div class="form-group">
                          {!! Form::label('tip_ing', '¿Rentas algún departamento?') !!}    
                          
                          {!! Form::select('renta', ['' => 'Selecciona',
                                                                 'si' => 'Si',
                                                                 'no' => 'No'],
                                                                 null, ['class' => 'form-control','id'=>'rid','hidden','onclick'=>'ocultaRenta()'])!!}        
                            </br>
                        </div>
                     </div>
                  </fieldset>
                  
                  <div id="rentaID" style="display: none;">
                  <div class="tab-content">
                      <table >
                            <tr>
                                <td>
                                  
                                  <td style="width: 200px">  
                                    {!! Form::label('mun', 'Municipio de Tabasco') !!}

                                   {!! Form::select('municipio_renta', ['' => 'Selecciona',
                                                                  '1' => 'Balancán', 
                                                                  '2' => 'Cárdenas', 
                                                                  '3' => 'Centla', 
                                                                  '4' => 'Centro', 
                                                                  '5' => 'Comalcalco',
                                                                  '6' => 'Cunduacán',
                                                                  '7' => 'Emiliano Zapata',
                                                                  '8' => 'Huimanguillo',
                                                                  '9' => 'Jalapa',
                                                                  '10' => 'Jalpa de Méndez',
                                                                  '11' => 'Jonuta',
                                                                  '12' => 'Macuspana',
                                                                  '13' => 'Nacajuca',
                                                                  '14' => 'Paraíso',
                                                                  '15' => 'Tacotalpa',
                                                                  '16' => 'Teapa',
                                                                  '17' => 'Tenosique'],
                                                                  null, ['class' => 'form-control']) !!}

                                  </td>
                                  <td style="width: 400px">  
                                     {!! Form::label('colren', 'Colonia') !!}
                                     {!! Form::text('colonia_renta', null, ['class' => 'form-control', 'placeholder' => 'Colonia / Calle o Comunidad']) !!}
                                  </td>

                                  <td style="width: 600px">  
                                     {!! Form::label('callrenta', 'Calle con Número') !!}
                                     {!! Form::text('calle_renta', null, ['class' => 'form-control', 'placeholder' => 'Calle']) !!}
                                  </td>
                                </td>
                            </tr>
                            <tr>
                               <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                            </tr>

                            <tr>
                              <td>
                                <td style="width: 800px">
                                   {!! Form::label('rent', '¿Cuánto pagas aproximademente por la renta?') !!} 
                            <div>

                                  {!! Form::select('pago_renta', ['' => 'Selecciona',
                                                                  '1' => '$500 a $1000', 
                                                                  '2' => '$1000 a $1500', 
                                                                  '3' => '$1500 a $2000', 
                                                                  '4' => 'Mayor a $2000', 
                                                                  '5' => 'No Aplica'],
                                                                  null, ['class' => 'form-control']) !!}
                            </div>

                                </td>
                              </td>
                            </tr>
                        </table>
                      </div>
                    </div>

                  </div>  
              </div>

              <div class="tab-pane" id="e">
                <div class="row">
                 <div class="col-md-4">
                         <div class="form-group">
                            {!! Form::label('enf', 'Enfermedad') !!} 

                            {!! Form::select('enfermedad', ['' => 'Selecciona',
                                                                 '' => 'Selecciona',
                                                                 '1' => 'Ninguna',
                                                                 '2' => 'Alcoholismo',
                                                                 '3' => 'Amigdalitis',
                                                                 '4' => 'Anemia',
                                                                 '5' => 'Cáncer',
                                                                 '6' => 'Depresión',
                                                                 '7' => 'Diabetes',
                                                                 '8' => 'Enfermedades del corazón',
                                                                 '9' => 'Enfermerdades reumáticas',
                                                                 '10' => 'Epilepsia (ataques/convulsiones',
                                                                 '11' => 'Hemorragias',
                                                                 '12' => 'Neoplasias (tumores)',
                                                                 '13' => 'Obesidad',
                                                                 '14' => 'Presión Alta',
                                                                 '15' => 'Presión Baja',
                                                                 '16' => 'Respiratoria o asma',
                                                                 'otro' => 'Otra'                                     
                                                              ],
                                                              null, ['class' => 'form-control','id'=>'enfermedad','hidden','onclick'=>'ocultaEnfermedad()'])!!}

                                <br>
                                <div id="enfermedadID" style="display: none;">
                                  {!! Form::label('enf-otros', 'Especificar la enfermedad') !!}
                                  {!! Form::text('enfermedad_otro', null, ['class' => 'form-control']) !!}
                                </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="form-group">
                            {!! Form::label('capdif', 'Capacidad Especial') !!} 
                           
                            {!! Form::select('capacidad_especial', ['' => 'Selecciona',
                                                                 '1' => 'Ninguna',
                                                                 '2' => 'Visual',
                                                                 '3' => 'Auditiva',
                                                                 '4' => 'Motríz'],
                                                                 null, ['class' => 'form-control','id'=>'capacidad','hidden','onclick'=>'ocultaCapacidad()'])!!}
                                <br>
                                <div id="capacidadID" style="display: none;">
                                   {!! Form::label('capesp', 'Describe la Capacidad') !!}
                                   {!! Form::text('descripcion_capacidad', null, ['class' => 'form-control']) !!}
                                 </div>
                         </div>
                    </div>                 

                    <div class="col-md-4">
                         <div class="form-group">
                            {!! Form::label('ale', 'Alergia') !!} 

                            {!! Form::select('alergia', ['' => 'Selecciona',
                                                                 'si' => 'Si',
                                                                 'no' => 'No'],
                                                                 null, ['class' => 'form-control','id'=>'alergia','hidden','onclick'=>'ocultaAlergia()'])!!}

                                  <br>
                                  <div id="alergiaID" style="display: none;">          
                                    {!! Form::label('capesp', 'Describir brevemente la alergia') !!}
                                    {!! Form::text('descripcion_alergia', null, ['class' => 'form-control']) !!}      
                                </div>
                         </div>
                    </div>

                      <div class="col-md-4">
                         <div class="form-group">
                            {!! Form::label('med', 'Medicamentos') !!} 
    
                            {!! Form::select('medicamento', ['' => 'Selecciona',
                                                                 'si' => 'Si',
                                                                 'no' => 'No'],
                                                                 null, ['class' => 'form-control','id'=>'medicamento','hidden','onclick'=>'ocultaMedicamento()'])!!}

                                  <br>
                                  <div id="medicamentoID" style="display: none;">          
                                    {!! Form::label('medesp', 'Lista tus medicamentos preescritos') !!}
                                    {!! Form::textarea('descripcion_medicamento', null, ['class' => 'form-control', 'placeholder' => 'Listar', 'size' => '60x3']) !!}     
                                </div>
                         </div>
                    </div>
                  
                  <div class="col-md-4">
                        <div class="form-group">
                          {!! Form::label('tipo_san', 'Tipo de Sangre') !!}
                          {!! Form::select('tipo_sangre', ['' => 'Selecciona','nr' => 'No recuerdo', 'A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'],null, ['class' => 'form-control']) !!}
                        </div>
                  </div>                     
                </div>
              </div>
                  

              <div class="tab-pane" id="f">
                    <table>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('ins', '¿A cuantas licenciaturas te has inscrito (incluyendo tu licenciatura actual) ?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('inscripcion', [''=>'Selecciona','0'=>'0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('bec', '¿Cuentas con alguna beca actualmente?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('beca', [''=>'Selecciona','no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('trans', '¿Principal medio de transporte de tu domicilio a la Universidad?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('transporte', [''=>'Selecciona','transporte' => 'Transporte Público', 'auto' => 'Auto Particular', 'moto' => 'Moto', 'bicicleta' => 'Bicicleta'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('dep_ec', '¿Dependes económicamente de tus padres o tutores?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('dependencia_eco', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('hij', '¿Tienes hijos?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('hijos', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('her', '¿Cuántos hermanos tienes?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('hermanos', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5' , '6' => '+ de 5'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('ee', '¿Eres el primero en hacer estudios de nivel superior?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('ees', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('act_tra', '¿Actualmente trabajas?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('actual_trabajo', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('cas_fam', 'La casa donde vive tu familia ¿es?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('casa_familia', [''=>'Selecciona', 'propia' => 'Propia', 'rentada' => 'Rentada'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('hab_cas', '¿Cuantas personas habitan en la casa donde vive tu familia (incluyendote)?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('habitantes_casa', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5' , '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                          <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('per_din', '¿Cuantas personas trabajan o ganan dinero en tu familia?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('persona_dinero', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('sos_est', '¿Quién sostiene tus estudios?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('sostiene_estudio', [''=>'Selecciona', 'padre' => 'Padre', 'madre' => 'Madre', 'ambos' => 'Padres (ambos)', 'esposo' => 'esposo (a)', 'tutor' => 'Tutor', 'yo' => 'Yo'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('pros', '¿Tu familia recibe apoyo de PROSPERA?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('prospera', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('mat_tec', '¿De que material está construido el techo de tu casa?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('material_techo', [''=>'Selecciona', 'lamina_carton' => 'Lámina de cartón', 'lamina_asbesto' => 'Lámina de asbesto', 'lamina_metalica' => 'Lámina Metálica', 'madera' => 'Madera', 'cemento' => 'Cemento o concreto'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('mat_pis', '¿De que material está construido el piso de tu casa?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('material_piso', [''=>'Selecciona', 'tierra' => 'Tierra', 'cemento' => 'Cemento', 'mosaico' => 'Mosaico u otro'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                       <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_cua', '¿Cuántos cuartos hay en tu casa? (No contar cocina y baños)') !!}
                            </td>
                            <td> 
                                 {!! Form::select('numero_cuartos', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_cua_dor', '¿Cuántos de esos cuartos son dormitorios?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('numero_cuartos_dor', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('cuar_coc', '¿Se cuenta con cocina separada de dormitorios?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('cuarto_cocina', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_ba', '¿Cuántos baños hay en tu casa?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('numero_banios', [''=>'Selecciona', '0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_ba', '¿Tu casa, cuenta con toma de agua independiente?') !!}
                            </td>
                            <td> 
                                 {!! Form::select('toma_de_agua', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_foc', '¿Número de focos en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('numero_focos', [''=>'Selecciona', '0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30', '31' => '31', '32' => '32', '33' => '33', '34' => '34', '35' => '35'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_aut', '¿Número de automóviles en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('numero_autos', [''=>'Selecciona', '0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_tv', '¿Número de televisiones?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('numero_tvs', [''=>'Selecciona', '0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_cel', '¿Número de celulares en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('numero_cels', [''=>'Selecciona', '0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('num_com', '¿Número de computadoras en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('numero_comp', [''=>'Selecciona', '0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('inter', '¿Cuéntas con servicio de Internet en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('internet', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('est', '¿Cuéntas con un espacio exclusivo para estudiar en tu casa?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('espacio_estudio', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('cla_soc', '¿En que clase socioeconómica te ubicarías?')  !!}
                            </td>
                            <td> 
                                  {!! Form::select('clase_social', [''=>'Selecciona', 'alto' => 'Nivel Alto', 'medio_alto' => 'Medio Alto', 'medio_tipico' => 'Medio Típico', 'medio_emergente' => 'Medio Emergente', 'bajo_tipico' => 'Bajo Típico', 'bajo_extremo' => 'Bajo Extremo', 'bajo_muy_extremo' => 'Bajo Muy Extremo'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 500px">  
                                 {!! Form::label('est', '¿Perteneces a una Étnia?') !!}
                            </td>
                            <td> 
                                  {!! Form::select('etnia_procedencia', [''=>'Selecciona', 'no' => 'No', 'si' => 'Si'],null, ['class' => 'form-control']) !!}
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                    </table>
              </div>

              <div class="tab-pane" id="g">
                  <div class="row">

                    <div class="col-md-2">
                        <div class="form-group">
                           {!! Form::label('matri', 'Matrícula') !!}
                           {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio','id'=>'matricula']) !!}
                        </div>
                    </div>

                  <div class="col-md-2">
                          <div class="form-group">
                             {!! Form::label('vermatri', 'Verificar Matrícula') !!}
                             {!! Form::text('verificarMatri', null,['class' => 'form-control', 'placeholder' => 'Obligatorio','id'=>'verificarMatri']) !!}
                          </div>
                  </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          {!! Form::label('lic', 'Licenciatura') !!}
                          {!! Form::select('licenciatura', [''=>'Selecciona', 'le' => 'Enfermería', 'lrf' => 'Rehabilitación Física', 'lapyd' => 'Atención Preh. y Des.', 'lmc' => 'Médico Cirujano'],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          {!! Form::label('cic_ing', 'Ciclo de Ingreso') !!}
                          {!! Form::select('ciclo_ing', [''=>'Selecciona','202102' => 'SEPTIEMBRE 21 - FEBRERO 22' ,'202101' => 'MARZO 21 - SEPTIEMBRE 21','202002' => 'AGOSTO 20 - FEBRERO 21','201902' => 'AGOSTO 19 - ENERO 20','201802' => 'AGOSTO 18 - ENERO 19', '201702' => 'AGOSTO 17 - ENERO 18', '201602' => 'AGOSTO 16 - ENERO 17', '201502' => 'AGOSTO 15 - ENERO 16', '201402' => 'AGOSTO 14 - ENERO 15','201302' => 'AGOSTO 13 - ENERO 14', '201202' => 'AGOSTO 12 - ENERO 13','201102' => 'AGOSTO 11 - ENERO 12','201002' => 'AGOSTO 10 - ENERO 11' ],null, ['class' => 'form-control']) !!}
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                           {!! Form::label('prom', 'Promedio (nivel medio superior)') !!}
                           {!! Form::text('promedio', null, ['class' => 'form-control', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                      </div>

                       <div class="col-md-6">
                        <div class="form-group">
                          {!! Form::label('tip_ing', 'Tipo de Ingreso') !!} 
                            
                            <div class="custom-control custom-radio">

                            {{ Form::radio('tipo_ing', 'nuevo' ,true, ['class'=>'custom-control-input']) }} Nuevo Ingreso
                            {{ Form::radio('tipo_ing', 'cambio' ,false,['onclick'=>'ocultarIngreso()']) }}  Cambio de Licenciatura
                            {{ Form::radio('tipo_ing', 'equivalencia',false) }} Equivalencia
                            {{ Form::radio('tipo_ing', 'segunda' ,false,['onclick'=>'ocultarIngreso()']) }} 2da opción
                            </div>
                            </br>
                        </div>
                     </div>

                     <br>
                     <br>

                     <div class="col-md-8">

                    <div id="cdiabe1" style="display: none;">
                     <div class="tab-content">
                      <table >
                            <tr>
                                <td>
                                  <td style="width: 600px">
                                     {!! Form::label('div', 'División anterior') !!}
                                     {!! Form::select('div_ant_cam', [''=>'Selecciona', 'DACA' => 'DACA', 'DACB' => 'DACB', 'DACBIOL' => 'DACBIOL', 'DACEA' => 'DACEA', 'DACS' => 'DACS', 'DACSyH' => 'DACSyH', 'DAEA' => 'DAEA', 'DAIA' => 'DAIA', 'DAIS' => 'DAIS', 'DAMC' => 'DAMC','DAMJ' => 'DAMJ', 'DAMR' => 'DAMR'],null, ['class' => 'form-control']) !!}
                                  </td>
                                  
                                  <td style="width: 1200px">  
                                      {!! Form::label('lic_ant', 'Licenciatura anterior') !!}
                                      {!! Form::text('lic_ant_cam', null, ['class' => 'form-control', 'placeholder' => 'Licenciatura anterior', 'id'=>'licant']) !!}
                                  </td>
                                </td>
                            </tr>
                        </table>
                      </div>
                    </div> 

                    <div id="cdiabe2" style="display: none;">
                     <div class="tab-content">
                      <table >
                            <tr>
                                <td>
                                  <td style="width: 800px">
                                       {!! Form::label('uniantequi', 'Universidad anterior') !!}
                                      {!! Form::text('uni_ant_equi', null, ['class' => 'form-control', 'placeholder' => 'Completo', 'id'=>'uniant']) !!}
                                  </td>
                                  <td style="width: 800px">
                                       {!! Form::label('licantequi', 'Licenciatura anterior') !!}
                                      {!! Form::text('lic_ant_equi', null, ['class' => 'form-control', 'placeholder' => 'Completo', 'id'=>'licantequi']) !!}
                                  </td>
                                </td>
                            </tr>
                        </table>
                      </div>
                    </div>


                     <div id="cdiabe3" style="display: none;">
                     <div class="tab-content">
                      <table >
                            <tr>
                                <td>
                                  <td style="width: 600px">
                                     {!! Form::label('seg-div', 'División anterior') !!}
                                     {!! Form::select('div_ant_cam', [''=>'Selecciona', 'DACA' => 'DACA', 'DACB' => 'DACB', 'DACBIOL' => 'DACBIOL', 'DACEA' => 'DACEA', 'DACS' => 'DACS', 'DACSyH' => 'DACSyH', 'DAEA' => 'DAEA', 'DAIA' => 'DAIA', 'DAIS' => 'DAIS', 'DAMJ' => 'DAMJ', 'DAMR' => 'DAMR'],null, ['class' => 'form-control']) !!}
                                  </td>
                                  
                                  <td style="width: 1200px">  
                                      {!! Form::label('lic_ant', 'Licenciatura anterior') !!}
                                      {!! Form::text('lic_ant_cam', null, ['class' => 'form-control', 'placeholder' => 'Licenciatura anterior', 'id'=>'licant']) !!}
                                  </td>
                                </td>
                            </tr>
                        </table>
                      </div>
                    </div> 


                     </div>
 

                  </div>
              </div>

              </div>

              </br>
             <div class="form-group">
              {!!link_to('#','Guardar', ['id'=>'guardar','class'=>'btn btn-primary'])!!}
             </div>
          </div>
        </div>
      </div>

  <script src="{{asset('js/ocultarCampos.js')}}"></script>

  {!! Form::close() !!}

  <script>
  
  $("#guardar").click(function(e){
        e.preventDefault();
        
        var form  = $('#form');
        var url   = form.attr('action');
        var data  = form.serialize();

        $.ajax({

          url: url,
          type: "post",
          datatype: 'json',
          data : data,


          success:function(data)
          {
              
            /*$('#msj-errors').hide();
              $("#msj-success").fadeIn();
              $("#form")[0].reset();*/

            window.location.replace(data.route);
          
          
          },
          error:function(data) 
          {
            
              var errormessages = ""; 

              $.each(data.responseJSON, function(i, field){ 
                errormessages+="<li>"+field+"</li>"; 
                  }); 

              $('#msj-errors-text').html( "<ul>"+ errormessages+ "</ul>" ); $('#msj-errors').fadeIn();

          }
        })        
        
    });
  
</script>


@endsection
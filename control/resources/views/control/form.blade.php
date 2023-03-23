

<h1>{{$modo}} Beneficiario</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">

        <ul>       
            @foreach( $errors->all() as $error)

           <li>{{$error}}</li> 
        
            @endforeach
        </ul>

    </div>

   
@endif

<div class="form-group">

 <label for="Nombre">Nombre</label>
 <input type="text" class="form-control"  name="Nombres" value="{{isset($control->Nombres)?$control->Nombres:old('Nombres')}}"  id="Nombre"> 


</div>
<div class="form-group">
 <label for="Apellidos">Apellidos</label>
 <input type="text" class="form-control" name="Apellidos" value="{{isset($control->Apellidos)?$control->Apellidos:old('Apellidos')}}"  id="Apellidos">

</div>


<div class="form-group">
 <label for="dni">DNI</label>
 <input type="number" class="form-control" name="dni" value="{{isset($control->dni)?$control->dni:old('dni')}}"  id="dni" >
</div>
<br>
<label for="dni">Selecciona un Caserio</label>
<select class="form-control" id="caserio" name="caserio" value="{{isset($control->caserio)?$control->caserio:old('caserio')}}">
    <option  @if (old('HUARCOS') == 'HUARCOS') selected="selected" @endif>HUARCOS</option>
    <option  @if (old('LIMONHIRCA') == 'LIMONHIRCA') selected="selected" @endif>LIMONHIRCA</option>
    <option  @if (old('CAPTUY') == 'CAPTUY_BAJO') selected="selected" @endif>CAPTUY_BAJO</option>
    <option  @if (old('CAPTUY') == 'CAPTUY_ALTO') selected="selected" @endif>CAPTUY_ALTO</option>
    <option  @if (old('POCOS') == 'POCOS') selected="selected" @endif>POCOS</option>
    <option  @if (old('WINTON') == 'WINTON') selected="selected" @endif>WINTON</option>
    <option  @if (old('QUILLHUAY') == 'QUILLHUAY') selected="selected" @endif>QUILLHUAY</option>
    <option  @if (old('VINCHAMARCA') == 'VINCHAMARCA') selected="selected" @endif>VINCHAMARCA</option>
    <option  @if (old('TAMBAR') == 'TAMBAR') selected="selected" @endif>TAMBAR</option>
    <option  @if (old('HUAUYAN') == 'HUAUYAN') selected="selected" @endif>HUAUYAN</option>
    <option  @if (old('BREÑA_ALTA') == 'BREÑA_ALTA') selected="selected" @endif>BREÑA_ALTA</option>
    <option  @if (old('TAMBO') == 'TAMBO') selected="selected" @endif>TAMBO</option>
    <option  @if (old('ANTA') == 'ANTA') selected="selected" @endif>ANTA</option>
    <option  @if (old('YAPACAYAN') == 'YAPACAYAN') selected="selected" @endif>YAPACAYAN</option>
    <option  @if (old('LAS_PENCAS') == 'LAS_PENCAS') selected="selected" @endif>LAS_PENCAS</option>
    <option  @if (old('SANTA_ROSA') == 'SANTA_ROSA') selected="selected" @endif>SANTA_ROSA</option>
    <option  @if (old('HUANCARPON') == 'HUANCARPON') selected="selected" @endif>HUANCARPON</option>
    <option  @if (old('TOMEQUE') == 'TOMEQUE') selected="selected" @endif>TOMEQUE</option>
    <option  @if (old('TOMEQUILLO') == 'TOMEQUILLO') selected="selected" @endif>TOMEQUILLO</option>
    <option  @if (old('LAREA_ALTA') == 'LAREA_ALTA') selected="selected" @endif>LAREA_ALTA</option>
    <option  @if (old('LAREA_BAJA') == 'LAREA_BAJA') selected="selected" @endif>LAREA_BAJA</option>
    <option  @if (old('ISCO') == 'ISCO') selected="selected" @endif>ISCO</option>
    <option  @if (old('POCOSHUANCA') == 'POCOSHUANCA') selected="selected" @endif>POCOSHUANCA</option>
    <option  @if (old('HORNILLOS') == 'HORNILLOS') selected="selected" @endif>HORNILLOS</option>
    <option  @if (old('SAN_FELIX') == 'SAN_FELIX') selected="selected" @endif>SAN_FELIX</option>
    <option  @if (old('SHOCOSPUQUIO') == 'SHOCOSPUQUIO') selected="selected" @endif>SHOCOSPUQUIO</option>
    <option  @if (old('PAREDONES') == 'PAREDONES') selected="selected" @endif>PAREDONES</option>
    <option  @if (old('VIRAHUANCA') == 'VIRAHUANCA') selected="selected" @endif>VIRAHUANCA</option>
    <option  @if (old('CAURA') == 'CAURA') selected="selected" @endif>CAURA</option>
    <option  @if (old('VILLA_LAS_MERCEDES') == 'VILLA_LAS_MERCEDES') selected="selected" @endif>VILLA_LAS_MERCEDES</option>
    <option  @if (old('SANTO_TOMAS') == 'SANTO_TOMAS') selected="selected" @endif>SANTO_TOMAS</option>
    <option  @if (old('LAS_LOMAS_HUACA') == 'LAS_LOMAS_HUACA') selected="selected" @endif>LAS_LOMAS_HUACA</option>
    <option  @if (old('SAN_PEDRITO') == 'SAN_PEDRITO') selected="selected" @endif>SAN_PEDRITO</option>
    <option  @if (old('SANTA_MARIA') == 'SANTA_MARIA') selected="selected" @endif>SANTA_MARIA</option>
    <option  @if (old('SAN_CRISTOBAL') == 'SAN_CRISTOBAL') selected="selected" @endif>SAN_CRISTOBAL</option>
    <option  @if (old('EL_ARENAL') == 'EL_ARENAL') selected="selected" @endif>EL_ARENAL</option>
    <option  @if (old('CUSHIPAMPA') == 'CUSHIPAMPA') selected="selected" @endif>CUSHIPAMPA</option>
    <option  @if (old('NUEVO_MORO') == 'NUEVO_MORO') selected="selected" @endif>NUEVO_MORO</option>
    <option  @if (old('BREÑA_ISCO') == 'BREÑA_ISCO') selected="selected" @endif>BREÑA_ISCO</option>

</select>
<div class="form-group">
 <label for="observacion">Observacion</label>
 <input type="text" class="form-control" name="observacion" value="{{isset($control->observacion)?$control->observacion:old('observacion')}}"  id="observacion">

</div>

<div class="form-group">
 <label for="fecha">Fecha</label> 
 <input type="date" class="form-control" name="created_at" value="{{isset($control->created_at)?$control->created_at:old('created_at', date('Y-m-d'))}}"  id="created_at">

</div>


<div class="form-group">
 <label for="foto"></label>

@if (isset($control->Foto))
<img class="img-thumbnail ing-fluid" src="{{ asset('storage').'/'.$control->Foto }}" width="60" alt="">
@endif
 <input type="file" class="form-control" name="foto" value=""  id="foto">

</div>


 <input class="btn btn-success" type="submit" value="{{$modo}} datos">

 <a class="btn btn-primary" href="{{ url('control')}}">Regresar</a>


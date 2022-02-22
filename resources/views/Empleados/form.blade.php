<br>

<h2>{{$Modo}} Articulo</h2>

<br>
<div class="form-group"> 


                   

<label for="Nombre">{{'Nombre:'}}</label >
<input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}">

</div>
<div class="form-group">
<label for="Categoria">{{'Categoria:'}}</label >

<select name="Categoria" id="Categoria" class="form-control" >
    <option value="">Escoger Categoria</option>   
    <option value="Vestido" >Vestido</option>
   <option value="Camisa">Camisa</option>
   <option value="Blusa">Blusa</option>
    
</select>

</div>
<div class="form-group">
<label for="Color">{{'Color:'}}</label >    
<select name="Color" id="Color" class="form-control" value="{{ isset($empleado->Color)?$empleado->Color:''}}">
<option value="">Escoger Color Disponible</option>       
    <option value="Negro">Negro</option>
   <option value="Azul">Azul</option>
   <option value="Amarillo">Amarillo</option>
</select>

</div>
<div class="form-group">
<label for="Talla">{{'Talla:'}}</label >    
<select name="Talla" id="Talla" class="form-control" value="{{ isset($empleado->Talla)?$empleado->Talla:''}}">
<option value="">Escoger Talla</option>       
    <option value="XS">XS</option>
   <option value="S">S</option>
   <option value="M">M</option>
   <option value="L">L</option>
   <option value="XL">XL</option>
</select>
</div>

<div class="form-group">
<label for="Genero">{{'Genero:'}}</label >

<select name="Genero" id="Genero" class="form-control" value="{{ isset($empleado->Genero)?$empleado->Genero:''}}">
<option value="">Escoger Opcion</option>   
<option value="Masculino">Masculino</option>
   <option value="Femenino">Femenino</option>
   <option value="Otros">Otros</option>
    
</select>


</div>

<div class="form-group">
<label for="Descripcion">{{'Descripcion:'}}</label >
<input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{ isset($empleado->Descripcion)?$empleado->Descripcion:''}}">

</div>


<div class="form-group">

    <label for="Foto"> Foto: </label >
        @if(isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
        @endif
    <input type="file" class="form-control" name="Foto" id="Foto" value="">
    <br><br>
    <input class="btn btn-success" type="submit" value="{{$Modo=='Crear' ? 'Agregar Articulo':'Modificar Articulo'}}">
     <a class="btn btn-primary" href="{{ url('empleados')}}"> Inicio  </a>
</div>
    </div>
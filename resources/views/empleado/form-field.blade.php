<div class="form-group">
    <label class="form-label" for="nombredelpuesto">Primer nombre</label>
    <input 
        type="text" 
        class="form-control" 
        id="primernombre"
        name="primernombre"
        value="{{old('primernombre',$empleado->primernombre)}}"
        aria-describedby="emailHelp"
        placeholder="primer nombre"
    >
    @error('primernombre')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label class="form-label" for="segundonombre">Segundo nombre</label>
    <input 
        type="text" 
        class="form-control" 
        id="segundonombre"
        name="segundonombre"
        value="{{old('segundonombre',$empleado->segundonombre)}}"
        aria-describedby="emailHelp"
        placeholder="segundo nombre"
    >
    @error('segundonombre')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label class="form-label" for="primerapellido">Primer apellido</label>
    <input 
        type="text" 
        class="form-control" 
        id="primerapellido"
        name="primerapellido"
        value="{{old('primerapellido',$empleado->primerapellido)}}"
        aria-describedby="emailHelp"
        placeholder="primer apellido"
    >
    @error('primerapellido')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label class="form-label" for="segundoapellido">Segundo apellido</label>
    <input 
        type="text" 
        class="form-control" 
        id="segundoapellido"
        name="segundoapellido"
        value="{{old('segundoapellido',$empleado->segundoapellido)}}"
        aria-describedby="emailHelp"
        placeholder="Segundo nombre"
    >
    @error('segundoapellido')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label class="form-label" for="foto">Foto:</label>
    <input 
        type="file" 
        class="form-control" 
        id="foto"
        name="foto"
        value="{{old('foto',$empleado->foto)}}"
        aria-describedby="emailHelp"
        placeholder="Segundo nombre"
    >
    @error('foto')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label class="form-label" for="cv">CV (PDF):</label>
    @if($empleado->cv)
        <a href="{{$empleado->cv}}">ver pdf</a>
    @endif
    <input 
        type="file" 
        class="form-control" 
        id="cv"
        name="cv"
        value="{{old('cv',$empleado->cv)}}"
        aria-describedby="emailHelp"
        placeholder="Segundo nombre"
    >
    @error('cv')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="form-group">
    <label for="idpuesto" class="form-label">Puesto:</label>
    <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
    @foreach ($puestos as $puesto)
      <option value="{{$puesto->id}}">
        {{$puesto->nombredelpuesto}}
       </option>
    @endforeach
    </select>
    @error('idpuesto')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
<br>
<div class="mb-3">
    <label for="fechaingreso" class="form-label">Fecha de ingreso:</label>
    <input type="date" class="form-control" name="fechaingreso" id="fechaingreso" aria-describedby="emailHelpId" placeholder="fecha de ingreso" value="{{old('fechaingreso',$empleado->fechaingreso)}}">
    @error('fechaingreso')
     <small class="font-bold text-red">{{ $message }}</small>
    @enderror 
</div>
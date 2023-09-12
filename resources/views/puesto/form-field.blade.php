<div class="form-group">
    <label for="nombredelpuesto">Nombre del puesto</label>
    <input 
        type="text" 
        class="form-control" 
        id="nombredelpuesto"
        name="nombredelpuesto"
        value="{{old('nombredelpuesto',$puesto->nombredelpuesto)}}"
        aria-describedby="emailHelp"
        placeholder="Nombre del puesto"
    >
    @error('nombredelpuesto')
        <small class="font-bold text-red">{{ $message }}</small>
    @enderror                    
</div>
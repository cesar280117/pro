@error('jornada')
<div class="alert alert-danger mb-2">
    <span class="text-dark">La jornada laboral ya esta asiganda. Favor de corregir la hora inicial
        o la hora final.</span>
</div>
@enderror
<div class="form-group">
    <label>Turno lavoral</label>
    <select class="form-control" wire:model="turno">
        <option></option>
        <option>Diurna</option>
        <option>Nocturna</option>
        <option>Mixta</option>
    </select>
    @error('turno') <span class="text-danger">{{ $message }}</span>@enderror


</div>


<div class="form-group">
    <label>Hora inicial: {{ $hora_inicial }}</label>
    <input type="time" class="form-control" wire:model="hora_inicial" placeholder="Hora inicial de la jornada">
    @error('hora_inicial') <span class="text-danger">{{ $message }}</span>@enderror
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Hora final: {{ $hora_final }}</label>
    <input type="time" class="form-control" wire:model="hora_final" placeholder="Hora final de la jornada">
    @error('hora_final') <span class="text-danger">{{ $message }}</span>@enderror

</div>

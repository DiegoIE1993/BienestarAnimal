<form action="{{ route('registrarmascota.destroy', $item->codigo_animal) }}" method="post" style="display:inline-block;" >
    @method('DELETE')
    @csrf  
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
<form action="{{ route('razas.destroy', $raza->id) }}" method="post" style="display:inline-block;" >
    @method('DELETE')
    @csrf  
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
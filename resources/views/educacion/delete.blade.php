<form action="{{ route('educacion.destroy', $educacion->id) }}" method="post" style="display:inline-block;" >
    @method('DELETE')
    @csrf  
    <button type="submit" class="fas fa-trash-alt" style="border:none;"></button>
</form>
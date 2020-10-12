<form action="{{ route('actitudgeneral.destroy', $act->id) }}" method="post" style="display:inline-block;" >
<<<<<<< HEAD
=======

>>>>>>> 9af00a7dc944408ba359bd15af1456f0a3f6d90f
    @method('DELETE')
    @csrf  
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>

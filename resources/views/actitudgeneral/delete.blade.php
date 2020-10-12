<<<<<<< HEAD
<form action="{{ route('actitudgeneral.destroy', $act->id) }}" method="post" style="display:inline-block;" >
=======
<form action="{{ route('condiciongeneral.destroy', $con->id) }}" method="post" style="display:inline-block;" >
>>>>>>> 6e448d118c64fef02186af20882c328975d1edbf
    @method('DELETE')
    @csrf  
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>

@extends('layouts.app')

@section('content')
<h1>Registro Direccion</h1>
<form method="post" action="/cliente/direccion">
    @csrf
    <input type="text" name="direccion" placeholder="Ingrese direccion">
    <input type="hidden" name="cliente_id" value="1">
    <input type="submit" value="Guardar">
</form>
@error("direccion")
    <b style="color:red">Complete el formulario</b>
@enderror
@endsection
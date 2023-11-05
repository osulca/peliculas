@extends('layouts.app')

@section('content')
<h1>Registro Compra</h1>
<form method="post" action="/cliente/compra">
    @csrf
    <input type="text" name="descripcion" placeholder="Ingrese descripcion">
    <input type="text" name="peso" placeholder="Ingrese peso en Kg">
    <input type="hidden" name="cliente_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection
@extends('layouts.master')
@section('title')
Contacto
@endsection

@section('content')


<div class="container">
    <h2>Formulario de Contacto</h2>
    <form action="#" method="#">
        <div class="form-group">
          <label for="">Correo</label>
          <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="correo electronico">
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="telefono">
        </div>
        <div class="form-group">
          <label for="">Comentarios</label>
          <textarea class="form-control" name="" id="" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
          <button type=" button" class="btn btn-success">Enviar</button>
    </div>
    </form>

</div>
@endsection

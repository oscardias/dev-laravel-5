@extends('layouts.padrao')

@section('content')

<h1>Editar artigo</h1>

<hr>

{!! Form::open(array('url' => 'artigos/editar', 'class' => 'form-horizontal', 'role' => 'form')) !!}

<div class="form-group">
    <label for="titulo" class="col-lg-2 control-label">Título</label>
    <div class="col-lg-6">
        {!! Form::text('titulo', $artigo->titulo, array('class' => 'form-control', 'placeholder' => 'Título')) !!}
    </div>
</div>

<div class="form-group">
    <label for="conteudo" class="col-lg-2 control-label">Conteúdo</label>
    <div class="col-lg-6">
        {!! Form::textarea('conteudo', $artigo->conteudo, array('class' => 'form-control', 'placeholder' => 'Conteúdo')) !!}
    </div>
</div>

{!! Form::hidden('id', $artigo->id) !!}

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        {!! Form::submit('Salvar', array('class' => 'btn btn-primary')) !!}
        <a href="{{ url('artigos') }}" title="Cancelar" class="btn btn-default">Cancelar</a>
    </div>
</div>

{!! Form::close() !!}

@stop

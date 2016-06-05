@extends('layout')

@section('content')
<div class="container">
    <h1>
        Lista de usuario para Select (LISTS)
    </h1>
   
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::select('users', $users, 05, ['class' => 'form-control']) !!}
    </div>
    {!! Form::close() !!}

</div>  


@stop

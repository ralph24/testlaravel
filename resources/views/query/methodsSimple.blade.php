

@extends('layout')


@section('content')
      <div class="container">
<h1 class="page-header">
   {{ $title }}
</h1>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Biografia</th>
        </tr>
    <tbody>
       @include('partials.list-usersSimple')
    </tbody>
        
    </thead>
    
</table>
      </div>
@stop

@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>create new Post</h1>
        <hr>

    {{-- using the laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'tags.store')) }}

        <div class="form-group">
            {{ form::label('tagno', 'Tag Number') }}
            {{ form::text('tagno', null, array('class' => 'form-control')) }}
            <br>
            {{ form::submit('Create Department', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ form::close() }}
        </div>
        </div>
    </div>

@endsection

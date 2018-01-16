@extends('layouts.app')

@section('title', '| Department')

@section('content')
<div class="row">

    <div class="col-md-6 col-md-offset-2">

        <h1>Edit Department</h1>
        <hr>
           <Form class="form-horizontal" action="{{ url('departments', $department->id )}}" method='POST'>
        {{csrf_field()}}
            <div class="form-group">
             <label class="col-md-3 form-label">Name</label>
             <div class="col-md-9">
                <input type="text" name='name' class='form-control' value="{{ $department->name }}" required autofocus>
                <input type="hidden" name="id" class="form-control" value="{{ $department->id }}" required >
             </div>
            </div>
           
            <div class="form-group">
             <label class="col-md-3 form-label" >Department Code</label>
             <div class="col-md-9">
                <input type='text' name="code" class='form-control' value="{{ $department->code }}" required autofocus>
             </div>
            </div>

            <div class="form-group">
             <div class="col-md-offset-2 col-md-4">
               <button class='btn btn-primary'>Update</button>
             </div>
            </div>
           </div>


    </div>
    </div>
</div>

@endsection

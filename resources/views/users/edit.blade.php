@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Assign Tag No To {{$user->name }}  </h1>
        <hr>
            <Form class="form-horizontal" method="post" action="{{ route('cards.store') }}">
                 {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' :'' }}">
            <label for='name' class="col-md-4 control-label">Name</label>
            
              <div class="col-md-8">
                <input id='user_id' type="hidden" class="form-control" name="user_id" value= '{{$user->id}}' required autofoucus>
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                 @if ($errors->has('name'))
                    <span class="help-block">
                       <strong>{{ $errors->first('name') }}</strong>
                       </span>
                  @endif
                 </div>
                </div>
     
              <div class="form-group{{ $errors->has('tagno') ? ' has-error' :'' }}">
              <label for='tagno' class="col-md-4 control-label">Tag No</label>

               <div class="col-md-8">
                  <input id='tagno'type="text" class="form-control" name="tagno" value="{{ old('tagno') }}" required autofocus>
                  @if ($errors->has('tagno'))
                    <span class="help-block">
                      <strong>{{ $errors->first('tagno') }}</strong>
                    </span>
                   @endif
                 </div>
                </div>

               <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                     <button type="submit" class='btn btn-primary'>
Assign
                     </button>

                   </div>
                </div>
       </form>

    </div>
   </div>
</div>

@endsection

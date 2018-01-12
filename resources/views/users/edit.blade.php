@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Assign Tag No To {{$user->name }}  </h1>
        <hr>

<div class="col-md-12">
<div class="col-md-12 text-center" style="padding:5px; background-color:gray;margin-bottom:5px;">
<span>Cards Details</span>
</div>
<div class="col-md-6" style="border-right:ridge">
<div>Name: <strong>{{ $user->name }}</strong></div>
<div>Reg No: <strong>{{ $user->regno }}</strong></div>
<div>Department: <strong>{{ $user->department }}</strong></div>
<div>Email: <strong>{{ $user->email }}</strong></div>
</div>
<div class="col-md-6">
            <Form class="form-horizontal" method="post" action="{{ route('cards.store') }}">
                 {{ csrf_field() }}
     
              <div class="form-group{{ $errors->has('tagno') ? ' has-error' :'' }}">
              <label for='tagno' class="col-md-4 control-label">Tag No</label>

               <div class="col-md-8">
                  <input id='tagno'type="text" class="form-control" name="tagno" value="{{ old('tagno') }}" required autofocus>
                  <input id='user_id' type='hidden' class="form-control" name="user_id" value="{{ $user->id }}">
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
<hr>
<div class="text-center" style="margin:5px; color:red;"><p>Confirm User <strong>DETAILS</strong> before assigning TAG NO.</p></div>
</div>

    </div>
   </div>
</div>

@endsection

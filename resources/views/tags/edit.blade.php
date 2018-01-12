@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-12">
   @if (Auth::user()->isActive == 0 )
   <div class="col-offset-3">
    <div class="status text-center">
      Sorry!!!. You card has not been processed yet. Pleese check again later.
    </div>
   </div>
   @else 
   <div class="col-md-offset-2 col-md-6">
    <div class="text-center" style="background-color: #fff; padding:2px;">
     <h3>PERSONAL ACCESS CARD</h3>
     
    </div>
   <div class="card" style="margin-top:40px">
   <div class="col-md-12" style="background-color:white">
   <div class="col-md-12">
    <div class="col-md-8" style="border-right:ridge;">
      <div><strong>Name :</strong>{{ $card->user->name }}</div>
      <div><strong>Reg No:</strong>{{ $card->user->regno }}</div>
      <div><strong>Department:</strong>{{ $card->user->department }}</div>
      <div><strong>Phone NO: </strong>{{ $card->user->phone }}</div>

      <div><strong>Category : </strong>{{ $card->user->category}}</div>
      <div><strong>Card No: </strong> {{ $card->tagno }} </div>
   </div>
   <div class="col-md-4">
      <div class="avatar">
      <img src="/images/avatar.png" alt="Profile Photo" style=" height:100px" >
      </div>
      </div>
      </div>
      <div style="margin:-1px;">

       <img src="/images/image1.jpeg" alt="" style="height:20px; width:100%">
      </div>
    </div>
   </div>
   <div class="text-center">
    <div class="col-md-12" style="padding-top:20px;">
    <a href="{{ url('deactivat'. $card->id) }}"><span class="btn btn-danger">DEACTIVATE<span><a> 
   </div>
   </div>
   </div>
   @endif
  </div>
 </div>
</div>



@endsection

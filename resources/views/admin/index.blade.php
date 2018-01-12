@extends('layouts.admin')

@section('content')
<div class="container admincon" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="adpanel text-center">
                <div class="adheading"><h2>ADMIN DASHBOARD</h2></div>

                <div class="adbody">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>TUM RFID MANAGEMENT SYSTEM.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

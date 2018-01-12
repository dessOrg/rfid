@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="wpanel text-center">
                <div class="wheading"><h3>TUM RFID MANAGEMENT SYSTEM</h3></div>

                <div class="wbody">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome TO RFID! World!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-10 " style="margin-bottom:10px;">

                <div class="col-md-12">

                <h1>Create New Department</h1>
                <hr>

            {{-- Using the Laravel HTML Form Collective to create our form --}}
                {{ Form::open(array('route' => 'departments.store')) }}

                <div class="form-group">
                  <div class="col-md-4">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                  </div>
                  <div class="col-md-4">
                    {{ Form::label('code', 'Department Code') }}
                    {{ Form::text('code', null, array('class' => 'form-control')) }}
                  </div>
                  <div class="col-md-4" style="padding-top:20px;">
                    {{ Form::submit('Create Department', array('class' => 'btn btn-success btn-lg btn-block')) }}
                  </div>
                    {{ Form::close() }}
                </div>
                </div>
            </div>
            <br>
            <br>
            <hr>

         <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Departments</h3></div>

                        <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Code</th>
                                          <th>Name</th>
                                          <th>Operation</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach ($dept as $key)
                                      <tr>

                                          <td>{{ $key->code }}</td>
                                          <td>{{ $key->name }}</td>

                                          <td>
                                          <a href="{{route ('departments.edit', $key->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                        </td>
                                      </tr>
                                      @endforeach
                                  </tbody>

                              </table>
                          </div>
                        </div>
                    </div>
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
@endsection

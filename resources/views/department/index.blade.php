@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Departments</h3></div>
                    <div class="panel-heading"></div>

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
                                          <a href="{{ URL::to('department/'.$key->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

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

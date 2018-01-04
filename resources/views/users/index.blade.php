@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-5 col-md-offset-3" style="margin-bottom:10px;">
          <div class="col-md-2 col-xs-12 pull-right">
            <a href="{{ route('users.create') }}">
               <button class="btn btn-warning"><i class="fa fa-plus"></i>Create Departments</button></a>
         </div>
         </div>
         <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Registered Users</h3></div>

                        <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Reg No</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Phone NO</th>
                                          <th>Department</th>
                                          <th>Role</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach ($users as $key)
                                      <tr>

                                          <td>{{ $key->regno }}</td>
                                          <td>{{ $key->name }}</td>
                                          <td>{{ $key->email }}</td>
                                          <td>{{ $key->phone }}</td>
                                          <td>{{ $key->department }}</td>
                                          <td>{{ $key->role }}</td>

                                          <td>
                                          <a href="{{route ('users.edit', $key->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

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

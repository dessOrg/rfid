@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-5 col-md-offset-3" style="margin-bottom:10px;">
          <div class="col-md-2 col-xs-12 pull-right">
           
         </div>
         </div>
         <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Registered Users Without RFID Cards</h3></div>

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
                                          <th>Action</th>
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
                                                                                                      
                                           <td>
                                          <a href="{{route ('users.show', $key->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Assign Tag</a>

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


         <div class="col-md-10 col-md-offset-1">
                                                                                                                  
                <div class="panel panel-default">                                                                                                                  
                    <div class="panel-heading"><h3>Users With RFID Cards</h3></div>                                                                            
                    <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Reg No</th>
                                          <th>Name</th>
                                          <th>Department</th>
                                          <th>Category</th>
                                          <th>Card No </th>
                                          <th>Status </th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach ($cards as $key)
                                      <tr>

                                          <td>{{ $key->user->regno }}</td>
                                          <td>{{ $key->user->name }}</td>
                                          <td>{{ $key->user->department }}</td>
                                          <td>{{ $key->user->category }}</td>
                                          <td>{{ $key->tagno }} </div>                
                                          <td>{{ $key->status }} </div>
                                          <td><a href="{{ url('card'. $key->id) }}"><span class="btn btn-info">View</span></a></td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                                 </table>
                               </div>
                              </div>
                         </div>
                       </div>
                    </div>

</div>
</div>

@endsection

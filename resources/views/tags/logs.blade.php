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
                                          <th>#</th>
                                          <th>Reg No</th>
                                          <th>Category</th>
                                          <th>Card No</th>
                                          <th>Date</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                  @foreach ($logs as $key)
                                         
                                       <tr>

                                          <td>{{ $key->id }}</td>
                                          <td>{{ $key->card->user->regno }}</td>
                                          <td>{{ $key->card->user->category }}</td>
                                          <td>{{ $key->card->tagno }}</td>
                                          <td>{{ $key->created_at }}</td>
                                                                                                      
                                           

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
</div>

@endsection

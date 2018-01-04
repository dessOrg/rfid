@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-5 col-md-offset-3" style="margin-bottom:10px;">
          <div class="col-md-2 col-xs-12 pull-right">
 
              <a href="{{ route('tags.create') }}"><span class="btn btn-warning">create tag</span></a>
         </div>         

        </div>
       </div>
         </div>
         <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>registered Tags Numbers</h3></div>
                    
                        <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Tag Number</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach ($tags as $key)
                                      <tr>

                                          <td>{{ $key->tagno }}</td>
                                          <td>{{ $key->status }}</td>

                                          <td>
                                          <a href="{{route ('tags.edit', $key->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

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

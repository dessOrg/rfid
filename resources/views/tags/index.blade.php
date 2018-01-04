@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-12 " style="margin-bottom:10px;">
          <div class="col-md-12 col-xs-12 ">

            <div class="col-md-8 col-md-offset-2">

            <h1>create new Tag NO</h1>
            <hr>

        {{-- using the laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'tags.store')) }}

            <div class="form-group">
              <div class="col-md-2">
                {{ form::label('tagno', 'Tag Number') }}
              </div>
              <div class="col-md-6">
                {{ form::text('tagno', null, array('class' => 'form-control')) }}
                {{ form::hidden('status', '0', array('class' => 'form-control')) }}
              </div>
              <div class="col-md-4">
                {{ form::submit('Create ', array('class' => 'btn btn-success btn-lg btn-block')) }}
              </div>
                {{ form::close() }}
            </div>
            </div>
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

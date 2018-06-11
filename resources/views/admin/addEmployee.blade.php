@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"style="margin-top:60px">
            <div class="panel panel-default">
                <div class="panel-heading" >Add Employee</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/addEmployee" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('frist_name') ? ' has-error' : '' }}">
                            <label for="frist_name" class="col-md-4 control-label">frist Name</label>

                            <div class="col-md-6">
                                <input id="frist_name" type="text" class="form-control" name="frist_name" value="{{ old('frist_name') }}" required autofocus>

                                @if ($errors->has('frist_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frist_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('frist_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">image</label>

                            <div class="col-md-6">
                                <input id="image" type="file"  name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                            <label for="job" class="col-md-4 control-label">job</label>

                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control" name="job" value="{{ old('job') }}" required autofocus>

                                @if ($errors->has('job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">user_id</label>

                            <div class="col-md-6">

                              <select name="user_id">
                                  @foreach ($uid as  $value)
                          <option value="{{$value->id}}">{{$value->user_name}}</option>

                               @endforeach
                              </select>
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                              <select name="status">
                          <option value="Active">Active</option>
                         <option value="NotActive">NotActive</option>
                              </select>
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                          <!--our form-->
                          <h2>Chosen Location</h2>
                          <div id="map"></div>


                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                              <input type="text" id="lat" readonly="yes" class="form-control" name="lat"placeholder="latitude">
                              <input type="text" id="lng" readonly="yes" class="form-control" name="lng"placeholder="lng">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Add">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

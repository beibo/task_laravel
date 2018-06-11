
@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1" style="margin-top:70px;">
            <div class="panel panel-default">
                <div class="panel-heading">Employee</div>
                <div class="panel-body">



<div class="panel panel-default" style="margin-top:20px;">
<!-- Default panel contents -->
    <!-- Table -->
    <table class="table table-striped">
      <caption>Users decative: </caption>
      <thead>
        <tr>
          <th>Frist Name</th>
          <th>Last Name</th>
          <th>image</th>
          <th>job</th>
          <th>status</th>
          <th>action</th>


        </tr>
      </thead>
      <tbody>




@foreach ($emp as  $value)
<tr>



<td>{{$value->frist_name}}</td>
<td>{{$value->last_name}}</td>
<td><img src="{{Storage::disk('local')->url($value->image)}}" class="img" style="width:100px;height:100px;border-radius:20px"/></td>
<td>{{$value->job}}</td>
<td>{{$value->status}}</td>
<td><a href="/edit/{{$value->id}}"class="btn btn-success">Edit</a> <a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a><td>


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
@endsection

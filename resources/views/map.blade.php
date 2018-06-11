@extends("layouts.master")
@section('content')
<div class="container">
<div class="rows">
<div id="divmap">
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>

        <!--map div-->
        <div id="map"></div>

        <!--our form-->
        <h2>Chosen Location</h2>
				<form class="form-horizontal" method="POST" action="/addLocation">
						{{ csrf_field() }}
            <input type="text" id="lat" readonly="yes" class="form-control"><br>
            <input type="text" id="lng" readonly="yes" class="form-control">
						<button type="submit" class="btn btn-primary"> add location </button>

        </form>

        <script type="text/javascript" src="map.js"></script>
			</div>
</div>
</div>



@endsection

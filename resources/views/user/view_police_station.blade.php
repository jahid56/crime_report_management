@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <br>
    <div class="col-md-6 col-md-offset-3" style="height:450px;">



  <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  
  
  


    @foreach($results as $key => $value)

    <div id="map" style="width:60%;height:180px;"></div>
    <br>
    <script>
      var map;
      

        function initMap() {
        var myLatLng = {lat: {{ $value->lat }}, lng: {{ $value->lon }}};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ6a69Apj68JRmMyMxV9rPJwZGtKtH74w&callback=initMap"
    async defer></script>

    <b>{{ $value->area }}</b><br>
    <b>Address:&nbsp;&nbsp;</b>{{ $value->address }}<br>
    <b>Duty Officer:&nbsp;&nbsp;</b>{{ $value->dutyofficer }}<br>
    <b>DMP:&nbsp;&nbsp;</b>{{ $value->dmp }}<br>
    <b>T&T:&nbsp;&nbsp;</b>{{ $value->tnt }}<br>
    <b>Cell:&nbsp;&nbsp;</b>{{ $value->cell }}<br><br>
    <b>Inspector Investigation Cell:&nbsp;&nbsp;</b>{{ $value->inspectorinvestigationcell }}<br><br>
    <b>Officers In charge:</b><br>
    <b>DMP:&nbsp;&nbsp;</b>{{ $value->inchargedmp }}<br>
    <b>Cell:&nbsp;&nbsp;</b>{{ $value->inchargecell }}<br>
    <b>Fax:&nbsp;&nbsp;</b>{{ $value->inchargefax }}<br>
    <b>Email:&nbsp;&nbsp;</b>{{ $value->inchargeemail }}

    @endforeach

    </div>

   	</div>
</div>
	<br>
		<br>
			<br>

@include('footer')
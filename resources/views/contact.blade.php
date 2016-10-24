@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center; font-family: Bernard MT Condensed;">Contact US</h3>
            <div class="panel panel-primary">
            
            <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(24.3688,88.6403);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

            
           <div class="row">
            <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Location</strong></h2>
                            <div id="googleMap" style="width:100%;height:380px;"></div>  
                          <br>
                        </div>        
                    </div>
              </div>                 
           </div> 
           <br>
           <center><p>
           	Rajshahi Metropolitan Police Headquarters<br>

			Kazihata, Rajshahi-6000<br>

			Phone: 0721-775649<br>

			Fax:0721-774760<br>

			E-mail: dchqrmp@police.gov.bd<br>

			Website: www.rmp.gov.bd<br>
           </p></center>


         	</div>
            </div>
        </div>
    </div>

@include('footer')
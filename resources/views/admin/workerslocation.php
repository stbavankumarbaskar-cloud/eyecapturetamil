<!DOCTYPE html>
<html>
<head>
	<title>Worker Locations | Admin</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/panel_assets/plugins/fontawesome-free/css/all.min.css');?>">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/panel_assets/dist/css/adminlte.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/panel_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<style type="text/css">
		.text-center {
    width: 222px;
    text-align: center!important;
    height: 208px;
}
	</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
	 <?php include APPPATH.'views/admin/includes/header.php';?>
	<?php include APPPATH.'views/admin/includes/sidebar.php';?>
  	<div class="content-wrapper">
  		<div class="content-header">
	      	<div class="container-fluid">
		        <div class="row mb-2">
			        <div class="col-sm-6">
			            <h1 class="m-0 text-dark">Worker Locations</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard');?>">Dashboard</a></li>
			              <li class="breadcrumb-item active">Worker Locations</li>
			            </ol>
			        </div>
		        </div>
	      	</div>
	    </div>
	
	    <div id="map" style="width: 100%;height: 550px;"></div>
	    
  </div>


	<?php include APPPATH.'views/admin/includes/footer.php';?>
	<script src="<?= base_url('assets/panel_assets/plugins/jquery/jquery.min.js');?>"></script>
	<script src="<?= base_url('assets/panel_assets/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
	<script src="<?= base_url('assets/panel_assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
	<script src="<?= base_url('assets/panel_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>

	<script src="<?= base_url('assets/panel_assets/dist/js/adminlte.js');?>"></script>
	<script src="<?= base_url('assets/panel_assets/dist/js/demo.js');?>"></script>
	
	<script type="text/javascript">
		
function initialize() {



$.ajax({
    type: "POST",
    url: "./WorkersLocation/WorkersLoc",
   dataType: "json",
    success: function(data){
    	// alert(data[2]);
      	var map;
var bounds = new google.maps.LatLngBounds();
var mapOptions = {
     mapTypeId: 'roadmap',
   streetViewControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
};
                 
// Display a map on the page
map = new google.maps.Map(document.getElementById("map"), mapOptions);
map.setTilt(45);
 
// Multiple Markers
var markers = data;
console.log(markers);
  
 var infoWindowContent = "sdfsd";       
     
// Display multiple markers on a map
var infoWindow = new google.maps.InfoWindow(), marker, i;
 
// Loop through our array of markers &amp; place each one on the map  
for( i = 0; i < markers.length; i++ ) {
    var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
    bounds.extend(position);
    marker = new google.maps.Marker({
        position: position,
        icon: '../assets/front/icon/bike.svg',
        map: map,

        title: markers[i][0]
    });
     
    // Each marker to have an info window    
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infoWindow.setContent(' <div class="text-center"><img src="../assets/front/images/profile/'+markers[i][3]+'"style="border-radius:50px;width: 100px;height: 100px;"><h5 style="margin-top:10px;">Detail</h5><table align="center"><tr><td>Name</td><td>'+markers[i][2]+'</td></tr><tr><td>Email</td><td>'+markers[i][4]+'</td></tr><tr><td>Mobile No</td><td>'+markers[i][5]+'</td></tr></table></div>');
            infoWindow.open(map, marker);
        }
    })(marker, i));
 
    // Automatically center the map fitting all markers on the screen
    map.fitBounds(bounds);
}
 
// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
    this.setZoom(5);
    google.maps.event.removeListener(boundsListener);
});
  },error: function(){
    alert('Error');
  } 
});
}

	</script>

 <script src="https://maps.google.com/maps/api/js?key=AIzaSyBOQMDDOsJA0uHTqXTDHUogDJfaTST7hNQ&callback=initialize"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('panel_assets/plugins/fontawesome-free/css/all.min.css')}}">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{url('panel_assets/dist/css/adminlte.min.css')}}">
	<link rel="stylesheet" href="{{url('panel_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{url('panel_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('panel_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  @include('admin/includes/header')
  @include('admin/includes/sidebar')


  	<div class="content-wrapper">
  		<div class="content-header">
	      	<div class="container-fluid">
		        <div class="row mb-2">
			        <div class="col-sm-6">
			            <h1 class="m-0 text-dark">Dashboard</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="#">Home</a></li>
			              <li class="breadcrumb-item active">Dashboard v1</li>
			            </ol>
			        </div>
		        </div>
	      	</div>
	    </div>
	    <section class="content">
      		<div class="container-fluid">
    			<div class="row">
            
          		<!--	<div class="col-lg-3 col-6">
            			<div class="small-box bg-info">
              				<div class="inner">
                				<h3>150</h3>
                				<p>New Orders</p>
              				</div>
				            <div class="icon">
				                <i class="ion ion-bag"></i>
				            </div>
              				<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            			</div>
          			</div>
			        <div class="col-lg-3 col-6">
			            <div class="small-box bg-success">
				            <div class="inner">
				                <h3>53<sup style="font-size: 20px">%</sup></h3>

				                <p>Bounce Rate</p>
				            </div>
				            <div class="icon">
				                <i class="ion ion-stats-bars"></i>
				            </div>
				           	<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			        </div>
		          	<div class="col-lg-3 col-6">
			            <div class="small-box bg-warning">
			              	<div class="inner">
				                <h3>44</h3>

				                <p>User Registrations</p>
			              	</div>
			              	<div class="icon">
			                	<i class="ion ion-person-add"></i>
			              	</div>
			              	<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
		          	</div>
			        <div class="col-lg-3 col-6">
			            <div class="small-box bg-danger">
			              	<div class="inner">
			                	<h3>65</h3>

			                	<p>Unique Visitors</p>
			              	</div>
			              	<div class="icon">
			                	<i class="ion ion-pie-graph"></i>
			              	</div>
			              	<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			        </div>-->
			    </div>
			</div>
		</section>
		<section class="content">
      		<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        	<div class="row">
          
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0<sup style="font-size: 20px"></sup></h3>

                <p>News</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo count($admins)?></h3>

                <p>Sub Admin's</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
       		 </div>
        
     	 </div>
    </section>

    
    

  



  	</div>
  	@include('admin/includes/footer')

	<script src="{{url('panel_assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{url('panel_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script src="{{url('panel_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('panel_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('panel_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{url('panel_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{url('panel_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{url('panel_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<script src="{{url('panel_assets/dist/js/adminlte.js')}}"></script>
	<script src="{{url('panel_assets/dist/js/demo.js')}}"></script>
  <script type="text/javascript">
   
    $(document).ready(function() {
    var table = $('#menus').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
  </script>

</body>
</html>
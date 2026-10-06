<!DOCTYPE html>
<html>
<head>
	<title>Add Admin | Admin</title>
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

  @include('admin/includes/header');
  @include('admin/includes/sidebar');

  	<div class="content-wrapper">
  		<div class="content-header">
	      	<div class="container-fluid">
		        <div class="row mb-2">
			        <div class="col-sm-6">
			            <h1 class="m-0 text-dark">Add Sub Admin</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			               <li class="breadcrumb-item"><a href="{{url('admin/SubAdmin')}}">Sub Admins</a></li>
			              <li class="breadcrumb-item active">Add Sub Admin</li>
			            </ol>
			        </div>
		        </div>
	      	</div>
	    </div>
	    <section class="content">
      		<div class="container-fluid">
    			<div class="row">
    				
					<div class="col-md-12">  				
	          			<div class="col-md-12">
				            <div class="card card-primary">
					            <div class="card-header">
					                <h3 class="card-title">Add Sub Admin
						            </h3>
					            </div>
					            <form role="form" method="POST" action="{{url('addSubAdmin')}}" enctype="multipart/form-data">
					            	@csrf
					                <div class="card-body">
				                  		<div class="row">
					                  		<div class="form-group col-md-6">
						                    	<label>Email</label>
						                    	<input type="text" class="form-control" id="email" name="email" placeholder="Email">
						                    	
						                    </div>
						                    <div class="form-group col-md-6">
						                    	<label>Admin Type</label>
						                    	<select class="form-control" id="type" name="type">
						                    		<option value="">Select Type</option>
						                    		<!-- <option value="super-admin">Super Admin</option> -->
						                    		<option value="sub-admin">Sub Admin</option>
						                    	</select>
						                    	
						                    </div>
						                    <div class="form-group col-md-6">
						                    	<label>Name</label>
						                    	<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						                    	
						                    </div>
						                    <div class="form-group col-md-6">
						                    	<label>District</label>
						                    	<select class="form-control" id="district" name="district">

						                    		<option value="">Select Type</option>
						                    		<?php 
						                    		foreach ($category as $district) {
						                    		
						                    		?>
						                    		<option value="<?php echo $district->id?>"><?php echo $district->category_name?></option>
						                    	<?php } ?>
						                    	</select>
						                    	
						                    </div>
						                    
						                    <div class="form-group col-md-6">
						                    	<label>Admin Image</label>
						                    	<input type="file" class="form-control" id="image" name="image">
						                    </div>
						                    <div class="form-group col-md-6">
						                    	<label>Password</label>
						                    	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						                    	
						                    </div>
						                    <div class="form-group col-md-6">
						                    	<label>Confirm Password</label>
						                    	<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
						                    	
						                    </div>
						                     <div class="form-group col-md-6">
						                    	<label>Status</label>
						                    	<select class="form-control" id="status" name="status">
						                    		<option value="">Select</option>
						                    		<option value="1">Active</option>
						                    		<option value="0">In Active</option>
						                    	</select>
						                    	
						                    </div>
						                </div>
					                </div>
					                <div class="card-footer">
					                  	<button type="submit" class="btn btn-primary">Add Sub Admin</button>
					                </div>
					            </form>
				            </div>
				        </div>
				    </div>
			    </div>
			</div>
		</section>

  	</div>
  		@include('admin/includes/footer');

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
</body>
</html>
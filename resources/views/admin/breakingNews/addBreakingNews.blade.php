<!DOCTYPE html>
<html>
<head>
	<title>Add News | Admin</title>
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
			            <h1 class="m-0 text-dark">Add Breaking News</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item"><a href="{{url('admin/Plan')}}">Breaking Newss</a></li>
			              <li class="breadcrumb-item active">Add Breaking News</li>
			            </ol>
			        </div>
		        </div>
	      	</div>
	    </div>
	    <section class="content">
      		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-12">    				
						<?php
						if(!empty(Session::get('error_message'))){
							?>
							<div class="col-md-12">
								<div class="alert alert-danger alert-dismissible">
				                  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                  		<h5><i class="icon fas fa-check"></i> Alert!</h5>
				                  	<?php echo Session::get('error_message');?>
				                </div>
							</div>
							<?php
						}
						?>    
						<?php
						if(!empty(Session::get('success_message'))){
							?>
							<div class="col-md-12">
								<div class="alert alert-success alert-dismissible">
				                  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                  		<h5><i class="icon fas fa-check"></i> Alert!</h5>
				                  	<?php echo Session::get('success_message');?>
				                </div>
							</div>
							<?php
						}
						?>
					</div>
					<div class="col-md-12">  				
	          			<div class="col-md-6">
				            <div class="card card-primary">
					            <div class="card-header">
					                <h3 class="card-title">Add Breaking News</h3>
					            </div>
					            <form role="form" method="POST" action="{{url('addBreakingNews')}}">
					            	@csrf
					                <div class="card-body">
					                  	<div class="form-group">
					                    	<label>Breaking News</label>
					                    	<input type="text" class="form-control" id="news" name="news" placeholder="Breaking News ">
					                    	
						                </div>
						                <div class="form-group row">
						                	<div class="col-md-6">
						                    	<label>Link</label>
						                    	<input type="text" class="form-control" id="link" name="link" placeholder="Enter The Link">
						                    	
						                    </div>
						                    <div class="col-md-6">
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
					                  	<button type="submit" class="btn btn-primary">Add Breaking News</button>
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
	<script type="text/javascript">
		 $(function () {
		 	$('.select2').select2({
		      theme: 'bootstrap4'
		    });

		    $("#menu").keyup(function(){
			    var Text = $(this).val();
			    Text = Text.toLowerCase();
			    Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
			    $("#slug").val(Text);        
			});
		  });
	</script>
</body>
</html>
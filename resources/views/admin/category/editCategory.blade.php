<!DOCTYPE html>
<html>
<head>
	<title>Add Category | Admin</title>
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
			            <h1 class="m-0 text-dark">Add Category</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item"><a href="{{url('admin/Category')}}">Categories</a></li>
			              <li class="breadcrumb-item active"><?php echo $categoryDet->category_name;?> 's Edit</li>
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
					<div class="col-md-6">  
			            <div class="card card-primary">
				            <div class="card-header">
				                <h3 class="card-title">Edit Category</h3>
				            </div>
				            <form role="form" method="POST" action="{{url('editCategory/'.$categoryDet->id)}}"  enctype="multipart/form-data">
				            	@csrf
				                <div class="card-body">
				                  	<div class="row">
				                  		<div class="col-md-12">
				                  			<div class="form-group">
				                  				<label>Parent Category</label>
				                  				<select name="parent" id="parent" class="form-control">
				                  					<option value="">Select</option>
				                  					<option value="0" <?php if($categoryDet->parent == '0') echo "selected";?>>Main Category</option>
				                  					<?php
				                  					if(!empty($categories)){
				                  					foreach ($categories as $category) {
				                  					?>
				                  					<option value="<?php echo $category->id?>" <?php if($categoryDet->parent == $category->id) echo "selected";?>><?php echo $category->category_name;?></option>
				                  					<?php
				                  					}
				                  					}
				                  					?>
				                  				</select>
				                  				
				                  			</div>
				                  			<div class="form-group">
				                  				<label>Category Name</label>
				                  				<input type="text" name="category_name" id="category_name" class="form-control"placeholder="Enter Name" value="<?php echo $categoryDet->category_name;?>">
				                  				
				                  			</div>
				                  			
				                  			<div class="form-group">
				                  				<label>Status</label>
				                  				<select class="form-control" name="status" id="status">
				                  					<option value="">Select</option>
				                  					<option value="1" <?php if($categoryDet->status == '1') echo "selected";?>>Active</option>
				                  					<option value="0" <?php if($categoryDet->status == '0') echo "selected";?>>In Active</option>
				                  				</select>
				                  				
				                  			</div>
				                  		</div>
				                  		
				                  	</div>
				                </div>
				                <div class="card-footer">
				                  	<button type="submit" class="btn btn-primary">Update Category</button>
				                </div>
				            </form>
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
		    $('#parent').select2({
		      theme: 'bootstrap4'
		    });
		    $('.textarea').summernote();
		  });
	</script>
</body>
</html>
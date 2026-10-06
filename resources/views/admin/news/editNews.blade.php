<?php Use App\Models\Category; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit News | Admin</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('panel_assets/plugins/fontawesome-free/css/all.min.css')}}">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{url('panel_assets/dist/css/adminlte.min.css')}}">
	<link rel="stylesheet" href="{{url('panel_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  	<link rel="stylesheet" href="{{url('panel_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  	<link rel="stylesheet" href="{{url('panel_assets/plugins/select2/css/select2.min.css')}}">
  	<link rel="stylesheet" href="{{url('panel_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  	<link rel="stylesheet" href="{{url('panel_assets/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{url('panel_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
			            <h1 class="m-0 text-dark">Edit News</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item"><a href="{{url('admin/Coupons')}}">News</a></li>
			              <li class="breadcrumb-item active">Edit News</li>
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
			            <div class="card card-primary">
				            <div class="card-header">
				                <h3 class="card-title">Edit Coupon</h3>
				            </div>
				            <form role="form" method="post" action="{{url('editNews/'.$news->id)}}"  enctype="multipart/form-data">
				            	@csrf
				                <div class="card-body">
				                  	<div class="row"> 
				                  		<div class="col-md-5">

				                  			<div class="form-group">
				                  				<label>Parent Category</label>
				                  				<select name="category" id="category" class="form-control">
				                  					<option value="">Select</option>
				                  					<option value="0" <?php if($news->category == '0') echo "selected";?>>Main Category</option>
				                  					<?php
				                  					if(!empty($categories)){
				                  					foreach ($categories as $category) {
				                  					?>
				                  					<option value="<?php echo $category->id?>" <?php if($news->category == $category->id) echo "selected";?>><?php echo $category->category_name;?></option>
				                  					<?php
				                  					}
				                  					}
				                  					?>
				                  				</select>
				                  				
				                  			</div>
				                  			<div class="form-group">
				                  				<label>News Sub Categories</label>
												<select name="subcategory" id="subcategory" class="form-control" readonly>
													<option value="0">Select Category</option>
												</select>
												
											</div>
				                  			<div class="form-group">
				                  				<label>News Title</label>
				                  				<input type="text" name="News_name" id="News_name" class="form-control"placeholder="News Title" value="<?php echo $news->title?>">
				                  				
				                  			</div>
				                  			
				                  			<div class="form-group">
				                  				<label>Image</label>
				                  				<input type="file" name="image" id="image" class="form-control"placeholder="Enter Percentage">
				                  				
				                  				<?php
						                    	if(!empty($news->image)){
						                    		?>
						                    		<img src="{{asset('upload/admins/news/'.$news->image)}}" width="100px"> | 
						                    		<a href="{{url('admin/Dashboard/deleteAdminImage/'.$news->id)}}"><i class="fa fa-trash"></i> Delete</a>
						                    		<?php
						                    	}
						                    	?>
				                  			</div>
				                  			
				                  			<div class="form-group ">
				                  				<label>Status</label>
				                  				<select class="form-control" name="status" id="status">
				                  					<option value="">Select</option>
				                  					<option value="1" <?php if($news->status == '1') echo "selected";?>>Active</option>
				                  					<option value="0" <?php if($news->status == '0') echo "selected";?>>In Active</option>
				                  				</select>
				                  				
				                  			</div>
				                  		</div>
				                  		<div class="col-md-7">
				                  			<div class="form-group">
				                  				<label>Short Description</label>
				                  				<textarea class="form-control " name="short_description" id="short_description" value="<?php echo $news->short_description?>" placeholder="Short Description" rows="6"><?php echo $news->short_description?></textarea>
				                  				
				                  			</div>
				                  			<div class="form-group">
				                  				<label>News Detail</label>
				                  				<textarea class="form-control textarea" name="description" id="description" placeholder="New Detail" rows="6" value="<?php echo htmlspecialchars($news->description) ?>"><?php echo htmlspecialchars($news->description) ?></textarea>
				                  			</div>
				                  		</div>
				                  		<div class="form-group col-md-6">
				                  			<div class="form-check form-switch ">
				                  				<?php
				                  					if($news->important == 'yes')
				                  					{
				                  				?>
				                  					<input class="form-check-input" type="checkbox" id="important" name="important" value="yes" checked>
				                  				<?php }else{
				                  				?> 
				                  					<input class="form-check-input" type="checkbox" id="important" name="important" value="" >
				                  				<?php
				                  				}
				                  				?>
									      		<input class="form-check-input" type="checkbox" id="important" name="important" value="yes" checked>
									      		<label class="form-check-label" for="important">Important News (Y / N)</label>
									    	</div>
									    </div>
				                  	</div>
				                </div>
				                <div class="card-footer">
				                  	<button type="submit" class="btn btn-primary" id="newsupdate" onclick="updateNews()">Update News</button>
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
	<script src="{{url('panel_assets/plugins/select2/js/select2.full.min.js')}}"></script>
	<script src="{{url('panel_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<script type="text/javascript">
	   // function updateNews(argument) {
    //         $('#newsupdate').prop("disabled", true);
    //     }
		 $(function () {
		    $('#parent').select2({
		      theme: 'bootstrap4'
		    });
		    $('.textarea').summernote();
		  });
	</script>
</body>
</html>
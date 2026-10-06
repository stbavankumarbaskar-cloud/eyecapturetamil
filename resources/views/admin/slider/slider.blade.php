<?php Use App\Models\Category; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Slider | Admin</title>
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
			            <h1 class="m-0 text-dark">Slider</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item active">Slider</li>
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
          				<div class="card">
				            <div class="card-header">
				                <h3 class="card-title text-uppercase" style="line-height: 2.5em;font-weight: 700;">Slider</h3>
				                <span style="float:right;"><a href="{{url('addSlider')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Slider</a></span>
				            </div>
				            <div class="card-body">		            	
				                <table id="categories" class="table table-bordered table-striped">
				                  	<thead>
					                  	<tr>
						                    <th>Id</th>
						                    <th>Title</th>
						                    <th>Image</th>
						                    <th>Button Text</th>
						                    <th>Status</th>
						                    <th>Action</th>
					                  	</tr>
				                  	</thead>
				                  	<tbody>
				                  		<?php
				                  		if(!empty($slider)){
				                  			$count = 1;
					                  		foreach ($slider as $sliders) 
					                  		{
					                  		?>
						                  	<tr>
							                    <td><?php echo $count;?></td>
							                    
							                    	<td><?php echo $sliders->title?></td>
							                    
							                    <td>
							                    	<?php
							                    	if(!empty($sliders->image)){
							                    	?>
							                    	<img src="{{url('assets/website/images/slider/'.$sliders->image)}}" width="80px"> 
							                    	<?php
							                    	}else{
							                    	?>
							                    	<img src="{{url('assets/website/images/slider/noimage.png')}}" width="80px"> 
							                    	<?php
							                    	}
							                    	?>
							                    </td>
							                    <td>
							                    	<?php echo $sliders->button_txt;?>
							                    </td>
							                    
							                    <td>
							                    	<?php 
							                    	if($sliders->status == 1){
							                    		?>
							                    		
								                    		<span class="badge badge-success">Active</span>
							                    		<?php
							                    	}else{
							                    		?>
							                    		
								                    		<span class="badge badge-danger">In Active</span>
								                    	
							                    		<?php
							                    	}
							                    	?>                    	
							                    </td>
							                    <td>
							                    	<a href="#" target="_blank"><i class="fa fa-edit"></i></a>
							                    	|
							                    	<a href="{{url('admin/Slider/delete/'.$sliders->id)}}"><i class="fa fa-trash"></i></a>
							                    </td>
						                  	</tr>
						                <?php 
						            		$count++;
						            		}
						            	}else{
						            		?>
						            		<tr>
						            			<td>No Sliders Found</td>
						            		</tr>
						            		<?php
						            	}?>
				                  	</tbody>
				                </table>					            
				            </div>
            			</div>
          			</div>
			    </div>
			</div>
		</section>
  	</div>

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
		
		$(document).ready(function() {
    var table = $('#categories').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
	</script>

</body>
</html>
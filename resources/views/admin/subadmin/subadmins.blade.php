<!DOCTYPE html>
<html>
<head>
	<title>Sub Admin | Admin</title>
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
			            <h1 class="m-0 text-dark">Sub Admins</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item active">Sub Admins</li>
			            </ol>
			        </div>
		        </div>
	      	</div>
	    </div>
	    <section class="content">
      		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-12">
    					
    				</div>
          			<div class="col-md-12">
          				<div class="card">
				            <div class="card-header">
				                <h3 class="card-title text-uppercase" style="line-height: 2.5em;font-weight: 700;">Sub Admins</h3>
				                <span style="float:right;"><a href="{{url('addSubAdmin')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Sub Admin</a></span>
				            </div>
				            <div class="card-body">		            	
				                <table id="categories" class="table table-bordered table-striped">
				                  	<thead>
					                  	<tr>
						                    <th>Id</th>
						                    <th>Type</th>
						                    <th>Image</th>
						                    <th>Name</th>
						                    <th>Email</th>
						                    <th>Status</th>
						                    <th>Action</th>
					                  	</tr>
				                  	</thead>
				                  	<tbody>
				                  		<?php
				                  		if(!empty($admins)){
				                  			$count = 1;
					                  		foreach ($admins as $admin) 
					                  		{
					                  		?>
						                  	<tr>
							                    <td><?php echo $count;?></td>
							                    <td>
							                    	<?php echo $admin->type;?>
							                    </td>
							                    <td>
							                    	<?php
							                    	if(!empty($admin->image)){
							                    	?>
							                    	<img src="{{url('upload/admins/'.$admin->image)}}" width="50px"> 
							                    	<?php
							                    	}else{
							                    	?>
							                    	<img src="{{url('assets/front_assets/images/profile/adminicon.png')}}" width="50px"> 
							                    	<?php
							                    	}
							                    	?>
							                    </td>
							                    <td>
							                    	<?php echo $admin->name;?>
							                    </td>
							                    <td>
							                    	<?php echo $admin->email;?>
							                    </td>
							                    <td>
							                    	<?php 
							                    	if($admin->status == 1){
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
							                    	<a href="{{url('admin/SubAdmin/deleteSubAdmin/'.$admin->id)}}"><i class="fa fa-trash"></i></a>
							                    </td>
						                  	</tr>
						                <?php 
						            		$count++;
						            		}
						            	}else{
						            		?>
						            		<tr>
						            			<td>No Sub Admins Found</td>
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
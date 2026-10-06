<?php Use App\Models\Team; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Point Table | Admin</title>
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
			            <h1 class="m-0 text-dark">Point Table</h1>
			        </div>
			        <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="{{url('admin/Dashboard')}}">Dashboard</a></li>
			              <li class="breadcrumb-item active">Point Table</li>
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
				                <h3 class="card-title text-uppercase" style="line-height: 2.5em;font-weight: 700;">Point Table</h3>
				                <span style="float:right; padding-left: 5px;"><a data-toggle="modal" data-target="#next_match" class="btn btn-primary"><i class="fa fa-plus"></i> Next Match</a></span>

				                <span style="float:right;"><a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-plus"></i> Add Team</a></span>

				                <span style="float:right;    padding-right: 5px;"><a data-toggle="modal" data-target="#addPointTable" class="btn btn-primary"><i class="fa fa-plus"></i> Add Point Table</a></span>
				                 <span style="float:right;    padding-right: 5px;"><a data-toggle="modal" data-target="#addSportsCategory" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a></span>
				            </div>
				            <div class="card-body">		            	
				                <table id="categories" class="table table-bordered table-striped">
				                  	<thead>
					                  	<tr>
						                    <th>Id</th>
						                    <th>Team</th>
						                    <th>Win</th>
						                    <th>Lose</th>
						                    <th>NRR</th>
						                    <th>Status</th>
						                    <th>Action</th>
					                  	</tr>
				                  	</thead>
				                  	<tbody>
				                  		<?php
				                  		if(!empty($points)){
				                  			$count = 1;
					                  		foreach ($points as $teamPoint) 
					                  		{
					                  		?>
						                  	<tr>
							                    <td><?php echo $count ?></td>
							                    <td>
							                    	<?php
							                    		$teamDet = Team::where('id',$teamPoint->team)->first();
							                    		echo $teamDet->tname;
							                    	?>
							                    </td>
							                    <td>
							                    	<?php echo $teamPoint->win;?>
							                    </td>
							                    <td>
							                    	<?php echo $teamPoint->lose;?>
							                    </td>
							                    <td>
							                    	<?php echo $teamPoint->nrr;?>
							                    </td>
							                    <td>
							                    	<?php 
							                    	if($teamPoint->status == 1){
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
							                    	<a href="{{url('admin/SubAdmin/deleteSubAdmin/'.$teamPoint->id)}}"><i class="fa fa-trash"></i></a>
							                    </td>
						                  	</tr>
						                <?php 
						            		$count++;
						            		}
						            	}else{
						            		?>
						            		<tr>
						            			<td>No Point Table Found</td>
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

  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form role="form" method="POST" action="{{url('addTeam')}}" enctype="multipart/form-data">
				@csrf
		       	 <div class="row">
	          		<div class="form-group col-md-6">
	                	<label>Category</label>
	                	<select name="sports_parent_category" id="sports_parent_category" class="form-control" onchange="getval(this);">
							<option value="0">Select Category</option>
							<?php 
								foreach ($category as $categories) {
									if($categories->parent == 0)
									{
							?>
								<option value="<?php echo $categories->id?>"><?php echo $categories->category_name?></option>
							<?php
								}
							}
							?>
						</select>
	                	
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Sub Category</label>
	                	<select name="sports_sub_category" id="sports_sub_category" class="form-control" disabled="" onchange="subcate(this);">
							<option value="0">Select Category</option>
							
						</select>
	                	
	                </div>
	                
	                <div class="form-group col-md-6">
	                	<label>Sports</label>
	                	<select name="sports_name" id="sports_name" class="form-control" disabled="" >
	                		<option value="0">Select Sports</option>
	                	</select>
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Team Name</label>
	                	<input type="text" class="form-control" id="tname" name="tname" placeholder="Name">
	                	
	                </div>
	                
	                <div class="form-group col-md-6">
	                	<label>Team Image</label>
	                	<input type="file" class="form-control" id="image" name="image">
	                </div>
	                <div class="form-group col-md-6">
                    	<label>Status</label>
                    	<select class="form-control" id="status" name="status">
                    		<option value="">Select</option>
                    		<option value="1">Active</option>
                    		<option value="0">In Active</option>
                    	</select>
                    	
                  	</div>
	                <div class="form-group col-md-12 tex-center">
	                
	                	<button type="submit" class="btn btn-primary">Add Team</button>
	                </div>
	            </div>
            </form>
	      </div>
	      <!-- <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div> -->
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="addSportsCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form role="form" method="POST" action="{{url('addSportCategory')}}" enctype="multipart/form-data">
				@csrf
		       	 <div class="row">
	          		<div class="form-group col-md-12">
	                	<label>Category</label>
	                	
          				<select name="parent" id="parent" class="form-control">
          					<option value="">Select</option>
          					<option value="0">Main Category</option>
          					<?php
          					if(!empty($category)){
          					foreach ($category as $categories) {
          					?>
          					<option value="<?php echo $categories->id?>"><?php echo $categories->category_name;?></option>
          					<?php
          					}
          					}
          					?>
          				</select>
	                	
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Sub Category</label>
	                	<input type="text" class="form-control" id="category_name" name="category_name" placeholder="Sub Category">
	                	
	                </div>
	               
	                <div class="form-group col-md-6">
                    	<label>Status</label>
                    	<select class="form-control" id="status" name="status">
                    		<option value="">Select</option>
                    		<option value="1">Active</option>
                    		<option value="0">In Active</option>
                    	</select>
                    	
                  	</div>
	                <div class="form-group col-md-6">
	                
	                	<button type="submit" class="btn btn-primary">Add Category</button>
	                </div>
	            </div>
            </form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="addPointTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Point</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      	<form role="form" method="POST" action="{{url('addPoint')}}" enctype="multipart/form-data">
				@csrf
		       	 <div class="row">
	          		<div class="form-group col-md-6">
	                	<label>Category</label>
	                	<select name="parent_category" id="parent_category" class="form-control" onchange="parentCategory(this);">
							<option value="0">Select Category</option>
							<?php 
								foreach ($category as $categories) {
									if($categories->parent == 0)
									{
							?>
								<option value="<?php echo $categories->id?>"><?php echo $categories->category_name?></option>
							<?php
								}
							}
							?>
						</select>
	                	
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Sub Category</label>
	                	<select name="sports_category" id="sports_category" class="form-control" disabled="" onchange="sportcate(this);">
							<option value="0">Select Category</option>
							
						</select>
	                	
	                </div>
	                
	                <div class="form-group col-md-6">
	                	<label>Sports</label>
	                	<select name="sports_type" id="sports_type" class="form-control" disabled="" onchange="getTeam(this);">
	                		<option value="0">Select Sports</option>
	                	</select>
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Team</label>
	                	<select name="teams" id="teams" class="form-control" disabled="" onchange="teamPoint(this);">
	                		<option value="0">Select Team</option>
	                	</select>
	                	
	                </div>
	                
	                <div class="form-group col-md-6">
	                	<label>Win</label>
	                	<input type="text" class="form-control" id="win" name="win" placeholder="Win">
	                	
	                </div>
	                <div class="form-group col-md-6">
	                	<label>Lose</label>
	                	<input type="text" class="form-control" id="lose" name="lose" placeholder="Lose">
	                	
	                </div>
	                <div class="form-group col-md-6">
	                	<label>NRR</label>
	                	<input type="text" class="form-control" id="nrr" name="nrr" placeholder="Net Run Rate">
	                	
	                </div>
	                
	               
	                <div class="form-group col-md-6" id="div_status">
                    	<label>Status</label>
                    	<select class="form-control" id="status" name="status">
                    		<option value="">Select</option>
                    		<option value="1">Active</option>
                    		<option value="0">In Active</option>
                    	</select>
                    	
                  	</div>
	                <div class="form-group col-md-6">
	                
	                	<button type="submit" class="btn btn-primary">Add Point</button>
	                </div>
	            </div>
            </form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="next_match" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Next Match</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	      	<form role="form" method="POST" action="{{url('addPoint')}}" enctype="multipart/form-data">
				@csrf
		       	 <div class="row">
	          		<div class="form-group col-md-6">
	                	<label>Category</label>
	                	<select name="parent_category" id="parent_category" class="form-control" onchange="nextmatchparentCategory(this);">
							<option value="0">Select Category</option>
							<?php 
								foreach ($category as $categories) {
									if($categories->parent == 0)
									{
							?>
								<option value="<?php echo $categories->id?>"><?php echo $categories->category_name?></option>
							<?php
								}
							}
							?>
						</select>
	                	
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Sub Category</label>
	                	<select name="Next_Match_sports_category" id="Next_Match_sports_category" class="form-control" disabled="" onchange="nextMatchsportcate(this);">
							<option value="0">Select Category</option>
							
						</select>
	                	
	                </div>
	                
	                <div class="form-group col-md-12">
	                	<label>Sports</label>
	                	<select name="Next_Match_sports_type" id="Next_Match_sports_type" class="form-control" disabled="" onchange="nextMatchgetTeam(this);">
	                		<option value="0">Select Sports</option>
	                	</select>
	                </div>

	                <div class="form-group col-md-6">
	                	<label>Team 1</label>
	                	<select name="Next_Match_teams" id="Next_Match_teams" class="form-control" disabled="" >
	                		<option value="0">Select Team</option>
	                	</select>
	                	
	                </div>
	                
	                <div class="form-group col-md-6">
	                	<label>Team 2</label>
	                	<select name="Next_Match_team2" id="Next_Match_team2" class="form-control" disabled="" >
	                		<option value="0">Select Team</option>
	                	</select>
	                	
	                </div>
	                
	               
	                <div class="form-group col-md-12" id="div_status">
                    	<label>Status</label>
                    	<select class="form-control" id="status" name="status">
                    		<option value="">Select</option>
                    		<option value="1">Active</option>
                    		<option value="0">In Active</option>
                    	</select>
                    	
                  	</div>
	                <div class="form-group col-md-6">
	                
	                	<button type="submit" class="btn btn-primary">Add Next Match</button>
	                </div>
	            </div>
            </form>
	      </div>
	      
	    </div>
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


        function getval(sel)
		{
			var mainCategory = sel.value;
			// alert(mainCategory);
			$.ajax({
	            type: "POST",
	            url: "{{url('getSubCategory')}}",
	            data: { "_token": "{{ csrf_token() }}", "mainCategory" : mainCategory },
	            success: function(data){
		            $("#sports_sub_category").html(data);
		            // alert(data);
		             $("#sports_sub_category").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function subcate(sel)
		{
			var sportsname = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getSportsName')}}",
	            data: { "_token": "{{ csrf_token() }}", "sportsname" : sportsname },
	            success: function(data){
		            $("#sports_name").html(data);
		            // alert(data);
		             $("#sports_name").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}
		
		function parentCategory(sel)
		{
			var mainCategory = sel.value;
			// alert(mainCategory);
			$.ajax({
	            type: "POST",
	            url: "{{url('getSubCategory')}}",
	            data: { "_token": "{{ csrf_token() }}", "mainCategory" : mainCategory },
	            success: function(data){
		            $("#sports_category").html(data);
		            // alert(data);
		             $("#sports_category").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function sportcate(sel)
		{
			var sportsname = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getSportsName')}}",
	            data: { "_token": "{{ csrf_token() }}", "sportsname" : sportsname },
	            success: function(data){
		            $("#sports_type").html(data);
		            // alert(data);
		             $("#sports_type").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function getTeam(sel)
		{
			var team = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getAllTeams')}}",
	            data: { "_token": "{{ csrf_token() }}", "team" : team },
	            success: function(data){
		            $("#teams").html(data);
		            // alert(data);
		             $("#teams").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function teamPoint(sel) {
			var teamname = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getTeamPoint')}}",
	            data: { "_token": "{{ csrf_token() }}", "teamname" : teamname },
	            dataType: 'json',
	            success: function(data){
					if (!$.trim(data)){

	            		$('#win').val('');
			         	$('#lose').val('');
			         	$('#nrr').val('');

	            	}else{
			         	$('#win').val(data.win);
			         	$('#lose').val(data.lose);
			         	$('#nrr').val(data.nrr);
			        }
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}


		function nextmatchparentCategory(sel)
		{
			var mainCategory = sel.value;
			// alert(mainCategory);
			$.ajax({
	            type: "POST",
	            url: "{{url('getSubCategory')}}",
	            data: { "_token": "{{ csrf_token() }}", "mainCategory" : mainCategory },
	            success: function(data){
		            $("#Next_Match_sports_category").html(data);
		            // alert(data);
		             $("#Next_Match_sports_category").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function nextMatchsportcate(sel)
		{
			var sportsname = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getSportsName')}}",
	            data: { "_token": "{{ csrf_token() }}", "sportsname" : sportsname },
	            success: function(data){
		            $("#Next_Match_sports_type").html(data);
		            // alert(data);
		             $("#Next_Match_sports_type").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}

		function nextMatchgetTeam(sel)
		{
			var team = sel.value;
			
			$.ajax({
	            type: "POST",
	            url: "{{url('getAllTeams')}}",
	            data: { "_token": "{{ csrf_token() }}", "team" : team },
	            success: function(data){
		            $("#Next_Match_teams").html(data);
		            $("#Next_Match_team2").html(data);
		            $("#Next_Match_teams").removeAttr("disabled");
		            $("#Next_Match_team2").removeAttr("disabled");
		        },error: function(){
		        	alert('Error');
		        } 
	        });
		}
		


	</script>

</body>
</html>
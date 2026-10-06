<aside class="main-sidebar sidebar-dark-primary elevation-4">
	
	<div class="sidebar">
      	<div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
	        <div class="image">
	            <a href="{{url('dashboard')}}">
		        	<?php if(!empty($user->image) && file_exists(public_path('upload/admins/'.$user->image))){ ?>
		          		<img src="{{asset('upload/admins/'.$user->image)}}" class="img-circle elevation-2" alt="User Image" style="width: 34px; height: 34px; object-fit: cover;" onerror="this.src='{{asset('images/avatar/1.jpg')}}'">
		            <?php }else{ ?>
		           		<img src="{{asset('images/avatar/1.jpg')}}" class="img-circle elevation-2" alt="User Image" style="width: 34px; height: 34px; object-fit: cover;" onerror="this.src='{{asset('assets/img/logo.jpg')}}'">
		            <?php } ?>
	            </a>
	        </div>
	        <div class="info">
	         	 <a href="{{url('dashboard')}}" class="d-block text-uppercase"><?php echo $user->name;?></a>
	        </div>
      	</div>

      	<nav class="mt-2">
	        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	        	<li class="nav-item">
	        		<?php
	        			if(Request::segment(1) == "dashboard")
	        			{
	        				$active = 'active';
	        			}else{
	        				$active = '';
	        			}

	        		?>
		            <a href="{{url('dashboard')}}" class="nav-link <?php echo $active?>">
		              <i class="nav-icon fas fa-tachometer-alt"></i>
		              <p>
		                Dashboard
		              </p>
		            </a>
		        </li>
		        <?php
		          if($user->type == 'sub-admin')
		          {
		              
		          }else{
		        ?>
		        <li class="nav-item">
	        		<?php
	        			if(Request::segment(1) == "subadmin" || Request::segment(1) == "addSubAdmin")
	        			{
	        				$active = 'active';
	        			}else{
	        				$active = '';
	        			}

	        		?>
		            <a href="{{url('subadmin')}}" class="nav-link <?php echo $active?>">
		              <i class="nav-icon fas fa-users"></i>
		              <p>
		                Sub Admins
		              </p>
		            </a>
		        </li>
		       	
                <?php } ?>
		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('admin/idcard')}}" class="nav-link">-->
		            	
		        <!--       <i class=" nav-icon fas fa-id-card-alt"></i>-->
		            
		        <!--      <p>-->
		        <!--        ID Card-->
		        <!--      </p> -->
		        <!--    </a>-->
		        <!--</li>-->
		        
		        <?php
        			if(Request::segment(1) == "categories" || Request::segment(1) == "addCategory")
        			{
        				$active = 'active';
        			}else{
        				$active = '';
        			}

        		?>
		        <li class="nav-item">
	        		
		            <a href="{{url('categories')}}" class="nav-link <?php echo $active?>">
		              <i class="nav-icon fas fa-sitemap"></i>
		              <p>
		                Categories
		              </p>
		            </a>
		        </li>
		         <li class="nav-item">
	        		<?php
	        			if(Request::segment(1) == "news" || Request::segment(1) == "addNews")
	        			{
	        				$active = 'active';
	        			}else{
	        				$active = '';
	        			}

	        		?>
		            <a href="{{url('news')}}" class="nav-link <?php echo $active?>">
		              <i class="nav-icon fas fa-user-check"></i>
		              <p>
		                News
		              </p>
		            </a>
		        </li>
		        <?php
        			if(Request::segment(1) == "breaking-news" || Request::segment(1) == "addBreakingNews")
        			{
        				$active = 'active';
        			}else{
        				$active = '';
        			}

        		?>
		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('breaking-news')}}" class="nav-link <?php echo $active?>">-->
		            	
		        <!--       <i class=" nav-icon fas fa-bolt"></i>-->
		            
		        <!--      <p>-->
		        <!--        Breaking News-->
		        <!--      </p>-->
		        <!--    </a>-->
		        <!--</li>-->
		        
		        
		        
		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('point_table')}}" class="nav-link ">-->
		        <!--      <i class="nav-icon fas fa-sitemap"></i>-->
		        <!--      <p>-->
		        <!--        Point Table-->
		        <!--      </p>-->
		        <!--    </a>-->
		        <!--</li>	-->
		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('admin/Pages')}}" class="nav-link ">-->
		        <!--      <i class="nav-icon fas fa-file-alt"></i>-->
		        <!--      <p>-->
		        <!--        Pages-->
		        <!--      </p>-->
		        <!--    </a>-->
		        <!--</li>-->

		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('slider')}}" class="nav-link ">-->
		        <!--      <i class="nav-icon fas fa-file-alt"></i>-->
		        <!--      <p>-->
		        <!--        Slider-->
		        <!--      </p>-->
		        <!--    </a>-->
		        <!--</li>	-->
		        <!--<li class="nav-item">-->
	        		
		        <!--    <a href="{{url('admin/EmailTemplate')}}" class="nav-link ">-->
		        <!--      <i class="nav-icon fas fa-sitemap"></i>-->
		        <!--      <p>-->
		        <!--        Email Template-->
		        <!--      </p>-->
		        <!--    </a>-->
		        <!--</li>	-->
		   		
		   		 <!--<li class="nav-item">-->
	        		
		      <!--      <a href="{{url('admin/Coupons')}}" class="nav-link">-->
		      <!--         <i class=" nav-icon fas fa-concierge-bell"></i>-->
		      <!--        <p>-->
		      <!--          News-->
		      <!--        </p>-->
		      <!--      </a>-->
		      <!--  </li> -->
		        
		        <!--<li class="nav-item">-->
	        		
	        	<!--	<li class="nav-item ">-->
			       <!--     <a href="#" class="nav-link ">-->
			       <!--       	<i class="nav-icon fas fa-users"></i>-->
				      <!--      <p>-->
				      <!--          Settings-->
				      <!--          <i class="right fas fa-angle-left"></i>-->
				      <!--      </p>-->
			       <!--     </a>-->
			       <!--     <ul class="nav nav-treeview">-->
			            	
			       <!--       	<li class="nav-item">-->
			              		
				      <!--          <a href="{{url('admin/Dashboard/sitesettings')}}" class="nav-link ">-->
					     <!--         <i class="nav-icon fas fa-globe"></i>-->
					     <!--         <p>-->
					     <!--           Site Settings-->
					     <!--         </p>-->
					     <!--       </a>-->
			       <!--       	</li>-->
			              	
			       <!--       	<li class="nav-item">-->
			              		
				      <!--          <a href="{{url('admin/Dashboard/settings')}}" class="nav-link">-->
					     <!--         <i class="nav-icon fas fa-user-cog"></i>-->
					     <!--         <p>-->
					     <!--           Profile Settings-->
					     <!--         </p>-->
					     <!--       </a>-->
			       <!--       	</li>-->
			       <!--       	<li class="nav-item">-->
			              		
				      <!--          <a href="{{url('admin/Dashboard/changePassword')}}" class="nav-link ">-->
					     <!--         <i class="nav-icon fas fa-lock"></i>-->
					     <!--         <p>-->
					     <!--           Change Password-->
					     <!--         </p>-->
					     <!--       </a>-->
			       <!--       	</li>-->
			       <!--     </ul>-->
		        <!--  	</li>-->
		            
		        </li>		        
	        </ul>
      	</nav>
    </div>
</aside>
<!-- Main content starts -->

<div class="content">


  	
		<!-- Sidebar -->
	  	<div class="sidebar">
	      	<div class="sidebar-dropdown"><a href="#">Navigation</a></div>
	
	      	<!--- Sidebar navigation -->
	      	<!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
	      	<ul id="nav">
	        	<!-- Main menu with font awesome icon -->
		        <li><a href="{{ URL::asset('/admin') }}" ><i class="icon-home"></i> Dashboard</a>
		          <!-- Sub menu markup 
		          <ul>
		            <li><a href="#">Submenu #1</a></li>
		            <li><a href="#">Submenu #2</a></li>
		            <li><a href="#">Submenu #3</a></li>
		          </ul>-->
		        </li>
		      <li class="has_sub"><a href="#"><i class="icon-pencil"></i> Reports  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
	            <ul>
	              <li>{{HTML::link('admin/reports/tutor','Tutor Reports')}}</li>
	              <li>{{HTML::link('admin/reports/ict','ICT Reports')}}</li>
	              
	            </ul>
	          </li>
	          
	          <li class="has_sub"><a href="#"><i class="icon-th-list"></i> Paper Generator  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
	            <ul>
	              <li>{{HTML::link('admin/paperGenerator/questions','Questions Manager')}}</li>
	              <li>{{HTML::link('admin/paperGenerator/paper','Paper Manager')}}</li>
	              
	            </ul>
	          </li>  
	         
	      	</ul>
	  	</div>
	
	  	<!-- Sidebar ends -->
  	
	  	<!-- Main bar -->
	  		<div class="mainbar">
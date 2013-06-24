<!-- Page heading -->
	    <div class="page-head">
	      {{ Session::get('currentPage') }}

        <!-- Breadcrumb -->
        	<div class="bread-crumb pull-right">
				<a href="index.html"><i class="icon-home"></i> Home</a> 
				
				{{ Session::get('breadcrumb') }}
			</div>

			<div class="clearfix"></div>

	    </div>
<!-- Page heading ends -->

<!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">
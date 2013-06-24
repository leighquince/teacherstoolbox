@extends('admin.layouts.base')

@section('content')

<div class="row-fluid">
            <div class="span12">
				 
				 
				 @if(isset($report))
				 <div class="widget">
	                <div class="widget-head">
	                  <div class="pull-left">Report</div>
	                  <div class="widget-icons pull-right">
	                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
	                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
	                  </div>  
	                  <div class="clearfix"></div>
	                </div>
	                <div class="widget-content">
	                  <div class="padd">
	                  	                  
	                 <p id="written-report"> {{$report}}</p>
	                  
	                
	                  
	                  
	          
	                  
	                  
	                  </div>
	                </div>
	                <div class="widget-foot">
	                <i class="icon-copy"></i> <a id="copy-report">Copy Report To Clipboard</a>
                    <p> Remember this is only a base report please add personal comments that reflect a students presence in your class this year </p>
                  </div>
                </div>
            

			
			
			
			<br/>
			  @endif
			
			
			
				
				
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">ICT Y12 Report Writer</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
					  <!-- Form starts. Don't forget the class "uni" to add cool styles -->
                     <form class="form-horizontal uni" method="post" action="{{ URL::asset('admin/reports/ict') }}" >
					  
					  
					  	<div class="row-fluid">
					  	
					  		<div class="span6">
					
                    
                      
                      
                      
						  		<fieldset>
							  		<legend>Student General Information</legend>
				                      <div class="control-group">
				                        <label class="control-label" for="inputEmail">Student Name</label>
				                        <div class="controls">
				                          <input type="text" id="studentName" name="name" placeholder="" class="text" value="{{ Input::old('studentName') }}">
				                        </div>
				                      </div>
				                      <div class="control-group">
				                      	<div class="controls">
										   <label><div class="radio" id="uniform-undefined"><span><input name="gender" type="radio" value="m" style="opacity: 0;"></span></div>Male</label>
										   <label><div class="radio" id="uniform-undefined"><span><input name="gender" type="radio" value="f" style="opacity: 0;"></span></div>Female</label>
				                      	</div>
				                      </div>
						  		</fieldset>
						  		
						  		
						  		<fieldset>
							  		<legend>Attitude and equipment</legend>
							  		<div class="control-group"  >
				                      	<div class="controls">
				                        	<select style="opacity: 0;" name="attitude">
												<option value="a">always prepared</option>
												<option value="b">normally prepared</option>
												<option value="c">usally prepared</option>
												<option value="d">sometimes prepared</option>
											</select>
										</div>
									</div>
						  		</fieldset>
						  		
						  		
						  		
						  		<fieldset>
						  			<legend>Deadlines</legend>
						  			<div class="control-group">
						  				<div class="controls">
							  				<select style="opacity: 0;" name="deadlines">
								  				<option value="a">met all deadlines</option>
								  				<option value="b">met most deadlines</option>
								  				<option value="c">met some deadlines</option>
								  			</select>
								  		</div>
						  			</div>
						  		</fieldset>
                       

					  	
						  	</div>
						  	<div class="span6">
					  	
					  	
						  		<fieldset>
							  			<legend>Theory Predicted Grade</legend>
							  			<div class="control-group"  >
							  				<div class="controls">
								  				<select style="opacity: 0;" name="theory">
									  				<option value="a">A</option>
									  				<option value="b">B</option>
									  				<option value="c">C</option>
									  				<option value="d">D</option>
									  				<option value="e">E</option>
									  				<option value="u">U</option>
									  			</select>
									  		</div>
							  			</div>
							  	</fieldset>
							  	
							  	<fieldset>
							  			<legend>Practical Predicted Grade</legend>
							  			<div class="control-group"  >
							  				<div class="controls">
								  				<select style="opacity: 0;" name="practical">
									  				<option value="a">A</option>
									  				<option value="b">B</option>
									  				<option value="c">C</option>
									  				<option value="d">D</option>
									  				<option value="e">E</option>
									  				<option value="u">U</option>
									  			</select>
									  		</div>
							  			</div>
							  	</fieldset>
							  	
							  	<fieldset>
							  			<legend>Independent work</legend>
							  			<div class="control-group"  >
							  				<div class="controls">
								  				<select style="opacity: 0;" name="independant">
									  				<option value="a">Reliable and competent</option>
									  				<option value="b">Compentent</option>
									  				<option value="c">Able to study in theory and practical lessons</option>
									  				<option value="d">Able to study in practical lesson</option>
									  				<option value="e">With guidance can work independadently</option>
									  				<option value="u">Struggles</option>
									  			</select>
									  		</div>
							  			</div>
							  	</fieldset>
						  	
						  	
							</div><!-- end span6 -->					  
					  </div><!-- end fluid row -->
					  <div class="row-fluid">
					  		<div class="span12 center">
					  			<button type="submit" class="btn btn-primary"> Generate Report </button>
					  		
					  		</div>
					  
					  </div>
					  
                    </form>
                  </div><!-- end widget content -->
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  

            </div>
          </div>





@stop

@extends('admin.layouts.base')

@section('content')

<div class="row-fluid"><!-- start fluid row -->
	<div class="span12">
					<div class="widget"><!-- start widget -->
						<div class="widget-head">
		             		<div class="pull-left">TITLE</div>
		                	 	<div class="widget-icons pull-right">
								<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
		                    		<a href="#" class="wclose"><i class="icon-remove"></i></a>
		                  	</div>  
		                  	<div class="clearfix"></div>
						</div>
		             	<div class="widget-content">
		                 	<div class="padd">
		                 	{{ Form::model($question) }}
		                 		<div class="row-fluid"><!-- start fluid row -->
		                 			<div class="span6">
		                 				
		                 			
		                 		
    
									     <div class='control-group'>
									        {{ Form::label('question_no', 'Question no:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::text('question_no') }}
									                 </div>
									     </div>
									    
									
									    
									     <div class='control-group'>
									        {{ Form::label('question', 'Question:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::textarea('question') }}
									                 </div>
									     </div>
									    
									
									    
									     <div class='control-group'>
									        {{ Form::label('keyword', 'Keyword:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::text('keyword') }}
									                 </div>
									     </div>
									    
									
									    
									     
									</div>
		                 
		                 		<div class="span6">
		                 			
							 		<div class='control-group'>
									        {{ Form::label('marks', 'Marks:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::text('marks') }}
									                 </div>
									     </div>

    
							     <div class='control-group'>
							        {{ Form::label('specification_point_id', 'Specification point id:',  array('class' => 'control-label')) }}
							         <div class="controls">
							                        {{ Form::text('specification_point_id') }}
							                 </div>
							     </div>
							    
							
							    
							     <div class='control-group'>
							        {{ Form::label('paper_id', 'Paper id:',  array('class' => 'control-label')) }}
							         <div class="controls">
							                        {{ Form::text('paper_id') }}
							                 </div>
							     </div>
							    
							
							    
							     <div class='control-group'>
							        {{ Form::label('user_id', 'User id:',  array('class' => 'control-label')) }}
							         <div class="controls">
							                        {{ Form::text('user_id') }}
							                 </div>
							     </div>
							    
							
							    
							     <div class='control-group'>
							        {{ Form::label('status', 'Status:',  array('class' => 'control-label')) }}
							         <div class="controls">
							                        {{ Form::text('status') }}
							                 </div>
							     </div>
								    
							</div>
		                 </div><!-- end fluid row -->

					    <div class="row-fluid"><!-- start fluid row -->
					    	<div class="span12 center">
					    		{{ Form::submit( "Submit",array('class' => 'btn btn-primary')) }}
					    	</div>
					    </div><!-- end fluid row -->
    
						{{ Form::close() }}

		                 		
		                 		
		                 		
							</div>
						</div>
						<div class="widget-foot">
			                
		             	</div>
					</div><!-- end widget -->
						
		
		
	</div>
</div><!-- end fluid row -->

	



@stop
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
								{{ Form::open() }}
								<div class="row-fluid"><!-- start fluid row -->
									<div class="span6">
										
									
    
									     <div class='control-group'>
									        {{ Form::label('questionno', 'Questionno:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::text('questionno', "",array('class' => 'text')) }}
									                 </div>
									     </div>
									    
									
									    
									     <div class='control-group'>
									        {{ Form::label('question', 'Question:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::textarea('question', "",array('class' => 'textarea')) }}
									                 </div>
									     </div>
									    
									
									    
									     <div class='control-group'>
									        {{ Form::label('keyword', 'Keyword:',  array('class' => 'control-label')) }}
									         <div class="controls">
									                        {{ Form::text('keyword', "",array('class' => 'text')) }}
									                 </div>
									     </div>
									</div>
								
								
									<div class="span6">
									<div class='control-group'>
								        {{ Form::label('marks', 'Marks:',  array('class' => 'control-label')) }}
								         <div class="controls">
								                        {{ Form::text('marks', "",array('class' => 'text')) }}
								                 </div>
								     </div>
								    
								
								    
								     <div class='control-group'>
								        {{ Form::label('specificationpointid', 'Specificationpointid:',  array('class' => 'control-label')) }}
								         <div class="controls">
								                        {{ Form::text('specificationpointid', "",array('class' => 'text')) }}
								                 </div>
								     </div>
								    
								
								    
								     <div class='control-group'>
								        {{ Form::label('paperid', 'Paperid:',  array('class' => 'control-label')) }}
								         <div class="controls">
								                        {{ Form::text('paperid', "",array('class' => 'text')) }}
								                 </div>
								     </div>
								    
								
								    
								     <div class='control-group'>
								        {{ Form::label('userid', 'Userid:',  array('class' => 'control-label')) }}
								         <div class="controls">
								                        {{ Form::text('userid', "",array('class' => 'text')) }}
								                 </div>
								     </div>
								    
								
								    
								     <div class='control-group'>
								        {{ Form::label('status', 'Status:',  array('class' => 'control-label')) }}
								         <div class="controls">
								                        {{ Form::text('status', "",array('class' => 'text')) }}
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
@extends('admin.layouts.base')

@section('content')

			<div class="widget"><!-- start widget -->
				<div class="widget-head">
             		<div class="pull-left">Create Question</div>
                	 	<div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    		<a href="#" class="wclose"><i class="icon-remove"></i></a>
                  	</div>  
                  	<div class="clearfix"></div>
				</div>
             	<div class="widget-content">
                 	<div class="padd">
						@if ($errors->any())
						<div class="row-fluid"><!-- start fluid row -->
							<div class="span12 alert alert-error">
							 <ul>
							 	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
							</ul>
							</div>
						</div><!-- end fluid row -->
						@endif
							
						
						{{ Form::open(array('route' => 'questions.store')) }}
						<div class="row-fluid"><!-- start fluid row -->
							<div class="span12">
							
							
							  
							        <div class="control-group">
            {{ Form::label('question_no', 'Question_no:') }}
            <div class="controls">
            	{{ Form::text('question_no') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('question', 'Question:') }}
            <div class="controls">
            	{{ Form::textarea('question') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('keywords', 'Keywords:') }}
            <div class="controls">
            	{{ Form::text('keywords') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('marks', 'Marks:') }}
            <div class="controls">
            	{{ Form::input('number', 'marks') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('specification_point_id', 'Specification_point_id:') }}
            <div class="controls">
            	{{ Form::input('number', 'specification_point_id') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('paper_id', 'Paper_id:') }}
            <div class="controls">
            	{{ Form::input('number', 'paper_id') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('user_id', 'User_id:') }}
            <div class="controls">
            	{{ Form::input('number', 'user_id') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('status', 'Status:') }}
            <div class="controls">
            	{{ Form::text('status') }}
			</div>
		</div>

							     
							            {{ Form::submit('Submit', array('class' => 'btn')) }}
							   
								
							</div>
						</div><!-- end fluid row -->
						{{ Form::close() }}
						
						
					</div>
				</div>
				<div class="widget-foot">
	                
             	</div>
			</div><!-- end widget -->
				








@stop



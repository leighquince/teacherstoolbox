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
						
						
						{{ Form::open(array('route' => 'admin.paperGenerator.questions.store')) }}
						<div class="row-fluid"><!-- start fluid row -->
							<div class="span6">
								


    <ul>

        <li>
            {{ Form::label('question_no', 'Question_no:') }}
            {{ Form::text('question_no') }}
        </li>

        <li>
            {{ Form::label('question', 'Question:') }}
            {{ Form::textarea('question') }}
        </li>

        <li>
            {{ Form::label('keywords', 'Keywords:') }}
            {{ Form::text('keywords') }}
        </li>

        <li>
            {{ Form::label('marks', 'Marks:') }}
            {{ Form::input('number', 'marks') }}
        </li>
		</ul>
		</div>
        <div class="span6">
		<ul>	
        <li>
            {{ Form::label('specification_point_id', 'Specification_point_id:') }}
            {{ Form::input('number', 'specification_point_id') }}
        </li>

        <li>
            {{ Form::label('paper_id', 'Paper_id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>


								
								
								
							</div>
						</div><!-- end fluid row -->
						{{ Form::close() }}
						
						

						
						
					</div>
				</div>
				<div class="widget-foot">
	                
             	</div>
			</div><!-- end widget -->
				




@stop



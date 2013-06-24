@extends('admin.layouts.base')

@section('content')

			<div class="widget"><!-- start widget -->
				<div class="widget-head">
             		<div class="pull-left"><h1>Show Question</h1> <p>{{ link_to_route('questions.index', 'Return to all questions') }}</p></div>
                	 	<div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    		<a href="#" class="wclose"><i class="icon-remove"></i></a>
                  	</div>  
                  	<div class="clearfix"></div>
				</div>
             	<div class="widget-content">
                 	<div class="padd">

				 	<div class="row-fluid"><!-- start fluid row -->
				 		<div class="span12">
				 			
				 			
							<table class="table table-striped table-bordered">
							    <thead>
							        <tr>
							            <th>Question_no</th>
				<th>Question</th>
				<th>Keywords</th>
				<th>Marks</th>
				<th>Specification_point_id</th>
				<th>Paper_id</th>
				<th>User_id</th>
				<th>Status</th>
							        </tr>
							    </thead>
							
							    <tbody>
							        <tr>
							            <td>{{{ $question->question_no }}}</td>
					<td>{{{ $question->question }}}</td>
					<td>{{{ $question->keywords }}}</td>
					<td>{{{ $question->marks }}}</td>
					<td>{{{ $question->specification_point_id }}}</td>
					<td>{{{ $question->paper_id }}}</td>
					<td>{{{ $question->user_id }}}</td>
					<td>{{{ $question->status }}}</td>
                    <td>{{ link_to_route('questions.edit', 'Edit', array($question->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('questions.destroy', $question->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
							        </tr>
							    </tbody>
							</table>
				 			
				 		</div>
				 	</div><!-- end fluid row -->



@stop
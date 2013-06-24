<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Teachers Tool Box</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  {{ HTML::style('css/bootstrap.css') }}
  <!-- Font awesome icon -->
  {{ HTML::style('css/font-awesome.css') }} 
  <!-- jQuery UI -->
  {{ HTML::style('css/jquery-ui.css') }} 
  <!-- Calendar -->
  {{ HTML::style('css/fullcalendar.css') }}
  <!-- prettyPhoto -->
  {{ HTML::style('css/prettyPhoto.css') }}   
  <!-- Star rating -->
  {{ HTML::style('css/rateit.css') }}
  <!-- Date picker -->
  {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
  <!-- CLEditor -->
  {{ HTML::style('css/jquery.cleditor.css') }} 
  <!-- Uniform -->
  {{ HTML::style('css/uniform.default.css') }} 
  <!-- Bootstrap toggle -->
  {{ HTML::style('css/bootstrap-toggle-buttons.css') }}
  <!-- Main stylesheet -->
  {{ HTML::style('css/style.css') }}
  <!-- Widgets stylesheet -->
  {{ HTML::style('css/widgets.css') }}   
  <!-- Responsive style (from Bootstrap) -->
  {{ HTML::style('css/bootstrap-responsive.css') }}
  
  @foreach ($css as $css)
    	{{ $css }}
  @endforeach
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  {{ HTML::script('js/html5shim.js') }}
  <![endif]-->

  <!-- Favicon -->
  {{ HTML::style("'img/favicon/favicon.png'") }}
</head>

<body>
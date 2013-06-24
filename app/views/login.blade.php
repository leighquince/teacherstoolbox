<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  {{ HTML::style('css/bootstrap.css') }}
  <!-- Font awesome icon -->
  {{ HTML::style('css/font-awesome.css') }} 
  <!-- Main stylesheet -->
  {{ HTML::style('css/style.css') }}
  
  <!-- Responsive style (from Bootstrap) -->
  {{ HTML::style('css/bootstrap-responsive.css') }}
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  {{ HTML::script('js/html5shim.js') }}
  <![endif]-->

  <!-- Favicon -->
  {{ HTML::style("'img/favicon/favicon.png'") }}
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
      
      	@if(isset($failure))
      		
      	<div class="alert alert-error">
                      {{$failure}}
        </div>
        
        @endif
		
		@if(isset($login_errors))
      		
      	<div class="alert alert-error">
                      <p> Sorry your email and/or password are incorrect </p>
        </div>
        
        @endif
        
        @if(isset($success))
        	<div class="alert alert-success">
                      {{$success}}
			</div>
        @endif
        <!-- Widget starts -->
            <div class="widget">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Login 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal" action="{{ URL::asset('login') }}" method="post">
                    <!-- Email -->
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputEmail" name="email" placeholder="Email">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="control-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputPassword" name="password" placeholder="Password">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox"> Remember me
                        </label>
                        <br>
                        <button type="submit" class="btn">Sign in</button>
                        <button type="reset" class="btn">Reset</button>
                      </div>
                    </div>
                  </form>

                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
{{ HTML::script('js/jquery.js') }} <!-- jQuery -->
{{ HTML::script('js/bootstrap.js') }} <!-- Bootstrap -->
</body>
</html>
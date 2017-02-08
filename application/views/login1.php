<!DOCTYPE HTML>
<html ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.css') ?> " />
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?> " />
	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular/angular.min.js') ?> "></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') ?> "></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?> "></script>
		<script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-bootstrap/ui-bootstrap.min.js') ?> "></script>

</head>
<body>
	<div class="wrapper1" ng-controller="loginCtrl">
	  <form class="login" ng-submit="login()" name="form()">
	    <p class="title">Login</p>
	    
	    <div class="error" ng-show="error"><div class="well xs">{{error}}</div>
	    </div>
	    <input type="text" placeholder="Username" ng-model="user.username" required/>
	    <i class="fa fa-user"></i>
	    <input type="password" placeholder="Password" ng-model="user.password"/>
	    <i class="fa fa-key"></i>
	    <a href="users/register">Not yet have an account? Register here</a>
	    <button type="submit">
	      <span class="state">Login</span>
	    </button>
	  </form>
	</div>

<!-- 	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-route/angular-route.js'); ?>"> </script> -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/controller.js');?>"></script>
</body>
</html>
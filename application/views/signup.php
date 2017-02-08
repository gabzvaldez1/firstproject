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
	<div class="wrapper1" ng-controller="RegisterCtrl">
	  <form class="login" ng-submit="register()" name="form()">
	    <p class="title">Sign-up</p>
	    <input type="text" placeholder="Name" ng-model="user.name" required/>
	    <input type="text" placeholder="Username" ng-model="user.username" required/>
	    <i class="fa fa-user"></i>
	    <input type="password" placeholder="Password" ng-model="user.password"/>
	    <i class="fa fa-key"></i>
	    <a href="login1">Log-in here</a>
	    <button type="submit">
	    <pre style="display:none;">{{ message }}</pre>
	      <span class="state">Register</span>
	    </button>
	  </form>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-route/angular-route.js'); ?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/controller.js');?>"></script>
</body>
</html>
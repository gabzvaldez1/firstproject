<!DOCTYPE html>
<html ng-app="myApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.css') ?> " />
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?> " />
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular/angular.min.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.js') ?> "></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-bootstrap/ui-bootstrap.min.js') ?> "></script> 

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" ng-controller="ViewCtrl">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" >
                    <a href="#">
                        Compose
                    </a>
                </li>
                <h3>Categories</h3>
                <li  ng-repeat="x in user">
                    <a href="#  ">{{x.category_name}}</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="form-style-5" ng-controller="ReminderCtrl">
            <form ng-submit="add()" name="form()"> 
                <fieldset>
                    <legend><span class="number">1</span> Reminder Info</legend>
                    <input type="text" name="field1" ng-model="formData.title" placeholder="Title">
                    <textarea name="field3" placeholder="Description" ng-model="formData.description"></textarea>
                    <label for="job">Date Due:</label>
                        <input type="date" ng-model="formData.date"></input>
                    <label for="job">Category:</label>
                        <select id="job" name="field4" ng-model="formData.cat">
                              <option value="Bills">Bills</option>
                              <option value="Beauty">Beauty</option>
                              <option value="Business">Business</option>
                              <option value="Health & Medicines">Health & Medicines</option>
                              <option value="Home">Home</option>
                              <option value="Jobs">Jobs</option>
                              <option value="Kids">Kids</option>
                              <option value="Others">Others</option>
                              <option value="Sports">Sports</option>
                        </select>  
                </fieldset>
            <button type="submit" >Save</button>
            </form>
        </div>
                <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/angular-route/angular-route.js'); ?>"> </script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/controller.js');?>"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

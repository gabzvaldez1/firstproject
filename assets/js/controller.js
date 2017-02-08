angular.module('app.controllers', [])

.controller('LoginCtrl', function($scope, $http) {

})

.controller('RegisterCtrl', function($scope, $http) {

	$scope.user = {};

	$scope.register = function() {

		var data = {
			'username' : $scope.user.username,
			'password' : $scope.user.password,
			'name' : $scope.user.name,
		}

		$http.post( window.location.origin + '/Reminder/users/addUser',data)
			.then(function(response) {
				$scope.user = {};
				console.log(response.status);
				if( response.status == 200 ) {
					console.log("Success!");
				} else {
					console.log("fail!");
				}
			}, function(response) {
				console.log(data);
			});
	};

})
.controller('loginCtrl', function($scope, $http, $window){
	$scope.user = {};
	$scope.error = false;
	    $scope.login = function(){
      console.log("Logging in...");
      $http({
            method: 'POST',
            url: 'http://localhost/Reminder/index.php/users/login',
            headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
            data: $.param($scope.user)
        }).then(function (results) {
            window.location.href = results.data.success;
        },function(error){
          //console.log(error);
          $scope.error = error.data.error;
        });
    }
})
.controller('ViewCtrl', function($scope, $http) {
	$scope.user = [];
      console.log("Logging in...");
      $http({
            method: 'GET',
            url: 'http://localhost/Reminder/index.php/users/view',
            headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
            data: $.param($scope.user)
        }).success(function (results) {
           	$scope.user = results;
           	console.log($scope.user);
        })
})

.controller('ReminderCtrl', function($scope, $http) {

	$scope.formData = {};

	$scope.add = function() {
		var data = {
			'title' : $scope.formData.title,
			'description' :$scope.formData.description,
			'date' : $scope.formData.date,
			'cat' : $scope.formData.cat,
		}

		$http.post( window.location.origin + '/Reminder/users/addReminder',data)
			.then(function(response) {
				$scope.formData = {};
				console.log(response.status);
				if( response.status == 200 ) {
					console.log(data);
				} else {
					console.log("Fail!");
				}
			});
	};

});



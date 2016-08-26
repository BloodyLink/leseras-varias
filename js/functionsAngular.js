var scope = "RELAJA LA JALEA";

var app = angular.module('miApp', ['ngRoute']);
	app.controller('controller', function($scope) {
    $scope.hola = scope;
});

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/aloha', {
        templateUrl: 'main.php',
        controller: 'mainController'
      })
  }]);

	app.controller('mainController', function($scope){
		$scope.dato = "HOOO:"
	})
/*
app.controller('dataController', function($scope,$http){
	$http.post("insert.php",{});
} );*/
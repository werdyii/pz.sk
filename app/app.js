'use strict';

// Declare app level module which depends on views, and components
angular.module('myAppPZ', [
  'ngRoute',
  'myApp.view1',
  'myApp.view2',
  'myApp.version'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider
  	.when('/o-nas',{
  		templateUrl:'o-nas.html',
  		controller:'MessageController'
  	})
  	.otherwise({
  		redirectTo: '/'
  	});
}]);

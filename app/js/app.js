var pramenApp = angular.module('pramenApp', ['ngRoute']);

// configure our routes
pramenApp.config(function($routeProvider) {
    $routeProvider

        // route for the home page
        .when('/home', {
            templateUrl : 'pages/home.html',
            controller  : 'mainController'
        })
        .when('/uvod',{
      		templateUrl:'pages/uvod.html',
      		controller:'mainController'
      	})
        .when('/o-nas',{
      		templateUrl:'pages/o-nas.html',
      		controller:'mainController'
      	})
      	.when('/bankovanie',{
      	  templateUrl:'pages/bankovanie.html',
      	  controller:'mainController'
      	})
      	.when('/bud-fit',{
      	  templateUrl:'pages/bud-fit.html',
      	  controller:'mainController'
      	})
      	.when('/cennik',{
      	  templateUrl:'pages/cennik.html',
      	  controller:'mainController'
      	})
      	.when('/dornova-metoda',{
      	  templateUrl:'pages/dornova-metoda.html',
      	  controller:'mainController'
      	})
      	.when('/kontakty',{
      	  templateUrl:'pages/kontakty.html',
      	  controller:'contactController'
      	})
      	.when('/referencie',{
      	  templateUrl:'pages/referencie.html',
      	  controller:'mainController'
      	})
      	.when('/reflexologia',{
      	  templateUrl:'pages/reflexologia.html',
      	  controller:'mainController'
      	})
      	.when('/sm-system',{
      	  templateUrl:'pages/sm-system.html',
      	  controller:'mainController'
      	})
      	.otherwise({
      		redirectTo: '/home'
      	});

});
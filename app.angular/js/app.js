(function(angular) {
  'use strict';
  
  var pramenApp = angular.module('pramenApp', ['ngRoute']);
  
  // configure our routes
  pramenApp.config(function($routeProvider, $locationProvider) {
      $routeProvider
  
          // route for the home page
          .when('/home', {
              templateUrl : 'pages/home.html',
              controller  : 'PagesController'
          })
          .when('/uvod',{
        		templateUrl:'pages/uvod.html',
        		controller:'PagesController'
        	})
          .when('/o-nas',{
        		templateUrl:'pages/o-nas.html',
        		controller:'PagesController'
        	})
        	.when('/bankovanie',{
        	  templateUrl:'pages/bankovanie.html',
        	  controller:'PagesController'
        	})
        	.when('/bud-fit',{
        	  templateUrl:'pages/bud-fit.html',
        	  controller:'PagesController'
        	})
        	.when('/cennik',{
        	  templateUrl:'pages/cennik.html',
        	  controller:'PagesController'
        	})
        	.when('/dornova-metoda',{
        	  templateUrl:'pages/dornova-metoda.html',
        	  controller:'PagesController'
        	})
        	.when('/kontakty',{
        	  templateUrl:'pages/kontakty.html',
        	  controller:'ContactController'
        	})
        	.when('/referencie',{
        	  templateUrl:'pages/referencie.html',
        	  controller:'PagesController'
        	})
        	.when('/reflexologia',{
        	  templateUrl:'pages/reflexologia.html',
        	  controller:'PagesController'
        	})
        	.when('/sm-system',{
        	  templateUrl:'pages/sm-system.html',
        	  controller:'PagesController'
        	})
        	.otherwise({
        		redirectTo: '/home'
        	});
    
      // configure html5
      $locationProvider.html5Mode(true);
  
  });
  
  pramenApp.factory("flash", function($rootScope) {
    var queue = [];
    var currentMessage = "";
  
    $rootScope.$on("$routeChangeSuccess", function() {
      currentMessage = queue.shift() || "";
    });
  
    return {
      setMessage: function(message) {
        queue.push(message);
      },
      getMessage: function() {
        return currentMessage;
      }
    };
  });

})(window.angular);  
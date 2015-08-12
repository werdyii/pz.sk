var app = angular.module('pramenApp', [
  'ngRoute',
  'MessageController'
]);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'pages/home.html',
        controller: 'MessageController'
      }).
      otherwise({
        redirectTo: '/'
      });
  }]);


//'use strict';

// Declare app level module which depends on views, and components
/* var app = angular.module('myAppPZ', []);

app.config( function($routeProvider) {
  $routeProvider
    .when('/',{
  		templateUrl:'app/pages/home.html',
  		controller:'MessageController'
  	})
    .when('/uvod',{
  		templateUrl:'pages/uvod.html',
  		controller:'MessageController'
  	})
    .when('/o-nas',{
  		templateUrl:'pages/o-nas.html',
  		controller:'MessageController'
  	})
  	.when('/bankovanie',{
  	  templateUrl:'pages/bankovanie.html',
  	  controller:'MessageController'
  	})
  	.when('/bud-fit',{
  	  templateUrl:'pages/bud-fit.html',
  	  controller:'MessageController'
  	})
  	.when('/cennik',{
  	  templateUrl:'pages/cennik.html',
  	  controller:'MessageController'
  	})
  	.when('/dornova-metoda',{
  	  templateUrl:'pages/dornova-metoda.html',
  	  controller:'MessageController'
  	})
  	.when('/kontakty',{
  	  templateUrl:'pages/kontakty.html',
  	  controller:'MessageController'
  	})
  	.when('/referencie',{
  	  templateUrl:'pages/referencie.html',
  	  controller:'MessageController'
  	})
  	.when('/reflexologia',{
  	  templateUrl:'pages/reflexologia.html',
  	  controller:'MessageController'
  	})
  	.when('/sm-system',{
  	  templateUrl:'pages/sm-system.html',
  	  controller:'MessageController'
  	})
  	.otherwise({
  		redirectTo: '/'
  	});
});
*/

app.controller('MessageController',function(){
  
});
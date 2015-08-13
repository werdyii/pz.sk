// create the controller and inject Angular's $scope
pramenApp.controller('MainController', function($scope, $route, $routeParams, $location) {
  // create a message to display in our view
  $scope.message = 'Správa spracovana v mainController';
  $scope.$route = $route;
  $scope.$location = $location;
  $scope.$routeParams = $routeParams;  
});

pramenApp.controller('PagesController', function($scope, $routeParams, flash) {
  $scope.message = 'Správa spracovana v PagesController';
  $scope.name = "PagesController";
  $scope.params = $routeParams;  
});

pramenApp.controller('ContactController', function($scope, $routeParams, flash) {
    $scope.message = 'Správa spracovana v ContactController';
    $scope.name = "ContactController";
    $scope.params = $routeParams;
    $scope.flash   = flash;
    flash.setMessage("Success load page ...");

});
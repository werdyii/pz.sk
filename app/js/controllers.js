// create the controller and inject Angular's $scope
pramenApp.controller('mainController', function($scope, flash) {
  // create a message to display in our view
  $scope.message = 'Správa spracovana v mainController';
});

pramenApp.controller('aboutController', function($scope, flash) {
  $scope.message = 'Správa spracovana v aboutController';
});

pramenApp.controller('contactController', function($scope, flash) {
    $scope.message = 'Správa spracovana v contactController';
    $scope.flash   = flash;
    flash.setMessage("Success load page ...");

});
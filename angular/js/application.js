var myApp = angular.module('myApp', ["ngRoute", "ngAnimate"]);

// Constant Here
myApp.constant('ConstantAlias', {});

myApp.config(['$routeProvider', '$httpProvider', function ($routeProvider, $httpProvider) {

    $routeProvider.when('/dashboard', {
        controller: 'DashboardCtrl',
        templateUrl: 'angular/partials/dashboard.html'
    });

    $routeProvider.otherwise({
        redirectTo: '/dashboard',
        templateUrl: 'angular/partials/dashboard.html'
    });

}]);

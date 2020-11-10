var myApp = angular.module('myApp', ["ngRoute", "ngAnimate"]);

// Constant Here
myApp.constant('ConstantAlias', {
    'api_url': 'http://localhost/starter-codeigniter-angularjs/'
});

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

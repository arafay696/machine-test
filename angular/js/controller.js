myApp.controller('DashboardCtrl', ['$scope', '$rootScope', '$http', 'ConstantAlias', function ($scope, $rootScope, $http, ConstantAlias) {
    $scope.welcome = "Machine Test";
    $scope.speed = null;
    $scope.histories = [];


    $scope.refresh = function () {
        window.showLoader();
        $http.get(ConstantAlias.api_url + '/ping').then(function (response) {
            // handle success
            window.hideLoader();
            response = response.data;
            if (response.status) {
                $scope.speed = response.message;
                $scope.histories = response.data;
            }
        }).catch(function (error) {
            // handle error
            window.hideLoader();
            console.log(error);
        }).then(function () {
            // always executed
            window.hideLoader();
        });
    };
    $scope.refresh($scope);


    $scope.delete = function (id) {
        window.showLoader();
        $http.post(ConstantAlias.api_url + 'delete/history', {
            id: id
        }).then(function (response) {
            // handle success
            window.hideLoader();
            response = response.data;
            if (response.status) {
                $scope.histories = response.data;
            }
        }).catch(function (error) {
            // handle error
            console.log(error);
        }).then(function () {
            // always executed
        });
    };


}]);
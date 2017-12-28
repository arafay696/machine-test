// Http Request Method
myApp.factory('common', ['$http', function ($http) {
    return {
        http: {
            post: function (url, data) {
                return $http.post(url, data);
            },
            get: function (url) {
                return $http.get(url);
            },
            put: function (url, data) {

                var putPromise = $http.put(url, data);
                return putPromise;
            },
            delete: function (url) {
                // $http returns a promise
                var getPromise = $http.delete(url);
                // Return the promise to the controller
                return getPromise;
            }
        }
    }
}]);
/***
 * Create a MySQL DB with three cols, one with ID, Name & Number
 * Check data.php to see SQL settings
 * */

(function() {
    var app = angular.module('sqlJSON', []);
    app.controller('DataCtrl', function($scope, $http) {
        $http.get("data.php")
            .then(function(response) {
                    console.log(response.data);
                    $scope.names = response.data;
                },
                function(data) {
                    // Handle error here
                    console.log("ERROR");
                });
    });
})();
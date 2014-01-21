
$(document).ready(function(){

});

/* App Module */

var CubbyHoleApp = angular.module('cubbyholeApp', [
    'ngRoute',
    'cubbyholeControllers'
]);

CubbyHoleApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'partials/fileExplorer.html',
                controller: 'FileExplorerCtrl'
            }).
            when('/{username}', {
                templateUrl: 'partials/.html',
                controller: 'PhoneDetailCtrl'
            }).
            otherwise({
                redirectTo: '/'
            });
    }]);

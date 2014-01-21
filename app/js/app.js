
$(document).ready(function(){
    $(document).keypress(function(e) {
        var qa = $('#quick-access');
        if (e.keyCode == 47 && !qa.is(":focus")) { // Slash '/'
            e.preventDefault();
            qa.focus();
        }
    });
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

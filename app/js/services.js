/**
 * Created by baptiste on 2014-05-06.
 */
var CubbyHoleServices = angular.module('cubbyholeServices', []);

CubbyHoleServices.service('authService', function($http) {

    /*
    This service gets the authorized token from cookie and sets it in the Authorization header
    The token is available via getToken method
    TODO: Secure the cookie
     */
    var apiToken;

    this.start = function() {
        apiToken = $.cookie('cubbyholeapitoken'); // Get the token from cookie
            if (apiToken !== undefined) {
                $http.defaults.headers.common.Authorization = apiToken; // Sets the token as a common header
            }
    };

    /*
    Returns the token
     */
    this.getToken = function() {
        return apiToken;
    };

});
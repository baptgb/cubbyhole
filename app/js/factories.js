/**
 * Created by baptiste on 2014-05-13.
 */
var CubbyHoleFactories = angular.module('cubbyholeFactories', ['ngResource']);

CubbyHoleFactories.factory('Users', ['$resource', function($resource) {

    return $resource(
        'http://localhost/cubbyhole/api/web/api/v1/users/:id.json',
        null,
        { 'update': { method: 'PUT' } }
    );

}]);

CubbyHoleFactories.factory('Files', ['$resource', function($resource) {

    return $resource(
        'http://localhost/cubbyhole/api/web/api/v1/files/:id.json',
        null,
        { 'update': { method: 'PUT' } }
    );

}]);
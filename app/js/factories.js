/**
 * Created by baptiste on 2014-05-05.
 */
var CubbyHoleFactories = angular.module('cubbyholeFactories', ['ngResource']);

/*
 This is the User factory, you use it to interact with the User resource which is linked to the User API
 It provides ways to create (post), read (get), update (put) and delete (delete) User via API calls
 */
CubbyHoleFactories.factory('userFactory', function($resource) {

    var userFactory = {};
    var User = $resource('http://localhost/cubbyhole/api/web/api/v1/users/:userId.json', {userId: '@id'});

    /**
     * Return the User resource
     * @param userId
     * @returns {*}
     */
    userFactory.getUser = function(userId) {
        var user = User.get({userId: userId});
        return user;
    };

    return userFactory;

});

CubbyHoleFactories.factory('fileFactory', function($resource) {

    var fileFactory = {};
    var File = $resource('http://localhost/cubbyhole/api/web/api/v1/files/:fileId.json', {fileId: '@id'});

    fileFactory.getFile = function(fileId) {
        var file = File.get({fileId: fileId});
        return file;
    };

    return fileFactory;

});
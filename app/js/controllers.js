var CubbyHoleApp = angular.module('cubbyholeApp', []);

CubbyHoleApp.controller('FileExplorerCtrl', function ($scope) {
    $scope.files = [
        {   'name': 'My picture 1.png',
            'owner': 'Baptiste Gouby',
            'size': '150 Kb'            },
        {   'name': 'My picture 2.png',
            'owner': 'Brian',
            'size': '90 Kb'            },
        {   'name': 'My picture 3.png',
            'owner': 'Brian',
            'size': '637 Kb'            },
        {   'name': 'My picture 4.png',
            'owner': 'Brian',
            'size': '453 Kb'            },
        {   'name': 'My file.pdf',
            'owner': 'Peter Griffin',
            'size': '8 Mb'              },
        {   'name': 'Vacations.avi',
            'owner': 'Peter Griffin',
            'size': '874 Mb'            }
    ];
});
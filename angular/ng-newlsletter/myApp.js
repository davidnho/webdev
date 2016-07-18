//define the module ...
var app = angular.module('myApp',[]);

//the main controller?
app.run(function($rootScope){
  $rootScope.name="Noel David"
});

//my controller
app.controller('MyController',function($scope){
    $scope.person = {
         name: "Gail David",
    }   
});

app.controller('ParentController',function($scope) {
   $scope.person = {greeted : false}; 
});

app.controller('ChildController',function($scope) {
    $scope.sayHello = function() {
        $scope.person.greeted = true;
    }
});

app.controller('PlayerController', ['$scope', function($scope) {
     $scope.audio = document.createElement('audio');
     $scope.audio.src = "media/victor.mp4";
}]);

app.controller('RelatedController', ['$scope', function($scope) {
}]);
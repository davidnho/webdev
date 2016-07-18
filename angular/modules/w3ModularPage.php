<!DOCTYPE html>
<html>
<!--source : w3schools    -->
<script src="../../js/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
{{ firstName + " " + lastName }}
</div>

<script src="myCtrl.js">
// var app = angular.module("myApp", []);
// app.controller("myCtrl", function($scope) {
//     $scope.firstName = "John";
//     $scope.lastName = "Doe";
// });
</script>

</body>
</html>
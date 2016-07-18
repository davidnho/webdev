<html>
    <head>
            <title>Controllers</title>
            <meta charset="utf-8">
            <script  src="..//js/angular.min.js"></script>
            <!--<link rel="stylesheet" href="..//css/bootstrap.min.css">-->
            <!--<link rel="stylesheet" href="..//css/mystyle.css"> -->
    </head> 
    <body>
        
        <div class ="jumbotron" ng-app="mainApp" ng-controller="employeeController">
            <p>Firstname : <input type="text" ng-model="employee.firstname"></p>
            <p>Lastname : <input type="text" ng-model="employee.lastname"></p>
            <p>You are entering {{employee.fullname()}}</p>
        </div>
        
        <script>
           var mainApp = angular.module("mainApp", []);
         
         mainApp.controller('employeeController', function($scope) {
            $scope.employee = {
               firstname: "Ariegail",
               lastname: "David",
               
               fullname: function() {
                  var employeeObject;
                  employeeObject = $scope.employee;
                  return employeeObject.firstname + " " + employeeObject.lastname;
               }
            };
         });
        </script>
    </body>
</html>
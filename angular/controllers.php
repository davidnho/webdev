<html>
   
   <head>
      <title>Angular JS Controller</title>
      <script src = "..//js/angular.min.js"></script>
      <meta charset="utf-8">
      <!--<link rel="stylesheet" href="..//css/bootstrap.min.css">-->
      <!--<link rel="stylesheet" href="..//css/mystyle.css"> -->
   </head>
   
   <body>
      <h2>AngularJS Sample Application</h2>
      
      <div ng-app = "mainApp" ng-controller = "studentController">
         Enter first name: <input type = "text" ng-model = "student.firstName"><br><br>
         Enter last name: <input type = "text" ng-model = "student.lastName"><br>
         <br>
         
         You are entering: {{student.fullName()}}
      </div>
      
      <script>
         var mainApp = angular.module("mainApp", []);
         
         mainApp.controller('studentController', function($scope) {
            $scope.student = {
               firstName: "Noel",
               lastName: "David",
               
               fullName: function() {
                  var studentObject;
                  studentObject = $scope.student;
                  return studentObject.firstName + " " + studentObject.lastName;
               }
            };
         });
      </script>
      
   </body>
</html>
<html>
   
   <head>
      <title>Angular JS Views</title>
      <script src = "../../js/angular.min.js"></script>
      <script src = "../../js/angular-route.min.js"></script>
   </head>
   
   <body>
      <h2>AngularJS Sample Application</h2>
      <div ng-app = "mainApp">
         <p><a href = "#addStudent">Add Student</a></p>
         <p><a href = "#viewStudents">View Students</a></p>
         <div ng-view></div>
         
         <script type = "text/ng-template" id = "addStudent.php">
            <h2> Add Student </h2>
            {{message}}
         </script>
         
         <script type = "text/ng-template" id = "viewStudents.php">
            <h2> View Students </h2>
            {{message}}
         </script>
      </div>
      
      <script>
         var mainApp = angular.module("mainApp", ['ngRoute']);
         mainApp.config(['$routeProvider', function($routeProvider) {
            $routeProvider.
            
            when('/addStudent', {
               templateUrl: 'addStudent.php',
               controller: 'AddStudentController'
            }).
            
            when('/viewStudents', {
               templateUrl: 'viewStudents.php',
               controller: 'ViewStudentsController'
            }).
            
            otherwise({
               redirectTo: '/addStudent'
            });
         }]);
         
         mainApp.controller('AddStudentController', function($scope) {
            $scope.message = "This page will be used to display add student form";
         });
         
         mainApp.controller('ViewStudentsController', function($scope) {
            $scope.message = "This page will be used to display all the students";
         });
			
      </script>
      
   </body>
</html>
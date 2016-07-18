<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body ng-app = "myapp">
      
      <div ng-controller = "HelloController" >
         <h2>Welcome {{helloTo.title}} to the world of Tutorialspoint!</h2>
      </div>
      
      <script>
         angular.module("myapp", [])
         
         .controller("HelloController", function($scope) {
            $scope.helloTo = {};
            $scope.helloTo.title = "AngularJS";
         });
      </script>
      
   </body>
</html>
<html>
   
   <head>
      <title>AngularJS HTML DOM</title>
      <script src = "..//js/angular.min.js"></script>
      <script src = "..//js/jquery.min.js"></script>
      <link rel="stylesheet" href="..//css/bootstrap.min.css">
      <link rel="stylesheet" href="..//css/mystyle.css">
   </head>
   
   <body>
      <div class="container">
         <div class="jumbotron" ng-app = "">
            <h2>AngularJS Sample Application</h2>
            <p><input type="checkbox" ng-model="disableButton">
            <input type="button" class="btn-success" ng-disabled="disableButton" value="Disable Me"></p>    
            <p><input type="button" class="btn-success" ng-click="counter = counter + 1" value="Add count">Count: {{counter}}</p>
            <p>
               <p><input type="checkbox" ng-model="hideMe">
               <input type="button" class="btn-success" ng-hide="hideMe" value="Add count">
               </p>
         </div>
      </div>
   </body>
</html>
<html>
    <head>
        <!--load angular.js framework ...-->
        <script src = "js/angular.min.js"></script>
    </head>
    <body>
        <h1>Sample Application</h1>
        <!--define angularjs application using ng-app directive-->
        <div ng-app ="">
            <!--define a model name using ng-model directive-->
            <p>Enter your name<input type="text" ng-model="name"></p>
            <!--bind the value of the above model using ng-bind directive-->
            <p>Hello <span ng-bind="name"></span></p>
        </div>
        
    </body>
</html>
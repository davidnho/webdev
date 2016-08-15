<html ng-app>
    <head>
        <script src = "..//js/angular.min.js"></script>
    </head>
    <body>
        <div>
            <input type="text" ng-model="yname"></br>
            <!--this will show the text you type in uppercase-->
            <p>{{yname | uppercase }} </p>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../css/font-awesome.css" />
        <link rel="stylesheet" href="style.css" />
        <script src="../../js/angular.min.js"></script>
        <script src="../../js/angular-route.js"></script>
        <script src="script.js"></script>
    </head>

    <body ng-app="RoutingApp">
        <h2>AngularJS Routing Example</h2>
        <p>Jump to the <a href="#first">first</a> or <a href="#second">second page</a></p>
        <div ng-view>
        </div>
    </body>
</html>
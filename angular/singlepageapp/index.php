<!-- index.html -->
<!DOCTYPE html>
<html ng-app="scotchApp">
    <head>
        <!-- SCROLLS -->
        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../css/font-awesome.css" />

        <!-- SPELLS -->
        <!-- load angular and angular route via CDN -->
        <script src="../../js/angular.min.js"></script>
        <script src="../../js/angular-route.js"></script>
        <script src="script.js"></script>
    </head>
    <body ng-controller="mainController">

        <!-- HEADER AND NAVBAR -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Angular Routing Example</a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                        <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- MAIN CONTENT AND INJECTED VIEWS -->
        <div id="main">
            <!-- this is where content will be injected -->
            <div ng-view></div>
            {{ message}}
            <!-- angular templating -->
            <!-- this is where content will be injected -->

        </div>

    </body>
</html>
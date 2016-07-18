<html>
    <head>
        <script src = "js/angular.min.js"></script>
    </head>
    <body>
        <div ng-app="" 
        ng-init = "
        empnames=
        [
            {firstname:'Noel',lastname:'David'},
            {firstname:'Arigail',lastname:'David'},
            {firstname: 'Brienne Elise',lastname:'David'},    
        ]
        ">
        <h2>Employee Names:</h2>
        <ol>
            <li ng-repeat= "empname in empnames">
                {{ empname.firstname +' '+ empname.lastname }}
            </li>
        </ol>
        </div>
        
    </body>
</html>
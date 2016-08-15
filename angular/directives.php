<html>
     <head>
      <title>AngularJS Directives</title>
   </head>
   
   <body>
      <h1>Sample Application</h1>
      
      <div ng-app = "" ng-init = "countries = [{locale:'en-US',name:'United States'}, {locale:'en-GB',name:'United Kingdom'}, {locale:'en-FR',name:'France'}]"> 
         <p>Enter your Name: <input type = "text" ng-model = "name"></p>
         <p>Hello <span ng-bind = "name"></span>!</p>
         <p>List of Countries with locale:</p>
      
         <ol>
            <li ng-repeat = "country in countries">
               {{ 'Country: ' + country.name + ', Locale: ' + country.locale }}
            </li>
         </ol>
      </div>
      
      <script src = "js/angular.min.js"></script>
      
   </body>
</html>
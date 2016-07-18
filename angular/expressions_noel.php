<html>
   
   <head>
      <title>AngularJS Expressions</title>
        <script src = "js/angular.min.js"></script>
   </head>
   
   <body>
      <h1>Expressions</h1>
      <div ng-app="" ng-init ="
      greetings='Hello Noel';
      skills=['PHP','VBA','C']
      "
      >
      <p>{{greetings}}</p>
      <p>Your skills: </p>
      <ol>
          <li ng-repeat="skill in skills">
              {{skill}}
          </li>
      </ol>
      <p>Your favorite programming language:</p>
      {{skills[0]}}
      </div>
   </<body>
 </html>      
 
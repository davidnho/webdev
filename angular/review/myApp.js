//declare a module
var myAppModule = angular.module('myApp',[]);

//configure the module.
//we will create a greeting filter
myAppModule.filter('greet',function() {
    return function(name) {
        return 'Hello ' + name + '!';
    };
});
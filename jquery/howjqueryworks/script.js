$(document).ready(function(){
      $("a").click(function(event){
         alert("The link will no longer take you to jQuery.com!") 
         event.preventDefault();
      });
});
 
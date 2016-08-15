<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "red");
    });
    $("input").blur(function(){
        $(this).css("background-color", "blue");
    });
});
</script>
</head>
<body>
<nav>
    <form>
        <ul>
        <input type="text">
        <input type="text">
    </ul>
    </form>
    
</nav>

</body>
</html>
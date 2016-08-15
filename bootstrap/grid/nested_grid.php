<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-xs-6 col-sm-3" style="background-color:lavender;">
                    Photo<br>
                    Resize the browser window to see the effect. Also try to remove the div clearfix line and see what happens.
                </div>
                <div class="col-xs-6 col-sm-3" style="background-color:lavenderblush;">Name</div>
                <!-- Add clearfix for only the required viewport -->
                <div class="clearfix visible-xs"></div>
                <?php for($i=3;$i<=10;$i++) { ?>
                <div class="col-xs-6 col-sm-3" style="background-color:lightcyan;">Column <?php echo $i; ?></div>
                <?php } ?>
            </div>


        </div>

    </body>
</html>
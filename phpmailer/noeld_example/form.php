<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
           
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--EMAIL FORM-->
    <form action="email.php" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" name="name"  style="min-width: 90%">
                    </p>
                    <p>
                        <label  for="email">Your Email:</label>
                        <input type="text" class="form-control" id="email" name="email"  style="min-width: 90%">
                    </p>
                    <p>
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject"  name="subject" style="min-width: 90%">
                    </p>
                </div>
                <div class="col-md-6">
                    <label for="comment">Comment:</label>
                    <textarea style="min-width: 90%" rows="5" id="comment" name="comment"></textarea>
                    <p style="white-space: pre;"> </p>
                    <button type="submit" class="btn btn-default">Send</button>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>

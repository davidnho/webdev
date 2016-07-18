     <!-- Navbar
    ================================================== -->
    
<?php

$StatusO='Open';
// We Will prepare SQL Query
	$STMO = $dbh->prepare("SELECT SrNo FROM ttmain WHERE Status = :StatusO");
// bind paramenters, Named paramenters alaways start with colon(:)
	$STMO->bindParam(':StatusO', $StatusO);
// For Executing prepared statement we will use below function
	$STMO->execute();
// Count no. of records	
$countO = $STMO->rowCount();

?>    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
                
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                        <div class="nav-collapse collapse">
                        <ul class="nav">
              <li class="active">
                <a href="./AdminIndex.php">Open <span class="label label-important"><?php echo $countO; ?></span></a>
              </li>   
               <li class="">
                <a href="./AdminIndex.php"><span class="label label-info">Welcome <?php echo $_SESSION[myusername]; ?></span></a>
              </li>        

            </ul>
              <form method="post" class="navbar-form pull-left" action="#" >
  <input class="span4" id="searchg" name="searchg" type="text" placeholder="Search">
  <button class="btn" type="submit">Search</button>
  </form>
             <form class="btn-group pull-right">
              <a  href="Logout.php" class="btn btn-danger">Logout</a>
            </form>
                      </div>
        </div>
      </div>
    </div>
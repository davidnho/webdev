<?php  include('UserSessionAdmin.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Easy Sign-in Using PDO Prepared Statement Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Easy Sign-in Using PDO Prepared Statement Tutorial">
    <meta name="author" content="Furqan Aziz">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/ui/themes/ui-darkness/jquery.ui.all.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">


            <?php  include('NavButtons.php'); ?>


<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Welcome to Secret Page</h1>
    <p class="lead">You can view all OPEN Trouble Tickets here.</p>
  </div>
</header>


 <div class="container">

    <!-- Docs nav
    ================================================== -->

<?php
$Status='Open';
// We Will prepare SQL Query
    $STMC = $dbh->prepare("SELECT SrNo FROM ttmain WHERE Status = :Status");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STMC->bindParam(':Status', $Status);
// For Executing prepared statement we will use below function
    $STMC->execute();
// Count no. of records	
$count = $STMC->rowCount();

?>
  
   <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
       	  <li><a href="#Options"><i class="icon-chevron-right"></i> Options</a></li>
          <li><a href="#c5"><i class="icon-chevron-right"></i> Open Trouble Tickets <?php echo "<span class='label label-important'> $count</span>"; ?></a></li>
          
        </ul>
      </div>
         
      <div class="span9">

        <!-- Options
        ================================================== -->
        <section id="Options">
          <div class="btn-group" style="margin: 9px 0 5px;">
            <a  href="OPEN-TICKET-EXCEL.php" class="btn btn-success">Export to Excel</a>
              
            </div>
        </section>

     


 <!-- All Open Tickets
        ================================================== -->
        <section id="c5">
          <div class="page-header">
            <h1>Open Trouble Tickets <?php echo "<span class='label label-important'> $count</span>"; ?></h1>
          </div>
<table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>TT No</th>
                  <th>Description</th>
                  <th>City</th>
                  <th>Entry Date</th>
                  <th>Entry Time</th>
                  <th>Entry By</th>
                  <th>Close Date</th>
                  <th>Close Time</th>
                  <th>Close By</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>


            
            <?php
				

// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  `SrNo`, `TTDescription`, `TTCity`, `TTEntryDate`, `TTEntryTime`, `TTEntryBy`, `TTClosedDate`, `TTClosedTime`, `TTClosedBy`, `Status` FROM ttmain WHERE Status='Open'");
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
			

		 echo"<tr>";
		 echo"<td>".$row[0]."</td>";
		 echo"<td>".$row[1]."</td>";
		 echo"<td>".$row[2]."</td>";
		 if($row[3]!='0000-00-00') {   echo "<td>" . date("j-M-Y",strtotime($row[3])) ."</td>"; } else { echo "<td>NA</td>"; }
		 if($row[4]!='00:00:00') {   echo "<td>".$row[4]."</td>"; } else { echo "<td>NA</td>"; }
		 echo"<td>".$row[5]."</td>";
		 if($row[6]!='0000-00-00') {   echo "<td>" . date("j-M-Y",strtotime($row[6])) ."</td>"; } else { echo "<td>-</td>"; }
		 if($row[7]!='00:00:00') {   echo "<td>".$row[7]."</td>"; } else { echo "<td>-</td>"; }
		 if($row[9]=='Closed') {   echo "<td>".$row[8]."</td>"; } else { echo "<td>-</td>"; }
		 if($row[9]=='Closed') {   echo "<td><span class='label label-success'>".$row[9]."<span></td>"; } else { echo "<td><span class='label label-important'>".$row[9]."</span></td>"; }
         echo"</tr>";

		
        }
	

			?>

              </tbody>
            </table>
        </section>



      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <?php  include('footer.php'); ?>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>

	<script src="assets/js/jqBootstrapValidation.js"></script>     
             <script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>



  </body>
</html>

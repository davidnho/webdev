<?php
include("configPDO.php");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Crewow.xls");
//header("Content-type: application/vnd.ms-word");
//header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";

echo "<table border=1>";
echo "<th colspan='10' style='background-color:#666666; color:#FFFFFF;'>OPEN TROUBLE TICKETS</th>";
      		
echo"<tr><th>TT No</th><th>Description</th><th>City</th><th>Entry Date</th><th>Entry Time</th><th>Entry By</th><th>Close Date</th><th>Close Time</th><th>Close By</th><th>Status</th></tr>";


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
	

			




echo "</table>";
echo "</body>";
echo "</html>";
?>
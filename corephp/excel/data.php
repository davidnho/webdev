<table border="1">
    <tr>
    	<th>ID.</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
	</tr>
	<?php
	//connection to mysql
	mysql_connect("localhost", "root", ""); //server , username , password
	mysql_select_db("dblogin");
	
	//query get data
	$sql = mysql_query("SELECT * FROM tbl_users");
	$no = 1;
	while($data = mysql_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['username'].'</td>
			<td>'.$data['password'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>
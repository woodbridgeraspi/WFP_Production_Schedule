<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<style>
  table, th, td {
      border: 1px solid black;
      text-align: center;
  }
  
  #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers td, #customers th {
      border: 1px solid #ddd;
      padding-top: 30px;
      padding-bottom: 30px;
      font: bold 25px "Trebuchet MS", Arial, Helvetica, sans-serif;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}         
  

  #customers tr:hover {background-color: #ddd;}

  #customers th {
      padding-top: 35px;
      padding-bottom: 35px;
      text-align: center;
      background-color: #3D59AB;
      color: white;
      font: bold 35px "Trebuchet MS", Arial, Helvetica, sans-serif;
  
</style>
</head>
<body>
<table id="customers">
	<thead>
	<tr>
	    <th colspan="8" style="font: bold 60px 'Trebuchet MS', Arial, Helvetica, sans-serif; padding-top: 50px">Production Schedule
	    </th>
	 </tr>
	 <tr>
		<th>CSR</th>
		<th>Lot #</th>
		<th>Received</th>
		<th>Customer</th>
		<th>Ship Date</th>
		<th>QA</th>
		<th>Trailer #</th>
		<th>Special Instructions</th>
	</tr>
	</thead>
	<tbody>
		<?php
			$url = "https://docs.google.com/spreadsheets/d/1FKj7xavrkd7UcI1qQkXtcYX74Yz7N3UGFMFRb9VyHdE/pub?gid=0&single=true&output=csv";
			$row=0;
			if (($handle = fopen($url, "r")) !== FALSE) {
			    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			        $num = count($data);
			        echo "<tr>";
			        $row++;
			        for ($c=0; $c < $num; $c++) {
			        	switch ($data[$c]) {
			        		case "CSR":
			        			break;
			        		case "Lot #":
			        			break;
			        		case "Received":
			        			break;
			        		case "Customer":
			        			break;
			        		case "Ship Date":
			        			break;
			        		case "QA":
			        			break;
			        		case "Trailer #":
			        			break;
			        		case "Special Instructions":
			        			break;
			        		
			        		default:
			        			echo "<td>"; 
			            		echo "$data[$c]";
			            		echo "</td>";
			        			break;
			        	}
			        }
			        echo "</tr>";
			    }
			    fclose($handle);
			}
		?>
	</tbody>
	</table>


</table>
</body>
</html>
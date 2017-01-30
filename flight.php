
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
	   <h2>FLIGHT DETAILS</h2>
	   <p><a href="http://localhost/flight_booking/New%20folder/new_index.php">home page</a></p>
	   
	</div><!--end container-->
</div><!--end jumbotron-->

<div class="container">

<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['date']))
	{
	 $source=$_POST['source'];
	 $destination=$_POST['destination'];
		  $date=$_POST['date'];
		$con=mysqli_connect('localhost','root','','flight') or die(mysql_error());
		
  $random=mt_rand(4,10);

	   
		   $result=mysqli_query($con,"SELECT * FROM enquiry WHERE source='".$source."' and destination='".$destination."' and date='".$date."'");
			
			 $res_count=mysqli_query($con,"SELECT COUNT(*)  AS numrows FROM enquiry WHERE source='".$source."' and destination='".$destination."' and date='".$date."'");
			 $number_of_rows = 0;
      if ($row1 = mysqli_fetch_assoc($res_count)) {
       $number_of_rows = $row1['numrows'];
}       if($number_of_rows!=0)
			   
			   {	$row=mysqli_fetch_array($result);
					 echo "
					 <table class='table table-hover'>
					<thead>
					<tr>
					 <th>source</th>
					 <th>destination</th>
					 <th>date</th>
					 <th>time</th>
					 <th>flight name</th>
					 </tr>
					 </thead>
					 ";
					 
						for($i=0;$i<$random&&$row=mysqli_fetch_array($result);$i++)
					{
						echo"
						<tbody>
						<tr>
						<td>$row[source]</td>
						 <td>$row[destination]</td
						 <td><td>$row[date]</td></td> 
						 <td>$row[time]</td
						 <td><td>$row[flightName]</td></td> 
						 </tr>
						 </tbody>
						 ";
					}
					
					echo "</table";
	}
else
{
	echo '
	<div class="well text-center"><h3>no result found</h3></div>';
	
		header("Refresh:2; url=http://localhost/flight_booking/New%20folder/new_index.php");
}	
                
	}
}
?>

</div>
</body>
</html>
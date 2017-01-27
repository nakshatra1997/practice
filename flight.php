
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
	   <h2>SEARCH DETAILS</h2>
	   <p><a href="http://localhost/flight_booking/index.php">home page</a></p>
	   
	</div><!--end container-->
</div><!--end jumbotron-->

<div class="container">

<?php
$sourceEr = "";
$source="";
		
function input($data)
{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
			}
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["source"]))
		{
				$sourceEr="sourceName Required";
		}
		else
		{
		$source=input($_POST['source']);
		if (!preg_match("/^[a-zA-Z ]*$/",$source))
			{
			  $sourceEr = "Only letters and white space allowed"; 
			}
		}
	}
	if($sourceEr=="")	
if(isset($_POST['submit']))
{
	if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['date']))
	{
	 $source=$_POST['source'];
	 $destination=$_POST['destination'];
		  $date=$_POST['date'];
		$con=mysqli_connect('localhost','root','','flight') or die(mysql_error());
		
  $random=mt_rand(4,10);

	   
		$result=mysqli_query($con,"SELECT * FROM enquiry WHERE source='".$source."' and destination='".$destination."'");
			 //$total= mysqli_num_rows($result);
			 echo "
			 <table class='table table-hover'>
			<thead>
			<tr>
			 <th>source</th>
			 <th>destination</th>
			 <th>date</th>
			 </tr>
			 </thead>
			 ";
			for($i=$random;$i<11&&$row=mysqli_fetch_array($result);$i++)
			{
				echo"
				<tbody>
				<tr>
				<td>$row[source]</td>
				 <td>$row[destination]</td
				 <td><td>$row[date]</td></td>    
				 </tr>
				 </tbody>
				 ";
			}
			echo "</table";
	}
}
else
	echo "not ok";
?>
</div>
</body>
</html>
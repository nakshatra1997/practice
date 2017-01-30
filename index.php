<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>bootstrap</title>
	<meta name="description" content="hello world">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body
{  
    width: 100%;
   height: 100%;
    margin: 0px;                        <!--for avoiding xtra horizontal spacing    -->
    padding: 0px;
    overflow-x: hidden; 
	background: url(aeroplane-in-sky.jpg) 50% 0 no-repeat fixed;
}
.text{
	color:white;
	font-size:14px;
}
#searchflight{
margin-top:30%;
box-shadow:5px;
}
</style>
<script type="text/javascript">
function validation()
{
var ck_name = /^[A-Za-z]{3,20}$/;
var source = myForm.source.value;
var destination = myForm.destination.value;
var input_date = myForm.date.value;
var date= new Date();
date=input_date.toString();
	
//var date = new Date();
//date=input_date.toISOString().substring(0, 10);
/*var e_date=date.split("-");

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
*/
 var errors = [];
	if (!ck_name.test(source)) {
  errors[errors.length] = "only characters are allowed while entering source station.";
 }
	if (!ck_name.test(destination)) {
  errors[errors.length] = "only characters allowed while entering destination station";
 }
 if(date=="")
	errors[errors.length] ="enter date";
/*if((dd>e_date[1])&&(mm>e_date[2])&&(yyyy>e_date[0])) {
    errors[errors.length] = "invalid date";
}*/
 /*function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
   alert("invalid date");
   }
 }*/
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 return true;
function reportErrors(errors){
 var msg = "Please Enter Valid Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "</br>" + numError + ". " + errors[i];
 }

 document.getElementById("modalcontent").innerHTML=msg;
}
}
</script>
</head>
<body>
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a href="http://localhost/flight_booking/New%20folder/new_index.php" class="navbar-brand">AirBucks.com</a>
         </div> <!--navbar header-->
		 <div class="collapse navbar-collapse" id="navbar-collapse">
         <a href="#subscribe" class="btn btn-info navbar-btn navbar-right">Subscribe</a>   
		 <ul class="nav navbar-nav">
			  <li><a href="#overview">Overview</a>
		 </div>
    </div> <!--end container-->
</nav><!-- end navbar-->

<section>
<div id="home" data-type="background" data-speed="10" class="pages" > 
</section>
<div class="container" style="padding:20% 0">
    <div class="row" >
				<form action="flight.php" class="form-inline" method="POST" name="myForm" onsubmit="javascript:return validation()"> 
                   <div class="col-md-2 col-sm-0 col-xs-12"></div>
				   <div class="col-md-2 col-sm-4 col-xs-12">
				   <div class="form-group">
			        <label for="source"class="text" style="color:black;">source---</label>
					<input type="text" class="form-control" id="source" name="source" placeholder="source station">
			   </div>
			   </div>
			   <div class="col-md-2 col-sm-4 col-xs-12">
			    <div class="form-group">
			        <label for="destination" class="text" style="color:black;">destination---</label>
					<input type="text" class="form-control" id="destination" name="destination" placeholder="destination">
			   </div>
			    </div>
			   <div class="col-md-2 col-sm-4 col-xs-12">
			   <div class="form-group">
			        <label for="date" class="text" style="color:black;">date--- </label>
					<input type="date" class="form-control" id="date" name="date" min="<?php 
					$times=date("Y-m-d");
					 echo $times;?>">
			   </div>
			    </div>
			   <div class="col-md-2 col-sm-12 col-xs-12">
			   <button type="submit" style="margin-top: 12%;" name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">find flights</button>
				 </div>
				<div class="col-md-2 col-sm-0 col-xs-12"></div>
				   </form>
        </div>
    </div>
</div>

 </div>
  </div>
<div class="jumbotron"style="background-color:rgba(255,255,255,0.5);">
    <div class="container text-center" id="overview">
	   <h2>OverView</h2>
	   <p>An Overview on Air Travel and Air Lines
Air travel is indeed the fastest way to cover long distances. 
In recent times it has become a lot cheaper and offers travelers a wide choice.
 In the airline industry there are two types of travelers: the business traveler and the leisure traveler.
 Business travelers are usually flexible on the price of the tickets, but not on the dates.
 Leisure travelers on the other hand are not flexible on the price, but are on the dates.
 Most airlines try to strike a balance between these two types of
 travellers and offer different types of schemes targeting one or the other.</p>
	</div><!--end container-->
</div><!--end jumbotron--> 
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p id="modalcontent"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
<!--call to action-->
<section>
  <div class="jumbotron"style="background-color:rgba(255,255,255,0.5);">   
      <div class="container text-center" id="subscribe">
	       <h3>use more this site</h3>
	       <p>enter your name and email address</p>
	       <form action="#" class="form-inline">
		       <div class="form-group">
			        <label for="subscription">subscribe</label>
					<input type="text" class="form-control" id="name" placeholder="your name">
			   </div>
			    <div class="form-group">
			        <label for="email">email address</label>
					<input type="email" class="form-control" id="email" placeholder="your email adddress">
			   </div>			   
			   <button type="submit" class="btn btn-default">subscribe</button>
			   <hr>
		   </form>
	  </div><!--end container-->
   </div><!--end will-->
</section> <!--call to action ends-->
<div id="footer">
   <div class="container text-center">
        <p>&copy;<a href="#">  AirBucks.com </a></p>	
      </div>
    </div>
   </body>
</html>
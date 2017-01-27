<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>bootstrap</title>
	<meta name="description" content="hello world">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script type="text/javascript">
function validation()
{
	var ck_name = /^[A-Za-z]{3,20}$/;
var source = myForm.source.value;
var destination = myForm.destination.value;
/*var date = myForm.date.value;
var e_date=date.split("-");

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
/*if((dd>e_date[1])&&(mm>e_date[2])&&(yyyy>e_date[0])) {
    errors[errors.length] = "invalid date";*/
//} 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 return true;
function reportErrors(errors){
 var msg = "Please Enter Valid Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 document.getElementById("modalcontent").innerHTML=msg;
 
}

}
</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a href="#" class="navbar-brand">book my flight</a>
         </div> <!--navbar header-->
		 <div class="collapse navbar-collapse" id="navbar-collapse">
         <a href="" class="btn btn-info navbar-btn navbar-right">download</a>
		 <ul class="nav navbar-nav">
		       <li><a href="#checkflights">search flights</a>
			  <li><a href="#feedback">feedback</a>
		 </div>
    </div> <!--end container-->
</nav><!-- end navbar-->
<!--jumbotron-->
<div class="jumbotron">
    <div class="container text-center">
	
	   <h1>flights</h1>
	   <p>because we take care of your journey</p>
	   <div class="btn-group">
	      <a href="" class="btn btn-lg btn-info">visit us</a>
		  <a href="" class="btn btn-lg btn-default">try us</a>
		  <a href="" class="btn btn-lg btn-info">contact us</a>  <!--orange for warning default for transparent-->
	   </div>
	</div><!--end container-->
</div><!--end jumbotron-->
<div class="container">
   <section>
     <div class="page-header" id="gallery">
		    <h2>gallery<small> check the gallery</small></h2>
     </div>
     <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
		      <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
			  <li data-target="#screenshot-carousel" data-slide-to="1"></li>
			  <li data-target="#screenshot-carousel" data-slide-to="2"></li>
			  <li data-target="#screenshot-carousel" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner">
		       <div class="item active">
			       <img src="pic1.jpg" alt="pic1" width="1360">
			   </div>
			   <div class="item">
			       <img src="pic2.jpg" alt="pic2" width="1360">
			   </div>
			   <div class="item">
			       <img src="pic3.jpg" alt="pic3" width="1360">
			   </div>
			   <div class="item">
			       <img src="pic4.jpg" alt="pic4" width="1360">
			   </div>
		  </div><!--end of carousel inner-->
		  <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
	           <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>    
		  <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
	           <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
	 </div>	 <!--end of carousel-->
   </section>
</div> 
 
<div class="container">
   
	   <div class="container text-center">
	<div class="page-header">
     	<h2>check out flights<h2>
	   </div>
	   </div>
	   <form action="flight.php" class="form-inline" method="POST" name="myForm" onsubmit="javascript:return validation()">       
	   <div class="row">
			  <div class="col-lg-3"></div>
			  <div class="col-lg-2">
		       <div class="form-group">
			        <label for="source">source</label>
					<input type="text" class="form-control" id="source" name="source" placeholder="source station">
			   </div>
			   </div>
			   <div class="col-lg-2">
			    <div class="form-group">
			        <label for="destination">destination</label>
					<input type="text" class="form-control" id="destination" name="destination" placeholder="destination">
			   </div>
			   </div>
			    <div class="col-lg-2">
			    <div class="form-group">
			        <label for="date">date</label>
					<input type="date" class="form-control" id="date" name="date" placeholder="enter date">
			   </div>
			   </div>
			   <div class="col-lg-3"></div>
        </div><!--end of row-->
			   <p></p>
			   <div class="row">
			   <div class="col-lg-5"></div>
			   <div class="col-lg-2">
			   <button type="submit" name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">find flights</button>
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
			   </div>
			   </div>
			   <hr>
			   
		</form>
</div>


<div class="container">
     <section>
	     <div class="page-header" id="feedback">
		    <h2>feedback<small> check the feedback</small></h2>
         </div>
		 <div class="row">
		    <div class="col-lg-4">
			   <blockquote>
			       <p>Sunny Deol (born Ajay Singh Deol, 19 October 1957)[1][3] is an Indian film actor, director and producer known for his works exclusively in Hindi cinema. He is the son of veteran actor Dharmendra, and the elder brother of actor Bobby Deol and Esha Deol. In a film career spanning over thirty years, Deol has won two National Film Awards, and two Filmfare Awards. Deol made his debut in the film Betaab for which he was nominated for the Filmfare Award for Best Actor . From there, he went on to star in numerous films in the 1980s and 90s like Tridev, Arjun, Kroadh, Ghayal, Vishwatma, Lootere, Darr, Damini – Lightning, Jeet, Ghatak, Border, Ziddi</p>
				    <footer>Sunny Deol</footer>
			   </blockquote>
			</div>
			 <div class="col-lg-4">
			   <blockquote>
			       <p>Sunny Deol (born Ajay Singh Deol, 19 October 1957)[1][3] is an Indian film actor, director and producer known for his works exclusively in Hindi cinema. He is the son of veteran actor Dharmendra, and the elder brother of actor Bobby Deol and Esha Deol. In a film career spanning over thirty years, Deol has won two National Film Awards, and two Filmfare Awards. Deol made his debut in the film Betaab for which he was nominated for the Filmfare Award for Best Actor . From there, he went on to star in numerous films in the 1980s and 90s like Tridev, Arjun, Kroadh, Ghayal, Vishwatma, Lootere, Darr, Damini – Lightning, Jeet, Ghatak, Border, Ziddi</p>
				    <footer>Sunny Deol</footer>
			   </blockquote>
			</div>
			 <div class="col-lg-4">
			   <blockquote>
			       <p>Sunny Deol (born Ajay Singh Deol, 19 October 1957)[1][3] is an Indian film actor, director and producer known for his works exclusively in Hindi cinema. He is the son of veteran actor Dharmendra, and the elder brother of actor Bobby Deol and Esha Deol. In a film career spanning over thirty years, Deol has won two National Film Awards, and two Filmfare Awards. Deol made his debut in the film Betaab for which he was nominated for the Filmfare Award for Best Actor . From there, he went on to star in numerous films in the 1980s and 90s like Tridev, Arjun, Kroadh, Ghayal, Vishwatma, Lootere, Darr, Damini – Lightning, Jeet, Ghatak, Border, Ziddi</p>
				    <footer>Sunny Deol</footer>
			   </blockquote>
			</div>
		 </div>
</div>

<!--call to action-->
<section>
   <div class="well">   <!--well adds greyish background-->
      <div class="container text-center">
	       <h3>use more this site</h3>
	       <p>enter your name and email address</p>
	       <form action="data.php" class="form-inline">
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

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
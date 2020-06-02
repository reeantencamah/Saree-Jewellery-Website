<?php

include("db.php");
$flag=0;
	
	if (isset($_POST['submit']))
	{
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$phone=$_POST['phone'];
		$msg=$_POST['subject'];
				
		$result=mysqli_query($con,"insert into contactusrequest(firstname,lastname,phone,subject)values('$fname','$lname','$phone','$msg')");
		
		$to='reean2304@gmail.com';
		$subject='Vi-Saree/Jewellery Contact Form Submission';
		$message="Name:".$fname ."" .$lname ."\n"."Phone: " .$phone."\n"."Message: ".$msg;
		$header="From: Vi-Saree/Jewellery Contact Form";
		//mail($to,$subject,$message,$header);
	
		if($result)
		{
			$flag=1;
		}
	}
?>

<html>
<head>
	<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
	margin-left:130px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.cont {
	width:750px;
    heigth:550px;
    border-radius: 15px;
    background-color: teal;
    padding: 10px;
    margin-left:300px;
	margin-top:50px;
}

/* Create two columns that float next to eachother */
.col {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

</style>
</head>
<body>
<div class="header">
	 <form class="search">
	 <img src="../images/home.png" width="25px" height="25px"> <a href="../home.html"align="left" >Home |</a>
		<a href="login.html"><img src="../images/login.png" width="20px" height="20px">  Login |</a> <img src="../images/cart.png" width="20px" height="20px"><a href=""> Cart </a>
	</form>	
	<br>
</div>
	
	<?php if($flag){?>
			<div style="background-color:teal;font-size:20px;font-weight:bold;text-align:center;padding-top:10px">Your request has been proceed.We will contact you soon.Thank you</div>	
	<?php }?>
		
<div class="cont">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p style="font-family:MV Boli">We're listening</p>
  </div>
  <div class="row">
    <div class="col">
      <img src="../images/map.png" style="width:100%;height:50%;margin-top:30px">
    </div>
    <div class="col">
	
      <form action="contactus1.php" method="POST">
	  
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="5*******">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Mauritius</option>
          <option value="canada">India</option>
          <option value="usa">Australia</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit" value="Submit">
		<br>
		
      </form>
	
    </div>
  </div>
</div>




	<div class="navbottom">
		<div class="footer" style="margin-top:35px">
			<div class="container">
				<img src="../images/footer.png"  width="1349" height="15">

				<div class="row" >
					<div class="column sidef" align="left">
						<h2 >Company</h2>
							<ul>
								<li><a href="aboutus.html">About Us</a><li>
								<li><a href="contactus.html">Contact Us</a><li>
								<li><a href="">Blog</a><li>
								<li><a href="">Terms</a><li>
								<li><a href="feedback.html">Submit Feedback</a><li>
							</ul>
					</div>
					
					<div class="column sidef" align="left">
						<h2 >Help</h2>
							<ul>
								<li><a href="">How to pay</a><li>
								<li><a href="">Payments</a><li>
								<li><a href="">Shipping</a><li>
								<li><a href="">FAQ</a><li>
							</ul>
					</div>
					
					<div class="column sidef2"align="left">
						<h2 align="center">Our Social Links:-</h2>
						<center>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google"></a>
							<a href="#" class="fa fa-youtube"></a>
							<a href="#" class="fa fa-instagram"></a>
						</center>
					</div>
					<div class="column sidef2" style="text-align:center">
						<h4>SUBSCRIBE AND GET 10% OFF</h4>		
							<input type="email" name="email" placeholder="Enter Email here.." style="height:35px;width:200px">
							<button type="Submit" style="height:35px;width:70px;background-color:CadetBlue;border:none;font-size:15px;font-weight:bold">Join</button>
							<p style="font-size:11px;margin-top:60px">© 2018 VI SAREE & JEWELLERY. ALL RIGHTS RESERVED.</P>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>
</html>
<html>
  <head>
    <title>Contact Me</title>
  <link rel="stylesheet" type= "text/css" href="css/indexcss.css"> 
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <script type="text/javascript" src="css/login.js"></script>
  <style>
  
.heading
{
	color: red;
	align: center;
	margin: 60px 200px;
}
#contactme
{
		padding:0px 100px;
		margin: 0px 110px;
		color: #c4fb6d;
		line-height: 40px;
		
		font-size: 20px;
		text-decoration: bold;
}

.emailme
{
	font-family: 'Staatliches', cursive;
	position: relative;
	top: 80px;
	left: 80px;
	padding: 50px 0px;
	color: #c4fb6d;
	font-size: 20px;
	text-decoration: bold;
	font-size: 32px;
	
}
.con-part2
{
	 position: relative;
	 top: 120px;
	 right: 100px;
	 height:295px;
	 width:350px;
	 text-align:center;
	 background:black;
	 border:4px solid white;
	 border-radius:50px;
	 text-align:center;
	 margin: 50px 0px;
}

.con-form
{
	position: relative;
	buttom: 10px;
}
input[type=text]
{
	width: 250px;
	border: 2px solid pink;
	border radius:4px;
	margin: 8px;
	outline:none;
	padding: 8px;
	transition: 3s;
	
}



</style>

  </head>
  <body>
	
	<?php
	  include 'header.php';
	 ?>
	 
	
		<div class="con-container">
		<div class="con-part1">
			<h1 class="heading">Contact Me</h1>
			<P id="contactme"><b>Raju Bajracharya</b></br>
			 7899 McLaughlin Rd, Brampton, </br>ON L6Y 5H9 </br> Canada
				
	 	
		</div>
		<p class="emailme"> Email Me</p>
	 <div class="con-part2">
					<form class="con-form" action="contactme.php" method="POST" onsubmit="return checkFormFields()">
					<input type="text" id="mail" name="email" placeholder="Your email"></br>
					<input type="text" id="phone-number" name="number" placeholder="Phone Number"></br>
					
					<input type="text" id="homepageadd" name="homepageadd" placeholder="Home Page Address"></br>
					<textarea name="message" id="feedback" placeholder="Feedback" rows="6" cols="32"></textarea></br>
					</br><button type="submit" name="Submit"><b>Submit</b></button>
					</form>
	 </div>
	</div>

	 
	

	 <footer id="foot">
	 <?php
	  include 'footer.php';
	 ?>
	  </footer>
	  
	
	
  </body>
</html>
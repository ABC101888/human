<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="utf-8">
	<meta charset=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>
	<div class="topnav">
	  	<a href="index.php">Home</a>
	  	<a href="#contact">Contact</a>
	  	<a href="#about">About Us</a>
	</div>

	<div class="row" id="home">
		<div class="leftcolumn">
			<div class="card">
			<h2>Submission</h2>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									
				<table align="center" accesskey=""border="0" cellpadding="5" cellspacing="0">
					<tr> 
						<td>
							<label for="fName"><b>Photo<b/></label><br/>
							<input type="file" name="pic" accept="image/*"> 
							<br>
							<br>
						</td> 
					</tr> 

					<tr> 
						<td style="width: 50%">
							<label for="fName"><b> Full Name *<b/></label><br/>
							<input name="fName" type="text" style="width: 260px" value="<?php if(isset($_POST['fName'])){echo $_POST['fName'];}?>"/><br/>
							<?php if(isset($output['fName'])){echo "<font color='yellow'>".$output['fName']."</font>";}?><br/>    
						</td> 

						<td style="width: 50%">
							<label for="DOB"><b>Age*</b></label><br/>
							<input name="age" type="text" style="width: 260px" value="<?php if(isset($_POST['age'])){echo $_POST['age'];} ?>"/><br/>
							<?php if(isset($output['age'])){echo "<font color='yellow'>".$output['age']."</font>";} ?><br/>    
						</td> 
					</tr> 

					<tr>
						<td colspan="2">
							<label for="gender"><b>Are you willing to gender?*</b></label><br/>
							<input name="gender" type="radio" value="Yes" <?php if (isset($_POST['gender']) && $_POST['gender'] == "Yes") echo 'checked="checked"';?>>Male
							<input name="gender" type="radio" value="No" <?php if (isset($_POST['gender']) && $_POST['gender'] == "No") echo 'checked="checked"';?>>Female 
							<?php if(isset($output['gender'])){echo "<font color='yellow'>".$output['gender']."</font>";}?>
							<br/>
							<br>
						</td> 
					</tr> 
					
					<tr> 
						<td>
							<label for="height"><b>Height*</b></label><br/>
							<input name="height" type="text" style="width: 260px" value="<?php if(isset($_POST['height'])){echo $_POST['height'];}?>"/><br/>
							<?php if(isset($output['height'])){echo "<font color='yellow'>".$output['height']."</font>";} ?><br/>  
						</td> 
						
						<td>
							<label for="weight"><b>weight</b></label><br/>
							<input name="weight" type="text"  style="width: 260px" value="<?php if(isset($_POST['weight'])){echo $_POST['weight'];}?>"/><br/>
							<?php if(isset($output['weight'])){echo "<font color='yellow'>".$output['weight']."</font>";} ?><br/>  
						</td> 
					</tr> 
					
					<tr> 
						<td colspan="2">
							<label for="height"><b>Physical Description*</b></label><br/>
							<textarea rows="4" cols="50"></textarea> 
						</td> 
					</tr> 
					
					<tr>
						<td>
							<span style="font-size:22px">Contact Us</span>
						</td>
					</tr>
					
					<tr> 
						<td style="width: 50%">
							<label for="Phone"><b>Phone (XXX-XXX-XXXX)*</b></label><br/>
							<input name="Phone" type="text" style="width: 260px" value="<?php if(isset($_POST['Phone'])){echo $_POST['Phone'];}?>"/><br/>
							<?php if(isset($output['Phone'])){echo "<font color='yellow'>".$output['Phone']."</font>";} ?><br/>  
						</td> 

						<td style="width: 50%">
							<label for="Email_Address"><b>Email *</b></label><br/>
							<input name="Email_Address" type="text"  style="width: 260px" value="<?php if(isset($_POST['Email_Address'])){echo $_POST['Email_Address'];}?>"/><br/>
							<?php if(isset($output['Email_Address'])){echo "<font color='yellow'>".$output['Email_Address']."</font>";} ?><br/>  
						</td> 
					</tr> 

					<tr> 
						<td colspan="2">
							<label for="reward"><b>Reward</b></label><br />
							<input name="reward" type="text"  style="width: 535px" value="<?php if(isset($_POST['reward'])){echo $_POST['reward'];}?>"/><br/>
							<?php if(isset($output['reward'])){echo "<font color='yellow'>".$output['reward']."</font>";}?><br/>   
						</td> 
					</tr> 

					<tr> 
						<td colspan="2" style="text-align: center;">
							<input name="submit" type="submit" class="registerbtn"/>
						</td> 
					</tr>
				</table>
			</form>
			</div>
			

			
			
			<div class="card">
				<h2>Heading</h2>
				<h5>Title description, Sep 2, 2017</h5>
				<div class="fakeimg" style="height:200px;">Image</div>
				<p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		</div>
	  <div class="rightcolumn">
		<div class="card">
		  <h2 id="about">About Us</h2>
		  <div></div>
		  <p></p>
		</div>
		<div class="card">
		  <h3>Contact Us</h3>
			<a href="#" class="facebook"><i class='fab fa-facebook' style='font-size:48px;color:#3b5998'></i></a>
			<a href="#" class="twitter"><i class='fab fa-twitter' style='font-size:48px;color:#1da1f2'></i></a>
			<a href="#" class="reddit"><i class='fab fa-reddit' style='font-size:48px;color:#ff4500'></i></a>
		</div>
	  </div>
	</div>

<div class="footer">
	<div style="text-align:center">
		<h3 id="contact" style="font-size: 24px; margin:8px">Find'em Kids</h3>
		<span class="footer_text" style="font-size: 10px;">Copyright © 2019 All Rights Reserved. </span>
	</div>
</div>

</body>
</html>
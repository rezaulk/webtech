<?php 
	session_start(); 
	var_dump($_SESSION);
	if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:../SignIn.php");
		}
?>

<html>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="1" width="100%" height="100%">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="main.html"><img src="../image/image.png" width="150"></a></td>
							<td align="right">
								<font size="4"><a href="inbox.html">Messages&nbsp;</a>
								<a href="dashboard.html">Dashboard&nbsp;</a>
								<a href="../PublicHome.html">LogOut</a></font>
							</td>
							<td><a href="buyer.html"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>
							
				</td>
			</tr>
			<tr >
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="25%"></td>
				<td width="30%">	
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="10%" height="100%">
				</td>			
				<td width="50%">
				        <br/><a>Order Task</a>
						<table border="0" width="100%" height="100%">
							<tr height="30%">
								<td >
									<table width="100%" height="100%" border="1" cellspacing="0">
										<tr height="5%">
										   
										   <th>Task</th>
										   <th>progress</th>
										   <th>deadline</th>
										</tr>
										 <tr height="5%">
										 
										   <td>Task1</td>
										   <td>completed</td>
										   <td>nov 29,2017</td>
										</tr>
										 <tr height="5%">
										 
										   <td>Task2</td>
										   <td>completed</td>
										   <td>nov 9,2017</td>
										</tr>
										 <tr height="5%">
										 
										   <td>Task3</td>
										   <td>completed</td>
										   <td>nov 19,2017</td>
										</tr>
										<tr height="5%">
										   <td>Task4</td>
										   <td>completed</td>
										   <td>nov 19,2017</td>
										</tr>
										
									 </table>
										
								</td>
							</tr>
							
							<tr height="20%"><td colspan="3"></td></tr>
							<tr >
								<td colspan="3">
								<b><h3>Order is Completed</h3></b>
							</tr>
							
							<tr >
								<td colspan="3">
								<a href="../OrderFile/<?php echo $_REQUEST['fileName']; ?>" download>Click here to download</a>
							</tr>
							</tr>
							<tr height="70%">
								<td>
									<h3>Write a short review</h3>
									
									
									<textarea rows="8" cols="50">
											Enter text here...</textarea>
									<button><font size="3"><a href="contact_seller.html">Submit</a></font></button>
								</td>
							</tr>
						</table>
									
				</td>
				<td width="40%">
				</td>
			</tr>
			<tr colspan="3" height="20%">
			    <table border="0" width="100%">
				      <hr>
					    <tr>
					       <th align="left">CATEGORIES</th>
						   <th align="left">ABOUT</th>
						   <th align="left">COMMUNITY</th>
						   <th align="left">SUPPORT</th>
						   <th align="left">FOLLOW US</th>
					    </tr>
					    <tr>
						<td> <a href="Graphics.html">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="digital.html">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="writing.html">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="video.html"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="music.html"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="programing.html">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="business.html">Business</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				   </tr>
				</table>
				   
			</tr>
				
				
			<tr height="5%">
						<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>
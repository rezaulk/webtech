<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
 
	 //var_dump($languages[1]['language']);
?>

<html>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="1" width="100%" height="100%" cellspacing="0">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="admin.html"><img src="../image/image.png" width="150"></a></td>
							<td>
							</td>
							<td align="right">
								<font size="4"><a href="inbox.html">Messages&nbsp;</a>
								<a href="admin.php">Dashboard&nbsp;</a>
								<a href="../PublicHome.html">LogOut</a></font>
							</td>
							<td><a href="profile.html"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>		
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="20%"></td>
				<td width="20%">	
					<a>Dashboard&nbsp;|</a>
					<a href="gigs_admin.php">Gigs|</a>
					<a href="earnings_admin.php">Earning&nbsp;|</a>
					<a href="inbox.html">Inbox&nbsp;|</a>
					<a href="setting.html">Settings&nbsp;</a> 
				</td>
				<td width="60%"></td>
            </tr>					
			<tr height="50%">	
                <td width="15%" height="100%"></td>			
				<td width="15%" height="100%">
					<table width="100%" height="100%" border="0">
						<tr width="40%">
							<td width="30%" align="center"><img src="../image/user-avatar.jpg" width="100"><br/><a>Faysal Ahmed</a></td>
							<td width="70%"></td>
						</tr>
						<tr  width="60%">
							<td colspan="2">
								<table width="100%">
									<tr>
									    <td>
											Total User 5			
										</td>	
									</tr>	
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td width="70%" height="100%">
					<table border="1"  width="100%" height="100%">
						<tr>
							<td width="50%" >
							    <a>Seller</a>
								<table border="1" cellspacing="0" width="100%" height="40%">
									<tr>
									     
										<th>Seller</th>
										 <th>Gigs</th>
										 <th>active Gig</th>
										 <th>LastActive Time</th>
									</tr>
									<?php
										 $persons=getsellerFromDb();

										//echo "<script>alert('Programming1')</script>";
										$i=0;
										//var_dump($persons);
										
										foreach ($persons as $value) 
										{
											
										  //var_dump($value);
										   $seller=$value['uName'];
										   $totalgig=getallgigFromDb($seller);
										   $activegig=getactivegigToDb($seller);
										   $lastactivetime=getlastactiveToDb($username);
										   $date=$lastactivetime['activeDate'];
											echo "<tr>";
											
											echo "<td >$seller</td><td>$totalgig</td><td>$activegig</td><td>$date</td>";
											echo "</tr>";
											$i++; 
										}
									?>
								</table>
							</td>
							<td >
							    <a>Buyer</a>
								<table border="1" cellspacing="0" width="100%" height="40%">
									<tr>
										<th>Seller</th>
										 <th>Buy GIg</th>
										 <th>Total spending</th>
										 <th>LastActive Time</th>
									</tr>
									<?php
										 $persons=getBuyerName();
										 
										//echo "<script>alert('Programming1')</script>";
										$i=0;
										foreach ($persons as $value) 
										{
											$buyer=$value['uName'];
											$gig=buyTotalGig($buyer);
											$spending=spendingTodb($buyer);
											$spend=(int)$spending['totalSpend'];
										  //var_dump($spend);
										   $lastactivetime=getlastactiveToDb($buyer);
										   $date=$lastactivetime['activeDate'];
										  
										   //var_dump($gig);
											echo "<tr>";
											
											echo "<td>$buyer</td><td>$gig</td><td>$spend</td><td>$date</td>";
											echo "</tr>";
											$i++; 


										}
									?>
								</table>
							</td>
						</tr>
						<tr>
						    <td>
							    <br/>
								<table>
									 <tr>
										<td width="40%">
											<table border="1" cellspacing="0">
												<th colspan="3">Top five Buyer in last Month</th>
													<tr>
														<th>User</th>
														<th>Order Recieved</th>
														<th>Earned</th>
													</tr>
													<tr align="center">
														<td>Raaz</td>
														<td>32</td>
														<td>3000$</td>
													</tr>
													<tr align="center">
														<td>Shahadat</td>
														<td>30</td>
														<td>2900$</td>
													</tr>
													<tr align="center">
														<td>Rezaul</td>
														<td>29</td>
														<td>2800$</td>
													</tr>
													<tr align="center">
														<td>Robi</td>
														<td>25</td>
														<td>2500$</td>
													</tr>
													<tr align="center">
														<td>Tanim</td>
														<td>21</td>
														<td>2000$</td>
													</tr>
											</table>
									    </td>
										<td width="20%">
										
										</td>
										<td width="40%">
											<table border="1" cellspacing="0">
												<th colspan="3">Top five Buyer in last Month</th>
													<tr>
														<th>User</th>
														<th>Order Recieved</th>
														<th>Earned</th>
													</tr>
													<tr align="center">
														<td>Raaz</td>
														<td>32</td>
														<td>3000$</td>
													</tr>
													<tr align="center">
														<td>Shahadat</td>
														<td>30</td>
														<td>2900$</td>
													</tr>
													<tr align="center">
														<td>Rezaul</td>
														<td>29</td>
														<td>2800$</td>
													</tr>
													<tr align="center">
														<td>Robi</td>
														<td>25</td>
														<td>2500$</td>
													</tr>
													<tr align="center">
														<td>Tanim</td>
														<td>21</td>
														<td>2000$</td>
													</tr>
											</table>
										</td>
						            </tr>
								</table>
							</td>
						</tr>
					</table>
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
						<td><hr><p align="center">COPYRIGHT @  2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>
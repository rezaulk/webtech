<?php   session_start(); 
        //require_once "../../../data/person_data_access(reza).php";
        include("../../../service/person_service(reza).php");
?>
<?php 
     
     $name = $_SESSION['username'];
	 $persons=accessGig($name);
	 //var_dump($persons[0]['price']);
?>

<html>
    <head>
	    <title>HireFire</title>
	</head>
	<body>
		<table border="0"  height="100%" width="100%">
			<tr  height="10%">
			    <td  width="40%" colspan="2">		   
					<table  width="100%" border="0">
						<tr>
							<td><a href="../main.html"><img src="../../image/image.png" width="150"></a></td>
							<td><input type="text" name="search" placeholder="Search.." size="70" height="20">
							<button>Search</button></td>
							<td align="right">
								<font size="4"><a href="../inbox.html">Messages&nbsp;</a>
									<a href="../Orders.html">Orders&nbsp</a>
									<a href="../Postrequest.html">Postrequest&nbsp;</a>
									<a href="../dashboard.html">Dashboard&nbsp;</a>
									<a href="../../PublicHome.html">LogOut</a>
								</font>
							</td>
							<td><a href="../profile.html"><img src="../../image/b.png" width="50"></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="5%">
				<td colspan="2"><hr/></td>
			</tr>
			<tr height="65%">
				<td width="25%"></td>
				<td>
				<form action="../profile.html">
					<table width="100%" cellspacing="15">
						<tr>
							<td width="10%">
								Gig Title: 
							</td>
							<td width="90%">
								<input size="50" value="<?php echo $persons[0]['gigTitle'] ?>"/>
							</td>
						</tr>
						<tr>
							<td>Price:</td>	
							<td><input value="<?php echo $persons[0]['price'] ?>"/></td>	
						</tr>
						<tr>
							<td>Description:</td>
							<td><textarea rows="10" cols="35" ><?php echo $persons[0]['gDescription'] ?></textarea> &nbsp; <img src="../../image/hint.png" height="15" title="Separate by comma"/></td>
						</tr>
						<tr>
							<td>Image:</td> 
							<td><input type="file"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit"/></td>
						</tr>
					</table>
				</form>	
				</td>
			</tr >
			
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
						<td>Graphics & Design</td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
						
					   </tr>
						<tr>
						<td>Digital Marketing</td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
						
					   </tr>
						<tr>
						<td>Writing & Translation</td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
						
					   </tr>
						<tr>
						<td> Video & Animation</td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
						
					   </tr>
						<tr>
						<td> Music & Audio</td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
						
					   </tr>
						<tr>
						<td> Programming & Tech</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					   </tr>
					   
						<tr>
						<td>Business</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					   </tr>
					</table>
					
			</tr>
		</table>
    </body>
</html>		
					
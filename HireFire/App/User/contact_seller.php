<?php
	session_start();
?>
<?php 
	require_once "../../data/person_data_access(reza).php";
		require_once "../../service/validation_service(tanim).php";
?>
<?php
?>

<?php 
     $username = $_REQUEST['username'];
	$buyer=accessProfileBuyer($username);
	  $month=monthReturn($buyer[0]['joiningDate']);
	 $persons=accessProfileSeller($username);
	 var_dump($persons);
	 $day=getJoiningDateFromDb($username);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($username));
	 
	 $skills=(getSkillsBySellerFromDb($username));
	 
	 
	 //var_dump($languages[1]['language']);
?>

<table>
	<tr>
		<td colspan="4">
			<table  width="100%" border="0">
				<tr>

					<td><a href="main.html"><img src="../image/image.png" width="150"/></a></td>
					<td><input type="text" name="search" placeholder="Search.." size="70" height="20">
						<button>Search</button>
					</td>
					<td align="right">
						<font size="4"><a href="inbox.html">Messages&nbsp;</a>
						<a href="Orders.html">Orders&nbsp</a>
						<a href="Postrequest.html">Postrequest&nbsp;</a>
						<a href="dashboard.html">Dashboard&nbsp;</a>
						<a href="../PublicHome.html">LogOut</a></font>
					</td>
					<td><img src="../image/b.png" width="50"></td>
				</tr>		
			</table>
		</td>
	</tr>
	<tr >
				<td colspan="4"><hr/></td>
			</tr>
	<tr height="600">
		<td width="1%"></td>
		<td valign="top" align="center" width="20%">
			<img src="../image/b.png" width="30%" alt="TANIM"/>
			<br/>Ibrahim Khalil<hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
					<button><font size="3"><a href="send_message.html">Contact Me</a></font></button>
				</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/location.png"/></td>
				<td width="60%">Form</td>
				<td align="right">Bangladesh</td>
			</tr>
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right">April 2017</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/time.png"/></td>
				<td>Average Response Time</td>
				<td align="right">1Hrs.</td>
			</tr>
			
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Languages</font></b>
				<br/>English</td>
				
			</tr>
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			
			<tr>
				<td colspan="2"><font size="4"><b>Linked accounts</font></b>
				<ul>
					<li>Google</li>
					<li>Facebook</li>
					<li>Linkedin</li>
				</ul>				
				</td>
			</tr>
			</table>
			
		</td>
			<td width="5%"></td>
		<td width="60%" valign="top">
		<h1>Active Gigs	</h1><br/><br/>
		<table cellspacing="40">
		<tr>
			<td width="20%">	
				<img src="../image/project1.jpg" width="30%"/><br/><br/>
				<a href="../gig/details.html">I will do c or c++ project for you.</a>
			</td>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>
<?php   session_start(); 
        require_once "../../data/person_data_access(reza).php";
        //require_once "../../service/person_service.php";
		if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:../SignIn.php");
		}
?>
<?php 
     
     $username = $_REQUEST['username'];
	 $buyer=accessProfileBuyer($username);///For checking if the user is not seller
	 $persons=accessProfileSeller($username);
	 //var_dump($persons);
	 $day=getJoiningDateFromDb($username);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($username));
	 
	 $skills=(getSkillsBySellerFromDb($username));
	 
	 
	 //var_dump($languages[1]['language']);
?>
<?php
	$imageLocationWithImageName="../uploads/".$username.".jpg";
	$filename = $imageLocationWithImageName;

	if (file_exists($filename)) {
		//echo "<script>alert('The file exists')</script>";
	} else {
		$imageLocationWithImageName="../uploads/default.jpg";
	}
?>
<?php
	//var_dump($GLOBALS);
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$filename=$_FILES['file']['name'];//ByDefault Name of the uplpoaded file
		$tmp_name=$_FILES['file']['tmp_name'];//ByDefault where the image saved
		$size=$_FILES['file']['size'];
		if(isset($filename))
		{
			if($size<5000000){
				if($filename!=""){
					$fileExt=explode(".",$filename);
					if(count($fileExt>=2)){
						if(($fileExt[1]=='jpg')||($fileExt[1]=='png')||($fileExt[1]=='jpeg')||($fileExt[1]=='JPG')||($fileExt[1]=='PNG')||($fileExt[1]=='JPEG')){
							$location="../uploads/";
							if(move_uploaded_file($tmp_name,$location.$username.".jpg")){
								$imageLocationWithImageName="../uploads/".$username.".jpg";
								echo "<script>alert('Uploaded')</script>";
							}
							
						}
						else{
							echo "<script>alert('Please check your image format')</script>";
						}
					}
					//var_dump($fileExt);
				}
			}
			else{
				echo "<script>alert('Your File size is too large')</script>";
			}
			
		}
		
	}
?>


<form action="profile.php" method="POST" enctype="multipart/form-data">
<table border="0">
	<tr>
		<td colspan="4">
			<table  align="center" width="100%" border="0">
				<tr>
					<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"/></a></td>
					<td></td>
					<td align="right">
						
						<a href="logout_handler.php">LogOut</a></font>
					</td>
					<td width="5"><a href="profile.php"><img src="../image/b.png" width="50"></a></td>
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
			<img src="<?=$imageLocationWithImageName?>" width="30%" alt="profilepic"/>
			<br/><?php echo $username;?>
			<br/>Seller<br/>
			
			<input type="file" name="file" value="imageUpload"/>
			<input type="submit" value="Upload"/>
			
			
			
			<hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
					<button><font size="3"><a href="../Buyer/buyer.php">View as Buyer</a></font></button>
				</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/location.png"/></td>
				<td width="60%">From</td>
				<td align="right"> <?php echo $persons[0]['country']?></td>
			</tr>
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right"><?php echo "$day"?></td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td></td>
				<td align="right"></td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td></td>
				<td align="right"></td>
			</tr>
			
			<tr height="40">
				<td></td>
			</tr>
			
			<tr>
				<td colspan="2"><font size="4"><b></b></font></td>
				<td align="right"></td>
			</tr>
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Languages</font></b><br/>
				 <?php for($i=0;$i<count($languages);$i++)
				    echo $languages[$i]['language']."<br/>";
				 ?>
				
				</td>
				<td valign="top" align="right">Add new</td>
			</tr>
			<tr height="10">
				<td colspan="3"></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b></b></font></td>
				<td align="right"></td>
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
				<img src="../image/project1.jpg" width="100%"/><br/><br/>
				<a href="../gig/details.html">I will do c or c++ project for you.</a>
			</td>
			<td>	
				<img src="../image/addgig.png"/><br/><br/>
				<button><a href="Create/create1.php">Create a new gig</a></button>
			</td>
			
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>
</form>
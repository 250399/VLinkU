<?php
session_start();
require_once('connect.php');
?>
<html>
<head>
	<link rel="icon" type="image/jpg" href=./"hand.jpeg"/ >
<title>VlinkU</title>
<style>

	body{
		background-size: 100%;
			
	} 
img {
  border-radius: 6px;
}



#nav a{
	padding : 25px;
}
#nav a:hover{
	background-color: red;
	opacity :0.2;
}
#nav{
	text-indent: 50px;
	height: 70px;
	width: 100%;
	 
}


#nav{
	margin-left:-10px;
	margin-top:-10px;
	text-indent: 50px;
	height: 70px;
	width: 1365px;
	background-color:black;
	 
}

#nav a{
	
	text-decoration: none;
	line-height: 65px;
	color: white; 
}
#news{
	margin-left: 250px;
	float : left;
}
#nav2{
	margin-top: 5px;
	opacity: 0.3;
	background-color: gray;
	height: 700px;
	width: 200px;
}
#nav ol li a{
}
</style>
</head> 
<body>

		<div id="nav">
				<img src="hand.jpg" height="55" width="75" style="float :left; margin-top: 6px; margin-left: 40px">			
				
				<a href="">BUSINESS</a>
				&nbsp;
				&nbsp;				
				<a href="about.html">ABOUT US</a>
				&nbsp;
				&nbsp;
				<a href="">HELP</a>
				&nbsp;
				&nbsp;
				<a href="">CONTACT</a>
				<?php
				if(isset($_SESSION['UID']))
				{

					echo "&nbsp;";
					echo "&nbsp;";
					echo "<a href='profile.php'>MY PROFILE</a>";
				}
				else
				{
					echo "&nbsp;";
					echo "&nbsp;";
					echo "<a href='L.php'>LOGIN</a>";

				
				}
				?>	
				<?php
				if(isset($_SESSION['UID']))
				{
					echo "<a href='Logout.php ' style='float: right; margin-top:-20px;height:40px'>LOGOUT</a>";
				}
				?>
				<div id="nav2">
				Advertising
				
				</div>
				
			
		</div>
		<strong>
		<div id="news">
			
			
			<br/>
			<br/>
		<?php
		if(isset($_SESSION['UID'])){
	
	echo "<div>";
	echo '
	<form method="post" action="post.php">
			<textarea  name="tarea" id="tarea" style="width:700px;height:60px"></textarea>
			</br>			
			<button>POST</button>
		</form>';
echo "<hr/>";
		}?>
<br/>

		<?php
		
			
			$result=mysqli_query($conn,"select * from problem_stmt left outer join comment_table on problem_stmt.id=comment_table.cid  order by problem_stmt.id desc;");
				while($res=mysqli_fetch_array($result))
		{
			
			
			//echo "<ul>";
			echo "<style='list-decoration-type:none' li >";
			$email=$res['email'];
			
			$_SESSION['email']=$email;
			
			
			
			//echo "<a href='my_profile.php' style='text-decoration:none;'><h3>$res[email]</h3></a>";
			echo "<form action='my_profile.php' method='post' ><button name='pbtn'
			style='background:none;background-color:gray;
			background: rgba(255,255,255,0.5);margin:none;padding:10px;width:700px;text-align:left;'
			value=".$res['email'].">".$res['email']."</button></form>";
			
			echo "<textarea readonly style='width:700px;background-color:white;text-decoration:none;color:black;list-decoration-type:none;
			padding:15px' >";
			echo "$res[stmt]";
			echo "</textarea>";
			
		echo "<br/>";	

			if($res['commit']==1){
				echo "COMMITED BY";
				echo $res['comitted_by'];
			}else{
				
			echo "<form action='commit.php' method='post' style='padding:0;'><button name='sbtn' value=".$res['id'].">COMMIT</button></form>";		
					
			}
			
			echo "<br/>";
			
			//echo $res['comment'];

			
			echo '<form method="post" action="post_comment.php">';
			//echo "<textarea name='cmtarea' style='width:700px;background-color:white;height:10px;text-decoration:none;color:black;list-decoration-type:none;
			//padding:15px' ></textarea>";
			
			echo "<button type='submit' name='cmtbox' value='$res[id]'>comment</button>";
			
			echo "</form>";

			echo "<hr style='width:900px; background-color:black;'>";
				

		}
			echo "</li>";
			echo "</ul>";
			
		?>
		
	</div>
		</div>
		</strong>
	</div>
</body>
</html>

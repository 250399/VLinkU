
			$result=mysqli_query($conn,"select * from problem_stmt left outer join comment_table on problem_stmt.id=comment_table.cid group by id order by problem_stmt.id desc");
				while($res=mysqli_fetch_array($result))
		{
			
			
			//echo "<ul>";
			echo "<style='list-decoration-type:none' li >";
			$email=$res['email'];
?>

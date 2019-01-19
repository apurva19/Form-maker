<html>
<title>Form</title>
<head>

<style>
body{
	color:<?php echo ''.$_POST["fcolor"].'';?>;
	background-color:<?php echo ''.$_POST["bcolor"].'';?>;
	font-size:<?php echo ''.$_POST["fsize"].'';?>;
	font-family:<?php echo ''.$_POST["ffamily"].'';?>;
}
#lab{
	display:block;
	float:left;
	margin-left:20%;
	position:relative;
	
}
#fills{
	display:block;
	margin-left:40%;
	float:none;
	position:relative;
}
.submit{
	margin:0 auto;
	width:200px;
}

</style>

</head>
<body>

	<form id="form" class="foram" method="POST" onload="createForm()" action="success.php">
		<fieldset>
		<legend style="font-size:40px;"><?php echo ''.$_POST["header"].'';?></legend>
		<div id="lab">
		<?php 
			$ln=$_POST["member"];
			for($i=1; $i<=$ln; $i++)
			{
				echo "".$_POST["label".$i]."<br><br>";
			}
		?>
		</div>
		<div id="fills">
		<?php
			
			$ln=$_POST["member"];
			for($i=1; $i<=$ln; $i++)
			{
				$typ=$_POST["field".$i];
				if($typ=="text")
				{
					echo '<input type="text" name="field'.$i.'"><br><br>';
				}
				elseif($typ=="date")
				{
					echo '<input type="date" name="field'.$i.'"><br><br>';
				}
				elseif($typ=="password")
				{
					echo '<input type="password" name="field'.$i.'"><br><br>';
				}
				elseif($typ=="email")
				{
					echo '<input type="email" name="field'.$i.'"><br><br>';
				}
				elseif($typ=="select")
				{
					echo "<select name='field'".$i.">";
					$num=$_POST["subnum".$i];
					for($j=1; $j<=$num; $j++)
					{
						$op = $_POST["sublabel".$i.$j];
						echo "<option value=".$op.">".$op."</option>";
					}
					echo "</select><br><br>";	
				}
				elseif($typ=="radio")
				{
					$num=$_POST["subnum".$i];
					for($j=1; $j<=$num; $j++)
					{
						$op = $_POST["sublabel".$i.$j];
						echo "<input type='radio' name='field'".$i." value=".$op.">".$op."</input>&nbsp&nbsp";
					}
					echo "<br><br>";	
				}
				elseif($typ=="checkbox")
				{
					$num=$_POST["subnum".$i];
					for($j=1; $j<=$num; $j++)
					{
						$op = $_POST["sublabel".$i.$j];
						echo "<input type='checkbox' name='field'".$i." value=".$op.">".$op."</input>&nbsp&nbsp";
					}
					echo "<br><br>";	
				}
				
			}
		
		?>
		</div>
		<div class="submit"><input type="submit" value="submit"></input></div>
		
		</fieldset>
	</form>
</body>
</html>
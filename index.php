<html>
<title>
	Form Maker
</title>
<head>
 <script type='text/javascript'>
		function addSubOptions(i)
		{
			var n = document.getElementById("subnum" + i).value;
			var c3=document.getElementById("subsubdiv"+i);
			c3.innerHTML="";
			for(var j=1;j<=n;j++)
			{
				c3.innerHTML = c3.innerHTML + '<input type="text" name="sublabel'+i+j+'" id="sublabel'+i+j+ '" placeholder="sublabel'+i+j+'"><br><br>';	
			}
		}
		function addSubfield(i){
			var a1=document.getElementById("field"+i).value;
			//console.log(a1);
			var c2=document.getElementById("subdiv"+i);
			c2.innerHTML="";
			if(a1 =="checkbox" || a1 == "radio" || a1 == "select" )
			{
				c2.innerHTML = c2.innerHTML + '<input type="number" name="subnum' + i + '" placeholder="enter the number" id ="subnum' + i + '" onkeyup="addSubOptions('+i+');" onchange="addSubOptions('+i+');"><br><br><div id="subsubdiv'+i+'" />';
			}
			else
			{
				c2.innerHTML="";
			}
		}
        function addFields(){
			var num = document.getElementById("member").value;
			var c1=document.getElementById("container");
			c1.innerHTML="";
			var i;
			for(i=1;i<=num;i++)
			{
				c1.innerHTML = c1.innerHTML + '<input type="text" name="label'+i+'" id="label'+i+'" placeholder="label ' + i + '"><br><br><select onchange="addSubfield('+i+');" name="field' + i + '" id="field'+ i + '"><option value="text">Text</option><option value="radio">Radio</option><option value="select">Select</option><option value="date">Date</option><option value="email">Email</option><option value="password">Password</option><option value="checkbox">Check box</option></select><br><br><div id="subdiv'+i+'"/>';
				
			}
		}
    </script>
<style>
.form{
	display:block;
	width:70%;
	margin:0 auto;
	font-size: 20px;
}
.label{
	display:block;
	margin-left:20%;
	float:left;
	position:relative;
}
.fill{
	display:block;
	margin-left:40%;
	float:none;
	position:relative;
}
.submit{
	margin:0 auto;
	width:200px;
}
.fields{
	display:block;
}
.head{
	display:block;
	width:100%;
}
.none{
	display:none;
	width:100% !important;
	float:right;
}
.tail{
	display:block;

}
.fields a{
	margin-left:20%;
}
#container{
	display:block;
    width: 60%;
    margin: 0 auto;
}
</style>
</head>
<body>
	<form class="form" name="formmaker" action="form.php" method="POST">
		<fieldset>
			<legend>Form Maker</legend>
			<div class="head">
				<div class="label">
				Header <br><br>
				Font-color <br><br>
				Font-size <br><br>
				font-family<br><br>
				background-color<br><br>

				</div>

				<div class="fill">
				<input type="text" name="header" id="header" ></input><br><br>
				<input type="color" name="fcolor" id="fcolor"></input><br><br>
				<input type="number" name="fsize" id="fsize" min="10" max="36"></input><br><br>
				<select name="ffamily" id="ffamily">
					<option value="Arial">Arial</option>
					<option value="Verdana">Verdana</option>
					<option value="calibri">calibri</option>
					<option value="Impact">Impact</option>
				  </select><br><br>
				<input type="color" name="bcolor" id="bcolor" value="#ffffff"></input><br><br>
				</div>
			</div>
			<div class="none"></div>
			<div class="tail">
				<div class="fields">
				Number of members:<input onkeyup="addFields()" onchange="addFields()" type="number" id="member" name="member"><br /><br />
					<div id="container"/>
				
				</div>
			</div>
				<div class="submit"><input type="submit" name="Submit"></input></div><br><br>
				
			
		</fieldset>
	</form>
</body>
</html>
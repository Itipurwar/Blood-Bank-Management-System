<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
                #form{
    width: 80%;
    height: 250px;
    background-color: red;
    color: white;
    border-radius: 10px;
    overflow: hidden;
    overflow-y: scroll;
}
        
	</style>
</head>
<body>
	<div id="full"></div>
	<div id="inner_full">
		<div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white; ">Blood Bank Management System</a>
<button class="backhover" style="color: white; float: right; background-color: red; border-radius: 15%; font-size: 15px;padding-right: 18px; padding-bottom: 18px; padding-left: 18px; padding-top:20px; margin-right: 8px;"><a href="admin-home.php" style="text-decoration: none; color: white;">Back</a></button>
        </h2></div>
		<div id="body">
			<br>
			<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
            	header("Location:Index.php");
            } 
			?>
			<h1>Out stoke blood List</h1><br>
				<center><div id="form">
                    <table>
                    	<tr>
                    		<td><center><b><font color="blue">Name</font></b></center></td>
                    		<td><center><b><font color="blue">Mobile no</font></b></center></td>
                    		<td><center><b><font color="blue">Blood group</font></b></center></td>
                    	</tr>
                    	<?php
                    	$q=$db->query("SELECT * FROM out_stoke_b");
                    	while($r1=$q->fetch(PDO::FETCH_OBJ))
                    	{
                    		?>
                    		<tr>
                    		<td><center><?= $r1->name; ?></center></td>
                    		<td><center><?= $r1->mno; ?></center></td>
                    		<td><center><?= $r1->bname; ?></center></td>
                    	</tr>
                    		<?php
                    	}
        				?> 
                    </table>
				</div></center>
		</div>
        <br><br><br><br><br><div id="footer"><h4 align="center">itipurwar@gmail.com</h4>
        <p align="center"><a href="logout.php"><font color="white"></font>logout</a></p></div>
    </div>
</div>
</body>
</html>


<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>modifica 2</title>
	</head>
	<body>
	
		<?php
			$k=$_SESSION['vettore'];
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			for($i=0;$i<$k;$i+=4)
			{
				$id=$_POST[$i];
				$n=addslashes($_POST[$i+1]);
				$m=addslashes($_POST[$i+2]);
				$t=addslashes($_POST[$i+3]);
				$sql = "update utente set nick='$n', mail='$m', tipo='$t' where id='$id'";
				mysql_query($sql);
				print "<script langage=\"Javascript\">alert('Modifica effettuata!');window.location.href='modifica.php';</script>";						
			}	 
			mysql_close(); 		
		?>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='http://chatmaturita.altervista.org/admin/admin.html';</script>";
	}
?>

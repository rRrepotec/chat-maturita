<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Cancella</title>
	</head>
	<body>
		<?php
			$k=$_SESSION['vettorec'];
			$id=$_GET['id'];
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			$sql = "delete from utente where id='$id'";
			mysql_query($sql);
			print "<script langage=\"Javascript\">alert('Cancellato con successo!');window.location.href='cancella.php';</script>";							 
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
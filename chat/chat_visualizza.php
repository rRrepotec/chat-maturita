<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{

?>
<html>
	<head>
		<meta http-equiv="refresh" content="3,chat_visualizza.php">
		<title>Visualizzazione chat</title>
	</head>
	<body>
		<?php
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			$ora_attuale = time();
			$query="SELECT * FROM Chat WHERE Time+300>'$ora_attuale' ORDER BY Data DESC";
			$result=mysql_query($query) or die(mysql_error());
			while($riga = mysql_fetch_array($result))
			{
				$nome=stripslashes($riga['Nome']);
				$mss=stripslashes($riga['Messaggio']);
				$ora=date("H:i:s", $riga['Time']);
				$data=date("Y-n-j", $riga['Time']);
				echo("<b><div align='center'><font color='grey'> $ora </font></div></b> <b> $nome</b>: $mss<br/>");
			}
			mysql_close($db);
		?>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='index.html';</script>";
	}
?>
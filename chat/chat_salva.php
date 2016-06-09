<?php
	session_start();
	mysql_connect("localhost","chatmaturita","");
	mysql_select_DB("my_chatmaturita");
	if (isset($_POST['azione']))
	{
		$nome=$_SESSION['utente'];
		$attuale=time();
		$attualed=date('Y-n-j');
		$attualet=date('H:i:s');
		$mss=addslashes($_POST['azione']);
		$query="INSERT INTO Chat SET Nome = '$nome', Messaggio = '$mss', Data = '$attualed', Ora = '$attualet', Time = '$attuale'";
		mysql_query($query) or die(mysql_error());
	}
	mysql_close($my_chatmaturita);
	header("location: chat_visualizza.php");
?>
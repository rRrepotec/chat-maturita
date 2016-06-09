<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{
?>
<html>
	<head>
		<title>Input chat</title>
	</head>
	<body onload="document.inserimento.azione.focus()">
		<form action="chat_salva.php" target="visualizza" name="inserimento" method="post" onsubmit="javascript:location.reload();">
			<input name="azione" size="33";>
			<input type="submit" value="Invia" name="invia">
		</form>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='index.html';</script>";
	}
?>
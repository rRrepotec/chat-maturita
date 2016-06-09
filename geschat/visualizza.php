<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Pagina Iniziale Admin</title>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black">
		<table align="center" border="0" width="800">
			<caption><font color="white"<b>Pagina di amministrazione!</b></font></caption>
			<tr bgcolor="green">
				<td align="center" colspan="3"><img src="car2.jpg"></img></td>
			</tr>
			<tr bgcolor="green">
				<td align="center">
					<table border="1" summary="" width="520" border="3">
						<caption> Visualizzazione Archivio Chat</caption>
							<tr>
								<th width="10%">ID
								<th width="10%">Nome Utente
								<th width="20%">Messaggio
								<th width="15%">Data
								<th width="10%">Ora
							</tr>
							<?php 
								mysql_connect("localhost","chatmaturita","");
								mysql_select_DB("my_chatmaturita");
								$sql="SELECT * from Chat";
								$query=mysql_query($sql);
								while($row = mysql_fetch_object($query))
								{	
									print "<tr>";
									print "<td width=\!10%\">".$row->id. "<br>";
									print "<td width=\!10%\">".$row->Nome."<br>";
									print "<td width=\!20%\">".$row->Messaggio. "<br>";
									print "<td width=\!15%\">".$row->Data."<br>";
									print "<td width=\!10%\">".$row->Ora."<br>";
									print "</tr>";
								}
								mysql_close();
							?>
					</table>
				<td widht="200">
					<form name="form1" method="post" action=""> 
						<label>Menu:</label> 
						<select name="collegamento"> 
								<option value="http://chatmaturita.altervista.org/admin/homeadmin.php">Home</option>
								<option value="visualizza.php">Visualizza</option> 
								<option value="cancella.php">Cancella</option>
						</select><input onclick="location.href=form1.collegamento.value;" type="button" value="vai" name="button"> 
					</form>
				</td>
			</tr>
		</table>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='http://chatmaturita.altervista.org/admin/admin.html';</script>";
	}
?>
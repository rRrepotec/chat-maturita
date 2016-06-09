<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
	?>
<html>
	<head>
		<title>Pagina Iniziale Admin</title>
                <style type="text/css">
                     a.c:hover{font-weight: bold; text-decoration:none;}
                </style>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black">
		<table align="center" border="0" width="800">
			<caption><font color="white"<b>Pagina di amministrazione!</b></font></caption>
			<tr bgcolor="green">
				<td align="center" colspan="3"><img src="car2.jpg"></img></td>
			</tr>
			<tr bgcolor="green">
				<td align="center">
					<?php
						$k=0;
						mysql_connect("localhost","chatmaturita","");
						mysql_select_DB("my_chatmaturita");
						$sql="select * from Chat";
						$query=mysql_query($sql);
						while($row=mysql_fetch_array($query))
						{
								$id=$row['id'];
								print "<input type=\"text\" name=\"$k\" value=\"$id\" size=\"1\">";
								$k++;
								$n=$row['Nome'];
								print "<input type=\"text\" name=\"$k\" value=\"$n\" maxlenght=\"30\" size=\"10\">";
								$k++;
								$m=$row['Messaggio'];
								print "<input type=\"text\" name=\"$k\" value=\"$m\" maxlenght=\"30\" size=\"35\">";
								$k++;
								$d=$row['Data'];
								print "<input type=\"text\" name=\"$k\" value=\"$d\" maxlenght=\"30\" size=\"15\">";
								$k++;
								$o=$row['Ora'];
								print "<input type=\"text\" name=\"$k\" value=\"$o\" size=\"1\">";
								$k++;
								print "<font size=\"3\" color=\"red\"><a style=\"text-decoration: none;\" href='cancellachat.php?id=$id' class='c'>x</a></font>";
								print "<br>";	
						}
						$_SESSION['vettore']=$k;
					?>
				</td>
				<td width="200">
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
		print "<font size=\"3\">Accesso scaduto!</font>";
		print "<br>";
		print "<font size=\"3\"><a href='http://chatmaturita.altervista.org/admin/admin.html'>Torna al login!</a></font>";
	}
?>
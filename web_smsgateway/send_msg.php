<html>
	<head>
	<title>SMS GATEWAY BERBAGICATATAN.WEB.ID | Inbox</title>
	</head>
	<body style='text-align:center;'>
		<h1>SEND MESSAGES</h1>
		<?php
		if (isset($_POST['nohp']) and isset($_POST['sms'])) {
		$dest = $_POST['nohp'];
		$content = $_POST['sms'];
		/* Include db_conf.php */
		include ("db_conf.php");
		/* Insert Outbox */
		$query = "INSERT INTO outbox(DestinationNumber, TextDecoded, CreatorID, Class)
		VALUES ('$dest', '$content', 'Gammu', '-1')";
		$result = mysql_query($query);
		$info = '<b>Messages Has Been Sent, Please Wait to Receive</b>';
		} else {
		$info = '<b>Fill with right Data</b>';
		}
		?>
		<a href='index.php'>Back To Home Page</a>
			<p><?php echo $info; ?></p>
			<form method="post" action="send_msg.php">
				Nomor HP Tujuan<br>
				<input type="text" name="nohp"><br><br>
				Isi SMS<br>
				<textarea name="sms"></textarea><br><br>
				<input type="submit" name="submit" value="Kirim SMS">
			</form>
</body>
</html>

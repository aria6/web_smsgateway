<html>
	<head>
	<title>SMS GATEWAY BERBAGICATATAN.WEB.ID | Inbox</title>
	</head>
	<body style='text-align:center;'>
		<h1>INBOX</h1>
		<a href='index.php'>Back To Home Page</a>
		<?php
		/* Include db_conf.php */
		include ("db_conf.php");
		if (isset($_GET['id'])) {
			$ID = $_GET['id'];
			/* Delete selected inbox */
			$query  = "DELETE FROM inbox WHERE ID='$ID'";
			$result = mysql_query($query);
			header("location:inbox.php");
			} else {}
		/* Get Data Inbox */
		$query = "SELECT ID,ReceivingDateTime,SenderNumber,TextDecoded FROM inbox";
		$result = mysql_query($query);
		$no = 1;
		?>	
		
		<table border=1 align=center>
			<tr>
				<th>No.</th>
				<th>Date</th>
				<th>From</th>
				<th>Content</th>
				<th>Action</th>
			</tr>
			
		<?php while ($data = mysql_fetch_assoc($result)) { ?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['ReceivingDateTime'] ?></td>
				<td><?php echo $data['SenderNumber'] ?></td>
				<td><?php echo $data['TextDecoded'] ?></td>
				<td>
					<a href="inbox.php?id=<?php echo $data['ID'] ?>">Hapus</a>
				</td>
			</tr>
		<?php $no++; ?>
		<?php } ?>
		</table>
	</body>
</html>

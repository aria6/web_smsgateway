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
			/* Delete selected sentitems */
			$query  = "DELETE FROM sentitems WHERE ID='$ID'";
			$result = mysql_query($query);
			header("location:outbox.php");
			} else {}
		/* Get Data Outbox */
		$query = "SELECT ID,SendingDateTime,DestinationNumber,TextDecoded FROM sentitems ORDER By SendingDateTime DESC";
		$result = mysql_query($query);
		$no = 1;
		?>	
		
		<table border=1 align=center>
			<tr>
				<th>No.</th>
				<th>Date Sent</th>
				<th>Destination</th>
				<th>Content</th>
				<th>Action</th>
			</tr>
			
		<?php while ($data = mysql_fetch_assoc($result)) { ?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['SendingDateTime'] ?></td>
				<td><?php echo $data['DestinationNumber'] ?></td>
				<td><?php echo $data['TextDecoded'] ?></td>
				<td>
					<a href="outbox.php?id=<?php echo $data['ID'] ?>">Hapus</a>
				</td>
			</tr>
		<?php $no++; ?>
		<?php } ?>
		</table>
	</body>
</html>


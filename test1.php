<?php 
	include ("../connect/connect.php");
?>
<body>
	<table border="1">
		<tr>
			<td>PRODUCT</td>
			<td>PRODUCT_NAME</td>
			<td>BARCODE</td>
			<td>Putaway_Anchor</td>
			<td>UNT</td>
			<td>P_TI</td>
			<td>P_HI</td>
			<td>RECORDER</td>
		</tr>
		<?php
			$strSQL="SELECT * FROM dbo.MY_BARCODE";
			$objQuery=odbc_exec($cid,$strSQL)or die($strSQL);
			while($objResult=odbc_fetch_array($objQuery)){
		?>
			<tr>
			<td> <?php echo $objResult[PRODUCT] ?></td>
			<td><?php echo $objResult[PRODUCT_NAME] ?></td>
			<td><?php echo $objResult[BARCODE] ?></td>
			<td><?php echo $objResult[Putaway_Anchor] ?></td>
			<td><?php echo $objResult[UNT] ?></td>
			<td><?php echo $objResult[P_TI] ?></td>
			<td><?php echo $objResult[P_HI] ?></td>
			<td><?php echo $objResult[RECORDER] ?></td>
		</tr>
			<?php };?>
	</table>
</body>
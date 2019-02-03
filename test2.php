<?php 
include ("../connect/connect.php");

			$strAvg="SELECT SUM(AGE) AS AGE,COUNT(NAME) AS UNT FROM dbo.EMPLOYEE";
			$objRes=odbc_exec($cid,$strAvg) or die ($strAvg);
			$Result=odbc_fetch_array($objRes);
			
				
?>
<body>
	<table border="1">
		<tr>
			<td><?php echo "อายุรวมทั้งหมด : ".$Result["AGE"]; ?></td>
		</tr>
		<tr>
			<td><?php echo "พนักงานทั้งหมด : ".$Result["UNT"]; ?></td>
		</tr>
		<tr>
			<td> อายุเฉลี่ย : <?php echo $Result["AGE"]/$Result["UNT"] ?></td>
		</tr>
		<?php 
		$strsex="SELECT SEX, COUNT(ID) AS Expr1 FROM dbo.EMPLOYEE GROUP BY SEX";
				$sqlquery=odbc_exec($cid,$strsex) or die ($strsex);
				while ($RESEX=odbc_fetch_array($sqlquery)){
				
		?>
		<tr>
			<td> <?php echo $RESEX["SEX"] ?> ทั้งหมด : <?php echo $RESEX["Expr1"] ?></td>
		</tr>
				<?php }; ?>
	</table>
</body>

<?php $b = mysqli_connect("localhost","root","","deneme") or die ; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/islem.js"></script>
</head>
<body>
	<form id="formbilgi">
		<select name="sec1" onchange="yukle()" id="">
			<?php $sorgu = mysqli_query($b,"select * from kategoriler where kim='0'");
				if(mysqli_num_rows($sorgu)<1){
					echo "<option disabled>Lütfen Bir Kategori Ekleyin</option>";
				}else{ ?>
					<option value="">Lütfen Bir Kategori Seçin</option>
					<option value="" disabled><hr/></option>
					<?php while($row = mysqli_fetch_array($sorgu)){?>
							<option value="<?php echo $row['id'] ?>"><?php echo $row['katadi'] ?></option>
					<?php } ?>
				<?php } ?>
		</select>
		<select name="" class="yuklencek">
			
		</select>
		<div class="sonuc sonucgizle"><img src="loading.gif" style="width:100px;height:100px;" alt=""/></div>
	</form>
</body>
</html>
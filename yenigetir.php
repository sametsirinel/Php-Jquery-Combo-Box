<?php $b = mysqli_connect("localhost","root","","deneme") or die ; 
	
	$kim = @$_POST['sec1'];
	$sorgu = mysqli_query($b,"select * from kategoriler where kim='$kim'");
	if(mysqli_num_rows($sorgu)<1){
	
		$dizi = array("hata"=>0,"msg"=>"Veritabanında Veri Bulunamadı Bir Alt Kategori Mevcut Değil");
	
	}else{
		$msg = "";
			while($row = mysqli_fetch_array($sorgu)){
			
				$msg = $msg."<option value='".$row['id']."'>".$row['katadi']."</option>";
			
			}
		$dizi = array("hata"=>1,"msg"=>$msg);
	
	}
	
	echo json_encode($dizi);

?>
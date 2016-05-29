$(function(){

	$(".yuklencek").hide();
	$(".sonucgizle").hide();

});

function yukle(){
	$(".sonuc").show().html('<img src="loading.gif" style="width:100px;height:100px;" alt=""/>');
	$.ajax({
		
		type:"POST",
		url:"yenigetir.php",
		dataType:"json",
		data:$("#formbilgi").serialize(),
		success:function(cevap){
			
			if(cevap.hata==0){
			
				$(".sonuc").html(cevap.msg);
				$(".yuklencek").hide().html("");
			}else{
				$(".sonuc").html("");
				$(".yuklencek").show().html(cevap.msg);
			
			}
			
		
		}
		
	});

}
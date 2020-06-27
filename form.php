<a href="form.html">Kembali ke FORM</a>
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";


$error=false;
if(@$_POST['Nama']==''){
	echo "silakan isi nama <br/>";
	$error=true;
}
if(@$_POST['TTL']==''){
	echo "silakan isi Tempat, tanggal lahir tidak boleh kosong <br/>";
	$error=true;
}
if(@$_POST['Alamat']==''){
	echo "Silakan isi alamat anda dengan benar <br/>";
	$error=true;
}
if(@$_POST['myradio']=''){
	echo "Silakan isi alamat anda dengan benar <br/>";
	$error=true;
}
if (@$_POST['Prodi']=''){
	echo "Silakan isi prodi anda dengan benar <br/>";
	$error=true;
}
if(@$_POST['Cita=cita']=''){
	echo "Silakan isi cita-cita anda <br/>";
	$error=true;
}
if(@$_POST['Hobi']=''){
	echo "silakan isi hobi anda<br/>";
	$error=true;
}
if(!$error){
	echo "Data sudah benar";
	echo "Terimakasih";
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Volunteer - Data Pendaftar</title>
       
    <style type="text/css">
          body{
        background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(bg.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    *{
      margin: 0;
      padding: 0;}
      .input{
        position: absolute;
       border: 2px ;
        width: 1200px;height: 600px;
        margin: auto;   position: absolute;
        left: 5px;
        right: 5px;
        transform: translate(-40%;-60%);
        color: #000;
        box-sizing: border-box;
        border-radius: 20px;
        background-color:#E9967A;
        padding: 0px 30px;
          border-right: 3px solid black;
        }
          .submit{
        background-color: lightblue;
        cursor: pointer;
        width: 15%;
        transition: 0.5%;
        color: black;
        }
      </style>
</head>
<body>
<div class="input">
		<h1 align="center">Data Pendaftar</h1>
		<table border="1" width="1000" align="center">
       <tr>
          
           <th>Nama Lengkap</th>
           <th>Tempat Lahir</th>
           <th>Tanggal Lahir</th>
           <th>Jenis Kelamin</th>
           <th>Email</th>
           <th>No.Telepon</th>
           <th>Provinsi</th>
           <th>Kabupaten</th>
           <th>Kecamatan</th>
           <th>Desa</th>
       </tr>
			<?php 
				echo "<head><title>Data Pendaftar</head></title>";
				$fp = fopen("form.txt", "r");
			?>
			<?php while ($isi = fgets($fp,100)) 
			{
				$pisah = explode ("|", $isi);
				?>
				<tr>
       <th><?php echo "$pisah[0]"; ?></th>
       <th><?php echo "$pisah[1]"; ?></th>
       <th><?php echo "$pisah[2]"; ?></th>
       <th><?php echo "$pisah[3]"; ?></th>
       <th><?php echo "$pisah[4]"; ?></th>
       <th><?php echo "$pisah[5]"; ?></th>
       <th><?php echo "$pisah[6]"; ?></th>
       <th><?php echo "$pisah[7]"; ?></th>
       <th><?php echo "$pisah[8]"; ?></th>
       <th><?php echo "$pisah[9]"; ?></th>
   

     </tr>
			<?php } 
      ?>
		</table>
		<button class="submit"><a align="center" href="form.html">Kembali Ke Menu Awal</a>
	</div>
	<?php
	$fp=fopen("form.txt", "a+");
   $nama = $_POST['nama'];
  $tempat = $_POST['tempat'];
  $tanggal = $_POST['tanggal'];
  $kelamin = $_POST['kelamin'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $pilih = $_POST['pilih'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $desa = $_POST['desa'];
  fputs($fp,"$nama|$tempat|$tanggal|$kelamin|$email|$telepon|$pilih|$kabupaten|$kecamatan|$desa\n");
  fclose($fp);

?>
</body>
</html>

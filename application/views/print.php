<!DOCTYPE html>
<html>
<style>
.desa{
    font-size:24px;
padding:40px;
}
.kecamatan{
   
    font-size:24px;
        padding:30px;
}
.kabupaten{
   
        
   padding:80px;
   font-size:24px;
}
.jalan{
   
        
   padding:0px;
   font-size:12px;
}
</style>
<body>
<div class="content-wrapper">
<div class="container-fluid">

<table style="border-collapse;" width="100%">

<center>
<tr>
                <td style="border-bottom:1px solid #000000;" valign="middle">
                <img src="<?php echo base_url()?>assets/login/images/kabupaten seruyan.png" width="180" height="100" style="padding:0px;" align="center"></td>
                <td colspan="3" style="border-bottom:1px solid #000000; padding-top: 0px;" valign="middle">
                    <span class="desa"><strong>PEMERINTAH DESA SUKA JAYA</strong></span> <br>    
                    <span class="kecamatan"><strong>KECAMATAN SERUYAN TENGAH </strong></span><br>
                    <span class="kabupaten"><strong>KABUPATEN SERUYAN</strong></span><br>
                    <span class="jalan">Jl.TransSukamandang B-IV RT.01 RW.01 Desa Sukajaya Kode POS 74281 Kalimantan Tengah</span></td>
                    <span><strong><hr></strong></span><br>
                    <span><hr></span>
</tr>

</center>
</table>
	<br/>
 
	<p align="right">
	sukajaya, <?php echo date("d/m/Y")?>&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>
    Kepada&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>

	</p>
 
	<p align="left">
	&emsp;&emsp;Nomor &emsp;&emsp;: <?php echo $hsl[0]->SNoSurat?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Yth. <?php echo $hsl[0]->SPenerima?> <br>
    &emsp;&emsp;Sifat  &emsp;&emsp;&emsp;: <?php echo $hsl[0]->Ssifat?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;Di-<br>
    &emsp;&emsp;Lampiran&emsp;:-&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tempat<br>
    &emsp;&emsp;Perihal&emsp;&emsp;: <?php echo $hsl[0]->SHal?><br>
    <br>
    <br>
    <br>    
	</p>
    <p align="left" >
    &emsp;&emsp;&emsp;&emsp; Dalam Rangka akan diadakannya <?php echo $hsl[0]-> SisiSurat?>
     <br>&emsp;&emsp;&emsp;yang akan dilaksanakan pada:<br>
    &emsp;&emsp;&emsp;Tanggal&emsp;&emsp;: <?php echo date("d/m/Y", strtotime($hsl[0]->STanggal));?><br>
    &emsp;&emsp;&emsp;waktu &emsp;&emsp;&nbsp;   : 08.00 - Selesai <br>
    &emsp;&emsp;&emsp;tempat &emsp;&emsp; : <?php echo $hsl[0]->STempat ?> <br>
  
   
    &emsp; &emsp; &emsp; &emsp; Demikian penberitahuan ini kami buat, atas perhatiannya <br>
    &emsp; &emsp;&emsp; kami ucapkan Terimakasih.<br><br>
    </p>
    &emsp;&emsp;&emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;<br>
 <p align="right">
 Dibuat di &emsp;&emsp;:Desa Sukajaya&emsp;&emsp;&emsp;&emsp;&emsp;<br>
 <u>Pada Tanggal&emsp;:<?php echo date("d/m/Y")?></u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>
 Kepala Desa Suka Jaya&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br><br><br><br>
<u> (TAUFIKURROHMAN)</u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 
 </p>
	
 <script>
		window.print();
        die();
       
	</script>
</div>
</div>
</div>
</body>
</html>
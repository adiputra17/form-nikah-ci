<html>
<head>
	<title>&nbsp</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet" >
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"/> </script>

	<style type="text/css">
		/*body{
			font-size: 10px;
		}*/
		.col-md-1{
			margin: 0px;
			padding: 0px;
			width: 70px;
			float: left;
			font-size: 10px;
		}
		.col-md-3{
			margin: 0px;
			padding: 0px;
			width: 350px;
			float: left;
			font-size: 10px;
		}
		.col-md-4{
			margin: 0px;
			padding: 0px;
			width: 340px;
			float: left;
			font-size: 10px;
		}
		.table, .table-striped{
			font-size: 14px;
		}
		.borderless td,table.borderless th, .borderless tr{
     		border: none !important;
		}
		/*thead:before, thead:after { display: none; }
		tbody:before, tbody:after { display: none; }*/
	</style>
	<script>
	function printPDF(){
			document.getElementById('cetak').style.visibility = 'hidden';
	    window.print();
	}
	</script>
</head>
<body>
<div class="container">
<center>
		<button type="submit" class="btn btn-info btn-xs" id="cetak" onclick="printPDF()">Cetak ke PDF</button>
	<!-- </a> -->
		<!-- <p style="margin-top: 10px;"><img width="150px" height="150px" align="center" src="<?php //echo base_url('assets/images/kemenag.png');?>"></p> -->
		<h3 align="center"><b>FORMULIR UNTUK<br>PENCATATAN PERKAWINAN</b></h3>
		<p align="center"><b>Tatacara perkawinan dilangsungkan</b></p>
		 <?php 
    		$sql =  $this->db->query("SELECT * FROM lain ORDER BY lainid DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
		<p align="center">
			pada tanggal : <?php echo $row['tanggal']; ?>,
			hari : <?php echo $row['hari']; ?>,
			jam : <?php echo $row['jam']; ?>
		</p>
		<?php endforeach; ?>
</center>
</div>
<br>
<center>
<div class="container" align="center">

<!-- Row Pertama -->
<!-- <div class="row"> -->
	<div class="col-md-1">
		<table class="table table-striped" style="font-size: 14px;">
    <thead>
      <tr>
      	<th>No.</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td></tr>
      <tr><td>2</td></tr>
      <tr><td>3</td></tr>
      <tr><td>4</td></tr>
      <tr><td>5</td></tr>
      <tr><td>6</td></tr>
      <tr><td>7</td></tr>
      <tr><td>8</td></tr>
      <tr><td>9</td></tr>
      <tr><td>10</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-3">
		<table class="table table-striped" >
    <thead>
      <tr><th>Pertanyaan</th></tr>
    </thead>
    <tbody>
    	<tr><td>Nama Keluarga</td></tr>
    	<tr><td>Nama Kecil</td></tr>
    	<tr><td>Tempat dan Tanggal Lahir/Umur</td></tr>
    	<tr><td>Agama</td></tr>
    	<tr><td>Pekerjaan/Pangkat**)</td></tr>
    	<tr><td>Alamat / Tempat Tinggal Sekarang</td></tr>
    	<tr><td>Alamat / Tempat Tinggal Dahulu</td></tr>
    	<tr><td>Sudah / Belum pernah Kawin **)</td></tr>
    	<tr><td>Nama bekas istri atau suami terdahulu</td></tr>
    	<tr><td>Anak yang disahkan dlm perkawinan</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Keterangan Calon Mempelai Pria</th></tr>
    </thead>
    <tbody>
      <?php 
    		$sql =  $this->db->query("SELECT * FROM pengantinpria ORDER BY priaid DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['pria11']; ?></td></tr>
      <tr><td><?php echo $row['pria12']; ?></td></tr>
      <tr><td><?php echo $row['pria13']; ?> / <?php echo $row['pria14']; ?> </td></tr>
      <tr><td><?php echo $row['pria15']; ?></td></tr>
      <tr><td><?php echo $row['pria16']; ?></td></tr>
      <tr><td><?php echo $row['pria17']; ?></td></tr>
      <tr><td><?php echo $row['pria18']; ?></td></tr>
      <tr><td><?php echo $row['pria19']; ?></td></tr>
      <tr><td><?php echo $row['pria110']; ?></td></tr>
      <tr><td><?php echo $row['pria111']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Keterangan Calon Mempelai Wanita</th></tr>
    </thead>
    <tbody>
      <?php 
    		$sql =  $this->db->query("SELECT * FROM pengantinwanita ORDER BY wanitaid DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['wanita11']; ?></td></tr>
      <tr><td><?php echo $row['wanita12']; ?></td></tr>
      <tr><td><?php echo $row['wanita13']; ?> / <?php echo $row['wanita14']; ?></td></tr>
      <tr><td><?php echo $row['wanita15']; ?></td></tr>
      <tr><td><?php echo $row['wanita16']; ?></td></tr>
      <tr><td><?php echo $row['wanita17']; ?></td></tr>
      <tr><td><?php echo $row['wanita18']; ?></td></tr>
      <tr><td><?php echo $row['wanita19']; ?></td></tr>
      <tr><td><?php echo $row['wanita110']; ?></td></tr>
      <tr><td><?php echo $row['wanita111']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
<!-- </div> -->
<!-- Penutup Row pertama -->
</div>

<div class="container" align="center" style="padding-left: 30px;">
<!-- Row Kedua -->
<div class="row">
	<div class="col-md-1">
		<table class="table table-striped" >
    <thead>
      <tr>
      	<th>&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td></tr>
      <tr><td>2</td></tr>
      <tr><td>3</td></tr>
      <tr><td>4</td></tr>
      <tr><td>5</td></tr>
      <tr><td>6</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-3">
		<table class="table table-striped" >
    <thead>
      <tr><th>&nbsp</th></tr>
    </thead>
    <tbody>
    	<tr><td>Nama Keluarga</td></tr>
    	<tr><td>Nama Kecil</td></tr>
    	<tr><td>Tempat dan Tanggal Lahir/Umur</td></tr>
    	<tr><td>Agama</td></tr>
    	<tr><td>Pekerjaan/Pangkat**)</td></tr>
    	<tr><td>Tempat Tinggal / Kediaman</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Bapak</th></tr>
    </thead>
    <tbody>
      <?php 
    		$sql =  $this->db->query("SELECT * FROM bapakpria ORDER BY pria2id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['pria21']; ?></td></tr>
      <tr><td><?php echo $row['pria22']; ?></td></tr>
      <tr><td><?php echo $row['pria23']; ?> / <?php echo $row['pria24']; ?></td></tr>
      <tr><td><?php echo $row['pria25']; ?></td></tr>
      <tr><td><?php echo $row['pria26']; ?></td></tr>
      <tr><td><?php echo $row['pria27']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Bapak</th></tr>
    </thead>
    <tbody>
       <?php 
    		$sql =  $this->db->query("SELECT * FROM bapakwanita ORDER BY wanita2id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['wanita21']; ?></td></tr>
      <tr><td><?php echo $row['wanita22']; ?></td></tr>
      <tr><td><?php echo $row['wanita23']; ?> / <?php echo $row['wanita24']; ?></td></tr>
      <tr><td><?php echo $row['wanita25']; ?></td></tr>
      <tr><td><?php echo $row['wanita26']; ?></td></tr>
      <tr><td><?php echo $row['wanita27']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
</div>
<!-- Penutup Row Kedua -->
</div>

<div class="container" align="center" style="padding-left: 30px;">
<!-- Row Ketiga -->
<div class="row">
	<div class="col-md-1">
		<table class="table table-striped" >
    <thead>
      <tr>
      	<th>&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td></tr>
      <tr><td>2</td></tr>
      <tr><td>3</td></tr>
      <tr><td>4</td></tr>
      <tr><td>5</td></tr>
      <tr><td>6</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-3">
		<table class="table table-striped" >
    <thead>
      <tr><th>&nbsp</th></tr>
    </thead>
    <tbody>
    	<tr><td>Nama Keluarga</td></tr>
    	<tr><td>Nama Kecil</td></tr>
    	<tr><td>Tempat dan Tanggal Lahir/Umur</td></tr>
    	<tr><td>Agama</td></tr>
    	<tr><td>Pekerjaan/Pangkat**)</td></tr>
    	<tr><td>Tempat Tinggal / Kediaman</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Ibu</th></tr>
    </thead>
    <tbody>
      <?php 
    		$sql =  $this->db->query("SELECT * FROM ibupria ORDER BY pria3id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['pria31']; ?></td></tr>
      <tr><td><?php echo $row['pria32']; ?></td></tr>
      <tr><td><?php echo $row['pria33']; ?> / <?php echo $row['pria34']; ?></td></tr>
      <tr><td><?php echo $row['pria35']; ?></td></tr>
      <tr><td><?php echo $row['pria36']; ?></td></tr>
      <tr><td><?php echo $row['pria37']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Ibu</th></tr>
    </thead>
    <tbody>
       <?php 
    		$sql =  $this->db->query("SELECT * FROM ibuwanita ORDER BY wanita3id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['wanita31']; ?></td></tr>
      <tr><td><?php echo $row['wanita32']; ?></td></tr>
      <tr><td><?php echo $row['wanita33']; ?> / <?php echo $row['wanita34']; ?></td></tr>
      <tr><td><?php echo $row['wanita35']; ?></td></tr>
      <tr><td><?php echo $row['wanita36']; ?></td></tr>
      <tr><td><?php echo $row['wanita37']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
</div>
<!-- Penutup Row Ketiga -->
</div>

<div class="container" align="center" style="padding-left: 30px;">
<!-- Row Keempat -->
<div class="row">
	<div class="col-md-1">
		<table class="table table-striped" >
    <thead>
      <tr>
      	<th>&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>1</td></tr>
      <tr><td>2</td></tr>
      <tr><td>3</td></tr>
      <tr><td>4</td></tr>
      <tr><td>5</td></tr>
      <tr><td>6</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-3">
		<table class="table table-striped" >
    <thead>
      <tr><th>&nbsp</th></tr>
    </thead>
    <tbody>
    	<tr><td>Nama Keluarga</td></tr>
    	<tr><td>Nama Kecil</td></tr>
    	<tr><td>Tempat dan Tanggal Lahir/Umur</td></tr>
    	<tr><td>Agama</td></tr>
    	<tr><td>Pekerjaan/Pangkat**)</td></tr>
    	<tr><td>Tempat Tinggal / Kediaman</td></tr>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Saksi Pertama</th></tr>
    </thead>
    <tbody>
      <?php 
    		$sql =  $this->db->query("SELECT * FROM saksipria ORDER BY pria4id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['pria41']; ?></td></tr>
      <tr><td><?php echo $row['pria42']; ?></td></tr>
      <tr><td><?php echo $row['pria43']; ?> / <?php echo $row['pria44']; ?></td></tr>
      <tr><td><?php echo $row['pria45']; ?></td></tr>
      <tr><td><?php echo $row['pria46']; ?></td></tr>
      <tr><td><?php echo $row['pria47']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
	<div class="col-md-4">
		<table class="table table-striped" >
    <thead>
      <tr><th>Saksi Kedua</th></tr>
    </thead>
    <tbody>
       <?php 
    		$sql =  $this->db->query("SELECT * FROM saksiwanita ORDER BY wanita4id DESC LIMIT 1"); 
    		foreach($sql->result_array() as $row):
    	?>
      <tr><td><?php echo $row['wanita41']; ?></td></tr>
      <tr><td><?php echo $row['wanita42']; ?></td></tr>
      <tr><td><?php echo $row['wanita43']; ?> / <?php echo $row['wanita44']; ?></td></tr>
      <tr><td><?php echo $row['wanita45']; ?></td></tr>
      <tr><td><?php echo $row['wanita46']; ?></td></tr>
      <tr><td><?php echo $row['wanita47']; ?></td></tr>
      <?php 
    		endforeach;
    	?>
    </tbody>
  	</table>
	</div>
</div>
<!-- Penutup Row Keempat -->
</div>

</div> <!-- end container -->
</center>

		<br><br>
		<!-- footer -->
		<div class="container">
				<table class="table borderless" style="border: none;">
					<tr style="border: none;">
						<td style="width:5%;">*)</td>
						<td style="width:50%;" align="justify">Supaya dilampirkan petikan Akta Kelahiran atau surat kenal lahir dan bagi calon mempelai pria yang belum berusia 19 tahun serta calon mempelai wanita belum 16 tahun supaya dilampirkan dispensai pengadilan.</td>
						<?php 
						$sql =  $this->db->query('SELECT tanggal FROM lain ORDER BY lainid DESC LIMIT 1'); 
						foreach($sql->result_array() as $row):
						?>
						<td align="right"><?php echo $row['tanggal']; ?><br>Yang bertanda tangan dibawah ini</td>
						<?php 
							endforeach;
						?>
					</tr>
					<tr style="border: none;">
						<td style="width:5%;">**)</td>
						<td align="justify">Bagi calon mempelai dari anggota TNI / POLRI, supaya melampirkan ijin tertulis dari pejabat yang ditunjuk oleh Menhamkam/Pangab.</td>
						<td align="right" style="padding-right: 50px; font-size:8pt;color:red;">Materai 6000</td>
					</tr>
					<tr style="border: none;">	
						<td style="width:5%;">***)</td>
						<td align="justify">Bagi calon mempelai yang sudah pernah kawin supaya dilampirkan petikan Akta Kematian atau Surat Keterangan Kematian dalam hal putus perkawinan karena kematian dan petikan Akta Perceraian atau Surat Keterangan Perceraian dalam hal putus perkawinan karena cerai. Dalam hal masih dalam ikatan perkawinan supaya dilampirkan izin Pengadilan.</td>
						<td align="right"><div style="">(____________________)</div></td>
					</tr>
				</table>
		</div>

</body>
</html>

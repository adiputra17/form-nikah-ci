<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Fom Nikah</title>	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet" >
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"/> </script>
	<script>
		function myError() {
		    var a = document.forms["myForm"]["jam"].value;
		    var b = document.forms["myForm"]["tanggal"].value;
		    var c1 = document.forms["myForm"]["pria11"].value; //nama keluarga pengantin
		    var c2 = document.forms["myForm"]["wanita11"].value;
		    var d1 = document.forms["myForm"]["pria12"].value; //nama kecil pengantin
		    var d2 = document.forms["myForm"]["wanita12"].value;
		    var e1 = document.forms["myForm"]["pria13"].value; //tempat lahir pengantin
		    var e2 = document.forms["myForm"]["wanita13"].value;
		    var f1 = document.forms["myForm"]["pria14"].value; //tanggal lahir pengantin
		    var f2 = document.forms["myForm"]["wanita14"].value;
		    var g1 = document.forms["myForm"]["pria16"].value; //pekerjaan pengantin
		    var g2 = document.forms["myForm"]["wanita16"].value;
		    var h1 = document.forms["myForm"]["pria17"].value; //pekerjaan pengantin
		    var h2 = document.forms["myForm"]["wanita17"].value;
		    var i1 = document.forms["myForm"]["pria18"].value; //pekerjaan pengantin
		    var i2 = document.forms["myForm"]["wanita18"].value;
		    var j1 = document.forms["myForm"]["pria19"].value; //pekerjaan pengantin
		    var j2 = document.forms["myForm"]["wanita19"].value;
		    var k1 = document.forms["myForm"]["pria110"].value; //pekerjaan pengantin
		    var k2 = document.forms["myForm"]["wanita110"].value;
		    var l1 = document.forms["myForm"]["pria111"].value;
		    var l2 = document.forms["myForm"]["wanita111"].value;
		    //untuk bapak
		    var m1 = document.forms["myForm"]["pria21"].value;
		    var m2 = document.forms["myForm"]["wanita21"].value;
		    var n1 = document.forms["myForm"]["pria22"].value;
		    var n2 = document.forms["myForm"]["wanita22"].value;
		    var o1 = document.forms["myForm"]["pria23"].value;
		    var o2 = document.forms["myForm"]["wanita23"].value;
		    var p1 = document.forms["myForm"]["pria24"].value;
		    var p2 = document.forms["myForm"]["wanita24"].value;
		    var q1 = document.forms["myForm"]["pria25"].value;
		    var q2 = document.forms["myForm"]["wanita25"].value;
		    var r1 = document.forms["myForm"]["pria26"].value;
		    var r2 = document.forms["myForm"]["wanita26"].value;
		    var s1 = document.forms["myForm"]["pria27"].value;
		    var s2 = document.forms["myForm"]["wanita27"].value;
		    //untuk ibu
		    var t1 = document.forms["myForm"]["pria31"].value;
		    var t2 = document.forms["myForm"]["wanita31"].value;
		    var u1 = document.forms["myForm"]["pria32"].value;
		    var u2 = document.forms["myForm"]["wanita32"].value;
		    var v1 = document.forms["myForm"]["pria33"].value;
		    var v2 = document.forms["myForm"]["wanita33"].value;
		    var w1 = document.forms["myForm"]["pria34"].value;
		    var w2 = document.forms["myForm"]["wanita34"].value;
		    var x1 = document.forms["myForm"]["pria35"].value;
		    var x2 = document.forms["myForm"]["wanita35"].value;
		    var y1 = document.forms["myForm"]["pria36"].value;
		    var y2 = document.forms["myForm"]["wanita36"].value;
		    var z1 = document.forms["myForm"]["pria37"].value;
		    var z2 = document.forms["myForm"]["wanita37"].value;
		    //untuk saksi
		    var aa1 = document.forms["myForm"]["pria41"].value;
		    var aa2 = document.forms["myForm"]["wanita41"].value;
		    var bb1 = document.forms["myForm"]["pria42"].value;
		    var bb2 = document.forms["myForm"]["wanita42"].value;
		    var cc1 = document.forms["myForm"]["pria43"].value;
		    var cc2 = document.forms["myForm"]["wanita43"].value;
		    var dd1 = document.forms["myForm"]["pria44"].value;
		    var dd2 = document.forms["myForm"]["wanita44"].value;
		    var ee1 = document.forms["myForm"]["pria45"].value;
		    var ee2 = document.forms["myForm"]["wanita45"].value;
		    var ff1 = document.forms["myForm"]["pria46"].value;
		    var ff2 = document.forms["myForm"]["wanita46"].value;
		    var gg1 = document.forms["myForm"]["pria47"].value;
		    var gg2 = document.forms["myForm"]["wanita47"].value;
		    if (a == "") {
		        alert("Jam belum diisi");
		        return false;
		    }else if(b == ""){
		    	alert("Tanggal belum diisi");
		        return false;
		    }else if(c1 == "" || c2 == ""){
		    	alert("Nama keluarga pengantin belum diisi");
		        return false;
		    }else if(d1 == "" || d2 == ""){
		    	alert("Nama kecil pengantin belum diisi");
		        return false;
		    }else if(e1 == "" || e2 == ""){
		    	alert("Tempat Lahir pengantin belum diisi");
		        return false;
		    }else if(f1 == "" || f2 == ""){
		    	alert("Tanggal Lahir pengantin belum diisi");
		        return false;
		    }else if(g1 == "" || g2 == ""){
		    	alert("Pekerjaan / pangkat pengantin belum diisi");
		        return false;
		    }else if(h1 == "" || h2 == ""){
		    	alert("Alamat / tempat tinggal kediaman sekarang pengantin belum diisi");
		        return false;
		    }else if(i1 == "" || i2 == ""){
		    	alert("Alamat / tempat tinggal kediaman dahulu pengantin belum diisi");
		        return false;
		    }else if(j1 == "" || j2 == ""){
		    	alert("Sudah/belum pernah kawin pengantin belum diisi");
		        return false;
		    }else if(k1 == "" || k2 == ""){
		    	alert("Nama bekas istri/suami atau nama istri terdahulu pengantin belum diisi");
		        return false;
		    }else if(l1 == "" || l2 == ""){
		    	alert("Anak-anak yang akan disahkan dalam perkawinan pengantin belum diisi");
		        return false;
		    }else if(m1==""||m2==""&&n1==""||n2==""&&o1==""||o2==""&&p1==""||p2==""&&q1==""||q2==""&&r1==""||r2==""&&s1==""||s2==""){
		    	alert("Biodata Bapak masih ada yang kosong!!!");
		        return false;
		    }else if(t1==""||t2==""&&u1==""||u2==""&&v1==""||v2==""&&w1==""||w2==""&&x1==""||x2==""&&y1==""||y2==""&&z1==""||z2==""){
		    	alert("Biodata Ibu masih ada yang kosong!!!");
		        return false;
		    }else if(aa1==""||aa2==""&&bb1==""||bb2==""&&cc1==""||cc2==""&&dd1==""||dd2==""&&ee1==""||ee2==""&&ff1==""||ff2==""&&gg1==""||gg2==""){
		    	alert("Biodata Saksi masih ada yang kosong!!!");
		        return false;
		    }
		    
		}
	</script>
</head>
<body>
	<nav class="navbar navbar-default" style="background-color: #fff; border: none; margin: 20px 0px 20px 0px;">
		<div class="container">
	    	<div class="navbar-header">
		    <a class="navbar-brand" href="index" style="font-family:Bickham Script Pro Regular; font-size:50px; color: pink;"> Samawa </a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
			    <li><a target="_blank" href="create" style="color: pink;">Formulir</a></li>
			    <li><a target="_blank" href="list" style="color: pink;">List</a></li>
			    <li><a href="#" style="color: pink;">About</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<!-- JUDUL -->
		<form  onsubmit="return myError()" name="myForm" action="insert" method="post">
		<div class="row">
		  <div class="col-md-4">
		  	<div class="radio">
			  <label>
			    <input type="radio" checked="checked" name="warga" id="" value="Warga Negara Indonesia" aria-label="..."> Warga Negara Indonesia
			  </label> <br>
			  <label>
			    <input type="radio" name="warga" id="" value="Warganegara Asing" aria-label="..."> Warganegara Asing
			  </label> <br>
			  <label>
			    <input type="radio" name="warga" id="" value="Tanpa Kewarganegaraan" aria-label="..."> Tanpa Kewarganegaraan
			  </label>
			</div>
		  </div>
		  <div class="col-md-4">
		  	<h3 align="center"><b>FORMULIR UNTUK PENCATATAN PERKAWINAN</b></h3>
			<p align="center"><b>Tatacara perkawinan dilangsungkan</b></p>
		  </div>
		  <div class="col-md-4">
		  	<h5 align="right">Model : 2</h5>
		  </div>
		</div>
		<p align="center">
			<?php $timezone = +6 ?>
			pada tanggal : <input type="date" name="tanggal" value="<?php echo date("Y-m-d"); ?>" /> 
			hari : 
			<select name="hari" style="padding: 3px;">
			  <option>minggu</option>
			  <option>senin</option>
			  <option>selasa</option>
			  <option>rabu</option>
			  <option>kamis</option>
			  <option>jum'at</option>
			  <option>sabtu</option>
			</select>
			<?php $timezone = +6; ?>
			jam : <input type="text" name="jam" placeholder="contoh : 12:00" style="padding-left: 5px;" value="<?php echo
			gmdate("H:i:s", time() + 3600*($timezone+date("I"))); ?>"> 
		</p>

		<!-- TABEL -->
		
		<table class="table">
		  <tr>
		  	<th colspan="2"><center>Nomor Urut</center></th>
		  	<th><center>Pertanyaan</center></th>
		  	<th><center>Keterangan tentang calon mempelai pria</center></th>
		  	<th><center>Keterangan tentang calon mempelai wanita</center></th>
		  </tr>
		  <tr>
		  	<td>1</td>
		  	<td>1</td>
		  	<td>Nama keluarga</td>
		  	<td><input type="text" placeholder="Nama Keluarga" name="pria11" class="form-control"></td>
		  	<td><input type="text" placeholder="Nama Keluarga" name="wanita11" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>2</td>
		  	<td>Nama kecil</td>
		  	<td><input type="text" placeholder="Nama Kecil" name="pria12" class="form-control"></td>
		  	<td><input type="text" placeholder="Nama Kecil" name="wanita12" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>3</td>
		  	<td>Tempat dan Tanggal lahir/umur *)</td>
		  	<td><div class="input-group">
		  		<input type="text" placeholder="Tempat Lahir" style="width: 50%;" name="pria13" class="form-control">
		  		<input type="date" style="width: 50%;" name="pria14" class="form-control">
		  	</div></td>
		  	<td><div class="input-group">
		  		<input type="text" placeholder="Tempat Lahir" style="width: 50%;" name="wanita13" class="form-control">
		  		<input type="date" style="width: 50%;" name="wanita14" class="form-control">
		  	</div></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>4</td>
		  	<td>Agama</td>
		  	<td>
		  	<select class="form-control" name="pria15">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
			</td>
		  	<td>
		  	<select class="form-control" name="wanita15">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
		  	</td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>5</td>
		  	<td>Pekerjaan/Pangkat  **)</td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="pria16" class="form-control"></td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="wanita16" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>6</td>
		  	<td>Alamat / tempat tinggal kediaman sekarang</td>
		  	<td><input placeholder="Alamat / tempat tinggal kediaman sekarang" type="text" name="pria17" class="form-control"></td>
		  	<td><input placeholder="Alamat / tempat tinggal kediaman sekarang" type="text" name="wanita17" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>7</td>
		  	<td>Alamat / tempat tinggal kediaman dahulu</td>
		  	<td><input placeholder="Alamat / tempat tinggal kediaman dahulu" type="text" name="pria18" class="form-control"></td>
		  	<td><input placeholder="Alamat / tempat tinggal kediaman dahulu" type="text" name="wanita18" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>8</td>
		  	<td>Sudah/belum pernah kawin  **)</td>
		  	<td><input placeholder="Sudah/belum pernah kawin" type="text" name="pria19" class="form-control"></td>
		  	<td><input placeholder="Sudah/belum pernah kawin" type="text" name="wanita19" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>9</td>
		  	<td>Nama bekas istri/suami atau nama istri terdahulu</td>
		  	<td><input placeholder="Nama bekas istri/suami atau nama istri terdahulu" type="text" name="pria110" class="form-control"></td>
		  	<td><input placeholder="Nama bekas istri/suami atau nama istri terdahulu" type="text" name="wanita110" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>10</td>
		  	<td>Anak-anak yang akan disahkan dalam perkawinan</td>
		  	<td><input placeholder="Anak-anak yang akan disahkan dalam perkawinan" type="text" name="pria111" class="form-control"></td>
		  	<td><input placeholder="Anak-anak yang akan disahkan dalam perkawinan" type="text" name="wanita111" class="form-control"></td>
		  </tr>

		  <!-- BAGIAN 2 (BAPAK) -->
		  <tr>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td align="center"><h5><b>Bapak</b></h5></td>
		  	<td align="center"><h5><b>Bapak</b></h5></td>
		  </tr>
		  <tr>
		  	<td>2</td>
		  	<td>1</td>
		  	<td>Nama keluarga</td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="pria21" class="form-control"></td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="wanita21" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>2</td>
		  	<td>Nama kecil</td>
		  	<td><input placeholder="Nama Kecil" type="text" name="pria22" class="form-control"></td>
		  	<td><input placeholder="Nama Kecil" type="text" name="wanita22" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>3</td>
		  	<td>Tempat dan tanggal lahir/umur</td>
		  	<td><div class="input-group">
		  		<input placeholder="Tempat Lahir" type="text" style="width: 50%;" name="pria23" class="form-control">
		  		<input type="date" style="width: 50%;" name="pria24" class="form-control">
		  	</div></td>
		  	<td><div class="input-group">
		  		<input placeholder="Tempat Lahir" type="text" style="width: 50%;" name="wanita23" class="form-control">
		  		<input type="date" style="width: 50%;" name="wanita24" class="form-control">
		  	</div></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>4</td>
		  	<td>Agama</td>
		  	<td>
		  	<select class="form-control" name="pria25">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
			</td>
		  	<td>
		  	<select class="form-control" name="wanita25">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
		  	</td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>5</td>
		  	<td>Pekerjaan / Pangkat</td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="pria26" class="form-control"></td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="wanita26" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>6</td>
		  	<td>Tempat tinggal / kediaman</td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="pria27" class="form-control"></td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="wanita27" class="form-control"></td>
		  </tr>

		  <!-- BAGIAN 3 -->
		  <tr>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td align="center"><h5><b>Ibu</b></h5></td>
		  	<td align="center"><h5><b>Ibu</b></h5></td>
		  </tr>
		  <tr>
		  	<td>3</td>
		  	<td>1</td>
		  	<td>Nama keluarga</td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="pria31" class="form-control"></td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="wanita31" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>2</td>
		  	<td>Nama kecil</td>
		  	<td><input placeholder="Nama Kecil" type="text" name="pria32" class="form-control"></td>
		  	<td><input placeholder="Nama Kecil" type="text" name="wanita32" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>3</td>
		  	<td>Tempat dan tanggal lahir/umur</td>
		  	<td><div class="input-group">
		  		<input placeholder="Tempat Lahir" type="text" style="width: 50%;" name="pria33" class="form-control">
		  		<input type="date" style="width: 50%;" name="pria34" class="form-control">
		  	</div></td>
		  	<td><div class="input-group">
		  		<input placeholder="Tempat Lahir" type="text" style="width: 50%;" name="wanita33" class="form-control">
		  		<input type="date" style="width: 50%;" name="wanita34" class="form-control">
		  	</div></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>4</td>
		  	<td>Agama</td>
		  	<td>
		  	<select class="form-control" name="pria35">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
			</td>
		  	<td>
		  	<select class="form-control" name="wanita35">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
		  	</td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>5</td>
		  	<td>Pekerjaan / Pangkat</td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="pria36" class="form-control"></td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="wanita36" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>6</td>
		  	<td>Tempat tinggal / kediaman</td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="pria37" class="form-control"></td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="wanita37" class="form-control"></td>
		  </tr>

		  <!-- BAGIAN 4 -->
		  <tr>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td>&nbsp</td>
		  	<td align="center"><h5><b>Saksi pertama</b></h5></td>
		  	<td align="center"><h5><b>Saksi kedua</b></h5></td>
		  </tr>
		  <tr>
		  	<td>4</td>
		  	<td>1</td>
		  	<td>Nama keluarga</td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="pria41" class="form-control"></td>
		  	<td><input placeholder="Nama Keluarga" type="text" name="wanita41" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>2</td>
		  	<td>Nama kecil</td>
		  	<td><input placeholder="Nama Kecil" type="text" name="pria42" class="form-control"></td>
		  	<td><input placeholder="Nama Kecil" type="text" name="wanita42" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>3</td>
		  	<td>Tempat dan tanggal lahir/umur</td>
		  	<td><div class="input-group">
		  		<input type="text" placeholder="Tempat Lahir" style="width: 50%;" name="pria43" class="form-control">
		  		<input type="date" style="width: 50%;" name="pria44" class="form-control">
		  	</div></td>
		  	<td><div class="input-group">
		  		<input type="text" placeholder="Tempat Lahir" style="width: 50%;" name="wanita43" class="form-control">
		  		<input type="date" style="width: 50%;" name="wanita44" class="form-control">
		  	</div></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>4</td>
		  	<td>Agama</td>
		  	<td>
		  	<select class="form-control" name="pria45">
			  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
			</td>
		  	<td>
		  	<select class="form-control" name="wanita45">
		  	  <option>Islam</option>
			  <option>Kristen</option>
			  <option>Hindu</option>
			  <option>Budha</option>
			</select>
		  	</td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>5</td>
		  	<td>Pekerjaan / Pangkat</td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="pria46" class="form-control"></td>
		  	<td><input placeholder="Pekerjaan / Pangkat" type="text" name="wanita46" class="form-control"></td>
		  </tr>
		  <tr>
		  	<td>&nbsp</td>
		  	<td>6</td>
		  	<td>Tempat tinggal / kediaman</td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="pria47" class="form-control"></td>
		  	<td><input placeholder="Tempat tinggal / kediaman" type="text" name="wanita47" class="form-control"></td>
		  </tr>
		  <tr align="center">
		  	<td colspan="5">
		  		<button type="submit" class="btn btn-default" style="background-color: #ADD8E6;">Reset</button>
		  		<button type="submit" id="submit" target="_blank" class="btn btn-default" style="background-color: pink;">Submit</button>
		  	</td>
		  </tr>
		</table>
		<!-- </form> -->

		<div class="row">
		  <div class="col-md-6">
		  	<table class="table table-bordered">
		  		<tr>
			  		<td>*)</td>
			  		<td align="justify">Supaya dilampirkan petikan Akta Kelahiran atau surat kenal lahir dan bagi calon mempelai pria yang belum berusia 19 tahun serta calon mempelai wanita belum 16 tahun supaya dilampirkan dispensai pengadilan.</td>
		  		</tr>
			  	<tr>
			  		<td>**)</td>
			  		<td align="justify">Bagi calon mempelai dari anggota TNI / POLRI, supaya melampirkan ijin tertulis dari pejabat yang ditunjuk oleh Menhamkam/Pangab.</td>
			  	</tr>
		  		<tr>	
		  			<td>***)</td>
		  			<td align="justify">Bagi calon mempelai yang sudah pernah kawin supaya dilampirkan petikan Akta Kematian atau Surat Keterangan Kematian dalam hal putus perkawinan karena kematian dan petikan Akta Perceraian atau Surat Keterangan Perceraian dalam hal putus perkawinan karena cerai. Dalam hal masih dalam ikatan perkawinan supaya dilampirkan izin Pengadilan.</td>
		  		</tr>
		  	</table>
		  </div>
		  <div class="col-md-6">
		  </div>
		</div>

	</form>
	</div> <!-- end container -->
</body>
</html>

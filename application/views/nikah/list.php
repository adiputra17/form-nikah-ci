<!DOCTYPE html>
<html>
<head>
	<title>Data List Pernikahan</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet" >
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"/> </script>
	<style type="text/css">
		.col-md-1{
			margin: 0px;
			padding: 0px;
			/*width: 70px;*/
			float: left;
			font-size: 10px;
		}
		.col-md-2{
			margin: 0px;
			padding: 0px;
			/*width: 70px;*/
			float: left;
			font-size: 10px;
		}
		.col-md-3{
			margin: 0px;
			padding: 0px;
			/*width: 350px;*/
			float: left;
			font-size: 10px;
		}
		.col-md-4{
			margin: 0px;
			padding: 0px;
			/*width: 340px;*/
			float: left;
			font-size: 10px;
		}
	</style>
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
	<div class="row">
	<div class="col-md-1">
		<table class="table table-striped" style="font-size: 14px;">
    	<thead>
    		<tr>
      			<th>No.</th>
      		</tr>
    	</thead>
    	<tbody>
    		<?php 
	    		$sql =  $this->db->query("SELECT lainid FROM lain"); 
	    		foreach($sql->result_array() as $row):
	    	?>
      		<tr><td><?php echo $row['lainid']; ?></td></tr>
      		<?php
      			endforeach;
      		?>
    	</tbody>
    	</table>
    </div>

    <!-- Pengantin Pria -->
    <div class="col-md-3">
    	<table class="table table-striped" style="font-size: 14px;">
    	<thead>
      		<tr>
      			<th>Pengantin Laki-laki</th>
      		</tr>
    	</thead>
    	<tbody>
    		<?php 
	    		$sql =  $this->db->query("SELECT pria11 FROM pengantinpria"); 
	    		foreach($sql->result_array() as $row):
	    	?>
      		<tr><td><?php echo $row['pria11']; ?></td></tr>
      		<?php
      			endforeach;
      		?>
    	</tbody>
    	</table>
    </div>

    <!-- Pengantin Wanita -->
    <div class="col-md-3">
    	<table class="table table-striped" style="font-size: 14px;">
    	<thead>
      		<tr>
      			<th>Pengantin Wanita</th>
      		</tr>
    	</thead>
    	<tbody>
    		<?php 
	    		$sql =  $this->db->query("SELECT wanita11 FROM pengantinwanita"); 
	    		foreach($sql->result_array() as $row):
	    	?>
      		<tr><td><?php echo $row['wanita11']; ?></td></tr>
      		<?php
      			endforeach;
      		?>
    	</tbody>
    	</table>
    </div>

    <div class="col-md-3">
    	<!-- Tanggal Nikah -->
    	<table class="table table-striped" style="font-size: 14px;">
    	<thead>
      		<tr>
      			<th>Tanggal Nikah</th>
      		</tr>
    	</thead>
    	<tbody>
    		<?php 
	    		$sql =  $this->db->query("SELECT tanggal FROM lain"); 
	    		foreach($sql->result_array() as $row):
	    	?>
      		<tr><td><?php echo $row['tanggal']; ?></td></tr>
      		<?php
      			endforeach;
      		?>
    	</tbody>
    	</table>
    </div>

    <div class="col-md-2">
    	<!-- Opsi -->
    	<table class="table table-striped" style="font-size: 14px;">
    	<thead>
      		<tr>
      			<th>Opsi</th>
      		</tr>
    	</thead>
    	<tbody>
    		<?php 
	    		$sql =  $this->db->query("SELECT lainid FROM lain"); 
	    		foreach($sql->result_array() as $row):
	    	?>
      		<tr>
      			<td style="padding-top: 7px;">
      			<form action="showList" method="post">
      			<input type="hidden" name="id" value="<?php echo $row['lainid']; ?>">
      			<button style="padding: 0px 5px 0px 5px;" type="submit" formtarget="_blank" class="btn btn-info btn-xs">view</button>
	   			</form>
      			</td>
      		</tr>
      		<?php
      			endforeach;
      		?>
    	</tbody>
    	</table>
    </div>
    </div>

	</div>
</body>
</html>

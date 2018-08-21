<html>
<head>
<style>
	body
	{
		background-color: light-blue;
	}
</style>
</head>

<body>
<center>
<p>Halo, <?php echo $this->session->userdata('email'); ?>
	
</p>
<a href="<?php echo base_url().'login/logout'; ?>" class = "btn btn-logout">logout</a><br>
<h2>

  <a href="<?php echo base_url().'admin/index'; ?>"> 
  <button type = "Admin" class = "btn btn-data-admin">Admin</button>

  <a href="<?php echo base_url().'code/index'; ?>" >
  <button type = "Redeem Code" class = "btn btn-siswa">Siswa</button>

0</a>
</body>
</h2>
<hr>
</center>
</html>
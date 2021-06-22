<!DOCTYPE html>
<html>
<head>
<title>Sentral Koleksi Indonesia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Badge Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?=base_url();?>/asset/input/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="w3layouts-main"> 
		<h1>Kasir Sentral Koleksi Indonesia</h1>
		<div class="agilesign-form">  
			<div class="agileits-top">
				<form action="<?php echo site_url('C_kasir/simpan_sale')?>" method="POST">
					<div class="wthree-text">  
						<p>
						<select name="id_barang" id="id_barang">
                          <option value="Nama Barang Tidak diketahui" selected>Silahkan Nama Barang</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_barang."'>".$row->nama_barang."</option>";
                              }
                            ?>
                        </select>
                        <label for="brand"><span></span>Masukkan Nama Barang</label>  
</p>
					</div>
					<div class="wthree-text">  
						<p>
						<select name="bulan" id="bulan">
                          <option value="1" selected>Silahkan Pilih Bulan</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                        <label for="brand"><span></span>Masukkan Bulan Pembelian</label>  
</p>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="tahun" required=""/>
						<label>Tahun</label>
						<span></span>
					</div>
					
					<div class="styled-input w3ls-text">
						<input type="text" name="stock" required=""/>
						<label>Jumlah Beli</label>
						<span></span>
					</div>
					<div class="agileits-bottom"> 
						<input type="submit" name="Simpan" value="Simpan"> 
					</div>	
				</form>
				<a href="<?php echo site_url('C_login/logout')?>"><button>Logout</button></a>
			</div> 
		</div>	
	</div>	
</body>
</html>
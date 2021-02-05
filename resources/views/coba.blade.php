<!DOCTYPE HTML>
<html>
<head>
	<title>Membuat Tabel Responsive Dengan HTML dan CSS 3</title>
	<meta name="description" content="Tutorial yang akan memandu anda untuk membuat tabel responsive dengan HTML dan CSS. Disertai dengan 4 model berbeda"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/css/site.css?r=1612421743"/>
	<link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/css/icomoon/style.css?r=1612421743"/>
	<link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/includes/assets/fonts/font-awesome/fontawesome-all.min.css?r=1612421743"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/font-awesome/css/font-awesome.min.css?r=1612421743"/>
	<link rel="stylesheet" href="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/css/main.css?r=1612421743"/><script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=P41oijxkfFScRkDH3sZOq6PCJIyx-bBNQV5jsRespHKxIPa_remlMKVb6dvpAnOxJj-spdH_AsZpfbCBZ3MeSe-MZrmSj9dbDuCopgtR1SBevXg-ZuGmS09QJ4Yj_c9K" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9qYWdvd2ViZGV2LmNvbS93cC1jb250ZW50L2RlbW8vbWVtYnVhdC10YWJlbC1yZXNwb25zaXZlLWRlbmdhbi1jc3Mv"/><script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/includes/assets/js/jquery-3.3.1.min.js"></script><script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/includes/assets/js/html5.js"></script>
	<script type="text/javascript" src="https://jagowebdev.com/wp-content/demo/membuat-tabel-responsive-dengan-css/js/main.js?r=1612421743"></script>
	<link rel="shortcut icon" href="https://jagowebdev.com/wp-content/demo/includes/assets/img/favicon.png?hash=1612421743"/>
</head>
<body>
	<div class="main-wrapper">
	<header id="top">
		<a href="https://jagowebdev.com"><img src="https://jagowebdev.com/wp-content/demo/includes/assets/img/logo.png" alt="JagoWebDev.com" title="JadoWebDev.com"></a>
		<div class="link-header">
			<a class="home" href="https://jagowebdev.com" title="JagoWebDev.com">&laquo; Back to home</a>
				<div class="clearfix"></div>
		</div>
	</header>
	<div class="content-wrapper"><h3>Tabel 1</h3>
<table class="demo-table responsive res1">
<caption class="title">Tabel Responsive Tanpa Header</caption>
<thead>
	<tr>
		<th scope="col">Nama</th>
		<th scope="col">Alamat</th>
		<th scope="col">Telp</th>
		<th scope="col">Email</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td data-header="Nama" class="title">Anton</td>
		<td data-header="Alamat" >Jakarta</td>
		<td data-header="Telp" >08562136x</td>
		<td data-header="Email" >anton@email.com</td>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Bryan</td>
		<td data-header="Alamat" >Surabaya</td>
		<td data-header="Telp" >08581234x</td>
		<td data-header="Email" >bryan@email.com</td>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Cherly</td>
		<td data-header="Alamat" >Semarang</td>
		<td data-header="Telp" >08121234x</td>
		<td data-header="Email" >cherly@email.com</td>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Dean</td>
		<td data-header="Alamat" >Makassar</td>
		<td data-header="Telp" >08111234x</td>
		<td data-header="Email" >dean@email.com</td>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Esryl</td>
		<td data-header="Alamat" >Medan</td>
		<td data-header="Telp" >08131234x</td>
		<td data-header="Email" >esryl@email.com</td>
	</tr>
</tbody>
</table>
<h3>Tabel 2</h3>
<table class="demo-table res2" >
<caption class="title">Tabel Responsive Dengan Header</caption>
<thead>
	<tr>
		<th scope="col" class="column-primary" data-header="Pelanggan"><span>Nama</span></th>
		<th scope="col">Alamat</th>
		<th scope="col">Telp</th>
		<th scope="col">Email</th>
		<th scope="col" class="column-primary">Opsi</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td data-header="Nama" class="title">Anton</td>
		<td data-header="Alamat" >Jakarta</td>
		<td data-header="Telp" >08562136x</td>
		<td data-header="Email" >anton@email.com</td>
		<th scope="row">
			<div class="toolbox">
				<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				<a href="#" class="remove"><i class="fa fa-close"></i></a>
			</div>
		</th>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Bryan</td>
		<td data-header="Alamat" >Surabaya</td>
		<td data-header="Telp" >08581234x</td>
		<td data-header="Email" >bryan@email.com</td>
		<th scope="row">
			<div class="toolbox">
				<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				<a href="#" class="remove"><i class="fa fa-close"></i></a>
			</div>
		</th>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Cherly</td>
		<td data-header="Alamat" >Semarang</td>
		<td data-header="Telp" >08121234x</td>
		<td data-header="Email" >cherly@email.com</td>
		<th scope="row">
			<div class="toolbox">
				<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				<a href="#" class="remove"><i class="fa fa-close"></i></a>
			</div>
		</th>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Dean</td>
		<td data-header="Alamat" >Makassar</td>
		<td data-header="Telp" >08111234x</td>
		<td data-header="Email" >dean@email.com</td>
		<th scope="row">
			<div class="toolbox">
				<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				<a href="#" class="remove"><i class="fa fa-close"></i></a>
			</div>
		</th>
	</tr>
	<tr>
		<td data-header="Nama" class="title">Esryl</td>
		<td data-header="Alamat" >Medan</td>
		<td data-header="Telp" >08131234x</td>
		<td data-header="Email" >esryl@email.com</td>
		<th scope="row">
			<div class="toolbox">
				<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				<a href="#" class="remove"><i class="fa fa-close"></i></a>
			</div>
		</th>
	</tr>
</tbody>
</table>

<h3>Tabel 3</h3>
<table class="demo-table res3" >
	<caption class="title">Tabel Responsive Dengan Header</caption>
	<thead>
		<tr>
			<th scope="col" class="column-primary">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Telp</th>
			<th scope="col">Email</th>
			<th scope="col" class="column-primary">Opsi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td data-header="Nama" class="title">Anton<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Jakarta</td>
			<td data-header="Telp" >08562136x</td>
			<td data-header="Email" >anton@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Bryan<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Surabaya</td>
			<td data-header="Telp" >08581234x</td>
			<td data-header="Email" >bryan@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Cherly<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Semarang</td>
			<td data-header="Telp" >08121234x</td>
			<td data-header="Email" >cherly@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Dean<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Makassar</td>
			<td data-header="Telp" >08111234x</td>
			<td data-header="Email" >dean@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Esryl<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Medan</td>
			<td data-header="Telp" >08131234x</td>
			<td data-header="Email" >esryl@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
	</tbody>
</table>

<h3>Tabel 4</h3>
<div class="table-container">
<table class="demo-table" >
	<caption class="title">Tabel Responsive Sederhana</caption>
	<thead>
		<tr>
			<th scope="col" class="column-primary">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Telp</th>
			<th scope="col">Email</th>
			<th scope="col" class="column-primary">Opsi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td data-header="Nama" class="title">Anton<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Jakarta</td>
			<td data-header="Telp" >08562136x</td>
			<td data-header="Email" >anton@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Bryan<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Surabaya</td>
			<td data-header="Telp" >08581234x</td>
			<td data-header="Email" >bryan@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Cherly<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Semarang</td>
			<td data-header="Telp" >08121234x</td>
			<td data-header="Email" >cherly@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Dean<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Makassar</td>
			<td data-header="Telp" >08111234x</td>
			<td data-header="Email" >dean@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
		<tr>
			<td data-header="Nama" class="title">Esryl<a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
			<td data-header="Alamat" >Medan</td>
			<td data-header="Telp" >08131234x</td>
			<td data-header="Email" >esryl@email.com</td>
			<th scope="row">
				<div class="toolbox">
					<a href="#" class="edit"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#" class="remove"><i class="fa fa-close"></i></a>
				</div>
			</th>
		</tr>
	</tbody>
	
</table>
</div>

	</div>
	<footer>Copyright &copy; 2021<a href="https://jagowebdev.com">JagoWebDev.com</a></footer>
	</div>
	<a id="to-top" href="#top" style="display: none;"><i class="icon-chevron-up"></i></a>
	</body>
<table class="demo-table res2" >
</html>

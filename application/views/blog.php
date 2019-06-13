<!doctype html> <html lang="en">
<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>Blog Chandra</title>
<style> 
	body { 
	padding-top: 3.2rem; 
	}
	header { 
	padding: 0px 0 0px; 
	} 
	@media (min-width: 100px) { 
		header { padding: 0px 0 0px; 
		} 
	} 
	section { padding: 150px 0; 
	} 
	footer { 
		padding-top: 3rem;
		padding-bottom: 3rem; 
	} 
	footer p { 
	margin-bottom: .25rem; 
	} 
</style>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head> 
<body>

	<h1>Selamat Datang di Website Saya</h1>

	<?php
		foreach ($blog as $key => $blog) {
			echo '<h2><a href="blog/detail/'.$blog['url'].'">'.$blog['judul'].'</a></h2>';
			echo $blog['konten'];
		}
	?>
	<form method="post" action=""> 
		<div class="form-group"> 
			<label>Judul</label> 
			<input type="text" name="judul" class="form-control" value=""> 
		</div> 
		<div class="form-group"> 
			<label>Konten</label> 
			<input type="text" name="konten" class="form-control" value=""> 
		</div> 
		<div class="form-group"> 
			<label>Url</label> 
			<input type="text" name="url" class="form-control" value=""> 
		</div>
		<div class="form-group"> 
			<label>Tanggal</label> 
			<input type="date" name="tanggal" class="form-control" value=""> 
		</div>   
	</form>
	</div>
	
</body>
</html>
<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "MODUL3_MITTRA";

	$koneksi = mysqli_connect($user, $server, $pass, $database)or die(mysqli_error($koneksi));
  
  //jika tombol simpan diklik
  if(isset($_POST['bsubmit']))
  
  {
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysql_query($koneksi, "UPDATE NEW_TABLE set
											 	nama = '$_POST[nama]',
											 	deskripsi = '$_POST[deskripsi]',
                        gambar = '$_POST[gambar]',
											 	kategori = '$_POST[kategori]'
                        tanggal = '$_POST[tanggal]'
                        mulai = '$_POST[mulai]'
                        berakhir = '$_POST[berakhir]'
                        tempat = '$_POST[tempat]'
                        harga = '$_POST[harga]'
                        benefit = '$_POST[benefit]'
											 WHERE NEW_TABLE = '$_GET[id]'
										   ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='Event.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Edit data GAGAL!!');
						document.location='Event.php';
				     </script>";
			}
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($koneksi, "DELETE INTO modul3_crud (nama, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
										  VALUES ('$_POST[nama]', 
										  		 '$_POST[deskripsi]', 
										  		 '$_POST[gambar]', 
										  		 '$_POST[kategori]', 
                            '$_POST[tanggal]',
                            '$_POST[mulai]',
                            '$_POST[berakhir]',
                            '$_POST[tempat]',
                            '$_POST[harga]',
										  		 '$_POST[benefit]')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='Event.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='Event.php';
				     </script>";
			}
		}


		
	}

  ?>
  
  
  
  !doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Buat Event</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">EAD EVENTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <button type="button" class="btn btn-outline-light text-white">Buat Event</button>
   
  </div>
</nav>
<br>
<nav class="container">
        <div class="row">
            <div class="col text-left ">
            <span style="color:blue"><h4>Buat Event</h4></span>
    </nav>

    <div class=container>
            <div class="row">
                <div class="col">
                <div class="card mt-3"  >
	  <div class="card-header bg-danger">
	    
	  </div>
	  
    <div class="card-body">
	    <form method="post" action=""  >
	    	<div class="form-group">
	    		<label><b>Name</b></label>
	    		<input type="text" name="name" value="<?=@$vname?>" class="form-control" placeholder="Open Mind ESD Laboratory" required>
	    	</div>
	    	
        <div class="form-group">
	    		<label><b>Deskripsi</b></label>
	    		<textarea class="form-control" name="deskripsi" value="<?@$vdeskripsi?>" placeholder="Input Alamat anda disini!"><?=@$valamat?></textarea>
	    	</div>
	    	
        <div class="form-group" >
	    		<label><b>Upload Gambar</b></label>
          <input type="file" name="gambar" value="<?@$vgambar?>" class="form-control" >
	    	</div>
        
        <div class="form-group">
	    		<label><b>Kategori</b></label><br>
          <option value="<?=@$vkategori?>"><?=@$vkategori?></option>
	    		  <input type="radio" name="kategori" value="online" /> Online
            <input type="radio" name="kategori" value="offline" /> Offline	    
    	</div>
        <br><br><br><br>
	    </form>
	  </div>
	</div>
</div>
<div class="col">
                   
	<div class="card mt-3"  >
	  <div class="card-header bg-primary text-white">
	  </div>
	  <div class="card-body">
	    <form method="post" action=""  >
	    	<div class="form-group">
	    		<label><b>Tanggal</b></label><br>
	    		<input type="date" id="tanggal" name="tanggal" value="<?@$vtanggal?>" class="form-control">
	    	</div>
	    	
        <div class="form-group">
        <div class="row">
                <div class="col">
                <div class="form-group">
                <label for="inputtype" class="col-form-label "><b>Jam Mulai</b></label>
                <select class="form-control" name="mulai" value="<?@$vmulai?>">
                  <option value="Standard">19:00</option>
                </select>
              </div>
                </div>
                <div class="col">
                <div class="form-group">
                <label for="inputtype" class="col-form-label "><b>Jam Berakhir</b></label>
                <select class="form-control" name="berakhir" value="<?@$vberakhir?>">
                  <option value="Standard">20.00</option>
                </select>
                </div>
            </div>
        </div>
        </div>
	    	
        <div class="form-group">
	    		<label><b>Tempat</b></label>
	    		<input type="text" name="tempat" value="<?=@$vtempat?>" class="form-control" placeholder="Zoom Meeting" required>
	    	</div>
            
        <div class="form-group">
	    		<label><b>Harga</b></label>
	    		<input type="text" name="harga" value="<?=@$vharga?>" class="form-control" placeholder="" required>
	    	</div>
            
            <div class="form-group">
	    		<label><b>Benefit</b></label>
          <option value="<?=@$vbenefit?>"><?=@$vbenefit?></option>
          <input type="checkbox" name="Benefit1" value="snacks" /> Snacks</label>
          <input type="checkbox" name="Benefit2" value="sertifikat" /> Sertifikat</label>
          <input type="checkbox" name="Benefit3" value="souvenir" /> Souvenir</label>
	    	</div>
        
        <div class="col text-right ">
	    	<button type="submit" class="btn btn-danger" name="bsubmit">Submit</button>
        <button type="reset" class="btn btn-primary" name="bcancel">Cancel</button>
      </div>

	    </form>
	  </div>
	</div> 
                </div>
            </div>
        </div>



  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php
 include_once("koneksi.php");

 $id = $_GET['id'];
 $query = "SELECT * FROM tb_buku WHERE id_buku = $id";
 $hasil = mysqli_query($conn, $query);
 $data = mysqli_fetch_array($hasil);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Edit Buku</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Edit Buku</title>
 </head>
 <body>
     <div class="alert alert-success text-center" role="alert">
         <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
     </div>
     <h1 class="ml-5">Edit Koleksi Buku</h1>
     <form method="post" action="prosesubahbuku.php" class="ml-5">
         <div class="form-group row">
             <label for="id_buku" class="col-sm-1 col-form-label">ID Buku</label>
             <div class="col-sm-3">
                 <input type="text" name="id_buku" class="form-control" value="<?php echo $data['id_buku']; ?>" readonly>
             </div>
         </div>
         <div class="form-group row">
             <label for="judul" class="col-sm-1 col-form-label">Judul Buku</label>
             <div class="col-sm-3">
                 <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="<?php echo $data['judul_buku']; ?>">
             </div>
         </div>
         <div class="form-group row">
             <label for="pengarang" class="col-sm-1 col-form-label">Pengarang</label>
             <div class="col-sm-3">
                 <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="<?php echo $data['pengarang']; ?>">
             </div>
         </div>
         <div class="form-group row">
             <label for="tahun_terbit" class="col-sm-1 col-form-label">Tahun Terbit</label>
             <div class="col-sm-3">
                 <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="<?php echo $data['tahun_terbit']; ?>">
             </div>
         </div>
         <div class="form-group row">
             <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
             <div class="col-sm-3">
                 <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="<?php echo $data['kategori']; ?>">
             </div>
         </div>
         <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0 mr-0">Simpan</button>
         <a href="index.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Koleksi Buku</a>
     </form>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>
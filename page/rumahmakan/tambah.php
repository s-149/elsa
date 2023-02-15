<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                    <label> Kode</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="Kode"  required autofocus />
                </div>
                    <label> Nama</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="Nama"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Alamat</label>
                    <textarea type="text" class="form-control" name="Alamat"  required autofocus></textarea>
                </div>
                
                <div class="form-group">
                    <label> Telepon</label>
                    <input type="number" class="form-control" name="Telepon"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Reputasi(Tahun Berdiri)</label>
                    <input type="text" class="form-control" name="Reputasi"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Jarak(KM)</label>
                    <input type="text" class="form-control" name="Jarak"  required autofocus />
                </div>
                
                <div>
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
         </div>

         </form>
      </div>
 </div>  
 </div>  
 </div>


 <?php

    $Kode = $_POST ['Kode'];
    $Nama = $_POST ['Nama'];
    $Alamat = $_POST ['Alamat'];
    $Telepon = $_POST ['Telepon'];
    $Reputasi = $_POST ['Reputasi'];
    $Jarak = $_POST ['Jarak'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `rumahmakan`(`Kode`,`Nama`, `Alamat`, `Telepon`, `Reputasi`, `Jarak`) values('$Kode','$Nama','$Alamat', '$Telepon', '$Reputasi', '$Jarak')");

        $sql1 = $koneksi->query("INSERT INTO `bobot`(`Kode`, `Menu`, `Reputasi`, `Harga`, `Jarak`, `Ranking`) values('$Kode','0','0', '0', '0', '0')");


        $sql2 = $koneksi->query("INSERT INTO  `normalisasi`(`Kode`, `Menu`, `Reputasi`, `Harga`, `Jarak`, `Ranking`) values('$Kode','0','0', '0', '0', '0')");


        //$sql3 = $koneksi->query("INSERT INTO   `ranking`(`Kode`, `ranking`)) values('$Kode','0')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=rumahmakan";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             


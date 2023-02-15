<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label> Kriteria</label>
                    <input type="text" class="form-control" name="Kriteria"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Bobot</label>
                    <input type="text" class="form-control" name="Bobot"  required autofocus>
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

    $Kriteria = $_POST ['Kriteria'];
    $Bobot = $_POST ['Bobot'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `kriteria`(`Kriteria`, `Bobot`) values('$Kriteria','$Bobot')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=kriteria";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             


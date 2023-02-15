<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label> IdRm </label>
                    <select class="form-control" name="IdRm"  required autofocus>
                        <option value="">Pilih</option>
                        <?php
                            $sql1 = $koneksi->query("select * from rumahmakan ");

                            while ($data1= $sql1->fetch_assoc()) 
                                {  ?>
                                    <option value="<?php echo  $data1['Id'];?>"><?php echo  $data1['Nama'];?></option>
                        
                        <?php } ?> 
                    </select>
                </div>
                <div class="form-group">
                    <label> Menu</label>
                    <input type="text" class="form-control" name="Menu"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Harga</label>
                    <input type="text" class="form-control" name="Harga"  required autofocus />
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

    $IdRm = $_POST ['IdRm'];
    $Menu = $_POST ['Menu'];
    $Harga = $_POST ['Harga'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `datarumahmakan`(`IdRm`, `Menu`, `Harga`) values('$IdRm','$Menu', '$Harga')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=datarumahmakan";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             


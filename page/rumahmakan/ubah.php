<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from rumahmakan where Id='$_GET[id]'");
    $data = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
		Perbarui Data
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" >

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="Nama" value="<?php echo $data['Nama'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="Alamat" value="<?php echo $data['Alamat'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" type="text" name="Telepon" value="<?php echo $data['Telepon'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Reputasi</label>
                                            <input class="form-control" type="text" name="Reputasi" value="<?php echo $data['Reputasi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jarak</label>
                                            <input class="form-control" type="text" name="Jarak" value="<?php echo $data['Jarak'];?>" />
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

    $Nama = $_POST ['Nama'];
    $Alamat = $_POST ['Alamat'];
    $Telepon = $_POST ['Telepon'];
    $Reputasi = $_POST ['Reputasi'];
    $Jarak = $_POST ['Jarak'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
//Teleph`Id`, `Nama`, `Alamat`, `Telepon`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `one`
        $sql = $koneksi->query("update  rumahmakan set `Nama`='$Nama', `Alamat`='$Alamat', `Telepon`='$Telepon', `Reputasi`='$Reputasi', `Jarak`='$Jarak' where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=rumahmakan";

                </script>
            <?php
        
    }

 ?>
                             
                             


<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from kriteria where Id='$_GET[id]'");
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
                                            <label>Kriteria</label>
                                            <input class="form-control" type="text" name="Kriteria" value="<?php echo $data['Kriteria'];?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Bobot</label>
                                            <input class="form-control" type="text" name="Bobot" value="<?php echo $data['Bobot'];?>" />
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
    $Telepon = $_POST ['Telepon'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
//Teleph`Id`, `Kriteria`, `Bobot`, `Telepon`, `Tempat_Lahir`, `Tanggal_Lahir`, `Bobot`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `one`
        $sql = $koneksi->query("update  kriteria set `Kriteria`='$Kriteria', `Bobot`='$Bobot' where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=kriteria";

                </script>
            <?php
        
    }

 ?>
                             
                             


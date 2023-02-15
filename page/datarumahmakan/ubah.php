<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from datarumahmakan where Id='$_GET[id]'");
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
                                            <label>Menu</label>
                                            <input class="form-control" type="text" name="Menu" value="<?php echo $data['Menu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" type="text" name="Harga" value="<?php echo $data['Harga'];?>" />
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

    $Menu = $_POST ['Menu'];
    $Harga = $_POST ['Harga'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
//Teleph`Id`, `Menu`, `Reputasi`, `Harga`, `Tempat_Lahir`, `Tanggal_Lahir`, `Reputasi`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `one`
        $sql = $koneksi->query("update  datarumahmakan set `Menu`='$Menu',  `Harga`='$Harga',  where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=datarumahmakan";

                </script>
            <?php
        
    }

 ?>
                             
                             


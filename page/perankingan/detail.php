<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from rumahmakan where Kode='$id'");
    $data = $sql->fetch_assoc();
    $Kode=$data['Id'];

?>

<div class="panel panel-default">
<div class="panel-heading">
        Detail Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <!-- data siswa -->
                        <tr>
                            <td colspan="3"><h4>Data Lengkap:</h4></td>
                        </tr>
                        <tr>
                            <td>Kode</td>
                            <td>:</td>
                            <td><?php echo $data['Kode'];?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $data['Nama'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $data['Alamat'];?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><?php echo $data['Telepon'];?></td>
                        </tr>
                        <tr>
                            <td>Reputasi</td>
                            <td>:</td>
                            <td><?php echo $data['Reputasi'];?></td>
                        </tr>
                        <tr>
                            <td>Jarak</td>
                            <td>:</td>
                            <td><?php echo $data['Jarak'];?></td>
                        </tr>
                    </table>
                </div>

        <div class="table-responsive">
            <div>
                <h3>Variasi Menu :</h3>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Menu</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from datarumahmakan where IdRm='$Kode' ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>   
                        <td><?php echo $data['Menu'];?></td>                      
                        <td><?php echo $data['Harga'];?></td>  
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>


            </div>
        </div>  
    </div>  
</div>

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Rumahmakan
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=datarumahmakan&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Nama</th>
                        <th>Menu</th>
                        <th>Harga</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from datarumahmakan ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <?php
                        $kunci=$data['IdRm'];
                            $sql1 = $koneksi->query("select * from rumahmakan where Id='$kunci' ");

                            while ($data1= $sql1->fetch_assoc()) 
                                {  ?>
                                    <td><?php echo  $data1['Nama'];?></td>
                        
                        <?php } ?>                       
                        <td><?php echo $data['Menu'];?></td>                      
                        <td><?php echo $data['Harga'];?></td>  

                         <td>
                            <a href="?page=datarumahmakan&aksi=ubah&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=datarumahmakan&aksi=hapus&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          
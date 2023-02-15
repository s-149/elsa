<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Rumah Makan
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=rumahmakan&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Reputasi</th>
                        <th>Jarak</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from rumahmakan ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Kode'];?></td>  
                        <td><?php echo $data['Nama'];?></td>                        
                        <td><?php echo $data['Alamat'];?></td>                        
                        <td><?php echo $data['Telepon'];?></td>                        
                        <td><?php echo $data['Reputasi'];?></td>                        
                        <td><?php echo $data['Jarak'];?></td> 

                         <td>
                            <a href="?page=rumahmakan&aksi=ubah&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=rumahmakan&aksi=hapus&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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
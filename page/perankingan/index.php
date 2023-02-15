<div class="row">
<div class="col-md-6">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Rating Kinerja
    </div>
    <div class="panel-body">
        <div class="table-responsive">
<form action=""  method="POST" enctype="multipart/form-data">
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr><th>No</th>
                        <th>Kode</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
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

                        <?php 
                        $kunci=$data['Id'];
                        $sql1 = $koneksi->query("select * from  `datarumahmakan` where IdRm='$kunci' ");  
                        $Menu=0;
                        while ( $data1 = mysqli_fetch_array($sql1)) {
                            $Menu++;
                        } ?>

                        <td><?php echo $Menu ;?><input type="hidden" name="Menu[]" value="<?php echo $Menu ;?>"><input type="hidden" name="Kode[]" value="<?php echo $data['Kode'];?>"></td>
                        <td><?php echo $Tahun_Sekarang-$data['Reputasi'];?><input type="hidden" name="Reputasi[]" value="<?php echo $Tahun_Sekarang-$data['Reputasi'];?>"></td>
                        <td><?php

                            $crMax1 = mysqli_query($koneksi, "SELECT AVG(Harga) as maxHarga FROM `datarumahmakan` where IdRm='$kunci'");
                            $max1 = mysqli_fetch_array($crMax1);
                            $maxharga=$max1['maxHarga'];
                            if ($maxharga==0) {
                                echo 0; 
                                echo'<input type="hidden" name="Harga[]" value="0">';
                            }
                            
                            elseif ($maxharga<=20000) {
                                echo 1;
                                echo'<input type="hidden" name="Harga[]" value="1">';
                            }
                            
                            elseif ($maxharga<=30000) {
                                echo 2;
                                echo'<input type="hidden" name="Harga[]" value="2">';
                            }
                            
                            elseif ($maxharga<=40000) {
                                echo 3;
                                echo'<input type="hidden" name="Harga[]" value="3">';
                            }
                            
                            elseif ($maxharga>=41000) {
                                echo 4;
                                echo'<input type="hidden" name="Harga[]" value="4">';
                            }
                            
                            else {
                                echo 0;
                                echo '<input type="hidden" name="Harga[]" value="0">';
                            }
                            
                            ?>
                        </td>
                        <td><?php echo $data['Jarak'];?><input type="hidden" name="Jarak[]" value="<?php echo $data['Jarak'];?>"></td>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>

<div class="col-md-6">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Normalisasi
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <button type="submit" name="bobot" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-refresh"></i> Refresh</button>
            </div><br>
</form>
<form action=""  method="POST" enctype="multipart/form-data">
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no2 = 1;

                        $sql2 = $koneksi->query("select * from bobot ");

                        while ($data2= $sql2->fetch_assoc()) {       
                       
                    ?>

                    <tr>

                        <td><?php echo $data2['Kode']; ?><input type="hidden" name="Kode1[]" value="<?php echo $data2['Kode'] ;?>"></td>

                        <td><?php $_Menu=round($data2['Menu']/$max['maxK1'],1); echo $_Menu ?><input type="hidden" name="Menu1[]" value="<?=$_Menu?>"></td>

                        <td><?php $_Reputasi=round($data2['Reputasi']/$max['maxK2'],1); echo $_Reputasi ?><input type="hidden" name="Reputasi1[]" value="<?=$_Reputasi?>"></td>

                        <td><?php $_Harga=round($min['minK3']/$data2['Harga'],1); echo $_Harga ?><input type="hidden" name="Harga1[]" value="<?=$_Harga?>"></td>

                        <td><?php $_Jarak=round($min['minK4']/$data2['Jarak'],1); echo $_Jarak ?><input type="hidden" name="Jarak1[]" value="<?=$_Jarak?>">

                        <?php $_Ranking=round(($BobotMenu['Bobot']*$_Menu)+($BobotReputasi['Bobot']*$_Reputasi)+($BobotHarga['Bobot']*$_Harga)+($BobotJarak['Bobot']*$_Jarak),0); ?><input type="hidden" name="Ranking1[]" value="<?=$_Ranking?>">
                        </td>

                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>


<div class="col-md-6">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Bobot Nilai
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr><th>No</th>
                        <th>Kriteria</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no3 = 1;

                        $sql3 = $koneksi->query("select * from kriteria ");

                        while ($data3= $sql3->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no3++; ?></td>
                        <td><?php echo $data3['Kriteria'];?></td>                        
                        <td><?php echo $data3['Bobot'];?></td> 

                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>

<div class="col-md-6">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Ranking
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <button type="submit" name="normalisasi" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-refresh"></i> Refresh</button>
            </div><br>
</form>
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr><th>Kode</th>
                        <th>Bobot</th>
                        <th>Ranking</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no4 = 1;

                        $sql4 = $koneksi->query("select * from normalisasi  ORDER BY `normalisasi`.`Ranking` DESC ");

                        while ($data4= $sql4->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $data4['Kode']; ?></td>
                        <td><?php echo $data4['Ranking'];?></td>
                        <td><?php echo $no4++; ?></td> 

                         <td>
                            <a href="?page=perankingan&aksi=detail&id=<?php echo $data4['Kode']; ?>" class="btn btn-warning" ><i class="fa fa-eye"></i> Detail</a>

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


 <?php 
 if (isset($_POST['bobot'])) {
     # code...
 

    $Kode = $_POST ['Kode'];
    $paket=count($Kode);

    $Menu = $_POST ['Menu'];
    $Reputasi = $_POST ['Reputasi'];
    $Harga = $_POST ['Harga'];
    $Jarak = $_POST ['Jarak'];

        for ($i=0;  $i < $paket ; $i++) { 
            
            $sql = $koneksi->query("update  bobot set  `Menu`='$Menu[$i]', `Reputasi`='$Reputasi[$i]',`Harga`='$Harga[$i]', `Jarak`='$Jarak[$i]' where `Kode`='$Kode[$i]'");
        }


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Halaman Telah direfresh.");
                    window.location.href="?page=perankingan";

                </script>
            <?php
        
    
}
 ?>
 <?php 
 if (isset($_POST['normalisasi'])) {
     # code...
 

    $Kode1 = $_POST ['Kode1'];
    $paket1=count($Kode1);

    $Menu1 = $_POST ['Menu1'];
    $Reputasi1 = $_POST ['Reputasi1'];
    $Harga1 = $_POST ['Harga1'];
    $Jarak1 = $_POST ['Jarak1'];
    $Ranking1 = $_POST ['Ranking1'];

        for ($i1=0;  $i1 < $paket1 ; $i1++) { 
            
            $sql = $koneksi->query("update  normalisasi set  `Menu`='$Menu1[$i1]', `Reputasi`='$Reputasi1[$i1]',`Harga`='$Harga1[$i1]', `Jarak`='$Jarak1[$i1]', `Ranking`='$Ranking1[$i1]' where `Kode`='$Kode1[$i1]'");
        }


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Halaman Telah direfresh.");
                    window.location.href="?page=perankingan";

                </script>
            <?php
        
    
}
 ?>

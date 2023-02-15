<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from rumahmakan where Id='$id'");
    $data = $sql->fetch_assoc();
    $Kode=$data['Kode'];

	$koneksi->query("delete from rumahmakan where Id='$id'");

	$koneksi->query("delete from bobot where Kode='$Kode'");

	$koneksi->query("delete from normalisasi where Kode='$Kode'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=rumahmakan";
</script>
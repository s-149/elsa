<?php

	$koneksi->query("delete from kriteria where Id='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=kriteria";
</script>
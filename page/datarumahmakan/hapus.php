<?php

	$koneksi->query("delete from datarumahmakan where Id='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=datarumahmakan";
</script>
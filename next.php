<?php
$dato = $_POST["Token"];

setcookie("sms", $dato, time()+3600);

?>
<script>
    
    var h = document.cookie.split();
    alert(h);
</script>
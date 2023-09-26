<?php 
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') == True){
?>
<h2>Estás usando Mozilla Firefox, felicidades</h2>
<?php 
    }else{
        echo "<script>alert('No estas usando Mozilla Firefox, lo sentimos');</script>";
} 
?>
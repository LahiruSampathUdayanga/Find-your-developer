<?php
session_start();
session_destroy();
?>

<script type='text/javascript'>
    alert('You have been Logged out \n CLICK HERE \n To Return!');
    window.location='../index.php';
</script>
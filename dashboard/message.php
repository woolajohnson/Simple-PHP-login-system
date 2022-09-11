<?php 
    if (isset($_SESSION['message'])) :

?>


<div class="alert alert-warning mt-2" id="message" role="alert">
  <?= $_SESSION['message']; ?>
</div>


<?php
unset($_SESSION['message']);
endif;
?>

<script>

    const timeout = document.querySelector('#message')
    setTimeout(function () {
        timeout.style.display = 'none';
    }, 3000);
  
</script>
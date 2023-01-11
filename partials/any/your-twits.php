<div class="container mt-5 pt-3 align-baseline">
<?php
   if(isLogin()) {
   $user = getCurrentUser();
   ?>
   <h2>Hello <?php echo$user['name']; ?> </h2>
      <?php
      require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');

      require($_SERVER['DOCUMENT_ROOT'] . '/partials/all-twits.php');
      ?>

   <?php
   } else {
?> 
   <h2>Hello</h2>
   <?php
   }   
   ?>
</div>

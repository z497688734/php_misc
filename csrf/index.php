<!-- 
防止csrf攻击
-->
  
  <?php
          session_start();
          include("token.php");
  ?>
<form method="POST" action="doCheck.php">
        <input type="text" name="toBankId">
        <input type="text" name="money">
        <input type="text" name="ptoken" value="<?php echo $_SESSION['ptoken']?>">
        <input type="submit" name="submit" value="Submit">
</FORM>
<html>
<head><title></title></head>
<body>
  <?php
    if(isset($_GET['on'])){
      //do this
      file_put_contents('data.dat','1');
    } else {
      //do that
      file_put_contents('data.dat','0');
    }
  ?>
<form>
  <input type="submit" name="on" value="on">
  <input type="submit" name="off" value="off">
</form>
</body>
</html>

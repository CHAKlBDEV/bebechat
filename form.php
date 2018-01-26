<?php
/*///////////////////////////////////////////////////////////////////////////////////////
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/
session_start();
include_once ("includes/config.php");
$inp = strip_tags($_POST['msg']);
$sf=array(":)",":(",":lol:","*_*",":mrg:",":arr:",":ide:",":rey:",":gee:");
$rb=array('<img title=\":)\" src="images/hap.gif">','<img title=\":(\" src="images/sad.gif">','<img title=\":lol:\" src="images/lol.gif">','<img title=\"*_*\" src="images/sho.gif">','<img title=\":mrg:\" src="images/mrg.gif">','<img title=\":arr:\" src="images/arr.gif">','<img title=\":ide:\" src="images/ide.gif">','<img title=\":rey:\" src="images/rey.gif">','<img title=\":gee:\" src="images/gee.gif">');
$msg = str_replace($sf,$rb,$inp);
if ($msg == "") {
  print "<script type=\"text/javascript\">
  alert('Please input a message.');
  </script>";
}
else {
  include_once ("speedy.php");
  $user = $_SESSION['user_session'];
  $date = date("h:i:s");
  $sql = "INSERT INTO msg(date,name,msg)VALUES('$date','$user','$msg')";
  $result = mysql_query($sql);
  if ($result) {
    print "";
  }
  else {
    print "There's an error please fix this problem.";
  }
}

?>

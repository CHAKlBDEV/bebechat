<?php
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/

//Including files/////
include_once("includes/functions.php");
include_once("includes/config.php");
//////////////////////
$maxmsgs = imp_set(maxmsgs);
if(!$rows){
  print "";
}
$res=mysql_query("select MAX(id) from msg");
$id=mysql_result($res,0);
if($id >= $maxmsgs){
   mysql_query("DELETE FROM msg ORDER BY id ASC LIMIT 1");
}

?>
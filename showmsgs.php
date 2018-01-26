<?php
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/
include_once("includes/config.php");
include_once("includes/functions.php");
$namecolor=imp_set('namecolor');
$sql = mysql_query ("SELECT * FROM msg ORDER BY id ASC");
while( $rows = mysql_fetch_array($sql) ){
  $name = $rows['name'];
  $date = $rows['date'];
  $msgs = $rows['msg'];
  $id = $rows['id'];
print "<div id=\"cv\"><span style=\"color:$namecolor;font-family:'Trebuchet MS';font-size:13px;\">
$date $name :</span> $msgs <br></div>";
}

?>
<?php
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/
include_once('includes/config.php');
?>
<form method="post" action="">
Chat name:<input type="text" name="chatname" size="20"><br>
Max Messages:<input type="text" name="maxmsgs" size="20" value="25"><br>
Message text limit (Letters)<input type="text" name="maxlet" size="20" value="1000"><br>
Refresh Messages delay (ms):<input type="text" name="intval" size="20"  value="3000"><br>
<input type="submit" name="" value="OK">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$chatname=$_POST['chatname'];
$maxmsgs=$_POST['maxmsgs'];
$maxlet=$_POST['maxlet'];
$intval=$_POST['intval'];
if($chatname == "" OR $maxmsgs == "" OR $maxlet == "") die ("Please return and enter a value ...");
$table1="
CREATE TABLE  `msg` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `date` TEXT NOT NULL ,
 `name` VARCHAR( 10 ) NOT NULL ,
 `msg` VARCHAR($maxlet) NOT NULL
)";
$table2="CREATE TABLE `settings` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `namecolor` VARCHAR(100) NOT NULL,
 `maxmsgs` VARCHAR(100) NOT NULL,
 `namechat` VARCHAR(200) NOT NULL,
 `intval` VARCHAR(200) NOT NULL
)";
$table3="CREATE TABLE `user_online` (
`session` char(100) NOT NULL,
`time` int(11) NOT NULL default '0'
)";
$data1="INSERT INTO  `settings` (
`id` ,
`namecolor` ,
`maxmsgs`,
`namechat`,
`intval`
)
VALUES (
NULL ,  '#CC00FF', '$maxmsgs', '$chatname', '$intval')";
$result=mysql_query($table1);
$result3=mysql_query($table3);
$result1=mysql_query($table2);
$result2=mysql_query($data1);
if(!($result AND $result1 AND $result2 AND $result3)){
  print "<title>Error</title>Can't create tables please check the config.php file ..." . mysql_error();
}
}
mysql_close();
?>
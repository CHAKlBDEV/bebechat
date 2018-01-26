<?
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/
include_once("includes/config.php");
include_once("includes/functions.php");
$n=imp_set(namechat);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login to Chat</title>
<meta name="generator" content="BEBE-Chat 0.9.1 BETA">
<style type="text/css">
body
{
   background-color: #000000;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #C8D7EB;
   text-decoration: underline;
}
a:visited
{
   color: #C8D7EB;
}
a:active
{
   color: #C8D7EB;
}
a:hover
{
   color: #376BAD;
   text-decoration: underline;
}
</style>
<style type="text/css">
#container{
    background-color: #FFFFFF;
}

</style>
</head>
<body>
<div id="container" align="center">
<span style="font-size: 40px; color: #000000;">Welcome to <?= $n ?> <br> Choose a name:</span>
<form method="post" action="chat.php">
<input type="text" name="user" size="20">
</form>
</div>
</body>
</html>
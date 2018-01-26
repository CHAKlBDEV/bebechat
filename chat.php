<?php
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*/////////////////////////////////////////////////////////////////////////////////////*/
session_start();
include("includes/config.php");
include("includes/functions.php");
$intval = imp_set(intval);
$n=imp_set(namechat);
$user = $_POST['user'];
$count= strlen($user);
if($count >= 10){
    die ("Your name is too long redirecting to home .... " . "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">");
}
if($user == ""){
die("You haven't logged in. redirecting to home " . "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">");
}else{
$_SESSION['user_session'] = "$user";
  $user = $_SESSION['user_session'];
  $date = date("d/m/y h:i:s");
  $msg = "$user Joined chat on $date";
  $msg2 = "Welcome $user to $n";
  $sql = "INSERT INTO msg(name,msg)VALUES('Bot','$msg')";
  $sql2 ="INSERT INTO msg(name,msg)VALUES('Bot','$msg2')";
  $res = mysql_query($sql);
  $res2 = mysql_query($sql2);
  if ($res AND $res2) {
    print "";
  }else{
      print("There's an error Contacte admin.");
  }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title><? echo $user; ?> Chatting ...</title>
<meta name="generator" content="BEBE-Chat 0.9.1 BETA">
<meta http-equiv="Content-Type" content="text/html; utf8">
<script type="text/javascript">
    var form_name = "msg";
    var text_name = "msg";
function insert_text(insert){
    var input;
    insert = " "+ insert + " ";
    input = document.forms[form_name].elements[text_name];
	input.value = input.value + insert;
    input.focus();
}
function divToEnd(divId)
{
 var theDiv = document.getElementById(divId);

 if(theDiv)
  theDiv.scrollTop = theDiv.scrollHeight;
}

var auto_refresh = setInterval(
function()
{
divToEnd("messages");
}
, 500);

var auto_refresh = setInterval(
function()
{
divToEnd("messages");
$('#messages').load('showmsgs.php');
}, <?php print $intval; ?>);
var auto_refresh = setInterval(
function()
{
divToEnd("online");
$('#online').load('online.php');
}, 10000);
</script>
<script src="jquery.js"></script>
<style type="text/css">
body
{
   background-color: #000000;
   color: #000000;
}
#messages{
    vertical-align: top;
    position: relative;
    overflow-y: auto;
    overflow-x: hidden;
    min-height: 620px;
    max-height: 620px;
    width: 100%;
    background-color: transparent;
}
#cv{
    position: static;
    word-wrap:break-word;
    background-color : #DDDDDD;
    border: 1px;
    border-style: dotted;
    text-align: left;
    width: 100%;
    position: relative;
    font-family:'Trebuchet MS';
}
#container{
    background-color: #3399FF;
    display: block;
    border: 40px;
    border: solid;
    border-color: #000000;
    width: 450px;
    min-height: 665px;
    max-height: 665px;
    min-width: 450px;
}
#tools{
    min-height: 85px;
    max-height: 85px;
    max-width: 450px;
    min-width: 450px;
    vertical-align: top;
}
#input{
    position: relative;
    min-width: 100%;
    min-height: 100%;
}
#emo{
    position: relative;
    min-width: 200px;
    max-width: 200px;
    min-height: 80px;
    max-height: 80px;
    top: 0px;
    right: 0px;
    float: left;
}
#online{
 float: right;
}
#res{
    color: #FFFFFF;
}

</style>
</head>
<body>
<center>
<div id="container">
<div id="messages" onload="divToEnd('messages');">
<? include_once("showmsgs.php"); ?>
</div>
<div id="tools">
<div id="input" align="center">
<form name="msg" id="msg" method="post" action="form.php">
<input type="text" name="msg" size="65" autocomplet="off">
</form>
<div id="emo" align="left">
<a href="#" onclick="insert_text(':)');"><img src="images/hap.gif" width="15" height="17" alt=":)" title="Very Happy" /></a>
<a href="#" onclick="insert_text(':(');"><img src="images/sad.gif" width="15" height="17" alt=":)" title="Sad" /></a>
<a href="#" onclick="insert_text(':lol:');"><img src="images/lol.gif" width="15" height="17" alt=":)" title="Lol" /></a>
<a href="#" onclick="insert_text('*_*');"><img src="images/sho.gif" width="15" height="17" alt=":)" title="Shoked" /></a>
<a href="#" onclick="insert_text(':mrg:');"><img src="images/mrg.gif" width="15" height="17" alt=":)" title="Mr. Green" /></a>
<a href="#" onclick="insert_text(':arr:');"><img src="images/arr.gif" width="15" height="17" alt=":)" title="Array" /></a>
<a href="#" onclick="insert_text(':ide:');"><img src="images/ide.gif" width="15" height="17" alt=":)" title="Idea" /></a>
<a href="#" onclick="insert_text(':rey:');"><img src="images/rey.gif" width="15" height="17" alt=":)" title="Rolling eyes" /></a>
<a href="#" onclick="insert_text(':gee:');"><img src="images/gee.gif" width="15" height="17" alt=":)" title="Geek" /></a>
</div>
<div id="online" align="right">
<? include_once("online.php"); ?>
</div>
<script type="text/javascript">
$('#msg').submit(function() {
    $.ajax({
        data: $(this).serialize(),
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        success: function(response) {
        $('#res').html(response);
        document.getElementById("msg").reset();
        }
    });
    return false; // cancel original event to prevent form submitting
});
</script>
</div>
</div>
</div>
<div id="res"></div>
</center>
</body>
</html>
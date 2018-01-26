<?php
function imp_set($set){
    error_reporting(0);
    $sql=mysql_query("SELECT $set FROM settings WHERE id=1");
    if($sql){
        $res = mysql_result($sql,0);
        return $res;
    }else{
        $res="Setting $set Not Found";
        return $res;
    }
}
function auth_usr(){
    if (isset($_SESSION['user_session']) ){
    }else die("You haven't logged in. redirecting to home " . "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">");
}
?>
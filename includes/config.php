﻿<?php
/*/////////////////////////////////////////////////////////////////////////////////////*/
/*    -------  |      |   -----   |    /  -----  -----      ------    -------    |    |*/
/*   |         |      |  |     |  |   /     |    |     |    |      |  |          |    |*/
/*   |         |------|  |-----|  | -       |    |-----     |      |  |------    |    |*/
/*   |         |      |  |     |  |   \     |    |     |    |      |  |           \  / */
/*    -------  |      |  |     |  |    \  -----  -----      ------    -------      \/  */
/*---------------------------BEBE-Chat 0.9.1 BETA--------------------------------------*/
/*----------------------Feedback : chakibpablo@gmail.com-------------------------------*/
/*-----------------All rights reserved to ChakibDEV 2010-2011--------------------------*/
/*------------------------------Made in Algeria----------------------------------------*/
/*/////////////////////////////////////////////////////////////////////////////////////*/


$host="localhost";
$user="root";
$pass="";
$data="c";
$username="admin";
$password="admin";

//Parameters
//error_reporting(0);
/*///////////*/


/*////////////Connecting to database -- Don't edit if you don't know what are you doing //////////////////////*/
mysql_connect("$host", "$user", "$pass") or die ("Can't connect to the Database .... Check the config file.");
mysql_select_db("$data") or die ("Can't connect to the Database.");
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
?>
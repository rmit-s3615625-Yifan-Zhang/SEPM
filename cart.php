<?php session_start();
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 2018/4/15
 * Time: 9:28
 */

if(!$_SESSION['order'])
{
    $_SESSION['order']=Array();
}

$htmlcode="<title >Cart Page</title>";
include_once("top-part.php");

$htmlcode="<h2>CHECK YOUR SHOPPING CART</h2></div><hr><form>";
include_once("ticket-part.php");
include_once("submit-part.php");


//if(isset($_POST["movie"]))
//{
//    array_push($_SESSION['order'],$_POST);
//}
//if(!empty($_SESSION['order']))
//{
//    $movie=$value['movie'];
//    $week=$value['week'];
//    $time=$value['time'];
//    $quantity=$value['quantity'];
//
//
//}
//else
//{
//    echo 'your Shopping Cart is empty!';
//}
<?php
require_once("header.php");
$page="cataloge";
$smarty_order=new Smarty();
if(isset($_SESSION['basket'])&&count($_SESSION['basket'])>0)
{
    $total_sum = 0;
    $order=array();
    foreach ($_SESSION['basket'] as $item) {
        $query = "Select kolvo from watch WHERE id={$item['id']}";
        $rez = mysqli_query($dbc, $query) or die("query error");
        $next = mysqli_fetch_array($rez);
        $max = $next['kolvo'];
        $cost = $item['price'] * $item['amount'];
        $total_sum += $cost;
        $order[]=array("id"=>$item['id'],"name"=>$item['name'],"price"=>$item['price'],"amount"=>$item['amount'],"photo"=>$item['photo'],"cost"=>$cost,"max"=>$max);
    }
print_r($order);
$smarty_order->assign("order",$order);
$smarty_order->assign("num",1);
$smarty_order->assign("total_sum",$total_sum);
}
$content=$smarty_order->fetch("order.tpl");
require_once("main.php");
?>
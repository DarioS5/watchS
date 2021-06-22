<?php
session_start();
$page="catalog";
if(isset($_GET['id'],$_GET['mode'])&&!empty($_GET['id'])&&$_GET['mode']=='add')
{
    $exist = false;
    if (!isset($_SESSION['basket']))
    {
        $_SESSION['basket'] = array();
    }
    if (count($_SESSION['basket']) > 0)
    {
        for ($i = 0; $i < count($_SESSION['basket']); $i++)
        {
            if ($_SESSION['basket'][$i]['id'] == $_GET['id'])
            {
                $exist = true;
                $_SESSION['basket'][$i]['amount']++;
                break;
            }
        }
    }

    if (!$exist) {
        require_once("admin/param.php");
        $query = "Select id,name,price,photo from watch WHERE id={$_GET['id']}";
        $rez = mysqli_query($dbc, $query) or die("query error");
        $next = mysqli_fetch_array($rez);
        if (empty($next['photo']))
        {
            $next['photo'] = 'no_photo.png';
        }
        $_SESSION['basket'][]= array( "id"=>$next['id'],"name" => $next['name'], "price" => $next['price'],"photo" => $next['photo'],"amount"=>1);
    }
}
//print_r($_SESSION['basket']);
if(isset($_SESSION['basket'],$_GET['mode'])&&$_GET['mode']=='clear')
{
    unset($_SESSION['basket.php']);
    $_SESSION['basket']=array();
}
if(isset($_GET['id'],$_GET['mode'])&&!empty($_GET['id'])&&$_GET['mode']=='dell')
{
    if(isset($_SESSION['basket'])&&count($_SESSION['basket'])>0)
    {
        for($i=0;$i<count($_SESSION['basket']);$i++)
        {
            if($_SESSION['basket'][$i]['id']==$_GET['id'])
            {
                unset($_SESSION['basket'][$i]);
                break;
            }
        }
        $items=array();
        foreach($_SESSION['basket'] as $tmp)
        {
            if(!empty($tmp))
            {
                $items[] =$tmp;
            }
        }
        unset($_SESSION['basket']);
        $_SESSION['basket']=array();
        $_SESSION['basket']=$items;
        unset($items);
    }
}
if(isset($_GET['srcipt'])&&$_GET['srcipt']=='order'&&count($_SESSION['basket'])>0)
{
    header('location:order.php');
}
else {

    if (isset($_GET['page'])) {

        header("location:card.php?page={$_GET['page']}");
    } else {
        header("location:card.php");
    }
}
?>
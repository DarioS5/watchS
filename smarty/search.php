<?php
require_once("header.php");
$page="cataloge";
$smarty_search=new Smarty();
$query="Select id,name,price,photo from watch";
if(isset($_POST['search'])&&!empty($_POST['search']))
{
    $search1=$_POST['search'];
    $search=str_replace("","","$search1");
    $words=explode(" ","$search");
}
//print_r($words);
$words_rez=array();
if(count($words)>0) {
    foreach ($words as $tmp) {//перебор всіх ел.масиву працює тільки з масивами і обєктами
        if (!empty($tmp))
        {
            $words_rez[] = $tmp;
    }
    }
}
//print_r($words_rez);
$where_words=array();
    if (count($words_rez) > 0)
    {
        foreach ($words_rez as $tmp)
        {
            $where_words[] = "name like '%{$tmp}%'";
        }
    }
    //print_r($where_words);
$rez_where=implode("OR",$where_words);//ф-ція обєднує елементи масива в строку
    if(!empty($rez_where))
    {
        $query.=" where $rez_where";
    }

echo $query;
$rez=mysqli_query($dbc,$query) or die("query error");
$search=array();
while($next=mysqli_fetch_array($rez))
{
    $search[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}
$status=0;
if(count($search)>0) {
    $smarty_search->assign("search", $search);
    $status=1;
}
$smarty_search->assign("status",$status);
$smarty_search->assign("num",1);
$content=$smarty_search->fetch("search.tpl");
require_once("main.php");
?>
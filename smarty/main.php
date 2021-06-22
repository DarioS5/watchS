<?php
//define("SMARTY_LIB","libs/");// константа зберігає шлях до смарту бібліотеки
//require_once(SMARTY_LIB."Smarty.class.php");// підключаємо основний файл смарту бібліотеки
//$smarty_main=new Smarty();// створюємо обєкт смарті на основі класу для роботи з тпл файлом
//require_once("param.php");
//$smarty_main->assign("privet","Привет smarty");//метод асігн виконує підстановку даних з пхп файла в тпл в певне місце підстановки наприкл.в даному випадку {$privet}- назва місця підстановки це 1 параметр методу асігн 2.значення яке буде підставлятись
//$mark=4;
//$number=[1,2,3,4,5];
//$smarty_main->assign("number",$number);
//$smarty_main->assign("ball",$mark);
//$page="index";
if(isset($page)) {//вставляємо інфу про кожну сторінку
$query="Select meta_title,meta_description,meta_keybords,title,full_content from setting_page WHERE page='$page'";
$rez=mysqli_query($dbc,$query) or die("query error");
$next=mysqli_fetch_array($rez);
if(isset($meta_title)&&!empty($meta_title)) {
   $smarty_main->assign("meta_title",$meta_title);//якщо існує мета тайтл вище в коді то підсьавляємо його інакше підставлємо мета тайтл з табл сетінг
}
else {
    $smarty_main->assign("meta_title", $next['meta_title']);
}
if(isset($meta_description)&&!empty($meta_description))
{
    $smarty_main->assign("meta_description", $next['meta_description']);
}
else {
    $smarty_main->assign("meta_description", $next['meta_description']);
}
if(isset($meta_keybords)&&!empty($meta_keybords))
{
    $smarty_main->assign("meta_keybords", $next['meta_keybords']);
}
else {
    $smarty_main->assign("meta_keybords", $next['meta_keybords']);
}
    $smarty_main->assign("title", $next['title']);
if(isset($content))
{
    $smarty_main->assign("full_content",$content);
}
else {
    $smarty_main->assign("full_content", $next['full_content']);
}

/////////////////// меню///////////////
$queryM="Select page,name_page from setting_page ORDER BY priore ASC";
$rezM=mysqli_query($dbc,$queryM) or die("query error");
$menu=[];
while($nextM=mysqli_fetch_array($rezM))
{
    $menu[]=array("page"=>$nextM['page'],"name"=>$nextM['name_page']);//інформацію про меню заносимо в асоціативний масив де ключом буде місце підстановки тпл файлу

}
$smarty_main->assign("menu",$menu);

/////////////////// end меню///////////////
//////////////////categories////////
$queryCat="Select id,name from categories";
$rezCat=mysqli_query($dbc,$queryCat) or die("query error");
$cat=[];
while($nextCat=mysqli_fetch_array($rezCat))
{
    $cat[]=array("id"=>$nextCat['id'],"name"=>$nextCat['name']);
}
$smarty_main->assign("cat",$cat);
/// end cat//////////////////////
/// basket show//////////////////////////
    $sum=0;
if(isset($_SESSION['basket'])&&count($_SESSION['basket'])>0)
{
    for($i=0;$i<count($_SESSION['basket']);$i++)
    {
        $sum=$sum+$_SESSION['basket'][$i]['amount'];

    }
}
$smarty_main->assign("sum",$sum);
/// end basket(перераховуємо к-ть товарів )//////////////////////////


    $smarty_main->display("main.tpl");// ф-ція компілює пхп та тпл файл і результат передає браузеру на відображення
}
else
{
    header("location:index.php");
}

?>
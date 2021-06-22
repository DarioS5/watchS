<!DOCTYPE html>
<html lang="ru">
<head>
    <title>{$meta_title}</title>
    <meta name="description" content="{$meta_description}">{* мета тег дескріптіон використовується для просування сайту в інет коли пошукова машина наприкл гугл створить посилку на сайт з тега тайтл то опис сайту візьме з мета тайтл дескріптіон*}
    <meta name="keybords" content="{$meta_keybords}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-titillium-250.js"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="logo">
                <h1><a href="index.html">Watch <span></span> <small>Company Slogan Here</small></a></h1>
            </div>
            <div class="menu_nav">
                <ul>
                    {section loop=$menu name=i}{*секція повторює частину хтмл коду поки оператор луп (цикл) перебірає масив де нейм - щотчик елементів масиву *}
                    <li class="active"><a href="{$menu[i].page}.php"><span>{$menu[i].name}</span></a></li>
                    {/section}
                    {*<li><a href="support.html"><span>Support</span></a></li>*}
                    {*<li><a href="about.html"><span>About Us</span></a></li>*}
                    {*<li><a href="blog.html"><span>Blog</span></a></li>*}
                    {*<li><a href="contact.html"><span>Contact Us</span></a></li>*}
                </ul>
            </div>
            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider"><a href="#"><img src="images/casio2.jpg" width="900" height="308" alt="" /></a> <a href="#"><img src="images/photo2.jpg" width="935" height="307" alt="" /></a> <a href="#"><img src="images/філіп.jpg" width="935" height="307" alt="" /></a></div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <div class="article">
                    {*<h2>{$title}туст test<span></span></h2>*}
                    {*<h1>{$title}</h1>*}
                    <p>
                        <span style="font-size: 120%; font-weight: bolder">
                           {$title}
                        </span>
                    </p>

                    <p class="infopost">Posted on <span class="date">14 MAY  2021</span> by <a href="#">DASHA</a>
                    <div class="clr"></div>
                    <div class="img"><img src="images/rolex saph.jpg" width="177" height="213" alt="" class="fl" /></div>
                    <div class="post_content">
                        <!--
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
                        -->
                        {*{$privet}*}
                        {*<p>*}
                            {*{$ball}*}
                            {*{if $ball==5}*}
                                {*<strong>ДАша молодець</strong>*}
                                {*{elseif $ball==2}*}
                                {*<strong>Даша не молодець</strong>*}
                                {*{else}*}
                                {*<strong>норм</strong>*}
                        {*{/if}*}
                        {*</p>*}
                        {*{section loop=$number name=i}<!-- цикл смарті який в своєму тілі мож повторювати секцію хтмл коду зі значеннями масиву який присваюється опературу луп а параметр наме задає назву щотчику елементів масиву*}
                        {*{$number[i]}<br>*}
                    {*{/section}*}
                        <div>
                            {$full_content}

                        </div>
                        <p><strong> В сучасному світі існує велика кількість різноманітних наручних годинників. Асортимент настільки великий, що будь-хто може підібрати собі годинник за абсолютно будь-якого критерію, будь то бажаний бренд, цільове призначення, вид, колір, матеріал, ціна, форма і т.д.

                                Таке багатство вибору само по собі є наслідком величезного значення і впливу годинника на життя сучасної людини, адже в умовах зверхінтенсивного ритму життя дуже важливо вміти правильно використовувати час. А першим кроком до правильного використання часу є стеження за часом, а тут вже без годинника ну ніяк.

                                З важливістю годинника ми якось визначилися, тепер пропоную Вам віддати належне цьому чудо винаходу і дізнатися трохи цікавих фактів про годинники..</p>
                        {*<p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>*}
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="article">
                    <h2><span>We'll Make Sure Template</span> Works For You</h2>
                    <p class="infopost">Posted on <span class="date">15 MAY 2021</span> by <a href="#">Admin</a>
                    <div class="clr"></div>
                    <div class="img"><img src="images/photo.png" width="180" height="200" alt="" class="fl" /></div>
                    <div class="post_content">
                        <p>ФАКТИ про годинники</p>
                        <p>- Перший в світі годинник були винайдений 1000 років тому. На жаль, ім'я майстра залишилося невідомим. Точно відомо лише те, що цей годинник був не чоловічими, і точно не жіночими, а тим більше не наручними, і повідомляв час періодичними дзвонами. Звичайно, точність ходу цього годинника залишала бажати кращого, але, все ж, це було великим початком!

                        <p> - Першим серйозним кроком до початку масового виробництва годинників став винахід голландського фізика та астронома Хрістіана Гюйгенса, який в 1658 році винайшов маятник, що дозволило значно поліпшити точність ходу годинникового механізму. Говорять, начебто похибка механізму складала всього 3 хвилини на тиждень, але, чесно кажучи, ми сумніваємося в точності вимірювання, оскільки припускаємо, що виміри були зроблені такими ж годинниками.</p>

                        <p>- Другим серйозним кроком в еволюції годинникового механізму став винахід Вільяма Клемента, який в 1670 році винайшов анкерний пристрій. Цей пристрій забезпечувало однаковий цикл секундного «тіка» годинника, тим самим практично усунувши похибку в точності ходу годинника.</p>

                        <p> - В 18-19 столітті, чоловіки носили по двое кишенькових годинників з висунутими назовні ланцюжками, тим самим показуючи свою заможність (дані вироби в той час були дуже дорогими), хоча годинники деколи могли бути поламаними або показували неправильний час, а деякі чоловікі могли носити самі лише ланцюжки, що визирали. Ще вважається, що саме завдяки цьому часу ми навіть сьогодні іноді можемо почути, як сучасні люди говорять про одного годинника, як про пару: «я купив годинника, одну пару». Ось тільки чому так само говорять і про окуляри, і деякі інші аксесуари? Невже раніше носили по двоє окулярів?.</p>
                       {* <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>*}
                        {*<p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>*}
                    </div>
                    <div class="clr"></div>
                </div>
                {*<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>*}
            </div>
            <div class="sidebar">
                <div class="searchform">
                    <form id="formsearch" name="formsearch" method="post" action="search.php">
            <span>
            <input name="search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
                        <input name="button_search" src="images/search.gif" class="button_search" type="image" />
                    </form>
                </div>
                <div class="clr"></div>
                <div class="g1">
                    <div class="g2">
                        <div class="gadget">
                            <h2 class="star"><span>Cataloge</span> Товарів</h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                {section loop=$cat name=i}
                                <li><a href="listalka_sort_filtr.php?id_cat={$cat[i].id}">{$cat[i].name}</a></li>
                                {/section}
                                <li><a href="filtr_sort.php">Показати всі</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="g1"
                    <div class="g2">
                        <div class="gadget">
                            <h2 class="star"><span>Sponsors</span></h2>
                            <div class="clr"></div>
                            <ul class="ex_menu">
                                <li><a href="#">Lorem ipsum dolor</a><br />
                                    Donec libero. Suspendisse bibendum</li>
                                <li><a href="#">Dui pede condimentum</a><br />
                                    Phasellus suscipit, leo a pharetra</li>
                                <li><a href="#">Condimentum lorem</a><br />
                                    Tellus eleifend magna eget</li>
                                <li><a href="#">Fringilla velit magna</a><br />
                                    Curabitur vel urna in tristique</li>
                                <li><a href="#">Suspendisse bibendum</a><br />
                                    Cras id urna orbi tincidunt orci ac</li>
                                <li><a href="#">Donec mattis</a><br />
                                    purus nec placerat bibendum</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <div class="img"><a href="order.php"><img src="images/basket.jpg" width="100">{$sum}</a></div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Image</span> Gallery</h2>
                <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
            <div class="col c2"
                <h2><span>Services</span> Overview</h2>
                <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                <ul class="fbg_ul">
                    <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                    <li><a href="#">Excepteur officia deserunt.</a></li>
                    <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                </ul>
            </div>
            <div class="col c3"
                <h2><span>Contact</span> Us</h2>
                <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
                <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                    <span>Telephone:</span> +123-1234-5678<br />
                    <span>FAX:</span> +458-4578<br />
                    <span>Others:</span> +301 - 0125 - 01258<br />
                    <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">Copyright &copy; <a href="#">Dasha Name</a>. All Rights Reserved</p>
            <p class="rf">Get More <a target="_blank" href="http://www.free-css.com/">Free CSS Templates</a> By <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>
</body>
</html>

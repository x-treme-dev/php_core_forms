<body>
    <div class="container">
        <ul class="menu">
            <?php
                $arrMenu = ['Главная' => '#', 'Новости' => 'resource/news.php', 'Напишите нам' => 'resource/writetous.php', 'Логин' => 'resource/login.php'];
                foreach($arrMenu as $key => $value){
                    if($key == 'Главная') echo '<li class="menu__li">' . $key . '</li>';
                    else echo '<li class="menu__li"><a class="menu__a" href="' . $value . '">' . $key . '</a></li>';
                }
            ?>
        </ul>
    </div>
    
</body>
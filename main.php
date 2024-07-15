<body>
    <div class="container">
        <ul class="menu">
            <?php
                $arrMenu = ['Главная' => '', 'Новости' => 'news', 'Обратная связь' => 'writetous', 'Логин' => 'login'];
            
                foreach($arrMenu as $key => $value){
                    if($key == 'Главная') echo '<li class="menu__li">' . $key . '</li>';
                    else{
                        echo '<li class="menu__li"><a class="menu__a" href="index.php?page=' . $value . '">' . $key . '</a></li>';
                    } 
                }

                switch($_GET['page']){
                    case 'news': 
                        header('Location:/resource/news.php');
                        break;
                    case 'writetous':
                        header('Location:/resource/writetous.php');
                        break;
                    case 'login':
                        header('Location:/resource/login.php');
                        break; 
                    default:
                      if( ! $_GET['page'] != '/'){
                           header('Location:/error/404.php');
                           break;
                      }
                   
                }    
            ?>
        </ul>
    </div>
    
</body>
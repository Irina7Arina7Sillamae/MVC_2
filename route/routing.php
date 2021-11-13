<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num];

    if ($way == '' || $way == 'index.php') {
         $response = Controller::StartSite();
    }
   
    elseif ($way == 'books') {
        $response = Controller::BookList();
    }
    
    elseif ( $way = 'book') {
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        // по title получаем конкретную BookOne
        $response = Controller::BookOne($title);
    }
    else {
        $response = Controller::error404();
    }
?>

 
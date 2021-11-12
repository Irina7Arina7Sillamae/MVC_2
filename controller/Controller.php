<?php

class Controller{
//отрывается стартовая страница и выводит  main.php
    public static function StartSite(){
        include 'view/main.php';
    }
//подключается Model нужно сходить за данными (getBookList)
    public static function BookList() {
        $booksList = Model::getBookList();
        //и только потом отобразить это во view ( booksList передать его view )
        include 'view/bookList.php';
    }
//отрабатывая bookOne нужно сходить за данными
// смотрим модель по получаем по title книгу (проверяем если есть, то выдаем bookOne) во view
// и bookOne заполняем верстку
    public static function bookOne($title) {
        $test = Model::getBook($title);
        if ($test[0]==true) {
            $book = $test[1];
            include 'view/bookOne.php ';
        }
        else {
            include 'view/error404.php';
        }
    }
    //отрабатывается вариант с ошибкой (если адрес не существующий)
        public function error404(){
            include 'view/error404.php';
        }  
    }
?>

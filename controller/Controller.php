<?php

class Controller{
//Отрывается стартовая страница и выводит  main.php
    public static function StartSite(){
        include 'view/main.php';
    }
//Подключается Model нужно сходить за данными (getBookList)
    public static function BookList() {
        $booksList = Model::getBookList();
//и только потом отобразить это во view ( booksList передать его view )
        include 'view/bookList.php';
    }
//Отрабатывая bookOne нужно сходить за данными
// Смотрим модель, получаем по title книгу (проверяем если есть, то выдаем bookOne) во view
// bookOne заполняет верстку
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
    //Отрабатывается вариант с ошибкой (если адрес не существующий)
        public function error404(){
            include 'view/error404.php';
        }  
    }
?>

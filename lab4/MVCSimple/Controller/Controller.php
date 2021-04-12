<?php
include_once("./Model/Model.php");

class Controller{
    public $model;

    public function __construct() {
        $this->model= new Model();
    }

    public function invoke()
    {
        if (!isset($_GET['book']))
        {
        // no special book is requested, we'll show a list of all available books
            $books = $this->model->getBookList();
            include 'View/BookList.php';
        }
        else
        {
            $book = $this->model->getBook($_GET['book']);
            include 'View/ViewBook.php';
        }
    }



}
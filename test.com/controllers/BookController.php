<?php

namespace controllers;

use models\Book;


class BookController extends HomeController
{
    public function __construct()
    {

        parent::__construct();
    }

    public function getBooks()
    {
        $bookModel = $this->loadModel("Book", "book");
        $books = $bookModel->getList();
        return $this->generate('books', ["books" => $books]);
    }

    public function mainPage()
    {
        return $this->generate("index", ['content' => __METHOD__]);
    }
}
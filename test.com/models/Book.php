<?php

namespace models;

class Book extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function tableName()
    {
        return "books";
    }
}
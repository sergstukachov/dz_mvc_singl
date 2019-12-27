<?php

namespace configs;

class Config
{
    public static function getRoutes(){
        return [
            [
                "uri" => "/",
                "controller" => "\controllers\BookController",
                "action" => "mainPage",
                "method" => "GET",
            ],[
                "uri" => "/list/books/",
                "controller" => "\controllers\BookController",
                "action" => "getBooks",
                "method" => "GET",
            ],[
                "uri" => "/list/users/",
                "controller" => "BookController",
                "action" => "list",
                "method" => "GET",
            ],
        ];
    }
}
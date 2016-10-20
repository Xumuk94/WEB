<?php

class Content
{
    public static $pages = array(
        1=>"start.html",
        2=>"about.html",
        3=>"top_list.html",
    );

    public static function getPage($page_number){
        echo file_get_contents("./assest/".self::$pages[$page_number]);
    }

}
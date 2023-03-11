<?php

function load()
{
        $page = (array_key_exists('page', $_GET)) ? strip_tags($_GET['page']) : false ;

        $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

        if (!file_exists($page)) {
            throw new \Exception("Opa, alguma coisa errada aconteceu");
        }
    

    return $page;
}

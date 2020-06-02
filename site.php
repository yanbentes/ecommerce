<?php

use \Hcode\Model\Page;

$app->get("/", function() {
   
    $page = new Page();

    $page->setTpl("index");
});

?>
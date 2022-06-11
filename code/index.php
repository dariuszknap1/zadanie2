<?php
include_once('classes/Page.php');
include_once('classes/Db.php');
include_once('calc.php');
include_once('documentation.php');
session_start();
Page::display_header("Zadanie 2 - Dariusz Knap");
if(isset($_GET['page']) && $_GET['page'] == 'home'){
    echo "Witaj na stronie głównej";
}
if(isset($_GET['page']) && $_GET['page'] == 'calc'){
    display_calc();
}
if(isset($_GET['page']) && $_GET['page'] == 'doc'){
    display_doc();
}

Page::display_navigation();
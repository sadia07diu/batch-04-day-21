<?php


require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\OddEven;
use App\classes\Prime;


//print_r($_POST);
//exit();


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    else if ($_GET['pages'] == 'oddEven')
    {
        include 'pages/odd.php';
    }
    else if ($_GET['pages'] == 'prime')
    {
        include 'pages/prime.php';
    }
    else if ($_GET['pages'] == 'allProducts')
    {
        include 'pages/allProducts.php';
    }



}

elseif(isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';

}
elseif(isset($_POST['oddBtn']))
{
    $oddEven = new OddEven($_POST);
    $result = $oddEven->index();
    include 'pages/odd.php';

}
elseif(isset($_POST['primeBtn']))
{
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';

}
elseif(isset($_POST['primeBtn']))
{
    $category = new ($_POST);
    $result = $category->index();
    include 'pages/allProducts.php';

}

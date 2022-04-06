<?php

require_once __DIR__."/../Classes/Router.php";





/**
 * -----------------------------------------------
 * PHP Route Things
 * -----------------------------------------------
 */

//define your route. This is main page route. for example www.example.com
Route::add('/', function(){
    //define which page you want to display while user hit main page.
    include('pages/myindex.php');
});


// route for www.example.com/join
Route::add('/join', function(){
    include('join.php');
});

Route::add('/login', function(){
    include('pages/login.php');
});

Route::add('/forget', function(){
    include('forget.php');
});



Route::add('/logout', function(){
    include('logout.php');
});





//method for execution routes
Route::submit();
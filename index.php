<?php

use Steampixel\Route;

 require_once('config.php');
 require_once('User.class.php');


 Route::add('/' , function() {
    echo "strona główna";
 });

 Route::add('/login', function(){
    global $twig;
    $twig->display('login.html.twig');
 });

 Route::add('/login', function(){
    global $twig;
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    
    
        $user = new User($_REQUEST['login'], $_REQUEST['password']);
        if($user->login()) {
            
            $v = array(
                'message' => "Zalogowano poprawnie użytkownika: ".$user->getName(),
            );
            $twig->display('message.html.twig', $v);
        } else {
            
            $twig->display('message.html.twig', 
                                ['message' => "Błędny login lub hasło"]);
        }
    } else {
        
        die("błąd - nie otrzymano danych!");
    }
 }, 'post');

Route::run('/login');



 ?>
<?php
  // $url_requested = $_SERVER['REQUEST_URI'];
  // $url_len = strlen($url_requested);
  
  // $actual_path = substr($url_requested,strpos($url_requested,'/'),$url_len); 

  // print_r($actual_path);
  // if($actual_path == "/"){
  //   $page_title = "Test php project - Home";
  //   include_once('./src/home.php');
  // }    
  // else if(preg_match("!/users/[a-z,A-Z,0-9]!",$actual_path)){
  //   $actual_route = substr($actual_path,(strrpos($actual_path,'/')+1),$url_len);
  //   $actual_route = str_replace("%20"," ",$actual_route);  
  //   $data_arr = [
  //     'content_to_show' => $actual_route
  //   ];      
  //   $page_title = "Test php project - ".$actual_route;
  //   include_once('./src/user.php');
  // }
  // else if($actual_path == "/users"){        
  //   $page_title = "Test php project - Users";
  //   include_once('./src/users.php');
  // }
  // else if($actual_path == "/client"){
  //   $page_title = "Test php project - Client";
  //   include_once('./.php');
  // }    
  // else {
  //   $page_title = "Not found!";
  //   include_once('./src/404.php');
  // }

use App\Router;

include_once "./vendor/autoload.php";

// $test = new Test();

// echo $test->sayHelloWorld()."123";

$router = new Router;

$router->get('/', function() {
  $page_title = 'Home page';
  include_once('./src/home.php');
  // echo "Home page";
});

$router->get('/users', function() {
  echo 'Users page';
});

$router->addNotFoundHandler(function () {
  echo 'Page not found';
});

$router->run();
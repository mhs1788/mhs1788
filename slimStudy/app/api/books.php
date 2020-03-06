<?php

//display all records
$app->get('/api/books', function ($request, $response, $args) {
  //$response->getBody()->write("welcome to, books");
  require_once('dbconnect.php');
  $query = "select * from books order by id";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()){
    $data[] = $row;
  }
  
  if(isset($data)){
    header('Content-Type: application/json');
    echo json_encode($data);  
  }
});

//display a single row
$app->get('/api/books/{id}', function ($request) {

  require_once('dbconnect.php');
  $id = $request->getAttribute('id');
  //echo "The id is ".$id;
  $query = "select * from books where id=$id";
  $result = $mysqli->query($query);
  
  $data[] = $result->fetch_assoc();

  header('Content-Type: application/json');
  echo json_encode($data);  

});

// post data and create a new record
$app->post('/api/books', function($request){
  //$my_name = $_POST['my_name'];
  $my_name = $request->getParsedBody()['my_name'];

  echo "hello ".$my_name;
});

// put data and create a new record
$app->put('/api/books', function($request){
  //$my_name = $_POST['my_name'];
  $my_name = $request->getParsedBody()['my_name'];
  
  echo "hello this is a put request with ".$my_name;
});


?>
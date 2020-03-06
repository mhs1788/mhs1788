<?php
$app->get('/api/genres', function ($request, $response, $args) {
  $response->getBody()->write("welcome to, genres");
});

?>
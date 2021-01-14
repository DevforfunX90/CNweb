<?php
    // headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../model/post.php';

    //
    $database = new Database();
    $db = $database->connect();

    //Instanties blog post object
    $post = new Post($db);

    // get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    //set post id
    $post->id = $data->id;



    //created post
    if($post->delete()) {
        echo json_encode(
            array('message' => 'post delete')
        );
    }
    else{
        echo json_encode(
            array('message' => 'post no delete')
        );
    }

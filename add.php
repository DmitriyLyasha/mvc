<?php

require __DIR__ . '/models/photo.php';
require __DIR__ . '/functions/file.php';

if (!empty($_POST)) {
    
    $data = [];
    
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    
    if (!empty($_FILES)) {
        $res = File_upload('image');
        if (FALSE !== $res) {
            $data['image'] = $res;
        }
    }
    
    //var_dump($data);die;
    if (isset($data['title']) && isset($data['image'])) {
        Photo_insert($data);
        header('Location: /8_master');
        die;
    }
}

include __DIR__ . '/views/add.php';
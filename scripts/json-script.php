<?php

// Include Database
include __DIR__ . '/../partials/database.php';

if (empty($_GET) ) {
    header('Content-Type: application/json');
    echo json_encode($database);
} else {
    if ($_GET['artista'] != 'all') {
        $filterDatabase = [];
        foreach ($database as $data) {
            if (in_array($_GET['artista'], $data)) {
                array_push($filterDatabase, $data);   
            }    
        }
        header('Content-Type: application/json');
        echo json_encode($filterDatabase);
    } else {
        header('Content-Type: application/json');
        echo json_encode($database);
    }
}

?>
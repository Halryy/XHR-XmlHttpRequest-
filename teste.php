<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<pre>';
        var_dump(json_decode(file_get_contents('php://input'), false));
    }
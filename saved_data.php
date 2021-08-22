<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $responsedData = $_POST;
        $gender = array_key_exists('male', $_POST['gender']) ? 'muški' : 'ženski'; 

        $responsedData['gender'] = $gender;

        echo json_encode($responsedData);
    }


?>
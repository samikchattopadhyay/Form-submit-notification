<?php

if (sizeof($_POST)) {

    if ($_POST['email'] == 'layzend@gmail.com') {
        $type = 'error';
        $msg = 'This email ID has been blocked by administrator.';
    } else if ($_POST['fullname'] == 'Samik Chattopadhyay') {
        $type = 'info';
        $msg = 'The name is familiar to us';
    } else {
        $type = 'success';
        $msg = 'Thank you for submitting your details.';
    }

    echo json_encode(array(
        'message' => $msg,
        'type' => $type
    ));
}
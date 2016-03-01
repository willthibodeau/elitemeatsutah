<?php
require_once('../../util/main.php');
require_once('model/admin_db.php');



$action = filter_input(INPUT_POST, 'action');
if (admin_count() == 0) {
    if ($action != 'create') {
        $action = 'view_account';
    }
} elseif (isset($_SESSION['admin'])) {
    if ($action == null) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == null ) {
            $action = 'view_account';            
        }
    }
} elseif ($action == 'login') {
    $action = 'login';
} else {
    $action = 'view_login';
}


?>
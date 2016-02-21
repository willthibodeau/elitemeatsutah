<?php
$action = 'admin_login';



// if($action == 'admin_login'){
// 	include('admin_login.php');	
// } else ( $action == 'logout' ) {
// 	 session_unset();
// 	 session_destroy();
// print_r($_SESSION);
// 	 include('admin_login.php');
	
// }



if ($action == 'admin_login') {
    
    include('admin_login.php');
} else if ($action == 'logout') {
		session_unset();
 	 	session_destroy();
 		print_r($_SESSION);
 		echo "All session variables are now removed, and the session is destroyed.";

   include('manage_admins.php');
}

?>
<?php 

$action = (filter_input(INPUT_POST, 'action'));
if($action == NULL) {
	$action = (filter_input(INPUT_GET, 'action'));
	if($action == NULL) {
		$action = 'list_categories';
	}
}

switch($action) {
	case 'list_categories':
	$categories = get_categories();
	include('category_list.php');
	break;
}

?>
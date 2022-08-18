<?php
ob_start();
date_default_timezone_set("Asia/Manila");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}

if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'save_project'){
	$save = $crud->save_project();
	if($save)
		echo $save;
}
if($action == 'delete_project'){
	$save = $crud->delete_project();
	if($save)
		echo $save;
}
if($action == 'save_task'){
	$save = $crud->save_task();
	if($save)
		echo $save;
}
if($action == 'delete_task'){
	$save = $crud->delete_task();
	if($save)
		echo $save;
}
if($action == 'save_progress'){
	$save = $crud->save_progress();
	if($save)
		echo $save;
}
if($action == 'delete_progress'){
	$save = $crud->delete_progress();
	if($save)
		echo $save;
}
if($action == 'get_report'){
	$get = $crud->get_report();
	if($get)
		echo $get;
}
if($action == 'save_estimate'){
	$save = $crud->save_estimate();
	if($save)
		echo $save;
}
if($action == 'save_firstestimate'){
	$save = $crud->save_firstestimate();
	if($save)
		echo $save;
}
if($action == 'save_secondestimate'){
	$save = $crud->save_secondestimate();
	if($save)
		echo $save;
}
if($action == 'save_thirdestimate'){
	$save = $crud->save_thirdestimate();
	if($save)
		echo $save;
}
if($action == 'save_forthestimate'){
	$save = $crud->save_forthestimate();
	if($save)
		echo $save;
}
if($action == 'save_windowsestimate'){
	$save = $crud->save_windowsestimate();
	if($save)
		echo $save;
}
if($action == 'save_doorsestimate'){
	$save = $crud->save_doorsestimate();
	if($save)
		echo $save;
}
if($action == 'save_fittings_fixtures_estimate'){
	$save = $crud->save_fittings_fixtures_estimate();
	if($save)
		echo $save;
}
if($action == 'save_metal_works_estimate'){
	$save = $crud->save_metal_works_estimate();
	if($save)
		echo $save;
}
if($action == 'save_finishingsestimate'){
	$save = $crud->save_finishingsestimate();
	if($save)
		echo $save;
}
if($action == 'save_paintings_decorations_estimate'){
	$save = $crud->save_paintings_decorations_estimate();
	if($save)
		echo $save;
}
if($action == 'save_mechanical_services_estimate'){
	$save = $crud->save_mechanical_services_estimate();
	if($save)
		echo $save;
}
if($action == 'save_electrical_services_estimate'){
	$save = $crud->save_electrical_services_estimate();
	if($save)
		echo $save;
}
if($action == 'save_substructure'){
	$save = $crud->save_substructure();
	if($save)
		echo $save;
}

ob_end_flush();
?>

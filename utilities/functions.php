<?php 

//////////////////////////
// functions from internet
//////////////////////////
spl_autoload_register(function ($class_name) {
    include '../models/' . $class_name . '.php';
});


/////////////////////////
// clif created functions
/////////////////////////

// AUTHORISE ROLE
function authorise($role)
{	
	if (empty($_SESSION['username'])) {
		$_SESSION['error_message'] = "Please login";
		header("Location: user/login.php");
	} elseif ($_SESSION['type'] != $role) {
		$_SESSION['error_message'] = "You are not authorised to view this page.";
		header("Location: 'user/login.php'");
	}
}



////////////////////////////////////
///////////DISPLAY MESSAGE//////////
////////////////////////////////////


// ADD ERROR MESSAGE
function append_error($message)
{
	if (empty($_SESSION['error_message'])) {
		$_SESSION['error_message'] = array();
	}//end-if
	array_push($_SESSION['error_message'], $message);
}//endof appendError()


// ADD SUCCESS MESSAGE
function append_success($message)
{
	if (empty($_SESSION['success_message'])) {
		$_SESSION['success_message'] = array();
	}//end-if
	array_push($_SESSION['success_message'], $message);
}//endof appendError()


// SHOW MESSAGE
function show_message()
{
	if (!empty($_SESSION['error_message'])) {
		foreach ($_SESSION['error_message'] as $error_message) {
			echo '<p class="error">' . $error_message . '</p>';
		}
		unset($_SESSION['error_message']);
	}#endif
	if (!empty($_SESSION['success_message'])) {
		// echo $_SESSION['error_message'] . "</br></br>";
		foreach ($_SESSION['success_message'] as $success_message) {
			echo '<p class="success">' . $success_message . '</p>';
		}
		unset($_SESSION['success_message']);
	}//endif
}//end show_error()

///////////DISPLAY MESSAGE//////////



// get user from session
function get_user_type()
{
	if (!empty($_SESSION['user_type'])) {
		return $_SESSION['user_type'];
	} else {
		return "visitor";
	}
}//endof get_user_type()



// CONTROLLER WILL SELECT APPROPRIATE VIEWS
function view($view, $data=null)
{
	require_once("views/" . $view . ".php");
}


// SECURE POSTED VARIABLES
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}#endof test_input

// LOOP THROUGH EACH ELEMENTS IN POST ARRAY AND SECURE EACH
function validate($postArray)
{
	foreach ($postArray as $key => $value) {
		$postArray[$key] = test_input($value);
	}
	return $postArray;
}#endof validate()


?>
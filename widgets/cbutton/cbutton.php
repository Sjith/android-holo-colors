<?

  require_once('common-cbutton.php');
  
  $color = $_GET['color'];
  $size = $_GET['size'];
  $holo = $_GET['holo'];
  $component = $_GET['component'];
  
  if (isset($color) && isset($size) && isset($holo) && isset($component)) {
  	switch ($component) {
  		case "cbutton":
	  		$button = new CButton();
	  		break;
	  	case "cbutton-pressed":
	  		$button = new CButtonPress();
	  		break;
	  	case "cbutton-focus":
	  		$button = new CButtonFocus();
	  		break;
	  	case "cbutton-disabled-focus":
	  		$button = new CButtonDisabledFocus();
	  		break;
	  	default:
	  		$button = new CButton();
	  		break;
  	}	
  	$button->generate_image($color, $size, $holo);
  }
  

?>
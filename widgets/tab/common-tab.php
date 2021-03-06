<?

  if (!isset($context))
    $context = "../../";

  require_once($context.'common.php');
  
  $tab_classes = array('TabSelected', 'TabSelectedPress', 'TabSelectedFocus', 'TabUnselected', 'TabUnselectedPress', 'TabUnselectedFocus');

  /******************************************/
  /*             TAB SELECTED               */
  /******************************************/
  class TabSelected extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_selected_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_selected_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_selected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }
  
  /******************************************/
  /*         TAB SELECTED PRESS             */
  /******************************************/
  class TabSelectedPress extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_selected_pressed_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_selected_pressed_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_selected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }
  
  /******************************************/
  /*         TAB SELECTED FOCUS             */
  /******************************************/
  class TabSelectedFocus extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_selected_focused_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_selected_focused_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_selected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }
  
  /******************************************/
  /*           TAB UNSELECTED               */
  /******************************************/
  class TabUnselected extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_unselected_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_unselected_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_unselected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }
  
  /******************************************/
  /*       TAB UNSELECTED PRESS             */
  /******************************************/
  class TabUnselectedPress extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_unselected_pressed_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_unselected_pressed_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_unselected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }
  
  /******************************************/
  /*       TAB UNSELECTED FOCUS             */
  /******************************************/
  class TabUnselectedFocus extends Component {
  	
  	function __construct($ctx="") {
  		parent:: __construct("tab_unselected_focused_holo.9.png", $ctx);
  	}
  	
    function generate_image($color, $size, $holo) {			   
	  $image_name = "tab_unselected_focused_holo.9.png";
	
	  // load picture
	  $tab_img = $this->loadTransparentPNG($image_name, $size);
	  
	  // update colors
	  $rgb = $this->hex2RGB($color);
	  imagefilter($tab_img, IMG_FILTER_COLORIZE, $rgb['red'], $rgb['green'], $rgb['blue']);
	  	  
	  // add nine patch
	  $border_img =  $this->loadTransparentPNG("tab_unselected_nine_patch.png", $size);
	  
	  $result = $this->create_dest_image($image_name, $size);
	    
	  imagecopy($result[0], $tab_img, 0, 0, 0, 0, $result[1], $result[2]);
	  imagecopy($result[0], $border_img, 0, 0, 0, 0, $result[1], $result[2]);
	  
	  // output to browser
	  if (isset($_GET['action']) && $_GET['action'] == 'display') {
 			  $this->displayImage($result[0]);
		  } else {
		  	 $this->generateImageFile($result[0], $size, $holo);
		  }
    }
  }


?>
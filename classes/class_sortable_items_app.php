<?php

class Items_App {

	private static $instance;
	public static $db;    // I really don't like making this public - but I am not sure how else to get around this at present. 

	protected $ILO; 	// ItemList Object - contains the heirachy of items;
	
	public function __construct() {

		if (!self::$instance) {
			self::$instance = $this;

			$this->load_dependencies();
			
			Items_App::$db = new Database('localhost','drdscott_nsuser','v?@D,}lWwo0e','drdscott_sample');
                	            
			return self::$instance;
		
		}  else {
			return self::$instance;
		}	
	}
	

	private function load_dependencies() {

	
		require_once  'class_database.php';
		require_once  'class_item.php';
		require_once  'class_itemlist.php';
		

	}
	
	
	
	}
	
	
	?>
	
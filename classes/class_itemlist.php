<?php

Class itemlist {

	public $items; // Array of item objects comprising this level of heirachy;
	public $order_by; // How the list items are ordered; 
	

	public function __construct(  $order_by="NAME ASC", $parent=null ) {
	
		$this->order_by=$order_by;
		$this->items=$this->load_items( $parent );
	
	}
	
	protected function load_items ($parent=null) {
	
		$db=Items_App::$db;
		
		$parent_id =  (is_null($parent)) ? 0 : $parent->id;
		
		$sql="SELECT * FROM items WHERE parent_id=$parent_id ORDER BY $this->order_by";
	
		$r = $db->query($sql);
		if ($db->num_rows($r) > 0) {
  			while ($a = $db->fetch_array_assoc($r)) {
    				$items[] = new item($a,$parent,$this->order_by); 
  			}
  	
  		return $items;		
  	
  		}else return null;
	
	}
	
	public function list_html ( $max_depth=10) {
			$returnHTML="<ul>";
			for ($i=0 ; $i < count($this->items); $i++) {
				$returnHTML.=$this->items[$i]->li_html();
			}
			$returnHTML.="</ul>";
			
			return $returnHTML;
	
	
	}
	
}

?>
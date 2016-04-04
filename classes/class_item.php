<?php 

Class Item {

	public $id;			// These variables are stored and retrived from the database;
	public $parent_id;
	public $name;
	public $price;
	public $created_at;
	public $updated_at;
	
	public $parent;	         // this is the parent in the list hieracy object; 
	public $children;   // The children is a itemlist object containing the children; 

public function __construct( $a , $parent, $order_by ) {   // pass the constructor an array $a of the variables stored in the database and the parent object;
	
		if ($a==null) return null;
		extract ($a); 
		$this->id=$id;
		$this->parent_id=$parent_id;
		$this->parent=$parent;                      
		$this->depth= (is_null($parent)) ? 0 : $parent->depth+1;
		$this->name=$name;
		$this->price=$price;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;
		
		$this->children=new itemlist( $order_by, $this);
	
	}

	public function li_html ($max_depth=10) {
		$returnHTML="<li id='$this->id' class='depth-$this->depth'>";
		$returnHTML.=" $this->name :  $this->price ";
		$returnHTML.= ($max_depth=0) ? '' : $this->children->list_html($max_depth--);
		$returnHTML.="</li>";

	 return $returnHTML;
	}
}

?>
<?php 

/*
 * Sample Sortable List Task Created for Netsells as apart of the interview process
 *
 *
 */ 

// turn on error checking...
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once dirname(__FILE__) . '/includes/header.php';

require_once dirname(__FILE__) . '/classes/class_sortable_items_app.php';

$sla = new Items_App();  // initialise the "app" and load the classes
	

?>
<div class="container">
	<h2> Sort Items within the hierarchy </h2> 
	
	<div id="sortdiv"> 
	
	<div id="sort-help" class="alert alert-info">
  <strong>Help:</strong> Hover over the elements you would like to sort and then click to start sorting
</div>
	
	
	
<?php
				
		$default= new itemlist(); // Create top level of heirachy and all sublevels by  indirect recursion;
		
		echo $default->list_html();
		
		?>
		<div id="controls" class="hidden">
			<button id="save" class="btn"> Save Changes </button> 
			<button id="cancel" class="btn"> Cancel </button> 
		</div>
		
		<div id="save-warning" class="hidden alert alert-danger"> 
		In the next version your changes will be sent to the server using AJAX but this functionality has not yet been implemented. <br>
		</div>
		
		</div> <!-- End of sortdiv-->
		
</div> <!-- End of main container-->

<?php
require_once dirname(__FILE__) . '/includes/footer.php';

?>
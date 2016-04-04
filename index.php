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
	
	<p>Please read my email to learn about why I did things the way I did, the challenges I had producing this code, and what I plan to change in the next version. </p>
	
	
	<p>The Item List Object is a  hierachy of items - that are loaded from the database using indirect recursion.</p>
				
		<h2> The list can be sorted by Name in ascending order </h2>
				This is the default behaviour. 

<?php
				
		$default= new itemlist(); // Create top level of heirachy and all sublevels by  indirect recursion;
		
		echo $default->list_html();
		
		?>
		<h2> Or in Reverse Order </h2>
		
		<?php

		$reverse_order = new itemlist("NAME DESC");
		
		echo $reverse_order->list_html();
		
		?> 
		<h2> The list could be sorted by the price field instead </h2>
		<?php
		
		$by_price = new itemlist("PRICE ASC");
		
		echo $by_price->list_html();
		
		?>
		<h2> Next Steps </h2>
		<p>This first attempt doesn't do as much as I'd like and has some major draw backs that I'd like to correct with the next version. </p>
		<p>Please see my email for more information </p>
		
		

</div> <!-- End of main container-->

<?php
require_once dirname(__FILE__) . '/includes/footer.php';

?>
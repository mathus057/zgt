<?php

?>
<a href="master.php?page=Market">Home</a>
<a href="master.php?page=Market">Market</a>
<a href="master.php?page=About">About</a>
<a href="master.php?page=Contact">Contact</a>


<div>
<?php
	if(isset($_GET['page']))
	{
		$page_name = $_GET['page'];
		include ("page/".$page_name.".php");
	} 
?>
</div>

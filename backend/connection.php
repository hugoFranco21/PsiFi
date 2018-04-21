<?PHP
require '../configure.php';

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	
	print "Server found"."<BR>";
	
		$database = "a1654856";
		
		$db_found = mysqli_select_db($db_handle, $database);
		
		if($db_found){
			
			print "Database found";
			mysqli_close($db_handle);
			
		}
		
		else{
			
			print "Database not found";
			
		}
	
?>
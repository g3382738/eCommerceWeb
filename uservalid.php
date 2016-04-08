
<?PHP
	$q = $_GET['q'];
	if( $q )
	{
		$servername = 'localhost:3306';
		$username = 'dreamoverseas';
		$passwordu = '123456gt';
	// Create connection
		$conn = new mysqli($servername, $username, $passwordu);
	
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM `dreamoverseas` WHERE Username = '$q'";
		mysqli_select_db($conn, 'dreamoverseas');
		$retval = mysqli_query( $conn, $sql );
    	if ( mysqli_num_rows( $retval ) )
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}	
	
?>
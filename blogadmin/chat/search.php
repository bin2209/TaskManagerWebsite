<?php

$link = mysqli_connect("localhost", "root", "", "blog_admin_db");
include("../../blogadmin/lib.php");

$userdangonline = getLoggedMemberID();


// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){
	$count=0;
    // Prepare a select statement
	$sql = "SELECT * FROM login WHERE username LIKE ?";

	if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
		mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
		$param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
		if(mysqli_stmt_execute($stmt)){
			$result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
			if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
					if($row["username"]!=$userdangonline){
						echo "<p class='form-control ketquacon'>" . $row["username"] . "</p>";
						$count ++;
						if ($count==6) break;
					}
				}
			} else{
				echo "<span class='form-control ketquacon'>Không tìm thấy người dùng...</span>";
			}
		} else{
			echo "ERROR: lỗi $sql. " . mysqli_error($link);
		}
	}

    // Close statement
	mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link);

?>
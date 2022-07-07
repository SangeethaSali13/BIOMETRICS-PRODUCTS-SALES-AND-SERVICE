<?php

include("connection.php");

$query="SELECT * FROM tbl_item ";
    $result = mysqli_query($con, $query) or die("Error in Selecting " . mysqli_error($connection));

    
	 $data = array();

    while($row =mysqli_fetch_assoc($result))
    {
        $data['data'][] = $row['Field'];
    }
		
    // echo $row;
    	
	echo json_encode($data);

?>
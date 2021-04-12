<?php

 $conn = mysqli_connect('localhost','root','','test');


 $stateID = $_POST['stateID'];

 $sql = "SELECT * FROM loading_bar WHERE id=$stateID";
 $query = mysqli_query($conn,$sql);

 $output = array();
    
   
    while($row=mysqli_fetch_assoc($query))
    {
        $output[] = $row;
    }

    echo json_encode($output);
    

?>

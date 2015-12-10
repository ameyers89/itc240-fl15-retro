<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php include 'includes/credentials.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:record_list.php');
}


$sql = "select * from record_Collection where RecordID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Album = stripslashes($row['Album']);
        $Artist = stripslashes($row['Artist']);
        $Label = stripslashes($row['Label']);
        $ReleaseDate= stripslashes($row['ReleaseDate']);
        $title = "Title Page for " . $Album;
        $pageID = $Album;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This record does not exist</p>';
}

?>
<?php include 'includes/header.php';?>

<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Album: <b>' . $Album . '</b> ';
    echo 'Artist: <b>' . $Artist . '</b> ';
    echo 'Label: <b>' . $Label . '</b> ';
    echo 'Release Date: <b>' . $ReleaseDate . '</b> ';
    
    echo '<img src="uploads/record' . $id . '.JPG" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="record_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>
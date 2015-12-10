<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<?php
if(isset($_POST['submit']))
{//data submitted
    /* echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'ameyer12@seattlecentral.edu';
    $message = process_post();
    $replyTo = $_POST['email'];
    $subject = 'Test from contact form';
    
    safeEmail($to, $subject, $message, $replyTo='','html');

}else{//show form
    echo '
    <form method="post" action="' . THIS_PAGE . '">
    <b>Name</b><br />
    <input type="text" name="Name" required="required" /><br /> 
    <b>Email</b><br />
    <input type="email" name="Email" /><br /> 
    <b>Comments</b><br />
    <textarea name="Comments"></textarea><br />
    <input type="submit" value="Send" name="submit" /> 
    </form>
    ';
    
    }
?>

<?php include 'includes/footer.php';?>
	

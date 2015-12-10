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
    $subject = 'Customer Survey';
    
    safeEmail($to, $subject, $message, $replyTo='','html');

}else{//show form
    echo '
    <form method="post" action="' . THIS_PAGE . '">
    <b>How did you hear about us?</b><br />
    <input type="radio" name="location" value="TV" checked> TV<br /> 
    <input type="radio" name="location" value="Newspaper" checked> Newspaper<br />
    <input type="radio" name="location" value="Friend" checked> Friend<br />
    <b>How would you rate your experience?</b><br />
    <input type="checkbox" name="experience" value="Displeased">Displeased<br />
    <input type="checkbox" name="experience" value="Satisfied">Satisfied<br />
    <input type="checkbox" name="experience" value="Very Satisfied">Very Satisfied<br />
    <b>What did you order?</b><br />
    <input type="text" name="order" /><br /> 
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
	
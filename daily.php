 <?php include 'includes/config.php';?> 
 
 <?php 
 
 if(isset($_GET['day']))
 	{//show the selected day
	 	$myDay = $_GET['day'];
	
}else
	{//show today
		$myDay = date('l');
	}
	 
//die;

//$myDay = date('l');
$myPic = '';
$myDrink = '';
$altTag = '';
$backgroundColor = '';
$drinkDescription = '';

//delete or comment out following line, testing only!!

//$myDay = "Sunday";

switch($myDay){
    
    case 'Monday':
        $myPic = "pumpkin-spice-latte.jpg";
		$altTag = "Our Pumpkin Spice Latte tastes great on a Fall Day!";
		$myDrink = "Pumpkin Spice Latte";
		$backgroundColor = "#FF7518";
		$drinkDescription = "which makes us wish it was always Fall, as this is one of our top sellers!";
		break;
        
    case 'Tuesday':
        $myPic = "iced-coffee.jpg";
		$altTag = "Start your morning right with an Iced Coffee.";
		$myDrink = "Iced Coffee";
		$backgroundColor = "#904420";
		$drinkDescription = "a classic drink you can't go wrong with, any time of the year!";
        break;
        
    case 'Wednesday':
         $myPic = "hot-latte.jpg";
		 $altTag = "Our Hot Latte is a favorite!";
		 $myDrink = "Hot Latte";
		 $backgroundColor = "#DEC57A";
		 $drinkDescription = "which is always a customer favorite at Largebuck$!";
        break;
		
    case 'Thursday':
		$myPic = "iced-caramel-macchiato.jpg";
		$altTag = "Enjoy a delicous Iced Caramel Macchiato";
		$myDrink = "Iced Caramel Macchiato";
		$backgroundColor = "#7E8AA2";
		$drinkDescription = "a delicious drink that is sure to satisfy your sweet tooth!";
        break;
        
    case 'Friday':
		$myPic = "java-chip-frappuccino.jpg";
		$altTag = "Our Java Chip Frappuccino is like dessert!";
		$myDrink = "Java Chip Frappuccino";
		$backgroundColor = "#703030";
		$drinkDescription = "a tasty drink every chocolate lover will enjoy!";
        break;
        
    case 'Saturday':
		$myPic = "cinnamon-dolce-latte.jpg";
		$altTag = "Add extra flavor with a Cinnamon Dolce Latte.";
		$myDrink = "Cinnamon Dolce Latte";
		$backgroundColor = "#5E0000";
		$drinkDescription = "so spice up a delicous latte with extra cinnemon!";
        break;
        
    case 'Sunday':
		$myPic = "cocoa-cappuccino.jpg";
		$altTag = "A classic cappuccino with a chocolate twist.";
		$myDrink = "Cocoa Cappuccino";
		$backgroundColor = "#405E27";
		$drinkDescription = "a perfect drink for any time of the day!";
        break;
}

//die;

?>

<?php include 'includes/header.php';?>


<img src="images/<?=$myPic?>" alt="<?=$altTag?>" id="coffee" />

<p><strong class="feature"><?=$myDay?> Coffee Special:</strong> <?=$myDay?>'s daily coffee special is <strong class="feature"><?=$myDrink?></strong>, <?=$drinkDescription?></p>

<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>

<?php include 'includes/footer.php';?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
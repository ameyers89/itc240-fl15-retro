<?php 
//config.php

//this defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE; 
//this allows us to add unique info to our pages
switch(THIS_PAGE)
{
	 case "index.php":
        $title = "Home";
        $pageID = "Retro Diner Home Page";
		$headerPic = "milkshake-header.jpg";
        break;
		
	 case "about.php":
        $title = "About";
        $pageID = "About Us";
		$headerPic = "breakfast-header.jpg";
        break;
		
     case "template.php":
        $title = "Template Page";
        $pageID = "My Template Page ID";
		$headerPic = "waitress.png";
        break;
		
	 case "contact.php":
        $title = "Contact";
        $pageID = "Contact Us";
		$headerPic = "burger-header.jpg";
        break;
        
	 case "daily.php":
        $title = "Daily Special!";
        $pageID = "Daily Special";
		$headerPic = "fish-header.jpg";
        break;
        
    case "record_list.php":
        $title = "My record collection";
        $pageID = "Record Collection";
		$headerPic = "waitress.png";
        break;
        
    case "survey.php":
        $title = "Customer Survey";
        $pageID = "Customer Survey";
		$headerPic = "waitress.png";
        break;
        
    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";
		$headerPic = "waitress.png";
        
}//end switch 

//here are our navigaton pages:
$nav1['index.php'] = 'Home';
$nav1['about.php'] = 'About Us';
$nav1['daily.php'] = 'Daily';
$nav1['record_list.php'] = 'Records';
$nav1['contact.php'] = 'Contact Form';
$nav1['survey.php'] = 'Survey Form';

/*
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
*/


/*
foreach($nav1 as $link => $label)
{
    echo "link is $link and $label is label<br />";
}
*/

//echo $title;

//die;

/*
Allows us to send an email that respects the server domain spoofing polices of 
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo='','html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}

*/

function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
    
    if($replyTo !=''){
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    $headers = implode(PHP_EOL,$headers);

    
    return mail($to, $subject, $message, $headers);

}//end safeEmail()


function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}


/*
creates links inside the header.php file

<li><a href="LINK">LABEL</a></li>

<li class="active"><a href="LINK">LABEL</a></li>

*/


function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
        $myReturn = '';
        foreach($arr as $link => $label)
        {
			if(THIS_PAGE == $link)
			{//current file getsactive class 
				$myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
			}
			else{
				$myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
				}
			
            
        }
    
    return $myReturn;

}//end makeLinks()




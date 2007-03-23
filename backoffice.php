<?php
$delete = $_REQUEST["del"];
$activate = $_REQUEST["actv"];

$message = "";
$succcessMsg = true;
$membersUpdate = false;

//if we have requested to send the newsletter manually
if($_POST["submit"]=="Send"){
	$last = get_option("snews_last");
	$posts = ajaxNewsletter::getPostsSince("" ,$last);
	if($posts != "" && count($posts) > 0){
		$content = ajaxNewsletter::generateContent($posts);
		if(ajaxNewsletter::sendNewsletter($content)){
			$message = "Newsletter sent successfully.";
			ajaxNewsletter::printMessage($message);
		}else{
			$message = "An error occured while sending the newsletter. Please try again latter.";
			ajaxNewsletter::printMessage($message,false);
		}
	}else{
		$message = "There are no posts to add to the newsletter.";
		ajaxNewsletter::printMessage($message,false);
	}
}


//if the settings have been updated
if($_POST["submit"]=="Update"){
	//update settings
	$settings = array();

	$settings["period"] = $_POST["period"];
	
	//validate that the number of posts is a positive number
	if(is_numeric($_POST["count"]) && $_POST["count"] > 0){
		$settings["count"] = $_POST["count"];
	}
	$settings["from"] = $_POST["letterFrom"];
	$settings["subject"] = strip_tags($_POST["letterSubject"]);
	$settings["header"] = strip_tags($_POST["letterHeader"]);
	$settings["template"] = strip_tags($_POST["letterTemplate"]);
	$settings["footer"] = strip_tags($_POST["letterFooter"]);

	ajaxNewsletter::saveSettings($settings);
	$message = "Settings updated successfully.";
	ajaxNewsletter::printMessage($message);
}


//if we have requested a member to be removed
if(is_numeric($activate)){
	$membersUpdate = true;
	if(ajaxNewsletter::activateSubscriber($activate)){
		$message = "Subscription activated.";
		$succcessMsg = true;
	}else{
		$email = ajaxNewsletter::getSubscriptionEmail($activate);
		$state = ajaxNewsletter::getSubscriptionState($email);
		if($state != "active"){
			$message = "An error occured with the subscription activation. Please try again later.";
		}else{
			$message = "The subscriber is already active.";
		}
		$succcessMsg = false;
	}
}
//if the settings have been updated
if(is_numeric($delete)){
	$membersUpdate = true;
	ajaxNewsletter::removeSubscriber($delete);
	$message = "Subscription deleted successfully.";
	$succcessMsg = true;
}

//print the html with newsletter info and the conditional ability to send
ajaxNewsletter::printSendDiv();


//prints the HTML to configure the newsletter
ajaxNewsletter::settings();


if($membersUpdate){
	ajaxNewsletter::printMessage($message,$succcessMsg,"msgMembers");
}
//print the members list
ajaxNewsletter::manageMembers();

?>
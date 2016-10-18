<?php



include "inc/init.php";



$page->title = "Welcome to ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';
if($user->group->type == 1) {

   include 'main.php';

}else if($user->group->type == 2){
	include "displaydata.php";

}else if($user->group->type == 3){
	include "admindata.php";

}
if(!$user->islg()) {
	echo "
		<div class=\"container\">

		<div class=\"hero-unit\">
		<h1 align=\"center\">UNIVERSITY TEACHING HOSPITAL</h1>
		<br>
		<h2 align=\"center\">Non Conformance Database / Incident tracking system </h2>";
		
		echo "<br/>";
    	echo "<img src='uth.jpg' />";
	

}
echo "</div></div> <!-- /container -->";
if($user->group->type == 1) {

include 'footer.php';
}
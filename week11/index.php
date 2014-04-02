<?php
//require the file
require 'player.class.php';

//instantiate object of player class (NB: extends User class)
$player = new player("madonna");

//get name
$player_name = $player->get_name();
//set gender
$player_gender = $player->set_gender("female");
//get gender
$player_gender = $player->get_gender();
//set age
$player_age = $player->set_age("25");
//get age
$player_age = $player->get_age();
//set job title
$player_position = $player->set_position("on the field");
//get age
$player_position = $player->get_position();
//set job title
$player_strikes = $player->set_strikes("94");
//get age
$player_strikes = $player->get_strikes();


//output name
echo '<p>player = '.$player_name.'</p>';
//output gender
echo '<p>player gender = '.$player_gender.'</p>';
//output age
echo '<p>player age = '.$player_age.'</p>';
//output job title
echo '<p>player position = '.$player_position.'</p>';

echo '<p>player strikes = '.$player_strikes.'</p>';

echo '<p>'.$player_name.' is well known '.$player_position.' having gotten '.$player_age.' strikes since '.$player_strikes.'</p>';
?>
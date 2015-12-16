<?php
								$buttonNum = $_POST['num'];
								$bike_modal_descriptions_giant = array();
								$bike_modal_descriptions_giant[0] = '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640304"></iframe>';
								
								$bike_titles_giant = array();
								$bike_titles_giant[0] = 'Giant Anthem Advanced 27.5 0';
						      print '<div class="modal-content" id="modal-content">'
								. '<div class="modal-header">'
						          . '<button type="button" class="close" data-dismiss="modal">&times;</button>'
						          . '<h4 class="modal-title">' . $bike_titles_giant[$buttonNum] . '</h4>'
						        . '</div>'
						        . '<div class="modal-body">'
						          . '<p>' . $bike_modal_descriptions_giant[$buttonNum] . '</p>'
						        . '</div>'
						        . '<div class="modal-footer">'
						          . '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
						        . '</div>'
								. '</div>';
								
								
								
								/*var bike_modal_descriptions_giant = ["<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640304\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600305\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600306\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640304\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600302\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640302\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640305\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640303\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600336\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600337\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600333\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600335\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640311\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640312\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600330\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600331\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600332\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600327\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600328\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600329\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640309\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600325\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600326\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600323\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600324\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600321\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600322\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600402\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600403\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600404\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600405\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=640402\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600516\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600411\"></iframe>",
									 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=616403\"></iframe>"];
									 
									 var bike_titles_giant = ["Giant Anthem Advanced 27.5 0",
						 "Giant Anthem Advanced 27.5 1",
						 "Giant Anthem Advanced 27.5 2",
						 "Giant Anthem Advanced SX 27.5",
						 "Giant Anthem 27.5 2",
						 "Giant Anthem SX 27.5",
						 "Giant Anthem X Advanced 29er",
						 "Giant Anthem X 29er",
						 "Giant XTC Advanced SL 27.5 0",
						 "Giant XTC Advanced SL 27.5 1",
						 "Giant XTC Advanced 27.5 1",
						 "Giant XTC Advanced 27.5 3",
						 "Giant XTC Advanced 29er 1",
						 "Giant XTC Advanced 29er 2",
						 "Giant Trance Advanced 27.5 0",
						 "Giant Trance Advanced 27.5 1",
						 "Giant Trance Advanced 27.5 2",
						 "Giant Trance 27.5 1",
						 "Giant Trance 27.5 2",
						 "Giant Trance 27.5 3",
						 "Giant Trance SX 27.5",
						 "Giant Stance 27.5 1",
						 "Giant Stance 27.5 2",
						 "Giant Reign Advanced 27.5 0",
						 "Giant Reign Advanced 27.5 1",
						 "Giant Reign 27.5 1",
						 "Giant Reign 27.5 2",
						 "Giant Talon 27.5 1",
						 "Giant Talon 27.5 2",
						 "Giant Talon 27.5 3",
						 "Giant Talon 27.5 4",
						 "Giant Talon 29er",
						 "Giant ATX 27.5 2",
						 "Giant Revel 2",
						 "Giant Revel 29er"];*/

?>
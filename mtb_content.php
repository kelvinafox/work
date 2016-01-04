<?php
	$buttonNum = $_POST['num'];
	$buttonID = $_POST['id'];
	$num_items_giant = 35;
	$bike_modal_descriptions_giant = array('<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600304"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600305"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600306"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640304"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600302"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640302"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640305"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640303"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600336"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600337"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600333"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600335"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640311"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640312"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600330"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600331"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600332"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600327"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600328"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600329"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640309"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600325"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600326"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600323"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600324"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600321"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600322"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600402"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600403"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600404"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600405"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=640402"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600516"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600411"></iframe>',
		 '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=616403"></iframe>');
	
	
	$bike_titles_giant = array("Giant Anthem Advanced 27.5 0",
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
									"Giant Revel 29er");
	
	// Liv Brand
$num_items_liv = 14;

$bike_pics_liv = ["pictures/bikes/2016/mtb/Lust/Lust-Adv-0/Lust-Advanced-0-Carbon.jpg",
					 "pictures/bikes/2016/mtb/Lust/Lust-Adv-1/Lust-Advanced-1-Carbon.jpg",
					 "pictures/bikes/2016/mtb/Lust/Lust-Adv-2/Lust-Advanced-2-Blue.jpg",
					 "pictures/bikes/2016/mtb/Lust/Lust-1/Lust-1-Blue.jpg",
					 "pictures/bikes/2016/mtb/Lust/Lust-2/Lust-2-Black-Pink.jpg",
					 "pictures/bikes/2016/mtb/Obsess/Obsess-Adv-2/Obsess-Advanced-2-Comp.jpg",
					 "pictures/bikes/2016/mtb/Intrigue/Intrigue-1/Intrigue-1-Black.jpg",
					 "pictures/bikes/2016/mtb/Intrigue/Intrigue-SX/Intrigue-SX-Blue.jpg",
					 "pictures/bikes/2016/mtb/Tempt/Tempt-1/Tempt-1-Black.jpg",
					 "pictures/bikes/2016/mtb/Tempt/Tempt-2/Tempt-2-White.jpg",
					 "pictures/bikes/2016/mtb/Tempt/Tempt-3/Tempt-3-Dark-Green.jpg",
					 "pictures/bikes/2016/mtb/Tempt/Tempt-4/Tempt-4-Black.jpg",
					 "pictures/bikes/2016/mtb/Enchant/Enchant-1/Enchant-1-Black-Purple.jpg",
					 "pictures/bikes/2016/mtb/Enchant/Enchant-2/Enchant-2-White-Blue.jpg"];

$bike_titles_liv = ["Liv Lust Advanced 0",
					   "Liv Lust Advanced 1",
					   "Liv Lust Advanced 2",
					   "Liv Lust 1",
					   "Liv Lust 2",
					   "Liv Obsess Advanced 2",
					   "Liv Intrigue 1",
					   "Liv Intrigue SX",
					   "Liv Tempt 1",
					   "Liv Tempt 2",
					   "Liv Tempt 3",
					   "Liv Tempt 4",
					   "Liv Enchant 1",
					   "Liv Enchant 2"];

$bike_descriptions_liv = ["Uncompromising performance on the most challenging singletrack. Take your trail riding to the next level.<br><strong>$9000</strong>",
							 "Uncompromising performance on the most challenging singletrack. Take your trail riding to the next level.<br><strong>$9000</strong>",
							 "Uncompromising performance on the most challenging singletrack. Take your trail riding to the next level.<br><strong>$3100</strong>",
							 "The trifecta of less weight, more control, and increased efficiency equals a fun and confident XC bike.<br><strong>$2900</strong>",
							 "The trifecta of less weight, more control, and increased efficiency equals a fun and confident XC bike.<br><strong>$2500</strong>",
							 "Your obsession with XC racing starts here. Obsess is ready to tackle singletrack with precision and agility.<br><strong>$2700</strong>",
							 "Unleash your potential on technical trails. This women's-specific trail bike helps you take your skills to new heights.<br><strong>$3200</strong>",
							 "Rocks, roots, fearsome terrain. The smooth and stable Intrigue SX gives you the upper hand on technical trails.<br><strong>$4475</strong>",
							 "Make your first foray into the dirt or graduate to advanced singletrack. Tempt is designed to be with you all the way.<br><strong>$1400</strong>",
							 "Make your first foray into the dirt or graduate to advanced singletrack. Tempt is designed to be with you all the way.<br><strong>$1100</strong>",
							 "Make your first foray into the dirt or graduate to advanced singletrack. Tempt is designed to be with you all the way.<br><strong>$700</strong>",
							 "Make your first foray into the dirt or graduate to advanced singletrack. Tempt is designed to be with you all the way.<br><strong>$600</strong>",
							 "Become enchanted with cycling on roads, paths or dirt. The versatile and capable enchant.<br><strong>$430</strong>",
							 "Become enchanted with cycling on roads, paths or dirt. The versatile and capable enchant.<br><strong>$370</strong>"];

$bike_modal_titles_liv = ["Live Lust 1",
				   			 "Liv Lust 2",
				   			 "Liv Tempt 1",
							 "Liv Tempt  2",
							 "Liv Tempt 3",
							 "Liv Tempt 4",
							 "Liv Enchant 1",
							 "Liv Enchant 2"];

$bike_modal_descriptions_liv = ['<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600316"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600317"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600318"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600314"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600315"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600320"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600311"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600313"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600416"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600407"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600408"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600409"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600517"></iframe>',
								   '<iframe style="border:none" width="710" height="700" src="https://www.giantretailacademy.com/go/?c=US&axid=600518"></iframe>'];

  if ($buttonID === "btn-giant"){
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
	}
	
	if ($buttonID === "btn-liv"){
		print '<div class="modal-content" id="modal-content">'
						        . '<div class="modal-header">'
						          . '<button type="button" class="close" data-dismiss="modal">&times;</button>'
						          . '<h4 class="modal-title">' . $bike_titles_liv[$buttonNum] . '</h4>'
						        . '</div>'
						        . '<div class="modal-body">'
						          . '<p>' . $bike_modal_descriptions_liv[$buttonNum] . '</p>'
						        . '</div>'
						        . '<div class="modal-footer">'
						          . '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
						        . '</div>'
						      . '</div>';
	}
?>
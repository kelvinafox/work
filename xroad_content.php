<?php
	$buttonNum = $_POST['num'];
	$num_items_giant = 15;

	$bike_pics_giant = var("pictures/bikes/2016/xroad/TCX/TCX-Adv-Pro-1/TCX-Advanced-Pro-1-Comp-White.jpg",
						   "pictures/bikes/2016/xroad/TCX/TCX-Adv-Pro-2/TCX-Advanced-Pro-2-Comp-Silver.jpg",
						   "pictures/bikes/2016/xroad/TCX/TCX-SLR-2/TCX-SLR-2-Black-White.jpg",
						   "pictures/bikes/2016/xroad/Revolt/Revolt-1/Revolt-1-Dark-Blue-1.jpg",
						   "pictures/bikes/2016/xroad/Revolt/Revolt-3/Revolt-3-Gray.jpg",
						   "pictures/bikes/2016/xroad/Anyroad/Anyroad-Comax/AnyRoad-CoMax-Charcoal.jpg",
						   "pictures/bikes/2016/xroad/Anyroad/Anyroad-1/AnyRoad-1-Dark-Blue.jpg",
						   "pictures/bikes/2016/xroad/Anyroad/Anyroad-2/AnyRoad-2-Black.jpg",
						   "pictures/bikes/2016/xroad/Toughroad/Toughroad-SLR-1/ToughRoad-SLR-1-Black-Red.jpg",
						   "pictures/bikes/2016/xroad/Toughroad/Toughroad-SLR-2/ToughRoad-SLR-2-Black.jpg",
						   "pictures/bikes/2016/xroad/Roam/Roam-1-Disc/Roam-1-Disc-Black.jpg",
						   "pictures/bikes/2016/xroad/Roam/Roam-2-Disc/Roam-2-Disc-Slate-Gray.jpg",
						   "pictures/bikes/2016/xroad/Roam/Roam-3/Roam-3-Black.jpg",
						   "pictures/bikes/2016/xroad/Sedona/Sedona-DX/Sedona-DX-Charcoal.jpg",
						   "pictures/bikes/2016/xroad/Sedona/Sedona/Sedona-Black.jpg");

	$bike_titles_giant = var("Giant TCX Advanced Pro 1",
							 "Giant TCX Advanced Pro 2",
							 "Giant SLR 2",
							 "Giant Revolt 1",
							 "Giant Revolt 3",
							 "Giant AnyRoad CoMax",
							 "Giant AnyRoad 1",
							 "Giant AnyRoad 2",
							 "Giant ToughRoad 1",
							 "Giant ToughRoad 2",
							 "Giant Roam 1",
							 "Giant Roam 2",
							 "Giant Roam 3",
							 "Giant Sedona DX",
							 "Giant Sedona");

	$bike_descriptions_giant = var("World cup pedigree, cutting-edge innovation. For fierce CX battles in the dirt, mud or snow, this is your winning move.<br><strong>$4500</strong>",
								   "World cup pedigree, cutting-edge innovation. For fierce CX battles in the dirt, mud or snow, this is your winning move.<br><strong>$2700</strong>",
								   "Attack at the start, hammer out laps. From tight CX courses to wide-open gravel and dirt, this 'cross machine does it all.<br><strong>$1600</strong>",
								   "Pedal into the unknown, then keep on going. Ride farther on the road, gravel or dirt with the adventurous Revolt.<br><strong>$1300</strong>",
								   "Road, gravel or dirt - why limit your options? Revolt lets you extend the adventure and pedal into the unknown.<br><strong>$1050</strong>",
								   "A bike build for versatility can also be quick. This agine composite all-rounder does it all with speed and style.<br><strong>$1900</strong>",
								   "Sometimes you just want to ride. Smooth roads, rough roads, rain or shine. With the friendly, inviting AnyRoad, just hop on and go.<br><strong>$1300</strong>",
								   "Sometimes you just want to ride. Smooth roads, rough roads, rain or shine. With the friendly, inviting AnyRoad, just hop on and go.<br><strong>$1100</strong>",
								   "Fly through city streets, up a mountain, down a rugged dirt path. All on one ride, all on one quick and capable machine.<br><strong>$1300</strong>",
								   "Fly through city streets, up a mountain, down a rugged dirt path. All on one ride, all on one quick and capable machine.<br><strong>$870</strong>",
								   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$840</strong>",
								   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$670</strong>",
								   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$460</strong>",
								   "Turn everyday rides into mini adventures. Sedona is motivation to get outside and enjoy the cycling life.<br><strong>$440</strong>",
								   "Turn everyday rides into mini adventures. Sedona is motivation to get outside and enjoy the cycling life.<br><strong>$360</strong>");

	$bike_modal_descriptions_giant = var("<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600505\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600506\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600508\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600502\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600504\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600511\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600509\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600510\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600528\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600529\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600520\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600521\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600522\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=631502\"></iframe>",
										 "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=631501\"></iframe>");

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

	$num_items_liv = 8;

	$bike_pics_liv = var("pictures/bikes/2016/xroad/Brava/Brava-SLR/Brava-SLR.jpg",
					 	 "pictures/bikes/2016/xroad/Invite/Invite-Comax/Invite-CoMax-White.jpg",
					 	 "pictures/bikes/2016/xroad/Invite/Invite-2/Invite-2-Black.jpg",
					 	 "pictures/bikes/2016/xroad/Rove/Rove-2/Rove-2-Disc-DD-White.jpg",
					 	 "pictures/bikes/2016/xroad/Rove/Rove-Disc-Lite/Rove-Disc-Lite-Silver.jpg",
					 	 "pictures/bikes/2016/xroad/Rove/Rove-3/Rove-3-Black.jpg",
					 	 "pictures/bikes/2016/xroad/Sedona-W/Sedona-DX-W/Sedona-DX-W-Black.jpg",
					 	 "pictures/bikes/2016/xroad/Sedona-W/Sedona-W/Sedona-W-Light-Blue.jpg");

	$bike_titles_liv = var("Liv Brava SLR",
						   "Liv Invite CoMax",
						   "Liv Invite 2",
					  	   "Liv Rove 2",
					  	   "Liv Rove Disc Lite",
					  	   "Liv Rove 3",
						   "Liv Sedona DX W",
						   "Liv SedonaW");

	$bike_descriptions_liv = var("Brave new elements in cyclocross races or adventure rides. Paved roads, dirt, mud or snow - Brava was made for this.<br><strong>$1600</strong>",
								 "Tackle your next adventure with confidence. Invite CoMax gives you unlimited options on road, gravel and dirt.<br><strong>$1700</strong>",
							 	 "Feel confident, relaxed and in control on roads, gravel or dirt. Invite is up for any adventure.<br><strong>$1050</strong>",
								 "Begging for adventure., the versatile Rove has you covered on grave, dirt or wherever your voyage takes you.<br><strong>$670</strong>",
								 "Main street, side streets or dirt paths. Your choices are limitless with the versatile Rove Disc Lite.<br><strong>$610</strong>",
								 "Begging for adventure, the versatile Rove has you covered on gravel, dirt or wherever your voyage takes you.<br><strong>$460</strong>",
								 "A relaxed and confidence-inspiring women's-specific design makes this the perfect choice for any escapade.<br><strong>$440</strong>",
								 "A relaxed and confidence-inspiring women's-specific design makes this the perfect choice for any escapade.<br><strong>$360</strong>");

	$bike_modal_descriptions_liv = var("<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600501\"></iframe>",
							    	   "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600514\"></iframe>",
							           "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600513\"></iframe>",
							    	   "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600524\"></iframe>",
							           "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600527\"></iframe>",
							           "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600526\"></iframe>",
							    	   "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600503\"></iframe>",
					   		           "<iframe style=\"border:none\" width=\"710\" height=\"700\" src=\"https://www.giantretailacademy.com/go/?c=US&axid=600504\"></iframe>");
?>
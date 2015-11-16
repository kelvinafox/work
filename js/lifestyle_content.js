var num_items_giant = 21;

var bike_pics_giant = ["pictures/bikes/2016/lifestyle/Fastroad/Fastroad-Comax-1/FastRoad-CoMax-1.jpg",
					   "pictures/bikes/2016/lifestyle/Fastroad/Fastroad-Comax-2/FastRoad-CoMax-2-Comp-Blue.jpg",
					   "pictures/bikes/2016/lifestyle/Fastroad/Fastroad-SLR-1/FastRoad-SLR-1-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Escape/Escape-1/Escape-1-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Escape/Escape-2/Escape-2-Gray.jpg",
					   "pictures/bikes/2016/lifestyle/Escape/Escape-2-City/Escape-2-City-Gray.jpg", 
					   "pictures/bikes/2016/lifestyle/Escape/Escape-3/Escape-3-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Anyroad/Anyroad-Comax/AnyRoad-CoMax-Charcoal.jpg",
					   "pictures/bikes/2016/lifestyle/Anyroad/Anyroad-1/AnyRoad-1-Dark-Blue.jpg",
					   "pictures/bikes/2016/lifestyle/Anyroad/Anyroad-2/AnyRoad-2-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Toughroad/Toughroad-SLR-1/ToughRoad-SLR-1-Black-Red.jpg",
					   "pictures/bikes/2016/lifestyle/Toughroad/Toughroad-SLR-2/ToughRoad-SLR-2-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Roam/Roam-1-Disc/Roam-1-Disc-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Roam/Roam-2-Disc/Roam-2-Disc-Slate-Gray.jpg",
					   "pictures/bikes/2016/lifestyle/Roam/Roam-3/Roam-3-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Cypress/Cypress-DX/Cypress-DX-Dark-Gray.jpg",
					   "pictures/bikes/2016/lifestyle/Cypress/Cypress/Cypress-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Sedona/Sedona-DX/Sedona-DX-Charcoal-Green.jpg",
					   "pictures/bikes/2016/lifestyle/Sedona/Sedona/Sedona-Black.jpg",
					   "pictures/bikes/2016/lifestyle/Simple/Three/Simple-Three-Green.jpg",
					   "pictures/bikes/2016/lifestyle/Simple/Single/Simple-Single-Red-Black.jpg"];

var bike_titles_giant = ["Giant FastRoad Comax 1",
						 "Giant FastRoad Comax 2",
						 "Giant FastRoad SLR 1",
						 "Giant Escape 1",
						 "Giant Escape 2",
						 "Giant Escape 2 City",
						 "Giant Escape 3",
						 "Giant AnyRoad Comax",
						 "Giant AnyRoad 1",
						 "Giant AnyRoad 2",
						 "Giant ToughRoad 1",
						 "Giant ToughRoad 2",
						 "Giant Roam 1 Disc",
						 "Giant Roam 2 Disc",
						 "Giant Roam 3",
						 "Giant Cypress DX",
						 "Giant Cypress",
						 "Giant Sedona DX",
						 "Giant Sedona",
						 "Giant Simple Three",
						 "Giant Simple Single"];

var bike_descriptions_giant = ["Get up to speed with less effort and more fun. This sporty, smooth-riding flat-bar road bike is pure exhiliration.<br><strong>$1800</strong>",
							   "Get up to speed with less effort and more fun. This sporty, smooth-riding flat-bar road bike is pure exhiliration.<br><strong>$1500</strong>",
							   "So smooth, so efficient, it feels like flying. A sleek road bike meets flat-bar positioning. Super versatile, super fun.<br><strong>$1100</strong>",
							   "A fast, fun way to get around town. Ride it to work, to school, or just for the thrill of it.<br><strong>$670</strong>",
							   "A fast, fun way to get around town. Ride it to work, to school, or just for the thrill of it.<br><strong>$590</strong>",
							   "A fast, fun way to get around town. Ride it to work, to school, or just for the thrill of it.<br><strong>$460</strong>",
							   "A fast, fun way to get around town. Ride it to work, to school, or just for the thrill of it.<br><strong>$360</strong>",
							   "A bike built for versatility can also be quick. This agile composite all-rounder does it all with speed and style.<br><strong>$1900</strong>",
							   "Sometimes you just want to ride. Smooth roads, rough roads, rain or shine. With the friendly, inviting AnyRoad, just hop on and go.<br><strong>$1300</strong>",
							   "Sometimes you just want to ride. Smooth roads, rough roads, rain or shine. With the friendly, inviting AnyRoad, just hop on and go.<br><strong>$1100</strong>",
							   "Fly through city streets, up a mountain, down a rugged dirt path. All on one ride, all on one quick and capable machine.<br><strong>$1300</strong>",
							   "Fly through city streets, up a mountain, down a rugged dirt path. All on one ride, all on one quick and capable machine.<br><strong>$870</strong>",
							   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$840</strong>",
							   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$670</strong>",
							   "The confidence and capabilities of a mountain bike plus the smooth efficiency of a road bike. Ride everywhere with Roam.<br><strong>$460</strong>",
							   "Comfort, control and the joy of a bike ride. Cypress helps you get outside, get healthy and get where you want to go.<br><strong>$440</strong>",
							   "Comfort, control and the joy of a bike ride. Cypress helps you get outside, get healthy and get where you want to go.<br><strong>$340</strong>",
							   "Turn everyday rides into mini adventures. Sedona is motivation to get outside and ejoy the cycling life.<br><strong>$440</strong>",
							   "Turn everyday rides into mini adventures. Sedona is motivation to get outside and ejoy the cycling life.<br><strong>$360</strong>",
							   "Hop, on spin the pedals, and feel the stress melt away. Classic cruiser style meets modern comfort and design.<br><strong>$490</strong>",
							   "Hop, on spin the pedals, and feel the stress melt away. Classic cruiser style meets modern comfort and design.<br><strong>$330</strong>"];

var bike_modal_descriptions_giant = ["This is a test modal body",
						    		 "This is a test modal body",
						    		 "This is a test modal body",
						   			 "This is a test modal body",
						    		 "This is a test modal body",
						    		 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
						    		 "This is a test modal body",
						    		 "This is a test modal body",
						   			 "This is a test modal body",
						    		 "This is a test modal body",
						    		 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",
									 "This is a test modal body",];

var num_items_liv = 7;

var bike_pics_liv = ["pictures/bikes/2016/kids/Enchant-24/Enchant-1-24-Purple.jpg",
				 	 "pictures/bikes/2016/kids/Enchant-24-Lite/Enchant-24-Lite-White.jpg",
				 	 "pictures/bikes/2016/kids/Enchant-20/Enchant-20-Lite-Blue.jpg",
				 	 "pictures/bikes/2016/kids/Bella/Bella-Aqua.jpg",
				 	 "pictures/bikes/2016/kids/Adore/Adore-CB-16-White.jpg",
				 	 "pictures/bikes/2016/kids/Adore/Adore-CB-12-Pink.jpg",
				 	 "pictures/bikes/2016/kids/Blossom/Blossom-CB-Profile-purple-medium.jpg"];

var bike_titles_liv = ["Liv Enchant 24",
					   "Liv Enchant 24 Lite",
				  	   "Liv Enchant 20 Lite",
				  	   "Live Bella 20",
				  	   "Liv Adore 16",
					   "Liv Adore 12",
					   "Liv Blossom"];

var bike_descriptions_liv = ["What makes trail riding fun for kids? It starts with the right bike. Enchant ensures smooth sailing, even on bumpy trails.<br><strong>$340</strong>",
							 "Lightweight and easy to maneuver, Enchant Lite puts her on a path to adventure.<br><strong>$255</strong>",
						 	 "Lightweight and easy to maneuver, Enchant Lite puts her on a path to adventure.<br><strong>$235</strong>",
							 "Spark her sense of adventure. Bella is built to ignite a love for cycling and ourdoor activities.<br><strong>$210</strong>",
							 "Her first two-wheeler. One of life's greatest experiences. Stable, safe, and fun, The colorful Adore makes it easy.<br><strong>$190</strong>",
							 "Her first two-wheeler. One of life's greatest experiences. Stable, safe, and fun, The colorful Adore makes it easy.<br><strong>$180</strong>",
							 "Young ones grow up, and Blossom grows with them. Colors she'll love, and a lasting design that you'll love too.<br><strong>$240</strong>"];

var bike_modal_descriptions_liv = ["This is a test modal body",
						    	   "This is a test modal body",
						           "This is a test modal body",
						    	   "This is a test modal body",
						           "This is a test modal body",
						           "This is a test modal body",
						    	   "This is a test modal body",
				   		           "This is a test modal body"];
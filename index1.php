<?php

   session_start(); 

?>

<?php
  echo $_GET['name']; 
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rajasthan Tourism</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="wanderlust Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!-- carousel slider -->  
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
<!-- //carousel slider -->  
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font-awesome icons -->

<!-- own added video tag-->
<style>
	video {
		width: 100%;
		height: auto;
	}
	</style>
<!--own added tag ends-->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Supportive-JavaScript -->
<script src="js/modernizr.js"></script>
<!-- //Supportive-JavaScript -->
</head> 
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">travel</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h2><a class="navbar-brand" href="index.html"><i class="fa fa-angle-double-right w3-logo" aria-hidden="true"></i>Rajasthan Tourism<i class="fa fa-fighter-jet w3-logo" aria-hidden="true"></i></a></h2>
						<P>khamma ghanni, padharo mhare desh</P>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>                         
							<li><a class="page-scroll scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a class="page-scroll scroll" href="#gallery">Locations</a></li>
							<li><a class="page-scroll scroll" href="#hauntedplaces">Haunted Places</a></li>
							<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
							<li><a href="index.php">Sign out</a></li>
						</ul>
                    </div>
                    
                    <!--self experiment starts-->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>                         
							<font color="white">Padharo </font><li><a class="page-scroll scroll" href="#"><font size="5"><b><?php echo $_SESSION["name"]?></b></font></a></li> <font color="white">Sa</font>
						</ul>
					</div>
                    <!--self experiment ends-->
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info jarallax">
									<h3 class="agile-title">lets travel</h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info2 jarallax">
									<h3 class="agile-title">travel rajasthan</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info3 jarallax">
									<h3 class="agile-title">collect moments.</h3>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
<!-- about -->
<div class="w3layouts-about" id="about">
	<div class="container">
		<div class="w3-about-grids">
			<div class="col-md-6 w3-about-left">
				  <section class="slider">
					<div id="slider" class="flexslider">
					  <ul class="slides">
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/6.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
					  </ul>
					</div>
					<div id="carousel" class="flexslider">
					  <ul class="slides">
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/6.jpg" alt="" />
						</li>
						<li>
							<img src="images/7.jpg" alt="" />
						</li>
						<li>
							<img src="images/8.jpg" alt="" />
						</li>
						<li>
							<img src="images/9.jpg" alt="" />
						</li>
					  </ul>
					</div>
				  </section>
			</div>
			<div class="col-md-6 w3-about-left">
				<h1>Why wanderlust ?</h1>
				<h5>porta vehicula nisi Praesent molestie elit.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisl nunc, feugiat a nulla euismod, porta vehicula nisi. Praesent molestie, elit at mattis euismod, risus augue lacinia sem, vel elementum dui sem eu nisi. Morbi eu condimentum nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <span>Donec leo orci, tempus ac porta sit amet, pulvinar ac ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque in mauris vel lectus aliquet imperdiet at in metus. Sed tristique, ante quis varius rhoncus, turpis nisl suscipit neque, id sollicitudin tellus purus a augue. Integer urna ex, vehicula eget tincidunt et, scelerisque non massa. Nulla convallis sodales diam, non laoreet purus.</span></p>
				<div class="w3l-button">
					<a href="#" data-toggle="modal" data-target="#myModal">More</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">wanderlust</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/8.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
<!-- Locations -->
<div class="wthreelocationsaits" id="gallery">
		<div class="container">
			<h3 class="w3l-head text-center">Locations</h3>
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure class="col-md-4 effect-zoe"><img src="images/Jaipur.jpg" alt="wanderlust"><figcaption><h4>JAIPUR</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Jodhpur.jpg" alt="wanderlust"><figcaption><h4>JODHPUR</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Udaipur.jpg" alt="wanderlust" width="100px" height="250px"><figcaption><h4>UDAIPUR</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/MountAbu.jpg" alt="wanderlust"><figcaption><h4>MOUNT ABU</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Ajmer.jpg" alt="wanderlust"><figcaption><h4>AJMER</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Bikaner.jpg" alt="wanderlust" height="280px"><figcaption><h4>BIKANER</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Jaislamer.jpg" alt="wanderlust" height="280px"><figcaption><h4>JAISALMER</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Kota.jpg" alt="wanderlust" height="280px"><figcaption><h4>KOTA</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/SawaiMadhopur.jpg" alt="wanderlust" height="280px"><figcaption><h4>SAWAI MADHOPUR</h4></figcaption></figure>
					</div>
				</div>
				<div class="content">
					<div>
						<div class="dummy-img dummy-img-1"><video width="400" controls>
							<source src="videos/JaipurTourism.mp4" type="video/mp4">
							<source src="videos/JaipurTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">JAIPUR</p>
						<p class="dummy-text">Planned by Vidyadhar Bhattacharya, Jaipur holds the distinction of being the first planned city of India. Renowned globally for its coloured gems, the capital city of Rajasthan combines the allure of its ancient history with all the advantages of a metropolis. The bustling modern city is one of the three corners of the golden triangle that includes Delhi, Agra and Jaipur.
							
							The story goes that in 1876, the Prince of Wales visited India on a tour. Since the colour pink was symbolic of hospitality, Maharaja Ram Singh of Jaipur painted the entire city pink. The pink that colours the city makes for a marvellous spectacle to behold. Jaipur rises up majestically against the backdrop of the forts Nahargarh, Jaigarh and Garh Ganesh Temple.
							
							Jaipur traces back its origins to 1727 when it was established by Jai Singh II, the Raja of Amber. He shifted his capital from Amber to the new city because of the rapidly-growing population and an increasing water scarcity. Noted architect Vidyadhar Bhattacharya used the established principles of Vastu Shastra to build the city.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-2"><video width="400" controls>
							<source src="videos/JodhpurTourism.mp4" type="video/mp4">
							<source src="videos/JodhpurTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">JODHPUR</p>
						<p class="dummy-text">Jodhpur, the second largest city in Rajasthan is popularly known as the Blue City. The name is clearly befitting as most of the architecture – forts, palaces, temples, havelis and even houses are built in vivid shades of blue. The strapping forts that tower this magnificent city sum up to a spectacle you would not want to miss. The mammoth, imposing fortress of Mehrangarh has a landscape dominating a rocky ridge with the eight gates leading out of the fortress. The new city is located outside the structure. Jodhpur is also known for the rare breed of horses known as Marwari or Malani, which are only found here. 
							
							Jodhpur marks its origin back to the year of 1459 AD. The history of this prosperous city revolves around the Rathore clan. Rao Jodha, the chief of Rathore Clan is credited with the origin of Jodhpur in India. The city is known to be built in place of the ancient capital, Mandore of the state of Manwar. Hence, the people of Jodhpur and surrounding areas are commonly known as Marwaris. Also, it is believed that the relics of Mandore can still be witnessed in the Mandore Gardens.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-3"><video width="400" controls>
							<source src="videos/UdaipurTourism.mp4" type="video/mp4">
							<source src="videos/UdaipurTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">UDAIPUR</p>
						<p class="dummy-text">Often referred to as the 'Venice of the East', the city of lakes Udaipur is located around azure water lakes and is hemmed in by lush green hills of Aravallis. The famous Lake Palace, located in the middle of Lake Pichola is one of the most beautiful sights of Udaipur. It is also home to Jaisamand Lake, claimed to be the second largest man-made sweet water lake in Asia. The beautiful City Palace and Sajjangarh (Monsoon Palace) add to the architectural beauty and grandeur of the city. The city is also known for its profusion of zinc and marble. Solar observatory in Lake Fateh Sagar is the only observatory in India located on an island and has been made on the pattern of  Big Bear Lake in Southern California. The ten-day Shilpgram Festival which starts from 21 Dec to 30 Dec pulls in a large number of people interested in arts and crafts.
							
							Udaipur was founded in 1553 by Maharana Udai Singh II as the new capital of Mewar Kingdom. It is located in the fertile, circular Girwa Valley to the southwest of Nagda, which was the first capital of Mewar..</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-4"><video width="400" controls>
							<source src="videos/MountAbuTourism.mp4" type="video/mp4">
							<source src="videos/MountAbuTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">MOUNT ABU</p>
						<p class="dummy-text">Mount Abu is a popular hill station in the Aravalli Range in Sirohi district of Rajasthan state in western India, near the border with Gujarat. The mountain forms a distinct rocky plateau 22 km long by 9 km wide. The highest peak on the mountain is Guru Shikhar at 1,722 m (5,650 ft) above sea level. It is referred to as 'an oasis in the desert' as its heights are home to rivers, lakes, waterfalls and evergreen forests. The nearest train station is Abu Road railway station: 28 km away.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-5"><video width="400" controls>
							<source src="videos/AjmerTourism.mp4" type="video/mp4">
							<source src="videos/AjmerTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">AJMER</p>
						<p class="dummy-text">The city of Ajmer gets its name from ‘Ajay Meru’. Roughly translated, it means ‘invincible hills’. Nestled in the Aravallis south west of Jaipur, Ajmer was founded by Raja Ajaypal Chauhan in the 7th century AD. Till the late 12th century AD, Ajmer was the epicentre of the Chauhan dynasty. After Prithviraj Chauhan’s loss to Mohammed Ghori in 1193 AD, Ajmer became home to several dynasties. The Mughals in particular, fancied it as their favourite destination due to the presence of the holy Ajmer Sharif Dargah. 
							
							One of the early meetings between the Mughal King Jahangir and the Ambassador of the Court of Queen Elizabeth, Sir Thomas Roe, took place here in 1616. A few centuries later, the city was handed over to the British, making Ajmer the only region in Rajputana to be directly controlled by the East India Company. Ajmer is now regarded as an educational and cultural centre.
							
							Ajmer is home to the famous Dargah Sharif, which houses the Tomb of Garib Nawaz, also known as Moinuddin Chisti, the founder of the Chisti order of Sufism. Ajmer is also known for Mayo College, one of the country’s first schools that was a stepping stone for British style of education. It is also a sacred city for Hindus and Muslims alike and is renowned for being a centre of history and culture and beauty.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-6"><video width="400" controls>
							<source src="videos/BikanerTourism.mp4" type="video/mp4">
							<source src="videos/BikanerTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">BIKANER</p>
						<p class="dummy-text">Bikaner is home to one of the only two models of the biplane used by the British during World War I. They were presented by the British to Maharaja Ganga Singh, then ruler of the city. Another unique aspect about Bikaner are the sand dunes that are scattered throughout the district, especially from the north-east down to the southern area. Bikaner is situated in the northern region of Rajasthan. One of the earlier established cities, Bikaner still displays its ancient opulence through palaces and forts, built of red sandstone, that have withstood the passage of time. The city boasts of some of the world’s best riding camels and is aptly nicknamed ‘camel country’. It is also home to one of the world’s largest camel research and breeding farms; as well as being known for having its own unique temple dedicated to Karni Mata at Deshnok, called the Rats Temple.
							
							The origins of Bikaner can be traced back to 1488 when a Rathore prince, Rao Bikaji, founded the kingdom. Legend has it that Bikaji, one of Rao Jodhaji’s five sons, left his father’s Durbar in annoyance after an insensitive remark from his father, the illustrious founder of Jodhpur. Bikaji travelled far and when he came upon the wilderness called Jangladesh, he decided to set up his own kingdom and transformed it into an impressive city.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-7"><video width="400" controls>
							<source src="videos/JaislamerTourism.mp4" type="video/mp4">
							<source src="videos/JaislamerTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">JAISLAMER</p>
						<p class="dummy-text">If geology interests you, then Jaisalmer is where you need to journey. The Wood Fossil Park or Aakal is located about 15 kilometres away from the city. Here, one can discover and trace geologic tragedies that occurred in the Thar Desert 180 million years ago. The city of Jaisalmer also acts as the guard to western Rajasthan (and India’s) frontier. This 'Golden City’ is located close to the Pakistan border and in close proximity to the Thar Desert. The city’s most prominent landmark is the Jaisalmer Fort, also called Sonar Qila (Golden Fort). Unlike most other forts in India, Jaisalmer Fort is not just a tourist attraction. It houses shops, hotels and ancient havelis (homes) where generations continue to live.
							
							Jaisalmer traces its inception to the 12th century. History tells us of Rawal Jaisal, the eldest heir of the Rawal of Deoraj, was passed over for the throne of Lodurva and a younger half-brother was crowned king. Rawal Jaisal went looking for a new location to set up his capital when he came across sage Eesul. The sage told him about Krishna’s prophecy which said that a descendant of his Yaduvanshi clan would found a new kingdom at this same spot. It was in 1156 that Rawal Jaisal constructed a mud fort, named it Jaisalmer after himself and declared it his capital.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-8"><video width="400" controls>
							<source src="videos/KotaTourism.mp4" type="video/mp4">
							<source src="videos/KotaTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">KOTA</p>
						<p class="dummy-text">Kota is the third largest city in the state of Rajasthan and is one of the popular tourist destinations. Situated on the banks of the Chambal River, the city of Kota is famous for its distinctive style of paintings, palaces, museums, and places of worship. The city is known for gold jewellery, Doria sarees, silk sarees and the famous Kota stone. 
							
							The history of Kota dates back to the 12th century when Rao Deva conquered the territory and founded Hadoti. The independent Rajput state of Kota was carved out of Bundi in 1631. The kingdom of Kota had a turbulent history as it was raided by various Mughal rulers, Maharajas of Jaipur and even the Maratha warlords. The city of Kota is well known all over the world for its architectural splendour comprising beautiful palaces, temples and museums which exhibit the grandeur of the foregone era.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-9"><video width="400" controls>
							<source src="videos/SwaiMadhopurTourism.mp4" type="video/mp4">
							<source src="videos/SwaiMadhopurTourism.mp4" type="video/ogg">
						  </video></div>
						<p class="dummy-text aitsheadingw3">SWAI MADHOPUR</p>
						<p class="dummy-text">Cuddled up in the eastern zone of Rajasthan, Sawai Madhopur is one of the prominent conurbations of Rajasthan. Popularly known as the 'Gateway to Ranthambore', the town has seen many historic episodes and reigns. Sawai Madhopur has partly plain and partly undulating hilly terrain. The South and south east part of the district has hills and broken ground which form a part of a vast track of rugged region enclosing the narrow valley of the Chambal river. Surrounded by Vindhyas & Aravalis, this place is a treat for adventure enthusiasts as well as the ones with a fascination for history, with the Ranthambore National park- the most renowned national park in northern India and the Ranthambore Fort which was recently included in the list of UNESCO’s World Heritage sites, being the main attractions. 
							
							Passed on from the Chauhan Rajput king, Govinda to Vagabhatta, from RanaKumbha to Akbar and Aurangzeb, the city has been patronized by almost all the rulers. Beautification and renovation of the city has been regularly undertaken in almost all the regimes. Under the rule of Rao Hammir, the last Chauhan ruler the Ranthambore region prospered magnificently. In ancient India the region was more popularly known as Ranthambore. It was much later that it received the name, Sawai Madhopurfrom Maharaja SawaiMadhoSinghji I who is believed to have given the city its current plan in 1765 AD. During the British Rule Sawai Man Singh built a railway line between Jaipur and Sawai Madhopur. As a result it became accessible from a central spot in the state of Rajasthan. Today it has grown as one of the popular tourist destination in India. 
							Former state of Karauli, Ranthambore was amongst the strongest forts of medieval India and is linked to Prithviraj, the ruler of Shakambhari who has golden cupolas put on the Jain temple of Ranthambore. To check the increasing incurious of the Marathas, Madho Singh, the ruler of Jaipur State requested for the grant of the fort of Ranthambore but did not succeed.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>
			</section>
		</div>
	</div>
	<!-- //Locations -->	
	<!-- package-->	
	<div class="wthreelocationsaits" id="hauntedplaces">
		<div class="container">
			<h3 class="w3l-head text-center">Haunted Places</h3>
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure class="col-md-4 effect-zoe"><img src="images/rana-kimbha-palace.jpg" alt="wanderlust" height="280px"><figcaption><h4>Rana Kumbha Palace</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/dudu-highway.jpg" alt="wanderlust"><figcaption><h4>NH-79 Near Dudu Village</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/nahargarh-fort.jpg" alt="wanderlust" width="100px" height="280px"><figcaption><h4>Nahargarh Fort</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Brij-Raj-Bhavan-Palace.jpg" alt="wanderlust" height="280px"><figcaption><h4>Brij Raj Bhavan</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/kuldhara.jpg" alt="wanderlust" height="280px"><figcaption><h4>Kuldhara Village</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/Jagatpura.jpg" alt="wanderlust" height="280px"><figcaption><h4>Jagatpura</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/bhangarh.jpg" alt="wanderlust" height="280px"><figcaption><h4>Bhangarh Fort</h4></figcaption></figure>
					</div>
				</div>
				
			</section>
		</div>
	</div>
<!-- //package -->



<!-- team -->
	<div class="team jarallax">
		<div class="container">
			<h3 class="w3l-head text-center">Team</h3>
			<div class="w3_services_grids">
				<div class="col-md-3 col-sm-3 col-xs-6 w3ls_team_grid">
					<div class="w3ls_team_grid1 hover15">
						<figure>
							<img src="images/dee.jpg" alt=" " class="img-responsive"/>
						</figure>
						<div class="w3ls_team_grid1_pos">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
							</ul>
						</div>
					</div>
					<h4>Deepak Sharma</h4>
				</div>
				<div class="col-md-3 col-sm-3  col-xs-6  w3ls_team_grid">
					<div class="w3ls_team_grid1 hover15">
						<figure>
							<img src="images/b.jpg" alt=" " class="img-responsive" />
						</figure>
						<div class="w3ls_team_grid1_pos">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border facebook"></a></li>
							</ul>
						</div>
					</div>
					<h4>Hardik Dadhich</h4>
				</div>
				<div class="col-md-3 col-sm-3  col-xs-6  w3ls_team_grid">
					<div class="w3ls_team_grid1 hover15">
						<figure>
							<img src="images/c.jpg" alt=" " class="img-responsive" />
						</figure>
						<div class="w3ls_team_grid1_pos">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border instagram"></a></li>
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
							</ul>
						</div>
					</div>
					<h4>Avinash Jain</h4>
				</div>
				<div class="col-md-3 col-sm-3  col-xs-6  w3ls_team_grid">
					<div class="w3ls_team_grid1 hover15">
						<figure>
							<img src="images/d.jpg" alt=" " class="img-responsive" />
						</figure>
						<div class="w3ls_team_grid1_pos">
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border pinterest"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
							</ul>
						</div>
					</div>
					<h4>Vijay Gehlot</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!--contact -->
<div class="contact jarallax" id="contact">
		<div class="container">
			<h3 class="w3l-head text-center">contact us</h3>
			<div class="agileits_w3layouts-contact">
				<div class="col-md-6 col-sm-12 agileinfo-contact-left">
					<div class="w3ls-address">
						<span class="fa fa-map-marker icon" aria-hidden="true"></span>
						<h6>Address:</h6><p>Old City, Kishangarh</p>
					</div>
					<div class="w3ls-address mail">
						<span class="fa fa-envelope icon" aria-hidden="true"></span>
						<h6>Mail:</h6><a href="mailto:info@example.com">er.deepakcs026@gmail.com</a>
					</div>
					<div class="w3ls-address">
						<span class="fa fa-phone icon" aria-hidden="true"></span>
						<h6>Phone:</h6><p>+91 90244 67543</p>
					</div>
					<form action="#" method="post">
						<input type="text" class="name" name="name" placeholder="Name" required="">
						<input type="email" class="mail" name="name" placeholder="Email" required="">
						<textarea placeholder="Your Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>	
				</div>
				<div class="col-md-6 col-sm-12  agileits_w3layouts-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.9901811270179!2d74.87541116986976!3d26.56677026573835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396bf0d8e1f2268d%3A0xd80284069316ef89!2sKishangarh%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1510941421716" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>		
<!-- //contact -->
<script src="js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: true, //Set AutoPlay to 3 seconds
			  items :3,
			  itemsDesktop : [640,2],
			  itemsDesktopSmall : [414,1],
			  navigation : true,
			  // THIS IS THE NEW PART
				afterAction: function(el){
					//remove class active
					this
					.$owlItems
					.removeClass('active')
					//add class active
					this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
					}
			// END NEW PART
		 
			});
			
		}); 
	</script>
	
<!-- footer -->	
<div class="w3_agileits-footer">
	<div class="container">
		<div class="col-md-9 col-sm-12 wthree-footer-left">
			<div class="navbar-header page-scroll">
				<h2><a class="navbar-brand" href="index.html"><i class="fa fa-angle-double-right w3-logo" aria-hidden="true"></i>Rajasthan Tourism<i class="fa fa-fighter-jet w3-logo" aria-hidden="true"></i></a></h2>
				<P>khamma ghanni, padharo mhare desh</P>
			</div> 
			<h5>have a plan? call us<span>+91 90244 67543</span></h5>
			<div class="list-footer">
				  <ul class="footer-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li><a class="page-scroll  scroll" href="#home">Home</a></li>
					<li><a class="page-scroll  scroll" href="#about">About</a></li>
					<li><a class="page-scroll scroll" href="#gallery">Locations</a></li>
					<li><a class="page-scroll scroll" href="#hauntedplaces">Haunted Places</a></li>
					<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 wthree-footer-right">
			<div class="agile-social-icons">
				<ul>
					<li><a href="facebook.com/deesharma671" class="fa fa-facebook" aria-hidden="true"></a></li>
					<li><a href="https://twitter.com/deepakk90244" class="fa fa-twitter" aria-hidden="true"></a></li>
				</ul>
			</div> 
			<div class="w3-mail">
			<ul>
				<li><span class="fa fa-envelope icon" aria-hidden="true"></span><a href="mailto:info@example.com">er.deepakcs026@gmail.com</a></li>
				<li><span class="fa fa-phone" aria-hidden="true"></span><p>+91 90244 67543</p></li>
			</ul>	
			</div>
		</div>
		<div class="clearfix"></div>
	</div>	
</div>	
<!-- copyright -->
<div class="copyright">
		<p>© Deepak Sharma</p>
</div>
<!-- //copyright -->
<!--//footer -->				
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 102,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!-- //FlexSlider -->
<!-- Tour-Locations-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/helper.js"></script>
			<script src="js/grid3d.js"></script>
			<script>
				new grid3D( document.getElementById( 'grid3d' ) );
			</script>
<!-- //Tour-Locations-JavaScript -->
<script src="js/jarallax.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script><!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>

<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
</body>	
</html>


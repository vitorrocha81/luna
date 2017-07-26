<head>
<meta lang="pt-BR">
    <meta charset="utf-8" />

<script src="https://use.fontawesome.com/915c622e2b.js"></script>

    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    
    <title>Luna Odontologia</title>
    
    <!-- Included CSS Files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="stylesheets/normalize.css">
    <link rel="stylesheet" href="stylesheets/supersized.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheets/supersized.shutter.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/style_common.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/style5.css" />
    <link rel="stylesheet" href="stylesheets/stylehov.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="stylesheets/thirdeffect.css" type="text/css" media="screen"/>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:200italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arapey' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheets/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
    
    <style type="text/css">
        body,td,th {
            color: #FFF;
        }
        body {
            background-color: #000;
        }
    </style>
        
    <script type="text/javascript">
        $(document).ready(function(){
            // validate signup form on keyup and submit
            var validator = $("#contactform").validate({
                rules: {
                    contactname: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    subject: {
                        required: true,
                        minlength: 2
                    },
                    message: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    contactname: {
                        required: "Please enter your name",
                        minlength: jQuery.format("Your name needs to be at least {0} characters")
                    },
                    email: {
                        required: "Please enter a valid email address",
                        minlength: "Please enter a valid email address"
                    },
                    subject: {
                        required: "You need to enter a subject!",
                        minlength: jQuery.format("Enter at least {0} characters")
                    },
                    message: {
                        required: "You need to enter a message!",
                        minlength: jQuery.format("Enter at least {0} characters")
                    }
                },
                // set this class to error-labels to indicate valid fields
                success: function(label) {
                    label.addClass("checked");
                }
            });
        });
    </script>
    
    <!-- Supersized Settings -->
    <script type="text/javascript">
        jQuery(function($){
            $.supersized({
                // Functionality
                slideshow               :   1,          // Slideshow on/off
                autoplay                :   1,          // Slideshow starts playing automatically
                start_slide             :   0,          // Start slide (0 is random)
                stop_loop               :   0,          // Pauses slideshow on last slide
                random                  :   0,          // Randomize slide order (Ignores start slide)
                slide_interval          :   5000,       // Length between transitions
                transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed        :   500,        // Speed of transition
                new_window              :   1,          // Image links open in new window/tab
                pause_hover             :   0,          // Pause slideshow on hover
                keyboard_nav            :   1,          // Keyboard navigation on/off
                performance             :   3,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                image_protect           :   1,          // Disables image dragging and right click with Javascript
                
                // Size & Position                         
                min_width               :   0,          // Min width allowed (in pixels)
                min_height              :   0,          // Min height allowed (in pixels)
                vertical_center         :   1,          // Vertically center background
                horizontal_center       :   1,          // Horizontally center background
                fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
                fit_portrait            :   1,          // Portrait images will not exceed browser height
                fit_landscape           :   0,          // Landscape images will not exceed browser width
                
                // Components                           
                slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                thumb_links             :   1,          // Individual thumb links for each slide
                thumbnail_navigation    :   1,          // Thumbnail navigation
                slides                  :   [           // Slideshow Images
                                                {image : 'images/background-slideshow/1.jpg', title : '<div id="slidecountertop"><p>Test 1 title</p></div><div id="slidecounter"><h1>Periotontia</h1></div><span class="curvedl"> vel</span><div id="slidecountertop"><p>Integer turpis</p></div>Add wonderful serenity has taken possession<br>of myentire soul, like these sweet sweet mornings.<div id="morebut">Find out more</div>'},
                                                {image : 'images/background-slideshow/2.jpg', title : '<div id="slidecountertop"><p>Integer turpis</p></div><div id="slidecounter"><h1>tratamento 1</h1></div><span class="curvedl"> vel</span><div id="slidecountertop"><p>Integer turpis</p></div>Add wonderful serenity has taken possession<br>of myentire soul, like these sweet sweet mornings.<div id="morebut">Find out more</div>'},
                                                {image : 'images/background-slideshow/2.jpg', title : '<div id="slidecountertop"><p>Test 3 title</p></div><div id="slidecounter"><h1>tratamento 3</h1></div><span class="curvedl"> vel</span><div id="slidecountertop"><p>Integer turpis</p></div>Add wonderful serenity has taken possession<br>of myentire soul, like these sweet sweet mornings.<div id="morebut">Find out more</div>'},
                                                {image : 'images/background-slideshow/2.jpg', title : '<div id="slidecountertop"><p>Test title 4</p></div><div id="slidecounter"><h1>design junkie</h1></div><span class="curvedl"> vel</span><div id="slidecountertop"><p>Integer turpis</p></div>Travamento para ....<br>com profissionais..., like these sweet sweet mornings.<div id="morebut">Find out more</div>'},
                                                {image : 'images/background-slideshow/3.jpg', title : '<div id="slidecountertop"><p>Título 1 title 5</p></div><div id="slidecounter"><h1>tratamento 2</h1></div><span class="curvedl"> vel</span><div id="slidecountertop"><p>Integer turpis</p></div>Add wonderful serenity has taken possession<br>of myentire soul, like these sweet sweet mornings.<div id="morebut">Find out more</div>'}
                                            ],
                                                
                    // Theme Options               
                    progress_bar            :   0,          // Timer for each slide                         
                    mouse_scrub             :   0
            });
        });
    </script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("a[data-gal^='prettyPhoto']").prettyPhoto();
        });
    </script>
    
    <script>
        function gotoAbout(id, t){  
            //animate to the div id.
            $(".contentbox-wrapper-about").animate({"left": -($(id).position().left)}, 600);
            // remove "active" class from all links inside #nav
            $('#nav a').removeClass('active');
            // add active class to the current link
            $(t).addClass('active');    
        }
        
        function gotoTeam(id, t){   
            //animate to the div id.
            $(".contentbox-wrapper-team").animate({"left": -($(id).position().left)}, 600);
            // remove "active" class from all links inside #nav
            $('#nav a').removeClass('active');
            // add active class to the current link
            $(t).addClass('active');    
        }
        
        function gotoNews(id, t){   
            //animate to the div id.
            $(".contentbox-wrapper-news").animate({"left": -($(id).position().left)}, 600);
            // remove "active" class from all links inside #nav
            $('#nav a').removeClass('active');
            // add active class to the current link
            $(t).addClass('active');    
        }
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            //.parallax(xPosition, speedFactor, outerHeight) options:
            //xPosition - Horizontal position of the element
            //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
            //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
            $('.section3').parallax("50%", 0.5);
            $('.section5').parallax("50%", 0.5);
            $('.section7').parallax("50%", 0.5);
            $('.section9').parallax("50%", 0.5);
            $('.section10').parallax("50%", 0.5);
        })
    </script>
    
   
</head>

 <header>
    	<div class="nav nav-bar" style="padding-left: 70px;
color: #9B3C1F;
font-size: 14px;
background-color: #ece9ec;
padding-top: 20px;
height: 40px;"> <i class="fa fa-phone" aria-hidden="true"></i> (11) 2293-0416 | <i class="fa fa-whatsapp" aria-hidden="true"></i> (11) 94828-0291 | <i class="fa fa-envelope" aria-hidden="true"></i> contato@lunaodontologia.com.br </div>
        <!-- Your Logo Goes Here -->
    	<div class="logo">
        	<a href="#homepage"><img src="images/logo.png" alt="Luna Odontologia" width="100%" height="100%"></a>
        </div>
        
        <!-- Your menu items are placed here -->
        <div class="main-menu hide-for-small">
        	<nav>
                <ul>
                    <li><a href="#homepage" class="selected first">Home</a></li>
                    <li><a href="#about-us">Sobre Nós</a></li>
                    <li><a href="#team">Profissionais</a></li>
                     <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tratamentos</a>
                    								<ul class="dropdown-menu">
                    									<li><a href="cirurgia_oral_menor.php">Cirurgia oral menor</a></li>
                    										 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Toxina Botulínica</a>
                    																		<ul class="dropdown-menu">
                    																			<li><a href="#"> Harmonização orofacial</a></li>
                    																			<li><a href="#"> Uso terapêutico</a></li>
                    																		</ul>
                    																	</li>
                    									</li>
                    									<li><a href="#">Clareamento dental</a></li>
                    									<li><a href="#">Lentes de contato dental</a></li>
                    									<li><a href="#">Ortodontia</a></li>
                    									<li><a href="#">Ortopedia funcional dos maxilares</a></li>
                    									<li><a href="#">Endodontia (tratamento de canal)</a></li>
                    									<li><a href="#">Periodontia (tratamento da gengiva)</a></li>
                    									<li><a href="#">Prótese Dental</a></li>
                    									<li><a href="#">Implante Dental</a></li>
                    									<li><a href="#">Reabilitação oral</a></li>
															<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Odontologia Estética</a>
																<ul class="dropdown-menu">
																	<li><a href="#"> Restaurações diretas</a></li>
																	<li><a href="#"> Restaurações indiretas</a></li>
																	<li><a href="#"> Facetas</a></li>
																</ul>
															</li>
                    									</li>

                    								</ul>
                    							</li>
                    <li><a href="#gallery">A Clinica</a></li>
                    <li><a href="#news" class="text text-upper">Serviços</a></li>
                     <li><a href="#contact11">Parceiros</a></li>
                    <li><a href="#contact11">Contato</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Enter the links for your social media profiles -->
        <div class="social-media-header hide-for-small hide-for-1220">
        	<a href="#" class="facebook">Facebook</a>
        	<a href="#" class="twitter">Twitter</a>
        	<a href="#" class="vimeo">Vimeo</a>
        	<a href="#" class="youtube">Youtube</a>
        </div>
        
        <select class="responsive-nav show-for-small">
        	<option value="" selected="">Main Navigation</option>
        	<option value="#homepage">Home</option>
        	<option value="#about-us">Sobre Nós</option>
        	<option value="#team">Team</option>
        	<option value="#tratamentos">Tratramentos</option>
        	<option value="#gallery">Gallery</option>
        	<option value="#news">News</option>
        	<option value="#contact11">Contact</option>
        	<option value="#">Facebook</option>
        	<option value="#">Twitter</option>
        	<option value="#">Vimeo</option>
        	<option value="#">Youtube</option>
		</select>
        
    </header>
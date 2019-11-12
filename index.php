<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 	 <br/>
 	 <br/>

  	<centre>
  	<h1>
    	<?php

	//print out to the screen
	    $first_name = "johar";
	    $last_name = "sabuwala";
	    var_dump($first_name == "johar")

	
		?>
	</center>
	</h1>

	<?php echo 'and then she said : "are you crazy"' ?>

	<br/>
<br/>

	<?php 

	$Num_1 = 1;
	$Num_2 = 20000;

	if ($Num_1 >= 10) {
		echo $Num_1 . "is greater than 10";}
	elseif($Num_2 > 30) {
		echo $Num_2 . "is greater than 30";
	}
		else {
			echo $Num_1 . "is less than or equal to 30";
		}	
		?>
		<br/>

<br/>
	<?php
		$LastName = array("Sabuwala", "Gilani", "Pirani");
		$FirstName = array ("Johar", "Jia" , "Aayan", $LastName);
		echo($FirstName) [3][0]
?>
		

		<br/>

<br/>

<br/>
</center>
<?php
	$fav_pissa = array(
	'Johar' => 'Barbeque', 
	'Aayan'=> 'double cheese',
	'Jia' => 'bbq chicken' 
	);
	echo $fav_pissa['Aayan'];
?>

<center>
<br/>

<br/>

<?php

	$names = array ("Jia", "Johar", "Aayan");

	echo $names [count($names)-1];
	?>

	<?php
	// loop -- while
	$counter = 0;
	while ($counter <= 10) {
		echo "the count is : $counter <br/>"; 
		$counter++;
	}
	?>
	<?php
	// for loop
	for ($count = 0; $count <= 20; $count++) { 
		echo "the count is $count <br/>";
	}

	?>

	<?


<!DOCTYPE html>
<html lang="en">

<!--  Header start -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>VCCEdge - India’s most comprehensive research platform for Private Markets</title/>

    <meta name="description" content="VCCEdge Database. VCCEdge is India's premier research platform providing comprehensive private and public company financial data, private equity, venture capital, M&A, ECM and debt transactions data, key developments of companies, and advanced search tools and features for the Indian investment ecosystem.">
    
    <meta name="author" content="VCCEdge">

    <meta property="og:title" content="VCCEdge - India’s most comprehensive research platform for Private Markets" />

    <meta property="og:description" content="VCCEdge Database. VCCEdge is India's premier research platform providing comprehensive private and public company financial data, private equity, venture capital, M&A, ECM and debt transactions data, key developments of companies, and advanced search tools and features for the Indian investment ecosystem." />

    <meta property="og:url" content="https://www.vccedge.com/" />
    <meta property="og:site_name" content="VCCEdge" />
    <meta property="og:image" content="https://vccedge.com/assets/img/logo-dark.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:locale" content="en_US" />

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>VCCEDGE</title>

    <!--common style-->
    <link href="//fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200" rel="stylesheet" type="text/css">

    <!-- inject:css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/vendor/elasic-slider/elastic.css">
    <link rel="stylesheet" href="assets/vendor/iconmoon/linea-icon.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/shortcodes.css">
    <link rel="stylesheet" href="assets/css/default-theme.css">
    <!-- endinject -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/backward/html5shiv.js"></script>
    <script src="assets/vendor/backward/respond.min.js"></script>
    <![endif]-->

    <!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyCX3oYqqvAhZ27X7FmEU7bL7bpYuZiD9R4&callback=initMap""></script> -->

    <!-- inject:js -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-validator/validator.min.js"></script>
    <script src="assets/vendor/breakpoint/breakpoint.js"></script>
    <script src="assets/vendor/count-to/jquery.countTo.js"></script>
    <script src="assets/vendor/countdown/jquery.countdown.js"></script>
    <script src="assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/elasic-slider/jquery.eislideshow.js"></script>
    <script src="assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <!-- <script src="assets/vendor/gmap/jquery.gmap.min.js"></script> -->
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/mailchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendor/menuzord/menuzord.js"></script>
    <script src="assets/vendor/nav/jquery.nav.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/parallax-js/parallax.min.js"></script>
    <script src="assets/vendor/smooth/smooth.js"></script>
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="assets/vendor/touchspin/touchspin.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/visible/visible.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- endinject -->

    <!-- GA Code Start-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40948275-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- GA Code End-->

    <!-- Page Sense Code Start -->
    <script type="text/javascript">(function(w,s){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src="https://cdn.pagesense.io/js/newscorpvccircle/adbd831887624ea3817dfe5118b3c805.js";var x=document.getElementsByTagName("script")[0];x.parentNode.insertBefore(e,x);})(window,"script");</script>
    <!-- Page Sense Code End -->

</head><!-- Header end -->
<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper" id="home">

        <!--header start-->
        <header class="l-header">

            <div class="l-navbar l-navbar_t-dark l-navbar_expand js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="/" class="logo-brand">
                            <img class="retina" src="assets/img/logo-dark.png" alt="VCCEdge">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right op-nav c-nav_s-standard">
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li class="">
                                <a href="#whoweare">About us</a>
                            </li>
                            <li class="">
                                <a href="#whatwepossess">Data</a>
                            </li>
                            <li class="">
                                <a href="#whatweoffer">Offering</a>
                            </li>
                            <li class="">
                                <a href="#ourexperts">Experts</a>
                            </li>
                            <li class="">
                                <a href="#whatwepost">Media</a>
                            </li>
                            <li class="">
                                <a href="press_releases.php">Press Release</a>
                            </li>
                            <li class="">
                                <a href="#contact">Contact</a>
                            </li>
                            <li class="">
                                <a href="login.php">Login</a>
                            </li>

                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->

        <!--hero section-->
        <div id="fullscreen-banner" class="parallax text-center vertical-align parallax-9">
            <div class="container-mid">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="text-uppercase ls-20"><span class="typist-element typist-blink light-txt" data-typist="DISCOVER, DEEP DIVE, DISRUPT"></span></h1>

                        <h4 class="light-txt">Deals | Companies | Financials | Exclusive Data | Stay Informed | Track Competition |<br/>Peer Valuations | Identify Opportunities | Perform Due Diligence</h4>
                        <a href="#requestacall" class="btn btn-medium btn-rounded btn-dark-solid"> REQUEST A CALL</a>
                    </div>
                </div>
            </div>
        </div>
        <!--hero section-->

        <!--body content start-->
        <section class="body-content">
            
            
            <!--parallax-->
            <div class="parallax-inner parallax-10" id="whoweare">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title-alt text-left m-bot-0 inline-block">
                                <h1 class="text-uppercase theme-color">Who we are </h1>
                                <h4>India’s most comprehensive research platform for Private Markets </h4>
                                <p class="p-top-20">Through the provision of quality and well researched information and insights, we help investors to make informed decisions, manage risk and achieve market beating returns. Our repository of deals, directories and financials data adds up to a holistic financial research platform which is leveraged by clients for deal origination, deal structuring and valuations as well as for carrying out due diligence, and tracking competition.</p>

                                <div class=" ">
                                    <a href="aboutus.php" class="btn btn-medium btn-rounded btn-dark-solid "> view more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-->

           <!--feature-->
            <div id="whatwedo" class="page-content">
                <div class="container">
                    <!--feature border box start-->
                    <div class="row">
                        <div class="heading-title text-center">
                            <h1 class="text-uppercase theme-color">What we do</h1>
                            <h4 class="p-long-text-short">We provide data, information and insights thereby enabling customers to make more informed decisions even as they reduce time spent on research.</h4>
                        </div>

                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInLeft">
                                <div class="icon">
                                    <i class="icon-ecommerce_money"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Financials</h4>
                                </div>
                                <div class="desc">
                                    Extensive coverage of private and public company financials with detailed balance sheets and P&amp;L.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInLeft">
                                <div class="icon">
                                    <i class="icon-ecommerce_banknotes"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Transactions</h4>
                                </div>
                                <div class="desc">
                                    In-depth database of transactions with Valuations including proprietary deals and more.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInLeft">
                                <div class="icon">
                                    <i class="icon-basic_elaboration_mail_cloud"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Directories</h4>
                                </div>
                                <div class="desc">
                                    Exhaustive directories of Funds, Asset Managers, Investment Bankers, Law Firms and Professionals active in India.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInUp">
                                <div class="icon">
                                    <i class="icon-software_layout-8boxes"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Sectors</h4>
                                </div>
                                <div class="desc">
                                    Dynamic Industry classification based on global Classification standards with details of their transactions.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInRight">
                                <div class="icon">
                                    <i class="icon-tools_creative"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Intelligence</h4>
                                </div>
                                <div class="desc">
                                    Generate active deal intelligence for building a deal pipeline through our daily 'Intelligence newsletter'. 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item feature-border-box text-left wow fadeInLeft">
                               <a href="index.php#requestacall"> <div class="icon-btn">
                                    <i class="icon-phone"></i>
                                </div></a>
                                <div class="title text-uppercase">
                                    <a href="index.php#requestacall"><h4>Request a Call</h4></a>
                                </div>
                                <div class="desc">
                                    Not a member yet? Take a Demo Today. Drop us a line and we will call you.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--feature border box end-->
                </div>
            </div>
            <!--feature-->

           
           <!--tabs-->
            <div class="page-content tab-parallax-alt" id="whatwepossess">
                <div class="container">
                    <div class="row">

                       <div class="heading-title text-center light-txt">

                            <h1 class="text-uppercase theme-color">What we possess</h1>
                            <h4 class="p-long-text-short light-txt">Quality and dependable research output is aggregated and presented to customers to enable highly efficient and timely discovery of companies, LPs, investors and other key ecosystem players. Our knowledge assets encompass the following categories:</h4>

                        <div class="col-md-12 p-top-30">
							
                            <!--tabs square start-->
                            <section class="square-tabs icon-tabs light text-center ">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-20">
                                            <i class="icon-apartment_building"> </i>
                                            Companies
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-21">
                                            <i class="icon-basic_elaboration_mail_cloud"> </i>
                                            Directories
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-22">
                                            <i class="icon-ecommerce_money"> </i>
                                            Financials
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-23">
                                            <i class="icon-ecommerce_banknotes"> </i>
                                            Transactions
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#tab-24">
                                            <i class="icon-software_scale_expand"> </i>
                                            Key Developments
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-25">
                                            <i class="icon-documents"> </i>
                                            Research Reports
                                        </a>
                                    </li>

                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div id="tab-20" class="tab-pane active">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase">Companies</h3>
                                                    <p>Detailed profiles of thousands of listed and unlisted companies including company description, modus operandi, industry focus and geographical presence. It also covers information on ownership structure, investors, subsidiaries, key people, addresses etc.</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="light-txt"><strong>The key data points include:</strong><br>Company Type, Previous Name, Brand Name, Founded Year, Industry Classification (STP classification, Venture Source Classification and Edge sector classification),Website , Email id, CIN No., Scrip Code, Primary and Secondary addresses, Parent – Subsidiary relation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-21" class="tab-pane">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase">Directories</h3>
                                                    <p>Comprehensive list and profiles of Funds, Limited Partners, Angel Investors, Incubators, Auditors, Investment Banks, Law Firms and Professionals.</p>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                    <dl class="accordion light-txt">
                                                    <dt>
                                            <a href="">Professionals</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Lists all Key management and board members along with their detailed biographies, current/prior professional relationships, educational qualifications, memberships and affiliations.
                                        </dd>
                                        <dt>
                                            <a href="">Incubators</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Largest database of incubators in India along with the list of their current/prior incubatee companies. This includes the name of incubators/accelerators along with their sponsors and industry focus.
                                        </dd>
                                        <dt>
                                            <a href="">Investment Banks/Law Firms</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Detailed information on investment banks/law firms along with the list of their clients and deals advised. Customized league table generation.
                                        </dd>
                                        <dt>
                                            <a href="">Angel Investors</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Comprehensive list of angel investors in India along with their detailed biography, professional affiliations, association with angel networks, and investment portfolio.
                                        </dd>
                                        <dt>
                                            <a href="">Auditors</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Includes information on audit firms along with their current/prior clientele.
                                        </dd>
                                        <dt>
                                            <a href="">Asset Manager Funds</a>
                                        </dt>
                                        <dd class="light-txt">
                                            This includes the detailed information on asset managers and their funds including the assets under management, domicile, geography focus, fund raising details, investment type &amp; investment range. The data also includes the detailed information on their portfolio companies and co-investors. It also provides analysis on investment and industry exposure.
                                        </dd>
                                        <dt>
                                            <a href="">Limted Partners</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Exhaustive list of limited partners investing in Indian funds along with their portfolio. Limited partners are further categorized under different investor types such as public or corporate pension funds, insurance companies, high net worth individuals, family offices endowments, foundations, fund of funds, sovereign wealth funds etc. LP screening further facilitates filtering the information based on multiple parameters such as location, fund preference, commitment information, and portfolio information.
                                        </dd>
                                    </dl>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-22" class="tab-pane">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase"> Financials</h3>
                                                    <p>Quick access to the extensive financial information of public and private companies in India. It comprises of ownership and shareholders information, financial statements that includes profit and loss statements, balance sheets, cash flow statements, and financial ratios.</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="light-txt">Consolidated and standalone financials are updated for companies wherever available. The data is updated in the format approved by the regulatory authorities in India. Relevant source documents can also be viewed for any additional data requirements.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-23" class="tab-pane">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase">Transactions</h3>
                                                    <p>India’s most robust database of private equity/venture capital investments and exits, mergers & acquisitions, listed debt, and equity capital market deals.</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <dl class="accordion light-txt">
                                                    
                                                    <dt>
                                            <a href="">Debt</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Debt coverage is limited to debt capital market transactions via private placements and public offerings. It also includes International Offerings, FCCBs and Venture Debt transactions. Key information collected for debt deals include transaction dates, lender details, coupon rate, listing date, credit rating, underwriters, issue size, issue price, maturity date, and listing etc.
                                        </dd>
                                        
                                        <dt>
                                            <a href="">Private Equity</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Detailed information on investments and exits made by the private equity/venture capital firms in India. The investments are further classified under different deal sub-types such as Angel/Seed, Venture Capital, Private Equity, Public equity, Real Estate, and Pre-IPO. Exits are further classified based on different exit modes such as open market, public offering, M&amp;A, buyback and Secondary Sale. Key information collected for each deal under this category include transaction dates, buyer/seller information, deal value, percentage stake acquired/sold, advisors involved, deal valuations and multiples, security being transacted, tranche details, and transaction description.
                                        </dd>
                                        <dt>
                                            <a href="">Mergers &amp; Acquisitions</a>
                                        </dt>
                                        <dd class="light-txt">
                                            M&amp;A section lists all domestic and cross border (Inbound &amp; Outbound) deals involving Indian companies and their affiliates. Key information collected for each deal under this category include transaction dates, buyer/seller information, deal value, percentage stake acquired/sold, advisors involved, deal valuations and multiples, security being transacted, tranche details, and transaction description.
                                        </dd>
                                        <dt>
                                            <a href="">Equity Capital Market</a>
                                        </dt>
                                        <dd class="light-txt">
                                            Extensive ECM coverage includes Initial Public Offerings, Follow-on Public Offerings, Rights Issue, Qualified Institutional Placements and Institutional Placement Programme. Key information collected for each deal under this category include transaction dates, offering size, timelines and segmentation, issue expenses, pre and post issue outstanding shares, over subscription/allotment, listing date, exchanges etc.
                                        </dd>
                                        
                                    </dl>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-24" class="tab-pane">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase">Key Developments</h3>
                                                    <p>Key developments are the significant news about companies that could impact the performance of the company or signal any potential investment opportunities. </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="light-txt">The key events are tagged under 56 key development types across 9 categories. Key development types include Product Launch, Restructuring, Capital Expenditure, Business Expansion, Seeking Financing, Considering Investments, PE/VC Fund Raising etc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-25" class="tab-pane">
                                            <div class="row text-left">
                                                <div class="col-md-6">
                                                    <h3 class="light-txt text-uppercase">Research Reports</h3>
                                                    <p>Detailed deal analysis reports covering data-driven holistic view of private equity, venture capital, M&amp;A and equity capital market deals in India, with sector and region-wise analysis. </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="light-txt">These reports includes analysis on different aspects of transactions including investors interests on specific sectors, areas or stage of investment. The reports are published quarterly and annually. VCCEdge currently has reports in the archive starting 2010.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!--tabs square end-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--tabs-->
           
           
            <!--property list-->
            <div class="page-content" id="whatweoffer">
                <div class="container p-bot-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-title text-center">
                                <h1 class="text-uppercase theme-color">What we offer</h1>
                                <h4 class="text-center p-long-text-short">VCCEdge research and insights are offered in the following attractive product sets</h4>
                            </div>
                        </div>
                        
                        <div class="post-list">
                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-img">
                                        <img src="assets/img/real-state/r-post-1.jpg" alt="">
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            VCCEdge Database
                                        </h4>
                                        <p>
                                        VCCEdge is India’s premier research platform providing comprehensive private and public company financial data, private equity, venture capital, M&amp;A, ECM and debt transactions data, key developments of companies, and advanced search tools and features for the Indian investment ecosystem.
                                    </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-img">
                                        <img src="assets/img/real-state/r-post-2.jpg" alt="">
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            Deals Database
                                        </h4>
                                        
                                        <p>
                                            VCCEdge deal database offers complete transaction information along with detailed valuation and multiples for funded companies including their business profiles and affiliate relationships.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="post-single">
                                    <div class="post-img ">
                                        <img src="assets/img/real-state/r-post-3.jpg" alt="">
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            Sectoral Database
                                        </h4>
                                        <p>
                                            VCCEdge sector database offers sector specific comprehensive information that includes company profiles, transactions, team and financial data. It also offers analytical and screening tools to identify specific sector trends.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>                            
                        </div>                      
                    </div>
                </div>

                <div class="row">
                    <div class="inline-block text-center">
                        <a href="login.php" class="p-read-more">Know More<i class="icon-arrows_slim_right"></i></a>
                    </div>
                </div>

            </div>
            <!--property list-->         
            

            <!--promo-->
            <div class="full-width promo-box dark-bg ">
                <div class="container">
                    <div class="col-md-12">
                        <div class="promo-info">
                            <span class="light-txt m-top-0">HURRY UP! TAKE A DEMO TODAY</span>
                            <div class="h4"> <span>Write to us at <a href="mailto:sales@vccedge.com" target="_top" class="light-txt">support@vccedge.com</a> or <a href="#requestacall" class="light-txt">REQUEST A CALL</a></span>
                        </div>
                        </div>
                        <div class="promo-btn">
                            <a href="login.php" class="btn btn-medium btn-rounded btn-dark-solid">Login now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--promo-->
            
            <div class="video-parallax inline-block" id="Howwedifferent" style="height: 524px;">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title-alt text-left m-bot-0 inline-block">
                                <h1 class="text-uppercase theme-color">How are we different</h1>
                                <p class="p-top-20">We combine a meticulous research approach with a granular detail orientation to produce best-in- class research in our domain. Interactive pictorial and graphical representations on a user friendly interface enable users to drive quality analysis and spot trends faster and earlier than their peers, providing a distinct advantage in a world where timing matters.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="video-wrap">
                <video preload="auto" loop autoplay muted>
                    <source src="assets/img/mvideo.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Start Expert Section-->

        <div class=" page-content" id="ourexperts">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title text-center">
                            <h1 class="text-uppercase theme-color">Experts Panel</h1>
                            <h4 class="text-center p-long-text-short">VCCEdge is associated with top Industry Experts who regularly contribute to our research and insights to make it more trustworthy.</h4>
                        </div>
                    </div>                        
                </div>
                <div class="row">
                    
                    <div class="resource-widget"><div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="4000" id="myCarousel"><ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0" class=""></li><li data-target="#myCarousel" data-slide-to="1" class=""></li><li data-target="#myCarousel" data-slide-to="2" class=""></li><li data-target="#myCarousel" data-slide-to="3" class=""></li></ol><div class="row"><div class="carousel-inner"><div class="item active"><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=19"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/19.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=19">Kushal Nahata</a></p><span class="light-txt-trans speaker-designation">Co-Founder & CEO, Robotic Wares Pvt. Ltd. (FarEye)</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=18"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/18.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=18">Rochelle D\'Souza</a></p><span class="light-txt-trans speaker-designation">Principal, Lighthouse Advisors India Pvt. Ltd.</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=16"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/16.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=16">Zorawar Kalra</a></p><span class="light-txt-trans speaker-designation">Founder and Managing Director,  Massive Restaurants Pvt. Ltd. (Farzi Cafe, PA PA YA)</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=15"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/15.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=15">Ankur Goyal</a></p><span class="light-txt-trans speaker-designation">Founder & CEO, Merhaki Foods & Nutrition Pvt. Ltd. (&Me)</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=14"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/14.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=14">Sahil Dharia</a></p><span class="light-txt-trans speaker-designation">Founder and Managing Director,  Soothe Healthcare Pvt. Ltd. (Paree)</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=13"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/13.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=13">Prachi Windlass</a></p><span class="light-txt-trans speaker-designation">Director, India Programs, Michael & Susan Dell Foundation India LLP</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=12"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/12.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=12">Zishaan Hayath</a></p><span class="light-txt-trans speaker-designation">Founder, Toppr</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=11"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/11.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=11">Puneet Kothapa</a></p><span class="light-txt-trans speaker-designation">Executive Director, Narayana Group of Educational Institutions</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=10"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/10.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=10">Namita Dalmia</a></p><span class="light-txt-trans speaker-designation">Principal, Omidyar Network</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=9"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/9.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=9">Srikrishna Ramamoorthy</a></p><span class="light-txt-trans speaker-designation">Partner, Unitus Seed Fund</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=8"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/8.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=8">Sanjay Dalmia</a></p><span class="light-txt-trans speaker-designation">Founder, OpenLinks Foundation</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=7"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/7.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=7">Mayank Kumar</a></p><span class="light-txt-trans speaker-designation">Founder & Managing Director, Upgrad</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=6"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/6.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=6">Krishna Kumar</a></p><span class="light-txt-trans speaker-designation">Founder & CEO, CropIn Technology</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=5"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/5.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=5">Jinesh Shah</a></p><span class="light-txt-trans speaker-designation">Founding Partner, Omnivore Venture Capital</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=4"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/4.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=4">Hemendra Mathur</a></p><span class="light-txt-trans speaker-designation">Venture Partner, Bharat Innovations Fund</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=3"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/3.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=3">Shyatto Raha</a></p><span class="light-txt-trans speaker-designation">Founder & Director, InnoCirc Ventures  | Founder, MyHealthcare</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=2"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/2.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=2">Arvind Sivramakrishnan</a></p><span class="light-txt-trans speaker-designation">CIO, Apollo Hospitals Enterprise Ltd.</span></div></div></a></div></div></div><div class="item "><div class="col-md-2 pad-all"><div class="team-member"><a href="expert_details.php?expert_id=1"><div class="team-img">  <img class ="img-responsive" src="https://cmsadmin.vccedge.com/expert_panel/1.jpg" alt=""><div class="team-intro"><p class="h4 speaker-name"><a href="expert_details.php?expert_id=1">Ashish Gupta</a></p><span class="light-txt-trans speaker-designation">CTO, Policybazaar.com  | CEO, docprime</span></div></div></a></div></div></div></div></div><a class="carousel-control left" href="#myCarousel" data-slide="prev"></a><a class="carousel-control right" href="#myCarousel" data-slide="next"></a></div></div>
                </div>
                <div class="m-top-60 inline-block text-center">
                    <a href="all_report_experts.php" class="p-read-more">View More Experts <i class="icon-arrows_slim_right"></i></a>
                </div>
            </div>
        </div>


        <!-- End Expert Section-->
            
            
            <!--parallax-->
          <!--  <div class="parallax-inner parallax-10b" id="Howwedifferent">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title-alt text-left m-bot-0 inline-block">
                                <h1 class="text-uppercase theme-color">How are we different</h1>
                                <p class="p-top-20">Interactive Charts and Graphs to aid analysis and spot trends. Integrated platform with powerful screening tools, Intuitive &amp; User Friendly Interface, Integrated Datasets, Analytical Tools, Download Options Including Display Columns and much more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--parallax-->

            

            <!--fun factor-->
            
            <div class="fun-factor-parallax dark page-content parallax-7 ">
                <div class="container p-tb-100">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fun-factor">
                                <div class="icon">
                                    <i class="icon-ecommerce_banknotes"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="43360" data-speed="10000"> </h1>
                                    <span>Transactions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fun-factor">
                                <div class="icon">
                                    <i class="icon-apartment_building"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="123110" data-speed="10000"> </h1>
                                    <span>Companies</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fun-factor">
                                <div class="icon">
                                    <i class="icon-ecommerce_money"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="60014" data-speed="10000"> </h1>
                                    <span>Private Companies Financials</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--fun factor-->

            <!--blog post-->
            <!-- <div class="parallax-inner parallax-10c" id="whatwepost">
                <div class="container p-bot-100">
                    <div class="row">

                    </div>
                </div>
            </div> -->
            <!--blog post-->


            <!--blog post-->
            <div class="page-content" id="whatwepost">
                <div class="container p-bot-100">
                    <div class="row">

                        <div class="heading-title text-center ">
                            <h1 class="text-uppercase theme-color">What we post</h1>
                             <h4 class="text-center p-long-text-short">Live feed of news we cover on VCCircle</h4>
                        </div>

                        <div class="post-grid">
                            <div class="col-md-4"><div class="post-single"><div class="post-img bottom"><img src="https://assets.vccircle.com/uploads/2018/10/OnlineeducationThinkstockPhotos.jpg" alt=""></div><div class="post-desk"><div class="mid-align"><ul class="post-cat"><li><a target=”_blank” href="https://www.vccircle.com/ed-tech-startup-byjus-buys-learning-platform-math-adventures/">VCCircle</a></li></ul><h4><a href="https://www.vccircle.com/ed-tech-startup-byjus-buys-learning-platform-math-adventures/"  target="_blank">Ed-tech startup Byju’s buys learning platform Math Adventures</a></h4><div class="date">Vijayakumar Pitchiah | July 07, 2018</div></div></div></div></div><div class="col-md-4"><div class="post-single"><div class="post-desk"><div class="mid-align"><ul class="post-cat"><li><a target=”_blank” href="https://www.vccircle.com/exclusive-ilfs-investment-managers-backs-pharmacy-operator/">VCCircle</a></li></ul><h4><a href="https://www.vccircle.com/exclusive-ilfs-investment-managers-backs-pharmacy-operator/"  target="_blank">IL&FS Investment Managers backs pharmacy operator</a></h4><div class="date">Debjyoti Roy | July 07, 2018</div></div></div><div class="post-img top"><img src="assets/img/defaultimage.jpg" alt=""></div></div></div><div class="col-md-4"><div class="post-single"><div class="post-img bottom"><img src="assets/img/defaultimage.jpg" alt=""></div><div class="post-desk"><div class="mid-align"><ul class="post-cat"><li><a target=”_blank” href="https://economictimes.indiatimes.com/tech/hardware/while-we-make-in-india-customers-favour-korean-or-chinese-handsets/articleshow/65111989.cms">Econmic Times</a></li></ul><h4><a href="https://economictimes.indiatimes.com/tech/hardware/while-we-make-in-india-customers-favour-korean-or-chinese-handsets/articleshow/65111989.cms"  target="_blank">While we \'Make in India\', customers favour Korean or Chinese handsets</a></h4><div class="date">Shelley Singh | July 07, 2018</div></div></div></div></div> 
                        </div>                         

                        <div class="m-top-50 inline-block text-center">
                            <a target="_blank" href="blog-list.php" class="p-read-more">View More News <i class="icon-arrows_slim_right"></i></a>
                        </div>

                    </div>

                </div>
            </div>
            <!--blog post-->

            <!--testimonial-->
            <div class="testimonial-parallax parallax-19">
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!--testimonial start-->
                                <h1 class="light-txt text-uppercase text-center">What they say about us</h1>
                                <div id="testimonial-5" class="text-center light-txt big-icon ">

                                <div class="item"><div class="testimonial-thumb wow zoomIn"><img class="img-circle" src="assets/img/event_avatar3.png" alt=""></div><div class="content"><p class="half-txt">“I am thoroughly impressed with the promptness with which the team services specific data requests made by us. Also, the consistency of timely execution has allowed us to rely on the platform in select time critical situations. The team also goes the extra mile by adding value in whatever manner possible to the requests.”</p><div class="testimonial-meta"><span>- Investment Banking Associate at a leading I-bank in India</span></div></div></div><div class="item"><div class="testimonial-thumb wow zoomIn"><img class="img-circle" src="assets/img/event_avatar3.png" alt=""></div><div class="content"><p class="half-txt">“VCCEdge has played a critical role in helping us stay abreast of industry happenings and the trends behind the details of each deal. The depth of research into each detail and highly intuitive interface makes finding information very easy. We have found the VCCEdge team to be very responsive and they have shown a readiness to adapt that results in a constantly improving product.“</p><div class="testimonial-meta"><span>- Research Manager at a Bangalore based early-stage VC firm</span></div></div></div><div class="item"><div class="testimonial-thumb wow zoomIn"><img class="img-circle" src="assets/img/event_avatar3.png" alt=""></div><div class="content"><p class="half-txt">“We have been using VCCEdge for about seven months now and have been very pleased with the product and customer service. The product is intuitive and easy to use, and the support team has been very responsive to our many requests to add more companies to the database. An indispensable product for anyone looking to invest in private companies in India.”</p><div class="testimonial-meta"><span>- Investment Professional at a $15 billion global buyout fund</span></div></div></div><div class="item"><div class="testimonial-thumb wow zoomIn"><img class="img-circle" src="assets/img/event_avatar3.png" alt=""></div><div class="content"><p class="half-txt">"We have been using VCCEdge for more than 2 years now and have had a great experience. The information is comprehensive and the platform is user friendly. The big benefit for us has been the access to the support team, who have always responded promptly to our custom research requirements."</p><div class="testimonial-meta"><span>- Director-Investments at a proprietary Indian venture capital fund</span></div></div></div><div class="item"><div class="testimonial-thumb wow zoomIn"><img class="img-circle" src="assets/img/event_avatar3.png" alt=""></div><div class="content"><p class="half-txt">\"There are numerous instances where our teams are extremely happy about using VCCEdge. The coverage and access to financials of unlisted companies is extremely helpful.\"</p><div class="testimonial-meta"><span>-Ernst and Young India</span></div></div></div> 
                                   
                                </div>
                                <!--testimonial end-->
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!--testimonial-->
            
            
            <!--LEAGUE TABLES DEMO-->
            <div class="page-content p-bot-0" id="league-table">
                <div class="container" >
                    <div class="row heading-title">
                        <h1 class="text-uppercase theme-color text-center">League Tables</h1>

                        
<script type='text/javascript' src='assets/js/league_table.js'></script>

<div class="col-md-12">

	<input type="hidden" id="transaction_type_value" value="34"/>

	<!-- PE and M&A tabs start-->
    <section class="square-tabs text-right p-top-20">
        <ul class="nav nav-pills">
            <li class="active">
                <a data-toggle="tab" id="tab-pe" aria-expanded="true">Private Equity</a>
            </li>
            <li class="">
                <a data-toggle="tab" id="tab-mna" aria-expanded="false">Mergers &amp; Acquisition</a>
            </li>
        </ul>
    </section>
    <!-- PE and M&A tabs End-->

    <hr id="pe-top-investment-banks">

    <!-- Investment Banks Section Start -->
    <div class="p-top-10 h3 text-left" >
        <p>
        	<span class='deal_type' style='font-size:24px;'></span> Top Investment Banks (Q3 - 2019)
        </p>
	</div>

	<section class="border-tabs">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" id='tab1' aria-expanded="false">
                    DEAL VOLUME
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" id='tab2' aria-expanded="false">
                    DEAL VALUE
                </a>
            </li>
        </ul>
    </section>

    <div id="ajax_output" style='height:300px;'></div>
    <!-- Investment Banks Section End -->

    <hr style='margin-top:50px !important;' id="pe-top-legal-advisors">

    <!-- Legal Advisors Section Start -->
    <div class="p-top-10 h3 text-left">
        <p>
        	<span class='deal_type' style='font-size:24px;'></span> Top Legal Advisors (Q3 - 2019)
        </p>
	</div>

	<section class="border-tabs">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" id='tab3' aria-expanded="false">
                    DEAL VOLUME
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" id='tab4' aria-expanded="false">
                    DEAL VALUE
                </a>
            </li>
        </ul>
    </section>

    <div id="legal_advisor_ajax_output" style='height:300px;'></div>
    <!-- Legal Advisors Section End -->

</div>                        
                    </div>
                </div>
            </div>
            <!--LEAGUE TABLE ENDS-->           
            

            <!--video demo-->
         <!--   <div class="page-content">
                <div class="container">
                    <div class="row">

                        <div class="heading-title text-center ">
                            <h3 class="text-uppercase">watch our video</h3>
                            <p class="half-txt p-top-30">VCC Edge helps the profiles of Funds, Limited Partners, Angel Investors, Incubators, Auditors, Investment Banks, Law Firms and Professionals to unleash the power of their most valuable assets: their data and their people.</p>
                        </div>


                        <div class="col-md-6 col-md-offset-3">
                            <p class="video-fit m-bot-50 wow zoomIn">
                               <iframe width="560" height="315" src="https://www.youtube.com/embed/XZmGGAbHqa0" frameborder="0" allowfullscreen></iframe>
                            </p>
                        </div>

                    </div>


                </div>
            </div>-->
            <!--video demo-->           

            <!--subscribe-->
            <div class="page-content p-bot-0" id="subscribe-now">
                <!--full width Subscribe center align start-->
                <div class="subscribe-box gray-bg round-5 page-content text-center">
                    <div class="container">
                        
                        <div class="subscribe-info">
                            <h1 class="theme-color ">Subscribe Now </h1>
                            <span class=" ">Intelligence &amp; Deal Update Daily Newsletter </span>
                        </div>

                        <div class="subscribe-form" id='subscribe_now_thankyou_message' style='background-color: #ddd; text-align: center; display:none;'>Thank you for your request. <BR/> You will start receiving the newsletter shortly.</div>                                
                    
                        <div class="row"  id="subscribe_form">
                        <input type='hidden' id='subscribe_now_email_verified' value='' />
                        <input type='hidden' id='subscribe_now_otp_verified' value='' />
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-6 ">               

                                        <div class="form-group">
                                            <!-- Name -->
                                            <input type="text" name="subscribe_now_name" id="subscribe_now_name" class=" form-control" placeholder="Name *" maxlength="100" required="">

                                            <div id="subscribe_now_name_error" class="error-message"></div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Email -->
                                            <input type="text" name="subscribe_now_designation" id="subscribe_now_designation" class=" form-control" placeholder="Designation *" maxlength="100" required="">

                                            <div id="subscribe_now_designation_error" class="error-message"></div>
                                        </div>

                                        <div class="form-group">
                                            <!-- phone -->
                                            <input type="text" name="subscribe_now_phone" id="subscribe_now_phone" class=" form-control" placeholder="Phone *" maxlength="10">

                                            <div class="get_otp" id="get_otp">
                                            <img class="cursor" src="assets/img/get_otp.png" onclick="send_otp()" id="send_otp">
                                            <i id="verified_successfully">&nbsp;(Click here to get OTP to verify your mobile number.)</i>
                                            </div>

                                            <div id="subscribe_now_phone_error" class="error-message"></div>
                                        </div>

                                        <div class="form-group" id="otp_verify">
                                            <!-- phone -->
                                            <input type="text" id="one_time_pass" name="one_time_pass" class=" form-control" placeholder="Enter OTP*" maxlength="6">

                                            <div class="get_otp">
                                            <img class="cursor" src="assets/img/verify_otp.png" onclick="verify_otp()" id="verify_otp">&nbsp; (<i>Verify to submit the form.</i>)
                                            </div>

                                            <div id="verify_otp_error" class="error-message"></div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <div class="form-group">
                                            <input type="text" name="subscribe_now_organization" id="subscribe_now_organization" class=" form-control" placeholder="Company Name *" maxlength="100">

                                            <div id="subscribe_now_org_error" class="error-message"></div>
                                        </div>

                                        <div class="form-group">
                                            <!-- Email -->
                                            <input type="text" name="subscribe_now_email" id="subscribe_now_email" class=" form-control" placeholder="Email *" maxlength="100" required="">

                                            <div id="subscribe_now_email_error" class="error-message"></div>
                                        </div>

                                        

                                        <div class="form-group full-width">
                                            <button type="submit" id="subscribe_now" class="btn btn-small btn-rounded btn-dark-solid ">
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                    <script src="assets/js/subscribe_now.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--full width Subscribe center align end-->
            </div>
            <!--subscribe-->

            <!--contact Start-->
            <div class="parallax-inner dark parallax-15 " id="contact">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon wow bounceInDown">
                                    <i class="icon-map light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">Delhi</h4>
                                </div>
                                <div class="desc light-txt">
                                    Mosaic Digital,<br/>
                                    Plot 17, Okhla Industrial Estate, <br/>
                                    Phase III, New Delhi - 110020 <br/>
                                    <a href="tel:+91 011 49711180"  class="light-txt">+91 011 49711180</a>, <a href="tel:+91 011 68132900"  class="light-txt">+91 011 68132900</a><br/>
                                    <a href="mailto:sales@vccedge.com"  class="light-txt" target="_top">sales@vccedge.com</a>               
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon wow bounceInDown">
                                    <i class="icon-map light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">Mumbai</h4>
                                </div>
                                <div class="desc light-txt">
                                   61-A, 6th floor, <br/>
                                 2 North Ave., Maker Maxity, BKC,<br/>
                                  Bandra (East), Mumbai - 400050<br/>
                                    <a href="tel:+91 22 61456100"  class="light-txt">+91 022 61456100</a>
                                    <br/><a href="mailto:sales@vccedge.com"  class="light-txt" target="_top">sales@vccedge.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon wow bounceInDown">
                                    <i class="icon-map light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">Bangalore</h4>
                                </div>
                                <div class="desc light-txt">
                                    No.43, WeWork Galaxy, Residency Road,<br/>
                                    Shanthala Nagar, Ashok Nagar, <br/>
                                    Near Gateway Hotel, Bangalore - 560025<br/>
                                    <a href="tel:+91 80 69405500"  class="light-txt">+91 080 69405500</a>
                                    <br/><a href="mailto:sales@vccedge.com"  class="light-txt" target="_top">sales@vccedge.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--contact End-->


            <div class="page-content" id="requestacall">

                <div class="container">

                    <div class="heading-title  text-center ">
                        <h1 class="text-uppercase theme-color"> Request a Call</h1>
                        <div class="half-txt">Not a member yet? Drop us a line and we will call you.</div>
                    </div>

                    <div class="row" id='thankyou_message' style='background-color: #ddd; text-align: center; display:none;'>Thank you for your request. <BR/> Our sales representative will call you shortly.</div>

                    <div class="row" id='requestacall_callback'>
                        <div class="col-md-10 col-md-offset-1">
                        <input type="hidden" name="" id="request_a_call_email_verified" value="" />
                        <input type="hidden" name="" id="request_a_call_otp_verified" value="" />
                                <div class="row">

                                    <div class="col-md-6 ">
                                        <input type='hidden' id='existing_email_status' value='' />

                                        <div class="form-group">
                                            <!-- Name -->
                                            <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">

                                            <div id="name_error" class="error-message"></div>
                                        </div>

                                        <div class="form-group">
                                            <!-- Name -->
                                            <input type="text" name="designation" id="designation" class=" form-control" placeholder="Designation *" maxlength="100" required="">

                                            <div id="designation_error" class="error-message"></div>
                                        </div>                                    
                                        

                                        <div class="form-group">
                                            <!-- phone -->
                                            <input type="text" name="phone" id="phone" class=" form-control" placeholder="Phone *" maxlength="10">

                                            <div class="get_otp" id="request_a_call_get_otp">
                                                <img class="cursor" src="assets/img/get_otp.png" onclick="request_a_call_send_otp()" id="request_a_call_send_otp">
                                                <i id="request_a_call_verified_successfully">&nbsp;(Click here to get OTP to verify your mobile number.)</i>                              
                                            </div>

                                            <div id="phone_error" class="error-message"></div>
                                        </div>

                                        <div class="form-group" id="request_a_call_otp_verify">
                                            <!-- phone -->
                                            <input type="text" id="request_a_call_one_time_pass" name="request_a_call_one_time_pass" class=" form-control" placeholder="Enter OTP*" maxlength="6">

                                            <div class="get_otp">                
                                            <img class="cursor" src="assets/img/verify_otp.png" onclick="request_a_call_verify_otp()" id="request_a_call_verify_otp">&nbsp; (<i>Click Verify to submit the form.</i>)
                                            </div>

                                            <div id="request_a_call_verify_otp_error" class="error-message"></div>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <div class="form-group">
                                            <!-- Email -->
                                            <input type="text" name="company_name" id="company_name" class=" form-control" placeholder="Company Name *" maxlength="100" required="">

                                            <div id="company_name_error" class="error-message"></div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Email -->
                                            <input type="text" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">

                                            <div id="email_error" class="error-message"></div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Comment -->
                                            <textarea name="comment" id="comment" class="cmnt-text form-control" placeholder="Comment" maxlength="400"></textarea>
                                        </div>
                                        <div class="form-group full-width">
                                            <button type="submit" id="request_a_call" class="btn btn-small btn-rounded btn-dark-solid ">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 get_otp"><i>* In case you are unable to submit the form here, please send your query in an email to sales@vccedge.com </i></div>
                                </div>
                        </div>
                    </div>
                </div>

                <script src="assets/js/subscribe.js"></script>

            </div>
            <!--contact-->

        </section>
        <!--body content end-->

        <!--footer start 1-->
        <footer id="footer" class="dark">
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="https://www.mosaicdigital.com/" target="_blank" >
                                <img src="assets/img/mosaic-digital-white-logo.svg" style="margin-left: auto;margin-right: auto;text-align: center;display: table-cell;vertical-align: middle" alt="Mosaic Digital" />
                            </a>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Our Products</h5>
                            <ul class="f-list">
                                <li><a href="https://www.vccircle.com/" target="_blank">VCCIRCLE</a>
                                </li>
                                <li><a href="http://techcircle.vccircle.com" target="_blank">TechCIRCLE</a>
                                </li>
                                <li><a href="http://events.vccircle.com/" target="_blank">EVENTS</a>
                                </li>
                                <li><a href="http://training.vccircle.com/" target="_blank">TRAINING</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Quick Link</h5>
                            <ul class="f-list">
                                <li><a href="aboutus.php">About Us</a>
                                </li>
                                <li><a href="press_releases.php" target="_blank">Press Release</a>
                                </li>
                                <li><a href="terms_condition.php#terms" target="_blank">Terms of Use</a>
                                </li>
                                <li><a href="terms_condition.php#privacy" target="_blank">Privacy Policy</a>
                                </li>
                                <li><a href="terms_condition.php#disclaimer" target="_blank">Disclaimer</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">News Corp Companies</h5>
                            <ul class="f-list">
                                <li><a href="https://www.proptiger.com/" target="_blank">PropTiger</a>
                                </li>
                                <li><a href="https://www.wsj.com/india" target="_blank">WSJ</a>
                                </li>
                                <li><a href="https://www.makaan.com/" target="_blank">Makaan</a>
                                </li>
                                <li><a href="https://www.marketwatch.com/" target="_blank">MarketWatch</a>
                                </li>
                                <li><a href="https://www.mansionglobal.com/" target="_blank">Mansion Global</a>
                                </li>
                                <li><a href="https://www.realtor.com/" target="_blank">Realtor</a>
                                </li>
                                <li><a href="https://housing.com/" target="_blank">Housing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10 light-txt">Copyright © 2019 vccedge.com. Property of Mosaic Media Ventures Pvt. Ltd.</span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
                                <a href="https://www.facebook.com/vccircle" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/vccircle" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/vccircle/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>        <!--footer 1 end-->
    </div>
    <a data-scroll="" class="lift-off js-lift-off lift-off_show" href="#"><i class="fa fa-angle-up"></i></a>
</body>

</html>

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

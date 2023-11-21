<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAD</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>node_modules/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="<?=base_url()?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>node_modules/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    
    <!-- header design -->
    <header id="myHeader">
        <div class="top-head">
            <a href="<?=base_url('')?>" class="logo"><img src="<?=base_url('')?>assets/images/logo.jpeg" alt=""></a>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" name="search" onkeyup="searchText()" class="search" id="searchKeys" placeholder="Search">
                    <button class="search-btn" ><i class='bx bx-search-alt'></i></button>
                </div> 
            </div>
        </div>
        <div class="menu">
            <i class='bx bx-menu' id="btn-menu"></i> Menu
        </div>
        <div class="nav-links">
            <ul class="d-flex align-items-center mb-0">
                <a href="<?=base_url('')?>" class="active-link"><li>Home</li></a>
                <a href="<?=base_url('about-us')?>"><li>About Quad</li></a>
                <li>
                    <a href="#">Meetings</a>
                    <ul class="sub-menu">
                        <a href="<?=base_url('meetings/leaders')?>"><li>Leaders</li></a>
                        <a href="<?=base_url('meetings/foreign-ministers')?>"><li>Foreign Ministers</li></a>
                    </ul>
                </li>
                <li>
                    <a href="#">Areas of Cooperation</a>
                    <ul class="sub-menu">
                        <a href="<?=base_url('areas-of-cooperation/climate')?>"><li>Climate</li></a>
                        <a href="<?=base_url('areas-of-cooperation/critical-emerging-technologies')?>"><li>Critical and Emerging Technologies</li></a>
                        <a href="<?=base_url('areas-of-cooperation/cyber')?>"><li>Cyber</li></a>
                        <a href="<?=base_url('areas-of-cooperation/health-security-partnership')?>"><li>Health Security Partnership</li></a>
                        <a href="<?=base_url('areas-of-cooperation/infrastructure')?>"><li>Infrastructure</li></a>
                        <a href="<?=base_url('areas-of-cooperation/space')?>"><li>Space</li></a>
                    </ul>
                </li>
                <li>
                    <a href="#">Initiatives</a>
                    <ul class="sub-menu">
                        <a href="<?=base_url('initiatives/indo-pacific-partnership-for-maritime-domain-awareness')?>"><li>Indo-Pacific Partnership for Maritime Domain Awareness (IPMDA)</li></a>
                        <a href="<?=base_url('initiatives/stem-fellowships')?>"><li>STEM Fellowships</li></a>
                        <a href="<?=base_url('initiatives/counter-terrorism')?>"><li>Counter-terrorism</li></a>
                    </ul>
                </li>
                <a href="<?=base_url('media-resources')?>"><li>Media & Resources</li></a>
                <!-- <a href="<?=base_url('contact-us')?>"><li>Contact Us</li></a> -->
            </ul>
        </div> 
    </header> 

    <div class="main-div">
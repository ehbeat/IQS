<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <link href="css/main.min.css" rel="stylesheet" type="text/css">

        <!--Google fonts-->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: ['Montserrat:400,700:latin'] }
            };
            (function ()
            {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <noscript>
            <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        </noscript>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

<body class="has-bottom-nav">
    <nav>
        <div id="off-nav" class="sidebar">
            <div class="search"></div>
            <ul>
                <li class="search">
                    <input class="search-box" type="search" placeholder="Search">
                </li>

                <li>
                    <a>
                        <span class="icon-left icon icon-user"></span>
                        Contacts
                    </a>

                    <div class="subnavclick">
                        <span class="icon icon-arrow-down4 arrow"></span>
                        <span class="searchcount">205</span>
                    </div>

                    <ul id="contacts" class="subnav">
                        <li>
                            <a>Customers
                                <span class="notification">(8)</span> 
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">24</span>
                            </a>
                        </li>
                        <li>
                            <a>Insurers 
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">37</span>
                            </a>
                        </li>
                        <li>
                            <a>Colleugues
                                <span class="notification">(4)</span> 
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">9</span>
                            </a>
                        </li>
                        <li>
                            <a>Service Providers 
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">2</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-text"></span>Quotes</a>
                    <div class="subnavclick"><span class="icon icon-arrow-down4 arrow"></span><span class="searchcount">234</span>
                    </div>
                    <ul id="quotes" class="subnav">
                        <li>
                            <a>Quotes Request
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">16</span>
                            </a>
                        </li>
                        <li>
                            <a>Quotes
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">3</span>
                            </a>
                        </li>
                        <li>
                            <a>History
                                <span class="icon icon-arrow-down4 arrow">&nbsp;</span>
                                <span class="searchcount">34</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-star"></span>Favourites</a>
                    <span class="searchcount">100</span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-bubbles3"></span>Chats</a>
                    <span class="searchcount">124</span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-">&nbsp;&nbsp;</span>Activity</a>
                    <span class="searchcount"></span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-">&nbsp;&nbsp;</span>MarketApps</a>
                    <span class="searchcount"></span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-user5"></span>Product Market</a>
                    <div class="subnavclick"><span class="icon icon-arrow-down4 arrow"></span><span class="searchcount">16</span>
                    </div>
                    <ul id="Products" class="subnav">
                        <li>
                            <a>Professional Indemnity
                                <span class="searchcount">16</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-user4"></span>Product Providers</a>
                    <span class="searchcount">205</span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-">&nbsp;&nbsp;</span>News</a>
                    <span class="searchcount"></span>
                </li>
            </ul>
        </div>
    </nav>


   <div class="width80 body-content bg-white" id="body-content" data-toggle="offcanvas">
        <header>
            <div class="width80 header" data-toggle="offcanvas">
                <div class="hamburger">
                    <a id="offcanvas" class="icon icon-list2"></a>
                </div>

                <div class="logo">
                    <img src="images/iqs-logo.png" alt="IQS Online" />
                </div>

                <div class="notifications pull-right">
                    <span class="noti-count">1</span>
                    <div class="sprite notification"></div>
                </div>

                <div class="noti-quote pull-right">
                    <span class="noti-count">3</span>
                    <span class="icon icon-quote"></span>
                </div>

                <div class="nav-profile pull-right">
                    <div class="user-rating pull-left">
                        <span class="icon icon-star"></span>
                        <span class="icon icon-star"></span>
                        <span class="icon icon-star"></span>
                        <span class="icon icon-star"></span>
                        <span class="icon icon-star icon-left"></span>
                    </div>
                    <div class="user-name">Joel<span class="icon icon-arrow-down4 arrow"></span></div>
                    <img class="user-avatar" src="images/user-avatar.png" alt="User Name" width="32" height="32" />
                </div>

            </div>
            <div class="top-nav">
                <ul>
                    <li class="active"><a href="#">Policy</a></li>
                    <li><a href="#">Brochures</a></li>
                    <li class="pull-right">
                        <button class="quote-request">Quote Request Form</button>
                    </li>
                </ul>
            </div>
        </header>

        <div class="main-content">

            <div class="company-info">
                <div class="com-logo">
                    <img src="../images/camargue-logo.jpg" alt="Camargue">
                </div>
                <h2 class="headline">Artchitects Professional Indemnity</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut tellus non tortor feugiat malesuada. Curabitur a cursus velit, ut vulputate nibh. Nam vel mollis ipsum, a bibendum dolor. Donec hendrerit viverra quam, sit amet auctor nunc. Vestibulum placerat rutrum lectus, at accumsan nulla aliquam sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque ultrices arcu eget metus dictum porttitor eu non purus. Proin mattis lorem id libero porta, vitae tincidunt lacus commodo. Curabitur semper justo et diam consequat, ac iaculis nisl tincidunt.</p>
            </div>
        </div>
    </div>
        <footer>
            <div class="footer-wrapper pull-right width80" data-toggle="offcanvas">
                <div class="bottom-nav">
                    <ul>
                        <li class="active"><a href="#">About Us</a></li>
                        <li class="pull-right">
                            <button class="quote-request">Quote Request Form</button>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <div>
                        <div class="footer-logo"><img src="images/iqs-footer-logo.png" alt="IQS Online" width="74" height="24"></div>
                        <div><a href="#">Privacy &amp; Terms</a> | <a href="#">Settings</a> | <a href="#">Advertising</a> | <a href="#">About</a></div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" defer></script>
    <script src="js/functions.min.js" defer></script>
    </body>
</html>

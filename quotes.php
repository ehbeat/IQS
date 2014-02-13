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

<body>
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
                <li><a><span class="icon-left icon icon-history"></span>Activity</a>
                    <span class="searchcount"></span>
                </li>
            </ul>

            <ul>
                <li><a><span class="icon-left icon icon-code"></span>MarketApps</a>
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
                <li><a><span class="icon-left icon icon-newspaper"></span>News</a>
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

        </header>

        <div class="main-content">

            <div class="quotes">
                <table width="100%" border="0" class="quotes-table responsive">
                    <tr class="table-header">
                        <th>User</th>
                        <th>Start</th>
                        <th>Submitted</th>
                        <th>Recieved</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Mary Smith</td>
                        <td>18 Dec 2012</td>
                        <td>12 Feb 2013</td>
                        <td>12 Feb 2013</td>
                        <td class="green">Submitted</td>
                    </tr>
                    <tr>
                        <td>Bob Swart</td>
                        <td>20 Jan 2013</td>
                        <td>12 Feb 2013</td>
                        <td>12 Feb 2013</td>
                        <td class="yellow">In Progress</td>
                    </tr>
                    <tr>
                        <td>John Eagle</td>
                        <td>12 Feb 2013</td>
                        <td>12 Feb 2013</td>
                        <td>12 Feb 2013</td>
                        <td class="red">Quote Recieved</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
        <footer>
            <div class="footer-wrapper pull-right width80" data-toggle="offcanvas">
                <div class="footer">
                    <div>
                        <div class="footer-logo"><img src="images/iqs-footer-logo.png" alt="IQS Online" width="74" height="24"></div>
                        <div><a href="#">Privacy &amp; Terms</a> | <a href="#">Settings</a> | <a href="#">Advertising</a> | <a href="#">About</a></div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" defer></script>
    <script src="js/responsive-tables.min.js" defer></script>
    <script src="js/functions.min.js" defer></script>
    </body>
</html>

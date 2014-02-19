<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
    <div class="outer-wrapper row-offcanvas row-offcanvas-left">
    <nav>
        <div id="off-nav" class="sidebar-offcanvas sidebar-oncanvas">
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
                                <span class="icon icon-arrow-down4 arrow"></span>
                                <span class="searchcount">24</span>
                            </a>
                        </li>
                        <li>
                            <a>Insurers 
                                <span class="icon icon-arrow-down4 arrow"></span>
                                <span class="searchcount">37</span>
                            </a>
                        </li>
                        <li>
                            <a>Colleugues
                                <span class="notification">(4)</span> 
                                <span class="icon icon-arrow-down4 arrow"></span>
                                <span class="searchcount">9</span>
                            </a>
                        </li>
                        <li>
                            <a>Service Providers 
                                <span class="icon icon-arrow-down4 arrow"></span>
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
                                <span class="icon icon-arrow-down4 arrow"></span>
                                <span class="searchcount">16</span>
                            </a>
                        </li>
                        <li>
                            <a>Quotes
                                <span class="icon icon-arrow-down4 arrow"></span>
                                <span class="searchcount">3</span>
                            </a>
                        </li>
                        <li>
                            <a>History
                                <span class="icon icon-arrow-down4 arrow"></span>
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

   <div class="width100 body-content pull-right" id="body-content" data-toggle="offcanvas">
        <header>
            <div class="width100 header">
                <div id="trigger" class="menu-trigger">
                    <a id="offcanvas"></a>
                </div>

                <div class="logo">
                    <img src="images/iqs-logo.png" alt="IQS Online" />
                </div>

                <div class="notifications pull-right">
                    <span class="noti-count">1</span>
                    <div class="sprite notification"></div>
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
        <div class="width100 news-highlights">
            <p>Feb 06 2014 14:01 The majority of South Africa’s new multimillionaires - those with more than R300m - earned their... <a href="#">read more</a></p>
        </div>
        </header>

        <div class="main-content">
            <form action="#">
                <input type="text">
                <input type="password">
                <input type="number">
                <input type="text" disabled>
                <input type="email">
                <input type="url">
                <textarea></textarea>
                <input type="checkbox">
                <input type="radio">
                <select>
                    <optgroup label="group">
                        <option>Option GA</option>
                        <option>Option GB</option>
                        <option>Option GC</option>
                        <option>Option GD</option>
                    </optgroup>
                    <option>Option A</option>
                    <option>Option A</option>
                    <option>Option A</option>
                    <option>Option A</option>
                </select>
                <input type="file">
                <input type="date">
                <input type="time">
                <button type="submit" class="submit">Submit</button>
                <button type="reset" class="reset">Reset</button>
                <button type="button" class="save-draft">Save as Draft</button>
                <button type="button" class="forward">Forward</button>
                <input type="range">
                <input type="color">
                <div class="progress-bar">Progress Bar</div>
            </form>
            </div>
        </div>
    </div>
        <footer>
            <div class="footer-wrapper pull-right width100" data-toggle="offcanvas">
                <div class="footer pull-right">
                    <div>
                        <div class="footer-logo"><img src="images/iqs-footer-logo.png" alt="IQS Online" width="74" height="24"></div>
                        <div><a href="#">Privacy &amp; Terms</a> | <a href="#">Settings</a> | <a href="#">Advertising</a> | <a href="#">About</a></div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" defer></script>
    <script>new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );</script>
    <script src="js/functions.min.js" defer></script>
    </div>
    </body>
</html>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>404</title>

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/introtzikas.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            $().introtzikas({
                line: 'white',
                speedwidth: 2000,
                speedheight: 1000,
                bg: '#474747',
                lineheight: 2
            });
        });
        //]]>
    </script>
</head>

<body>

<img src="images/bg2.jpg" id="bg" alt="" /><!-- Background image -->
<div class="bg_overlay"></div><!-- Pattern -->

<div id="wrap">
    <div id="block">
        <div id="content">
            <div class="top_img">
                <div class="img_eror"></div>
            </div>
            <div class="srch">
                <div class="search">
                    <form method="get" id="s-form" action="#" class="s-form">
                        <fieldset>
                            <input type="text" class="s_text" name="s" id="s" value="Enter a keyword..." onfocus="this.value=(this.value=='Enter a keyword...') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Enter a keyword...' : this.value;" />
                            <input type="submit" class="s_button" value="Search" id="searchsubmit" />
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="text_eror">
                <h1>"Ooops! Page not found..."</h1>
                <p>Enter a keyword(s) in the search field above, maybe you'll find the page you're looking for. <br />
                    Or, you can take a look at our <a href="#">SITEMAP</a>. You can also return <a href="#">HOME</a>.</p>
            </div>


        </div>
    </div>
</div>

</body>
</html>
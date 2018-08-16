<?php include 'checker.php'; ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_5 - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style>
.title
            {
                //background-color: #eeeeee;
                background-color: #2F2827;
                  //background:#00FF00; 
                font-family: Arial,Helvetica,sans-serif; 
                font-size: large;
		
                padding: .2em;
                margin-left: .5em;
                margin-bottom: .1em;
                float: right;
                text-align: left;
                width: 30%;
                font-weight: bold;
                font-variant: small-caps;
                text-align:right;
            }
</style>
<script language="javascript" src="cookiemngr.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">BMCC <span class="logo_colour">Electronics</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="login.php">Login</a></li>
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="products.php">Products</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <h1>Products</h1>
       
        <p>images can be placed on the left, in the center or on the right:</p>
        
        <div style="border:solid green 1px;background:#FFFFFF;height:170px;">
        <span class="left"><img src="images/sony4.png" style="width:200px" alt="example graphic" /></span>
        <div class="title">SONY HD-TV</div>
        <p>
          The best in entertainment. Access a world of movies, TV and apps, and 
          enjoy every moment in picture quality that goes beyond Full HD. With 
          X-Reality PRO, you will enjoy stunning clarity, sharpness and a more 
          refined picture. <a href="sony.html">See more details...</a><br></br>         
          <span style="float:right;text-align:left;padding:.5em;"><a href="#" onclick="alert('SONY TV ADDED TO CART');setCookie('sonytv','1',30);">Add to Cart</a>&nbsp;&nbsp;<a href="cart.html">Goto Cart</a></span>
        </p>
        </div>
        <p />
        <div style="border:solid green 1px;background:#FFFFFF;height:170px;">
			<div class="title">PANASONIC HD-TV</div>
        <span class="left"><img src="images/panasonic.png" style="width:200px;" alt="example graphic" /></span>
        <p>
           Features an advanced LED Backlight Design which produces a wider color
           range Local Dimming along with the Black Graduation Drive to delivery 
           great blacks in your video Super Bright Panel helping to brighten up 
           the content XUMO Discovery... <a href="panasonic.html">See more details...</a><br></br> 
          <span style="float:right;text-align:left;padding:.5em;"><a href="#" onclick="alert('PANASONIC TV ADDED TO CART');setCookie('panasonictv','1',30);">Add to Cart</a>&nbsp;&nbsp;<a href="cart.html">Goto Cart</a></span>
        </p>
        </div>
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>

<?php include 'checker.php'; ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_5 - a page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
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
        <h1>SONY HDTV</h1>
        <span  style="padding:0;margin:0;"><center style="margin:0px;padding:0px;"><img src="images/sony4.png" width="90%" style="padding:0;margin:0;"></img></center></span>
         <p>The best in entertainment. Access a world of movies, TV and apps, and enjoy every moment in picture quality that goes beyond Full HD. With X-Reality PRO, 
         you will enjoy stunning clarity, sharpness and a more refined picture. </p>
         <ul>
			<li>The dramatic contrast, colour and detail of 4K HDR</li>
			<li>Take even non-HDR content to the next level with the new 4K HDR Processor X1</li>
			<li>Enjoy smooth and vibrant colours with TRILUMINOS Display and 4K HDR Super Bit Mapping</li>
			<li>Android TV with Google Home compatibility gives you a genius TV</li>
			<li>Lifelike motion with Motion flow XR technology</li>
         </ul>
         <span style="float:right;text-align:left;padding:.5em;"><a href="javascript:setCookie('dvd','1',1);">Add to Cart</a>&nbsp;&nbsp;<a href="cart.html">Goto Cart</a></span>
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>


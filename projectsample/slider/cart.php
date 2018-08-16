<?php include 'checker.php'; ?>
<!DOCTYPE HTML>

<html>

<head>
  <title>simplestyle_5 - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script language="javascript" src="cookiemngr.js" ></script>
<script type="text/javascript" src="pricing.js"></script>
<script type="text/javascript">
function cart()
{
	var total=0;
	for(var i=0;i<items.length;i++)
	{
		qty=parseInt(getCookie(items[i]));
		//alert(parseInt(qty));
		if(!isNaN(qty))
		{   
			var itemqtyname=items[i]+"qty";
			var cost=prices[i];
			subtotal=prices[i]*qty;
			total=total+subtotal;
			document.writeln("<tr><td>",items[i],"</td><td>");
			document.writeln("<input type='text' value='",qty,"' id='",itemqtyname,"' maxlength='2' size='2'/>");
			document.writeln("<input type='button' value='update' id='",items[i],"' onclick='updateqty(this)';/>");
			document.writeln("</td><td>");
			document.writeln(cost);
			document.writeln("</td><td>");
			document.writeln(subtotal);
			document.writeln("</td></tr>");
		}
   }
   if(total !=0 ) 
   {   
	document.writeln("<tr><td colspan='3' >SUBTOTAL</td><td>");
	document.writeln(total);
	document.writeln("</td></tr>"); 
   } 
}

function updateqty(item)
{
	var days=30;
	itemid=item.id+"qty"
	var newqty=parseInt(document.getElementById(itemid).value);
	if (newqty==0) days=-1;
	alert(newqty+":"+days);
	setCookie(item.id,newqty,days);
	location.reload();
	location.href="cart.html";
} 
</script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">simple<span class="logo_colour">style_5</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="examples.php">Examples</a></li>
          <li><a href="page.php">A Page</a></li>
          <li><a href="another_page.php">Another Page</a></li>
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
        <h1>Web Cart</h1>
        <table>
			<tr><td>NAME</td><td>QTY</td><td>COST</td><td>SUBTOTAL</td></tr>
			<script type="text/javascript">
			cart();
			</script>
		</table>
		<a href="products.html">Back to Shopping</a>&nbsp;<a href="checkout.html">Checkout</a>
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>

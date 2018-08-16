<html>
<head>

<style>
	.container {
	    overflow: hidden;
	    background-color: black;
	    font-family: Arial;
	}

	.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}

	.dropdown {
    float: left;
    overflow: hidden;
	}

	.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
	}

	.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
	}

	.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}

	.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	}

	.dropdown-content a:hover {
    background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
    display: block;
	}
    .title
    {
    font-size:70px;
    color:white;
    background-color:black;
    text-align:center;
    position:relative;
    padding:25px;
    }
   .sidebar
    { 
    text-align: center;
    
    background-color:black;
    width: 150px;
    padding: 5px 5px 5px;
    text-decoration: none;
    color:white;
    float:right;
    }

   .sidebar a
   {
    text-align:center;
    background-color:black;
    display:inline;
    padding:5px 10px;
    color:white;
    text-decoration:none;
    float:right;
   }
   .cart
   {
    background-color:black;
    color:white;
    padding:5px 5px;
    text-align:center;
    text-decoration:none;
   }
    .sidebar li a, .sidebar li a:hover
    { 
    min-width:150px;
    background-color:black;
    padding:5px;
    display: inline-block;
    color:white;
    text-decoration: none;
    text-align:center;
    }
</style>
</head>
<body style="mind-wdith:990px;">
<div class="title">
Login
</div>
<div class="container">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Computers</button>
            <div class="dropdown-content">
            <a href="dellxps15.html">Dell XPS 15</a>
            <a href="imac.html">iMac</a>
            <a href="surfacepro4.html">Surface Pro 4</a>
            </div>
        </div> 

        <div class="dropdown">
            <button class="dropbtn">Music</button>
            <div class="dropdown-content">
            <a href="bose.html">Bose Headphones</a>
            <a href="yamaha.html">Yamaha Speakers</a>
            <a href="audiotechnica.html">Audio Technica Turntable</a>
            </div>
        </div> 

        <div class="dropdown">
            <button class="dropbtn">Gaming</button>
            <div class="dropdown-content">
            <a href="xboxone.html">Xbox One</a>
            <a href="ps4.html">PS4</a>
            <a href="nintendoswitch.html">Nintendo Switch</a>
            </div>
        </div>
        <a href="aboutus.html">About us</a>
        <a href="contactus.html">Contact Us</a>
        <a href="login.html">Login</a>
        <a href="registration.php">Register</a>
</div>
<p style="color:black;text-align:center;font-size:20px;background-color:lightgray;">

</p>
</body>


<form action="logon.php" method="get">
<table>
<tr><td width="100" colspan="2"><center>LOGIN</center></td></tr>
<tr><td width="100">Username:</td><td width="200"><input type="text" name="username"></td></tr>
<tr><td width="100">Password:</td><td width="200"><input type="password" name="password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
<tr><td width="100" colspan="2"><center><a href="registration.php">Register</a></center></td></tr>
</table>
</form>

</html>

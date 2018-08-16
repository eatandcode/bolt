<?php include 'checker.php'; ?>

<html><head><title>LOGIN WEB SESSION</title>
<link rel="stylesheet" type="text/css" href="loginsession.css" />
</head>
<body><div>LOGIN WELCOME</div> 
<div>
HERE IS YOUR USER DATA:<br />
<label class="data">username:<?php echo $_SESSION['username'] ?><br>
password: <?php echo $_SESSION['password'] ?><br></label>
HERE IS YOUR SESSION DATA:<br />
<label class="data">
<?php echo (session_name().": ".session_id()) ?><br>
<?php echo ("SESSION DATA: ".session_encode() )?>
</label>
</div>
<div><a href="logoff.php">Logoff</a></div>
</body>
</html>

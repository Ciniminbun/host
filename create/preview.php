<!DOCTYPE html>
<html>
<head>
	<title>NEWS TROOP | Preview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=500">
	<meta name="description" content="not finished, turn back while ye can">
	<meta property="og:title" content="NEWS TROOP">
	<meta property="og:description" content="not finished, turn back while ye can">
	<meta property="og:image" content="https://newstroop.cinimin.net/images/thumbnail.png">
	<meta property="og:url" content="http://newstroop.cinimin.net/">
	<meta name="twitter:card" content="summary_large_image">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="newstroop.css">
</head>
<body>

	<header>
		<img src="images/navlogo.png" height="30px" width="auto" alt="NEWS TROOP logo">
		<h3>THE NEWS THATS LEFT FROM THE BRIDE</h3>
	</header>
	
	<nav id="mySidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.html">home</a>
		<a href="articles.html">articles</a>
		<a href="https://twitter.com/NewsTroop?s=20">twitter</a>
		<a href="info.html">info</a>
		<a href="generator.html">create</a>
	</nav>
	
	<div class="navbutton"><span onclick="openNav()">&#9776;</span></div>
	
	<script>
		function myFunction(x) {
			if (x.matches) { // If media query matches
				document.getElementById("mySidenav").style.width = "100%";
			} else {
				document.getElementById("mySidenav").style.width = "0";
			}
		}

		var x = window.matchMedia("(min-width: 600px)")
		myFunction(x) // Call listener function at run time
		x.addListener(myFunction) // Attach listener function on state changes
		
		function openNav() {
		document.getElementById("mySidenav").style.width = "60vw";
		}

		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		}
	</script>

<main class="article">

		<img src="../images/articles/
060220
		.png" class="thumb">

		<div class="content">
			<h1>
			<?php
	
				$title = $_POST["title"];
				echo $title
			?>
			</h1>
		<div class="authdate"> <!-- random name pulled from list • all date numbers randomly generated -->
			<?php
	
				$author = $_POST["author"];
				echo $author
			?>
 • 
			<?php
	
				$date = $_POST["date"];
				echo $date
			?>
		</div>

		<div> <!-- article body here -->

		<?php
	
			$body = $_POST["body"];
			echo $body
		?>

		</div>
		</div>

		<div class="related">
			<h2>Related</h2>
			<a href="..articles/
g13
			.html">• 
GEORGE SCHUTTE SHOW: INTERVIEW WITH INTERNET CELEBRITY XXGRUNTILDA_FUCKER
			</a>
			
			<a href="..articles/
051520
			.html">• 
LEAKED SCOOB! SCRIPT REVEALS DARK SECRETS
			</a>
			
			<a href="..articles/
032520
			.html">• 
TOP TEN GAYMER MOMENTS
			</a>
			
		</div>
		
		<span>
			<a href="../articles.html">All Articles</a>
			<a href="../generator.html">Make an Article</a>
			<a href="../info.html">More Info</a>
		</span>


</main>

<footer>
	Copyright &copy; 2020 NewsTroop
	<br>
	<a href="info/about.html">About</a> • 
	<a href="info/contact.html">Contact</a> • 
	<a href="info/privacy.html">Privacy Policy</a> • 
	<a href="info/staff.html">Staff</a>
	<br>
	<a href="mailto:ciniminbun@gmail.com">ciniminbun@gmail.com</a> • 
	<a href="https://cinimin.net/">cinimin.net</a>
	</footer>

</body>
</html>
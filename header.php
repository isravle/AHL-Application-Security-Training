<!DOCTYPE html>
<html>
<head>
<title>AHL AppSec Trainning v1</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/cover.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="sidenav">
  <a href="/">
  <h3 style="color: Green">AHL AppSec Trainning v1</h3>
  </a>
  
  <!--Drop #1 -->
  <button class="dropdown-btn">Cross-site scripting (XSS) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/xss/xss_challenge_1.php">Challenge 1</a>
    <a href="/xss/xss_challenge_2.php">Challenge 2</a>
	<a href="/xss/xss_challenge_3.php">Challenge 3</a>
	<a href="/xss/xss_challenge_4.php">Challenge 4</a>
	<a href="/xss/xss_challenge_5.php">Challenge 5</a>
	<a href="/xss/xss_challenge_6.php">Challenge 6</a>
	<a href="/xss/xss_challenge_7.php">Challenge 7</a>
  </div>
  
  <!--Drop #2 -->
  <button class="dropdown-btn">SQL Injection 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/sqli/sqli_challenge_1.php">Challenge 1 - Union-Based</a>
    <a href="/sqli/sqli_challenge_2.php">Challenge 2 - Union-Based</a>
    <a href="/sqli/sqli_challenge_3.php">Challenge 3 - Union-Based</a>
	<a href="/sqli/sqli_challenge_4.php">Challenge 4 - Union-Based</a>
	<a href="/sqli/sqli_challenge_5.php">Challenge 5 - Union-Based</a>
	<a href="/sqli/sqli_challenge_6.php">Challenge 6 - Blind-Based</a>
	<a href="/sqli/sqli_challenge_7.php">Challenge 7 - Error-Based</a>
  </div>
  
  <!--Drop #3 -->
  <button class="dropdown-btn">Directory/Path Traversal
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/dirtrav/dirtrav_challenge_1.php?page=welcome.txt">Challenge 1</a>
	<a href="/dirtrav/dirtrav_challenge_2.php?page=welcome.txt">Challenge 2</a>
  </div>
  
  <!--Drop #4 -->
  <button class="dropdown-btn">Local File Inclusion (LFI) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/lfi/lfi_challenge_1.php?page=welcome.php">Challenge 1</a>
	<a href="/lfi/lfi_challenge_2.php?page=welcome.php">Challenge 2</a>
  </div>
  
  <!--Drop #5 -->
  <button class="dropdown-btn">Remote File Inclusion (RFI) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/rfi/rfi_challenge_1.php?page=data/welcome.php">Challenge 1</a>
	<a href="/rfi/rfi_challenge_2.php?page=data/welcome">Challenge 1</a>
  </div>
  
  
  <!--Drop #6 -->
  <button class="dropdown-btn">XML External Entity (XXE) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/xxe/xxe_challenge_1.php">Challenge 1</a>
  </div>
  
  
  <!--Drop #7 -->
  <button class="dropdown-btn">Server-side request forgery (SSRF) 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/ssrf/ssrf_challenge_1.php">Challenge 1</a>
  </div>

  <!--Drop #8 -->
  <button class="dropdown-btn">Authorization Bypass 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/authz/authz_challenge_1.php">Challenge 1</a>
  </div>
  
  <!--Drop #10 -->
  <button class="dropdown-btn">Authentication Bypass 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/autht/autht_challenge_1.php">Challenge 1</a>
  </div>

  <!--Drop #11 -->
  <button class="dropdown-btn">Open Redirect
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/openr/openr_challenge_1.php">Challenge 1</a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<div class="main">


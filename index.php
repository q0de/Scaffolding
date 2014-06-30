<!DOCTYPE html> 
<html>
	<head>
		<title></title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/app.css">

</head>
<header class="navigation">
  <div class="menu-wrapper">
    <a href="javascript:void(0)" class="logo">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
    </a>
    <p class="navigation-menu-button" id="js-mobile-menu">MENU</p>
    <div class="nav">
      <ul id="navigation-menu">
        <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
        <li class="nav-link more"><a href="javascript:void(0)">More</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">Submenu Item</a></li>
            <li><a href="javascript:void(0)">Another Item</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="navigation-tools">
      <div class="search-bar">
        <div class="search-and-submit">
          <input type="search" placeholder="Enter Search" />
          <button type="submit">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="">
          </button>
        </div>
      </div>
      <a href="javascript:void(0)" class="sign-up">Sign Up</a>
    </div>
  </div>

</header>

<div class="hero">
  <div class="hero-inner">
    <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
" alt=""></a>
    <div class="hero-copy">
      <h1>Short description of Product</h1>
      <p>A few reasons why this product is worth using, who is it for and why do they need it.</p>  
    </div>
    <button>Learn More</button>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var menu = $('#navigation-menu');
  var menuToggle = $('#js-mobile-menu');
  var signUp = $('.sign-up');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });

  // underline under the active nav item
  $(".nav .nav-link").click(function() {
    $(".nav .nav-link").each(function() {
      $(this).removeClass("active-nav-item");
    });
    $(this).addClass("active-nav-item");
    $(".nav .more").removeClass("active-nav-item");
  });
});
</script>

</html>

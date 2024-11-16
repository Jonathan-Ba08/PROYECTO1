<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>E-SCHOOL</title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="#" class="nav__logo">
                  <i class="ri-planet-line"></i> E-SCHOOL
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>
            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="#" class="nav__link">Home</a></li>
                  <li><a href="#" class="nav__link">Why us?</a></li>
                  <li><a href="#" class="nav__link">Frequent Questions</a></li>
                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link dropdown-toggle">
                        Stats <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                                 <i class="ri-pie-chart-line"></i> Statistics
                           </a>
                        </li>
                     </ul>
               </li>
               
               <li><a href="#" class="nav__link">Contact</a></li>
               <li><a href="#" class="nav__link">Register!!</a></li>
            </ul>
            </div>
      </nav>
   </header>
   <!--=============== MAIN CONTENT===============-->
   <div class="content-container">
      <div class="video-section">
         <iframe width="630" height="420" src="https://www.youtube.com/embed/UhntoeUVuyM?si=XfD_xJYq6pLs3aQo" 
         title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
         referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
         </iframe>
      </div>
      <div class="text-section">
         <center><h2>This is us</h2></center>
         <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porttitor justo nulla. Integer posuere id enim eget imperdiet. 
            Nullam sed quam et tortor facilisis pellentesque at id neque. Quisque ante velit, dignissim non egestas et, pellentesque id purus. 
            Donec porta, massa eu maximus dapibus, nisl ipsum ornare nulla, id condimentum mi dui a ligula. Vestibulum consequat mi felis, in consectetur eros fringilla et. 
            Maecenas consectetur vel risus in porttitor. Nam faucibus nisi id erat vulputate, in mollis nisi molestie.</p></center>
         <div class="button-container">
            <button class="buy-button">Buy button</button>
      </div>
      </div>
</div>
<footer class="footer">
   <p>Derechos reservados E-SCHOOL</p>
</footer>
   <!--=============== MAIN JS ===============-->
   <script src="/assets/Js/menu.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sticky Animated Header</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    
    <!-- HEADER -->
    <header>
        <div class="wrap-container clearfix">
            <div class="branding">
                <img src="{{ asset('img/icon.png') }}" class="logo-lg" alt="logo" title="logo"/>
                <img src="{{ asset('img/icon.png') }}" class="logo-sm"  alt="logo" title="logo" />
            </div>
            <!-- menu div -->
            <div class="menu">
                <!--  this is the mobile menu button -->
                <a href="#" id="mobileButton" class="mobileMenuButton"><span></span></a>      
                <!--  this is the menu -->
                <ul class="listMenu">
                    <li><a href="#">Option 1</a></li>
                    <li><a href="#">Option 2</a></li>
                    <li><a href="#">Option 3</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>       
    </header>
    <div class="mobileMenu slideOut">
        <h2>Menu</h2>
        <!-- 05. obtain menu links from .listMenu and copy them to the here (Traversing the DOM) See js section 05-->
    </div>    
    
    <div class="content">
        <div class="stripe">
            <img src="{{ asset('img/index2.jpg') }}" class="image-section">
            <div class="wrap-container clearfix">
                <!-- <h1 class="text-center">Movie Description  -->
                <!-- <small><br/>with Mobile Menu<br/><span>( resize to see the mobile menu )</span> </h1></small> -->
            </div>        
        </div>
        <div class="stripe">
            <div class="container">
                <div class="card">
                <div class="image">
                    <img src="{{ asset('img/index4.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h2>Nike Running Shoes</h2>
                    <div class="size">
                    <h3>Size :</h3>
                    <span>5</span>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    </div>
                    <div class="color">
                    <h3>Color :</h3>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
            </div>
            </div>
        </div>
        <div class="stripe">
            <img src="{{ asset('img/index3.jpg') }}" class="image-section">
            <div class="wrap-container clearfix">
                <!-- <h1 class="text-center">Ok! well done -->
                <!-- <br/><span>( now resize me to a width less than 768px )</span></h1> -->
            </div>        
        </div>        
    </div>
      
    

    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
</body>
</html>
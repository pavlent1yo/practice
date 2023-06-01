<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odigo Organizer</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
</head>

    <script type="text/javascript"> 
        $(document).ready(function(){ 

        $(window).scroll(function(){ 
        if ($(this).scrollTop() > 500) { 
        $('.scrollup').fadeIn(); 
        } else { 
        $('.scrollup').fadeOut(); 
        } 
        }); 

        $('.scrollup').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 1000); 
        return false; 
        }); 

        }); 
    </script>

<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="./img/svg/odigo-logo.svg" alt="Odigo Organizer" class="header__logo-pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/registration.php" class="header__link js-scroll">Sign in</a>
                        </li>
					</ul>
					<div class="header__nav-close">
						<span class="header__nav-close-line"></span>
						<span class="header__nav-close-line"></span>
					</div>
				</nav>
				<div class="header__burger burger">
					<span class="burger__line burger__line_first"></span>
					<span class="burger__line burger__line_second"></span>
					<span class="burger__line burger__line_third"></span>
				</div>
            </div>
        </div>
    </header>
</body>

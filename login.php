<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odigo Organizer</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

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
                          <a href="#" class="header__link js-scroll">Profile</a>
                        </li>
                        <li class="header__item">
                          <a href="/index.php" class="header__link js-scroll">Logout</a>
                        </li>
                        <li class="header__item">
                          <a href="/registration/notes.php" class="header__link js-scroll">Notes</a>
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
    <main class="main">
        <section class="intro_login" id="sign-in">
            <div class="wrapper">
                <h1 class="intro__title">
                   Your welcome!
                   
                </h1>
                <p class="intro__subtitle">
                  This is your personal account, here you can use the functionality of the site. Thanks for staying with us.
                </p>
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__wrap">
                <h2 class="benefits__title">
                    Upload your arts
                </h2>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <form action="registration/upload.php" method="post" enctype="multipart/form-data">
                          <div class="form-upload-into">
                          <input type="file" id="file" name="file">
                            <label for="file">
                              <i class="material-icons">add_photo_alternate </i> &nbsp;
                              Choose a File
                            </label>
                            <div class="upload-button" >
                              <button class="btn" name="submit" type="submit">
                                <span class="material-symbols-outlined">Done</span>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </section>

        <?php require'footer.php' ?>

</body>
</html>

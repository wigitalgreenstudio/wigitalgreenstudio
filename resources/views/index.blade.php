<!doctype html>

<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>WigitalGreenStudio - strony, sklepy, portale internetowe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/wigitalgreenstudio.css" />
    </head>
    
    <body>
        <header class="main-header">
            <nav class="navbar">
                <a class="navbar-item navbar-brand" href="#">WigitalGreenStudio</a>
                <a href="#aboutUs" class="navbar-item">O nas</a>
                <a href="#portfolio" class="navbar-item">Nasze portfolio</a>                
                <a href="#contact" class="navbar-item">Kontakt</a>
                
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger-menu-bar"></div>
                    <div class="hamburger-menu-bar"></div>
                    <div class="hamburger-menu-bar"></div>
                </div>
                
                <div class="navbar-dropdown" id="navbar-dropdown">
                    <a href="#aboutUs" class="navbar-dropdown-item">O nas</a>
                    <a href="#portfolio" class="navbar-dropdown-item">Nasze portfolio</a>                    
                    <a href="#contact" class="navbar-dropdown-item">Kontakt</a>
                </div>
            </nav>
            
            <section class="hero">
                <div class="hero-wrapper">
                    <h1 class="hero-header">Szukasz strony internetowej<br>Dobrze trafiłeś</h1>
                    <a class="hero-button" href="#contact">Zapytaj o wycenę</a>
                </div>
            </section>
        </header>
        
        <main class="main">
                <section class="features" id="aboutUs">
                <div class="features-wrapper">
                    <div class="features-box">
                        
                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/ready-for-ship.png" alt="" />
                            <h2 class="features-box-header">Profesjonalizm</h2>
                            <p class="features-box-paragraph">Nasze projekty, realizowane od A do Z z&nbsp;piekielną dokładnoscią za równo po stronie klienta jak i po stronie serwera.</p>
                        </div>

                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/easily_customised.png" alt="" />
                            <h2 class="features-box-header">Dbałość o szczegóły</h2>
                            <p class="features-box-paragraph">Każdy detal ma znaczenie, dlatego nasze strony to nie tylko wizytówki pańskiej firmy lecz coś więcej.</p>
                        </div>
                        
                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/clean-code.png" alt="" />
                            <h2 class="features-box-header">Szybkość działania</h2>
                            <p class="features-box-paragraph">Nasze produkty są zoptymalizowane pod każdym wzgledem za równo po stronie klienta jak i serwera.</p>
                        </div>


                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/modern-design.png" alt="" />
                            <h2 class="features-box-header">Nowoczesny design</h2>
                            <p class="features-box-paragraph">Wykorzystujemy w swoich projektach najnowsze trendy na 2018r. aby twoja strona internetowa nie odstawała od reszty</p>
                        </div>

                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/download-for-free.png" alt="" />
                            <h2 class="features-box-header">Zadowolenie klienta</h2>
                            <p class="features-box-paragraph">Naszą misją jest zadowolenie klienta, co za tym idzie spełniamy ich oczekiwania w stu procentach</p>
                        </div>

                        <div class="features-box-item">
                            <img class="features-box-icon" src="images/responsive-ready.png" alt="" />
                            <h2 class="features-box-header">Nowoczesne technologie</h2>
                            <p class="features-box-paragraph">Technologie, których używamy to technologie jutra, dlatego nie musisz się martwić o przysłości.</p>
                        </div>
                    </div>            
                </div>
            </section>

            <section class="portfolio" id="portfolio">
                <div class="portfolio-wrapper">
                    <div class="portfolio-item"><img src="images/work-1.jpg" /></div>
                    <div class="portfolio-item"><img src="images/work-2.jpg" /></div>
                    <div class="portfolio-item"><img src="images/work-3.jpg" /></div>                    
                </div>
            </section>

            

            <section class="about-us">
                <div class="about-us-wrapper">
                    <div class="about-us-img about-us-item"></div>
                    <div class="about-us-content about-us-item">
                        <div>
                            <p>
                            	Nie staraj się być człowiekiem sukcesu.<br>
								Stań się raczej człowiekiem wartościowym !
							</p>
                            <p>Albert Einstein</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="contact-wrapper">                   
                    <form class="contact-form">
                    	<input type="text" name="first-name" placeholder="Imię">
                    	<input type="text" name="last-name" placeholder="Nazwisko">
                    	<input type="email" name="email" placeholder="Adres email">
                    	<input type="text" name="title-message" placeholder="Tytuł wiadomości">
                    	<textarea name="body-message" placeholder="Treść wiadomości"></textarea>
                    	<input type="submit" class="contact-button" value="Wyślij">
                    </form>
                </div>
            </section>
        </main>
        
        
        <footer class="footer">
            <div class="footer-wrapper">
                 <div class="footer-item">
                    <p class="copyright"> Copyright &#169; 2012 - 2018 WigitalGreenStudio.<br>
                    Wszelkie prawa zastrzeżone</p>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="js/wigitalgreenstudio.js"></script>
    </body>
</html>
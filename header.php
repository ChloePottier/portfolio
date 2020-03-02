<header>
        <div class="container-fluid d-none d-md-block">
            <div class="container">
                <div class="row nav-top">
                    <div class="col d-flex align-items-center">
                        <a class="logo-CP" href="index.php"></a>
                    </div>
                    <div class="col">
                        <nav class="menu-nav d-none d-md-flex">
                            <ul
                                class="list-unstyled d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3">
                                <li class=""><a href="index.php#portfolio" class="text-prune-dark">Portfolio</a></li>
                                <li class=""><a href="index.php#competences" class="text-prune-dark">Compétences</a></li>
                                <li class=""><a href="index.php#formation" class="text-prune-dark">Formation</a></li>
                                <li class=""><a href="index.php#experience" class="text-prune-dark">Expérience</a></li>
                                <li class=""><a href="index.php#contact" class="text-prune-dark">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-graphiste bg-cover">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <label class="burger text-center d-flex flex-column d-md-none text-white font-size-13 position-fixed rounded-circle bg-burger"
                            id="burger">MENU
                            <span class="bg-white isclosed mx-auto" id="burger1">&nbsp;</span>
                            <span class="bg-white isclosed mx-auto" id="burger2">&nbsp;</span>
                            <span class="bg-white isclosed mx-auto" id="burger3">&nbsp;</span>
                        </label>
                        <nav class="menu-burger display-none bg-prune-dark-op70 px-auto" id="navigation">
                            <ul class="list-unstyled font-family-bebas font-size-31 text-right pt-5">
                                <li class=""><a href="index.php#portfolio" class="pb-2 text-decoration-none" id="portfolio1">Portfolio</a></li>
                                <li class=""><a href="#competences" class="pb-2 text-decoration-none">Compétences</a>
                                </li>
                                <li class=""><a href="index.php#formation" class="pb-2 text-decoration-none">Formation</a></li>
                                <li class=""><a href="index.php#experience" class="pb-2 text-decoration-none">Expérience</a></li>
                                <li class=""><a href="index.php#contact" class="pb-2 text-decoration-none">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <!-- bannière + logo -->
                    <div class="col-12 d-flex justify-content-center align-items-center vh-100">
                        <img src="img/ChloePottier-logo-blanc.png" alt="Logo Chloé Pottier" class="d-block ChloeLogo" id="sun">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        let burger = document.getElementById("burger");
        let navigation = document.getElementById("navigation");
        let burger1 = document.getElementById("burger1");
        let burger2 = document.getElementById("burger2");
        let burger3 = document.getElementById("burger3");
            burger.addEventListener("click", function () {
                navigation.classList.toggle("display-flex");
                burger.classList.toggle("bg-none");
                burger1.classList.toggle("isopen-burger1");
                burger2.classList.toggle("isopen-burger2");
                burger3.classList.toggle("isopen-burger3");
        });
        

    </script>
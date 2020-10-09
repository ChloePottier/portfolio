<footer>
        <div class="container-fluid bg-contact" id="contact">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-6">
                        <h1 class="text-prune-dark pt-0 pt-sm-5">Contact</h1>
                        <form method="POST" class="pb-sm-6 shake" id="contactForm" data-toggle="validator" role="form">

                            <!-- <form action="traitement.php" method="POST" class="pb-sm-6" id="contactForm"> -->
                            <div class="d-flex flex-column w-75 font-size-18">
                                <input type="text" name="nom" id="nom" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="Nom *" required />
                                <div class="help-block with-errors"></div>
                                <input type="text" name="prenom" id="prenom" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas  pl-3 mb-3" placeholder="Prénom *" required />
                                <div class="help-block with-errors"></div>
                                <input type="text" name="societe" id="societe" class="bg-white-op40 border-0 text-prune-dark font-family-bebas  pl-3 mb-3" placeholder="Société" />
                                <input type="text" name="telephone" id="telephone" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas  pl-3 mb-3" placeholder="Téléphone" />
                                <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,8}$" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="E-mail *" required />
                                <div class="help-block with-errors"></div>
                                <textarea name="message" id="message" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="Votre message *" cols="30" rows="10" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- <div class="d-flex flex-column pb-5 pb-sm-0"> -->
                            <div>
                            <?php include "recaptcha.php"?>
                            </div>
                            <button id="form-submit" class="bg-prune-dark font-family-bebas font-size-24 text-blue  border-0" type="submit">ENVOYER</button>
                            <div id="msgSubmit" class="h3 hidden"></div>
                            <!-- </div> -->
                        </form>

                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0">
                        <!-- retrouvez moi -->
                        <img src="img/ChloePottier-logo.svg" alt="Chloé Pottier logo" width="289" height="289" class="mx-auto" />
                        <p class="font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5">
                            Retrouvez-moi<br />aussi sur :</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="https://github.com/ChloePottier" target="_blank" class="w-66px github d-flex mr-4"></a>
                            <a href="https://www.linkedin.com/in/chlo%C3%A9-pottier-b17b60196/" target="_blank" class="ml-4 w-66px linkedin d-flex"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-prune-dark sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-blue font-size-13 ">
                        <p class="mb-0 my-3">Mentions légales - Chloé Pottier Portfolio 2020©</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
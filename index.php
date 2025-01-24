<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>CT HTML Concepts</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Alert/dmxBootstrap5Alert.js" defer></script>
</head>

<body id="index">

    <header id="header" class="header container navbar-light">
        <div class="nav w-100">
            <a class="nav-item nav-link" href="#">Home</a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link" href="#" onclick="">Don't click me</a>
        </div>
    </header>
    <main class="container" id="mainWrapper">
        <section>
            <h1 class="text-primary-emphasis text-center fw-bold">HTML Concepts</h1>
        </section>
        <section id="form" class="bodyWrapper">
            <div class="row">
                <div class="col">
                    <h2 class="fw-bold contentHeading" id="contentHeading">HTML Form</h2>
                </div>
            </div>
            <section id="formWrapper" class="formWrapper">
                <form action="submitme.php" method="post">
                    <div class="form-group mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="nameInput" aria-describedby="input1_help" placeholder="Put your name here">
                            <small id="input1_help" class="form-text text-muted">This is a place for you to put your name.</small>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" name="EmailInput" aria-describedby="input1_help_field" placeholder="Put your email here">
                            <small id="input1_help_text" class="form-text text-muted">This is a Place to put your email</small>
                        </div>
                    </div>
                    <div class="form-group mb-3 row" id="found_group" is="dmx-radio-group">
                        <legend class="col-sm-2 col-form-label">How did you find us?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Google" id="found_1" name="Google">
                                <label class="form-check-label" for="found_1">Google</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="found_2" name="Friend">
                                <label class="form-check-label" for="found_2">Friend</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="found_3" name="Advertisement">
                                <label class="form-check-label" for="found_3">Advertisement</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="found_4" name="Mystical Vision">
                                <label class="form-check-label" for="found_4">Mystical Vision</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="found_5" name="Strange Map">
                                <label class="form-check-label" for="found_4">Strange Map Given by Mysterious Stranger</label>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="form-group mb-3 row">
                    <div class="col-sm-10">
                        <button id="btn1_submit" type="submit" class="btn btn-primary">Submit</button>
                        <button id="btn1_reset" type="reset" class="btn btn-secondary">Reset</button>
                        <button id="btn1_lifeChoice" class="btn btn-warning">Regret Life Choices</button>
                    </div>
                </div>
            </section>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <h1 id="contentHeading_images" class="contentHeading">Images</h1>
                    <div class="row">


                        <div class="col text-center"><img class="giveRoundBorder" src=" https://placehold.co/300x200" alt="Placeholder Image" width="300" height="200">
                            <p class="text-center">This is a plain old placeholder image.</p>
                        </div>
                        <div class="col text-center"><img class="giveRoundBorder" src=" https://placehold.co/300x200" alt="Placeholder Image" width="300" height="200" id="borderImage">
                            <p class="text-center">This is a plain old placeholder image.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center style1 container-fluid" id="footer" style="">
        <p class="text-light footer-text" id="footerText">This is our footer.&nbsp; That's all that's here.&nbsp; Except for this bit, this bit isn't here at all.</p>
    </footer>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
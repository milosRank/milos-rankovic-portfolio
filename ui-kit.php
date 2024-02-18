<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <?php include 'partials/resources/meta.php';?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- CSS -->
    <?php include 'partials/resources/styles.php';?>

    <!-- FAVICON -->
    <?php include 'partials/resources/favicon.php';?>

    <title>Milos Rankovic Portfolio | UI Kit</title>

</head>

<body class="homepage">

    <!-- Page wrapper start -->
    <div class="page-warpper">

        <!-- Header -->
        <?php include 'partials/elements/header.php'; ?>

        <main> <!-- Main start -->

        <section>
            <div class="container-fluid">
                <div class="wrapper">
                    <div class="container">

                        <h1>H1 title</h1>
                        <h2>H2 title</h2>
                        <h3>H3 title</h3>
                        <h4>H4 title</h4>
                        <h5>H5 title</h5>
                        <h6>H6 title</h6>
                
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nisi.</p>
                        <a href="#">This is link</a>
                        <strong>This is strong</strong>
                        <ul>
                            <li>UL list item 1</li>
                            <li>UL list item 2</li>
                            <li>UL list item 3</li>
                        </ul>
                        <ol>
                            <li>UL list item 1</li>
                            <li>UL list item 2</li>
                            <li>UL list item 3</li>
                        </ol>
                        <?php
                            $buttonType="link";
                            $href="https://www.google.com/";
                            $target="_blanc";
                            $text="Go to Google";
                            include "./partials/elements/components/button.php";
                        ?>
                        <button class="button button-off--primary">Button off primary</button> <br> <br>
                        <a href="#" class="button button-off--primary">Button off primary link</a> <br> <br>
                        <button class="button button-off--secondary">Button off secondary</button> <br> <br>
                        <a href="#" class="button button-off--secondary">Button off secondary link</a> <br> <br>
                        <button class="button button-off--tertiary">Button off tertiary</button> <br> <br>
                        <a href="#" class="button button-off--tertiary">Button off tertiary link</a> <br> <br>
                        <button class="button button-bubbles--primary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey primary
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </button> <br> <br>
                        <a href="#" class="button button-bubbles--primary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey primary link
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </a> <br> <br>
                        <button class="button button-bubbles--secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey secondary
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </button> <br> <br>
                        <a href="#" class="button button-bubbles--secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey secondary link
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </a> <br> <br>
                        <button class="button button-bubbles--tertiary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey tertiary
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </button> <br> <br>
                        <a href="#" class="button button-bubbles--tertiary">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="gooey">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                        <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                            Button gooey tertiary link
                            <span class="bubbles">
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                                <span class="bubble"></span>
                            </span>
                        </a> <br> <br>
                        
                        <div class="input-wrapper">
                            <input type="text" id="first-name">
                            <label for="first-name">First Name *</label>
                        </div>
                        
                        <div class="input-wrapper">
                            <textarea id="message"></textarea>
                            <label for="message">Message *</label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        </main> <!-- Main end -->


        <!-- Footer -->
        <?php include 'partials/elements/footer.php';?>

        <!-- Postfooter -->
        <?php include 'partials/elements/postfooter.php';?>

    </div> <!-- Page wrapper end -->

    <!-- Scripts -->
    <?php include 'partials/resources/scripts.php';?>

</body>

</html>
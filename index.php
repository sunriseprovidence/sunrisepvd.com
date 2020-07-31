<!DOCTYPE html>

<?php
    $title = "Home";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://www.sunrisepvd.com/";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>

        <!-- Set up Open Graph Protocol -->
        <meta property="og:site_name" content="Sunrise RI">
        <meta property="og:title" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.sunrisepvd.com/" />
        <meta property="og:image" content="assets/photos/strike_street.jpg" />
        <meta property="og:description" content="Sunrise Providence is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">

        <!-- Link local stylesheet -->
        <link rel="stylesheet" type="text/css" href="/assets/css/index.css">

    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class='background bg-image' style="background-image: url('/assets/images/photos/sep-strike-gs.jpg');">
                <div class='container splash'>
                    <div class='layout wide'>
                        <!--<div class='countdown-wrapper'>
                            <div class='unit-wrapper'>
                                <div class='digits-wrapper'>
                                    <div class='digit-wrapper' id='day-tens'>0</div>
                                    <div class='digit-wrapper' id='day-ones'>0</div>
                                </div>
                                <div class="digits-label" id='day-label'>DAYS</div>
                            </div>
                            <div class='unit-wrapper'>
                                <div class='digits-wrapper'>
                                    <div class='digit-wrapper' id='hour-tens'>0</div>
                                    <div class='digit-wrapper' id='hour-ones'>0</div>
                                </div>
                                <div class="digits-label" id='hour-label'>HOURS</div>
                            </div>
                            <div class='unit-wrapper'>
                                <div class='digits-wrapper'>
                                    <div class='digit-wrapper' id='minute-tens'>0</div>
                                    <div class='digit-wrapper' id='minute-ones'>0</div>
                                </div>
                                <div class="digits-label" id='minute-label'>MINUTES</div>
                            </div>
                            <div class='unit-wrapper'>
                                <div class='digits-wrapper'>
                                    <div class='digit-wrapper' id='second-tens'>0</div>
                                    <div class='digit-wrapper' id='second-ones'>0</div>
                                </div>
                                <div class="digits-label" id='second-label'>SECONDS</div>
                            </div>
                        </div>-->
                        <h1>Fossil fuel billionaires are stealing our future. We're fighting back.</h1>
                    </div>
                    <div class='layout medium'>
                        <h3 class='text-align-center'>We're building an army of young people in Rhode Island to stop climate change and create thousands of good jobs in the process.</h3>
                    </div>
                    <div class='layout medium'>
                        <div class="center-contents">
                            <a class='button translucent spaced' href='/get-involved/'>Join the Movement</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class='background light'>
                <div class='container'>
                    <div class='layout wide'>
                        <h2>We demand climate justice</h2>
                    </div>
                    <div class='layout wide pair'>
                        <div class='first-on-mobile'>
                            <p>The climate crisis is already happening right here in Rhode Island. Extreme weather events are growing more intense, shifting ocean conditions are affecting fishing stocks, and asthma rates from fossil fuel pollution are among the worst in the country. Across the board, it's indigenous people, people of color, and poor and working people who are bearing the brunt of the climate crisis.</p>
                            <p>The youth of Rhode Island have had enough. The climate crisis is happening now, but it's young people who will face its worst effects. <span class="text-bold">We demand a Green New Deal for Rhode Island that will create thousands of good jobs and ensure a livable future for all.</span></p>
                        </div>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/sep-strike.jpg'>
                        </div>
                    </div>
                    <div class='layout wide'>
                        <div class="center-contents">
                            <a class='button yellow' href='/get-involved/'>Join Us</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class='background magenta'>
            <div class='container'>
                <div class='layout wide'>
                    <h2>The Green New Deal</h2>
                </div>
                <div class='layout wide pair'>
                    <div>
                        <p>We've had decades of politicians advocating for small, gradual change and trusting corporations to do the right thing. It hasn't worked.</p>
                        <p>The Green New Deal is a ten-year mobilization that addresses the climate crisis at the scale that science and justice demand. The Green New Deal means transitioning to 100% renewable energy, creating millions of good-paying green jobs, investing in our nation's infrastructure, building out world-class public transportation, protecting frontline communities, and ensuring a livable future for all.</p>
                    </div>
                    <div class='img-wrapper first-on-mobile'>
                        <img src='assets/images/photos/gnd-vision.jpg'>
                    </div>
                </div>
                <div class='layout narrow'>
                    <h3>A Message From the Future with Alexandria Ocasio-Cortez</h3>
                    <div class='center-contents vid-wrapper'>
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/d9uTH0iprVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class='layout wide'>
                    <div class="center-contents">
                        <a class='button yellow' href='https://www.sunrisemovement.org/green-new-deal' target='_blank'>More About the Green New Deal</a>
                    </div>
                </div>
            </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>

    </body>
    <script src='assets/js/countdown.js'></script>

</html>

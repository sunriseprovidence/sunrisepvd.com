<!DOCTYPE html>

<?php
    $title = "Template";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://www.sunrisepvd.com/template.php";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>

        <!-- Set up Open Graph Protocol -->
        <meta property="og:title" content=<?php echo $title . 'Sunrise RI' ?>>
        <meta property="og:site_name" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.sunrisepvd.com/" />
        <meta property="og:image" content="/assets/images/photos/strike-color.jpg" />
        <meta property="og:description" content="Sunrise Providence is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">

        <!-- Link local stylesheet -->
        <!--<link rel="stylesheet" type="text/css" href="/assets/css/template.css">-->

    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class="background light">
                <div class="container">
                    <div class="layout narrow">
                        <h2>Privacy Policy</h2>
                        <h4>What we do with information you give to us.</h4>
						<p>We may use the information you give us to contact you about Sunrise Providence PAC and related topics. We may also use aggregate data to inform decisions about organizational decisions.</p>
						<h4>What we do not do with information you give to us.</h4>
						<p>We will never sell your information to third parties.</p>
						<h4>Who owns the data you give to us.</h4>
						<p>The information you give us belongs to Sunrise Providence PAC, a state-level political action committee based in Rhode Island. If you'd like to stop receiving emails from Sunrise Providence PAC, please click the unsubscribe button at the bottom of an email from us. If you'd like to stop receiving texts from us, reply STOP to a recent text. Your information will still remain in our database. Please note that if you resubscribe, we will resume sending emails and/or texts to you. If you contact us at <a href="mailto:sunriseprovidence@gmail.com">sunriseprovidence@gmail.com</a> and ask for your information to be removed from our database, we will make our best efforts to do so.</p>
						<h4>Sunrise Movement and Sunrise Providence PAC</h4>
						<p>The Sunrise Movement is a 501(c)4 organization based in Washington, DC. Sunrise Providence PAC is a state-level political action committee based in Rhode Island. Sunrise Providence PAC shares a name, brand, and history with the Sunrise Movement and our goals are the same: to win a Green New Deal. However, the two organizations are completely legally and financially independent.</p>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>

    </body>

</html>

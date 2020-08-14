<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profit Shield</title>
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/705cdaca30.js" crossorigin="anonymous"></script>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>



    <!-- Nav Bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <!-- Brand Name or Logo -->
        <a class="navbar-brand" href="#">
            <img src="images/1.png" width="75" height="60" alt="" loading="lazy">
            Profit Shield
        </a>
        <!-- Hamburger Menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link text-dark" href="#home">Home</a>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#about-us">About Us</a>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#services-1">Services</a>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#contact">Contact Us</a>
            </ul>
        </div>
    </nav>

    <!-- home section -->
    <section id="home">
        <div class="container-fluid">
                <div class="home-text">
                    <h1>Accounting & Tax Services </h1><br>
                    <a href="#contact"><button type="button" class="btn btn-danger btn-lg">Hire Us</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About us section -->
    <section id="about-us">
        <div class="container-fluid">
            <h1 class="about-decor">About Us</h1><br>
            <p>Profit Shield is a business solution firm based in Kanpur, providing Tax Consultancy, Project financing,
                Book Keeping, and Digital Signatures for business solutions.</p><br>
            <h2>Our Vision</h2><br>
            <p>Our goal as an organisation is to deliver high quality financial services to our clients. Since
                our client is important to us, we provide individual attention to each of them by giving unique solution
                and satisfaction. </p>
        </div>
    </section>

    <!-- service section -->
    <section id="services-1">
        <div class="container-fluid">
              
        </div>
    </section>

    <section id="services-2">
        <div class="container-fluid">
            <div class="row">
                <div class="service-box col-lg-6">
                    <span><i class="icon fas fa-hand-holding-usd fa-8x"></i></span><br>
                    <button class="btn btn-lg btn-dark" type="button">Tax Consulting</button>
                </div>

                <div class=" col-lg-6">
                    <p>Getting PAN, Getting TAN, Filing of IT Returns, e-Filing of TDS Returns, Tax refunds,
                        Consultancy on Tax Planning & Savings, Obtaining GST Registration,
                        Preparation of GST returns, Online Monthly / Quarterly / Annual GST e-Filing
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services-3">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-lg-6">

                    <p>
                        The services we provide are financing for new operations, expansion, diversification,
                        modernization, or any venture that you might need funding.
                    </p>
                </div>

                <div class="service-box col-lg-6">
                    <i class="icon2 fas fa-money-check-alt fa-8x"></i><br>
                    <button class="btn btn-lg btn-dark" type="button">Project Financing</button>
                </div>
            </div>
        </div>
    </section>

    <section id="services-4">
        <div class="container-fluid">
            <div class="row">
                <div class="service-box col-lg-6">
                    <i class="icon3 fas fa-book fa-8x"></i><br>
                    <button class="btn btn-lg btn-dark" type="button">Book Keeping</button>
                </div>

                <div class="col-lg-6">
                    <p>Bookkeeping services are necessary for all businesses to ensure accurate operational / financial
                        information.
                        Such information is required by Management, Regulators, and Investors.
                        Also, it is a legal requirement for any business to maintain an appropriate
                        book of accounts to ensure that all relevant taxes are paid and tax filings are made on time.
                    </p>

                    <p>We help in managing your books of accounts by setting up key performance indicators for your
                        business and measure them timely.
                        This ensures that we keep you updated on your business developments and know the areas of
                        improvements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services-5">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-lg-6">
                    <p>
                        <span style="color: blue;font-weight:bold">Class 2 DSC :</span> This certificate is used to file
                        ITR returns for individual and organisation.
                        For applying on ROC and other activities.
                    </p>

                    <p>
                        <span style="color: blue;font-weight:bold">Class 3 DSC :</span> This certificate is best for all
                        types e-Tender and
                        filing ITR. It is also good for document signing and lock sounds.
                    </p>

                    <p>
                        <span style="color: blue;font-weight:bold">DGFT DSC :</span> This digital certificate is
                        required to digitally sign a document in electronic format
                        or for transactions being performed through a web server.
                    </p>
                </div>

                <div class="service-box col-lg-6">
                    <i class="icon4 fas fa-signature fa-8x"></i><br>
                    <button class="btn btn-lg btn-dark" type="button">Digital Signature</button>
                </div>
            </div>
        </div>
    </section>


    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="service-box col-lg-6">
                    <h1>Contact Us</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                name="email">
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label><br>
                            <textarea class="form-control" id="message" placeholder="Write something.." name="message"
                                row="4" required></textarea>
                        </div>
                        <br>
                        <button type="submit" name="submit" value="send" class="btn btn-danger">Submit</button>
                    </form>
                </div>

                <div class="service-box col-lg-6 col-auto map-responsive">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.825410802957!2d80.31741641473046!3d26.493565683309903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c39a46b688697%3A0x9b0001dff8523810!2sPankaj%20Khanna%20%26%20Associates!5e0!3m2!1sen!2sin!4v1596970305296!5m2!1sen!2sin"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>

            <br>
            <br>

            <div class="row">
                <div class="service-box col-lg-6">
                    <h6>Contact Details</h6>
                    <address>
                        <a class="external-link" href="mailto:contact@profitshield.in">contact@profitshield.in</a><br>
                        <a class="external-link" href="tel:+91 9565117733">+91 95651 17733</a>
                    </address>
                </div>

                <div class="service-box col-lg-6">
                    <h6>Address</h6>
                    <p>4/278 B, Sudham Vishnupuri<br> Kanpur Nagar <br>
                        Uttar Pradesh - 208002
                    </p>

                </div>

            </div>
        </div>
    </section>


    <!-- Footer section -->

    <footer id="footer">
        <div class="container-fluid">
            <p>© 2020 Profit Shield. All Right Reserved.</p>
        </div>
    </footer>

    <!--contact section end-->

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>
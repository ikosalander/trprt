<?php
include 'head.php';
include 'nav.php';
?>
<body>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact</h1>

<!--         <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol> -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68399.04932967601!2d2.7690882545882847!3d50.42443017360022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd304672a16def%3A0x9a695bd5aabd2a12!2s6+Rue+Fran%C3%A7ois+Hennebicque%2C+62300+Lens!5e0!3m2!1sfr!2sfr!4v1455709745039"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Coordonnées</h3>
                <p>
                    6 rue françois Hennebicque
                    <br>Lens 62300
                    <br>
                </p>
                <p>
                    <abbr title="Phone">P</abbr>: + 33 3 21 28 00 28
                </p>
                <p>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com"> ??????
                    </a>
                </p>
                <p>
                    <abbr title="Hours">H</abbr>: Lundi - Vendredi: 8h à 19h
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Envoyez nous un message</h3>
                <form name="sentMessage" id="contactForm" method="post" action="contactPost.php" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>nom complet:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>téléphone:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php
include 'footer.php';
?>

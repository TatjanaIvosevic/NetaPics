<?php
header("Content-Security-Policy: default-src 'self' https://code.jquery.com/ https://stackpath.bootstrapcdn.com/");
/*
Polisa bezbednosti saobraćaja
https://content-security-policy.com/
https://content-security-policy.com/examples/htaccess/

Content-Security-Policy (abbreviated CSP) is the name of a HTTP response header that modern browsers use to enhance the
security of the document (or web page). The Content-Security-Policy header allows you to restrict how resources such as
JavaScript, CSS, or pretty much anything that the browser loads. CSP was first designed to reduce the attack surface of
Cross Site Scripting (XSS) attacks, later versions of the spec also protect against other forms of attack such as Click
Jacking. CSP can be applied via html meta tag, but primarily is used as a HTTP response header.

It can be set through response headers functions in programming languages or it can be set within .htaccess file.
If you use HTTP response header with programming languages it is active in files where is included.
Usage of .htaccess file is better when you want to set parameters for the entire web page.
To prevent third party files to be loaded in our page we can set CSP header with PHP like

header("Content-Security-Policy: default-src 'self' https://code.jquery.com/ https://stackpath.bootstrapcdn.com/");

The default-src directive allows you to specify the default or fallback resources that can be loaded (or fetched) on the
 page (such as script-src , or style-src , etc.). Value 'self' refers to the origin from which the protected document is
 being served, including the same URL scheme and port number. If we need to use Javascript from another source besides
self’, we can list other domens, like jQuery or Bootstrap CDN (Content Delivery Network). If we put CSP protection code
in our file, web browser will not download the third party scripts. Results can be seen in web console of web browser
 under Network tab.

 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>First example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>XSS (Cross Site Scripting) example</h1>
            <p class=" pb-4 mb-4">
                Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into
                otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send
                malicious code, generally in the form of a browser side script, to a different end user. Flaws that
                allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from
                a user within the output it generates without validating or encoding it.
            </p>
            <form method="post" action="security.php" id="xssForm">
                <div class="form-group row">
                    <div class="col-sm-2"><label for="input">Input</label></div>
                    <div class="col-sm-10">

                        <textarea class="form-control" id="input" rows="3" name="input"></textarea>

                    </div>
                </div>
                <fieldset class="form-group ">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Protection</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="protection" id="protection1"
                                       value="yes">
                                <label class="form-check-label" for="protection1">
                                    YES
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="protection" id="protection2"
                                       value="no">
                                <label class="form-check-label" for="protection2">
                                    NO
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <button type="reset" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4 my-auto">
            <img src="web.jpg" alt="web" class="img-fluid">
        </div>
    </div>

    <div class="row">

        <?php

        $message = "";

        if (isset($_GET['m'])) {
            $m = (int)$_GET['m'];

            switch ($m) {
                case 1 :
                    $message = "Method is not allowed!";
                    break;


                case 2:
                    $message = "Please, enter data and choose a protection mode.";
                    break;
            }

            if (!empty($message)) {
                echo '<div class="alert alert-danger">';
                echo ' <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                echo $message;
                echo '</div>';
            }
        }

        setcookie('test', 'Subotica Tech');

        ?>

    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="include/script.js"></script>
</body>
</html>
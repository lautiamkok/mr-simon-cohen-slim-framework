<?php
// PSR 7 standard.
use Slim\Http\Request;
use Slim\Http\Response;
$app->get('/contact', function (Request $request, Response $response) {
    // Get an instance of the Twig Environment.
    $twig = $this->view;

    // From that get the Twig Loader instance (file loader in this case).
    $loader = $twig->getLoader();

    // Add the module template and additional paths to the existing.
    $loader->addPath('templates/contact/');

    // Render.
    $response->getBody()->write(
        $twig->render('index.html', ['current' => 'contact'])
    );

    return $response;
});

$app->post('/contact', function (Request $request, Response $response) {

    $data = $request->getParsedBody();

    // https://bootstrapbay.com/blog/working-bootstrap-contact-form/
    if (isset($data["submit"])) {
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $human = $data['g-recaptcha-response'];

        $errName = null;
        $errEmail = null;
        $errMessage = null;
        $errHuman = null;
        $ok = null;
        $fail = null;

        // Check if name has been entered
        if (!$name) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$message) {
            $errMessage = 'Please enter your message';
        }

        //Check if simple anti-bot test is correct
        if (!$human) {
            $errHuman = 'You must complete the captcha to submit.';
        } else {
            // Google recaptcha integration.
            // https://developers.google.com/recaptcha/intro
            // https://github.com/google/recaptcha
            // https://github.com/google/recaptcha/blob/master/examples/example-captcha.php
            // https://codeforgeek.com/2014/12/google-recaptcha-tutorial/

            // Get your own secret key from https://developers.google.com/recaptcha
            $secret = "XXXXXXX";

            $gRecaptchaResponse = $human;
            $remoteIp = $_SERVER["REMOTE_ADDR"];

            $recaptcha = new \ReCaptcha\ReCaptcha($secret);
            $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
            if ($resp->isSuccess()) {
                // verified!
            } else {
                // error!
                $errHuman = 'Your captcha verification failed.';
            }
        }

        // Mailer variables.

        // Receiver's email.
        $to = 'simon@mrsimoncohen.com';

        // // Keep this for testing.
        // $to = 'lau.thiamkok@googlemail.com';

        $subject = "Message from Contact | Mr Simon Cohen ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "From: ". $name . " <". $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail($to, $subject, strip_tags($message), $headers)) {
                $ok = 'Thank you for leaving your mark. I will be in touch soon.';
            } else {
                $fail = 'Sorry there was an error sending your message. Please try again later.';
            }
        }
    }

    // Get an instance of the Twig Environment.
    $twig = $this->view;

    // From that get the Twig Loader instance (file loader in this case).
    $loader = $twig->getLoader();

    // Add the module template and additional paths to the existing.
    $loader->addPath('templates/contact/');

    // Render.
    $response->getBody()->write(
        $twig->render('index.html', [
            'current' => 'contact',
            'errName' => $errName,
            'errEmail' => $errEmail,
            'errMessage' => $errMessage,
            'errHuman' => $errHuman,
            'ok' => $ok,
            'fail' => $fail,
        ])
    );

    return $response;
});


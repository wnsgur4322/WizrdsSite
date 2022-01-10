<?php declare(strict_types=1);


require_once(__DIR__ . "/../../model/contact-form/WizrdsContactForm.php");
require_once(__DIR__ . "/../../model/contact-form/WizrdsContactFormEmailGenerator.php");
require_once(__DIR__ . "/../../utils/email/WizrdsNotificationMailer.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        ob_start();
        $organization = $_POST["organization"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $productType = $_POST["productType"];
        $message = $_POST["message"];

        $wizrdsContactForm = new WizrdsContactForm($organization, $name, $email, $productType, $message);
        $wizrdsContactFormEmailGenerator = new WizrdsContactFormEmailGenerator($wizrdsContactForm);

        $htmlContent = $wizrdsContactFormEmailGenerator->getEmailHTML();
        $textContent = $wizrdsContactFormEmailGenerator->getEmailText();

        $wizrdsNotificationMailer = new WizrdsNotificationMailer(strval($name . " submitted a contact form!"), $htmlContent, $textContent);

        $wizrdsNotificationMailer->sendEmail();

        http_response_code(201);
        ob_end_clean();
        echo "Thank you for reaching out to Wizrds, " . $name . "! We will contact you soon...";
    } catch (Exception $err) {
        // set the response code if it hasn't already been set
        if (http_response_code() === 200) {
            http_response_code(400);
        }
        echo $err->getMessage();
    } 
}
?>
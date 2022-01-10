<?php declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

require_once(__DIR__ . "/../../utils/email/IMailable.php");
require_once(__DIR__ . "/../../utils/form/IForm.php");
require_once(__DIR__ . "/../../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require_once(__DIR__ . "/../../vendor/phpmailer/phpmailer/src/Exception.php");
require_once(__DIR__ . "/../../vendor/phpmailer/phpmailer/src/SMTP.php");
require_once(__DIR__ . "/../../env.php");

/** WizrdNotificationMailer is meant to send site notifications to Wizrds LLC when users do things on the site
 * (such as fill out a contact form).
 */
class WizrdsNotificationMailer implements IMailable {

    private $subject;
    private $htmlContent;
    private $altContent;

    public function __constructor(
        string $subject,
        string $htmlContent,
        string $altContent
    ) {
        $this->subject = $subject;
        $this->htmlContent = $htmlContent;
        $this->altContent = $altContent;

        $GLOBALS["subject"] = $subject;
        $GLOBALS["htmlContent"] = $htmlContent;
        $GLOBALS["altContent"] = $altContent;
    }
    // sends the email with the data in the constructor
    public function sendEmail(): void {
        try {
            $mailer = new PHPMailer();
            $mailer->isSMTP();
            $mailer->SMTPDebug = 2;
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = "ssl";
            $mailer->Host = $_ENV["EMAIL_HOST"];
            $mailer->Port = $_ENV["EMAIL_PORT"];
            $mailer->Username = $_ENV["CONTACT_EMAIL_SENDER_ADDRESS"];
            $mailer->Password = $_ENV["CONTACT_EMAIL_SENDER_PASSWORD"];   
            $mailer->setFrom($_ENV["CONTACT_EMAIL_SENDER_ADDRESS"], $_ENV["CONTACT_EMAIL_SENDER_NAME"]);
            $mailer->isHTML();
            $mailer->Subject = "Someone submitted a contact form!";
            $mailer->Body = $GLOBALS["htmlContent"];
            $mailer->AltBody = $GLOBALS["altContent"];
            foreach ($_ENV["CONTACT_EMAIL_RECEIVERS"] as $email => $name) {
                $mailer->addAddress($email, $name);
            }
            // attempt to send the email
            if (!$mailer->send()) throw new Exception("The server failed to send your request: " . $mailer->ErrorInfo);
            $GLOBALS["subject"] = null;
            $GLOBALS["htmlContent"] = null;
            $GLOBALS["altContent"] = null;
        } catch (PHPMailerException $err) {
            http_response_code(500);
            throw $err;
        } catch (Exception $err) {
            http_response_code(500);
            throw $err;
        }
    }
}

?>
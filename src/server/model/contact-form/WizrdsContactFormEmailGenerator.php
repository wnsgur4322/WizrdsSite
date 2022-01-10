<?php

require_once(__DIR__ . "/WizrdsContactForm.php");

/** WizrdsContactFormEmailGenerator generates an email message for notifying Wizrds LLC when a user submits
 * a contact form
 */
class WizrdsContactFormEmailGenerator {

    private $wizrdsContactFormData;
    private $timeOfDay;

    public function __construct(WizrdsContactForm $wizrdsContactForm) {
        $this->wizrdsContactFormData = $wizrdsContactForm->getFormData();
        $dateTime = new DateTime("now", new DateTimeZone("America/Los_Angeles"));
        $currentHour = intval($dateTime->format("H"));
        switch ($currentHour) {
            case $currentHour >= 0 && $currentHour < 12:
                $this->timeOfDay = "morning";
                break;
            case $currentHour >= 12 && $currentHour < 18:
                $this->timeOfDay = "afternoon";
                break;
            case $currentHour >= 18 && $currentHour <= 23:
                $this->timeOfDay = "evening";
                break;
        }
    }

    public function getEmailHTML() {
        $contactFormTemplatePath = __DIR__ . "/contact-form-template.html";
        $emailHTMLFile = fopen($contactFormTemplatePath, "r") or die("The server encountered an unexpected error.");
        $emailHTMLContent = fread($emailHTMLFile, filesize($contactFormTemplatePath));
        fclose($emailHTMLFile);
        // replace template names with actual names
        $emailHTMLContent = str_replace("@timeOfDay", $this->timeOfDay, $emailHTMLContent);
        $emailHTMLContent = str_replace("@name", $this->wizrdsContactFormData["name"], $emailHTMLContent);
        $emailHTMLContent = str_replace("@organization", $this->wizrdsContactFormData["organization"], $emailHTMLContent);
        $emailHTMLContent = str_replace("@email", $this->wizrdsContactFormData["email"], $emailHTMLContent);
        $emailHTMLContent = str_replace("@productType", $this->wizrdsContactFormData["productType"], $emailHTMLContent);
        $emailHTMLContent = str_replace("@message", $this->wizrdsContactFormData["message"], $emailHTMLContent);

        return $emailHTMLContent;
    }

    public function getEmailText() {
        return "Good " . strval($this->timeOfDay) . "!\r\n" . strval($this->wizrdsContactFormData["name"]) . " just submitted a Wizrds contact form! The content of their response is shown below:\r\n" . "Organization: " . strval($this->wizrdsContactFormData["organization"]) . "\r\nName: " . strval($this->wizrdsContactFormData["name"]) . "\r\nEmail: " . strval($this->wizrdsContactFormData["email"]) . "\r\nProduct Type: " . strval($this->wizrdsContactFormData["productType"]) . "\r\nMessage: " . strval($this->wizrdsContactFormData["message"]) . "\r\nThis message was sent using the automated Wizrds notification system.";
    }
}

?>
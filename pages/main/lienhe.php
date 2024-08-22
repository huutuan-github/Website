<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit to Send Email</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php
        if(!empty($_POST["send"])){
            $userName = htmlspecialchars($_POST["userName"]);
            $userEmail = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
            $userPhone = htmlspecialchars($_POST["userPhone"]);
            $userMessage = htmlspecialchars($_POST["userMessage"]);
            $toEmail = "tuan1278999@gmail.com";

            $subject = "Contact Form Submission from " . $userName;

            $mailHeaders = "From: " . $userName . "<" . $userEmail . ">\r\n";
            $mailHeaders .= "Reply-To: " . $userEmail . "\r\n";
            $mailHeaders .= "Content-type: text/plain; charset=UTF-8\r\n";
            $mailHeaders .= "Phone: " . $userPhone . "\r\n";
            $mailHeaders .= "Message:\r\n" . $userMessage . "\r\n";

            if(mail($toEmail, $subject, $userMessage, $mailHeaders)){
                $message = "Your information has been received successfully.";
            } else {
                $message = "There was an error sending your message. Please try again later.";
            }
        }
    ?>

<div class="form-container">
    <form method="post" name="emailContact">
        <div class="input-row">
            <label>Name <em>*</em></label>
            <input type="text" name="userName" required>
        </div>
        <div class="input-row">
            <label>Email <em>*</em></label>
            <input type="email" name="userEmail" required>
        </div>
        <div class="input-row">
            <label>Phone <em>*</em></label>
            <input type="tel" name="userPhone" required>
        </div>
        <div class="input-row">
            <label>Message <em>*</em></label>
            <textarea name="userMessage" required></textarea>
        </div>
        <div class="input-row">
            <input type="submit" name="send" value="Submit">
            <?php  if(!empty($message)){ ?>
            <div class="success">
                <strong><?php echo $message; ?></strong>
            </div>
            <?php } ?>
        </div>
    </form>
</div>

</body>
</html>
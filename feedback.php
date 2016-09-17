<?php
require_once 'header.php';



if (isset($_POST['btn-new-question']) and $_POST['url'] == ""){
	$question = htmlspecialchars($_POST['question']);
	contactmail($question);
}

function contactmail($question){
	$mail_to = "hello@gonimo.com";
	$email_from = "noreply@gonimo.com";
	$headers    = array
    (
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=utf-8; format=flowed;',
        'Content-Transfer-Encoding: 8-bit',
        'Date: ' . date('r', $_SERVER['REQUEST_TIME']),
        'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>',
        'From: ' . $email_from,
        'Reply-To: ' . $email_from,
        'Return-Path: ' . $email_from,
        'X-Mailer: PHP v' . phpversion(),
        'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'],
    );
	$headers = implode("\r\n",$headers);
	$subject = "Eine neue Frage";
	$message = "Es wurde eine neue Frage gestellt: \r \n \r \n ".$question;
	
	mail ($mail_to,'=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
	header("Location: index.php?msg=question");
}


?>

<title>Gonimo: Feedback</title>
<div class="container">
<p> hier kommt dann unsere Feedback-Umfrage hin und vielleicht ein Textfeld zum Fragen stellen.<br>
</p>
<form action="" method="post" name="new-question">
<div class="form-group">
<label for="round"> Frage </label>
<input type="text" name="question" id="question" required class="form-control" placeholder="Hier kannst du uns eine Frage stellen...">
<input class="url" type="text" name="url" placeholder="url" maxlength="30" size="30">
</div>
<button class="btn btn-block btn-success" type="submit" name="btn-new-question">Eine Frage stellen</button>
</form>

</div>

</div>

<?php include 'footer.php'; ?>
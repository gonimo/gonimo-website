<?php
//escape Input
function esc_sql($stringtoescape, $con){
	return trim(mysqli_real_escape_string($con,htmlspecialchars($stringtoescape, ENT_QUOTES)));
};

//contactmail
function contactmail($name, $mail, $subject, $press, $message, $successmsg){
	$mail_to = "hello@gonimo.com";
	$email_from = $mail;
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
	if ($press == true){
		array_push($headers,'X-Priority: 1 (Highest)', 'X-MSMail-Priority: High','Importance: High');
	}
	
	$headers = implode("\r\n",$headers);
	$subject = "Kontaktformular: ".$subject;
	
	if ($press == true){
	$message = $name." schrieb am ".date("r",time())." folgende Anfrage über das Presseformular auf gonimo.com \r \n \r \n".$message."\r\n \r\nEND OF TRANSMISSION";
	}else{
	$message = $name." schrieb am ".date("r",time())." folgende Nachricht über das Kontaktformular auf gonimo.com \r \n \r \n".$message."\r\n \r\nEND OF TRANSMISSION";
	}	
		
	$success = mail ($mail_to,'=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
    $mailpath = "/var/lib/nginx/gonimo-landingPage/mails-backup/".date("y-m-d")."-".$mail.".txt"; //path and file for backup
    $mailfile = fopen($mailpath, "a"); //create file
    if ($mailfile == false and $success == false){
            syslog(LOG_CRIT, "Backup mail failed too. Now thats a real problem"); //error log for backupfile
            echo ("<SCRIPT>
                window.alert('Sending your mail failed!');
                </SCRIPT>");
    }
    else {
        fwrite($mailfile, "To: hello@gonimo.com\n");
        fwrite($mailfile, "From: " . $email_from . "\n");
        fwrite($mailfile, "Subject: " . $subject . "\n\n");
        fwrite($mailfile, $message); //write to file
        fclose($mailfile); //close file
         if ($press == true){
            echo ("<SCRIPT>
        window.alert('".$successmsg."');
		window.location.href='/kontakt.php?press=true';
        </SCRIPT>");
        }else{
            echo ("<SCRIPT>
        window.alert('".$successmsg."');
		window.location.href='/index.php';
        </SCRIPT>");
        }
    }
}

?>
<?php
// recaptcha-SECRETS GO HERE
$captchasecret = "";
$captchasitekey = "";

// TEst localhost
//$captchasecret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
//$captchasitekey = "6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI";

//db
$dbhost = "localhost"; //server adress
$dbname = "gonimo"; //database name
$dbuser = "root"; //database user
$dbpass = "";	//database secret

/*
create DB:

CREATE TABLE `gonimo`.`feedback` ( `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , `overall` TINYINT NULL , `operation` TINYINT NULL, `functions` TINYINT NULL , `missing` TEXT NULL, `app` BOOLEAN NOT NULL DEFAULT TRUE, `price` DECIMAL NULL, `usecase` TEXT NULL , `location` TEXT NULL , `message` VARCHAR(2200) NULL , `recommend` BOOLEAN NOT NULL DEFAULT FALSE , `publish` BOOLEAN NOT NULL DEFAULT FALSE ,`src` TEXT NULL, `time` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`ID`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_bin;

use ?src= GET-Variable to specify source of survey-link.

*/

?>
<?php
if (empty($_REQUEST['name'])) {
//	die('<div id="email-div" class="form-group has-error has-feedback"><input class="form-control has-error has-feedback" name="name" placeholder="Name" type="text"></div><input class="form-control" name="email" placeholder="Email" type="email" ic-post-to="/contact/email" ic-target="closest div" ic-replace-target="true" ic-indicator="#email-ind"><textarea class="form-control" name="form_message" placeholder="Message" rows="5"></textarea> <input class="btn btn-primary btn-lg" name="Submit" type="submit" value="Submit">');
	die('<div class="alert alert-danger fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>[ERROR]:</strong> Please enter your name.</div><div id="email-div" class="form-group has-error has-feedback"><input class="form-control has-error has-feedback" name="name" placeholder="Name" type="text"></div><input class="form-control" name="email" placeholder="Email" type="email" ic-post-to="/contact/email" ic-target="closest div" ic-replace-target="true" ic-indicator="#email-ind"><textarea class="form-control" name="form_message" placeholder="Message" rows="5"></textarea> <input class="btn btn-primary btn-lg" name="Submit" type="submit" value="Submit">');
}
if (empty($_REQUEST['email'])) {
	die('<div class="alert alert-danger fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>[ERROR]</strong> Please enter a valid email address.</div><input class="form-control" name="name" placeholder="Name" type="text"><div id="email-div" class="form-group has-error has-feedback"><input class="form-control has-error" name="email" placeholder="Email" type="email" ic-post-to="/contact/email" ic-target="closest div" ic-replace-target="true" ic-indicator="#email-ind"></div><textarea class="form-control" name="form_message" placeholder="Message" rows="5"></textarea> <input class="btn btn-primary btn-lg" name="Submit" type="submit" value="Submit">');
}

if (!empty($_REQUEST['name']) && !empty($_REQUEST['email'])) {
//	$to      = 'jeshmurphy@gmail.com';
	$to = 'joe@ill.cc';
	$subject = 'Someone from JESMAKES has contacted you with:';
	$message = $_REQUEST['name'].'('.$_REQUEST['email'].') contacted you with the following: '.$_REQUEST['form_message'];
	$headers = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);

die('<div style="color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; margin-top:18px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Thanks for reaching out! I\'ll get back to you soon.</div>');
}

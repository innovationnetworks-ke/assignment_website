<?php include 'includes/header.php'; ?>
<?php 
    if(isset($_POST['submit']))
    {  
        $message = "<strong>Dear $_POST[name],</strong><br />
                    <strong>Your Email ID is :</strong> $_POST[email]<br />
                    <strong>Subject :-</strong> $_POST[subject]<br/>
                    <strong>Message :-</strong> $_POST[message]
                    ";
        
        sendmail("ngugidavid1001@gmail.com","Assign Helper",$message);
        
    }
?>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="h3">
                    To Contact us ,Fill the form Below</h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="NULL" selected="">Choose One:</option>
                                <option value="Inquiry">Inquiry</option>
                                <option value="assignment tracking">assignment Tracking</option>
                                <option value="Order assignment">Order assignment</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php
// include("includes/footer.php");
function sendmail($toaddress,$subject,$message)
{
	require 'phplist3-master/public_html/lists/admin/PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug = 0;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'ngugidavid1001@gmail.com';                 // SMTP username
	$mail->Password = 'Shadow-walker1';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->From = 'ngugidavid1001@gmail.com';
	$mail->FromName = 'Web Mall';
	$mail->addAddress($toaddress, 'assignment helper');     // Add a recipient
	$mail->addAddress($toaddress);               // Name is optional
	$mail->addReplyTo('ngugidavid1001@gmail.com', 'Information');
	$mail->addCC('ngugidavid46@gmail.com');
	$mail->addBCC('ngugidavid1001@gmail.com');
	
	// $mail->addAttachment('hmss/images/deantal3.png');         // Add attachments
	// $mail->addAttachment('hmss/images/deantal3.png', 'new.png');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = $subject;
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
	}
}
?>
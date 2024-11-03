<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css"
    integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap JS -->
<script src="bootstrap.bundle.min.js"></script>



<div class="container-fluid " id="container">
    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-3"></div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-5 border shadow">
            <?php

            $connect = mysqli_connect("localhost", "root", "", "website");

            $name = $_POST['username'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $password = $_POST['newpassword'];
            $address = $_POST['address'];
            $image = $_FILES['profileImage']['name'];
            $uploadDirectory = "upload1/";

            // Create the directory if it doesn't exist
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            move_uploaded_file($_FILES['profileImage']['tmp_name'], $uploadDirectory . $image);

            //generate otp
            $otp = rand(1000, 9999);

            // Set the timezone to your desired timezone
            date_default_timezone_set('Asia/Kathmandu');

            // Get the current date and time
            $currentTime = date('H:i:s');


            mysqli_query($connect, "insert into otp values('$email','$otp','$currentTime')");

            $selected = mysqli_query($connect, "select create_time from otp where email='$email'");

            $result = $selected->fetch_assoc();

            

            // mysqli_query($connect, "delete from otp where email='$email' and create_time <='$deleteTime' ");
            




            



            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            require ('.\mailer\PHPMailer.php');
            require ('.\mailer\SMTP.php');
            require ('.\mailer\Exception.php');
            $mail = new PHPMailer();
            try {
                // Server settings
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'skohar098@rku.ac.in'; // SMTP username//sender mail id
                $mail->Password = 'rku123@@'; // SMTP password // sender mail id password
                $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, ssl also accepted
                $mail->Port = 465; // TCP port to connect to
                // $mail->SMTPDebug = 2;
            
                // Recipients
                $mail->setFrom('skohar098@rku.ac.in', 'shopEasy'); // Sender's email address and name
                $mail->addAddress($email, $name); // Recipient's email address and name
            
                // Attachments
                //$mail->addAttachment('/path/to/attachment/file.pdf', 'Attachment.pdf'); // Path to the attachment and optional filename
            



                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'Otp autentication';
                $mail->Body = 'Your mail verification code Is ' . $otp;



                // Send the email
                $mail->send();
            } catch (Exception $e) {
                echo "Email sending failed. Error: {$mail->ErrorInfo}";
            }

            ?>
            <form action="registration.php" method="post" id="form2.1">
                <a href="<?= "$current_page" ?>"><button type="button" class="btn-close" style="float: right;"
                        aria-label="Close"></button></a>


                <input type="hidden" name="username" value="<?= $name ?>">
                <input type="hidden" name="email" value="<?= $email ?>">
                <input type="hidden" name="gender" value="<?= $gender ?>">
                <input type="hidden" name="contact" value="<?= $contact ?>">
                <input type="hidden" name="address" value="<?= $address ?>">
                <input type="hidden" name="password" value="<?= $password ?>" id="">
                <input type="hidden" name="profileImage" value="<?= $image ?>">

                <!-- Add other hidden fields as needed for verification -->
                <div class="form-group">
                    <label for="otp">OTP:</label>
                    <input type="number" class="form-control" id="register_otp" name="otp"
                        placeholder="Please enter the OTP" required>
                    <div id="otp_err" style="color:red"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block" name="verify">Verify</button>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary btn-block">Resend</button>
                    </div>
                </div>
            </form>

            <?php

            session_start();

            $result = mysqli_query($connect, "select * from otp where email='$email' and create_time='$currentTime'");
            $otp = $result->fetch_assoc();
            $set_otp = $otp['otp'];
            ?>
            <script>
                // Function to validate OTP length
                function validateOTP() {
                    var otpInput = document.getElementById('register_otp');
                    var otpValue = otpInput.value.trim();

                    if (otpValue.length !== 4 || isNaN(otpValue)) {
                        document.getElementById('otp_err').innerHTML = "OTP must be a 4-digit number.";
                        return false;
                    } else if (otpValue != <?= "$set_otp" ?>) {
                        document.getElementById('otp_err').innerHTML = "Incorrect OTP";
                        return false;
                    }
                    else {
                        document.getElementById('otp_err').innerHTML = "";
                        return true;
                    }
                }

                // Add an event listener to the form submission
                document.getElementById('form2.1').addEventListener('submit', function (event) {
                    if (!validateOTP()) {
                        event.preventDefault(); // Prevent form submission if OTP is invalid
                    }
                });
            </script>



        </div>
        <div class="col-sm-2 col-md-2 col-lg-3"></div>

    </div>


</div>

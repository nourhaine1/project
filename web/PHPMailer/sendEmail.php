



            <?php
            use PHPMailer\PHPMailer\PHPMailer;

            echo "balallalalalaa";
          
            use PHPMailer\PHPMailer\SMTP;
            if (isset($_POST['submitForm'])){
               echo ("*****************************");
            if (isset ($_POST['nameForm'])&& isset($_POST['emailForm'])){
               echo  $_POST['emailForm'];
            $nom=$_POST['nameForm'];
            $email=$_POST['emailForm'];
            $message=$_POST['text'];
            $subject=$_POST['subject'];


            require_once 'Exception.php';
            require_once 'PHPMailer.php';
            require_once 'SMTP.php';


            $mail=new PHPMailer();
            //SMTP SETTINGS
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->SMTPAuth=true;
            $mail->Username="wieisetbizerte@gmail.com";
            $mail->Password="wie123456";
            $mail->Port=465;
            $mail->SMTPSecure="ssl";
            //EMAIL SETTINGS
            $mail->isHTML($isHtml=true);
            $mail->setFrom($email,$nom);
            $mail->addAddress("wieisetbizerte@gmail.com");
            $mail->Body = $subject . " ". $message;

            if ($mail->send()) {
                header ('location:sendSuccess.php');
            
            } 
            else {
                $status = "oooopppss !!";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }
            }

            }
            ?>

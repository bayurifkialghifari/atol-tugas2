<?php

    namespace App\Liblaries;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    Class Email
    {
        /**
        * @param
        * 
        * Email parameter
        *
        */
        private static $host        = 'smtp.gmail.com';
        private static $username    = '';
        private static $password    = '';
        private static $from        = array();
        private static $to          = array();
        private static $reply_to    = array();
        private static $cc          = '';
        private static $bbc         = '';
        private static $subject     = '';
        private static $body        = '';
        private static $altBody     = '';
        private static $attachments = '';
        private static $attach_name = '';
        private static $port        = 465;

        /**
        * @var
        * 
        * Set host
        *
        */
        public function set_host($host)
        {
            self::$host             = $host;
        }

        /**
        * @param
        * 
        * Set username
        *
        */
        public function set_username($username)
        {
            self::$username         = $username;
        }

        /**
        * @param
        * 
        * Set password
        *
        */
        public function set_password($password)
        {
            self::$password         = $password;
        }

        /**
        * @param
        * 
        * Set port
        *
        */
        public function set_port($port)
        {
            self::$port             = $port;
        }

        /**
        * @param
        * 
        * Get host
        *
        */
        public function get_host()
        {
            return self::$host;
        }

        /**
        * @param
        * 
        * Get username
        *
        */
        public function get_username()
        {
            return self::$username;
        }

        /**
        * @param
        * 
        * Get password
        *
        */
        public function get_password()
        {
            return self::$password;
        }

        /**
        * @param
        * 
        * Get port
        *
        */
        public function get_port()
        {
            return self::$port;
        }

        /**
        * 
        * Execute
        *
        */
        public function send($config = array())
        {
            /**
            * 
            * Instance class PHPMailer
            *
            */
            $mail                   = new PHPMailer();

            try
            {
                $mail->SMTPDebug        = SMTP::DEBUG_SERVER;
                $mail->isSMTP();

                /**
                * 
                * Server setting
                *
                */
                $mail->Host             = self::get_host();                    
                $mail->SMTPAuth         = true;                                   
                $mail->Username         = self::get_username();                     
                $mail->Password         = self::get_password();                           
                $mail->SMTPSecure       = PHPMailer::ENCRYPTION_SMTPS; // 587; `PHPMailer::ENCRYPTION_STARTTLS`
                $mail->Port             = self::get_port();

                /**
                * 
                * Recipients setting
                *
                */
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');

                // Attachments
                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject          = 'Here is the subject';
                $mail->Body             = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody          = 'This is the body in plain text for non-HTML mail clients';

                // $mail->send();
                var_dump($mail);
                exit;
            }
            catch(Exception $e)
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                die();                
            }
        }
    }

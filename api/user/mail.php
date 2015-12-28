<?php 
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-f072d7101a44f36296fe44d1635c581d');
$domain = "sandboxac6a2ff600324f7ba26dd015de184b0b.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'liangchekuei <xu65k6djo6@gmail.com>',
                        'to'      => $_POST['name'] . ' <' . $_POST['email'] . '>',
                        'subject' => 'Hello ' . $_POST['name'],
                        'text'    => 'Congratulations ' . $_POST['name'] . ', you have registed in message board. To activate your account please click this "127.0.0.1:8000/messageboard/vertify.php"'));
echo "please open your email to vertify your account";
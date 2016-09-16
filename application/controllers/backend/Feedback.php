<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
	public function index()
    {
        echo "Feedback Test (eg: email, telegram notification)";
    }

    public function email()
	{
        /*
        simulakra.net/cpanel
        simuaus1
        sim18546

        hello@simulakra.us
        sim18546
        */

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.simulakra.us',
            'smtp_port' => 587,
            'smtp_user' => 'hello@simulakra.us',
            'smtp_pass' => 'sim18546',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $emailto = 'fadelsaldy@gmail.com';
        $emailcc = 'rhezaaditya10@yahoo.com, dwiyantosaputra@gmail.com';
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('hello@simulakra.us', 'Simulakra Feedback');
        $this->email->to($emailto);
        $this->email->cc($emailcc);
        $this->email->subject('Test Automatic Email');
        $body = 'This is only test email & telegram feedback notification, Ntapz.';
        $this->email->message($body);
        if($this->email->send()) {
            $this->telegram('send', $body);
            return true;
        } else {
            print_r($this->email->print_debugger());  
        }
	}

    public function telegram($parameter, $body_message = null)
    {
        require_once(APPPATH.'libraries/telegrambot/vendor/autoload.php');

        //Self User ID = 270875454
        //Dwiyanto = 159365009
        //Rheza ID = 215693265
        //Fadel ID = 143533348

        $apikey = '270875454:AAFPS7Wp9vopwpI5GYzmHcyxOfiz3KyLyrA';
        // $chat_id = '215693265';

        $contacts = array("143533348", "159365009", "215693265");


        $telegram = new \Matriphe\Telegrambot\Telegrambot($apikey);

        $method = $parameter;
        $chat_content = $body_message;

        // Get bot messages received by bot. See user_id from here.
        if($method == 'received') {
           $updates = $telegram->getUpdates();
           var_dump($updates);
        }

        foreach ($contacts as $chat_id) {
            // Get bot info
            if($method == 'info') {
               $getme = $telegram->getMe();
               var_dump($getme);
            }
            // Send message to user.
            elseif($method == 'send') {
               $message = $telegram->sendMessage([
                  'chat_id' => $chat_id, 
                  'text' => $chat_content
               ]);
               var_dump($message);
            }
            // Upload file, use fopen function.
            elseif($method == 'upload') {
               $filepath = '/home/matriphe/photo.jpg';
                  $photo = $telegram->sendPhoto([
                  'chat_id' => $chat_id, 
                  'photo' => fopen($filepath, 'rb'), 
                  'caption' => 'The caption goes here!'
               ]);
               var_dump($photo);
            }
        }
    }
}
<?php

use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Mailtrap\EmailHeader\CategoryHeader;

require __DIR__ . '/vendor/autoload.php';

$apiKey = '88c1bbed5c14e5e6c0ed6dd7893c6474';
$mailtrap = new MailtrapClient(new Config($apiKey));

$email = (new Email())
    ->from(new Address('mailtrap@demomailtrap.com', 'Mailtrap Test'))
    ->to(new Address("zikkyychukwudulue@gmail.com"))
    ->subject('You are awesome!')
    ->text('Congrats for sending test email with Mailtrap!')
;

$email->getHeaders()
    ->add(new CategoryHeader('Integration Test'))
;

$response = $mailtrap->sending()->emails()->send($email);

var_dump(ResponseHelper::toArray($response));
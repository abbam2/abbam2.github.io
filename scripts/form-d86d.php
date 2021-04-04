<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'message',
    'email_message' => 'Vous avez une nouvelle soumission de formulaire
',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'email',
    'to' => 'info@kenow.ci'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nom et Prenoms',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nom et Prenoms\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>
<?php
return [

    'service_manager' => [
        'factories' => [
            'Phpro\MailManager\Adapter\ZendMailAdapter' => 'Phpro\MailManager\Adapter\Factory\ZendMailAdapter',
            'Phpro\MailManager\Adapter\MandrillAdapter' => 'Phpro\MailManager\Adapter\Factory\MandrillAdapter',
            'Phpro\MailManager\Service\BodyRenderer' => 'Phpro\MailManager\Service\Factory\BodyRenderer',
            'Phpro\MailManager\Service\MailManager' => 'Phpro\MailManager\Service\Factory\MailManager',
            'Phpro\MailManager\Service\MailMessageCreator' => 'Phpro\MailManager\Service\Factory\MailMessageCreator',
            'Phpro\MailManager\Service\MailPluginManager' => 'Phpro\MailManager\Service\Factory\MailPluginManager',
        ],
        'aliases' => [
            'Phpro\MailManager' => 'Phpro\MailManager\Service\MailManager',
            'Phpro\MailManager\DefaultAdapter' => 'Phpro\MailManager\Adapter\ZendMailAdapter',
            'Phpro\MailManager\PluginManager' => 'Phpro\MailManager\Service\MailPluginManager',
        ],
    ],

    'mail_manager' => [
        'invokables' => [
            'DefaultMail' => 'Phpro\MailManager\Mail\DefaultMail',
        ],
    ],

    'view_manager' => [
        'template_map' => [
            'mails/layout' => __DIR__ . '/../view/mails/layout.phtml',
        ],
    ]
];
<?php

    return [

        'plugin' => [
            'name'        => 'Magic Forms',
            'description' => 'Create easy AJAX forms'
        ],

        'menu' => [
            'label'    => 'Magic Forms',
            'records'  => ['label' => 'Records'],
            'exports'  => ['label' => 'Export'],
            'settings' => 'Configure plugin parameters',
        ],

        'controllers' => [
            'records' => [
                'title'      => 'View Records',
                'view_title' => 'Record Details',
                'error'      => 'Record not found',
                'deleted'    => 'Record deleted successfully',
                'columns'    => [
                    'id'         => 'Record ID',
                    'group'      => 'Group',
                    'ip'         => 'IP Address',
                    'form_data'  => 'Stored Fields',
                    'created_at' => 'Created',
                ],
            ],
            'exports' => [
                'title'                => 'Export Records',
                'breadcrumb'           => 'Export',
                'filter_section'       => '1. Filter records',
                'filter_type'          => 'Export all records',
                'filter_groups'        => 'Groups',
                'filter_date_after'    => 'Date after',
                'filter_date_before'   => 'Date before',
                'options_section'      => '2. Extra options',
                'options_metadata'     => 'Include metadata',
                'options_metadata_com' => 'Export records with metadata (Record ID, group, IP, created date)',
                'options_deleted'      => 'Include deleted records',
            ],
        ],

        'components' => [
            'generic_form' => [
                'name'        => 'Generic AJAX Form',
                'description' => 'By default renders a generic form; override component HTML with your custom fields.',
            ],
            'empty_form' => [
                'name'        => 'Empty AJAX Form',
                'description' => 'Create a empty template for your custom form; override component HTML.',
            ],
            'shared' => [
                'csrf_error'        => 'Form session expired! Please refresh the page.',
                'recaptcha_warn'    => 'Warning: reCAPTCHA is not properly configured',
                'group_validation'  => 'Form Validation',
                'group_messages'    => 'Flash Messages',
                'group_mail'        => 'Notifications Settings',
                'group_mail_resp'   => 'Auto-Response Settings',
                'group_security'    => 'Security',
                'group_recaptcha'   => 'reCAPTCHA Settings',
                'validation_req'    => 'The property is required',
                'group'             => ['title' => 'Group'              , 'description' => 'Organize your forms with a custom group name. This option is useful when exporting data.'],
                'rules'             => ['title' => 'Rules'              , 'description' => 'Set your own rules using Laravel validation'],
                'rules_messages'    => ['title' => 'Rules Messages'     , 'description' => 'Use your own rules messages using Laravel validation'],
                'messages_success'  => ['title' => 'Success'            , 'description' => 'Message when the form is successfully submited', 'default' => 'Your form was successfully submitted'  ],
                'messages_errors'   => ['title' => 'Errors'             , 'description' => 'Message when the form contains errors'         , 'default' => 'There were errors with your submission'],
                'mail_enabled'      => ['title' => 'Send Notifications' , 'description' => 'Send mail notifications on every form submited'],
                'mail_subject'      => ['title' => 'Subject'            , 'description' => 'Override default email subject'],
                'mail_recipients'   => ['title' => 'Recipients'         , 'description' => 'Specify email recipients (add one address per line)'],
                'mail_resp_enabled' => ['title' => 'Send Auto-Response' , 'description' => 'Send an auto-response email to the person submitting the form'],
                'mail_resp_field'   => ['title' => 'Email Field'        , 'description' => 'Form field containing the email address of the recipient of auto-response'],
                'mail_resp_from'    => ['title' => 'Sender Address'     , 'description' => 'Email address of auto-response email sender (e.g. noreply@yourcompany.com)'],
                'mail_resp_subject' => ['title' => 'Subject'            , 'description' => 'Override default email subject'],
                'allowed_fields'    => ['title' => 'Allowed Fields'     , 'description' => 'Specify which fields should be filtered and stored (add one field name per line)'],
                'recaptcha_enabled' => ['title' => 'Enable reCAPTCHA'   , 'description' => 'Insert the reCAPTCHA widget on your form'],
                'recaptcha_theme'   => ['title' => 'Theme'              , 'description' => 'The color theme of the widget', 'light'  => 'Light' , 'dark'    => 'Dark'],
                'recaptcha_type'    => ['title' => 'Type'               , 'description' => 'The type of CAPTCHA to serve' , 'image'  => 'Image' , 'audio'   => 'Audio'],
                'recaptcha_size'    => ['title' => 'Size'               , 'description' => 'The size of the widget'       , 'normal' => 'Normal', 'compact' => 'Compact'],
            ]
        ],

        'settings' => [
            'section_flash_messages'  => 'Flash Messages',
            'global_messages_success' => ['label' => 'Global Success Message', 'comment' => '(This setting can be overridden from the component)', 'default' => 'Your form was successfully submitted'],
            'global_messages_errors'  => ['label' => 'Global Errors Message' , 'comment' => '(This setting can be overridden from the component)', 'default' => 'There were errors with your submission'],
            'section_recaptcha'       => 'reCAPTCHA Settings',
            'recaptcha_site_key'      => 'Site key',
            'recaptcha_secret_key'    => 'Secret key',
        ],

        'permissions' => [
            'tab'             => 'Magic Forms',
            'access_records'  => 'Access stored forms data',
            'access_exports'  => 'Access to export stored data',
            'access_settings' => 'Access module configuration',
        ],

        'mails' => [
            'form_notification' => ['description' => 'Notify when a form is submited'],
            'form_autoresponse' => ['description' => 'Auto-Response when a form is submited'],
        ],

        'validation' => [
            'recaptcha_error' => 'Cannot validate reCAPTCHA field'
        ],

    ];

?>
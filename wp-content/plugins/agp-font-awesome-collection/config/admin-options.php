<?php
return array(
    'page' => 'fac-settings',
    'title' => 'AGP Font Awesome Collection',
    'tabs' => include (__DIR__ . '/admin-options-tabs.php'),
    'fields' => include (__DIR__ . '/admin-options-fields.php'),
    'fieldSet' => include (__DIR__ . '/admin-options-fieldset.php'),
    'links' => array (
        'title' => 'Useful Links',
        'list' => array(
            array(
                'url' => 'http://www.profosbox.com/documentation/',
                'target' => '_blank',
                'title' => 'Documentation',
                'icon' => 'dashicons-book',
            ),
            array(
                'url' => 'http://www.profosbox.com/ask-a-question-to-developer/',
                'target' => '_blank',
                'title' => 'Support Form',
                'icon' => 'dashicons-sos',
            ),            
        ),
    ),
);
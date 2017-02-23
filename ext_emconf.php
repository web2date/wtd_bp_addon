<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "wtd_bp_addon".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'WTD Bootstrap Package Addon',
    'description' => 'web-to-date addon sitepackage of Bootstrap Package',
    'category' => 'distribution',
    'shy' => '',
    'version' => '0.0.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => 'tt_content',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Andrea Moroni',
    'author_email' => 'info<add>web-to-date.com',
    'author_company' => 'web-to-date',
    'CGLcompliance' => NULL,
    'CGLcompliance_note' => NULL,
    'constraints' => 
    array (
        'depends' => array (
            'typo3' => '^7.6',
            'extbase' => '',
            'fluid' => '',
            'form' => '',
            'bootstrap_package' => '^7.1',
        ),
        'conflicts' => '',
    ),
);

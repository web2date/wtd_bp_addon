<?php

/***************
 * Temporary variables
 */
$extensionKey = 'wtd_bp_addon';

/***************
 * Register PageTS
 */

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/TCEFORM.txt',
    'WTD BP Addon: TCEFORM'
);

// RTE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/RTE.txt',
    'WTD BP Addon: RTE'
);

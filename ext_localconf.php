<?php /** @noinspection PhpUndefinedVariableInspection */

defined('TYPO3_MODE') || die();

    /**
        * Adds a PageTSConfig file which then itself adds BackendLayouts from a subfolder
        */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TsConfig/Page/Mod/WebLayout/web_layout.tsconfig">'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TsConfig/Page/page.tsconfig">'
        );

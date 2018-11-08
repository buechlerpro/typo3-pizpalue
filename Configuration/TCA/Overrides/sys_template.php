<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 15/10/2018
 * Time: 10:39
 */

call_user_func(
    function($_EXTKEY) {
        /***************
         * Static templates
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Main',
            'Pizpalue - Main'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Bootstrap3/Constants',
            'Pizpalue - Bootstrap 3 LESS (load less constants only)'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Bootstrap3/Rendering',
            'Pizpalue - Bootstrap 3 Rendering'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Upgrade',
            'Pizpalue - Upgrade'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/gridelements/Configuration/TypoScript',
            'Pizpalue - Gridelements CEs'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/gridelements/Configuration/TypoScript/Rendering',
            'Pizpalue - Gridelements rendering (include as last)'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/news/Configuration/TypoScript',
            'Pizpalue - news'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/news/Configuration/TypoScript/RSS',
            'Pizpalue - news RSS feed'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/newsslider/Configuration/TypoScript',
            'Pizpalue - newsslider 2.0.1'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/femanager/Configuration/TypoScript',
            'Pizpalue - femanager 2.2.0'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Extensions/tt_address/Configuration/TypoScript/3.0.3',
            'Pizpalue - tt_address 3.0.3'
        );

    },'pizpalue'
);
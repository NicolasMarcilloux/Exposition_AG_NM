<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'AGNM.ExpositionAgNm',
            'Agnm1',
            'Expo AGNM'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_agnm1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_agnm1.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'exposition_AG_NM');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionagnm_domain_model_exposition', 'EXT:exposition_ag_nm/Resources/Private/Language/locallang_csh_tx_expositionagnm_domain_model_exposition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionagnm_domain_model_exposition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionagnm_domain_model_lieu', 'EXT:exposition_ag_nm/Resources/Private/Language/locallang_csh_tx_expositionagnm_domain_model_lieu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionagnm_domain_model_lieu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionagnm_domain_model_artiste', 'EXT:exposition_ag_nm/Resources/Private/Language/locallang_csh_tx_expositionagnm_domain_model_artiste.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionagnm_domain_model_artiste');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionagnm_domain_model_nationalite', 'EXT:exposition_ag_nm/Resources/Private/Language/locallang_csh_tx_expositionagnm_domain_model_nationalite.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionagnm_domain_model_nationalite');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionagnm_domain_model_oeuvre', 'EXT:exposition_ag_nm/Resources/Private/Language/locallang_csh_tx_expositionagnm_domain_model_oeuvre.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionagnm_domain_model_oeuvre');

    },
    $_EXTKEY
);

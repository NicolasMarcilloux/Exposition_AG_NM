<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'AGNM.ExpositionAgNm',
            'Agnm1',
            [
                'Artiste' => 'list, show, search',
                'Oeuvre' => 'list, show, highlight',
                'Exposition' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Artiste' => 'search'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					agnm1 {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_agnm1.svg
						title = LLL:EXT:exposition_ag_nm/Resources/Private/Language/locallang_db.xlf:tx_exposition_ag_nm_domain_model_agnm1
						description = LLL:EXT:exposition_ag_nm/Resources/Private/Language/locallang_db.xlf:tx_exposition_ag_nm_domain_model_agnm1.description
						tt_content_defValues {
							CType = list
							list_type = expositionagnm_agnm1
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);

<?php
defined('TYPO3_MODE') or die('Access denied.');

$GLOBALS['TCA']['tx_bbb_test'] = array(
    'ctrl' => $GLOBALS['TCA']['tx_bbb_test']['ctrl'],
    'columns' => array(
        'hidden' => array(
            'config' => array(
                'type' => 'check',
            )
        ),
    ),
);
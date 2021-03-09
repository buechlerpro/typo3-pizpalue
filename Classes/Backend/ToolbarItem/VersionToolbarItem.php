<?php

/*
 * This file is part of the package buepro/pizpalue.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Pizpalue\Backend\ToolbarItem;

use TYPO3\CMS\Backend\Backend\Event\SystemInformationToolbarCollectorEvent;
use TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem;
use TYPO3\CMS\Core\Utility\CommandUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * VersionToolbarItem
 * Based on `bootstrap_package`
 */
class VersionToolbarItem
{
    public function __invoke(SystemInformationToolbarCollectorEvent $event): void
    {
        $this->addVersionInformation($event->getToolbarItem());
    }

    /**
     * Called by the system information toolbar signal/slot dispatch.
     *
     * @param SystemInformationToolbarItem $systemInformation
     */
    public function addVersionInformation(SystemInformationToolbarItem $systemInformation)
    {
        $value = null;
        $extensionDirectory = ExtensionManagementUtility::extPath('pizpalue');

        // Try to get current version from git
        if (file_exists($extensionDirectory . '.git')) {
            CommandUtility::exec('git --version', $_, $returnCode);
            if ((int)$returnCode === 0) {
                $currentDir = getcwd();
                chdir($extensionDirectory);
                $tag = trim(CommandUtility::exec('git tag -l --points-at HEAD'));
                if ($tag) {
                    $value = $tag;
                } else {
                    $branch = trim(CommandUtility::exec('git rev-parse --abbrev-ref HEAD'));
                    $revision = trim(CommandUtility::exec('git rev-parse --short HEAD'));
                    $value = $branch . ', ' . $revision;
                }
                chdir($currentDir);
            }
        }

        // Fallback to version from extension manager
        if ($value === null) {
            $value = ExtensionManagementUtility::getExtensionVersion('pizpalue');
        }

        // Set system information entry
        $systemInformation->addSystemInformation(
            'Pizpalue Template',
            htmlspecialchars($value, ENT_QUOTES | ENT_HTML5),
            'systeminformation-pizpalue'
        );
    }
}
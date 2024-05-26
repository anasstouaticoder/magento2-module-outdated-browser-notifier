<?php
/**
 * Copyright (c) 2024
 * MIT License
 * Module AnassTouatiCoder_OutdatedBrowserNotifier
 * Author Anass TOUATI anass1touati@gmail.com
 */

declare(strict_types=1);

namespace AnassTouatiCoder\OutdatedBrowserNotifier\Model;

use Magento\Framework\App\Area;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ScopeInterface;
use Magento\Framework\App\State;
use Magento\Store\Model\ScopeInterface as StoreScopeInterface;

class Config
{
    protected const XML_PATH_ENABLED = 'outdated_browser_notifier/general/enabled';

    /**
     * @var State
     */
    protected $appState;
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param State $appState
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        State $appState,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->appState = $appState;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Check if we are in admin area
     *
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function isAdminHTML()
    {
        return $this->appState->getAreaCode() === Area::AREA_ADMINHTML;
    }

    /**
     * Is main functionality enabled
     *
     * @return bool|null
     */
    public function isEnabled()
    {
        $path = $this->isAdminHTML()?
            (sprintf('%s_%s', self::XML_PATH_ENABLED, 'in_admin')) : self::XML_PATH_ENABLED;
        $scope = $this->isAdminHTML() ? ScopeInterface::SCOPE_DEFAULT : StoreScopeInterface::SCOPE_STORES;

        return $this->scopeConfig->isSetFlag(
            $path,
            $scope
        );
    }
}

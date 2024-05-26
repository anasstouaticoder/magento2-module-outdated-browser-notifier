<?php
/**
 * Copyright (c) 2024
 * MIT License
 * Module AnassTouatiCoder_OutdatedBrowserNotifier
 * Author Anass TOUATI anass1touati@gmail.com
 */

declare(strict_types=1);

namespace AnassTouatiCoder\OutdatedBrowserNotifier\Block\Base;

use AnassTouatiCoder\OutdatedBrowserNotifier\Model\Config;
use Magento\Framework\View\Element\Template;

class JsScript extends Template
{
    /**
     * @param Template\Context $context
     * @param Config $config
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Config $config,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @inheridoc
     */
    protected function _toHtml()
    {
        if ($this->config->isEnabled()) {
            return parent::_toHtml();
        }

        return '';
    }
}

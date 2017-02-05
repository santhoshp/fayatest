<?php

namespace Faya\Comparelimit\Helper;

/**
 * Helper Data
 * @package  Faya_Comparelimit
 * @author   Santhosh
 */

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
     /**
     * Path to store config if extension is enabled
     */
    const XML_PATH_ENABLED = 'compare/general/enable';

     /**
     * Path to store config to get product limit 
     */
    const XML_PATH_LIMIT = 'compare/general/product_limit';

    /**
     * Check if extension enabled
     */

    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * get product limit
     */

    public function getProductLimit()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_LIMIT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }


}

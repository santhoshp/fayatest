<?php

namespace Faya\Comparelimit\Observer;
 
use Magento\Framework\Event\ObserverInterface;
use Faya\Comparelimit\Helper\Data;

/**
 * Observer
 * @package  Faya_Comparelimit
 * @author   Santhosh
 */

class ProductLimit implements ObserverInterface
{
     /**
     * @var \Magento\Framework\ObjectManagerInterface
     */ 
    protected $_objectManager;

    /**
     * Comparelimit data
     */
    protected $compareData;   

     /**
     * @var \Magento\Framework\App\ActionFlag
     */
    protected $_actionFlag;
   
    /**
     * @var \Magento\Catalog\Helper\Product\Compare
     */    
    protected $_productCompare = null;

    /**
     * @var \Magento\Framework\Message\ManagerInterface
     */
    protected $_messageManager;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $_urlInterface;

    

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        Data $compareData,
        \Magento\Framework\App\ActionFlag $actionFlag,
        \Magento\Catalog\Helper\Product\Compare $productCompare,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\UrlInterface $urlInterface
        
    ) {
        $this->_objectManager = $objectManager;
        $this->helper = $compareData;
        $this->_actionFlag = $actionFlag;
        $this->_productCompare = $productCompare;
        $this->_messageManager = $messageManager;
        $this->_urlInterface = $urlInterface;
    }
 
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
       if(( $this->helper->isEnabled() )
            && ( $this->_productCompare->getItemCollection()->count() >= $this->helper->getProductLimit() )){
                $this->_messageManager->addError(__('You have reached the limit of products to compare. Remove one and try again.')); 
                $url = $this->_urlInterface->getUrl('*/*'); 
                $this->_actionFlag->set('', \Magento\Framework\App\Action\Action::FLAG_NO_DISPATCH, true);
                $observer->getControllerAction()->getResponse()->setRedirect($url);
         }
    }


}

<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    protected $resultForwardFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }

    /**
     * Renders CMS Home page
     *
     * @param string|null $coreRoute
     * @return \Magento\Framework\Controller\Result\Forward
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute($coreRoute = null)
    {   
       // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();     
       // $test = $objectManager->get('Training\Test\MagentoU\Test');
        $test = $this->_objectManager->get('Training\Test\MagentoU\Test');
        echo '<pre>'; print_r($test->displayParam()); echo '</pre>';
        //$test->startObserver();
        exit();
        $testPlagin1 = $this->_objectManager->get('Magento\Catalog\Model\Product');
        //echo '<pre>'; print_r(get_class($testPlagin1)); echo '</pre>';
        echo '<pre>'; print_r(get_class($testPlagin1)); echo '</pre>';
        $testPlagin2 = $this->_objectManager->get('Magento\Theme\Block\Html\Footer');
        echo '<pre>'; print_r($testPlagin2->getCopyright()); echo '</pre>';
        $testPlagin3 = $this->_objectManager->get('Magento\Theme\Block\Html\Breadcrumbs');
        echo '<pre>'; print_r(get_class($testPlagin3)); echo '</pre>';
        exit();
        $pageId = $this->_objectManager->get(
            'Magento\Framework\App\Config\ScopeConfigInterface'
        )->getValue(
            \Magento\Cms\Helper\Page::XML_PATH_HOME_PAGE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        $resultPage = $this->_objectManager->get('Magento\Cms\Helper\Page')->prepareResultPage($this, $pageId);
        if (!$resultPage) {
            /** @var \Magento\Framework\Controller\Result\Forward $resultForward */
            $resultForward = $this->resultForwardFactory->create();
            $resultForward->forward('defaultIndex');
            return $resultForward;
        }
        return $resultPage;
    }
}

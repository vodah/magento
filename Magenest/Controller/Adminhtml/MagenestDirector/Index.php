<?php

namespace Magenest\Magenest\Controller\Adminhtml\MagenestDirector;

use    Magento\Backend\App\Action\Context;
use    Magento\Framework\View\Result\PageFactory;

class  Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Magenest_Magenest::director');
        $resultPage->addBreadcrumb(__('Movie'), __('Movie'));
        $resultPage->addBreadcrumb(__('Manage	MagenestDirector'),
            __('Manage	MagenestDirector'));
        $resultPage->getConfig()->getTitle()->prepend(__('MagenestDirector'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Magenest::director');
    }
}
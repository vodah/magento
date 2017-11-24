<?php

namespace Magenest\Ui\Controller\Adminhtml\Movie;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        //Call page factory to render layout and page content
//        $this->_setPageData();
//        return $this->getResultPage();
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Magenest_Movie::magenest');
        $resultPage->addBreadcrumb(__('Movie'), __('Movie'));
        $resultPage->addBreadcrumb(__('Manage	Magenest'),
            __('Manage	Magenest'));
        $resultPage->getConfig()->getTitle()->prepend(__('Magenest'));
        return $resultPage;
    }

    /*
     * Check permission via ACL resource
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Ui::movie');
    }

    public function getResultPage()
    {
        if (is_null($this->_resultPage)) {
            $this->_resultPage = $this->_resultPageFactory->create();
        }
        return $this->_resultPage;
    }

    protected function _setPageData()
    {
        $resultPage = $this->getResultPage();
        $resultPage->setActiveMenu('Magenest_Ui::movie');
        $resultPage->getConfig()->getTitle()->prepend((__('Movie')));

        //Add bread crumb
        $resultPage->addBreadcrumb(__('Movie'), __('Movie'));
        $resultPage->addBreadcrumb(__('Magenest'), __('Manage Magenest'));

        return $this;
    }


}
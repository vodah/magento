<?php

namespace Magenest\Movie\Controller\Movie;

class Edit extends \Magento\Framework\App\Action\Action
{
    /**
     *
     *
     */
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        created);
//        if (!$customer) {
//            $this->messageManager->addError(__('Unable to proceed. Please, try again.'));
//            return $resultRedirect->setPath('magenestmovie', array('_current' => true));
//        }
//        try {
//            return $resultRedirect->setPath('magenestmovie');
////            $customer->delete();
////            $this->messageManager->addSuccess(__('Your contact has been deleted !'));
//        } catch (\Exception $e) {
//            $this->messageManager->addError(__('Error while trying to delete contact: '));
//            return $resultRedirect->setPath('magenestmovie', array('_current' => true));
//        }
//        return $resultRedirect->setPath('magenestmovie');

        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
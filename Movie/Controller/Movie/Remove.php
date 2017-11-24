<?php

namespace Magenest\Movie\Controller\Movie;

use Magenest\Movie\Model\MagenestMovieFactory;

class Remove extends \Magento\Framework\App\Action\Action
{

    /**
     *
     */
    protected $_magenestMovie;

    /**
     * @param \Magento\Framework\App\Action\Context $context

     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        MagenestMovieFactory $magenestMovieFactory
    )
    {
        $this->_magenestMovie= $magenestMovieFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resultRedirect = $this->resultRedirectFactory->create();
        $customer = $objectManager->create('Magenest\Movie\Model\MagenestMovie')->load($id);
        if (!$customer) {
            $this->messageManager->addError(__('Unable to proceed. Please, try again.'));
            return $resultRedirect->setPath('magenestmovie', array('_current' => true));
        }
        try {
            $customer->delete();
            $this->messageManager->addSuccess(__('Your contact has been deleted !'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__('Error while trying to delete contact: '));
            return $resultRedirect->setPath('magenestmovie', array('_current' => true));
        }
        return $resultRedirect->setPath('magenestmovie');
    }

}
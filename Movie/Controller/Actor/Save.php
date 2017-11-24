<?php

namespace Magenest\Movie\Controller\Actor;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
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
        $resultRedirect = $this->resultRedirectFactory->create();

        $request = $this->getRequest()->getParams();
        $id =$request['id'];
        if ($id == null){

            $savemovie = $this->_objectManager->create('Magenest\Movie\Model\MagenestActor');
            $name = $request['name'];

            $savemovie->setName($name);
            $savemovie->save();
            $this->messageManager->addSuccess(__('has been added successfully !'));
        }

        else{
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $customer = $objectManager->create('Magenest\Movie\Model\MagenestActor')->load($id);
            $data = $customer->getData();
            $param = $this->getRequest()->getParams();
            $data['name'] = $param['name'];

            $customer->setData($data)->save();


            $this->messageManager->addSuccess(__('has been added successfully !'));


        }
        return $resultRedirect->setPath('magenestmovie/index/actor');


    }
}
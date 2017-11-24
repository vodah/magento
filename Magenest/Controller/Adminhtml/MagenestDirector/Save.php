<?php

namespace Magenest\Magenest\Controller\Adminhtml\MagenestDirector;

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


        $save = $this->_objectManager->create('Magenest\Magenest\Model\MagenestDirector');
        $name = $request['name'];

        $save->setName($name);

//        var_dump($save);
//        die();


        $save->save();
        $this->messageManager->addSuccess(__('has been added successfully !'));


        return $resultRedirect->setPath('magenest/magenestdirector');


    }
}
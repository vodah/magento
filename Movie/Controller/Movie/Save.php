<?php

namespace Magenest\Movie\Controller\Movie;

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

            $savemovie = $this->_objectManager->create('Magenest\Movie\Model\AddNewMovie');
            $name = $request['name'];
            $description = $request['description'];
            $rating = $request['rating'];
            $director_id = $request['director_id'];

            $savemovie->setName($name);
            $savemovie->setDescription($description);
            $savemovie->setRating($rating);
            $savemovie->setDirectorId($director_id);
//        var_dump($savemovie);


            $savemovie->save();
            $this->messageManager->addSuccess(__('has been added successfully !'));
        }

        else{
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $customer = $objectManager->create('Magenest\Movie\Model\MagenestMovie')->load($id);
            $data = $customer->getData();
            $param = $this->getRequest()->getParams();
            $data['name'] = $param['name'];
            $data['description'] = $param['description'];
            $data['rating'] = $param['rating'];
            $data['director_id'] = $param['director_id'];
            $customer->setData($data)->save();

            $this->messageManager->addSuccess(__('has been added successfully !'));


        }
        return $resultRedirect->setPath('magenestmovie');


    }
}
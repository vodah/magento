<?php

namespace Magenest\Movie\Block\Adminhtml\Magenestactor;

//use Magento\Dhl\Model;
//use Magento\Shipping\Helper;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magenest\Ui\Block\Adminhtml\Movie;
use Magenest\Ui\Model\ResourceModel\Movie\Collection;
use Magenest\Ui\Model\ResourceModel;
use Magento\Framework\App\Action;

/**
 * Frontend model for DHL shipping methods for documentation
 */
class ReadOnly extends Field
{

    protected  $movieFactory;

    protected  $movieCollection;

    public function __construct(\Magento\Backend\Block\Template\Context $context,
                                 \Magenest\Movie\Model\MagenestactorFactory $movieFactory,
                                \Magenest\Movie\Model\ResourceModel\Magenestactor\Collection $collection,

                                array $data = [])
    {
        parent::__construct($context, $data);

        $this->movieCollection = $collection;
        $this->movieFactory = $movieFactory;
    }

    public function count(){
        $count = $this->movieFactory->create()->getCollection()->getSize();
        return $count;
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {

        $this->setElement($element);

        $html = '<div id="color_text_field">';
        $html .= '<input type="text" name="country" value="'. $this->count() .'';
        $html .= '" readonly>';
        $html .= '</div>';

        return $html;
    }
}

<?php
namespace Magenest\Magenest\Block\Adminhtml;

//use Magento\Dhl\Model;
//use Magento\Shipping\Helper;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Frontend model for DHL shipping methods for documentation
 */
class SetColor extends Field
{

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->setElement($element);

        $html ='<div id="color_text_field" style="color: red; padding-top: 7px;">abcd';
//        $html .=
        $html .='</div>';

        return $html;
    }
}

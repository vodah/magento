<?php

namespace Magenest\Ui\Block\Adminhtml\Movie;

use Magento\Config\Block\System\Config\Form\Field;


/**
 * Frontend model for DHL shipping methods for documentation
 */
class Reload extends Field
{

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {

        $this->setElement($element);


        $html = '<div id="buton">';
        $html .= '<button onclick="reset()">Reload</button>';

        $html .= '</div>';

        return $html;
    }
}

?>


<?php
namespace Magento\Swatches\Block\LayeredNavigation\RenderLayered;

/**
 * Interceptor class for @see \Magento\Swatches\Block\LayeredNavigation\RenderLayered
 */
class Interceptor extends \Magento\Swatches\Block\LayeredNavigation\RenderLayered implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Eav\Model\Entity\Attribute $eavAttribute, \Magento\Catalog\Model\ResourceModel\Layer\Filter\AttributeFactory $layerAttribute, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Swatches\Helper\Media $mediaHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $eavAttribute, $layerAttribute, $swatchHelper, $mediaHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setSwatchFilter(\Magento\Catalog\Model\Layer\Filter\AbstractFilter $filter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSwatchFilter');
        if (!$pluginInfo) {
            return parent::setSwatchFilter($filter);
        } else {
            return $this->___callPlugins('setSwatchFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildUrl($attributeCode, $optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildUrl');
        if (!$pluginInfo) {
            return parent::buildUrl($attributeCode, $optionId);
        } else {
            return $this->___callPlugins('buildUrl', func_get_args(), $pluginInfo);
        }
    }
}

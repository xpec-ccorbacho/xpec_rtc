<?php
namespace Smartwave\Filterproducts\Block\BestsellersList;

/**
 * Interceptor class for @see \Smartwave\Filterproducts\Block\BestsellersList
 */
class Interceptor extends \Smartwave\Filterproducts\Block\BestsellersList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Framework\App\ResourceConnection $resource, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $catalogProductVisibility, $categoryFactory, $urlHelper, $resource, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}

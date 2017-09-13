<?php
namespace Magento\CatalogSearch\Model\Adapter\Mysql\Filter\Preprocessor;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Adapter\Mysql\Filter\Preprocessor
 */
class Interceptor extends \Magento\CatalogSearch\Model\Adapter\Mysql\Filter\Preprocessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Search\Adapter\Mysql\ConditionManager $conditionManager, \Magento\Framework\App\ScopeResolverInterface $scopeResolver, \Magento\Eav\Model\Config $config, \Magento\Framework\App\ResourceConnection $resource, \Magento\CatalogSearch\Model\Search\TableMapper $tableMapper, $attributePrefix, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig = null, \Magento\CatalogSearch\Model\Adapter\Mysql\Filter\AliasResolver $aliasResolver = null)
    {
        $this->___init();
        parent::__construct($conditionManager, $scopeResolver, $config, $resource, $tableMapper, $attributePrefix, $scopeConfig, $aliasResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Framework\Search\Request\FilterInterface $filter, $isNegation, $query)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        if (!$pluginInfo) {
            return parent::process($filter, $isNegation, $query);
        } else {
            return $this->___callPlugins('process', func_get_args(), $pluginInfo);
        }
    }
}

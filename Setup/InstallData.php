<?php
namespace Vishal\DataRangeAttribute\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
	
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'enable_start',
			[
				'type' => 'datetime',
                'backend' => '',
                'frontend' => '',
                'label' => 'Enable Start',
                'input' => 'date',
                'class' => '',
                'group' => 'Enable Product Date Range',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => true,
                'filterable' => true,
                'comparable' => true,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'sort_order' => '70',
                'source' => '',
                'is_used_in_grid' => true,
                'is_visible_in_grid' => true,
                'is_filterable_in_grid' => true,
                'apply_to' => 'simple,configurable,virtual,bundle,downloadable',
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'enable_end',
			[
				'type' => 'datetime',
                'backend' => '',
                'frontend' => '',
                'label' => 'Enable End',
                'input' => 'date',
                'class' => '',
                'group' => 'Enable Product Date Range',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => true,
                'filterable' => true,
                'comparable' => true,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'source' => '',
                'sort_order' => '80',
                'is_used_in_grid' => true,
                'is_visible_in_grid' => true,
                'is_filterable_in_grid' => true,
                'apply_to' => 'simple,configurable,virtual,bundle,downloadable',
			]
		);
	}
}
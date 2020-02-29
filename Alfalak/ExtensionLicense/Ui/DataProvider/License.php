<?php
namespace Alfalak\ExtensionLicense\Ui\DataProvider;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\AggregationInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\Data\Collection;

class License extends Collection implements SearchResultInterface
{
	protected $agrregations;
	public function getItems()
	{
		return [ 
			new \Magento\Framework\DataObject(
				[
					'custom_attributes' => [
						new \Magento\Framework\DataObject([
							'attribute_code' => 'license_id',
							'value' => 1
						]),
						new \Magento\Framework\DataObject([
							'attribute_code' => 'username',
							'value' => 'sdcsdcsds'
						]),
						new \Magento\Framework\DataObject([
							'attribute_code' => 'password',
							'value' => 'jkyukyukyu'
						]),
					]
				]
			),
			new \Magento\Framework\DataObject(
				[
					'custom_attributes' => [
						new \Magento\Framework\DataObject([
							'attribute_code' => 'license_id',
							'value' => 2
						]),
						new \Magento\Framework\DataObject([
							'attribute_code' => 'username',
							'value' => 'sdcsdcsds'
						]),
						new \Magento\Framework\DataObject([
							'attribute_code' => 'password',
							'value' => 'jkyukyukyu'
						]),
					]
				]
			)
		];
			
	}
	
	public function getAggregations()
	{
		return $this->aggregations;
	}
	
	public function setAggregations($aggregations)
	{
		$this->aggregations = $aggregations;
		return $this;
	}
	public function getSearchCriteria()
	{
		return null;
	}
	public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null)
	{
		return $this;
	}
	public function getTotalCount()
	{
		return $this->getSize();
	}
	public function setTotalCount($totalCount)
	{
		return $this;
	}
	public function setItems(array $items = null)
	{
		return $this;
	}

}


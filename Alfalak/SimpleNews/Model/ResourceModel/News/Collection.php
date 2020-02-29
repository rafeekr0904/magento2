<?php
namespace Alfalak\SimpleNews\Model\ResourceModel\News;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
	protected function _construct()
	{
		$this->_init('Alfalak\SimpleNews\Model\News','Alfalak\SimpleNews\Model\ResourceModel\News');
	}
}

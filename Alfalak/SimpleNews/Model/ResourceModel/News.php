<?php
namespace Alfalak\SimpleNews\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class News extends AbstractDb
{
	protected function _construct()
	{
		$this->_init('alfalak_simplenews','id');
	}
	
}

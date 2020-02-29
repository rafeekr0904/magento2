<?php
namespace Alfalak\SimpleNews\Model;
use Magento\Framework\Model\AbstractModel;
class News extends AbstractModel{

	protected function _construct()
	{
		$this->_init('Alfalak\SimpleNews\Model\ResourceModel\News');
	}

}

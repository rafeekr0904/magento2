<?php
namespace Alfalak\Helpdesk\Model\ResourceModel;
class Tickets extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('alfalak_helpdesk_system','id');
	}
}

<?php
namespace Alfalak\Helpdesk\Model\ResourceModel\Tickets;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
    protected $_eventPrefix = 'alfalak_helpdesk_ticket_collection';
    protected $_eventObject = 'ticket_collection';
    protected function _construct()
    {
		$this->_init('Alfalak\Helpdesk\Model\Tickets','Alfalak\Helpdesk\Model\ResourceModel\Tickets');
	}
}

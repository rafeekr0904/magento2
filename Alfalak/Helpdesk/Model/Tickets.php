<?php
namespace Alfalak\Helpdesk\Model;
class Tickets extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'alfalak_helpdesk_ticket';

    protected $_cacheTag = 'alfalak_helpdesk_ticket';

    protected $_eventPrefix = 'alfalak_helpdesk_ticket';
    
    protected function _construct()
    {
		$this->_init('Alfalak\Helpdesk\Model\ResourceModel\Tickets');
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}

<?php
namespace Alfalak\Helpdesk\Model\Source;
class Status implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
				['value' => 1,'label' => __('New')],
				['value' => 2,'label' => __('Open')],
				['value' => 3,'label' => __('Pending')],
				['value' => 4,'label' => __('Closed')],
		];
	}
}

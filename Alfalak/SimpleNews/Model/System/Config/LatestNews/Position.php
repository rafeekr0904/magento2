<?php 
namespace Alfalak\SimpleNews\Model\System\Config\LatestNews;
//use Magento\Framework\Option\ArrayInterface;
class Position implements \Magento\Framework\Option\ArrayInterface
{
	
	const LEFT = 1;
	const RIGHT = 2;
	const DISABLED = 0;
	
	public function toOptionArray()
	{
		return [
			self::LEFT => __('Left'),
			self::RIGHT => __('Right'),
			self::DISABLED => __('Disbled')
		];
		
		
        /*return [
            'value' => 'Label',
            'another_value' => 'Another value',
        ];*/
	}
	
}


?>

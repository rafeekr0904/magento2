<?php

namespace Alfalak\SimpleNews\Block\Latest;

use Alfalak\SimpleNews\Block\Latest;
use Alfalak\SimpleNews\Model\System\Config\LatestNews\Position;

class Left extends Latest
{
   public function _construct()
   {
      $position = $this->_dataHelper->getLatestNewsBlockPosition();
      // Check this position is applied or not
      if ($position == Position::LEFT) {
         $this->setTemplate('Alfalak_SimpleNews::latest.phtml');
      }
   }
}

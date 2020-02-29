<?php

namespace Alfalak\SimpleNews\Controller\Adminhtml\News;

use Alfalak\SimpleNews\Controller\Adminhtml\News;

class Grid extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      return $this->_resultPageFactory->create();
   }
}

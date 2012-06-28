<?php

class Application_Model_DbTable_Product extends Zend_Db_Table_Abstract
{

	protected $_name = 'product';

	public function getAllProduct()
	{
		$row = $this->fetchAll();
		if (!$row) {
			throw new Exception("Could not find row $id");
		}
		return $row->toArray();
	}



}


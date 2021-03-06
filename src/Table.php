<?php
namespace samsoncms\app\user;

use samson\pager\Pager;

class Table extends \samson\cms\table\Table
{
    public $table_tmpl = 'table/index';

	public function row(& $db_row, Pager & $pager = null, $module = null)
	{
		return m()->view($this->row_tmpl)->user($db_row)->set($pager)->output();
	}
} 

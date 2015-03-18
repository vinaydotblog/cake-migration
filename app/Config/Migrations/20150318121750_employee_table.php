<?php

use Phinx\Migration\AbstractMigration;

class EmployeeTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *

    */
    
    /**
     * Migrate Up.
     */
    public function change()
    {
        $this->table('employees')
            ->addColumn('name', 'string')
            ->addColumn('empid', 'integer')->save();
    }

    /**
     * Migrate Down.
     */
    // public function down()
    // {

    // }
}
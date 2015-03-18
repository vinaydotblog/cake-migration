<?php

use Phinx\Migration\AbstractMigration;

class UserTable extends AbstractMigration
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
    function change()
    {
        $table = $this->table('user_logins');
        $table->addColumn('user_id', 'integer')
              ->addColumn('created', 'datetime')
              ->create();
    }
    // public function up()
    // {
    
    // }

    /**
     * Migrate Down.
     */
    // public function down()
    // {

    // }
}
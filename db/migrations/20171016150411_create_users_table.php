<?php


use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
     public function change()
    {
        $this->table('users')
             ->addColumn('oauth_provider', 'string')
             ->addColumn('oauth_uid', 'string')
             ->addColumn('user_name', 'string')
             ->addColumn('first_name', 'string')
             ->addColumn('last_name', 'string')
             ->addColumn('email', 'string')
             ->addColumn('locale', 'string')
             ->addColumn('picture', 'string')
             ->addColumn('created', 'datetime')
             ->addColumn('modified', 'datetime')
             ->addColumn('password', 'string')
             ->create();

    }

    public function up(){}
    public function down(){}
}
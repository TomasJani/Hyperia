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
        $table = $this->table('users');
        $table->addIndex('id', ['unique' => true])
              ->addIndex('email', ['unique' => true])
              ->addColumn('name', 'string', ['limit' => 225, 'null' => false])
              ->addColumn('surname', 'string', ['limit' => 225, 'null' => false])
              ->addColumn('email', 'string', ['limit' => 225, 'null' => false])
              ->addColumn('password', 'string', ['limit' => 225, 'null' => false])
              ->addColumn('city', 'string', ['limit' => 225, 'null' => false])
              ->addColumn('age', 'integer', ['null' => false])
              ->addColumn('created_at', 'timestamp', ['null' => true])
              ->create();
    }
}

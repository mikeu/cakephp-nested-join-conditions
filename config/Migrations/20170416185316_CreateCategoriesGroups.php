<?php
use Migrations\AbstractMigration;

class CreateCategoriesGroups extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('categories_groups');

        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('category_id', 'categories', 'id');

        $table->addColumn('group_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('group_id', 'groups', 'id');

        $table->create();
    }
}

<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryCosts extends AbstractMigration
{
    // Executa a migration
    public function up()
    {
        $this->table('category_costs')
            ->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    // Desfaz a migration
    public function down()
    {
        $this->droptable('category_costs');
    }
}

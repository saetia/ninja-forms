<?php if ( ! defined( 'ABSPATH' ) ) exit;

class NF_Database_Migrations_ObjectMeta extends NF_BaseClasses_Migration
{
    public function __construct()
    {
        parent::__construct(
            'nf_object_meta',
            'nf_migration_create_table_object_meta'
        );
    }

    public function run()
    {
        $query = "CREATE TABLE IF NOT EXISTS $this->table_name (
            `id` int NOT NULL AUTO_INCREMENT,
            `parent_id` int NOT NULL,
            `key` tinytext NOT NULL,
            `value` tinytext,
            UNIQUE KEY (`id`)
        ) $this->charset_collate;";

        dbDelta( $query );
    }

}
<?php

namespace c006\feedback\migrations;

use Yii;
use yii\db\Migration;

class m000000_000000_c006_feedback extends Migration
{

    /**
     *
     */
    public function up()
    {

        self::down();

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";


        /* MYSQL */
        if (!in_array('feedback', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%feedback}}', [
                    'id'        => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
                    0           => 'PRIMARY KEY (`id`)',
                    'name'      => 'VARCHAR(60) NULL',
                    'email'     => 'VARCHAR(60) NULL',
                    'comment'   => 'TEXT NOT NULL',
                    'timestamp' => 'INT(10) UNSIGNED NOT NULL',
                ], $tableOptions_mysql);
            }
        }


    }

    /**
     *
     */
    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `feedback`');
        $this->execute('SET foreign_key_checks = 1;');

    }

}
<?php

use yii\db\Migration;

/**
 * Class m241108_141411_add_last_login_to_user
 */
class m241108_141411_add_last_login_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        // Only add the 'last_login' column if it doesn't already exist
        if ($this->db->getTableSchema('{{%user}}', true) !== null && !array_key_exists('last_login', $this->db->getTableSchema('{{%user}}')->columns)) {
            $this->addColumn('{{%user}}', 'last_login', $this->dateTime()->null());
        }
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'last_login');
    }
}

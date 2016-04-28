<?php

use yii\db\Migration;

class m160425_124834_add_position_to_post extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'time_registration', $this->timestamp());
    }

    public function down()
    {
        $this->dropColumn('user', 'time_registration');
    }
}

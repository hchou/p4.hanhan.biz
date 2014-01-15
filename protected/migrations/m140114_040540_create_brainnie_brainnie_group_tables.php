<?php

class m140114_040540_create_brainnie_brainnie_group_tables extends CDbMigration
{
	public function up()
	{
        // TABLE CREATION
        
        // Table to store brainnie user accounts
        $this->createTable('tbl_brainnie', array(
            'brainnie_id'        => 'pk',
            // brainnie_id = user_id
            'email'              => 'string NOT NULL',
            'name_first'         => 'string NOT NULL',
            'name_last'          => 'string NOT NULL',
            'salt'               => 'string NOT NULL',
            'password'           => 'string NOT NULL',
            'time_create'        => 'datetime DEFAULT NULL',
            'time_last_login'    => 'datetime DEFAULT NULL',
            'brainnie_group_id'  => 'int(1)',
        ), 'ENGINE=InnoDB');
        
        // Table to store brainnie groups (e.g. super brainnie)
        $this->createTable('tbl_brainnie_group', array(
            'brainnie_group_id'         => 'pk',
            'brainnie_group_desc'       => 'string NOT NULL',
        ), 'ENGINE=InnoDB');
        
        // FOREIGN KEY RELATIONSHIPS

        // tbl_brainnie.brainnie_group_id references tbl_brainnie_group.brainnie_group_id        
        $this->addForeignKey("fk_brainnie_brainnie_group",
                             "tbl_brainnie", "brainnie_group_id",
                             "tbl_brainnie_group", "brainnie_group_id",
                             "CASCADE", "RESTRICT");
	}

	public function down()
	{
        //$this->truncateTable('tbl_brainnie');
        //$this->truncateTable('tbl_brainnie_group');
        $this->dropTable('tbl_brainnie');
        $this->dropTable('tbl_brainnie_group');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}

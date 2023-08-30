<?php 
use yii\db\Migration;

/**
 * Class m210101_000000_create_collaboration_module_tables
 */
class m230830_092309_create_collaboration_module_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Users table
        $this->createTable('Users', [
            'userID' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'role' => "ENUM('Admin', 'Staff')",
        ]);

        // StandardReports table
        $this->createTable('StandardReports', [
            'reportID' => $this->primaryKey(),
            'reportName' => $this->string(),
            'description' => $this->text(),
            'createdAt' => $this->dateTime(),
            'createdBy' => $this->integer(),
        ]);

        // AdHocReports table
        $this->createTable('AdHocReports', [
            'reportID' => $this->primaryKey(),
            'customParameters' => $this->json(),
            'createdAt' => $this->dateTime(),
            'createdBy' => $this->integer(),
        ]);

        // MailingLists table
        $this->createTable('MailingLists', [
            'listID' => $this->primaryKey(),
            'listName' => $this->string(),
            'description' => $this->text(),
            'createdAt' => $this->dateTime(),
            'createdBy' => $this->integer(),
        ]);

        // MailingListMembers table
        $this->createTable('MailingListMembers', [
            'listID' => $this->integer(),
            'userID' => $this->integer(),
            'addedAt' => $this->dateTime(),
        ]);

        // Notifications table
        $this->createTable('Notifications', [
            'notificationID' => $this->primaryKey(),
            'content' => $this->text(),
            'type' => "ENUM('Email', 'SMS', 'VirtualBoard')",
            'status' => "ENUM('Sent', 'Failed')",
            'sentAt' => $this->dateTime(),
            'sentBy' => $this->integer(),
        ]);
        
        // Add foreign keys
        $this->addForeignKey(
            'fk_standard_reports_users', 
            'StandardReports', 
            'createdBy', 
            'Users', 
            'userID',
            'CASCADE'
        );
        
        // ... (Add other foreign keys similarly)
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Notifications');
        $this->dropTable('MailingListMembers');
        $this->dropTable('MailingLists');
        $this->dropTable('AdHocReports');
        $this->dropTable('StandardReports');
        $this->dropTable('Users');
    }
}

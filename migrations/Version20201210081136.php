<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201210081136 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $entityAuditTable = $schema->createTable('entity_audits');
        $entityAuditTable->addColumn('id', 'integer', ['unsigned' => true, 'autoincrement' => true]);
        $entityAuditTable->addColumn('entity_name', 'string', ['length' => 255]);
        $entityAuditTable->addColumn('old_value', 'text', ['length' => 255]);
        $entityAuditTable->addColumn('new_value', 'text', ['length' => 255]);
        $entityAuditTable->addColumn('created_at', 'datetime', ['notnull' => true]);
        $entityAuditTable->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('entity_audits');
    }
}

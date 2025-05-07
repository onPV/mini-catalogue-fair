<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250507115211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE step_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE step (id INT NOT NULL, protocol_id INT NOT NULL, "order" INT NOT NULL, description TEXT NOT NULL, duration INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_43B9FE3CCCD59258 ON step (protocol_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE step ADD CONSTRAINT FK_43B9FE3CCCD59258 FOREIGN KEY (protocol_id) REFERENCES protocol (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE step_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE step DROP CONSTRAINT FK_43B9FE3CCCD59258
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE step
        SQL);
    }
}

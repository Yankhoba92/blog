<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240112143105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD COLUMN created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE post ADD COLUMN updated_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, slug, content, image, status FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(100) NOT NULL, slug VARCHAR(255) NOT NULL, content CLOB DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, status BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO post (id, title, slug, content, image, status) SELECT id, title, slug, content, image, status FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
    }
}

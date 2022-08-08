<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220529200922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mechanics ADD client_id INT NOT NULL, ADD name VARCHAR(30) NOT NULL, ADD speciality VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE mechanics ADD CONSTRAINT FK_32A6314D19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_32A6314D19EB6921 ON mechanics (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mechanics DROP FOREIGN KEY FK_32A6314D19EB6921');
        $this->addSql('DROP INDEX IDX_32A6314D19EB6921 ON mechanics');
        $this->addSql('ALTER TABLE mechanics DROP client_id, DROP name, DROP speciality');
    }
}

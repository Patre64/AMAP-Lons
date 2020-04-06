<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191115101007 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contrats_user');
        $this->addSql('ALTER TABLE contrats ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrats ADD CONSTRAINT FK_7268396CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7268396CA76ED395 ON contrats (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contrats_user (contrats_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5A9A0AD96A6193D6 (contrats_id), INDEX IDX_5A9A0AD9A76ED395 (user_id), PRIMARY KEY(contrats_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrats_user ADD CONSTRAINT FK_5A9A0AD96A6193D6 FOREIGN KEY (contrats_id) REFERENCES contrats (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrats_user ADD CONSTRAINT FK_5A9A0AD9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrats DROP FOREIGN KEY FK_7268396CA76ED395');
        $this->addSql('DROP INDEX IDX_7268396CA76ED395 ON contrats');
        $this->addSql('ALTER TABLE contrats DROP user_id');
    }
}

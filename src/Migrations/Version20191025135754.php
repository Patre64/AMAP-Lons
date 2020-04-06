<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191025135754 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contrats (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, etat TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrats_produit (contrats_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_80E766B76A6193D6 (contrats_id), INDEX IDX_80E766B7F347EFB (produit_id), PRIMARY KEY(contrats_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrats_user (contrats_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5A9A0AD96A6193D6 (contrats_id), INDEX IDX_5A9A0AD9A76ED395 (user_id), PRIMARY KEY(contrats_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrats_produit ADD CONSTRAINT FK_80E766B76A6193D6 FOREIGN KEY (contrats_id) REFERENCES contrats (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrats_produit ADD CONSTRAINT FK_80E766B7F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrats_user ADD CONSTRAINT FK_5A9A0AD96A6193D6 FOREIGN KEY (contrats_id) REFERENCES contrats (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrats_user ADD CONSTRAINT FK_5A9A0AD9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrats_produit DROP FOREIGN KEY FK_80E766B76A6193D6');
        $this->addSql('ALTER TABLE contrats_user DROP FOREIGN KEY FK_5A9A0AD96A6193D6');
        $this->addSql('DROP TABLE contrats');
        $this->addSql('DROP TABLE contrats_produit');
        $this->addSql('DROP TABLE contrats_user');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191018130800 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE distribution (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE distribution_produit (distribution_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_C914A2956EB6DDB5 (distribution_id), INDEX IDX_C914A295F347EFB (produit_id), PRIMARY KEY(distribution_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE distribution_produit ADD CONSTRAINT FK_C914A2956EB6DDB5 FOREIGN KEY (distribution_id) REFERENCES distribution (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE distribution_produit ADD CONSTRAINT FK_C914A295F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE distribution_produit DROP FOREIGN KEY FK_C914A2956EB6DDB5');
        $this->addSql('DROP TABLE distribution');
        $this->addSql('DROP TABLE distribution_produit');
    }
}

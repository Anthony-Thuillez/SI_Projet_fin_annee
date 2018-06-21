<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180621135438 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE food (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL, description VARCHAR(3000) NOT NULL, img_src VARCHAR(2048) NOT NULL, img_alt VARCHAR(50) NOT NULL, price DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, kind VARCHAR(50) NOT NULL, available TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(20) NOT NULL, password VARCHAR(20) NOT NULL, name VARCHAR(30) NOT NULL, adress VARCHAR(100) NOT NULL, planet VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vivarium (id INT AUTO_INCREMENT NOT NULL, size INT NOT NULL, pressure DOUBLE PRECISION NOT NULL, temperature DOUBLE PRECISION NOT NULL, atmosphere DOUBLE PRECISION NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE xenomorph (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, description VARCHAR(3000) NOT NULL, price INT NOT NULL, img_src VARCHAR(2048) NOT NULL, img_alt VARCHAR(70) NOT NULL, size INT NOT NULL, feeding VARCHAR(30) NOT NULL, dangerous INT NOT NULL, available TINYINT(1) NOT NULL, type VARCHAR(30) NOT NULL, pressure DOUBLE PRECISION NOT NULL, temperature DOUBLE PRECISION NOT NULL, atmosphere VARCHAR(20) NOT NULL, atmoshpere_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vivarium');
        $this->addSql('DROP TABLE xenomorph');
    }
}

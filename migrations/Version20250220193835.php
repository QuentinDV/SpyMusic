<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220193835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (address_id INT AUTO_INCREMENT NOT NULL, street VARCHAR(255) NOT NULL, city VARCHAR(100) NOT NULL, postal_code VARCHAR(20) NOT NULL, country VARCHAR(100) NOT NULL, address_type VARCHAR(50) DEFAULT NULL, user_id INT NOT NULL, INDEX IDX_D4E6F81A76ED395 (user_id), PRIMARY KEY(address_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE cart (cart_id INT AUTO_INCREMENT NOT NULL, album_id VARCHAR(255) NOT NULL, type VARCHAR(20) NOT NULL, quantity INT DEFAULT 1 NOT NULL, added_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, user_id INT NOT NULL, INDEX IDX_BA388B7A76ED395 (user_id), PRIMARY KEY(cart_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE order_details (order_detail_id INT AUTO_INCREMENT NOT NULL, album_id VARCHAR(255) NOT NULL, type VARCHAR(20) NOT NULL, quantity INT NOT NULL, price NUMERIC(10, 2) NOT NULL, order_id INT NOT NULL, INDEX IDX_845CA2C18D9F6D38 (order_id), PRIMARY KEY(order_detail_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE orders (order_id INT AUTO_INCREMENT NOT NULL, order_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, total_amount NUMERIC(10, 2) NOT NULL, status VARCHAR(20) DEFAULT \'En attente\' NOT NULL, user_id INT NOT NULL, INDEX IDX_E52FFDEEA76ED395 (user_id), PRIMARY KEY(order_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE reviews (review_id INT AUTO_INCREMENT NOT NULL, album_id VARCHAR(255) NOT NULL, rating INT NOT NULL, comment LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, user_id INT NOT NULL, INDEX IDX_6970EB0FA76ED395 (user_id), PRIMARY KEY(review_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE users (user_id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password_hash VARCHAR(255) NOT NULL, access_token VARCHAR(255) DEFAULT NULL, refresh_token VARCHAR(255) DEFAULT NULL, role VARCHAR(20) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME (username), PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F81A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C18D9F6D38 FOREIGN KEY (order_id) REFERENCES orders (order_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reviews ADD CONSTRAINT FK_6970EB0FA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F81A76ED395');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B7A76ED395');
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C18D9F6D38');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0FA76ED395');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE order_details');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE reviews');
        $this->addSql('DROP TABLE users');
    }
}

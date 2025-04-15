CREATE DATABASE uts4ci;

CREATE TABLE `tamu`(
`id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NOT NULL,
  `instansi` VARCHAR(100) NOT NULL,
  `keperluan` TEXT NOT NULL,
  `tanggal` DATE NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL DEFAULT 'admin'
);

INSERT INTO admin (username, password, role) 
VALUES ('admin', 'adminkece123', 'admin');

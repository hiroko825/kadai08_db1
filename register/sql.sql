CREATE TABLE makeup_artists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(50) NOT NULL,
    experience ENUM('あり', 'なし') NOT NULL
);
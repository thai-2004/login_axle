-- 14/03/2025
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fullname VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--------------------------------

INSERT INTO users (username, password, email, fullname) VALUES ('admin', 'admin', 'admin@gmail.com', 'Admin');

INSERT INTO users (username, password, email, fullname) VALUES ('thaideptrai', 'admin', 'thai@gmail.com', 'Admin');
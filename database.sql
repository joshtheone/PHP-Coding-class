CREATE TABLE phpclass.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO phpclass.users (email, password) VALUES ('josh@gmail.com', '1234');
INSERT INTO phpclass.users (email, password) VALUES ('Frank@gmail.com', '1234');
INSERT INTO phpclass.users (email, password) VALUES ('Grey@gmail.com', '1234');
INSERT INTO phpclass.users (email, password) VALUES ('Josephine@gmail.com', '1234');
INSERT INTO phpclass.users (email, password) VALUES ('admin@gmail.com', '1234');

SELECT * FROM phpclass.users WHERE email = 'admin@gmail.com';

SELECT id, email FROM phpclass.users;

UPDATE phpclass.users SET email = 'adminAccount@gmail.com' WHERE id = 6;

DELETE FROM phpclass.users WHERE id = 6;
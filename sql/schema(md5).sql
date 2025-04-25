--create database named 'zero_trust_campus' and then import this db .
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(32) NOT NULL, 
    full_name VARCHAR(100) NOT NULL,
    role ENUM(
        'admin',
        'finance',
        'professor',
        'student',
        'receptionist',
        'directors'
    ) NOT NULL,
    trusted_device_1 VARCHAR(50) NOT NULL,
    trusted_device_2 VARCHAR(50) NOT NULL,
    allowed_country VARCHAR(50) DEFAULT 'Australia',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Admin
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'admin@example.com',
    MD5('admin@321'), 
    'Campus Admin',
    'admin',
    'Admin-Laptop',
    'Admin-PC'
);

-- Director
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'director@example.com',
    MD5('director@321'),
    'John Doe',
    'directors',
    'Director-Tablet',
    'Director-BackupPC'
);

-- Finance
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'finance@example.com',
    MD5('finance@321'),
    'Alice Smith',
    'finance',
    'Finance-Desktop',
    'Finance-Laptop'
);

-- Professor
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'professor@example.com',
    MD5('professor@321'),
    'Dr. Emily White',
    'professor',
    'Prof-iPhone',
    'Prof-Tablet'
);

-- Student
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'student@example.com',
    MD5('student@321'),
    'Sam Green',
    'student',
    'Student-Laptop',
    'Student-Mobile'
);

-- Receptionist
INSERT INTO users (
    email, 
    password_hash, 
    full_name, 
    role, 
    trusted_device_1, 
    trusted_device_2
) 
VALUES (
    'reception@example.com',
    MD5('reception@321'),
    'Laura Brown',
    'receptionist',
    'Rec-PC',
    'Rec-BackupTablet'
);




--list in here 
-- admin@example.com
-- admin@321
-- 5f4dcc3b5aa765d61d8327deb882cf99
-- director@example.com
-- director@321
-- c20ad4d76fe97759aa27a0c99bff6710
-- finance@example.com
-- finance@321
-- 7c6a180b36896a0a8c02787eeafb0e4c
-- professor@example.com
-- professor@321
-- 0b4e7a0e5fe84ad35fb5f96e7dda1e54
-- student@example.com
-- student@321
-- 48bb6e862e54f2a795ffc4e541ca1732
-- reception@example.com
-- reception@321
-- e10adc3949ba59abbe56e057f20f883e
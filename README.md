# CyberSages

-- Create table for users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT DEFAULT 2,  -- Default role is 2 (e.g., regular user)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create table for roles
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL UNIQUE
);

-- Create table for user roles
CREATE TABLE user_roles (
    user_id INT,
    role_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, role_id)
);

-- Insert default roles
INSERT INTO roles (role_name) VALUES ('admin'), ('user');

CREATE DATABASE IF NOT EXISTS advanced_barangay_portal;
USE advanced_barangay_portal;

CREATE TABLE IF NOT EXISTS residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    barangay VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS announcements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    date DATE NOT NULL
);

INSERT INTO residents (name, age, barangay) VALUES
('Maria Santos', 32, 'Bonifacio'),
('Juan Dela Cruz', 28, 'Quezon'),
('Anna Reyes', 65, 'Trinidad');

INSERT INTO announcements (title, description, date) VALUES
('Health Checkup', 'Free health checkup for all residents', '2025-12-01'),
('Community Meeting', 'Monthly meeting at barangay hall', '2025-12-05');
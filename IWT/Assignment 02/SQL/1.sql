CREATE DATABASE alignment_services;

USE alignment_services;

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);
INSERT INTO services (title, description, image) VALUES
('Front-End Alignment', 'An overall wheel alignment checks all four wheels, while a front-end alignment only focuses on the front two wheels and tires.', 'images/image1.png'),
('Four-Wheel Alignment', 'Four-wheel alignment, also known as wheel tracking, is a procedure that adjusts the steering, suspension, and angles of all four wheels on a vehicle.', 'images/image2.webp'),
('Thrust Alignment', 'Thrust alignment is a type of wheel alignment that ensures all four wheels are squared with each other.', 'images/images3.jpeg'),
('Dynamic Alignment', 'One of the most difficult concepts for any technician to grasp is how alignment angles change when a vehicle is accelerating, braking and cornering.', 'images/image4.png');

<?php
// db_connection.php is assumed to be included
include 'db_connection.php';

// Insert users
$conn->exec("INSERT INTO user (first_name, last_name, email, password, role, address) VALUES
('John', 'Doeng', 'john.doeng@wavepark.com', 'password123', 'student', '123 Street, City'),
('Jane', 'Smoke', 'jane.smoke@wavepark.com', 'password123', 'teacher', '456 Avenue, City'),
('Alice', 'Brownie', 'alice.brownie@wavepark.com', 'password123', 'admin', '789 Boulevard, City'),
('Michael', 'Johnsonn', 'michael.johnsonn@wavepark.com', 'password123', 'student', '111 Road, Town'),
('Emily', 'Davi', 'emily.davi@wavepark.com', 'password123', 'teacher', '222 Lane, Village'),
('Chris', 'Will', 'chris.will@wavepark.com', 'password123', 'admin', '333 Circle, Metropolis'),
('Sara', 'Moore', 'sara.moore@wavepark.com', 'password123', 'student', '444 Drive, Suburb'),
('Daniel', 'Tay', 'daniel.tay@wavepark.com', 'password123', 'teacher', '555 Parkway, District'),
('Jessi', 'Anderson', 'jessi.anderson@wavepark.com', 'password123', 'admin', '666 Highway, County'),
('David', 'Martin', 'david.martin@wavepark.com', 'password123', 'student', '777 Street, City')");

// Insert categories
$conn->exec("INSERT INTO category (category_id, category_name) VALUES
(1, 'Programming'),
(2, 'Database Management'),
(3, 'Cybersecurity'),
(4, 'Data Science'),
(5, 'Web Development')");

// Insert courses
$conn->exec("INSERT INTO course (course_name, price, instructor_id, instructor_name, rating, category_id, category_name, duration) VALUES
('PHP Development', 299.99, 2, 'Jane Smith', 4.5, 1, 'Programming', 8),
('SQL Basics', 199.99, 2, 'Jane Smith', 4.2, 2, 'Database Management', 6),
('Network Security', 349.99, 3, 'Alice Brown', 4.8, 3, 'Cybersecurity', 10),
('Python for Data Science', 399.99, 5, 'Emily Davis', 4.7, 4, 'Data Science', 12),
('JavaScript Essentials', 249.99, 6, 'Chris Wilson', 4.3, 5, 'Web Development', 7)");

// Insert assignments
$conn->exec("INSERT INTO assignment (course_id, category_id, assignment_name, instructor_id, assignment_link) VALUES
(1, 1, 'PHP Syntax', 2, 'https://example.com/assignment_1'),
(2, 2, 'Database Normalization', 2, 'https://example.com/assignment_2'),
(3, 3, 'Firewall Configuration', 3, 'https://example.com/assignment_3'),
(1, 1, 'PHP Arrays', 2, 'https://example.com/assignment_4'),
(2, 2, 'SQL Joins', 2, 'https://example.com/assignment_5'),
(4, 4, 'Data Visualization with Python', 5, 'https://example.com/assignment_6'),
(5, 5, 'Responsive Web Design', 6, 'https://example.com/assignment_7')");

// Insert assignment submissions
$conn->exec("INSERT INTO assignment_submission (user_id, assignment_id, assignment_name, submission_link) VALUES
(1, 1, 'PHP Syntax', 'https://example.com/submission_1'),
(1, 2, 'Database Normalization', 'https://example.com/submission_2'),
(2, 3, 'Firewall Configuration', 'https://example.com/submission_3'),
(3, 4, 'PHP Arrays', 'https://example.com/submission_4'),
(4, 5, 'SQL Joins', 'https://example.com/submission_5'),
(5, 6, 'Data Visualization with Python', 'https://example.com/submission_6'),
(6, 7, 'Responsive Web Design', 'https://example.com/submission_7')");

// Insert results with scores and grades
$conn->exec("INSERT INTO results (user_id, course_id, result, grade) VALUES
(1, 1, 90, 'A'),
(1, 2, 85, 'B'),
(2, 3, 88, 'B+'),
(3, 1, 75, 'C'),
(3, 2, 92, 'A'),
(2, 1, 89, 'B+'),
(1, 3, 95, 'A+'),
(2, 2, 78, 'C+'),
(3, 3, 81, 'B-'),
(1, 1, 87, 'B')");

// Insert enrollments
$conn->exec("INSERT INTO course_enrolled (user_id, course_id, instructor_id) VALUES
(1, 1, 2),
(1, 2, 2),
(2, 3, 3),
(3, 1, 2),
(3, 2, 2),
(2, 1, 2),
(1, 3, 3)");

// Insert confirmed orders with more data
$conn->exec("INSERT INTO orders_confirmed (o_confirmed_id, order_id, course_id, user_id, confirmed_by) VALUES
(1, 101, 1, 1, 3),
(2, 102, 2, 1, 3),
(3, 103, 3, 2, 3),
(4, 104, 1, 3, 2),
(5, 105, 2, 2, 3),
(6, 106, 3, 1, 2),
(7, 107, 1, 2, 3),
(8, 108, 2, 3, 1),
(9, 109, 3, 3, 2),
(10, 110, 1, 1, 3)");

echo "Dummy data inserted successfully!";
?>

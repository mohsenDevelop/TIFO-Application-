<?php
//STUDENTS
$sql = 
"CREATE TABLE students(
	id INT(9) PRIMARY KEY UNSIGNED AUTO_INCERMENT,
	name VARCHAR(30) NOT NULL,
	phone VARCHAR(12) NOT NULL UNIQUE,
	token VARCHAR(8),
	melli_number VARCHAR(10)
	comfirmed TINYINT(1) DEFAULT 0,

)"
$sql = 
"CREATE TABLE students_follow_teachers(
	student_id INT(9) NOT NULL,
	teacher_id INT(9) NOT NULL
)"
$sql = 
"CREATE TABLE students_bookmarks_posts(
	student_id INT(9) NOT NULL,
	post_id INT(6) NOT NULL
)"
// $sql = 
// "CREATE TABLE students_colleges(
// 	student_id INT(9) NOT NULL,
// 	college_id INT(4) NOT NULL
// )"
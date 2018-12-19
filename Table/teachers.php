<?
//TEACHERS
$sql = 
"CREATE TABLE teachers(
	id INT(9) PRIMARY KEY UNSIGNED AUTO_INCERMENT,
	name VARCHAR(30) NOT NULL,
	phone VARCHAR(12) NOT NULL UNIQUE,
	email VARCHAR(30) NOT NULL UNIQUE,
	job_info VARCHAR(30) NOT NULL,
	picture VARCHAR(60) NOT NULL,
	melli_number VARCHAR(10) NOT NULL UNIQUE,
	password VARCHAR (30) NOT NULL,
	token VARCHAR(8),
	comfirmed TINYINT(1) DEFAULT 0,
)"
// $sql = 
// "CREATE TABLE teachers_posts(
// 	post_id INT(6) NOT NULL,
// 	teacher_id INT(9) NOT NULL
// )"
/*
$sql = 
"CREATE TABLE teachers_courses(
	course_id INT(6) NOT NULL,
	teacher_id INT(9) NOT NULL
)"

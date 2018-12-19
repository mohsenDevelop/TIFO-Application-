<?php
$sql = 
"CREATE TABLE uni_employees(
	id INT(9) PRIMARY KEY UNSIGNED AUTO_INCERMENT,
	name VARCHAR(30) NOT NULL,
	phone VARCHAR(12) NOT NULL UNIQUE,
	email VARCHAR(30) NOT NULL,
	job_info VARCHAR(30) NOT NULL,
	picture VARCHAR(60) NOT NULL
	melli_number VARCHAR(10) NOT NULL UNIQUE,
	password VARCHAR (30) NOT NULL,
	token VARCHAR(8),
	comfirmed TINYINT(1) DEFAULT 0,
)"
$sql = 
"CREATE TABLE employees_posts(
	post_id INT(6) NOT NULL,
	employee_id INT(9) NOT NULL
)"

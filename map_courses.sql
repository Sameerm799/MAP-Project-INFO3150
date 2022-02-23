DROP DATABASE IF EXISTS map_courses;
CREATE DATABASE map_courses; 
USE map_courses; 

CREATE TABLE years(
	yearID			INT(11)			NOT NULL AUTO_INCREMENT, 
	yearName		VARCHAR(255)  	NOT NULL, 
	PRIMARY KEY (yearID)
);

CREATE TABLE courses(
	courseID		INT(11)			NOT NULL AUTO_INCREMENT, 
	yearID			INT(11)			NOT NULL, 
	courseNumber 	INT(4) 	        NOT NULL UNIQUE, 
	courseName		VARCHAR(255) 	NOT NULL, 
	semester		VARCHAR(255)	NOT NULL,
	PRIMARY KEY (courseID)
);

INSERT INTO years VALUES
(1, 'Year 1'), 
(2, 'Year 2');

INSERT INTO courses VALUES
(1, 1, '1212', 'Network 1', 'Fall 2022'), 
(2, 1, '1112', 'Program Structure', 'Fall 2022'),
(3, 2, '2311', 'Network 2', 'Spring 2023'), 
(4, 2, '2313', 'Object Programming', 'Spring 2023'), 
(5, 2, '2315', 'Data Structure', 'Spring 2023');

GRANT SELECT, INSERT, DELETE, UPDATE
ON map_courses.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON courses
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';
DROP DATABASE IF EXISTS class_db;
CREATE DATABASE class_db;
USE class_db;

CREATE TABLE classes (
class_id	INT		NOT NULL, 
class_name VARCHAR(60) NOT NULL, 
class_num VARCHAR(60) NOT NULL,
PRIMARY KEY (class_id)
);

INSERT INTO classes VALUES
(1, 'Network 1', '1212'),
(2, 'Program Structure', '1112'),
(3, 'Network 2', '2311'), 
(4, 'Object Programming', '2313'),
(5, 'Data Structure', '2315');

GRANT SELECT, INSERT, DELETE, UPDATE
ON class_db.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON classes
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

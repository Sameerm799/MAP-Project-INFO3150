DROP DATABASE IF EXISTS map_courses; 
CREATE DATABASE map_courses; 
USE map_courses; 

CREATE TABLE education(
	eduID		INT(11)		NOT NULL AUTO_INCREMENT, 
	eduName		VARCHAR(255)	NOT NULL, 
	PRIMARY KEY (eduID)
);

CREATE TABLE users(
	userID		INT		NOT NULL 	PRIMARY KEY AUTO_INCREMENT,
	username	VARCHAR(255) 	NOT NULL UNIQUE,
	password	VARCHAR(255)	NOT NULL
);

CREATE TABLE degreecourses(
	eduID		INT(11)		NOT NULL, 
	yearID		INT(11)		NOT NULL, 
	courseID	INT(11)		NOT NULL, 
	courseName	VARCHAR(255)	NOT NULL, 
	prereqID	VARCHAR(255)	NOT NULL,
	semester	VARCHAR(255)	NOT NULL,
	userID		INT,
	completed	VARCHAR(255),
	FOREIGN KEY (userID) REFERENCES users(userID)
);

CREATE TABLE diplomacourses(
	eduID		INT(11)		NOT NULL, 
	yearID		INT(11)		NOT NULL, 
	courseID	INT(11)		NOT NULL, 
	courseName	VARCHAR(255)	NOT NULL, 
	prereqID		VARCHAR(255)	NOT NULL,
	semester 	VARCHAR(255) 	NOT NULL,
	userID		INT,
	completed	VARCHAR(255),
	FOREIGN KEY (userID) REFERENCES users(userID)
);

CREATE TABLE electives(
	eduID 		INT(11) 	NOT NULL, 
	yearID		INT(11)		NOT NULL, 
	courseID	INT(11)		NOT NULL, 
	courseName 	VARCHAR(255)	NOT NULL, 
	prereqID	VARCHAR(255)	NOT NULL,
	semester	VARCHAR(255)	NOT NULL,
	userID		INT,
	completed	VARCHAR(255),
	FOREIGN KEY (userID) REFERENCES users(userID)
);

CREATE TABLE comments(
	eduID		INT(11)		NOT NULL, 
	courseID	INT(11)		NOT NULL, 
	commentID	VARCHAR(10000)	NOT NULL
);



INSERT INTO education VALUES
(1, 'Degree'), 
(2, 'Diploma');


INSERT INTO users VALUE
(1, 'tester', 'test123'),
(2, 'studenttest', '123456789');

INSERT INTO degreecourses VALUES
(1,1,1111,'Introduction to Computer Hardware and Software','N/A','Summer 2022 and Winter 2022',1,'Y'),
(1,1,1112,'Principles of Program Structure and Design','N/A','Winter 2022 and Spring 2023',1,'Y'),
(1,1,1113,'System Analysis and Design','N/A','Summer 2022 and Spring 2023',1,'Y'),
(1,1,1211,'Operating System Principles and Applications','N/A','Winter 2022 and Spring 2023',1,'Y'),
(1,1,1212,'Networking Technologies I','N/A','Summer 2022 and Spring 2023',1,'Y'),
(1,1,1213,'Web Application Development','N/A','Summer 2022 and Winter 2022',1,'Y'),
(1,1,1214,'Discrete Mathematics for Information Technology','N/A','Winter 2022 and Spring 2023',1,'Y'),
(1,1,1150,'Basic Logic','N/A','Summer 2022 and Spring 2023',1,'Y'),
(1,1,1140,'Introduction to Professional Communications','N/A','Summer 2022 and Winter 2022',1,'Y'),
(1,1,1230,'Business Statistics','N/A','Winter 2022 and Spring 2023',1,'Y'),
(1,2,1110,'Fundamentals of Business in Canada','N/A','Summer 2022 and Spring 2023',1,'Y'),
(1,2,1140,'Introduction to Professional Communication','N/A', 'Winter 2022 and Spring 2023',1,'Y'),
(1,2,1100,'Introduction to University Writing','N/A','Sumer 2022 and Winter 2022',1,'Y'),
(1,2,2311,'Networking Technologies II','1212','Summer 2023 and Winter 2023',1,'Y'),
(1,2,2312,'Database Management Systems','1113 and 1113','Winter 2023 and Spring 2024',1,'Y'),
(1,2,2313,'Principles of Program Structure and Design II','1112','Summer 2023 and Winter 2023',1,'N'),
(1,2,2315,'Data Structure','2313','Spring 2023 and Summer 2023',1,'N'),
(1,2,2411,'Foundations of Computer Security','1112 and 1212','Summer 2023 and Winter 2023',1,'N'),
(1,2,2413,'System Development Project','2313 and 2313 and 15 credits from INFO 1100 level or higher','Winter 2023 and Spring 2024',1,'N'),
(1,2,2416,'Server Operating Systems','1212 and 1212', 'Summer 2023 and Winter 2023',1,'N'),
(1,3,3110,'Professional Communications in Information Technology','1140 and 1100','Spring 2024 and Summer 2024',1,'N'),
(1,3,3150,'Object-Oriented Software Engineering','2313','Summer 2024 and Winter 2024',1,'N'),
(1,3,3250,'Content Management and Information Architecture','9 credits from INFO at 2000 level', 'Winter 2024 and Spring 2025',1,'N'),
(1,3,3280,'Information Technology Project Management','9 credits from INFO at 2000 level','Spring 2024 and Summer 2024',1,'N'),
(1,4,4190,'Integration Project I','24 credits form INFO at 3000 level','Spring 2025 and Summer 2025',1,'N'),
(1,4,4290,'Integration Project II','4190','Summer 2025 and Winter 2025',1,'N'),
(1,4,4310,'Entrepreneurial Development in Information Technology','12 credits from INFO at 3000 level','Spring 2025 and Winter 2025',1,'N');

INSERT INTO diplomacourses VALUES
(2,1,1111,'Introduction to Computer Hardware and Software','N/A','Summer 2022 and Winter 2022',1,'Y'),
(2,1,1112,'Principles of Program Structure and Design','N/A','Winter 2022 and Spring 2023',1,'Y'),
(2,1,1113,'System Analysis and Design','N/A','Summer 2022 and Spring 2023',1,'Y'),
(2,1,1211,'Operating System Principles and Applications','N/A','Winter 2022 and Spring 2023',1,'Y'),
(2,1,1212,'Networking Technologies I','N/A','Summer 2022 and Spring 2023',1,'Y'),
(2,1,1213,'Web Application Development','N/A','Summer 2022 and Winter 2022',1,'Y'),
(2,1,1214,'Discrete Mathematics for Information Technology','N/A','Winter 2022 and Spring 2023',1,'Y'),
(2,1,1150,'Basic Logic','N/A','Summer 2022 and Spring 2023',1,'Y'),
(2,1,1140,'Introduction to Professional Communications','N/A','Summer 2022 and Winter 2022',1,'Y'),
(2,1,1230,'Business Statistics','N/A','Winter 2022 and Spring 2023',1,'Y'),
(2,2,1110,'Fundamentals of Business in Canada','N/A','Summer 2022 and Spring 2023',1,'Y'),
(2,2,1140,'Introduction to Professional Communication','N/A','Winter 2022 and Spring 2023',1,'Y'),
(2,2,1100,'Introduction to University Writing','N/A','Sumer 2022 and Winter 2022',1,'Y'),
(2,2,2311,'Networking Technologies II','1212','Summer 2023 and Winter 2023',1,'Y'),
(2,2,2312,'Database Management Systems','1113 and 1113','Winter 2023 and Spring 2024',1,'Y'),
(2,2,2313,'Principles of Program Structure and Design II','1112','Summer 2023 and Winter 2023',1,'N'),
(2,2,2315,'Data Structure','2313','Spring 2023 and Summer 2023',1,'N'),
(2,2,2411,'Foundations of Computer Security','1112 and 1212','Summer 2023 and Winter 2023',1,'N'),
(2,2,2413,'System Development Project','2313 and 2313 and 15 credits from INFO 1100 level or higher','Winter 2023 and Spring 2024',1,'N'),
(2,2,2416,'Server Operating Systems','1212 and 1212','Summer 2023 and Winter 2023',1,'N');

INSERT INTO electives VALUES
(1,3,3135,'Advanced Web Application Development','1213 and 2313 and 6 credits from INFO at 2000 level','Spring 2024 and Summer 2024',1,'N'),
(1,3,3171,'System Security','2411 and 6 credits from INFO at 2000 level','Summer 2024 and Winter 2024',1,'N'),
(1,3,3180,'Wireless Networks','2311 and 6 credits from INFO at 2000 level','Spring 2024 and Winter 2024',1,'N'),
(1,3,3225,'Web Multimedia','1213 and 2313 and 9 credits from INFO at 2000 level','Summer 2024 and Winter 2024',1,'N'),
(1,3,3235,'Software Quality Assurance','3150','Spring 2024 and Winter 2024',1,'N'),
(1,3,3240,'Enterprise Resource Planning Systems','2313','Summer 2024 and Winter 2024',1,'N'),
(1,3,3245,'Mobile Programming','2313','Spring 2024 and Winter 2024',1,'N'),
(1,3,3390,'Networking Technologies III','2311','Summer 2024 and Winter 2024',1,'N'),
(1,4,4105,'Search Engine Principles','3135 and 9 credits from INFO at 3000 level','Spring 2025 and Winter 2025',1,'N'),
(1,4,4110,'Cloud Computing','3390 and 12 credits from INFO at 3000 level','Summer 2025 and Winter 2025',1,'N'),
(1,4,4115,'Human Factors and Website Design','3135 and 9 credits from INFO at 3000 level','Spring 2025 and Summer 2025',1,'N'),
(1,4,4120,'Digital Forensics','3171  and 9 credits from INFO at 3000 level','Summer 2025 and Winter 2025',1,'N'),
(1,4,4125,'Website and Cloud Security','2411 and 12 credits from INFO at 3000 level','Spring 2025 and Summer 2025',1,'N'),
(1,4,4235,'Special Topics in Web and Mobile Application Development','3135 and 9 credits from INFO at 3000 level','Summer 2025 and Winter 2025',1,'N'),
(1,4,4260,'Networking Technologies IV','3390 and 12 credits from INFO at 3000 level','Spring 2025 and Winter 2025',1,'N'),
(1,4,4330,'Data Warehousing and Data Mining','2312 and 12 credits from INFO at 3000 level','Summer 2025 and Winter 2025',1,'N'),
(1,4,4370,'Security of Wireless Systems','3180 and 9 credits from INFO at 3000 level','Spring 2025 and Summer 2025',1,'N'),
(1,4,4381,'Internet of Things and Applications','3180 and 9 credits from INFO at 3000 level','Spring 2025 and Winter 2025',1,'N'),
(2,0,0,'No electives for diploma','N/A','N/A',1,'N');

INSERT INTO comments VALUES
(1, 1111, 'It was very fun to learn about how a computers hardware and software works.'),
(1, 2416, 'Wish there was more hands-on work with all the different operating systems. Learning about Linux and not being able to try hands-on was very unfortuante. PLEASE ADD HANDS-ON LEARNING');


GRANT SELECT, INSERT, DELETE, UPDATE
ON map_courses.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON degreecourses
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON diplomacourses
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON electives
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON comments
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT 
ON users
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';
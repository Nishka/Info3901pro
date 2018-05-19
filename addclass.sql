create table addclass(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
coursenumber varchar(100) NOT NULL,
coursename varchar(100) NOT NULL,
UNIQUE(coursename, coursenumber)
);
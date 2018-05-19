create table addclass(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
coursenumber varchar(20) NOT NULL, 
coursename varchar(50) NOT NULL,
UNIQUE(coursename, coursenumber)
);

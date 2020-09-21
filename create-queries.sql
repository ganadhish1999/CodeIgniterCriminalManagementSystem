CREATE TABLE police(
id int(11) NOT NULL AUTO_INCREMENT, 
name varchar(255) NOT NULL, 
age int(2) NOT NULL,
address varchar(255) NOT NULL, 
department varchar(255) NOT NULL, 
phone_number varchar(10) NOT NULL,
email varchar(255) NOT NULL, 
password varchar(255) NOT NULL, 

PRIMARY KEY (id)
) ENGINE=InnoDB;


CREATE TABLE criminal(
id int(11) NOT NULL AUTO_INCREMENT, 
name varchar(255) NOT NULL, 
age int(2) NOT NULL,
crime varchar(255) NOT NULL,
register_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, 
police_id int(11),

PRIMARY KEY (id),
FOREIGN KEY (police_id) REFERENCES police(id)
) ENGINE=InnoDB;
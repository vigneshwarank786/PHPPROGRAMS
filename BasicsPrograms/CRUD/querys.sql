



CREATE DATABASE CRUD;



USE CRUD;



CREATE TABLE IT(emp_id INT,emp_name VARCHAR(20) NOT NULL,emp_role VARCHAR(30) NOT NULL,emp_salary INT NOT NULL,email varchar(100) NOT NULL, PRIMARY KEY (emp_id));



INSERT INTO IT(emp_name,emp_role,emp_salary,email)values("ram","frontend",1000,"ram@gmail.com");


ALTER TABLE IT MODIFY emp_id INTEGER NOT NULL AUTO_INCREMENT;

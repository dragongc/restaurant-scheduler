create database RESTaurantAssured;

use RESTaurantAssured;

create table Employee (
	emp_num int(32) NOT NULL AUTO_INCREMENT primary key,
    emp_firstname varchar(32),
    emp_lastname varchar(32),
    hire_date date,
    title varchar(12),
    email varchar(32),
    description tinytext,
    username varchar(24) not null,
    password varchar(256) not null
    );

ALTER TABLE Employee AUTO_INCREMENT=10;
ALTER TABLE Employee
modify column description text;
describe employee;

select *
from employee;

update employee
set description = "I've worked here for ever and I am tired."
where emp_num = 10;




    











<?php
require_once "errors.php";
$server_name='localhost';
$username='root';
$password='';
$database='tcd';


$connection=mysqli_connect($server_name,$username,$password,$database);
if(!$connection){
    die('not connected'.mysqli_connect_error());
}
$query_for_table_employees="CREATE TABLE employee(
    emp_id INT PRIMARY KEY,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    birth_date DATE,
    sex VARCHAR(1),
    salary INT,
    super_id INT,
    branch_id INT,
   
    
);";

$query_for_table_branch="CREATE TABLE branch(
    branch_id INT PRIMARY KEY,
    branch_name VARCHAR(20),
    mgr_id INT,
    mgr_start_date DATE,
    FOREIGN KEY (mgr_id) REFERENCES employee(emp_id) ON DELETE SET NULL 
);";

$query_for_alter_empl_table_1="ALTER TABLE employee
 ADD
 FOREIGN KEY (super_id) REFERENCES employee(emp_id) 
 ON DELETE SET NULL";

$query_for_alter_empl_table_2="ALTER TABLE employee
 ADD
 FOREIGN KEY (branch_id) REFERENCES branch(branch_id)
 ON DELETE SET NULL";

$query_for_table_client="CREATE TABLE client(
    client_id INT PRIMARY KEY,
    client_name VARCHAR(20),
    branch_id INT,
    FOREIGN KEY (branch_id) REFERENCES branch(branch_id) ON DELETE SET NULL 
);";
/*$query_create_table="CREATE TABLE student(
    roll_number INT PRIMARY KEY,
    name VARCHAR(20),
    cgpa DECIMAL(2,1)
);";
$query_drop_table="DROP TABLE student";
$query_to_add_column="ALTER TABLE student ADD gender VARCHAR(1)";
$query_to_drop_column="ALTER TABLE student DROP COLUMN name";
$query_to_insert_values="INSERT INTO student(roll_number, name, cgpa) VALUES(4,null,8.3)";
$query_to_update_row="UPDATE student
SET name='mitesh'
WHERE roll_number=3 AND cgpa=5";
$query_to_delete_row="DELETE FROM student
WHERE roll_number=1";
$query_to_name="SELECT *
FROM student
ORDER BY name";
$query_to_create_alias="SELECT *
FROM student AS stu";
$query_to_show_dbs="SHOW DATABASES;";
$backup_db="BACKUP DATABASE tcd
TO DISK = '/desktop/TCD_project'";*/
$create_table=mysqli_query($connection,$query_for_table_client);
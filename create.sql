drop TABLE IF EXISTS Operates;
drop TABLE IF EXISTS Account;
drop TABLE IF EXISTS Transaction_table;
drop TABLE IF EXISTS ATM;
drop TABLE IF EXISTS Account_Type;
drop TABLE IF EXISTS Customer;
drop TABLE IF EXISTS Branch;
drop TABLE IF EXISTS Bank;
drop TABLE IF EXISTS login;
create table login
(
  id int NOT NULL AUTO_INCREMENT,
  user varchar(20),
  pass varchar(20),
  primary key(id)
);
insert into login(user,pass) values ('admin','admin');
insert into login(user,pass) values ('sajib','114');
CREATE TABLE Bank
(
  Bank_id INT NOT NULL,
  Bank_name varchar(20) NOT NULL,
  bank_location varchar(20) NOT NULL,
  PRIMARY KEY (Bank_id)
);
alter table Bank 
drop column Bank_name;

alter table Bank
add Bank_name varchar(20);

CREATE TABLE Branch
(
  Branch_id INT NOT NULL,
  Branch_name varchar(20) NOT NULL,
  Branch_location varchar(20) NOT NULL,
  Bank_id INT NOT NULL,
  PRIMARY KEY (Branch_id),
  FOREIGN KEY (Bank_id) REFERENCES Bank(Bank_id) on delete cascade
);

CREATE TABLE Customer
(
  customer_id INT NOT NULL,
  customer_name varchar(20) NOT NULL,
  customer_add varchar(40) NOT NULL,
  phone_no varchar(20) NOT NULL,
  PRIMARY KEY (customer_id) 
);

CREATE TABLE Account_Type
(
  Account_type_name varchar(20) NOT NULL,
  Account_type_id INT NOT NULL,
  PRIMARY KEY (Account_type_id)
);

CREATE TABLE ATM
(
  atm_id INT NOT NULL,
  cash_limit float NOT NULL,
  location varchar(20) NOT NULL,
  Branch_id INT NOT NULL,
  PRIMARY KEY (atm_id),
  FOREIGN KEY (Branch_id) REFERENCES Branch(Branch_id) on delete cascade
);

CREATE TABLE Transaction_table
(
  Transaction_id INT NOT NULL AUTO_INCREMENT,
  Transaction_type varchar(10),
  transaction_amount int default 0, check(transaction_amount>=500),
  customer_id INT NOT NULL,
  PRIMARY KEY (Transaction_id),
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id) on delete cascade
);

CREATE TABLE Account
(
  balance INT NOT NULL,
  account_id INT NOT NULL,
  customer_id INT NOT NULL,
  Account_type_id INT NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id) on delete cascade,
  FOREIGN KEY (Account_type_id) REFERENCES Account_Type(Account_type_id) on delete cascade
);

CREATE TABLE Operates
(
  atm_id INT NOT NULL,
  customer_id INT NOT NULL,
  PRIMARY KEY (atm_id, customer_id),
  FOREIGN KEY (atm_id) REFERENCES ATM(atm_id) on delete cascade,
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id) on delete cascade
);
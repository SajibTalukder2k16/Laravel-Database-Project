DROP TRIGGER if EXISTS cashcheck_update;

DELIMITER $$
CREATE TRIGGER cashcheck_update BEFORE UPDATE ON customer
FOR EACH ROW 
SET NEW.cash=New.cash-mod(New.cash,500);
$$

DROP TRIGGER if EXISTS cashcheck_insert ;

DELIMITER $$
CREATE TRIGGER cashcheck_insert BEFORE INSERT ON customer
FOR EACH ROW 
SET NEW.cash=New.cash-mod(New.cash,500);
$$



DROP TRIGGER if EXISTS cashcheck_update_atm;

DELIMITER $$
CREATE TRIGGER cashcheck_update_atm BEFORE UPDATE ON atm
FOR EACH ROW 
SET NEW.cash_amount=New.cash_amount-mod(New.cash_amount,500);
$$

DROP TRIGGER if EXISTS cashcheck_insert_atm ;

DELIMITER $$
CREATE TRIGGER cashcheck_insert_atm BEFORE INSERT ON atm
FOR EACH ROW 
SET NEW.cash_amount=New.cash_amount-mod(New.cash_amount,500);
$$


DROP TRIGGER if EXISTS cashcheck_update_transaction;

DELIMITER $$
CREATE TRIGGER cashcheck_update_transaction BEFORE UPDATE ON transaction_table
FOR EACH ROW 
SET NEW.transaction_amount=New.transaction_amount-mod(New.transaction_amount,500);
$$

DROP TRIGGER if EXISTS cashcheck_insert_transaction ;

DELIMITER $$
CREATE TRIGGER cashcheck_insert_transaction BEFORE INSERT ON transaction_table
FOR EACH ROW 
SET NEW.transaction_amount=New.transaction_amount-mod(New.transaction_amount,500);
$$


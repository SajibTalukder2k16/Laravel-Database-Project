drop procedure if exists getall
DELIMITER $$
 CREATE PROCEDURE getall()
   BEGIN
   SELECT customer_id,phone_no FROM customer left join transaction_table using(customer_id) where transaction_table.customer_id is null;
   END $$
 DELIMITER ;
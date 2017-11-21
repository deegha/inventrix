<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-21 19:56:37 --> Severity: Notice --> Undefined index: store_id C:\xampp\htdocs\inventrix\application\models\Admin.php 141
ERROR - 2017-11-21 19:56:37 --> Severity: Notice --> Undefined index: store_id C:\xampp\htdocs\inventrix\application\models\Admin.php 141
ERROR - 2017-11-21 19:56:55 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:00:21 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:00:54 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:02:26 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:02:48 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:04:00 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:04:29 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:05:00 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:06:41 --> Severity: Notice --> Undefined property: stdClass::$store_id C:\xampp\htdocs\inventrix\application\controllers\Home.php 85
ERROR - 2017-11-21 20:17:06 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:06 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:06 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:07 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:08 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:09 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:09 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:10 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:11 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:11 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:16 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:17 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:17 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:17:17 --> 404 Page Not Found: Search/adminsearch
ERROR - 2017-11-21 20:34:45 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `store_id` = 1
GROUP BY `ref`
ORDER BY `transId` DESC
 LIMIT 10
ERROR - 2017-11-21 20:35:40 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `store_id` = '1'
GROUP BY `ref`
ORDER BY `transId` DESC
 LIMIT 10
ERROR - 2017-11-21 20:40:50 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:52 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:53 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:54 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%06950%' ESCAPE '!'
OR  `itemName` LIKE '%06950%' ESCAPE '!'
OR  `itemCode` LIKE '%06950%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:54 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%0695%' ESCAPE '!'
OR  `itemName` LIKE '%0695%' ESCAPE '!'
OR  `itemCode` LIKE '%0695%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:54 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069%' ESCAPE '!'
OR  `itemName` LIKE '%069%' ESCAPE '!'
OR  `itemCode` LIKE '%069%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:54 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%06%' ESCAPE '!'
OR  `itemName` LIKE '%06%' ESCAPE '!'
OR  `itemCode` LIKE '%06%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:40:55 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%0%' ESCAPE '!'
OR  `itemName` LIKE '%0%' ESCAPE '!'
OR  `itemCode` LIKE '%0%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:41:03 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:41:05 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 20:41:05 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `transactions`.`ref`, `transactions`.`totalMoneySpent`, `transactions`.`modeOfPayment`, `transactions`.`staffId`, `transactions`.`transDate`, `transactions`.`lastUpdated`, `transactions`.`amountTendered`, `transactions`.`changeDue`, CONCAT_WS(" ", `admin`.`first_name`, admin.last_name) as "staffName", `transactions`.`cust_name`, `transactions`.`cust_phone`, `transactions`.`cust_email`, SUM(`transactions`.`quantity`) AS `quantity`
FROM `transactions`
LEFT JOIN `admin` ON `transactions`.`staffId` = `admin`.`id`
WHERE `ref` LIKE '%069506%' ESCAPE '!'
OR  `itemName` LIKE '%069506%' ESCAPE '!'
OR  `itemCode` LIKE '%069506%' ESCAPE '!'
AND `store_id` = '1'
GROUP BY `ref`
ERROR - 2017-11-21 21:09:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1 GROUP BY transactions.itemCode ORDER BY totSold DESC LIMIT 5' at line 2 - Invalid query: SELECT items.name, SUM(transactions.quantity) as 'totSold' FROM items 
                INNER JOIN transactions ON items.code=transactions.itemCode WHERE transactions.store_id 1 GROUP BY transactions.itemCode ORDER BY totSold DESC LIMIT 5
ERROR - 2017-11-21 21:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE transactions.store_id = 1
               ORDER BY totEarned ASC LIMIT 5' at line 4 - Invalid query: SELECT items.name, SUM(transactions.totalPrice) as 'totEarned' FROM items 
               INNER JOIN transactions ON items.code=transactions.itemCode 
               GROUP BY transactions.itemCode 
               WHERE transactions.store_id = 1
               ORDER BY totEarned ASC LIMIT 5

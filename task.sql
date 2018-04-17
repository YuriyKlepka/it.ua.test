/*Task 1*/
CREATE TABLE `shop`.`menu` ( `ID` INT(4) NOT NULL AUTO_INCREMENT ,
                             `NAME` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
                             `PARENT_ID` INT(4) NULL DEFAULT NULL , PRIMARY KEY (`ID`))
                             ENGINE = InnoDB;

/*Task 2*/
INSERT INTO `menu` VALUES (NULL, 'Parent', NULL);
INSERT INTO `menu` VALUES(NULL,'ChildOne',1);
INSERT INTO `menu` VALUES(NULL,'ChildTwo',1);
INSERT INTO `menu` VALUES(NULL,'ParentTwo',NULL);

/*Task 3*/
SELECT * FROM `menu` WHERE `PARENT_ID` != 'NULL';

/*Task 4*/
UPDATE `menu` SET `NAME` = 'ParentChange' WHERE `NAME` = 'Parent';

/*Task 5*/
DELETE FROM `menu` WHERE `PARENT_ID` != 'NULL';
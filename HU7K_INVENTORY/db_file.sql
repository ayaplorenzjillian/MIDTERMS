CREATE DATABASE IF NOT EXISTS db_wbapp;
    USE `db_wbapp`;

    DROP TABLE IF EXISTS `tbl_users`;
    CREATE TABLE `tbl_users` (
    `user_id` int(8) unsigned NOT NULL auto_increment, 
    `user_lastname` varchar(180) NOT NULL,
    `user_firstname` varchar(180) NOT NULL,
    `user_email` varchar(180) NOT NULL,
    `user_password` varchar(180) NOT NULL,
    `user_date_added` date NOT NULL,
    `user_time_added` time NOT NULL,	
    `user_date_updated` date NOT NULL,
    `user_time_updated` time NOT NULL,
    `user_status` int(1) NOT NULL,
    `user_token` varchar(255) NOT NULL,
    `user_access` varchar(255) NOT NULL,
    PRIMARY KEY  (`user_id`)
    );

    DROP TABLE IF EXISTS `tbl_product`;
    CREATE TABLE `tbl_product` ( 
    `prod_id` int(100) unsigned NOT NULL auto_increment, 
    `prod_name` varchar(180) NOT NULL, 
    `prod_description` varchar(180) NOT NULL, 
    `prod_date_added` date NOT NULL,
    `prod_time_added` time NOT NULL,	
    `prod_date_updated` date NOT NULL,
    `prod_time_updated` time NOT NULL,	
    `prod_status` int(1) NOT NULL,
    `type_id` int(3) NOT NULL default,
    PRIMARY KEY (`prod_id`), 
    KEY (`type_id`) 
    );

DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE `tbl_type` (
  `type_id` int(10) unsigned NOT NULL auto_increment, 
 `type_name` varchar(180) NOT NULL,
  `type_date_added` date NOT NULL,
  `type_time_added` time NOT NULL,	
  `type_date_updated` date NOT NULL,
  `type_time_updated` time NOT NULL,	
  `type_status` int(180) NOT NULL,
  PRIMARY KEY  (type_id)
);
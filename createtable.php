<?php
//connect to MySQL
include_once 'config.php';

$query = 'DROP TABLE IF EXISTS rnmembers';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE rnmembers (
        id            INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        user          VARCHAR(16)       NOT NULL,
        pass          VARCHAR(255)       NOT NULL,
        name          VARCHAR(255)       NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS devices';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE devices (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        token        VARCHAR(255)      NOT NULL,
        userid       VARCHAR(255)      NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS tbl_images';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE tbl_images (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        url          VARCHAR(255)      NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS messages';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE messages (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        sender          VARCHAR(255)      NOT NULL,
        receiver        VARCHAR(255)      NOT NULL,
        url             VARCHAR(255)      NOT NULL,
        time            VARCHAR(255)      NOT NULL,
        captions        VARCHAR(255)      NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

/*$query = 'DROP TABLE IF EXISTS frequents';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE frequents (
        id            INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        item          VARCHAR(255)       NOT NULL,
        promotion     VARCHAR(255)       NOT NULL,
        merchant      INTEGER           NOT NULL,
        frequency     INTEGER           NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));
$query = 'DROP TABLE IF EXISTS menus';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE menus (
        id            INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        item          VARCHAR(255)       NOT NULL,
        price         VARCHAR(255)       NOT NULL,
        merchant      INTEGER           NOT NULL,
        category     INTEGER           NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS menus_main';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE menus_main (
        id            INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        category      VARCHAR(255)       NOT NULL,
        merchant      INTEGER           NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));*/

echo 'Database successfully created!';
?>
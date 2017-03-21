CREATE DATABASE IF NOT EXISTS `shoplife`;
USE `shoplife`;
-- 创建管理员表
DROP TABLE IF EXISTS `life_admin`;
CREATE TABLE `life_admin`(
`id` tinyint unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` char(32) not null,
`email` varchar(50) not null
);

-- 分类表
DROP TABLE IF EXISTS `life_cate`;
CREATE TABLE `life_cate`(
`id` smallint unsigned auto_increment key,
cName varchar(50) unique
);

-- 商品表
DROP TABLE IF EXISTS `life_pro`;
CREATE TABLE `life_pro`(
`id` smallint unsigned not null auto_increment key,
`pName` varchar(50) not null unique,
`cId` smallint unsigned not null,
`pSn` varchar(50) not null,
`pNum` int unsigned default 1,
`mPrice` decimal(10,2) not null,
`iPrice` decimal(10,2) not null,
`pDesc` text,
`pImg` varchar(50) not null,
`pubTime` int unsigned not null,
`isShow` tinyint(1) default 1,
`isHot` tinyint(1) default 0
);

-- 用户表
DROP TABLE IF EXISTS `life_user`;
CREATE TABLE `life_user`(
`id` int unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` char(32) not null,
`sex` enum("男","女","保密") not null default "保密",
`face` varchar(50) not null,
`regTime` int unsigned not null
)charset='utf8';

-- 相册表
DROP TABLE IF EXISTS `life_album`;
CREATE TABLE `life_album`(
`id` int unsigned auto_increment key,
`pid` int unsigned not null,
`albumPath` varchar(50) not null
);
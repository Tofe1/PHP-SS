-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?01 �?02 �?01:41
-- 服务器版本: 5.1.40-community
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `sw_goods`
--

CREATE TABLE IF NOT EXISTS `sw_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `goods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '名字',
  `goods_category` tinyint(4) NOT NULL,
  `goods_price` float NOT NULL COMMENT '价格',
  `goods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `goods_introduce` text COLLATE utf8_unicode_ci NOT NULL COMMENT '介绍',
  `goods_big_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片',
  `goods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='前台商品表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `sw_goods`
--

INSERT INTO `sw_goods` (`goods_id`, `goods_name`, `goods_category`, `goods_price`, `goods_number`, `goods_introduce`, `goods_big_img`, `goods_small_img`) VALUES
(1, 'iphone', 1, 1000, 100, 'agawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(2, 'iaagagag', 2, 5000, 160, 'ahaghgawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(3, 'mi', 1, 1000, 100, 'agawgaqrfag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(4, 'hua', 2, 2400, 600, 'agawwgwggag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(5, 'bnag', 1, 1500, 70, 'agawaggawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(6, 'iphone1', 2, 2500, 100, 'agfagaa', '2018-01-01/5a49d9d473a04.jpg', '2018-01-01/small_5a49d9d473a04.jpg'),
(7, 'huawei', 1, 5777, 600, 'agwagaa24241', '2018-01-01/5a4a339a19906.jpg', '2018-01-01/small_5a4a339a19906.jpg'),
(8, 'ipad', 3, 23600, 100, 'aggwg', '2018-01-02/5a4a6864c1ab5.jpg', '2018-01-02/small_5a4a6864c1ab5.jpg'),
(9, 'ipad', 3, 23600, 100, 'aggwg', '2018-01-02/5a4a6a34e1f4d.jpg', '2018-01-02/small_5a4a6a34e1f4d.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sw_hgoods`
--

CREATE TABLE IF NOT EXISTS `sw_hgoods` (
  `hgoods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `hgoods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '名字',
  `hgoods_price` float NOT NULL COMMENT '价格',
  `hgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `hgoods_introduce` text COLLATE utf8_unicode_ci NOT NULL COMMENT '介绍',
  `hgoods_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片',
  `hgoods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`hgoods_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='前台商品表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sw_hgoods`
--

INSERT INTO `sw_hgoods` (`hgoods_id`, `hgoods_name`, `hgoods_price`, `hgoods_number`, `hgoods_introduce`, `hgoods_img`, `hgoods_small_img`) VALUES
(1, 'iphone', 1000, 100, 'agawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(2, 'iaagagag', 5000, 160, 'ahaghgawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(3, 'mi', 1000, 100, 'agawgaqrfag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(4, 'hua', 2400, 600, 'agawwgwggag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg'),
(5, 'bnag', 1500, 70, 'agawaggawgag', '/Application/Home/Public/img/demo/1.jpg', '/Application/Home/Public/img/demo/thumb1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sw_mgoods`
--

CREATE TABLE IF NOT EXISTS `sw_mgoods` (
  `mgoods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `mgoods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '名字',
  `mgoods_price` float NOT NULL COMMENT '价格',
  `mgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `mgoods_introduce` text COLLATE utf8_unicode_ci NOT NULL COMMENT '介绍',
  `mgoods_big_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片',
  `mgoods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`mgoods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='手机商品表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sw_pgoods`
--

CREATE TABLE IF NOT EXISTS `sw_pgoods` (
  `pgoods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `pgoods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '名字',
  `pgoods_price` float NOT NULL COMMENT '价格',
  `pgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `pgoods_introduce` text COLLATE utf8_unicode_ci NOT NULL COMMENT '介绍',
  `pgoods_big_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片',
  `pgoods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`pgoods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='平板商品表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

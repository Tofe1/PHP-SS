DROP TABLE IF EXISTS `sw_hgoods`;
CREATE TABLE `sw_hgoods` (
  `hgoods_id` int(11) NOT NULL auto_increment COMMENT '自增id',
  `hgoods_name` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '名字',
  `hgoods_price` float NOT NULL COMMENT '价格',
  `hgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `hgoods_introduce` text collate utf8_unicode_ci NOT NULL COMMENT '介绍',
  `hgoods_big_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '图片',
  `hgoods_small_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY  (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='前台商品表';

DROP TABLE IF EXISTS `sw_mgoods`;
CREATE TABLE `sw_mgoods` (
  `mgoods_id` int(11) NOT NULL auto_increment COMMENT '自增id',
  `mgoods_name` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '名字',
  `mgoods_price` float NOT NULL COMMENT '价格',
  `mgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `mgoods_introduce` text collate utf8_unicode_ci NOT NULL COMMENT '介绍',
  `mgoods_big_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '图片',
  `mgoods_small_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY  (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='手机商品表';

DROP TABLE IF EXISTS `sw_pgoods`;
CREATE TABLE `sw_pgoods` (
  `pgoods_id` int(11) NOT NULL auto_increment COMMENT '自增id',
  `pgoods_name` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '名字',
  `pgoods_price` float NOT NULL COMMENT '价格',
  `pgoods_number` int(11) NOT NULL COMMENT '商品库存数量',
  `pgoods_introduce` text collate utf8_unicode_ci NOT NULL COMMENT '介绍',
  `pgoods_big_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '图片',
  `pgoods_small_img` varchar(128) collate utf8_unicode_ci NOT NULL COMMENT '缩略图',
  PRIMARY KEY  (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='平板商品表';

insert into sw_hgoods values ('1','iphone',1000,100,'agawgag','','');
insert into sw_hgoods values ('2','iaagagag',5000,160,'ahaghgawgag','','');
insert into sw_hgoods values ('3','mi',1000,100,'agawgaqrfag','','');
insert into sw_hgoods values ('4','hua',2400,600,'agawwgwggag','','');
insert into sw_hgoods values ('5','bnag',1500,70,'agawaggawgag','','');
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 27, 2020 at 05:39 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `suphason`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `OrderID` int(5) unsigned zerofill NOT NULL auto_increment,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `play_bank` varchar(1000) NOT NULL,
  `money_bank` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL,
  `Order_pay` enum('ตรวจสอบแล้ว','ยังไม่ได้ตรวจสอบ') NOT NULL default 'ยังไม่ได้ตรวจสอบ',
  PRIMARY KEY  (`OrderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- 
-- Dumping data for table `orders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `orders_detail`
-- 

CREATE TABLE `orders_detail` (
  `DetailID` int(5) NOT NULL auto_increment,
  `OrderID` int(5) unsigned zerofill NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(3) NOT NULL,
  PRIMARY KEY  (`DetailID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

-- 
-- Dumping data for table `orders_detail`
-- 

INSERT INTO `orders_detail` VALUES (16, 00015, 35, 1);
INSERT INTO `orders_detail` VALUES (15, 00014, 3, 2);
INSERT INTO `orders_detail` VALUES (14, 00013, 3, 2);
INSERT INTO `orders_detail` VALUES (13, 00012, 3, 1);
INSERT INTO `orders_detail` VALUES (12, 00011, 3, 1);
INSERT INTO `orders_detail` VALUES (11, 00010, 3, 1);
INSERT INTO `orders_detail` VALUES (10, 00008, 3, 1);
INSERT INTO `orders_detail` VALUES (9, 00007, 31, 1);
INSERT INTO `orders_detail` VALUES (17, 00016, 3, 1);
INSERT INTO `orders_detail` VALUES (18, 00017, 3, 1);
INSERT INTO `orders_detail` VALUES (19, 00018, 31, 1);
INSERT INTO `orders_detail` VALUES (20, 00019, 40, 1);
INSERT INTO `orders_detail` VALUES (21, 00019, 3, 1);
INSERT INTO `orders_detail` VALUES (22, 00020, 3, 1);
INSERT INTO `orders_detail` VALUES (23, 00021, 35, 1);
INSERT INTO `orders_detail` VALUES (24, 00021, 3, 1);
INSERT INTO `orders_detail` VALUES (25, 00021, 34, 1);
INSERT INTO `orders_detail` VALUES (26, 00021, 29, 1);
INSERT INTO `orders_detail` VALUES (27, 00021, 40, 1);
INSERT INTO `orders_detail` VALUES (28, 00021, 41, 1);
INSERT INTO `orders_detail` VALUES (29, 00022, 37, 1);
INSERT INTO `orders_detail` VALUES (30, 00023, 35, 1);
INSERT INTO `orders_detail` VALUES (31, 00024, 35, 1);
INSERT INTO `orders_detail` VALUES (32, 00025, 35, 1);
INSERT INTO `orders_detail` VALUES (33, 00026, 29, 1);
INSERT INTO `orders_detail` VALUES (34, 00026, 3, 1);
INSERT INTO `orders_detail` VALUES (35, 00027, 35, 1);
INSERT INTO `orders_detail` VALUES (36, 00028, 3, 1);
INSERT INTO `orders_detail` VALUES (37, 00029, 35, 1);
INSERT INTO `orders_detail` VALUES (38, 00030, 3, 1);
INSERT INTO `orders_detail` VALUES (39, 00031, 35, 1);
INSERT INTO `orders_detail` VALUES (40, 00032, 35, 1);
INSERT INTO `orders_detail` VALUES (41, 00033, 35, 1);
INSERT INTO `orders_detail` VALUES (42, 00034, 29, 1);
INSERT INTO `orders_detail` VALUES (43, 00035, 29, 1);
INSERT INTO `orders_detail` VALUES (44, 00036, 45, 1);
INSERT INTO `orders_detail` VALUES (45, 00036, 35, 1);
INSERT INTO `orders_detail` VALUES (46, 00037, 3, 1);
INSERT INTO `orders_detail` VALUES (47, 00037, 30, 1);
INSERT INTO `orders_detail` VALUES (48, 00038, 3, 1);
INSERT INTO `orders_detail` VALUES (49, 00038, 35, 1);
INSERT INTO `orders_detail` VALUES (50, 00039, 35, 1);
INSERT INTO `orders_detail` VALUES (51, 00039, 44, 1);
INSERT INTO `orders_detail` VALUES (52, 00040, 35, 2);
INSERT INTO `orders_detail` VALUES (53, 00041, 30, 1);
INSERT INTO `orders_detail` VALUES (54, 00041, 49, 1);
INSERT INTO `orders_detail` VALUES (55, 00042, 35, 1);
INSERT INTO `orders_detail` VALUES (56, 00042, 29, 1);
INSERT INTO `orders_detail` VALUES (57, 00043, 44, 1);
INSERT INTO `orders_detail` VALUES (58, 00044, 49, 2);
INSERT INTO `orders_detail` VALUES (59, 00045, 49, 15);
INSERT INTO `orders_detail` VALUES (60, 00046, 49, 3);
INSERT INTO `orders_detail` VALUES (61, 00047, 35, 20);
INSERT INTO `orders_detail` VALUES (62, 00048, 29, 21);
INSERT INTO `orders_detail` VALUES (63, 00049, 31, 1);
INSERT INTO `orders_detail` VALUES (64, 00050, 29, 1);
INSERT INTO `orders_detail` VALUES (65, 00051, 37, 1);
INSERT INTO `orders_detail` VALUES (66, 00052, 44, 20);
INSERT INTO `orders_detail` VALUES (67, 00053, 37, 69);
INSERT INTO `orders_detail` VALUES (68, 00054, 34, 1);
INSERT INTO `orders_detail` VALUES (69, 00055, 30, 2);
INSERT INTO `orders_detail` VALUES (70, 00056, 31, 1);
INSERT INTO `orders_detail` VALUES (71, 00057, 48, 2);
INSERT INTO `orders_detail` VALUES (72, 00057, 54, 1);
INSERT INTO `orders_detail` VALUES (73, 00057, 53, 1);
INSERT INTO `orders_detail` VALUES (74, 00058, 48, 1);
INSERT INTO `orders_detail` VALUES (75, 00059, 79, 1);
INSERT INTO `orders_detail` VALUES (76, 00060, 77, 1);
INSERT INTO `orders_detail` VALUES (77, 00060, 79, 2);
INSERT INTO `orders_detail` VALUES (78, 00061, 55, 1);
INSERT INTO `orders_detail` VALUES (79, 00062, 75, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL auto_increment,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float NOT NULL,
  `p_view` varchar(100) NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_img2` varchar(100) NOT NULL,
  `p_img3` varchar(100) NOT NULL,
  `p_img4` varchar(100) NOT NULL,
  `p_number` varchar(50) NOT NULL default '500',
  `c_id` int(3) NOT NULL,
  `new_id` int(3) NOT NULL,
  `sale_id` int(3) NOT NULL,
  `sale_price` varchar(1000) NOT NULL,
  `data_save` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `sumQty` varchar(50) NOT NULL,
  PRIMARY KEY  (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (56, 'ชุดแข่ง ADIDAS MANCHESTER UNITED 2019/20 ', 'เสื้อฟุตบอล ทีม MANCHESTER UNITED 2019/20 (ชุดเหย้า แมนเชสเตอร์ ยูไนเต็ด ฤดูกาล 2019/2020', 4300, '1', '190763055120190711_203153.jpg', '', '', '', '499', 1, 1, 0, '', '2020-02-27 09:06:38', '1');
INSERT INTO `product` VALUES (55, 'รองเท้าสตั๊ด MIZUNO MORELIA NEO II JAPAN - BLACK/BLUE', 'รองเท้าสตั๊ด MIZUNO MORELIA NEO II JAPAN - BLACK/BLUE (มิซูโน่ มูเรียล นีโอ เจแปน)', 7120, '60', '167316291820191206_103445.jpg', '', '', '', '498', 2, 0, 1, '7500', '2020-02-27 09:06:33', '2');
INSERT INTO `product` VALUES (54, 'ถุงมือ APD ARRUK NEG THAI FLAG - THAI/FLAG', 'ถุงมือผู้รักษาประตู ทีมชาติไทย APD ARRUK NEG THAI FLAG - THAI/FLAG', 2100, '7', '187741936820191206_102913.jpg', '', '', '', '439', 4, 0, 0, '', '2020-02-27 08:59:23', '61');
INSERT INTO `product` VALUES (53, 'ADIDAS PREDATOR 19+ FG - GOLDMT/FOOBLU', 'Adidas Predator 19+ FG (รองเท้าสตั๊ดอดิดาส ดีเดเตอร์ 19+ เอฟจี)', 10500, '1', '5460114620191206_102511.jpg', '', '', '', '447', 2, 0, 0, '', '2020-02-27 08:58:59', '53');
INSERT INTO `product` VALUES (48, 'ADIDAS BELGIUM 2020 HOME JERSEY - COLRED', 'เสื้อทีมชาติ BELGIUM 2020 (เบลเยี่ยม) ชุดลุยฟุตบอลโลก ', 2800, '', '103571263520191206_101548.jpg', '', '', '', '394', 1, 0, 0, '', '2019-12-09 20:27:56', '106');
INSERT INTO `product` VALUES (61, 'รองเท้าสตั๊ด NIKE MERCURIAL SUPERFLY 7 ELITE', 'NIKE MERCURIAL SUPERFLY 7 ELITE MDS FG - BLUE VOID (ไนส์กี้ เมอคิวเรียล ซูเปอร์ฟาย)', 10800, '', '80885033820191206_110214.jpg', '', '', '', '500', 2, 0, 0, '', '2019-12-09 20:35:21', '');
INSERT INTO `product` VALUES (58, 'ชุดแข่ง ADIDAS ARSENAL F.C. 2019/20 ', 'ADIDAS ARSENAL F.C. 2019/20 HOME PLAYER JERSEY - SCARLE ชุดแข่ง ทีม อาเซนอล ฤดูกาล 2019/20', 4300, '1', '176202505120191206_104441.jpg', '', '', '', '500', 1, 0, 0, '', '2020-02-27 09:03:16', '');
INSERT INTO `product` VALUES (59, 'ชุดแข่ง ADIDAS JUVENTUS 1019/2020 ', 'ADIDAS JUVENTUS 19/20 HOME REPLICA JERSEY - BLACK/WHITE (ชุดแข่งทีม ยูเวนตุส ฤดูกาล 2019/20)', 4300, '', '3753411820191206_104800.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-09 20:37:01', '');
INSERT INTO `product` VALUES (60, 'รองเท้าสตั๊ด ADIDAS PREDATOR 19+ FG - LEGGRN', 'รองเท้าสตั๊ด ADIDAS PREDATOR 19+ FG - LEGGRN (อดิดาส พีเดเอตร์ 19+ เอฟจี)', 10500, '', '12523874520191206_104923.jpg', '', '', '', '500', 2, 0, 0, '', '2019-12-09 20:36:58', '');
INSERT INTO `product` VALUES (62, 'กระเป๋า ADIDAS TIRO SHOEBAG BLACK/WHITE', 'ADIDAS TIRO SHOEBAG - FREE SIZE - BLACK/WHITE (กระเป๋าอดิดาส)', 500, '', '118444623520191206_110615.jpg', '', '', '', '500', 6, 0, 0, '', '2019-12-09 20:36:54', '');
INSERT INTO `product` VALUES (63, 'กระเป๋า NIKE PHANTOM GYMSACK ', 'NIKE PHANTOM GYMSACK - MISC - BLACK (กระเป๋าไนส์กี้)', 750, '', '88908951720191206_110903.jpg', '', '', '', '500', 6, 0, 0, '', '2019-12-09 20:36:50', '');
INSERT INTO `product` VALUES (64, 'ลูกฟุตบอล ADIDAS FINALE OMB - 5 - WHITE/BRCYAN/SYELLO', 'ADIDAS FINALE OMB - 5 - WHITE/BRCYAN/SYELLO (ลูกฟุตบอล อดิดาส รายการยูฟ่า แชมป์เปี้ยนลีค )', 4200, '1', '189808988120191206_111408.jpg', '', '', '', '500', 3, 0, 0, '', '2020-02-17 16:29:33', '');
INSERT INTO `product` VALUES (65, 'ลูกฟุตบอล ADIDAS UNIFO TRN - 5 - BLACK/SIGGNR/BRCYAN', 'ADIDAS UNIFO TRN - 5 - BLACK/SIGGNR/BRCYAN', 900, '', '184553349820191206_111912.jpg', '', '', '', '500', 3, 0, 0, '', '2019-12-09 20:36:41', '');
INSERT INTO `product` VALUES (66, 'รองเท้า ADIDAS NEMEZIZ MESSI 19.3 TF - TECIND', 'รองเท้า ADIDAS NEMEZIZ MESSI 19.3 TF - TECIND ', 3200, '', '105373345720191206_112603.jpg', '', '', '', '500', 2, 0, 0, '', '2019-12-09 20:36:38', '');
INSERT INTO `product` VALUES (67, 'ชุดแข่ง ADIDAS SPAIN 2020 HOME', 'ชุดแข่ง ADIDAS SPAIN 2020 HOME REPLICA JERESY - VICRED', 2800, '', '76635707720191206_113222.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:58:33', '');
INSERT INTO `product` VALUES (70, 'สนับแข้ง ADIDAS X PRO GUARD - SILVMT/HIRERE/BLACK', 'สนับแข้ง ADIDAS X PRO GUARD - SILVMT/HIRERE/BLACK', 480, '15', '204890521320191206_122248.jpg', '', '', '', '500', 5, 0, 1, '820', '2020-02-27 17:17:35', '');
INSERT INTO `product` VALUES (71, 'เสื้อทีมชาติ WARRIX THAI NATIONAL 2020 HOME', 'WARRIX THAI NATIONAL 2020 HOME CHEER JERSEY - NAVY/YELLOW ( ชุดทีมชาติไทย )', 399, '', 'warrix-thai-national-2020-home-cheer-jsy---navyyellow-_wa-20ft53m-dy__00.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:58:16', '');
INSERT INTO `product` VALUES (72, 'ชุดแข่ง NIKE BARCELONA 19/20 4TH REPLICA JERSEY ', 'NIKE BARCELONA 19/20 4TH REPLICA JERSEY - VARSITY MAIZE/DEEP ROYAL BLUE (ชุดแข่ง บาเซโลน่า)', 2900, '', 'nike_fcb_m_nk_brt_stad_jsy_ss_elc_-_varsity_maize_deep_royal_blue_ct2527-727__01_new.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:58:10', '');
INSERT INTO `product` VALUES (73, 'ชุดแข่ง ADIDAS REAL MADRID 19/20 HOME', 'ADIDAS REAL MADRID 19/20 HOME REPLICA JERSEY - WHITE ( ชุดแข่งทีม เรอัลมาดริด )', 4300, '', 'adidas_real_h_jsy_-_white_dw4433__01.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:57:49', '');
INSERT INTO `product` VALUES (74, 'รองเท้าสตั๊ด ADIDAS PREDATOR 19+ FG ', 'ADIDAS PREDATOR 19+ FG ADV - CBLACK ', 12000, '', 'adidas_nemeziz_messi_19.3_-_ftwwht_goldmt_ltaqua_ee7929__00.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:57:45', '');
INSERT INTO `product` VALUES (75, 'รองเท้าสตั๊ด ADIDAS NEMEZIZ MESSI 19.3 FG', 'ADIDAS NEMEZIZ MESSI 19.3 FG - FTWWHT', 4000, '', 'adidas_nemeziz_messi_19.3111_-_ftwwht_goldmt_ltaqua_ee7929__00.jpg', '', '', '', '499', 1, 0, 0, '', '2020-02-27 01:14:54', '1');
INSERT INTO `product` VALUES (76, 'รองเท้าสตั๊ด ADIDAS PREDATOR 19.1 SG-SILVMT', 'ADIDAS PREDATOR 19.1 SG - SILVMT/CBLACK/HIRERE', 3900, '', 'adidas_predator_19.1_sg_-_silvmt_cblack_hirere_f99986_50.jpg', '', '', '', '500', 1, 0, 0, '', '2019-12-13 10:57:28', '');
INSERT INTO `product` VALUES (77, 'ชุดแข่ง NIKE BARCELONA 19/20 HOME', 'NIKE BARCELONA 19/20 HOME REPLICA JERSEY - DEEP ROYAL BLUE/VARSITY MAIZE', 4600, '', 'nike_fcb_m_nk_brt_stad_jsy_ss_hm_-_deep_royal_blue_varsity_maize_aj5532-456__01_new.jpg', '', '', '', '499', 1, 0, 0, '', '2020-02-27 00:51:39', '1');
INSERT INTO `product` VALUES (78, 'ชุดแข่ง PUMA MANCHESTER CITY 2019/20 HOME', 'PUMA MANCHESTER CITY 2019/20 HOME REPLICA JERSEY - PUMA BLACK/GEORGIA PEACH', 4700, '', 'puma_mcfc_home_shirt_replica_ss_with_sponsor_logo_-_team_light_blue-tillandsia_purple_75558601__01_new.jpg', '', '', '', '497', 1, 0, 0, '', '2020-02-27 01:31:18', '3');
INSERT INTO `product` VALUES (111, 'NIKE MERCURIAL VAPOR 13 ELITE ', 'NIKE MERCURIAL VAPOR 13 ELITE MDS FG - LEMON VENOM', 9400, '4', 'x1.jpg', 'x2.jpg', 'x3.jpg', 'x4.jpg', '500', 2, 1, 0, '', '2020-02-27 17:21:09', '');
INSERT INTO `product` VALUES (112, 'NIKE BG PATHUM UNITED 2020 HOME REPLICA JERSEY - BLUE', 'NIKE BG PATHUM UNITED 2020 HOME REPLICA JERSEY - BLUE', 1100, '3', 'j1.jpg', 'j2.jpg', 'j3.jpg', 'j4.jpg', '500', 1, 1, 0, '', '2020-02-27 17:24:31', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `product_type`
-- 

CREATE TABLE `product_type` (
  `t_id` int(3) NOT NULL auto_increment,
  `t_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `product_type`
-- 

INSERT INTO `product_type` VALUES (1, 'เสื้อฟุตบอล');
INSERT INTO `product_type` VALUES (2, 'รองเท้าฟุตบอล');
INSERT INTO `product_type` VALUES (3, 'ลูกฟุตบอล');
INSERT INTO `product_type` VALUES (4, 'ถุงมือผู้รักษาประตู');
INSERT INTO `product_type` VALUES (5, 'สนับแข้ง');
INSERT INTO `product_type` VALUES (6, 'กระเป๋า');
INSERT INTO `product_type` VALUES (7, 'สินค้าอื่นๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(3) unsigned zerofill NOT NULL auto_increment,
  `m_username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('ADMIN','USER','AREA') NOT NULL default 'USER',
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=130 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (127, 'zaqwer0321', '123456789', 'new', 'huahin', 'suphason19@gmail.com', '0990023851', '121219_134808.jpg', 'USER', '2019-12-12 13:48:08');
INSERT INTO `user` VALUES (121, 'suphason19', '123456789', 'แอดมิน นิววววว', 'huahin', 'suphason19@gmail.com', '0990023851', '111219_194636.jpg', 'ADMIN', '2019-12-13 11:09:07');
INSERT INTO `user` VALUES (128, 'new', '123', 'new', 'huahin', 'suphason19@gmail.com', '0990023851', '121219_162355.jpg', 'USER', '2019-12-12 17:31:05');
INSERT INTO `user` VALUES (129, '2', '1', '1', '1', '1', '1', 'daniel-james-min.png', 'USER', '2020-02-27 01:13:17');

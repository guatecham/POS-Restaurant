DROP TABLE data_detalle_ventas;

CREATE TABLE `data_detalle_ventas` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL DEFAULT '0',
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `precio_venta` varchar(10) NOT NULL DEFAULT '',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `hora_pedido` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_registro`)
) ENGINE=MyISAM AUTO_INCREMENT=453 DEFAULT CHARSET=latin1;

INSERT INTO data_detalle_ventas VALUES("1","1","65","7","1","9:58");
INSERT INTO data_detalle_ventas VALUES("2","1","8","15","1","9:58");
INSERT INTO data_detalle_ventas VALUES("3","1","24","24","1","9:58");
INSERT INTO data_detalle_ventas VALUES("4","1","21","24","1","9:58");
INSERT INTO data_detalle_ventas VALUES("5","2","65","7","1","14:56");
INSERT INTO data_detalle_ventas VALUES("6","3","117","3.5","1","16:59");
INSERT INTO data_detalle_ventas VALUES("7","4","96","8","1","17:18");
INSERT INTO data_detalle_ventas VALUES("8","4","94","5","1","17:18");
INSERT INTO data_detalle_ventas VALUES("9","5","110","1","1","17:19");
INSERT INTO data_detalle_ventas VALUES("10","6","103","1.5","1","17:27");
INSERT INTO data_detalle_ventas VALUES("11","6","65","6","1","17:26");
INSERT INTO data_detalle_ventas VALUES("12","6","76","7","1","17:26");
INSERT INTO data_detalle_ventas VALUES("13","7","94","5","1","17:28");
INSERT INTO data_detalle_ventas VALUES("14","7","76","7","1","17:28");
INSERT INTO data_detalle_ventas VALUES("15","8","113","3","1","17:36");
INSERT INTO data_detalle_ventas VALUES("16","8","114","0.5","3","17:37");
INSERT INTO data_detalle_ventas VALUES("17","9","69","7","1","18:45");
INSERT INTO data_detalle_ventas VALUES("18","9","23","20","1","18:44");
INSERT INTO data_detalle_ventas VALUES("19","10","103","1.5","3","18:56");
INSERT INTO data_detalle_ventas VALUES("20","10","122","3","3","18:57");
INSERT INTO data_detalle_ventas VALUES("21","10","65","6","3","18:59");
INSERT INTO data_detalle_ventas VALUES("22","10","73","2.5","1","19:05");
INSERT INTO data_detalle_ventas VALUES("23","11","78","4","1","8:04");
INSERT INTO data_detalle_ventas VALUES("24","12","96","8","1","10:50");
INSERT INTO data_detalle_ventas VALUES("25","12","94","5","1","10:16");
INSERT INTO data_detalle_ventas VALUES("26","13","111","0.75","1","10:27");
INSERT INTO data_detalle_ventas VALUES("27","13","94","5","4","10:24");
INSERT INTO data_detalle_ventas VALUES("28","13","65","6","2","10:28");
INSERT INTO data_detalle_ventas VALUES("29","13","67","12","3","10:28");
INSERT INTO data_detalle_ventas VALUES("30","13","80","2.5","2","10:29");
INSERT INTO data_detalle_ventas VALUES("31","13","77","10","1","10:29");
INSERT INTO data_detalle_ventas VALUES("32","13","97","12","2","10:30");
INSERT INTO data_detalle_ventas VALUES("33","14","80","2.5","1","10:38");
INSERT INTO data_detalle_ventas VALUES("34","14","65","6","2","10:38");
INSERT INTO data_detalle_ventas VALUES("35","14","94","5","1","10:37");
INSERT INTO data_detalle_ventas VALUES("36","14","70","3.5","2","10:37");
INSERT INTO data_detalle_ventas VALUES("37","15","192","6","4","10:55");
INSERT INTO data_detalle_ventas VALUES("38","15","185","12","1","10:51");
INSERT INTO data_detalle_ventas VALUES("39","15","65","6","1","10:49");
INSERT INTO data_detalle_ventas VALUES("40","15","78","6","1","10:48");
INSERT INTO data_detalle_ventas VALUES("41","15","22","20","1","10:48");
INSERT INTO data_detalle_ventas VALUES("42","15","19","33","7","10:47");
INSERT INTO data_detalle_ventas VALUES("43","15","18","24","5","10:45");
INSERT INTO data_detalle_ventas VALUES("44","16","117","5","1","11:12");
INSERT INTO data_detalle_ventas VALUES("45","16","66","1","1","11:11");
INSERT INTO data_detalle_ventas VALUES("46","17","88","0.5","1","11:27");
INSERT INTO data_detalle_ventas VALUES("47","17","106","1.5","2","11:22");
INSERT INTO data_detalle_ventas VALUES("48","17","65","6","1","11:22");
INSERT INTO data_detalle_ventas VALUES("49","18","94","5","1","11:31");
INSERT INTO data_detalle_ventas VALUES("50","18","67","12","1","11:30");
INSERT INTO data_detalle_ventas VALUES("51","19","94","5","2","11:39");
INSERT INTO data_detalle_ventas VALUES("52","20","94","5","10","12:51");
INSERT INTO data_detalle_ventas VALUES("53","20","110","1","4","12:51");
INSERT INTO data_detalle_ventas VALUES("54","20","80","2.5","1","12:50");
INSERT INTO data_detalle_ventas VALUES("55","20","128","8","1","12:49");
INSERT INTO data_detalle_ventas VALUES("56","20","66","1","7","12:41");
INSERT INTO data_detalle_ventas VALUES("57","20","102","2.5","1","12:37");
INSERT INTO data_detalle_ventas VALUES("58","20","72","6","2","12:42");
INSERT INTO data_detalle_ventas VALUES("59","20","95","15","1","12:54");
INSERT INTO data_detalle_ventas VALUES("60","20","135","8","2","12:55");
INSERT INTO data_detalle_ventas VALUES("61","20","123","2.5","1","12:56");
INSERT INTO data_detalle_ventas VALUES("62","20","111","0.75","1","12:58");
INSERT INTO data_detalle_ventas VALUES("63","20","65","8","1","13:04");
INSERT INTO data_detalle_ventas VALUES("64","20","149","24","1","13:01");
INSERT INTO data_detalle_ventas VALUES("65","21","78","6","1","13:36");
INSERT INTO data_detalle_ventas VALUES("66","21","142","3.5","2","13:34");
INSERT INTO data_detalle_ventas VALUES("67","21","77","10","2","13:32");
INSERT INTO data_detalle_ventas VALUES("68","21","94","5","2","13:31");
INSERT INTO data_detalle_ventas VALUES("69","21","128","8","1","13:31");
INSERT INTO data_detalle_ventas VALUES("70","21","123","2.5","2","13:30");
INSERT INTO data_detalle_ventas VALUES("71","21","135","8","1","13:29");
INSERT INTO data_detalle_ventas VALUES("72","21","66","1","7","13:28");
INSERT INTO data_detalle_ventas VALUES("73","21","153","23","1","13:39");
INSERT INTO data_detalle_ventas VALUES("74","21","72","6","1","13:27");
INSERT INTO data_detalle_ventas VALUES("75","21","96","10","2","13:26");
INSERT INTO data_detalle_ventas VALUES("76","22","113","4","1","14:15");
INSERT INTO data_detalle_ventas VALUES("77","23","30","23.50","1","7:49");
INSERT INTO data_detalle_ventas VALUES("78","23","28","16","1","7:49");
INSERT INTO data_detalle_ventas VALUES("79","23","27","17","1","7:49");
INSERT INTO data_detalle_ventas VALUES("80","23","185","12","5","7:45");
INSERT INTO data_detalle_ventas VALUES("81","23","18","24","3","7:44");
INSERT INTO data_detalle_ventas VALUES("82","23","22","20","3","7:44");
INSERT INTO data_detalle_ventas VALUES("83","24","21","24","2","7:51");
INSERT INTO data_detalle_ventas VALUES("84","24","22","20","2","7:50");
INSERT INTO data_detalle_ventas VALUES("85","24","19","33","4","7:50");
INSERT INTO data_detalle_ventas VALUES("86","24","18","24","1","7:50");
INSERT INTO data_detalle_ventas VALUES("87","24","17","22","1","7:49");
INSERT INTO data_detalle_ventas VALUES("88","25","192","6","1","7:57");
INSERT INTO data_detalle_ventas VALUES("89","25","182","18","1","7:56");
INSERT INTO data_detalle_ventas VALUES("90","25","148","23","1","7:54");
INSERT INTO data_detalle_ventas VALUES("91","25","185","12","4","7:54");
INSERT INTO data_detalle_ventas VALUES("92","25","181","15","2","7:53");
INSERT INTO data_detalle_ventas VALUES("93","25","63","30","2","7:53");
INSERT INTO data_detalle_ventas VALUES("94","25","67","12","2","7:52");
INSERT INTO data_detalle_ventas VALUES("95","25","60","40","6","7:52");
INSERT INTO data_detalle_ventas VALUES("96","25","34","38","3","7:51");
INSERT INTO data_detalle_ventas VALUES("97","26","192","6","1","9:29");
INSERT INTO data_detalle_ventas VALUES("98","26","169","22.5","1","8:00");
INSERT INTO data_detalle_ventas VALUES("99","26","19","33","1","7:59");
INSERT INTO data_detalle_ventas VALUES("100","26","18","24","1","7:59");
INSERT INTO data_detalle_ventas VALUES("101","27","170","10.5","1","9:32");
INSERT INTO data_detalle_ventas VALUES("102","27","27","17","1","9:32");
INSERT INTO data_detalle_ventas VALUES("103","27","175","18","1","9:31");
INSERT INTO data_detalle_ventas VALUES("104","27","65","8","3","9:31");
INSERT INTO data_detalle_ventas VALUES("105","27","34","38","3","9:30");
INSERT INTO data_detalle_ventas VALUES("106","28","185","12","2","12:01");
INSERT INTO data_detalle_ventas VALUES("107","28","65","8","3","12:00");
INSERT INTO data_detalle_ventas VALUES("108","28","60","40","3","12:00");
INSERT INTO data_detalle_ventas VALUES("109","29","65","8","2","12:02");
INSERT INTO data_detalle_ventas VALUES("110","30","18","24","1","12:13");
INSERT INTO data_detalle_ventas VALUES("111","31","18","24","1","12:13");
INSERT INTO data_detalle_ventas VALUES("112","32","188","17","2","12:14");
INSERT INTO data_detalle_ventas VALUES("113","32","62","55","2","12:14");
INSERT INTO data_detalle_ventas VALUES("114","32","61","55","1","12:14");
INSERT INTO data_detalle_ventas VALUES("115","33","134","23","1","12:19");
INSERT INTO data_detalle_ventas VALUES("116","33","60","40","6","12:15");
INSERT INTO data_detalle_ventas VALUES("117","34","134","23","1","12:20");
INSERT INTO data_detalle_ventas VALUES("118","34","60","40","1","12:20");
INSERT INTO data_detalle_ventas VALUES("119","35","188","17","2","12:21");
INSERT INTO data_detalle_ventas VALUES("120","35","29","6","2","12:21");
INSERT INTO data_detalle_ventas VALUES("121","35","24","24","2","12:20");
INSERT INTO data_detalle_ventas VALUES("122","36","65","8","1","12:24");
INSERT INTO data_detalle_ventas VALUES("123","36","192","6","1","12:24");
INSERT INTO data_detalle_ventas VALUES("124","36","18","24","3","12:23");
INSERT INTO data_detalle_ventas VALUES("125","37","148","23","1","13:49");
INSERT INTO data_detalle_ventas VALUES("126","37","60","40","2","13:49");
INSERT INTO data_detalle_ventas VALUES("127","37","34","38","1","13:49");
INSERT INTO data_detalle_ventas VALUES("128","37","63","30","3","13:48");
INSERT INTO data_detalle_ventas VALUES("129","38","65","8","4","13:51");
INSERT INTO data_detalle_ventas VALUES("130","38","23","20","4","13:51");
INSERT INTO data_detalle_ventas VALUES("131","40","188","17","6","13:54");
INSERT INTO data_detalle_ventas VALUES("132","40","65","8","1","13:53");
INSERT INTO data_detalle_ventas VALUES("133","40","80","2.5","1","13:53");
INSERT INTO data_detalle_ventas VALUES("134","40","62","55","1","13:53");
INSERT INTO data_detalle_ventas VALUES("135","40","60","40","3","13:52");
INSERT INTO data_detalle_ventas VALUES("136","41","18","24","1","14:01");
INSERT INTO data_detalle_ventas VALUES("137","42","192","6","2","14:01");
INSERT INTO data_detalle_ventas VALUES("138","42","19","33","2","14:01");
INSERT INTO data_detalle_ventas VALUES("139","43","27","17","1","14:02");
INSERT INTO data_detalle_ventas VALUES("140","43","21","24","2","14:02");
INSERT INTO data_detalle_ventas VALUES("141","43","22","20","2","14:02");
INSERT INTO data_detalle_ventas VALUES("142","43","18","24","1","14:02");
INSERT INTO data_detalle_ventas VALUES("143","44","192","6","4","14:53");
INSERT INTO data_detalle_ventas VALUES("144","44","94","5","1","14:53");
INSERT INTO data_detalle_ventas VALUES("145","44","185","12","1","14:55");
INSERT INTO data_detalle_ventas VALUES("146","44","19","33","4","14:52");
INSERT INTO data_detalle_ventas VALUES("147","44","18","24","2","14:52");
INSERT INTO data_detalle_ventas VALUES("148","45","18","24","2","14:55");
INSERT INTO data_detalle_ventas VALUES("149","46","185","12","2","14:56");
INSERT INTO data_detalle_ventas VALUES("150","46","29","6","2","14:56");
INSERT INTO data_detalle_ventas VALUES("151","46","27","17","1","14:56");
INSERT INTO data_detalle_ventas VALUES("152","47","192","6","1","15:02");
INSERT INTO data_detalle_ventas VALUES("153","47","28","16","2","15:02");
INSERT INTO data_detalle_ventas VALUES("154","47","18","24","1","15:02");
INSERT INTO data_detalle_ventas VALUES("155","48","171","15","1","15:14");
INSERT INTO data_detalle_ventas VALUES("156","48","18","24","2","15:06");
INSERT INTO data_detalle_ventas VALUES("157","49","18","24","4","15:17");
INSERT INTO data_detalle_ventas VALUES("158","50","192","6","6","15:20");
INSERT INTO data_detalle_ventas VALUES("159","51","192","6","3","15:21");
INSERT INTO data_detalle_ventas VALUES("160","52","18","24","2","15:22");
INSERT INTO data_detalle_ventas VALUES("161","53","18","24","1","15:22");
INSERT INTO data_detalle_ventas VALUES("162","54","18","24","4","15:22");
INSERT INTO data_detalle_ventas VALUES("163","55","185","12","1","15:24");
INSERT INTO data_detalle_ventas VALUES("164","55","65","8","1","15:24");
INSERT INTO data_detalle_ventas VALUES("165","55","78","6","1","15:24");
INSERT INTO data_detalle_ventas VALUES("166","55","22","20","1","15:23");
INSERT INTO data_detalle_ventas VALUES("167","55","19","33","7","15:23");
INSERT INTO data_detalle_ventas VALUES("168","56","192","6","4","15:25");
INSERT INTO data_detalle_ventas VALUES("169","57","18","24","1","15:26");
INSERT INTO data_detalle_ventas VALUES("170","58","65","8","1","15:27");
INSERT INTO data_detalle_ventas VALUES("171","58","181","15","1","15:27");
INSERT INTO data_detalle_ventas VALUES("172","58","185","12","4","15:26");
INSERT INTO data_detalle_ventas VALUES("173","58","177","30","1","15:26");
INSERT INTO data_detalle_ventas VALUES("174","59","65","8","2","15:31");
INSERT INTO data_detalle_ventas VALUES("175","59","185","12","5","15:30");
INSERT INTO data_detalle_ventas VALUES("176","59","182","18","1","15:30");
INSERT INTO data_detalle_ventas VALUES("177","59","67","12","1","15:30");
INSERT INTO data_detalle_ventas VALUES("178","59","30","23.50","1","15:29");
INSERT INTO data_detalle_ventas VALUES("179","59","34","38","6","15:29");
INSERT INTO data_detalle_ventas VALUES("180","60","185","12","4","15:38");
INSERT INTO data_detalle_ventas VALUES("181","60","61","55","3","15:37");
INSERT INTO data_detalle_ventas VALUES("182","60","60","40","3","15:36");
INSERT INTO data_detalle_ventas VALUES("183","60","65","8","5","15:35");
INSERT INTO data_detalle_ventas VALUES("184","60","23","20","3","15:35");
INSERT INTO data_detalle_ventas VALUES("185","61","20","40.50","1","15:46");
INSERT INTO data_detalle_ventas VALUES("186","61","18","24","2","15:46");
INSERT INTO data_detalle_ventas VALUES("187","61","17","22","1","15:46");
INSERT INTO data_detalle_ventas VALUES("188","62","185","12","1","15:47");
INSERT INTO data_detalle_ventas VALUES("189","62","18","24","1","15:47");
INSERT INTO data_detalle_ventas VALUES("190","63","186","15","2","15:49");
INSERT INTO data_detalle_ventas VALUES("191","63","185","12","1","15:48");
INSERT INTO data_detalle_ventas VALUES("192","63","18","24","1","15:48");
INSERT INTO data_detalle_ventas VALUES("193","63","188","17","2","15:48");
INSERT INTO data_detalle_ventas VALUES("194","63","62","55","1","15:47");
INSERT INTO data_detalle_ventas VALUES("195","64","19","33","2","15:50");
INSERT INTO data_detalle_ventas VALUES("196","65","192","6","1","15:51");
INSERT INTO data_detalle_ventas VALUES("197","65","179","12","1","15:51");
INSERT INTO data_detalle_ventas VALUES("198","65","21","24","1","15:51");
INSERT INTO data_detalle_ventas VALUES("199","65","19","33","1","15:50");
INSERT INTO data_detalle_ventas VALUES("200","66","186","15","1","15:52");
INSERT INTO data_detalle_ventas VALUES("201","66","58","50","1","15:52");
INSERT INTO data_detalle_ventas VALUES("202","66","60","40","1","15:51");
INSERT INTO data_detalle_ventas VALUES("203","67","171","15","1","15:53");
INSERT INTO data_detalle_ventas VALUES("204","68","22","20","1","15:54");
INSERT INTO data_detalle_ventas VALUES("205","68","18","24","1","15:54");
INSERT INTO data_detalle_ventas VALUES("206","69","21","24","1","15:57");
INSERT INTO data_detalle_ventas VALUES("207","69","181","15","2","15:57");
INSERT INTO data_detalle_ventas VALUES("208","69","19","33","2","15:55");
INSERT INTO data_detalle_ventas VALUES("209","69","18","24","1","15:54");
INSERT INTO data_detalle_ventas VALUES("210","69","17","22","1","15:54");
INSERT INTO data_detalle_ventas VALUES("211","70","65","8","1","15:58");
INSERT INTO data_detalle_ventas VALUES("212","70","22","20","1","15:58");
INSERT INTO data_detalle_ventas VALUES("213","70","19","33","1","15:58");
INSERT INTO data_detalle_ventas VALUES("214","70","18","24","1","15:58");
INSERT INTO data_detalle_ventas VALUES("215","71","19","33","5","15:59");
INSERT INTO data_detalle_ventas VALUES("216","72","19","33","1","15:59");
INSERT INTO data_detalle_ventas VALUES("217","73","21","24","1","16:00");
INSERT INTO data_detalle_ventas VALUES("218","73","22","20","1","16:00");
INSERT INTO data_detalle_ventas VALUES("219","73","19","33","4","16:00");
INSERT INTO data_detalle_ventas VALUES("220","73","17","22","1","16:00");
INSERT INTO data_detalle_ventas VALUES("221","74","18","24","2","16:01");
INSERT INTO data_detalle_ventas VALUES("222","75","192","6","1","16:01");
INSERT INTO data_detalle_ventas VALUES("223","75","18","24","5","16:01");
INSERT INTO data_detalle_ventas VALUES("224","76","18","24","1","16:02");
INSERT INTO data_detalle_ventas VALUES("225","77","19","33","2","16:02");
INSERT INTO data_detalle_ventas VALUES("226","78","18","24","3","16:51");
INSERT INTO data_detalle_ventas VALUES("227","79","192","6","1","16:51");
INSERT INTO data_detalle_ventas VALUES("228","79","185","12","2","16:51");
INSERT INTO data_detalle_ventas VALUES("229","80","192","6","2","16:53");
INSERT INTO data_detalle_ventas VALUES("230","80","188","17","2","16:53");
INSERT INTO data_detalle_ventas VALUES("231","80","185","12","1","16:52");
INSERT INTO data_detalle_ventas VALUES("232","80","187","35","1","16:52");
INSERT INTO data_detalle_ventas VALUES("233","80","32","25","1","16:52");
INSERT INTO data_detalle_ventas VALUES("234","80","60","40","1","16:52");
INSERT INTO data_detalle_ventas VALUES("235","80","34","38","1","16:52");
INSERT INTO data_detalle_ventas VALUES("236","81","94","5","1","16:55");
INSERT INTO data_detalle_ventas VALUES("237","81","192","6","1","16:55");
INSERT INTO data_detalle_ventas VALUES("238","81","188","17","3","16:55");
INSERT INTO data_detalle_ventas VALUES("239","81","182","18","2","16:54");
INSERT INTO data_detalle_ventas VALUES("240","81","181","15","1","16:54");
INSERT INTO data_detalle_ventas VALUES("241","81","61","55","1","16:54");
INSERT INTO data_detalle_ventas VALUES("242","81","60","40","1","16:54");
INSERT INTO data_detalle_ventas VALUES("243","81","34","38","1","16:54");
INSERT INTO data_detalle_ventas VALUES("244","82","188","17","4","16:57");
INSERT INTO data_detalle_ventas VALUES("245","82","185","12","1","16:57");
INSERT INTO data_detalle_ventas VALUES("246","82","65","8","4","16:56");
INSERT INTO data_detalle_ventas VALUES("247","82","34","38","3","16:56");
INSERT INTO data_detalle_ventas VALUES("248","83","65","8","1","16:59");
INSERT INTO data_detalle_ventas VALUES("249","83","182","18","1","16:59");
INSERT INTO data_detalle_ventas VALUES("250","83","26","15","2","16:59");
INSERT INTO data_detalle_ventas VALUES("251","84","65","8","1","17:00");
INSERT INTO data_detalle_ventas VALUES("252","84","34","38","1","17:00");
INSERT INTO data_detalle_ventas VALUES("253","85","188","17","2","17:01");
INSERT INTO data_detalle_ventas VALUES("254","85","170","10.5","1","17:00");
INSERT INTO data_detalle_ventas VALUES("255","86","192","6","1","17:03");
INSERT INTO data_detalle_ventas VALUES("256","86","29","6","1","17:03");
INSERT INTO data_detalle_ventas VALUES("257","86","25","27","1","17:03");
INSERT INTO data_detalle_ventas VALUES("258","87","60","40","1","17:04");
INSERT INTO data_detalle_ventas VALUES("259","87","192","6","1","17:04");
INSERT INTO data_detalle_ventas VALUES("260","87","22","20","1","17:04");
INSERT INTO data_detalle_ventas VALUES("261","87","18","24","2","17:03");
INSERT INTO data_detalle_ventas VALUES("262","88","188","17","5","17:05");
INSERT INTO data_detalle_ventas VALUES("263","89","29","6","2","17:06");
INSERT INTO data_detalle_ventas VALUES("264","89","24","24","2","17:06");
INSERT INTO data_detalle_ventas VALUES("265","89","58","50","1","17:06");
INSERT INTO data_detalle_ventas VALUES("266","89","185","12","1","17:06");
INSERT INTO data_detalle_ventas VALUES("267","89","18","24","1","17:05");
INSERT INTO data_detalle_ventas VALUES("268","90","18","24","1","17:07");
INSERT INTO data_detalle_ventas VALUES("269","91","19","33","2","17:07");
INSERT INTO data_detalle_ventas VALUES("270","92","65","8","1","17:09");
INSERT INTO data_detalle_ventas VALUES("271","92","19","33","2","17:09");
INSERT INTO data_detalle_ventas VALUES("272","93","65","8","1","17:15");
INSERT INTO data_detalle_ventas VALUES("273","93","24","24","2","17:15");
INSERT INTO data_detalle_ventas VALUES("274","93","20","40.50","2","17:14");
INSERT INTO data_detalle_ventas VALUES("275","93","19","33","1","17:14");
INSERT INTO data_detalle_ventas VALUES("276","94","185","12","1","17:15");
INSERT INTO data_detalle_ventas VALUES("277","95","65","8","3","17:16");
INSERT INTO data_detalle_ventas VALUES("278","95","69","5","2","17:17");
INSERT INTO data_detalle_ventas VALUES("279","95","185","12","2","17:16");
INSERT INTO data_detalle_ventas VALUES("280","95","19","33","3","17:16");
INSERT INTO data_detalle_ventas VALUES("281","96","185","12","3","17:20");
INSERT INTO data_detalle_ventas VALUES("282","96","58","50","3","17:19");
INSERT INTO data_detalle_ventas VALUES("283","96","188","17","4","17:18");
INSERT INTO data_detalle_ventas VALUES("284","96","65","8","5","17:18");
INSERT INTO data_detalle_ventas VALUES("285","96","69","5","1","17:18");
INSERT INTO data_detalle_ventas VALUES("286","97","19","33","1","17:21");
INSERT INTO data_detalle_ventas VALUES("287","97","18","24","1","17:20");
INSERT INTO data_detalle_ventas VALUES("288","98","179","12","8","17:24");
INSERT INTO data_detalle_ventas VALUES("289","98","94","5","1","17:23");
INSERT INTO data_detalle_ventas VALUES("290","98","31","26.50","2","17:23");
INSERT INTO data_detalle_ventas VALUES("291","98","61","55","1","17:23");
INSERT INTO data_detalle_ventas VALUES("292","98","19","33","6","17:23");
INSERT INTO data_detalle_ventas VALUES("293","98","192","6","1","17:22");
INSERT INTO data_detalle_ventas VALUES("294","98","65","8","2","17:22");
INSERT INTO data_detalle_ventas VALUES("295","98","188","17","7","17:21");
INSERT INTO data_detalle_ventas VALUES("296","99","65","8","1","17:25");
INSERT INTO data_detalle_ventas VALUES("297","99","185","12","2","17:25");
INSERT INTO data_detalle_ventas VALUES("298","99","26","15","1","17:24");
INSERT INTO data_detalle_ventas VALUES("299","100","19","33","3","17:25");
INSERT INTO data_detalle_ventas VALUES("300","100","18","24","1","17:25");
INSERT INTO data_detalle_ventas VALUES("301","100","188","17","1","17:25");
INSERT INTO data_detalle_ventas VALUES("302","100","20","40.50","1","17:25");
INSERT INTO data_detalle_ventas VALUES("303","101","18","24","2","17:26");
INSERT INTO data_detalle_ventas VALUES("304","101","17","22","2","17:26");
INSERT INTO data_detalle_ventas VALUES("305","102","28","16","1","17:27");
INSERT INTO data_detalle_ventas VALUES("306","102","63","30","2","17:27");
INSERT INTO data_detalle_ventas VALUES("307","103","94","5","1","16:20");
INSERT INTO data_detalle_ventas VALUES("308","104","133","18.00","6","7:50");
INSERT INTO data_detalle_ventas VALUES("309","105","134","23","1","7:55");
INSERT INTO data_detalle_ventas VALUES("310","106","215","12","1","7:56");
INSERT INTO data_detalle_ventas VALUES("311","107","94","5","1","10:00");
INSERT INTO data_detalle_ventas VALUES("312","107","70","2.5","1","9:59");
INSERT INTO data_detalle_ventas VALUES("313","108","135","8","1","10:52");
INSERT INTO data_detalle_ventas VALUES("314","109","142","3.5","1","11:34");
INSERT INTO data_detalle_ventas VALUES("315","109","73","2.5","2","11:35");
INSERT INTO data_detalle_ventas VALUES("316","109","96","10","1","11:37");
INSERT INTO data_detalle_ventas VALUES("317","109","123","2.5","1","11:38");
INSERT INTO data_detalle_ventas VALUES("318","110","122","2","1","11:47");
INSERT INTO data_detalle_ventas VALUES("319","110","129","8","1","11:48");
INSERT INTO data_detalle_ventas VALUES("320","111","213","3.5","1","12:02");
INSERT INTO data_detalle_ventas VALUES("321","112","135","8","1","12:20");
INSERT INTO data_detalle_ventas VALUES("322","113","206","12","1","12:26");
INSERT INTO data_detalle_ventas VALUES("323","114","215","10","1","12:43");
INSERT INTO data_detalle_ventas VALUES("324","115","94","5","4","13:39");
INSERT INTO data_detalle_ventas VALUES("325","116","135","8","2","14:43");
INSERT INTO data_detalle_ventas VALUES("326","117","110","1","1","15:49");
INSERT INTO data_detalle_ventas VALUES("327","118","124","2","1","16:47");
INSERT INTO data_detalle_ventas VALUES("328","119","135","8","3","18:20");
INSERT INTO data_detalle_ventas VALUES("329","120","98","5","1","18:21");
INSERT INTO data_detalle_ventas VALUES("330","121","69","8","2","18:24");
INSERT INTO data_detalle_ventas VALUES("331","122","221","1","1","19:21");
INSERT INTO data_detalle_ventas VALUES("332","122","219","1","1","19:21");
INSERT INTO data_detalle_ventas VALUES("333","122","135","8","1","19:21");
INSERT INTO data_detalle_ventas VALUES("334","123","80","2.5","1","20:33");
INSERT INTO data_detalle_ventas VALUES("335","124","135","8","1","7:31");
INSERT INTO data_detalle_ventas VALUES("336","124","153","23","1","7:31");
INSERT INTO data_detalle_ventas VALUES("337","124","123","2.5","1","7:31");
INSERT INTO data_detalle_ventas VALUES("338","125","204","12","1","7:40");
INSERT INTO data_detalle_ventas VALUES("339","125","205","12","1","7:40");
INSERT INTO data_detalle_ventas VALUES("340","126","150","8","2","8:07");
INSERT INTO data_detalle_ventas VALUES("341","126","149","8.00","1","8:06");
INSERT INTO data_detalle_ventas VALUES("342","127","206","12","1","8:10");
INSERT INTO data_detalle_ventas VALUES("343","128","110","1","3","8:26");
INSERT INTO data_detalle_ventas VALUES("344","129","204","12","1","8:30");
INSERT INTO data_detalle_ventas VALUES("345","130","86","2","1","9:10");
INSERT INTO data_detalle_ventas VALUES("346","131","94","5","1","9:11");
INSERT INTO data_detalle_ventas VALUES("347","132","94","5","1","9:37");
INSERT INTO data_detalle_ventas VALUES("348","133","75","10","1","9:44");
INSERT INTO data_detalle_ventas VALUES("349","133","74","6","1","9:45");
INSERT INTO data_detalle_ventas VALUES("350","134","123","2.5","1","9:47");
INSERT INTO data_detalle_ventas VALUES("351","134","70","2.5","1","9:47");
INSERT INTO data_detalle_ventas VALUES("352","135","94","5","1","9:51");
INSERT INTO data_detalle_ventas VALUES("353","136","94","5","2","10:03");
INSERT INTO data_detalle_ventas VALUES("354","137","101","3","1","10:10");
INSERT INTO data_detalle_ventas VALUES("355","138","98","5","1","10:26");
INSERT INTO data_detalle_ventas VALUES("356","139","221","1","1","10:40");
INSERT INTO data_detalle_ventas VALUES("357","139","219","1","1","10:27");
INSERT INTO data_detalle_ventas VALUES("358","140","95","15","1","10:44");
INSERT INTO data_detalle_ventas VALUES("359","141","135","8","1","10:48");
INSERT INTO data_detalle_ventas VALUES("360","142","135","8","1","10:50");
INSERT INTO data_detalle_ventas VALUES("361","143","143","4","1","10:52");
INSERT INTO data_detalle_ventas VALUES("362","144","97","12.00","1","10:59");
INSERT INTO data_detalle_ventas VALUES("363","145","149","8.00","1","11:20");
INSERT INTO data_detalle_ventas VALUES("364","146","150","8","1","11:42");
INSERT INTO data_detalle_ventas VALUES("365","146","68","12","2","11:39");
INSERT INTO data_detalle_ventas VALUES("366","146","222","0.5","2","11:41");
INSERT INTO data_detalle_ventas VALUES("367","146","223","0.75","1","11:41");
INSERT INTO data_detalle_ventas VALUES("368","147","68","12","1","11:43");
INSERT INTO data_detalle_ventas VALUES("369","147","149","8.00","1","11:43");
INSERT INTO data_detalle_ventas VALUES("370","148","222","0.5","3","11:46");
INSERT INTO data_detalle_ventas VALUES("371","149","135","8","1","12:06");
INSERT INTO data_detalle_ventas VALUES("372","150","110","1","1","12:10");
INSERT INTO data_detalle_ventas VALUES("373","151","70","2.5","1","12:24");
INSERT INTO data_detalle_ventas VALUES("374","152","98","5","2","12:34");
INSERT INTO data_detalle_ventas VALUES("375","153","128","8","1","12:36");
INSERT INTO data_detalle_ventas VALUES("376","154","77","12.00","1","14:05");
INSERT INTO data_detalle_ventas VALUES("377","155","70","2.5","1","14:11");
INSERT INTO data_detalle_ventas VALUES("378","156","220","1","1","14:27");
INSERT INTO data_detalle_ventas VALUES("379","157","205","12","1","14:43");
INSERT INTO data_detalle_ventas VALUES("380","157","73","2.5","4","14:42");
INSERT INTO data_detalle_ventas VALUES("381","158","206","12","1","14:46");
INSERT INTO data_detalle_ventas VALUES("382","158","224","2.5","1","14:46");
INSERT INTO data_detalle_ventas VALUES("383","159","220","1","1","14:47");
INSERT INTO data_detalle_ventas VALUES("384","159","73","2.5","1","14:47");
INSERT INTO data_detalle_ventas VALUES("385","159","77","12.00","1","14:47");
INSERT INTO data_detalle_ventas VALUES("386","159","205","12","1","14:47");
INSERT INTO data_detalle_ventas VALUES("387","160","235","3.5","1","14:49");
INSERT INTO data_detalle_ventas VALUES("388","160","220","1","1","14:48");
INSERT INTO data_detalle_ventas VALUES("389","161","220","1","1","14:51");
INSERT INTO data_detalle_ventas VALUES("390","162","135","8","1","15:20");
INSERT INTO data_detalle_ventas VALUES("391","163","208","6","1","15:28");
INSERT INTO data_detalle_ventas VALUES("392","164","66","1.00","1","15:29");
INSERT INTO data_detalle_ventas VALUES("393","165","207","6","1","15:42");
INSERT INTO data_detalle_ventas VALUES("394","166","110","1","1","15:46");
INSERT INTO data_detalle_ventas VALUES("395","167","134","23","1","15:46");
INSERT INTO data_detalle_ventas VALUES("396","168","223","0.75","2","16:02");
INSERT INTO data_detalle_ventas VALUES("397","169","75","10","1","7:49");
INSERT INTO data_detalle_ventas VALUES("398","169","95","15","2","7:40");
INSERT INTO data_detalle_ventas VALUES("399","169","94","5","1","7:38");
INSERT INTO data_detalle_ventas VALUES("400","169","135","8","4","7:36");
INSERT INTO data_detalle_ventas VALUES("401","170","166","2","2","12:16");
INSERT INTO data_detalle_ventas VALUES("402","171","135","8","1","16:55");
INSERT INTO data_detalle_ventas VALUES("403","172","122","2","1","18:21");
INSERT INTO data_detalle_ventas VALUES("404","173","237","0.5","2","7:42");
INSERT INTO data_detalle_ventas VALUES("405","173","110","1","1","7:37");
INSERT INTO data_detalle_ventas VALUES("406","174","215","10","1","8:26");
INSERT INTO data_detalle_ventas VALUES("407","175","90","7.50","1","8:49");
INSERT INTO data_detalle_ventas VALUES("408","176","205","12","1","10:58");
INSERT INTO data_detalle_ventas VALUES("409","176","204","12","1","10:58");
INSERT INTO data_detalle_ventas VALUES("410","177","133","18.00","1","11:22");
INSERT INTO data_detalle_ventas VALUES("411","178","68","12","1","12:28");
INSERT INTO data_detalle_ventas VALUES("412","178","135","8","2","12:27");
INSERT INTO data_detalle_ventas VALUES("413","178","75","10","1","12:27");
INSERT INTO data_detalle_ventas VALUES("414","178","149","8.00","3","12:26");
INSERT INTO data_detalle_ventas VALUES("415","178","69","8","4","12:25");
INSERT INTO data_detalle_ventas VALUES("416","179","192","6","1","18:06");
INSERT INTO data_detalle_ventas VALUES("417","180","123","2.5","1","7:41");
INSERT INTO data_detalle_ventas VALUES("418","180","221","1","1","7:41");
INSERT INTO data_detalle_ventas VALUES("419","180","135","8","2","7:40");
INSERT INTO data_detalle_ventas VALUES("420","180","94","5","1","7:39");
INSERT INTO data_detalle_ventas VALUES("421","181","95","15","1","7:43");
INSERT INTO data_detalle_ventas VALUES("422","182","110","1","2","11:06");
INSERT INTO data_detalle_ventas VALUES("423","182","221","1","2","11:06");
INSERT INTO data_detalle_ventas VALUES("424","182","219","1","1","11:06");
INSERT INTO data_detalle_ventas VALUES("425","183","70","2.5","3","11:08");
INSERT INTO data_detalle_ventas VALUES("426","184","70","2.5","1","12:12");
INSERT INTO data_detalle_ventas VALUES("427","185","110","1","1","14:39");
INSERT INTO data_detalle_ventas VALUES("428","186","185","12","2","14:39");
INSERT INTO data_detalle_ventas VALUES("429","186","60","40","2","14:39");
INSERT INTO data_detalle_ventas VALUES("430","187","152","8","1","14:41");
INSERT INTO data_detalle_ventas VALUES("431","188","82","2.00","3","16:10");
INSERT INTO data_detalle_ventas VALUES("432","188","64","45","1","16:10");
INSERT INTO data_detalle_ventas VALUES("433","188","223","0.75","1","16:10");
INSERT INTO data_detalle_ventas VALUES("434","188","123","2.5","1","16:10");
INSERT INTO data_detalle_ventas VALUES("435","188","61","55","1","16:13");
INSERT INTO data_detalle_ventas VALUES("436","189","68","12","3","18:50");
INSERT INTO data_detalle_ventas VALUES("437","189","163","5","5","18:45");
INSERT INTO data_detalle_ventas VALUES("438","189","67","12","2","18:27");
INSERT INTO data_detalle_ventas VALUES("439","0","68","12","3","8:54");
INSERT INTO data_detalle_ventas VALUES("440","0","124","2","1","8:48");
INSERT INTO data_detalle_ventas VALUES("441","0","226","2","3","8:41");
INSERT INTO data_detalle_ventas VALUES("442","0","123","2.5","1","9:00");
INSERT INTO data_detalle_ventas VALUES("443","191","123","2.5","1","9:01");
INSERT INTO data_detalle_ventas VALUES("444","192","138","8","1","9:05");
INSERT INTO data_detalle_ventas VALUES("445","193","82","2.00","1","16:21");
INSERT INTO data_detalle_ventas VALUES("446","194","136","8","1","9:53");
INSERT INTO data_detalle_ventas VALUES("447","195","34","38","1","9:54");
INSERT INTO data_detalle_ventas VALUES("448","196","137","15.00","1","9:56");
INSERT INTO data_detalle_ventas VALUES("449","197","135","8","1","10:38");
INSERT INTO data_detalle_ventas VALUES("450","197","106","1.5","1","10:36");
INSERT INTO data_detalle_ventas VALUES("451","197","137","15.00","2","10:32");
INSERT INTO data_detalle_ventas VALUES("452","198","132","2","1","16:03");



DROP TABLE data_gastos;

CREATE TABLE `data_gastos` (
  `id_gasto` int(11) NOT NULL AUTO_INCREMENT,
  `cuenta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` varchar(12) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_gasto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO data_gastos VALUES("3","2","2012-01-11","800","Tercera prueba","0");
INSERT INTO data_gastos VALUES("4","1","2012-01-11","250","Prueba de gasto de la cuenta aeiou","0");



DROP TABLE data_inventario;

CREATE TABLE `data_inventario` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `operacion` smallint(6) NOT NULL COMMENT '1-Ingresos, 2-Salidas',
  `comentarios` varchar(100) NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

INSERT INTO data_inventario VALUES("1","2012-01-08","0","1","9","2","Venta");
INSERT INTO data_inventario VALUES("2","2012-01-09","0","1","6","2","Venta");
INSERT INTO data_inventario VALUES("3","2012-01-09","0","1","12","1","Ingreso manual");
INSERT INTO data_inventario VALUES("4","2012-01-09","0","1","3","2","Venta");
INSERT INTO data_inventario VALUES("5","2012-01-12","0","27","3","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("6","2012-01-12","0","1","3","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("7","2012-01-12","0","6","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("8","2012-01-12","0","2","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("9","2012-01-12","0","1","9","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("10","2012-01-12","0","24","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("11","2012-01-12","0","1","6","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("12","2012-01-12","0","24","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("13","2012-01-13","0","1","1","2","Venta");
INSERT INTO data_inventario VALUES("14","2012-01-13","0","1","1","2","Venta");
INSERT INTO data_inventario VALUES("15","2012-01-13","0","1","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("16","2012-01-13","0","2","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("17","2012-01-13","0","1","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("18","2012-01-13","0","25","1","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("19","2012-01-13","0","4","3","1","Eliminacion manual de una venta");
INSERT INTO data_inventario VALUES("20","2012-01-13","0","1","1","2","Venta");
INSERT INTO data_inventario VALUES("21","2012-01-13","0","1","6","2","Venta");
INSERT INTO data_inventario VALUES("22","2012-01-13","0","1","3","1","Ingreso manual");
INSERT INTO data_inventario VALUES("23","2012-01-13","0","17","2","1","Ingreso manual");
INSERT INTO data_inventario VALUES("24","2012-05-16","1","1","8","2","Venta");
INSERT INTO data_inventario VALUES("25","2012-06-09","0","111","1","2","Venta");
INSERT INTO data_inventario VALUES("26","2012-06-09","0","94","4","2","Venta");
INSERT INTO data_inventario VALUES("27","2012-06-09","0","65","2","2","Venta");
INSERT INTO data_inventario VALUES("28","2012-06-09","0","67","3","2","Venta");
INSERT INTO data_inventario VALUES("29","2012-06-09","0","80","2","2","Venta");
INSERT INTO data_inventario VALUES("30","2012-06-09","0","77","1","2","Venta");
INSERT INTO data_inventario VALUES("31","2012-06-09","0","97","2","2","Venta");
INSERT INTO data_inventario VALUES("32","2012-06-09","0","80","1","2","Venta");
INSERT INTO data_inventario VALUES("33","2012-06-09","0","65","2","2","Venta");
INSERT INTO data_inventario VALUES("34","2012-06-09","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("35","2012-06-09","0","70","2","2","Venta");
INSERT INTO data_inventario VALUES("36","2012-06-09","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("37","2012-06-09","0","78","1","2","Venta");
INSERT INTO data_inventario VALUES("38","2012-06-09","0","117","1","2","Venta");
INSERT INTO data_inventario VALUES("39","2012-06-09","0","66","1","2","Venta");
INSERT INTO data_inventario VALUES("40","2012-06-09","0","88","1","2","Venta");
INSERT INTO data_inventario VALUES("41","2012-06-09","0","106","2","2","Venta");
INSERT INTO data_inventario VALUES("42","2012-06-09","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("43","2012-06-09","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("44","2012-06-09","0","67","1","2","Venta");
INSERT INTO data_inventario VALUES("45","2012-06-09","0","94","2","2","Venta");
INSERT INTO data_inventario VALUES("46","2012-06-10","0","94","10","2","Venta");
INSERT INTO data_inventario VALUES("47","2012-06-10","0","110","4","2","Venta");
INSERT INTO data_inventario VALUES("48","2012-06-10","0","80","1","2","Venta");
INSERT INTO data_inventario VALUES("49","2012-06-10","0","128","1","2","Venta");
INSERT INTO data_inventario VALUES("50","2012-06-10","0","66","7","2","Venta");
INSERT INTO data_inventario VALUES("51","2012-06-10","0","102","1","2","Venta");
INSERT INTO data_inventario VALUES("52","2012-06-10","0","72","2","2","Venta");
INSERT INTO data_inventario VALUES("53","2012-06-10","0","95","1","2","Venta");
INSERT INTO data_inventario VALUES("54","2012-06-10","0","135","2","2","Venta");
INSERT INTO data_inventario VALUES("55","2012-06-10","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("56","2012-06-10","0","111","1","2","Venta");
INSERT INTO data_inventario VALUES("57","2012-06-10","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("58","2012-06-10","0","149","1","2","Venta");
INSERT INTO data_inventario VALUES("59","2012-06-10","0","78","1","2","Venta");
INSERT INTO data_inventario VALUES("60","2012-06-10","0","142","2","2","Venta");
INSERT INTO data_inventario VALUES("61","2012-06-10","0","77","2","2","Venta");
INSERT INTO data_inventario VALUES("62","2012-06-10","0","94","2","2","Venta");
INSERT INTO data_inventario VALUES("63","2012-06-10","0","128","1","2","Venta");
INSERT INTO data_inventario VALUES("64","2012-06-10","0","123","2","2","Venta");
INSERT INTO data_inventario VALUES("65","2012-06-10","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("66","2012-06-10","0","66","7","2","Venta");
INSERT INTO data_inventario VALUES("67","2012-06-10","0","153","1","2","Venta");
INSERT INTO data_inventario VALUES("68","2012-06-10","0","72","1","2","Venta");
INSERT INTO data_inventario VALUES("69","2012-06-10","0","96","2","2","Venta");
INSERT INTO data_inventario VALUES("70","2012-06-10","0","113","1","2","Venta");
INSERT INTO data_inventario VALUES("71","2012-06-12","0","148","1","2","Venta");
INSERT INTO data_inventario VALUES("72","2012-06-12","0","67","2","2","Venta");
INSERT INTO data_inventario VALUES("73","2012-06-12","0","34","3","2","Venta");
INSERT INTO data_inventario VALUES("74","2012-06-12","0","65","3","2","Venta");
INSERT INTO data_inventario VALUES("75","2012-06-12","0","34","3","2","Venta");
INSERT INTO data_inventario VALUES("76","2012-06-12","0","65","3","2","Venta");
INSERT INTO data_inventario VALUES("77","2012-06-12","0","65","2","2","Venta");
INSERT INTO data_inventario VALUES("78","2012-06-12","0","62","2","2","Venta");
INSERT INTO data_inventario VALUES("79","2012-06-12","0","134","1","2","Venta");
INSERT INTO data_inventario VALUES("80","2012-06-12","0","134","1","2","Venta");
INSERT INTO data_inventario VALUES("81","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("82","2012-06-12","0","148","1","2","Venta");
INSERT INTO data_inventario VALUES("83","2012-06-12","0","34","1","2","Venta");
INSERT INTO data_inventario VALUES("84","2012-06-12","0","65","4","2","Venta");
INSERT INTO data_inventario VALUES("85","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("86","2012-06-12","0","80","1","2","Venta");
INSERT INTO data_inventario VALUES("87","2012-06-12","0","62","1","2","Venta");
INSERT INTO data_inventario VALUES("88","2012-06-12","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("89","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("90","2012-06-12","0","78","1","2","Venta");
INSERT INTO data_inventario VALUES("91","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("92","2012-06-12","0","65","2","2","Venta");
INSERT INTO data_inventario VALUES("93","2012-06-12","0","67","1","2","Venta");
INSERT INTO data_inventario VALUES("94","2012-06-12","0","34","6","2","Venta");
INSERT INTO data_inventario VALUES("95","2012-06-12","0","65","5","2","Venta");
INSERT INTO data_inventario VALUES("96","2012-06-12","0","62","1","2","Venta");
INSERT INTO data_inventario VALUES("97","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("98","2012-06-12","0","34","1","2","Venta");
INSERT INTO data_inventario VALUES("99","2012-06-12","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("100","2012-06-12","0","34","1","2","Venta");
INSERT INTO data_inventario VALUES("101","2012-06-12","0","65","4","2","Venta");
INSERT INTO data_inventario VALUES("102","2012-06-12","0","34","3","2","Venta");
INSERT INTO data_inventario VALUES("103","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("104","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("105","2012-06-12","0","34","1","2","Venta");
INSERT INTO data_inventario VALUES("106","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("107","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("108","2012-06-12","0","65","3","2","Venta");
INSERT INTO data_inventario VALUES("109","2012-06-12","0","69","2","2","Venta");
INSERT INTO data_inventario VALUES("110","2012-06-12","0","65","5","2","Venta");
INSERT INTO data_inventario VALUES("111","2012-06-12","0","69","1","2","Venta");
INSERT INTO data_inventario VALUES("112","2012-06-12","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("113","2012-06-12","0","65","2","2","Venta");
INSERT INTO data_inventario VALUES("114","2012-06-12","0","65","1","2","Venta");
INSERT INTO data_inventario VALUES("115","2012-06-15","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("116","2012-06-16","0","133","6","2","Venta");
INSERT INTO data_inventario VALUES("117","2012-06-16","0","134","1","2","Venta");
INSERT INTO data_inventario VALUES("118","2012-06-16","0","215","1","2","Venta");
INSERT INTO data_inventario VALUES("119","2012-06-16","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("120","2012-06-16","0","70","1","2","Venta");
INSERT INTO data_inventario VALUES("121","2012-06-16","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("122","2012-06-16","0","142","1","2","Venta");
INSERT INTO data_inventario VALUES("123","2012-06-16","0","73","2","2","Venta");
INSERT INTO data_inventario VALUES("124","2012-06-16","0","96","1","2","Venta");
INSERT INTO data_inventario VALUES("125","2012-06-16","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("126","2012-06-16","0","122","1","2","Venta");
INSERT INTO data_inventario VALUES("127","2012-06-16","0","129","1","2","Venta");
INSERT INTO data_inventario VALUES("128","2012-06-16","0","213","1","2","Venta");
INSERT INTO data_inventario VALUES("129","2012-06-16","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("130","2012-06-16","0","206","1","2","Venta");
INSERT INTO data_inventario VALUES("131","2012-06-16","0","215","1","2","Venta");
INSERT INTO data_inventario VALUES("132","2012-06-16","0","94","4","2","Venta");
INSERT INTO data_inventario VALUES("133","2012-06-16","0","135","2","2","Venta");
INSERT INTO data_inventario VALUES("134","2012-06-16","0","110","1","2","Venta");
INSERT INTO data_inventario VALUES("135","2012-06-16","0","124","1","2","Venta");
INSERT INTO data_inventario VALUES("136","2012-06-16","0","135","3","2","Venta");
INSERT INTO data_inventario VALUES("137","2012-06-16","0","98","1","2","Venta");
INSERT INTO data_inventario VALUES("138","2012-06-16","0","69","2","2","Venta");
INSERT INTO data_inventario VALUES("139","2012-06-16","0","221","1","2","Venta");
INSERT INTO data_inventario VALUES("140","2012-06-16","0","219","1","2","Venta");
INSERT INTO data_inventario VALUES("141","2012-06-16","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("142","2012-06-16","0","80","1","2","Venta");
INSERT INTO data_inventario VALUES("143","2012-06-17","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("144","2012-06-17","0","153","1","2","Venta");
INSERT INTO data_inventario VALUES("145","2012-06-17","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("146","2012-06-17","0","204","1","2","Venta");
INSERT INTO data_inventario VALUES("147","2012-06-17","0","205","1","2","Venta");
INSERT INTO data_inventario VALUES("148","2012-06-17","0","150","2","2","Venta");
INSERT INTO data_inventario VALUES("149","2012-06-17","0","149","1","2","Venta");
INSERT INTO data_inventario VALUES("150","2012-06-17","0","206","1","2","Venta");
INSERT INTO data_inventario VALUES("151","2012-06-17","0","110","3","2","Venta");
INSERT INTO data_inventario VALUES("152","2012-06-17","0","204","1","2","Venta");
INSERT INTO data_inventario VALUES("153","2012-06-17","0","86","1","2","Venta");
INSERT INTO data_inventario VALUES("154","2012-06-17","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("155","2012-06-17","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("156","2012-06-17","0","75","1","2","Venta");
INSERT INTO data_inventario VALUES("157","2012-06-17","0","74","1","2","Venta");
INSERT INTO data_inventario VALUES("158","2012-06-17","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("159","2012-06-17","0","70","1","2","Venta");
INSERT INTO data_inventario VALUES("160","2012-06-17","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("161","2012-06-17","0","94","2","2","Venta");
INSERT INTO data_inventario VALUES("162","2012-06-17","0","101","1","2","Venta");
INSERT INTO data_inventario VALUES("163","2012-06-17","0","98","1","2","Venta");
INSERT INTO data_inventario VALUES("164","2012-06-17","0","221","1","2","Venta");
INSERT INTO data_inventario VALUES("165","2012-06-17","0","219","1","2","Venta");
INSERT INTO data_inventario VALUES("166","2012-06-17","0","95","1","2","Venta");
INSERT INTO data_inventario VALUES("167","2012-06-17","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("168","2012-06-17","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("169","2012-06-17","0","143","1","2","Venta");
INSERT INTO data_inventario VALUES("170","2012-06-17","0","97","1","2","Venta");
INSERT INTO data_inventario VALUES("171","2012-06-17","0","149","1","2","Venta");
INSERT INTO data_inventario VALUES("172","2012-06-17","0","150","1","2","Venta");
INSERT INTO data_inventario VALUES("173","2012-06-17","0","68","2","2","Venta");
INSERT INTO data_inventario VALUES("174","2012-06-17","0","222","2","2","Venta");
INSERT INTO data_inventario VALUES("175","2012-06-17","0","223","1","2","Venta");
INSERT INTO data_inventario VALUES("176","2012-06-17","0","68","1","2","Venta");
INSERT INTO data_inventario VALUES("177","2012-06-17","0","149","1","2","Venta");
INSERT INTO data_inventario VALUES("178","2012-06-17","0","222","3","2","Venta");
INSERT INTO data_inventario VALUES("179","2012-06-17","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("180","2012-06-17","0","110","1","2","Venta");
INSERT INTO data_inventario VALUES("181","2012-06-17","0","70","1","2","Venta");
INSERT INTO data_inventario VALUES("182","2012-06-17","0","98","2","2","Venta");
INSERT INTO data_inventario VALUES("183","2012-06-17","0","128","1","2","Venta");
INSERT INTO data_inventario VALUES("184","2012-06-17","0","77","1","2","Venta");
INSERT INTO data_inventario VALUES("185","2012-06-17","0","70","1","2","Venta");
INSERT INTO data_inventario VALUES("186","2012-06-17","0","220","1","2","Venta");
INSERT INTO data_inventario VALUES("187","2012-06-17","0","205","1","2","Venta");
INSERT INTO data_inventario VALUES("188","2012-06-17","0","73","4","2","Venta");
INSERT INTO data_inventario VALUES("189","2012-06-17","0","206","1","2","Venta");
INSERT INTO data_inventario VALUES("190","2012-06-17","0","224","1","2","Venta");
INSERT INTO data_inventario VALUES("191","2012-06-17","0","220","1","2","Venta");
INSERT INTO data_inventario VALUES("192","2012-06-17","0","73","1","2","Venta");
INSERT INTO data_inventario VALUES("193","2012-06-17","0","77","1","2","Venta");
INSERT INTO data_inventario VALUES("194","2012-06-17","0","205","1","2","Venta");
INSERT INTO data_inventario VALUES("195","2012-06-17","0","235","1","2","Venta");
INSERT INTO data_inventario VALUES("196","2012-06-17","0","220","1","2","Venta");
INSERT INTO data_inventario VALUES("197","2012-06-17","0","220","1","2","Venta");
INSERT INTO data_inventario VALUES("198","2012-06-17","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("199","2012-06-17","0","208","1","2","Venta");
INSERT INTO data_inventario VALUES("200","2012-06-17","0","66","1","2","Venta");
INSERT INTO data_inventario VALUES("201","2012-06-17","0","207","1","2","Venta");
INSERT INTO data_inventario VALUES("202","2012-06-17","0","110","1","2","Venta");
INSERT INTO data_inventario VALUES("203","2012-06-17","0","134","1","2","Venta");
INSERT INTO data_inventario VALUES("204","2012-06-17","0","223","2","2","Venta");
INSERT INTO data_inventario VALUES("205","2012-06-19","0","75","1","2","Venta");
INSERT INTO data_inventario VALUES("206","2012-06-19","0","95","2","2","Venta");
INSERT INTO data_inventario VALUES("207","2012-06-19","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("208","2012-06-19","0","135","4","2","Venta");
INSERT INTO data_inventario VALUES("209","2012-06-19","0","166","2","2","Venta");
INSERT INTO data_inventario VALUES("210","2012-06-19","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("211","2012-06-19","0","122","1","2","Venta");
INSERT INTO data_inventario VALUES("212","2012-06-20","0","237","2","2","Venta");
INSERT INTO data_inventario VALUES("213","2012-06-20","0","110","1","2","Venta");
INSERT INTO data_inventario VALUES("214","2012-06-20","0","215","1","2","Venta");
INSERT INTO data_inventario VALUES("215","2012-06-20","0","90","1","2","Venta");
INSERT INTO data_inventario VALUES("216","2012-06-20","0","205","1","2","Venta");
INSERT INTO data_inventario VALUES("217","2012-06-20","0","204","1","2","Venta");
INSERT INTO data_inventario VALUES("218","2012-06-20","0","133","1","2","Venta");
INSERT INTO data_inventario VALUES("219","2012-06-20","0","68","1","2","Venta");
INSERT INTO data_inventario VALUES("220","2012-06-20","0","135","2","2","Venta");
INSERT INTO data_inventario VALUES("221","2012-06-20","0","75","1","2","Venta");
INSERT INTO data_inventario VALUES("222","2012-06-20","0","149","3","2","Venta");
INSERT INTO data_inventario VALUES("223","2012-06-20","0","69","4","2","Venta");
INSERT INTO data_inventario VALUES("224","2012-06-21","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("225","2012-06-21","0","221","1","2","Venta");
INSERT INTO data_inventario VALUES("226","2012-06-21","0","135","2","2","Venta");
INSERT INTO data_inventario VALUES("227","2012-06-21","0","94","1","2","Venta");
INSERT INTO data_inventario VALUES("228","2012-06-21","0","95","1","2","Venta");
INSERT INTO data_inventario VALUES("229","2012-06-21","0","110","2","2","Venta");
INSERT INTO data_inventario VALUES("230","2012-06-21","0","221","2","2","Venta");
INSERT INTO data_inventario VALUES("231","2012-06-21","0","219","1","2","Venta");
INSERT INTO data_inventario VALUES("232","2012-06-21","0","70","3","2","Venta");
INSERT INTO data_inventario VALUES("233","2012-06-21","0","70","1","2","Venta");
INSERT INTO data_inventario VALUES("234","2012-06-21","0","110","1","2","Venta");
INSERT INTO data_inventario VALUES("235","2012-06-21","0","152","1","2","Venta");
INSERT INTO data_inventario VALUES("236","2012-06-21","0","82","3","2","Venta");
INSERT INTO data_inventario VALUES("237","2012-06-21","0","223","1","2","Venta");
INSERT INTO data_inventario VALUES("238","2012-06-21","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("239","2012-06-21","0","68","3","2","Venta");
INSERT INTO data_inventario VALUES("240","2012-06-21","0","163","5","2","Venta");
INSERT INTO data_inventario VALUES("241","2012-06-21","0","67","2","2","Venta");
INSERT INTO data_inventario VALUES("242","2012-06-22","0","68","3","2","Venta");
INSERT INTO data_inventario VALUES("243","2012-06-22","0","124","1","2","Venta");
INSERT INTO data_inventario VALUES("244","2012-06-22","0","226","3","2","Venta");
INSERT INTO data_inventario VALUES("245","2012-06-22","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("246","2012-06-22","0","123","1","2","Venta");
INSERT INTO data_inventario VALUES("247","2012-06-22","0","138","1","2","Venta");
INSERT INTO data_inventario VALUES("248","2012-06-22","0","82","1","2","Venta");
INSERT INTO data_inventario VALUES("249","2012-06-22","0","136","1","2","Venta");
INSERT INTO data_inventario VALUES("250","2012-06-22","0","34","1","2","Venta");
INSERT INTO data_inventario VALUES("251","2012-06-22","0","137","1","2","Venta");
INSERT INTO data_inventario VALUES("252","2012-06-22","0","135","1","2","Venta");
INSERT INTO data_inventario VALUES("253","2012-06-22","0","106","1","2","Venta");
INSERT INTO data_inventario VALUES("254","2012-06-22","0","137","2","2","Venta");
INSERT INTO data_inventario VALUES("255","2012-06-29","0","132","1","2","Venta");



DROP TABLE data_ventas;

CREATE TABLE `data_ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `mesa` int(11) NOT NULL DEFAULT '0',
  `notas` text NOT NULL,
  `total` varchar(10) NOT NULL DEFAULT '',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `hora_cuenta` varchar(10) NOT NULL DEFAULT '',
  `vale` varchar(40) NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

INSERT INTO data_ventas VALUES("1","1","","","2012-05-31","9:59","");
INSERT INTO data_ventas VALUES("2","0","","","2012-05-31","14:57","");
INSERT INTO data_ventas VALUES("3","0","","","2012-06-01","17:00","");
INSERT INTO data_ventas VALUES("4","0","","","2012-06-01","17:19","");
INSERT INTO data_ventas VALUES("5","0","","","2012-06-01","17:19","");
INSERT INTO data_ventas VALUES("6","0","","","2012-06-01","17:27","");
INSERT INTO data_ventas VALUES("7","0","","","2012-06-01","17:30","");
INSERT INTO data_ventas VALUES("8","0","","","2012-06-01","17:38","");
INSERT INTO data_ventas VALUES("9","0","","","2012-06-01","18:45","");
INSERT INTO data_ventas VALUES("10","6","","","2012-06-01","19:06","");
INSERT INTO data_ventas VALUES("11","1","","","2012-06-02","8:04","");
INSERT INTO data_ventas VALUES("12","1","","","2012-06-02","10:52","");
INSERT INTO data_ventas VALUES("13","0","","107.75","2012-06-09","10:36","");
INSERT INTO data_ventas VALUES("14","0","","26.5","2012-06-09","10:39","");
INSERT INTO data_ventas VALUES("15","0","","419","2012-06-09","10:58","");
INSERT INTO data_ventas VALUES("16","0","","6","2012-06-09","11:12","");
INSERT INTO data_ventas VALUES("17","0","","9.5","2012-06-09","11:28","");
INSERT INTO data_ventas VALUES("18","0","","17","2012-06-09","11:31","");
INSERT INTO data_ventas VALUES("19","0","","10","2012-06-09","11:40","");
INSERT INTO data_ventas VALUES("20","0","","152.25","2012-06-10","13:05","");
INSERT INTO data_ventas VALUES("21","0","","120","2012-06-10","13:44","");
INSERT INTO data_ventas VALUES("22","0","","4","2012-06-10","14:46","");
INSERT INTO data_ventas VALUES("23","0","","248.5","2012-06-12","7:49","");
INSERT INTO data_ventas VALUES("24","0","","266","2012-06-12","7:51","");
INSERT INTO data_ventas VALUES("25","0","","563","2012-06-12","7:59","");
INSERT INTO data_ventas VALUES("26","0","","85.5","2012-06-12","9:29","");
INSERT INTO data_ventas VALUES("27","0","","183.5","2012-06-12","9:32","");
INSERT INTO data_ventas VALUES("28","0","","168","2012-06-12","12:02","");
INSERT INTO data_ventas VALUES("29","0","","16","2012-06-12","12:11","");
INSERT INTO data_ventas VALUES("30","0","","24","2012-06-12","12:13","");
INSERT INTO data_ventas VALUES("31","0","","24","2012-06-12","12:14","");
INSERT INTO data_ventas VALUES("32","0","","199","2012-06-12","12:15","");
INSERT INTO data_ventas VALUES("33","0","","263","2012-06-12","12:19","");
INSERT INTO data_ventas VALUES("34","0","","63","2012-06-12","12:20","");
INSERT INTO data_ventas VALUES("35","0","","94","2012-06-12","12:21","");
INSERT INTO data_ventas VALUES("36","0","","86","2012-06-12","12:34","");
INSERT INTO data_ventas VALUES("37","0","","231","2012-06-12","13:50","");
INSERT INTO data_ventas VALUES("38","0","","112","2012-06-12","13:51","");
INSERT INTO data_ventas VALUES("39","0","","112","2012-06-12","13:51","");
INSERT INTO data_ventas VALUES("40","0","","287.5","2012-06-12","14:00","");
INSERT INTO data_ventas VALUES("41","0","","24","2012-06-12","14:01","");
INSERT INTO data_ventas VALUES("42","0","","78","2012-06-12","14:01","");
INSERT INTO data_ventas VALUES("43","0","","129","2012-06-12","14:02","");
INSERT INTO data_ventas VALUES("44","0","","221","2012-06-12","14:55","");
INSERT INTO data_ventas VALUES("45","0","","48","2012-06-12","14:55","");
INSERT INTO data_ventas VALUES("46","0","","53","2012-06-12","15:01","");
INSERT INTO data_ventas VALUES("47","0","","62","2012-06-12","15:02","");
INSERT INTO data_ventas VALUES("48","0","","63","2012-06-12","15:14","");
INSERT INTO data_ventas VALUES("49","0","","96","2012-06-12","15:20","");
INSERT INTO data_ventas VALUES("50","0","","36","2012-06-12","15:21","");
INSERT INTO data_ventas VALUES("51","0","","18","2012-06-12","15:21","");
INSERT INTO data_ventas VALUES("52","0","","48","2012-06-12","15:22","");
INSERT INTO data_ventas VALUES("53","0","","24","2012-06-12","15:22","");
INSERT INTO data_ventas VALUES("54","0","","96","2012-06-12","15:22","");
INSERT INTO data_ventas VALUES("55","0","","277","2012-06-12","15:25","");
INSERT INTO data_ventas VALUES("56","0","","24","2012-06-12","15:25","");
INSERT INTO data_ventas VALUES("57","0","","24","2012-06-12","15:26","");
INSERT INTO data_ventas VALUES("58","0","","101","2012-06-12","15:27","");
INSERT INTO data_ventas VALUES("59","0","","357.5","2012-06-12","15:33","");
INSERT INTO data_ventas VALUES("60","0","","433","2012-06-12","15:45","");
INSERT INTO data_ventas VALUES("61","0","","110.5","2012-06-12","15:47","");
INSERT INTO data_ventas VALUES("62","0","","36","2012-06-12","15:47","");
INSERT INTO data_ventas VALUES("63","0","","155","2012-06-12","15:49","");
INSERT INTO data_ventas VALUES("64","0","","66","2012-06-12","15:50","");
INSERT INTO data_ventas VALUES("65","0","","75","2012-06-12","15:51","");
INSERT INTO data_ventas VALUES("66","0","","105","2012-06-12","15:52","");
INSERT INTO data_ventas VALUES("67","0","","15","2012-06-12","15:53","");
INSERT INTO data_ventas VALUES("68","0","","44","2012-06-12","15:54","");
INSERT INTO data_ventas VALUES("69","0","","166","2012-06-12","15:58","");
INSERT INTO data_ventas VALUES("70","0","","85","2012-06-12","15:58","");
INSERT INTO data_ventas VALUES("71","0","","165","2012-06-12","15:59","");
INSERT INTO data_ventas VALUES("72","0","","33","2012-06-12","15:59","");
INSERT INTO data_ventas VALUES("73","0","","198","2012-06-12","16:00","");
INSERT INTO data_ventas VALUES("74","0","","48","2012-06-12","16:01","");
INSERT INTO data_ventas VALUES("75","0","","126","2012-06-12","16:02","");
INSERT INTO data_ventas VALUES("76","0","","24","2012-06-12","16:02","");
INSERT INTO data_ventas VALUES("77","0","","66","2012-06-12","16:02","");
INSERT INTO data_ventas VALUES("78","0","","72","2012-06-12","16:51","");
INSERT INTO data_ventas VALUES("79","0","","30","2012-06-12","16:51","");
INSERT INTO data_ventas VALUES("80","0","","196","2012-06-12","16:53","");
INSERT INTO data_ventas VALUES("81","0","","246","2012-06-12","16:56","");
INSERT INTO data_ventas VALUES("82","0","","226","2012-06-12","16:58","");
INSERT INTO data_ventas VALUES("83","0","","56","2012-06-12","16:59","");
INSERT INTO data_ventas VALUES("84","0","","46","2012-06-12","17:00","");
INSERT INTO data_ventas VALUES("85","0","","44.5","2012-06-12","17:01","");
INSERT INTO data_ventas VALUES("86","0","","39","2012-06-12","17:03","");
INSERT INTO data_ventas VALUES("87","0","","114","2012-06-12","17:05","");
INSERT INTO data_ventas VALUES("88","0","","85","2012-06-12","17:05","");
INSERT INTO data_ventas VALUES("89","0","","146","2012-06-12","17:07","");
INSERT INTO data_ventas VALUES("90","0","","24","2012-06-12","17:07","");
INSERT INTO data_ventas VALUES("91","0","","66","2012-06-12","17:09","");
INSERT INTO data_ventas VALUES("92","0","","74","2012-06-12","17:09","");
INSERT INTO data_ventas VALUES("93","0","","170","2012-06-12","17:15","");
INSERT INTO data_ventas VALUES("94","0","","12","2012-06-12","17:16","");
INSERT INTO data_ventas VALUES("95","0","","157","2012-06-12","17:17","");
INSERT INTO data_ventas VALUES("96","0","","299","2012-06-12","17:20","");
INSERT INTO data_ventas VALUES("97","0","","57","2012-06-12","17:21","");
INSERT INTO data_ventas VALUES("98","0","","548","2012-06-12","17:24","");
INSERT INTO data_ventas VALUES("99","0","","47","2012-06-12","17:25","");
INSERT INTO data_ventas VALUES("100","0","","180.5","2012-06-12","17:26","");
INSERT INTO data_ventas VALUES("101","0","","92","2012-06-12","17:27","");
INSERT INTO data_ventas VALUES("102","0","","76","2012-06-12","17:27","");
INSERT INTO data_ventas VALUES("103","0","","5","2012-06-15","16:27","");
INSERT INTO data_ventas VALUES("104","0","","108","2012-06-16","7:51","");
INSERT INTO data_ventas VALUES("105","0","","23","2012-06-16","7:56","");
INSERT INTO data_ventas VALUES("106","0","","12","2012-06-16","7:56","");
INSERT INTO data_ventas VALUES("107","0","","7.5","2012-06-16","10:00","");
INSERT INTO data_ventas VALUES("108","0","","8","2012-06-16","10:52","");
INSERT INTO data_ventas VALUES("109","0","","21","2012-06-16","11:38","");
INSERT INTO data_ventas VALUES("110","0","","10","2012-06-16","11:48","");
INSERT INTO data_ventas VALUES("111","0","","3.5","2012-06-16","12:03","");
INSERT INTO data_ventas VALUES("112","0","","8","2012-06-16","12:21","");
INSERT INTO data_ventas VALUES("113","0","","12","2012-06-16","12:28","");
INSERT INTO data_ventas VALUES("114","0","","10","2012-06-16","12:43","");
INSERT INTO data_ventas VALUES("115","0","","20","2012-06-16","13:42","");
INSERT INTO data_ventas VALUES("116","0","","16","2012-06-16","14:44","");
INSERT INTO data_ventas VALUES("117","0","","1","2012-06-16","15:49","");
INSERT INTO data_ventas VALUES("118","0","","2","2012-06-16","16:47","");
INSERT INTO data_ventas VALUES("119","0","","24","2012-06-16","18:20","");
INSERT INTO data_ventas VALUES("120","0","","5","2012-06-16","18:22","");
INSERT INTO data_ventas VALUES("121","0","","16","2012-06-16","18:25","");
INSERT INTO data_ventas VALUES("122","0","","10","2012-06-16","19:21","");
INSERT INTO data_ventas VALUES("123","0","","2.5","2012-06-16","20:33","");
INSERT INTO data_ventas VALUES("124","0","","33.5","2012-06-17","7:32","");
INSERT INTO data_ventas VALUES("125","0","","24","2012-06-17","7:40","");
INSERT INTO data_ventas VALUES("126","0","","24","2012-06-17","8:09","");
INSERT INTO data_ventas VALUES("127","0","","12","2012-06-17","8:10","");
INSERT INTO data_ventas VALUES("128","0","","3","2012-06-17","8:26","");
INSERT INTO data_ventas VALUES("129","0","","12","2012-06-17","8:31","");
INSERT INTO data_ventas VALUES("130","0","","2","2012-06-17","9:10","");
INSERT INTO data_ventas VALUES("131","0","","5","2012-06-17","9:12","");
INSERT INTO data_ventas VALUES("132","0","","5","2012-06-17","9:37","");
INSERT INTO data_ventas VALUES("133","0","","16","2012-06-17","9:47","");
INSERT INTO data_ventas VALUES("134","0","","5","2012-06-17","9:48","");
INSERT INTO data_ventas VALUES("135","0","","5","2012-06-17","9:53","");
INSERT INTO data_ventas VALUES("136","0","","10","2012-06-17","10:04","");
INSERT INTO data_ventas VALUES("137","0","","3","2012-06-17","10:11","");
INSERT INTO data_ventas VALUES("138","0","","5","2012-06-17","10:26","");
INSERT INTO data_ventas VALUES("139","0","","2","2012-06-17","10:41","");
INSERT INTO data_ventas VALUES("140","0","","15","2012-06-17","10:44","");
INSERT INTO data_ventas VALUES("141","0","","8","2012-06-17","10:49","");
INSERT INTO data_ventas VALUES("142","0","","8","2012-06-17","10:51","");
INSERT INTO data_ventas VALUES("143","0","","4","2012-06-17","10:52","");
INSERT INTO data_ventas VALUES("144","0","","12","2012-06-17","11:02","");
INSERT INTO data_ventas VALUES("145","0","","8","2012-06-17","11:21","");
INSERT INTO data_ventas VALUES("146","0","","33.75","2012-06-17","11:43","");
INSERT INTO data_ventas VALUES("147","0","","20","2012-06-17","11:44","");
INSERT INTO data_ventas VALUES("148","0","","1.5","2012-06-17","11:46","");
INSERT INTO data_ventas VALUES("149","0","","8","2012-06-17","12:07","");
INSERT INTO data_ventas VALUES("150","0","","1","2012-06-17","12:10","");
INSERT INTO data_ventas VALUES("151","0","","2.5","2012-06-17","12:24","");
INSERT INTO data_ventas VALUES("152","0","","10","2012-06-17","12:34","");
INSERT INTO data_ventas VALUES("153","0","","8","2012-06-17","12:36","");
INSERT INTO data_ventas VALUES("154","0","","12","2012-06-17","14:06","");
INSERT INTO data_ventas VALUES("155","0","","2.5","2012-06-17","14:11","");
INSERT INTO data_ventas VALUES("156","0","","1","2012-06-17","14:27","");
INSERT INTO data_ventas VALUES("157","0","","22","2012-06-17","14:45","");
INSERT INTO data_ventas VALUES("158","0","","14.5","2012-06-17","14:47","");
INSERT INTO data_ventas VALUES("159","0","","27.5","2012-06-17","14:48","");
INSERT INTO data_ventas VALUES("160","0","","4.5","2012-06-17","14:49","");
INSERT INTO data_ventas VALUES("161","0","","1","2012-06-17","14:51","");
INSERT INTO data_ventas VALUES("162","0","","8","2012-06-17","15:20","");
INSERT INTO data_ventas VALUES("163","0","","6","2012-06-17","15:28","");
INSERT INTO data_ventas VALUES("164","0","","1","2012-06-17","15:29","");
INSERT INTO data_ventas VALUES("165","0","","6","2012-06-17","15:42","");
INSERT INTO data_ventas VALUES("166","0","","1","2012-06-17","15:46","");
INSERT INTO data_ventas VALUES("167","0","","23","2012-06-17","15:47","");
INSERT INTO data_ventas VALUES("168","0","","1.5","2012-06-17","16:02","");
INSERT INTO data_ventas VALUES("169","0","","77","2012-06-19","7:49","");
INSERT INTO data_ventas VALUES("170","0","","4","2012-06-19","12:17","");
INSERT INTO data_ventas VALUES("171","0","","8","2012-06-19","16:55","");
INSERT INTO data_ventas VALUES("172","0","","2","2012-06-19","18:21","");
INSERT INTO data_ventas VALUES("173","0","","2","2012-06-20","7:42","");
INSERT INTO data_ventas VALUES("174","0","","10","2012-06-20","8:28","");
INSERT INTO data_ventas VALUES("175","0","","7.5","2012-06-20","8:50","");
INSERT INTO data_ventas VALUES("176","0","","24","2012-06-20","10:59","");
INSERT INTO data_ventas VALUES("177","0","","18","2012-06-20","11:24","");
INSERT INTO data_ventas VALUES("178","0","","94","2012-06-20","12:32","");
INSERT INTO data_ventas VALUES("179","1","","6","2012-06-20","18:07","");
INSERT INTO data_ventas VALUES("180","0","","24.5","2012-06-21","7:42","");
INSERT INTO data_ventas VALUES("181","0","","15","2012-06-21","7:44","");
INSERT INTO data_ventas VALUES("182","0","","5","2012-06-21","11:07","");
INSERT INTO data_ventas VALUES("183","0","","7.5","2012-06-21","11:12","");
INSERT INTO data_ventas VALUES("184","0","","2.5","2012-06-21","12:12","");
INSERT INTO data_ventas VALUES("185","0","","1","2012-06-21","14:39","");
INSERT INTO data_ventas VALUES("186","0","","104","2012-06-21","14:39","");
INSERT INTO data_ventas VALUES("187","0","","8","2012-06-21","14:41","");
INSERT INTO data_ventas VALUES("188","4","","109.25","2012-06-21","16:18","");
INSERT INTO data_ventas VALUES("189","0","","85","2012-06-21","18:51","");
INSERT INTO data_ventas VALUES("195","0","","38","2012-06-22","9:54","");
INSERT INTO data_ventas VALUES("194","0","","8","2012-06-22","9:53","Cham");
INSERT INTO data_ventas VALUES("192","0","","8","2012-06-22","9:11","Chap");
INSERT INTO data_ventas VALUES("193","4","","2","2012-06-22","9:11","Chap");
INSERT INTO data_ventas VALUES("196","0","","15","2012-06-22","9:56","");
INSERT INTO data_ventas VALUES("197","0","","39.5","2012-06-22","10:39","");
INSERT INTO data_ventas VALUES("198","0","","2","2012-06-29","16:04","");



DROP TABLE inf_carta;

CREATE TABLE `inf_carta` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigoDeBarras` varchar(80) NOT NULL,
  `producto` varchar(40) NOT NULL DEFAULT '',
  `precio` varchar(10) NOT NULL DEFAULT '',
  `subtipo` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `inventariado` smallint(6) NOT NULL COMMENT '0-No, 1-Si',
  `reorden` int(11) NOT NULL,
  `provider` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=latin1;

INSERT INTO inf_carta VALUES("35","","Pollo encebollado","38","3","0","0","0","0");
INSERT INTO inf_carta VALUES("34","","Pollo a la plancha","38","3","10","1","6","0");
INSERT INTO inf_carta VALUES("33","","Dobladas de quesillo","23","4","0","0","0","0");
INSERT INTO inf_carta VALUES("32","","Dobladas de pollo","25","4","0","0","0","0");
INSERT INTO inf_carta VALUES("31","","Tacos de res","26.50","4","0","0","0","0");
INSERT INTO inf_carta VALUES("30","","Tacos de pollo","23.50","4","0","0","0","0");
INSERT INTO inf_carta VALUES("29","","Papas para acompañar","6","4","0","0","0","0");
INSERT INTO inf_carta VALUES("28","","Sandwich de pollo","16","4","0","0","0","0");
INSERT INTO inf_carta VALUES("27","","Sandwich con jamón y queso","17","4","0","0","0","0");
INSERT INTO inf_carta VALUES("26","","Sándwich con jamón","15","4","0","0","0","0");
INSERT INTO inf_carta VALUES("25","","Hamburguesa con jamón y queso","27","4","0","0","0","0");
INSERT INTO inf_carta VALUES("24","","Hamburguesa con queso","24","4","0","0","0","0");
INSERT INTO inf_carta VALUES("23","","Hamburguesa sencilla","20","4","0","0","0","0");
INSERT INTO inf_carta VALUES("22","","Desayuno infantil","20","2","0","0","0","0");
INSERT INTO inf_carta VALUES("21","","Omelette típico","24","2","0","0","0","0");
INSERT INTO inf_carta VALUES("20","","Desayuno Ganadero","40.50","2","0","0","0","0");
INSERT INTO inf_carta VALUES("19","","Desayuno Peregrino","33","2","0","0","0","0");
INSERT INTO inf_carta VALUES("18","","Desayuno económico","24","2","0","0","0","0");
INSERT INTO inf_carta VALUES("17","","Desayuno Amanecer","22","2","0","0","0","0");
INSERT INTO inf_carta VALUES("16","","Cerveza","20","5","0","0","0","0");
INSERT INTO inf_carta VALUES("15","","Cerveza gallo botella","17","5","29","1","12","0");
INSERT INTO inf_carta VALUES("188","","Cerveza botella o lata gallo","17","1","0","0","0","0");
INSERT INTO inf_carta VALUES("187","","Refresco natural pichel","35","1","0","0","0","0");
INSERT INTO inf_carta VALUES("186","","Refresco natural grande","15","1","0","0","0","0");
INSERT INTO inf_carta VALUES("185","","Refresco natural pequeño","12","1","0","0","0","0");
INSERT INTO inf_carta VALUES("184","","Jugo de naranja pichel","35","1","0","0","0","0");
INSERT INTO inf_carta VALUES("183","","Naranjada pichel","40","1","0","0","0","0");
INSERT INTO inf_carta VALUES("182","","Naranjada grande","18","1","0","0","0","0");
INSERT INTO inf_carta VALUES("181","","Naranjada pequeño","15","1","0","0","0","0");
INSERT INTO inf_carta VALUES("180","","Jugo de naranja grande","15","1","0","0","0","0");
INSERT INTO inf_carta VALUES("179","","Jugo de naranja pequeño","12","1","0","0","0","0");
INSERT INTO inf_carta VALUES("36","","Pescado a la parrilla (15 onz)","60","3","0","0","0","0");
INSERT INTO inf_carta VALUES("57","","Pescado a la parrilla (mediano)","50","3","0","0","0","0");
INSERT INTO inf_carta VALUES("58","","Pescado frito (mediano)","50","3","0","0","0","0");
INSERT INTO inf_carta VALUES("59","","Pescado frito (grande)","60","3","0","0","0","0");
INSERT INTO inf_carta VALUES("60","","Churrasco El Romerista","40","3","0","0","0","0");
INSERT INTO inf_carta VALUES("61","","Churrasco El Gran Romerista","55","3","0","0","0","0");
INSERT INTO inf_carta VALUES("62","","Filete de pescado al ajillo","55","3","8","1","6","0");
INSERT INTO inf_carta VALUES("63","","Medallones","30","3","0","0","0","0");
INSERT INTO inf_carta VALUES("64","","Pollo Cordon Bleu","45","3","0","0","0","0");
INSERT INTO inf_carta VALUES("65","","Gaseosas 600 ml","8","5","0","1","24","0");
INSERT INTO inf_carta VALUES("66","","Agua bolsa","1.5","2","14","1","24","0");
INSERT INTO inf_carta VALUES("67","036731000804","Gatorade Lemon Lime","12","5","8","1","6","0");
INSERT INTO inf_carta VALUES("68","7401000707723","Raptor bebida energizante","12","5","6","1","12","0");
INSERT INTO inf_carta VALUES("69","7401002300168","Orange crush 600 ml","8","5","0","1","6","0");
INSERT INTO inf_carta VALUES("70","7401002306740","Agua pura pachoncio 294 ml","2.5","5","10","1","10","0");
INSERT INTO inf_carta VALUES("72","7401000705026","Jugo Tampico (480 ml)","6","5","38","1","10","0");
INSERT INTO inf_carta VALUES("73","7401000705019","Jugo Tampico vaso (235 ml)","2.5","5","13","1","6","0");
INSERT INTO inf_carta VALUES("74","7401000707303","Jugo de la granja (vaso - 235 ml)","6","5","22","1","6","0");
INSERT INTO inf_carta VALUES("75","7401000707310","Jugo de la granja (1/2 litro)","10","5","15","1","6","0");
INSERT INTO inf_carta VALUES("76","7406189000023","Te frio con Te Verde","10","5","9","1","6","0");
INSERT INTO inf_carta VALUES("77","7401005983696","Adrenalina","12.00","1","10","1","6","2");
INSERT INTO inf_carta VALUES("78","7452017663434","Jugo del Monte Manzana 330 ml","6","5","10","1","6","0");
INSERT INTO inf_carta VALUES("79","088313000016","Jugo Fun-C Manzana 250 ml","4","2","1","1","6","0");
INSERT INTO inf_carta VALUES("80","088313318630","Jugo Kerns Junior 200 ml","2.5","5","12","1","6","0");
INSERT INTO inf_carta VALUES("81","081537200101","Jugo del frutal Manzana 200 ml","3.5","5","18","1","8","0");
INSERT INTO inf_carta VALUES("82","7401002306641","Agua en vaso","1","2","10","1","6","0");
INSERT INTO inf_carta VALUES("84","","Compotas","7","7","11","1","6","0");
INSERT INTO inf_carta VALUES("86","842135000148","Papel toilet","2","7","9","1","6","0");
INSERT INTO inf_carta VALUES("87","","Doritos","3","7","8","1","3","0");
INSERT INTO inf_carta VALUES("88","7419900001025","Vasos desechables 8 onz.","0.5","7","25","1","25","0");
INSERT INTO inf_carta VALUES("89","","Platos desechables",".5","7","32","1","25","0");
INSERT INTO inf_carta VALUES("90","099176480518","Cepillo Kit (pasta-cepillo)","7.50","7","7","1","5","0");
INSERT INTO inf_carta VALUES("91","7453010041717","Cepillo dental Matriz","12","7","1","1","3","0");
INSERT INTO inf_carta VALUES("92","7891024136089","Enjuague bucal Colgate 60 ml","7.00","2","2","1","2","0");
INSERT INTO inf_carta VALUES("93","7509546032214","Jabon Palmovile Sensacion humectante","10","7","4","1","6","0");
INSERT INTO inf_carta VALUES("94","7401002306719","Agua pura 600 ml","5","5","65","1","24","0");
INSERT INTO inf_carta VALUES("95","7401002306504","Agua pura 1 galon","15","5","16","1","6","0");
INSERT INTO inf_carta VALUES("96","7401002306559","Agua pura 1.5 litros","10","5","35","1","6","0");
INSERT INTO inf_carta VALUES("97","7401002306894","Agua pura 2 litros","12.00","5","17","1","6","0");
INSERT INTO inf_carta VALUES("98","7401002306719","Agua pura 600 ml","5","5","136","1","60","0");
INSERT INTO inf_carta VALUES("100","7401000705057","Jugo Tampico 1 Galon","28","5","6","1","3","0");
INSERT INTO inf_carta VALUES("101","7441008111634","PaÃ±al Huggies Classic","3","7","28","1","12","0");
INSERT INTO inf_carta VALUES("102","7441008154198","Toalla sanitaria kotex nocturna","2.5","7","3","1","5","0");
INSERT INTO inf_carta VALUES("103","7506195103289","Shampoo Pantene Cuidado Clasic. 2 en 1","2","7","13","1","24","0");
INSERT INTO inf_carta VALUES("104","7501438311216","Gelatina Moco de Gorila","2.5","2","15","1","6","0");
INSERT INTO inf_carta VALUES("105","7702425631397","Protectores diarios Kotex","8","7","1","1","3","0");
INSERT INTO inf_carta VALUES("106","011418040168","Alka Seltzer","1.5","7","27","1","10","0");
INSERT INTO inf_carta VALUES("107","74410187","Sal Andrews","1.50","7","27","1","10","0");
INSERT INTO inf_carta VALUES("108","7451079002298","Panadol Ultra","2.5","7","7","1","6","0");
INSERT INTO inf_carta VALUES("109","011418218406","Tabcin extra fuerte","1.5","7","56","1","10","0");
INSERT INTO inf_carta VALUES("110","75019778","Chicles Trident Menta 5.5g","1","6","7","1","20","0");
INSERT INTO inf_carta VALUES("111","75019815","Chicles Bubbaloo Fresa",".75","6","46","1","20","0");
INSERT INTO inf_carta VALUES("112","75020460","Chicles Clorets 2.8g","0.5","6","49","1","20","0");
INSERT INTO inf_carta VALUES("113","7501056904104","Chicles adams 12 piezas","4","6","15","1","10","0");
INSERT INTO inf_carta VALUES("114","","Chicles Corvis",".5","6","13","1","10","0");
INSERT INTO inf_carta VALUES("115","","Dulces de miel Arcor",".25","6","56","1","15","0");
INSERT INTO inf_carta VALUES("116","","Dulces Halls",".75","6","21","1","12","0");
INSERT INTO inf_carta VALUES("117","7501056900861","Dulces Halls Barra","5","6","4","1","4","0");
INSERT INTO inf_carta VALUES("118","","Bom Bon",".75","6","10","1","10","0");
INSERT INTO inf_carta VALUES("119","","Galletas","1.5","6","2","1","12","0");
INSERT INTO inf_carta VALUES("120","","Clamato","5","7","10","1","10","0");
INSERT INTO inf_carta VALUES("121","","Chocolate moneda granada",".5","6","24","1","12","0");
INSERT INTO inf_carta VALUES("122","7406131006356","Galletas Salada 24.g","2","6","29","1","8","0");
INSERT INTO inf_carta VALUES("123","086581110888","Galleta Chiky chocolate","2.5","6","14","1","6","0");
INSERT INTO inf_carta VALUES("124","753079000838","Galleta Can Can Chocolate","2","6","3","1","6","0");
INSERT INTO inf_carta VALUES("126","7401002301615","Mineral Canada Dry 600 ml","8.00","5","33","1","10","0");
INSERT INTO inf_carta VALUES("128","7401006469489","Agua mineral Shangri-la 600ml","10","5","9","1","6","0");
INSERT INTO inf_carta VALUES("129","7401002306924","Agua pura 1 litro pachon","8","5","8","1","6","0");
INSERT INTO inf_carta VALUES("131","","Agua pura pachoncito 294 ml","2.5","5","10","1","6","0");
INSERT INTO inf_carta VALUES("132","","Agua pura vaso","2","5","17","1","6","0");
INSERT INTO inf_carta VALUES("133","7401000702414","Cerveza gallo lata (12 onz)","18.00","5","9","1","6","0");
INSERT INTO inf_carta VALUES("134","7401006400901","Coca Cola 2.5 litros","23","5","14","1","10","0");
INSERT INTO inf_carta VALUES("135","7401006400482","Coca Cola desechable 600ml ","8","5","54","1","24","0");
INSERT INTO inf_carta VALUES("136","7401006405487","Coca Cola desechable light 600 ml","8","5","2","1","5","0");
INSERT INTO inf_carta VALUES("137","7401006400727","Coca Cola 1.5 litros","15.00","5","18","1","10","0");
INSERT INTO inf_carta VALUES("138","","Coca cola lata 354 ml","8","5","-1","1","5","0");
INSERT INTO inf_carta VALUES("139","7411001805236","Coca cola light lata 354 ml","8","5","9","1","6","0");
INSERT INTO inf_carta VALUES("140","","Fanta naranja desechable 600 ml","8","5","0","1","6","0");
INSERT INTO inf_carta VALUES("142","088313002645","Jugo Kerns Naranja caja 250 ml","3.5","5","8","1","6","0");
INSERT INTO inf_carta VALUES("143","088313319187","Jugo Kerns V8 157 ml","4","5","25","1","6","0");
INSERT INTO inf_carta VALUES("144","095188013027","Jugo Tampico pachon 300 ml","4","5","6","1","6","0");
INSERT INTO inf_carta VALUES("145","081537200811","Marinero Coctel 250 ml","6","5","6","1","6","0");
INSERT INTO inf_carta VALUES("146","","Mirinda (600 ml)","8","5","3","1","6","0");
INSERT INTO inf_carta VALUES("148","7401002300267","Orange Crush 3 lts","23","5","4","1","3","0");
INSERT INTO inf_carta VALUES("149","7401005941030","7Up 600 ml","9","2","15","1","6","0");
INSERT INTO inf_carta VALUES("150","7401005910012","Pepsi 20 onz. Desechable","8","5","58","1","36","0");
INSERT INTO inf_carta VALUES("151","7401005915017","Pepsi 3 litros","23","5","4","1","3","0");
INSERT INTO inf_carta VALUES("152","7411001830238","Sprite lata 254 ml","8","5","10","1","6","0");
INSERT INTO inf_carta VALUES("153","7401002303206","Tiky 3 lts","23","5","6","1","3","0");
INSERT INTO inf_carta VALUES("154","","Tiky 600 ml","8","5","0","1","6","0");
INSERT INTO inf_carta VALUES("155","","Sopa instantanea Nissin preparada","7","7","0","0","0","0");
INSERT INTO inf_carta VALUES("157","","Dulces de colacion El Rodeo","5","7","36","1","12","0");
INSERT INTO inf_carta VALUES("158","","Shampoo Head Shoulders","1","7","12","1","12","0");
INSERT INTO inf_carta VALUES("159","7509546049526","Shampoo Palmolive Reparacion completa","2","7","41","1","12","0");
INSERT INTO inf_carta VALUES("160","4719867213084","Pegamento Super Glue","2","7","7","1","5","0");
INSERT INTO inf_carta VALUES("161","7401000439808","Spray fijador para cabello","8","7","2","1","3","0");
INSERT INTO inf_carta VALUES("162","7501009222729","Rasuradoras","6.5","7","1","1","5","0");
INSERT INTO inf_carta VALUES("163","099176314301","Cepillo dental Classic Colgate","5","7","-4","1","3","0");
INSERT INTO inf_carta VALUES("164","7501065920706","Pasta dental Crest 110 ml","17","7","1","1","3","0");
INSERT INTO inf_carta VALUES("165","011418221031","Tabcin ninos","1.50","7","10","1","10","0");
INSERT INTO inf_carta VALUES("166","7501019006081","Toalla sanitaria Saba intima clip","2","7","33","1","12","0");
INSERT INTO inf_carta VALUES("167","7501019030130","Protectores diarios Saba","13","7","1","1","3","0");
INSERT INTO inf_carta VALUES("168","7509546000350","Pasta Colgate  Triple Accion150 ml","20","7","4","1","3","0");
INSERT INTO inf_carta VALUES("169","","Desayuno Peregrino economico","22.5","2","0","0","0","0");
INSERT INTO inf_carta VALUES("170","","Porcion de frijoles","10.5","4","0","0","0","0");
INSERT INTO inf_carta VALUES("171","","Porcion de platanos","15","4","0","0","0","0");
INSERT INTO inf_carta VALUES("172","","Porcion de papas","15","4","0","0","0","0");
INSERT INTO inf_carta VALUES("173","","Ensalada de lechuga","15","4","0","0","0","0");
INSERT INTO inf_carta VALUES("174","","Ensalada del Chef","30","4","0","0","0","0");
INSERT INTO inf_carta VALUES("175","","Crema de esparragos","18","4","0","0","0","0");
INSERT INTO inf_carta VALUES("176","","Crema de hongos","18","4","0","0","0","0");
INSERT INTO inf_carta VALUES("177","","Sopa Juliana","30","4","0","0","0","0");
INSERT INTO inf_carta VALUES("178","","Sopa Pavesa","25","4","0","0","0","0");
INSERT INTO inf_carta VALUES("189","","Cerveza Dorada","22","1","0","0","0","0");
INSERT INTO inf_carta VALUES("190","","Cerveza Corona","22","1","0","0","0","0");
INSERT INTO inf_carta VALUES("191","","Cerveza Cabro","20","1","0","0","0","0");
INSERT INTO inf_carta VALUES("192","","Cafe","6","1","0","0","0","0");
INSERT INTO inf_carta VALUES("193","","Te","6","1","0","0","0","0");
INSERT INTO inf_carta VALUES("194","","Ceviche pequeño","40","4","0","0","0","0");
INSERT INTO inf_carta VALUES("195","","Ceviche grande","75","4","0","0","0","0");
INSERT INTO inf_carta VALUES("197","735051016709","Compota Heinz","7.00","7","6","1","2","0");
INSERT INTO inf_carta VALUES("198","088169024808","Compota Gerber","7.00","7","5","1","2","0");
INSERT INTO inf_carta VALUES("199","7406189004298","Naturas Tamarindo 460 ml","10.00","5","6","1","3","0");
INSERT INTO inf_carta VALUES("200","7406189004281","Naturas Naranja-Pina 460 ml","10.00","5","7","1","3","0");
INSERT INTO inf_carta VALUES("201","7406189004274","Naturas Guava-Pina 460 ml","10.00","5","7","1","3","0");
INSERT INTO inf_carta VALUES("204","036731000811","Gatorade Grape","12","5","7","1","6","0");
INSERT INTO inf_carta VALUES("205","036731000781","Gatorade Fruit Punch","12","5","1","1","6","0");
INSERT INTO inf_carta VALUES("206","036731000798","Gatorade Orange","12","5","3","1","6","0");
INSERT INTO inf_carta VALUES("207","081537200057","Jugo del Frutal Melocoton 330 ml","6","5","14","1","8","0");
INSERT INTO inf_carta VALUES("208","081537200002","Jugo del Frutal Manzana 330 ml","6","5","11","1","8","0");
INSERT INTO inf_carta VALUES("209","081537200033","Jugo del Frutal Pina 330 ml","6","5","15","1","8","0");
INSERT INTO inf_carta VALUES("210","7452017663397","Jugo del Monte Melocoton 330 ml","6","5","12","1","6","0");
INSERT INTO inf_carta VALUES("211","088313000023","Jugo Fun-C Melocoton 250 ml","3.5","5","4","1","6","0");
INSERT INTO inf_carta VALUES("213","088313314649","Jugo Kerns Manzana 250 ml","6","1","13","1","6","0");
INSERT INTO inf_carta VALUES("214","081537200828","Marinero Coctel picante 250 ml","6","5","5","1","5","0");
INSERT INTO inf_carta VALUES("215","7406189000030","Te frio Melocoton 460 ml","10","5","6","1","6","0");
INSERT INTO inf_carta VALUES("216","7406189000016","Te frio con Limon","10","5","9","1","0","0");
INSERT INTO inf_carta VALUES("217","070662242025","Sopa Nissin Camaron","5","7","7","1","3","0");
INSERT INTO inf_carta VALUES("218","070662242032","Sopa Nissin de Pollo","5","7","7","1","3","0");
INSERT INTO inf_carta VALUES("219","75029937","Chiclets Trident Mango 5.5g","1","6","1","1","20","0");
INSERT INTO inf_carta VALUES("220","75019891","Chiclets Trident Yerbabuena 5.5g","1","6","3","1","20","0");
INSERT INTO inf_carta VALUES("221","75019785","Chiclets Trident Fresa Salvaje 5.5g","1","6","0","1","20","0");
INSERT INTO inf_carta VALUES("222","75019907","Chiclets Clorets hierbabuena 2.8 g","0.5","6","69","1","20","0");
INSERT INTO inf_carta VALUES("223","75036614","Chicles Bubbaloo frambuesa","0.75","6","33","1","20","0");
INSERT INTO inf_carta VALUES("224","086581110857","Galleta Chiky Vainilla","2.5","6","3","1","6","0");
INSERT INTO inf_carta VALUES("225","086581110871","Galleta Chiky Fresa","2.5","6","6","1","6","0");
INSERT INTO inf_carta VALUES("226","753079000852","Galleta Can Can Fresa","2","6","2","1","6","0");
INSERT INTO inf_carta VALUES("227","7509546031989","Shampoo Palmolive Anticaspa Oxygen","2","7","26","1","10","0");
INSERT INTO inf_carta VALUES("229","7506195103340","Crema para Peinar Pantene Liso extremo","2","7","22","1","10","0");
INSERT INTO inf_carta VALUES("230","7506195103357","Crema para Peinar Pantene Rizos definido","2","7","2","1","10","0");
INSERT INTO inf_carta VALUES("231","7506195103296","Shampoo Pantene Control Caida 2 en 1","2","7","3","1","10","0");
INSERT INTO inf_carta VALUES("232","7509546032238","Jabon Palmolive Crema humec. y refresc.","10","7","2","1","0","0");
INSERT INTO inf_carta VALUES("233","7509546032276","Jabon Palmolive Exfolacion diaria","10","7","1","1","3","0");
INSERT INTO inf_carta VALUES("234","7509546044972","Jabon Protex Fresh","10","7","2","1","3","0");
INSERT INTO inf_carta VALUES("235","081537200095","Jugo del frutal Melocoton 200 ml","3.5","5","11","1","8","0");
INSERT INTO inf_carta VALUES("236","7419900001032","Vasos desechables 10 onz.","0.5","7","42","1","10","0");
INSERT INTO inf_carta VALUES("237","75034115","Halls Alka ice",".5","6","17","1","8","0");
INSERT INTO inf_carta VALUES("238","7421000101208","Fosforos (Carterita)",".30","7","50","1","0","0");
INSERT INTO inf_carta VALUES("239","7401005988639","Squiz 500 ml","6","5","12","1","6","0");
INSERT INTO inf_carta VALUES("240","7401005988813","pepsi 355ml","5","5","12","1","6","0");
INSERT INTO inf_carta VALUES("241","7401005988745","Squiz 3 litros","22","5","6","1","4","0");
INSERT INTO inf_carta VALUES("249","","Vaso de leche","5","1","0","0","0","0");
INSERT INTO inf_carta VALUES("248","","Churrasco de chucho","30","1","0","0","0","0");



DROP TABLE inf_categorias;

CREATE TABLE `inf_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO inf_categorias VALUES("1","Hotel");
INSERT INTO inf_categorias VALUES("2","Restaurante");
INSERT INTO inf_categorias VALUES("3","Tienda");
INSERT INTO inf_categorias VALUES("4","Vales");



DROP TABLE inf_clientes;

CREATE TABLE `inf_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `nit` varchar(15) NOT NULL DEFAULT '',
  `detalle` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE inf_cuentasGastos;

CREATE TABLE `inf_cuentasGastos` (
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO inf_cuentasGastos VALUES("1","aeiou");
INSERT INTO inf_cuentasGastos VALUES("2","abcde");



DROP TABLE inf_personal;

CREATE TABLE `inf_personal` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `puesto` varchar(80) NOT NULL DEFAULT '',
  `mostrar` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_persona`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE inf_providers;

CREATE TABLE `inf_providers` (
  `id_provider` int(11) NOT NULL AUTO_INCREMENT,
  `provider` varchar(50) NOT NULL,
  PRIMARY KEY (`id_provider`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO inf_providers VALUES("1","Chap");
INSERT INTO inf_providers VALUES("2","Marisa");



DROP TABLE inf_subtipos;

CREATE TABLE `inf_subtipos` (
  `id_subtipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `subtipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_subtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO inf_subtipos VALUES("1","1","Frescos y licuados");
INSERT INTO inf_subtipos VALUES("2","1","Desayunos");
INSERT INTO inf_subtipos VALUES("3","1","Almuerzos");
INSERT INTO inf_subtipos VALUES("4","1","Antojitos");
INSERT INTO inf_subtipos VALUES("5","2","Bebidas");
INSERT INTO inf_subtipos VALUES("6","2","Galletas y dulces");
INSERT INTO inf_subtipos VALUES("7","2","Varios");
INSERT INTO inf_subtipos VALUES("8","3","Bisuteria");
INSERT INTO inf_subtipos VALUES("9","3","Imagenes");
INSERT INTO inf_subtipos VALUES("10","3","Otros");



DROP TABLE inf_tipos;

CREATE TABLE `inf_tipos` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO inf_tipos VALUES("1","Restaurante");
INSERT INTO inf_tipos VALUES("2","Tienda");
INSERT INTO inf_tipos VALUES("3","Recuerdos");



DROP TABLE tmp_mesas;

CREATE TABLE `tmp_mesas` (
  `mesa` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tmp_mesas VALUES("8","camisa roja");



DROP TABLE tmp_ventas;

CREATE TABLE `tmp_ventas` (
  `mesa` int(11) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `producto` int(11) NOT NULL DEFAULT '0',
  `hora` varchar(10) NOT NULL DEFAULT '',
  `impresos` int(11) NOT NULL DEFAULT '0',
  `cliente` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tmp_ventas VALUES("2","3","60","9:22","0","");
INSERT INTO tmp_ventas VALUES("2","1","61","9:21","0","");
INSERT INTO tmp_ventas VALUES("2","1","75","9:20","0","");



DROP TABLE usuarios;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) NOT NULL DEFAULT '',
  `clave` varchar(40) NOT NULL DEFAULT '',
  `nombre` varchar(40) NOT NULL DEFAULT '',
  `mod_admin` smallint(6) NOT NULL,
  `mod_ventas` smallint(6) NOT NULL,
  `mod_inventario` smallint(6) NOT NULL,
  `mod_gastos` smallint(6) NOT NULL,
  `mod_reportes` smallint(6) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("1","admin","202cb962ac59075b964b07152d234b70","Administrador","1","1","1","1","1");




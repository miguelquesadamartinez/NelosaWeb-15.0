-- phpMyAdmin SQL Dump
-- version 2.6.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: nelosa.net
-- Tiempo de generación: 17-08-2005 a las 14:08:12
-- Versión del servidor: 4.0.22
-- Versión de PHP: 4.3.10
-- 
-- Base de datos: `nelosa_net_printers`
-- 
CREATE DATABASE `nelosa_net_printers`;
USE nelosa_net_printers;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `Error_Codes`
-- 

CREATE TABLE `Error_Codes` (
  `printer` varchar(50) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `Error_Codes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `Ins_Brand`
-- 

CREATE TABLE `Ins_Brand` (
  `Brother` int(11) NOT NULL default '0',
  `Canon` int(11) NOT NULL default '0',
  `Compaq` int(11) NOT NULL default '0',
  `Epson` int(11) NOT NULL default '0',
  `HP` int(11) NOT NULL default '0',
  `Lexmark` int(11) NOT NULL default '0',
  `Olivetti` int(11) NOT NULL default '0',
  `Xerox` int(11) NOT NULL default '0'
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `Ins_Brand`
-- 

INSERT INTO `Ins_Brand` VALUES (21, 354, 1, 1167, 915, 873, 11, 29);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `apple_laser`
-- 

CREATE TABLE `apple_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `apple_laser`
-- 

INSERT INTO `apple_laser` VALUES ('Laserwriter IIG', 'M6002', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter IINT', 'M6002', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter IISC', 'M6002', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter M600', 'M6002', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/640 PS', 'M4683G', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/600 AMARILLO', 'M3758G.A', 'NO', '.');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/600 CYAN', 'M3757G.A', 'NO', '.');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/600 MAGENTA', 'M3760G.A', 'NO', '.');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/600 NEGRO', 'M3756G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/660 AMARILLO', 'M3758G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/660 CYAN', 'M3757G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/660 MAGENTA', 'M3760G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 12/660 NEGRO', 'M3756G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter 8500', 'M5893G', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter LS', 'M0089LL', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter NT', 'M0089LL', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter NTR', 'M0089LL', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter SC', 'M0089LL', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Personal 300-20', 'M2045G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Personal 4-600 PS', 'M2045G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 600', 'M2473G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 630', 'M2473G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 16', 'M2473G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 660 PS', 'M2473G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 810', 'M3602G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Pro 800', 'M3602G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Select 300', 'M1960G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Select 310', 'M1960G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Select 360', 'M1960G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Select 610', 'M1960G.A', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter Select 350', 'EPB', '', '');
INSERT INTO `apple_laser` VALUES ('Laserwriter IIF', 'M6002', '.', '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `brother`
-- 

CREATE TABLE `brother` (
  `Printer` text NOT NULL,
  `Ins` varchar(25) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `brother`
-- 

INSERT INTO `brother` VALUES ('PDP-100J', '01', '');
INSERT INTO `brother` VALUES ('PDP-300CJ', '01', '');
INSERT INTO `brother` VALUES ('PDP-350CJ', '01', '');
INSERT INTO `brother` VALUES ('LW-700i', '01', '');
INSERT INTO `brother` VALUES ('LW-710i', '01', '');
INSERT INTO `brother` VALUES ('LW-730i', '01', '');
INSERT INTO `brother` VALUES ('LW-750ic', '01', '');
INSERT INTO `brother` VALUES ('GW-70i', '06', '');
INSERT INTO `brother` VALUES ('GW-80i', '06', '');
INSERT INTO `brother` VALUES ('Privileg 2000i', '06', '');
INSERT INTO `brother` VALUES ('Privileg 2001i', '06', '');
INSERT INTO `brother` VALUES ('DP-300CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-350CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-525CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-530CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-540CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-550CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-5040CJ', '01', '');
INSERT INTO `brother` VALUES ('DP-530CJ Mail', '01', '');
INSERT INTO `brother` VALUES ('DP-540CJ Mail', '01', '');
INSERT INTO `brother` VALUES ('DP-550CJ Mail', '01', '');
INSERT INTO `brother` VALUES ('HC-2500', '03', '');
INSERT INTO `brother` VALUES ('HS-5000', '03', '');
INSERT INTO `brother` VALUES ('HS-5300', '03', '');
INSERT INTO `brother` VALUES ('MFC-580', '04', '');
INSERT INTO `brother` VALUES ('MFC-590', '04', '');
INSERT INTO `brother` VALUES ('DJ-550CJ', '01', '');
INSERT INTO `brother` VALUES ('MFC-7050', '01', '');
INSERT INTO `brother` VALUES ('MP21CDX', '03', '');
INSERT INTO `brother` VALUES ('WhisperWriter 7000J', '06', '');
INSERT INTO `brother` VALUES ('WhisperWriter 7500J', '06', '');
INSERT INTO `brother` VALUES ('WhisperWriter 7800J', '06', '');
INSERT INTO `brother` VALUES ('HR-100', '06', '');
INSERT INTO `brother` VALUES ('101', '05', '');
INSERT INTO `brother` VALUES ('301', '05', '');
INSERT INTO `brother` VALUES ('MFC-830', '02', '');
INSERT INTO `brother` VALUES ('HJ-100 i', '06', '');
INSERT INTO `brother` VALUES ('HJ-400', '06', '');
INSERT INTO `brother` VALUES ('IntelliFax 1800c', '02', '');
INSERT INTO `brother` VALUES ('HJ-100', '06', '');
INSERT INTO `brother` VALUES ('LW-800ic', '01', '');
INSERT INTO `brother` VALUES ('LW-810ic', '01', '');
INSERT INTO `brother` VALUES ('LW-830ic', '01', '');
INSERT INTO `brother` VALUES ('LW-840ic', '01', '');
INSERT INTO `brother` VALUES ('MFC-3100c', '02', '');
INSERT INTO `brother` VALUES ('MFC-5100c', '02', '');
INSERT INTO `brother` VALUES ('MFC-7000c', '02', '');
INSERT INTO `brother` VALUES ('MC-3000', '03', '');
INSERT INTO `brother` VALUES ('MFC-7100', '02', '');
INSERT INTO `brother` VALUES ('MFC-7150', '02', '');
INSERT INTO `brother` VALUES ('MFC-7200c', '03', '');
INSERT INTO `brother` VALUES ('MFC-7300c', '02', '');
INSERT INTO `brother` VALUES ('MFC-7400c', '02', '');
INSERT INTO `brother` VALUES ('MFC-9200c', '02', '');
INSERT INTO `brother` VALUES ('MFC PRO 700c', '03', '');
INSERT INTO `brother` VALUES ('WP-6400 J', '01', '');
INSERT INTO `brother` VALUES ('WP-6500 J', '01', '');
INSERT INTO `brother` VALUES ('WP-6700 J', '01', '');
INSERT INTO `brother` VALUES ('WP-7000', '06', '');
INSERT INTO `brother` VALUES ('WP-7000 J', '06', '');
INSERT INTO `brother` VALUES ('WP-7400 J', '01', '');
INSERT INTO `brother` VALUES ('WP-7550 J', '01', '');
INSERT INTO `brother` VALUES ('WP-7500 J', '06', '');
INSERT INTO `brother` VALUES ('WP-7700 CJ', '01', '');
INSERT INTO `brother` VALUES ('WP-7800 J', '06', '');
INSERT INTO `brother` VALUES ('WP II', '06', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `brother_laser`
-- 

CREATE TABLE `brother_laser` (
  `Printer` text NOT NULL,
  `Ins` varchar(25) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `brother_laser`
-- 

INSERT INTO `brother_laser` VALUES ('DCP 8020', 'TN7600', '.', '.');
INSERT INTO `brother_laser` VALUES ('DCP 8025D', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('DCP 8025DN ', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('FAX 8070P ', 'TN8000', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 2850', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('FAX 5000P ', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1030', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1230', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1240', 'TN6300', '02', '.');
INSERT INTO `brother_laser` VALUES ('HL 1250', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1270N', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1430', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1440', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 1450', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1470N', ' TN6300', '', '');
INSERT INTO `brother_laser` VALUES ('HL P2500', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 1260 series ', 'TN9000', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1660series', 'TN9000', '', '');
INSERT INTO `brother_laser` VALUES ('HL 2060', 'TN9000', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 960 ', 'TN9000', '', '');
INSERT INTO `brother_laser` VALUES ('HL 960 ', 'TN9000', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1650', 'TN500', '01', '.');
INSERT INTO `brother_laser` VALUES ('HL A3361670N', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1850', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1870N', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5040', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5050', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5070 ', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 2460', 'TN9500', '', '');
INSERT INTO `brother_laser` VALUES ('HL 2460N ', 'TN9500', '', '');
INSERT INTO `brother_laser` VALUES ('HL 4', 'R64-1002 EPL', '', '');
INSERT INTO `brother_laser` VALUES ('HL PS', 'R64-1002 EPL', '', '');
INSERT INTO `brother_laser` VALUES ('HL V/', 'R64-1002 EPL', '', '');
INSERT INTO `brother_laser` VALUES ('HL VE', 'R64-1002 EPL', '', '');
INSERT INTO `brother_laser` VALUES ('HL 6V', 'R64-1002 EPL', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5030', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5040', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5050', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 5070', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('HL 630', 'TN100', 'NO', '.');
INSERT INTO `brother_laser` VALUES ('HL 631', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 641', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 645', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 650', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 655M', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 660', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('WL 660 ', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('HL 700', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 720', 'TN200', 'ST', '.');
INSERT INTO `brother_laser` VALUES ('HL 730DX', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('HL 730PLUS', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('HL 760', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('HL 760 PLUS ', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('HL 8 series', 'R64-0002.EPS', '', '');
INSERT INTO `brother_laser` VALUES ('HL 820', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1040', 'TN300', 'ST', '.');
INSERT INTO `brother_laser` VALUES ('HL 1050', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1060', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1070', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('HL P2000', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2300ML', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2400', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2460', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2500', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 3500', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 5000 ', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2550', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2600', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2750', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 3550', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 3650', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 3750', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 4100', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 4750', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 4750E', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 5750', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 5750E ', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 3900ML', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4000', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4400', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4500', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 5500', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 6000 ', 'TN100', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4300', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4350', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4450', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4300', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4350', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4450', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4550', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4600', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4650', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 6550', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 6650', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 7550', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 7650', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 7750', 'TN200', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9050', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9060', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9500', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9550 ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 4800', 'TN8000', '02', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8070P', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9030', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9070', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9160', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9180', 'TN8000', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8300', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 850', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8300', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8500', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8600', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8700', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9600', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9650', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9660', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9700', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9750', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9760', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9800', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9850', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9860', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9870', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 9880 ', ' TN6300.TN6600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8420', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8820D', 'TN7600', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 8820DN ', 'TN7600', '.', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 2500 ', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 2500 ', 'TN300', '', '');
INSERT INTO `brother_laser` VALUES ('HL 1450 LT', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 1440 LT', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL LT', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('2500', 'TN6300', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 730', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8000P ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8050P ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8060P ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8200P ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8250P ', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 8650P ', 'TN8000', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 4550J', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 4650J', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 2650J', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('FAX 2660J', 'TN200', '.', '.');
INSERT INTO `brother_laser` VALUES ('HL 7050', 'TN700', '01', '.');
INSERT INTO `brother_laser` VALUES ('HL 2800', 'TN250', '02', '.');
INSERT INTO `brother_laser` VALUES ('HL 3800', 'TN250', '02', '.');
INSERT INTO `brother_laser` VALUES ('HL 2900', 'TN250', '02', '.');
INSERT INTO `brother_laser` VALUES ('HL 3260', 'TN1200', '00', '.');
INSERT INTO `brother_laser` VALUES ('HL 6050', 'TN600', '01', '.');
INSERT INTO `brother_laser` VALUES ('HL 5150', 'TN510', '03', '.');
INSERT INTO `brother_laser` VALUES ('HL 3260 N', 'TN1200', '00', '.');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2800', 'TN200', '02', '.');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 2900', 'TN250', '02', '.');
INSERT INTO `brother_laser` VALUES ('INTELLIFAX 3800', 'TN250', '02', '.');
INSERT INTO `brother_laser` VALUES ('DCP 1000', 'TN7600', '02', '.');
INSERT INTO `brother_laser` VALUES ('MFC-MFP 6800', 'TN8000', '02', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `canon`
-- 

CREATE TABLE `canon` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `canon`
-- 

INSERT INTO `canon` VALUES ('BJ-10', '01', '');
INSERT INTO `canon` VALUES ('BJ-20', '01', '');
INSERT INTO `canon` VALUES ('BJ-200', '01', '');
INSERT INTO `canon` VALUES ('BJ-230', '01', '');
INSERT INTO `canon` VALUES ('BJ-5', '01', '');
INSERT INTO `canon` VALUES ('BJC-2000', '05', '');
INSERT INTO `canon` VALUES ('BJC-2010', '05', '');
INSERT INTO `canon` VALUES ('BJC-210', '01', '');
INSERT INTO `canon` VALUES ('BJC-2100', '05', '');
INSERT INTO `canon` VALUES ('BJC-2110', '05', '');
INSERT INTO `canon` VALUES ('BJC-230', '01', '');
INSERT INTO `canon` VALUES ('BJC-260', '01', '');
INSERT INTO `canon` VALUES ('BJC-30', '10', '');
INSERT INTO `canon` VALUES ('BJC-3000', '09', '');
INSERT INTO `canon` VALUES ('BJC-4000', '05', '');
INSERT INTO `canon` VALUES ('BJC-4100', '05', '');
INSERT INTO `canon` VALUES ('BJC-4200', '05', '');
INSERT INTO `canon` VALUES ('BJC-4300', '05', '');
INSERT INTO `canon` VALUES ('BJC-4304', '05', '');
INSERT INTO `canon` VALUES ('BJC-4400', '05', '');
INSERT INTO `canon` VALUES ('BJC-4550', '05', '');
INSERT INTO `canon` VALUES ('BJC-50', '10', '');
INSERT INTO `canon` VALUES ('BJC-5000', '05', '');
INSERT INTO `canon` VALUES ('BJC-55', '10', '');
INSERT INTO `canon` VALUES ('BJC-600', '09', '');
INSERT INTO `canon` VALUES ('BJC-6000', '09', '');
INSERT INTO `canon` VALUES ('BJC-6100', '09', '');
INSERT INTO `canon` VALUES ('BJC-630', '09', '');
INSERT INTO `canon` VALUES ('BJC-70', '10', '');
INSERT INTO `canon` VALUES ('BJC-7000', '07', '');
INSERT INTO `canon` VALUES ('BJC-80', '10', '');
INSERT INTO `canon` VALUES ('BJC-8000', '09', '');
INSERT INTO `canon` VALUES ('BJC-8200', '09', '');
INSERT INTO `canon` VALUES ('BJC-85', '10', '');
INSERT INTO `canon` VALUES ('Navigator HD-40', '01', '');
INSERT INTO `canon` VALUES ('S100', '05', '');
INSERT INTO `canon` VALUES ('S200', '05', '');
INSERT INTO `canon` VALUES ('S300', '05', '');
INSERT INTO `canon` VALUES ('S400', '09', '');
INSERT INTO `canon` VALUES ('S4500', '09', '');
INSERT INTO `canon` VALUES ('S630', '09', '');
INSERT INTO `canon` VALUES ('S6300', '09', '');
INSERT INTO `canon` VALUES ('S820D', '09', '');
INSERT INTO `canon` VALUES ('S9000', '09', '');
INSERT INTO `canon` VALUES ('SW 30', '01', '');
INSERT INTO `canon` VALUES ('SW 60', '01', '');
INSERT INTO `canon` VALUES ('SW 70', '01', '');
INSERT INTO `canon` VALUES ('SW 80', '01', '');
INSERT INTO `canon` VALUES ('SW 85', '01', '');
INSERT INTO `canon` VALUES ('BJC-150', '01', '');
INSERT INTO `canon` VALUES ('BJC-1000', '01', '');
INSERT INTO `canon` VALUES ('BJ-2', '01', '');
INSERT INTO `canon` VALUES ('BJ-100', '01', '');
INSERT INTO `canon` VALUES ('BJ-234', '01', '');
INSERT INTO `canon` VALUES ('BJC-240', '01', '');
INSERT INTO `canon` VALUES ('BJC-250', '01', '');
INSERT INTO `canon` VALUES ('BJC-255', '01', '');
INSERT INTO `canon` VALUES ('BJC-4302', '05', '');
INSERT INTO `canon` VALUES ('BJC-5500', '05', '');
INSERT INTO `canon` VALUES ('BJC-610', '09', '');
INSERT INTO `canon` VALUES ('BJC-620', '09', '');
INSERT INTO `canon` VALUES ('BX-200', '01', '');
INSERT INTO `canon` VALUES ('SW 20', '01', '');
INSERT INTO `canon` VALUES ('SW 80 Deluxe', '01', '');
INSERT INTO `canon` VALUES ('SW 95', '01', '');
INSERT INTO `canon` VALUES ('SW 95 WP', '01', '');
INSERT INTO `canon` VALUES ('MultiPass 1000', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B140', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B150', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B60', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B70', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B75', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B370', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B870', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B540', '01', '');
INSERT INTO `canon` VALUES ('FaxPhone B550', '01', '');
INSERT INTO `canon` VALUES ('I320', '05', '');
INSERT INTO `canon` VALUES ('BJ-210', '01', '');
INSERT INTO `canon` VALUES ('BJ- F8500', '09', '');
INSERT INTO `canon` VALUES ('BJ Note', '10', '');
INSERT INTO `canon` VALUES ('BJC-1010', '01', '');
INSERT INTO `canon` VALUES ('BJC-210 j', '01', '');
INSERT INTO `canon` VALUES ('BJC-2115', '05', '');
INSERT INTO `canon` VALUES ('BJC-2120', '05', '');
INSERT INTO `canon` VALUES ('BJC-2125', '05', '');
INSERT INTO `canon` VALUES ('BJC-240 j', '01', '');
INSERT INTO `canon` VALUES ('BJC-240 L', '01', '');
INSERT INTO `canon` VALUES ('BJC-240 Photo', '01', '');
INSERT INTO `canon` VALUES ('BJC-250 j', '01', '');
INSERT INTO `canon` VALUES ('BJC-30 v', '10', '');
INSERT INTO `canon` VALUES ('BJC-35', '10', '');
INSERT INTO `canon` VALUES ('BJC-35 v', '10', '');
INSERT INTO `canon` VALUES ('BJC-400 j', '05', '');
INSERT INTO `canon` VALUES ('BJC-410 J', '05', '');
INSERT INTO `canon` VALUES ('BJC-411 f', '05', '');
INSERT INTO `canon` VALUES ('BJC-420 j', '05', '');
INSERT INTO `canon` VALUES ('BJC-430 j', '05', '');
INSERT INTO `canon` VALUES ('BJC-4304 Photo', '05', '');
INSERT INTO `canon` VALUES ('BJC-455 j', '05', '');
INSERT INTO `canon` VALUES ('BJ-10 e', '01', '');
INSERT INTO `canon` VALUES ('BJ-10 ex', '01', '');
INSERT INTO `canon` VALUES ('BJ-10 sx', '01', '');
INSERT INTO `canon` VALUES ('BJ-10 v', '01', '');
INSERT INTO `canon` VALUES ('BJ-10 x', '01', '');
INSERT INTO `canon` VALUES ('BJ-15 v', '01', '');
INSERT INTO `canon` VALUES ('BJ-200 e', '01', '');
INSERT INTO `canon` VALUES ('BJ-200 ex', '01', '');
INSERT INTO `canon` VALUES ('BJ-20 ex', '01', '');
INSERT INTO `canon` VALUES ('BJ-220 jc', '01', '');
INSERT INTO `canon` VALUES ('BJ-220 jc II', '01', '');
INSERT INTO `canon` VALUES ('BJ-220 js', '01', '');
INSERT INTO `canon` VALUES ('BJ-220 js II', '01', '');
INSERT INTO `canon` VALUES ('BJC-4650', '05', '');
INSERT INTO `canon` VALUES ('BJC-5100', '05', '');
INSERT INTO `canon` VALUES ('BJC-600 e', '09', '');
INSERT INTO `canon` VALUES ('BJC-600 ex', '09', '');
INSERT INTO `canon` VALUES ('BJC-6500', '09', '');
INSERT INTO `canon` VALUES ('BJC-7002', '07', '');
INSERT INTO `canon` VALUES ('BJC-7004 Photo', '07', '');
INSERT INTO `canon` VALUES ('BJC-7005', '07', '');
INSERT INTO `canon` VALUES ('BJC-7100', '07', '');
INSERT INTO `canon` VALUES ('BJC-8200 Photo', '09', '');
INSERT INTO `canon` VALUES ('BJC-85 w', '10', '');
INSERT INTO `canon` VALUES ('BJC-8500', '09', '');
INSERT INTO `canon` VALUES ('BN-200 c', '10', '');
INSERT INTO `canon` VALUES ('BN-700 c', '10', '');
INSERT INTO `canon` VALUES ('BN-750 c', '10', '');
INSERT INTO `canon` VALUES ('CFX B 380 if', '05', '');
INSERT INTO `canon` VALUES ('Fax B-210 c', '05', '');
INSERT INTO `canon` VALUES ('Fax B-230 c', '05', '');
INSERT INTO `canon` VALUES ('Fax B-220', '01', '');
INSERT INTO `canon` VALUES ('Fax B-100', '01', '');
INSERT INTO `canon` VALUES ('Fax B-110', '01', '');
INSERT INTO `canon` VALUES ('Fax B-140', '01', '');
INSERT INTO `canon` VALUES ('Fax B-150', '01', '');
INSERT INTO `canon` VALUES ('Fax B-155', '01', '');
INSERT INTO `canon` VALUES ('Fax B-190', '01', '');
INSERT INTO `canon` VALUES ('Fax B-200', '01', '');
INSERT INTO `canon` VALUES ('Fax B-200 e', '01', '');
INSERT INTO `canon` VALUES ('Fax B-200 f', '01', '');
INSERT INTO `canon` VALUES ('Fax B-200 s', '01', '');
INSERT INTO `canon` VALUES ('Fax B-230', '01', '');
INSERT INTO `canon` VALUES ('Fax B-320', '01', '');
INSERT INTO `canon` VALUES ('Fax B-340', '01', '');
INSERT INTO `canon` VALUES ('Fax B-360 if MFP', '01', '');
INSERT INTO `canon` VALUES ('Fax B-405', '01', '');
INSERT INTO `canon` VALUES ('Fax B-550', '01', '');
INSERT INTO `canon` VALUES ('Fax B-60', '01', '');
INSERT INTO `canon` VALUES ('Fax B-600', '01', '');
INSERT INTO `canon` VALUES ('Fax B-640', '01', '');
INSERT INTO `canon` VALUES ('Fax B-70', '01', '');
INSERT INTO `canon` VALUES ('Fax B-840', '01', '');
INSERT INTO `canon` VALUES ('Innova BJT 800 p', '10', '');
INSERT INTO `canon` VALUES ('Innova Note 590 j', '10', '');
INSERT INTO `canon` VALUES ('Innova Note 800 p', '10', '');
INSERT INTO `canon` VALUES ('Jet 350 c', '10', '');
INSERT INTO `canon` VALUES ('LR-1 PrintStation', '10', '');
INSERT INTO `canon` VALUES ('MonoPrinter', '01', '');
INSERT INTO `canon` VALUES ('MultiPass 10', '05', '');
INSERT INTO `canon` VALUES ('MultiPass 10 MFP', '01', '');
INSERT INTO `canon` VALUES ('MultiPass 1000 MFP', '01', '');
INSERT INTO `canon` VALUES ('MultiPass 800', '01', '');
INSERT INTO `canon` VALUES ('MultiPass 800 MFP', '01', '');
INSERT INTO `canon` VALUES ('MultiPass C-20', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-30', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-50', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-70', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-80', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-2500', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-3000', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-3500', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-5000', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-5500', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-530', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-545', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-555', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-560', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-635', '05', '');
INSERT INTO `canon` VALUES ('MultiPass C-755', '09', '');
INSERT INTO `canon` VALUES ('MultiPass F-30', '09', '');
INSERT INTO `canon` VALUES ('MultiPass F-50', '09', '');
INSERT INTO `canon` VALUES ('MultiPass F-60', '09', '');
INSERT INTO `canon` VALUES ('MultiPass F-80', '09', '');
INSERT INTO `canon` VALUES ('NoteJet III', '10', '');
INSERT INTO `canon` VALUES ('NoteJet III CX', '10', '');
INSERT INTO `canon` VALUES ('S450', '09', '');
INSERT INTO `canon` VALUES ('S500', '09', '');
INSERT INTO `canon` VALUES ('S520', '09', '');
INSERT INTO `canon` VALUES ('S530 D', '09', '');
INSERT INTO `canon` VALUES ('S600', '09', '');
INSERT INTO `canon` VALUES ('S630 N', '09', '');
INSERT INTO `canon` VALUES ('S750', '09', '');
INSERT INTO `canon` VALUES ('S800', '09', '');
INSERT INTO `canon` VALUES ('S900', '09', '');
INSERT INTO `canon` VALUES ('SW Pro 2000', '01', '');
INSERT INTO `canon` VALUES ('SW Jet 300', '10', '');
INSERT INTO `canon` VALUES ('SW Jet 350 c', '10', '');
INSERT INTO `canon` VALUES ('SW Jet 4000', '10', '');
INSERT INTO `canon` VALUES ('VP-500', '01', '');
INSERT INTO `canon` VALUES ('BJ-30', '10', 'NO');
INSERT INTO `canon` VALUES ('BJ-70', '10', '');
INSERT INTO `canon` VALUES ('BJ-85', '10', '');
INSERT INTO `canon` VALUES ('BJ-80', '10', '');
INSERT INTO `canon` VALUES ('CLC700', '11', 'NO');
INSERT INTO `canon` VALUES ('CLC800', '11', 'NO');
INSERT INTO `canon` VALUES ('BJ-W3000', '11', 'NO');
INSERT INTO `canon` VALUES ('BJW 3000', '11', '');
INSERT INTO `canon` VALUES ('P170 ', '05', 'NO');
INSERT INTO `canon` VALUES ('P300', '05', 'NO');
INSERT INTO `canon` VALUES ('N1000', '11', 'NO');
INSERT INTO `canon` VALUES ('N2000', '11', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `canon_laser`
-- 

CREATE TABLE `canon_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `canon_laser`
-- 

INSERT INTO `canon_laser` VALUES ('Fax L 500', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('Fax L 550', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('Fax L 600', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('Fax CFX L 3500', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Fax CFX L 4000', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Fax CFX L 4500', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Fax CFX L 4500 IF', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Fax L 300', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Fax L 6000', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('L 300', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Laserclass 2060', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Imageclass 1100', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('L 6000', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('Multipass L 6000', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('L 90', 'FX-3', '', '');
INSERT INTO `canon_laser` VALUES ('LC 5000', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('LC 5500', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('LC 7000', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('LC 7100', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('LC 7500', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('LC 7700', 'FX-2', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 700', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 730', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 760', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 765', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 770', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 775', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 777', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 780', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 785', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 790', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 3300', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 3300 I', 'FX-1', '', '');
INSERT INTO `canon_laser` VALUES ('LASERCLASS 9000', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('LASERCLASS 9500', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 8500', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 9000', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 9000MS', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 9000 S', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 9500', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX LC 9500 S', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX F 100', 'FX-4', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 920', 'EP-S', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 3100', 'EP-S', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8II', 'EP-S', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8III', 'EP-S', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 III T', 'EP-S', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4+', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP III+', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4III MARK+', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4 LITE', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4 SX', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('FILEPRINT 100', 'EP-L', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 4 U', 'EP-P', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 430', 'EP-P', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 430W', 'EP-P', '', '');
INSERT INTO `canon_laser` VALUES ('FILEPRINT 300', 'EP-E', '', '');
INSERT INTO `canon_laser` VALUES ('FAX L 4600', '92295A', '.', '.');
INSERT INTO `canon_laser` VALUES ('FAX L 4600 E', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 II R', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 II T', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 III+', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 III R', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 MARK III', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 MARK III+', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 MARK III R', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 MARK III T', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP SX', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 200 s II', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 200 V', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP RX', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP TX', '92295A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 8 IV', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP 1260', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP 860', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP 1260+', '92298X', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 1260C', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP EX', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP EX II', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('P 270', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('P 430', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP ZX', '92298X', '.', '.');
INSERT INTO `canon_laser` VALUES ('LBP 440', 'C3906A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 460', 'C3906A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 465', 'C3906A', '', '');
INSERT INTO `canon_laser` VALUES ('P 445', 'C3906A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP AX', 'C3906A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 2460', 'C3909A', '', '');
INSERT INTO `canon_laser` VALUES ('P 550', 'C3909A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP WX', 'C3909A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP X', 'C3909A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP VX', 'C3903A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 1760', 'C4127A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 1760 E', 'C4127A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP 3260', 'C4182X', '', '');
INSERT INTO `canon_laser` VALUES ('LBP PX', '92274A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP PX II', '92274A', '', '');
INSERT INTO `canon_laser` VALUES ('P 90', '92274A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP NX', '92291A', '', '');
INSERT INTO `canon_laser` VALUES ('LBP NX 600', '92291A', '', '');
INSERT INTO `canon_laser` VALUES ('P 170', '92291A', '', '');
INSERT INTO `canon_laser` VALUES ('PC 1', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 2', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 2L', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 2LX', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 3', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 3 II', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 5', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 5 II', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 5 L', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 5 LII', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 6', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 6 RE', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 7', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 8', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 11', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 12', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 300', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 65', 'A-30', '', '');
INSERT INTO `canon_laser` VALUES ('PC 310', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 320', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 325', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 330', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 330L', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 355', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 400', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 420', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 430', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 530', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 550', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 710', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 720', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 730', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 740', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 745', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 770', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 775', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 780', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 785', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 790', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 795', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 850', 'E-20', '10', '.');
INSERT INTO `canon_laser` VALUES ('PC 920', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 921', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 950', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('PC 980', 'E-20', '', '');
INSERT INTO `canon_laser` VALUES ('W7200', '.', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('LBP 2410', '', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('W7250', '.', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('W2200', '.', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('N1000', '.', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('N2000', '.', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('LBP CX', '92285A', '11', '.');
INSERT INTO `canon_laser` VALUES ('NP 1010', 'F43-2101-700', '12', '.');
INSERT INTO `canon_laser` VALUES ('NP 1020', 'F43-2101-700', '12', '.');
INSERT INTO `canon_laser` VALUES ('C 100', 'F43-2101-700', '12', '.');
INSERT INTO `canon_laser` VALUES ('NP 6412', 'F43-5411-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('C 120', 'F43-5411-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('NP 6016', 'F43-4921-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('C 160', 'F43-4924-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('NP 6521', 'F43-4921-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('C 200', 'F43-4921-700', 'CHIP', '.');
INSERT INTO `canon_laser` VALUES ('PC 2000', 'A-20', '11', '.');
INSERT INTO `canon_laser` VALUES ('PC MINI', 'A-30', '13', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `compaq`
-- 

CREATE TABLE `compaq` (
  `Indise` tinyint(3) NOT NULL auto_increment,
  `Printer` tinytext NOT NULL,
  `INS` char(2) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`Indise`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `compaq`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `dell`
-- 

CREATE TABLE `dell` (
  `Printer` text NOT NULL,
  `Ins` varchar(25) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `dell`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `dell_laser`
-- 

CREATE TABLE `dell_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `dell_laser`
-- 

INSERT INTO `dell_laser` VALUES ('M5200N', '', 'CHIP', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `epson`
-- 

CREATE TABLE `epson` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `epson`
-- 

INSERT INTO `epson` VALUES ('CX 3200', '01', '');
INSERT INTO `epson` VALUES ('CX 5200', '03', '');
INSERT INTO `epson` VALUES ('CX 6300', '03', '');
INSERT INTO `epson` VALUES ('Stylus 1000', '01', '');
INSERT INTO `epson` VALUES ('Stylus 1500', '01', '');
INSERT INTO `epson` VALUES ('Stylus 300', '01', '');
INSERT INTO `epson` VALUES ('Stylus 400', '01', '');
INSERT INTO `epson` VALUES ('Stylus 800', '01', '');
INSERT INTO `epson` VALUES ('Stylus 800 Plus', '01', '');
INSERT INTO `epson` VALUES ('Stylus 820', '01', '');
INSERT INTO `epson` VALUES ('Stylus C20SX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C20UX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C40SX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C40UX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C42SX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C42UX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C43SX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C43UX', '01', '');
INSERT INTO `epson` VALUES ('Stylus C45', '01', '');
INSERT INTO `epson` VALUES ('Stylus C50', '01', '');
INSERT INTO `epson` VALUES ('Stylus C60', '01', '');
INSERT INTO `epson` VALUES ('Stylus C62', '01', '');
INSERT INTO `epson` VALUES ('Stylus C63', '04', '');
INSERT INTO `epson` VALUES ('Stylus C65', '04', '');
INSERT INTO `epson` VALUES ('Stylus C70', '03', '');
INSERT INTO `epson` VALUES ('Stylus C80', '03', '');
INSERT INTO `epson` VALUES ('Stylus C82', '03', '');
INSERT INTO `epson` VALUES ('Stylus C85', '04', '');
INSERT INTO `epson` VALUES ('Stylus Color', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color 1160', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 1200', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 1500', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color 1520', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 200', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color 2000', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 2500', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 2500P', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 300 ', '02', '');
INSERT INTO `epson` VALUES ('Stylus Color 400', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 440', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 460', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 480C', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 500', '01', '');
INSERT INTO `epson` VALUES ('Scan 2000', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 600 / Q', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 640', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 660', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 670', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 680', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 685', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 740', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 740i', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 760', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 777', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 777i', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 800 / N', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 810', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 820', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color 880', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 860', '01', '');
INSERT INTO `epson` VALUES ('Stylus C44SX', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 900 / G / N', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 980', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 980 N', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color II', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color IIs', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color Pro', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color Pro XL', '06', '');
INSERT INTO `epson` VALUES ('Stylus Color Pro XL+', '06', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 1200', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 1270', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 1280', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 1290', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 2000 P', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 2100', '03', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 2200', '03', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 700', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 710', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 720', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 750', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 780', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 785 EPX', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 790', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 820', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 825', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 830', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 870', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 810', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO 890', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 895', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 925', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 950', '03', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO 960', '03', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO EX', '01', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO R200', '04', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO R300', '04', '');
INSERT INTO `epson` VALUES ('Stylus PHOTO R800', '03', '');
INSERT INTO `epson` VALUES ('Stylus Scan 2000', '01', '');
INSERT INTO `epson` VALUES ('Stylus Scan 2500', '01', '');
INSERT INTO `epson` VALUES ('Stylus Scan 2500 Pro', '01', '');
INSERT INTO `epson` VALUES ('Stylus Color 480', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 480CX', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 580', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 580C', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 580CX', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 850', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus C44UX', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus C44', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus C43', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO 875DC', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO 875', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO 935', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO 900', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO RX500', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO RX600', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO RX420', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus PHOTO RX425', '03', 'NO');
INSERT INTO `epson` VALUES ('CX 3500', '03', 'NO');
INSERT INTO `epson` VALUES ('CX 3600', '03', 'NO');
INSERT INTO `epson` VALUES ('CX 3650', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus C66', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus C64', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus C84', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus C86', '03', 'NO');
INSERT INTO `epson` VALUES ('CX 6400', '03', 'NO');
INSERT INTO `epson` VALUES ('CX 6600', '03', 'NO');
INSERT INTO `epson` VALUES ('Stylus Color 3000', '01', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 5000', '08', '');
INSERT INTO `epson` VALUES ('Stylus PRO 5500', '08', '');
INSERT INTO `epson` VALUES ('Stylus PRO 7000', '08', '');
INSERT INTO `epson` VALUES ('Stylus PRO 7500', '08', '');
INSERT INTO `epson` VALUES ('Stylus PRO 9500', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 10000', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 4000', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 7600', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 9600', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 10000CF', '08', 'NO');
INSERT INTO `epson` VALUES ('Stylus PRO 10600', '08', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `epson_laser`
-- 

CREATE TABLE `epson_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `epson_laser`
-- 

INSERT INTO `epson_laser` VALUES ('ACTIONLASER 1000', 'S051011', '', '');
INSERT INTO `epson_laser` VALUES ('ACTIONLASER 1500', 'S051011', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 5000', 'S051011', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 5200', 'S051011', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 5200+', 'S051011', '', '');
INSERT INTO `epson_laser` VALUES ('ACTIONLASER 1100', 'S051023', '', '');
INSERT INTO `epson_laser` VALUES ('ACTIONLASER 1400', 'S051023', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 700', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 7100', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 7100 MEGA2', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 7100 MEGA2+', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 7500', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 8000', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL 8100', 'S051009', '', '');
INSERT INTO `epson_laser` VALUES ('EPL N3000', 'S051111', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 400', 'S050002', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 4100', 'S050002', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 4300', 'S050002', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C1900', 'S050100', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C900', 'S050100', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C1000', 'S050100', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C2000', 'S050033', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C4000', 'S050091', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C4100', 'S050149', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C8500', 'S050038', '.', '.');
INSERT INTO `epson_laser` VALUES ('AcuLaser C8600', 'S050038', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 8200', 'S051009', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N4000', 'S051060', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N4000PS', 'S051060', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N2750', 'S051069', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N2700', 'S051069', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N2050', 'S051070', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N2000', 'S051035', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N1200', 'S051056', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 9000', 'S051016', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N7000', 'S051100', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N6200', 'S050166', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N6200L', 'S050167', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N6100', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N6100L', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5900', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5900L', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5800', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5800L', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5700', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5700L', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N5600', 'S051055', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5500', 'S050005', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5500W', 'S050005', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5700 L', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5800 L', 'S050010', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5900', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 5900 L', 'S050087', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL N1600', 'S051056', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 6100', 'S050095', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 6000', 'S050167', '.', '.');
INSERT INTO `epson_laser` VALUES ('EPL 6200', 'S050167', 'CHIP', '.');
INSERT INTO `epson_laser` VALUES ('EPL 4000', 'S051060', 'CHIP', '1070');
INSERT INTO `epson_laser` VALUES ('EPL 6200l', 'S050167', 'CHIP', '.');
INSERT INTO `epson_laser` VALUES ('EPL 9600', 'S051016', 'CHIP', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `hp`
-- 

CREATE TABLE `hp` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `hp`
-- 

INSERT INTO `hp` VALUES ('2276 A', '01', '');
INSERT INTO `hp` VALUES ('2277 A', '01', '');
INSERT INTO `hp` VALUES ('2279 A DeskWriter', '01', '');
INSERT INTO `hp` VALUES ('C2121 A', '01', '');
INSERT INTO `hp` VALUES ('Color Copier 100', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 110', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 120', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 140', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 145', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 150', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 155', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 160', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 170', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 180', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 190', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 210', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 210LX', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 260', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 270', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 280', '02', '');
INSERT INTO `hp` VALUES ('Color Copier 290', '02', '');
INSERT INTO `hp` VALUES ('Copy Jet', '02', '');
INSERT INTO `hp` VALUES ('Copy Jet M', '02', '');
INSERT INTO `hp` VALUES ('CP 1700', '05', '');
INSERT INTO `hp` VALUES ('Designjet', '01', '');
INSERT INTO `hp` VALUES ('Designjet 100', '05', '');
INSERT INTO `hp` VALUES ('Designjet 200´s', '01', '');
INSERT INTO `hp` VALUES ('Designjet 220', '01', '');
INSERT INTO `hp` VALUES ('Designjet 230', '02', '');
INSERT INTO `hp` VALUES ('Designjet 250C', '02', '');
INSERT INTO `hp` VALUES ('Designjet 330', '02', '');
INSERT INTO `hp` VALUES ('Designjet 350C', '02', '');
INSERT INTO `hp` VALUES ('Designjet 430', '02', '');
INSERT INTO `hp` VALUES ('Designjet 450C', '02', '');
INSERT INTO `hp` VALUES ('Designjet 455ca', '02', '');
INSERT INTO `hp` VALUES ('Designjet 488C', '02', '');
INSERT INTO `hp` VALUES ('Designjet 488ca', '02', '');
INSERT INTO `hp` VALUES ('Designjet 500´S', '05', '');
INSERT INTO `hp` VALUES ('Designjet 600', '01', '');
INSERT INTO `hp` VALUES ('Designjet 650´s', '02', '');
INSERT INTO `hp` VALUES ('Designjet 700', '02', '');
INSERT INTO `hp` VALUES ('Designjet 750C / Plus', '02', '');
INSERT INTO `hp` VALUES ('Designjet 755CM', '02', '');
INSERT INTO `hp` VALUES ('Designjet 800´S', '05', '');
INSERT INTO `hp` VALUES ('Designjet ColorPro GA/CAD', '05', '');
INSERT INTO `hp` VALUES ('Deskjet', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 1000', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1000Cse', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1000Cxi', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1100C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1100cse', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1100cxi', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1120C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1120Cse', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1120Cxi', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1200´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1220´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 1600', '02', '');
INSERT INTO `hp` VALUES ('DeskJet 200', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 2000`s', '05', '');
INSERT INTO `hp` VALUES ('Deskjet 2500´s', '05', '');
INSERT INTO `hp` VALUES ('Deskjet 310', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 311', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 320', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 3320´s', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 3325´s', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 340´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 3420´s', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 3425', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 350C /CBi', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 3810', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 3820´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 400´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 420', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 420C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 450cbi', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 450ci', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 5000´s', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 500´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 510', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 520', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 540', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 550C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 5550´s', '04', '');
INSERT INTO `hp` VALUES ('Deskjet 560´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 600', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 600C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 610´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 6122', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 6127', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 612C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 612´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 630C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 632C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 640C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 642C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 648C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 656C / CVR', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 660C / CSE', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 670C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 670TV', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 672C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 680C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 682C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 690c', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 692C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 693C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 694C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 695´s', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 697C', '01', '');
INSERT INTO `hp` VALUES ('Deskjet 710´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 712´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 720´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 722´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 810C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 812C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 815', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 816c', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 820´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 825´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 830C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 832C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 840 / C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 841c', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 842C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 843C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 845´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 850c', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 855´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 870´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 880C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 882C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 890´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 895´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 920´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 930C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 932C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 934C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 935C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 940´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 948', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 950C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 952C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 955C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 959C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 960´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 970´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 980cxi', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 990´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet 995C', '02', '');
INSERT INTO `hp` VALUES ('Deskjet P1100´s', '02', '');
INSERT INTO `hp` VALUES ('Deskjet Plus', '01', '');
INSERT INTO `hp` VALUES ('Deskjet Portable', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 310', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 320', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 340', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 400', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 500', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 500C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 510', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 520', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 540 / C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 550C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 560C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 600', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 660´s', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 670C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 672', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 680C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 682´s', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 690C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 693´s', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 694C', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter 695', '01', '');
INSERT INTO `hp` VALUES ('Deskwriter C', '01', '');
INSERT INTO `hp` VALUES ('Digital Copier 310', '02', '');
INSERT INTO `hp` VALUES ('Fax HP 1020 / XI', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 1220 / XI', '02', '');
INSERT INTO `hp` VALUES ('Fax HP 200', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 300', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 310', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 700', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 750', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 800', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 900', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 910', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 920', '01', '');
INSERT INTO `hp` VALUES ('Fax HP 950', '01', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2200´s', '05', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2230', '05', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2250´s', '05', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2280', '05', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2500´s', '05', '');
INSERT INTO `hp` VALUES ('HP Business InkJet 2600 / dn', '05', '');
INSERT INTO `hp` VALUES ('Office Jet 300', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 310', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 320', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 330', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 350', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 500', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 520', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 570', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 580', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 590', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 600', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 610', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 630', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 635', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 700', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 710', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 720', '01', '');
INSERT INTO `hp` VALUES ('Office Jet 725', '01', '');
INSERT INTO `hp` VALUES ('Office Jet LX', '01', '');
INSERT INTO `hp` VALUES ('Office Jet MFP', '01', '');
INSERT INTO `hp` VALUES ('Office Jet Presonal', '01', '');
INSERT INTO `hp` VALUES ('Office Jet Pro 1150C', '02', '');
INSERT INTO `hp` VALUES ('Office Jet Pro 1150cse', '02', '');
INSERT INTO `hp` VALUES ('Office Jet Pro 1170´S', '02', '');
INSERT INTO `hp` VALUES ('Office Jet Pro 1175´S', '02', '');
INSERT INTO `hp` VALUES ('Oficce Jet', '01', '');
INSERT INTO `hp` VALUES ('Oficce Jet Serie G', '02', '');
INSERT INTO `hp` VALUES ('Oficce Jet Serie K', '02', '');
INSERT INTO `hp` VALUES ('Oficce Jet Serie R', '02', '');
INSERT INTO `hp` VALUES ('Oficce Jet Serie T', '02', '');
INSERT INTO `hp` VALUES ('Oficce Jet Serie V', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 100', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 1000', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1000xi', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1115', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1115cvr', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1200', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1215', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1215vm', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1218', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1218xi', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 130', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 1300', '02', '');
INSERT INTO `hp` VALUES ('Photosmart 1315', '02', '');
INSERT INTO `hp` VALUES ('PhotoSmart 230', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 7000', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 7150', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 7350', '04', '');
INSERT INTO `hp` VALUES ('Photosmart 7550', '04', '');
INSERT INTO `hp` VALUES ('Photosmart p1000', '02', '');
INSERT INTO `hp` VALUES ('Photosmart p1100', '02', '');
INSERT INTO `hp` VALUES ('Photosmart p1100xi', '02', '');
INSERT INTO `hp` VALUES ('Photosmart p1315', '02', '');
INSERT INTO `hp` VALUES ('PhotoSmart Photo Printer', '02', '');
INSERT INTO `hp` VALUES ('PSC 2100', '04', '');
INSERT INTO `hp` VALUES ('PSC 2110 / XI / V', '04', '');
INSERT INTO `hp` VALUES ('PSC 2210', '04', '');
INSERT INTO `hp` VALUES ('PSC 370', '01', '');
INSERT INTO `hp` VALUES ('PSC 380', '01', '');
INSERT INTO `hp` VALUES ('PSC 500´s', '02', '');
INSERT INTO `hp` VALUES ('PSC 700', '02', '');
INSERT INTO `hp` VALUES ('PSC 750´s', '02', '');
INSERT INTO `hp` VALUES ('PSC 900', '02', '');
INSERT INTO `hp` VALUES ('PSC 940', '02', '');
INSERT INTO `hp` VALUES ('PSC 950´s', '02', '');
INSERT INTO `hp` VALUES ('Business InkJet 1200', '05', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `hp_laser`
-- 

CREATE TABLE `hp_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `hp_laser`
-- 

INSERT INTO `hp_laser` VALUES ('LASERJET II', '92295A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET III P', '92275A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET III D MAC', '92295A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET III MAC', '92295A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET III SI', '92291A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET III SI MAC', '92291A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET III SI PS', '92291A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 PS', '92291A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 SI MX', '92291A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4+', '92298A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 6 L', 'C3906A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4M+', '92298A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 5', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 N', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 L', '92274A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 SE', '92298A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 ML', '92274A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 MP', '92274A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 P', '92274A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 V', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5L EXTRA', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 3100', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 3100 SE', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 3100 XI', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 3150', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 3150 XI', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 31150 6L', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 6L SE', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 6L XI', 'C3906A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 MP', 'C3903A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 LFS', 'C3906A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 6 MP', 'C3903A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET SP SI', 'C3903A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 6P XI', 'C3903A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 6 PSE', 'C3903A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 SI', 'C3909A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 SI MOPER', 'C3909A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 SI NX', 'C3909A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8000', 'C3909A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8000 DN', 'C3909A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8000 N', 'C3909A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET MOPIER 240', 'C3909A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 2100', 'C4096A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 2100 M', 'C4096A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 2100 SE', 'C4096A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 2100 TN', 'C4096A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 2100 XI', 'C4096A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4000', 'C4127A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4000N', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4000 TN', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4000 T', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4050', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4050 N', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4050 SE', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4050 T', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 4050 TN', 'C4127A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8100', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8100 DN', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 ML', 'C3906A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 8100 N', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8150', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8150 DN', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8150 HN', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 8150 MFP', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 81501 N', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET MOPIER 320', 'C4182X', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 1010', 'Q2612A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1012', 'Q2612A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 1015', 'Q2612A', '', '');
INSERT INTO `hp_laser` VALUES ('LASERJET 1000', 'C7115A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1200', 'C7115A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1220', 'C7115A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1200N', 'C7115A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 SI MX', 'C3909A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 6 P', 'C3903A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 P', 'C3903A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 6 P XI', 'C3903A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1100', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 2200', 'C4096A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1300', 'Q2613A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET III', '92295A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET III D', '92295A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET IIP', '92275A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET II P', '92275A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET II D', '92295A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 SI', '92291A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 M', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 M', '92298A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 5 L', 'C3906A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 4 MV', 'C3900A', '.', '.');
INSERT INTO `hp_laser` VALUES ('L4100S', 'C3906A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 5', 'C3105A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE TM 4000', 'C4127A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE T 4000', 'C4127A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE M 4000', 'C4127A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE 4000', 'C4127A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 2410', 'C4096A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 2300', 'Q2610A', 'CHIP', '350');
INSERT INTO `hp_laser` VALUES ('LASERJET 1160', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1320', 'Q5949A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1150 ULTRA PRECISE', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('MOPIER 240', 'C3909A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE 1100', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('ULTRA PRECISE 1100A', 'C4092A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 8000 MFP', 'C3909A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 5 M', 'C3105A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 2500', 'C9700A', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3500', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3700', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4000', 'Q267xA', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4500', '4195A', '14', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4500 D', '4191A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4500 DN', '4191A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4550', '4191A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 4600', 'C9720A', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 8550', 'C4149A', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 2550', 'Q397xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 5500', 'C9730A', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 2550L', 'Q397xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 2550LN', 'Q397xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 2550n', 'Q397xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3500n', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3550n', 'Q267xA', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3550', 'Q267xA', '.', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3700n', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3700dn', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 3700tn', 'Q267xA', 'CHIP', '.');
INSERT INTO `hp_laser` VALUES ('LASERJET 1300N', 'Q2613A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 1300xi', 'Q2613A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 2300L', 'Q2610A', 'CHIP', '350');
INSERT INTO `hp_laser` VALUES ('LASERJET 2300d', 'Q2610A', 'CHIP', '350');
INSERT INTO `hp_laser` VALUES ('LASERJET 2300dtn', 'Q2610A', 'CHIP', '350');
INSERT INTO `hp_laser` VALUES ('LASERJET 2300n', 'Q2610A', 'CHIP', '350');
INSERT INTO `hp_laser` VALUES ('LASERJET 2500', 'C9700A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 2500L', 'C9700A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 2500N', 'C9700A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 2500TN', 'C9700A', 'CHIP', '150');
INSERT INTO `hp_laser` VALUES ('LASERJET 4100', 'C8016X', 'CHIP', '300');
INSERT INTO `hp_laser` VALUES ('LASERJET 4200', 'Q1338A', 'CHIP', '700');
INSERT INTO `hp_laser` VALUES ('LASERJET 4200N', 'Q1338A', 'CHIP', '700');
INSERT INTO `hp_laser` VALUES ('LASERJET 4200tn', 'Q1338A', 'CHIP', '700');
INSERT INTO `hp_laser` VALUES ('LASERJET 4200dtn', 'Q1338A', 'CHIP', '700');
INSERT INTO `hp_laser` VALUES ('LASERJET 4300', 'Q1139A', 'CHIP', '1050');
INSERT INTO `hp_laser` VALUES ('LASERJET 4300N', 'Q1139A', 'CHIP', '1050');
INSERT INTO `hp_laser` VALUES ('LASERJET 4300tn', 'Q1139A', 'CHIP', '1050');
INSERT INTO `hp_laser` VALUES ('LASERJET 4300dtn', 'Q1139A', 'CHIP', '1050');
INSERT INTO `hp_laser` VALUES ('LASERJET 4500', 'C4191A', 'CHIP', '190');
INSERT INTO `hp_laser` VALUES ('LASERJET 4500n', 'C4191A', 'CHIP', '190');
INSERT INTO `hp_laser` VALUES ('LASERJET 4500dn', 'C4191A', 'CHIP', '190');
INSERT INTO `hp_laser` VALUES ('LASERJET 4600', 'C9772A', 'CHIP', '200');
INSERT INTO `hp_laser` VALUES ('LASERJET 4600n', 'C9772A', 'CHIP', '200');
INSERT INTO `hp_laser` VALUES ('LASERJET 4600dn', 'C9772A', 'CHIP', '200');
INSERT INTO `hp_laser` VALUES ('LASERJET 4600hdn', 'C9772A', 'CHIP', '200');
INSERT INTO `hp_laser` VALUES ('LASERJET 8500', 'C4152A', 'CHIP', '340');
INSERT INTO `hp_laser` VALUES ('LASERJET 8500N', 'C4149A', 'CHIP', '340');
INSERT INTO `hp_laser` VALUES ('LASERJET 8500DN', 'C4149A', 'CHIP', '340');
INSERT INTO `hp_laser` VALUES ('LASERJET 8550', 'C4149A', 'CHIP', '340');
INSERT INTO `hp_laser` VALUES ('LASERJET 9000', '.', 'CHIP', '');
INSERT INTO `hp_laser` VALUES ('LASERJET COLOR 9500', 'C8550A', 'CHIP', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ibm_laser`
-- 

CREATE TABLE `ibm_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `ibm_laser`
-- 

INSERT INTO `ibm_laser` VALUES ('4324', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('4324 NETWORK PRIINTER', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('4324 PS', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('NETWORK PRINTER 24', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('NP 24', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('NETWORK PRINTER 24PS', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('OPTRA N MODEL240', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('OPTRA N MODEL 245', '63H5721', '', '');
INSERT INTO `ibm_laser` VALUES ('3112 MODEL 1', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('3112 MODEL 001', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('3116 MODEL 001', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 12 R+', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('3116 MODEL 003', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('3116 MODEL 002', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 16L', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 16L+', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 12L', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 12L+', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 12R', '1382100', '', '');
INSERT INTO `ibm_laser` VALUES ('3912', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 AS 0', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 AS 1', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 MODEL AS0 MICR', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 MODEL AS1 MICR', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 MODEL NS0 MICR', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 MODEL NS1 MICR', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 NS 0', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3912 NS1', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 02D', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 03D', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 03S', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 AS0', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 AS1', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 MODEL AS0  MIRC', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 MODEL AS1 MIRC', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 MODEL NS0  MIRC', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 MODEL NS1  MIRC', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 NS0', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('3916 NS1', '1380950', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER E', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 5E', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 6', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 6A', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 6P', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10A', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10L', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10P', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10R', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('LASERPRINTER 10RD', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4019', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4019 01', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4019 E 01', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4028', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4028 AS 1', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4028 NS1', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4028 WITH MIRC', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4029 MODEL 10', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4029 MODEL 10A', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4029 MODEL 10L', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4029 MODEL 10P', '1380200', '', '');
INSERT INTO `ibm_laser` VALUES ('4029 MODEL 5E', '1380200', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lexmark`
-- 

CREATE TABLE `lexmark` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `lexmark`
-- 

INSERT INTO `lexmark` VALUES ('Lex1000', '01', '');
INSERT INTO `lexmark` VALUES ('Lex1020', '01', '');
INSERT INTO `lexmark` VALUES ('Lex1100', '01', '');
INSERT INTO `lexmark` VALUES ('Kodak PM100', '01', '');
INSERT INTO `lexmark` VALUES ('Optra Color 40', '01', '');
INSERT INTO `lexmark` VALUES ('Optra Color 40N', '01', '');
INSERT INTO `lexmark` VALUES ('Optra Color 45', '01', '');
INSERT INTO `lexmark` VALUES ('Optra Color 45N', '01', '');
INSERT INTO `lexmark` VALUES ('Winwriter 100', '01', '');
INSERT INTO `lexmark` VALUES ('Winwriter 150', '01', '');
INSERT INTO `lexmark` VALUES ('Z11', '01', '');
INSERT INTO `lexmark` VALUES ('Z12', '01', '');
INSERT INTO `lexmark` VALUES ('Z13', '04', '');
INSERT INTO `lexmark` VALUES ('Z22', '01', '');
INSERT INTO `lexmark` VALUES ('Z23', '04', '');
INSERT INTO `lexmark` VALUES ('Z25', '04', '');
INSERT INTO `lexmark` VALUES ('Z31', '01', '');
INSERT INTO `lexmark` VALUES ('Z32', '01', '');
INSERT INTO `lexmark` VALUES ('Z33', '04', '');
INSERT INTO `lexmark` VALUES ('Z35', '04', '');
INSERT INTO `lexmark` VALUES ('Z42', '01', '');
INSERT INTO `lexmark` VALUES ('Z43', '01', '');
INSERT INTO `lexmark` VALUES ('Z45', '01', '');
INSERT INTO `lexmark` VALUES ('Z51', '01', '');
INSERT INTO `lexmark` VALUES ('Z52', '01', '');
INSERT INTO `lexmark` VALUES ('Z53', '01', '');
INSERT INTO `lexmark` VALUES ('Z55', '04', '');
INSERT INTO `lexmark` VALUES ('Z65', '04', '');
INSERT INTO `lexmark` VALUES ('Z82', '01', '');
INSERT INTO `lexmark` VALUES ('X63', '01', '');
INSERT INTO `lexmark` VALUES ('X73', '01', '');
INSERT INTO `lexmark` VALUES ('X83', '01', '');
INSERT INTO `lexmark` VALUES ('CJP3200', '01', '');
INSERT INTO `lexmark` VALUES ('CJP5000', '01', '');
INSERT INTO `lexmark` VALUES ('CJP5700', '01', '');
INSERT INTO `lexmark` VALUES ('CJP5770', '01', '');
INSERT INTO `lexmark` VALUES ('CJP7000', '01', '');
INSERT INTO `lexmark` VALUES ('CJP7200', '01', '');
INSERT INTO `lexmark` VALUES ('CJP7200V', '01', '');
INSERT INTO `lexmark` VALUES ('Z65n', '04', '');
INSERT INTO `lexmark` VALUES ('I3', '04', '');
INSERT INTO `lexmark` VALUES ('1020', '01', '');
INSERT INTO `lexmark` VALUES ('ExecJet 2c', '01', 'NO');
INSERT INTO `lexmark` VALUES ('X83 Optra', '01', 'NO');
INSERT INTO `lexmark` VALUES ('2815', '01', 'NO');
INSERT INTO `lexmark` VALUES ('x5270', '01', 'NO');
INSERT INTO `lexmark` VALUES ('x5250', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Z705', '01', 'NO');
INSERT INTO `lexmark` VALUES ('ExecJet', '01', '');
INSERT INTO `lexmark` VALUES ('X80', '01', 'NO');
INSERT INTO `lexmark` VALUES ('X85', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Z55se', '04', 'NO');
INSERT INTO `lexmark` VALUES ('Z45se', '01', 'NO');
INSERT INTO `lexmark` VALUES ('X74', '04', '');
INSERT INTO `lexmark` VALUES ('Color Jet 4076 (Execjet IIc)', '01', '');
INSERT INTO `lexmark` VALUES ('Color Jet 4076 (Execjet II)', '01', '');
INSERT INTO `lexmark` VALUES ('Medley 4c MFP', '01', '');
INSERT INTO `lexmark` VALUES ('Medley 4sx MFP', '01', '');
INSERT INTO `lexmark` VALUES ('P122', '01', '');
INSERT INTO `lexmark` VALUES ('Photo JetPrinter 5770', '01', '');
INSERT INTO `lexmark` VALUES ('X125', '01', '');
INSERT INTO `lexmark` VALUES ('X75', '04', '');
INSERT INTO `lexmark` VALUES ('Z41', '01', '');
INSERT INTO `lexmark` VALUES ('Z54', '01', '');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 1000', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 1020', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 1070', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color Jet Printer1100', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 2030', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 2050', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 2055', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 2070', '01', '');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 3000', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 3200', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 4070', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 4072', '05', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 4076 (Execjet IIc)', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 4079', '05', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 5000', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 5700', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 5770', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 7000', '01', '');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 7200', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 7200V', '01', 'NO');
INSERT INTO `lexmark` VALUES ('Color JetPrinter 1100', '01', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lexmark_laser`
-- 

CREATE TABLE `lexmark_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `lexmark_laser`
-- 

INSERT INTO `lexmark_laser` VALUES ('OPTRA S1250', '1382925', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1250N', '1382925', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1255', '1382925', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1255N', '1382925', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1620', '1382929', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1620N', '1382929', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1650', '1382929', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA 1650N', '1382929', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1855', '1382625', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S1855N', '1382625', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2420', '1382625', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2450', '1382625', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2450N', '1382920', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2455', '1382920', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2455M', '1382920', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA S2455N', '1382920', '', '');
INSERT INTO `lexmark_laser` VALUES ('4040', '140109X', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA N', '140109X', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA N 240', '140109X', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA N 245', '140109X', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA N MOIDEL 240', 'C3909A', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA MODEL 245', 'C3909A', '', '');
INSERT INTO `lexmark_laser` VALUES ('3112 MODEL 1', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('3116 MODEL 1', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('3116 MODEL 2', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('3116 MODEL 3', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('4049', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA L', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA L+', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LX', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LX+', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LXI', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA R', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LXI+', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA R+', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA RT+', '1382150', '', '');
INSERT INTO `lexmark_laser` VALUES ('4019 E 1', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 10', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 10A', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 10L', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 10P', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 5E', '1380200', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 6', '1380200', '', '');
INSERT INTO `lexmark_laser` VALUES ('4035 10W', '1380520', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 6A', '1380520', '', '');
INSERT INTO `lexmark_laser` VALUES ('4029 MODEL 6P', '1380520', '', '');
INSERT INTO `lexmark_laser` VALUES ('WINWRITER 600', '1380520', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 10+ MODEL 12L', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 10+ MODEL 16R', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 10+', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 10R', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 10R DUPLEX', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 12L', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 10 R DUPLEX', '1380950', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 12+', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 12R', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 12R+', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 16L', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('4039 MODEL 16L+', '1380950', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LXN+', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA LXN+1', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA RN+', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA R+PRO 16PM', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA RX', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA RX+', '1382100', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T610', '12A5840', 'CHIP', '620');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T610N', '12A5845', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T612', '12A5840', 'CHIP', '620');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T610 SX', '12A5845', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T612 N', '12A5849', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T614', '12A5840', 'CHIP', '620');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T614 N', '12A5745', '', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T616', '12A5840', 'CHIP', '620');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T616 N', '12A5840', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E210', '12S0300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T622', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E310', '13T0101', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E312', '13T0101', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E312 L', '13T0101', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E', '69G8256', 'NO', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E320', '08A0475', 'CHIP', '100');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T61', '12A5845', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T520', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T522', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T522dn', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E220', '12S0300', '9', '.');
INSERT INTO `lexmark_laser` VALUES ('E232', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E330', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E332', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E232t', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E321', '12A7300', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E323', '12A7300', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E320', '08A0475', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E322', '08A0475', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E322n', '08A0475', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E323n', '12A7300', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E332n', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('E332tn', '12A8300', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T420', '12A7310', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T420d', '12A7310', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T420dn', '12A7310', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T430', '12A8320', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T430d', '12A8320', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T430dn', '12A8320', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T520d', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T520dn', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T520n', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T522n', '12A6830', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T620', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T620dn', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T620in', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T620n', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T622dn', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T622in', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T622n', '12A6760', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630 VE', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630dn', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630in', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630n', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T630n VE', '12A7360', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('T632', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T634', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T632dtn', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T632n', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T632tn', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T634dtn', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T634n', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('T634tn', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('W812', '14K0050', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('W812dtn', '14K0050', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('W812tn', '14K0050', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('W820', '12B0090', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('W820dn', '12B0090', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('W820n', '12B0090', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('X215 MFP', '18S0090', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X422 MFP', '12A3710', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X520 MFP', '12A6730', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X522 MFP', '12A6730', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X620e MFP', '12A6760', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X630 MFP', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X632 MFP', '12A7360', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X820e MFP', '12B0090', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('X832e MFP', 'X8302KH', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C510', '20K0503', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C510dtn', '20K0503', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C510n', '20K0503', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C720', '15W0903', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C720dn', '15W0903', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C720n', '15W0903', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750dn', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750dtn', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750fn', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750in', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C750n', '10B031K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752ldn', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752ln', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752dn', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752dtn', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752fn', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('C752n', '15G032K', '.', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E322', '08A0475', 'CHIP', '100');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E321', '12A7400', 'CHIP', '100');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E323', '12A7400', 'CHIP', '100');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T520', '12A6730', 'CHIP', '650');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T522', '12A6730', 'CHIP', '650');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T620', '12A6760', 'CHIP', '850');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T622', '12A6760', 'CHIP', '850');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T630', '12A7360', 'CHIP', '630');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T632', '12A7360', 'CHIP', '630');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T634', '12A7360', 'CHIP', '630');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T420', '12A7310', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E332', '', 'CHIP', '');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E330', '.', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E232', '.', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E230', '.', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA E220', '12A7400', 'CHIP', '100');
INSERT INTO `lexmark_laser` VALUES ('OPTRA Se', '12A0825', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('4023', '12B0090', '9', '.');
INSERT INTO `lexmark_laser` VALUES ('4069', '17G0152', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('E230', '12S0300', 'CHIP', '.');
INSERT INTO `lexmark_laser` VALUES ('4045', '', 'NO', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA M', '', 'NO', '.');
INSERT INTO `lexmark_laser` VALUES ('4500', '.', '09', '.');
INSERT INTO `lexmark_laser` VALUES ('OPTRA T', '', 'NO', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `oki_laser`
-- 

CREATE TABLE `oki_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `oki_laser`
-- 

INSERT INTO `oki_laser` VALUES ('400E', '09002392', '', '');
INSERT INTO `oki_laser` VALUES ('410E', '09002392', '.', '.');
INSERT INTO `oki_laser` VALUES ('800E', '09002392', '.', '.');
INSERT INTO `oki_laser` VALUES ('1200 EX', 'T1200 EX', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 4W', 'Page 4WT', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 4WT', 'Page 4WT', '.', '.');
INSERT INTO `oki_laser` VALUES ('FAX 4100', 'Page 4WT', '.', '.');
INSERT INTO `oki_laser` VALUES ('FAX 4W', 'Page 4WT', '.', '.');
INSERT INTO `oki_laser` VALUES ('FAX 4M', 'Page 4WT', '.', '.');
INSERT INTO `oki_laser` VALUES ('B4200', '01103402', '.', '.');
INSERT INTO `oki_laser` VALUES ('B4300', '01103402', '.', '.');
INSERT INTO `oki_laser` VALUES ('C5100', '42127408', '.', '.');
INSERT INTO `oki_laser` VALUES ('C5300', '42127408', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 10i', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 10E', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 10EX', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 12i', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 12i-N', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 20', '41022502', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 14', '40433203', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 24DX', '41022502', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 8W', '8W/8P', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 8P', '8W/8P', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE 8C', '41012308-C-M-Y', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE C7000', '41304209-C-M-Y', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE C7300', '41963008 -C-M-Y', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE C5200', '42124708-C-M-Y', '.', '.');
INSERT INTO `oki_laser` VALUES ('OKIPAGE C5300', '42124708-C-M-Y', '.', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `olivetti`
-- 

CREATE TABLE `olivetti` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `olivetti`
-- 

INSERT INTO `olivetti` VALUES ('JP150', '02', '');
INSERT INTO `olivetti` VALUES ('JP170', '02', '');
INSERT INTO `olivetti` VALUES ('JP190', '02', '');
INSERT INTO `olivetti` VALUES ('JP192', '02', '');
INSERT INTO `olivetti` VALUES ('JP250', '02', '');
INSERT INTO `olivetti` VALUES ('JP270', '02', '');
INSERT INTO `olivetti` VALUES ('JP350', '02', '');
INSERT INTO `olivetti` VALUES ('JP360', '02', '');
INSERT INTO `olivetti` VALUES ('JP370', '02', '');
INSERT INTO `olivetti` VALUES ('JP450', '02', '');
INSERT INTO `olivetti` VALUES ('JP470', '02', '');
INSERT INTO `olivetti` VALUES ('JP790', '02', '');
INSERT INTO `olivetti` VALUES ('JP792', '02', '');
INSERT INTO `olivetti` VALUES ('JP795', '02', '');
INSERT INTO `olivetti` VALUES ('JP883', '02', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 200', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 260', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 210P', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 250', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 300', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 350', '01', '');
INSERT INTO `olivetti` VALUES ('OFX 550', '01', '');
INSERT INTO `olivetti` VALUES ('OFX 570', '01', '');
INSERT INTO `olivetti` VALUES ('OFX 800', '01', '');
INSERT INTO `olivetti` VALUES ('Nomad Jet 100', '01', '');
INSERT INTO `olivetti` VALUES ('Job Jet P200', '01', '');
INSERT INTO `olivetti` VALUES ('ArtJet 10', '01', '');
INSERT INTO `olivetti` VALUES ('ArtJet 12', '01', '');
INSERT INTO `olivetti` VALUES ('ArtJet 20', '01', '');
INSERT INTO `olivetti` VALUES ('ArtJet 22', '01', '');
INSERT INTO `olivetti` VALUES ('Fax Lab 210', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 140', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 180', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 185', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 555', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 500', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 520', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 525', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 540', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 1000', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 1100', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 1200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 2100', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 2200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 3100', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 3200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('Fax Lab 200P', '01', 'NO');
INSERT INTO `olivetti` VALUES ('Fax Lab 250P', '01', 'NO');
INSERT INTO `olivetti` VALUES ('Fax Lab 260P', '01', 'NO');
INSERT INTO `olivetti` VALUES ('Jet Lab 500', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 520P', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX 580', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 500', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 1000', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 1100', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 1200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 1900', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 2200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('OFX LinkFax 3200', '01', 'NO');
INSERT INTO `olivetti` VALUES ('JP150W', '02', '');
INSERT INTO `olivetti` VALUES ('JP150WS', '02', '');
INSERT INTO `olivetti` VALUES ('JP170C', '02', '');
INSERT INTO `olivetti` VALUES ('JP170S', '02', '');
INSERT INTO `olivetti` VALUES ('JP350S', '02', 'NO');
INSERT INTO `olivetti` VALUES ('JP350WS', '02', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `olivetti_laser`
-- 

CREATE TABLE `olivetti_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `olivetti_laser`
-- 

INSERT INTO `olivetti_laser` VALUES ('LP 5000', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 101', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 103', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 108', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 208', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 208 M2', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 303', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 820', '92295A', '', '');
INSERT INTO `olivetti_laser` VALUES ('PG 840', '92295A', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `samsung`
-- 

CREATE TABLE `samsung` (
  `Printer` text NOT NULL,
  `Ins` varchar(25) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `samsung`
-- 

INSERT INTO `samsung` VALUES ('Msys 8000', '01', 'NO');
INSERT INTO `samsung` VALUES ('Msys 4700', '02', '');
INSERT INTO `samsung` VALUES ('Smartjet', '02', '');
INSERT INTO `samsung` VALUES ('SF 4700', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4500', '02', '');
INSERT INTO `samsung` VALUES ('MJ 4500C', '02', '');
INSERT INTO `samsung` VALUES ('SF 3150', '02', '');
INSERT INTO `samsung` VALUES ('SCX 1000', '02', 'NO');
INSERT INTO `samsung` VALUES ('SCX 1100', '02', 'NO');
INSERT INTO `samsung` VALUES ('SCX 1150', '02', 'NO');
INSERT INTO `samsung` VALUES ('SCX 4300', '02', 'NO');
INSERT INTO `samsung` VALUES ('SCX 1050F', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4750C', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3100P', '02', '');
INSERT INTO `samsung` VALUES ('SF 4100', '02', '');
INSERT INTO `samsung` VALUES ('SF 4120', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4200', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4220', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3000', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3000T', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3100', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3100T', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 3200', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4000', '02', 'NO');
INSERT INTO `samsung` VALUES ('SF 4020', '02', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `samsung_laser`
-- 

CREATE TABLE `samsung_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `samsung_laser`
-- 

INSERT INTO `samsung_laser` VALUES ('HL720', 'TN200', '.', '.');
INSERT INTO `samsung_laser` VALUES ('HL730', 'TN200', '.', '.');
INSERT INTO `samsung_laser` VALUES ('HL760', 'TN200', '.', '.');
INSERT INTO `samsung_laser` VALUES ('FC9000', 'TN200', '.', '.');
INSERT INTO `samsung_laser` VALUES ('CLP500', 'TN200', '.', '.');
INSERT INTO `samsung_laser` VALUES ('ML 2150', '.', 'CHIP', '.');
INSERT INTO `samsung_laser` VALUES ('ML 2550', '.', 'CHIP', '.');
INSERT INTO `samsung_laser` VALUES ('SF-830', 'SCX 5312D6', 'NO', '.');
INSERT INTO `samsung_laser` VALUES ('ML 1210', 'SCX 5100', '15', '.');
INSERT INTO `samsung_laser` VALUES ('ML 1750', 'ML 1750D3', '16', '.');
INSERT INTO `samsung_laser` VALUES ('SCX 4016', '', '17', '.');
INSERT INTO `samsung_laser` VALUES ('SCX 4116', '.', '17', '.');
INSERT INTO `samsung_laser` VALUES ('SCX 4216', '.', '17', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `sharp_laser`
-- 

CREATE TABLE `sharp_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `sharp_laser`
-- 

INSERT INTO `sharp_laser` VALUES ('Z 20', 'ZT-20TDI', '27', '.');
INSERT INTO `sharp_laser` VALUES ('Z 23', 'ZT-20TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 25', 'ZT-20TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 27', 'ZT-20TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 50', 'ZT-50TDI', '28', '.');
INSERT INTO `sharp_laser` VALUES ('Z 52', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 52II', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 55', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 57', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 57II', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 70', 'ZT-50TDI', '28', '.');
INSERT INTO `sharp_laser` VALUES ('Z 72', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 75', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 75II', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 76', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 77', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 85', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 85II', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 85III', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 87', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 88', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('850', 'ZT-50TDI', '.', '.');
INSERT INTO `sharp_laser` VALUES ('6000', 'ZT-50TDI', '.', '.');
INSERT INTO `sharp_laser` VALUES ('SF 6000', 'ZT-50TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('SF 6100', 'ZT-50TDI', '.', '.');
INSERT INTO `sharp_laser` VALUES ('SF 1010', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('SF 1012', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('SF 1112', 'ZT-81TDI', '.', '.');
INSERT INTO `sharp_laser` VALUES ('Z 810', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 820', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 830', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('Z 835', 'ZT-81TDI', '18', '.');
INSERT INTO `sharp_laser` VALUES ('Z 845', 'ZT-81TDI', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1000', 'ZT-100TD', '18', '.');
INSERT INTO `sharp_laser` VALUES ('AL 1010', 'ZT-100TD', '.', '.');
INSERT INTO `sharp_laser` VALUES ('AL 1020', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1041', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1200', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1220', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1250', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1520', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AL 1521', 'ZT-100TD', '', '');
INSERT INTO `sharp_laser` VALUES ('AR 150', 'AL-150TD', '21', '.');
INSERT INTO `sharp_laser` VALUES ('AR 152', '', '22', '.');
INSERT INTO `sharp_laser` VALUES ('AR 160', '.', '23', '.');
INSERT INTO `sharp_laser` VALUES ('AR 163', '.', '24', '.');
INSERT INTO `sharp_laser` VALUES ('FO 26', '', 'NO', '.');
INSERT INTO `sharp_laser` VALUES ('FO 28', '.', 'NO', '.');
INSERT INTO `sharp_laser` VALUES ('FO 29', '.', 'NO', '.');
INSERT INTO `sharp_laser` VALUES ('AL 80', '.', 'NO', '.');
INSERT INTO `sharp_laser` VALUES ('AL 800', '.', '25', '.');
INSERT INTO `sharp_laser` VALUES ('JX 9500', '.', 'OPC FUSE', '.');
INSERT INTO `sharp_laser` VALUES ('JX 9600', '.', '26', '.');
INSERT INTO `sharp_laser` VALUES ('SN 1420', '.', 'CHIP', '.');
INSERT INTO `sharp_laser` VALUES ('SN 1430', '.', 'CHIP', '.');
INSERT INTO `sharp_laser` VALUES ('Z 30', '.', '20', '.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `xerox`
-- 

CREATE TABLE `xerox` (
  `Printer` text NOT NULL,
  `Ins` char(2) NOT NULL default '0',
  `proced` varchar(20) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `xerox`
-- 

INSERT INTO `xerox` VALUES ('Workcentre 480Cp', '01', '');
INSERT INTO `xerox` VALUES ('Workcentre 470CX', '01', '');
INSERT INTO `xerox` VALUES ('Docuprint C8', '03', '');
INSERT INTO `xerox` VALUES ('Docuprint C6', '03', '');
INSERT INTO `xerox` VALUES ('2230ij Color Plotter', '04', '');
INSERT INTO `xerox` VALUES ('C20', '01', '');
INSERT INTO `xerox` VALUES ('NC20', '01', '');
INSERT INTO `xerox` VALUES ('Workcentre 450 Cp', '03', '');
INSERT INTO `xerox` VALUES ('Docuprint M750', '03', '');
INSERT INTO `xerox` VALUES ('Docuprint M760', '03', '');
INSERT INTO `xerox` VALUES ('DocuPrint XJ6C', '03', '');
INSERT INTO `xerox` VALUES ('DocuPrint XJ4C', '03', '');
INSERT INTO `xerox` VALUES ('DocuPrint XJ8C', '03', '');
INSERT INTO `xerox` VALUES ('DocuPrint XJ9C', '03', '');
INSERT INTO `xerox` VALUES ('WorkCentre M940', '03', '');
INSERT INTO `xerox` VALUES ('WorkCentre M950', '03', '');
INSERT INTO `xerox` VALUES ('C20es', '01', 'NO');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `xerox_laser`
-- 

CREATE TABLE `xerox_laser` (
  `Printer` varchar(35) NOT NULL default '',
  `Ins` varchar(25) NOT NULL default '',
  `proced` varchar(20) NOT NULL default '',
  `carga` varchar(4) NOT NULL default ''
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `xerox_laser`
-- 

INSERT INTO `xerox_laser` VALUES ('2 GE', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('3 GD', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('5201', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('5202', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('5203', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('5305', '6R737', '19', '.');
INSERT INTO `xerox_laser` VALUES ('5306', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 351', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 355', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 356', '6R737', '', '');
INSERT INTO `xerox_laser` VALUES ('5008', '6R343', '.', '.');
INSERT INTO `xerox_laser` VALUES ('5008 RE', '6R343', '', '');
INSERT INTO `xerox_laser` VALUES ('5008 S', '6R343', '', '');
INSERT INTO `xerox_laser` VALUES ('5240', '6R343', '', '');
INSERT INTO `xerox_laser` VALUES ('5260', '6R343', '', '');
INSERT INTO `xerox_laser` VALUES ('5280', '6R343', '', '');
INSERT INTO `xerox_laser` VALUES ('5009', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('5009 RE', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('5307', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('5308', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('5309', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('5310', '6R359', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 520', '6R333', '20', '.');
INSERT INTO `xerox_laser` VALUES ('XC 540', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('CX 540 OTR', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('CX 560', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 580', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('5205', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('5210', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('5220', '6R333', '20', '.');
INSERT INTO `xerox_laser` VALUES ('5222', '6R333', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 810', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 811', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 820', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 822', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 830', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1020', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1033', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1040', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1044', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1045', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1245', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XC 1255', '6R881', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 100', '6R914', '.', '.');
INSERT INTO `xerox_laser` VALUES ('XD 102', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 102F', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 103', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 103F', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 105', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 105DF', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 105F', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 120F', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 125DF', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 130DF', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('XD 155DF', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('WORKCENTRE PRO 16 FX', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('WORKCENTRE PRO 215', '6R914', '.', '.');
INSERT INTO `xerox_laser` VALUES ('WORKCENTRE PRO 16P', '6R914', '', '');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 4510', '', '', '');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 4505', '113R00005', '.', '.');
INSERT INTO `xerox_laser` VALUES ('7700DN', '016-1947-00', '.', '.');
INSERT INTO `xerox_laser` VALUES ('Docuprint NC60/C55', '.', '.', '.');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 220', '113R00276', 'CHIP', '1070');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 230', '113R00276', 'CHIP', '1070');
INSERT INTO `xerox_laser` VALUES ('N 24', '113R00184', 'CHIP', '1070');
INSERT INTO `xerox_laser` VALUES ('N 32', '113R00184', 'CHIP', '1070');
INSERT INTO `xerox_laser` VALUES ('N 40', '113R00184', 'CHIP', '1070');
INSERT INTO `xerox_laser` VALUES ('FAX 7041', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('FAX 7041 EM', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('FAX 7042', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('FAX 7042 EM', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('FAX EM-4010', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('FAX EM-4011', 'R6R00713', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('P8E', 'R6R00713', 'FUSIBLE', '200');
INSERT INTO `xerox_laser` VALUES ('P8EX', '113R00296', 'FUSIBLE', '200');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 214', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 332', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 340', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 432', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('DocuPrint 440', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('WORKCENTRE 310', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('WORKCENTRE 312', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('Phaser 3450', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('Phaser 3150', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('N4525', '.', 'CHIP', '.');
INSERT INTO `xerox_laser` VALUES ('XC 800', '13R544', '18', '.');

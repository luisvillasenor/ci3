-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2015 a las 11:33:28
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sigs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(50) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `geo` varchar(2) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_ult_acceso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombreCompleto`, `rol`, `geo`, `email_address`, `password`, `fecha_creacion`, `fecha_ult_acceso`, `status`) VALUES
(1, 'Luis', 'Administrador', '88', 'administrador@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2012-09-07 20:05:57', '2015-04-18 21:30:40', 0),
(13, 'Gabriel', 'Capturista', '02', 'capturista@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-04-15 05:08:23', '2015-04-15 05:32:50', 0),
(16, 'Luis Gabriel', 'Supervision', '02', 'supervisor@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-04-15 05:23:06', '2015-05-12 16:04:54', 0),
(17, 'Luis Gabriel Villaseñor Alarcon', 'Superadmin', '99', 'superadmin@gestion.com', '5c05c9896208189ad1b001c4369d49453382421a', '2015-05-05 17:19:50', '2015-08-20 03:05:10', 1),
(18, 'Jorge Macias', 'Administrador', '88', 'jorge.macias@gestion.com', 'cd042aa08024f35e75f6b64a3d88a337173b1024', '2015-05-06 05:15:41', '2015-08-17 15:50:42', 1),
(19, 'Hazel Montejano Garcia', 'Administrador', '88', 'hazel.montejano@gestion.com', '2a6c3364f9baa1f66b44773e7834d4649befb63e', '2015-05-06 05:17:22', '2015-05-06 05:17:22', 1),
(48, 'Gloria Esthela Martinez Estrada', 'Capturista', '01', 'gloria.martinez@gestion.com', 'bb42d82bdbc012742d535e3940b816b83e0e1a81', '2015-06-29 23:39:13', '2015-06-29 23:39:13', 1),
(23, 'Capturista Distrito 01', 'Capturista', '01', 'capturista01@gestion.com', 'ce052b22c67b7efa51dbf0923364d7dfbc501859', '2015-05-11 14:19:30', '2015-08-18 01:42:51', 1),
(21, 'Capturista Distrito 02', 'Capturista', '02', 'capturista02@gestion.com', '28be2e87ed86ef773a2206ddb889e5f8adcc64c8', '2015-05-11 14:16:16', '2015-08-18 01:44:03', 1),
(22, 'Capturista Distrito 03', 'Capturista', '03', 'capturista03@gestion.com', '98da8fb1a43b99c11e4538d0564e0408ae4182cf', '2015-05-11 14:16:51', '2015-08-18 01:44:36', 1),
(24, 'Ximena de Leon Belloso', 'Administrador', '88', 'ximena.leon@gestion.com', '3a0f8947c8b94126eb077c29b290f41a17da7c6f', '2015-05-11 22:26:52', '2015-05-11 22:32:08', 1),
(25, 'Laura Ruvalcaba', 'Capturista', '02', 'laura.ruvalcaba@gestion.com', '5d112644f404d7abafbe1ca62d7288f036eb8276', '2015-05-11 22:31:31', '2015-05-15 12:36:15', 0),
(26, 'Adriana Rosales Macias', 'Capturista', '03', 'adriana.rosales@gestion.com', 'bafe71377bb2d5af8ad04f1bae308fe38116be3c', '2015-05-11 22:34:19', '2015-05-11 22:34:19', 0),
(27, 'Raul Ortega Gonzalez', 'Administrador', '88', 'raul.ortega@gestion.com', '5dca0ae4da7a3adbe7076568ba8fd492fbe91bc9', '2015-05-12 16:13:06', '2015-08-17 17:23:19', 1),
(28, 'Juan Manuel Montes', 'Capturista', '01', 'juan.montes@gestion.com', '05a808e606fede0659b8c7596d05de8937fd7322', '2015-05-12 16:38:45', '2015-05-15 12:52:48', 0),
(29, 'Elisa Romo', 'Capturista', '02', 'elisa.romo@gestion.com', '41ebbf0919828f506b7ecdc5a2dd06c429d23c4e', '2015-05-12 16:41:06', '2015-05-12 16:41:06', 0),
(30, 'Jenny Esqueda Ruvalcaba', 'Capturista', '03', 'jenny.ruvalcaba@gestion.com', '466e5a84232a2531f6dd04a69b5bca44abaf76c7', '2015-05-12 16:42:06', '2015-05-12 16:42:06', 0),
(31, 'Liliana Ayala Ortiz', 'Capturista', '01', 'liliana.ortiz@gestion.com', '9a2dc777e334a3012f011b92a0b2093ffe358238', '2015-05-12 16:43:38', '2015-05-12 16:51:40', 0),
(32, 'Francisco Guel Saldivar', 'Dirigencia', '77', 'paco.guel@gestion.com', 'a4c164cd3f2a1fc1cbdedcc43c079fe19c2a2dd1', '2015-05-13 19:44:56', '2015-05-13 19:44:56', 1),
(33, 'Lourdes Davila Villaseca', 'Dirigencia', '77', 'lourdes.davila@gestion.com', '44197e8b5ae570066cf55799635743d7178cd2be', '2015-05-13 19:46:27', '2015-05-13 19:46:27', 1),
(34, 'Miguel Angel Chico Herrera', 'Dirigencia', '77', 'miguel.chico@gestion.com', 'bb73b74aec8750ed5ed81d07459fc3d5676c1677', '2015-05-13 19:51:51', '2015-05-15 13:36:42', 1),
(35, 'Fabricio Nava', 'Dirigencia', '77', 'fabricio.nava@gestion.com', '634318d7264deda7827286bc3e17828060f288ac', '2015-05-13 19:52:34', '2015-05-13 19:52:34', 1),
(36, 'Juan Manuel Gomez Morales', 'Dirigencia', '77', 'juan.gomez@gestion.com', '9bdc33742bdfdf954d815d59adad8c888d722bec', '2015-05-13 19:53:45', '2015-05-13 19:53:45', 1),
(37, 'Carlos Avila', 'Dirigencia', '77', 'carlos.avila@gestion.com', '9a7519e15bc54961605f195167f0f5377e76d41f', '2015-05-13 19:54:21', '2015-05-13 19:54:21', 1),
(38, 'Jose de Jesus Rios Alba', 'Candidato', '03', 'jose.rios@gestion.com', 'f092d79a7fa25f3c015eddbdd192c16367c86113', '2015-05-13 23:05:22', '2015-05-13 23:05:22', 1),
(39, 'Angeles Aguilera Ramirez', 'Candidato', '02', 'angeles.aguilera@gestion.com', 'e7c2534b14d433684f1b3070749783631daa8dfc', '2015-05-13 23:06:25', '2015-05-14 01:56:59', 1),
(40, 'Gregorio Zamarripa Delgado', 'Candidato', '01', 'gregorio.zamarripa@gestion.com', '57e24e6bfccb151702ef258236591aa6787df144', '2015-05-13 23:08:40', '2015-05-13 23:08:40', 1),
(41, 'Dirigencia de Prueba', 'Dirigencia', '77', 'dirigencia@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-05-14 01:55:09', '2015-07-24 01:48:53', 1),
(42, 'Candidato Test', 'Candidato', '03', 'candidato@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-05-22 05:10:12', '2015-05-22 05:10:12', 1),
(43, 'Jose Carlos Lozano Rivera', 'Dirigencia', '77', 'jose.carlos@gestion.com', '2003e6c02705de14f8931de0320356b346e3b474', '2015-05-22 17:03:48', '2015-05-22 17:03:48', 1),
(44, 'Maria del Pilar Perez Sanchez', 'Dirigencia', '77', 'pily.perez@gestion.com', 'a3788f93884733a58d52133ea373e7b5833eaa2a', '2015-05-26 13:32:06', '2015-06-10 16:44:35', 1),
(45, 'Supervision Distrito 01', 'Supervision', '01', 'supervisor01@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-05-26 22:49:36', '2015-06-17 02:11:34', 1),
(46, 'Supervision Distrito 02', 'Supervision', '02', 'supervisor02@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-05-26 22:50:06', '2015-06-17 02:02:15', 1),
(47, 'Supervision Distrito 03', 'Supervision', '03', 'supervisor03@gestion.com', 'c25a79c57906ba7027b36d380230db92bbc0fd64', '2015-05-26 22:50:33', '2015-06-06 20:38:55', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

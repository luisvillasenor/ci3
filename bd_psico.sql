-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2015 a las 22:32:24
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_psico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE IF NOT EXISTS `expedientes` (
  `id_expediente` int(11) NOT NULL AUTO_INCREMENT,
  `miembro` varchar(100) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `aplicador` varchar(254) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_ult_acc` datetime NOT NULL,
  `status_exp` decimal(2,2) NOT NULL,
  `status_test1` decimal(2,2) NOT NULL DEFAULT '0.00',
  `status_test2` int(1) NOT NULL DEFAULT '0',
  `status_test3` int(1) NOT NULL DEFAULT '0',
  `status_test4` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_expediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id_expediente`, `miembro`, `id_paciente`, `aplicador`, `fecha_alta`, `fecha_ult_acc`, `status_exp`, `status_test1`, `status_test2`, `status_test3`, `status_test4`) VALUES
(1, 'psicologo01', 1, 'Instituto X de Psiquiatria', '2015-09-03 00:00:00', '2015-09-14 23:01:03', 0.00, 0.00, 0, 0, 0),
(2, 'psicologo01', 2, 'Instituto X de Psiquiatria', '2015-09-03 00:00:00', '2015-09-14 23:03:02', 0.00, 0.00, 0, 0, 0),
(3, 'psicologo01', 3, 'Instituto de Psicologia', '0000-00-00 00:00:00', '2015-09-14 23:03:39', 0.00, 0.00, 0, 0, 0),
(4, 'psicologo01', 4, 'Instituto de Psicologia Ags', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.00, 0.00, 0, 0, 0),
(5, 'psicologo01', 8, 'SECTURE', '2015-09-21 20:58:18', '2015-09-21 20:58:18', 0.00, 0.00, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(200) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `grupo` varchar(254) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre_completo`, `edad`, `sexo`, `grupo`) VALUES
(1, 'Luis Villasenor', 38, 'h', 'Grupo A'),
(2, 'Gabriel Alarcon', 28, 'h', 'Grupo A'),
(3, 'Valeria Guzman', 35, 'm', 'Grupo A'),
(4, 'Luis Gabriel Villasenor Alarcon', 41, 'h', 'Grupo A'),
(5, 'Valeria Guzman Marquez', 34, 'm', 'Grupo A'),
(6, 'Luis Gabriel Villasenor Alarcon', 41, 'm', 'Grupo B'),
(7, 'Luis Gabriel Villasenor Alarcon', 41, 'm', 'Grupo B'),
(8, 'Luis Gabriel Villasenor Alarcon', 41, 'm', 'Grupo B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preg_test1`
--

CREATE TABLE IF NOT EXISTS `preg_test1` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preg_test1`
--

INSERT INTO `preg_test1` (`id`, `pregunta`) VALUES
(1, 'Siente que las personas que conoce  son mejor que  él o ella.'),
(2, 'Se culpa, incluso cuando no es él/ella quien tiene la  culpa.'),
(3, 'Se siente avergonzado de sí mismo(a).'),
(4, 'Piensa que no les cae bien a los demás.'),
(5, 'Si los otros no están de acuerdo con él/ella se siente  mal.'),
(6, 'Siente que es una persona sin ningún atractivo físico.'),
(7, 'Se siente mal con su imagen física'),
(8, 'Le asusta ser rechazado por sus amigos'),
(9, 'Piensa que sus trabajos no son tan buenos como los  de sus compañeros'),
(10, 'Las responsabilidades de la vida son demasiadas para  él/ella'),
(11, 'Siente que no tiene ningún talento especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psic_test1`
--

CREATE TABLE IF NOT EXISTS `psic_test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resp_test1_1` int(1) NOT NULL,
  `resp_test1_2` int(1) NOT NULL,
  `resp_test1_3` int(1) NOT NULL,
  `resp_test1_4` int(1) NOT NULL,
  `resp_test1_5` int(1) NOT NULL,
  `resp_test1_6` int(1) NOT NULL,
  `resp_test1_7` int(1) NOT NULL,
  `resp_test1_8` int(1) NOT NULL,
  `resp_test1_9` int(1) NOT NULL,
  `resp_test1_10` int(1) NOT NULL,
  `resp_test1_11` int(1) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `avance` float(3,2) NOT NULL,
  `id_expediente` int(11) NOT NULL,
  `status_test1` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Psicometria del Test 1 Autoestima' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `psic_test1`
--

INSERT INTO `psic_test1` (`id`, `resp_test1_1`, `resp_test1_2`, `resp_test1_3`, `resp_test1_4`, `resp_test1_5`, `resp_test1_6`, `resp_test1_7`, `resp_test1_8`, `resp_test1_9`, `resp_test1_10`, `resp_test1_11`, `calificacion`, `avance`, `id_expediente`, `status_test1`) VALUES
(1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 35, 0.80, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_test1`
--

CREATE TABLE IF NOT EXISTS `resp_test1` (
  `nombre` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resp_test1`
--

INSERT INTO `resp_test1` (`nombre`, `valor`) VALUES
('Nunca', 0),
('Casi_nunca', 2),
('Casi_siempre', 3),
('Siempre', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_exp`
--

CREATE TABLE IF NOT EXISTS `status_exp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `status_exp`
--

INSERT INTO `status_exp` (`id`, `status`) VALUES
(1, 'Abierto'),
(2, 'Cerrado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

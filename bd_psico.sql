-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2015 a las 22:51:00
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_exp` varchar(100) NOT NULL,
  `nombre_exp` varchar(254) NOT NULL,
  `miembro` varchar(100) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `aplicador` varchar(254) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_ult_acc` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `numero_exp`, `nombre_exp`, `miembro`, `id_paciente`, `aplicador`, `fecha_alta`, `fecha_ult_acc`, `status`) VALUES
(1, '1001', 'Exp de Test', 'Psicologo01', 1, 'Instituto X de Psiquiatria', '2015-09-03 00:00:00', '2015-09-03 00:00:00', 1),
(2, '1002', 'Exp2 de Test', 'Psicologo01', 2, 'Instituto X de Psiquiatria', '2015-09-03 00:00:00', '2015-09-03 00:00:00', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre_completo`, `edad`, `sexo`, `grupo`) VALUES
(1, 'Luis Villasenor', 0, '', ''),
(2, 'Gabriel Alarcon', 0, '', ''),
(3, 'Valeria Guzman', 0, '', '');

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
  `id_preg_test1` int(2) NOT NULL,
  `resp` int(1) NOT NULL,
  `evaluacion` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Psicometria del Test 1 Autoestima' AUTO_INCREMENT=1 ;

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

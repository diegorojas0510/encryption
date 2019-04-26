-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2019 a las 10:11:38
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `message`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clave`
--

CREATE TABLE `clave` (
  `letter` char(1) NOT NULL,
  `letter_key` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clave`
--

INSERT INTO `clave` (`letter`, `letter_key`) VALUES
('a', '!'),
('b', ')'),
('c', '\"'),
('d', '('),
('e', '£'),
('f', '*'),
('g', '%'),
('h', '&'),
('i', '>'),
('j', '<'),
('k', '@'),
('l', 'a'),
('m', 'b'),
('n', 'c'),
('o', 'd'),
('p', 'e'),
('q', 'f'),
('r', 'g'),
('s', 'h'),
('t', 'i'),
('u', 'j'),
('v', 'k'),
('w', 'l'),
('x', 'm'),
('y', 'n'),
('z', 'o'),
('', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

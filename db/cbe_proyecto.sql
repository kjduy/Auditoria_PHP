-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2021 a las 07:17:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbe_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_mg`
--

CREATE TABLE `app_mg` (
  `id_CM` int(10) NOT NULL,
  `patient_CM` varchar(10) NOT NULL,
  `date_CM` date NOT NULL,
  `hour_CM` time NOT NULL,
  `doctor_CM` varchar(10) NOT NULL,
  `temperature_CM` varchar(10) NOT NULL,
  `pulse_CM` varchar(10) NOT NULL,
  `breathe_CM` varchar(10) NOT NULL,
  `weight_CM` varchar(10) NOT NULL,
  `height_CM` varchar(10) NOT NULL,
  `bloodP_CM` varchar(10) NOT NULL,
  `description_CM` varchar(1000) NOT NULL,
  `posibleDiag_CM` varchar(800) NOT NULL,
  `definitiveDiag_CM` varchar(800) NOT NULL,
  `observation_CM` varchar(800) NOT NULL,
  `medicine_CM` varchar(800) NOT NULL,
  `indication_CM` varchar(800) NOT NULL,
  `attach_CM` varchar(100) NOT NULL DEFAULT 'default.pdf'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_mg`
--

INSERT INTO `app_mg` (`id_CM`, `patient_CM`, `date_CM`, `hour_CM`, `doctor_CM`, `temperature_CM`, `pulse_CM`, `breathe_CM`, `weight_CM`, `height_CM`, `bloodP_CM`, `description_CM`, `posibleDiag_CM`, `definitiveDiag_CM`, `observation_CM`, `medicine_CM`, `indication_CM`, `attach_CM`) VALUES
(1, '2', '2021-04-05', '07:00:00', '1', '25', '13', '121', '', '', '12/21', 'Me duele la cabeza ', 'Covid\nGripe Normal', 'Covid', 'Debe permanecer en aislamiento', 'Paracetamol\nIbuprofenos', '1 Capsula cada 8 horas\n2 Capsulas cada 12 horas', 'PDF-606b4c80d90f42.53963584.pdf'),
(4, '4', '2021-04-06', '07:00:00', '4', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(6, '4', '2021-04-06', '07:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(7, '5', '2021-04-06', '07:40:00', '1', '37', '98', '98', '65', '170', '98/14', 'Dolor de cabeza', 'Dolor de cabeza intenso', '', '', '1. Paracetamol', '1. Tomar 2 veces al dias despues de comidas', 'default.pdf'),
(8, '5', '2021-04-15', '07:00:00', '1', '38', '77', '98', '77', '180', '48/100', 'Dolor de garganta y cabeza', 'Covid 19', 'Prueba positivo de Covid 19', 'Realizar la prueba de covid 19', '1. Analgan', '1. Tomar despues de cada comida', 'default.pdf'),
(9, '5', '2021-04-20', '07:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(10, '5', '2021-04-29', '07:20:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(11, '6', '2021-04-06', '07:00:00', '5', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(12, '6', '2021-04-13', '08:40:00', '5', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(13, '6', '2021-04-19', '09:00:00', '5', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(20, '9', '2021-04-06', '09:40:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(22, '10', '2021-05-04', '11:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(27, '11', '2021-04-15', '10:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(28, '11', '2021-04-06', '10:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(29, '11', '2021-05-04', '07:40:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(30, '11', '2021-05-13', '07:40:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(31, '11', '2021-06-14', '07:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(34, '13', '2021-04-08', '07:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(35, '13', '2021-04-12', '07:00:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf'),
(38, '14', '2021-04-15', '07:40:00', '11', '36', '98', '77', '69', '200', '16/150', 'Dolor de estomago', 'Gastritis', '', 'Realizar examenes de sangre', '1. Paracetamol', '', 'default.pdf'),
(43, '16', '2021-04-06', '10:40:00', '15', '', '', '', '', '', '', '', '', '', '', '', '', 'default.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_od_data`
--

CREATE TABLE `app_od_data` (
  `id_CO` int(10) NOT NULL,
  `patient_CO` int(10) NOT NULL,
  `date_CO` date NOT NULL,
  `hour_CO` time NOT NULL,
  `doctor_CO` int(10) NOT NULL,
  `description_CO` varchar(1000) NOT NULL,
  `posibleDiag_CO` varchar(800) NOT NULL,
  `definitiveDiag_CO` varchar(800) NOT NULL,
  `observation_CO` varchar(800) NOT NULL,
  `medicine_CO` varchar(800) NOT NULL,
  `indication_CO` varchar(800) NOT NULL,
  `attach_CO` varchar(100) NOT NULL DEFAULT 'default.pdf'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_od_data`
--

INSERT INTO `app_od_data` (`id_CO`, `patient_CO`, `date_CO`, `hour_CO`, `doctor_CO`, `description_CO`, `posibleDiag_CO`, `definitiveDiag_CO`, `observation_CO`, `medicine_CO`, `indication_CO`, `attach_CO`) VALUES
(2, 2, '2021-04-06', '09:20:00', 2, 'Le duele la muela', 'Muela con caries', 'Encias inflamadas, dientes sensibles', 'El paciente come demasiados dulces', 'Paracetamol', '', 'default.pdf'),
(5, 4, '2021-04-06', '07:40:00', 3, '', '', '', '', '', '', 'default.pdf'),
(14, 7, '2021-04-06', '07:00:00', 13, '', '', '', '', '', '', 'default.pdf'),
(15, 7, '2021-04-13', '07:20:00', 13, '', '', '', '', '', '', 'default.pdf'),
(16, 7, '2021-05-12', '07:40:00', 13, '', '', '', '', '', '', 'default.pdf'),
(17, 9, '2021-04-06', '07:00:00', 16, '', '', '', '', '', '', 'default.pdf'),
(18, 9, '2021-04-15', '09:20:00', 16, '', '', '', '', '', '', 'default.pdf'),
(19, 9, '2021-06-15', '07:00:00', 16, '', '', '', '', '', '', 'default.pdf'),
(23, 10, '2021-04-06', '12:40:00', 8, '', '', '', '', '', '', 'default.pdf'),
(24, 10, '2021-04-15', '13:20:00', 8, '', '', '', '', '', '', 'default.pdf'),
(25, 10, '2021-04-20', '11:20:00', 8, '', '', '', '', '', '', 'default.pdf'),
(26, 10, '2021-05-04', '11:40:00', 8, '', '', '', '', '', '', 'default.pdf'),
(32, 12, '2021-04-06', '07:20:00', 16, '', '', '', '', '', '', 'default.pdf'),
(33, 12, '2021-04-08', '08:00:00', 16, '', '', '', '', '', '', 'default.pdf'),
(36, 14, '2021-04-06', '13:00:00', 6, '', '', '', '', '', '', 'default.pdf'),
(37, 14, '2021-04-13', '13:00:00', 6, '', '', '', '', '', '', 'default.pdf'),
(40, 15, '2021-04-13', '07:40:00', 14, '', '', '', '', '', '', 'default.pdf'),
(42, 15, '2021-05-14', '09:20:00', 14, '', '', '', '', '', '', 'default.pdf'),
(45, 16, '2021-04-26', '18:20:00', 14, '', '', '', '', '', '', 'default.pdf'),
(46, 16, '2021-04-13', '09:00:00', 14, '', '', '', '', '', '', 'default.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_od_gr`
--

CREATE TABLE `app_od_gr` (
  `id_GR` int(10) NOT NULL,
  `id_CO` int(10) NOT NULL,
  `18_odt` varchar(100) NOT NULL,
  `28_odt` varchar(100) NOT NULL,
  `17_odt` varchar(100) NOT NULL,
  `27_odt` varchar(100) NOT NULL,
  `16_odt` varchar(100) NOT NULL,
  `26_odt` varchar(100) NOT NULL,
  `15_odt` varchar(100) NOT NULL,
  `25_odt` varchar(100) NOT NULL,
  `14_odt` varchar(100) NOT NULL,
  `24_odt` varchar(100) NOT NULL,
  `13_odt` varchar(100) NOT NULL,
  `23_odt` varchar(100) NOT NULL,
  `12_odt` varchar(100) NOT NULL,
  `22_odt` varchar(100) NOT NULL,
  `11_odt` varchar(100) NOT NULL,
  `21_odt` varchar(100) NOT NULL,
  `41_odt` varchar(100) NOT NULL,
  `31_odt` varchar(100) NOT NULL,
  `42_odt` varchar(100) NOT NULL,
  `32_odt` varchar(100) NOT NULL,
  `43_odt` varchar(100) NOT NULL,
  `33_odt` varchar(100) NOT NULL,
  `44_odt` varchar(100) NOT NULL,
  `34_odt` varchar(100) NOT NULL,
  `45_odt` varchar(100) NOT NULL,
  `35_odt` varchar(100) NOT NULL,
  `46_odt` varchar(100) NOT NULL,
  `36_odt` varchar(100) NOT NULL,
  `47_odt` varchar(100) NOT NULL,
  `37_odt` varchar(100) NOT NULL,
  `48_odt` varchar(100) NOT NULL,
  `38_odt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_od_gr`
--

INSERT INTO `app_od_gr` (`id_GR`, `id_CO`, `18_odt`, `28_odt`, `17_odt`, `27_odt`, `16_odt`, `26_odt`, `15_odt`, `25_odt`, `14_odt`, `24_odt`, `13_odt`, `23_odt`, `12_odt`, `22_odt`, `11_odt`, `21_odt`, `41_odt`, `31_odt`, `42_odt`, `32_odt`, `43_odt`, `33_odt`, `44_odt`, `34_odt`, `45_odt`, `35_odt`, `46_odt`, `36_odt`, `47_odt`, `37_odt`, `48_odt`, `38_odt`) VALUES
(1, 2, 'sarro', 'amarillo', '', 'caries', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'caries'),
(2, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sarro', '', '', '', '', '', '', '', '', '', '', '', '', 'Carie', '', '', ''),
(3, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_reservation`
--

CREATE TABLE `app_reservation` (
  `id_App` int(11) NOT NULL,
  `id_HC` int(10) NOT NULL,
  `patient_App` varchar(50) NOT NULL,
  `id_Dc` int(10) NOT NULL,
  `doctor_App` varchar(50) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `state_App` varchar(2) NOT NULL DEFAULT 'PD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_reservation`
--

INSERT INTO `app_reservation` (`id_App`, `id_HC`, `patient_App`, `id_Dc`, `doctor_App`, `start`, `end`, `state_App`) VALUES
(1, 2, 'Tomas Carnero', 1, 'Valeria Lopez', '2021-04-05 07:00:00', '2021-04-05 07:20:00', 'DC'),
(2, 2, 'Tomas Carnero', 2, 'Arlete Barreno', '2021-04-06 09:20:00', '2021-04-06 09:40:00', 'DC'),
(3, 3, 'Ignacio Gonzalez', 2, 'Arlete Barreno', '2021-04-06 09:00:00', '2021-04-06 09:20:00', 'AC'),
(4, 4, 'Maria Belen Ceron', 4, 'Hector Lozano', '2021-04-06 07:00:00', '2021-04-06 07:20:00', 'AC'),
(5, 4, 'Maria Belen Ceron', 3, 'Domenica Viera', '2021-04-06 07:40:00', '2021-04-06 08:00:00', 'AC'),
(6, 4, 'Maria Belen Ceron', 1, 'Valeria Lopez', '2021-04-06 07:00:00', '2021-04-06 07:20:00', 'AC'),
(7, 5, 'Marta Astudillo', 1, 'Valeria Lopez', '2021-04-06 07:40:00', '2021-04-06 08:00:00', 'AC'),
(8, 5, 'Marta Astudillo', 1, 'Valeria Lopez', '2021-04-15 07:00:00', '2021-04-15 07:20:00', 'AC'),
(9, 5, 'Marta Astudillo', 1, 'Valeria Lopez', '2021-04-20 07:00:00', '2021-04-20 07:20:00', 'AC'),
(10, 5, 'Marta Astudillo', 1, 'Valeria Lopez', '2021-04-29 07:20:00', '2021-04-29 07:40:00', 'AC'),
(11, 6, 'Victor Cevallos', 5, 'Cristina Mendez', '2021-04-06 07:00:00', '2021-04-06 07:20:00', 'AC'),
(12, 6, 'Victor Cevallos', 5, 'Cristina Mendez', '2021-04-13 08:40:00', '2021-04-13 09:00:00', 'AC'),
(13, 6, 'Victor Cevallos', 5, 'Cristina Mendez', '2021-04-19 09:00:00', '2021-04-19 09:20:00', 'AC'),
(14, 7, 'Galo Arce', 13, 'Roberto Martinez', '2021-04-06 07:00:00', '2021-04-06 07:20:00', 'AC'),
(15, 7, 'Galo Arce', 13, 'Roberto Martinez', '2021-04-13 07:20:00', '2021-04-13 07:40:00', 'AC'),
(16, 7, 'Galo Arce', 13, 'Roberto Martinez', '2021-05-12 07:40:00', '2021-05-12 08:00:00', 'AC'),
(17, 9, 'Renato Cisneros', 16, 'Edwin Puetman', '2021-04-06 07:00:00', '2021-04-06 07:20:00', 'AC'),
(18, 9, 'Renato Cisneros', 16, 'Edwin Puetman', '2021-04-15 09:20:00', '2021-04-15 09:40:00', 'AC'),
(19, 9, 'Renato Cisneros', 16, 'Edwin Puetman', '2021-06-15 07:00:00', '2021-06-15 07:20:00', 'AC'),
(20, 9, 'Renato Cisneros', 1, 'Valeria Lopez', '2021-04-06 09:40:00', '2021-04-06 10:00:00', 'AC'),
(21, 10, 'Madelin Rivera', 1, 'Valeria Lopez', '2021-04-15 08:40:00', '2021-04-15 09:00:00', 'PD'),
(22, 10, 'Madelin Rivera', 1, 'Valeria Lopez', '2021-05-04 11:00:00', '2021-05-04 11:20:00', 'AC'),
(23, 10, 'Madelin Rivera', 8, 'Karina Velez', '2021-04-06 12:40:00', '2021-04-06 13:00:00', 'AC'),
(24, 10, 'Madelin Rivera', 8, 'Karina Velez', '2021-04-15 13:20:00', '2021-04-15 13:40:00', 'AC'),
(25, 10, 'Madelin Rivera', 8, 'Karina Velez', '2021-04-20 11:20:00', '2021-04-20 11:40:00', 'AC'),
(26, 10, 'Madelin Rivera', 8, 'Karina Velez', '2021-05-04 11:40:00', '2021-05-04 12:00:00', 'AC'),
(27, 11, 'Josefina Susapana', 1, 'Valeria Lopez', '2021-04-15 10:00:00', '2021-04-15 10:20:00', 'AC'),
(28, 11, 'Josefina Susapana', 1, 'Valeria Lopez', '2021-04-06 10:00:00', '2021-04-06 10:20:00', 'AC'),
(29, 11, 'Josefina Susapana', 1, 'Valeria Lopez', '2021-05-04 07:40:00', '2021-05-04 08:00:00', 'AC'),
(30, 11, 'Josefina Susapana', 1, 'Valeria Lopez', '2021-05-13 07:40:00', '2021-05-13 08:00:00', 'AC'),
(31, 11, 'Josefina Susapana', 1, 'Valeria Lopez', '2021-06-14 07:00:00', '2021-06-14 07:20:00', 'AC'),
(32, 12, 'Leonela Samuisa', 16, 'Edwin Puetman', '2021-04-06 07:20:00', '2021-04-06 07:40:00', 'AC'),
(33, 12, 'Leonela Samuisa', 16, 'Edwin Puetman', '2021-04-08 08:00:00', '2021-04-08 08:20:00', 'AC'),
(34, 13, 'Sandro Calero', 1, 'Valeria Lopez', '2021-04-08 07:00:00', '2021-04-08 07:20:00', 'AC'),
(35, 13, 'Sandro Calero', 1, 'Valeria Lopez', '2021-04-12 07:00:00', '2021-04-12 07:20:00', 'AC'),
(36, 14, 'Jonathan Mora', 6, 'Julio Zhamungui', '2021-04-06 13:00:00', '2021-04-06 13:20:00', 'AC'),
(37, 14, 'Jonathan Mora', 6, 'Julio Zhamungui', '2021-04-13 13:00:00', '2021-04-13 13:20:00', 'AC'),
(38, 14, 'Jonathan Mora', 11, 'Juan Osorio', '2021-04-15 07:40:00', '2021-04-15 08:00:00', 'AC'),
(39, 14, 'Jonathan Mora', 11, 'Juan Osorio', '2021-05-04 07:00:00', '2021-05-04 07:20:00', 'PD'),
(40, 15, 'Viviana Echeverria', 14, 'Jesus Garcia', '2021-04-13 07:40:00', '2021-04-13 08:00:00', 'AC'),
(41, 15, 'Viviana Echeverria', 14, 'Jesus Garcia', '2021-04-16 08:00:00', '2021-04-16 08:20:00', 'PD'),
(42, 15, 'Viviana Echeverria', 14, 'Jesus Garcia', '2021-05-14 09:20:00', '2021-05-14 09:40:00', 'AC'),
(43, 16, 'Luvi Alarcon', 15, 'Alma Montemayor', '2021-04-06 10:40:00', '2021-04-06 11:00:00', 'AC'),
(44, 16, 'Luvi Alarcon', 15, 'Alma Montemayor', '2021-04-21 10:40:00', '2021-04-21 11:00:00', 'PD'),
(45, 16, 'Luvi Alarcon', 14, 'Jesus Garcia', '2021-04-26 18:20:00', '2021-04-26 18:40:00', 'AC'),
(46, 16, 'Luvi Alarcon', 14, 'Jesus Garcia', '2021-04-13 09:00:00', '2021-04-13 09:20:00', 'AC'),
(47, 16, 'Luvi Alarcon', 14, 'Jesus Garcia', '2021-04-16 18:20:00', '2021-04-16 18:40:00', 'PD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar_days`
--

CREATE TABLE `calendar_days` (
  `id_Days` int(10) NOT NULL,
  `id_Dc` int(10) NOT NULL,
  `monday` varchar(3) NOT NULL,
  `tuesday` varchar(3) NOT NULL,
  `wednesday` varchar(3) NOT NULL,
  `thursday` varchar(3) NOT NULL,
  `friday` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calendar_days`
--

INSERT INTO `calendar_days` (`id_Days`, `id_Dc`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(1, 1, 'yes', 'yes', 'no', 'yes', 'yes'),
(2, 2, 'no', 'yes', 'no', 'yes', 'no'),
(3, 3, 'no', 'yes', 'yes', 'no', 'no'),
(4, 4, 'no', 'yes', 'yes', 'no', 'no'),
(5, 5, 'yes', 'yes', 'yes', 'no', 'no'),
(6, 6, 'no', 'yes', 'yes', 'yes', 'no'),
(7, 7, 'yes', 'yes', 'yes', 'no', 'no'),
(8, 8, 'no', 'yes', 'yes', 'yes', 'no'),
(9, 9, 'yes', 'yes', 'yes', 'no', 'no'),
(10, 10, 'yes', 'yes', 'yes', 'yes', 'yes'),
(11, 11, 'no', 'yes', 'no', 'yes', 'no'),
(12, 12, 'no', 'no', 'yes', 'yes', 'yes'),
(13, 13, 'yes', 'yes', 'yes', 'yes', 'yes'),
(14, 14, 'yes', 'yes', 'no', 'no', 'yes'),
(15, 15, 'yes', 'yes', 'yes', 'yes', 'yes'),
(16, 16, 'no', 'yes', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar_hours`
--

CREATE TABLE `calendar_hours` (
  `id_Hours` int(10) NOT NULL,
  `id_Dc` int(10) NOT NULL,
  `07:00` varchar(3) NOT NULL,
  `07:20` varchar(3) NOT NULL,
  `07:40` varchar(3) NOT NULL,
  `08:00` varchar(3) NOT NULL,
  `08:20` varchar(3) NOT NULL,
  `08:40` varchar(3) NOT NULL,
  `09:00` varchar(3) NOT NULL,
  `09:20` varchar(3) NOT NULL,
  `09:40` varchar(3) NOT NULL,
  `10:00` varchar(3) NOT NULL,
  `10:20` varchar(3) NOT NULL,
  `10:40` varchar(3) NOT NULL,
  `11:00` varchar(3) NOT NULL,
  `11:20` varchar(3) NOT NULL,
  `11:40` varchar(3) NOT NULL,
  `12:00` varchar(3) NOT NULL,
  `12:20` varchar(3) NOT NULL,
  `12:40` varchar(3) NOT NULL,
  `13:00` varchar(3) NOT NULL,
  `13:20` varchar(3) NOT NULL,
  `13:40` varchar(3) NOT NULL,
  `14:00` varchar(3) NOT NULL,
  `14:20` varchar(3) NOT NULL,
  `14:40` varchar(3) NOT NULL,
  `15:00` varchar(3) NOT NULL,
  `15:20` varchar(3) NOT NULL,
  `15:40` varchar(3) NOT NULL,
  `16:00` varchar(3) NOT NULL,
  `16:20` varchar(3) NOT NULL,
  `16:40` varchar(3) NOT NULL,
  `17:00` varchar(3) NOT NULL,
  `17:20` varchar(3) NOT NULL,
  `17:40` varchar(3) NOT NULL,
  `18:00` varchar(3) NOT NULL,
  `18:20` varchar(3) NOT NULL,
  `18:40` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calendar_hours`
--

INSERT INTO `calendar_hours` (`id_Hours`, `id_Dc`, `07:00`, `07:20`, `07:40`, `08:00`, `08:20`, `08:40`, `09:00`, `09:20`, `09:40`, `10:00`, `10:20`, `10:40`, `11:00`, `11:20`, `11:40`, `12:00`, `12:20`, `12:40`, `13:00`, `13:20`, `13:40`, `14:00`, `14:20`, `14:40`, `15:00`, `15:20`, `15:40`, `16:00`, `16:20`, `16:40`, `17:00`, `17:20`, `17:40`, `18:00`, `18:20`, `18:40`) VALUES
(1, 1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(2, 2, 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(3, 3, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(4, 4, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(5, 5, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(6, 6, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(7, 7, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(8, 8, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(9, 9, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(10, 10, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(11, 11, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(12, 12, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(13, 13, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(14, 14, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(15, 15, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(16, 16, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `id_Dc` int(10) NOT NULL,
  `name_Dc` varchar(50) NOT NULL,
  `lastName_Dc` varchar(50) NOT NULL,
  `user_Dc` varchar(20) NOT NULL,
  `pass_Dc` varchar(50) NOT NULL,
  `cedula_Dc` varchar(10) NOT NULL,
  `phone_Dc` varchar(10) NOT NULL,
  `email_Dc` varchar(50) NOT NULL,
  `address_Dc` varchar(50) NOT NULL,
  `date_Dc` date NOT NULL,
  `gender_Dc` varchar(50) NOT NULL,
  `ocuppation_Dc` varchar(20) NOT NULL,
  `state_Dc` varchar(2) NOT NULL DEFAULT 'AC'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`id_Dc`, `name_Dc`, `lastName_Dc`, `user_Dc`, `pass_Dc`, `cedula_Dc`, `phone_Dc`, `email_Dc`, `address_Dc`, `date_Dc`, `gender_Dc`, `ocuppation_Dc`, `state_Dc`) VALUES
(1, 'Valeria', 'Lopez', 'vale19', '7ea228d21b5e02bf254d7cba5053133d', '1705113316', '0996884776', 'valeria69@gmail.com', 'Av. Victor Hugo', '2021-03-09', 'Femenino', 'Medicina General', 'AC'),
(2, 'Arlete', 'Barreno', 'tete35', '2ed16969114520e653151fa0a6e1eb77', '1805010216', '0995078477', 'barreno@gmail.com', 'La Condamine 3', '2021-03-14', 'Femenino', 'Odontologia', 'AC'),
(3, 'Domenica', 'Viera', 'dome25', 'abe58addfc6ce3daa2a1e0b8e62f83c9', '1805123216', '0996188477', 'dome@gmail.com', 'Ficoa', '2021-03-24', 'Femenino', 'Odontologia', 'AC'),
(4, 'Hector', 'Lozano', 'lozano32', 'ae4ddc8c941de3e22d5c4f987806c00b', '1705332216', '0994188477', 'lozano@gmail.com', 'Guamani', '2021-04-13', 'Otro', 'Medicina General', 'AC'),
(5, 'Cristina', 'Mendez', 'cristina', 'bb020008565b6844c327ccd4c6fac766', '1003238829', '0887789234', 'cristina@espe.edu.ec', 'Vicentina', '1987-02-14', 'Femenino', 'Medicina General', 'AC'),
(6, 'Julio', 'Zhamungui', 'julio', '62398fb63509f679f2128ea6a44a7f9a', '1101351904', '08879654', 'julio@espe.edu.ec', 'Conocoto', '1977-06-14', 'Masculino', 'Odontologia', 'AC'),
(7, 'Jessica', 'Aguilar', 'jessi12', 'b93ed3ecb5ddbfd87f12370c04460af0', '1205621541', '08876765', 'jessi@hotmail.com', 'Vicentina y Acceso 5', '1956-12-14', 'Femenino', 'Medicina General', 'AC'),
(8, 'Karina', 'Velez', 'karina1', 'd540f6ec39cc713902a749f22d5aae51', '1310359730', '09987891', 'karina@gmail.com', 'Playa Chica', '1988-12-14', 'Femenino', 'Odontologia', 'AC'),
(9, 'Carmen', 'Armijos', 'carmen15', 'e275df45ce00dcbf1816aa75bd3f60c6', '1500630684', '0998987698', 'carmen@outlook.com', 'Avenida Zamora y Acceso 5', '1998-11-28', 'Femenino', 'Odontologia', 'AC'),
(10, 'Marcos', 'Tapia', 'marcos11', 'c4c62424df7c11291eab30691047315d', '1713695987', '0998898765', 'marcos11@hotmail.com', 'Carcelen', '1987-12-15', 'Masculino', 'Medicina General', 'AC'),
(11, 'Juan', 'Osorio', 'juanito', 'e154b165aa6fd89956022d39941114f4', '1713755534', '0998878654', 'juanito@gmail.com', 'New York y Riofrio', '1985-12-16', 'Masculino', 'Medicina General', 'AC'),
(12, 'Cristian', 'Puruncajas', 'cris2', '4e45d9a24ecd93d6255eeb798d2c0724', '1714229224', '0997787654', 'cristian12@hotmail.com', 'Armenia Alta', '1998-09-15', 'Masculino', 'Medicina General', 'AC'),
(13, 'Roberto', 'Martinez', 'robert23', '08cef6d399c155bb13e4a6244d249128', '1714754817', '0997765432', 'robert23@gmail.com', 'Playa Chica', '2000-12-28', 'Masculino', 'Odontologia', 'AC'),
(14, 'Jesus', 'Garcia', 'jesus12', '8d53de8442b59f218288dfab49543638', '1715423065', '0998876761', 'jesus_garcia@gmail.com', 'Playa Chica', '1965-12-25', 'Masculino', 'Odontologia', 'AC'),
(15, 'Alma', 'Montemayor', 'alma12', '9aa79e624166e878dcea3883a5904eb9', '1715502256', '0998909812', 'alma123@gmail.com', 'Conocoto', '1999-01-01', 'Femenino', 'Medicina General', 'AC'),
(16, 'Edwin', 'Puetman', 'edwin14', 'b86c6161d7d123a74c31866b8d8479d6', '1715615819', '0997789876', 'eapuetman@espe.edu.ec', 'Carcelen', '1965-02-22', 'Masculino', 'Odontologia', 'AC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hc_data`
--

CREATE TABLE `hc_data` (
  `id_HC` int(10) NOT NULL,
  `name_HC` varchar(50) NOT NULL,
  `lastName_HC` varchar(50) NOT NULL,
  `cedula_HC` varchar(10) NOT NULL,
  `passport_HC` varchar(10) NOT NULL,
  `phone_HC` varchar(10) NOT NULL,
  `address_HC` varchar(50) NOT NULL,
  `gender_HC` varchar(20) NOT NULL,
  `dateOB_HC` date NOT NULL,
  `placeOB_HC` varchar(50) NOT NULL,
  `nationality_HC` varchar(50) NOT NULL,
  `etnia_HC` varchar(50) NOT NULL,
  `civilState_HC` varchar(20) NOT NULL,
  `religion_HC` varchar(20) NOT NULL,
  `primary_HC` varchar(3) NOT NULL DEFAULT 'no',
  `highSchool_HC` varchar(3) NOT NULL DEFAULT 'no',
  `university_HC` varchar(3) NOT NULL DEFAULT 'no',
  `master_HC` varchar(3) NOT NULL DEFAULT 'no',
  `doctorate_HC` varchar(3) NOT NULL DEFAULT 'no',
  `postgrad_HC` varchar(3) NOT NULL DEFAULT 'no',
  `career_HC` varchar(30) NOT NULL,
  `semester_HC` varchar(10) NOT NULL,
  `job_HC` varchar(50) NOT NULL,
  `bloodType_HC` varchar(20) NOT NULL,
  `weight_HC` varchar(8) NOT NULL,
  `height_HC` varchar(8) NOT NULL,
  `hand_HC` varchar(20) NOT NULL,
  `insurance_HC` varchar(50) NOT NULL,
  `dead_HC` varchar(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hc_data`
--

INSERT INTO `hc_data` (`id_HC`, `name_HC`, `lastName_HC`, `cedula_HC`, `passport_HC`, `phone_HC`, `address_HC`, `gender_HC`, `dateOB_HC`, `placeOB_HC`, `nationality_HC`, `etnia_HC`, `civilState_HC`, `religion_HC`, `primary_HC`, `highSchool_HC`, `university_HC`, `master_HC`, `doctorate_HC`, `postgrad_HC`, `career_HC`, `semester_HC`, `job_HC`, `bloodType_HC`, `weight_HC`, `height_HC`, `hand_HC`, `insurance_HC`, `dead_HC`) VALUES
(2, 'Tomas', 'Carnero', '1805131469', '', '095558344', '', 'Masculino', '2021-03-02', 'Pichincha', '', '', 'Soltero', '', 'no', 'no', 'no', 'no', 'no', 'no', 'Software', '', '', '', '', '', '', '', 'no'),
(3, 'Ignacio', 'Gonzalez', '1805131479', '', '0994046311', '', 'Femenino', '1995-02-26', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(4, 'Maria Belen', 'Ceron', '1724266091', '', '0997702037', '', 'Femenino', '2000-12-28', 'Pichincha', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(5, 'Marta', 'Astudillo', '1103487086', '', '0779923128', '', 'Masculino', '2005-02-14', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(6, 'Victor', 'Cevallos', '1304072034', '', '07798234', '', 'Masculino', '1969-06-14', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(7, 'Galo', 'Arce', '1310828171', '', '08897023', '', 'Masculino', '1987-12-28', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(8, 'Miler', 'Loayza', '702770660', '', '022521979', '', 'Masculino', '1998-11-16', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'yes'),
(9, 'Renato', 'Cisneros', '1311956534', '', '0997702037', '', 'Masculino', '1955-05-16', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(10, 'Madelin', 'Rivera', '1717301491', '', '08898765', '', 'Femenino', '1978-12-16', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(11, 'Josefina', 'Susapana', '1720783693', '', '0889976789', '', 'Femenino', '1948-12-14', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(12, 'Leonela', 'Samuisa', '1721926390', '', '08897123', '', 'Femenino', '2006-06-26', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(13, 'Sandro', 'Calero', '1722182886', '', '08878731', '', 'Masculino', '2010-08-26', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(14, 'Jonathan', 'Mora', '1718296518', '', '0996657891', '', 'Masculino', '1992-11-14', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(15, 'Viviana', 'Echeverria', '1600312217', '', '09909987', '', 'Femenino', '1989-02-16', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(16, 'Luvi', 'Alarcon', '1303092066', '', '09989768', '', 'Femenino', '1945-06-18', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no'),
(17, 'Segundo', 'Napon', '1714525530', '', '0885567432', '', 'Masculino', '1988-10-28', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hc_fam`
--

CREATE TABLE `hc_fam` (
  `id_Fam` int(10) NOT NULL,
  `id_HC` int(10) NOT NULL,
  `parentalAnt_HC` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hc_fam`
--

INSERT INTO `hc_fam` (`id_Fam`, `id_HC`, `parentalAnt_HC`) VALUES
(1, 2, 'Padre murio de diabetes'),
(2, 3, 'No hay registro'),
(3, 4, 'No hay registro'),
(4, 5, 'No hay registro'),
(5, 6, 'No hay registro'),
(6, 7, 'No hay registro'),
(7, 8, 'No hay registro'),
(8, 9, 'No hay registro'),
(9, 10, 'No hay registro'),
(10, 11, 'No hay registro'),
(11, 12, 'No hay registro'),
(12, 13, 'No hay registro'),
(13, 14, 'No hay registro'),
(14, 15, 'No hay registro'),
(15, 16, 'No hay registro'),
(16, 17, 'No hay registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hc_per`
--

CREATE TABLE `hc_per` (
  `id_Per` int(10) NOT NULL,
  `id_HC` int(10) NOT NULL,
  `pato_HC` varchar(800) NOT NULL,
  `quiru_HC` varchar(800) NOT NULL,
  `trau_HC` varchar(800) NOT NULL,
  `toxic_HC` varchar(800) NOT NULL,
  `psiqui_HC` varchar(800) NOT NULL,
  `bloodTrf_HC` varchar(800) NOT NULL,
  `gineco_HC` varchar(800) NOT NULL,
  `tetanos_HC` varchar(3) NOT NULL DEFAULT 'no',
  `yellowFever_HC` varchar(3) NOT NULL DEFAULT 'no',
  `rabia_HC` varchar(3) NOT NULL DEFAULT 'no',
  `bcg_HC` varchar(3) NOT NULL DEFAULT 'no',
  `vhb_HC` varchar(3) NOT NULL DEFAULT 'no',
  `vaccinationOther_HC` varchar(50) NOT NULL,
  `alimentation_HC` varchar(800) NOT NULL,
  `miccion_HC` varchar(800) NOT NULL,
  `defecatorio_HC` varchar(800) NOT NULL,
  `alcohol_HC` varchar(800) NOT NULL,
  `tobbaco_HC` varchar(800) NOT NULL,
  `drugs_HC` varchar(800) NOT NULL,
  `biomasa_HC` varchar(800) NOT NULL,
  `exercise_HC` varchar(800) NOT NULL,
  `medication_HC` varchar(800) NOT NULL,
  `alergy_HC` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hc_per`
--

INSERT INTO `hc_per` (`id_Per`, `id_HC`, `pato_HC`, `quiru_HC`, `trau_HC`, `toxic_HC`, `psiqui_HC`, `bloodTrf_HC`, `gineco_HC`, `tetanos_HC`, `yellowFever_HC`, `rabia_HC`, `bcg_HC`, `vhb_HC`, `vaccinationOther_HC`, `alimentation_HC`, `miccion_HC`, `defecatorio_HC`, `alcohol_HC`, `tobbaco_HC`, `drugs_HC`, `biomasa_HC`, `exercise_HC`, `medication_HC`, `alergy_HC`) VALUES
(1, 2, 'Estos son datos Patologicos', 'Estos son datos Patologicos', 'Estos son datos Patologicos', '', '', '', 'Estos son datos ginecologicos', 'yes', 'yes', 'no', 'no', 'yes', '', 'Como solo dos veces al dia', '', '', '', '', '', '', '', 'Esta medicina se ha tomado', ''),
(2, 3, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(3, 4, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(4, 5, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(5, 6, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(6, 7, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(7, 8, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(8, 9, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(9, 10, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(10, 11, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(11, 12, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(12, 13, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(13, 14, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(14, 15, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(15, 16, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', ''),
(16, 17, 'No hay registro', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id_Prof` int(10) NOT NULL,
  `userType_Prof` varchar(50) NOT NULL,
  `name_Prof` varchar(50) NOT NULL,
  `lastName_Prof` varchar(50) NOT NULL,
  `user_Prof` varchar(50) NOT NULL,
  `pass_Prof` varchar(50) NOT NULL,
  `cedula_Prof` varchar(10) NOT NULL,
  `phone_Prof` varchar(10) NOT NULL,
  `email_Prof` varchar(50) NOT NULL,
  `address_Prof` varchar(50) NOT NULL,
  `date_Prof` date NOT NULL,
  `gender_Prof` varchar(50) NOT NULL,
  `state_Prof` varchar(2) NOT NULL DEFAULT 'AC'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id_Prof`, `userType_Prof`, `name_Prof`, `lastName_Prof`, `user_Prof`, `pass_Prof`, `cedula_Prof`, `phone_Prof`, `email_Prof`, `address_Prof`, `date_Prof`, `gender_Prof`, `state_Prof`) VALUES
(1, 'Administrador', 'David', 'Fonseca', 'dalopez18', '482c811da5d5b4bc6d497ffa98491e38', '1805111125', '0995058299', 'dalopez18@espe.edu.ec', 'Las Catilinarias', '2021-03-09', 'Masculino', 'AC'),
(2, 'Enfermero', 'Betty', 'Dacto', 'betfons12', 'e6cedb88fdade6d64cff226d18930a96', '1805111126', '0995052898', 'dalf2798@gmail.com', 'La floresta', '2021-03-23', 'Femenino', 'AC'),
(4, 'Secretario', 'Angel', 'Padilla', 'angel17', '8f0cdacfbe7f5078c45bd84e88c2155a', '1805111131', '0995053889', 'angel@gmail.com', 'La floresta 3', '2021-03-23', 'Masculino', 'AC'),
(14, 'Enfermero', 'Maria Belen', 'Ceron', 'mabe', '24046514de448047b9799d501a01bebf', '1724266091', '0997702037', 'mbceron@espe.edu.ec', 'Playa Chica', '2000-12-28', 'Femenino', 'AC'),
(15, 'Secretario', 'Jose Antonio', 'Olivares', 'joselito', '90e528618534d005b1a7e7b7a367813f', '1707276190', '0998876751', 'joselito@gmail.com', 'Villaflora', '1989-12-21', 'Masculino', 'AC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `app_mg`
--
ALTER TABLE `app_mg`
  ADD PRIMARY KEY (`id_CM`);

--
-- Indices de la tabla `app_od_data`
--
ALTER TABLE `app_od_data`
  ADD PRIMARY KEY (`id_CO`);

--
-- Indices de la tabla `app_od_gr`
--
ALTER TABLE `app_od_gr`
  ADD PRIMARY KEY (`id_GR`);

--
-- Indices de la tabla `app_reservation`
--
ALTER TABLE `app_reservation`
  ADD PRIMARY KEY (`id_App`);

--
-- Indices de la tabla `calendar_days`
--
ALTER TABLE `calendar_days`
  ADD PRIMARY KEY (`id_Days`);

--
-- Indices de la tabla `calendar_hours`
--
ALTER TABLE `calendar_hours`
  ADD PRIMARY KEY (`id_Hours`);

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id_Dc`);

--
-- Indices de la tabla `hc_data`
--
ALTER TABLE `hc_data`
  ADD PRIMARY KEY (`id_HC`);

--
-- Indices de la tabla `hc_fam`
--
ALTER TABLE `hc_fam`
  ADD PRIMARY KEY (`id_Fam`);

--
-- Indices de la tabla `hc_per`
--
ALTER TABLE `hc_per`
  ADD PRIMARY KEY (`id_Per`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_Prof`),
  ADD KEY `userType_Prof` (`userType_Prof`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `app_od_data`
--
ALTER TABLE `app_od_data`
  MODIFY `id_CO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `app_od_gr`
--
ALTER TABLE `app_od_gr`
  MODIFY `id_GR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `app_reservation`
--
ALTER TABLE `app_reservation`
  MODIFY `id_App` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `calendar_days`
--
ALTER TABLE `calendar_days`
  MODIFY `id_Days` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `calendar_hours`
--
ALTER TABLE `calendar_hours`
  MODIFY `id_Hours` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id_Dc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `hc_data`
--
ALTER TABLE `hc_data`
  MODIFY `id_HC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `hc_fam`
--
ALTER TABLE `hc_fam`
  MODIFY `id_Fam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `hc_per`
--
ALTER TABLE `hc_per`
  MODIFY `id_Per` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_Prof` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2022 a las 15:30:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `filrouge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id_client`, `fname`, `phone`, `email`, `pwd`) VALUES
(1, 'omar', '0771449505', 'omarkandildw@gmail.Com', 'omaromarA'),
(2, 'oks', '0602388945', 'omarkandildw@gmail.com', 'apzaaza'),
(3, 'Soufiane', '0602388945', 'kandildotcom@gmail.com', 'ddfdf'),
(4, 'Fatima', '0655554561', 'omarkandildw@gmail.com', 'sdlds'),
(5, 'faxfoxa', '0687606072', 'faxi@mail.Com', 'faxifaxfox'),
(6, 'faxfoxa', '0687606072', 'faxi@mail.Com', 'faxifaxfox'),
(7, 'faxfoxa', '0687606072', 'faxi@mail.Com', 'omaromar'),
(8, 'faxfoxa', '0687606072', 'omarkandildw@gmail.Com', 'azd'),
(9, 'faxi', '0625143591', 'oom@gmail.Com', '2325');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulation`
--

CREATE TABLE `simulation` (
  `id_simu` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `poids` int(11) DEFAULT NULL,
  `longueur` int(11) DEFAULT NULL,
  `largeur` int(11) DEFAULT NULL,
  `hauteur` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `simulation`
--

INSERT INTO `simulation` (`id_simu`, `id_client`, `poids`, `longueur`, `largeur`, `hauteur`, `total`) VALUES
(2, 1, 2, 23, 2332, 23, 22),
(14, 1, 3, 22, 222, 22, 107);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `simulation`
--
ALTER TABLE `simulation`
  ADD PRIMARY KEY (`id_simu`),
  ADD KEY `FK_idclient` (`id_client`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `simulation`
--
ALTER TABLE `simulation`
  MODIFY `id_simu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `simulation`
--
ALTER TABLE `simulation`
  ADD CONSTRAINT `FK_idclient` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

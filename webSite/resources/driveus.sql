-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 00:14:46
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `driveus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta de veiculos`
--

CREATE TABLE `renta de veiculos` (
  `folio` int(9) NOT NULL,
  `usuario` int(11) NOT NULL,
  `veiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidop` varchar(15) NOT NULL,
  `apellidom` varchar(15) NOT NULL,
  `genero` enum('Masculino','Femenino') NOT NULL,
  `fecha_nac` date NOT NULL,
  `colonia` varchar(20) NOT NULL,
  `calle` varchar(15) NOT NULL,
  `num_casa` int(4) NOT NULL,
  `cpostal` int(5) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidop`, `apellidom`, `genero`, `fecha_nac`, `colonia`, `calle`, `num_casa`, `cpostal`, `telefono`, `correo`, `contraseña`) VALUES
(1, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(2, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(3, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(4, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(5, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(6, 'miguel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sinnombre', 200, 28200, 2147483647, 'mgarcia61@ucol.com', '1234asd'),
(9, 'qqqqq', 'qqqqq', 'qqqqqq', 'Femenino', '2021-05-05', 'qqqqq', 'qqqq', 1111, 25222, 121231231, '12313', '123123'),
(10, 'alfredo', 'pruebame', 'esta', 'Masculino', '2021-05-06', 'cojones', 'que', 2, 22222, 222222222, 'quecojonespasaaqui', 'yamete'),
(11, 'p', '2', 'p', 'Masculino', '2021-05-13', 'el', 'pepe', 1, 12, 1234567891, 'elpepeantojas', 'antojar'),
(12, 'luis', 'note', 'duermas', 'Masculino', '2021-05-05', 'sutra', 'cama', 1, 22, 2147483647, 'luisnoteduermas@hotmail.com', 'jojo'),
(13, 'pepe', 'toño', 'gomez', 'Masculino', '2021-05-05', 'centro', 'alvarado', 245, 28200, 2147483647, 'perezgomerz@hotmail.com', '4451'),
(14, 'natividad', 'gomez', 'gamez', 'Femenino', '2021-05-05', 'salagua', 'escuadron', 202, 28200, 1245122525, 'naty@hotmail.com', '60porciento'),
(15, 'miguel angel', 'garcia', 'sanchez', 'Masculino', '1998-08-27', 'centro', 'sin nombre', 362, 28200, 1314141425, 'mgarcia@ucol.com', '1234ss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `color` varchar(10) NOT NULL,
  `placas` varchar(15) NOT NULL,
  `año` int(4) NOT NULL,
  `kilometraje` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `veiculos`
--

INSERT INTO `veiculos` (`id`, `modelo`, `marca`, `color`, `placas`, `año`, `kilometraje`, `precio`) VALUES
(2, 'explorer', 'ford', 'amarillo', '12asd57', 1978, 0, 0),
(3, 'estanford', 'ford', 'rojo', '44125qlk', 2008, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `renta de veiculos`
--
ALTER TABLE `renta de veiculos`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `veiculo` (`veiculo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `renta de veiculos`
--
ALTER TABLE `renta de veiculos`
  MODIFY `folio` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `renta de veiculos`
--
ALTER TABLE `renta de veiculos`
  ADD CONSTRAINT `renta de veiculos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `renta de veiculos_ibfk_2` FOREIGN KEY (`veiculo`) REFERENCES `veiculos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

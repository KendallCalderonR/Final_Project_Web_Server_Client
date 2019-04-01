-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2019 a las 06:46:44
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
-- Base de datos: `proyectoawcs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `autor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(45) NOT NULL,
  `resena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `autor`, `titulo`, `cantidad`, `resena`, `imagen`) VALUES
(1, 'Miguel de Cervantes Saavedra', 'Don Quijote de la Mancha', 10, 'Este libro trata de un tal Alonso Quijano que es un hidalgo pobre de la Mancha, que de tanto leer no', 'donquijote.jpg'),
(2, 'Antoine de Saint-Exepury', 'El Principito', 10, 'El Principito es un cuento poético que viene acompañado de ilustraciones hechas con acuarelas por el', 'elprincipito.jpg'),
(3, 'Dan Brown', 'El codigo Da Vinci', 10, 'Robert Langdon recibe una llamada en mitad de la noche: el conservador del museo del Louvre ha sido ', 'codigodavinci.jpg'),
(4, 'J.R.R Tolkien', 'El señor de los anillos', 10, 'El Señor de los Anillos (título original: The Lord of the Rings) es una novela, obra cumbre del escr', 'elseñordelosanillos.jpg'),
(5, 'Paulo Cohelo', 'El alquimista', 10, 'El alquimista nos cuenta la historia de Santiago, un pastor andaluz que es feliz en su trabajo, un t', 'elalquimista.jpg'),
(6, 'Gabriel Garcia Marquez', 'Cien años de soledad', 10, 'La historia se centra en la familia Buendía, durante seis generaciones, desde José Arcadio Buendía y', 'cienañosdesoledad.jpg'),
(7, 'George R.R Martin', 'Juego de Tronos', 10, 'En el legendario mundo de los Siete Reinos,donde el verano puede durar décadas y el invierno todo un', 'juegodetronos.jpg'),
(8, 'Ana Frank', 'Diario de Ana Fran', 10, 'Todo comenzó el domingo 14 de junio de 1942 cuando Ana empezó a escribir. En 375 páginas, le redactó', 'diarioanafrank.jpg'),
(9, 'Patrick Suskind', 'El perfume', 10, 'uando nació Jean-Baptiste Grenouille allá por el siglo XVIII  en París, Francia, no tenía la suerte ', 'elperfume.jpg'),
(10, 'Bram Stoker', 'Dracula', 0, 'Cada vez que el conde Drácula abandona a medianoche su cripta de la Inglaterra victoriana, también s', 'dracula.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(40) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado` int(2) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `libro_id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `fecha_prestamo`, `fecha_entrega`, `estado`, `usuario_id_usuario`, `libro_id_libro`) VALUES
(1, '2019-03-30', '2019-04-06', 1, 1, 1),
(2, '2019-03-30', '2019-04-06', 1, 1, 2),
(3, '2019-03-23', '2019-03-30', 2, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `cedula`, `email`, `usuario`, `contrasena`) VALUES
(1, 'Kendall', 'Calderón', '115280982', 'kendall@libros.com', 'ken123', 'test'),
(3, 'Pedro', 'Perez', '254685642', 'pedrop@gmail.com', 'pedro', 'test'),
(4, 'Alberto', 'Calderon', '125461245', 'albcal@hotmail.com', 'alberto', 'test'),
(5, 'mama', 'papa', '159785', 'manpa@gmail.com', 'mama', 'test'),
(6, 'Andres', 'Angulo', '123456789', 'angulo@hotmail.com', 'and123', 'test'),
(7, 'beto', 'gonz', '123', 'bebeto3103@gmail.com', 'rgm', '123'),
(8, 'beto', 'gonz', '1233', 'bebeto3103@gmail.com', '1', '1'),
(9, 'Alex', 'Zuniga', '1234', 'loca@locasexy.com', 'alex123', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`,`usuario_id_usuario`,`libro_id_libro`),
  ADD KEY `fk_libro_id_libro` (`libro_id_libro`),
  ADD KEY `fk_usuario_id_usuario` (`usuario_id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `fk_libro_id_libro` FOREIGN KEY (`libro_id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_id_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

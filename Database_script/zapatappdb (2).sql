-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 08-11-2021 a las 02:38:50
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
-- Base de datos: `zapatappdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detventa`
--

CREATE TABLE `detventa` (
  `id_DetVenta` int(11) NOT NULL,
  `id_VentaFK` int(11) NOT NULL,
  `folio_ProductoFK` int(11) NOT NULL,
  `precio_DetVenta` double NOT NULL,
  `cantidad_DetVenta` int(11) NOT NULL,
  `subtotal_DetVenta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detventa`
--

INSERT INTO `detventa` (`id_DetVenta`, `id_VentaFK`, `folio_ProductoFK`, `precio_DetVenta`, `cantidad_DetVenta`, `subtotal_DetVenta`) VALUES
(1, 3, 1001, 2, 19, 37),
(2, 3, 1000, 5, 17, 82.5),
(3, 6, 1001, 18.5, 2, 37),
(4, 6, 1000, 16.5, 1, 16.5),
(5, 7, 1000, 16.5, 2, 33),
(6, 7, 1001, 22.5, 5, 112.5),
(9, 1, 1000, 16.5, 13, 214.5),
(10, 1, 1002, 12.5, 2, 25),
(11, 8, 1001, 22.5, 10, 225);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_Devolucion` int(10) NOT NULL,
  `fecha_Devolucion` date NOT NULL,
  `motivo_Devolucion` varchar(100) NOT NULL,
  `monto_Devolucion` double NOT NULL,
  `perdida_Devolucion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`id_Devolucion`, `fecha_Devolucion`, `motivo_Devolucion`, `monto_Devolucion`, `perdida_Devolucion`) VALUES
(1, '1999-11-11', 'adscasd', 123, 123),
(3, '2021-05-06', 'efw', 21, 213),
(4, '2021-05-07', 'asdcdsc', 213, 213),
(5, '2021-05-08', 'Tortillas en mala cantidad', 123, 12),
(6, '2021-05-05', 'saddsa', 1, 1),
(7, '2021-05-23', 'asdfa', 10, 10),
(8, '2021-05-12', 'Tortilla Dañada', 36.8, 20.5),
(9, '2021-05-12', 'Frijol negro caduco', 260.5, 160.5),
(11, '2021-05-19', 'Tortillas crudas', 200, 100),
(12, '2021-05-19', 'Tortillas cuadradas', 150, 120),
(13, '2021-09-05', 'Las tortillas tenían gusanos de cucarachos', 50, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `folio_Empleado` int(11) NOT NULL,
  `nombre_Empleado` varchar(150) NOT NULL,
  `fecha_nac_Empleado` date NOT NULL,
  `correo_Empleado` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `direccion_Empleado` varchar(200) NOT NULL,
  `admin_Empleado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`folio_Empleado`, `nombre_Empleado`, `fecha_nac_Empleado`, `correo_Empleado`, `contra`, `direccion_Empleado`, `admin_Empleado`) VALUES
(1889240, 'Iram Alvarez', '1999-11-05', 'iram@gmail.com', 'admin', 'Enrique Segoviano', 'Si'),
(1889241, 'Iram Remigio Alvarez Rocha', '1999-10-06', 'iram.jaja@gmail.com', 'noadmin', 'Hola Mundo miado', 'No'),
(1889242, 'Jorge Cantu', '2021-09-13', 'jorgehdz22447@gmail.com', 'sadsadsadsadsa', 'Ciprés', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `idGasto` int(11) NOT NULL,
  `descripcion_gasto` varchar(500) NOT NULL,
  `monto_gasto` double NOT NULL,
  `fecha_gasto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`idGasto`, `descripcion_gasto`, `monto_gasto`, `fecha_gasto`) VALUES
(1, 'Pago de servicio de luz', 350, '2021-05-04'),
(2, 'jv', 45, '2021-05-07'),
(3, 'jyt', 987, '2021-05-07'),
(4, 'sdvdsfvsd', 12312, '2021-05-22'),
(5, 'fghfgh', 3451, '2021-05-11'),
(6, 'asdasd', 12, '2021-05-11'),
(7, 'adfasd', 13, '2021-05-11'),
(8, 'sdasad', 12, '2021-05-11'),
(13, 'Gasolina', 150, '2021-05-13'),
(14, 'Reparacion Pesa', 1500, '2021-05-13'),
(15, 'Maquina tortillera', 12000, '2021-05-19'),
(16, 'Harina Maiz', 750, '2021-05-19'),
(17, 'Gasolina para el camión maizero', 2500, '2021-09-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `ID` int(11) NOT NULL,
  `Destinatario` varchar(100) NOT NULL,
  `Mensaje` varchar(1000) NOT NULL,
  `Fecha` date NOT NULL,
  `Visto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`ID`, `Destinatario`, `Mensaje`, `Fecha`, `Visto`) VALUES
(4, 'Jorge Cantu', 'Tu mamá es mi novia we, jaja salu2', '2021-10-26', 'SI'),
(5, 'Iram Alvarez', 'Que onda, estás bien rico la vdd', '2021-10-26', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `folio_Producto` int(11) NOT NULL,
  `nombre_Producto` varchar(100) NOT NULL,
  `descripcion_Producto` varchar(200) NOT NULL,
  `precio_Producto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`folio_Producto`, `nombre_Producto`, `descripcion_Producto`, `precio_Producto`) VALUES
(1000, 'Tortillas', '1 kg Tortillas de Maíz', 16.5),
(1001, 'Frijoles Cocidos 1L', '1 Litro de frijol cocido pinto', 22.5),
(1002, 'Salsa Roja', 'Bote salsa roja 350 ml', 12.5),
(1003, 'Salsa de Tomatillo', 'Bote salsa verde 350ml', 320.5),
(184646, 'Tortillas de HD ', 'Tortillas con Harina Dietética 1KG', 30),
(184647, 'Tortillas Harina Semi Crudas 30pz', 'Tortillas harina con nuevo estilo', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_proveedor` int(15) NOT NULL,
  `nombre_proveedor` varchar(255) NOT NULL,
  `telefono_proveedor` varchar(10) NOT NULL,
  `descripcion_proveedor` varchar(255) NOT NULL,
  `direccion_proveedor` varchar(255) NOT NULL,
  `correo_proveedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_proveedor`, `nombre_proveedor`, `telefono_proveedor`, `descripcion_proveedor`, `direccion_proveedor`, `correo_proveedor`) VALUES
(2, 'Maseca', '811292381', 'Proveedor de Tortillas de Nixtamal', 'Roberto Gomez Bolaños', 'maseca@maseca.com'),
(7, 'proveedor1', '2147483647', 'Proveedor de Tortillas de Nixtamal', 'direccion', 'proveedor1@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_Venta` int(11) NOT NULL,
  `folio_EmpleadoFK` int(11) NOT NULL,
  `fecha_Venta` date NOT NULL,
  `total_Venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_Venta`, `folio_EmpleadoFK`, `fecha_Venta`, `total_Venta`) VALUES
(1, 1889240, '2021-04-27', 70),
(2, 1889240, '2021-04-28', 88.5),
(3, 1889240, '2021-04-28', 119.5),
(4, 1889240, '2021-04-28', 88.5),
(5, 1889240, '2021-04-28', 55.5),
(6, 1889240, '2021-04-28', 53.5),
(7, 1889240, '2021-04-30', 145.5),
(8, 1889240, '2021-05-19', 225),
(112, 1889241, '2021-09-09', 372),
(113, 1889241, '2021-09-09', 388.5),
(114, 1889241, '2021-09-10', 33),
(115, 1889241, '2021-09-10', 0),
(116, 1889241, '2021-09-10', 0),
(117, 1889241, '2021-09-10', 33),
(121, 1889241, '2021-09-20', 389.5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detventa`
--
ALTER TABLE `detventa`
  ADD PRIMARY KEY (`id_DetVenta`),
  ADD KEY `id_VentaFK` (`id_VentaFK`),
  ADD KEY `folio_ProductoFK` (`folio_ProductoFK`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_Devolucion`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`folio_Empleado`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`idGasto`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`folio_Producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_Venta`),
  ADD KEY `folio_EmpleadoFK` (`folio_EmpleadoFK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detventa`
--
ALTER TABLE `detventa`
  MODIFY `id_DetVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_Devolucion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `folio_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `idGasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `folio_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184648;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_proveedor` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detventa`
--
ALTER TABLE `detventa`
  ADD CONSTRAINT `detventa_ibfk_1` FOREIGN KEY (`id_VentaFK`) REFERENCES `venta` (`id_Venta`),
  ADD CONSTRAINT `detventa_ibfk_2` FOREIGN KEY (`folio_ProductoFK`) REFERENCES `producto` (`folio_Producto`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`folio_EmpleadoFK`) REFERENCES `empleado` (`folio_Empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

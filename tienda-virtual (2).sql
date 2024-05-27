-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 05:32:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda-virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `cantidad`, `id_producto`, `id_cliente`) VALUES
(3, 1, 5, 43),
(4, 1, 6, 43),
(5, 1, 7, 43),
(6, 1, 96, 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `imagen`, `estado`) VALUES
(1, 'Android', 'assets/img/categorias/20240515054555.jpg', 1),
(2, 'Samsung', 'assets/img/categorias/20240515055108.jpg', 1),
(3, 'Apple', 'assets/img/categorias/20240515053650.jpg', 1),
(4, 'Motorola', 'assets/img/categorias/20240515054714.jpg', 1),
(5, 'Xiaomi ', 'assets/img/categorias/20240515054919.jpg', 1),
(6, 'Oppo ', 'assets/img/categorias/20240515055256.jpg', 1),
(7, 'Acer', 'assets/img/categorias/20240518172940.jpg', 1),
(8, 'Lenovo', 'assets/img/categorias/20240518173151.jpg', 1),
(9, 'Msi', 'assets/img/categorias/20240518173259.jpg', 1),
(10, 'Hp', 'assets/img/categorias/20240518173408.jpg', 1),
(11, 'Dell', 'assets/img/categorias/20240518173542.jpg', 1),
(12, 'Asus', 'assets/img/categorias/20240518173723.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` varchar(100) NOT NULL DEFAULT 'defaul png',
  `token` varchar(100) DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `clave`, `perfil`, `token`, `verify`) VALUES
(43, 'naiker gomez', 'gomeznaiker@gmail.com', '$2y$10$u4MvJ.SfJ8KRFaBGcovfR.SMD2.xe9PrzqF2zUbtaPiOOcSmGyS6G', 'defaul png', '1', 1),
(69, 'brayan garcias', 'naikergomez0123@gmail.com', '$2y$10$mmqlI6btF618u5j32nhdneJKWJC837.7UK46fyHv5YR2wVlE5EWDW', 'defaul png', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`id`, `producto`, `precio`, `cantidad`, `id_pedido`, `id_producto`) VALUES
(12, 'xiami 13', 1000.00, 1, 3, 5),
(13, 'Compound - Orange', 298.86, 1, 3, 6),
(14, 'Pears - Bosc', 747.72, 1, 3, 7),
(15, 'Cream - 35%', 707.48, 1, 3, 8),
(16, 'Sprouts - Peppercress', 804.83, 1, 3, 9),
(17, 'Tomatoes - Orange', 210.03, 1, 3, 10),
(18, 'Samsung Galaxy A15', 342.54, 1, 4, 73),
(19, 'Apple iPhone 14', 14.49, 1, 4, 79),
(20, 'Apple iPhone 15 Pro Max', 23.53, 1, 4, 80),
(21, 'Apple iPhone 12', 298.86, 1, 4, 81),
(22, 'Samsung Galaxy A15', 342.54, 12, 5, 73),
(23, 'Samsung Galaxy A25', 529.99, 1, 5, 74),
(24, 'Samsung Galaxy A15', 342.54, 1, 6, 73),
(25, 'Samsung Galaxy A54', 599.00, 1, 6, 75),
(26, 'Laptop Lenovo V14 G3', 899.00, 1, 6, 96),
(27, 'Samsung Galaxy A25', 529.99, 1, 7, 74),
(28, 'Samsung Galaxy A15', 342.54, 1, 7, 73),
(29, 'Samsung Galaxy A54', 599.00, 1, 7, 75),
(30, 'Samsung Galaxy S23', 220.53, 1, 7, 76),
(31, 'Samsung Galaxy A15', 342.54, 1, 8, 73),
(32, 'Samsung Galaxy A25', 529.99, 1, 8, 74),
(33, 'Samsung Galaxy A54', 599.00, 1, 8, 75),
(34, 'Samsung Galaxy A25', 529.99, 1, 9, 74),
(35, 'Samsung Galaxy A15', 342.54, 1, 9, 73);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(80) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `fecha` datetime NOT NULL,
  `email` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `proceso` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_transaccion`, `monto`, `estado`, `fecha`, `email`, `nombre`, `apellido`, `direccion`, `ciudad`, `id_cliente`, `proceso`) VALUES
(1, '5PJ81285FB931893A', 1859.92, 'COMPLETED', '2024-05-14 04:49:20', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '3'),
(2, '7BK43737P44010059', 2158.78, 'COMPLETED', '2024-05-14 04:53:46', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 45, '2'),
(3, '6HL20050H6702201G', 3768.92, 'COMPLETED', '2024-05-15 01:25:26', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '3'),
(4, '1BX79440CY6005134', 679.42, 'COMPLETED', '2024-05-15 15:49:55', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '1'),
(5, '7NF596143W3362227', 4640.47, 'COMPLETED', '2024-05-17 20:25:51', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '2'),
(6, '7FR97059KT883401U', 1840.54, 'COMPLETED', '2024-05-18 22:19:59', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '1'),
(7, '4SR33022GL4090924', 1692.06, 'COMPLETED', '2024-05-18 22:23:38', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '1'),
(8, '33P58384WJ777783W', 1471.53, 'COMPLETED', '2024-05-19 21:08:50', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 43, '1'),
(9, '5V59384979886123N', 872.53, 'COMPLETED', '2024-05-22 23:32:32', 'naikergomez@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Bogota', 68, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`, `estado`, `id_categoria`) VALUES
(73, 'Samsung Galaxy A15', '', 342.54, 20, 'assets/img/productos/20240518010032.jpg', 1, 2),
(74, 'Samsung Galaxy A25', '', 529.99, 100, 'assets/img/productos/20240518012546.jpg', 1, 2),
(75, 'Samsung Galaxy A54', '<ul><li>Máxima Velocidad de Actualización: <strong>120 Hz: Brillo de pantalla: 500 cd / m²</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 8 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 32 MP</strong></li><li>Color del producto: <strong>Violeta</strong></li></ul>', 599.00, 50, 'assets/img/productos/20240518012716.jpg', 1, 2),
(76, 'Samsung Galaxy S23', '<ul><li>Diagonal de la pantalla: <strong>17.3 cm (6.8\"): Pantalla: Dynamic AMOLED 2X</strong></li><li>Capacidad de almacenamiento: <strong>256 GB: RAM: 12 GB</strong></li><li>Resolución de la cámara trasera 200 MP: <strong>Resolución de la cámara frontal: 12 MP</strong></li><li>Color del producto: <strong>Crema de color</strong></li></ul>', 220.53, 10, 'assets/img/productos/20240518013140.jpg', 1, 2),
(78, 'Samsung Galaxy A34', '<ul><li>Diagonal de la pantalla: <strong>16.8 cm (6.6\"): Pantalla: SAMOLED</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 6 GB</strong></li><li>Resolución de la cámara trasera 48 MP: <strong>Resolución de la cámara frontal: 13 MP</strong></li><li>Color del producto: <strong>Grafito</strong></li></ul>', 342.54, 5, 'assets/img/productos/20240518012738.jpg', 1, 2),
(79, 'Apple iPhone 14', '<ul><li>Diagonal de la pantalla: <strong>15.5 cm (6.1\"): Pantalla: OLED</strong></li><li>Resolución de la cámara trasera 12 MP: <strong>Resolución de la cámara frontal: 12 MP</strong></li><li>Color del producto: <strong>Negro</strong></li></ul>', 1000.00, 40, 'assets/img/productos/20240518024833.jpg', 1, 3),
(80, 'Apple iPhone 15 Pro Max', '<ul><li>Diagonal de la pantalla: <strong>17.3 cm (6.8\"): Pantalla: Dynamic AMOLED 2X</strong></li><li>Capacidad de almacenamiento: <strong>256 GB: RAM: 12 GB</strong></li><li>Resolución de la cámara trasera 200 MP: <strong>Resolución de la cámara frontal: 12 MP</strong></li><li>Color del producto: <strong>Crema de color</strong></li></ul>', 1200.53, 10, 'assets/img/productos/20240518033530.jpg', 1, 3),
(81, 'Apple iPhone 12', '<ul><li>Diagonal de la pantalla: <strong>17.3 cm (6.8\"): Pantalla: Dynamic AMOLED 2X</strong></li><li>Capacidad de almacenamiento: <strong>256 GB: RAM: 12 GB</strong></li><li>Resolución de la cámara trasera 200 MP: <strong>Resolución de la cámara frontal: 12 MP</strong></li><li>Color del producto: <strong>Crema de color</strong></li></ul>', 900.00, 30, 'assets/img/productos/20240518033538.jpg', 1, 3),
(82, 'Motorola Moto G13', '<ul><li>Diagonal de la pantalla: <strong>16.5 cm (6.5\"): Pantalla: IPS</strong></li><li>Máxima Velocidad de Actualización: <strong>90 Hz: Brillo de pantalla: 400 cd / m²</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 4 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 8 MP</strong></li><li>Color del producto: <strong>Negro</strong></li></ul>', 600.00, 12, 'assets/img/productos/20240518034859.jpg', 1, 4),
(83, 'Motorola Moto G54', '<ul><li>Diagonal de la pantalla: <strong>16.5 cm (6.5\"): Pantalla: IPS</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 8 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 16 MP</strong></li><li>Color del producto: <strong>Verde</strong></li></ul><p><br>&nbsp;</p>', 700.00, 10, 'assets/img/productos/20240518035908.jpg', 1, 4),
(84, 'Xiaomi POCO M5s', '<ul><li><strong>Diagonal de la pantalla: 16.3 cm (6.43\") Pantalla: AMOLED</strong></li><li><strong>Brillo de pantalla: 700 cd / m²</strong></li><li><strong>Tipo de cámara trasera: Cámara cuádruple</strong></li><li><strong>Sistema operativo: Android 12</strong></li><li><strong>Procesador: Mediatek Modelo: AMOLED</strong></li></ul>', 529.99, 4, 'assets/img/productos/20240518174936.jpg', 1, 5),
(86, 'Xiaomi Redmi Note 12', '<ul><li>Diagonal de la pantalla: <strong>16.9 cm (6.67\"): Pantalla: AMOLED</strong></li><li>Máxima Velocidad de Actualización: <strong>120 Hz: Brillo de pantalla: 450 cd / m²</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 4 GB</strong></li><li>Resolución de la cámara trasera 48 MP: <strong>Resolución de la cámara frontal: 13 MP</strong></li><li>Color del producto: <strong>Verde</strong></li></ul>', 599.00, 4, 'assets/img/productos/20240518175136.jpg', 1, 5),
(87, 'Xiaomi Redmi Note 12', '<ul><li>Máxima Velocidad de Actualización: <strong>120 Hz: Brillo de pantalla: 450 cd / m²</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 4 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 13 MP</strong></li><li>Color del producto: <strong>Azul</strong></li></ul>', 599.00, 4, 'assets/img/productos/20240518175935.jpg', 1, 5),
(88, 'OPPO Reno 10 5G', '<ul><li>Diagonal de la pantalla: <strong>17 cm (6.7\"): Pantalla: AMOLED</strong></li><li>Capacidad de almacenamiento: <strong>256 GB: RAM: 8 GB</strong></li><li>Resolución de la cámara trasera 64 MP: <strong>Resolución de la cámara frontal: 32 MP</strong></li><li>Color del producto: <strong>Gris, Plata</strong></li></ul>', 1000.00, 2, 'assets/img/productos/20240518180509.jpg', 1, 6),
(89, 'OPPO A79 5G 6.7', '<ul><li>Máxima Velocidad de Actualización: <strong>90 Hz: Brillo de pantalla: 550 cd / m²</strong></li><li>Capacidad de almacenamiento: <strong>256 GB: RAM: 8 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 8 MP</strong></li><li>Color del producto: <strong>Púrpura</strong></li></ul>', 900.13, 2, 'assets/img/productos/20240518180844.jpg', 1, 6),
(90, 'OPPO A78 6.43', '<ul><li>Diagonal de la pantalla: <strong>16.7 cm (6.56\"): Pantalla: LCD</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 4 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 8 MP</strong></li><li>Color del producto: <strong>Azul</strong></li></ul>', 699.00, 4, 'assets/img/productos/20240518181235.jpg', 1, 6),
(91, 'OPPO A38', '<ul><li>Diagonal de la pantalla: <strong>16.7 cm (6.56\"): Pantalla: LCD</strong></li><li>Capacidad de almacenamiento: <strong>128 GB: RAM: 4 GB</strong></li><li>Resolución de la cámara trasera 50 MP: <strong>Resolución de la cámara frontal: 5 MP</strong></li><li>Color del producto: <strong>Oro</strong></li></ul>', 400.00, 12, 'assets/img/productos/20240518181507.jpg', 1, 6),
(92, 'Laptop Gamer Acer Aspire', '<ul><li>Familia de procesador: <strong>Intel® Core™ i5-13xxx</strong></li><li>Diagonal de la pantalla: <strong>17.3\"</strong></li><li>Memoria interna: <strong>16 GB</strong></li><li>Tipo de memoria interna: <strong>DDR4-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>512 GB</strong></li><li>Tarjeta de Video: <strong>GeForce RTX 2050</strong></li><li>Sistema operativo instalado: <strong>Windows 11 Home</strong></li><li>Idioma del teclado: <strong>Inglés</strong></li></ul>', 1500.56, 5, 'assets/img/productos/20240518182645.jpg', 1, 7),
(93, 'Laptop Acer TravelMate ', '<ul><li>Familia de procesador: <strong>Intel® Core™ i3-12xxx</strong></li><li>Diagonal de la pantalla: <strong>39,6 cm (15.6\")</strong></li><li>Memoria interna: <strong>8 GB</strong></li><li>Tipo de memoria interna: <strong>DDR4-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>512 GB</strong></li><li>Tarjeta de Video: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>Sistema operativo instalado: <strong>Windows 11 Pro</strong></li><li>Idioma del teclado: <strong>Español</strong></li></ul>', 1100.00, 12, 'assets/img/productos/20240518185607.jpg', 1, 7),
(94, 'Monitor Gamer Curvo Acer', '<ul><li>-Diagonal de la pantalla: <strong>81,3 cm (32\")</strong></li><li>Tipo HD: <strong>Full HD</strong></li><li>Nvidia G-Sync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>AMD FreeSync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/yes.png\"></strong></li><li>Velocidad de actualización: <strong>180 Hz</strong></li><li>HDMI: <strong>1</strong></li><li>DisplayPort: <strong>1</strong></li></ul>', 799.00, 12, 'assets/img/productos/20240518190023.jpg', 1, 7),
(95, 'Monitor Acer V7 V247Y ', '<ul><li><strong>Diagonal de la pantalla: 60,5 cm (23.8\")</strong></li><li><strong>Tipo HD: Full HD Tipo de Pantalla: VA</strong></li><li><strong>Resolución: 1920 x 1080 Pixeles</strong></li><li><strong>Nvidia G-Sync: <img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\" alt=\"No\"> AMD FreeSync: <img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/yes.png\" alt=\"Sí\"></strong></li><li><strong>Velocidad de actualización: 75 Hz</strong></li><li><strong>HDMI: 1x VGA: 1x</strong></li></ul>', 298.86, 12, 'assets/img/productos/20240518190451.jpg', 1, 7),
(96, 'Laptop Lenovo V14 G3', '<ul><li>Familia de procesador: <strong>Intel® Core™ i3-12xxx</strong></li><li>Diagonal de la pantalla: <strong>35,6 cm (14\")</strong></li><li>Memoria interna: <strong>8 GB</strong></li><li>Tipo de memoria interna: <strong>DDR4-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>256 GB</strong></li><li>Tarjeta de Video: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>Sistema operativo instalado: <strong>Windows 11 Home</strong></li><li>Idioma del teclado: <strong>Españ</strong></li></ul>', 899.00, 22, 'assets/img/productos/20240518191101.jpg', 1, 8),
(97, 'Laptop Lenovo ThinkPad T14S', '<ul><li>Familia de procesador: <strong>Intel® Core™ i5-11xxx</strong></li><li>Diagonal de la pantalla: <strong>14\"</strong></li><li>Memoria interna: <strong>8 GB</strong></li><li>Tipo de memoria interna: <strong>LPDDR4x-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>256 GB</strong></li><li>Tarjeta de Video: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>Sistema operativo instalado: <strong>Windows 10 Pro</strong></li><li>Idioma del teclado: <strong>Español</strong></li></ul>', 2000.00, 4, 'assets/img/productos/20240518192352.jpg', 1, 8),
(98, 'Monitor MSI Optix G273 LCD 27', '<ul><li>-Diagonal de la pantalla: <strong>68,6 cm (27\")</strong></li><li>Tipo HD: <strong>Full HD</strong></li><li>Nvidia G-Sync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/yes.png\"></strong></li><li>AMD FreeSync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>Velocidad de actualización: <strong>165 Hz</strong></li><li>HDMI: <strong>2</strong></li><li>DisplayPort: <strong>1</strong></li></ul>', 298.86, 15, 'assets/img/productos/20240518193232.jpg', 1, 9),
(99, 'HP ProOne 245 G10 All-in-One 23.8', '<ul><li>Familia de procesador: <strong>AMD Ryzen™ 3</strong></li><li>Memoria interna: <strong>8GB</strong></li><li>Tipo de memoria interna: <strong>DDR5-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>256 GB</strong></li><li>Sistema operativo instalado: <strong>Windows 11 Home</strong></li></ul>', 890.00, 13, 'assets/img/productos/20240523001220.jpg', 1, 10),
(100, 'Portátil HP Pavilion 15.6', '<ul><li>Unidad de estado sólido PCIe NVMe M.2 de 512 GB</li><li>Gráficos Integrados Intel Iris X, mejor calidad de Imagen</li><li>Conexiones fluidas. Combinación Wi-Fi 6 y Bluetooth 5.2</li><li>HP Fast Charge. Carga de 0 a 50% en aproximadamente 45 min</li><li>Sonido de calidad. Audio By B&amp;O, Dual speakers</li></ul>', 342.54, 6, 'assets/img/productos/20240523004958.jpg', 1, 10),
(101, 'HP Portátil Spectre x360', '<ul><li>TECNOLOGÍA – Potente y versátil con un procesador Intel Core de 13ª generación, un diseño de 360° y una relación de aspecto de 3:2 para que pueda ver más de una manera</li><li>La experiencia de uso ideal sin importar dónde estés. La plataforma Intel ofrece la combinación ideal de rendimiento, capacidad de respuesta, larga duración de la batería y gráficos increíbles, empaquetada en una clase de portátil</li></ul>', 298.86, 4, 'assets/img/productos/20240523014708.jpg', 1, 10),
(102, 'HP 15-fd0075ns - Ordenador portátil de 15.6', '<ul><li>Pantalla FHD de 15,6\" (39,6 cm) en diagonal, bisel micro-edge, antirreflectante, 250 nits, 45 % NTSC (1920 x 1080)</li><li>Procesador Intel Core i5-1335U (hasta 4,6 GHz con tecnología Intel Turbo Boost, 12 MB de caché L3, 10 núcleos, 12 subprocesos)</li><li>Memoria RAM DDR4-3200 MHz 16 GB (2 x 8 GB)</li><li>Almacenamiento de datos SSD de 512 GB PCIe NVMe M.2</li><li>Gráficos Integrados Intel Iris Xᵉ</li><li>Sistema operativo Windows 11 Home</li></ul>', 298.86, 21, 'assets/img/productos/20240523015437.jpg', 1, 10),
(103, 'Monitor Gamer Curvo Dell S2422HG LCD 23.6', '<ul><li>-Diagonal de la pantalla: <strong>59,9 cm (23.6\")</strong></li><li>Tipo HD: <strong>Full HD</strong></li><li>Nvidia G-Sync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>AMD FreeSync: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/yes.png\"></strong></li><li>Velocidad de actualización: <strong>165 Hz</strong></li><li>HDMI: <strong>2</strong></li><li>DisplayPort: <strong>1</strong></li></ul>', 342.54, 14, 'assets/img/productos/20240523051327.jpg', 1, 11),
(104, 'Laptop Dell Inspiron 3520 15.6', '<ul><li>Familia de procesador: <strong>Intel® Core™ i5-12xxx</strong></li><li>Diagonal de la pantalla: <strong>15.6\"</strong></li><li>Memoria interna: <strong>16GB</strong></li><li>Tipo de memoria interna: <strong>DDR4-SDRAM</strong></li><li>Capacidad total de almacenaje: <strong>512 GB</strong></li><li>Tarjeta de Video: <strong><img src=\"https://www.cyberpuerta.mx/out/cyberpuertaV5/src/img/no.png\"></strong></li><li>Sistema operativo instalado: <strong>Windows 11 Home</strong></li><li>Idioma del teclado: <strong>Español</strong></li></ul>', 800.00, 12, 'assets/img/productos/20240523051847.jpg', 1, 11),
(105, 'Monitor Dell E2222H LED 21.5', '<ul><li>-Diagonal de la pantalla: <strong>54.5 cm (21.4\")</strong></li><li>Tipo HD: <strong>Full HD</strong></li><li>Velocidad de actualización: <strong>60 Hz</strong></li><li>VGA: <strong>1</strong></li><li>DisplayPort: <strong>1</strong></li></ul>', 100.99, 12, 'assets/img/productos/20240523052356.jpg', 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `perfil`, `estado`) VALUES
(1, 'Naiker ', 'Gomez', 'naikergomez0123@gmail.com', '$2y$10$nG/e04Vx4S3rXx1dkxzYWebB8taHegCfCCINf5JBPmaT4jVapKbC.', NULL, 0),
(6, 'brayan ', 'gracia', 'brayan@gmail.com', '$2y$10$9zlQ0HU.Q5jyk5UEh1Byi.GfUFqX3ve/XdLh4lNgYLvUzB7tC5/Pe', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `detalle_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

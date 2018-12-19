-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-12-2018 a las 09:22:58
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbregistro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0600_is-110_3_2018`
--

DROP TABLE IF EXISTS `0600_is-110_3_2018`;
CREATE TABLE IF NOT EXISTS `0600_is-110_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `0600_is-110_3_2018`
--

INSERT INTO `0600_is-110_3_2018` (`cuenta`, `nota`) VALUES
('20161111111', 0),
('2016222222', 0),
('20161006130', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0800_is-110_3_2018`
--

DROP TABLE IF EXISTS `0800_is-110_3_2018`;
CREATE TABLE IF NOT EXISTS `0800_is-110_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0900_is-210_3_2018`
--

DROP TABLE IF EXISTS `0900_is-210_3_2018`;
CREATE TABLE IF NOT EXISTS `0900_is-210_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1000_is-310_3_2018`
--

DROP TABLE IF EXISTS `1000_is-310_3_2018`;
CREATE TABLE IF NOT EXISTS `1000_is-310_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1200_is-311_3_2018`
--

DROP TABLE IF EXISTS `1200_is-311_3_2018`;
CREATE TABLE IF NOT EXISTS `1200_is-311_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1500_is-410_3_2018`
--

DROP TABLE IF EXISTS `1500_is-410_3_2018`;
CREATE TABLE IF NOT EXISTS `1500_is-410_3_2018` (
  `cuenta` text NOT NULL,
  `nota` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `1500_is-410_3_2018`
--

INSERT INTO `1500_is-410_3_2018` (`cuenta`, `nota`) VALUES
('20161006130', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `clave` text COLLATE latin1_spanish_ci NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `clave` (`clave`(5))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`clave`, `nombre`) VALUES
('MM', 'Matematicas'),
('IS', 'Ingenieria en Sistemas'),
('IQ', 'Ingenieria Quimica'),
('IE', 'Ingenieria Electrica Industrial'),
('IM', 'Ingenieria Mecanica Industrial'),
('IC', 'Ingenieria Civil'),
('FF', 'Filosofia'),
('SC', 'Sociologia'),
('EG', 'Espaniol'),
('HH', 'Historia'),
('FS', 'Fisica'),
('IN', 'Ingles'),
('DQ', 'Dibujo'),
('QQ', 'Quimica'),
('II', 'Ingenieria'),
('TM', 'Termodinamica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `carrera` text NOT NULL,
  `uv` int(11) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`codigo`, `nombre`, `carrera`, `uv`) VALUES
('MM-110', 'Matematicas I', 'MM', 5),
('MM-111', 'Geometria y Trigonometria.', 'MM', 5),
('IS-110', 'Introduccion. a la Ingenieria en Sistemas.', 'IS', 3),
('SC-101', 'Sociologia', 'SC', 4),
('MM-314', 'Programacion I', 'MM', 3),
('MM-201', 'Calculo I', 'MM', 5),
('MM-211', 'Vectores y Matrices', 'MM', 3),
('IN-101', 'Ingles I', 'IN', 4),
('MM-202', 'Calculo II', 'MM', 5),
('IN-102', 'Ingles II', 'IN', 4),
('IS-210', 'Programacion II', 'IS', 4),
('FS-100', 'Fisica I', 'FS', 5),
('MM-411', 'Ecuaciones Diferenciales', 'MM', 3),
('IN-103', 'Ingles III', 'IN', 4),
('DQ-101', 'Dibujo I', 'DQ', 2),
('IS-310', 'Algoritmos y Estructura de Datos', 'IS', 4),
('FS-200', 'Fisica II', 'FS', 5),
('IS-311', 'Circuitos Electricos para Ingenieria en Sistemas', 'IS', 3),
('FF-101', 'Filosofia', 'FF', 4),
('DQ-102', 'Dibujo II', 'DQ', 2),
('HH-101', 'Historia de Honduras', 'HH', 4),
('MM-420', 'Matematica Discreta', 'MM', 4),
('EG-011', 'Espaniol General 1', 'EG', 4),
('MM-401', 'Estadistica', 'MM', 3),
('IS-410', 'Programacion Orientada a Objetos', 'IS', 5),
('IS-411', 'Electronica para Ing. en Sistemas', 'IS', 3),
('IS-412', 'Sistemas Operativos I', 'IS', 4),
('IS-501', 'Base de Datos I', 'IS', 5),
('IS-510', 'Instalaciones Electricas', 'IS', 3),
('IS-511', 'Redes de Datos I', 'IS', 4),
('IS-512', 'Sistemas Operativos II', 'IS', 4),
('IS-601', 'Base de Datos II', 'IS', 4),
('IS-603', 'Arquitectura de Computadoras', 'IS', 4),
('IS-513', 'Lenguajes de Programacion', 'IS', 4),
('IS-611', 'Redes de Datos II', 'IS', 4),
('IS-711', 'Disenio Digital', 'IS', 4),
('IS-602', 'Sistema de Informacion', 'IS', 4),
('IS-811', 'Seguridad Informatica', 'IS', 4),
('IS-720', 'Administracion I', 'IS', 4),
('IS-702', 'Analisis y Disenio de Sistemas', 'IS', 4),
('IS-721', 'Contabilidad I', 'IS', 4),
('IS-903', 'Auditoria Informatica', 'IS', 3),
('IS-701', 'Inteligencia Artificial', 'IS', 4),
('IS-802', 'Ingenieria del Software', 'IS', 4),
('IS-820', 'Finanzas Administrativas', 'IS', 4),
('IS-902', 'Industria del Software', 'IS', 4),
('IS-904', 'Gerencia Informatica', 'IS', 4),
('IS-906', 'Topicos Especiales y Avanzados', 'IS', 5),
('IS-905', 'Economia Digital', 'IS', 5),
('IS-115', 'Seminario de Investigacion', 'IS', 3),
('IS-910', 'Teoria de la Simulacion', 'IS', 3),
('IS-911', 'Microprocesadores', 'IS', 3),
('IS-914', 'Liderazgo para el cambio', 'IS', 3),
('IS-912', 'Sistemas Expertos', 'IS', 3),
('IS-913', 'Disenio de Compiladores', 'IS', 3),
('IQ-100', 'Introduccion a la Ing. Quimica', 'IQ', 2),
('QQ-115', 'Quimica General I', 'QQ', 5),
('QQ-215', 'Quimica Gral. II', 'QQ', 5),
('QQ-225', 'Quimica Analitica Cuantitativa', 'QQ', 5),
('FS-321', 'Electricidad y Magnetismo', 'FS', 4),
('QQ-313', 'Quimica Organica I', 'QQ', 4),
('IQ-321', 'Balance de Materia y Energia', 'IQ', 3),
('IQ-324', 'Fisicoquimica', 'IQ', 3),
('EG-101', 'Espaniol', 'EG', 4),
('IQ-313', 'Metodos Matematicos en Ing. Quimica', 'IQ', 3),
('QQ-323', 'Quimica organica II', 'QQ', 4),
('IQ-322', 'Termodinamica I para Ingenieria Quimica', 'IQ', 4),
('IQ-420', 'Mecanica de Fluidos para Ing. Quimica', 'IQ', 4),
('IQ-412', 'Termodinamica II para Ing. Quimica', 'IQ', 4),
('II-411', 'Organizacion y Metodos', 'II', 4),
('IE-528', 'Maquinas Electricas', 'IE', 4),
('IQ-421', 'Operaciones Unitarias I', 'IQ', 4),
('MM-414', 'Analisis Numerico', 'MM', 3),
('IQ-514', 'Instrumentacion y Control de Procesos', 'IQ', 3),
('IQ-422', 'Procesos de Transferencia', 'IQ', 4),
('II-421', 'Ing. de Metodos', 'II', 4),
('IQ-513', 'Laboratorio de Operaciones Unitarias', 'IQ', 5),
('IQ-512', 'Cinetica Aplicada', 'IQ', 3),
('IQ-511', 'Operaciones Unitarias II', 'IQ', 4),
('IQ-430', 'Control de Calidad I', 'IQ', 4),
('II-511', 'Investigacion de Operaciones', 'II', 3),
('IQ-521', 'Proyectos en Ingenieria Quimica', 'IQ', 6),
('IQ-523', 'Laboratorio de Fenomenos de Tranporte', 'IQ', 5),
('II-521', 'Ingenieria Economica', 'II', 3),
('IQ-522', 'Operaciones Unitarias III', 'IQ', 4),
('IQ-440', 'Control de calidad II', 'IQ', 4),
('IE-414', 'Electronica II', 'IE', 4),
('IE-415', 'Teoria de la Estabilidad', 'IE', 3),
('IE-416', 'Electromagnetismo I', 'IE', 4),
('IE-421', 'Maquinas Electricas I', 'IE', 4),
('IE-515', 'T de sistemas Lineales', 'IE', 3),
('IE-425', 'Comunicaciones I', 'IE', 3),
('IE-511', 'Maquinas Electricas II', 'IE', 4),
('IE-524', 'Proyecto', 'IE', 3),
('IE-900', 'Seminario de Investigacion', 'IE', 4),
('IE-210', 'Introduccion a la Ing. Electrica', 'IE', 2),
('QQ-100', 'Quimica Fundamental', 'QQ', 4),
('MM-502', 'Variable Compleja', 'MM', 3),
('FS-415', 'Electricidad y Magnetismo II', 'FS', 5),
('IE-423', 'T. de la Probabilidad', 'IE', 3),
('IE-313', 'Metodos Matematicos para Ingenieria', 'IE', 3),
('IE-314', 'Electronica I', 'IE', 4),
('IM-224', 'Mecanica para Ingenieros I', 'IM', 4),
('IM-135', 'Introduccion a la Ing Mecanica', 'IM', 2),
('IM-212', 'Metalurgia', 'IM', 4),
('IM-233', 'Metodos Matematicos en Ingenieria', 'IM', 3),
('IM-234', 'Mecanica para Ing II', 'IM', 3),
('IM-315', 'Mecanica de Fluidos', 'IM', 3),
('MM-412', 'Analisis Numerico', 'MM', 3),
('IM-313', 'Mecanica de Materiales I', 'IM', 5),
('IM-328', 'Termodinamica I', 'IM', 3),
('IM-327', 'Mecanica de Materiales II', 'IM', 4),
('IM-225', 'Metrologia', 'IM', 3),
('IM-331', 'Elementos de Maquinas I', 'IM', 4),
('IM-323', 'Procesos de manufactura I', 'IM', 4),
('IM-334', 'Termodinamica II', 'IM', 3),
('IM-326', 'Cinematica de Maquinas', 'IM', 3),
('IM-419', 'Elementos de Maquinas II', 'IM', 3),
('IC-100', 'Introduccion a la Ing Civil', 'IC', 2),
('IC-302', 'Probabilidad y Estadistica Aplicada', 'IC', 3),
('IC-361', 'Estatica', 'IC', 5),
('IC-350', 'Topografia I', 'IC', 5),
('IC-303', 'Analisis Numerico', 'IC', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `estadomatricula` int(11) NOT NULL,
  `estadosubirnotas` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` text NOT NULL,
  UNIQUE KEY `periodo` (`periodo`(5))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`estadomatricula`, `estadosubirnotas`, `anio`, `periodo`) VALUES
(1, 1, 2018, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `primer-nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `segundo-nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `primer-apellido` text COLLATE latin1_spanish_ci NOT NULL,
  `segundo-apellido` text COLLATE latin1_spanish_ci NOT NULL,
  `fecha-nacimiento` date NOT NULL,
  `n_empleado` int(11) NOT NULL,
  `nivel_academico` text COLLATE latin1_spanish_ci NOT NULL,
  `facultad` text COLLATE latin1_spanish_ci NOT NULL,
  `t_contrato` text COLLATE latin1_spanish_ci NOT NULL,
  `n_identidad` text COLLATE latin1_spanish_ci NOT NULL,
  `email` text COLLATE latin1_spanish_ci NOT NULL,
  `foto` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `n_empleado` (`n_empleado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`primer-nombre`, `segundo-nombre`, `primer-apellido`, `segundo-apellido`, `fecha-nacimiento`, `n_empleado`, `nivel_academico`, `facultad`, `t_contrato`, `n_identidad`, `email`, `foto`) VALUES
('Napoleon', 'Fernando', 'Bonaparte', 'Colindres', '1769-08-15', 555555, 'Ingeniero Quimico', 'IQ', 'PH', '54987541235', 'coordinadorIQ@unah.hn', 'img/perfil-por-defecto.jpg'),
('Pedro', 'Eduardo', 'Picapiedra', 'Molina', '1996-02-14', 111111, 'Ingeniero en Sistemas', 'IS', 'PER', '00596199600256', 'coordinadorIS@unah.hn', 'img/perfil-por-defecto.jpg'),
('Jose', 'David', 'Zuniga', 'Figueroa', '1898-12-05', 222222, 'matematico', 'MM', 'PER', '22-22-22', '1234@gmail.com', 'img/perfil-por-defecto.jpg'),
('Miguel', 'Antonio', 'Gamez', 'Figueroa', '1968-06-04', 333333, 'Ingeniero Electrico', 'IE', 'PER', '8965213456', 'coordinadorIE@unah.hn', 'img/perfil-por-defecto.jpg'),
('Alfredo', 'Pedro', 'Sagastume', 'Asturias', '2018-12-14', 444444, 'ingeniero civil', 'IC', 'PER', '1233-2133-12314', 'sadasd@gmail.com', 'img/perfil-por-defecto.jpg'),
('Estephan', 'Costum', 'Lopez', 'Yu', '2018-12-14', 666666, 'ING', 'IM', 'PER', '3452-8676-52325', '1234@gmail.com', 'img/perfil-por-defecto.jpg'),
('Raul', 'Aurelio', 'Mafre', 'Rubi', '2018-12-14', 888888, 'Lic', 'SC', 'PER', '6436-67647-436346', 'sadasd@gmail.com', 'img/perfil-por-defecto.jpg'),
('Filantropo', 'Aurelio', 'Perez', 'Zelaya', '1968-12-06', 777777, 'Licenciado en Filosofia', 'FF', 'PER', '97564213546', 'coordinadorFF@unah.hn', 'img/perfil-por-defecto.jpg'),
('Tito', 'Alfredo', 'Fernandez', 'Youn', '2018-12-14', 999999, 'Lic', 'EG', 'PER', '5324-53245-32453', 'sadasd@gmail.com', 'img/perfil-por-defecto.jpg'),
('Jose', 'Francisco', 'Morazan', 'Quezada', '1827-11-11', 101010, 'Licenciado en Historia', 'HH', 'PER', '8754621321', 'coordinadorHH@unah.hn', 'img/perfil-por-defecto.jpg'),
('Charly', 'Theodor', 'Cooper', 'Strange', '2018-12-22', 121212, 'Lic', 'IN', 'PER', '3452-3535-35345', 'sadasd@gmail.com', 'img/perfil-por-defecto.jpg'),
('Ingrid', 'Lorena', 'Diaz', 'Pereira', '1992-07-12', 131313, 'Licenciada en Fisica de Particulas', 'FS', 'PER', '8975641231', 'coordinadorFS@unah.hn', 'img/perfil-por-defecto.jpg'),
('Alberto', 'Ruben', 'Armijo', 'Rivera', '1956-12-29', 141414, 'Ingeniero Civil', 'DQ', 'PER', '89564123', 'coordinadorDQ@unah.hn', 'img/perfil-por-defecto.jpg'),
('Florinda', 'Azucena', 'Meza', 'Perez', '1978-12-14', 151515, 'Licenciatura Quimica', 'QQ', 'PER', '784523165', 'coordinadorQQ@unah.hn', 'img/perfil-por-defecto.jpg'),
('Juan', 'Alberto', 'Melara', 'zu', '2018-12-25', 171717, 'ing', 'TM', 'PER', '312312-123123-123', '1234@gmail.com', 'img/perfil-por-defecto.jpg'),
('Ramon', 'Eduardo', 'Fariseo', 'Velazques', '1950-12-14', 161616, 'Ingeniero Civil', 'II', 'PER', '8546512317', 'coordinadorII@unah.hn', 'img/perfil-por-defecto.jpg'),
('Carlos', 'Miguel', 'Cruz', 'Zelaya', '1989-12-08', 123456, 'Ingeniero en Sistemas', 'IS', 'PER', '987621564', 'docentesistemas@unah.hn', 'img/perfil-por-defecto.jpg'),
('Jose', 'Saul', 'Melara', 'safd', '2018-12-13', 20182018, 'ing', 'IS', 'PER', '213123-12312-123123', '1234@gmail.com', 'img/perfil-por-defecto.jpg'),
('Stephen', 'Emiliano', 'Soto', 'Perez', '1976-12-21', 234567, 'Ingeniero en Sistemas', 'IS', 'PH', '8975641324', 'docenteperez@unah.hn', 'img/perfil-por-defecto.jpg'),
('Jordy', 'Facundo', 'Vulnes', 'free', '2018-12-06', 20172017, 'ing', 'IS', 'PER', '2312-21312-123123', 'sadasd@gmail.com', 'img/perfil-por-defecto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `cuenta` text COLLATE latin1_spanish_ci NOT NULL,
  `primer_nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `segundo_nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `primer_apellido` text COLLATE latin1_spanish_ci NOT NULL,
  `segundo_apellido` text COLLATE latin1_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `carrera` text COLLATE latin1_spanish_ci NOT NULL,
  `n_identidad` text COLLATE latin1_spanish_ci NOT NULL,
  `email` text COLLATE latin1_spanish_ci NOT NULL,
  `indice-pe` int(11) NOT NULL,
  `foto` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`cuenta`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `carrera`, `n_identidad`, `email`, `indice-pe`, `foto`) VALUES
('20161002154', 'Christhoper', 'Daniel', 'Portillo', 'Reyes', '1998-05-14', 'IS', '0803-1998-00264', 'christhoper98_4@hotmail.com', 0, 'img/perfil-por-defecto.jpg'),
('20161006130', 'Elvin', 'Saul', 'Fortin', 'Ruiz', '1998-11-02', 'IS', '0801-1998-06074', 'elfort6@gmail.com', 0, 'img/perfil-por-defecto.jpg'),
('20161111111', 'Steban', 'Guillermo', 'Peralta', 'Lu', '2018-12-13', 'IS', '132-1231-12313', 'sadasd@gmail.com', 0, 'img/perfil-por-defecto.jpg'),
('2016222222', 'Charly', 'David', 'Cooper', 'Figueroa', '2018-12-13', 'IS', '1233-2133-12314', '1234@gmail.com', 0, 'img/perfil-por-defecto.jpg'),
('654321', 'Antonio', 'Gerardo', 'Junior', 'Alvarenga', '1998-12-21', 'IE', '89752', 'gg@gmail.com', 0, 'img/perfil-por-defecto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f3654321`
--

DROP TABLE IF EXISTS `f3654321`;
CREATE TABLE IF NOT EXISTS `f3654321` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `seccion` text NOT NULL,
  `hi` int(11) NOT NULL,
  `hf` int(11) NOT NULL,
  `dias` text NOT NULL,
  `edificio` text NOT NULL,
  `aula` text NOT NULL,
  `uv` int(11) NOT NULL,
  `obs` text NOT NULL,
  `periodo` int(11) NOT NULL,
  `semana` text NOT NULL,
  `anio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f32016222222`
--

DROP TABLE IF EXISTS `f32016222222`;
CREATE TABLE IF NOT EXISTS `f32016222222` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `seccion` text NOT NULL,
  `hi` int(11) NOT NULL,
  `hf` int(11) NOT NULL,
  `dias` text NOT NULL,
  `edificio` text NOT NULL,
  `aula` text NOT NULL,
  `uv` int(11) NOT NULL,
  `obs` text NOT NULL,
  `periodo` int(11) NOT NULL,
  `semana` text NOT NULL,
  `anio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `f32016222222`
--

INSERT INTO `f32016222222` (`codigo`, `asignatura`, `seccion`, `hi`, `hf`, `dias`, `edificio`, `aula`, `uv`, `obs`, `periodo`, `semana`, `anio`) VALUES
('IS-110', 'Introduccion. a la Ingenieria en Sistemas.', '0600', 600, 700, 'LuMaMi', 'B2', '210', 3, '', 3, '', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f320161002154`
--

DROP TABLE IF EXISTS `f320161002154`;
CREATE TABLE IF NOT EXISTS `f320161002154` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `seccion` text NOT NULL,
  `hi` int(11) NOT NULL,
  `hf` int(11) NOT NULL,
  `dias` text NOT NULL,
  `edificio` text NOT NULL,
  `aula` text NOT NULL,
  `uv` int(11) NOT NULL,
  `obs` text NOT NULL,
  `periodo` int(11) NOT NULL,
  `semana` text NOT NULL,
  `anio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f320161006130`
--

DROP TABLE IF EXISTS `f320161006130`;
CREATE TABLE IF NOT EXISTS `f320161006130` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `seccion` text NOT NULL,
  `hi` int(11) NOT NULL,
  `hf` int(11) NOT NULL,
  `dias` text NOT NULL,
  `edificio` text NOT NULL,
  `aula` text NOT NULL,
  `uv` int(11) NOT NULL,
  `obs` text NOT NULL,
  `periodo` int(11) NOT NULL,
  `semana` text NOT NULL,
  `anio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `f320161006130`
--

INSERT INTO `f320161006130` (`codigo`, `asignatura`, `seccion`, `hi`, `hf`, `dias`, `edificio`, `aula`, `uv`, `obs`, `periodo`, `semana`, `anio`) VALUES
('IS-110', 'Introduccion. a la Ingenieria en Sistemas.', '0600', 600, 700, 'LuMaMi', 'B2', '210', 3, '', 3, '', '2018'),
('IS-410', 'Programacion Orientada a Objetos', '1500', 1500, 1600, 'LuMaMiJuVi', 'B2', 'Lab2', 5, '', 3, '', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f320161111111`
--

DROP TABLE IF EXISTS `f320161111111`;
CREATE TABLE IF NOT EXISTS `f320161111111` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `seccion` text NOT NULL,
  `hi` int(11) NOT NULL,
  `hf` int(11) NOT NULL,
  `dias` text NOT NULL,
  `edificio` text NOT NULL,
  `aula` text NOT NULL,
  `uv` int(11) NOT NULL,
  `obs` text NOT NULL,
  `periodo` int(11) NOT NULL,
  `semana` text NOT NULL,
  `anio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `f320161111111`
--

INSERT INTO `f320161111111` (`codigo`, `asignatura`, `seccion`, `hi`, `hf`, `dias`, `edificio`, `aula`, `uv`, `obs`, `periodo`, `semana`, `anio`) VALUES
('IS-110', 'Introduccion. a la Ingenieria en Sistemas.', '0600', 600, 700, 'LuMaMi', 'B2', '210', 3, '', 3, '', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ha654321`
--

DROP TABLE IF EXISTS `ha654321`;
CREATE TABLE IF NOT EXISTS `ha654321` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ha2016222222`
--

DROP TABLE IF EXISTS `ha2016222222`;
CREATE TABLE IF NOT EXISTS `ha2016222222` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ha20161002154`
--

DROP TABLE IF EXISTS `ha20161002154`;
CREATE TABLE IF NOT EXISTS `ha20161002154` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ha20161002154`
--

INSERT INTO `ha20161002154` (`codigo`, `asignatura`, `uv`, `seccion`, `anio`, `periodo`, `calificacion`, `observacion`) VALUES
('IS-311', 'Circuitos Electricos para Ingenieria en Sistemas', 3, 800, 2018, 2, 100, 'APR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ha20161006130`
--

DROP TABLE IF EXISTS `ha20161006130`;
CREATE TABLE IF NOT EXISTS `ha20161006130` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ha20161006130`
--

INSERT INTO `ha20161006130` (`codigo`, `asignatura`, `uv`, `seccion`, `anio`, `periodo`, `calificacion`, `observacion`) VALUES
('IS-501', 'Base de Datos I', 5, 800, 2018, 3, 89, 'APR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ha20161111111`
--

DROP TABLE IF EXISTS `ha20161111111`;
CREATE TABLE IF NOT EXISTS `ha20161111111` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertaacademica`
--

DROP TABLE IF EXISTS `ofertaacademica`;
CREATE TABLE IF NOT EXISTS `ofertaacademica` (
  `fila` int(11) NOT NULL,
  `carrera` varchar(5) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `modalidad` text COLLATE latin1_spanish_ci NOT NULL,
  `grado` text COLLATE latin1_spanish_ci NOT NULL,
  `facultad` text COLLATE latin1_spanish_ci NOT NULL,
  `centro` text COLLATE latin1_spanish_ci NOT NULL,
  `areas` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `carrera` (`carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ofertaacademica`
--

INSERT INTO `ofertaacademica` (`fila`, `carrera`, `nombre`, `modalidad`, `grado`, `facultad`, `centro`, `areas`) VALUES
(1, 'IS', 'Ingenieria en sistemas', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'IS,MM,FF,SC,EG,IN,FS,DQ,HH'),
(2, 'IE', 'Ingenieria electrica industrial', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'IE,MM,FF,SC,EG,HH,FS,IN,DQ,IE,II,QQ'),
(3, 'IQ', 'Ingenieria quimica industrial', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'IQ,MM,FF,SC,EG,HH,FS,IN,DQ,IE,II,QQ'),
(4, 'IC', 'Ingenieria civil', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'IC,MM,FF,SC,EG,HH,FS,IN,DQ'),
(5, 'IM', 'Ingenieria mecanica industrial', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'IM,MM,FF,SC,EG,HH,FS,IN,DQ,IE,II'),
(6, 'MM', 'Matematicas', 'presencial', 'Licencitura', 'matematicas', 'CU', 'MM'),
(7, 'FF', 'Filosofia', 'presencial', 'Licenciatura', 'Filosofia', 'CU', 'FF'),
(7, 'SC', 'Sociologia', 'presencial', 'Licenciatura', 'Sociologia', 'CU', 'SC'),
(8, 'EG', 'Espaniol', 'presencial', 'Licenciatura', 'Espaniol', 'CU', 'EG'),
(9, 'HH', 'Historia de Honduras', 'presencial', 'Licenciatura', 'Historia', 'CU', 'HH'),
(10, 'FS', 'Fisica', 'presencial', 'Licenciatura', 'Fisica', 'CU', 'FS'),
(11, 'IN', 'Ingles', 'presencial', 'Licenciatura', 'Ingles', 'CU', 'IN'),
(12, 'DQ', 'Dibujo Tecnico', 'presencial', 'Licenciatura', 'Dibujo', 'Licenciatura', 'DQ'),
(13, 'QQ', 'Quimica', 'presencial', 'Licenciatura', 'Quimica', 'CU', 'QQ'),
(14, 'II', 'Ingenieria de Metodos', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'II'),
(15, 'TM', 'Termodinamica', 'presencial', 'Licenciatura', 'Ingenieria', 'CU', 'TM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peic`
--

DROP TABLE IF EXISTS `peic`;
CREATE TABLE IF NOT EXISTS `peic` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `requisitos` text NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peic`
--

INSERT INTO `peic` (`codigo`, `asignatura`, `uv`, `requisitos`) VALUES
('HH-101', 'Historia de Honduras', 4, 'NINGUNO'),
('MM-110', 'Matematica I', 5, 'NINGUNO'),
('MM-111', 'Geometria y Trigonometria', 5, 'NINGUNO'),
('SC-101', 'Sociologia', 4, 'NINGUNO'),
('FF-101', 'Filosofia', 4, 'NINGUNO'),
('IN-101', 'Ingles I', 4, 'NINGUNO'),
('MM-201', 'Calculo I', 5, 'NINGUNO'),
('MM-211', 'Vectores y Matrices', 3, 'NINGUNO'),
('DQ-101', 'Dibujo I', 2, 'NINGUNO'),
('IN-102', 'Ingles II', 4, 'NINGUNO'),
('FS-100', 'Fisica General I', 5, 'NINGUNO'),
('MM-202', 'Calculo II', 5, 'NINGUNO'),
('IN-103', 'Ingles III', 4, 'NINGUNO'),
('MM-401', 'Estadistica', 3, 'NINGUNO'),
('FS-200', 'Fisica Gral. II', 5, 'NINGUNO'),
('MM-314', 'Programacion', 3, 'NINGUNO'),
('MM-411', 'Ecuaciones Diferenciales', 3, 'NINGUNO'),
('EG-101', 'Espaniol', 4, 'NINGUNO'),
('MM-412', 'Analisis Numerico', 3, 'NINGUNO'),
('IC-100', 'Introduccion a la Ing Civil', 2, 'NINGUNO'),
('IC-302', 'Probabilidad y Estadistica Aplicada', 3, 'NINGUNO'),
('IC-361', 'Estatica', 5, 'NINGUNO'),
('IC-350', 'Topografia I', 5, 'NINGUNO'),
('IC-303', 'Analisis Numerico', 3, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peie`
--

DROP TABLE IF EXISTS `peie`;
CREATE TABLE IF NOT EXISTS `peie` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `requisitos` text NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peie`
--

INSERT INTO `peie` (`codigo`, `asignatura`, `uv`, `requisitos`) VALUES
('HH-101', 'Historia de Honduras', 4, 'NINGUNO'),
('MM-110', 'Matematica I', 5, 'NINGUNO'),
('MM-111', 'Geometria y Trigonometria', 5, 'NINGUNO'),
('SC-101', 'Sociologia', 4, 'NINGUNO'),
('IE-210', 'Introduccion a la Ing. Electrica', 2, ''),
('FF-101', 'Filosofia', 4, 'NINGUNO'),
('IN-101', 'Ingles I', 4, 'NINGUNO'),
('MM-201', 'Calculo I', 5, 'NINGUNO'),
('MM-211', 'Vectores y Matrices', 3, 'NINGUNO'),
('QQ-100', 'Quimica Fundamental', 4, 'NINGUNO'),
('DQ-101', 'Dibujo I', 2, 'NINGUNO'),
('IN-102', 'Ingles II', 4, 'NINGUNO'),
('FS-100', 'Fisica General I', 5, 'NINGUNO'),
('MM-202', 'Calculo II', 5, 'NINGUNO'),
('IN-103', 'Ingles III', 4, 'NINGUNO'),
('MM-401', 'Estadistica', 3, 'NINGUNO'),
('FS-200', 'Fisica Gral. II', 5, 'NINGUNO'),
('MM-314', 'Programacion', 3, 'NINGUNO'),
('MM-411', 'Ecuaciones Diferenciales', 3, 'NINGUNO'),
('FS-321', 'Electricidad y Magnetismo', 4, 'NINGUNO'),
('MM-502', 'Variable Compleja', 3, 'NINGUNO'),
('FS-415', 'Electricidad y Magnetismo II', 5, 'NINGUNO'),
('EG-101', 'Espaniol', 4, 'NINGUNO'),
('IE-423', 'T. de la Probabilidad', 3, 'NINGUNO'),
('IE-313', 'Metodos Matematicos para Ingenieria', 3, 'NINGUNO'),
('IE-314', 'Electronica I', 4, 'NINGUNO'),
('IE-414', 'Electronica II', 4, 'NINGUNO'),
('II-411', 'Organizacion y Metodos', 4, 'NINGUNO'),
('IE-415', 'Teoria de la Estabilidad', 3, 'NINGUNO'),
('IE-416', 'Electromagnetismo I', 4, 'NINGUNO'),
('IE-421', 'Maquinas Electricas I', 4, 'NINGUNO'),
('II-421', 'Ingenieria de Metodos', 4, 'NINGUNO'),
('IE-515', 'T de sistemas Lineales', 3, 'NINGUNO'),
('IE-425', 'Comunicaciones I', 3, 'NINGUNO'),
('IE-511', 'Maquinas Electricas II', 4, 'NINGUNO'),
('II-511', 'Investigacion de Operaciones', 3, 'NINGUNO'),
('IE-524', 'Proyecto', 3, 'NINGUNO'),
('IE-900', 'Seminario de Investigacion', 4, 'NINGUNO'),
('II-521', 'Ingenieria Economica', 3, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peim`
--

DROP TABLE IF EXISTS `peim`;
CREATE TABLE IF NOT EXISTS `peim` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `requisitos` text NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peim`
--

INSERT INTO `peim` (`codigo`, `asignatura`, `uv`, `requisitos`) VALUES
('HH-101', 'Historia de Honduras', 4, 'NINGUNO'),
('MM-110', 'Matematica I', 5, 'NINGUNO'),
('MM-111', 'Geometria y Trigonometria', 5, 'NINGUNO'),
('SC-101', 'Sociologia', 4, 'NINGUNO'),
('IM-224', 'Mecanica para Ingenieros I', 4, 'NINGUNO'),
('FF-101', 'Filosofia', 4, 'NINGUNO'),
('IN-101', 'Ingles I', 4, 'NINGUNO'),
('MM-201', 'Calculo I', 5, 'NINGUNO'),
('MM-211', 'Vectores y Matrices', 3, 'NINGUNO'),
('QQ-100', 'Quimica Fundamental', 4, 'NINGUNO'),
('IM-135', 'Introduccion a la Ing Mecanica', 2, 'NINGUNO'),
('DQ-101', 'Dibujo I', 2, 'NINGUNO'),
('IN-102', 'Ingles II', 4, 'NINGUNO'),
('FS-100', 'Fisica General I', 5, 'NINGUNO'),
('MM-202', 'Calculo II', 5, 'NINGUNO'),
('IN-103', 'Ingles III', 4, 'NINGUNO'),
('MM-401', 'Estadistica', 3, 'NINGUNO'),
('FS-200', 'Fisica Gral. II', 5, 'NINGUNO'),
('MM-314', 'Programacion', 3, 'NINGUNO'),
('MM-411', 'Ecuaciones Diferenciales', 3, 'NINGUNO'),
('EG-101', 'Espaniol', 4, 'NINGUNO'),
('IM-212', 'Metalurgia', 4, 'NINGUNO'),
('IM-233', 'Metodos Matematicos en Ingenieria', 3, 'NINGUNO'),
('IM-234', 'Mecanica para Ing II', 3, 'NINGUNO'),
('IM-315', 'Mecanica de Fluidos', 3, 'NINGUNO'),
('MM-412', 'Analisis Numerico', 3, 'NINGUNO'),
('IM-313', 'Mecanica de Materiales I', 5, 'NINGUNO'),
('IM-328', 'Termodinamica I', 3, 'NINGUNO'),
('IM-327', 'Mecanica de Materiales II', 4, 'NINGUNO'),
('IM-225', 'Metrologia', 3, 'NINGUNO'),
('IM-331', 'Elementos de Maquinas I', 4, 'NINGUNO'),
('IM-323', 'Procesos de manufactura I', 4, 'NINGUNO'),
('IM-334', 'Termodinamica II', 3, 'NINGUNO'),
('IM-326', 'Cinematica de Maquinas', 3, 'NINGUNO'),
('IM-419', 'Elementos de Maquinas II', 3, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peiq`
--

DROP TABLE IF EXISTS `peiq`;
CREATE TABLE IF NOT EXISTS `peiq` (
  `codigo` text NOT NULL,
  `asignatura` text NOT NULL,
  `uv` int(11) NOT NULL,
  `requisitos` text NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peiq`
--

INSERT INTO `peiq` (`codigo`, `asignatura`, `uv`, `requisitos`) VALUES
('HH-101', 'Historia de Honduras', 4, 'NINGUNO'),
('MM-110', 'Matematica I', 5, 'NINGUNO'),
('MM-111', 'Geometria y Trigonometria', 5, 'NINGUNO'),
('SC-101', 'Sociologia', 4, 'NINGUNO'),
('IQ-100', 'Introduccion a la Ing. Quimica', 2, 'NINGUNO'),
('FF-101', 'Filosofia', 4, 'NINGUNO'),
('IN-101', 'Ingles I', 4, 'NINGUNO'),
('MM-201', 'Calculo I', 5, 'NINGUNO'),
('MM-211', 'Vectores y Matrices', 3, 'NINGUNO'),
('QQ-115', 'Quimica General I', 5, 'NINGUNO'),
('DQ-101', 'Dibujo I', 2, 'NINGUNO'),
('IN-102', 'Ingles II', 4, 'NINGUNO'),
('FS-100', 'Fisica General I', 5, 'NINGUNO'),
('MM-202', 'Calculo II', 5, 'NINGUNO'),
('QQ-215', 'Quimica Gral. II', 5, 'NINGUNO'),
('IN-103', 'Ingles III', 4, 'NINGUNO'),
('MM-401', 'Estadistica', 3, 'NINGUNO'),
('FS-200', 'Fisica Gral. II', 5, 'NINGUNO'),
('MM-314', 'Programacion', 3, 'NINGUNO'),
('MM-411', 'Ecuaciones Diferenciales', 3, 'NINGUNO'),
('QQ-225', 'Quimica Analitica Cuantitativa', 5, 'NINGUNO'),
('FS-321', 'Electricidad y Magnetismo', 4, 'NINGUNO'),
('QQ-313', 'Quimica Organica I', 4, 'NINGUNO'),
('IQ-321', 'Balance de Materia y Energia', 3, 'NINGUNO'),
('IQ-324', 'Fisicoquimica', 3, 'NINGUNO'),
('EG-101', 'Espaniol', 4, 'NINGUNO'),
('IQ-313', 'Metodos Matematicos en Ing. Quimica', 3, 'NINGUNO'),
('QQ-323', 'Quimica organica II', 4, 'NINGUNO'),
('IQ-322', 'Termodinamica I para Ingenieria Quimica', 4, 'NINGUNO'),
('IQ-420', 'Mecanica de Fluidos para Ing. Quimica', 4, 'NINGUNO'),
('IQ-412', 'Termodinamica II para Ing. Quimica', 4, 'NINGUNO'),
('II-411', 'Organizacion y Metodos', 4, 'NINGUNO'),
('IE-528', 'Maquinas Electricas', 4, 'NINGUNO'),
('IQ-421', 'Operaciones Unitarias I', 4, 'NINGUNO'),
('MM-414', 'Analisis Numerico', 3, 'NINGUNO'),
('IQ-514', 'Instrumentacion y Control de Procesos', 3, 'NINGUNO'),
('IQ-422', 'Procesos de Transferencia', 4, 'NINGUNO'),
('II-421', 'Ing. de Metodos', 4, 'NINGUNO'),
('IQ-513', 'Laboratorio de Operaciones Unitarias', 5, 'NINGUNO'),
('IQ-512', 'Cinetica Aplicada', 3, 'NINGUNO'),
('IQ-511', 'Operaciones Unitarias II', 4, 'NINGUNO'),
('IQ-430', 'Control de Calidad I', 4, 'NINGUNO'),
('II-511', 'Investigacion de Operaciones', 3, 'NINGUNO'),
('IQ-521', 'Proyectos en Ingenieria Quimica', 6, 'NINGUNO'),
('IQ-523', 'Laboratorio de Fenomenos de Tranporte', 5, 'NINGUNO'),
('II-521', 'Ingenieria Economica', 3, 'NINGUNO'),
('IQ-522', 'Operaciones Unitarias III', 4, 'NINGUNO'),
('IQ-440', 'Control de calidad II', 4, 'NINGUNO'),
('IE-414', 'Electronica II', 4, 'NINGUNO'),
('IE-415', 'Teoria de la Estabilidad', 3, 'NINGUNO'),
('IE-416', 'Electromagnetismo I', 4, 'NINGUNO'),
('IE-421', 'Maquinas Electricas I', 4, 'NINGUNO'),
('IE-515', 'T de sistemas Lineales', 3, 'NINGUNO'),
('IE-425', 'Comunicaciones I', 3, 'NINGUNO'),
('IE-511', 'Maquinas Electricas II', 4, 'NINGUNO'),
('IE-524', 'Proyecto', 3, 'NINGUNO'),
('IE-900', 'Seminario de Investigacion', 4, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peis`
--

DROP TABLE IF EXISTS `peis`;
CREATE TABLE IF NOT EXISTS `peis` (
  `codigo` text COLLATE latin1_spanish_ci NOT NULL,
  `asignatura` text COLLATE latin1_spanish_ci NOT NULL,
  `uv` int(11) NOT NULL,
  `requisitos` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `codigo` (`codigo`(10))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peis`
--

INSERT INTO `peis` (`codigo`, `asignatura`, `uv`, `requisitos`) VALUES
('MM-110', 'Matematicas I', 5, 'NINGUNO'),
('MM-111', 'Geometria y Trigonometria', 5, 'NINGUNO'),
('IS-110', 'Introduccion a la Ingenieria en Sistemas', 3, 'Ninguno'),
('IS-311', 'Circuitos Electricos para Ingenieria en Sistemas', 3, 'NINGUNO'),
('MM-211', 'Vectores y Matrices', 3, 'NINGUNO'),
('IN-101', 'Ingles I', 4, 'NINGUNO'),
('MM-201', 'Calculo I', 5, 'NINGUNO'),
('MM-202', 'Calculo II', 3, 'NINGUNO'),
('IN-102', 'Ingles II', 4, 'NINGUNO'),
('MM-314', 'Programacion I', 3, 'NINGUNO'),
('EG-011', 'Espaniol General 1', 4, 'NINGUNO'),
('FS-100', 'Fisica I', 5, 'NINGUNO'),
('MM-411', 'Ecuaciones Diferenciales', 3, 'NINGUNO'),
('IS-210', 'Programacion II', 4, 'NINGUNO'),
('FF-101', 'Filosofia', 4, 'NINGUNO'),
('IN-103', 'Ingles III', 4, 'NINGUNO'),
('DQ-101', 'Dibujo I', 2, 'NINGUNO'),
('FS-200', 'Fisica II', 5, 'NINGUNO'),
('MM-420', 'Matematica Discreta', 4, 'NINGUNO'),
('DQ-102', 'Dibujo II', 2, 'NINGUNO'),
('MM-401', 'Estadistica', 3, 'NINGUNO'),
('IS-310', 'Algoritmos y Estructura de Datos', 4, 'NINGUNO'),
('IS-410', 'Programacion Orientada a Objetos', 5, 'NINGUNO'),
('IS-411', 'Electronica para Ing. en Sistemas', 3, 'NINGUNO'),
('IS-412', 'Sistemas Operativos I', 4, 'NINGUNO'),
('IS-501', 'Base de Datos I', 5, 'NINGUNO'),
('HH-101', 'Historia de Honduras', 4, 'NINGUNO'),
('IS-510', 'Instalaciones Electricas', 3, 'NINGUNO'),
('IS-511', 'Redes de Datos I', 4, 'NINGUNO'),
('IS-512', 'Sistemas Operativos II', 4, 'NINGUNO'),
('IS-601', 'Base de Datos II', 4, 'NINGUNO'),
('IS-603', 'Arquitectura de Computadoras', 4, 'NINGUNO'),
('IS-513', 'Lenguajes de Programacion', 4, 'NINGUNO'),
('IS-611', 'Redes de Datos II', 4, 'NINGUNO'),
('IS-711', 'Disenio Digital', 4, 'NINGUNO'),
('IS-602', 'Sistema de Informacion', 4, 'NINGUNO'),
('IS-811', 'Seguridad Informatica', 4, 'NINGUNO'),
('IS-720', 'Administracion I', 4, 'NINGUNO'),
('IS-702', 'Analisis y Disenio de Sistemas', 4, 'NINGUNO'),
('IS-721', 'Contabilidad I', 4, 'NINGUNO'),
('IS-903', 'Auditoria Informatica', 3, 'NINGUNO'),
('IS-701', 'Inteligencia Artificial', 4, 'NINGUNO'),
('IS-802', 'Ingenieria del Software', 4, 'NINGUNO'),
('IS-820', 'Finanzas Administrativas', 4, 'NINGUNO'),
('IS-902', 'Industria del Software', 4, 'NINGUNO'),
('IS-904', 'Gerencia Informatica', 4, 'NINGUNO'),
('IS-906', 'Topicos Especiales y Avanzados', 5, 'NINGUNO'),
('IS-905', 'Economia Digital', 5, 'NINGUNO'),
('IS-115', 'Seminario de Investigacion', 3, 'NINGUNO'),
('IS-910', 'Teoria de la Simulacion', 3, 'NINGUNO'),
('IS-911', 'Microprocesadores', 3, 'NINGUNO'),
('IS-914', 'Liderazgo para el cambio', 3, 'NINGUNO'),
('IS-912', 'Sistemas Expertos', 3, 'NINGUNO'),
('IS-913', 'Disenio de Compiladores', 3, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `seccion` text COLLATE latin1_spanish_ci NOT NULL,
  `asignatura` text COLLATE latin1_spanish_ci NOT NULL,
  `docente` text COLLATE latin1_spanish_ci NOT NULL,
  `cupos` int(11) NOT NULL,
  `dias` text COLLATE latin1_spanish_ci NOT NULL,
  `periodo` int(11) NOT NULL,
  `hora_inicial` int(11) NOT NULL,
  `hora_final` int(11) NOT NULL,
  `edificio` text COLLATE latin1_spanish_ci NOT NULL,
  `aula` text COLLATE latin1_spanish_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `codigosec` text COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `codigosec` (`codigosec`(10))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`seccion`, `asignatura`, `docente`, `cupos`, `dias`, `periodo`, `hora_inicial`, `hora_final`, `edificio`, `aula`, `anio`, `codigosec`) VALUES
('1000', 'IS-310', '20182018', 60, 'LuMaMiJu', 3, 1000, 1100, 'B2', 'Lab210', 2018, '1000_IS-310_3_2018'),
('1200', 'IS-311', '123456', 35, 'LuMaMi', 3, 1200, 1300, 'B2', '307', 2018, '1200_IS-311_3_2018'),
('1500', 'IS-410', '111111', 35, 'LuMaMiJuVi', 3, 1500, 1600, 'B2', 'Lab2', 2018, '1500_IS-410_3_2018'),
('0600', 'IS-110', '111111', 50, 'LuMaMi', 3, 600, 700, 'B2', '210', 2018, '0600_IS-110_3_2018'),
('0800', 'IS-110', '20182018', 50, 'LuMiVi', 3, 800, 900, 'B2', '210', 2018, '0800_IS-110_3_2018'),
('0900', 'IS-210', '20182018', 45, 'LuMaMiJu', 3, 900, 1000, 'B2', 'Lab1', 2018, '0900_IS-210_3_2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cuenta` text COLLATE latin1_spanish_ci NOT NULL,
  `clave` text COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  UNIQUE KEY `cuenta` (`cuenta`(20))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cuenta`, `clave`, `nivel`) VALUES
('20161002154', '$2y$10$OWtTS45JBBI6XER3PVNjquVfWUncPx2/Z19H.r.XkonZMFJz9Yelu', 1),
('444444', '$2y$10$Nmbj89PqgQqpfrthMVPgce92X1RIfN0kMSPs2QZqYS2KGDK6fzIZW', 3),
('1998', '$2y$10$2v7gtbyai2Jvk7hL3Hli4.cTBny8lHMrigdf9QLCfj.d2qQRplO06', 4),
('333333', '$2y$10$0YeWzA.sprLZMrfvI9WYn.KPgTHn.K/2dJv0zNR37EkCNy6TPSsla', 3),
('222222', '$2y$10$G7q5db2ccHTFLxi9CCTomeLJUmhF1dudqMP1tY0wz3Ks5ZVhXWarm', 3),
('20161006130', '$2y$10$TY2/sxruvVcVe1o6bHVos.QKz7wrzVyW1YfIvGJ2XpI5vbZjQwnMW', 1),
('111111', '$2y$10$bacQWtbCbGTS5SgcZHvo2.Ards9pH4RbF4G/XtjcC233p9SZY.76C', 3),
('666666', '$2y$10$zlxCoRjG/585jgpFM.qVJu7plPciEp69k.Sw8CtnU7ssPyvrqOL2i', 3),
('555555', '$2y$10$SMQ0JHr/wTL62SCN5ahBQ.6VSuVu0TVbvMK3I/mu28hdBHtapO5Hu', 3),
('888888', '$2y$10$ibIUwA2ufW5VBcrHUkkdkOhZA4c3spzS7mAwJqHr7BsOQdoKobMjO', 3),
('777777', '$2y$10$TC5G8lgzgWZcnuTrwz632OwX4pmpfyz2VYipivu0mOWyh458i9fpC', 3),
('999999', '$2y$10$luj9jKbMD1qGBlIDtz7Vf.zHnsXoe/JTe/ht132ZY7PGRdMhiSwVu', 3),
('101010', '$2y$10$5026k8bBnyhEBbN7TiXuduP0K.PwV6BNcmYLCd5.xxrepkR6iEUCW', 3),
('121212', '$2y$10$V1hPiCdp9XT6YgCMLM9Zx.yRNyeCvgbcRKZvSKUCVZmb4bvKz84B6', 3),
('131313', '$2y$10$0h031uwy8mNx/857/CyVoeNGG.aF1NGcR2GOMjiXrGNF//bzABNXK', 3),
('141414', '$2y$10$E9yKGsokpONPUP6LM0hor.7NnWBPXOw9//a2IfaU4lvO3dK5OLeG.', 2),
('151515', '$2y$10$3dFf8MI36WqGuaQBVlhno.7orNpwce1MjOiIdx20X.cYhYvtsp3Oi', 3),
('171717', '$2y$10$xuxvZg9biqYkovB7SIvxPeAhag6AvVUpSHAdl4js5.djH3Xydeh.O', 3),
('161616', '$2y$10$P9gx/UMknxx5C1VOkerGPe.iPPnWRb3OHX6uTD/o977c77L5hiV9C', 3),
('123456', '$2y$10$oT94GGzRPN4Zi5AxfSGWROLrrNeLjgWVylHObWjnmqUqi/IFvC47u', 2),
('20161111111', '$2y$10$HDZbPS5XgPinI/zAwP0wp.eHcXBQeeBbfoWNR5pqk1U92dFXUH6Ji', 1),
('2016222222', '$2y$10$dZ1X7WLWI6M1Tb69xOZbHOCOOGsIKRPuyyLdlnaU3gwreBDHSJ312', 1),
('20182018', '$2y$10$4dCxTRiCD22z.yUMn/4YKuq4FfGkmr/sCGQpvXQXo7igRGFZFvD5O', 2),
('234567', '$2y$10$xGuDsDxHc1vU3zbHuZfeXe/Oid.ddw3JMhJ5SBt442DaXup9AgcGO', 2),
('20172017', '$2y$10$W.C4eTysZBf4Amr6Nl6/x.OgzZ4Kyhhmz29tyk/brhLEG0IAc1pZ.', 2),
('654321', '$2y$10$9ngEdTNCzmQN4B/MMvI6COQ99e7dTumQHEKCs04/37J3fYmDmN/d6', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

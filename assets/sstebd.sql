-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 05:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sstebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `pass`, `tipo_usuario`) VALUES
(201224100, 'ROBERTO CARLOS', 'GARDUÑO', 'ROMO', 'roberto123', 'AD');

--
-- Triggers `administrador`
--
DELIMITER $$
CREATE TRIGGER `UpdateAminPass` AFTER UPDATE ON `administrador` FOR EACH ROW update usuarios set pass=new.pass where matricula=new.matricula
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `newAdmin` AFTER INSERT ON `administrador` FOR EACH ROW insert into usuarios(matricula,pass, tipo_usuario)
values (new.matricula, new.pass, new.tipo_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `alumnos_actividad`
--

CREATE TABLE `alumnos_actividad` (
  `idalumnos_actividad` int(11) NOT NULL,
  `actividad` varchar(2) DEFAULT NULL,
  `resultados` longtext,
  `observaciones` longtext,
  `FK_matricula` int(10) DEFAULT NULL,
  `FK_bitacora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `baja`
--

CREATE TABLE `baja` (
  `idbaja` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bitacora_mensual`
--

CREATE TABLE `bitacora_mensual` (
  `idbitacora` int(11) NOT NULL,
  `periodo` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(1) DEFAULT NULL,
  `descripcion` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coordinador`
--

CREATE TABLE `coordinador` (
  `matricula` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(8) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinador`
--

INSERT INTO `coordinador` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `correo`, `telefono`, `pass`, `status`, `tipo_usuario`) VALUES
(201224103, 'YAHILT', 'HERNANDEZ', 'HERNANDEZ', 'yahilt@gmail.com', '5537678608', 'yahilt1212', 'ACTIVO', 'CA'),
(201424102, 'MARIA', 'SANCHEZ', 'PEREZ', 'maria@gmail.com', '5512345678', '12345', 'ACTIVO', 'CI');

--
-- Triggers `coordinador`
--
DELIMITER $$
CREATE TRIGGER `UpdateCoordinadorPass` AFTER UPDATE ON `coordinador` FOR EACH ROW update usuarios set pass=new.pass where matricula=new.matricula
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `newCoordinador` AFTER INSERT ON `coordinador` FOR EACH ROW insert into usuarios(matricula,pass, tipo_usuario)
values (new.matricula, new.pass, new.tipo_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cuantitativo_irregular`
--

CREATE TABLE `cuantitativo_irregular` (
  `idcuantitativo` int(11) NOT NULL,
  `total` int(20) DEFAULT NULL,
  `evaluacion_final` int(3) DEFAULT NULL,
  `repeticion` varchar(2) DEFAULT NULL,
  `FK_tutorado` int(10) DEFAULT NULL,
  `FK_baja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuantitativo_materia`
--

CREATE TABLE `cuantitativo_materia` (
  `idcuantitativo_materia` int(11) NOT NULL,
  `FK_clave` int(5) DEFAULT NULL,
  `FK_cuantitativo` int(11) DEFAULT NULL,
  `parcial1` int(11) DEFAULT NULL,
  `parcial2` int(11) DEFAULT NULL,
  `parcial3` int(11) DEFAULT NULL,
  `parcial4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuantitativo_profesores`
--

CREATE TABLE `cuantitativo_profesores` (
  `idcuantitativo_profesores` int(11) NOT NULL,
  `FK_profesores` int(11) DEFAULT NULL,
  `FK_cuantitativoprofesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `factores`
--

CREATE TABLE `factores` (
  `idfactores` int(11) NOT NULL,
  `nombre` varchar(11) DEFAULT NULL,
  `FK_cuantitativofactor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formato_individual`
--

CREATE TABLE `formato_individual` (
  `idformato` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(1) DEFAULT NULL,
  `detecto_problema` longtext,
  `avance` int(3) DEFAULT NULL,
  `firma_alumno` varchar(2) DEFAULT NULL,
  `firma_tutor` varchar(2) DEFAULT NULL,
  `FK_area` int(11) DEFAULT NULL,
  `FK_tutoradoindividual` int(10) DEFAULT NULL,
  `FK_lugar` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE `lugar` (
  `idgrupo` int(4) NOT NULL,
  `salon` varchar(3) DEFAULT NULL,
  `edificio` varchar(60) DEFAULT NULL,
  `semestre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idclave` int(5) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `credito` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`idclave`, `nombre`, `credito`) VALUES
(41788, 'TALLER DE ETICA', '4'),
(41789, 'FUNDAMENTOS DE INVESTIGACION', '4'),
(41790, 'CALCULO DIFERENCIAL', '5'),
(41791, 'FUNDAMENTOS DE PROGRAMACION', '5'),
(41792, 'MATEMATICAS DISCRETAS', '5'),
(41793, 'TALLER DE ADMINISTRACION', '4'),
(42794, 'PROGRAMACION ORIENTADA A OBJETOS', '5'),
(42795, 'CALCULO INTEGRAL', '5'),
(42796, 'CONTABILIDAD FINANCIERA', '4'),
(42797, 'QUIMICA', '4'),
(42798, 'ALGEBRA LINEAL', '5'),
(42799, 'PROBABILIDAD Y ESTADISTICA', '5'),
(43061, 'CULTURA EMPRESARIAL', '4'),
(43064, 'FISICA GENERAL', '5'),
(43559, 'CALCULO VECTORIAL', '5'),
(43560, 'ESTRUCTURA DE DATOS', '5'),
(43562, 'INVESTIGACION DE OPERACIONES', '4'),
(43563, 'SISTEMAS OPERATIVOS', '4'),
(44067, 'TOPICOS AVANZADOS DE PROGRAMACION', '5'),
(44069, 'TALLER DE SISTEMAS OPERATIVOS', '4'),
(44565, 'ECUACIONES DIFERENCIALES', '5'),
(44566, 'METODOS NUMERICOS', '4'),
(44568, 'FUNDAMENTOS DE BASES DE DATOS', '5'),
(44570, 'PRINCIPIOS ELECTRICOS Y APLICACIONES DIGITALES', '5'),
(45073, 'TALLER DE BASES DE DATOS', '4'),
(45074, 'SIMULACION', '5'),
(45075, 'FUNDAMENTOS DE INGENIERIA DE SOFTWARE', '4'),
(45076, 'ARQUITECTURA DE COMPUTADORAS', '5'),
(45571, 'DESARROLLO SUSTENTABLE', '5'),
(45572, 'FUNDAMENTOS DE TELECOMUNICACIONES', '4'),
(46077, 'LENGUAJES Y AUTOMATAZ I', '5'),
(46078, 'REDES DE COMPUTADORAS', '5'),
(46079, 'ADMINISTRACION DE BASES DE DATOS', '5'),
(46080, 'GRAFICACION', '4'),
(46081, 'INGENIERIA DE SOFTWARE', '5'),
(46082, 'LENGUAJES DE INTERFAZ', '4'),
(47083, 'LENGUAJES Y AUTOMATAZ II', '5'),
(47084, 'CONMUTACION Y ENRUTAMIENTO DE REDES DE DATOS', '5');

-- --------------------------------------------------------

--
-- Table structure for table `motivo`
--

CREATE TABLE `motivo` (
  `idmotivo` int(11) NOT NULL,
  `nombre` varchar(2) DEFAULT NULL,
  `FK_formato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `idprofesores` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reporte_especial`
--

CREATE TABLE `reporte_especial` (
  `idreporte` int(11) NOT NULL,
  `factores` varchar(11) DEFAULT NULL,
  `materia_problema` varchar(50) DEFAULT NULL,
  `actividades` longtext,
  `materia_rescatada` varchar(50) DEFAULT NULL,
  `alumno_regular` varchar(2) DEFAULT NULL,
  `seguimiento` varchar(2) DEFAULT NULL,
  `baja` varchar(2) DEFAULT NULL,
  `FK_tutorespecial` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `matricula` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `correo`, `telefono`, `status`, `pass`, `tipo_usuario`) VALUES
(201224101, 'JOSE ADAN', 'LOPEZ', 'SANCHEZ', 'adan@gmail.com', '5537678608', 'INACTIVO', '123', 'TU'),
(201224106, 'CONSUELO', 'CERON', 'RODRIGUEZ', 'consuelo@gmail.com', '5537678608', 'ACTIVO', '123', 'TU'),
(201224107, 'MARCO ANTONIO', 'ACOSTA', 'MEDIZABAL', 'acosta@gmail.com', '5512345678', 'ACTIVO', '123', 'TU'),
(201224108, 'IVAN', 'AZAMAR', 'PALMA', 'azamar@gmail.com', '5537678608', 'ACTIVO', '123', 'TU');

--
-- Triggers `tutor`
--
DELIMITER $$
CREATE TRIGGER `UpdateTutorPass` AFTER UPDATE ON `tutor` FOR EACH ROW update usuarios set pass=new.pass where matricula=new.matricula
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `newTutor` AFTER INSERT ON `tutor` FOR EACH ROW insert into usuarios(matricula,pass, tipo_usuario)
values (new.matricula, new.pass, new.tipo_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tutorado`
--

CREATE TABLE `tutorado` (
  `matricula` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `semestre` varchar(20) DEFAULT NULL,
  `programa` varchar(30) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `tipo_tutoria` varchar(18) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `FK_tutor` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutorado`
--

INSERT INTO `tutorado` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `carrera`, `semestre`, `programa`, `correo`, `telefono`, `tipo_tutoria`, `pass`, `tipo_usuario`, `status`, `FK_tutor`) VALUES
(201424100, 'ABEL', 'SANCHEZ', 'MEDIZABAL', 'ISC', 'TERCERO', 'ESPECIAL', NULL, NULL, 'TUTORÍA INDIVIDUAL', '123', 'TO', 'ACTIVO', NULL),
(201424101, 'ROSAICELA', 'ENRIQUEZ', 'SANTILLAN', 'ISC', 'OCTAVO', 'ESPECIAL', 'enriq.rosa@yahoo.com', '5537678608', 'TUTORÍA INDIVIDUAL', '1234', 'TO', 'ACTIVO', 201224106),
(201424102, 'ADAN ISAAC', 'CEDEñO', 'PAREDES', 'ISC', 'SEXTO', 'ESPECIAL', NULL, NULL, 'TUTORÍA INDIVIDUAL', '1234', 'TO', 'ACTIVO', 201224101),
(201424103, 'JORDANI', 'VALENCIA', 'ROSAS', 'ISC', 'SEXTO', 'ESPECIAL', NULL, NULL, 'TUTORÍA INDIVIDUAL', '1234', 'TO', 'ACTIVO', 201224107),
(201424104, 'GUSTAVO DANIEL', 'CRUZ', 'VAZQUEZ', 'ISC', 'QUINTO', 'ESPECIAL', NULL, NULL, 'TUTORÍA INDIVIDUAL', '1234', 'TO', 'ACTIVO', 201224108),
(201424105, 'VERONICA', 'SANCHEZ', 'FLORES', 'ISC', 'TERCERO', 'ESPECIAL', NULL, NULL, 'TUTORIA INDIVIDUAL', '1234', 'TO', 'INACTIVO', 201224101);

--
-- Triggers `tutorado`
--
DELIMITER $$
CREATE TRIGGER `UpdateTutoradoPass` AFTER UPDATE ON `tutorado` FOR EACH ROW update usuarios set pass=new.pass where matricula=new.matricula
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `newTutorado` AFTER INSERT ON `tutorado` FOR EACH ROW insert into usuarios(matricula,pass, tipo_usuario)
values (new.matricula, new.pass, new.tipo_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tutor_tutorado`
-- (See below for the actual view)
--
CREATE TABLE `tutor_tutorado` (
`matricula` int(10)
,`matriculaTutorado` int(10)
,`nombre` varchar(25)
,`ap_paterno` varchar(25)
,`ap_materno` varchar(25)
);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `matricula` int(10) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `matricula`, `pass`, `tipo_usuario`) VALUES
(1, 201224100, 'roberto123', 'AD'),
(7, 201424101, '1234', 'TO'),
(8, 201424102, '1234', 'TO'),
(9, 201424103, '1234', 'TO'),
(10, 201424104, '1234', 'TO'),
(11, 201224103, 'yahilt1212', 'CA'),
(12, 201424102, '1234', 'CI'),
(19, 201224101, '123', 'TU'),
(20, 201424106, '123', 'TU'),
(21, 201224107, '123', 'TU'),
(22, 201224108, '123', 'TU'),
(23, 201424106, '123', 'TO'),
(24, 201424100, '123', 'TO'),
(25, 201424100, '123', 'TO');

-- --------------------------------------------------------

--
-- Structure for view `tutor_tutorado`
--
DROP TABLE IF EXISTS `tutor_tutorado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tutor_tutorado`  AS  (select `tutor`.`matricula` AS `matricula`,`tutorado`.`matricula` AS `matriculaTutorado`,`tutor`.`nombre` AS `nombre`,`tutor`.`ap_paterno` AS `ap_paterno`,`tutor`.`ap_materno` AS `ap_materno` from (`tutor` join `tutorado` on((`tutorado`.`FK_tutor` = `tutor`.`matricula`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `alumnos_actividad`
--
ALTER TABLE `alumnos_actividad`
  ADD PRIMARY KEY (`idalumnos_actividad`),
  ADD KEY `FK_matricula_idx` (`FK_matricula`),
  ADD KEY `FK_bitacora_idx` (`FK_bitacora`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indexes for table `baja`
--
ALTER TABLE `baja`
  ADD PRIMARY KEY (`idbaja`);

--
-- Indexes for table `bitacora_mensual`
--
ALTER TABLE `bitacora_mensual`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indexes for table `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `cuantitativo_irregular`
--
ALTER TABLE `cuantitativo_irregular`
  ADD PRIMARY KEY (`idcuantitativo`),
  ADD KEY `FK_tutorado_idx` (`FK_tutorado`),
  ADD KEY `FK_baja_idx` (`FK_baja`);

--
-- Indexes for table `cuantitativo_materia`
--
ALTER TABLE `cuantitativo_materia`
  ADD PRIMARY KEY (`idcuantitativo_materia`),
  ADD KEY `FK_clave_idx` (`FK_clave`),
  ADD KEY `FK_cuantitativo_idx` (`FK_cuantitativo`);

--
-- Indexes for table `cuantitativo_profesores`
--
ALTER TABLE `cuantitativo_profesores`
  ADD PRIMARY KEY (`idcuantitativo_profesores`),
  ADD KEY `FK_profesores_idx` (`FK_profesores`),
  ADD KEY `FK_cuantitativo_idx` (`FK_cuantitativoprofesor`);

--
-- Indexes for table `factores`
--
ALTER TABLE `factores`
  ADD PRIMARY KEY (`idfactores`),
  ADD KEY `FK_cuantitativofactor_idx` (`FK_cuantitativofactor`);

--
-- Indexes for table `formato_individual`
--
ALTER TABLE `formato_individual`
  ADD PRIMARY KEY (`idformato`),
  ADD KEY `FK_tutorado_idx` (`FK_tutoradoindividual`),
  ADD KEY `FK_lugar_idx` (`FK_lugar`),
  ADD KEY `FK_area_idx` (`FK_area`);

--
-- Indexes for table `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idgrupo`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idclave`);

--
-- Indexes for table `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`idmotivo`),
  ADD KEY `FK_formato_idx` (`FK_formato`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`idprofesores`);

--
-- Indexes for table `reporte_especial`
--
ALTER TABLE `reporte_especial`
  ADD PRIMARY KEY (`idreporte`),
  ADD KEY `FK_tutor_idx` (`FK_tutorespecial`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `tutorado`
--
ALTER TABLE `tutorado`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `FK_tutor_idx` (`FK_tutor`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos_actividad`
--
ALTER TABLE `alumnos_actividad`
  MODIFY `idalumnos_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baja`
--
ALTER TABLE `baja`
  MODIFY `idbaja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bitacora_mensual`
--
ALTER TABLE `bitacora_mensual`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuantitativo_irregular`
--
ALTER TABLE `cuantitativo_irregular`
  MODIFY `idcuantitativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuantitativo_materia`
--
ALTER TABLE `cuantitativo_materia`
  MODIFY `idcuantitativo_materia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuantitativo_profesores`
--
ALTER TABLE `cuantitativo_profesores`
  MODIFY `idcuantitativo_profesores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factores`
--
ALTER TABLE `factores`
  MODIFY `idfactores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formato_individual`
--
ALTER TABLE `formato_individual`
  MODIFY `idformato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motivo`
--
ALTER TABLE `motivo`
  MODIFY `idmotivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `idprofesores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporte_especial`
--
ALTER TABLE `reporte_especial`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos_actividad`
--
ALTER TABLE `alumnos_actividad`
  ADD CONSTRAINT `FK_bitacora` FOREIGN KEY (`FK_bitacora`) REFERENCES `bitacora_mensual` (`idbitacora`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_matricula` FOREIGN KEY (`FK_matricula`) REFERENCES `tutorado` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuantitativo_irregular`
--
ALTER TABLE `cuantitativo_irregular`
  ADD CONSTRAINT `FK_baja` FOREIGN KEY (`FK_baja`) REFERENCES `baja` (`idbaja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tutorado` FOREIGN KEY (`FK_tutorado`) REFERENCES `tutorado` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuantitativo_materia`
--
ALTER TABLE `cuantitativo_materia`
  ADD CONSTRAINT `FK_clave` FOREIGN KEY (`FK_clave`) REFERENCES `materia` (`idclave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cuantitativo` FOREIGN KEY (`FK_cuantitativo`) REFERENCES `cuantitativo_irregular` (`idcuantitativo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuantitativo_profesores`
--
ALTER TABLE `cuantitativo_profesores`
  ADD CONSTRAINT `FK_cuantitativoprofesor` FOREIGN KEY (`FK_cuantitativoprofesor`) REFERENCES `cuantitativo_irregular` (`idcuantitativo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_profesores` FOREIGN KEY (`FK_profesores`) REFERENCES `profesores` (`idprofesores`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factores`
--
ALTER TABLE `factores`
  ADD CONSTRAINT `FK_cuantitativofactor` FOREIGN KEY (`FK_cuantitativofactor`) REFERENCES `cuantitativo_irregular` (`idcuantitativo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formato_individual`
--
ALTER TABLE `formato_individual`
  ADD CONSTRAINT `FK_area` FOREIGN KEY (`FK_area`) REFERENCES `area` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lugar` FOREIGN KEY (`FK_lugar`) REFERENCES `lugar` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tutoradoindividual` FOREIGN KEY (`FK_tutoradoindividual`) REFERENCES `tutorado` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motivo`
--
ALTER TABLE `motivo`
  ADD CONSTRAINT `FK_formato` FOREIGN KEY (`FK_formato`) REFERENCES `formato_individual` (`idformato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reporte_especial`
--
ALTER TABLE `reporte_especial`
  ADD CONSTRAINT `FK_tutorespecial` FOREIGN KEY (`FK_tutorespecial`) REFERENCES `tutor` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutorado`
--
ALTER TABLE `tutorado`
  ADD CONSTRAINT `FK_tutor` FOREIGN KEY (`FK_tutor`) REFERENCES `tutor` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

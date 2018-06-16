-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 04:09 AM
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
(201424101, 'ROBERTO CARLOS', 'GARDUÑO', 'ROMO', 'hola1234', 'AD');

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
  `matricula` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `ap_paterno` varchar(25) DEFAULT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinador`
--

INSERT INTO `coordinador` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `correo`, `telefono`, `pass`, `tipo_usuario`, `status`) VALUES
(123123, 'ROSA', 'BKVJBK', '', 'bkvjdb', '5537678608', '123', 'CA', NULL),
(201424103, '    YAHILT', 'HERNANDEZ', '  HERNANDEZ', 'yahilt@gmail.com', '5537678608', '123', 'CA', 'ACTIVO'),
(201424104, ' MARIA', 'SANCHEZ', '', 'maria@gmail.com', '5537678608', '123', 'CI', 'INACTIVO');

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
(12345678, 'ROSA', 'ENRIQUEZ', 'SANTILLAN ', 'cgchg', '5537678608', 'ACTIVO', '123', 'TU'),
(201424105, 'JOSE ADAN', 'LOPEZ', 'SANCHEZ', 'adan@gmail.com', '5537678608', 'INACTIVO', '123', 'TU');

--
-- Triggers `tutor`
--
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
  `programa` varchar(8) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `tipo_tutoria` varchar(18) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `status` varchar(8) NOT NULL,
  `FK_tutor` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutorado`
--

INSERT INTO `tutorado` (`matricula`, `nombre`, `ap_paterno`, `ap_materno`, `carrera`, `semestre`, `programa`, `correo`, `telefono`, `tipo_tutoria`, `pass`, `tipo_usuario`, `status`, `FK_tutor`) VALUES
(123, 'BVKJB', 'BCKJWEB', 'JBCWEKJB', 'ISC', '', 'TUTORÍA ', 'cndskjn@yahoo.com', '5537678608', '', '123', 'TO', '', NULL),
(1231, 'VNDLNL', 'NVLDK', 'NVL', 'ISC', '', 'TUTORÍA ', NULL, NULL, '', '123', 'TO', '', NULL),
(201424106, 'ROSAICELA', 'ENRIQUEZ', 'SANTILLAN', 'ISC', 'OCTAVO', 'TUTORÍA ', 'rosa@gmail.com', '5537678608', '', '123', 'TO', 'ACTIVO', NULL),
(201424107, 'ISAAC', 'PAREDES', 'PAREDES', 'ISC', '', 'TUTORÍA ', 'isaac.yahoo.com', '5537678608', '', '123', 'TO', 'ACTIVO', NULL),
(201424110, 'OSIELO', 'GARCIA', 'GUERREO', 'ISC', '', 'ESPECIAL', NULL, NULL, 'TUTORÍA INDIVIDUAL', '123', 'TO', '', NULL);

--
-- Triggers `tutorado`
--
DELIMITER $$
CREATE TRIGGER `newTutorado` AFTER INSERT ON `tutorado` FOR EACH ROW insert into usuarios(matricula,pass, tipo_usuario)
values (new.matricula, new.pass, new.tipo_usuario)
$$
DELIMITER ;

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
(1, 201424101, 'hola1234', 'AD'),
(2, 201424102, '123', 'TU'),
(3, 201424103, '123', 'CA'),
(4, 201424104, '123', 'CI'),
(7, 201424107, '123', 'TO'),
(8, 201424108, '123', 'TU'),
(9, 201424105, '123', 'TU'),
(10, 201424106, '123', 'TO'),
(11, 123, '123', 'TO'),
(12, 123, '123456', 'TU'),
(13, 1234, '123123', 'TU'),
(14, 12345, 'qwerty', 'TU'),
(15, 1234567, 'qawsedrf', 'TU'),
(16, 201224101, '123', 'TU'),
(17, 5555, '123', 'TU'),
(18, 12345678, '123', 'TU'),
(19, 1231, '123', 'TO'),
(20, 123123, '123', 'CA'),
(21, 201424110, '123', 'TO'),
(22, 201424110, '123', 'TO');

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
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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

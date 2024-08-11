-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayurvedik_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1_data`
--

CREATE TABLE `table1_data` (
  `sr no` int(2) NOT NULL,
  `Essential Instruments and Equipments` varchar(20) NOT NULL,
  `Number of Instruments and Equipments available` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1_data`
--

INSERT INTO `table1_data` (`sr no`, `Essential Instruments and Equipments`, `Number of Instruments and Equipments available`) VALUES
(1, 'Binocular microscope', '1'),
(2, 'X-ray view box', '1'),
(3, 'Sterile disposable l', '1 box'),
(4, 'Sahli?s Square tube', '12'),
(5, 'Hb pipette', '12'),
(6, 'Dropper', '16'),
(7, 'Glass rod', '2'),
(8, 'WBC Pipette', '16'),
(9, 'Improved Neubauer ch', '15'),
(10, 'Cover slip', '9 box'),
(11, 'Red cell pipette', '19'),
(12, 'Cleaned slides', '3 box'),
(13, 'Incubator', '1'),
(14, 'Wintrobe?s tube', '4'),
(15, 'Pasteur?s pipette', '4'),
(16, 'Centrifuge Graduatee', '1'),
(17, 'Westregrens pipette', '6'),
(18, 'Rubber teat', '6'),
(19, 'Westergrens?s stand', '6'),
(20, 'Litmus paper', '4 packs'),
(21, 'pH indicator paper s', '1'),
(22, 'Urinometer', '3'),
(23, 'Multi stix', '1 pack'),
(24, 'Bunsen burner', '12'),
(25, 'Test tube', '100'),
(26, 'Test tube holder', '12'),
(27, 'Filter paper', '1 box'),
(28, 'Steel almirah', '1'),
(29, 'Steel rack', '4'),
(30, 'Glass Jars with lid ', '12'),
(31, 'Glass view rack', '4'),
(32, 'Magnifying lens', '1'),
(33, 'Autoclave', '1'),
(34, 'Water bath', '1'),
(35, 'Separating funnels o', '10'),
(36, 'Stop watch', '1'),
(37, 'Ultraviolet lamp', '1'),
(38, 'Monocular microscope', '19'),
(39, 'Capillary Tubes', '1 box'),
(40, 'Hot air oven', '1'),
(41, 'Microscope with oil ', '19'),
(42, 'Refrigetors', '1'),
(43, 'Sterile vessels/bott', '50'),
(44, 'BP Apparatus', '1'),
(45, 'Stethocope', '1'),
(46, 'Thermometer', '1'),
(47, 'Tongue depressor', '1'),
(48, 'Torch', '1'),
(49, 'Knee hammer', '1'),
(50, 'Measuring Tape', '1'),
(51, 'ENT examination set', '1'),
(52, 'Reflectors(Mirrors)', '1'),
(53, 'Weighing machine', '1'),
(54, 'Tuning Forks', '2'),
(55, 'Nasal speculum', '1'),
(56, 'Laryngoscope', '1'),
(57, 'Catheters', '1 set'),
(58, 'Probes', '1 set'),
(59, 'Disposable Gloves', '1 box'),
(60, 'Physical balance', '2'),
(61, 'Syringe needle destr', '1'),
(62, 'HBs Ag kit', '1'),
(63, 'HIV kit ? Tridot (me', '1'),
(64, 'CT and BT kit', '1'),
(65, 'Cell counter (haemoa', '1'),
(66, 'Renal profile, LET k', 'each 1');

-- --------------------------------------------------------

--
-- Table structure for table `table2_data`
--

CREATE TABLE `table2_data` (
  `sr no` int(2) NOT NULL,
  `Essential Instruments and Equipments` varchar(20) NOT NULL,
  `Number of Instruments and Equipments available` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table2_data`
--

INSERT INTO `table2_data` (`sr no`, `Essential Instruments and Equipments`, `Number of Instruments and Equipments available`) VALUES
(1, 'Shadowless Lamp', '1'),
(2, 'Suction Machine (Neo', '1'),
(3, 'Oxygen Cylinder and ', '1'),
(4, 'Foetal Toco Cardiogr', 'nil'),
(5, 'Radient Warmer', '1'),
(6, 'Phototherapy Unit', '1'),
(7, 'Weighing Machine (Pa', '1'),
(8, 'Patient trolley', '1'),
(9, 'Anaesthesia trolley', '1'),
(10, 'Infantometer', '1'),
(11, 'Vacuum extractor', '1'),
(12, 'Foetal Doppler', '1'),
(13, 'Low cavity forceps', '1'),
(14, 'Steriliser', '1'),
(15, 'Macintosh rubber she', '10 shee'),
(16, 'Catguts and Thread', '10 and '),
(17, 'Speculum ? Sim?s ? C', 'sims-2,'),
(18, 'Instruments for labo', 'availab'),
(19, 'Baby tray', '2'),
(20, 'Draw Sheets', '20'),
(21, 'Plastic Aprons', '5'),
(22, 'HIV kit for emergenc', '1 set'),
(23, 'Plain and Hole towel', 'plain-1'),
(24, 'Gloves', '100 pai'),
(25, 'Nebuliser', '1'),
(26, 'Foetoscope', '1'),
(27, 'Autoclave', '1'),
(28, 'Drums', '4'),
(29, 'Instrumental Trolley', '1'),
(30, 'OT tables with head ', '1'),
(31, 'Double dome Shadowle', '1'),
(32, 'Pulse Oxymeter', '1'),
(33, 'Oxygen Cylinder', '1'),
(34, 'Resuscitation kit', '1'),
(35, 'Boyle?s apparatus', '1'),
(36, 'Electrocautery', '1'),
(37, 'MTP Suction Machine', '1'),
(38, 'Anaesthesia Kit', '1'),
(39, 'Blunt and Sharp Cure', '2'),
(40, 'Dilators set (Hegar?', '2 set'),
(41, 'Sim?s Speculum', '4'),
(42, 'Anterior Vaginal Wal', '4'),
(43, 'Cysco?s Speculum', '2'),
(44, 'Uterine sound', '2'),
(45, 'Volsellum', '4'),
(46, 'MTP Suction Curette', '2'),
(47, 'Needles', '10'),
(48, 'Needle holders', '5'),
(49, 'Sponge holding force', '10'),
(50, 'Towel Clips', '10'),
(51, 'Retractors abdominal', '2'),
(52, 'Green armytage force', '4'),
(53, 'Uterus holding force', '1'),
(54, 'Kocher?s forceps', '3'),
(55, 'Artery forceps (Long', 'each 4'),
(56, 'Scissors- different ', '10'),
(57, 'Forceps obstetrics', '1 set'),
(58, 'Tongue depressor', '1'),
(59, 'Endotracheal tubes', '5'),
(60, 'B.P. apparatus', '1'),
(61, 'HSG Cannula', '1'),
(62, 'Cord Cutting applian', '3'),
(63, 'I.U.C.D. removing ho', '1'),
(64, 'Bladder Sound', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table3_data`
--

CREATE TABLE `table3_data` (
  `sr no` int(3) NOT NULL,
  `Essential Instruments and Equipments` varchar(20) NOT NULL,
  `Number of Instruments and Equipments available` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table3_data`
--

INSERT INTO `table3_data` (`sr no`, `Essential Instruments and Equipments`, `Number of Instruments and Equipments available`) VALUES
(1, 'Spot light (Shadowle', '1'),
(2, 'Needle holding Force', '17'),
(3, 'Dressing drums of As', '27'),
(4, 'Drum stand', '1'),
(5, 'IV Stand', '3'),
(6, 'X-ray View Box (doub', '1'),
(7, 'Surgeon?s gawn', '46'),
(8, 'Mask and caps', 'each 50'),
(9, 'Gauze, cotton and ba', 'each on'),
(10, 'Gloves of different ', 'each 10'),
(11, 'Cheetles Forceps', '8'),
(12, 'Towel Clips', '14'),
(13, 'Mosquito forceps', '60'),
(14, 'Scissors straight (T', '19'),
(15, 'Scissors curved of d', '20'),
(16, 'Stich removal scisso', '3'),
(17, 'Dissection forceps', '24'),
(18, 'Sinus Forceps', '1'),
(19, 'Probes ? Assorted si', '12'),
(20, 'Pointed scissors', '1'),
(21, 'Gastric and Intestin', '6'),
(22, 'Abdominal Retractors', '20'),
(23, 'Tissue Forceps', '6'),
(24, 'Bob Kock?s Forceps', '22'),
(25, 'Kocher?s Forceps', '20'),
(26, 'Urethral Dilators', '1 set'),
(27, 'Rubber catheters of ', 'all siz'),
(28, 'Metal Cathetors', '1 set'),
(29, 'Corrugatedrubber dra', '2 sheet'),
(30, 'Suturing Needle (str', 'all siz'),
(31, 'Surgical Thread', 'all siz'),
(32, 'Sponge holding force', '15'),
(33, 'Right Angle cholecys', '2'),
(34, 'Stone holding forcep', '2'),
(35, 'Allies Forceps small', '30'),
(36, 'Allies Forceps Big', '20'),
(37, 'Artery Forceps small', '50'),
(38, 'Artery Forceps big', '20'),
(39, 'Artery Forceps Mediu', '25'),
(40, 'Sigmoidoscope Rigid/', '1'),
(41, 'Barron Pile?s Gun', '1'),
(42, 'Laryngoscope Pediatr', '3'),
(43, 'Boyles Apparatus', '1'),
(44, 'Multiparameter Monit', '1'),
(45, 'Ambu Bag', '4'),
(46, 'Suction machine Elec', '4'),
(47, 'Emergency power back', '1'),
(48, 'Emergency light', '1'),
(49, 'Fire Extinguisher', '2'),
(50, 'Skin grafting knife ', '2'),
(51, 'Surgical blades of d', 'all siz'),
(52, 'BP Handle of differe', '13'),
(53, 'Vertical BP Instrume', '3'),
(54, 'Self-Retaining Retra', '1'),
(55, 'Bone Drill Machine', '2'),
(56, 'Bone cutter', '2'),
(57, 'Giggly Saw', '2'),
(58, 'Scoop', '1'),
(59, 'Periasteum elevator', '1'),
(60, 'Maggler Forceps', '1'),
(61, 'High Pressure Autocl', '2'),
(62, 'Fumigator', '2'),
(63, 'Refrigerator', '1'),
(64, 'Nitrous Oxide Cylind', '4'),
(65, 'Hydrolic Operation T', '1'),
(66, 'Shadow less lamp cei', '1'),
(67, 'Boyle?s Appratus', '1'),
(68, 'Instrument Trolley', '5'),
(69, 'Endotracheal Tube', '20'),
(70, 'Proctoscope with or ', '5'),
(71, 'Revolving Stool', '3'),
(72, 'Gabrial Syringe', '1'),
(73, 'Strecher with trolle', '1'),
(74, 'Mosquito forceps', '60'),
(75, 'Needle holder', '17'),
(76, 'BP Apparatus', '3'),
(77, 'Suction Machine', '4'),
(78, 'Ophthalmic Operation', '1'),
(79, 'Sterilizing box/case', '3'),
(80, 'Lens insertion Force', '6'),
(81, 'Keratome', '100'),
(82, 'Desmarres lid retrac', '1'),
(83, 'Cat-paw lacrimal ret', '3'),
(84, 'Mueller lacrimal sac', '1'),
(85, 'Dastoor iris retract', '5'),
(86, 'MeyrhoeferChalazionc', '1'),
(87, 'Sinsky lens manipula', '1'),
(88, 'IOL Manipulator', '1'),
(89, 'Foreign body spud', '1'),
(90, 'Lewis lens loop (vec', '6'),
(91, 'Cystotome and spoon', '1'),
(92, 'Mule Evisceration sp', '1'),
(93, 'Iris repository (dou', '5'),
(94, 'Jameson muscle hook', '1'),
(95, 'Wills cautery with c', '5'),
(96, 'Langs lacrimal sac d', '3'),
(97, 'Kelly Glaucoma punch', '1'),
(98, 'Elevator (double end', '1'),
(99, 'Nasal speculum adult', '8'),
(100, 'Wilder punctum Dilat', '1'),
(101, 'Bowman lacrimal prob', '4'),
(102, 'Towel clamp', '4'),
(103, 'Hartman mosquito for', '6'),
(104, 'Colibri forceps 1*2 ', '3'),
(105, 'Mc. person corneal f', '4'),
(106, 'Dressing forceps, se', '1'),
(107, 'Moorfieldconjuctival', '5'),
(108, 'Fixation forceps', '1'),
(109, 'Beer cilea (epilatio', '1'),
(110, 'Arruga capsular forc', '2'),
(111, 'SnellenEntropion cla', '1'),
(112, 'Chalazion clamps', '1'),
(113, 'Vannas straight scis', '4'),
(114, 'Barraquer needle hol', '4'),
(115, 'Air injection cannul', '13'),
(116, 'Healon aspirating ca', '1'),
(117, 'AC was cannula', '3'),
(118, 'Lacrimal cannula', '17'),
(119, 'Hydrodialysis cannul', '13'),
(120, 'J-loop cannula (Righ', '1'),
(121, 'Simcok direct I/A ca', '6'),
(122, 'Irrigating aspiratin', '1'),
(123, 'Lens dialer', '4'),
(124, 'Superior Rectus forc', '5'),
(125, 'Eye wash glasses (fo', '6'),
(126, 'Swimming Goggles (fo', '6'),
(127, 'Aural Syringe', '1'),
(128, 'Jobson?s Aural Probe', '12'),
(129, 'Eustachian Catheter', '1'),
(130, 'Mastoid Retractor', '5'),
(131, 'Mastoid Gouge', '4'),
(132, 'Mallet', '1'),
(133, 'Nasal Foreign Body h', '1'),
(134, 'Nasal packing forcep', '4'),
(135, 'Nasal Snare', '1'),
(136, 'Bayonet Shaped gouge', '1'),
(137, 'Walshman?s forceps', '1'),
(138, 'Laryngeal forceps', '1'),
(139, 'Tongue plate with th', '1'),
(140, 'Tonsil holding force', '2'),
(141, 'Tonsillar suction', '4'),
(142, 'Adenoid curette with', '2'),
(143, 'Peritonsillarabcess ', '1'),
(144, 'Fuller?s Tracheostom', '5'),
(145, 'Cheatel?s Forceps', '6'),
(146, 'Other consumable art', 'adequat');

-- --------------------------------------------------------

--
-- Table structure for table `table4_data`
--

CREATE TABLE `table4_data` (
  `sr no` int(2) NOT NULL,
  `Essential Instruments and Equipments` varchar(20) NOT NULL,
  `Number of Instruments and Equipments available` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table4_data`
--

INSERT INTO `table4_data` (`sr no`, `Essential Instruments and Equipments`, `Number of Instruments and Equipments available`) VALUES
(1, 'Droni', '3'),
(2, 'Basti yantra', '2'),
(3, 'Avgahan yantra', '1'),
(4, 'Swedan yantra', '2'),
(5, 'Shirodhara yantra', '1'),
(6, 'Janubasti yantra', '4'),
(7, 'Hrudabasti yantra', '1'),
(8, 'Katibasti yantra', '2'),
(9, 'Vaman chair', '4'),
(10, 'Nasya yantra', '2'),
(11, 'Virechan chair', '2'),
(12, 'Raktamokshan set', '10'),
(13, 'Agnikarma set', '4');

-- --------------------------------------------------------

--
-- Table structure for table `table5_data`
--

CREATE TABLE `table5_data` (
  `sr no` int(11) NOT NULL,
  `Particulars` varchar(45) NOT NULL,
  `Area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table5_data`
--

INSERT INTO `table5_data` (`sr no`, `Particulars`, `Area`) VALUES
(1, 'Superintendent Room', 20.9),
(2, 'Deputy Superintendent Room', 16.92),
(3, 'Medical Officers Room (For 2 Resident Medical', 42.92),
(4, 'Matron Room', 13.2),
(5, 'Assistant Matron Room (For 2)', 11.63),
(6, 'Reception & Registration Room', 50.92);

-- --------------------------------------------------------

--
-- Table structure for table `table6_data`
--

CREATE TABLE `table6_data` (
  `sr no` int(11) NOT NULL,
  `Particulars` varchar(45) NOT NULL,
  `Area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table6_data`
--

INSERT INTO `table6_data` (`sr no`, `Particulars`, `Area`) VALUES
(1, 'Kayachikitsa OPD', 19.11),
(2, 'Shalya OPD', 19.18),
(3, 'Shalakya OPD', 19.56),
(4, 'Stree Roga Evam Prasuti Tantra OPD', 18.61),
(5, 'Kaumarbhritya (Balroga)', 19.45),
(6, 'Swastharakshan & Yoga OPD', 19.65),
(7, 'Atyayik (Casualty) Section', 19.08),
(8, 'Dressing & First-Aid Room, Ksharsutra Room', 38.6),
(9, 'Dispensary', 15.86),
(10, 'Waiting space for patients', 290.05),
(11, 'Store', 10.13),
(12, 'Male & Female Toilet for Patients', 17.47);

-- --------------------------------------------------------

--
-- Table structure for table `table7_data`
--

CREATE TABLE `table7_data` (
  `sr no` int(11) NOT NULL,
  `Particulars` varchar(45) NOT NULL,
  `Area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table7_data`
--

INSERT INTO `table7_data` (`sr no`, `Particulars`, `Area`) VALUES
(1, 'Kayachikitsa Male Ward', 183.7),
(2, 'Kayachikitsa Female Ward', 150.76),
(3, 'Panchakarma Male Ward', 184.85),
(4, 'Panchakarma Female Ward', 150.73),
(5, 'Shalya Male Ward', 188.29),
(6, 'Shalya Female Ward', 152.1),
(7, 'Shalakya Tantra Ward', 250),
(8, 'Prasooti evum Stri Roga Ward', 144.85),
(9, 'Kaumar Bhritya (Balaroga) Ward', 68.22),
(10, 'Doctors? duty room one for each department', 110.05),
(11, 'Nursing staff duty rooms, one in each ward', 98.43),
(12, 'Store room for linen, etc.', 34.61);

-- --------------------------------------------------------

--
-- Table structure for table `table8_data`
--

CREATE TABLE `table8_data` (
  `sr no` int(11) NOT NULL,
  `Particulars` varchar(45) NOT NULL,
  `Area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table8_data`
--

INSERT INTO `table8_data` (`sr no`, `Particulars`, `Area`) VALUES
(1, 'Major Operation Theatre', 50.84),
(2, 'Minor Operation Theatre', 37.1),
(3, 'Shalakya Operation Theatre', 39.56),
(4, 'Labour Room with attached toilet and bath roo', 39.53),
(5, 'Neonatal care room', 74.76),
(6, 'Central sterilisation/autoclave unit', 16.65),
(7, 'Scrub room', 15),
(8, 'Two Recovery room', 37.24),
(9, 'Doctor?s duty room with attached toilet and b', 32.05),
(10, 'Interns/house officer/resident doctors room w', 36.86),
(11, 'Nursing staff room with attached toilet and b', 13.7);

-- --------------------------------------------------------

--
-- Table structure for table `table9_data`
--

CREATE TABLE `table9_data` (
  `sr no` int(11) NOT NULL,
  `Particulars` varchar(45) NOT NULL,
  `Area` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table9_data`
--

INSERT INTO `table9_data` (`sr no`, `Particulars`, `Area`) VALUES
(1, 'Snehana Kaksha (Male)', 33.11),
(2, 'Snehana Kaksha (Female)', 26.48),
(3, 'Swedana Kaksha(Male)', 33.11),
(4, 'Swedana Kaksha(Female)', 26.48),
(5, 'Shirodhara Kaksha(Male)', 16.14),
(6, 'Shirodhara Kaksha(Female)', 24.86),
(7, 'Vamana Kaksha(Male)', 33.11),
(8, 'Vamana Kaksha(Female)', 26.48),
(9, 'Virechana Kaksha(Male)', 33.11),
(10, 'Virechana Kaksha(Female)', 26.48),
(11, 'Basti Kaksha(Male)', 14.7),
(12, 'Basti Kaksha(Female)', 18.2),
(13, 'Rakta Mokshana, Jalaukavacharana, Agnikarma, ', 12.96),
(14, 'Panchakarma therapist/Physician?s room', 36.23),
(15, 'Panchakarma store room', 15.33),
(16, 'Four attached toilet-baths for males and four', 19),
(17, 'Physiotherapy Unit', 13.7),
(18, '1.Physiotherapy Room', 150),
(19, '2.Physiotherapist room', 150),
(20, 'Central Laboratory', 180),
(21, 'Radiology or Sonography Section :-', 150),
(22, 'Radiologist chamber', 150),
(23, 'X-ray room', 0),
(24, 'Dark room', 0),
(25, 'film drying room', 0),
(26, 'store room', 0),
(27, 'patients waiting and dressing room', 0),
(28, 'reception or registration or report room.', 0),
(29, 'Stores/Mortuary:', 76);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1_data`
--
ALTER TABLE `table1_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table2_data`
--
ALTER TABLE `table2_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table3_data`
--
ALTER TABLE `table3_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table5_data`
--
ALTER TABLE `table5_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table6_data`
--
ALTER TABLE `table6_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table7_data`
--
ALTER TABLE `table7_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table8_data`
--
ALTER TABLE `table8_data`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `table9_data`
--
ALTER TABLE `table9_data`
  ADD PRIMARY KEY (`sr no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1_data`
--
ALTER TABLE `table1_data`
  MODIFY `sr no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `table2_data`
--
ALTER TABLE `table2_data`
  MODIFY `sr no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `table5_data`
--
ALTER TABLE `table5_data`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table6_data`
--
ALTER TABLE `table6_data`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table7_data`
--
ALTER TABLE `table7_data`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table8_data`
--
ALTER TABLE `table8_data`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table9_data`
--
ALTER TABLE `table9_data`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumas`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminzinute`
--

CREATE TABLE `adminzinute` (
  `ID` int(11) NOT NULL,
  `zinute` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminzinute`
--

INSERT INTO `adminzinute` (`ID`, `zinute`) VALUES
(2, '\"Forume\" neatskleiskite savo slaptažodžio'),
(3, 'Išryškinti temą kaunuoja: 100 Kreditų!');

-- --------------------------------------------------------

--
-- Table structure for table `komentarai`
--

CREATE TABLE `komentarai` (
  `ID` int(11) NOT NULL,
  `komentaras` longtext NOT NULL,
  `temosid` int(50) NOT NULL,
  `vartotojas` varchar(50) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentarai`
--

INSERT INTO `komentarai` (`ID`, `komentaras`, `temosid`, `vartotojas`, `data`) VALUES
(63, 'Neįmanoma', 110, 'almanas', '2021-11-24 18:31:45'),
(64, 'Viskas priklauso nuo mokiniu', 108, 'kajus', '2021-11-29 14:27:39'),
(65, 'Daug dirbti tikriausiai :D', 110, 'kajus', '2021-11-29 14:27:54'),
(66, 'Aš net neįsivaizduoju tokios bausmės', 114, 'kajus', '2021-11-29 14:28:22'),
(67, 'Prieš narkotikus, jie gadina žmogų ', 115, 'kajus', '2021-11-29 14:28:59'),
(68, 'Nekreipti dėmesio', 116, 'kajus', '2021-11-29 14:29:57'),
(69, 'Tik senais laikais tai buvo vygdoma', 114, 'almanas', '2021-11-29 14:31:03'),
(70, 'Nei prieš nei už', 115, 'almanas', '2021-11-29 14:31:21'),
(71, 'Kaip nekreipti dėmesio jei tave užgaulioja? ', 116, 'almanas', '2021-11-29 14:31:49'),
(72, 'Nekenkia, nes dabar viskas yra apsaugota', 117, 'almanas', '2021-11-29 14:32:17'),
(73, 'Bet taip pat priklauso ir nuo mokytojų jie turi padaryt idomias pamokas', 108, 'mindaugas', '2021-11-29 14:34:01'),
(74, 'Tikrai ne Lietuvoje', 110, 'mindaugas', '2021-11-29 14:34:19'),
(75, 'Jei pasidomėtai tai ir šiaip šiais laikais vygdomi kitose šalyse', 114, 'mindaugas', '2021-11-29 14:34:46'),
(76, 'Visada prieš', 115, 'mindaugas', '2021-11-29 14:35:00'),
(77, 'Paprastai nesinaudok tiesiog internetu', 116, 'mindaugas', '2021-11-29 14:35:21'),
(78, 'Kaip nekenkia sedziu dabar su didziausiais akiniais', 117, 'mindaugas', '2021-11-29 14:35:38'),
(79, 'Riboti laiką prie elektronikos', 118, 'mindaugas', '2021-11-29 14:36:08'),
(80, 'Padaryti mini uzduoteliu, neapkrauti daug mokiniu', 108, 'minedas', '2021-11-29 14:37:30'),
(81, 'Pradėti bizni', 110, 'minedas', '2021-11-29 14:37:46'),
(82, 'Nu ką tu čia niekur jau nevygdomi jie jau', 114, 'minedas', '2021-11-29 14:38:06'),
(83, 'Kodėl prieš, yra kurie gydo, pasidomėk labiau', 115, 'minedas', '2021-11-29 14:38:29'),
(84, 'Kaip gali nesinaudot jeigu tau reikia jo darbui ir kitiems reikalams?', 116, 'minedas', '2021-11-29 14:38:54'),
(85, 'Tai gal nesaikingai naudojies jei sedi su akniais', 117, 'minedas', '2021-11-29 14:39:20'),
(86, 'Pakalbeti graziai su juo', 118, 'minedas', '2021-11-29 14:39:48'),
(87, 'Nelankyt mokyklos', 108, 'linas', '2021-11-29 14:41:58'),
(88, 'Turėt turtingą šeimą', 110, 'linas', '2021-11-29 14:42:17'),
(89, 'Vis dar vygdomos mirties bausmes pasizek internete', 114, 'linas', '2021-11-29 14:43:00'),
(90, 'Narkotikai yra nelegalu nors ir gydo negalima ju naudoti', 115, 'linas', '2021-11-29 14:43:42'),
(91, 'Reikia išmokti nekreipti dėmesio, nes gi vis tai internetas', 116, 'linas', '2021-11-29 14:44:21'),
(92, 'Kenkia, nes naudodamas gali patirti patyciu internete', 117, 'linas', '2021-11-29 14:44:52'),
(93, 'Padėti, kalbėtis, uzjausti', 118, 'linas', '2021-11-29 14:45:13'),
(94, 'Norėciau pop', 119, 'linas', '2021-11-29 14:45:27'),
(120, 'Kas cia per *****', 114, 'almanas', '2021-12-07 22:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `role`) VALUES
(1, 'vartotojas'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `saskaitos`
--

CREATE TABLE `saskaitos` (
  `ID` int(11) NOT NULL,
  `vardas` varchar(100) NOT NULL,
  `pavarde` varchar(100) NOT NULL,
  `adresas` varchar(200) NOT NULL,
  `mokejimas` varchar(50) NOT NULL,
  `kiekis` int(100) NOT NULL,
  `data` date NOT NULL,
  `statusas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saskaitos`
--

INSERT INTO `saskaitos` (`ID`, `vardas`, `pavarde`, `adresas`, `mokejimas`, `kiekis`, `data`, `statusas`) VALUES
(77, 'rita', 'Rita Markija', 'Kauno g. 123 Kaunas', 'Bankinis', 100, '2021-11-24', 'Nesumokėta'),
(78, 'rokas', 'Rokas Porakis', 'Vilniaus g. 123, Vilnius', 'Bankinis', 200, '2021-11-24', 'Nesumokėta'),
(79, 'rimas', 'Rimas Kirutis', 'Palangos g. 123, Palanga', 'Bankinis', 300, '2021-11-24', 'Nesumokėta'),
(89, 'almanas', 'Almanas Alaburda', 'Kauno g. 123 Kaunas', 'Grynais', 100, '2021-11-25', 'Sumokėta ir kreditai pridėti'),
(91, 'almanas', 'Almanas Alaburda', 'Kauno g. 123 Kaunas', 'Grynais', 400, '2021-12-01', 'Sumokėta ir kreditai pridėti'),
(92, 'almanas', 'Almanas Alaburda', 'Kauno g. 123 Kaunas', 'Bankinis', 500, '2021-12-01', 'Sumokėta ir kreditai pridėti'),
(93, 'almanas', 'Almanas Alaburda', 'Vilniaus g. 123, Vilnius', 'Grynais', 500, '2021-12-02', 'Nesumokėta'),
(94, 'tomas', 'Tomas Vardenis', 'Vilniaus g. 123, Vilnius', 'Grynais', 300, '2021-12-02', 'Nesumokėta'),
(95, 'karolis', 'Karolis Karolukas', 'Kauno g. 123 Kaunas', 'Bankinis', 300, '2021-12-02', 'Nesumokėta'),
(96, 'almanas', 'Pavyzdinis Pavyzdinis', 'Pavyzdinio g 123', 'Bankinis', 400, '2021-12-16', 'Nesumokėta');

-- --------------------------------------------------------

--
-- Table structure for table `temos`
--

CREATE TABLE `temos` (
  `ID` int(11) NOT NULL,
  `pavadinimas` varchar(100) NOT NULL,
  `vartotojas` int(50) NOT NULL,
  `aprasymas` longtext NOT NULL,
  `paryskintas` int(1) NOT NULL,
  `kurejas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temos`
--

INSERT INTO `temos` (`ID`, `pavadinimas`, `vartotojas`, `aprasymas`, `paryskintas`, `kurejas`) VALUES
(108, 'Kaip pagerinti nuotolinio mokymo kokybę?', 41, 'Nors ir sunkus nuotolinis taciau yra budu kaip palengvinti tai', 0, 'almanas'),
(110, 'Kaip tapti milionieriumi?', 43, 'Padiskutuokime, kaip tapti milionieriumi', 0, 'rita'),
(114, 'Mirties bausmė', 42, 'Diskusijų tema yra kažkas daugiau tipiškų nei ankstesnė. Mirties bausmė vis dar taikoma daugelyje pasaulio šalių. Kai kurie žmonės mano, kad tai yra būtina ir teisinga, kiti - šiek tiek daugiau nei nusikaltimas, atliktas ieškant keršto. Ar jis vis dar galioja? Ar jūsų prašymas yra etiškas? Kadangi kai kurios šalys jas taiko, o kiti - ne? Kas atsitiks, jei nekaltas žmogus bus nuteistas?', 1, 'rokas'),
(115, 'Narkotikai visuomenėje', 44, 'Psichoaktyvių medžiagų vartojimas tai yra gana paplitusi šiuolaikinėje visuomenėje. Daugelis jų sukelia sunkių priklausomybių ir žalingų padarinių tiek trumpalaikėje, tiek ilgalaikėje perspektyvoje. Kai kurie aptarti aspektai gali būti šie: kodėl jie vartojami? Kokį poveikį jie turi? Kaip jūsų suvartojimas vertinamas socialiai?', 0, 'tomas'),
(116, 'Patyčios internete', 55, 'Kaip kovoti su patyčiomis internete? Kaip sustabdyti tai?', 0, 'mantas'),
(117, 'Ar telefono naudojimas kiekvieną dieną kenkia?', 45, 'Šioje diskusijoje norėčiau sužinoti ar kenkia telefonas', 0, 'kajus'),
(118, 'Kaip priversti vaiką mokytis?', 46, 'Noriu patarimų kaip priversti vaiką mokytis, nes jisai visai nesimokiną tik prie kompiuterio buna', 0, 'mindaugas'),
(119, 'Kokią muziką kurti?', 49, 'Noriu sukurti muziką, kurti pop žanro ar rock?', 0, 'minedas'),
(120, 'Ar verta pirkti didelį televizorių?', 47, 'Reikia nusipirkti naują televizorių, pirkti didelį ar mažą?', 0, 'linas'),
(121, 'Mokykla', 54, 'Gal kas padėtų išmokti rusų kalbą?', 0, 'karolis');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `ID` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `trn_date` datetime NOT NULL,
  `kreditai` int(11) NOT NULL,
  `rolesid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`ID`, `username`, `email`, `password`, `trn_date`, `kreditai`, `rolesid`) VALUES
(41, 'almanas', 'almanukas789@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 17:16:47', 1800, 2),
(42, 'rokas', 'random@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 18:21:51', 100, 1),
(43, 'rita', 'gmail@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 19:27:42', 0, 1),
(44, 'tomas', 'almanukas789@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:26:51', 100, 1),
(45, 'kajus', 'kajus@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:27:23', 100, 1),
(46, 'mindaugas', 'minde@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:28:47', 100, 1),
(47, 'linas', 'linas@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:28:58', 100, 1),
(48, 'povilas', 'pofka@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:29:13', 100, 1),
(49, 'minedas', 'mined203@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:29:34', 100, 1),
(50, 'katinas', 'katinukas@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:29:51', 100, 1),
(51, 'ruta', 'rutele@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:34:05', 100, 1),
(52, 'rimas', 'rimukas@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:34:20', 100, 1),
(53, 'airidas', 'aire@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:34:50', 100, 1),
(54, 'karolis', 'karce@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:34:59', 100, 1),
(55, 'mantas', 'mancius@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:35:07', 100, 1),
(56, 'matas', 'matuzas@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-22 20:35:17', 100, 1),
(57, 'vartotojas', 'vartotojas@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-11-25 15:14:00', 400, 1),
(58, 'Almanas Alaburda', 'almanukas789@gmail.com', '64a3ce61365885b7fc893c9d75834fb8', '2021-12-01 19:08:25', 100, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminzinute`
--
ALTER TABLE `adminzinute`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `temosid` (`temosid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temos`
--
ALTER TABLE `temos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `vartotojas` (`vartotojas`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `rolesid` (`rolesid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminzinute`
--
ALTER TABLE `adminzinute`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saskaitos`
--
ALTER TABLE `saskaitos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `temos`
--
ALTER TABLE `temos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD CONSTRAINT `komentarai_ibfk_1` FOREIGN KEY (`temosid`) REFERENCES `temos` (`ID`);

--
-- Constraints for table `temos`
--
ALTER TABLE `temos`
  ADD CONSTRAINT `temos_ibfk_1` FOREIGN KEY (`vartotojas`) REFERENCES `vartotojai` (`ID`);

--
-- Constraints for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD CONSTRAINT `vartotojai_ibfk_1` FOREIGN KEY (`rolesid`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

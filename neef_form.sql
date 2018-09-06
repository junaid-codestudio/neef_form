-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 09:37 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neef_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

CREATE TABLE `tbl_applicant` (
  `AppID` bigint(20) NOT NULL,
  `FirstName` varchar(500) DEFAULT NULL,
  `MiddleName` varchar(500) DEFAULT NULL,
  `LastName` varchar(500) DEFAULT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Gender` varchar(500) DEFAULT NULL,
  `FH_FirstName` varchar(500) DEFAULT NULL,
  `FH_MiddleName` varchar(500) DEFAULT NULL,
  `FH_LastName` varchar(500) DEFAULT NULL,
  `CNIC` varchar(500) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Mobile` varchar(500) DEFAULT NULL,
  `Landline` varchar(500) DEFAULT NULL,
  `EmergencyMobile` varchar(500) DEFAULT NULL,
  `Province` varchar(500) DEFAULT NULL,
  `Division` varchar(500) DEFAULT NULL,
  `District` varchar(500) DEFAULT NULL,
  `Tehsil` varchar(500) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Academic_DegreeLevel` varchar(500) DEFAULT NULL,
  `Academic_Majors` varchar(500) DEFAULT NULL,
  `Academic_YP` int(11) DEFAULT NULL,
  `Academic_PakOrAbroad` varchar(500) DEFAULT NULL,
  `PakistanUni` varchar(500) NOT NULL,
  `AbroadCountry` varchar(500) NOT NULL,
  `AbroadCity` varchar(500) NOT NULL,
  `AbroadUni` varchar(500) NOT NULL,
  `Academic_TM` float DEFAULT NULL,
  `Academic_OM` float DEFAULT NULL,
  `ProfQual_Title` varchar(500) DEFAULT NULL,
  `ProfQual_DegOther` varchar(500) NOT NULL,
  `ProfQual_YP` int(11) DEFAULT NULL,
  `ProfQual_Inst` varchar(500) DEFAULT NULL,
  `IsCurrentlyWorking` varchar(500) DEFAULT NULL,
  `Designation` varchar(500) NOT NULL,
  `JobDesc` varchar(500) NOT NULL,
  `CompanyName` varchar(500) NOT NULL,
  `JobProvince` varchar(500) NOT NULL,
  `JobDivision` varchar(500) NOT NULL,
  `JobDistrict` varchar(500) NOT NULL,
  `JobTehsil` varchar(500) NOT NULL,
  `CompanyAddress` varchar(500) NOT NULL,
  `RelatedTeaching` varchar(50) NOT NULL,
  `RelatedMarking` varchar(50) NOT NULL,
  `RelatedInvig` varchar(50) NOT NULL,
  `IsGovt` varchar(50) NOT NULL,
  `WorkingSince` int(11) NOT NULL,
  `InvigExp_Level` varchar(500) DEFAULT NULL,
  `ComputerKnowledge` varchar(500) DEFAULT NULL,
  `InternetAccess` varchar(500) DEFAULT NULL,
  `CompAtHome` varchar(50) NOT NULL,
  `PostAppliedFor` varchar(500) NOT NULL,
  `EnteredAt` datetime DEFAULT NULL,
  `IsPDF` int(11) DEFAULT NULL,
  `Picture` text,
  `DegreeUpload` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicant`
--

INSERT INTO `tbl_applicant` (`AppID`, `FirstName`, `MiddleName`, `LastName`, `Title`, `Gender`, `FH_FirstName`, `FH_MiddleName`, `FH_LastName`, `CNIC`, `DOB`, `Email`, `Mobile`, `Landline`, `EmergencyMobile`, `Province`, `Division`, `District`, `Tehsil`, `Address`, `Academic_DegreeLevel`, `Academic_Majors`, `Academic_YP`, `Academic_PakOrAbroad`, `PakistanUni`, `AbroadCountry`, `AbroadCity`, `AbroadUni`, `Academic_TM`, `Academic_OM`, `ProfQual_Title`, `ProfQual_DegOther`, `ProfQual_YP`, `ProfQual_Inst`, `IsCurrentlyWorking`, `Designation`, `JobDesc`, `CompanyName`, `JobProvince`, `JobDivision`, `JobDistrict`, `JobTehsil`, `CompanyAddress`, `RelatedTeaching`, `RelatedMarking`, `RelatedInvig`, `IsGovt`, `WorkingSince`, `InvigExp_Level`, `ComputerKnowledge`, `InternetAccess`, `CompAtHome`, `PostAppliedFor`, `EnteredAt`, `IsPDF`, `Picture`, `DegreeUpload`) VALUES
(34, 'Sopoline', 'Erich Kirkland', 'Preston', 'Engr.', 'Female', 'Christine', 'Gannon Cunningham', 'Castaneda', '11111-1111111-1', '1983-10-28', 'zehygu@mailinator.com', '+92 (222) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'AZAD KASHMIR', 'MUZAFFARABAD', 'HATTIAN BALA', 'HATTIAN BALA', 'Reiciendis est similique facilis aute eos at minima nostrum explicabo Repudiandae nihil quaerat veniam eveniet eum nulla veniam cumque dolorem', 'Masters', 'Ea aut elit eveniet omnis praesentium tempora officia voluptatibus aliqua Quia est', 2016, 'Pakistan', '2', '', '', '', 0, 0, 'B.Ed', '', 2017, 'Voluptatem ex eaque sed placeat do et reprehenderit duis vel et dolorum dignissimos odio impedit', 'Employed', 'Fugit accusantium facilis cupidatat atque', 'Quos ex ullam laborum aut ipsa eius consequatur sint numquam velit a qui', 'Morales Farley Co', 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'ZAMURAN SUB-TEHSIL', 'Ex sunt illum alias laudantium id', 'no', 'no', 'no', 'no', 2015, 'Becholars', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/', '../assets/uploads/AcademicDocuments/'),
(35, 'Sopoline', 'Erich Kirkland', 'Preston', 'Engr.', 'Female', 'Christine', 'Gannon Cunningham', 'Castaneda', '11111-1111111-1', '1983-10-28', 'zehygu@mailinator.com', '+92 (222) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'AZAD KASHMIR', 'MUZAFFARABAD', 'HATTIAN BALA', 'HATTIAN BALA', 'Reiciendis est similique facilis aute eos at minima nostrum explicabo Repudiandae nihil quaerat veniam eveniet eum nulla veniam cumque dolorem', 'Masters', 'Ea aut elit eveniet omnis praesentium tempora officia voluptatibus aliqua Quia est', 2016, 'Pakistan', '2', '', '', '', 0, 0, 'B.Ed', '', 2017, 'Voluptatem ex eaque sed placeat do et reprehenderit duis vel et dolorum dignissimos odio impedit', 'Employed', 'Fugit accusantium facilis cupidatat atque', 'Quos ex ullam laborum aut ipsa eius consequatur sint numquam velit a qui', 'Morales Farley Co', 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'ZAMURAN SUB-TEHSIL', 'Ex sunt illum alias laudantium id', 'no', 'no', 'no', 'no', 2015, 'Becholars', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/', '../assets/uploads/AcademicDocuments/'),
(36, 'Aristotle', 'Summer Casey', 'Pate', 'Mrs.', 'Female', 'Chiquita', 'Jescie Vaughn', 'Bartlett', '11111-1111111-1', '2012-01-06', 'niwabaza@mailinator.net', '+92 (222) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'DARABAN', 'Duis voluptas quo quidem sit voluptas eos voluptatibus quas veniam dolore reiciendis ea et iusto maxime', 'Masters', 'Ut deserunt et adipisci et eiusmod aut occaecat est rerum et inventore', 2016, 'Pakistan', '6', '', '', '', 0, 0, 'B.Ed', '', 2017, 'Quis irure eu ratione cupidatat ullam totam tempore ea rem', 'Employed', 'Suscipit expedita velit voluptas ducimus praesentium non ullamco nostrum cupidatat pariatur Ad commodi exercitation vel dolore reprehenderit consectetur odit minim', 'Dolorem rerum ea aut exercitationem et dolorum itaque dolorum hic in ipsum harum duis quasi', 'Manning and Mcintosh Inc', 'FEDERAL', 'ISLAMABAD', 'ISLAMABAD', 'ISLAMABAD', 'Duis animi est id ullamco proident dolores officia', 'no', 'no', 'no', 'no', 2015, 'Middle', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/', '../assets/uploads/AcademicDocuments/'),
(37, 'Adria', 'MacKenzie Langley', 'Bryant', 'Mrs.', 'Female', 'Desiree', 'Rana Blake', 'Hunter', '11111-1111111-1', '2011-04-26', 'vosapod@mailinator.net', '+92 (222) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Dolorem sint repellendus Voluptatem veniam reprehenderit', 'Masters', 'Nisi et vero repudiandae quia nobis eos', 2016, 'Pakistan', '4', '', '', '', 0, 0, 'CT', '', 2017, 'Fugiat est neque sit ab omnis molestiae voluptatem et', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'Matric', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(38, 'Lani', 'Echo Davidson', 'Gaines', 'Engr.', 'Transgender', 'Garth', 'Jermaine Camacho', 'Riggs', '61101-0128502-9', '1977-05-11', 'lesynug@mailinator.net', '+92 (033) 455-1991', '+92 (44) 444-4444', '+92 (555) 555-5555', 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'TURBAT', 'Eius duis quisquam voluptatem rerum ut anim impedit earum unde numquam enim', 'Becholares 3 years', 'Rerum consequuntur quo necessitatibus quasi qui doloribus quod hic', 2016, 'Pakistan', '6', '', '', '', 0, 0, 'CT', '', 2017, 'Minima rerum est magna magna aut nisi sit reprehenderit modi', 'Employed', 'Ut alias aspernatur ut iusto odit eum', 'Et inventore voluptate voluptatem aliquid quaerat quo ratione est labore sit soluta eum enim dolore quia id deserunt eum', 'Patrick and Parks Trading', 'KHYBER', 'D.I.KHAN', 'TANK', 'TANK', 'Dolore sit in quia in enim eveniet qui', 'no', 'no', 'no', 'no', 2015, 'Becholars', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/particle_background.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(39, 'Drake', 'Kylan Joyce', 'Schultz', 'Engr.', 'Transgender', 'Carl', 'Camden Espinoza', 'Park', '22222-2222222-2', '2008-05-05', 'picenite@mailinator.com', '186', 'Recusandae Exercitationem elit sit consectetur id ex laboris anim repudiandae dolores corporis eiusmod quisquam qui nisi quo sed adipisicing', 'Est quis et nulla enim similique labore aliqua Dolorem ut quia ratione mollit est enim aliquip aliquid duis', 'F.A.T.A.', 'N/A', 'ORAKZAI (AT KALAYA)', 'CENTRAL', 'Sint quo fugit rerum sequi est vitae quis maiores asperiores', 'Masters', 'Eligendi ipsum vel id aut molestiae animi sequi dolore', 2016, 'Pakistan', '6', '', '', '', 0, 0, 'CT', '', 2017, 'Temporibus qui voluptatibus libero ut facere incididunt pariatur Sunt velit sit Nam laboriosam occaecat exercitation consequatur ipsum consequatur', 'Employed', 'Sit aute et id nulla nisi rem tempora mollit', 'Possimus labore et totam facilis ullamco perspiciatis excepturi quis sit', 'Spence Ramos Inc', 'PUNJAB', 'DERA GHAZI KHAN', 'LAYYAH', 'KAROR LAL ESAN', 'Reprehenderit quas voluptate sint hic itaque culpa sit beatae', 'no', 'no', 'no', 'no', 2015, 'Primary', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/particle_background.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(40, 'Kevyn', 'Fallon Carey', 'Conley', 'Dr.', 'Transgender', 'Naida', 'Gloria Marquez', 'Kramer', 'Qui dolores et duis voluptatum ad minima sit reprehenderit exercitationem sequi duis ut irure blanditiis', '2012-07-22', 'cobixamel@mailinator.com', '284', 'Quibusdam enim consequatur enim quas velit enim', 'Molestiae ipsum ut sunt quo ut voluptatum eu aut ipsa culpa minima aliquid autem enim autem', 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'ZAMURAN SUB-TEHSIL', 'Dicta rerum velit aut debitis incididunt non aut rerum eiusmod earum in animi aut ipsa', 'Becholares 3 years', 'Totam dolore eos ea porro officiis quia tempor', 2016, 'Pakistan', '5', '', '', '', 0, 0, 'CT', '', 2017, 'Numquam delectus ullamco reiciendis id qui ullamco qui autem excepteur libero eveniet vel minus et eum necessitatibus qui consequat', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'Becholars', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/particle_background.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(41, 'Dacey', 'Lunea Hill', 'Frye', 'Mrs.', 'Transgender', 'Katell', 'Chase Patel', 'Harris', 'Et vel nihil sunt temporibus cupiditate corrupti itaque aut', '1999-03-27', 'lazudupiw@mailinator.com', '280', 'Ut magni ratione ut voluptatem non ut modi doloremque labore necessitatibus natus', 'Nostrud consectetur eiusmod dolore et sint dolore consequatur occaecat cupidatat excepturi in voluptatem sint quo quia', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Nisi veniam laboriosam porro totam eum voluptatem culpa natus rerum in esse laudantium qui veniam qui', 'MS or MPhil', 'Labore nisi quia quo ad rem natus non minim error id officia neque', 2016, 'Abroad', '1', 'Dolor voluptas pariatur Ullam aut', 'Aperiam omnis dolores aperiam ullamco', 'Animi temporibus nobis tempore maxime esse qui voluptate dolorem autem perspiciatis omnis laboriosam aut est assumenda ipsum voluptatibus a', 0, 0, 'Other', 'asdasdasd', 2017, 'Nesciunt voluptate dicta et commodi', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'MS or MPhil', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(42, 'Dacey', 'Lunea Hill', 'Frye', 'Mrs.', 'Transgender', 'Katell', 'Chase Patel', 'Harris', 'Et vel nihil sunt temporibus cupiditate corrupti itaque aut', '1999-03-27', 'lazudupiw@mailinator.com', '280', 'Ut magni ratione ut voluptatem non ut modi doloremque labore necessitatibus natus', 'Nostrud consectetur eiusmod dolore et sint dolore consequatur occaecat cupidatat excepturi in voluptatem sint quo quia', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Nisi veniam laboriosam porro totam eum voluptatem culpa natus rerum in esse laudantium qui veniam qui', 'MS or MPhil', 'Labore nisi quia quo ad rem natus non minim error id officia neque', 2016, 'Abroad', '1', 'Dolor voluptas pariatur Ullam aut', 'Aperiam omnis dolores aperiam ullamco', 'Animi temporibus nobis tempore maxime esse qui voluptate dolorem autem perspiciatis omnis laboriosam aut est assumenda ipsum voluptatibus a', 0, 0, 'Other', 'asdasdasd', 2017, 'Nesciunt voluptate dicta et commodi', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'MS or MPhil', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(43, 'Dacey', 'Lunea Hill', 'Frye', 'Mrs.', 'Transgender', 'Katell', 'Chase Patel', 'Harris', 'Et vel nihil sunt temporibus cupiditate corrupti itaque aut', '1999-03-27', 'lazudupiw@mailinator.com', '280', 'Ut magni ratione ut voluptatem non ut modi doloremque labore necessitatibus natus', 'Nostrud consectetur eiusmod dolore et sint dolore consequatur occaecat cupidatat excepturi in voluptatem sint quo quia', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Nisi veniam laboriosam porro totam eum voluptatem culpa natus rerum in esse laudantium qui veniam qui', 'MS or MPhil', 'Labore nisi quia quo ad rem natus non minim error id officia neque', 2016, 'Abroad', '1', 'Dolor voluptas pariatur Ullam aut', 'Aperiam omnis dolores aperiam ullamco', 'Animi temporibus nobis tempore maxime esse qui voluptate dolorem autem perspiciatis omnis laboriosam aut est assumenda ipsum voluptatibus a', 0, 0, 'Other', 'asdasdasd', 2017, 'Nesciunt voluptate dicta et commodi', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'MS or MPhil', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(44, 'Dacey', 'Lunea Hill', 'Frye', 'Mrs.', 'Transgender', 'Katell', 'Chase Patel', 'Harris', 'Et vel nihil sunt temporibus cupiditate corrupti itaque aut', '1999-03-27', 'lazudupiw@mailinator.com', '280', 'Ut magni ratione ut voluptatem non ut modi doloremque labore necessitatibus natus', 'Nostrud consectetur eiusmod dolore et sint dolore consequatur occaecat cupidatat excepturi in voluptatem sint quo quia', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Nisi veniam laboriosam porro totam eum voluptatem culpa natus rerum in esse laudantium qui veniam qui', 'MS or MPhil', 'Labore nisi quia quo ad rem natus non minim error id officia neque', 2016, 'Abroad', '1', 'Dolor voluptas pariatur Ullam aut', 'Aperiam omnis dolores aperiam ullamco', 'Animi temporibus nobis tempore maxime esse qui voluptate dolorem autem perspiciatis omnis laboriosam aut est assumenda ipsum voluptatibus a', 0, 0, 'Other', 'asdasdasd', 2017, 'Nesciunt voluptate dicta et commodi', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'MS or MPhil', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(45, 'Dacey', 'Lunea Hill', 'Frye', 'Mrs.', 'Transgender', 'Katell', 'Chase Patel', 'Harris', 'Et vel nihil sunt temporibus cupiditate corrupti itaque aut', '1999-03-27', 'lazudupiw@mailinator.com', '280', 'Ut magni ratione ut voluptatem non ut modi doloremque labore necessitatibus natus', 'Nostrud consectetur eiusmod dolore et sint dolore consequatur occaecat cupidatat excepturi in voluptatem sint quo quia', 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK', 'Nisi veniam laboriosam porro totam eum voluptatem culpa natus rerum in esse laudantium qui veniam qui', 'MS or MPhil', 'Labore nisi quia quo ad rem natus non minim error id officia neque', 2016, 'Abroad', '1', 'Dolor voluptas pariatur Ullam aut', 'Aperiam omnis dolores aperiam ullamco', 'Animi temporibus nobis tempore maxime esse qui voluptate dolorem autem perspiciatis omnis laboriosam aut est assumenda ipsum voluptatibus a', 0, 0, 'Other', 'asdasdasd', 2017, 'Nesciunt voluptate dicta et commodi', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'yes', 'yes', 'yes', 'yes', 2015, 'MS or MPhil', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/logo.png', '../assets/uploads/AcademicDocuments/hereToHelp.jpeg'),
(46, 'MUHAMMAD', 'JUNAID', 'NAEEM', 'Select', 'Select', 'MUHAMMAD', 'JUNAID', 'NAEEM', '11111-1111111-1', '2002-06-24', 'mjunaidnaeem@gmail.com', '+92 (222) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'PUNJAB', 'DERA GHAZI KHAN', 'LAYYAH', 'KAROR LAL ESAN', 'House 865, Street 78, I-8/3', 'PhD', 'Vel sit in aute rerum cum voluptate et ad mollitia et in anim enim unde fuga Praesentium non', 2019, 'Pakistan', '1', '', '', '', 2.6, 1, 'Select', '', 2017, 'Sint molestias molestiae accusamus sint veniam', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'Select', 'Select', 'Select', 'Select', 0, 'Select', 'Select', 'Select', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(47, 'Travis', 'Inga Jacobson', 'Robles', 'Miss', 'Male', 'Iola', 'Phoebe Roman', 'Burton', 'Aut nihil corrupti tenetur nostrum obcaecati beatae minim voluptas autem mollitia fugit sint', '1971-04-22', 'xojeg@mailinator.com', '+92 (582) 111-1111', 'Et officiis exercitation dolores omnis aut autem labore sapiente nulla nesciunt exercitation quibusdam', 'Nobis animi molestiae blanditiis inventore consequatur Molestiae cillum aliqua Eu ipsum sint aut sit error', 'PUNJAB', 'DERA GHAZI KHAN', 'MUZAFFARGARH', 'JATOI', 'Ullamco cupidatat reprehenderit et non maxime porro velit sed sunt occaecat voluptatem labore facere', 'Becholares 3 years', 'Lorem molestias eaque ut labore iusto mollit aut et quaerat', 2007, 'Abroad', 'Select', 'Consequatur magni consequat Autem sit voluptatem voluptas rerum cillum', 'Sunt qui ut anim molestias natus nostrum ut quo corporis quia quia saepe laudantium aut voluptate vero ea nemo non', 'Maxime quidem eiusmod nostrud dolorum sint architecto veniam soluta omnis dolorum quo quia eu', 0, 1, 'B.Ed', '', 2013, 'Aut sint non eum omnis porro ipsa excepturi nostrud eos maiores', 'Employed', 'Quo enim enim eius sint quo ea ut reiciendis', 'Expedita esse eu placeat ut magnam sed quaerat Nam voluptates esse et fugit dolorum libero ad sit dolorum aut', 'Douglas Vaughn Trading', 'SINDH', 'Select', 'Select', 'Select', 'Voluptas esse quis aut iusto nulla veniam', 'no', 'yes', 'no', 'no', 0, 'Becholars', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(48, 'Camilla', 'Christine Espinoza', 'Munoz', 'Engr.', 'Other', 'Yuri', 'Gisela Franks', 'Key', '11111-1111111-1', '1976-09-11', 'nyqicetupi@mailinator.com', '+92 (112) 222-2222', '+92 (22) 222-2222', '+92 (222) 222-2222', 'AZAD KASHMIR', 'MIRPUR', 'BHIMBER', 'BHIMBER', 'Ratione iure ea autem cumque animi adipisicing omnis dolores quaerat est rerum est sapiente quasi dolore perferendis dignissimos', 'PhD', 'Culpa eiusmod duis reiciendis odit qui sunt do sequi voluptate sequi in velit veritatis', 1991, 'Pakistan', '3', '', '', '', 4, 2, 'Select', '', 0, '', 'Employed', 'Ducimus facilis provident ut velit et ut nulla velit adipisci ratione aute voluptate eius ex est', 'Irure itaque voluptatem maxime sint et odit nobis ullamco', 'Mclaughlin Hill Trading', 'FEDERAL', 'Select', 'Select', 'Select', 'Incididunt porro nihil atque possimus recusandae Nulla non laboris atque soluta in non quia delectus quam consequat Sunt', 'yes', 'yes', 'no', 'no', 0, 'Intermediate', 'yes', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(49, 'Jamal', 'Xavier Davidson', 'Mcknight', 'Engr.', 'Female', 'Jocelyn', 'Whilemina Boyd', 'Beck', '11111-1111111-1', '1987-06-23', 'doguga@mailinator.net', '+92 (691) 231-2312', '+92 (12) 312-3123', '+92 (123) 123-1231', 'KHYBER PAKHTUNKHWA', 'MARDAN', 'SWABI', 'RAZAR', 'Deserunt duis nisi ipsum fugit ut sed in natus ut corrupti eos unde soluta nihil voluptatem sed in officia', 'PhD', 'Est et sint rerum velit exercitation nihil', 2004, 'Pakistan', '2', '', '', '', 5, 2, 'CT', '', 2006, 'In aute quia cupidatat qui voluptas cupidatat omnis qui laboris minim mollit possimus exercitationem cillum eos quis aut id sint', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'Select', 'Select', 'Select', 'Select', 0, 'Becholars', 'no', 'yes', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(50, 'Phillip', 'Eleanor Ayala', 'Holden', 'Engr.', 'Female', 'Shellie', 'Renee Molina', 'Oneill', '11111-1111111-1', '2002-09-07', 'jivype@mailinator.net', '+92 (322) 222-2222', '+92 (33) 333-3333', '+92 (555) 555-5555', 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'TUMP', 'Soluta recusandae At ullamco laboriosam non qui consequatur', 'Bachelors 3 years', 'Ea ut non ea suscipit consequatur quasi sit fugiat non maxime iste deserunt eos eaque pariatur Nihil quia ea quae', 2014, 'Pakistan', '5', '', '', '', 4, 3, 'CT', '', 1991, 'Aut cumque repudiandae aut maiores consectetur saepe ipsam necessitatibus totam delectus veniam labore quia officia et reprehenderit natus ex', 'Employed', 'Ab blanditiis consectetur adipisci cupiditate ipsum expedita qui rerum omnis maiores cum cupidatat', 'Aut mollit quo ipsam laboriosam eaque accusamus magnam dignissimos tempore ex quo quia in illo', 'Wall and Gonzales Trading', 'AZAD', 'MUZAFFARABAD', 'HATTIAN BALA', 'HATTIAN BALA', 'Fugiat amet quas quia totam sit dolorem totam dolorem qui eum aspernatur enim error eos nostrum nemo voluptas veniam', 'yes', 'yes', 'yes', 'yes', 2013, 'Intermediate', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(51, 'Olga', 'Igor Harding', 'Carter', 'Dr.', 'Male', 'Gil', 'Rebecca Bray', 'Sharpe', '11111-1111111-1', '1994-06-29', 'qyxanojabo@mailinator.net', '+92 (305) 222-2222', '+92 (33) 333-3333', '+92 (444) 444-4444', 'KHYBER PAKHTUNKHWA', 'HAZARA', 'HARIPUR', 'HARIPUR', 'Dolore saepe labore quibusdam est est est', 'MS or MPhil', 'Blanditiis placeat rerum sit doloribus ut deserunt Nam laboris id aliquid distinctio Voluptates at', 2015, 'Abroad', 'Select', 'Saepe quos ratione cupiditate sunt eos mollit nemo cupiditate possimus soluta mollitia', 'Cupiditate necessitatibus veniam voluptas explicabo Velit iure odio', 'Magnam maiores et voluptatibus quis enim illo debitis necessitatibus numquam eos accusamus vitae eius est', 4, 3, 'B.Ed', '', 2008, 'Dolores veniam vel qui illum nobis dolor in est rerum dolor ex aut sint', 'UnEmployed', '', '', '', 'select', 'Select', 'Select', 'Select', '', 'Select', 'Select', 'Select', 'yes', 0, 'PhD', 'no', 'no', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png'),
(52, 'Georgia', 'Kaitlin Carson', 'Hunter', 'Miss', 'Other', 'Julian', 'Brenda Barber', 'Sutton', '11111-1111111-1', '2005-02-04', '', '+92 ', '+92 ', '+92 ', 'Select', 'Select', 'Select', 'Select', '', 'Bachelors 3 years', 'Necessitatibus magni nulla optio nihil sit quaerat accusantium dolores est exercitation aute blanditiis do lorem nulla animi ut', 2009, 'Pakistan', 'University of Engineering and Technology', '', '', '', 4, 2, '', '', 0, '', 'UnEmployed', '', '', '', 'Select', 'Select', 'Select', 'Select', '', '', '', '', '', 0, 'Middle', 'yes', 'Post 4', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/DSJKhushab_Ad2.jpg', '../assets/uploads/AcademicDocuments/29983139_1740178359382009_6073381984704855731_o.jpg'),
(53, 'Elaine', 'Lenore Mcfadden', 'Lambert', 'Engr.', 'Female', 'Rajah', 'Jerry Brown', 'Cain', '22222-2222222-2', '1992-09-08', 'qumuzyrul@mailinator.net', '+92 (333) 333-3333', '+92 (44) 444-4444', '+92 (555) 555-5555', 'GILGIT BALTISTAN', 'BALTISTAN', 'GHANCHE (AT KHAPLU)', 'MASHABRUM', 'Ab accusantium nihil nesciunt autem harum dolore inventore voluptas possimus voluptatem ducimus ipsum eum labore rem officia nostrum quod excepteur', 'Bachelors 4 years', 'Unde natus blanditiis laboriosam libero illum', 1993, 'Pakistan', 'Air Fundation', '', '', '', 4, 3, '', '', 0, '', 'Employed', 'Maxime est est sit eligendi nulla', 'Architecto quasi dolor sit pariatur Suscipit consectetur velit labore aliqua Animi enim dolore ipsa', 'Warren and Avery Co', 'F.A.T.A.', 'N/A', 'F.R. KOHAT DISTRICT', '', 'Omnis obcaecati incididunt voluptas id ad et porro est voluptatem anim commodi cupiditate adipisci', 'no', 'no', 'no', 'no', 2014, 'Primary', 'yes', 'Post 2', '', '', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/DSJKhushab_Ad2.jpg', '../assets/uploads/AcademicDocuments/29983139_1740178359382009_6073381984704855731_o.jpg'),
(54, 'Ima', 'John Nash', 'Payne', 'Engr.', 'Male', 'Mechelle', 'Ursa Odonnell', 'Lynn', '33333-3333333-3', '2002-07-04', 'kyra@mailinator.com', '+92 (612) 111-1111', '+92 (22) 222-2222', '+92 (333) 333-3333', 'GILGIT BALTISTAN', 'BALTISTAN', 'BALTISTAN (AT SKARDU)', 'RONDU', 'In dignissimos enim culpa consequatur Vero aut nostrum quia labore', 'Masters', 'Et id proident dolores quia aut aut veniam occaecat in reprehenderit quia nihil', 2010, 'Abroad', '', 'Exercitation dolores deserunt rerum distinctio', 'Tenetur optio labore omnis vel dolor voluptas qui velit veniam non porro qui sit proident molestiae quasi suscipit magnam', 'Quod libero laboris eos temporibus', 4, 3, 'Other', 'asdasdasd', 2007, 'Inventore ea in ad nulla magna pariatur Reprehenderit asperiores officia ullamco consequatur', 'UnEmployed', '', '', '', 'Select', 'Select', 'Select', 'Select', '', '', '', '', '', 0, 'Select', 'yes', 'no', 'yes', 'Post 1', '0000-00-00 00:00:00', 0, '../assets/uploads/Pictures/36774193_285635785318366_8221331887247851520_n.jpg', '../assets/uploads/AcademicDocuments/QadreeCollections_FBCover.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invigexperience`
--

CREATE TABLE `tbl_invigexperience` (
  `AppID` bigint(20) NOT NULL,
  `ExpID` bigint(20) NOT NULL,
  `LevelMarked` varchar(500) DEFAULT NULL,
  `From` date DEFAULT NULL,
  `To` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invigexperience`
--

INSERT INTO `tbl_invigexperience` (`AppID`, `ExpID`, `LevelMarked`, `From`, `To`) VALUES
(52, 1, 'Primary', '0000-00-00', '0000-00-00'),
(53, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(54, 1, 'Intermediate', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `LocID` int(11) NOT NULL,
  `Province` varchar(500) DEFAULT NULL,
  `Division` varchar(500) DEFAULT NULL,
  `District` varchar(500) DEFAULT NULL,
  `Tehsil` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`LocID`, `Province`, `Division`, `District`, `Tehsil`) VALUES
(1, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'CHITRAL', 'CHITRAL'),
(2, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'CHITRAL', 'MASTUJ'),
(3, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'UPPER DIR (AT DIR)', 'DIR'),
(4, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'UPPER DIR (AT DIR)', 'SHARINGAL'),
(5, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'UPPER DIR (AT DIR)', 'WARI'),
(6, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'LOWER DIR (AT TEMERGARA)', 'ADENZAI'),
(7, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'LOWER DIR (AT TEMERGARA)', 'LAL QILA'),
(8, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'LOWER DIR (AT TEMERGARA)', 'SAMARBAGH(BARWA)'),
(9, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'LOWER DIR (AT TEMERGARA)', 'TEMERGARA'),
(10, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'BABUZAI(SWAT)'),
(11, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'BARIKOT'),
(12, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'BEHRAIN'),
(13, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'CHARBAGH'),
(14, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'KABAL'),
(15, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'KHWAZA KHELA'),
(16, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SWAT (AT MINGORA)', 'MATTA SHAMZAI'),
(17, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SHANGLA (AT ALPURI)', 'ALPURI'),
(18, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SHANGLA (AT ALPURI)', 'BESHAM'),
(19, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'SHANGLA (AT ALPURI)', 'PURAN'),
(20, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'BUNER', 'DAGGAR/BUNER'),
(21, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'BUNER', 'GAGRA'),
(22, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'BUNER', 'KHADOKHAIL'),
(23, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'BUNER', 'MANDAR'),
(24, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'MALAKAND P.A.', 'SAM RANIZAI'),
(25, 'KHYBER PAKHTUNKHWA', 'MALAKAND', 'MALAKAND P.A.', 'SWAT RANIZAI'),
(26, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'KOHISTAN', 'PALAS'),
(27, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'KOHISTAN', 'PATTAN'),
(28, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'KOHISTAN', 'DASSU'),
(29, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'KOHISTAN', 'KANDIA'),
(30, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'MANSEHRA', 'BALAKOT'),
(31, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'MANSEHRA', 'MANSEHRA'),
(32, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'MANSEHRA', 'OGHI'),
(33, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'TORGHAR (AT OGHI)', 'JUDBA TEHSIL'),
(34, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'TORGHAR (AT OGHI)', 'KHANDER TEHSIL'),
(35, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'BATAGRAM (AT BANA)', 'BATAGRAM (BANNA)'),
(36, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'BATAGRAM (AT BANA)', 'ALLAI'),
(37, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'ABBOTTABAD', 'ABBOTTABAD'),
(38, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'ABBOTTABAD', 'HAVELIAN'),
(39, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'HARIPUR', 'GHAZI'),
(40, 'KHYBER PAKHTUNKHWA', 'HAZARA', 'HARIPUR', 'HARIPUR'),
(41, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'MARDAN', 'KATLANG'),
(42, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'MARDAN', 'MARDAN'),
(43, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'MARDAN', 'TAKHT BHAI'),
(44, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'SWABI', 'LAHOR'),
(45, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'SWABI', 'RAZAR'),
(46, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'SWABI', 'SWABI'),
(47, 'KHYBER PAKHTUNKHWA', 'MARDAN', 'SWABI', 'TOPI'),
(48, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'CHARSADDA', 'CHARSADDA'),
(49, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'CHARSADDA', 'SHABQADAR'),
(50, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'CHARSADDA', 'TANGI'),
(51, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'PESHAWAR', 'PESHAWAR'),
(52, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'NOWSHERA', 'JAHANGIRA'),
(53, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'NOWSHERA', 'NOWSHERA'),
(54, 'KHYBER PAKHTUNKHWA', 'PESHAWAR', 'NOWSHERA', 'PABBI'),
(55, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'KOHAT', 'KOHAT'),
(56, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'KOHAT', 'LACHI'),
(57, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'HANGU', 'HANGU'),
(58, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'HANGU', 'TALL'),
(59, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'KARAK', 'BANDA DAUD SHAH'),
(60, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'KARAK', 'KARAK'),
(61, 'KHYBER PAKHTUNKHWA', 'KOHAT', 'KARAK', 'TAKHT-E-NASRATI'),
(62, 'KHYBER PAKHTUNKHWA', 'BANNU', 'BANNU', 'BANNU'),
(63, 'KHYBER PAKHTUNKHWA', 'BANNU', 'BANNU', 'DOMEL'),
(64, 'KHYBER PAKHTUNKHWA', 'BANNU', 'LAKKI MARWAT', 'LAKKI MARWAT'),
(65, 'KHYBER PAKHTUNKHWA', 'BANNU', 'LAKKI MARWAT', 'NAURANG'),
(66, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'DERA ISMAIL KHAN'),
(67, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'DARABAN'),
(68, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'PAHARPUR'),
(69, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'KULACHI'),
(70, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'DERA ISMAIL KHAN', 'PAROA'),
(71, 'KHYBER PAKHTUNKHWA', 'D.I.KHAN', 'TANK', 'TANK'),
(72, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'BARANG'),
(73, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'CHARMANG'),
(74, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'KHAR BAJAUR'),
(75, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'MAMUND'),
(76, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'NAWAGAI'),
(77, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'SALARZAI'),
(78, 'F.A.T.A.', 'N/A', 'BAJAUR (AT KHAR BAJAUR)', 'UTMANKHEL(QZAFI)'),
(79, 'F.A.T.A.', 'N/A', 'KHYBER (AT PESHAWAR)', 'BARA'),
(80, 'F.A.T.A.', 'N/A', 'KHYBER (AT PESHAWAR)', 'JAMRUD'),
(81, 'F.A.T.A.', 'N/A', 'KHYBER (AT PESHAWAR)', 'LANDI KOTAL'),
(82, 'F.A.T.A.', 'N/A', 'KHYBER (AT PESHAWAR)', 'MULA GHORI'),
(83, 'F.A.T.A.', 'N/A', 'KURRAM (AT PARACHINAR)', 'KURRAM F.R.'),
(84, 'F.A.T.A.', 'N/A', 'KURRAM (AT PARACHINAR)', 'LOWER KURRAM'),
(85, 'F.A.T.A.', 'N/A', 'KURRAM (AT PARACHINAR)', 'UPPER KURRAM'),
(86, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'HALIMZAI'),
(87, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'PINDIALI'),
(88, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'PRINGHAR'),
(89, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'SAFI'),
(90, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'UPPER MOHMAND'),
(91, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'UTMAN KHEL(AMBAR)'),
(92, 'F.A.T.A.', 'N/A', 'MOHMAND (AT GHALLANAY)', 'YAKE GHUND'),
(93, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'DATTA KHEL'),
(94, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'DOSSALI'),
(95, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'GARYUM'),
(96, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'GHULAM KHAN'),
(97, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'MIR ALI'),
(98, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'MIRAN SHAH'),
(99, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'RAZMAK'),
(100, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'SHEWA'),
(101, 'F.A.T.A.', 'N/A', 'N.WAZIRISTAN (AT MIRAN SHAH)', 'SPINWAM'),
(102, 'F.A.T.A.', 'N/A', 'ORAKZAI (AT KALAYA)', 'CENTRAL'),
(103, 'F.A.T.A.', 'N/A', 'ORAKZAI (AT KALAYA)', 'ISMAILZAI'),
(104, 'F.A.T.A.', 'N/A', 'ORAKZAI (AT KALAYA)', 'LOWER'),
(105, 'F.A.T.A.', 'N/A', 'ORAKZAI (AT KALAYA)', 'UPPER'),
(106, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'BIRMAL'),
(107, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'LADHA'),
(108, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'MAKIN(CHARLAI)'),
(109, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'SARAROGHA'),
(110, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'SARWEKAI'),
(111, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'TIARZA'),
(112, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'TOI KHULLAH'),
(113, 'F.A.T.A.', 'N/A', 'S.WAZIRISTAN (AT WANA)', 'WANA'),
(114, 'F.A.T.A.', 'N/A', 'F.R. BANNU DISTRICT', ''),
(115, 'F.A.T.A.', 'N/A', 'F.R. D.I.KHAN DISTRICT', ''),
(116, 'F.A.T.A.', 'N/A', 'F.R. KOHAT DISTRICT', ''),
(117, 'F.A.T.A.', 'N/A', 'F.R. LAKKI MARWAT DISTRICT', ''),
(118, 'F.A.T.A.', 'N/A', 'F.R. PESHAWAR DISTRICT', ''),
(119, 'F.A.T.A.', 'N/A', 'F.R. TANK DISTRICT', ''),
(120, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'ATTOCK'),
(121, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'FATEH JANG'),
(122, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'HASSANABDAL'),
(123, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'HAZRO'),
(124, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'JAND'),
(125, 'PUNJAB', 'RAWALPINDI', 'ATTOCK', 'PINDI GHEB'),
(126, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'GUJAR KHAN'),
(127, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'KAHUTA'),
(128, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'KALLAR SAYYEDAN'),
(129, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'KOTLI SATTIAN'),
(130, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'MURREE'),
(131, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'RAWALPINDI'),
(132, 'PUNJAB', 'RAWALPINDI', 'RAWALPINDI', 'TAXILA'),
(133, 'PUNJAB', 'RAWALPINDI', 'JHELUM', 'DINA'),
(134, 'PUNJAB', 'RAWALPINDI', 'JHELUM', 'JHELUM'),
(135, 'PUNJAB', 'RAWALPINDI', 'JHELUM', 'PIND DADAN KHAN'),
(136, 'PUNJAB', 'RAWALPINDI', 'JHELUM', 'SOHAWA'),
(137, 'PUNJAB', 'RAWALPINDI', 'CHAKWAL', 'CHAKWAL'),
(138, 'PUNJAB', 'RAWALPINDI', 'CHAKWAL', 'CHOA SAIDAN SHAH'),
(139, 'PUNJAB', 'RAWALPINDI', 'CHAKWAL', 'KALLAR KAHAR'),
(140, 'PUNJAB', 'RAWALPINDI', 'CHAKWAL', 'LAWA'),
(141, 'PUNJAB', 'RAWALPINDI', 'CHAKWAL', 'TALAGANG'),
(142, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'BHALWAL'),
(143, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'BHERA'),
(144, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'KOT MOMIN'),
(145, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'SAHIWAL'),
(146, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'SARGODHA'),
(147, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'SHAHPUR'),
(148, 'PUNJAB', 'SARGODHA', 'SARGODHA', 'SILLANWALI'),
(149, 'PUNJAB', 'SARGODHA', 'BHAKKAR', 'BHAKKAR'),
(150, 'PUNJAB', 'SARGODHA', 'BHAKKAR', 'DARYA KHAN'),
(151, 'PUNJAB', 'SARGODHA', 'BHAKKAR', 'KALUR KOT'),
(152, 'PUNJAB', 'SARGODHA', 'BHAKKAR', 'MANKERA'),
(153, 'PUNJAB', 'SARGODHA', 'KHUSHAB', 'KHUSHAB'),
(154, 'PUNJAB', 'SARGODHA', 'KHUSHAB', 'NAUSHEHRA'),
(155, 'PUNJAB', 'SARGODHA', 'KHUSHAB', 'NURPUR'),
(156, 'PUNJAB', 'SARGODHA', 'KHUSHAB', 'QUAIDABAD'),
(157, 'PUNJAB', 'SARGODHA', 'MIANWALI', 'ISA KHEL'),
(158, 'PUNJAB', 'SARGODHA', 'MIANWALI', 'MIANWALI'),
(159, 'PUNJAB', 'SARGODHA', 'MIANWALI', 'PIPLAN'),
(160, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'CHAK JHUMRA'),
(161, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'FAISALABAD CITY'),
(162, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'FAISALABAD SADDAR'),
(163, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'JARANWALA'),
(164, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'SAMMUNDRI'),
(165, 'PUNJAB', 'FAISALABAD', 'FAISALABAD', 'TANDLIANWALA'),
(166, 'PUNJAB', 'FAISALABAD', 'JHANG', '18-HAZARI'),
(167, 'PUNJAB', 'FAISALABAD', 'JHANG', 'AHMEDPUR SIAL'),
(168, 'PUNJAB', 'FAISALABAD', 'JHANG', 'JHANG'),
(169, 'PUNJAB', 'FAISALABAD', 'JHANG', 'SHORKOT'),
(170, 'PUNJAB', 'FAISALABAD', 'CHINIOT', 'BHAWANA'),
(171, 'PUNJAB', 'FAISALABAD', 'CHINIOT', 'CHINIOT'),
(172, 'PUNJAB', 'FAISALABAD', 'CHINIOT', 'LALIAN'),
(173, 'PUNJAB', 'FAISALABAD', 'TOBA TEK SINGH', 'GOJRA'),
(174, 'PUNJAB', 'FAISALABAD', 'TOBA TEK SINGH', 'KAMALIA'),
(175, 'PUNJAB', 'FAISALABAD', 'TOBA TEK SINGH', 'PIR MAHAL'),
(176, 'PUNJAB', 'FAISALABAD', 'TOBA TEK SINGH', 'TOBA TEK SINGH'),
(177, 'PUNJAB', 'GUJRANWALA', 'GUJRANWALA', 'GUJRANWALA CITY'),
(178, 'PUNJAB', 'GUJRANWALA', 'GUJRANWALA', 'GUJRANWALA SADDAR'),
(179, 'PUNJAB', 'GUJRANWALA', 'GUJRANWALA', 'KAMOKE'),
(180, 'PUNJAB', 'GUJRANWALA', 'GUJRANWALA', 'NOWSHERA VIRKAN'),
(181, 'PUNJAB', 'GUJRANWALA', 'GUJRANWALA', 'WAZIRABAD'),
(182, 'PUNJAB', 'GUJRANWALA', 'HAFIZABAD', 'HAFIZABAD'),
(183, 'PUNJAB', 'GUJRANWALA', 'HAFIZABAD', 'PINDI BHATTIAN'),
(184, 'PUNJAB', 'GUJRANWALA', 'MANDI BAHAUDDIN', 'MALIKWAL'),
(185, 'PUNJAB', 'GUJRANWALA', 'MANDI BAHAUDDIN', 'MANDI BAHAUDDIN'),
(186, 'PUNJAB', 'GUJRANWALA', 'MANDI BAHAUDDIN', 'PHALIA'),
(187, 'PUNJAB', 'GUJRANWALA', 'GUJRAT', 'GUJRAT'),
(188, 'PUNJAB', 'GUJRANWALA', 'GUJRAT', 'KHARIAN'),
(189, 'PUNJAB', 'GUJRANWALA', 'GUJRAT', 'SARAI ALAMGIR'),
(190, 'PUNJAB', 'GUJRANWALA', 'SIALKOT', 'DASKA'),
(191, 'PUNJAB', 'GUJRANWALA', 'SIALKOT', 'PASRUR'),
(192, 'PUNJAB', 'GUJRANWALA', 'SIALKOT', 'SAMBRIAL'),
(193, 'PUNJAB', 'GUJRANWALA', 'SIALKOT', 'SIALKOT'),
(194, 'PUNJAB', 'GUJRANWALA', 'NAROWAL', 'NAROWAL'),
(195, 'PUNJAB', 'GUJRANWALA', 'NAROWAL', 'SHAKARGARH'),
(196, 'PUNJAB', 'GUJRANWALA', 'NAROWAL', 'ZAFARWAL'),
(197, 'PUNJAB', 'LAHORE', 'LAHORE', 'LAHORE CANTT.'),
(198, 'PUNJAB', 'LAHORE', 'LAHORE', 'LAHORE CITY'),
(199, 'PUNJAB', 'LAHORE', 'LAHORE', 'MODEL TOWN'),
(200, 'PUNJAB', 'LAHORE', 'LAHORE', 'RAIWIND'),
(201, 'PUNJAB', 'LAHORE', 'LAHORE', 'SHALIMAR'),
(202, 'PUNJAB', 'LAHORE', 'KASUR', 'CHUNIAN'),
(203, 'PUNJAB', 'LAHORE', 'KASUR', 'KASUR'),
(204, 'PUNJAB', 'LAHORE', 'KASUR', 'KOT RADHA KISHAN'),
(205, 'PUNJAB', 'LAHORE', 'KASUR', 'PATTOKI'),
(206, 'PUNJAB', 'LAHORE', 'SHEIKHUPURA', 'FEROZEWALA'),
(207, 'PUNJAB', 'LAHORE', 'SHEIKHUPURA', 'MURIDKAY'),
(208, 'PUNJAB', 'LAHORE', 'SHEIKHUPURA', 'SAFDARABAD'),
(209, 'PUNJAB', 'LAHORE', 'SHEIKHUPURA', 'SHARAQPUR'),
(210, 'PUNJAB', 'LAHORE', 'SHEIKHUPURA', 'SHEIKHUPURA'),
(211, 'PUNJAB', 'LAHORE', 'NANKANA SAHIB', 'NANKANA SAHIB'),
(212, 'PUNJAB', 'LAHORE', 'NANKANA SAHIB', 'SANGLA HILL'),
(213, 'PUNJAB', 'LAHORE', 'NANKANA SAHIB', 'SHAHKOT'),
(214, 'PUNJAB', 'SAHIWAL', 'SAHIWAL', 'CHICHAWATNI'),
(215, 'PUNJAB', 'SAHIWAL', 'SAHIWAL', 'SAHIWAL'),
(216, 'PUNJAB', 'SAHIWAL', 'OKARA', 'DEPALPUR'),
(217, 'PUNJAB', 'SAHIWAL', 'OKARA', 'OKARA'),
(218, 'PUNJAB', 'SAHIWAL', 'OKARA', 'RENALA KHURD'),
(219, 'PUNJAB', 'SAHIWAL', 'PAKPATTAN', 'ARIFWALA'),
(220, 'PUNJAB', 'SAHIWAL', 'PAKPATTAN', 'PAKPATTAN'),
(221, 'PUNJAB', 'MULTAN', 'VEHARI', 'BUREWALA'),
(222, 'PUNJAB', 'MULTAN', 'VEHARI', 'MAILSI'),
(223, 'PUNJAB', 'MULTAN', 'VEHARI', 'VEHARI'),
(224, 'PUNJAB', 'MULTAN', 'MULTAN', 'JALALPUR PIRWALA'),
(225, 'PUNJAB', 'MULTAN', 'MULTAN', 'MULTAN CITY'),
(226, 'PUNJAB', 'MULTAN', 'MULTAN', 'MULTAN SADDAR'),
(227, 'PUNJAB', 'MULTAN', 'MULTAN', 'SHUJABAD'),
(228, 'PUNJAB', 'MULTAN', 'LODHRAN', 'DUNYAPUR'),
(229, 'PUNJAB', 'MULTAN', 'LODHRAN', 'KAHROR PACCA'),
(230, 'PUNJAB', 'MULTAN', 'LODHRAN', 'LODHRAN'),
(231, 'PUNJAB', 'MULTAN', 'KHANEWAL', 'JEHANIAN'),
(232, 'PUNJAB', 'MULTAN', 'KHANEWAL', 'KABIRWALA'),
(233, 'PUNJAB', 'MULTAN', 'KHANEWAL', 'KHANEWAL'),
(234, 'PUNJAB', 'MULTAN', 'KHANEWAL', 'MIAN CHANNU'),
(235, 'PUNJAB', 'DERA GHAZI KHAN', 'DERA GHAZI KHAN', 'DE-EX.AREA OF D.G.KHAN'),
(236, 'PUNJAB', 'DERA GHAZI KHAN', 'DERA GHAZI KHAN', 'DERA GHAZI KHAN'),
(237, 'PUNJAB', 'DERA GHAZI KHAN', 'DERA GHAZI KHAN', 'TAUNSA'),
(238, 'PUNJAB', 'DERA GHAZI KHAN', 'DERA GHAZI KHAN', 'KOT CHUTTA'),
(239, 'PUNJAB', 'DERA GHAZI KHAN', 'RAJANPUR', 'DE-EX.AREA OF RAJANPUR'),
(240, 'PUNJAB', 'DERA GHAZI KHAN', 'RAJANPUR', 'JAMPUR'),
(241, 'PUNJAB', 'DERA GHAZI KHAN', 'RAJANPUR', 'RAJANPUR'),
(242, 'PUNJAB', 'DERA GHAZI KHAN', 'RAJANPUR', 'ROJHAN'),
(243, 'PUNJAB', 'DERA GHAZI KHAN', 'LAYYAH', 'CHAUBARA'),
(244, 'PUNJAB', 'DERA GHAZI KHAN', 'LAYYAH', 'KAROR LAL ESAN'),
(245, 'PUNJAB', 'DERA GHAZI KHAN', 'LAYYAH', 'LAYYAH'),
(246, 'PUNJAB', 'DERA GHAZI KHAN', 'MUZAFFARGARH', 'ALIPUR'),
(247, 'PUNJAB', 'DERA GHAZI KHAN', 'MUZAFFARGARH', 'JATOI'),
(248, 'PUNJAB', 'DERA GHAZI KHAN', 'MUZAFFARGARH', 'KOT ADDU'),
(249, 'PUNJAB', 'DERA GHAZI KHAN', 'MUZAFFARGARH', 'MUZAFFARGARH'),
(250, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'AHMADPUR EAST'),
(251, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'BAHAWALPUR CITY'),
(252, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'BAHAWALPUR SADDAR'),
(253, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'HASILPUR'),
(254, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'KHAIRPUR TAMEWALI'),
(255, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALPUR', 'YAZMAN'),
(256, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALNAGAR', 'BAHAWALNAGAR'),
(257, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALNAGAR', 'CHISHTIAN'),
(258, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALNAGAR', 'FORT ABBAS'),
(259, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALNAGAR', 'HAROONABAD'),
(260, 'PUNJAB', 'BAHAWALPUR', 'BAHAWALNAGAR', 'MINCHINABAD'),
(261, 'PUNJAB', 'BAHAWALPUR', 'RAHIM YAR KHAN', 'KHANPUR'),
(262, 'PUNJAB', 'BAHAWALPUR', 'RAHIM YAR KHAN', 'LIAQUATPUR'),
(263, 'PUNJAB', 'BAHAWALPUR', 'RAHIM YAR KHAN', 'RAHIM YAR KHAN'),
(264, 'PUNJAB', 'BAHAWALPUR', 'RAHIM YAR KHAN', 'SADIQABAD'),
(265, 'SINDH', 'LARKANA', 'JACOBABAD', 'GARHI KHAIRO'),
(266, 'SINDH', 'LARKANA', 'JACOBABAD', 'JACOBABAD'),
(267, 'SINDH', 'LARKANA', 'JACOBABAD', 'THUL'),
(268, 'SINDH', 'LARKANA', 'KASHMORE', 'KANDHKOT'),
(269, 'SINDH', 'LARKANA', 'KASHMORE', 'KASHMORE'),
(270, 'SINDH', 'LARKANA', 'KASHMORE', 'TANGWANI'),
(271, 'SINDH', 'LARKANA', 'SHIKARPUR', 'GARHI YASIN'),
(272, 'SINDH', 'LARKANA', 'SHIKARPUR', 'KHANPUR'),
(273, 'SINDH', 'LARKANA', 'SHIKARPUR', 'LAKHI'),
(274, 'SINDH', 'LARKANA', 'SHIKARPUR', 'SHIKARPUR'),
(275, 'SINDH', 'LARKANA', 'LARKANA', 'BAKRANI'),
(276, 'SINDH', 'LARKANA', 'LARKANA', 'DOKRI'),
(277, 'SINDH', 'LARKANA', 'LARKANA', 'LARKANA'),
(278, 'SINDH', 'LARKANA', 'LARKANA', 'RATO DERO'),
(279, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'KAMBAR'),
(280, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'KUBO SAEED KHAN'),
(281, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'MIRO KHAN'),
(282, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'NASIRABAD'),
(283, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'SHAHDADKOT'),
(284, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'SUJAWAL JUNEJO'),
(285, 'SINDH', 'LARKANA', 'KAMBAR SHAHDADKOT', 'WARAH'),
(286, 'SINDH', 'SUKKUR', 'SUKKUR', 'NEW SUKKUR'),
(287, 'SINDH', 'SUKKUR', 'SUKKUR', 'PANO AQIL'),
(288, 'SINDH', 'SUKKUR', 'SUKKUR', 'ROHRI'),
(289, 'SINDH', 'SUKKUR', 'SUKKUR', 'SALEHPAT'),
(290, 'SINDH', 'SUKKUR', 'SUKKUR', 'SUKKUR'),
(291, 'SINDH', 'SUKKUR', 'GHOTKI (AT MIRPUR MATHELO)', 'DAHARKI'),
(292, 'SINDH', 'SUKKUR', 'GHOTKI (AT MIRPUR MATHELO)', 'GHOTKI'),
(293, 'SINDH', 'SUKKUR', 'GHOTKI (AT MIRPUR MATHELO)', 'KHANGARH (KHANPUR)'),
(294, 'SINDH', 'SUKKUR', 'GHOTKI (AT MIRPUR MATHELO)', 'MIRPUR MATHELO'),
(295, 'SINDH', 'SUKKUR', 'GHOTKI (AT MIRPUR MATHELO)', 'UBAURO'),
(296, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'FAIZ GANJ'),
(297, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'GAMBAT'),
(298, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'KHAIRPUR'),
(299, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'KINGRI'),
(300, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'KOT DIJI'),
(301, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'MIRWAH'),
(302, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'NARA'),
(303, 'SINDH', 'SUKKUR', 'KHAIRPUR', 'SOBHODERO'),
(304, 'SINDH', 'SHAHEED BENAZIRABAD', 'NAUSHAHRO FEROZE', 'BHIRIA'),
(305, 'SINDH', 'SHAHEED BENAZIRABAD', 'NAUSHAHRO FEROZE', 'KANDIORO'),
(306, 'SINDH', 'SHAHEED BENAZIRABAD', 'NAUSHAHRO FEROZE', 'MEHRABPUR'),
(307, 'SINDH', 'SHAHEED BENAZIRABAD', 'NAUSHAHRO FEROZE', 'MORO'),
(308, 'SINDH', 'SHAHEED BENAZIRABAD', 'NAUSHAHRO FEROZE', 'NAUSHAHRO FEROZE'),
(309, 'SINDH', 'SHAHEED BENAZIRABAD', 'SHAHEED BENAZIRABAD', 'DAUR'),
(310, 'SINDH', 'SHAHEED BENAZIRABAD', 'SHAHEED BENAZIRABAD', 'NAWAB SHAH'),
(311, 'SINDH', 'SHAHEED BENAZIRABAD', 'SHAHEED BENAZIRABAD', 'QAZI AHMED'),
(312, 'SINDH', 'SHAHEED BENAZIRABAD', 'SHAHEED BENAZIRABAD', 'SAKRAND'),
(313, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'JAM NAWAZ ALI'),
(314, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'KHIPRO'),
(315, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'SANGHAR'),
(316, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'SHAHDADPUR'),
(317, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'SINJHORO'),
(318, 'SINDH', 'SHAHEED BENAZIRABAD', 'SANGHAR', 'TANDO ADAM'),
(319, 'SINDH', 'HYDERABAD', 'DADU', 'DADU'),
(320, 'SINDH', 'HYDERABAD', 'DADU', 'JOHI'),
(321, 'SINDH', 'HYDERABAD', 'DADU', 'KHAIRPUR NATHAN SHAH'),
(322, 'SINDH', 'HYDERABAD', 'DADU', 'MEHAR'),
(323, 'SINDH', 'HYDERABAD', 'JAMSHORO', 'KOTRI'),
(324, 'SINDH', 'HYDERABAD', 'JAMSHORO', 'MANJHAND'),
(325, 'SINDH', 'HYDERABAD', 'JAMSHORO', 'SEHWAN'),
(326, 'SINDH', 'HYDERABAD', 'JAMSHORO', 'THANO BULA KHAN'),
(327, 'SINDH', 'HYDERABAD', 'HYDERABAD', 'CITY HYDERABAD'),
(328, 'SINDH', 'HYDERABAD', 'HYDERABAD', 'HYDERABAD'),
(329, 'SINDH', 'HYDERABAD', 'HYDERABAD', 'LATIFABAD'),
(330, 'SINDH', 'HYDERABAD', 'HYDERABAD', 'QASIMABAD'),
(331, 'SINDH', 'HYDERABAD', 'MATIARI', 'HALA'),
(332, 'SINDH', 'HYDERABAD', 'MATIARI', 'MATIARI'),
(333, 'SINDH', 'HYDERABAD', 'MATIARI', 'SAEEDABAD'),
(334, 'SINDH', 'HYDERABAD', 'TANDO ALLAHYAR', 'CHAMBER'),
(335, 'SINDH', 'HYDERABAD', 'TANDO ALLAHYAR', 'JHANDO MARI'),
(336, 'SINDH', 'HYDERABAD', 'TANDO ALLAHYAR', 'TANDO ALLAHYAR'),
(337, 'SINDH', 'N/A', 'TANDO MOHAMMAD KHAN', 'BULRI SHAH KARIM'),
(338, 'SINDH', 'N/A', 'TANDO MOHAMMAD KHAN', 'TANDO GHULAM HYDER'),
(339, 'SINDH', 'N/A', 'TANDO MOHAMMAD KHAN', 'TANDO MOHAMMAD KHAN'),
(340, 'SINDH', 'N/A', 'BADIN', 'BADIN'),
(341, 'SINDH', 'N/A', 'BADIN', 'MATLI'),
(342, 'SINDH', 'N/A', 'BADIN', 'SHAHEED FAZAL RAHU'),
(343, 'SINDH', 'N/A', 'BADIN', 'TALHAR'),
(344, 'SINDH', 'N/A', 'BADIN', 'TANDO BAGO'),
(345, 'SINDH', 'N/A', 'THATTA', 'GHORABARI'),
(346, 'SINDH', 'N/A', 'THATTA', 'KETI BUNDER'),
(347, 'SINDH', 'N/A', 'THATTA', 'MIRPUR SAKRO'),
(348, 'SINDH', 'N/A', 'THATTA', 'THATTA'),
(349, 'SINDH', 'N/A', 'SUJAWAL', 'JATI'),
(350, 'SINDH', 'N/A', 'SUJAWAL', 'KHARO CHAN'),
(351, 'SINDH', 'N/A', 'SUJAWAL', 'MIRPUR BATHORO'),
(352, 'SINDH', 'N/A', 'SUJAWAL', 'SHAH BUNDER'),
(353, 'SINDH', 'N/A', 'SUJAWAL', 'SUJAWAL'),
(354, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'DIGRI'),
(355, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'HUSSAIN BUX MARRI'),
(356, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'JHUDDO'),
(357, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'KOT GHULAM MOHAMMAD'),
(358, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'MIRPUR KHAS'),
(359, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'SHUJABAD'),
(360, 'SINDH', 'MIRPUR KHAS', 'MIRPUR KHAS', 'SINDHRI'),
(361, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'CHACHRO'),
(362, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'DHALI'),
(363, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'DIPLO'),
(364, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'ISLAMKOT'),
(365, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'KALOI'),
(366, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'MITHI'),
(367, 'SINDH', 'MIRPUR KHAS', 'THARPARKAR', 'NAGAR PARKAR'),
(368, 'SINDH', 'MIRPUR KHAS', 'UMERKOT', 'KUNRI'),
(369, 'SINDH', 'MIRPUR KHAS', 'UMERKOT', 'PITHORO'),
(370, 'SINDH', 'MIRPUR KHAS', 'UMERKOT', 'SAMARO'),
(371, 'SINDH', 'MIRPUR KHAS', 'UMERKOT', 'UMERKOT'),
(372, 'SINDH', 'KARACHI', 'KARACHI EAST', 'FEROZABAD SUB-DIVISION'),
(373, 'SINDH', 'KARACHI', 'KARACHI EAST', 'GULSHAN-E-IQBAL SUB-DIVISION'),
(374, 'SINDH', 'KARACHI', 'KARACHI EAST', 'GULZAR-E-HIJRI SUB-DIVISION'),
(375, 'SINDH', 'KARACHI', 'KARACHI EAST', 'JAMSHED QUARTER SUB-DIVISION'),
(376, 'SINDH', 'KARACHI', 'KARACHI WEST', 'MAURIPUR SUB-DIVISION'),
(377, 'SINDH', 'KARACHI', 'KARACHI WEST', 'HARBOUR SUB-DIVISION'),
(378, 'SINDH', 'KARACHI', 'KARACHI WEST', 'ORANGI SUB-DIVISION'),
(379, 'SINDH', 'KARACHI', 'KARACHI WEST', 'MOMINABAD SUB-DIVISION'),
(380, 'SINDH', 'KARACHI', 'KARACHI WEST', 'SITE SUB-DIVISION'),
(381, 'SINDH', 'KARACHI', 'KARACHI WEST', 'BALDIA SUB-DIVISION'),
(382, 'SINDH', 'KARACHI', 'KARACHI WEST', 'MANGHOPIR SUB-DIVISION'),
(383, 'SINDH', 'KARACHI', 'KARACHI SOUTH', 'ARAM BAHG SUB-DIVISION'),
(384, 'SINDH', 'KARACHI', 'KARACHI SOUTH', 'CIVIL LINE SUB-DIVISION'),
(385, 'SINDH', 'KARACHI', 'KARACHI SOUTH', 'GARDEN SUB-DIVISION'),
(386, 'SINDH', 'KARACHI', 'KARACHI SOUTH', 'LYARI SUB-DIVISION'),
(387, 'SINDH', 'KARACHI', 'KARACHI SOUTH', 'SADDAR SUB-DIVISION'),
(388, 'SINDH', 'KARACHI', 'KARACHI CENTRAL', 'GULBERG SUB-DIVISION'),
(389, 'SINDH', 'KARACHI', 'KARACHI CENTRAL', 'LIAQUATABAD SUB-DIVISION'),
(390, 'SINDH', 'KARACHI', 'KARACHI CENTRAL', 'NAZIMABAD SUB-DIVISION'),
(391, 'SINDH', 'KARACHI', 'KARACHI CENTRAL', 'NEW KARACHI SUB-DIVISION'),
(392, 'SINDH', 'KARACHI', 'KARACHI CENTRAL', 'NORTH NAZIMABAD SUB-DIVISION'),
(393, 'SINDH', 'KARACHI', 'MALIR', 'AIRPORT SUB-DIVISION'),
(394, 'SINDH', 'KARACHI', 'MALIR', 'BIN QASIM SUB-DIVISION'),
(395, 'SINDH', 'KARACHI', 'MALIR', 'GADAB SUB-DIVISION'),
(396, 'SINDH', 'KARACHI', 'MALIR', 'IBRAHIM HYDERI SUB-DIVISION'),
(397, 'SINDH', 'KARACHI', 'MALIR', 'MURAD MEMON SUB-DIVISION'),
(398, 'SINDH', 'KARACHI', 'MALIR', 'SHAH MURAD SUB-DIVISION'),
(399, 'SINDH', 'KARACHI', 'KORANGI', 'KORANGI SUB-DIVISION'),
(400, 'SINDH', 'KARACHI', 'KORANGI', 'LANDHI SUB-DIVISION'),
(401, 'SINDH', 'KARACHI', 'KORANGI', 'MADOL COLONY SUB-DIVISION'),
(402, 'SINDH', 'KARACHI', 'KORANGI', 'SHAH FAISAL SUB-DIVISION'),
(403, 'BALOCHISTAN', 'QUETTA', 'QUETTA', 'PANJPAI SUB-TEHSIL'),
(404, 'BALOCHISTAN', 'QUETTA', 'QUETTA', 'QUETTA CITY'),
(405, 'BALOCHISTAN', 'QUETTA', 'QUETTA', 'QUETTA SADDAR'),
(406, 'BALOCHISTAN', 'QUETTA', 'PISHIN', 'BARSHORE SUB-TEHSIL'),
(407, 'BALOCHISTAN', 'QUETTA', 'PISHIN', 'HURRAMZAI'),
(408, 'BALOCHISTAN', 'QUETTA', 'PISHIN', 'KAREZAT'),
(409, 'BALOCHISTAN', 'QUETTA', 'PISHIN', 'PISHIN'),
(410, 'BALOCHISTAN', 'QUETTA', 'PISHIN', 'SARANAN'),
(411, 'BALOCHISTAN', 'QUETTA', 'KILLA ABDULLAH', 'CHAMAN'),
(412, 'BALOCHISTAN', 'QUETTA', 'KILLA ABDULLAH', 'DOBANDI SUB-TEHSIL'),
(413, 'BALOCHISTAN', 'QUETTA', 'KILLA ABDULLAH', 'GULISTAN'),
(414, 'BALOCHISTAN', 'QUETTA', 'KILLA ABDULLAH', 'KILLA ABDULLAH'),
(415, 'BALOCHISTAN', 'QUETTA', 'CHAGAI (AT DALBANDIN)', 'CHAGAI SUB-TEHSIL'),
(416, 'BALOCHISTAN', 'QUETTA', 'CHAGAI (AT DALBANDIN)', 'DALBANDIN'),
(417, 'BALOCHISTAN', 'QUETTA', 'CHAGAI (AT DALBANDIN)', 'NOKUNDI'),
(418, 'BALOCHISTAN', 'QUETTA', 'CHAGAI (AT DALBANDIN)', 'TAFTAN'),
(419, 'BALOCHISTAN', 'QUETTA', 'NUSHKI', 'DAK SUB-TEHSIL'),
(420, 'BALOCHISTAN', 'QUETTA', 'NUSHKI', 'NUSHKI'),
(421, 'BALOCHISTAN', 'ZHOB', 'LORALAI', 'DUKI'),
(422, 'BALOCHISTAN', 'ZHOB', 'LORALAI', 'LORALAI'),
(423, 'BALOCHISTAN', 'ZHOB', 'LORALAI', 'MEKHTAR'),
(424, 'BALOCHISTAN', 'ZHOB', 'BARKHAN', 'BARKHAN'),
(425, 'BALOCHISTAN', 'ZHOB', 'MUSAKHEL', 'DRUG'),
(426, 'BALOCHISTAN', 'ZHOB', 'MUSAKHEL', 'KINGRI'),
(427, 'BALOCHISTAN', 'ZHOB', 'MUSAKHEL', 'MUSAKHEL'),
(428, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'BADINI SUB-TEHSIL'),
(429, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'KANMETHARZAI SUB-TEHSIL'),
(430, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'KILLA SAIFULLAH'),
(431, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'LOIBAND'),
(432, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'MUSLIM BAGH'),
(433, 'BALOCHISTAN', 'ZHOB', 'KILLA SAIFULLAH', 'SHINKI SUB-TEHSIL'),
(434, 'BALOCHISTAN', 'ZHOB', 'ZHOB', 'ASHWAT SUB-TEHSIL'),
(435, 'BALOCHISTAN', 'ZHOB', 'ZHOB', 'KASHATU SUB-TEHSIL'),
(436, 'BALOCHISTAN', 'ZHOB', 'ZHOB', 'QAMAR DIN KAREZ'),
(437, 'BALOCHISTAN', 'ZHOB', 'ZHOB', 'SAMBAZA SUB-TEHSIL'),
(438, 'BALOCHISTAN', 'ZHOB', 'ZHOB', 'ZHOB'),
(439, 'BALOCHISTAN', 'ZHOB', 'SHEERANI', 'SHEERANI SUB-TEHSIL'),
(440, 'BALOCHISTAN', 'SIBI', 'SIBI', 'KUTMANDAI SUB-TEHSIL'),
(441, 'BALOCHISTAN', 'SIBI', 'SIBI', 'SANGAN SUB-TEHSIL'),
(442, 'BALOCHISTAN', 'SIBI', 'SIBI', 'SIBI'),
(443, 'BALOCHISTAN', 'SIBI', 'LEHRI', 'BHAG'),
(444, 'BALOCHISTAN', 'SIBI', 'LEHRI', 'LEHRI'),
(445, 'BALOCHISTAN', 'SIBI', 'HARNAI', 'HARNAI'),
(446, 'BALOCHISTAN', 'SIBI', 'HARNAI', 'KHOAST SUB-TEHSIL'),
(447, 'BALOCHISTAN', 'SIBI', 'HARNAI', 'SHARIGH'),
(448, 'BALOCHISTAN', 'SIBI', 'ZIARAT', 'SINJAWI SUB-TEHSIL'),
(449, 'BALOCHISTAN', 'SIBI', 'ZIARAT', 'ZIARAT'),
(450, 'BALOCHISTAN', 'SIBI', 'KOHLU', 'GRISINI SUB-TEHSIL'),
(451, 'BALOCHISTAN', 'SIBI', 'KOHLU', 'KAHAN'),
(452, 'BALOCHISTAN', 'SIBI', 'KOHLU', 'KOHLU'),
(453, 'BALOCHISTAN', 'SIBI', 'KOHLU', 'MAWAND'),
(454, 'BALOCHISTAN', 'SIBI', 'KOHLU', 'TAMBOO'),
(455, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'BAIKER SUB-TEHSIL'),
(456, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'DERA BUGTI'),
(457, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'LOTI SUB-TEHSIL'),
(458, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'MALAM SUB-TEHSIL'),
(459, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'PHELAWAGH'),
(460, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'PIR KOH SUB-TEHSIL'),
(461, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'SANGSILLAH SUB-TEHSIL'),
(462, 'BALOCHISTAN', 'SIBI', 'DERA BUGTI', 'SUI'),
(463, 'BALOCHISTAN', 'NASIRABAD', 'JAFFARABAD', 'GANDAKHA'),
(464, 'BALOCHISTAN', 'NASIRABAD', 'JAFFARABAD', 'JHAT PAT'),
(465, 'BALOCHISTAN', 'NASIRABAD', 'JAFFARABAD', 'USTA MOHAMMAD'),
(466, 'BALOCHISTAN', 'NASIRABAD', 'NASIRABAD  (AT D.M.JAMALI)', 'BABA KOT'),
(467, 'BALOCHISTAN', 'NASIRABAD', 'NASIRABAD  (AT D.M.JAMALI)', 'CHATTAR SUB-TEHSIL'),
(468, 'BALOCHISTAN', 'NASIRABAD', 'NASIRABAD  (AT D.M.JAMALI)', 'DERA MURAD JAMALI'),
(469, 'BALOCHISTAN', 'NASIRABAD', 'NASIRABAD  (AT D.M.JAMALI)', 'TAMBOO'),
(470, 'BALOCHISTAN', 'NASIRABAD', 'KACHHI (BOLAN) (AT DHADAR)', 'BALANARI SUB-TEHSIL'),
(471, 'BALOCHISTAN', 'NASIRABAD', 'KACHHI (BOLAN) (AT DHADAR)', 'DHADAR'),
(472, 'BALOCHISTAN', 'NASIRABAD', 'KACHHI (BOLAN) (AT DHADAR)', 'KHATTAN SUB-TEHSIL'),
(473, 'BALOCHISTAN', 'NASIRABAD', 'KACHHI (BOLAN) (AT DHADAR)', 'MACH SUB-TEHSIL'),
(474, 'BALOCHISTAN', 'NASIRABAD', 'KACHHI (BOLAN) (AT DHADAR)', 'SANNI SUB-TEHSIL'),
(475, 'BALOCHISTAN', 'NASIRABAD', 'JHAL MAGSI (AT GANDAWA)', 'GANDAWA'),
(476, 'BALOCHISTAN', 'NASIRABAD', 'JHAL MAGSI (AT GANDAWA)', 'JHAL MAGSI'),
(477, 'BALOCHISTAN', 'NASIRABAD', 'JHAL MAGSI (AT GANDAWA)', 'MIRPUR SUB-TEHSIL'),
(478, 'BALOCHISTAN', 'NASIRABAD', 'SOHBATPUR', 'SOHBATPUR'),
(479, 'BALOCHISTAN', 'NASIRABAD', 'SOHBATPUR', 'FARIDABAD'),
(480, 'BALOCHISTAN', 'NASIRABAD', 'SOHBATPUR', 'SANHRI'),
(481, 'BALOCHISTAN', 'KALAT', 'KALAT', 'GAZG SUB-TEHSIL'),
(482, 'BALOCHISTAN', 'KALAT', 'KALAT', 'JOHAN SUB-TEHSIL'),
(483, 'BALOCHISTAN', 'KALAT', 'KALAT', 'KALAT'),
(484, 'BALOCHISTAN', 'KALAT', 'KALAT', 'MANGOCHAR'),
(485, 'BALOCHISTAN', 'KALAT', 'KALAT', 'SURAB'),
(486, 'BALOCHISTAN', 'KALAT', 'MASTUNG', 'DASHT'),
(487, 'BALOCHISTAN', 'KALAT', 'MASTUNG', 'KHAD KOOCHA SUB-TEHSIL'),
(488, 'BALOCHISTAN', 'KALAT', 'MASTUNG', 'KIRDGAP SUB-TEHSIL'),
(489, 'BALOCHISTAN', 'KALAT', 'MASTUNG', 'MASTUNG'),
(490, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'ARANJI SUB-TEHSIL'),
(491, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'GRESHEK SUB-TEHSIL'),
(492, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'GRASHA SUB-TEHSIL'),
(493, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'KARAKH SUB-TEHSIL'),
(494, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'KHUZDAR'),
(495, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'MOOLA SUB-TEHSIL'),
(496, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'NAL TEHSIL'),
(497, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'ORNACH SUB-TEHSIL'),
(498, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'SAROONA SUB-TEHSIL'),
(499, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'WADH'),
(500, 'BALOCHISTAN', 'KALAT', 'KHUZDAR', 'ZEHRI'),
(501, 'BALOCHISTAN', 'KALAT', 'AWARAN', 'AWARAN'),
(502, 'BALOCHISTAN', 'KALAT', 'AWARAN', 'GISHKORE'),
(503, 'BALOCHISTAN', 'KALAT', 'AWARAN', 'JHAL JAO'),
(504, 'BALOCHISTAN', 'KALAT', 'AWARAN', 'KORAK JAHOO'),
(505, 'BALOCHISTAN', 'KALAT', 'AWARAN', 'MASHKAI'),
(506, 'BALOCHISTAN', 'KALAT', 'KHARAN', 'KHARAN'),
(507, 'BALOCHISTAN', 'KALAT', 'KHARAN', 'SAR-KHARAN'),
(508, 'BALOCHISTAN', 'KALAT', 'KHARAN', 'TOHUMULK SUB-TEHSIL'),
(509, 'BALOCHISTAN', 'KALAT', 'WASHUK', 'BESIMA'),
(510, 'BALOCHISTAN', 'KALAT', 'WASHUK', 'MASHKHEL'),
(511, 'BALOCHISTAN', 'KALAT', 'WASHUK', 'NAG SUB-TEHSIL'),
(512, 'BALOCHISTAN', 'KALAT', 'WASHUK', 'SHAHGORI SUB-TEHSIL'),
(513, 'BALOCHISTAN', 'KALAT', 'WASHUK', 'WASHUK'),
(514, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'BELA'),
(515, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'DUREJI'),
(516, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'GADDANI'),
(517, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'HUB'),
(518, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'KANRAJ'),
(519, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'LAKHRA'),
(520, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'LIARI SUB-TEHSIL'),
(521, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'SONMIANI/WINDER'),
(522, 'BALOCHISTAN', 'KALAT', 'LASBELA (AT UTHAL)', 'UTHAL'),
(523, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'BALNIGOR SUB-TEHSIL'),
(524, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'BULEDA SUB-TEHSIL'),
(525, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'DASHT SUB-TEHSIL'),
(526, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'HOSHAB SUB-TEHSIL'),
(527, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'MAND'),
(528, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'TUMP'),
(529, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'TURBAT'),
(530, 'BALOCHISTAN', 'MEKRAN', 'KECH (AT TURBAT)', 'ZAMURAN SUB-TEHSIL'),
(531, 'BALOCHISTAN', 'MEKRAN', 'GWADAR', 'GWADAR'),
(532, 'BALOCHISTAN', 'MEKRAN', 'GWADAR', 'JIWANI'),
(533, 'BALOCHISTAN', 'MEKRAN', 'GWADAR', 'ORMARA'),
(534, 'BALOCHISTAN', 'MEKRAN', 'GWADAR', 'PASNI'),
(535, 'BALOCHISTAN', 'MEKRAN', 'GWADAR', 'SUNTSAR SUB-TEHSIL'),
(536, 'BALOCHISTAN', 'MEKRAN', 'PANJGUR', 'GICHK SUB-TEHSIL'),
(537, 'BALOCHISTAN', 'MEKRAN', 'PANJGUR', 'GOWARGO'),
(538, 'BALOCHISTAN', 'MEKRAN', 'PANJGUR', 'PANJGUR'),
(539, 'BALOCHISTAN', 'MEKRAN', 'PANJGUR', 'PAROME'),
(540, 'FEDERAL CAPITAL TERRITORY', 'ISLAMABAD', 'ISLAMABAD', 'ISLAMABAD'),
(541, 'AZAD KASHMIR', 'MUZAFFARABAD', 'HATTIAN BALA', 'CHIKAR'),
(542, 'AZAD KASHMIR', 'MUZAFFARABAD', 'HATTIAN BALA', 'HATTIAN BALA'),
(543, 'AZAD KASHMIR', 'MUZAFFARABAD', 'HATTIAN BALA', 'LIPA'),
(544, 'AZAD KASHMIR', 'MUZAFFARABAD', 'MUZAFFARABAD', 'MAZAFFARABAD'),
(545, 'AZAD KASHMIR', 'MUZAFFARABAD', 'MUZAFFARABAD', 'PATIKA (NASEERABAD)'),
(546, 'AZAD KASHMIR', 'MUZAFFARABAD', 'NEELUM', 'ATH MUQAM'),
(547, 'AZAD KASHMIR', 'MUZAFFARABAD', 'NEELUM', 'SHARDA'),
(548, 'AZAD KASHMIR', 'RAWALAKOT', 'BAGH', 'BAGH'),
(549, 'AZAD KASHMIR', 'RAWALAKOT', 'BAGH', 'DHEERKOT'),
(550, 'AZAD KASHMIR', 'RAWALAKOT', 'BAGH', 'HARI GEHAL'),
(551, 'AZAD KASHMIR', 'RAWALAKOT', 'HAVELI', 'HAVELI'),
(552, 'AZAD KASHMIR', 'RAWALAKOT', 'HAVELI', 'KHURSHID ABAD'),
(553, 'AZAD KASHMIR', 'RAWALAKOT', 'HAVELI', 'MUMTAZABAD'),
(554, 'AZAD KASHMIR', 'RAWALAKOT', 'SUDHNOTI', 'BALOCH'),
(555, 'AZAD KASHMIR', 'RAWALAKOT', 'SUDHNOTI', 'DOLIAN JATTAN'),
(556, 'AZAD KASHMIR', 'RAWALAKOT', 'SUDHNOTI', 'MANG'),
(557, 'AZAD KASHMIR', 'RAWALAKOT', 'SUDHNOTI', 'PALLANDARI'),
(558, 'AZAD KASHMIR', 'RAWALAKOT', 'SUDHNOTI', 'TARAR KHAL'),
(559, 'AZAD KASHMIR', 'RAWALAKOT', 'POONCH', 'ABBASPUR'),
(560, 'AZAD KASHMIR', 'RAWALAKOT', 'POONCH', 'HAJEERA'),
(561, 'AZAD KASHMIR', 'RAWALAKOT', 'POONCH', 'RAWALAKOT'),
(562, 'AZAD KASHMIR', 'RAWALAKOT', 'POONCH', 'THORAR'),
(563, 'AZAD KASHMIR', 'MIRPUR', 'BHIMBER', 'BARNALA'),
(564, 'AZAD KASHMIR', 'MIRPUR', 'BHIMBER', 'BHIMBER'),
(565, 'AZAD KASHMIR', 'MIRPUR', 'BHIMBER', 'SAMHANI'),
(566, 'AZAD KASHMIR', 'MIRPUR', 'KOTLI', 'CHAROI'),
(567, 'AZAD KASHMIR', 'MIRPUR', 'KOTLI', 'FATEH PUR THAKIALA (NAKIAL)'),
(568, 'AZAD KASHMIR', 'MIRPUR', 'KOTLI', 'KHUI RTTA'),
(569, 'AZAD KASHMIR', 'MIRPUR', 'KOTLI', 'KOTLI'),
(570, 'AZAD KASHMIR', 'MIRPUR', 'KOTLI', 'SEHNSA'),
(571, 'AZAD KASHMIR', 'MIRPUR', 'MIRPUR', 'DUDYAL'),
(572, 'AZAD KASHMIR', 'MIRPUR', 'MIRPUR', 'MIRPUR'),
(573, 'GILGIT BALTISTAN', 'GILGIT', 'GILGIT', 'GILGIT'),
(574, 'GILGIT BALTISTAN', 'GILGIT', 'GHIZER (AT GAKUCH)', 'GAHKOCH'),
(575, 'GILGIT BALTISTAN', 'GILGIT', 'GHIZER (AT GAKUCH)', 'GUPIS'),
(576, 'GILGIT BALTISTAN', 'GILGIT', 'GHIZER (AT GAKUCH)', 'ISHKOMAN'),
(577, 'GILGIT BALTISTAN', 'GILGIT', 'GHIZER (AT GAKUCH)', 'PUNIAL'),
(578, 'GILGIT BALTISTAN', 'GILGIT', 'GHIZER (AT GAKUCH)', 'YASIN'),
(579, 'GILGIT BALTISTAN', 'GILGIT', 'HUNZA', 'ALI ABAD'),
(580, 'GILGIT BALTISTAN', 'GILGIT', 'HUNZA', 'GOJAL'),
(581, 'GILGIT BALTISTAN', 'GILGIT', 'NAGAR', 'NAGAR-I'),
(582, 'GILGIT BALTISTAN', 'GILGIT', 'NAGAR', 'NAGAR-II'),
(583, 'GILGIT BALTISTAN', 'BALTISTAN', 'BALTISTAN (AT SKARDU)', 'GULTARI'),
(584, 'GILGIT BALTISTAN', 'BALTISTAN', 'BALTISTAN (AT SKARDU)', 'RONDU'),
(585, 'GILGIT BALTISTAN', 'BALTISTAN', 'BALTISTAN (AT SKARDU)', 'SKARDU'),
(586, 'GILGIT BALTISTAN', 'BALTISTAN', 'KHARMANG', 'KHARMANG'),
(587, 'GILGIT BALTISTAN', 'BALTISTAN', 'SHIGAR', 'SHIGAR'),
(588, 'GILGIT BALTISTAN', 'BALTISTAN', 'GHANCHE (AT KHAPLU)', 'KHAPLU'),
(589, 'GILGIT BALTISTAN', 'BALTISTAN', 'GHANCHE (AT KHAPLU)', 'MASHABRUM'),
(590, 'GILGIT BALTISTAN', 'ASTORE', 'DIAMIR (AT CHILAS)', 'BABU SAR'),
(591, 'GILGIT BALTISTAN', 'ASTORE', 'DIAMIR (AT CHILAS)', 'CHILAS'),
(592, 'GILGIT BALTISTAN', 'ASTORE', 'DIAMIR (AT CHILAS)', 'DAREL'),
(593, 'GILGIT BALTISTAN', 'ASTORE', 'DIAMIR (AT CHILAS)', 'TANGIR'),
(594, 'GILGIT BALTISTAN', 'ASTORE', 'ASTORE', 'ASTORE'),
(595, 'GILGIT BALTISTAN', 'ASTORE', 'ASTORE', 'SHOUNTER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_markingexperience`
--

CREATE TABLE `tbl_markingexperience` (
  `AppID` bigint(20) NOT NULL,
  `ExpID` bigint(20) NOT NULL,
  `LevelMarked` varchar(500) DEFAULT NULL,
  `From` date DEFAULT NULL,
  `To` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_markingexperience`
--

INSERT INTO `tbl_markingexperience` (`AppID`, `ExpID`, `LevelMarked`, `From`, `To`) VALUES
(34, 1, 'Intermediate', '2009-08-19', '1990-02-22'),
(35, 1, 'Intermediate', '2009-08-19', '1990-02-22'),
(36, 1, 'Middle', '1993-01-27', '2003-09-28'),
(37, 1, 'MS or MPhil', '2003-12-17', '1998-04-08'),
(38, 1, 'PhD', '1985-02-24', '1987-03-22'),
(39, 1, 'Becholars', '1995-01-05', '1990-12-22'),
(40, 1, 'Middle', '1976-05-04', '1999-06-28'),
(41, 1, 'PhD', '2018-05-24', '2004-09-08'),
(42, 1, 'PhD', '2018-05-24', '2004-09-08'),
(43, 1, 'PhD', '2018-05-24', '2004-09-08'),
(44, 1, 'PhD', '2018-05-24', '2004-09-08'),
(45, 1, 'PhD', '2018-05-24', '2004-09-08'),
(48, 1, 'MS or MPhil', '0000-00-00', '0000-00-00'),
(49, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(50, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(51, 1, 'Primary', '0000-00-00', '0000-00-00'),
(51, 2, 'Primary', '0000-00-00', '0000-00-00'),
(52, 1, 'Primary', '0000-00-00', '0000-00-00'),
(53, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(54, 1, 'Intermediate', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marking_subjects`
--

CREATE TABLE `tbl_marking_subjects` (
  `AppID` bigint(20) NOT NULL,
  `SID` bigint(20) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marking_subjects`
--

INSERT INTO `tbl_marking_subjects` (`AppID`, `SID`, `Subject`) VALUES
(34, 1, 'Irure nisi qui quod sapiente commodi sit quae distinctio In error nesciunt'),
(35, 1, 'Irure nisi qui quod sapiente commodi sit quae distinctio In error nesciunt'),
(36, 1, 'Sit qui nisi sit possimus a commodi qui vitae modi sunt nisi vero'),
(37, 1, 'Sunt laborum aut ut veritatis deleniti in obcaecati reprehenderit voluptatem sed provident dignissimos'),
(38, 1, 'Dignissimos quo nostrud expedita explicabo Excepturi'),
(39, 1, 'Sed dicta et ab aute'),
(40, 1, 'Ea quaerat veritatis ipsum enim sit ad nesciunt deserunt consequatur nihil commodi mollitia debitis dolorum maiores ut est officia eligendi'),
(41, 1, 'Ipsa eius libero ad autem nihil elit'),
(42, 1, 'Ipsa eius libero ad autem nihil elit'),
(43, 1, 'Ipsa eius libero ad autem nihil elit'),
(44, 1, 'Ipsa eius libero ad autem nihil elit'),
(45, 1, 'Ipsa eius libero ad autem nihil elit'),
(48, 1, 'Nisi laborum Dolor hic sit sunt excepturi ut vitae obcaecati eu error placeat'),
(49, 1, 'Deserunt voluptate qui ut possimus ut quam voluptate amet sint quasi ut officiis quidem est'),
(50, 1, 'Hic quis eum laboriosam ex officia et voluptates blanditiis illo nesciunt similique maiores in'),
(51, 1, 'Dolorum beatae fugiat duis commodo ad qui voluptatibus et quod autem dolor eum est numquam tenetur harum'),
(52, 1, 'Id optio rerum rerum sed quibusdam fugiat consequatur Sed corporis nostrud in commodo nisi sit'),
(53, 1, 'Dolore ab delectus quia sit qui consectetur dolore quo nesciunt amet quidem sed vel sed voluptate ipsum corporis dolor modi'),
(54, 1, 'Enim voluptate obcaecati odit maxime tempore quis modi et quo ea voluptatibus quia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachingexperience`
--

CREATE TABLE `tbl_teachingexperience` (
  `AppID` bigint(20) NOT NULL,
  `ExpID` bigint(20) NOT NULL,
  `LevelTaught` varchar(500) DEFAULT NULL,
  `From` date DEFAULT NULL,
  `To` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachingexperience`
--

INSERT INTO `tbl_teachingexperience` (`AppID`, `ExpID`, `LevelTaught`, `From`, `To`) VALUES
(34, 1, 'Intermediate', '2009-08-19', '1990-02-22'),
(35, 1, 'Intermediate', '2009-08-19', '1990-02-22'),
(36, 1, 'Middle', '1993-01-27', '2003-09-28'),
(37, 1, 'MS or MPhil', '2003-12-17', '1998-04-08'),
(38, 1, 'PhD', '1985-02-24', '1987-03-22'),
(39, 1, 'Becholars', '1995-01-05', '1990-12-22'),
(40, 1, 'Middle', '1976-05-04', '1999-06-28'),
(41, 1, 'PhD', '2018-05-24', '2004-09-08'),
(42, 1, 'PhD', '2018-05-24', '2004-09-08'),
(43, 1, 'PhD', '2018-05-24', '2004-09-08'),
(44, 1, 'PhD', '2018-05-24', '2004-09-08'),
(45, 1, 'PhD', '2018-05-24', '2004-09-08'),
(48, 1, 'MS or MPhil', '0000-00-00', '0000-00-00'),
(49, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(50, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(51, 1, 'Primary', '0000-00-00', '0000-00-00'),
(52, 1, 'Primary', '0000-00-00', '0000-00-00'),
(53, 1, 'Intermediate', '0000-00-00', '0000-00-00'),
(54, 1, 'Intermediate', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_te_subjects`
--

CREATE TABLE `tbl_te_subjects` (
  `AppID` bigint(20) NOT NULL,
  `SID` bigint(20) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_te_subjects`
--

INSERT INTO `tbl_te_subjects` (`AppID`, `SID`, `Subject`) VALUES
(34, 1, 'In voluptas dolor exercitation ea commodo excepteur vero elit inventore dolor facilis vel'),
(35, 1, 'In voluptas dolor exercitation ea commodo excepteur vero elit inventore dolor facilis vel'),
(36, 1, 'Sed id voluptate quaerat ab quam asperiores'),
(37, 1, 'Do itaque aut possimus debitis ipsa inventore in magna delectus aut rem eiusmod temporibus eum aliquam iste sequi cumque maxime'),
(38, 1, 'Mollit ducimus tenetur quaerat praesentium amet nobis obcaecati perspiciatis consequuntur anim debitis incidunt ut occaecat voluptatum temporibus consectetur'),
(39, 1, 'Quia laboris ipsam consectetur officia perspiciatis qui aliquid'),
(40, 1, 'Vero incididunt nostrum vel dignissimos est aut consequatur molestiae culpa itaque consequatur rerum voluptas aspernatur'),
(41, 1, 'Nemo et ipsa laudantium ipsa quis labore quod explicabo Quaerat qui est'),
(42, 1, 'Nemo et ipsa laudantium ipsa quis labore quod explicabo Quaerat qui est'),
(43, 1, 'Nemo et ipsa laudantium ipsa quis labore quod explicabo Quaerat qui est'),
(44, 1, 'Nemo et ipsa laudantium ipsa quis labore quod explicabo Quaerat qui est'),
(45, 1, 'Nemo et ipsa laudantium ipsa quis labore quod explicabo Quaerat qui est'),
(48, 1, 'Eaque officiis veniam sed eveniet id est commodo ducimus repellendus Deserunt sit voluptatum'),
(49, 1, 'Deserunt eos aspernatur consectetur fuga Cumque quis sit in soluta duis quis ullam voluptatem'),
(50, 1, 'Autem asperiores quam dignissimos molestiae voluptate omnis sed illo aut pariatur'),
(51, 1, 'Delectus sint voluptate itaque ducimus adipisci voluptate iure sit non omnis dolorem dolor vero iure possimus culpa quia'),
(52, 1, 'Velit voluptatibus rem corrupti aliquam dolore eu pariatur Expedita totam sint et non voluptas rerum soluta'),
(53, 1, 'Veritatis autem sapiente iusto vel ad adipisci esse quae quia labore nesciunt'),
(54, 1, 'Modi sed provident commodo ad ratione sint nihil sit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_universities`
--

CREATE TABLE `tbl_universities` (
  `uniID` bigint(20) NOT NULL,
  `University` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_universities`
--

INSERT INTO `tbl_universities` (`uniID`, `University`) VALUES
(1, 'Ali Institute of Education'),
(2, 'Bahauddin Zakariya University'),
(3, 'Beaconhouse National University'),
(4, 'Fatima Jinnah Medical University, Lahore'),
(5, 'Fatima Jinnah Women University'),
(6, 'Forman Christian College'),
(7, 'GIFT University'),
(8, 'Ghazi University'),
(9, 'Global Institute, Lahore [HEC-NOC SUSPENDED] (Admission & Attestation stopped by HEC from 2016)'),
(10, 'Government College University'),
(11, 'Government College University, Lahore'),
(12, 'Government College for Women University'),
(13, 'Government College for Women University, Sialkot'),
(14, 'Government Sadiq College Women University'),
(15, 'HITEC University'),
(16, 'Hajvery University'),
(17, 'Imperial College of Business Studies (Admissions bannned w.e.f April 2017)'),
(18, 'Information Technology University of the Punjab'),
(19, 'Institute of Management Sciences'),
(20, 'Institute of Southern Punjab'),
(21, 'Islamia University'),
(22, 'Khawaja Freed University of Engineering & Information Technology'),
(23, 'King Edward Medical University'),
(24, 'Kinnaird College for Women'),
(25, 'Lahore College for Women University'),
(26, 'Lahore Garrison University'),
(27, 'Lahore Leads University'),
(28, 'Lahore School of Economics'),
(29, 'Lahore University of Management Sciences'),
(30, 'Minhaj University'),
(31, 'Muhammad Nawaz Shareef University of Agriculture'),
(32, 'Muhammad Nawaz Sharif University of  Engineering & Technology'),
(33, 'NFC Institute of Engineering & Technology'),
(34, 'National College of Arts'),
(35, 'National College of Business Administration & Economics'),
(36, 'National Textile University'),
(37, 'National University of Medical Sciences'),
(38, 'Nur International University'),
(39, 'Pakistan Institute of Fashion & Design'),
(40, 'Pir Mehr Ali Shah Arid Agriculture University'),
(41, 'Qarshi University'),
(42, 'Rawalpindi Medical University'),
(43, 'The Superior College'),
(44, 'The University of Faisalabad'),
(45, 'The Women University'),
(46, 'University of Agriculture'),
(47, 'University of Central Punjab'),
(48, 'University of Education'),
(49, 'University of Engineering & Technology'),
(50, 'University of Engineering & Technology, Taxila'),
(51, 'University of Gujrat'),
(52, 'University of Health Sciences'),
(53, 'University of Lahore'),
(54, 'University of Management & Technology'),
(55, 'University of Sargodha'),
(56, 'University of South Asia'),
(57, 'University of Veterinary & Animal Sciences'),
(58, 'University of Wah'),
(59, 'University of the Punjab'),
(60, 'Virtual University of Pakistan'),
(61, 'Aga Khan University'),
(62, 'Baqai Medical University'),
(63, 'Barret Hodgson University'),
(64, 'Benazir Bhutto Shaheed University Lyari'),
(65, 'Benazir Bhutto Shaheed University of Technology & Skill Development, Khairpur Mirs'),
(66, 'Commecs Institute of Business & Emerging Sciences'),
(67, 'DHA Suffa University'),
(68, 'DOW University of Health Sciences'),
(69, 'Dadabhoy Institute of Higher Education'),
(70, 'Dawood University of Engineering & Technology'),
(71, 'Gambat Institute of Medical Sciences'),
(72, 'Greenwich University'),
(73, 'Habib University'),
(74, 'Hamdard University'),
(75, 'Indus Valley School of Art & Architecture'),
(76, 'Indus University'),
(77, 'Institute of Business & Technology'),
(78, 'Institute of Business Administration'),
(79, 'Institute of Business Management'),
(80, 'Iqra University'),
(81, 'Isra University'),
(82, 'Jinnah Sindh Medical University'),
(83, 'Jinnah University for Women'),
(84, 'KASB Institute of Technology'),
(85, 'Karachi Institute of Economics & Technology'),
(86, 'Karachi School for Business & Leadership'),
(87, 'Liaquat University of Medical & Health Sciences'),
(88, 'Mehran University of Engineering & Technology'),
(89, 'Muhammad Ali Jinnah University'),
(90, 'NED University of Engineering & Technology'),
(91, 'Nazeer Hussain University'),
(92, 'Newport Institute of Communications & Economics'),
(93, 'Pakistan Naval Academy'),
(94, 'Peoples University of Medical & Health Sciences for Women'),
(95, 'Preston Institute of Management, Science & Technology (Banned for admissions w.e.f 10-06-2017)'),
(96, 'Preston University'),
(97, 'Quaid-e-Awam University of Engineering, Sciences & Technology'),
(98, 'Shah Abdul Latif University'),
(99, 'Shaheed Benazir Bhutto City University'),
(100, 'Shaheed Benazir Bhutto Dewan University'),
(101, 'Shaheed Benazir Bhutto University of Veterinary & Animal Sciences'),
(102, 'Shaheed Benazir Bhutto University, Shaheed Benazirabad'),
(103, 'Shaheed Mohtarma Benazir Bhutto Medical University'),
(104, 'Shaheed Zulfikar Ali Bhutto Institute of Science & Technology'),
(105, 'Shaheed Zulfiqar Ali Bhutto University of Law'),
(106, 'Sindh Agriculture University, Tandojam'),
(107, 'Sindh Institute of Management & Technology'),
(108, 'Sindh Institute of Medical Sciences'),
(109, 'Sindh Madresatul Islam University'),
(110, 'Sir Syed University of Engineering & Technology'),
(111, 'Sukkur Institute of Business Administration'),
(112, 'Textile Institute of Pakistan'),
(113, 'University of Karachi'),
(114, 'University of Sindh'),
(115, 'Zia-ud-Din University'),
(116, 'Abasyn University'),
(117, 'Abbottabad University of Science and Technology (AUST)'),
(118, 'Abdul Wali Khan University'),
(119, 'Bacha Khan University'),
(120, 'CECOS University of Information Technology & Emerging Sciences'),
(121, 'City University of Science and Information Technology'),
(122, 'Gandhara University'),
(123, 'Ghulam Ishaq Khan Institute of Engineering Sciences & Technology'),
(124, 'Gomal University'),
(125, 'Hazara University'),
(126, 'Institute of Management Sciences'),
(127, 'Iqra National University'),
(128, 'Islamia College University'),
(129, 'Khushal Khan Khattak University'),
(130, 'Khyber Medical University'),
(131, 'Khyber Pakhtunkhwa Agricultural University'),
(132, 'Kohat University of Science and Technology'),
(133, 'Northern University'),
(134, 'Pakistan Military Academy'),
(135, 'Preston University'),
(136, 'Qurtaba University of Science & Information Technology'),
(137, 'Sarhad University of Science & Information Technology'),
(138, 'Shaheed Benazir Bhutto University'),
(139, 'Shaheed Benazir Bhutto Women University'),
(140, 'Shuhada-e-Army Public School University of Technology, Nowshera'),
(141, 'University of Engineering & Technology'),
(142, 'University of FATA'),
(143, 'University of Haripur'),
(144, 'University of Malakand'),
(145, 'University of Peshawar'),
(146, 'University of Science & Technology'),
(147, 'University of Swabi'),
(148, 'University of Swat'),
(149, 'Women University Mardan'),
(150, 'Women University, Swabi'),
(151, 'Al-Hamd Islamic University'),
(152, 'Balochistan University of Engineering & Technology'),
(153, 'Balochistan University of Information Technology & Management Sciences'),
(154, 'Lasbela University of Agriculture, Water & Marine Sciences'),
(155, 'Sardar Bahadur Khan Women University'),
(156, 'University of Balochistan'),
(157, 'University of Loralai'),
(158, 'University of Turbat'),
(159, 'Air University'),
(160, 'Allama Iqbal Open University'),
(161, 'Bahria University'),
(162, 'COMSATS Institute of Information Technology'),
(163, 'Capital University of Science & Technology'),
(164, 'Federal Urdu University of Arts, Sciences & Technology'),
(165, 'Foundation University'),
(166, 'Institute of Space Technology'),
(167, 'International Islamic University'),
(168, 'Muslim Youth University'),
(169, 'National Defense University'),
(170, 'National University of Computer & Emerging Sciences'),
(171, 'National University of Modern Languages'),
(172, 'National University of Sciences & Technology'),
(173, 'Pakistan Institute of Development Economics (PIDE)'),
(174, 'Pakistan Institute of Engineering & Applied Sciences'),
(175, 'Quaid-i-Azam University'),
(176, 'Riphah International University'),
(177, 'Shaheed Zulfiqar Ali Bhutto Medical University'),
(178, 'Shifa Tameer-e-Millat University'),
(179, 'Mirpur University of Science & Technology'),
(180, 'Mohi-ud-Din Islamic University'),
(181, 'University of Azad Jammu & Kashmir'),
(182, 'University of Management Sciences & Information Technology'),
(183, 'University of Poonch'),
(184, 'Women University of Azad Jammu & Kashmir'),
(185, 'Karakurum International University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  ADD PRIMARY KEY (`AppID`);

--
-- Indexes for table `tbl_invigexperience`
--
ALTER TABLE `tbl_invigexperience`
  ADD PRIMARY KEY (`AppID`,`ExpID`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`LocID`);

--
-- Indexes for table `tbl_markingexperience`
--
ALTER TABLE `tbl_markingexperience`
  ADD PRIMARY KEY (`AppID`,`ExpID`);

--
-- Indexes for table `tbl_marking_subjects`
--
ALTER TABLE `tbl_marking_subjects`
  ADD PRIMARY KEY (`AppID`,`SID`);

--
-- Indexes for table `tbl_teachingexperience`
--
ALTER TABLE `tbl_teachingexperience`
  ADD PRIMARY KEY (`AppID`,`ExpID`);

--
-- Indexes for table `tbl_te_subjects`
--
ALTER TABLE `tbl_te_subjects`
  ADD PRIMARY KEY (`AppID`,`SID`);

--
-- Indexes for table `tbl_universities`
--
ALTER TABLE `tbl_universities`
  ADD PRIMARY KEY (`uniID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  MODIFY `AppID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_markingexperience`
--
ALTER TABLE `tbl_markingexperience`
  ADD CONSTRAINT `tbl_markingexperience_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `tbl_applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_marking_subjects`
--
ALTER TABLE `tbl_marking_subjects`
  ADD CONSTRAINT `tbl_marking_subjects_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `tbl_applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_teachingexperience`
--
ALTER TABLE `tbl_teachingexperience`
  ADD CONSTRAINT `tbl_teachingexperience_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `tbl_applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_te_subjects`
--
ALTER TABLE `tbl_te_subjects`
  ADD CONSTRAINT `tbl_te_subjects_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `tbl_applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

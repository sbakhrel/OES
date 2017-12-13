-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 05:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user_name`, `email`, `password`, `status`) VALUES
(1, '', '', 'nischal', 'nischal@gmail.com', 'nischal', 1),
(2, '', '', 'biswo', 'biswo@mail.com', 'biswo', 1),
(3, '', '', 'bimal', 'bimal@mail.com', 'bimal12', 1),
(4, '', '', 'name', 'name@mail.com', 'name', 1),
(5, '', '', 'admin', 'admin@mail.com', 'admin123', 1),
(6, '', '', 'raam', 'raam@raam', 'ram123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `csit`
--

CREATE TABLE `csit` (
  `qid` int(2) NOT NULL,
  `question` varchar(93) DEFAULT NULL,
  `ans1` varchar(49) DEFAULT NULL,
  `ans2` varchar(55) DEFAULT NULL,
  `ans3` varchar(49) DEFAULT NULL,
  `ans4` varchar(55) DEFAULT NULL,
  `correct_ans` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `csit`
--

INSERT INTO `csit` (`qid`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans`) VALUES
(3, 'Who is largely responsible for breaking the German Enigma codes', 'alan turing', 'jeff bezos', 'george boole', 'charles babbage', 'alan turing'),
(4, '\'.MOV\' extension refers usually to what kind of file?', 'image', 'animation/movie', 'audio file', 'office document', 'animation/movie'),
(5, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang'),
(6, 'A temporary storage area attached to the CPU of the computer for input-output operations is a', 'register', 'channel', 'buffer', 'core', 'register'),
(7, 'Who invented Java ?', 'Deniss Ritche', 'James Gosling', 'Bajarnae', 'Linus Torvalds', 'James Gosling'),
(8, 'Who is known as father of Artificial Intelligence ?', 'John McCarthy', 'Vint Cerf', 'Dennis Ritchie', 'James Gosling', 'John McCarthy'),
(9, 'An Assembler is used to translate a program written in ?', 'high level', 'low level', 'assembly level', 'machine level', 'assembly level'),
(10, 'What is the name of a device that converts digital signals to analog signals?', 'modem', 'router', 'switch', 'hub', 'modem'),
(11, 'B 2 B stands for', 'business to book', 'business to business', 'business to bank', 'best to best', 'business to business'),
(12, 'Where is cahce memory is located ?', 'server', 'cpu', 'database', 'scanner', 'cpu'),
(13, 'What is full form of TIFF ?', 'The Image File Format', 'Tagged Image File Format', 'Tagged Image File Front', 'The Image Fax Format', 'Tagged Image File Format'),
(14, 'Which type of storage device is a BIOS ?', 'primary', 'secondary', 'tertiary', 'none', 'primary'),
(15, 'In computer what converts AC to DC ?', 'POST', 'adapter', 'modem', 'smps', 'smps'),
(16, 'Which among following is responsible for finding and loading operating system into RAM ?', 'bootstrap loader', 'BIOS', 'DMOS', 'CMOS', 'bootstrap loader'),
(17, 'Segments are made on which layer of OSI moder?', 'session layer', 'transport layer', 'network layer', 'data link layer', 'transport layer'),
(18, 'Attribute of one table matching to the primary key of other table, is called as', 'candidate key', 'foreign key', 'primary key', 'composite key', 'foreign key'),
(19, 'Which is not a logical database structure ?', 'chain', 'tree', 'relational', 'network', 'chain'),
(20, 'Why we use array as a parameter of main method in java?', 'it is syntax', 'can store multiple values', 'both of above', 'none of above', 'can store multiple values'),
(21, 'In java Runnable is ?', 'class', 'method', 'variable', 'interface', 'inteface'),
(22, 'Which among following SQL commands is used to add a row ?', 'UPDATE', 'INSERT', 'ADD', 'TRUNCATE', 'INSERT'),
(23, 'How many keywords are available in java ?', '35', '55', '48', '130', '48'),
(24, 'Which among following classes is not part of Java\'s collection framework ?', 'queue', 'array', 'stack', 'maps', 'queue'),
(25, 'MAC address is of how many bits ?', '24', '32', '48', '128', '48'),
(26, 'What is full form of PNG ?', 'Portable Natural Graphics', 'Portable Network Graph', 'Pretty Network Graphics', 'Portable Network Graphics', 'Portable Network Graphics'),
(27, 'What is full form of USB ?', 'Universal Serial Bus', 'Unicoded Serial Bus', 'Universal Smart Bus', 'Unicoded Serial Bus', 'Universal Serial Bus'),
(28, 'What is full form of MAC ?', 'Mass Access Contro', 'Media Access Control', 'Mass Access Carraige', 'Media Access Carraige', 'Media Access Control'),
(29, 'Which keyword is used while using interface ?', 'extend', 'implements', 'throw', 'throws', 'implements'),
(30, 'Which command is used to set a link between two database files ?', 'JOIN', 'UPDATE', 'BROWSE', 'SET RELATION', 'SET RELATION'),
(31, 'Related fields in a data base are grouped to form ?', 'data file', 'data record', 'menu', 'bank', 'data record'),
(32, 'What is full form of XML ?', 'Extensible Meria Letters', 'Extensible Media Language', 'Xtensible Markup Language', 'xtensible Markup Language', 'xtensible Markup Language'),
(33, 'In the hypermedia database, information bits are stored in the form of:', 'cubes', 'nodes', 'signals', 'symbols', 'nodes'),
(34, 'Which normal form is considered adequate for normal relational database design ?', '2NF', '5NF', '3NF', '4NF', '3NF'),
(35, 'Physical location of a record in database is determined with the help of', 'B tree file', 'Indexed file', 'Hashed file', 'sequential file', 'Hashed file'),
(36, 'What is full form of JPEG ?', 'Joint Photo Electronic Group', 'Joint Picture Electronic Group', 'Joint Photo Expert Group', 'Joint Picture Expert Group', 'Joint Photo Expert Group'),
(37, ' What is full form of GOOGLE ?', 'Global Orient Of Oriented Group Language Of Earth', 'Global Organization Of Oriented Group Language Of Earth', 'Global Orient Of Oriented Group Language Of Earth', 'Global Oriented Of Organization Group Language Of Earth', 'Global Organization Of Oriented Group Language Of Earth'),
(38, 'What is full form of YAHOO ?', 'Yet Another Hierarchical Officio Oracular', 'Yahoo Another Hierarchical Officious Oracle', 'Yet Another Hierarchical Officious Oracular', 'Yet Another Hierarchical Officious Oracle', 'Yet Another Hierarchical Officious Oracle'),
(39, 'Which type of inheritance is not supported by java ?', 'Single', 'Multiple', 'Mulilevel', 'Hirarchical', 'Multiple'),
(40, 'Which one of the following protocol is not used in internet?', 'HTTP', 'DHCP', 'DNS', 'none of above', 'none of above'),
(41, 'IPv6 addressed have a size of', '32', '64', '128', '256', '128');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `qid` int(5) NOT NULL,
  `question` varchar(189) DEFAULT NULL,
  `ans1` varchar(36) DEFAULT NULL,
  `ans2` varchar(58) DEFAULT NULL,
  `ans3` varchar(48) DEFAULT NULL,
  `ans4` varchar(53) DEFAULT NULL,
  `correct_ans` varchar(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`qid`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans`) VALUES
(1, 'Locate the word with/m sound in the final position.', 'comb', 'thumb', 'some', 'all of the above', 'comb'),
(2, 'Identify the odd option in incase of nasal sound', 'none', 'mine', 'king', 'nanny', 'mine'),
(3, 'He said,\"Bring your book Ram.\"', 'He said to bring his book', 'He told Ram to bring your book', 'He told Ram to bring his book.', 'He told Ram not to bring his book.', 'He told Ram to bring his book.'),
(4, 'The students said,\"Let us play Sir.\"', 'The students suggested playing', 'The students requested him to let them play', 'The students requested him to let us play.', 'The students requested him to play.', 'The students requested him to let them play'),
(5, 'Which of the following is a compund sentence?', 'He works the whole day through.', 'It is a known fact that the earth rotates around its axis.', 'Besides completed the work he also corrected it.', 'In spite of the weather, she went out.', 'Besides completed the work he also corrected it.'),
(6, 'In went to bed after I _____television.', 'was watching', 'watched', 'had watched', 'an watching', 'had watched'),
(7, 'He was granted permission.', 'refused', 'confined', 'allowed', 'prolonged', 'allowed'),
(8, 'She _______her work when the bell rang.', 'shall do', 'was doing', 'will do', 'am doing', 'was doing'),
(9, 'People knew him for his vanity.', 'humble', 'proud', 'self esteem', 'spiteful', 'humble'),
(10, 'Which sentence is correctly punctuated? The company needs______employees.', 'effective; dedicated; and honest', 'effective,dedicated;and honest', 'effective, dedicated and honest', 'effective, dedicated, and honest', 'effective, dedicated and honest'),
(11, 'Which of the following is a noun?', 'thicken', 'impoverish', 'mercantile', 'mercy', 'mercy'),
(12, 'Which of the underlined word is an adjective?', 'Swimming is a good form of exercise.', 'They are walking on the lawn', 'He likes smoking.', 'She is taking knitting classes.', 'She is taking knitting classes.'),
(13, 'Mary got her husband _______(arrest).', 'to arrest', 'arrest', 'arresting', 'all of these.', 'to arrest'),
(14, 'The lady takes pride______her beauty.', 'about', 'over', 'in', 'on', 'in'),
(15, 'The test beings______Sunday.', 'in', 'during', 'at', 'on', 'on'),
(16, 'The quantum number that can give the idea about shape of subshell is _____ quantum number.', 'principal', 'azimuthal', 'magnetic', 'spin', 'azimuthal'),
(17, 'The ionic product of water will increase if', 'pressure is decreased', 'temperature is increased', 'H+ are added', 'OH+ ions are added', 'H+ are added'),
(18, 'O.S. Of which of the following elements doesn\'t change in its compound?', 'F', 'Cl', 'Br', 'l', 'F'),
(19, 'Group number of an element indicates', 'Valency', 'Atomicity', 'no. Of electrons', 'Valence electrons', 'Valence electrons'),
(20, 'A gas is found to have the formula (CO)x. Its vapour density of 70. The value of x must be', '4', '6', '5', '9', '5'),
(21, 'Process in which HNO3 is manufactured by catalytic oxidation of NH3 is', 'Bikland process', 'Ezde Process', 'Haber\'s process', 'Ostwald\'s process', 'Ostwald\'s process'),
(22, 'The process of converting hydrated alumina to anhydrous alumina is called', 'raosting', 'smelting', 'dressing', 'calcinations', 'calcinations'),
(23, 'Refining of petroleum involves the process of ___ distillation', 'Simple', 'Fractional', 'Steam', 'Vacuum', 'Fractional'),
(24, 'Benzene when treated with Cl2 in dark gives', 'Gammaxene', 'Glyoxal', 'Phenol', 'Chorobenzene', 'Chorobenzene'),
(25, 'IUPAC name of iso-butyl acetylene is', '4-ethylbut-1-ene', '4-methypent-1-yne', '3-methylpent-2-yne', '2-methypent-4-yne', '4-methypent-1-yne'),
(26, 'The principle which gives a way to fill the electron in the available energy levels is', 'Hund\'s rule', 'Pauli\'s exclusion principle', 'Aufbau principle', 'Rutherford\'s model', 'Aufbau principle'),
(27, 'A reaction \'X\' has equilibrium constant 16. Another reaction is \'Y\' is formed by multiplying the reaction \'X\' by half. The equilibrium constant of the second reaction is', '8', '4', '2', '1', '8'),
(28, 'Chalcopyrite is commonly known as', 'Matte', 'Lunar caustic', 'Fool\'s gold', 'none', 'Fool\'s gold'),
(29, 'Ethenol and Ethanal are example of', 'Positional Isomerism', 'Metamerism', 'Tautomerism', 'ALL', 'Tautomerism'),
(30, 'On passing ethyne through hot iron tube, the compund formed is', 'Ethene', 'Butyne', 'Benzene', 'Ethane', 'Benzene'),
(31, 'During projectile motion the quantities that remain unchanged are', 'force and vertical velocity', 'acceleration and horizontal velocity', 'kinetic energy and acceleration', 'acceleration and momentum', 'acceleration and horizontal velocity'),
(32, 'The velocity of falling rain drop attains limiting value because of', 'up thrust', 'surface tension', 'air current', 'viscous force exerted by air', 'viscous force exerted by air'),
(33, 'Which of the following thermometer is used to measure very high temperature.', 'gas thermometer', 'liquid thermometer', 'pyrometer', 'resistance thermometer', 'pyrometer'),
(34, 'When an ideal diatomic gas is heated at constant pressure the fraction of heat energy supplied which increases the internal energy supplied which increases the internal energy of the gas is', '(2/5)', '(3/5)', '(3/7)', '(5/7)', '(5/7)'),
(35, 'On heating liquid the refractive index generally.', 'Increases', 'decreases', 'does not change', 'may increase or decrease depending on rate of heating', 'decreases'),
(36, 'In a longitudinal stationary wave produced in a gas, pressure is maximum at', 'nodes', 'antinodes', 'all point', 'neither nodes nor antinodes', 'nodes'),
(37, 'Value of relative permeability of diamagnetic substance is', '1', 'less than 1', 'greater than 1', 'very very large', 'less than 1'),
(38, 'A parallel plate capacitor has capacitance C. The plates of capacitors are joined by a conducting wire, then capacitance becomes', 'C', '2C', 'C/2', 'infinite', 'infinite'),
(39, 'The current amplification of common base pNp transistor is 0.96 the current gain in common emitter amplifies is', '16', '24', '20', '32', '24'),
(40, 'Which of the following phenomenon support the quantum nature of light', 'Inference', 'Diffraction', 'Polarisation', 'Photoelectric effect', 'Photoelectric effect'),
(41, 'If x denotes displacement in time t, and x=a cos(t), the acceleration is', 'a cos(t)', '(-a cos(t))', 'a sin(t)', '(-a sint(t))', '(-a cos(t))'),
(42, 'Which is scalar quantity?', 'temperature gradient', 'intensity of magnetization', 'intensity of radiation', 'current density', 'intensity of radiation'),
(43, 'Increase of temperature cause the viscosity of', 'liquid increases', 'liquid decreases and of gas increases', 'gas decreases', 'liquid and gas increases', 'liquid decreases and of gas increases'),
(44, '\"Good absorbers are good emitters\". This statements is called', 'Prevost\'s law', 'Stefan\'s law', 'Krichhoff\'s law', 'Wien\'s Law', 'Krichhoff\'s law'),
(45, 'The ratio of the speed of a body to the speed of sound is called', 'sonic index', 'doppler ratio', 'mach number', 'refractive index', 'mach number'),
(46, 'At the magnetic pole angle of dip is', '0', '45', '60', '90', '90'),
(47, 'A source emitting frequency of 450Hz is moving towards stationary observer with velocity 33m/sec. Then the observed frequency is:', '400', '500', '480', '530', '500'),
(48, 'The eye is least strained while viewing an object placed at:', 'the far point', '25m', 'about 1m', 'the near point', 'the far point'),
(49, 'The amount of heat required to melt 1 gm of ice without change in temperature is:', '80 cal', '80 K cal', '740 cal', '740 K cal', '80 cal'),
(50, 'Surface tension of a liquid will ........... with rise in temperature', 'Increases', 'decreases', 'remain constant', 'increase then decrease', 'decreases');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedno` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedno`, `name`, `email`, `feedback`) VALUES
(9, 'nischal', 'nischal.ghimire100@yahoo.com', 'elfniq'),
(10, 'nischal', 'ajbdfqj@dbh.js', 'skffnql'),
(11, 'sdjvb', 'djn@enf.sj', 'vvsklnv'),
(12, 'shyam', 'shyam@shyam.shyam', 'baula');

-- --------------------------------------------------------

--
-- Table structure for table `mbbs`
--

CREATE TABLE `mbbs` (
  `qid` int(5) NOT NULL,
  `question` varchar(189) DEFAULT NULL,
  `ans1` varchar(27) DEFAULT NULL,
  `ans2` varchar(36) DEFAULT NULL,
  `ans3` varchar(38) DEFAULT NULL,
  `ans4` varchar(53) DEFAULT NULL,
  `correct_ans` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mbbs`
--

INSERT INTO `mbbs` (`qid`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans`) VALUES
(1, 'Which one is unpaired gland in male reproductive system?', 'Seminal Vesicle', 'Cowper’s gland', 'Prostate gland', 'None', 'Prostate gland'),
(2, ' Resting membrane potential of nerve cell is', '-70V', '60V', '120mV', '-70mV', '-70mV'),
(3, ' Bidder’s canal is found in', 'Kidney of frog', 'Testis of frog', 'Liver of frog', 'Kidney of male frog', 'Kidney of male frog'),
(4, 'Paramecium contain two types of nuclei which are', 'Two micronuclei', 'One micro and or more macronuclei', 'One macro and one or more micronuclei ', 'Two micronuclei', 'Two micronuclei'),
(5, 'Midgets arise due to deficiency of', 'Adrenal', 'Thyroxin', 'Pancreas', NULL, 'Pitutary'),
(6, 'False sense of perception without any external object or stimulus is known as', 'Illusion', 'Impulse', 'Hallucination', 'Phobia', 'Hallucination'),
(7, 'Presence of lateral line sense organ is an example of', 'Parasitic adaptation', 'Secondary aquatic distribution', 'Primary aquatic adaptation ', 'Arial adaptation', 'Primary aquatic adaptation '),
(8, 'Which of the following is fish', 'Starfish', 'Sea Horse', 'Sea Orchin', 'Sea pen', 'Sea Horse'),
(9, 'Incubation period of Plasmodium Vivax is', '48 hours', '72 hours', '288 hours', '152 hours', '288 hours'),
(10, 'Which of the following diseases is not included in international health regulations', 'plague', 'yellow fever', 'cholera', 'polio', 'polio'),
(11, ' The space between body wall and alimentary canal of Ascaris is known as:', 'Haemocoel', ' Coelom', 'Pseudocoel', 'None', 'Pseudocoel'),
(12, 'In an aqueous environment microscopic animals and plants are collectively known as', 'Planktons', 'Commensals', 'Herbivores', 'Flora and fauna', 'Planktons'),
(13, 'Pancreas secretes', 'Insulin', 'Lactic acid', 'Amino acid', 'Fatty acids', 'Insulin'),
(14, 'Which one of the following features is found in chordates but not in non-chordates?', 'Gills', 'Spiracles', 'Post and Tails', 'Chitinous exoskeleton', 'Post and Tails'),
(15, 'Flowering plants are included under', 'Phanerogams', 'Cryptogams', 'Bryophytes', 'Pteridophytes', 'Phanerogams'),
(16, 'A convex mirror gives an image which is', 'Real and inverted', 'virtual and inverted', 'virtual and magnified', 'virtual and erect', 'virtual and erect'),
(17, 'Nuclear sizes are expressed in a unit named', 'fermi', 'angstrom', 'tesla', 'newton', 'fermi'),
(18, 'Pa(Pascal) is the unit for', 'thrust', 'pressure', 'frequency', 'conductivity', 'pressure'),
(19, 'If two bodies of different masses, initially at rest, are acted upon by the same force for the same time, then the both bodies acquire the same', 'velocity', 'momentum', 'kinetic energy', 'acceleration', 'momentum'),
(20, 'Suitable impurities are added to a semiconductor depending on its use. This is done in order to', 'increase its life', 'increase in electrical resistivity', 'enable it to withstand higher voltages', 'increase its electrical conductivity', 'increase its electrical conductivity'),
(21, 'Moment of inertia is', 'vector', 'scalar', 'phasor', 'tensor', 'tensor'),
(22, 'Light travels at the fastest speed in', 'glass', 'water', 'hydrogen', 'vacuum', 'vacuum'),
(23, 'Mach number is used in connection with speed of', 'sound', 'aircraft', 'ship', 'spacecrafts', 'aircraft'),
(24, 'Intensity of sound at a point is ____ its distance from the sourc', 'directly proportional', 'inversely proportional', 'directly proportional to squre of', 'inversely proportional to square of', 'inversely proportional to square of'),
(25, 'Stars which appear single to the naked eye but are double when seen through a telescope are', 'novas and supernovas', 'binaries', 'asteroids', 'quasars', 'binaries'),
(26, 'The most electronegative element among the following is', 'sodium', 'bromine', 'fluorine', 'oxygen', 'fluorine'),
(27, 'The metal used to recover copper from a solution of copper sulphate is', 'Na', 'Ag', 'Hg', 'Fe', 'Fe'),
(28, 'The metallurgical process in which a metal is obtained in a fused state is called', 'smelting', 'roasting', 'calcination', 'froath floation', 'smelting'),
(29, 'The term PVC used in the plastic industry stands for', 'polyvinyl chloride', 'polyvinyl carbobate', 'phosphor vanadiu chloride', 'phosphavinyl chloride', 'polyvinyl chloride'),
(30, 'What among following is used to produce artificial rain ?', 'copper oxide', 'carbon monoxide', 'silver iodide', 'silver nitrate', 'silver iodide'),
(31, 'The metal that is used as a catalyst in the hydrogenation of oils is', 'Ni', 'Pb', 'Cu', 'Pt', 'Ni'),
(32, 'Human bone does not contain', 'oxygen', 'calcium', 'protein', 'phosphorus', 'oxygen'),
(33, 'Natural rubber is a polymer derived from ?', 'ethylene', 'propylene', 'isoprene', 'butadiene', 'isoprene'),
(34, 'The monomer of polythene is', 'vinyl chloride', 'ethylene', 'ethyl alcohol', 'None of the above', 'ethylene'),
(35, 'The luster of a metal is due to', 'its high density', 'its high polishing', 'its chemical inertness', 'presence of free electrons', 'presence of free electrons'),
(36, 'The chemical used as a fixer in photography is ?', 'sodium thiosulphate', 'sodium sulphate', 'borax', 'ammonium sulphate', 'sodium thiosulphate'),
(37, 'Water drops are spherical because of ?', 'viscosity', 'density', 'polarity', 'surface tension', 'surface tension'),
(38, 'Aspirin is', 'acetyl salicylic acid', 'sodium salicylate', 'methyl salicylate', 'ethyl salicylate', 'acetyl salicylic acid'),
(39, 'The oxide of Nitrogen used in medicine as anaesthetic is ?', 'Nitrogen pentoxide', 'Nitrous oxide', 'Nitric oxide', 'Nitrogen dioxide', 'Nitrogen pentoxide'),
(40, 'Which one of the following metals does not react with water to produce Hydrogen?', 'Cadmium', 'Lithium', 'Potassium', 'Sodium', 'Cadmium'),
(41, 'Graphic representation of relationship between the producers and the consumers in an ecosystem is known as', 'Ecological niche', 'Ecological pyramid', ' Ecological system', 'Trophic levels', 'Ecological pyramid'),
(42, 'Branch of Biology dealing with distribution of plants on earth surface is called', ' Phytogeography', 'Phytosociology', 'Ecology', 'Phytology', ' Phytogeography'),
(43, 'Growth hormone is produced in', 'Thyroid', 'Adrenal', 'Gonads', 'Pituitary', 'Pituitary'),
(44, ' Number of spinal nerves in human beings is', '12 pairs', '32 pairs', '31 pairs', '37 pairs', '31 pairs'),
(45, ' Largest number of cells are found in', 'brain', 'spinal cord', 'retina', 'tongue', 'brain'),
(46, 'What is baking soda?', 'Potassium chloride', 'Potassium carbonate', 'Potassium hydroxide', 'Sodium bicarbonate', 'Sodium bicarbonate'),
(47, 'Which one of the following disease is not transmitted by tiger mosquitoes ?', 'Dengue', 'Chikungunya', 'Japanese Encephalitis', 'Yellow fever', 'Japanese Encephalitis'),
(48, 'Movement of cell against concentration gradient is called', 'osmosis', 'active transport', 'diffusion', 'passive transport', 'active transport'),
(49, 'Primary phloem develops from', 'lateral meristem', 'protoderm', 'extrastelar cambium', 'provascular tissue', 'provascular tissue'),
(50, 'Other than spreading malaria, anopheles mosquitoes are also vectors of', 'dengue fever', 'filariasis', 'encephalitis', 'yellow fever', 'filariasis'),
(51, 'Pyorrhoea is a disease of the', 'nose', 'gums', 'heart', 'lungs', 'gums'),
(52, 'Plants that grow in saline water are called', 'halophytes', 'hydrophytes', 'mesophytes', 'thallophytes', 'halophytes'),
(53, 'Which of the following tests helps in diagnosis of cancer ?', 'Urine test', 'Neuro Test', 'Blood test', 'Biopsy test', 'Biopsy test'),
(54, 'The compound used in anti-malarial drug is', 'Chloroquin', 'Aspirin', 'Neoprene', 'Isoprene', 'Chloroquin'),
(55, 'Which of the following is a skin disease ?', 'Rickets', 'Osteomalacia', 'Anaemia', 'Pellagra', 'Pellagra'),
(56, 'The deficiency of which of the following leads to dental caries ? ', 'Iron', 'fluorine', 'copper', 'zinc', 'fluorine'),
(57, 'Myopia is connected with', 'eyes', 'ears', 'lungs', 'none of above', 'eyes'),
(58, ' Healing of wounds is hastened by vitamin ?', 'C', 'A', 'E', 'D', 'C'),
(59, 'Plants that grow in saline water are known as', 'hallophytes', 'thallophytes', 'hydrophytes', 'mesophytes', 'hallophytes'),
(60, 'Study of cell is', 'Bacteriology', 'Biometrics', 'Cryobiology', 'Cytology', 'Cytology'),
(61, 'The quantum number that can give the idea about shape of subshell is _____ quantum number.', 'principal', 'azimuthal', 'magnetic', 'spin', 'azimuthal'),
(62, 'The ionic product of water will increase if', 'pressure is decreased', 'temperature is increased', 'H+ are added', 'OH+ ions are added', 'H+ are added'),
(63, 'O.S. Of which of the following elements doesn\'t change in its compound?', 'F', 'Cl', 'Br', 'l', 'F'),
(64, 'Group number of an element indicates', 'Valency', 'Atomicity', 'no. Of electrons', 'Valence electrons', 'Valence electrons'),
(65, 'A gas is found to have the formula (CO)x. Its vapour density of 70. The value of x must be', '4', '6', '5', '9', '5'),
(66, 'Process in which HNO3 is manufactured by catalytic oxidation of NH3 is', 'Bikland process', 'Ezde Process', 'Haber\'s process', 'Ostwald\'s process', 'Ostwald\'s process'),
(67, 'The process of converting hydrated alumina to anhydrous alumina is called', 'raosting', 'smelting', 'dressing', 'calcinations', 'calcinations'),
(68, 'Refining of petroleum involves the process of ___ distillation', 'Simple', 'Fractional', 'Steam', 'Vacuum', 'Fractional'),
(69, 'Benzene when treated with Cl2 in dark gives', 'Gammaxene', 'Glyoxal', 'Phenol', 'Chorobenzene', 'Chorobenzene'),
(70, 'IUPAC name of iso-butyl acetylene is', '4-ethylbut-1-ene', '4-methypent-1-yne', '3-methylpent-2-yne', '2-methypent-4-yne', '4-methypent-1-yne'),
(71, 'The principle which gives a way to fill the electron in the available energy levels is', 'Hund\'s rule', 'Pauli\'s exclusion principle', 'Aufbau principle', 'Rutherford\'s model', 'Aufbau principle'),
(72, 'A reaction \'X\' has equilibrium constant 16. Another reaction is \'Y\' is formed by multiplying the reaction \'X\' by half. The equilibrium constant of the second reaction is', '8', '4', '2', '1', '8'),
(73, 'Chalcopyrite is commonly known as', 'Matte', 'Lunar caustic', 'Fool\'s gold', 'none', 'Fool\'s gold'),
(74, 'Ethenol and Ethanal are example of', 'Positional Isomerism', 'Metamerism', 'Tautomerism', 'ALL', 'Tautomerism'),
(75, 'On passing ethyne through hot iron tube, the compund formed is', 'Ethene', 'Butyne', 'Benzene', 'Ethane', 'Benzene'),
(76, 'Chirrosis effects which of the organs?', 'kidney', 'lever', 'pancreas', 'small intestine', 'liver'),
(77, 'During projectile motion the quantities that remain unchanged are', 'force and vertical velocity', 'acceleration and horizontal velocity', 'kinetic energy and acceleration', 'acceleration and momentum', 'acceleration and horizontal velocity'),
(78, 'The velocity of falling rain drop attains limiting value because of', 'up thrust', 'surface tension', 'air current', 'viscous force exerted by air', 'viscous force exerted by air'),
(79, 'Which of the following thermometer is used to measure very high temperature.', 'gas thermometer', 'liquid thermometer', 'pyrometer', 'resistance thermometer', 'pyrometer'),
(80, 'When an ideal diatomic gas is heated at constant pressure the fraction of heat energy supplied which increases the internal energy supplied which increases the internal energy of the gas is', '(2/5)', '(3/5)', '(3/7)', '(5/7)', '(5/7)'),
(81, 'On heating liquid the refractive index generally.', 'Increases', 'decreases', 'does not change', 'may increase or decrease depending on rate of heating', 'decreases'),
(82, 'In a longitudinal stationary wave produced in a gas, pressure is maximum at', 'nodes', 'antinodes', 'all point', 'neither nodes nor antinodes', 'nodes'),
(83, 'Value of relative permeability of diamagnetic substance is', '1', 'less than 1', 'greater than 1', 'very very large', 'less than 1'),
(84, 'A parallel plate capacitor has capacitance C. The plates of capacitors are joined by a conducting wire, then capacitance becomes', 'C', '2C', 'C/2', 'infinite', 'infinite'),
(85, 'The current amplification of common base pNp transistor is 0.96 the current gain in common emitter amplifies is', '16', '24', '20', '32', '24'),
(86, 'Which of the following phenomenon support the quantum nature of light', 'Inference', 'Diffraction', 'Polarisation', 'Photoelectric effect', 'Photoelectric effect'),
(87, 'Which blood group is known as Universal donor ?', 'A+', 'A-', 'AB+', 'O-', 'O-'),
(88, 'Which one of the following is the sweetest natural sugar ?', 'lactose', 'glucose', 'fructose', 'sucrose', 'fructose'),
(89, 'Insulin controls the metabolism of ?', 'fats', 'carbohydrates', 'protein', 'sugar', 'sugar'),
(90, ' Which crop helps in nitrogen fixation ?', 'maize', 'beans', 'potato', 'rice', 'beans');

-- --------------------------------------------------------

--
-- Stand-in structure for view `members`
-- (See below for the actual view)
--
CREATE TABLE `members` (
`id` int(11)
,`fname` varchar(20)
,`lname` varchar(20)
,`user_name` varchar(20)
,`email` varchar(30)
,`password` varchar(20)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `user_name`, `email`, `password`, `status`) VALUES
(1, 'test', 'ltest', 'test', 'test@test.com', 'test123', 0),
(15, 'Nischal', 'Ghimire', 'nischal', 'nischal@gmail.com', 'nischal', 0),
(16, 'Milan', 'Thapa', 'aryan', 'aryan@sochware.com', 'aryan', 0),
(17, 'nabin', 'ghimire', 'dada', 'nabin@gmail.com', 'nabin123', 0),
(18, 'akcnksa', 'cad', 'asca', 'sdfcd@shdb.com', 'sdcsddks', 0),
(21, 'Shyam', 'Bakhrel', 's', 's@s.s', 's', 0),
(22, 'Ayush', 'Shrestha', 'ayush@shrestha', 'ayushshrestha5@gmail.com', 'ayush', 0),
(26, 'biku', 'mhzn', 'chiku', 'chiku@mail.com', 'chiku123', 0),
(27, 'smaran', 'maharjan', 'smaran_maharjan', 'smaranmaharjan@gmail.com', 'smaranmaha', 0),
(28, 'don', 'hero', 'don', 'don@gmail.com', '1234', 0),
(29, 'Gaurav', 'Kunwar', 'gaurav', 'gaurav@gmail.com', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `qno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `correct_ans` varchar(100) NOT NULL,
  `user_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `word_answer`
--

CREATE TABLE `word_answer` (
  `qid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `userAns` varchar(100) NOT NULL,
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word_answer`
--

INSERT INTO `word_answer` (`qid`, `question`, `answer`, `userAns`, `marks`) VALUES
(15, 'What is the meaning of Ã¢â‚¬ËœBCCÃ¢â‚¬â„¢ in case of E-mail?', 'BCC means Blind Carbon Copy in email.', 'blind carbon copy', 2),
(31, 'How many keywords are available in java ?', '48 Keywords are available in Java', '46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `word_questions`
--

CREATE TABLE `word_questions` (
  `Qno` int(2) DEFAULT NULL,
  `Question` varchar(93) DEFAULT NULL,
  `Answer` varchar(89) DEFAULT NULL,
  `Must_Include` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `word_questions`
--

INSERT INTO `word_questions` (`Qno`, `Question`, `Answer`, `Must_Include`) VALUES
(1, 'What are the features Java OOPS Concepts ?', 'Abstraction , Encapsulation , Inheritance and Polymorphism.Ã‚Â ', 'Abstraction Encapsulation Inheritance Polymorphism'),
(2, 'What are the different types of Inner classes ?', 'Simple Inner Class, Local Inner Class, Anonymous Inner Class , Static Nested Inner Class.', 'Simple Local Anonymous Static'),
(3, 'What is the use of Constructor ?', 'Constructor are used to initialize the object', 'initialize object'),
(4, 'What is TypeCasting ?', 'Process to convert one data type to another.', 'convert data type'),
(5, 'What is Full form of JVM ?', 'JVM stands for Java Virtual Machine', 'Java Virtual Machine'),
(6, 'What is Full form of JDK ?', 'JDK stands for Java Development kit.', 'Java Development Kit'),
(7, 'What is Full form of JRE ?', 'JRE stands for java Runtime Environment', 'Java Runtime Environment'),
(8, 'JDBC stands for', 'Java Database connection', 'Java Database Connecction'),
(9, 'Is JVM, a compiler or interpretor ?', 'JVM is an interpreter.', 'interpreter'),
(10, 'What is Full Form of RAM?', 'The full form of RAM is Random Access Memory.', 'Random Access Memory'),
(11, 'What is Full Form of ROM?', 'The full form of ROM is Read Only Memory.', 'Read Only Memory.'),
(12, 'What is Ã¢â‚¬ËœfacebookÃ¢â‚¬â„¢?', 'The Facebook is Social Networking Site.', 'Social Network'),
(13, 'What is Computer Virus?', 'One kind of program, which is harmful to computer operation.', 'harmful program'),
(14, 'What is the meaning of Ã¢â‚¬ËœCCÃ¢â‚¬â„¢ in case of E-mail?', 'CC means Carbon Copy in email.', 'Carbon Copy'),
(15, 'What is the meaning of Ã¢â‚¬ËœBCCÃ¢â‚¬â„¢ in case of E-mail?', 'BCC means Blind Carbon Copy in email.', 'Blind Carbon Copy'),
(16, '\'.MOV\' extension refers usually to what kind of file?', 'It refers to animation movie files.', 'animation movie'),
(17, 'Who developed Yahoo?', 'David Filo & Jerry Yang developed Yahoo.', 'David Filo & Jerry Yang'),
(18, 'A temporary storage area attached to the CPU of the computer for input-output operations is a', 'It is register.', 'register'),
(19, 'Who invented Java ?', 'James Gosling invented Java', 'James Gosling'),
(20, 'Who is known as father of Artificial Intelligence ?', 'John McCarthy is known as father of AI', 'John McCarthy'),
(21, 'An Assembler is used to translate a program written in ?', 'Assembler is used to translate program written in assembly level', 'assembly level'),
(22, 'What is the name of a device that converts digital signals to analog signals?', 'Modem converts digital signal to analog.', 'modem'),
(23, 'B 2 B stands for', 'B2B stands for business to business.', 'business to business'),
(24, 'Where is cahce memory is located ?', 'Cache memory is located in CPU.', 'cpu'),
(25, 'What is full form of TIFF ?', 'Full form of TIFF is Tagged Image File Format', 'Tagged Image File Format'),
(26, 'Which type of storage device is a BIOS ?', 'BIOS is primary storage device.', 'primary'),
(27, 'In computer what converts AC to DC ?', 'SMPS converts AC to DC.', 'smps'),
(28, 'Segments are made on which layer of OSI moder?', 'Segments are made on transport layer', 'transport layer'),
(29, 'Attribute of one table matching to the primary key of other table, is called as', 'It is called foreign key.', 'foreign key'),
(30, 'Which among following SQL commands is used to add a row ?', 'INSERT command is used to add row.', 'INSERT'),
(31, 'How many keywords are available in java ?', '48 Keywords are available in Java', '48'),
(32, 'MAC address is of how many bits ?', 'MAC address is of 48 bits.', '48'),
(33, 'What is full form of PNG ?', 'The full form of PNG is Portable Network Graphics.', 'Portable Network Graphics'),
(34, 'What is full form of USB ?', 'The full form of USB is Universal Serial Bus.', 'Universal Serial Bus'),
(35, 'What is full form of MAC ?', 'Full form of MAC is Media Access Control', 'Media Access Control'),
(36, 'Which command is used to set a link between two database files ?', 'SETLanguage is used to set link', 'SELanguage'),
(38, 'What is full form of JPEG ?', 'JPEG stands for Joint Photo Expert Group', 'Joint Photo Expert Group'),
(39, 'Ã‚Â What is full form of GOOGLE ?', 'Global Organization Of Oriented Group Language Of Earth', 'Global Organization Of Oriented Group Language Of Earth'),
(40, 'What is full form of YAHOO ?', 'Yet Another Hierarchical Officious Oracle', 'Yet Another Hierarchical Officious Oracle'),
(41, 'Which type of inheritance is not supported by java ?', 'Multiple inheritance is not supported by Java', 'Multiple');

-- --------------------------------------------------------

--
-- Structure for view `members`
--
DROP TABLE IF EXISTS `members`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `members`  AS  (select `user`.`id` AS `id`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname`,`user`.`user_name` AS `user_name`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`status` AS `status` from `user`) union (select `admin`.`id` AS `id`,`admin`.`fname` AS `fname`,`admin`.`lname` AS `lname`,`admin`.`user_name` AS `user_name`,`admin`.`email` AS `email`,`admin`.`password` AS `password`,`admin`.`status` AS `status` from `admin`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `csit`
--
ALTER TABLE `csit`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `engineering`
--
ALTER TABLE `engineering`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedno`);

--
-- Indexes for table `mbbs`
--
ALTER TABLE `mbbs`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `word_answer`
--
ALTER TABLE `word_answer`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `csit`
--
ALTER TABLE `csit`
  MODIFY `qid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mbbs`
--
ALTER TABLE `mbbs`
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

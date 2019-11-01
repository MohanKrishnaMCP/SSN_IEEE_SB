-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 08:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssnieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eno` bigint(20) UNSIGNED NOT NULL,
  `ename` text NOT NULL,
  `dates` date NOT NULL,
  `nop` int(11) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `organiser` text NOT NULL,
  `speakers` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `rollno` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `year` int(11) NOT NULL,
  `dept` text NOT NULL,
  `memid` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `cont` bigint(20) NOT NULL,
  `yop` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`rollno`, `name`, `year`, `dept`, `memid`, `email`, `cont`, `yop`, `flag`) VALUES
(312216105060, 'Mohan Krishna MCP', 4, 'EEE', 8789890, 'mcpmk1998@gmail.com', 9789425033, 2020, 0),
(0, 'Madhavan Thirumani Rajagopalan', 0, '', 93713299, 'trrsmadhavan@gmail.com', 0, 0, 0),
(0, 'SANDYA  M', 0, '', 93729123, 'sandya7c@gmail.com', 0, 0, 0),
(0, 'SANGEETHA V S', 0, '', 93729249, 'saransang97@gmail.com', 0, 0, 0),
(0, 'SURYAKANTH M', 0, '', 93729257, 'msk11121997@gmail.com', 0, 0, 0),
(0, 'Meyyappan M', 0, '', 93777774, 'meyyappan.ieee@gmail.com', 0, 0, 0),
(0, 'Swetha S', 0, '', 93778060, 'swethas.ieee@gmail.com', 0, 0, 0),
(0, 'Deepak L', 0, '', 93780427, 'ldeepakdude@gmail.com', 0, 0, 0),
(0, 'ABIRAMI D', 0, '', 93785964, 'abirami15005@ece.ssn.edu.in', 0, 0, 0),
(0, 'SHIVA KARTHICKEYAN MG', 0, '', 93786811, 'shiva15103@ece.ssn.edu.in', 0, 0, 0),
(0, 'Saravanan  S', 0, '', 93803186, 'saravanan24498@gmail.com', 0, 0, 0),
(0, 'Mayuri N', 0, '', 93803197, 'mayurisq@gmail.com', 0, 0, 0),
(0, 'Prashanthi B', 0, '', 94121972, 'prashanthib15074@it.ssn.edu.in', 0, 0, 0),
(0, 'Hemang MS', 0, '', 94122097, 'hemangmshah15032@it.ssn.edu.in', 0, 0, 0),
(0, 'Abishek G', 0, '', 94124106, 'abhishekganapathy27@gmail.com', 0, 0, 0),
(0, 'Sowmika CJ', 0, '', 94129747, 'jwalasowmika@gmail.com', 0, 0, 0),
(0, 'Lokesh NS', 0, '', 94129779, 'lokeshns64@gmail.com', 0, 0, 0),
(0, 'Pugazhendhi M', 0, '', 94157994, 'pugazh764304@gmail.com', 0, 0, 0),
(0, 'Kavya R', 0, '', 94160269, 'kavyaramesh2211@gmail.com', 0, 0, 0),
(0, 'Shakthivelu J', 0, '', 94164812, 'shakthivelu15099@ece.ssn.edu.in', 0, 0, 0),
(0, 'NANDHITHA N', 0, '', 94165044, 'nandhitha15069@ece.ssn.edu.in', 0, 0, 0),
(0, 'Yashaswin Harathi', 0, '', 94165046, 'yashaswin15126@mech.ssn.edu.in', 0, 0, 0),
(0, 'Gali Kavya Shree Sai', 0, '', 94165095, 'gali15027@ece.ssn.edu.in', 0, 0, 0),
(0, 'Saradha Devi R', 0, '', 94165305, 'charukrish30@gmail.com', 0, 0, 0),
(0, 'Kalaiselvan R', 0, '', 94165738, 'kalai97chem@gmail.com', 0, 0, 0),
(0, 'Bharat V', 0, '', 94166190, 'bharath15304@mech.ssn.edu.in', 0, 0, 0),
(0, 'Aravindh kumar R', 0, '', 94166191, 'aravindkumar15303@mech.ssn.edu.in', 0, 0, 0),
(0, 'Vignesh K', 0, '', 94166272, 'vignesh15062@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Ramyaa  Rathna Kumar', 0, '', 94166296, 'anikmanju17@gmail.com', 0, 0, 0),
(0, 'Monisha S', 0, '', 94166379, 'monishasunshine@gmail.com', 0, 0, 0),
(0, 'REGUNANTHAN K', 0, '', 94166921, 'regunanthan16082@ece.ssn.edu.in', 0, 0, 0),
(0, 'MUTHUKUMARAN A', 0, '', 94166931, 'muthukumaran16062@ece.ssn.edu.in', 0, 0, 0),
(0, 'Balaji S', 0, '', 94167603, 'balaji16024@mech.ssn.edu.in', 0, 0, 0),
(0, 'Ajay J', 0, '', 94167664, 'ajay16007@mech.ssn.edu.in', 0, 0, 0),
(0, 'Akhil Kuriakose', 0, '', 94167672, 'akhil16008@mech.ssn.edu.in', 0, 0, 0),
(0, 'Ashok Ramesh', 0, '', 94167687, 'ashok16021@mech.ssn.edu.in', 0, 0, 0),
(0, 'Vediappan G', 0, '', 94167807, 'vediappan1998@gmail.com', 0, 0, 0),
(0, 'Arunkumar K', 0, '', 94175135, 'arunkprem@gmail.com', 0, 0, 0),
(0, 'Sucharitha S Prakash', 0, '', 94175977, 'sucharitha20797@gmail.com', 0, 0, 0),
(0, 'Anjana  KR', 0, '', 94176189, 'kranja97@gmail.com', 0, 0, 0),
(0, 'Kawya P', 0, '', 94176379, 'kawya2041999@gmail.com', 0, 0, 0),
(0, 'Aishwarya Ravindran', 0, '', 94176402, 'aishmayathegreat@gmail.com', 0, 0, 0),
(0, 'Ruba Mohanraj', 0, '', 94176607, 'ruba18aug@gmail.com', 0, 0, 0),
(0, 'Sandhanakrishnan R', 0, '', 94176648, 'rskchandru1998sandy@gmail.com', 0, 0, 0),
(0, 'Abarna  R', 0, '', 94208176, 'abarnachandran21@gmail.com', 0, 0, 0),
(0, 'Karthik A', 0, '', 94211639, ' karthikruban97@gmail.com', 0, 0, 0),
(0, 'NARAYANAN Annamalai', 0, '', 94242101, 'itzmenarayanan@gmail.com ', 0, 0, 0),
(0, 'Sai Prasanna', 0, '', 94301383, 'sai.prasanna60@gmail.com', 0, 0, 0),
(0, 'ALAGAR VISHNU VENKATESWARAN', 0, '', 94512206, 'alagarvishnu05@gmail.com', 0, 0, 0),
(0, 'KEERTHIVASAN SURYANARAYANAN', 0, '', 94512215, 'golu.kirti@gmail.com', 0, 0, 0),
(0, 'Durgaadevi SE', 0, '', 94517205, 'aisharue@gmail.com', 0, 0, 0),
(0, 'SHIBIKANNAN THANGAVEL', 0, '', 94526635, 'tmshibi01@gmail.com', 0, 0, 0),
(0, 'HARIHARAN K', 0, '', 94566310, 'kumarhariharan1@gmail.com ', 0, 0, 0),
(0, 'GOKULA KRISHNAN SK', 0, '', 94566330, 'gokul.march12@gmail.com', 0, 0, 0),
(0, 'Mahalakshmi R', 0, '', 94578250, 'mahalakshmiaerospace@gmail.com', 0, 0, 0),
(0, 'Aneesh R', 0, '', 94593702, 'aneesh23aravind@gmail.com', 0, 0, 0),
(0, 'Yogesh V Narayan', 0, '', 94600024, 'yogesh15128@ece.ssn.edu.in', 0, 0, 0),
(0, 'Dinesh Kumar C N', 0, '', 94601644, 'dinesh16031@ece.ssn.edu.in', 0, 0, 0),
(0, 'DEEPAK R', 0, '', 94601695, 'deepak16027@ece.ssn.edu.in', 0, 0, 0),
(0, 'Mahima S', 0, '', 94601707, 'mahima16055@ece.ssn.edu.in', 0, 0, 0),
(0, 'Saikiran S', 0, '', 94601709, 'saikiran16086@ece.ssn.edu.in', 0, 0, 0),
(0, 'PRIYANKA V', 0, '', 94605169, 'priyanka16082@cse.ssn.edu.in', 0, 0, 0),
(0, 'Snigdha V', 0, '', 94605173, 'snigdha.viswanathan@gmail.com', 0, 0, 0),
(0, 'Vanshika S', 0, '', 94605290, 'chaysonu@gmail.com', 0, 0, 0),
(0, 'Ramkumar Pugazhendhi', 0, '', 94613200, 'rammechon@gmail.com', 0, 0, 0),
(0, 'Ananth Devarajan', 0, '', 94613215, 'ananth16012@mech.ssn.edu.in', 0, 0, 0),
(0, 'Vijay Venkatesan', 0, '', 94613231, 'vijivenkat307@gmail.com', 0, 0, 0),
(0, 'Vishal A', 0, '', 94614055, 'vishalananth98@gmail.com', 0, 0, 0),
(0, 'Divya  A', 0, '', 94619695, 'divyaayyadurai02121993@gmail.com', 0, 0, 0),
(0, 'Shruthi S', 0, '', 94630636, 'ss.shruthz@gmail.com', 0, 0, 0),
(0, 'Lindhiya LAN', 0, '', 94631922, 'lanlindhiya@gmail.com', 0, 0, 0),
(0, 'Ashwin Dhanasamy', 0, '', 94633271, 'ashwindhanasamy@gmail.com', 0, 0, 0),
(0, 'Niharika Shankar', 0, '', 94633308, 'niks0702@gmail.com', 0, 0, 0),
(0, 'Rimi Chowdhury', 0, '', 94633366, 'rimichowdhury@it.ssn.edu.in', 0, 0, 0),
(0, 'Jayaram Hariharakrishnan', 0, '', 94633403, 'jayaram.hariharakrishnan@gmail.com', 0, 0, 0),
(0, 'Varun Kumar P', 0, '', 94635029, 'varunkumar.nps@gmail.com', 0, 0, 0),
(0, 'Kavya V Kannan', 0, '', 94635657, 'kavyavkannan@gmail.com', 0, 0, 0),
(0, 'Saravankumar R S', 0, '', 94638652, 'saravanakumar050@civil.ssn.edu.in', 0, 0, 0),
(0, 'ANIRUDH M', 0, '', 94638667, 'anirudh15058@cse.ssn.edu.in', 0, 0, 0),
(0, 'Hariraj M J', 0, '', 94638674, 'hariraj021@civil.ssn.edu.in', 0, 0, 0),
(0, 'Harish M', 0, '', 94638680, 'harish022@civil.ssn.edu.in', 0, 0, 0),
(0, 'Deveshwar K', 0, '', 94707683, 'deveshwar013@civil.ssn.edu.in', 0, 0, 0),
(0, 'Manjula R', 0, '', 94707694, 'manjula032@civil.ssn.edu.in', 0, 0, 0),
(0, 'Kirthana M', 0, '', 94708269, 'kirthana15023@bme.ssn.edu.in', 0, 0, 0),
(0, 'Swetha V', 0, '', 94712371, 'swetha16059@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Kezia Sharon C', 0, '', 94712470, 'sharonanas99@gmail.com', 0, 0, 0),
(0, 'Sruthi Mahalakshmi Easwaran', 0, '', 94713209, 'sruthi17100@mech.ssn.edu.in', 0, 0, 0),
(0, 'Dinesh GC', 0, '', 94717513, 'dinesh15013@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Santhoosh Aravind   S', 0, '', 94724779, 'santhooshsundar@gmail.com', 0, 0, 0),
(0, 'Jeevithaa  S', 0, '', 94724793, ' jeevi13820@gmail.com', 0, 0, 0),
(0, 'Ravi Pratyusha', 0, '', 94724798, 'ravipratyusha16078@eee.ssn.edu.in', 0, 0, 0),
(0, 'Nandh Kishore P T', 0, '', 94724828, 'ptnandhu1998@gmail.com ', 0, 0, 0),
(0, 'Srinath  S', 0, '', 94724831, 'srinath18698@gmail.com', 0, 0, 0),
(0, 'Maheswari E', 0, '', 94729158, 'maheswari15011@eee.ssn.edu.in', 0, 0, 0),
(0, 'Meenaapriya V K', 0, '', 94729192, 'meenaapriya15067@eee.ssn.edu.in', 0, 0, 0),
(0, 'Karthik Rajan Chandrasekaran', 0, '', 94754399, 'karthikrajan2710@gmail.com', 0, 0, 0),
(0, 'Swetha Selvanayagam', 0, '', 94795100, 'twilightswetha7@gmail.com', 0, 0, 0),
(0, 'Balakrishnan R', 0, '', 94797961, 'balakrishnan16025@mech.ssn.edu.in', 0, 0, 0),
(0, 'Siva  T', 0, '', 94799455, 'siva17095@mech.ssn.edu.in', 0, 0, 0),
(0, 'Vishnu Srinivasa Prasad V', 0, '', 94799457, 'vishnu17125@mech.ssn.edu.in', 0, 0, 0),
(0, 'Pushparaj I', 0, '', 94801010, 'pushparaj16312@mech.ssn.edu.in', 0, 0, 0),
(0, 'Madhu TR', 0, '', 94801361, 'madhu030@civil.ssn.edu.in', 0, 0, 0),
(0, 'Aravindakshan S', 0, '', 94801363, 'aravindakshan17023@ece.ssn.edu.in', 0, 0, 0),
(0, 'PRIYADHARSHINI S', 0, '', 94801402, 'priyadharshini17122@ece.ssn.edu.in', 0, 0, 0),
(0, 'Surendran K', 0, '', 94805585, 'surendran17113@eee.ssn.edu.in', 0, 0, 0),
(0, 'Jayasree S', 0, '', 94805596, 'jayasree15306@eee.ssn.edu.in', 0, 0, 0),
(0, 'Deepa M', 0, '', 94805612, 'deepa15031@eee.ssn.edu.in', 0, 0, 0),
(0, 'Ramya R', 0, '', 94805630, 'ramya17083@eee.ssn.edu.in', 0, 0, 0),
(0, 'Siddharth D', 0, '', 95025995, 'sidhudivi@gmail.com', 0, 0, 0),
(0, 'Sanjay VR', 0, '', 95404728, 'sanjayvr5769@gmail.com', 0, 0, 0),
(0, 'Devanathan NG', 0, '', 95407743, 'ngdeva99@gmail.com', 0, 0, 0),
(0, 'Naveen S', 0, '', 95407745, 'naveen.sasikumar1999@gmail.com', 0, 0, 0),
(0, 'Ishwarya S', 0, '', 95407836, 'ishwarya2805@gmail.com', 0, 0, 0),
(0, 'Srinidhi S', 0, '', 95407842, 'srinidhis17112@it.ssn.edu.in', 0, 0, 0),
(0, 'Amutha Geethan T', 0, '', 95409633, 'amutha16011@mech.ssn.edu.in', 0, 0, 0),
(0, 'Harika Madireddy', 0, '', 95409666, 'harika020@civil.ssn.edu.in', 0, 0, 0),
(0, 'Vinothni SN', 0, '', 95409707, 'vinothni061@civil.ssn.edu.in', 0, 0, 0),
(0, 'Rajarajan T', 0, '', 95409714, 'rajarajan307@civil.ssn.edu.in', 0, 0, 0),
(0, 'Ajay M', 0, '', 95409964, 'ajay16006@mech.ssn.edu.in', 0, 0, 0),
(0, 'Rohit Midha', 0, '', 95413609, 'rohit.midha23@gmail.com', 0, 0, 0),
(0, 'Vinatha viswanathan', 0, '', 95413659, 'vinatha17060@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Karthik Ramanan Vijaya Gurumurthy', 0, '', 95413848, 'karthikramanan17022@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Nadar PV', 0, '', 95415680, 'prasad18117@mech.ssn.edu.in', 0, 0, 0),
(0, 'Vimaleswar Babureddy', 0, '', 95415693, 'vimaleswar15122@mech.ssn.edu.in', 0, 0, 0),
(0, 'Venkatesan K', 0, '', 95415694, 'kvenksh@gmail.com', 0, 0, 0),
(0, 'Gopi T', 0, '', 95415727, 'gopi304@civil.ssn.edu.in', 0, 0, 0),
(0, 'Sanjana B', 0, '', 95415733, 'sanjanabalamurugan1999@gmail.com', 0, 0, 0),
(0, 'Anne Sherin A', 0, '', 95415746, 'annesherin004@civil.ssn.edu.in', 0, 0, 0),
(0, 'Krishna Kumar V', 0, '', 95415766, 'krishna306@civil.ssn.edu.in', 0, 0, 0),
(0, 'Nanda Krishna H', 0, '', 95415825, 'nanda.harikrishnar@gmail.com', 0, 0, 0),
(0, 'Hima Bindhu M', 0, '', 95415852, 'himabindhu9713@gmail.com', 0, 0, 0),
(0, 'Kavithasri A', 0, '', 95415888, 'a.kavithasri@gmail.com', 0, 0, 0),
(0, 'Navaneethakrishnan R', 0, '', 95415898, 'navaneethakrishnan15059@mech.ssn.edu.in', 0, 0, 0),
(0, 'Sai Chitti S Valasapalli', 0, '', 95416061, 'saichitti1919@gmail.com', 0, 0, 0),
(0, 'Shreya S', 0, '', 95416081, 'shreya.rsvn@gmail.com', 0, 0, 0),
(0, 'Saadhana I', 0, '', 95416082, 'lsaadhana@gmail.com', 0, 0, 0),
(0, 'Saheen Basha', 0, '', 95416103, 'saheen.shahid100@gmail.com', 0, 0, 0),
(0, 'Santosh J', 0, '', 95416104, 'santhoshdragon001@gmail.com', 0, 0, 0),
(0, 'Vaishnavi Kanagaraj', 0, '', 95416122, 'vaishuvimala2000@gmail.com', 0, 0, 0),
(0, 'Yamuna M', 0, '', 95416123, 'yamunamurali2000@gmail.com', 0, 0, 0),
(0, 'Soumya Kannan', 0, '', 95416160, 'soumya16104@cse.ssn.edu.in', 0, 0, 0),
(0, 'Sarah Mathew', 0, '', 95416174, 'sarah@gmail.com', 0, 0, 0),
(0, 'Praveen Kumar  R', 0, '', 95416197, 'pbcpraveen@gmail.com', 0, 0, 0),
(0, 'Plakeel John', 0, '', 95416649, 'plakeel18111@mech.ssn.edu.in', 0, 0, 0),
(0, 'Karthikeyan Gnanasundaram', 0, '', 95417413, 'karthikeyan15043@mech.ssn.edu.in', 0, 0, 0),
(0, 'Sushmita Rajtilak V K', 0, '', 95417744, 'sushmita7898@gmail.com', 0, 0, 0),
(0, 'Meghna Iyer D L', 0, '', 95417796, 'meghnaiyer.dl@gmail.com', 0, 0, 0),
(0, 'Venkatesan K', 0, '', 95417805, 'venkatesan17111@mech.ssn.edu.in', 0, 0, 0),
(0, 'Jyothishmathi C V', 0, '', 95417820, 'cvjyothishmathi@gmail.com', 0, 0, 0),
(0, 'Naveen Raj', 0, '', 95417823, 'naveen16072@mech.ssn.edu.in', 0, 0, 0),
(0, 'Nandha Kumar G', 0, '', 95417841, 'nandha17065@mech.ssn.edu.in', 0, 0, 0),
(0, 'INAMANAMELLURU K V LAKSHMI KALYANI', 0, '', 95417894, 'kalyaniinamanamelluru@gmail.com', 0, 0, 0),
(0, 'Vinodh Kumar  TM', 0, '', 95417995, 'vinodh18185@mech.ssn.edu.in', 0, 0, 0),
(0, 'Ankit Kumar', 0, '', 95418205, 'ankit15302@mech.ssn.edu.in', 0, 0, 0),
(0, 'Lokesh SM', 0, '', 95418547, 'lokeshvarma0398@gmail.com', 0, 0, 0),
(0, 'Annamalai Palaniappan', 0, '', 95418690, 'annamalai17009@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Muthu Lekshmi V S', 0, '', 95419335, 'muthu15064@ece.ssn.edu.in', 0, 0, 0),
(0, 'Swati H', 0, '', 95419344, 'swati15116@ece.ssn.edu.in', 0, 0, 0),
(0, 'Shoba Elumalai', 0, '', 95419599, 'shoba18160@mech.ssn.edu.in', 0, 0, 0),
(0, 'Nitin Nikamanth  A B', 0, '', 95419616, 'nitinnikamanta@gmail.com', 0, 0, 0),
(0, 'Vinaya Krishna', 0, '', 95419634, 'vinaya16126@mech.ssn.edu.in', 0, 0, 0),
(0, 'Durai Raj', 0, '', 95419989, 'durai17028@mech.ssn.edu.in', 0, 0, 0),
(0, 'Iniyan V', 0, '', 95420367, 'iniyan17037@mech.ssn.edu.in', 0, 0, 0),
(0, 'Mohammed Anas', 0, '', 95420431, 'mohamedanas17031@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Rakshana S', 0, '', 95421127, 'srakshana15112@ece.ssn.edu.in', 0, 0, 0),
(0, 'Achyuth Ramachandran', 0, '', 95421261, '3199achu@gmail.com', 0, 0, 0),
(0, 'ROSHAN RAM DAYAL', 0, '', 95421269, 'roshanramdayal2@gmail.com', 0, 0, 0),
(0, 'Vignesh M', 0, '', 95421271, 'sreevignesh25111999@gmail.com', 0, 0, 0),
(0, 'Aravinth N', 0, '', 95421276, 'aravinthfisher@gmail.com', 0, 0, 0),
(0, 'Sriram J', 0, '', 95421277, 'sriram17097@mech.ssn.edu.in', 0, 0, 0),
(0, 'Arvind kumar Ramkumar', 0, '', 95421289, 'arvind17013@mech.ssn.edu.in', 0, 0, 0),
(0, 'Jeya Aiswarya  V', 0, '', 95421308, 'jeyaaiswarya@gmail.com', 0, 0, 0),
(0, 'Madhumitha S', 0, '', 95421888, 'madhumitha16031@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Abhishek krishnan', 0, '', 95422732, 'abhishek17004@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Shri Vigneshwar S', 0, '', 95422951, 'shrivigneshwar18053@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Kavi Priya P', 0, '', 95422958, 'kavipriya18022@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Siranjeevi S', 0, '', 95423010, 'balamurugansiranjeevi@gmail.com', 0, 0, 0),
(0, 'Pushparaj  R', 0, '', 95425215, 'pushparaj170308@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Manimanickam RM', 0, '', 95428025, 'mani030@civil.ssn.edu.in', 0, 0, 0),
(0, 'Hema Naga Sri Pushpa Swetha T', 0, '', 95428036, 'hemanagasri019@civil.ssn.edu.in', 0, 0, 0),
(0, 'Priyadarshini KP', 0, '', 95428053, 'priyakp040@civil.ssn.edu.in', 0, 0, 0),
(0, 'Tamilarasan S', 0, '', 95428092, 'tamil059@civil.ssn.edu.in', 0, 0, 0),
(0, 'Shilpa J R', 0, '', 95428292, 'shilpa16099@ece.ssn.edu.in', 0, 0, 0),
(0, 'Aarthi V', 0, '', 95428296, 'aarthi16001@ece.ssn.edu.in', 0, 0, 0),
(0, 'Sakthivel N', 0, '', 95428824, 'sakthivel16047@chemical.ssn.edu.in', 0, 0, 0),
(0, 'Karthigeyan K', 0, '', 95432785, 'karthigeyan304@civil.ssn.edu.in', 0, 0, 0),
(0, 'Vaishnavi K', 0, '', 95432831, 'kvaishnavi.civil@gmail.com', 0, 0, 0),
(0, 'Shanmughapriya  S', 0, '', 95432972, 'shanmughapriya17097@eee.ssn.edu.in', 0, 0, 0),
(0, 'Akaash Kanna   N', 0, '', 95433034, 'akaash17006@eee.ssn.edu.in', 0, 0, 0),
(0, 'KUSHI BOHRA V', 0, '', 95433039, 'kushibohra18075@cse.ssn.edu.in', 0, 0, 0),
(0, 'Pavithranathan VM', 0, '', 95433040, 'pavithranathan036@civil.ssn.edu.in', 0, 0, 0),
(0, 'Dinesh Kumar S', 0, '', 95433041, 'dineshkumar015@civil.ssn.edu.in', 0, 0, 0),
(0, 'NIJANTHAN S', 0, '', 95433042, 'nijanthan18101@cse.ssn.edu.in', 0, 0, 0),
(0, 'Hari Priya R', 0, '', 95433108, 'haripriya021@civil.ssn.edu.in', 0, 0, 0),
(0, 'Vikram PG', 0, '', 95433113, 'vikram060@civil.ssn.edu.in', 0, 0, 0),
(0, 'Adharsh Sundaram   S', 0, '', 95433150, 'adharsh17002@eee.ssn.edu.in', 0, 0, 0),
(0, 'SHARMI R', 0, '', 95433170, 'sharmi18142@cse.ssn.edu.in', 0, 0, 0),
(0, 'Nidhi Bhandari B', 0, '', 95433193, 'nidhibhandari78@gmail.com', 0, 0, 0),
(0, 'Pelluru Manaswini', 0, '', 95433196, 'pelluru17069@eee.ssn.edu.in', 0, 0, 0),
(0, 'VIKRAMAN S', 0, '', 95433212, 'vikraman18195@cse.ssn.edu.in', 0, 0, 0),
(0, 'CHAITANYA A', 0, '', 95433223, 'chaitanya18036@cse.ssn.edu.in', 0, 0, 0),
(0, 'Kaashyap N', 0, '', 95433281, 'nkaashyap1998@gmail.com ', 0, 0, 0),
(0, 'Deepika V', 0, '', 95433688, 'deepika18042@cse.ssn.edu.in', 0, 0, 0),
(0, 'Balaji S', 0, '', 95433729, 'balaji18032@cse.ssn.edu.in', 0, 0, 0),
(0, 'Kirthika R', 0, '', 95433737, 'kirthika18077@cse.ssn.edu.in', 0, 0, 0),
(0, 'Dharshan S', 0, '', 95433792, 'dharshan18044@cse.ssn.edu.in', 0, 0, 0),
(0, 'Vaibhav  S', 0, '', 95433948, 'vaibhav18186@cse.ssn.edu.in', 0, 0, 0),
(0, 'Prashanth  S', 0, '', 95433977, 'prashanth18111@cse.ssn.edu.in', 0, 0, 0),
(0, 'Jaanhavi S', 0, '', 95434029, 'jaanhavi18062@cse.ssn.edu.in', 0, 0, 0),
(0, 'Harini M', 0, '', 95434317, 'mharini06@gmail.com', 0, 0, 0),
(0, 'SAFIN ABDUL NAZAR', 0, '', 95434326, 'SafinAbdulNazar18084@it.ssn.edu.in', 0, 0, 0),
(0, 'Dheepthaa  K A', 0, '', 95434330, 'tiger0597@gmail.com', 0, 0, 0),
(0, 'Yamini L', 0, '', 95434392, 'yamini16127@cse.ssn.edu.in', 0, 0, 0),
(0, 'MADHAVAN V', 0, '', 95434449, 'MadhavanV18054@it.ssn.edu.in', 0, 0, 0),
(0, 'Heera N', 0, '', 95434551, 'heera16036@eee.ssn.edu.in', 0, 0, 0),
(0, 'Ramya  S', 0, '', 95434562, 'Ramya183001068@eee.ssn.edu.in', 0, 0, 0),
(0, 'Vignesh R', 0, '', 95434570, '  vignesh15125@eee.ssn.edu.in', 0, 0, 0),
(0, 'Shweta Poorani B', 0, '', 95434669, 'shwetapoorani16101@eee.ssn.edu.in', 0, 0, 0),
(0, 'Reshmika Janani M', 0, '', 95434690, 'reshmika183001071@eee.ssn.edu.in', 0, 0, 0),
(0, 'Shihivaugh Venu S S', 0, '', 95434728, 'Shihivaugh183001084@eee.ssn.edu.in', 0, 0, 0),
(0, 'Mythili  M', 0, '', 95434811, 'mythili183001055@eee.ssn.edu.in', 0, 0, 0),
(0, 'Retika  M K', 0, '', 95436469, 'Retika183001072@eee.ssn.edu.in', 0, 0, 0),
(0, 'HARISH SHARMA V', 0, '', 95438145, 'HarishSharmaV18031@it.ssn.edu.in', 0, 0, 0),
(0, 'VIJAY ANAND M', 0, '', 95438728, 'VijayAnand18121@it.ssn.edu.in', 0, 0, 0),
(0, 'LAASYA SUBRAMANYAM V', 0, '', 95440798, 'VishnuSubramanyam18125@it.ssn.edu.in', 0, 0, 0),
(0, 'JIFRY ROSE R V', 0, '', 95440868, 'JifryRoseRV18043@it.ssn.edu.in', 0, 0, 0),
(0, 'Nirupan A', 0, '', 95441681, 'nirupan07@gmail.com', 0, 0, 0),
(0, 'Nithya Rathna A', 0, '', 95441714, 'nithyarathna257@gmail.com', 0, 0, 0),
(0, 'Induja S', 0, '', 95442008, 'indujas1998@gmail.com', 0, 0, 0),
(0, 'Shrivaths S', 0, '', 95442036, 'shrivaths16101@ece.ssn.edu.in', 0, 0, 0),
(0, 'Mridhula Ramesh Chakravarthy ', 0, '', 95442172, 'mridhula16060@ece.ssn.edu.in', 0, 0, 0),
(0, 'Sanjay S', 0, '', 95442714, 'sanjay17143@ece.ssn.edu.in', 0, 0, 0),
(0, 'Akilesh K', 0, '', 95442816, 'akilesh17014@ece.ssn.edu.in', 0, 0, 0),
(0, 'Sai Deepika I', 0, '', 95442817, 'sai17138@ece.ssn.edu.in', 0, 0, 0),
(0, 'Indhuja  U S', 0, '', 95442828, 'indhuja17058@ece.ssn.edu.i', 0, 0, 0),
(0, 'Surya Kumaran Sainath', 0, '', 95442829, 'surya17173@ece.ssn.edu.in', 0, 0, 0),
(0, 'YASMIN M A K', 0, '', 95447598, 'yasmin18188@ece.ssn.edu.in', 0, 0, 0),
(0, 'NIKHIL VISWANATH S', 0, '', 95447669, 'nikhil18098@ece.ssn.edu.in', 0, 0, 0),
(0, 'Vishal Raj N', 0, '', 95447828, 'vishalraj16125@cse.ssn.edu.in', 0, 0, 0),
(0, 'PRAHANNA S', 0, '', 95447891, 'prahanna18116@ece.ssn.edu.in', 0, 0, 0),
(0, 'MUNI PRYA DARSNI M M', 0, '', 95447908, 'muni18088@ece.ssn.edu.in', 0, 0, 0),
(0, 'SRI DHARSHINI S', 0, '', 95447970, 'sri18159@ece.ssn.edu.in', 0, 0, 0),
(0, 'SHAARUK S', 0, '', 95447973, 'shaaruk18148@ece.ssn.edu.in', 0, 0, 0),
(0, 'SHARATH V', 0, '', 95447976, 'sharath18150@ece.ssn.edu.in', 0, 0, 0),
(0, 'Keerthivasan C', 0, '', 95448736, 'vasan.keerthi100@gmail.com', 0, 0, 0),
(0, 'SAI VISHWESH C', 0, '', 95451745, 'sai18138@ece.ssn.edu.in', 0, 0, 0),
(0, 'SARAVANAN B L', 0, '', 95451784, 'saravanan18146@ece.ssn.edu.in', 0, 0, 0),
(0, 'MADHIRAJU KARTHIK', 0, '', 95451798, 'madhiraju18081@ece.ssn.edu.in', 0, 0, 0),
(0, 'YOGA SHREE M', 0, '', 95451809, 'yogashree18189@ece.ssn.edu.in', 0, 0, 0),
(0, 'Srinithi R', 0, '', 95463920, 'srinithi17055@bme.ssn.edu.in', 0, 0, 0),
(0, 'Pranav Krishna R', 0, '', 95463934, 'pranavkrishna17033@bme.ssn.edu.in', 0, 0, 0),
(0, 'Jayasri S', 0, '', 95464160, 'jayasri17022@bme.ssn.edu.in', 0, 0, 0),
(0, 'Jayashree  P', 0, '', 95464165, 'jayashree17021@bme.ssn.edu.in', 0, 0, 0),
(0, 'Gurucharan MK', 0, '', 95464186, 'gurucharan17016@bme.ssn.edu.in', 0, 0, 0),
(0, 'DEVARAJ KUMAR MM', 0, '', 95465517, 'devarajkumar16302@ece.ssn.edu.in', 0, 0, 0),
(0, 'Nandhini  K', 0, '', 95465570, 'nandhini16066@ece.ssn.edu.in', 0, 0, 0),
(0, 'Nadeen Naushad', 0, '', 95465820, 'nadeen17002@ece.ssn.edu.in', 0, 0, 0),
(0, 'Crossny Snowlin R', 0, '', 95467420, 'crossnysnowlin183003009@bme.ssn.edu.in', 0, 0, 0),
(0, 'NIVETHA  B', 0, '', 95467425, '2k18nivetha.b@somca.ssn.edu.in', 0, 0, 0),
(0, 'Arthi V', 0, '', 95467449, 'arthi183003004@bme.ssn.edu.in', 0, 0, 0),
(0, 'ROOBINI  R', 0, '', 95467454, '2k18roobini.r@somca.ssn.edu.in', 0, 0, 0),
(0, 'PRIYANKA  B', 0, '', 95467464, '2k18priyanka.b@somca.ssn.edu.in', 0, 0, 0),
(0, 'SAVITHA B', 0, '', 95467465, '2k18savitha.b@somca.ssn.edu.in', 0, 0, 0),
(0, 'Lavanya S', 0, '', 95467474, 'lavanya183003032@bme.ssn.edu.in', 0, 0, 0),
(0, 'AARTHI  C', 0, '', 95467492, '2k17Aarthi.C@somca.ssn.edu.in', 0, 0, 0),
(0, 'NAYANA DINAKER', 0, '', 95467504, '2k17Nayana.D@somca.ssn.edu.in', 0, 0, 0),
(0, 'HEMAVARDHINI V', 0, '', 95467508, '2k18hemavardhini.v@somca.ssn.edu.in', 0, 0, 0),
(0, 'Sasya V', 0, '', 95467509, 'sasyasubramanyam183003062@bme.ssn.edu.in', 0, 0, 0),
(0, 'KIRUTHIGA  R', 0, '', 95467528, 'rkiruthiga94@gmail.com', 0, 0, 0),
(0, 'NANDHINI  S', 0, '', 95467574, '2k17Nandhini.S@somca.ssn.edu.in', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sno` bigint(20) UNSIGNED NOT NULL,
  `dates` date NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `past_events`
--

CREATE TABLE `past_events` (
  `eno` bigint(20) UNSIGNED NOT NULL,
  `ename` text NOT NULL,
  `dates` date NOT NULL,
  `nop` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `organiser` text NOT NULL,
  `speakers` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `eno` (`eno`),
  ADD UNIQUE KEY `eno_2` (`eno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `sno` (`sno`),
  ADD UNIQUE KEY `sno_2` (`sno`),
  ADD UNIQUE KEY `sno_3` (`sno`);

--
-- Indexes for table `past_events`
--
ALTER TABLE `past_events`
  ADD UNIQUE KEY `eno` (`eno`),
  ADD UNIQUE KEY `eno_2` (`eno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `past_events`
--
ALTER TABLE `past_events`
  MODIFY `eno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

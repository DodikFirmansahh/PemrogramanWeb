--
-- Database: 'dbminggu13'
--

-- ---------------------------------------------

--
-- Table structure for table 'bljr_login'
--

CREATE TABLE `bljr_login` (
    `id` int(11) NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar (255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dümping data for table `bljr_login`
--

INSERT INTO `bljr_login` (`id`, `username`, `password`) VALUES
(1, 'Andi', 'uhuy123'), 
(2, 'Santoso', 'qwerty'),
(3, 'Samsul', 'dodolpret'),
(4, 'Administrator', 'admin456');
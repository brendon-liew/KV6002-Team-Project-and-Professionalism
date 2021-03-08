Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `gender` enum('','Men','Women') NOT NULL,
  `category` enum('','Shirt','Pants','Socks') NOT NULL,
  `quantity` varchar(35) NOT NULL,
  `information` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
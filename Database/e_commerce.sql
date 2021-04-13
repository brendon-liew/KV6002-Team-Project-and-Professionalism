-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 02:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `asID` int(10) NOT NULL,
  `asName` varchar(256) DEFAULT NULL,
  `asDesc` varchar(256) DEFAULT NULL,
  `asPrice` decimal(4,2) DEFAULT NULL,
  `asImg` varchar(256) DEFAULT NULL,
  `genID` varchar(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`asID`, `asName`, `asDesc`, `asPrice`, `asImg`, `genID`) VALUES
(1, 'Silver belt chain', 'A stylish silver belt chain made from steel', '7.00', 'localhost/fashion/images/Accessories/accessories 1.png', '2'),
(2, 'Floral pattern fingerless gloves', 'Apair of floral pattern fingerless gloves', '3.99', 'localhost/fashion/images/Accessories/accessories 2.png', '1'),
(3, 'Faux Leather choker', 'Faux Leather metal ring chocker', '12.50', 'localhost/fashion/images/Accessories/accessories 3.png', '1'),
(4, 'Steel silver necklace', 'A necklace made from steel with a combined padlock and key style', '14.99', 'localhost/fashion/images/Accessories/accessories 4.png', '3'),
(5, 'Pocket Pin', 'A pocket pin with several styalised charms that can be attached', '18.99', 'localhost/fashion/images/Accessories/accessories 5.png', '3'),
(6, 'Gothic Style chocker', 'A gothic style necklace and choker combo', '26.00', 'localhost/fashion/images/Accessories/accessories 6.png', '1'),
(7, 'Stocking Gloves', 'A pair of long sleeved fingerless stocking gloves', '24.00', 'localhost/fashion/images/Accessories/accessories 7.png', '1'),
(8, 'Gold framed round glasses', 'Gold coloured round framed 70\'s retro glasses', '9.99', 'localhost/fashion/images/Accessories/accessories 8.png', '1'),
(9, 'Gothic Sunglasses', 'A pair of rounf framed gothic sunglasses', '31.00', 'localhost/fashion/images/Accessories/accessories 9.png', '2'),
(10, 'Stripped Gloves', 'A pair of stripped long sleeved fingerless gloves', '6.99', 'localhost/fashion/images/Accessories/accessories 10.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `catID` varchar(6) NOT NULL DEFAULT '',
  `catName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`catID`, `catName`) VALUES
('1', 'Jacket'),
('2', 'Shirt'),
('3', 'Shoes'),
('4', 'Pants'),
('5', 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `colourID` mediumint(3) NOT NULL DEFAULT 0,
  `colourCode` varchar(15) DEFAULT NULL,
  `colourName` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colourID`, `colourCode`, `colourName`) VALUES
(1, '#000000', 'Black'),
(2, '#fcfcfc', 'White'),
(3, '#e7e7e7', 'Light grey'),
(4, '#aaaaaa', 'Dark grey'),
(5, '#fce1ff', 'Pastel Pink'),
(6, '#3f7846', 'Dark green'),
(7, '#8ef09a', 'Light green'),
(8, '#920c0c', 'Dark red'),
(9, '#ff3a3a', 'Light red'),
(10, '#6000b0', 'Dark purple'),
(11, '#c683ff', 'Light purple');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `userID` int(10) NOT NULL,
  `fullName` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `state` varchar(256) DEFAULT NULL,
  `zip` varchar(256) DEFAULT NULL,
  `county` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`userID`, `fullName`, `email`, `address`, `city`, `state`, `zip`, `county`) VALUES
(1, 'Test Testington', 'Test@mail.com', 'test 1', 'Testcastle', 'Test & Wear', 'NE13 TEST', 'Testside');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genID` varchar(3) NOT NULL DEFAULT '',
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genID`, `gender`) VALUES
('1', 'Female'),
('2', 'Male'),
('3', 'Unisex');

-- --------------------------------------------------------

--
-- Table structure for table `jacket`
--

CREATE TABLE `jacket` (
  `jaID` int(10) NOT NULL,
  `jaName` varchar(256) DEFAULT NULL,
  `jaDesc` varchar(256) DEFAULT NULL,
  `jaPrice` decimal(4,2) DEFAULT NULL,
  `jaImg` varchar(256) DEFAULT NULL,
  `genID` varchar(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jacket`
--

INSERT INTO `jacket` (`jaID`, `jaName`, `jaDesc`, `jaPrice`, `jaImg`, `genID`) VALUES
(1, 'Plaid Jacket', 'A dark plaid tartan jacket that focuses more around darker colours rather than the traditional bright reds. Made from waterproof materials along with an insulating inside this jacket is perfect for keeping up the aesthetic without getting cold.', '15.99', 'localhost/fashion/images/jacket/jacket 1.png', '3'),
(2, 'Denium Faux Fur', 'A somewhat baggy denium faux fur jacket made by default from lighter colours (but can be made darker). The soft faux fur provides excellent insulation and comfort. Perfect for cold dry weather.', '14.99', 'localhost/fashion/images/jacket/jacket 2.png', '1'),
(3, 'Cotton Light Jacket', 'This light cotton jacket with light insulation is excellent for when you want to head outside, the weather is nice, but there is a brisk breeze or the air is mildly cool.', '9.99', 'localhost/fashion/images/jacket/jacket 3.png', '2'),
(4, 'Faux Leather Jacket', 'A light form fitting faux leather jacket, stylish and for all types of weather.', '21.00', 'localhost/fashion/images/jacket/jacket 4.png', '1'),
(5, 'Rain Jacket', 'A lightly coloured rain jacket for a lighter clash to your aesthetic. Perfect for rainy weather to bring out some colour in the less than cheery weather', '15.00', 'localhost/fashion/images/jacket/jacket 5.png', '1'),
(6, 'Glitter Puffer Jacket', 'A glittering puffer jacket for keep you warm in the cold weather whilst also catching the eye through its glimmering design.', '19.00', 'localhost/fashion/images/jacket/jacket 6.png', '1'),
(7, 'Cropped Casual Jacket', 'This jacket\'s cropped design is perfect for casual occasions, made from lighter material it\'s perfect for warmer weather.', '13.00', 'localhost/fashion/images/jacket/jacket 7.png', '1'),
(8, 'Loose Harajuku jacket', 'A loose and cute harajuku jacket for those that want to keep up their aesthetic in the colest of weather.', '25.00', 'localhost/fashion/images/jacket/jacket 8.png', '3'),
(9, 'Winter Gothic Jacket', 'A jacket designed for cold winter weather with the classic, smart gothic design in mind.', '25.00', 'localhost/fashion/images/jacket/jacket 9.png', '2'),
(10, 'Thick gothic winter jacket', 'A jacket with the classic gothic aesthetic but designed in mind to keep you warm in even the coldest of weather', '24.00', 'localhost/fashion/images/jacket/jacket 10.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `paID` int(10) NOT NULL,
  `paName` varchar(256) DEFAULT NULL,
  `paDesc` varchar(256) DEFAULT NULL,
  `paPrice` decimal(4,2) DEFAULT NULL,
  `paImg` varchar(256) DEFAULT NULL,
  `genID` varchar(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`paID`, `paName`, `paDesc`, `paPrice`, `paImg`, `genID`) VALUES
(1, 'Slim fit dark denim pants', 'A classic set of unisex slim fitting dark denim trousers', '12.99', 'localhost/fashion/images/pants/pants 1.png', '3'),
(2, 'Slim fit ripped knee denium pants', 'A pair of slim fit ripped knee dark denium trousers. Unisex', '15.99', 'localhost/fashion/images/pants/pants 2.png', '2'),
(3, 'Buckled Gothic Pants', 'Dark pants with a classic gothic style with several buckles around the legs to provide a beautiful aesthetic', '20.99', 'localhost/fashion/images/pants/pants 3.png', '2'),
(4, 'Baggy Female Pants', 'A set of baggy buckled pants for women', '20.99', 'localhost/fashion/images/pants/pants 4.png', '1'),
(5, 'Zipped Pants Female', 'A set of Hakama styled pants with several zips that can be opened to give a new twist on the ripped jean aesthetic', '25.00', 'localhost/fashion/images/pants/pants 5.png', '1'),
(6, 'Dark tarten Skirt', 'A skirt with a dark tarten style. Comes with shoulder straps to provide a little dash to your outfit', '16.99', 'localhost/fashion/images/pants/pants 6.png', '1'),
(7, 'Studded Skirt', 'A skirt which has several gothic style studs around the waist', '19.00', 'localhost/fashion/images/pants/pants 7.png', '1'),
(8, 'Cargo Pants', 'A set of baggy garbo pants with plenty of storage space', '28.99', 'localhost/fashion/images/pants/pants 8.png', '2'),
(9, 'Faux Leather Gothic Trousers', 'A pair of smart trousers made from faux leather with the unique gothic aesthetic', '15.99', 'localhost/fashion/images/pants/pants 9.png', '3'),
(10, 'Slim Fitting Gothic Woman\'s Trousers', 'Slim fitting women\'s trousers with several zipped pockets (!) and buckles to reall show that gothic style', '18.00', 'localhost/fashion/images/pants/pants 10.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_colours`
--

CREATE TABLE `product_colours` (
  `colourID` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_colours`
--

INSERT INTO `product_colours` (`colourID`) VALUES
('1'),
('10'),
('11'),
('2'),
('3'),
('4'),
('5'),
('6'),
('7'),
('8'),
('9');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `sizeID` varchar(6) NOT NULL DEFAULT '',
  `sizeOrder` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`sizeID`, `sizeOrder`) VALUES
('1', 'XXS'),
('2', 'XS'),
('3', 'S'),
('4', 'M'),
('5', 'L'),
('6', 'XL'),
('7', 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

CREATE TABLE `shirt` (
  `shrtID` int(10) NOT NULL,
  `shrtName` varchar(256) DEFAULT NULL,
  `shrtDesc` varchar(256) DEFAULT NULL,
  `shrtPrice` decimal(4,2) DEFAULT NULL,
  `shrtImg` varchar(256) DEFAULT NULL,
  `genID` varchar(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`shrtID`, `shrtName`, `shrtDesc`, `shrtPrice`, `shrtImg`, `genID`) VALUES
(1, 'Warm Fleece Jumper', 'A well insulated fleece jumper for those colder days', '12.99', 'localhost/fashion/images/shirt/shirt 1.png', '1'),
(2, '2-Tone Shirt', 'A thic and cool shirt with 2 tones of colour', '8.99', 'localhost/fashion/images/shirt/shirt 2.png', '2'),
(3, 'Black Collared Jumper', 'A black collared jumper for those colder days but with a smarter aesthetic', '26.00', 'localhost/fashion/images/shirt/shirt 3.png', '2'),
(4, 'Gothic Crop-top', 'A hooded crop-top with a gothic design', '16.99', 'localhost/fashion/images/shirt/shirt 4.png', '1'),
(5, 'Gothic Long-sleeved shirt', 'A long-sleeves shirt with a gothic pentagram design for women', '28.00', 'localhost/fashion/images/shirt/shirt 5.png', '1'),
(6, 'Long-sleeved Slim fit shirt', 'A long sleeved form fitting gothic shirt', '12.00', 'localhost/fashion/images/shirt/shirt 6.png', '1'),
(7, 'Male Vest', 'A gothic style shirtless vest for men', '7.99', 'localhost/fashion/images/shirt/shirt 7.png', '2'),
(8, 'Long sleeved womens shirt', 'A stripped long sleeve and black top provides this shirt with a cute 2-toned design', '10.99', 'localhost/fashion/images/shirt/shirt 8.png', '1'),
(9, 'Baggy long sleeved jumper', 'A baggy long sleeved jumper with another colour tone of stripes across the arms', '14.00', 'localhost/fashion/images/shirt/shirt 9.png', '1'),
(10, 'Stripped Shirt', 'A stripped long sleeve baggy shirt', '7.00', 'localhost/fashion/images/shirt/shirt 10.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `shID` int(10) NOT NULL,
  `shName` varchar(256) DEFAULT NULL,
  `shDesc` varchar(256) DEFAULT NULL,
  `shPrice` decimal(4,2) DEFAULT NULL,
  `shImg` varchar(256) DEFAULT NULL,
  `genID` varchar(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`shID`, `shName`, `shDesc`, `shPrice`, `shImg`, `genID`) VALUES
(1, 'Old school checkered shoes', 'A pair of old school checkered laced up shoes', '29.99', 'localhost/fashion/images/shoes/shoes 1.png', '3'),
(2, 'Rock style ankle boots', 'a pair of of platform rocker ankle boots', '32.00', 'localhost/fashion/images/shoes/shoes 2.png', '1'),
(3, 'Suede platform shoes', 'A pair of suede platform shoes to help you stand taller', '18.00', 'localhost/fashion/images/shoes/shoes 3.png', '1'),
(4, 'Men\'s Gothic Boots', 'A pair of mens gothic buckled boots', '29.00', 'localhost/fashion/images/shoes/shoes 4.png', '2'),
(5, 'Laces mens shoes', 'A pair of laced old school mens shoes', '28.00', 'localhost/fashion/images/shoes/shoes 5.png', '2'),
(6, 'Faux Leather Boots', 'A pair of faux leather platform boots for women', '26.00', 'localhost/fashion/images/shoes/shoes 6.png', '2'),
(7, 'Light Laced Shoes', 'A pair of lightly coloured laced shoes', '27.99', 'localhost/fashion/images/shoes/shoes 7.png', '1'),
(8, 'Slip on mens shoes', 'A pair of comfy slip on mens shoes', '14.99', 'localhost/fashion/images/shoes/shoes 8.png', '2'),
(9, 'Men\'s faux leather boots', 'Faux Leather mens boots', '28.99', 'localhost/fashion/images/shoes/shoes 9.png', '2'),
(10, 'Slip on pastal shoes', 'A pair of slip on pastal coloured women\'s shoes', '16.99', 'localhost/fashion/images/shoes/shoes 10.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userPassword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userPassword`) VALUES
(1, 'admin@email.com', '7488e331b8b64e5794da3fa4eb10ad5d'),
(2, 'myuser', '254877852cc100aaafeb23a21acda391');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`asID`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`colourID`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `jacket`
--
ALTER TABLE `jacket`
  ADD PRIMARY KEY (`jaID`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`paID`);

--
-- Indexes for table `product_colours`
--
ALTER TABLE `product_colours`
  ADD PRIMARY KEY (`colourID`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`sizeID`);

--
-- Indexes for table `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`shrtID`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`shID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `asID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jacket`
--
ALTER TABLE `jacket`
  MODIFY `jaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `paID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shirt`
--
ALTER TABLE `shirt`
  MODIFY `shrtID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `shID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

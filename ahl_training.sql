--
-- Database: `ahl_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(10) NOT NULL,
  `order_user` varchar(125) NOT NULL,
  `order_item` varchar(125) NOT NULL,
  `order_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `order_user`, `order_item`, `order_price`) VALUES
(1, 'James Watts', 'Macbook Pro i7/16GB/1T-SSD', 1999),
(2, 'Lee Bowen', 'iPhone X 512GB', 1300),
(3, 'Darrel Cruz', 'Macbook Pro i7/16GB/1T-SSD', 1999),
(4, 'Kristi Freeman', 'Macbook Pro i7/16GB/1T-SSD', 1999),
(5, 'Hattie Fields', 'iPhone X 512GB', 1300),
(6, 'Lamar Clayton', 'Macbook Pro i7/16GB/1T-SSD', 1999),
(7, 'James Watts', 'iPhone X 512GB', 1300),
(8, 'Darrel Cruz', 'iPhone X 512GB', 1300),
(9, 'James Watts', 'Galaxy Note 9 512GB', 899),
(10, 'Sergio Maldonado', 'iPhone X 512GB', 1300),
(11, 'Hattie Fields', 'Galaxy Note 9 512GB', 899),
(12, 'Lee Bowen', 'iPhone X 512GB', 1300),
(13, 'Kristi Freeman', 'Galaxy Note 9 512GB', 899),
(14, 'Lamar Clayton', 'iPhone X 512GB', 1300),
(15, 'Lee Bowen', 'Macbook Pro i7/16GB/1T-SSD', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'iPhone X 256GB', 999),
(2, 'iPhone X 512GB', 1300),
(3, 'Galaxy Note 9 64GB', 735),
(4, 'Galaxy Note 9 512GB', 899),
(5, 'Macbook Pro i7/16GB/1T-SSD', 1999),
(6, 'Macbook Pro i9/32GB/2T-SSD', 2999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'Aa123456'),
(2, 'guest', 'Aa123456');
COMMIT;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `transaction_details` (
  `sno` int(5) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transaction_details` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'AAA', 'BBB', 300, '2022-11-20 12:59:59'),
(2, 'CCC', 'DDD', 550, '2022-11-20 13:35:21'),
(3, 'EEE', 'CCC', 200, '2022-11-20 15:19:44'),
(4, 'DDD', 'AAA', 400, '2022-11-20 16:00:29'),
(5, 'FFF', 'EEE', 700, '2022-11-20 17:08:00'),
(6, 'AAA', 'DDD', 100, '2022-11-20 17:55:09'),
(7, 'CCC', 'AAA', 200, '2022-11-20 18:21:27'),
(8, 'GGG', 'EEE', 600, '2022-11-20 19:15:11');

CREATE TABLE `users_details` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users_details` (`id`, `name`, `email`, `balance`) VALUES
(1, 'AAA', 'aaa@gmail.com', 63000),
(2, 'BBB', 'bbb@gmail.com', 89980),
(3, 'CCC', 'ccc@gmail.com', 52446),
(4, 'DDD', 'ddd@gmail.com', 78000),
(5, 'EEE', 'eee@gmail.com', 24000),
(6, 'FFF', 'fff@gmail.com', 60000),
(7, 'GGG', 'ggg@gmail.com', 69024);

ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `transaction_details`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

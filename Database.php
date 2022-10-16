CREATE TABLE `live_records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `live_records`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `live_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

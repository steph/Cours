CREATE TABLE IF NOT EXISTS `phone` (
  `id_users` int(11) NOT NULL,
  `numeros` varchar(12) NOT NULL,
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `phone` (`id_users`, `numeros`) VALUES(6, '456456');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(6, '15346516');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(8, '56464646');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(8, '56456');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(7, '45645674');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(10, '47786546456');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(6, '456456456');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(9, '456456456456');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(8, '4564564666');
INSERT INTO `phone` (`id_users`, `numeros`) VALUES(6, '45645645');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES(6, 'sdf', 'sdf');
INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES(7, 'Toto', 'Albert');
INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES(8, 'Tota', 'John');
INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES(9, 'Toto', 'Genevieve');
INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES(10, 'Tati', 'Unique');


ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_3` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

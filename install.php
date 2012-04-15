<?php

require_once('_/config.php');

if (mysql_query('CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `tag` text NOT NULL,
  PRIMARY KEY (`id`)
)')) {
	echo "The Simple(st) URL shortner has been installed. Go ahead and start using it.";
}
else {
	"Something wrong with the database connection. Please check the config file located in the _ (underscore) directory";
}

?>
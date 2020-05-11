SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`,`username`, `password`) VALUES (1,'admin','admin');

CREATE TABLE `ictprogramming` (
  `progid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ictprogramming` (`progid`, `lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296','Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'TVL-Programming');

CREATE TABLE `ictcss` (
  `cssid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ictcss` (`cssid`, `firstname`,`lrn`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1, '136633070296','Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'TVL-CSS');

CREATE TABLE `cookery` (
  `cookeryid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cookery` (`cookeryid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296', 'Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'TVL-Cookery');

CREATE TABLE `dressmaking` (
  `dressmakingid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dressmaking` (`dressmakingid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296', 'Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'TVL-Dressmaking');

CREATE TABLE `eim` (
  `eimid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `eim` (`eimid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296', 'Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'TVL-EIM');

CREATE TABLE `humms` (
  `hummsid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `humms` (`hummsid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296', 'Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'humms');

CREATE TABLE `abm` (
  `abmid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `abm` (`abmid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1,'136633070296', 'Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'abm');

CREATE TABLE `stem` (
  `stemid` int(11) NOT NULL,
  `lrn` bigint(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `stem` (`stemid`,`lrn`, `firstname`, `lastname`, `middlename`, `date_of_birth`, `gender`, `school`, `section`, `strand`) VALUES
(1, '136633070296','Christian', 'Dalagan', 'Alabat', '1997-02-26', 'Male', 'Dapdap High School', 'section', 'stem');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ictprogramming`
  ADD PRIMARY KEY (`progid`);

ALTER TABLE `ictcss`
    ADD PRIMARY KEY (`cssid`);

ALTER TABLE `cookery`
    ADD PRIMARY KEY (`cookeryid`);

ALTER TABLE `dressmaking`
    ADD PRIMARY KEY (`dressmakingid`);

ALTER TABLE `eim`
    ADD PRIMARY KEY (`eimid`);

  ALTER TABLE `humms`
  ADD PRIMARY KEY (`hummsid`);

  ALTER TABLE `abm`
  ADD PRIMARY KEY (`abmid`);

  ALTER TABLE `stem`
  ADD PRIMARY KEY (`stemid`);

  ALTER TABLE `admin`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `ictprogramming`
  MODIFY `progid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  ALTER TABLE `ictcss`
    MODIFY `cssid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

    ALTER TABLE `cookery`
      MODIFY `cookeryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

      ALTER TABLE `dressmaking`
        MODIFY `dressmakingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

        ALTER TABLE `eim`
          MODIFY `eimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  ALTER TABLE `humms`
  MODIFY `hummsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  ALTER TABLE `abm`
  MODIFY `abmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  ALTER TABLE `stem`
  MODIFY `stemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  COMMIT;

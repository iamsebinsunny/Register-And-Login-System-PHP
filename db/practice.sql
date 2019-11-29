CREATE TABLE users (
	uid int(11) AUTO_INCREMENT NOT NULL,
    fName varchar(100) NOT NULL,
    lName varchar(100) NOT NULL,
    uName varchar (100) NOT NULL,
    phoneNo int(13) NOT NULL,
    uMail TINYTEXT NOT NULL,
    pass LONGTEXT NOT NULL,
    
    PRIMARY KEY (uid)

);

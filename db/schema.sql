# DROP DATABASE IF EXISTS barbershop;
# CREATE DATABASE IF NOT EXISTS barbershop COLLATE utf8_general_ci;

USE barbershop;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE Appointment;
DROP TABLE Clients;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE Clients
(
    email varchar(50) NOT NULL
        PRIMARY KEY,

    name VARCHAR(255) NULL,
    phone_num VARCHAR(9) NOT NULL,
    birthday DATE NOT NULL,
    password VARCHAR(127) NOT NULL
);


CREATE TABLE Appointment
(
    id INT NOT NULL AUTO_INCREMENT
        PRIMARY KEY,

    appoint_date DATETIME NOT NULL,
    clients_email VARCHAR(50) NOT NULL,
    name VARCHAR(255) NULL,
    barber VARCHAR(255) NOT NULL,
    service VARCHAR(255) NULL,
    price DECIMAL NOT NULL
);

-- in the case we don't want to appoint unregistered users

-- ALTER TABLE Appointment ADD
--     (CONSTRAINT FK_appoint_client FOREIGN KEY (clients_email)
--     REFERENCES Clients (email)
--     ON DELETE NO ACTION);

# -- ---------------------------------- INSERT THE DATA ----------------------------------

-- INSERT INTO barbershop.Clients (email, name, phone_num, birthday, password)
-- VALUES ('grebegor@bk.ru', 'Yegor Greb', '773945394', '1998-09-06', 'qwerty'); -- ATTENTION: PASSWORD ISN'T SALTED
--
-- INSERT INTO barbershop.Clients (email, name, phone_num, birthday, password)
-- VALUES ('klient1@seznam.cz', 'John Soer', '773945876', '1989-12-08', 'klient1'); -- ATTENTION: PASSWORD ISN'T SALTED
--
-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2022-10-31 13:00:00',  'grebegor@bk.ru', 'Yegor', 'Farhad', 'Long Hair & Beard ', 600);
--
-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-01-01 10:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-01-27 12:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-02-03 11:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-02-24 16:30:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-03-13 17:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-03-27 13:30:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-04-10 15:45:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-04-22 10:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-05-05 18:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-05-23 13:30:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-06-10 11:00:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);

-- INSERT INTO barbershop.Appointment(appoint_date, clients_email, name, barber, service, price)
-- VALUES ('2023-06-27 14:30:00',  'klient1@seznam.cz', 'Jiri', 'Kirill', 'Haircut', 800);
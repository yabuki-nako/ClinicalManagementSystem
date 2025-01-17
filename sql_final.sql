create database cms_db;
use cms_db;

CREATE TABLE `patient_detail` (
  `pId` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pCellphone` varchar(15) NOT NULL,
  `pGender` varchar(10) NOT NULL,
  `pBirthday` date NOT NULL,
  `paddress` varchar(255) NOT NULL,
  PRIMARY KEY (`pId`)
);
-- select * from patient_detail;
CREATE TABLE `specialties` (
  `id` int NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `specialties` (`id`, `sname`) VALUES
(1, 'Accident and emergency medicine'),
(2, 'Allergology'),
(3, 'Anaesthetics'),
(4, 'Biological hematology'),
(5, 'Cardiology'),
(6, 'Child psychiatry'),
(7, 'Clinical biology'),
(8, 'Clinical chemistry'),
(9, 'Clinical neurophysiology'),
(10, 'Clinical radiology'),
(11, 'Dental, oral and maxillo-facial surgery'),
(12, 'Dermato-venerology'),
(13, 'Dermatology'),
(14, 'Endocrinology'),
(15, 'Gastro-enterologic surgery'),
(16, 'Gastroenterology'),
(17, 'General hematology'),
(18, 'General Practice'),
(19, 'General surgery'),
(20, 'Geriatrics'),
(21, 'Immunology'),
(22, 'Infectious diseases'),
(23, 'Internal medicine'),
(24, 'Laboratory medicine'),
(25, 'Maxillo-facial surgery'),
(26, 'Microbiology'),
(27, 'Nephrology'),
(28, 'Neuro-psychiatry'),
(29, 'Neurology'),
(30, 'Neurosurgery'),
(31, 'Nuclear medicine'),
(32, 'Obstetrics and gynecology'),
(33, 'Occupational medicine'),
(34, 'Ophthalmology'),
(35, 'Orthopaedics'),
(36, 'Otorhinolaryngology'),
(37, 'Paediatric surgery'),
(38, 'Paediatrics'),
(39, 'Pathology'),
(40, 'Pharmacology'),
(41, 'Physical medicine and rehabilitation'),
(42, 'Plastic surgery'),
(43, 'Podiatric Medicine'),
(44, 'Podiatric Surgery'),
(45, 'Psychiatry'),
(46, 'Public health and Preventive Medicine'),
(47, 'Radiology'),
(48, 'Radiotherapy'),
(49, 'Respiratory medicine'),
(50, 'Rheumatology'),
(51, 'Stomatology'),
(52, 'Thoracic surgery'),
(53, 'Tropical medicine'),
(54, 'Urology'),
(55, 'Vascular surgery'),
(56, 'Venereology');

create table docsched(
	appTime int primary key not null,
    time_schedule varchar(50) not null);
insert into docsched (appTime,time_schedule) values(1, '8:00 AM - 9:00 PM'),(2, '9:00 AM - 10:00 PM'),(3, '10:00 AM - 11:00 PM'),(4, '11:00 AM - 12:00 PM'),(5, '1:00 PM - 2:00 PM'),(6, '2:00 PM - 3:00 PM'),(7, '3:00 PM - 4:00 PM'),(8, '4:00 PM - 5:00 PM'),(9, '5:00 PM - 6:00 PM');
CREATE TABLE IF NOT EXISTS `doctor` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `docemail` varchar(255) DEFAULT NULL,
  `docname` varchar(255) DEFAULT NULL,
  `docpassword` varchar(255) DEFAULT NULL,
  `doctel` varchar(15) DEFAULT NULL,
  `specialties` int(2) DEFAULT NULL,
  PRIMARY KEY (`docid`),
  FOREIGN KEY (specialties) REFERENCES specialties(ID)
);
select * from doctor;	
-- SELECT * FROM doctor WHERE specialties = 31 AND docname = "Mary Johnson";



create table appointments(
	appointment_ID int(11) primary key auto_increment not 	null,
    docid int(11) not null,
    pId int (11) not null,
    appDate date not null,
	appTime int not null,
    App_status varchar(12) ,
	 FOREIGN KEY (docid) REFERENCES doctor(docid),
 	FOREIGN KEY (pId) REFERENCES patient_detail(pId),
   FOREIGN KEY (appTime) REFERENCES docsched(appTime)
);
-- drop table docsched;
-- drop table appointments;



-- SELECT * FROM APPOINTMENTS;
-- INSERT INTO appointments (docid, pId,  appDate, apptime) VALUES (3, 1,'2022-06-1',4);
-- SELECT appointment_ID FROM appointments ;

-- select * from patient_detail;
INSERT INTO `doctor` ( `docemail`, `docname`, `docpassword`, `doctel`, `specialties`) VALUES
("john@example.com", "John Smith", "123",1234567890, 30),
("mary@example.com", "Mary Johnson", "123", 2345678901, 31),
("alex@example.com", "Alex Brown",  "123",3456789012, 32),
("sarah@example.com", "Sarah Davis",  "123",4567890123, 33),
("michael@example.com", "Michael Wilson", "123", 5678901234, 34),
("jessica@example.com", "Jessica Taylor", "123", 6789012345, 35),
("david@example.com", "David Martinez", "123", 7890123456, 29),
("lisa@example.com", "Lisa Anderson", "123", 8901234567, 30),
("robert@example.com", "Robert Thomas", "123", 9012345678, 31),
("emily@example.com", "Emily Jackson", "123", 0123456789, 32),
("james@example.com", "James White", "123", 1234567890, 33),
("olivia@example.com", "Olivia Harris", "123", 2345678901, 34),
("matthew@example.com", "Matthew Clark", "123",3456789012, 35),
("ava@example.com", "Ava Lewis",  "123",4567890123, 29),
("william@example.com", "William Lee",  "123",5678901234, 30),
("sophia@example.com", "Sophia Scott", "123", 6789012345, 31),
("jacob@example.com", "Jacob Green", "123", 7890123456, 32),
("isabella@example.com", "Isabella Adams", "123", 8901234567, 33),
("ethan@example.com", "Ethan Baker",  "123",9012345678, 34),
("mia@example.com", "Mia Murphy",  "123",0123456789, 35);

create table admin_account(
	admin_id int primary key auto_increment not null,
    email varchar(50) not null,
    password varchar (255) not null

);

insert into admin_account (email,password) values ('cyrix123@gmail.com','123456');
SELECT doctor.docid, doctor.docemail, doctor.docname, doctor.doctel, specialties.sname
FROM doctor
JOIN specialties ON doctor.specialties = specialties.id;

-- SELECT doctor.docid, doctor.docemail, doctor.docname, doctor.docpassword, doctor.doctel, specialties.sname
-- FROM doctor
-- JOIN specialties ON doctor.specialties = specialties.id;

-- SELECT doctor.*, specialties.sname
-- FROM doctor
-- JOIN specialties ON doctor.specialties = specialties.id;
-- SELECT d.docid, d.docname, s.sname
-- FROM doctor d
-- JOIN specialties s ON d.specialties = s.ID
-- WHERE s.sname = Obstetrics;

-- SELECT d.docid, d.docname, s.sname, d.docemail, d.doctel
--            FROM doctor d
--            JOIN specialties s ON d.specialties = s.ID
--            WHERE s.sname = 'Nuclear medicine';
--            
-- SELECT doctor.docid, doctor.docemail, doctor.docname, doctor.doctel, specialties.sname
--           FROM doctor
--           JOIN specialties ON doctor.specialties = specialties.id where sname = sname;
--           SELECT doctor.docid, doctor.docemail, doctor.docname, doctor.doctel, specialties.sname
--             FROM doctor
--             JOIN specialties ON doctor.specialties = specialties.id 
--             WHERE sname = specialties.sname;
-- SELECT a.appointment_ID, a.docid, d.docname, a.pid, a.appDate, a.appTime, a.App_status
-- FROM appointments a
-- JOIN doctor d ON a.docid = d.docid;

-- SELECT  doctor.docid, doctor.docname, specialties.id,specialties.sname
-- FROM doctor
-- JOIN specialties ON doctor.specialties = specialties.id;

-- SELECT a.appointment_ID, a.docid, d.docname, a.pid, a.appDate, a.appTime, a.App_status
--       FROM appointments a
--       JOIN doctor d ON a.docid = d.docid ;
--       
-- SELECT
--     appointments.appointment_ID,
--     doctor.docid,
--     doctor.docname,
--     patient_detail.pId,
--     patient_detail.pname,
--     appointments.appDate,
--     appointments.appTime,
--     docsched.time_schedule,
--     appointments.App_status
-- FROM
--     appointments
--     INNER JOIN doctor ON appointments.docid = doctor.docid
--     INNER JOIN patient_detail ON appointments.pId = patient_detail.pId
--     INNER JOIN docsched ON appointments.appTime = docsched.appTime;
--     
-- 			SELECT	
-- 			appointments.appointment_ID,
-- 			doctor.docname,
-- 			specialties.sname,
-- 			patient_detail.pId,
-- 			patient_detail.pname,
-- 			appointments.appDate,
-- 			appointments.appTime,
-- 			docsched.time_schedule,
-- 			appointments.App_status
-- 		FROM
-- 			appointments
-- 			INNER JOIN doctor ON appointments.docid = doctor.docid
-- 			INNER JOIN specialties ON doctor.specialties = specialties.id
-- 			INNER JOIN patient_detail ON appointments.pId = patient_detail.pId
-- 			INNER JOIN docsched ON appointments.appTime = docsched.appTime;
            
	
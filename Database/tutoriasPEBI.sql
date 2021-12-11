drop database tutoriasPEBI;

CREATE SCHEMA IF NOT EXISTS tutoriaspebi DEFAULT CHARACTER SET utf8 ;
USE tutoriaspebi ;

-- -----------------------------------------------------
-- user
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS user (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL
 )ENGINE = InnoDB;


-- -----------------------------------------------------
-- teacher
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS teacher (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  identificacion INT NOT NULL,
  name VARCHAR(45) NOT NULL,
  id_user INT NOT NULL,
 FOREIGN KEY (id_user) REFERENCES user(id) 
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- administrator
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS administrator (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  id_user INT NOT NULL,
 FOREIGN KEY (id_user) REFERENCES user(id) 
 )ENGINE = InnoDB;


-- -----------------------------------------------------
-- career
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS career (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  snies INT NULL,
  name VARCHAR(45) NOT NULL,
  id_administrator INT NOT NULL,
  FOREIGN KEY(id_administrator) REFERENCES administrator(id)
  )ENGINE = InnoDB;


-- -----------------------------------------------------
-- course
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS course (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  id_career INT NOT NULL,
  FOREIGN KEY (id_career) REFERENCES career(id)
  )ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table student
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS student (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  identificacion INT NOT NULL,
  name VARCHAR(45) NOT NULL,
  semester INT  NULL,
  id_user INT NOT NULL,
  id_career INT NOT NULL,
  FOREIGN KEY (id_user) REFERENCES user(id),
  FOREIGN KEY (id_career) REFERENCES career(id) 
)ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table tutoring
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tutoring (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  description TEXT NOT NULL,
  id_teacher INT NOT NULL,
  id_course INT NOT NULL,
 FOREIGN KEY (id_teacher) REFERENCES teacher(id),
 FOREIGN KEY (id_course) REFERENCES course(id)
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table student_request_tutoring
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS student_request_tutoring (
  fecha DATE NOT NULL,
  id_student INT NOT NULL,
  id_tutoring INT NOT NULL,
  state ENUM('No probado', 'Aprobado','Proceso') NOT NULL,
 FOREIGN KEY (id_student) REFERENCES student(id),
 FOREIGN KEY (id_tutoring) REFERENCES tutoring(id)
)ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table files
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS files (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  description TEXT NOT NULL,
  file BLOB NOT NULL
)ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table content
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS content (
id_tutoring INT NOT NULL,
id_files INT NOT NULL,
FOREIGN KEY (id_tutoring) REFERENCES tutoring(id),
FOREIGN KEY (id_files) REFERENCES files(id)
)ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table schedule
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS schedule (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  opening_date DATE NOT NULL,
  closing_date DATE NULL,
  url_calendar TEXT NOT NULL,
  salon INT NULL,
  type_schedule TEXT NULL,
  id_tutoring INT NOT NULL,
  FOREIGN KEY (id_tutoring) REFERENCES tutoring(id)
  )ENGINE = InnoDB;
  
  
-- -----------------------------------------------------
-- Table studens_tutoring 
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS studens_has_tutoring (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 id_student INT NOT NULL,
 id_tutoring INT NOT NULL,
 FOREIGN KEY (id_tutoring) REFERENCES tutoring(id),
 FOREIGN KEY (id_student) REFERENCES student(id)
)ENGINE = InnoDB; 
  
  
-- -----------------------------------------------------
-- Table pin
-- -----------------------------------------------------  
CREATE TABLE IF NOT EXISTS pin (
 id VARCHAR(10) NOT NULL PRIMARY KEY,
 date DATE NOT NULL
)ENGINE = InnoDB; 
  
-- -----------------------------------------------------
-- Table tracing
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tracing (
 id_studens_has_tutoring INT NOT NULL,
 id_pin VARCHAR(10) NOT NULL,
 FOREIGN KEY (id_studens_has_tutoring) REFERENCES studens_has_tutoring(id),
 FOREIGN KEY (id_pin) REFERENCES pin(id)
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table request_tutorials
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS request_tutoring (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  description TEXT NOT NULL,
  id_course INT NOT NULL,
  id_user INT NOT NULL,
  concept ENUM('dificultad', 'adquirir conocimiento') NOT NULL,
  state ENUM('No probado', 'Aprobado','Proceso') NOT NULL,
  FOREIGN KEY (id_course) REFERENCES course(id),
  FOREIGN KEY (id_user) REFERENCES user(id)
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table request
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS request (
  id_user INT NOT NULL,
  id_request_tutoring INT NOT NULL,
  date DATE NOT NULL,
  FOREIGN KEY (id_user) REFERENCES user(id),
 FOREIGN KEY (id_request_tutoring) REFERENCES request_tutoring(id)
)ENGINE = InnoDB;


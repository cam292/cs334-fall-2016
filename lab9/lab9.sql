CREATE TABLE customerContact (
id INT PRIMARY KEY,
lastName VARCHAR(15),
firstName VARCHAR(15),
password VARCHAR(15),
faceBookUrl VARCHAR(40),
email VARCHAR(20),
cellPhone VARCHAR(15),
homePhone VARCHAR(15),
addr1 VARCHAR(30),
addr2 VARCHAR(5),
city VARCHAR(21),
state VARCHAR(12),
zip CHAR(5),
country VARCHAR(20)
);

INSERT INTO customerContact
VALUES
(0,'Donald','Trump','americagreat','facebook.com/thedonald','thedonald@trump.com','111-111-1111','222-222-2222','725 5th Ave','','New York','New York','10022','United States'),
(1,'Pence','Mike','vpforu','facebook.com/Mike.Pence','mike@trump.com','593-483-1234','684-214-573','200 W Washington St','','Indianapolis','Indiana','46204','United States'),
(2,'Clinton','Hillary','secretpassword','facebook.com/hilldog','hillary@downwithtrump.com','000-000-0000','123-459-7890','120 West 45th Street','','New York','New York','10036','United States'),
(3,'Johnson','Gary','usausa1234','facebook.com/garbear','gary@johnsonweld.com','098-765-4321','098-765-4321','724 5th Ave','','New York','New York','10022','United States'),
(4,'Stein','Jill','partygreen','facebook.com/drjillstein','jilly@steinjill.com','333-333-2222','222-222-3333','233 S Wacker D','','Chicago','Illinois','60290','United States'),
(5,'Nye','Bill','science','facebook.com/thescienceguy','bill@scienceguy.com','123-321-1232','445-543-2395','4742 42nd Avenue SW','143','Seattle','Washington','98116','United States'),
(6,'Mary','Elizabeth','iruleyou','facebook.com/QueenElizabeth','queen@everywhere.com','365-793-3483','365-629-4923','SW1A','','London','','1AA','United Kingdom'),
(7,'Mazzotta','Craig','webdesign','facebook.com/Craig.Mazzotta','cam292@pitt.edu','724-841-3483','724-940-4040','322 Mckee Pl','12','Pittsburgh','Pennsylvania','15213','United States'),
(8,'Crosby','Sidney','penguins87','facebook.com/Sid.the.kid','scrosby@penguins.com','412-444-4567','412-444-4567','123 Hockey Lane','','Sewickley','Pennsylvania','15143','United States'),
(9,'Lemieux','Mario','penguins66','facebook.com/Mario.Lemieux','mario@penguins.com','412-576-3469','412-555-7357','120 Hockey Lane','','Sewickley','Pennsylvania','15143','United States');

SELECT * FROM customerContact;

SELECT * FROM customerContact WHERE country = "United Kingdom";

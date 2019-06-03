insert into artista (idArtista, nome, cognome, descrizione, image) values			-- il formato date da problemi
(1,"Brad", "Pitt", "An actor and producer known as much for his versatility as he is for his handsome face, Golden Globe-winner Brad Pitt's most widely recognized role may be Tyler Durden in Fight Club (1999).",NULL),
(2,"Jennifer","Aniston","Jennifer Aniston was born in Sherman Oaks, California, to actors John Aniston and Nancy Dow. Her father is Greek, and her mother was of English, Irish, Scottish, and Italian descent. Jennifer spent a year of her childhood living in Greece with her family. Her family then relocated to New York City where her parents divorced when she was nine. Jennifer was raised by her mother and her father landed a role, as 'Victor Kiriakis', on the daytime soap Il tempo della nostra vita (1965).",NULL),
(3,"Quentin", "Tarantino"," was born in Knoxville, Tennessee. His father, Tony Tarantino, is an Italian-American actor and musician from New York, and his mother, Connie (McHugh), is a nurse from Tennessee. Quentin moved with his mother to Torrance, California, when he was four years old.", NULL),
(4, "Martin","Scorsese","Martin Charles Scorsese was born on November 17, 1942 in Queens, New York City, to Catherine Scorsese (née Cappa) and Charles Scorsese, who both worked in Manhattan's garment district, and whose families both came from Palermo, Sicily. He was raised in the neighborhood of Little Italy, which later provided the inspiration for several of his films. ", NULL)

insert into utente (nickname, nome, cognome, foto, biografia, email, password) values  -- password con hashing?
("culo","alborbio","nanni",null,"sono un culo culo","alboborbio@gamil.org","HQn3Wzu" ),
("nando","ginepro","gianni",null,"sono un nannino","nando@gamil.edu","Hibne43sveyT0" )

insert into serietv(idSerietv,n_stagioni,durata_media) VALUES
(1,4,15),
(2,2,30),
(3,9,15),
(4,7,45)

INSERT INTO recensione(idRecensione,FK_utente,voto,commento,FK_elemento) VALUES		-- prima creo elemento
(1,"nando",6,"sci piasce",1 ),
(2,"nando",9,"MAH",2 ),
(3,"culo",2,"non male",1 )

INSERT Into elemento (idElemento,titolo,immagine,anno_pubblicazione,descrizione,FK_tipo) VALUES
(1,"friends",NULL,1990,"è una serie bella ma vecchiotta quindi meh",4),
(2,"non lo so",null,1800,"non so più che mettere",4),
(3,"Game of thrones",null,2013,"è partita bene ma l'ultima stagione fa schifo",4)
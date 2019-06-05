-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Mag 27, 2019 alle 13:56
-- Versione del server: 10.1.19-MariaDB
-- Versione PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: seagulldb
--
create DATABASE if not exists seagulldb
-- --------------------------------------------------------

--
-- Struttura della tabella artista
--

CREATE TABLE IF NOT EXISTS artista (
  idArtista int(11) NOT NULL,
  nome varchar(60) NOT NULL,
  cognome varchar(60) NOT NULL,
  descrizione varchar(1000) DEFAULT NULL,
  image blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella artista
--

INSERT INTO artista (idArtista, nome, cognome, descrizione, image) VALUES
(1, 'Brad', 'Pitt', 'An actor and producer known as much for his versatility as he is for his handsome face, Golden Globe-winner Brad Pitt''s most widely recognized role may be Tyler Durden in Fight Club (1999).', NULL),
(2, 'Jennifer', 'Aniston', 'Jennifer Aniston was born in Sherman Oaks, California, to actors John Aniston and Nancy Dow. Her father is Greek, and her mother was of English, Irish, Scottish, and Italian descent. Jennifer spent a year of her childhood living in Greece with her family. Her family then relocated to New York City where her parents divorced when she was nine. Jennifer was raised by her mother and her father landed a role, as ''Victor Kiriakis'', on the daytime soap Il tempo della nostra vita (1965).', NULL),
(3, 'Quentin', 'Tarantino', ' was born in Knoxville, Tennessee. His father, Tony Tarantino, is an Italian-American actor and musician from New York, and his mother, Connie (McHugh), is a nurse from Tennessee. Quentin moved with his mother to Torrance, California, when he was four years old.', NULL),
(4, 'Martin', 'Scorsese', 'Martin Charles Scorsese was born on November 17, 1942 in Queens, New York City, to Catherine Scorsese (née Cappa) and Charles Scorsese, who both worked in Manhattan''s garment district, and whose families both came from Palermo, Sicily. He was raised in the neighborhood of Little Italy, which later provided the inspiration for several of his films. ', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella canzone
--

CREATE TABLE if not exists canzone (
  idCanzone int(11) NOT NULL,
  durata time NOT NULL,
  nome_album varchar(200) DEFAULT NULL,
  testo text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella canzone_artista
--

CREATE TABLE if not exists canzone_artista (
  FK_tipo int(11) NOT NULL,
  FK_artista int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella elemento
--

CREATE TABLE if not exists elemento (
  idElemento int(11) NOT NULL,
  titolo varchar(100) DEFAULT NULL,
  immagine blob,
  anno_pubblicazione date DEFAULT NULL,
  descrizione varchar(5000) DEFAULT NULL,
  FK_tipo int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella film
--

CREATE TABLE if not exists film (
  idFilm int(11) NOT NULL,
  durata time NOT NULL,
  casa_produzione varchar(80) NOT NULL,
  lingua_originale varchar(50) NOT NULL,
  incasso float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella film_artista
--

CREATE TABLE if not exists film_artista (
  FK_artista int(11) NOT NULL,
  FK_film int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella film_regista
--

CREATE TABLE if not exists film_regista (
  FK_film int(11) NOT NULL,
  FK_artista int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella libro
--

CREATE TABLE if not exists libro (
  idLibro int(11) NOT NULL,
  n_pagine int(11) NOT NULL,
  casa_ed varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella libro_artista
--

CREATE TABLE if not exists libro_artista (
  FK_tipo int(11) NOT NULL,
  FK_artista int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella lista
--

CREATE TABLE if not exists lista (
  idLista int(11) NOT NULL,
  FK_utente varchar(20) DEFAULT NULL,
  FK_elemento int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella recensione
--

CREATE TABLE if not exists recensione (
  idRecensione int(11) NOT NULL,
  FK_utente varchar(20) DEFAULT NULL,
  voto int(11) DEFAULT NULL,
  commento varchar(5000) DEFAULT NULL,
  FK_elemento int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella serietv
--

CREATE TABLE if not exists serietv (
  idSerietv int(11) NOT NULL,
  n_stagioni int(11) NOT NULL,
  durata_media time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella serietv_artista
--

CREATE TABLE if not exists serietv_artista (
  FK_serietv int(11) NOT NULL,
  FK_artista int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella serietv_regista
--

CREATE TABLE if not exists serietv_regista (
  FK_serietv int(11) NOT NULL,
  FK_artista int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella utente
--

CREATE TABLE if not exists utente (
  nickname varchar(20) NOT NULL,
  nome varchar(30) DEFAULT NULL,
  cognome varchar(30) DEFAULT NULL,
  foto blob,
  biografia varchar(1000) DEFAULT NULL,
  email varchar(30) DEFAULT NULL,
  password varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella utente
--

INSERT INTO utente (nickname, nome, cognome, foto, biografia, email, password) VALUES
('culo', 'alborbio', 'nanni', NULL, 'sono un culo culo', 'alboborbio@gamil.org', 'HQn3Wzu'),
('nando', 'ginepro', 'gianni', NULL, 'sono un nannino', 'nando@gamil.edu', 'Hibne43sveyT0');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle artista
--
ALTER TABLE artista
  ADD PRIMARY KEY (idArtista),
  ADD UNIQUE KEY idArtista_UNIQUE (idArtista);

--
-- Indici per le tabelle canzone
--
ALTER TABLE canzone
  ADD PRIMARY KEY (idCanzone),
  ADD UNIQUE KEY idCanzone_UNIQUE (idCanzone);

--
-- Indici per le tabelle canzone_artista
--
ALTER TABLE canzone_artista
  ADD PRIMARY KEY (FK_tipo,FK_artista),
  ADD KEY FK_artista_idx (FK_artista);

--
-- Indici per le tabelle elemento
--
ALTER TABLE elemento
  ADD PRIMARY KEY (idElemento),
  ADD UNIQUE KEY FK_tipo_UNIQUE (FK_tipo);

--
-- Indici per le tabelle film
--
ALTER TABLE film
  ADD PRIMARY KEY (idFilm),
  ADD UNIQUE KEY idFilm_UNIQUE (idFilm);

--
-- Indici per le tabelle film_artista
--
ALTER TABLE film_artista
  ADD PRIMARY KEY (FK_artista,FK_film),
  ADD KEY FK_film_idx (FK_film);

--
-- Indici per le tabelle film_regista
--
ALTER TABLE film_regista
  ADD PRIMARY KEY (FK_film,FK_artista),
  ADD KEY FK_artista_idx (FK_artista);

--
-- Indici per le tabelle libro
--
ALTER TABLE libro
  ADD PRIMARY KEY (idLibro),
  ADD UNIQUE KEY idLibro_UNIQUE (idLibro);

--
-- Indici per le tabelle libro_artista
--
ALTER TABLE libro_artista
  ADD PRIMARY KEY (FK_tipo,FK_artista),
  ADD KEY FK_atrista_idx (FK_artista);

--
-- Indici per le tabelle lista
--
ALTER TABLE lista
  ADD PRIMARY KEY (idLista),
  ADD KEY FK_utente_idx (FK_utente),
  ADD KEY FK_elemento_idx (FK_elemento);

--
-- Indici per le tabelle recensione
--
ALTER TABLE recensione
  ADD PRIMARY KEY (idRecensione),
  ADD UNIQUE KEY idRecensione_UNIQUE (idRecensione),
  ADD KEY FK_utente_idx (FK_utente),
  ADD KEY FK_elemento_idx (FK_elemento);

--
-- Indici per le tabelle serietv
--
ALTER TABLE  serietv
  ADD PRIMARY KEY (idSerietv),
  ADD UNIQUE KEY idSerie_tv_UNIQUE (idSerietv);

--
-- Indici per le tabelle serietv_artista
--
ALTER TABLE serietv_artista
  ADD PRIMARY KEY (FK_serietv,FK_artista),
  ADD KEY FK_artista_idx (FK_artista);

--
-- Indici per le tabelle serietv_regista
--
ALTER TABLE serietv_regista
  ADD PRIMARY KEY (FK_serietv,FK_artista),
  ADD KEY FK_artista_idx (FK_artista);

--
-- Indici per le tabelle utente
--
ALTER TABLE utente
  ADD PRIMARY KEY (nickname);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella artista
--
ALTER TABLE artista
  MODIFY idArtista int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la tabella canzone
--
ALTER TABLE canzone
  MODIFY idCanzone int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella elemento
--
ALTER TABLE elemento
  MODIFY idElemento int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella film
--
ALTER TABLE film
  MODIFY idFilm int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella libro
--
ALTER TABLE libro
  MODIFY idLibro int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella recensione
--
ALTER TABLE recensione
  MODIFY idRecensione int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella serietv
--
ALTER TABLE serietv
  MODIFY idSerietv int(11) NOT NULL AUTO_INCREMENT;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella canzone
--
ALTER TABLE canzone
  ADD CONSTRAINT idCanzone FOREIGN KEY (idCanzone) REFERENCES elemento (FK_tipo) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella canzone_artista
--
ALTER TABLE canzone_artista
  ADD CONSTRAINT FK_artista2 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_tipo2 FOREIGN KEY (FK_tipo) REFERENCES canzone (idCanzone) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella film
--
ALTER TABLE film
  ADD CONSTRAINT idFilm FOREIGN KEY (idFilm) REFERENCES elemento (FK_tipo) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella film_artista
--
ALTER TABLE film_artista
  ADD CONSTRAINT FK_artista5 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_film5 FOREIGN KEY (FK_film) REFERENCES film (idFilm) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella film_regista
--
ALTER TABLE film_regista
  ADD CONSTRAINT FK_artista4 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_film4 FOREIGN KEY (FK_film) REFERENCES film (idFilm) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella libro
--
ALTER TABLE libro
  ADD CONSTRAINT idLibro FOREIGN KEY (idLibro) REFERENCES elemento (FK_tipo) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella libro_artista
--
ALTER TABLE libro_artista
  ADD CONSTRAINT FK_atrista3 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_tipo3 FOREIGN KEY (FK_tipo) REFERENCES libro (idLibro) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella lista
--
ALTER TABLE lista
  ADD CONSTRAINT FK_elemento FOREIGN KEY (FK_elemento) REFERENCES elemento (idElemento) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_utente FOREIGN KEY (FK_utente) REFERENCES utente (nickname) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella recensione
--
ALTER TABLE recensione
  ADD CONSTRAINT FK_elemento2 FOREIGN KEY (FK_elemento) REFERENCES elemento (idElemento) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_utente2 FOREIGN KEY (FK_utente) REFERENCES utente (nickname) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella serietv
--
ALTER TABLE serietv
  ADD CONSTRAINT idSerietv FOREIGN KEY (idSerietv) REFERENCES elemento (FK_tipo) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella serietv_artista
--
ALTER TABLE serietv_artista
  ADD CONSTRAINT FK_artista6 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_serietv6 FOREIGN KEY (FK_serietv) REFERENCES serietv (idSerietv) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella serietv_regista
--
ALTER TABLE serietv_regista
  ADD CONSTRAINT FK_artista7 FOREIGN KEY (FK_artista) REFERENCES artista (idArtista) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT FK_serietv7 FOREIGN KEY (FK_serietv) REFERENCES serietv (idSerietv) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

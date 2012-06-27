-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: 27 giu, 2012 at 09:14 PM
-- Versione MySQL: 5.5.9
-- Versione PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lamdb`
--
CREATE DATABASE `lamdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lamdb`;

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descrizione` text,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` VALUES(21, 'Elettronica e informatica', 'Articoli di informatica ed elettronica di vario tipo.', 'img4fe3323db306f.jpg');
INSERT INTO `categorie` VALUES(22, 'Libri', 'Libri di qualsiasi genere (romanzi/thriller/manualistica, ecc.).', 'img4fe3326c802bc.jpg');
INSERT INTO `categorie` VALUES(23, 'Articoli per la casa', 'Articoli per la casa di vario genere.', 'img4fe332b05c5d8.jpg');
INSERT INTO `categorie` VALUES(24, 'Articoli per il giardino', 'Vari articoli per la cura del giardino.', 'img4fe335233bb40.jpg');
INSERT INTO `categorie` VALUES(25, 'Giocattoli', 'Vari giocattoli per bambini.', 'img4fe3355100e4f.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descrizione` varchar(2000) DEFAULT NULL,
  `quantita` int(11) NOT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabella per la gestione dei prodotti.' AUTO_INCREMENT=37 ;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` VALUES(16, 'Una lama di luce - Andrea Camilleri', '"Un gorgo d''angoscia governa l''alterno respiro delle storie che nel romanzo si tramescolano. Il commissario Montalbano è in apprensione. Gli orli sfumati di un sogno trasudano malessere, sensazioni superstiziose, oscure premonizioni. Un pensiero laterale stenta a chiarirsi, e perdura nella realtà come sospettosa vigilanza; e come soprassalto a ogni minima coincidenza con lo squallore infausto del sogno che di uno straccio di terra aspra e solitaria ha fatto un obitorio a cielo aperto, con bara chiusa e cadavere da riconoscere, sotto una luce itterica e di meteoropatica influenza. Persino il consueto barbugliamento di Catarella si è dato in sogno negli arcani costernanti di una locuzione latina. La rotta sequenza delle indagini, su un''aggressione a mano armata e violenza carnale, su un traffico d''armi, e su degli esportatori di opere d''arte rubate, allinea e intreccia storie di donne di forte e deciso temperamento; mentre il commissario, così esposto al lato oscuro delle cose e ai clandestini giochi della mente, è in attesa che qualcosa di non del tutto delucidato esca fuori, alla fine, da un qualche retroscena, e si riveli. Si sedimenta lo spaesamento in Montalbano. Nella vita del commissario va crescendo un senso di solitudine che accascia e predispone a una morbidità di sentimento. Livia continua a essere una voce nel telefono, una minaccia costante e fastidiosa di baruffe. Un''assenza. Una lontananza impegnativa. Irrompe in carne e ossa una donna fatale...".', 34, 11.90, 'Libri', 'img4fe336e07b754.jpeg');
INSERT INTO `prodotti` VALUES(17, 'Cinquanta sfumature di grigio - E. L. James', 'Quando Anastasia Steele, graziosa e ingenua studentessa americana di 21 anni incontra Christian Grey, giovane imprenditore miliardario, si accorge di essere attratta irresistibilmente da quest’uomo bellissimo e misterioso. Convinta però che il loro incontro non avrà mai un futuro, prova in tutti i modi a smettere di pensarci, fino al giorno in cui Grey non compare improvvisamente nel negozio dove lei lavora e la invita ad uscire con lui. Anastasia capisce di volere quest’uomo a tutti i costi. Anche lui è incapace di resisterle e deve ammettere con se stesso di desiderarla, ma alle sue condizioni. Travolta dalla passione, presto Anastasia scoprirà che Grey è un uomo tormentato dai suoi demoni e consumato dall’ossessivo bisogno di controllo, ma soprattutto ha gusti erotici decisamente singolari e predilige pratiche sessuali insospettabili… Nello scoprire l’animo enigmatico di Grey, Ana conoscerà per la prima volta i suoi più segreti desideri. Tensione erotica travolgente, sensazioni forti, ma anche amore romantico, sono gli ingredienti che E.L. James ha saputo amalgamare osando scoprire il lato oscuro della passione, senza porsi alcun tabù. Il successo senza precedenti della trilogia Cinquanta sfumature, di cui questo è il primo volume, è iniziato grazie al passaparola delle donne che ne hanno fatto nel mondo un vero e proprio cult. Come un ciclone inarrestabile, la passione proibita di Anastasia e Christian ha conquistato le lettrici prima attraverso la diffusione in ebook, poi in edizione tascabile, ponendosi al primo posto in tutte le classifiche del mondo. ', 45, 11.18, 'Libri', 'img4fe6e3605051b.jpg');
INSERT INTO `prodotti` VALUES(18, 'Fai bei sogni - Massimo Gramellini', '"Fai bei sogni" è la storia di un segreto celato in una busta per quarant''anni. La storia di un bambino, e poi di un adulto, che imparerà ad affrontare il dolore più grande, la perdita della mamma, e il mostro più insidioso: il timore di vivere. "Fai bei sogni" è dedicato a quelli che nella vita hanno perso qualcosa. Un amore, un lavoro, un tesoro. E rifiutandosi di accettare la realtà, finiscono per smarrire se stessi. Come il protagonista di questo romanzo. Uno che cammina sulle punte dei piedi e a testa bassa perché il cielo lo spaventa, e anche la terra. "Fai bei sogni" è soprattutto un libro sulla verità e sulla paura di conoscerla. Immergendosi nella sofferenza e superandola, ci ricorda come sia sempre possibile buttarsi alle spalle la sfiducia per andare al di là dei nostri limiti. Massimo Gramellini ha raccolto gli slanci e le ferite di una vita priva del suo appiglio più solido. Una lotta incessante contro la solitudine, l''inadeguatezza e il senso di abbandono, raccontata con passione e delicata ironia. Il sofferto traguardo sarà la conquista dell''amore e di un''esistenza piena e autentica, che consentirà finalmente al protagonista di tenere i piedi per terra senza smettere di alzare gli occhi al cielo.', 50, 12.67, 'Libri', 'img4fe6e79a62144.jpg');
INSERT INTO `prodotti` VALUES(19, 'Kansas City 1927 - Diego Bianchi', 'Stagione 2011-2012. Due tifosi della Roma scrivono la cronaca delle partite viste, a cominciare dalla prima che in agosto elimina la squadra dalla modesta Europa League. Scrivono come parlano, niente di più niente di meno. L''accento romanesco spinge alla parodia belliana, sfiora Lando Fiorini e Venditti, costeggia con ironia (e non) il gergo coatto e curvarolo, canzonettaro e tecnico "depallone", sfuma nella battuta da bar e nello svolazzo colto, irrompe nell''invettiva politica e sentimentale. Nel frattempo la stagione di Luis Enrique e degli americani, nata all''insegna d''una promessa di revolución che non si respirava in città dai tempi di Zeman, insegna a guardare strani e inutili numeri, come le percentuali del possesso palla. Si rivela un''annata folle, con poche gioie, parecchi dolori, svariati eventi incomprensibili. Uno striscione dissimula così la disperazione: "Mai schiavi del risultato". Proteggendosi dietro l''anonimato, Diego Bianchi e Simone Conte hanno usato Facebook come "autoterapia di gruppo", e hanno incontrato per strada più di 18mila fan: i "piacitori". Le cronache dell''annata diventano qui libro, impreziosite dalle letture di Pierfrancesco Favino, Elio Germano, Valerio Mastandrea, oltre che dei due autori.', 50, 16.20, 'Libri', 'img4fe6e7eb4fab1.jpg');
INSERT INTO `prodotti` VALUES(20, 'Se ti abbraccio non aver paura - Fulvio Ervas', 'Il verdetto di un medico ha ribaltato il mondo. La malattia di Andrea è un uragano, sette tifoni. L''autismo l''ha fatto prigioniero e Franco è diventato un cavaliere che combatte per suo figlio. Un cavaliere che non si arrende e continua a sognare. Per anni hanno viaggiato inseguendo terapie: tradizionali, sperimentali, spirituali. Adesso partono per un viaggio diverso, senza bussola e senza meta. Insieme, padre e figlio, uniti nel tempo sospeso della strada. Tagliano l''America in moto, si perdono nelle foreste del Guatemala. Per tre mesi la normalità è abolita, e non si sa più chi è diverso. Per tre mesi è Andrea a insegnare a suo padre ad abbandonarsi alla vita. Andrea che accarezza coccodrilli, abbraccia cameriere e sciamani. E semina pezzetti di carta lungo il tragitto, tenero Pollicino che prepara il ritorno mentre suo padre vorrebbe rimanere in viaggio per sempre.', 50, 14.45, 'Libri', 'img4fe6e82590c11.jpg');
INSERT INTO `prodotti` VALUES(22, 'Philips 24PFL3507H TV LCD', 'Ideale per qualsiasi stanza\r\ncon prestazioni di elaborazione LED Full HD delle immagini e Smart TV\r\nScopri film, programmi sportivi, giochi o video di YouTube con le immagini LED brillanti dello Smart TV\r\nLED Philips 22PFL3507 Full HD con schermo piccolo. Con la qualità audio e delle immagini Philips e le\r\nsue dimensioni compatte, questo TV si adatta perfettamente a qualunque stanza della casa.\r\nMoltissimi contenuti con Smart TV\r\n\r\n• Semplice connessione wireless con adattatore wireless USB opzionale\r\n• Tantissimi video online tramite YouTube\r\n• Ascolta la musica, guarda i film e le foto sul tuo TV con lo standard DLNA\r\n• Metti in pausa facilmente il programma\r\nImmagini chiare e nitide sempre\r\n• TV Full HD con Digital Crystal Clear per profondità e chiarezza\r\n• Immagini a LED nitide con un contrasto incredibile\r\n• 100 Hz Perfect Motion Rate (PMR) per un''estrema nitidezza del movimento\r\nSemplice connettività digitale a tutto campo\r\n• 2 slot USB per una riproduzione ottimale dei file multimediali\r\n• L''ingresso PC consente di utilizzare il televisore come monitor del PC\r\n• Semplice connettività con 3 ingressi HDMI ed EasyLink\r\n• Sintonizzatore digitale DVB-C/T integrato per la ricezione digitale via cavo', 39, 248.88, 'Elettronica e informatica', 'img4feaf08d905c9.jpg');
INSERT INTO `prodotti` VALUES(23, 'Canon EOS 600D', 'Dedicata a coloro che vogliono passare ad una reflex digitale, la EOS 600D è il modello ideale per entrare sistema EOS. Corredata di nuove funzioni e tecnologie, EOS 600D ridefinisce l’area del mercato delle reflex digitali. Le caratteristiche principali comprendono:\r\n\r\nSchermo LCD da 3 pollici (7,7 cm) inclinabile, per un controllo eccezionale da ogni angolazione.\r\n18 Megapixel per catturare ogni dettaglio con colori stupefacenti e dettagli brillanti.\r\nFilmati Full HD (1080p) con zoom ottico, audio stereo, stabilizzatore dinamico IS e HDMI\r\nModalità Scena ‘Smart Auto’ per assicurarvi immagini di alta qualità analizzando ogni scena nei dettagli.\r\nGuida alle funzioni su schermo, che fornisce la descrizione di numerose funzioni della fotocamera in modo semplice.\r\nSensore HD CMOS.\r\nModalità Creative Auto e Basic+ per consentirvi di intervenire manualmente sulle regolazioni dell’immagine.\r\nControllo flash wireless integrato.', 20, 587.50, 'Elettronica e informatica', 'img4feb0ab2c5996.jpg');
INSERT INTO `prodotti` VALUES(26, 'Gopro HD Outdoor HERO2', 'La fotocamera HD HERO2 è ideale per gli atleti e chi vuole fare riprese in ogni situazione, è waterproof fino a 60m, permette di riprendere video con grandangolo 170º a 1080p e scattare foto da 11 MP (10 foto al secondo). Questa videocamera HD è piccola e leggera e ti permette di riprendere i momenti più belli all''aria aperta.Include alcuni accessori per montarla sulla bici, sugli sci , sullo skate o il kayak. Altri accessori possono essere comparti a parte. caratteristiche : Risoluzione 11MP CMOS Apertura f/2.8 VideoFull 170º, Medium 127º, Narrow 90º FOV in 1080p and 720p Video 120 fps WVGA, 60 fps 720p, 48 fps 960p, 30 fps 1080p Video Formato video H.264 codec, .mp4 Microfono jack da 3.5mm per microfono stereo esterno HDMI Porta mini-HDMI Memoria compatibile SDHC fino a 32GB Batteria 1100mah ricaricabile al litio, carica tramite porta USBLa confezione include: 1 11MP HD HERO2 1 Waterproof Housing (197'' / 60m) 1 HD Skeleton Housing 1 Rechargeable Li-on Battery 1 USB Cable 1 Vented Helmet Strap 1 Head Strap 2 Curved Surface Adhesive Mounts 2 Flat Surface Adhesive Mounts 1 3-Way Pivot Arm Assorted Mounting Hardware', 30, 270.75, 'Elettronica e informatica', 'img4feb0bcf2ecfb.jpg');
INSERT INTO `prodotti` VALUES(27, 'Canon POWERSHOT SX240 HS', 'Caratteristiche principali\r\n\r\nZoom ottico 20x e grandangolo da 25 mm in un corpo compatto. 39x con ZoomPlus\r\nHS System con CMOS da 12,1 megapixel e DIGIC 5 per risultati sorprendenti anche in condizioni di scarsa illuminazione\r\nIntelligent IS adatta lo stabilizzatore ottico d''immagine alla scena (7 modalità) per risultati sempre nitidi\r\nAmpio display LCD (460.000) da 7,5 cm (3") PureColor II G per resistenza e visibilità ottimali\r\nFilmati Full HD (1080p) con audio stereo e zoom ottico, HDMI\r\nSmart Auto (58 scene) per garantire la massima facilità d''utilizzo\r\nRiconoscimento viso per identificare e dare priorità alle persone che preferisci\r\nModalità manuale, Av e Tv per un controllo creativo completo\r\nRaffica alta velocità (HQ) e Filmato rallentato per catturare l''azione\r\nCustodia impermeabile da 40 m opzionale', 70, 249.85, 'Elettronica e informatica', 'img4feb0c1e44143.jpg');
INSERT INTO `prodotti` VALUES(28, 'Apple iPod Touch 8GB, colore: Bianco', 'Apple iPod Touch, 8Go, 4° generazione. Divertimento. Ultima frontiera. Apple ha dato all''iPod touch le nostre tecnologie più evolute. Per divertimento. Ora puoi videochiamare con FaceTime, girare video HD e giocare sul display più definito che un iPod abbia mai avuto. C''è così tanta tecnologia che dimenticherai di aver in mano un iPod. FaceTime Quanto è bello videochiamare, su iPod touch? Fai vedere ai tuoi amici cosa stai facendo mentre lo stai facendo. Tocca un pulsante e salutali con la mano mentre sei all''estero, chiedi che ne pensano delle tue scarpe nuove, coinvolgili negli scherzi e nei momenti divertenti di ogni giorno, via Wi-Fi tra due nuovi iPod touch o dal nuovo iPod touch ad iPhone 4. Sarà come essere a tu per tu col divertimento. Registrazione e montaggio video HD Avessi visto!" Ecco una cosa che non dirai mai più. Perché con iPod touch avrai sempre dietro una fantastica videocamera HD. Sei a una festa e vedi uno che fa breakdance? Cattura il momento in tutta la sua gloria: in alta definizione a 720p. L''avanzato sensore BSI (backside illumination) ti permette di filmare anche in ambienti poco illuminati. E puoi persino creare il tuo personale minicapolavoro su iPod touch, tagliandolo e montandolo con la nuova app iMovie: ha temi, titoli e transizioni ideati da Apple. Game Center È ora di mettersi in gioco. Con la nuova app Game Center su iPod touch troverai un bel po'' di nuovi avversari da sfidare. Invita gli amici a unirsi al tuo network. E poi battili tutti. Tieni d''occhio la tua posizione in classifica per ogni gioco e confronta i tuoi risultati con quelli degli altri. Metti insieme un gruppo selezionato con cui divertirti, oppure scegli di sfidare automaticamente persone che non conosci in una partita multiplayer. Insomma, scendi in campo.', 80, 180.00, 'Elettronica e informatica', 'img4feb0c503bc2d.jpg');
INSERT INTO `prodotti` VALUES(29, 'Samsung Galaxy S III, White', 'Il nuovo Samsung Galaxy S III è stato progettato a misura d''uomo, grazie ad una serie di funzioni altamente intuitive. Oltre a riconoscere il tuo volto e la tua voce, interpreta automaticamente i tuoi gesti e i tuoi movimenti. Ha un design ispirato alla natura e un cuore tecnologico senza confronti.', 15, 575.00, 'Elettronica e informatica', 'img4feb0ca9ab101.jpg');
INSERT INTO `prodotti` VALUES(31, 'Philips RQ1150 SensoTouch Rasoio Elettrico', 'Il nuovo rasoio elettrico Philips Norelco SenseoTouch RQ1150 ha un tocco morbido per una rasatura perfetta. Il sistema GyroFlex 2D si adatta facilmente alle linee del tuo volto e rade anche i peli più corti con le testine DualPrecision.', 45, 79.99, 'Articoli per la casa', 'img4feb0d60351c5.jpg');
INSERT INTO `prodotti` VALUES(32, 'Bialetti Venus Moka da 4 in acciaio INOX a in', 'Le linee morbide e il design armonioso dalle finiture lucide caratterizzano questa moka. Adatta a tutti i piani cottura.\r\n\r\nVersatore pratico e salvagoccia\r\nAcciaio INOX\r\nManico resistente alle alte temperature\r\nLavabile in lavastoviglie \r\nTazze: 4', 100, 18.91, 'Articoli per la casa', 'img4feb0dd63b765.jpg');
INSERT INTO `prodotti` VALUES(33, 'Bialetti Bicchierini da caffè colorati, 6 pez', 'Bicchierini da caffè\r\nNella confezione bicchierini colorati: nero, giallo, viola, arancione, blu, verde.', 30, 14.69, 'Articoli per la casa', 'img4feb0e42b61ac.jpg');
INSERT INTO `prodotti` VALUES(34, 'Bosch Rotak 32 Rasaerba silenzioso', 'Manico ergonomico per la massima maneggevolezza\r\nLeggero e compatto per un facile trasporto\r\nPotente. 20% di potenza in più grazie al motore Powerdrive™.\r\nInnovativo rastrello. Tagliare vicino ai bordi, ai muri, ai cespugli\r\ne lungo gli angoli.\r\nPiù leggero grazie al nuovo design delle ruote.\r\nSerbatoio di raccolta di 31 litri.', 3, 75.99, 'Articoli per il giardino', 'img4feb0ecb0a72c.jpg');
INSERT INTO `prodotti` VALUES(35, 'broil-master® - Griglia Barbecue a gas in acc', 'Con questa Griglia BBQ l''esperienza culinaria sarà indimenticabile!\r\n\r\nÈ possibile cucinare cibi chiudendo il coperchio in acciaio inox\r\nNella cappa è presente un indicatore di temperatura\r\ncon 6 fuochi principali a 10.000 BTU insieme 40.000 BTU = ca.11,7 KW)\r\n1 fuoco laterale su la parte destra 12.000 BTU (= ca. 3,5 KW, chiudendo il coperchio e possibile di usarlo come appoggio\r\nsu la sinistra una mensola aggiuntiva\r\nTimer incluso!! ', 10, 242.95, 'Articoli per il giardino', 'img4feb0f37c7f85.jpg');
INSERT INTO `prodotti` VALUES(36, 'Mondo 16/353 - Cars, Canotto gonfiabile, 100 ', 'Utilizzare esclusivamente dove il bambino è in grado di toccare e sotto sorveglianza di un adulto. Non gonfiare con compressore', 30, 11.39, 'Giocattoli', 'img4feb0f88d340d.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `indirizzo` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `admin` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabella per la gestione degli utenti.' AUTO_INCREMENT=45 ;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` VALUES(1, 'Nome', 'Cognome', 'Indirizzo', 'ciao', '6e6bc4e49dd477ebc98ef4046c067b5f', 0, 'Email');
INSERT INTO `utenti` VALUES(2, 'Giovanni', 'Basili', 'Via Petriccio 68/C', 'giovabasili', '0fe4f43e1dd173abc07ce508a74800e2', 0, 'giovibasili@libero.it');
INSERT INTO `utenti` VALUES(4, 'Valentina', 'Tontini', 'Via Fuffa 10', 'vallystellinachiocciola', '9e6fb62bc814d70093a505b9c2127110', 0, 'vallystellinachiocchiolagmail@gmail.com');
INSERT INTO `utenti` VALUES(5, 'admin', 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin');
INSERT INTO `utenti` VALUES(6, 'Lucia', 'De Angelis', 'Via Bresaola 37A', 'lucia', '3ba430337eb30f5fd7569451b5dfdf32', 0, 'lucia.deangelis@student.unife.it');
INSERT INTO `utenti` VALUES(32, 'adasasdf', 'asasdfasd', 'sadf', 'adfasd', '84d9cfc2f395ce883a41d7ffc1bbcf4e', 0, 'asdf');
INSERT INTO `utenti` VALUES(34, 'treiter', 'sdfsdfg', 'lkjhl', 'treiter', 'eb73fb43b8496dca87d191179f6cb6ae', 0, 'lkjh');
INSERT INTO `utenti` VALUES(35, 'Lorenzo', 'Sorace', 'Indirizzo', 'willy', 'e7236697824fb37763235980f1061218', 0, 'Email');
INSERT INTO `utenti` VALUES(36, 'rerere', 'rerere', 'rerere', 'rerere', 'dd15bef47b422798388966f5e6728543', 0, 'rerere');
INSERT INTO `utenti` VALUES(41, 'asd', 'asd', 'asd', 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'asd');
INSERT INTO `utenti` VALUES(42, 'admin2', 'admin2', 'admin2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 1, 'admin2');
INSERT INTO `utenti` VALUES(44, 'admintest', 'admintest', 'admintest', 'admintest', '66d4aaa5ea177ac32c69946de3731ec0', 1, 'admintest');

-- --------------------------------------------------------

--
-- Struttura della tabella `vendite`
--

CREATE TABLE `vendite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idutente` int(10) unsigned NOT NULL,
  `idprodotto` int(10) unsigned NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idutente` (`idutente`),
  KEY `idprodotto` (`idprodotto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dump dei dati per la tabella `vendite`
--

INSERT INTO `vendite` VALUES(2, 6, 17, 11.18);
INSERT INTO `vendite` VALUES(3, 6, 17, 11.18);
INSERT INTO `vendite` VALUES(4, 6, 17, 11.18);
INSERT INTO `vendite` VALUES(5, 6, 17, 11.18);
INSERT INTO `vendite` VALUES(6, 6, 17, 11.18);
INSERT INTO `vendite` VALUES(7, 6, 17, 55.90);
INSERT INTO `vendite` VALUES(8, 1, 16, 95.20);
INSERT INTO `vendite` VALUES(9, 1, 16, 95.20);
INSERT INTO `vendite` VALUES(10, 41, 34, 75.99);
INSERT INTO `vendite` VALUES(11, 41, 34, 75.99);
INSERT INTO `vendite` VALUES(12, 41, 22, 324.87);
INSERT INTO `vendite` VALUES(13, 5, 28, 3600.00);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`categoria`) REFERENCES `categorie` (`nome`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `vendite`
--
ALTER TABLE `vendite`
  ADD CONSTRAINT `vendite_ibfk_1` FOREIGN KEY (`idprodotto`) REFERENCES `prodotti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idutente` FOREIGN KEY (`idutente`) REFERENCES `utenti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

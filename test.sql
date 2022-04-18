-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 17 avr. 2022 à 17:22
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `city`, `description`, `file_hotel`) VALUES
(6, 'Emirates Palace', 'West Corniche', 'Abu Dhabi', 'Construit au coût approximatif de 3 milliards de dollars, l’Emirates Palace présente 394 chambres et suites, 40 salles de réunion et de conférence, une plage de sable blanc, une myriade de bassins et de fontaines, un spa somptueux, du marbre importé de 13 différents pays et plus de 1000 lustres en cristal. C’est comme une petite forteresse de plaisance qui s’enorgueillit également du plus prestigieux port de plaisance du Moyen-Orient. Les personnalités royales, ou ceux qui veulent en ressentir les attraits, peuvent se prélasser dans l’une des nombreuses suites du palais, chacune habillée d’un cadre somptueux convenant à un sultan d’autrefois, mais avec suffisamment de commodités modernes pour plaire aux grands magnats d’aujourd’hui.', '350247778-625ae1f0d1a2d905675145.jpg'),
(7, 'Le luxueux hôtel Mardan Palace, en Turquie', 'Yaşar Sobutay Bulvarı No;450/1, 07112 Aksu Antalya', 'Kundu Mah', 'Construit en 2009 par le milliardaire russe Telman Ismailov, à hauteur de 1,65 milliard de dollars, le Mardan Palace Hotel à Antalya, en Turquie, recèle la plus grande piscine de la Méditerranée (pour 1000 personnes) et se présente comme l’un des hôtels de luxe les plus prestigieux d’Europe. Au-delà des suites scandaleusement somptueuses et des stupéfiants intérieurs ornés de feuilles d’or, de cristal et de marbre italien, il y a aussi dix points de restauration, 17 bars, un spa fastueux et un aquarium encastré rempli de poissons exotiques. Seulement pour la plage, 9000 tonnes de sable blanc furent importées d’Égypte. On peut aussi compter sur un service de majordome particulier 24 heures par jour, 7 jours par semaine.', '198589995-625ae8de6d737797610102.jpg'),
(8, 'Le somptueux hôtel Westin Excelsior, à Rome', 'Piazza Ognissanti 3, Santa Maria Novella, 50123 Fl', 'Rome', 'Le Westin Excelsior Rome, érigé en 1906, a une impressionnante réputation dans le quartier de la Via Veneto. Bien que la plupart des chambres soient abordables, la pièce de résistance est la Villa La Cupola Suite qui a été « rafraîchie » récemment au coût de 7 millions de dollars. Ce prestigieux cocon de luxe s’étend sur deux étages complets, ce qui en fait la plus grande suite en Italie. Tout en étant équipée des gadgets de haute technologie dernier cri, cette suite est décorée dans le plus grand style ancien avec des coupoles de style cathédrale dont les fresques sont peintes à la main. La Villa La Cupola possède sa propre salle de remise en forme incluant sauna, hammam et jacuzzi, de même qu’une salle à manger protocolaire. C’est un incontournable pour qui l’argent n’est pas un problème.', '328112772-625aeb04bf074512908344.jpg'),
(9, 'Burj Al Arab Jumeirah', 'Jumeirah Beach Road,', 'Dubaï, Émirats arabes unis', 'Conçue pour ressembler à une voile gonflée, la magnifique architecture du Burj Al Arab Hotel à Dubaï est l’une des plus photographiées au monde. Toutes les chambres sont de luxueuses suites ultramodernes réparties sur deux étages avec des vues incroyables. Et au-delà des équipements uniques qui surpassent les attentes comme l’héliport attenant et des courts de tennis suspendus, on y trouve une vaste gamme d’options futuristes de restauration et de vie nocturne. Leur concept d’accueil du client est également très complet. Les extras haut de gamme incluent l’enregistrement directement à la suite, des majordomes particuliers sur appels 24/7, une flotte de Rolls Royce avec chauffeur et tous les services de traiteur pour une clientèle de marque très bien nantie qui inclue souvent la royauté.  Découvrez des astuces voyage pour vos prochaines destinations de voyage.', '255529-625aeb7ee3998016239375.webp'),
(10, 'L’hôtel Plaza, à New York', 'Fifth Avenue at Central Park South,', 'New York, NY 10019, États-Unis', 'Même si la Grosse Pomme regorge de nombreux hôtels chics et légendaires, The Plaza est souvent le meilleur choix pour les dignitaires en transit, en raison surtout de sa Royal Plaza Suite qui s’enorgueillit d’avoir les plus belles vues de Manhattan. La suite, composée de 3 chambres et 3 salles de bain, est conçue dans le plus opulent charme du vieux monde, avec une salle à manger, une bibliothèque, un gymnase, un piano à queue, une cuisine complète (pour les chefs particuliers) et l’office d’un majordome dont les services sont compris. De plus, elle est desservie par son ascenseur privé. Construite en 1907, cette structure iconique a été désignée lieu d’intérêt national en 1969.', '260383552-625aebef60bd3444830073.jpg'),
(11, 'The Royal at Atlantis', '1 Casino Drive, Paradise Island, NP N-4777', 'Nassau, Bahamas', 'Érigé en hommage à la légendaire cité perdue, l’Atlantis Paradise Island est un paysage aquatique de 141 acres qui se présente comme la première destination de villégiature de luxe des Bahamas. Mais c’est sa Royal Towers Bridge Suite du 23e qui est vraiment huppée. Elle s’étend sur dix chambres cossues, avec des plafonds de 12 pieds, des fenêtres pleine longueur, qui comprend un piano à queue, deux centres de divertissement, une salle à manger avec un lustre en or 22 carats, des bains à remous et plus encore… y compris un personnel permanent de sept personnes pour répondre à chacun de vos caprices et fantaisies.', '84367002-625aecf784797697001076.jpg'),
(12, 'Palm Hotel & Spa', 'Grand\'anse, 97429', 'Petite-Île, La Réunion', 'Faites-vous chouchouter comme une star en profitant du service exclusif de l\'établissement Palm Hotel & Spa Cet établissement est à 5 minutes à pied de la plage. Situé à La Réunion, le Palm Hotel & Spa dispose d\'un spa et de 2 piscines extérieures, dont l\'une est chauffée. Il propose 3 restaurants offrant une vue panoramique, à seulement 10 minutes en voiture de la ville de Saint-Pierre. Il possède également une plage avec hammam et jacuzzi donnant sur le piton de Grande Anse.  Au cœur de la partie sud sauvage de l\'île, le Palm Hotel vous accueille dans des chambres climatisées avec télévision à écran plat, minibar et salle de bains privative.  L\'hôtel compte 2 restaurants servant une cuisine locale. Vous pourrez y prendre le petit-déjeuner, le déjeuner et le dîner, en admirant la vue panoramique sur l\'océan et le piton de Grande Anse. La terrasse de l\'hôtel est l\'endroit idéal pour se détendre avec une boisson.  Installé à 60 km du volcan du Piton de la Fournaise, l\'hôtel comporte une salle de sport, des chaises longues, ainsi qu\'un espace bien-être avec hammam et baignoire spa. Vous y trouverez par ailleurs 6 salles de massage, un espace dédié aux soins de beauté et un jardin tropical propice à la détente. Sur place, vous aurez la possibilité de profiter d\'une salle de jeux et de pratiquer des activités variées, comme le ping-pong, le minigolf, le billard et la pétanque.  Enfin, le Palm Hôtel & Spa se tient à 25 minutes de route de l\'aéroport de Saint-Pierre, et le parking privé sur place est gratuit.  Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 9,2 pour un séjour à deux.', '223867179-625aed572352e395420863.jpg'),
(13, 'Boulders Resort & Spa Scottsdale, Curio Collection', '34631 North Tom Darlington Drive,', 'Scottsdale, AZ 85377, États-Unis', 'Profitez des services haut de gamme de l\'établissement Boulders Resort & Spa Scottsdale, Curio Collection by Hilton Situé à Scottsdale, en Arizona, dans les contreforts du désert de Sonora, le Boulders Resort & Spa Scottsdale, Curio Collection by Hilton dispose de 7 restaurants, de 2 parcours de golf professionnels et d’un spa à service complet. Le complexe hôtelier propose des hébergements spacieux pour vous permettre de passer un séjour inoubliable dans le désert de Sonora.  Les chambres comportent une télévision à écran plat. Les logements comprennent également un coin salon, idéal pour vous détendre après une journée bien remplie. Certaines chambres s’ouvrent sur un balcon ou une terrasse. Les logements sont dotés d’une salle de bains privative. En outre, un sèche-cheveux et des articles de toilette gratuits sont fournis. Le Boulders Resort & Spa, Curio Co est pourvu d’une connexion Wi-Fi gratuite.  Le Boulders Resort & Spa, Curio Collection by Hilton possède 4 piscines ainsi qu’une salle de sport ultramoderne munie de saunas et de baignoires spa. Après une partie de golf ou de tennis, vous aurez la possibilité de profiter d’un massage relaxant au Spa at the Boulders. De plus, l’établissement organise des séances de yoga et de Pilates.  Vous pourrez déguster une cuisine simple ou gastronomique dans les différents restaurants du complexe The Boulders Resort & Spa, Curio Collection by Hilton. Le Palo Verde prépare des plats du sud-ouest pour le petit-déjeuner (en saison) et le dîner.  Le complexe hôtelier est implanté à proximité des 24 km de sentiers de randonnée du Blackrock Mountain Trail. L’établissement The Boulders Resort & Spa, Curio Collection by Hilton se trouve à 19 km du parc des expositions WestWorld of Scottsdale et à 38 km du jardin botanique du désert. L’aéroport le plus proche, celui de Scottsdale, est, quant à lui, à 20 km de l’hôtel The Boulders Resort & Spa, Curio Collection by Hilton.  Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 9,3 pour un séjour à deux.  L\'établissement Boulders Resort & Spa Scottsdale, Curio Collection by Hilton accueille des clients Booking.com depuis le 10 août 2009. Chaîne hôtelière/marque: Curio Collection by Hilton', '49450817-625aeda421899141814673.jpg'),
(14, 'Aurora Anguilla Resort & Golf Club', 'Rendezvous Bay,', 'AI-2640 Ebenezer, Anguilla', 'Cet établissement est à 2 minutes à pied de la plage. Le Aurora Anguilla Resort & Golf Club possède un parcours de golf de 18 trous, une piscine extérieure, un spa et une ferme hydroponique. Les suites climatisées disposent d\'une terrasse offrant une vue spectaculaire sur la mer ou la piscine.  Chaque suite élégante dispose d\'un coin salon avec télévision par câble et d\'une chaîne hi-fi Bose. Tous Cet hébergement dispose d\'une connexion Wi-Fi gratuite et d\'une salle de bains privative.  Le CuisinArt propose une gamme de restaurants internationaux.  Le spa Venus du complexe dispose de 16 salles de soins, d\'une salle de sport et propose des cours de remise en forme, des sports nautiques et d\'autres activités. Vous pourrez également réserver des visites et des excursions auprès du bureau du concierge.  Blowing Point et l\'embarcadère des ferries se trouvent à seulement 7 minutes en voiture du CuisinArt Resort. L\'aéroport d\'Anguilla Clayton J. Lloyd est accessible en 10 minutes de route.  L\'établissement Aurora Anguilla Resort & Golf Club accueille des clients Booking.com depuis le 20 mars 2013.', '287032382-625aeddf8494b442431960.jpg'),
(15, 'Marquis Los Cabos', 'Carretera Traspeninsular Km 21.5,', '23400 San José del Cabo, Mexique', 'Profitez des services haut de gamme de l\'établissement Marquis Los Cabos, an All - Inclusive, Adults - Only & No Timeshare Resort Vous pouvez bénéficier d\'une réduction Genius dans l\'établissement Marquis Los Cabos, an All - Inclusive, Adults - Only & No Timeshare Resort ! Connectez-vous pour économiser.  L\'impressionnant complexe de luxe Marquis Los Cabos All Inclusive Resort & Spa- Adults Only bénéficie d\'un spa et d\'une salle de sport. Il est doté de 3 piscines extérieures et vous pourrez prendre vos repas sur place. Toutes les suites sont élégantes et pourvues d’une baignoire spa ainsi que d’une terrasse offrant une vue sur l’océan et munie d’une piscine privée.  Les hébergements comprennent un canapé-lit, des peignoirs, des chaussons ainsi qu’une terrasse ou un balcon privés.  Sur place, vous pourrez profiter d’un institut de beauté, d’une boutique de souvenirs, de 4 restaurants de spécialités, d’une réception et d’un service d\'étage. Le grand spa dispense de nombreux soins de massages.  Dans les environs du Marquis Los Cabos, vous aurez la possibilité de partir en randonnée, de faire de la plongée sous-marine et avec tuba ou d’observer les baleines. Vous pourrez également prendre part à différentes activités, telles que des cours de danse et de tir à l’arc.  L’aéroport international de San José de Los Cabos se situe à 20 minutes de route.  Les couples apprécient particulièrement l\'emplacement de cet établissement. Ils lui donnent la note de 9,4 pour un séjour à deux.  L\'établissement Marquis Los Cabos, an All - Inclusive, Adults - Only & No Timeshare Resort accueille des clients Booking.com depuis le 19 mars 2010. Chaîne hôtelière/marque: The Leading Hotels of the World', '55050532-625aee48d44ba196031973.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `hotels_users`
--

DROP TABLE IF EXISTS `hotels_users`;
CREATE TABLE `hotels_users` (
  `hotels_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hotels_users`
--

INSERT INTO `hotels_users` (`hotels_id`, `users_id`) VALUES
(6, 6),
(7, 3),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11),
(13, 12),
(14, 13),
(15, 14);

-- --------------------------------------------------------

--
-- Structure de la table `hotel_rooms`
--

DROP TABLE IF EXISTS `hotel_rooms`;
CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotels_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `booking_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `hotels_id`, `title`, `description`, `price`, `booking_link`, `file`) VALUES
(14, 6, 'Chambre Lits Jumeaux Deluxe avec Balcon', 'Vue sur Ville, Wi-Fi Gratuit, Parking gratuit, Superficie 55 m², 2 lits simples , Lits confortables, notés 8.9 (d\'après 131 commentaires), ​ Un parking gratuit et privé est disponible sur place (sans réservation préalable).', '50.00', 'https://www.booking.com/hotel/ae/emirates-palace.fr.html?aid=1610680;label=fr-RznEekhZsAE5km4pYWEDWgS513276342476%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-10796016511%3Alp9000411%3Ali%3Adec%3Adm;sid=06b6a42b32ba37ee07e66d122bf5021a;all_sr_blocks=6', '345800186-625ae46bc71bf166123912.jpg'),
(15, 6, 'Suite Royale avec Balcon', 'Superficie 280 m², 1 très grand lit double, Lits confortables, notés 8.9 (d\'après 131 commentaires)', '100.00', 'https://www.booking.com/hotel/ae/emirates-palace.fr.html?aid=1610680;label=fr-RznEekhZsAE5km4pYWEDWgS513276342476%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-10796016511%3Alp9000411%3Ali%3Adec%3Adm;sid=06b6a42b32ba37ee07e66d122bf5021a;all_sr_blocks=6', '350642188-625ae5f2a9ae2960743805.jpg'),
(16, 7, 'Chambre Double ou Lits Jumeaux Premium', 'Située dans le bâtiment principal, cette chambre dispose d\'un balcon avec vue latérale sur les terres, la piscine ou la mer.', '50.00', 'https://www.booking.com/hotel/tr/mardan-palace.en-gb.html?aid=311984;label=mardan-palace-1YgvrOgIfhQBXJSmzPbGlwS393160854226%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-27881768438%3Alp9112211%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YTQUGSsRwx9', '198589919-625aef983ac2e863886686.jpg'),
(17, 7, 'Suite Duplex Premium', 'Située dans le bâtiment principal, cette suite en duplex comprend 2 chambres reliées par une porte, accès direct accès à la piscine principale, Vue sur la mer Vue du jardin, Vue de la piscine', '100.00', 'https://www.booking.com/hotel/tr/mardan-palace.en-gb.html?aid=311984;label=mardan-palace-1YgvrOgIfhQBXJSmzPbGlwS393160854226%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-27881768438%3Alp9112211%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YTQUGSsRwx9', '199498009-625af002a8aff737677279.jpg'),
(18, 8, 'Chambre Lit King-Size Deluxe', 'Superficie 20 m², 1 très grand lit double,  Lits confortables, notés 8.5 (d\'après 23 commentaires).  ​ Un parking privé est disponible à proximité (sans réservation préalable).', '45.00', 'https://www.booking.com/hotel/it/westinexcelsiorflorence.fr.html#room_8124534', '177030200-625af23b2f914516311867.jpg'),
(19, 8, 'Chambre Double Deluxe Arno - Vue sur Fleuve Arno', 'Superficie 20 m², 1 très grand lit double,  Lits confortables, notés 8.5 (d\'après 23 commentaires).   ​ Un parking privé est disponible à proximité (sans réservation préalable)', '45.00', 'https://www.booking.com/hotel/it/westinexcelsiorflorence.fr.html#room_8124536', '177030214-625af35e1a4de908333730.jpg'),
(21, 9, 'Suite Panoramique en Duplex - 225 m² - Vue sur Mer', 'Superficie 225 m² 1 très grand lit double  Lits confortables, notés 9.4 (d\'après 93 commentaires) Un parking gratuit et privé est disponible sur place (sans réservation préalable).', '100.00', 'https://www.booking.com/hotel/ae/burj-al-arab.fr.html?aid=318615;label=New_French_FR_FR_21427170385-y_vVwvyO_N%2AdSIDJHjR6LwS217244927943%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2656114108%3Atiaud-297601666995%3Adsa-64415617705%3Alp9112211%3Ali%3Adec%3Adm', '169285372-625af6b03f19d984179333.jpg'),
(22, 9, 'Suite 2 Chambres Deluxe en Duplex - 335 m² - Vue s', 'Superficie 335 m² Chambre 1: 1 très grand lit double  Chambre 2: 2 lits simples  Lits confortables, notés 9.4 (d\'après 93 commentaires) ​ Un parking gratuit et privé est disponible sur place (sans réservation préalable).', '120.00', 'https://www.booking.com/hotel/ae/burj-al-arab.fr.html?aid=318615;label=New_French_FR_FR_21427170385-y_vVwvyO_N%2AdSIDJHjR6LwS217244927943%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2656114108%3Atiaud-297601666995%3Adsa-64415617705%3Alp9112211%3Ali%3Adec%3Adm', '169284637-625af6fb99607258952888.jpg'),
(23, 10, 'Chambre Plaza', 'Superficie 44 m² 1 très grand lit double  Lits confortables, notés 8.5 (d\'après 26 commentaires)  Un parking public est disponible à proximité (sans réservation préalable)', '40.00', 'https://www.booking.com/hotel/us/the-plaza.fr.html', '32296573-625af9b8da7d1484351477.jpg'),
(24, 10, 'Chambre Grand Luxe', 'Superficie 65 m² 1 très grand lit double  Lits confortables, notés 8.5 (d\'après 26 commentaires)  ​ Un parking public est disponible à proximité (sans réservation préalable)', '90.00', 'https://www.booking.com/hotel/us/the-plaza.fr.html', '32295233-625afa5a6b5f9495938595.jpg'),
(25, 11, 'Suite Royale Impériale Premium avec 1 Chambre', 'Chambre 1: 1 très grand lit double  Salon : 1 canapé-lit  Suite privée100 m²,Vue sur la mer, Piscine', '120.00', 'https://www.booking.com/hotel/bs/royal-towers.fr.html?aid=304142;label=gen173bo-1DCAsoIUIMcm95YWwtdG93ZXJzSA1YA2hNiAEBmAENuAEXyAEM2AED6AEB-AECiAIBmAICqAIDuAKP9euSBsACAdICJGYxYWRlZjBmLWI2NDgtNGVmMC04ODI0LTUyZjk3OWM3MzcxNtgCBOACAQ;sid=06b6a42b32ba37ee07e66d', '283466417-625afc066beca346824247.jpg'),
(26, 11, 'Suite Royale Impériale Premium avec 2 Chambres', 'Chambre 1: 1 très grand lit double  Chambre 2: 2 grands lits doubles  Salon : 1 canapé-lit  Suite privée157 m², Vue sur la mer, Piscine', '200.00', 'https://www.booking.com/hotel/bs/royal-towers.fr.html?aid=304142;label=gen173bo-1DCAsoIUIMcm95YWwtdG93ZXJzSA1YA2hNiAEBmAENuAEXyAEM2AED6AEB-AECiAIBmAICqAIDuAKP9euSBsACAdICJGYxYWRlZjBmLWI2NDgtNGVmMC04ODI0LTUyZjk3OWM3MzcxNtgCBOACAQ;sid=06b6a42b32ba37ee07e66d', '283466417-625afc3b2136b335088875.jpg'),
(27, 12, 'Chambre Double Supérieure', 'Cette chambre climatisée dispose d\'une télévision à écran plat', '160.00', 'https://www.booking.com/hotel/re/palm-ha-tel.fr.html#_', '39656248-625afdc79c08d223670528.jpg'),
(28, 13, 'Chambre 2 Lits Doubles - Casita', 'Superficie 51 m² 2 lits doubles  Lits confortables, notés 8.8 (d\'après 20 commentaires)  ​ Un parking public est disponible sur place (sans possibilité de réserver) et un supplément est susceptible d\'être facturé.', '250.00', 'https://www.booking.com/hotel/us/the-boulders-resort-the-waldorf-astoria-collection.fr.html#_', '65285624-625afe12a0446794057262.jpg'),
(29, 14, 'Studio Double Deluxe', '2 lits simples  et 1 canapé-lit ,  Superficie de 65 m²', '80.00', 'https://www.booking.com/hotel/ai/cuisinart-golf-resort-amp-spa.fr.html#_', '315933966-625afe49aa992687609165.jpg'),
(30, 15, 'Suite Junior Lit King-Size - Vue sur Océan', '1 très grand lit double  Ces suites de 60 m² offrent une vue sur l’océan et disposent d’un lit king-size ou de deux lits doubles, sous réserve de disponibilité.', '230.00', 'https://www.booking.com/hotel/mx/marquis-los-cabos.fr.html#_', '94746131-625afe8bd3871343744453.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `hotel_rooms_images`
--

DROP TABLE IF EXISTS `hotel_rooms_images`;
CREATE TABLE `hotel_rooms_images` (
  `hotel_rooms_id` int(11) NOT NULL,
  `images_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hotel_rooms_images`
--

INSERT INTO `hotel_rooms_images` (`hotel_rooms_id`, `images_id`) VALUES
(14, 127),
(14, 128),
(14, 129),
(14, 130),
(14, 131),
(14, 132),
(14, 133),
(14, 134),
(15, 135),
(15, 136),
(15, 137),
(15, 138),
(15, 139),
(15, 140),
(15, 141),
(15, 142),
(15, 143),
(15, 144),
(15, 145),
(15, 146),
(15, 147),
(15, 148),
(15, 149),
(15, 150),
(15, 151),
(16, 101),
(16, 102),
(16, 103),
(16, 104),
(16, 105),
(16, 106),
(17, 107),
(17, 108),
(17, 109),
(17, 110),
(17, 111),
(17, 112),
(17, 113),
(17, 114),
(17, 115),
(17, 116),
(17, 117),
(18, 118),
(18, 119),
(18, 120),
(18, 121),
(19, 122),
(19, 123),
(19, 124),
(19, 125),
(19, 126),
(21, 152),
(21, 153),
(21, 154),
(21, 155),
(21, 156),
(21, 157),
(21, 158),
(21, 159),
(22, 160),
(22, 161),
(22, 162),
(22, 163),
(22, 164),
(22, 165),
(22, 166),
(22, 167),
(22, 168),
(23, 88),
(23, 89),
(23, 90),
(23, 91),
(24, 92),
(24, 93),
(24, 94),
(24, 95),
(25, 176),
(25, 177),
(25, 178),
(25, 179),
(26, 180),
(26, 181),
(26, 182),
(26, 183),
(26, 184),
(27, 96),
(27, 97),
(27, 98),
(27, 99),
(27, 100),
(28, 169),
(28, 170),
(28, 171),
(28, 172),
(29, 173),
(29, 174),
(29, 175),
(30, 83),
(30, 84),
(30, 85),
(30, 86),
(30, 87);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `name`, `bin`) VALUES
(83, 'marqui1', '0aa45af6393b912f6c5351b90f4e4bc7264a1267.jpg'),
(84, 'marqui2', 'a129a4eff22da03923d348dc8bb27bd3211db688.jpg'),
(85, 'marqui3', '69c0454ea13ed3f05729c355c3aefc5ecf499ac8.jpg'),
(86, 'marqui4', '2dd75f00133522afbeec587c38e7c896e70c3fe5.jpg'),
(87, 'marqui5', '9d5cc3f78fcd433f161ddc9763347ce3a9a7f0e6.jpg'),
(88, 'plaza1', 'f0e194248e0be89bd448113e051bf58e2272c730.jpg'),
(89, 'plaza2', '9d350506000722ae9ef52ef61898159c37840c53.jpg'),
(90, 'plaza3', '16b22ea960a2d216680ce26258c36a4d3616b157.jpg'),
(91, 'plaza4', 'a335530fb2b1acff941babd9689df3b2cf8ae18f.jpg'),
(92, 'plaza5', '9849a3985be9dd7d80c73444e2813bcc871a4fa3.jpg'),
(93, 'plaza6', 'f0e194248e0be89bd448113e051bf58e2272c730.jpg'),
(94, 'plaza7', '9d350506000722ae9ef52ef61898159c37840c53.jpg'),
(95, 'plaza8', '6feb13ca585f0c29176daddcbcaf7df51c479992.jpg'),
(96, 'palm1', 'a5b2d891207754a4fe9a9d4c050aecf581cda1c9.jpg'),
(97, 'palm2', 'e85fbc27da9bd8771a2e5ead7e5ed249d77f3f55.jpg'),
(98, 'palm3', 'e0d272b49ae401610a74a62df1a661d061ebf74d.jpg'),
(99, 'palm4', 'c9bd2fc2b81fcdc23d677d77c810982b905645ce.jpg'),
(100, 'palm5', '48126f79871202efacc3914ae61b602f101dd3ad.jpg'),
(101, 'merdan1', '193fb4a241e5934e796ef62f727e10842868b681.jpg'),
(102, 'merdan2', 'b567e18cfd34960080900953694e28a66516eb05.jpg'),
(103, 'merdan3', '558f779fa404fa67438a9e7e5cdd064d2d07c5ce.jpg'),
(104, 'merdan4', '1b2c293802e61dc04a345fd6a47808d55a1d2d3c.jpg'),
(105, 'merdan5', 'a63b9814cd94fae778beb3cc37ce0504b7c09cfc.jpg'),
(106, 'merdan6', '5de45809038b969b1854384e64a26218ab813ac8.webp'),
(107, 'merdan7', '464655a53d85773c56fd5f9a2bceafc07ecfdb19.jpg'),
(108, 'merdan8', 'ad655066b1357cdf1e5c637d05efc65014cab69c.jpg'),
(109, 'merdan9', '5090bfb7b78fd9f5bfde48a91714684ba4a0c49c.jpg'),
(110, 'merdan10', '03930690ba96c6af9e017e9803e18e720acd4987.jpg'),
(111, 'merdan11', '59d0dec15ad49f2643b29fa653ae9513a2cf9e04.jpg'),
(112, 'merdan12', 'd57b4199088b386f48c236006dca8036b64dfdcf.jpg'),
(113, 'merdan13', 'a6ae23cc3a19fca2dbcdc24919c5efc158a302e8.jpg'),
(114, 'merdan14', 'bd7dfbc14f27c78d8ba2ca31ee58b5a6860ac753.jpg'),
(115, 'merdan15', 'efe3f30110ef61eff0557ba3be9464b8069af8a6.jpg'),
(116, 'merdan16', '38400e8d2d09cbf94bff571e56bfe42db4243295.jpg'),
(117, 'merdan17', '94664c6f3cfd12c8f868a43151020c82cae5a64f.jpg'),
(118, 'excelsior1', '15f1e246b8002463b957cda41cc61e7773859aaf.jpg'),
(119, 'excelsior2', '22179512d0baccaca773f043942bf760af868030.jpg'),
(120, 'excelsior3', 'df48b6f929e40fd09c686125a98d90cfed96f337.jpg'),
(121, 'excelsior4', '53bfffff5eaedc49eee48287869d7ccfd90c5b0f.jpg'),
(122, 'excelsior5', '15f1e246b8002463b957cda41cc61e7773859aaf.jpg'),
(123, 'excelsior6', '36d1e2c8105708e69694b684f6836cdde25c99b3.jpg'),
(124, 'excelsior7', 'df48b6f929e40fd09c686125a98d90cfed96f337.jpg'),
(125, 'excelsior8', '6cd68117e242af9196c713b93fc27755c8398e65.jpg'),
(126, 'excelsior9', '53bfffff5eaedc49eee48287869d7ccfd90c5b0f.jpg'),
(127, 'emirate1', '2a98481d88da774e0a33bd2980e403bd221d4e72.jpg'),
(128, 'emirate2', '8ce03d7f75c6dd0bceebd755310497d5868f3d36.jpg'),
(129, 'emirate3', '89948d826f6e9e120493d71fd6f2320a96b3fa9e.jpg'),
(130, 'emirate4', 'ad915194cf4bcbb2baf3762dee883503517b47f9.jpg'),
(131, 'emirate5', 'e60487f6c525f50bfb0a0ae27c66bdb9b12571eb.jpg'),
(132, 'emirate6', '0591c8db792c9ca761c0ce4aec394a23711bc80e.jpg'),
(133, 'emirate7', '8092b47828777ad996c30cf74e818974d503e7de.jpg'),
(134, 'emirate8', '951cb65eedfcd48c5f480a6ff1ee0e254718a2f0.jpg'),
(135, 'emirate9', '2a98481d88da774e0a33bd2980e403bd221d4e72.jpg'),
(136, 'emirate10', '8ce03d7f75c6dd0bceebd755310497d5868f3d36.jpg'),
(137, 'emirate11', '050787ee4f4df26f469a2d388d6afbdbc0869523.jpg'),
(138, 'emirate12', '2b855652782481d04fdf00c730a66055d56ff7eb.jpg'),
(139, 'emirate13', 'b8d6adaa5abdc02980dddb5bea834a5cb2ba43f7.jpg'),
(140, 'emirate14', '8fecffbb7eb93bb3b5ba4d829719680246e2f6c0.jpg'),
(141, 'emirate15', 'f5353497a838fafe5fd7a904f6a5f930dbced82e.jpg'),
(142, 'emirate16', '7e482c04b859041ab2328c3c41ba6f8ab816b274.jpg'),
(143, 'emirate17', '50cb67560a5887f305aa7ca94b879fba11cbf7b0.jpg'),
(144, 'emirate18', 'e8fc4a0d3bde68e9db54c652f75337adfcc032b2.jpg'),
(145, 'emirate19', '9789cbf948c5bbd9366739586050527cd20fa620.jpg'),
(146, 'emirate120', 'fd154fab7a8d713fa428d51f3ec67eeffb43e37e.jpg'),
(147, 'emirate121', 'ea498f4d6a36b0d888c6b228eb3132966cea12b3.jpg'),
(148, 'emirate122', 'e129aa3d1358bd600efffa47ef421d8270d46d87.jpg'),
(149, 'emirate123', '5d3fed9f3211eb38e8cf36fc303893da0830085b.jpg'),
(150, 'emirate124', '89948d826f6e9e120493d71fd6f2320a96b3fa9e.jpg'),
(151, 'emirate125', 'ad915194cf4bcbb2baf3762dee883503517b47f9.jpg'),
(152, 'burj1', '59c8088d9273536c278c3dae8f69e645dcadc0a6.jpg'),
(153, 'burj2', 'c85843e9dc2f460001ee5680ce0a266e33c9dccb.jpg'),
(154, 'burj3', 'bee931d3d2ac9f05ccb1d7533b873b832a38a640.jpg'),
(155, 'burj4', '10d77138499c0870f8f0cc4edac35da8018b727e.jpg'),
(156, 'burj5', 'd0be29e54c2d046bae3aa2a54c7d7ac4005f1815.jpg'),
(157, 'burj6', 'a17500681e8bacc671444cc85ca419bc4e9bb720.jpg'),
(158, 'burj7', '141745c43d288e9fb078d5a8c80d8c9260c7e111.jpg'),
(159, 'burj8', '9176166b08c46a331bdf1727f208f3b9b7d17521.jpg'),
(160, 'burj9', '9176166b08c46a331bdf1727f208f3b9b7d17521.jpg'),
(161, 'burj10', '141745c43d288e9fb078d5a8c80d8c9260c7e111.jpg'),
(162, 'burj11', 'a17500681e8bacc671444cc85ca419bc4e9bb720.jpg'),
(163, 'burj12', '563c9846127bd6ab0734b2ec3addcba131b26dd0.jpg'),
(164, 'burj13', '0d1608908daad17b24e2bcf3b441c086fcf6ef97.jpg'),
(165, 'burj14', 'd0be29e54c2d046bae3aa2a54c7d7ac4005f1815.jpg'),
(166, 'burj15', '9ee4dbc3bd968db71c26cebdeb8f921f7219860a.jpg'),
(167, 'burj16', '0a3d88e15bb5eb9b6d841c648d538b8c18219954.jpg'),
(168, 'burj17', '3dcfd796d45044aaeede474ff530791ce5babe05.jpg'),
(169, 'bolder1', '7539dad060f96117bcb04687108bf2999dc5e80c.jpg'),
(170, 'bolder2', '96612f80676d2071d12665a1aa5e8deed263f486.jpg'),
(171, 'bolder3', 'ad6137ff7d324db60f94e68dfe1de474aae171c7.jpg'),
(172, 'bolder4', '10c2e7849b029ffd283176aaee08f025dd427e87.jpg'),
(173, 'Aurora Anguilla1', '0ecb86f80becdceed9e1e509ae6fe644c04b3f36.jpg'),
(174, 'Aurora Anguilla2', 'efcabad3b876ab7d14eb67c0230875971d119edc.jpg'),
(175, 'Aurora Anguilla3', 'ec4ed0bbba2164b593ae00fbdbd0617bf6587dd6.jpg'),
(176, 'atlantis1', '6d9b428f6f2422d5e03528085ed414e2eb3a1bb4.jpg'),
(177, 'atlantis2', '83c26c1ae7b38115319e5f2a8eb142753d6f054e.jpg'),
(178, 'atlantis3', 'ea56e2a9a082f2cb39720fcdc4d5d473e124b705.jpg'),
(179, 'atlantis4', '1f0361a2d9589ca2f61070a6abc8a73667225cff.jpg'),
(180, 'atlantis5', '42950cb6c080d268e0e99a7c79ed1be68a75b08b.jpg'),
(181, 'atlantis6', '6d9b428f6f2422d5e03528085ed414e2eb3a1bb4.jpg'),
(182, 'atlantis7', '83c26c1ae7b38115319e5f2a8eb142753d6f054e.jpg'),
(183, 'atlantis8', 'ea56e2a9a082f2cb39720fcdc4d5d473e124b705.jpg'),
(184, 'atlantis9', '1f0361a2d9589ca2f61070a6abc8a73667225cff.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_rooms`
--

DROP TABLE IF EXISTS `reservation_rooms`;
CREATE TABLE `reservation_rooms` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `hotels_id` int(11) DEFAULT NULL,
  `hotel_rooms_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(3, 'gerant2@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$Cp20cqGchLfpMFWpq6X8nOs.P45ilqVDYFjqKHCjM6HS6GQIgAMLe', 'gerant2prenom', 'gerant2nom'),
(4, 'client1@hypnos.com', '[\"ROLE_CLIENT\"]', '$2y$13$uocRPpHnyDzsgqt5PN3gbupwuX8ItVeW07f.Z7c/q2.ZRa2ceu.2u', 'client1', 'client1'),
(5, 'admin@hypnos.com', '[\"ROLE_ADMIN\"]', '$2y$13$9aYy2Qp57HAUIhm8dBdRauJLQbveMzTVUv1EWiHVd4l.Pz5CHfpe.', 'Gwendal', 'Menager'),
(6, 'gerant1@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$PxhAW4WuSuJG92pjEyRrbOp7TgMG1o3Vg4CCK9bhZjO7iyoTC9vSK', 'gerant1prenom', 'gerant1nom'),
(7, 'gerant3@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$fbmqvUbcI.8TgCBu6.R0juj.zQLU7cDJ28IBGKofjRhlfJyBVX9Lu', 'gerant3prenom', 'gerant3nom'),
(8, 'gerant4@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$aw8GwV.6iL78LbOloa.FduKYw9YEz7U.GCr5maCitN14zcGyf9TV6', 'gerant4prenom', 'gerant4nom'),
(9, 'gerant5@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$wV6AY2AMrONVBzpeSNDj5.onaZF.lq1c34xvMIR5lLUF4P7Ajmvhu', 'gerant5prenom', 'gerant5nom'),
(10, 'gerant6@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$QpZiJxSL5pykKCBnTLxa/eZHhvs0sCu9MGtBs2UcIrq4CcKRShqKW', 'gerant6prenom', 'gerant6nom'),
(11, 'gerant7@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$T91YZzSnN8E85f4BVgS.QuCav3lA6/RgRjTml/27MjwHNRFVksmVm', 'gerant7prenom', 'gerant7nom'),
(12, 'gerant8@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$yE/AmR2wDe0m3vDbDEafgujRdy0JBjUGf9L1YMSWW9K6x2Jgdlpz.', 'gerant8prenom', 'gerant8nom'),
(13, 'gerant9@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$WFwXlIeSZUiw9qXr30ifBO0eqWDNAu4JOJv/ObHsXu7X.E6Z2A.Zq', 'gerant9prenom', 'gerant9nom'),
(14, 'gerant10@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$naj8KBkyK7GJ6PSUubEX0eK1NdHgE57Aj4OB7DW1PwEIh9IhEq4AS', 'gerant10prenom', 'gerant10nom'),
(15, 'gerant11@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$bwoG3js4i4YBsRV5sgUPkuvJRrWvDGtYpmRz42uLtHlF80kOZzmry', 'gerant11prenom', 'gerant11nom'),
(16, 'gerant12@hypnos.com', '[\"ROLE_GERANT\"]', '$2y$13$rQeR2jmu8jXWEnUpnAdONuwx6poVax8ofzBMGgsC77dgZKV5jvxDS', 'gerant12prenom', 'gerant12nom');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hotels_users`
--
ALTER TABLE `hotels_users`
  ADD PRIMARY KEY (`hotels_id`,`users_id`),
  ADD KEY `IDX_A4CC8FAF42F66C8` (`hotels_id`),
  ADD KEY `IDX_A4CC8FA67B3B43D` (`users_id`);

--
-- Index pour la table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9F75D452F42F66C8` (`hotels_id`);

--
-- Index pour la table `hotel_rooms_images`
--
ALTER TABLE `hotel_rooms_images`
  ADD PRIMARY KEY (`hotel_rooms_id`,`images_id`),
  ADD KEY `IDX_F0D86103CC42BAD9` (`hotel_rooms_id`),
  ADD KEY `IDX_F0D86103D44F05E5` (`images_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`);

--
-- Index pour la table `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3FDECA3167B3B43D` (`users_id`),
  ADD KEY `IDX_3FDECA31F42F66C8` (`hotels_id`),
  ADD KEY `IDX_3FDECA31CC42BAD9` (`hotel_rooms_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hotels_users`
--
ALTER TABLE `hotels_users`
  ADD CONSTRAINT `FK_A4CC8FA67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A4CC8FAF42F66C8` FOREIGN KEY (`hotels_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD CONSTRAINT `FK_9F75D452F42F66C8` FOREIGN KEY (`hotels_id`) REFERENCES `hotels` (`id`);

--
-- Contraintes pour la table `hotel_rooms_images`
--
ALTER TABLE `hotel_rooms_images`
  ADD CONSTRAINT `FK_F0D86103CC42BAD9` FOREIGN KEY (`hotel_rooms_id`) REFERENCES `hotel_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F0D86103D44F05E5` FOREIGN KEY (`images_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reservation_rooms`
--
ALTER TABLE `reservation_rooms`
  ADD CONSTRAINT `FK_3FDECA3167B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_3FDECA31CC42BAD9` FOREIGN KEY (`hotel_rooms_id`) REFERENCES `hotel_rooms` (`id`),
  ADD CONSTRAINT `FK_3FDECA31F42F66C8` FOREIGN KEY (`hotels_id`) REFERENCES `hotels` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

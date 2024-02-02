-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 10:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveling_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `editDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `date`, `user_name`, `editDate`) VALUES
(733, 'Top 10 destinations', '1. Interlaken - The best place for top day trips 2. Zurich - Holidays in the biggest city of switzerland 3. Murren - Gimmelwald holidays at 1650meters 4. Lauterbrunnen - Holidays with an impressive landscape. 5. Iseltwald - Holidays in the fishing village directly at the lake of brienz 6. Fälensee - Holidays for hikers directly at the lake Fälensee 7. Seealpsee - Holidays at the beautiful lake seealpsee 8. Lugano - Holidays with Italian and Mediterranean Touch 9. Gruyères - Holidays for cheese lovers 10. Grindelwald', 'https://localhost/Projekti-Web/uploads/placesToVisit.png', '2024-02-02 13:26:07', 'albina', NULL),
(749, 'Weather guide', 'In Switzerland, the climate is moderately continental on the plateau, with cold, dull \r\n                            winters and warm summers, during which thunderstorms can break out in the afternoon.\r\n                            The Canton of Ticino, located on the south-facing side, has a milder and sunnier climate,\r\n                            though it is very rainy, with afternoon thunderstorms in summer and heavy rains in \r\n                            autumn.In the mountains, the climate becomes colder with increasing altitude, but in \r\n                            winter, they are located above the blanket of fog and low clouds that often covers the \r\n                            plateau, so they are also sunnier in this season.', 'https://localhost/Projekti-Web/uploads/weather.png', '2024-01-27 16:57:46', ' 	artina11', NULL),
(795, 'Bern', 'Not many cities have managed to retain their historic features quite as successfully as \r\n                            Bern, the capital of Switzerland. The old town of Bern is a UNESCO World Heritage Site \r\n                            and thanks to its 6 kilometres of arcades - the locals refer to them as \'Lauben\' - \r\n                            boasts on of the longest weather-sheltered shopping promenades in Europe.', 'https://localhost/Projekti-Web/uploads/blog-bern.png', '2024-01-27 17:03:19', ' 	artina11', NULL),
(839, 'Why visit Switzerland?', 'Switzerland is home to some of the most beautiful lakes in Europe, with crystal clear waters surrounded by \r\n                            breathtaking mountain scenery. Lake Geneva, Lake Zurich, and Lake Lucerne are just a few examples of the many \r\n                            lakes that offer a wide range of summer activities, from swimming and boating to relaxing on the shore. \r\n                            Switzerland is geographically divided among the Swiss Plateau, the Alps and the Jura; the Alps occupy the \r\n                            greater part of the territory, whereas most of the country\'s population of 9 million are concentrated on the \r\n                            plateau, which hosts the largest cities and economic centres, including Zürich, Geneva and Basel.', 'https://localhost/Projekti-Web/uploads/vistit.png', '2024-01-27 16:53:14', ' 	artina11', NULL),
(993, 'Hikes', 'Everyone knows the famous Albula Pass in the canton of Grisons. However, not the colored \r\n                            mountain lake located above the train station Preda, which lies at an altitude of over \r\n                            1900 meters. A beautiful circular hike that is not only beautiful in summer but also \r\n                            worth a top excursion in autumn. Because here you can find larches that turn gold money \r\n                            in autumn. <br>Beautiful and unique hike directly along the glacier. Did you know that the \r\n                            Aletsch glacier in the canton of Valais is the largest and longest glacier in the Alps? \r\n                            The length of the glacier is 23km, and it has a height of 900 meters of eternal ice. \r\n                            Unfortunately, the glacier melts every year by 50-80 meters, researchers predict that \r\n                            by the end of 2100 the whole glacier will have disappeared. That is, save this hike and \r\n                            watch it before the glacier is gone', 'https://localhost/Projekti-Web/uploads/hikes.png', '2024-01-27 17:00:33', ' 	artina11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `fromWhere` varchar(100) NOT NULL,
  `whereTo` varchar(100) NOT NULL,
  `howMany` int(100) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `user_id`, `fromWhere`, `whereTo`, `howMany`, `arrivals`, `leaving`) VALUES
(115, 10, 'Albania', 'Kosovo', 1, '2024-01-28', '2024-01-30'),
(574, 10, 'Kosovo', 'Switzerland', 3, '2024-01-29', '2024-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(126, 'https://localhost/Projekti-Web/uploads/img2.png'),
(429, 'https://localhost/Projekti-Web/uploads/img12.png'),
(448, 'https://localhost/Projekti-Web/uploads/img4.png'),
(511, 'https://localhost/Projekti-Web/uploads/img9.png'),
(614, 'https://localhost/Projekti-Web/uploads/img6.png'),
(626, 'https://localhost/Projekti-Web/uploads/img1.png'),
(710, 'https://localhost/Projekti-Web/uploads/img5.png'),
(716, 'https://localhost/Projekti-Web/uploads/img10.png'),
(819, 'https://localhost/Projekti-Web/uploads/img8.png'),
(835, 'https://localhost/Projekti-Web/uploads/img11.png'),
(891, 'https://localhost/Projekti-Web/uploads/img7.png'),
(998, 'https://localhost/Projekti-Web/uploads/img3.png');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `cmimi` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `emri`, `cmimi`, `image`, `description`) VALUES
(126, 'St.Moritz', 90, 'https://localhost/Projekti-Web/uploads/st.moritz.png', 'Find a little slice of luxury in St. Mortiz. The high-end town marries some of the best skiing in the world \r\n                            with some of the best shopping. It’s got glitz, glamour, and plenty of bona fides to back up its reputation \r\n                            as a winter sports heaven; St. Moritz hosted the 1928 and 1948 Winter Olympic Games.'),
(157, 'Rhine Falls', 90, 'https://localhost/Projekti-Web/uploads/rhine falls.png', 'Feel the power of Mother Nature at Rhine Falls, Europe\'s largest waterfall. Visitors can marvel at the \r\n                            thunderous waters from viewing platforms, and those feeling more adventurous can take boat trips for a closer\r\n                            experience. Just make sure to wear something waterproof.'),
(175, 'Lugano', 90, 'https://localhost/Projekti-Web/uploads/lugano.png', 'Find a little taste of Italy in Lugano, the largest Italian-speaking city in Switzerland (which counts Italian \r\n                            among its four official languages). The Swiss city offers more gorgeous promenades to stroll, along with \r\n                            delicious Italian-influenced restaurants and an art scene that can\'t be beaten.'),
(226, 'Stoos', 90, 'https://localhost/Projekti-Web/uploads/stoos.png', 'Want to feel like you’re on top of the world? Head to Stoos, a town located at 4,265 feet. The entire \r\n                            (car-free) town is adorable, but the coolest part is its funicular railway — which holds the record as the \r\n                            steepest on Earth — that takes guests some 2,400 feet high in under 10 minutes.'),
(246, 'Brienz', 90, 'https://localhost/Projekti-Web/uploads/brienz.png', 'Brienz shines its beauty with its collection of dark-timber chalets sprouting red geraniums, tooting steam train and views across\r\n                            the startlingly turquoisewaters of its namesake lake to high mountains and thick forests beyond. The deeply \r\n                            traditional village has a stuck-in-time feel with woodcarving workshops and a lakefront promenade'),
(253, 'Swiss National Park', 90, 'https://localhost/Projekti-Web/uploads/swiss national park.png', 'Get one more taste of Switzerland’s incredible natural beauty with a visit to Swiss National Park, located in \r\n                            the Engadin Valley. The park encompasses 68 square miles, making it a fantastic place to explore. While on a \r\n                            hike, see how many animals you can spot, including the park’s resident marmots, ibexes, and golden eagles.'),
(264, 'Oeschinen Lake', 90, 'https://localhost/Projekti-Web/uploads/oeschinen lake.png', 'Explore another UNESCO World Heritage Site in Switzerland with a visit to the glacial Oeschinen Lake. Like many\r\n                            places in Switzerland, this lake comes flanked by snow-capped peaks and alpine meadows, and it offers more \r\n                            than its fair share of outdoor fun, including everything from hiking and biking to ice fishing in the winter.'),
(307, 'Interlaken', 90, 'https://localhost/Projekti-Web/uploads/interlaken.png', 'Tucked between Lake Thun and Lake Brienz, travelers can find the town of Interlaken. It’s well known as \r\n                            an adventure-lovers paradise, offering the chance to hike, ski, paraglide, skydive, and more through the \r\n                            majestic mountain range surrounding the town.'),
(328, 'Gruyères', 90, 'https://localhost/Projekti-Web/uploads/gruyeres.png', 'If you’re into cheese, you’ve likely heard the name Gruyère before. Visit its namesake town, located in \r\n                            southwest Switzerland, to dig into the cheese-making tradition and to visit its fairy-tale streets surrounded \r\n                            by a positively bucolic landscape.'),
(395, 'Ticino', 90, 'https://localhost/Projekti-Web/uploads/ticino.png', 'History lovers, this one is for you. Ticino, a town in southern Switzerland, is home to not one but two UNESCO \r\n                            World Heritage Sites — the Bellinzona castles and Monte San Giorgio. Come explore them all year long, dive in \r\n                            the lake in summer, or take to the mountains for a ski trip in winter.'),
(436, 'Rapperswil', 90, 'https://localhost/Projekti-Web/uploads/rapperswil.png', 'Make your way about an hour northeast of Lake Lucerne to the town of Rapperswil, which sits on Lake Zurich. \r\n                            The town is known for its abundant roses in the spring and summer and for its medieval architecture, including\r\n                            its very own castle.'),
(486, 'Zermatt', 90, 'https://localhost/Projekti-Web/uploads/zermatt.png', 'Zermatt, which sits in the shadow of the Matterhorn, is one more car-free village that combines rustic charm \r\n                            with high-end amenities, including some of the best skiing in Europe. Of course, guests can explore the \r\n                            mountains all spring, summer, and fall by hiking and biking, or just enjoy the town’s fantastic (year-round) \r\n                            shopping opportunities.'),
(568, 'Zurich', 90, 'https://localhost/Projekti-Web/uploads/zurich.png', '“Zurich is a small gem with only 450,000 inhabitants, yet it\'s the largest and most vibrant city in \r\n                            Switzerland,” Straub shared. Zurich may be best known for its banking and shopping, but, as Staub noted, \r\n                            it “actually has a rich history dating back to the Romans.” Staub recommends seeing it all and learning \r\n                            everything you can on a walking tour with a local like her.'),
(615, 'Lej Nair', 90, 'https://localhost/Projekti-Web/uploads/lej nair.png', 'In the picturesque surroundings of St. Moritz, where Lake Staz is considered the jewel of the region, \r\n                            hides an insider tip - Lej Nair, also known as Schwarzsee. Especially in autumn, when the larches turn \r\n                            a bright golden yellow, Graubünden shines in a magnificent blaze of color. Surprisingly, the hidden Lej Nair \r\n                            is only a few minutes away from the famous Lake Staz.'),
(706, 'Montreux', 90, 'https://localhost/Projekti-Web/uploads/montreux.png', 'Montreux, positioned on the shores of Lake Geneva, is loved for its palm-lined promenade, castles, and gorgeous\r\n                            alpine vistas. It’s also the place to be over the summer when it hosts the annual Montreux Jazz Festival, \r\n                            which is worthy of planning an entire trip around.'),
(735, 'Geneva', 90, 'https://localhost/Projekti-Web/uploads/geneva.png', 'Geneva, the second-largest city in Switzerland, is renowned for its international organizations like the United                            Nations European headquarters and the International Committee of the Red Cross. It’s also a spot where travelers                             can find luxuries galore, including high-end watch shops selling some of the most exclusive pieces on Earth.'),
(742, 'Mount Rigri Kulm', 90, 'https://localhost/Projekti-Web/uploads/mount rigri kulm.png', 'Make your way to the top of Mount Rigi to get a view of three countries at once. The mountain, located between \r\n                            Lake Lucerne and Lake Zug, offers views of Switzerland, France, and Germany at the top, which you can reach by\r\n                            taking a train or hiking all the way.'),
(752, 'Lavaux Vineyard', 90, 'https://localhost/Projekti-Web/uploads/lavaux vineyard.png', 'Wine lovers will adore visiting Lavaux Vineyard, the nation’s largest contiguous vineyard area that goes on for\r\n                            nearly 2,000 acres. The vineyard is yet another one of Switzerland’s UNESCO World Heritage Sites, which comes \r\n                            with the added bonus of nice views and divine wine tastings.'),
(849, 'Bern', 90, 'https://localhost/Projekti-Web/uploads/bern.png', 'Bern, Switzerland\'s capital, offers an enticing mix of old and new. The city has retained much of its medieval \r\n                            architecture and cobblestone streets, now the setting for world-class dining venues, boutiques, and beer \r\n                            gardens, all worthy of visiting on your next trip.'),
(901, 'Appenzell', 90, 'https://localhost/Projekti-Web/uploads/appenzell.png', 'Want another car-free adventure? Head to the picturesque town of Appenzell in northeast Switzerland. The small \r\n                            community of just 7,000 full-time residents is known for its hand-made cheeses, best enjoyed with a picnic \r\n                            out in the rolling green pastures.'),
(902, 'Lake Lucerne', 90, 'https://localhost/Projekti-Web/uploads/lake lucerne.png', 'Lake Lucerne offers some of Switzerland’s most fantastic views. The glittering lake stretches on for 43 \r\n                            square miles, offering visitors the chance to hike around it, boat through it, or stay at any number of \r\n                            fantastic hotels lining its shores to enjoy the view.'),
(912, 'Quinten', 90, 'https://localhost/Projekti-Web/uploads/quinten.png', 'Quinten, which sits on the shores of Lake Walen, is the place to be for those who love to see everything on \r\n                            foot. The entire community is car-free and offers spectacular views throughout its terraced neighborhoods \r\n                            lined with vineyards overlooking the Churfirsten mountain range.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT '''user'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(2, 'artina', 'artina123@out.com', '1234567890', 'admin'),
(3, 'artina11', 'artinapira@gmail.com', 'asdfg', 'user'),
(5, 'albina', 'albina@gmail.com', '0987654321', 'admin'),
(6, 'arrr', 'artinaaa12@gmail', 'asdfgh', 'user'),
(7, 'aaa', 'awe1@gmail.com', 'asde', 'user'),
(8, 'Artinapira', 'artina@gamil.com', 'artina123A', 'user'),
(9, 'user2', 'user2@gmail.com', 'asdfghjkl', 'user'),
(10, ' 	artina11', 'artinaaa12@gmail', 'asdfg', 'user'),
(11, 'artina12', 'hhghg@hjkk', 'Tina123', 'user'),
(15, 'nita', 'nita@gmail.com', 'zxcvbnm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=994;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=730;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=913;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

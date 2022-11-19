-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turisticattractions`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `id` int(11) NOT NULL,
  `countryid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `best_visited` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`id`, `countryid`, `name`, `location`, `description`, `best_visited`) VALUES
(1, 1, 'Iguazu Falls', 'Misiones Province', 'Iguazú Falls or Iguaçu Falls are waterfalls of the Iguazu River on the border of the Argentine province of Misiones and the Brazilian state of Paraná. Together, they make up the largest waterfall system in the world. The falls divide the river into the upper and lower Iguazu. The Iguazu River rises near the heart of the city of Curitiba. For most of its course, the river flows through Brazil; however, most of the falls are on the Argentine side. Below its confluence with the San Antonio River, the Iguazu River forms the border between Argentina and Brazil. The name Iguazú comes from the Guarani or Tupi words \"y\", meaning \"water\", and \"ûasú \", meaning \"big\". Legend has it that a deity planned to marry a beautiful woman named Naipí, who fled with her mortal lover Tarobá in a canoe. In a rage, the deity sliced the river, creating the waterfalls and condemning the lovers to an eternal fall. The first European to record the existence of the falls was the Spanish Conquistador Álvar Núñez Cabeza de Vaca in 1541.', 'Spring'),
(2, 1, 'Teatro Colón', 'Buenos Aires', 'The Teatro Colón is the main opera house in Buenos Aires, Argentina. It is considered one of the ten best opera houses in the world by National Geographic. According to a survey carried out by the acoustics expert Leo Beranek among leading international opera and orchestra directors, the Teatro Colón has the room with the best acoustics for opera and the second best for concerts in the world. The present Colón replaced an original theatre which opened in 1857. Towards the end of the century it became clear that a new theatre was needed and, after a 20-year process, the present theatre opened on 25 May 1908, with Giuseppe Verdi\'s Aïda. The Teatro Colón was visited by the foremost singers and opera companies of the time, who would sometimes go on to other cities including Montevideo, Rio de Janeiro and São Paulo. After this period of huge international success, the theatre\'s decline became clear and plans were made for massive renovations. After an initial start of works to restore the landmark in 2005, the theatre was closed for refurbishment from October 2006 to May 2010. It re-opened on 24 May 2010, with a programme for the 2010 season.', 'Fall'),
(3, 1, 'Perito Moreno Glacier', 'Los Glaciares National Park', 'The Perito Moreno Glacier is a glacier located in Los Glaciares National Park in southwest Santa Cruz Province, Argentina. It is one of the most important tourist attractions in the Argentine Patagonia. The 250 km² ice formation, 30 km in length, is one of 48 glaciers fed by the Southern Patagonian Ice Field located in the Andes system shared with Chile. This ice field is the world\'s third largest reserve of fresh water. The Perito Moreno Glacier, located 78 kilometres from El Calafate, was named after the explorer Francisco Moreno, a pioneer who studied the region in the 19th century and played a major role in defending the territory of Argentina in the conflict surrounding the international border dispute with Chile.', 'Winter'),
(4, 2, 'Sydney Opera House', 'Sydney', 'The Sydney Opera House is a multi-venue performing arts centre in Sydney. Located on the foreshore of Sydney Harbour, it is widely regarded as one of the world\'s most famous and distinctive buildings and a masterpiece of 20th century architecture. Designed by Danish architect Jørn Utzon, but completed by an Australian architectural team headed by Peter Hall, the building was formally opened by Queen Elizabeth II on 20 October 1973 after a gestation beginning with Utzon\'s 1957 selection as winner of an international design competition. The Government of New South Wales, led by the premier, Joseph Cahill, authorised work to begin in 1958 with Utzon directing construction. The government\'s decision to build Utzon\'s design is often overshadowed by circumstances that followed, including cost and scheduling overruns as well as the architect\'s ultimate resignation. The building and its surrounds occupy the whole of Bennelong Point on Sydney Harbour, between Sydney Cove and Farm Cove, adjacent to the Sydney central business district and the Royal Botanic Gardens, and near to the Sydney Harbour Bridge', 'Spring'),
(5, 2, 'Great Ocean Road', 'Victorian cities of Torquay and Allansford', 'The Great Ocean Road is an Australian National Heritage listed 240-kilometre stretch of road along the south-eastern coast of Australia between the Victorian cities of Torquay and Allansford. Built by returned soldiers between 1919 and 1932 and dedicated to soldiers killed during World War I, the road is the world\'s largest war memorial. Winding through varying terrain along the coast and providing access to several prominent landmarks, including the Twelve Apostles limestone stack formations, the road is an important tourist attraction in the region. In December 2020, legislation went into effect to legally protect the Great Ocean Road – called the “Great Ocean Road Environs Protection Act 2020”. The city of Geelong, close to Torquay, experiences great benefit from Australian and international visitors to the road; with Geelong Otway Tourism affirming it as an invaluable asset. The Royal Automobile Club of Victoria listed the road as the state\'s top tourism experience in its Victoria 101 survey, based on spots recommended by members and the public on what they would recommend to visitors.', 'Summer'),
(6, 2, 'Bondi Beach', 'Sydney', 'Bondi Beach is a popular beach and the name of the surrounding suburb in Sydney, New South Wales, Australia. Bondi Beach is located 7 kilometres east of the Sydney central business district, in the local government area of Waverley Council, in the Eastern Suburbs. It has a population of 11,656 residents. Its postcode is 2026. Bondi, North Bondi, and Bondi Junction are neighboring suburbs. Bondi Beach is one of the most visited tourist sites in Australia.', 'Summer'),
(7, 3, 'Great Wall of China', 'Eurasian Steppe', 'The Great Wall of China is a series of fortifications that were built across the historical northern borders of ancient Chinese states and Imperial China as protection against various nomadic groups from the Eurasian Steppe. Several walls were built from as early as the 7th century BC, with selective stretches later joined by Qin Shi Huang, the first emperor of China. Little of the Qin wall remains. Later on, many successive dynasties built and maintained multiple stretches of border walls. The best-known sections of the wall were built by the Ming dynasty. Apart from defense, other purposes of the Great Wall have included border controls, allowing the imposition of duties on goods transported along the Silk Road, regulation or encouragement of trade and the control of immigration and emigration. Furthermore, the defensive characteristics of the Great Wall were enhanced by the construction of watchtowers, troop barracks, garrison stations, signaling capabilities through the means of smoke or fire, and the fact that the path of the Great Wall also served as a transportation corridor. The frontier walls built by different dynasties have multiple courses.', 'Spring'),
(8, 4, 'Abu Simbel Temples', 'Abu Simbel, Aswan Governorate', 'Abu Simbel is a historic site comprising two massive rock-cut temples in the village of Abu Simbel, Aswan Governorate, Upper Egypt, near the border with Sudan. It is situated on the western bank of Lake Nasser, about 230 km southwest of Aswan. The complex is part of the UNESCO World Heritage Site known as the \"Nubian Monuments\", which run from Abu Simbel downriver to Philae, and include Amada, Wadi es-Sebua, and other Nubian sites. The twin temples were originally carved out of the mountainside in the 13th century BC, during the 19th Dynasty reign of the Pharaoh Ramesses II. They serve as a lasting monument to the king Ramesses II. His wife Nefertari and children can be seen in smaller figures by his feet, considered to be of lesser importance and were not given the same position of scale. This commemorates his victory at the Battle of Kadesh. Their huge external rock relief figures have become iconic.', 'Spring'),
(9, 12, 'Eiffel Tower', 'Paris', 'The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower. Locally nicknamed \"La dame de fer\", it was constructed from 1887 to 1889 as the centerpiece of the 1889 World\'s Fair. Although initially criticised by some of France\'s leading artists and intellectuals for its design, it has since become a global cultural icon of France and one of the most recognisable structures in the world. The Eiffel Tower is the most visited monument with an entrance fee in the world: 6.91 million people ascended it in 2015. It was designated a monument historique in 1964, and was named part of a UNESCO World Heritage Site in 1991. The tower is 330 metres tall, about the same height as an 81-storey building, and the tallest structure in Paris. Its base is square, measuring 125 metres on each side. During its construction, the Eiffel Tower surpassed the Washington Monument to become the tallest human-made structure in the world, a title it held for 41 years until the Chrysler Building in New York City was finished in 1930', 'Fall'),
(10, 9, 'Saint Sava Temple', 'Belgrade', 'The Temple of Saint Sava is a Serbian Orthodox church which sits on the Vračar plateau in Belgrade, Serbia. It was planned as the bishopric seat and main cathedral of the Serbian Orthodox Church. The church is dedicated to Saint Sava, the founder of the Serbian Orthodox Church and an important figure in medieval Serbia. It is built on the presumed location of St. Sava\'s grave. His coffin had been moved from Mileševa Monastery to Belgrade. The coffin was placed on a pyre and burnt in 1595 by Ottoman Grand Vizier Sinan Pasha. Bogdan Nestorović and Aleksandar Deroko were finally chosen to be the architects in 1932 after a second revised competition in 1926–27. This sudden decision instigated an important debate in interwar Yugoslavia which centered around the temple\'s size, design and symbolic national function. This was accompanied by a sizeable increase in the base area of the ambitiously conceived project. The new design departed from the competition guidelines issued in 1926, and was to replicate the dimensions and architecture of Hagia Sophia. The first stone was laid in 1935. When Yugoslavia was under occupation in 1941, the construction was approximately ten metres high.', 'Spring'),
(11, 10, 'La Rambla', 'Barcelona', 'La Rambla is a street in central Barcelona. A tree-lined pedestrian street, it stretches for 1.2 km connecting the Plaça de Catalunya in its center with the Christopher Columbus Monument at Port Vell. La Rambla forms the boundary between the neighbourhoods of the Barri Gòtic to the east and the El Raval to the west. La Rambla can be crowded, especially during the height of the tourist season. Its popularity with tourists has affected the character of the street, which has shifted in composition to pavement cafes and souvenir kiosks. It has also suffered from the attention of pickpockets. The Spanish poet Federico García Lorca once said that La Rambla was \"the only street in the world which I wish would never end', 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `img`) VALUES
(1, 'Argentina', 'img/countries/argentina.png'),
(2, 'Australia', 'img/countries/australia.png'),
(3, 'China', 'img/countries/china.png'),
(4, 'Egypt', 'img/countries/egypt.png'),
(5, 'italy', 'img/countries/italy.png'),
(6, 'Japan', 'img/countries/japan.png'),
(7, 'Mexico', 'img/countries/mexico.png'),
(8, 'Russia', 'img/countries/russia.png'),
(9, 'Serbia', 'img/countries/serbia.png'),
(10, 'Spain', 'img/countries/spain.png'),
(11, 'United States', 'img/countries/usa.png'),
(12, 'France', 'img/countries/france.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attraction`
--
ALTER TABLE `attraction`
  ADD CONSTRAINT `attraction_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

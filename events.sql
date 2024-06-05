-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 07:14 PM
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
-- Database: `brgyuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_description` text NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_description`, `event_image`) VALUES
(5, 'A smile for every youth: Free Tooth Extraction Program ', '2024-06-16', 'The \"A Smile for Every Youth: Free Tooth Extraction Program\" offers complimentary dental services to ensure healthy smiles for children and adolescents.', 'uploads/smile.jpg'),
(6, 'Nurturing Healthy Growth: Free Vitamins for Youth ', '2024-06-30', 'Distributing free vitamins to support the physical development of children and adolescents.', 'uploads/vitamins.jpg'),
(7, 'Minding Youth: Mental Health Awareness Group', '2024-07-05', 'Raising awareness and providing support for youth mental health through group discussions and resources.', 'uploads/mental.jpg'),
(8, 'Making Informed Decisions for a Healthy Future: Teenage Pregnancy Symposium', '2024-07-16', 'Educating teenagers on pregnancy prevention and healthy life choices.', 'uploads/pregnancy.jpg'),
(9, 'Magpatuli para Pogi: Providing Free Safe Circumcision Program for the Youth', '2024-07-25', 'Offering free, safe circumcision services to promote hygiene and health in boys.', 'uploads/circumcision.jpg'),
(10, 'Spread Love, Break the Stigma: Promoting HIV/AIDS Awareness, Counseling and Testing', '2024-07-28', 'Advocating for HIV/AIDS awareness and offering free counseling and testing services.', 'uploads/HIV.jpg'),
(11, 'Choosing the Path of Knowledge, Not the Path of Addiction: Drug Awareness Seminar', '2024-08-02', 'Informing youth about the dangers of drug addiction and promoting healthy alternatives.', 'uploads/drugs.jpg'),
(12, 'Sagot ko Free Printing and Photocopy Services for Students', '2024-08-15', 'Providing free printing and photocopying services to support students educational needs.', 'uploads/service.jpg'),
(13, 'Removing Barriers to Learning: Providing Financial Assistance for Indigent Students', '2024-08-17', 'Offering financial aid to underprivileged students to support their education.', 'uploads/financial.jpg'),
(14, 'Juan for All, All for Juan: Collective Effort for BRIGADA e-SK-wela 2024', '2024-08-19', 'Encouraging community participation in preparing schools for the new academic year.', 'uploads/brigada.jpg'),
(15, 'Handog gamit e-SK-wela 2.4', '2024-08-28', 'Donating school supplies to support students educational needs.', 'uploads/handog.jpg'),
(16, 'Promoting Filipino Language and Culture: Inter-School Buwan ng Wikang Pambansang Activities', '2024-08-30', 'Celebrating and promoting Filipino language and culture through school competitions and activities.', 'uploads/wika.jpg'),
(17, 'Celebrating and promoting Filipino language and culture through school competitions and activities.', '2024-09-04', 'Encouraging intellectual engagement and public speaking skills through inter-school debates.', 'uploads/debate.jpg'),
(18, 'Community Drainage Canal Clean up Drive', '2024-09-08', 'Organizing a community effort to clean and maintain local drainage systems.', 'uploads/cleanup.jpg'),
(19, 'Means of Escape: Fire Safety and Prevention Seminar', '2024-09-11', 'Educating the community on fire safety practices and prevention methods.', 'uploads/firesafety.jpg'),
(20, 'Youth are Ready: Providing Free First Aid Kit', '2024-09-13', 'Distributing free first aid kits to prepare youth for emergencies', 'uploads/firstaid.jpg'),
(21, 'Drop, Cover, Hold: Earthquake Drill Seminar and Essential Safety Skills', '2024-09-18', 'Teaching essential earthquake safety skills through drills and seminars.', 'uploads/earthquake.jpg'),
(22, 'Usapang Basura Tayo: 5R’s and Proper Waste Segregation Seminar', '2024-09-21', 'Promoting waste segregation and the 5Rs reduce, reuse, recycle, repurpose, refuse in waste management.', 'uploads/waste.jpg'),
(23, 'Youth for Environmental Sustainability: Seminar on Climate Change', '2024-09-24', 'Promoting waste segregation and the 5Rs reduce, reuse, recycle, repurpose, refuse in waste management.', 'uploads/climatechange.jpg'),
(24, 'imekSoap-mekSoap Natin Yan: Soap Making Project', '2024-09-29', 'Engaging the community in making soap as a livelihood and hygiene project.', 'uploads/soap.jpg'),
(25, 'TESDA on the go: Bringing Skills Development Program', '2024-10-03', 'Engaging the community in making soap as a livelihood and hygiene project.', 'uploads/tesda.jpg'),
(26, 'EmployABLE: Inclusive Livelihood Program for Disabled Individuals (BASAHAN)', '2024-10-06', 'Supporting livelihood opportunities for disabled individuals through the BASAHAN program.', 'uploads/disable.jpg'),
(27, 'KKDAT: Kabataan Kontra Droga at Terorismo Seminar', '2024-10-10', 'Educating youth on the dangers of drugs and terrorism through the KKDAT seminar.', 'uploads/terorismo.jpg'),
(28, 'Basic Self Defense Training', '2024-10-14', 'Educating youth on the dangers of drugs and terrorism through the KKDAT seminar.', 'uploads/defense.jpg'),
(29, 'Alcohol and Drug Abuse Seminar', '2024-10-15', 'Raising awareness about the dangers of alcohol and drug abuse.', 'uploads/alcohol.jpg'),
(30, 'War on Drugs: Video Making Competition and Free Drug Education Pamphlets', '2024-10-17', 'Raising awareness about the dangers of alcohol and drug abuse.', 'uploads/war.jpg'),
(32, 'Katipunan ng Kabataan Assembly with Mandated Conduct of Youth Profiling and Database', '2024-10-20', 'Gathering youth for a collective assembly and maintaining a youth profiling database.', 'uploads/katipunan.jpg'),
(33, 'YOUth LEAD: Enhancing Leadership Skills through Youth Leadership Camp', '2024-10-23', 'Gathering youth for a collective assembly and maintaining a youth profiling database.', 'uploads/leadership.jpg'),
(34, 'International National Youth Day Celebration', '2024-10-26', 'Celebrating youth contributions and achievements on International Youth Day.', 'uploads/youth.jpg'),
(35, 'Palarong Pinoy 2024', '2024-10-27', 'Celebrating youth contributions and achievements on International Youth Day.', 'uploads/palarongpinoy.jpg'),
(36, 'Creative Reuse: Recycled Banderitas Making Contest', '2024-10-30', 'Creative Reuse: Recycled Banderitas Making Contest', 'uploads/banderitas.jpg'),
(37, 'Saint Francis of Assisi Feast Day Celebration', '2024-10-04', 'Celebrating the feast day of Saint Francis of Assisi with community activities.', 'uploads/stfrancis.jpg'),
(38, 'Storytelling and Book Donation Drive', '2024-10-07', 'Encouraging literacy and community engagement through storytelling sessions and book donations.', 'uploads/book.jpg'),
(39, 'SK-ary Halloween Costume Contest', '2024-10-31', 'Hosting a Halloween costume contest to engage and entertain the youth.', 'uploads/halloween.jpg'),
(40, 'A Beacon of Hope and Tradition: SK San Francisco Parol Making Contest', '2024-11-05', 'Celebrating tradition through a parol (Christmas lantern) making contest.', 'uploads/parol.jpg'),
(41, 'PamaSKong Handog 2024', '2024-12-10', 'Distributing Christmas gifts to bring joy to the community.', 'uploads/pamaskonghandog.jpg'),
(42, 'Hiram mo, Sauli mo: Borrowing Sports Equipments', '2024-11-13', 'Offering a borrowing program for sports equipment to encourage physical activity.', 'uploads/sports.png'),
(43, 'Sk San Francisco Sports Tournament', '2024-11-16', 'Organizing a sports tournament to promote physical fitness and community spirit.', 'uploads/sports.png'),
(44, 'School Supplies Para Sayo Kapalit ay Jersey Ko: A Summer Basketball & Volleyball League', '2024-11-26', 'Hosting a summer league where participants receive school supplies in exchange for their jerseys.', 'uploads/summer.jpg'),
(45, 'Cong. Len Alonte Youth Week Volleyball League: Men’s and Women’s Division', '2024-11-22', 'Hosting a volleyball league for youth during Youth Week.', 'uploads/volley.jpg'),
(46, 'Vice Mayor Gel Alonte Sports Week 3x3 Basketball Challenge', '2024-12-01', 'Organizing a 3x3 basketball challenge during Sports Week.', 'uploads/3x3.jpg'),
(47, 'Mayor Atty. Arman R. Dimaguila Jr. Inter Barangay Men’s Basketball and Volleyball Tournament 2024', '2024-09-24', 'Hosting an inter-barangay basketball and volleyball tournament in 2024.', 'uploads/inter.jpg'),
(48, 'Online Sexual Exploitation Seminar', '2024-09-03', 'Educating youth about the dangers and prevention of online sexual exploitation.', 'uploads/exploitation.jpg'),
(49, 'Seminar on Human Dignity and Human Rights', '2024-09-12', 'Promoting awareness of human dignity and human rights through an educational seminar.', 'uploads/dignity.jpg'),
(50, 'Youth Celebrating ASEAN Unity through Creative Expressions of Culture', '2024-08-17', ' Celebrating ASEAN unity and culture through creative youth expressions.', 'uploads/asean.jpg'),
(51, 'Let’s Grow Together: Free Vegetables Seeds', '2024-08-18', 'Distributing free vegetable seeds to encourage home gardening and self-sufficiency.', 'uploads/seed.jpg'),
(52, 'Say No to Plastic, Say Yes to ECO-BAG', '2024-06-28', 'Promoting the use of eco-bags to reduce plastic waste.', 'uploads/ecobag.jpg'),
(53, 'Plan A Life: Juan Tree Planting Project:', '2024-07-03', 'Engaging the community in tree planting to support environmental sustainability.\r\n\r\n', 'uploads/plant.jpg'),
(54, 'Cultivating Healthier Lifestyle: Promoting Organic Vegetable Gardening', '2024-09-21', 'Encouraging organic vegetable gardening to promote healthier lifestyles.\r\n', 'uploads/organic.png'),
(55, 'The Future of Farming: Hands-On Hydroponics Training and Seminar', '2024-10-20', 'Offering training and seminars on hydroponics to introduce innovative farming techniques.', 'uploads/hydro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

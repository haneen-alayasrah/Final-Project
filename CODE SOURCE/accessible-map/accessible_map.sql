-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accessible_map`
--

-- --------------------------------------------------------

--
-- Table structure for table `articlecomments`
--

CREATE TABLE `articlecomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articlecomments`
--

INSERT INTO `articlecomments` (`id`, `article_id`, `user_id`, `comment`, `created_at`, `updated_at`, `username`) VALUES
(1, 3, 11, 'nice', '2022-03-14 10:39:54', '2022-03-14 10:39:54', 'haneen'),
(2, 3, 11, 'hi', '2022-03-14 10:40:35', '2022-03-14 10:40:35', ''),
(3, 3, 11, 'jjjj', '2022-03-14 10:41:10', '2022-03-14 10:41:10', ''),
(4, 3, 11, 'herk', '2022-03-14 10:41:38', '2022-03-14 10:41:38', ''),
(5, 3, 11, 'xsx', '2022-03-14 10:43:48', '2022-03-14 10:43:48', 'haneen'),
(7, 1, 15, 'cool', '2022-03-25 19:02:59', '2022-03-25 19:02:59', 'xvgs'),
(8, 1, 15, 'cool', '2022-03-25 19:06:01', '2022-03-25 19:06:01', 'xvgs'),
(10, 1, 15, 'cool', '2022-03-25 19:07:21', '2022-03-25 19:07:21', 'xvgs'),
(14, 4, 15, 'cool', '2022-03-26 12:13:41', '2022-03-26 12:13:41', 'xvgs');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `image`, `type`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'HCD Launches 10-Year Accessibility Plan for Jordan', 'On Monday 11/3/2019, under the patronage of HE Prime Minister Dr. Omar Al Razzaz, the Ministry of Public Works and Housing and the Higher Council for the Rights of Persons with Disabilities (HCD) launched \"The National Plan for Rectifying Existing Buildings and Public Facilities 2019-2029\" in Jordan. This marks a huge step and turning point in the fight for accessibility in Jordan. This new plan to improve accessibility in Jordan comes in compliance with the provisions of the Law on the Rights of Persons with Disabilities No. 20 for the Year 2017, which obliges the relevant executive authorities to develop a 10-year national plan that includes solutions and alternatives for existing public buildings and facilities, which in the course of 10 years will be made accessible for persons with disabilities and adapted to their requirements for access to services independently and on an equal basis with others.\n\nThe main authorities to be involved in the implementation of this plan includes:\n\nMinistry of Public Works and Housing\nGreater Amman Municipality\nHigher Council for the Rights of Persons with Disabilities\nMinistry of Education\nMinistry of Tourism and Antiquities\nMinistry of Health\nMinistry of Transportation\nMinistry of Municipal Affairs', '1645903622.jpg', 'thoughts', NULL, NULL, NULL, 0, 'Haneen Omar Ayasrah', '2022-02-23 16:33:37', '2022-03-09 08:15:59'),
(3, 'JITOA Announces Partnership with Accessible Jordan', 'On Monday 11/3/2019, under the patronage of HE Prime Minister Dr. Omar Al Razzaz, the Ministry of Public Works and Housing and the Higher Council for the Rights of Persons with Disabilities (HCD) launched \"The National Plan for Rectifying Existing Buildings and Public Facilities 2019-2029\" in Jordan. This marks a huge step and turning point in the fight for accessibility in Jordan. This new plan to improve accessibility in Jordan comes in compliance with the provisions of the Law on the Rights of Persons with Disabilities No. 20 for the Year 2017, which obliges the relevant executive authorities to develop a 10-year national plan that includes solutions and alternatives for existing public buildings and facilities, which in the course of 10 years will be made accessible for persons with disabilities and adapted to their requirements for access to services independently and on an equal basis with others.\n\nThe main authorities to be involved in the implementation of this plan includes:\n\nMinistry of Public Works and Housing\nGreater Amman Municipality\nHigher Council for the Rights of Persons with Disabilities\nMinistry of Education\nMinistry of Tourism and Antiquities\nMinistry of Health\nMinistry of Transportation\nMinistry of Municipal Affairs', '1645903532.jpg', 'news', 'JITOA Announces Partnership with Accessible Jordan', 'On Monday night, the Jordan Inbound Tour Operators Association (JITOA) held it’s Annual Appreciation Reception to thank its members for the work done in 2018 and share their vision of 2019.', 'jordan , amman', 0, 'Haneen Omar Ayasrah', '2022-02-26 16:25:32', '2022-02-26 16:25:32'),
(4, 'Making Petra Accessible for All', 'On July 20th, 2018, I had the privilege of joining the Majd Initiative on a trip to assess the accessibility of Petra for people of all abilities. The group was made up of 40 participants from Amman, 20 of which had various disabilities ranging from visual impairment to limited mobility and 20 volunteers to assist when needed. The idea of this trip was to get feedback from all the different participants on how their experience in Petra can be improved depending on their abilities. This was the first trip planned from a total of three. The next two trips will be for groups from Zarqa and Irbid.\r\n \r\nBefore I tell you about the day we spent in Petra, I want to introduce you to the Majd Initiative. The Majd Initiative, founded by Abdel Rahman Salameh, is an initiative launched in honor of a little girl who had muscular dystrophy and was refused admission to school, and later passed away during a surgery to treat her disability. Abdul Rahman decided to launch an initiative in her honor that will focus on promoting accessible tourism for people with disabilities in Jordan and work with interested parties to improve accessibility in tourism sites so all people can enjoy the experiences Jordan has to offer.\r\n \r\nI met with the group at the Petra Visitor Center were arrangements were made to facilitate the trip. I was happy to learn that the museum on the site was wheelchair accessible and the Visitor Center had several accessible bathrooms available, which is something not very common in Jordan. To reach the treasury, participants were given the option of riding golf carts that would drive them through the Siq directly to the Treasury. Unfortunately, the golf carts are not wheelchair accessible and some of the participants needed to be carried on to them and have their wheelchairs stowed in the back of the cart.\r\n \r\nI opted out of riding the golf carts to have the full experience of the Siq and walk to the Treasury. Even though it was a rough journey, it was definitely worth it. The terrain to the treasury varied in difficulty. I had someone with me at all times pushing me because the pathway varied in its composition. At some points, it was paved and easy to be pushed on but at other points it was soft sand or huge rocks that needed extra strength to get through or be lifted over.  \r\n \r\n\r\nHowever, with the assistance available, we were able to reach the Treasury! For many of the participants, this was a first time experience and they were so happy to finally be able to see their country’s world wonder that people from all over the travel to Jordan to see.\r\n \r\nAccessible Jordan has partnered up with the Majd Initiative to write a report based on the reviews and recommendations of all three groups’ participants on how to improve the accessibility and experience of Petra for all people. This report will be presented to the Ministry of Tourism and Antiquities and the Higher Council on the Rights of People with Disabilities so they can take the necessary next steps to make Petra accessible for all.', '1645903693.jpg', 'experiences', NULL, NULL, NULL, 0, 'Haneen Omar Ayasrah', '2022-02-26 16:28:13', '2022-02-26 16:28:50'),
(5, 'The Inclusion of People with Disabilities in Jordan is \"Mish Mustaheel\"', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #4a4a4a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">On Monday 11/3/2019, under the patronage of HE Prime Minister Dr. Omar Al Razzaz, the Ministry of Public Works and Housing and the Higher Council for the Rights of Persons with Disabilities (HCD) launched \"The National Plan for Rectifying Existing Buildings and Public Facilities 2019-2029\" in Jordan. This marks a huge step and turning point in the fight for accessibility in Jordan. This new plan to improve accessibility in Jordan comes in compliance with the provisions of the Law on the Rights of Persons with Disabilities No. 20 for the Year 2017, which obliges the relevant executive authorities to develop a 10-year national plan that includes solutions and alternatives for existing public buildings and facilities, which in the course of 10 years will be made accessible for persons with disabilities and adapted to their requirements for access to services independently and on an equal basis with others.</p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #4a4a4a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">The main authorities to be involved in the implementation of this plan includes:</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #4a4a4a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box;\">Ministry of Public Works and Housing</li>\n<li style=\"box-sizing: border-box;\">Greater Amman Municipality</li>\n<li style=\"box-sizing: border-box;\">Higher Council for the Rights of Persons with Disabilities</li>\n<li style=\"box-sizing: border-box;\">Ministry of Education</li>\n<li style=\"box-sizing: border-box;\">Ministry of Tourism and Antiquities</li>\n<li style=\"box-sizing: border-box;\">Ministry of Health</li>\n<li style=\"box-sizing: border-box;\">Ministry of Transportation</li>\n<li style=\"box-sizing: border-box;\">Ministry of Municipal Affairs</li>\n</ul>', '1645903832.jpg', 'thoughts', NULL, NULL, NULL, 0, 'Haneen Omar Ayasrah', '2022-02-26 16:30:32', '2022-03-09 08:33:32'),
(6, 'Accessible Jordan is getting funding from UNESCO\'s NET-MED Youth!', 'On Wednesday, February 7, 2018, I had the honor of being a guest speaker at UNESCO\'S NET-MED Youth Open Day and Networking Event and got the chance to have a booth dedicated to showcasing Accessible Jordan to all the event\'s attendees.\r\n \r\nThe UNESCO Networks of Mediterranean Youth project (NET-MED Youth), funded by the European Union, and implemented in partnership with youth organizations, institutions and partners is working to promote and contribute to the creation of an enabling environment for young women and men to develop their competencies, exercise their rights and meaningfully engage as active citizens. The project strives to encourage young women and men to become actively engaged in building their communities and becoming agents of positive change.\r\n \r\nThe event was under the the Royal Patronage of His Royal Highness Faisal Bin Al- Hussein, and showcased the project’s main achievements over the past 3 years and present various youth initiatives that fall within the project’s objectives and contribute to the National Youth Empowerment Strategy (2017 – 2025).\r\n \r\nDuring my time speaking, I was excited to share the news that UNESCO\'s NET-MED Youth will be funding Accessible Jordan to upgrade the Accessible Jordan website, making it more user-friendly and interactive. UNESCO\'s NET-MED Youth\'s support will help Accessible Jordan grow by reaching more people and allowing the community we\'ve built to be more involved in the process of improving accessibility in Jordan. \r\n \r\nI would like to thank UNESCO\'s NET-MED Youth and Ms. Costanza Farina, UNESCO Representative to Jordan, for this opportunity and being the first organization to officially support Accessible Jordan and I\'m looking forward to seeing Accessible Jordan continue to grow!\r\nSHARE', '1648244721.jpg', 'news', NULL, NULL, NULL, 0, 'xvgs', '2022-03-25 18:45:21', '2022-03-25 18:45:21'),
(7, 'Leaving no one behind: EU, UNESCO promote inclusion in Jordan for persons with disabilities with ‘Accessible Jordan’', 'Under the patronage of HRH Prince Mired Bin Ra’ad Bin Zeid, the European Union (EU) and UNESCO, today hosted a high-level event on International Day of Persons with Disabilities.\r\n\r\nWith a strong emphasis on the 2030 Agenda for Sustainable Development \"leaving no one behind\", the event celebrated Jordan’s inclusion achievements. The EU and UNESCO commemorated their contributions to promoting accessibility in Jordan, specifically under the “Networks of Mediterranean Youth (NET-MED Youth)” project. The UNESCO Amman office has been implementing the project since 2014, with strong collaboration from the EU in partnership with youth organizations, institutions and partners.\r\n\r\nThe NET-MED Youth project has provided support to Aya Aghabi’s “Accessible Jordan” initiative since 2017. Accessible Jordan works with businesses, organizations and individuals to improve the accessibility of their spaces, events and experiences. By bringing attention to the accessibility dimension of spaces, “Accessible Jordan” hopes to encourage engagement, improve accessibility and achieve inclusivity for all. Recently, with support from the European Union, Accessible Jordan has launched a brand-new web portal with a large database of accessible spaces around Jordan, making it easier for people to find the places they can access depending on their needs and with just a few “clicks”.\r\n\r\nThe event attracted high-level representation, including HRH Prince Mired Bin Ra’ad Bin Zeid, HRH Prince Faisal Bin Ra’ad and Ms. Corinne Andre, Head of Cooperation at the EU Delegation to Jordan. Acting as panelists, the event also featured the voices of HE Haifa Najjar, Senator of the Upper House of Jordanian Parliament, HE Issa Gammoh, Secretary General of the Ministry of Tourism, Mr. Daniel Sharaiha of Bank al Etihad, HE Dr. Muhanned Alazzeh, Secretary General of the Higher Council for the Rights of Persons with Disabilities, Ms. Rana Kawar, UNICEF Education Specialist, and Ms. Hadeel Abu Soufeh, Disability Rights Activist.', '1648244844.jpg', 'news', NULL, NULL, NULL, 0, 'xvgs', '2022-03-25 18:47:24', '2022-03-25 18:47:24'),
(8, 'Access to Healthcare is a Right for Everyone', 'Many people in Jordan take it for granted how easy it is for them to reach a doctor, clinic, healthcare provider or hospital when they need it. Every year, we have thousands of doctors graduating from universities across the country so the issue is not lack of availability of care. The issue is being able to reach this care in terms of accessibility. After obtaining my spinal cord injury and leaving the hospital, reaching a doctor became one of the biggest challenges of my life. Every time I needed medical attention, I had to find a doctor based on the accessibility of their clinic or if they can come see me at my house instead of picking a doctor based on their experience or reputation. Many times, my mom has to go see doctors on my behalf and explain to them my medical need without them seeing me in person because their clinics aren’t accessible. Sometimes, we would make an appointment at a doctor’s clinic only to get there and find out I couldn’t enter the building the clinic is in.', '1648244975.jpg', 'thoughts', NULL, NULL, NULL, 0, 'xvgs', '2022-03-25 18:49:35', '2022-03-25 18:49:35'),
(9, 'Accessible Transportation Is Crucial For Economic Growth', 'A few months ago, I was contacted by a person from the UK who uses an electric wheelchair and was interested in visiting Jordan. He heard about Accessible Jordan from a friend and thought I could help him in planning his trip. One of his biggest concerns was finding accessible transportation because he uses a power wheelchair that does not fold and weighs about 150 kg, and needs one that has a ramp so he can get in and out of the vehicle easily. We spent a month contacting every disability organization and individuals with disabilities in Jordan asking if they know any person or place that might have an accessible vehicle he can use during his trip with no success. We only found one tour bus but the cost to rent it was too high. Unfortunately, the person had to cancel his plans to come to Jordan because of this issue. This experience opened my eyes to a major issue facing the disability community in Jordan, especially people with physical disabilities, that is the lack of accessible transportation.', '1648245018.jpg', 'thoughts', NULL, NULL, NULL, 0, 'xvgs', '2022-03-25 18:50:18', '2022-03-25 18:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amman', 'Amman', 'Amman Mate Description', 'Amman Mate Keyword', 0, 0, '2022-02-23 06:14:55', '2022-02-23 06:15:09'),
(3, 'Jerash', 'Jerash', 'Jerash', 'Jerash', 0, 0, '2022-02-23 09:59:10', '2022-03-01 05:28:26'),
(4, 'Zarqa', 'Zarqa', 'Zarqa', 'Zarqa', 0, 0, '2022-03-01 05:26:41', '2022-03-01 05:26:41'),
(5, 'Irbid', 'Irbid', 'Irbid', 'Irbid', 0, 0, '2022-03-01 05:27:02', '2022-03-01 05:27:02'),
(6, 'Aqaba', 'Aqaba', 'Aqaba', 'Aqaba', 0, 0, '2022-03-01 05:27:36', '2022-03-01 05:27:36'),
(7, 'al-Mafraq', 'al-Mafraq', 'al-Mafraq', 'al-Mafraq', 0, 0, '2022-03-01 05:28:07', '2022-03-01 05:28:07'),
(8, 'Ma\'an', 'Ma\'an', 'Ma\'an', 'Ma\'an', 0, 0, '2022-03-01 05:28:45', '2022-03-01 05:28:45'),
(9, 'al-Karak', 'al-Karak', 'al-Karak', 'al-Karak', 0, 0, '2022-03-01 05:29:12', '2022-03-01 05:29:12'),
(10, 'Balqa', 'Balqa', 'Balqa', 'Balqa', 0, 0, '2022-03-01 05:29:58', '2022-03-01 05:29:58'),
(11, 'Ajloun', 'Ajloun', 'Ajloun', 'Ajloun', 0, 0, '2022-03-01 05:30:33', '2022-03-01 05:30:33'),
(12, 'Madaba', 'Madaba', 'Madaba', 'Madaba', 0, 0, '2022-03-01 05:31:34', '2022-03-01 05:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `message`, `sent_by`, `created_at`, `updated_at`, `email`, `number`) VALUES
(1, 'ldvd bdx d', '', NULL, NULL, '', NULL),
(2, 'hi', 'Haneen Omar Ayasrah', '2022-02-26 15:35:08', '2022-02-26 15:35:08', 'haneen.alayasrah@gmail.com', NULL),
(3, 'thanks', 'xvgs', '2022-02-26 15:36:20', '2022-02-26 15:36:20', 'hanon.omar22@gmail.com', '077799281456'),
(4, 'loveyou', 'abdullah', '2022-02-26 15:39:25', '2022-02-26 15:39:25', 'abdallah@gmail.com', '077799281456'),
(5, 'fzd', 'haneen', '2022-03-02 09:38:49', '2022-03-02 09:38:49', 'hanrah@gmail.com', '077799281456');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_21_192147_add_role_as_to_users_table', 2),
(6, '2022_02_22_110608_create_types_table', 3),
(7, '2022_02_23_073449_create_cities_table', 4),
(10, '2022_02_23_081805_create_places_table', 5),
(12, '2022_02_23_132646_create_articles_table', 6),
(14, '2022_02_23_191452_create_contacts_table', 7),
(15, '2022_02_23_200631_create_comments_table', 8),
(16, '2022_02_26_182046_alter_table_contacts', 8),
(17, '2022_03_14_093405_add_user_id_to_comments_table', 9),
(18, '2022_03_14_132058_create_articlecomments_table', 10),
(20, '2022_03_14_132432_create_articlecomments_table', 11),
(21, '2022_03_25_215703_add_username_to_articlecomments_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_accessible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_and_facilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `city_id`, `type_id`, `name`, `description`, `phone`, `location`, `image`, `social`, `features_accessible`, `features_and_facilities`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 4, 1, 'INJAZ FOR YOUTH', 'NJAZ was founded in 1999 as a project under a USAID-funded program, Save the Children. In 2001, INJAZ became an independent, nonprofit Jordanian organization. Over the past 18 years, INJAZ has established itself as a leading solution provider linking the public, private, and civil society sectors to bridge the skills gap between the educational system and the changing needs of the labor market.', 65657410, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.96652,35.88177', '1645958828.jpg', 'http://injaz.org.jo/Pages/viewpage.aspx?pageID=111', 'Accessible bathroom\r\nAccessible parking\r\nVerified by Accessible Jordan', 'Organization of Student Exchange Programs', NULL, NULL, NULL, 0, 5, '2022-02-27 07:47:08', '2022-02-27 07:47:08'),
(6, 1, 4, 'LANDMARK AMMAN HOTEL & CONFERENCE CENTER', 'Landmark has ramps on nearly all stairways, including the main hotel entrance and to their outlets, to enable the passage of anyone with wheelchairs, also, for access to our famous royal hall, they have a specially made wheelchair elevator that can be used to ensure everyone has a way into the hall and of course special parking spots for those with disabilities. They have 2 accessible bedrooms equipped with lower furniture, accesible bathrooms with equipped toilets and showers. The room doors have 2 peep holes with one that is lower for those in wheelchairs and one of the rooms is also equipped with a light fire alarm, for those who have hearing-impairment.', 65607100, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.96041,35.90408', '1645959263.jpg', 'www.landmarkamman.com', 'Accessible bathroom\r\nAccessible parking\r\nValet available\r\nVerified by Accessible Jordan\r\nAccessible rooms\r\nRoll-in showers', 'Hotels\r\nFive Star Hotel\r\nHotel Serving Alcohol\r\nHotel Includes Bar & Nightclub\r\nHotel Includes Restaurant & Cafe', NULL, NULL, NULL, 0, 5, '2022-02-27 07:54:23', '2022-02-27 07:54:23'),
(7, 1, 1, 'ROMERO RESTAURANT', 'The outdoor area/garden of the restaurant is wheelchair accessible but to enter the inside of the restaurant, there are 2 steps as shown in the pictures.', 64644227, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.95272,35.91235', '1645959413.jpg', 'www.romerogroup.jo', 'Accessible seating (ex. not stools)\r\nVerified by Accessible Jordan\r\nValet available', 'Italian Cuisine / Restaurant\r\nFood Delivery\r\nProviding Internet Access\r\nServing Alcohol\r\nTake Out Eating Places / Take Away\r\nIncluding Bar\r\nSeating, Fine Dining\r\nMid-High 21-30JD\r\nSmoking is Allowed\r\nHas Outdoor Area', NULL, NULL, NULL, 0, 5, '2022-02-27 07:56:53', '2022-02-27 07:56:53'),
(8, 1, 1, 'GHOROUB SUNSET BAR & LOUNGE', 'Ghoroub Sunset Bar & Lounge is located in the Landmark Hotel and has a portable ramp at it\'s entrance for access for wheelchair users. They have high tables with stools for seating, if you need a lower table with regular chairs, you need to call ahead of time and ask for a lower table and they will make the arrangements for you.', 798331313, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.96041,35.90408', '1646032471.png', 'www.landmarkamman.com', 'Accessible bathroom\r\nAccessible parking\r\nValet available\r\nVerified by Accessible Jordan', 'Discotheques & Nightclubs / Clubbing / Pubs / Bars / Taverns & Cocktail Lounges\r\nBars Serving Hooka / Hubbly Bubbly / Shisha\r\nBars Providing Internet Access Wi FI\r\nSmoking is Allowed Inside Bar\r\nBar Has Outdoor Area\r\nBars Accept Credit Card', NULL, NULL, NULL, 0, 5, '2022-02-28 04:14:31', '2022-02-28 04:14:31'),
(9, 1, 1, 'THE CHILDREN\'S MUSEUM JORDAN', 'The Children\'s Museum is fully accessible for people with mobility impairment.', 65411479, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.98445,35.82542', '1646044926.jpg', 'www.cmj.jo', 'Accessible parking', 'Intellectual, Cultural Organization', NULL, NULL, NULL, 0, 5, '2022-02-28 07:42:06', '2022-02-28 07:42:06'),
(10, 1, 1, 'WARAK ENAB RESTAURANT', 'There is a ramp to enter the outdoor area of the restaurant from a side entrance then they have portable ramps they use on the few steps they have to go to the indoor area.', 65922224, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.95986,35.87586', '1646045147.jpg', 'www.facebook.com/warakenabrestaurant', 'Accessible seating (ex. not stools)', 'International Cuisine / Restaurant\r\nFood Delivery\r\nProviding Internet Access\r\nTake Out Eating Places / Take Away\r\nSeating, Casual Dining\r\nMid 11-20JD\r\nSmoking is Allowed\r\nHas Outdoor Area\r\nScreen Show, Sports Music etc\r\nKids Play Area & Activities', NULL, NULL, NULL, 0, 5, '2022-02-28 07:45:47', '2022-02-28 07:45:47'),
(11, 1, 1, 'AL ZUWWADEH RESTAURANT', 'The restaurant is fully accessible indoors and outdoors. The outdoor terrace is great during the summer.', 64721528, 'https://www.google.com/maps?saddr=Current+Location&daddr=32.00264,35.79711', '1646045384.jpg', 'www.zuwwadeh.com', 'Valet available\r\nAccessible seating (ex. not stools)', 'Arabic Cuisine , Restaurant\r\nSeating, Casual Dining\r\nSmoking is Allowed\r\nHas Outdoor Area\r\nScreen Show, Sports Music etc\r\nKids Play Area & Activities', NULL, NULL, NULL, 0, 5, '2022-02-28 07:49:44', '2022-02-28 07:50:20'),
(12, 1, 1, 'CAFE ITALIA', 'Cafe Italia is located in The Boulevard inside of Arjaan by Rotana and is accessible from the main street entrance of Arjaan, underground parking and inside The Boulevard. All seating areas are accessible. It is equipped with a ramp inside and has an accessible bathroom as well.', 65204445, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.96447,35.90519', '1646045703.jpg', 'www.rotana.com/theboulevardarjaanbyrotana', 'Accessible bathroom\r\nAccessible parking\r\nValet available\r\nAccessible seating (ex. not stools)', 'Italian Cuisine / Restaurant\r\nProviding Internet Access\r\nServing Alcohol\r\nCoffee Shops, Cafes Have Outdoor Area\r\nCoffee Shops, Cafes Accept Credit Card', NULL, NULL, NULL, 0, 5, '2022-02-28 07:55:03', '2022-02-28 07:55:03'),
(13, 1, 1, 'AL SALOUS SUPERMARKET', 'No Description Available', 799600916, 'https://www.google.com/maps?saddr=Current+Location&daddr=31.95061,35.93647', '1646045892.jpeg', 'www.facebook.com/saloussupermarket', 'No Accessibility Features Available', 'Supermarkets Supermarket Grocery Store', NULL, NULL, NULL, 0, 5, '2022-02-28 07:58:12', '2022-02-28 07:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'cafe', 'meta cafe title', 'meta cafe', 'meta cafe', 0, 0, '2022-02-22 12:35:07', '2022-02-22 12:35:07'),
(4, 'school', 'school', 'school', 'school', 0, 0, '2022-02-23 09:52:37', '2022-02-23 09:52:37'),
(5, 'Beauty Centers', 'Beauty Centers', 'Beauty Centers', 'Beauty Centers', 0, 0, '2022-03-25 18:31:53', '2022-03-25 18:31:53'),
(6, 'Coffee Shops', 'Coffee Shops', 'Coffee Shops', 'Coffee Shops', 0, 0, '2022-03-25 18:32:16', '2022-03-25 18:32:16'),
(7, 'Dentists', 'Dentists', 'Dentists', 'Dentists', 0, 0, '2022-03-25 18:32:45', '2022-03-25 18:32:45'),
(8, 'Employment Agencies', 'Employment Agencies', 'Employment Agencies', 'Employment Agencies', 0, 0, '2022-03-25 18:33:07', '2022-03-25 18:33:07'),
(9, 'Hospitals', 'Hospitals', 'Hospitals', 'Hospitals', 0, 0, '2022-03-25 18:33:41', '2022-03-25 18:33:41'),
(10, 'Hotels', 'Hotels', 'Hotels', 'Hotels', 0, 0, '2022-03-25 18:34:20', '2022-03-25 18:34:20'),
(11, 'Insurance Companies', 'Insurance Companies', 'Insurance Companies', 'Insurance Companies', 0, 0, '2022-03-25 18:34:48', '2022-03-25 18:34:48'),
(12, 'Malls , Shopping Centers', 'Malls Shopping Centers', 'Malls , Shopping Centers', 'Malls y, Shopping Centers', 0, 0, '2022-03-25 18:35:21', '2022-03-25 18:35:21'),
(13, 'Medical Labs', 'Medical Labs', 'Medical Labs', 'Medical Labs', 0, 0, '2022-03-25 18:35:49', '2022-03-25 18:35:49'),
(14, 'Veterinarians', 'Veterinarians', 'Veterinarians', 'Veterinarians', 0, 0, '2022-03-25 18:36:31', '2022-03-25 18:36:31'),
(15, 'Sale of Gold, Jewelry, Watches', 'Sale of Gold, Jewelry, Watches', 'Sale of Gold, Jewelry, Watches', 'Sale of Gold, Jewelry, Watches', 0, 0, '2022-03-25 18:37:00', '2022-03-25 18:37:00'),
(16, 'Social Work Activities', 'Social Work Activities', 'Social Work Activities', 'Social Work Activities', 0, 0, '2022-03-25 18:37:20', '2022-03-25 18:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(8, 'ravd', 'afew@gmail.com', '2022-03-09 11:06:04', '123Aa***', NULL, '2022-03-02 11:06:04', '2022-03-02 09:33:21', 0),
(9, 'Haneen Omar Ayasrah', 'haneen.alayasrah@gmail.com', NULL, '$2y$10$Ji5Bbe9OCwo.B7AnI4lexOPurqEvNoLEjqoIO99faI.Lr8PDHJQyy', NULL, '2022-03-07 13:21:35', '2022-03-07 13:21:35', 1),
(10, 'xvgs', 'hanon.omar22@gmail.com', NULL, '$2y$10$eBSkPjDLiu7syaFp9iDMgejpLHE9EIBj15JgjeEXRGA1brrMbrjuq', NULL, '2022-03-07 13:28:37', '2022-03-07 13:28:37', 1),
(11, 'Haneen Omar Ayasrah', 'haneen@gmail.com', NULL, '$2y$10$CCCz0nQ5PlQr00TKRL04ZO2uQDhQGy.vBSwMylZAN2xVVvZz55nUu', NULL, '2022-03-09 04:48:20', '2022-03-09 04:48:20', 1),
(12, 'xvgs', 'hanon@gmail.com', NULL, '$2y$10$CQxi3t1nzgnYOWZCn/VjiO6tQAkyGpf/OPX460hJBoFqb2ps.tWMG', NULL, '2022-03-15 04:27:02', '2022-03-15 04:27:02', 0),
(13, 'haneen omar ayasrah', 'haneen1@gmail.com', NULL, '$2y$10$jElBOf.tHMJNQJEbvAPjyOvDJWfwXca/B5aDfduLoUGCC2Xw2ythK', NULL, '2022-03-19 14:28:09', '2022-03-19 14:28:09', 0),
(14, 'haneen-alayasrah', 'hanee2@gmail.com', NULL, '$2y$10$tN9rVDhHHK5Fpf3mgJs5OeKRviuW0E2OMpU5/ebH5Fj4Qseh27x4e', NULL, '2022-03-20 12:13:54', '2022-03-20 12:13:54', 1),
(15, 'haneen', 'ar22@gmail.com', NULL, '$2y$10$tDTpzlpMF2obhrmO4vkOk.g5Wd8bC6CjgohhMPcx6P9wkzdbII2Wi', NULL, '2022-03-20 12:47:35', '2022-03-20 12:47:35', 1),
(16, 'haneen', 'hanon22@gmail.com', NULL, '$2y$10$LadR.23vNkDU52r8V8th9uPZd8Fiy7hsbmg91NYluonJ7jF4GXZGa', NULL, '2022-03-20 15:51:43', '2022-03-20 15:51:43', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articlecomments`
--
ALTER TABLE `articlecomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articlecomments`
--
ALTER TABLE `articlecomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

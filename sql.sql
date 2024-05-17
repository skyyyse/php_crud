create database information_student;
CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `school` int(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `school` (
  `id` int(10) NOT NULL,
  `title_school` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `title_subject` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `student` (`id`, `name`, `sex`, `email`, `school`, `subject`, `date`) VALUES
(1, 'test', 'male', 'test@gmail.com', 1, '1', '2024-05-04'),
(2, 'test', 'female', 'test@gmail.com', 1, '1', '2024-05-04'),
(3, 'test', 'male', 'test@gmail.com', 2, '1', '2024-05-03');

INSERT INTO `school` (`id`, `title_school`) VALUES
(1, 'Royal University of Phnom Penh'),
(2, 'The University of Cambodia'),
(3, 'Natioal University of Management'),
(4, 'Royal University of Fine Arts'),
(5, 'University of Health Sciences'),
(6, 'Royal University of Agriculture'),
(7, 'Internatioanl University'),
(8, 'Pannasastra University of Cambodia'),
(9, 'Phnom Penh International of University'),
(10, 'American University of Phnom Penh'),
(11, 'Asia Euro University'),
(12, 'Norton University'),
(13, 'Build Bright University'),
(14, 'nstitute of Technology of Cambodia'),
(15, 'Institute of Foreign Languages(IFL)'),
(16, 'IIC University of Technology(IIC)'),
(17, 'University of Puthisastra');

INSERT INTO `subject` (`id`, `title_subject`) VALUES
(1, 'Web Developer'),
(2, 'Mobile Application'),
(3, 'Software Developer'),
(4, 'Senior Software Developer'),
(5, 'Front-End Developer'),
(6, 'Back-End Developer'),
(7, 'Full-Stak-Developer'),
(8, 'Networking Developer'),
(9, 'Graphic Designer'),
(10, 'Video Eediter'),
(11, 'Digital Content Officer'),
(12, 'Other');


ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



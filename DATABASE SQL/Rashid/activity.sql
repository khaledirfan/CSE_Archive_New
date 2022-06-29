Table structure for table `addactivity`


CREATE TABLE `addactivity` (
  `id` int(255) NOT NULL,
  `EventName` varchar(200) NOT NULL,
  `EventTag` varchar(200) NOT NULL,
  `CommenceDate` varchar(200) NOT NULL,
  `CompletionDate` varchar(200) NOT NULL,
  `PostDetails` varchar(2000) NOT NULL,
  `Organizer` varchar(200) NOT NULL,
  `ActivityPhoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Dumping data for table `addactivity`

INSERT INTO `addactivity` (`id`, `EventName`, `EventTag`, `CommenceDate`, `CompletionDate`, `PostDetails`, `Organizer`,`ActivityPhoto`) VALUES
(1, 'Programming contest', 'IUPC 2018 Held in MIST', '19-02-2018', '21-02-2018', 'MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST COMPUTER CLUB', 'act5.jpg');


INSERT INTO `addactivity` (`id`, `EventName`, `EventTag`, `CommenceDate`, `CompletionDate`, `PostDetails`, `Organizer`,`ActivityPhoto`) VALUES
(2, 'Cyberthon', 'Cyberthon 2019 Held in MIST', '09-08-2019', '11-09-2019', 'An open discussion and opinion sharing session was held in the presence of Hon’ble State Minister of ICT Division, MR. Zunaid Ahmed Palak, MP on ways to incorporate and leverage Cyber Security as well as Data Analytics, Robotics, and Artificial intelligence in the academic domain.MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST COMPUTER CLUB', 'act4.jpg');

INSERT INTO `addactivity` (`id`, `EventName`, `EventTag`, `CommenceDate`, `CompletionDate`, `PostDetails`, `Organizer`,`ActivityPhoto`) VALUES
(3, 'Software exhibition', 'Software exhibition 2020 Held in MIST', '30-03-2020', '03-04-2020', 'The session was attended by the Commandant of MIST, Cyber Security Professionals, Technology Professionals from different banks and financial institutions, and the faculty members of CSE Department.MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST CSE department', 'act3.jpg');
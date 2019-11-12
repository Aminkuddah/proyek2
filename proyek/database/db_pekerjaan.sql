-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 10:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pekerjaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fk_perusahaan_kerja`
--

CREATE TABLE `tb_fk_perusahaan_kerja` (
  `id_tabel` int(11) NOT NULL,
  `fk_pekerjaan` int(11) NOT NULL,
  `fk_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fk_perusahaan_kerja`
--

INSERT INTO `tb_fk_perusahaan_kerja` (`id_tabel`, `fk_pekerjaan`, `fk_perusahaan`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 6),
(12, 3, 12),
(13, 4, 13),
(14, 4, 14),
(15, 4, 15),
(16, 4, 16),
(17, 5, 17),
(18, 5, 18),
(19, 5, 19),
(20, 5, 20),
(21, 6, 21),
(22, 6, 22),
(23, 6, 23),
(24, 7, 24),
(25, 7, 25),
(26, 8, 26),
(27, 8, 27),
(28, 8, 28),
(29, 8, 29),
(30, 9, 30),
(31, 9, 31),
(32, 9, 32),
(33, 9, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `hasil1` int(11) DEFAULT NULL,
  `hasil2` int(11) DEFAULT NULL,
  `hasil3` int(11) DEFAULT NULL,
  `usia` int(5) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `b_inggris` enum('Ya','TIdak') DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `penTerakhir` varchar(50) DEFAULT NULL,
  `akreditasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id_history`, `nama`, `hasil1`, `hasil2`, `hasil3`, `usia`, `gender`, `b_inggris`, `ipk`, `penTerakhir`, `akreditasi`) VALUES
(1, 'Joko', 8, 6, 2, 30, 'Laki-laki', 'Ya', 3.56, 'D3', 'A'),
(2, 'Resta', 8, 6, 7, 20, 'Perempuan', 'Ya', 3.96, 'D4 / S1', 'A'),
(3, 'Rahardhiyan Wahyu Putra', 8, 7, 6, 20, 'Laki-laki', 'Ya', 4, 'D2', 'A'),
(4, 'jjnj', 2, 4, 3, 25, 'Laki-laki', 'Ya', 3, 'D3', 'B'),
(5, 'Rahardhiyan Wahyu Putra', 8, 6, 2, 30, 'Laki-laki', 'Ya', 3.56, 'D3', 'B'),
(6, 'Joko', 8, 6, 2, 40, 'Perempuan', 'Ya', 3.56, 'D2', 'B'),
(7, 'Joko', 2, 8, 4, 30, 'Perempuan', 'TIdak', 3.56, 'D2', 'B'),
(8, 'mboh', 2, 4, 3, 40, 'Laki-laki', 'TIdak', 3.56, 'D3', 'B'),
(9, 'mboh lah', 2, 8, 4, 39, 'Perempuan', 'TIdak', 3.56, 'D2', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL,
  `pendidikan_terakhir` double DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `usia` double DEFAULT NULL,
  `akreditasi` double DEFAULT NULL,
  `b_inggris` double DEFAULT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `syarat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_kategori`, `nama_kategori`, `pendidikan_terakhir`, `ipk`, `usia`, `akreditasi`, `b_inggris`, `keterangan`, `syarat`) VALUES
(1, 'UI/UX Designer', 0.3, 0.25, 0.25, 0.15, 0.05, 'UI : Desain antarmuka untuk mesin dan perangkat lunak, seperti komputer, peralatan rumah tangga, perangkat mobile, dan perangkat elektronik lainnya, dengan fokus pada memaksimalkan pengalaman pengguna', '<li>At least 1 Year(s) of working experience in the related field is required for this position\r\n<li>Proven work experience as a UI/UX Designer or similar role\r\n<li>Portfolio of design projects\r\n<li>Up-to-date knowledge of design software like Adobe Illustrator and Photoshop\r\n<li>Team spirit, strong communication skills to collaborate with various stakeholders\r\n<li>Good time-management skills'),
(2, 'Website Programmer', 0.25, 0.25, 0.1, 0.2, 0.2, 'Web programmer akan melakukan pengcodingan dan pemrograman sebuah website. Web Programmer akan membuat script atau coding untuk membuat halaman web akan terlihat lebih dinamis dan menarik', '<li>Experience with server-side frameworks such as python, ruby, php, Java, ASP, ASP.NET\r\n<li>Experience with database systems such as SQL and Oracle\r\n<li>JavaScript, JQuery, HTML, Web Programming Skills, E-Commerce, Verbal Communication, cross-browser compatibility, Web User Interface Design (UI), Security Principles, Object-Oriented Design, Web Services (REST/SOAP), Multimedia Content Development, API\'s\r\n<li>Familiar with AngularJS, extJS, Bootstrap for Web and Mobile\r\n<li>2 years minimum experience in this field'),
(3, 'Programmer', 0.3, 0.25, 0.15, 0.15, 0.15, 'Programmer adalah seseorang yang memiliki kemampuan atau skill menulis dan merancang kode program-program (syntax) komputer menggunakan bahasa-bahasa pemrograman komputer (java, php, javascript dll)', '<li>Certificate or associate\'s degree with considerable work experience; bachelor\'s degree most often required; master\'s degree for some jobs. An equivalent number of years work experience is often acceptable in lieu of a bachelor\'s or master\'s degree'),
(4, 'Java Programmer', 0.3, 0.25, 0.15, 0.15, 0.15, 'Java programmer bertanggung jawab dalam bidang pengembangan program java untuk membangun baik itu sebuah website, aplikasi, dan software. Java Programmer harus bisa menguasai beberapa skill seperti Oracle databese, XML, X Query, Enterprise Java Beans, dan seterusnya', '<li>Minimum 1 year of working experience\r\n<li>Candidate must possess at least a Bachelor\'s Degree in Computer Science or any other related fields.\r\n<li>Experienced in Java Web (Spring MVC)\r\n<li>Good knowledge in JavaScript, jQuery\r\n<li>Experienced in HTML5, XML, XHTML, and CSS3'),
(5, 'Business Intelligence Analyst', 0.2, 0.3, 0.2, 0.2, 0.1, 'Teknologi yang menggunakan komputer yang berguna untuk mencari, menggali, dan menganalisis informasi dari data bisnis misalnya hasil penjualan suatu produk atau pendapatan/pengeluaran salah satu anak perusahaan', '<li>Candidate must possess at least Bachelor\'s Degree in any field.\r\n<li>Required language(s): Bahasa Indonesia, English\r\n<li>Preferably Supervisor/Coordinator specialized in Banking/Financial Services or equivalent.\r\n<li>Ability to analyze raw data and turn it into actionable business insights and recommendations.\r\n<li>Excellent verbal and written communication skill.'),
(6, 'Database Engineer', 0.2, 0.35, 0.15, 0.2, 0.1, 'Mencakup pengembangan dan desain strategi database, pemantauan dan meningkatkan kinerja dan kapasitas database, dan perencanaan kebutuhan pengembangan di masa depan', '<li>Software Installation (Not limited to databases only)\r\n<li>Have Database Administration skills especially Oracle\r\n<li>Experience in cloning Database (RMAN / BAckup Copy / Offline)\r\n<li>Having knowledge Java is preferred'),
(7, 'Trainer Animation', 0.2, 0.25, 0.2, 0.25, 0.1, 'Animator memiliki mata kreatif dan bakat artistik. Mereka dapat dengan mudah mengubah naskah atau konsep menjadi animasi yang dihasilkan komputer yang mengesankan. Untuk unggul dalam peran ini, Anda harus sangat terampil dalam perangkat lunak dan penceritaan CGI', '<li>Creative and out of the box\r\n<li>Experienced in multimedia to design everything\r\n<li>Good eyes in color and proportion\r\n<li>Proof of your concept if you apply CV'),
(8, 'Information Security Specialist', 0.2, 0.4, 0.1, 0.2, 0.1, 'Spesialis Keamanan adalah deskripsi menyeluruh untuk berbagai macam pekerjaan keamanan TI tingkat pemula hingga menengah. Dalam sebagian besar kasus, Anda akan bertanggung jawab untuk merancang, menguji, mengimplementasikan dan memantau langkah-langkah keamanan untuk sistem perusahaan Anda. Anda akan melihat cukup banyak crossover dalam peran ini dengan Analis Keamanan, tetapi spesialis tingkat junior biasanya harus berurusan dengan lebih banyak tugas administratif', '<li>Strong IT skills and knowledge including hardware, software and networks.\r\n<li>Meticulous attention to detail.\r\n<li>A forensic approach to challenges.\r\n<li>Ability to seek out vulnerabilities in IT infrastructures'),
(9, 'System Engineer', 0.3, 0.3, 0.1, 0.2, 0.1, 'Suatu perencanaan yang di lakukan, mulai dari menciptakan dan melaksanakan proses untuk memastikan bahwa perencanaan tersebut berkualitas tinggi, terpercaya, efisiensi biaya dan terjadwalkan. Proses ini pada umumnya terdiri dari tujuh tugas diantaranya yaitu menyatukan masalah, alternative penyelidikan, model system, Mengintegrasikan, peluncuran system, Nilai capaian, dan evaluasi kembali', '<li>Mempunyai keahlian kuat di bidang engineering dan analisa\r\n<li>Mempunyai pemahaman yang baik pada struktur data dan algoritma\r\n<li>Mempunyai pengalaman pada otomasi dan service support\r\n<li>Mempunyai pengalaman programming (salah satu dari PHP, JAVA, GO, Python atau Ruby), akan menjadi nilai tambah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `lokasi`, `link`, `deskripsi`) VALUES
(1, 'Radya Labs', 'Bandung', 'http://radyalabs.com/', 'Radya Labs has mission to help enterprises in their digital transformation initiatives. Radya Labs offers professional technology services focusing on the area of mobility, from strategy to implementation. Our solutions will help organizations transform their business, increase efficiency, and reach their customers'),
(2, 'Promanufacture Indonesia PT', 'Semarang', 'https://sik.promanufacture.co.id/', 'PT Pro Manufacture is committed to providing the life science community with the most innovative robotic automation equipment and software on the market. Our team doesn\'t simply upgrade the systems everyone else is making - we reinvent the technology, producing the smartest, fastest, and most efficient imagers and liquid handlers available.\r\nSince its inception in 2013, PT Pro Manufacture has grown from a one-person enterprise with a single product into an international company with a line of imagers, software, and liquid handlers that all fifteen of the top pharmaceutical companies use in their research. We continue to expand our reach into new markets with products like the Tempest, a high-throughput dispenser with many applications to a broad range of industries.\r\nWe think that developing top-notch laboratory equipment is congruent with having fun! At PT Pro Manufacture we have a casual dress code, an open-door environment, and even grill-outs every Friday of the summer'),
(3, 'GML Performance Consulting', 'Jakarta Raya', 'http://www.gmlperformance.com/', 'To become the leading performance improvement group of companies in Asia, with highly synergistic services which are customized to Asian business environment and culture'),
(4, 'JMC IT Consultant', 'Yogyakarta', 'https://www.jmc.co.id/', 'JMC IT Consultant adalah perusahaan Jasa Pembuatan Software, pengembang aplikasi yang berdiri sejak tahun 2008. Bersama JMC, Anda akan dibawa ke pengalaman-pengalaman luar biasa dalam membangun sebuah teknologi tepat guna. Teknologi yang membuat pekerjaan Anda lebih mudah, lebih cepat tertangani, dan lebih banyak memberikan manfaat'),
(5, 'Kristamedia Pratama PT', 'Jakarta Barat', 'https://kristamedia.com/', 'KristamediaPratama, Krista Exhibitions started in 1994 as an International exhibition organizer. With more than 2 decades experience, Krista has a unique network of office with International sales promoters, until today we have more than 5000 companies taking part in our various exhibitions'),
(6, 'Bisnis Usaha Prima PT', 'Surabaya', 'https://www.google.com/search?q=Bisnis+Usaha+Prima+PT&rlz=1C1CHBF_enID812ID812&oq=Bisnis+Usaha+Prima+PT&aqs=chrome..69i57j69i59j0j69i60l3.1116j0j9&sourceid=chrome&ie=UTF-8', 'Business coaching firm based in Indonesia, with purpose to optimize companies performance and competitiveness'),
(7, 'Reservasi Indonesia Sejahtera PT', 'Denpasar', 'http://www.kutaraya.com/', 'Hybrid Booking Engine is an easy to use booking for accommodation, activities, and tour operator with integrated payment gateway services and support for several payment gateway services in Indonesia and International. Our aim is to provide a simple booking engine at a low price, which fill the needs of small and medium-sized Accommodation, Activities and Tour Operator'),
(8, 'Ufirst', 'Surabaya', 'https://www.google.com/search?q=Ufirst+surabaya&rlz=1C1CHBF_enID812ID812&oq=uf&aqs=chrome.1.69i57j69i59l3j69i60l2.2844j0j9&sourceid=chrome&ie=UTF-8', 'Brighter & better days are here with UFirst!\r\nWe put you first in all we do because with friends that’s how it’s done! We’ve created a new programme just for you. With privileges like freebies, discounts, fun activities and special invites too! UFirst from us to you'),
(9, 'Mitra Digital Futuristik PT', 'Jakarta Pusat', 'http://mitradigitalfuturistik.com/', 'Perusahaan yang bergerak dibidang Jasa Pembuatan Pemrograman untuk kebutuhan kantor swasta maupun pemerintah, program yang telah kami buat IT-Inventory, Banking, Warehouse Management, Shipping Management, Acc Manufacture dll'),
(10, 'Primavisi Globalindo', 'Surabaya', 'http://primavisiglobalindo.com/', 'Perusahaan sistem & teknologi informasi (sejak 2009), dengan berbagai pengalaman & klien di Indonesia. Kami didukung berbagai ahli IT (desktop+mobile)'),
(12, 'Avega Wisata Global PT', 'Jakarta Raya', 'http://www.global-wisata.com/', 'Perusahaan yang bergerak di bidang agen travel dan tour yang menyediakan liburan private atau rombongan dengan paket murah serta mudah, menjangkau hampir benua Asia, Amerika hingga Eropa'),
(13, 'Mitracomm Ekasarana PT', 'Jakarta Raya', 'http://www.mitracomm.com/', 'PT.  Mitracomm Ekasarana is a subsidiary company of Phintraco Group.  Established in in 1999,  the company started with its Channel Solution division,  the business was expanding and currently PT. Mitracomm Ekasarana has two divisions'),
(14, 'Myindo Cyber Media PT', 'Jakarta Raya', 'https://myindo.co.id/', 'Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional, going to Indonizing The World with us at Myindo'),
(15, 'Smartfren Telecom Tbk PT', 'Semarang', 'https://www.smartfren.com/', 'PT Smartfren Telecom Tbk, umumnya dikenal sebagai Smartfren, adalah operator jaringan nirkabel berbasis di Indonesia yang berkantor pusat di Jakarta Pusat. Sahamnya dimiliki oleh konglomerat Indonesia Sinar Mas di bawah perusahaan PT Sinar Mas Komunikasi Teknologi'),
(16, 'Walden Global Services PT', 'Bandung', 'https://www.wgs.co.id/', 'Walden Global Services (WGS) is an Enterprise software solution SI company with offices in Bandung, and Tangerang; with delivery team in multiple sites in Indonesia. Our mission is to strengthen client\'s IT capacity and capabilities, allowing them to innovate through technology, and also automate their business processes. WGS has been recognized and awarded by Forbes in 20 Rising Global Stars 2015'),
(17, 'Halodoc', 'Jakarta Selatan', 'https://www.halodoc.com/', 'Aplikasi kesehatan online Halodoc meluncurkan layanan teranyar Halodoc Goes to Hospital (HG2H), solusi yang memudahkan pasien menghemat waktu dalam menebus resep obat di rumah sakit, baik racikan maupun non racikan'),
(18, 'PT Suparma Tbk', 'Surabaya', 'http://www.ptsuparmatbk.com/', 'PT. Suparma Tbk merupakan perusahaan multinasional yang memproduksi kertas yang bermarkas di Surabaya, Indonesia. Perusahaan ini didirikan pada tahun 1978. Perusahaan ini menghasilkan berbagai macam-macam bahan kertas'),
(19, 'PT SMART,Tbk', 'Jakarta Raya', 'https://www.smart-tbk.com/', 'Salah satu perusahaan publik produk konsumen berbasis kelapa sawit yang terintegrasi dan terkemuka di Indonesia yang berkomitmen pada produksi minyak sawit yang berkelanjutan. Perkebunan kelapa sawit SMART mencakup lebih dari 138,000 hektar (termasuk plasma)'),
(20, 'Reeracoen Indonesia PT', 'Jakarta Selatan', 'https://www.reeracoen.co.id/', 'Reeracoen is an incorporated company of Neo Career Group - which provides comprehensive HR service in Japan. We bring with us \"Omotenashi\" - Japanese hospitality spirit and would like to provide our hospitable service around the world. World-class companies supported by strong HR Service will contribute to world economy and to contribute to this we will always provide best service, service which we call \"Commitment\" bringing \"Growth\" to our clients. Not only current overseas branches such as Singapore, Thailand, China, Vietnam, Philiphines, Indonesia, etc. We are expanding our business to other Asian countries'),
(21, 'PT IT Group Indonesia', 'Jakarta Raya', 'https://www.itgroupinc.asia/', 'We help companies improve their business operations by providing cost-effective solutions from basic IT Management Services, all the way to Next Generation software applications'),
(22, 'Nusantara Berkah Digital PT', 'Yogyakarta', 'https://www.google.com/search?q=Nusantara+Berkah+Digital+PT&rlz=1C1CHBF_enID812ID812&oq=Nusantara+Berkah+Digital+PT&aqs=chrome..69i57j69i59j0j69i60l3.260j0j4&sourceid=chrome&ie=UTF-8', 'PT. Nusantara Berkah Digital adalah perusahaan yang bergerak di bidangTeknologiInformasi (StartUp Digital), fokus kami adalah mengembangkan produk Aplikasi Kasir/ Point of Sales bermerkNuta dan menyewakannya pada pebisniskuliner (UKM Kuliner) di seluruh Indonesia. Visi kami adalah ikut memajukan perekonomian Indonesia dengan ikut memajukan bisnis skala UKM di Indoensia dengan platform NutaPOS. Seiring dengan berkembangnya perusahaan kami, kami membutuhkan anak-anak muda yang selalu ceria dan ingin menjadi lebih baik lagi setiap harinya bergabung bersama kami'),
(23, 'Telmark Integrasi Indonesia PT', 'Jakarta Barat', 'http://telmark.co.id/', 'PT Telmark Integrasi Indonesia will use their expertise on Business Process Outsourcing (BPO) and take over your non-core business for you, so you do not need to worry about it and focus on what you need to by delivering the services that focuses on the operation management and target performance achievement'),
(24, 'ISLS-binus Center', 'Jakarta', 'http://binuscenter.com/', 'BINUS Center menyiapkan kurikulum pelatihan yang up to date dan disusun berdasarkan kebutuhan industri, pengalaman spesialis serta kebutuhan para entrepreneur untuk memulai bisnis teknologi'),
(25, 'Belogix Indonesia PT', 'Semarang', 'https://belogix.com/', 'Perusahaan yang bergerak dalam bidang Teknologi Informasi secara umum, dan berfokus pada pengembangan keahlian, pengetahuan, serta sikap mental sumber daya manusia yang berkecimpung dalam dunia teknologi informasi secara khusus.\r\nKami sangat menyadari pentingnya pengembangan kompetensi untuk SDM dalam perubahan Teknologi Informasi yang sedemikian cepat, sehingga kami selalu berusaha untuk tetap responsif dan inovatif terhadap perkembangan dunia IT dan selalu melakukan riset-riset yang berkaitan dengan teknologi terbaru yang dapat diterapkan untuk meningkatkan efisiensi, efektifitas, serta produktifitas sebuah perusahaan.\r\nDengan pengalaman dan pengetahuan yang teruji, juga setelah melalui serangkaian verifikasi dan standarisasi, BeLogix berhasil mendapatkan pengakuan dari beberapa vendor besar yang bergerak khususnya di bidang IT, yaitu Oracle, Android ATC, CompTIA, PearsonVue, dan Certiport'),
(26, 'ASIA PULP AND PAPER', 'Jawa Barat', 'https://www.asiapulppaper.com/', 'Asia Pulp and Paper Group (APP) is responsible for delivering quality products to meet the growing global demand for tissue, packaging and paper. On any given day, our products find their way into the hands of consumers in various branded forms from all over the world'),
(27, 'PT NEC Indonesia', 'Jakarta Selatan', 'https://id.nec.com/', 'NEC first established its Jakarta Representative Office in 1968. Through the years, PT NEC Indonesia recognized the importance of instituting telecommunications infrastructure for the country and has introduced several NEC technologies and solutions. This has resulted in PT. NEC Indonesia achieving the market leader position of being a total solutions provider for the Indonesian telecommunications industry. Today, with its headquarters in Jakarta and 20 other offices located in various parts of Indonesia, PT NEC Indonesia continues to play a significant role in providing total telecommunications and IT business solutions to its customers in the government and enterprise businesses'),
(28, 'PT Lion Super Indo', 'Jakarta Selatan', 'https://www.superindo.co.id/', 'Super Indo is a company which has a commitment to grow by focusing not only on the business but also the development of the associates.  It provides great career opportunities which create a fair and competitive working environment'),
(29, 'Gudang Garam Tbk', 'Sidoarjo', 'https://www.gudanggaramtbk.com/', 'Perusahaan rokok Gudang Garam adalah salah satu industri rokok terkemuka di tanah air yang telah berdiri sejak tahun 1958 di kota Kediri, Jawa Timur. Hingga kini, Gudang Garam sudah terkenal luas baik di dalam negeri maupun mancanegara sebagai penghasil rokok kretek berkualitas tinggi. Produk Gudang Garam bisa ditemukan dalam berbagai variasi, mulai sigaret kretek klobot (SKL), sigaret kretek linting-tangan (SKT), hingga sigaret kretek linting-mesin (SKM). Bagi Anda para penikmat kretek sejati, komitmen kami adalah memberikan pengalaman tak tergantikan dalam menikmati kretek yang terbuat dari bahan pilihan berkualitas tinggi'),
(30, 'PT Buana Varia Komputama', 'Jakarta Selatan', 'http://www.bvk.co.id/', 'Sebagai perusahaan Teknologi Informasi (TI), pada awalnya, Buana Varia Komputama memberikan layanan konsultasi TI, rancang bangun infrastruktur jaringan, dan penyedia sistem informasi untuk berbagai bidang industri. Seiring dengan dinamika pertumbuhan usaha, kini, Buana memfokuskan diri pada industri kesehatan yang menjadi ruang lingkup bisnisnya.\r\nLebih dari satu dekade, Buana telah dipercaya sebagai mitra dalam membangun infrastruktur jaringan sistem informasi terintegrasi, di berbagai organisasi medis di Indonesia. Dengan mengedepankan tiga strategi utama: nilai dan kualitas tinggi para personelnya, aliansi dengan prinsipal-prinsipal utama, dan komitmen penuh untuk memberikan keunggulan layanan, Buana mengusung visi untuk menjadi perusahaan TI kesehatan yang unggul dan terdepan'),
(31, 'PT Dinamika Kreasi Teknologi', 'Jakarta Utara', 'http://www.dkreasi.co.id/', 'Dinamika Kreasi Teknologi is next generation of IT solutions and services committed to deliver quality Technology Solutions and Professional IT Services that provide true business value to its clients, enabling them to achieve their desired goals and initiatives.\r\nOur Certified Engineer are experts in IT Infrastructure for many years in implementing many important projects in Indonesia. With the knowledge in technology, capable in provding IT services, project management, we offer professional business solutions, together with advising, designing, and implementing Information Technology Systems services. We analyze customer requirements and business process and on this basis we purpose suitable solutions that will achieve business growth for our clients at the most efficient cost.\r\nOur vision is to create better solutions for our clients'),
(32, 'PT Nusantara Compnet Integrator', 'Jakarta Barat', 'https://www.compnet.co.id/', 'Our Company started as a small but passionate firm. Ever since, we carry the same passion and commitment that we envisioned to improve the quality of work and life by delivering solutions and innovation'),
(33, 'PT Aero Systems Indonesia', 'Tangerang', 'https://www.asyst.co.id/', 'ASYST provide advanced IT solutions for transportation, travel and related industry. Our systems have been proven to give our clients and users a key edge over their industry competitors, by setting benchmarks in every area of the transportation and travel business and cultivating cutting-edge products and applications. We aim to professionally employ insightful commercial approaches and state-of-the art technology to deliver pragmatic and breakthrough IT solutions contributing to the success of our clients.\r\nAt ASYST, we believe that quality of work is based on quality of people. As a result, our quality does not only consist of professionals with profound experience, but we also ensure that our solutions empower operational eficiency for our clients. Hence, setting benchmarks in every area of the business, cultivating cutting-edge products and applications');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  ADD PRIMARY KEY (`id_tabel`),
  ADD KEY `fk_pekerjaan` (`fk_pekerjaan`),
  ADD KEY `fk_perusahaan` (`fk_perusahaan`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `fk_kategori_pekerjaan1` (`hasil1`),
  ADD KEY `fk_kategori_pekerjaan2` (`hasil2`),
  ADD KEY `fk_kategori_pekerjaan3` (`hasil3`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  MODIFY `id_tabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  ADD CONSTRAINT `fk_pekerjaan` FOREIGN KEY (`fk_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perusahaan` FOREIGN KEY (`fk_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD CONSTRAINT `fk_kategori_pekerjaan1` FOREIGN KEY (`hasil1`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kategori_pekerjaan2` FOREIGN KEY (`hasil2`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kategori_pekerjaan3` FOREIGN KEY (`hasil3`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

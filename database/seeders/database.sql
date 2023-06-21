-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2023 at 06:09 PM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1606266_batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `batiks`
--

CREATE TABLE `batiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_id` bigint(20) UNSIGNED DEFAULT NULL,
  `batik_name` varchar(255) NOT NULL,
  `batik_slug` varchar(255) NOT NULL,
  `batik_picture` varchar(255) NOT NULL,
  `batik_description` text NOT NULL,
  `viewed` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batiks`
--

INSERT INTO `batiks` (`id`, `category_id`, `sub_id`, `batik_name`, `batik_slug`, `batik_picture`, `batik_description`, `viewed`, `created_at`, `updated_at`) VALUES
(10, 2, NULL, 'Parang Kusuma', 'parang-kusuma', 'image/batik/1682751217644cbef1e1ef4.jpg', '<p style=\"text-align: justify;\">Parang melambangkan ketajaman rasa dan piker serta kekuatan dalam menghadapi berbagai masalah dalam kehidupan. Parang Kusuma merupakan motif parang yang pada bidang parangnya diberi Kusuma (bunga) lambing keharuman dan keindahan. Motif ini melambangkan anak yang baru lahir senantiasa menjaga dan menjunjung tinggi keharuman nama baik diri pribadim keluarga, bangsa dan negara.</p>\r\n<p style=\"text-align: justify;\">Melahirkan &ndash; Kopohan: Prosesi melahirkan menggunakan kain Batik yang dipakai sebagai alas (kopohan). Kain Batik yang digunakan adalah Batik motif Parang Kusuma.</p>', 9, '2023-04-06 02:04:06', '2023-06-16 13:16:31'),
(11, 2, NULL, 'Kawung', 'kawung', 'image/batik/1682751228644cbefc10326.jpg', '<p style=\"text-align: justify;\">Pola Kawung merupakan susunan dari empat bentuk bulat atau bulat panjang (elips) disusun diagonal miring ke kanan dan ke kiri, atas dan bawah dengan titik pusat/pancer ditengah. Kawung menggambarkan empat penjuru mata angin yaitu: timur, barat, selatan dan utara. Dan juga menggambarkan selama dalam kandungan hingga lahir, bayi dijaga dan disertai oleh ketuban, pasenta, darah dan tali pusar.</p>', 2, '2023-04-06 02:23:18', '2023-04-29 06:53:48'),
(12, 2, NULL, 'Truntum Gurdha', 'truntum-gurdha', 'image/batik/1682751235644cbf035c049.jpg', '<p style=\"text-align: justify;\">Motif Truntum termasuk pola nitik dengan ornamen pokok bunga tanjung, menggambarkan bintang-bintang di langit. Truntum juga berarti menuntun/membimbing manusia yang melambangkan bersemi dan bertautnya cinta yang semakin subur bagaikan bintang di langit yang tiada henti memancarkan sinarnya dan manusia lahir karena adanya cinta. Sedangkan Gurdha merupakan stilisasi dari burung garuda, lambang kuasa dan sumber hidup yang mempunyai watak sebagai panutan dan berperilaku luhur.</p>', 2, '2023-04-06 02:23:45', '2023-04-29 06:53:55'),
(13, 2, NULL, 'Semen Rama', 'semen-rama', 'image/batik/1682751233644cbf01f24e3.jpg', '<p style=\"text-align: justify;\">Motif batik Semen Rama memuat lambang ajaran Hasta Brata yaitu delapan ajaran keutamaan bagi seorang pemimpin harus mampu menjadi pelindung dan memberi kemakmuran, bersifat tabah, berwatak luhur, berhati lapang, adil, mampu memberi dan berbagi kebahagiaan, memberi dan membagi kesejahteraan, serta mampu menghadapi dan memerangi musuh.</p>\r\n<p style=\"text-align: justify;\">Selain batik yang di atas, motif yang bagus (baik) untuk upacara kelahiran dan perawatan ari-ari adalah Sidoasih, Sidomukti, Sidoluhur, Sidomulya, Sidodrajat, dan Sidodadi.</p>', 7, '2023-04-06 02:24:10', '2023-04-29 06:53:54'),
(14, 3, NULL, 'Parang Rusak (Parang Tumurun)', 'parang-rusak-parang-tumurun', 'image/batik/1682751674644cc0bad2eb4.jpg', '<p style=\"text-align: justify;\">Parang rusak mempunyai komposisi miring 45&deg; melambangkan kekuatan gerak cepat yang mempunyai makna perang melawan yang rusak, manusia harus mampu mengendalikan nafsu di dalam hidupnya, sehingga bisa berwatak dan berperilaku luhur serta mulia.</p>', 0, '2023-04-06 02:25:54', '2023-04-29 07:01:15'),
(15, 3, NULL, 'Semen Sawat Manak', 'semen-sawat-manak', 'image/batik/1682751706644cc0da2022c.jpg', '<p style=\"text-align: justify;\">Pada motif in tergambar dua buah sawat, yang satu besar dan yang lain kecil berjajar berhadapan seiring, sebagai ornamen pokok. Kain batik motif Sawat Manak Melambangkan harapan bahwa relasi antar anak dan orangtuanya bisa berjalan seiring, sejalan, rukun dan damai. Diharapkan demikian yang terjadi pada hubungan anak dan orangtuanya, sehingga motif ini digunakan sebagai kain untuk menggendong dan menggedhong bayi, bisa juga digunakan dalam upacara Mitoni sebagai sarung yang melapisi ibu hamil.</p>', 0, '2023-04-06 02:26:05', '2023-04-29 07:01:46'),
(16, 3, NULL, 'Nitik Cakar Ayam', 'nitik-cakar-ayam', 'image/batik/1682751704644cc0d8aeba8.jpg', '<p style=\"text-align: justify;\">Motif nitik cakar ayam melambangkan harapan agar anak dapat mengais rejeki, mencari penghidupan secara halal, ibarat ayam yang mencari makan mengais dengan cakarnya.</p>', 0, '2023-04-06 02:26:15', '2023-04-29 07:01:45'),
(17, 3, NULL, 'Selendang Paturan Kawung', 'selendang-paturan-kawung', 'image/batik/1682751697644cc0d1587c2.jpg', '<p style=\"text-align: justify;\">Selendang batik yang dibuat khusus untuk menggendong bayi, motif kawung dan tulisan huruf Jawa yang mengandung doa dan harapan kebaikan bagi si bayi.</p>', 1, '2023-04-06 02:26:24', '2023-04-29 07:01:37'),
(18, 3, NULL, 'Selendang Paturan Parang Rusak', 'selendang-paturan-parang-rusak', 'image/batik/1682751696644cc0d061177.jpg', '<p style=\"text-align: justify;\">Parang rusak mempunyai komposisi miring 45&deg; melambangkan kekuatan gerak cepat yang mempunyai makna perang melawan yang rusak, manusia harus mampu mengendalikan nafsu di dalam hidupnya, sehingga bisa berwatak dan berperilaku luhur serta mulia. Konon kata Parang berawal dari pereng pesisir selatan Mataram, berupa tebing curam berbatuan dimana tempat salah satu para raja Mataram melakukan semedi (teteki). Pada Selendang Paturan Parang Rusak, di tepinya diberi tulisan jawa yang mengandung harapan, doa, dan sebagai tolak sawan atau menolak jenis penyakit fisik maupun gangguan perasaan terhadap bayi yang digendong.</p>\r\n<p style=\"text-align: justify;\">Selain batik yang di atas, motif yang bagus (baik) untuk menggendong bayi adalah Truntum dan Sidoasih.</p>', 1, '2023-04-06 02:26:39', '2023-04-29 07:01:37'),
(19, 4, NULL, 'Parang Klithik', 'parang-klithik', 'image/batik/1682751934644cc1bed6f66.jpg', '<p style=\"text-align: justify;\">Pemakaian Parang Klithik menunjukan harapan bahwa si anak yang masih kecil nantinya mengalami tumbuh kembang menjadi orang yang berwatak dan berperilaku luhur.</p>', 0, '2023-04-06 02:29:10', '2023-04-29 07:05:35'),
(20, 4, NULL, 'Gringsing', 'gringsing', 'image/batik/1682751940644cc1c4e6267.jpg', '<p style=\"text-align: justify;\">Gringsing berarti tidak gering (tidak sakit), mengandung harapan agar anak bertumbuh dan berkembang menjadi anak yang sehat lahir batin, jauh dari segala penyakit fisik dan mental.</p>', 0, '2023-04-06 02:29:19', '2023-04-29 07:05:41'),
(21, 4, NULL, 'Kawung', 'kawung', 'image/batik/1682751939644cc1c3673b5.jpg', '<p style=\"text-align: justify;\">Pola Kawung merupakan susunan dari empat bentuk bulat atau bulat panjang (elips) disusun diagonal miring ke kanan dan ke kiri, atas dan bawah dengan titik pusat/pancer ditengah. Kawung menggambarkan empat penjuru mata angin yaitu: timur, barat, selatan dan utara. Dan juga menggambarkan selama dalam kandungan hingga lahir, bayi dijaga dan disertai oleh ketuban, plasenta, darah dan tali pusar. Pola kawung pada upacara in yang bermotif kecil (kawung sen).</p>', 0, '2023-04-06 02:29:29', '2023-04-29 07:05:39'),
(22, 5, NULL, 'Parang Parikesit', 'parang-parikesit', 'image/batik/1682752135644cc28739346.jpg', '<p style=\"text-align: justify;\">Kain dengan motif ini melambangkan harapan kelak si anak menjadi kesatria yang gagah berani, berwibawa arif bijaksana layaknya Parikesit dalam dunia pewayangan.</p>', 0, '2023-04-06 02:31:20', '2023-04-29 07:08:55'),
(23, 5, NULL, 'Parang Gondosuli', 'parang-gondosuli', 'image/batik/1682752152644cc29873bd5.jpg', '<p style=\"text-align: justify;\">Motif ini merupakan pengembangan dari pola parang gendreh dimana bagian kepalanya dibidang parang diganti dengan bunga gondosuli yang berbau harum. Motif ini melambangkan keharuman dalam arti keindahan hati nurani yang membawa keharuman budi pekerti yang terpancar pada pribadi anak yang tumbuh menjadi dewasa.</p>', 0, '2023-04-06 02:31:33', '2023-04-29 07:09:13'),
(24, 5, NULL, 'Gringsing Bintang', 'gringsing-bintang', 'image/batik/1682752154644cc29a24d70.jpg', '<p style=\"text-align: justify;\">Bermakna bahwa anak yang melakukan tetesan tidak mudah terserang penyakit dan selalu menjadi idola (bintang).</p>', 0, '2023-04-06 02:31:39', '2023-04-29 07:09:14'),
(25, 5, NULL, 'Udan Liris', 'udan-liris', 'image/batik/1682752158644cc29ede9fd.jpg', '<p style=\"text-align: justify;\">Udan Liris dapat diartikan sebagai hujan germis atau hujan rintik-rintik melambangkan kesuburan dengan harapan bisa selamat dan subur sejahtera.</p>', 0, '2023-04-06 02:31:47', '2023-04-29 07:09:19'),
(26, 5, NULL, 'Parang Tuding', 'parang-tuding', 'image/batik/1682752133644cc2859c707.jpg', '<p style=\"text-align: justify;\">Parang Tuding mempunyai makna bahwa tudingan (perintah, kebijaksanaan) seorang pemimpin akan menentukan nasib orang banyak. Selain batik yang diatas, motif yang bagus (baik) untuk Khitanan adalah Parang Kusuma dan Parang Klithik.</p>\r\n<p style=\"text-align: justify;\">Selain batik yang di atas, motif yang bagus (baik) untuk Khitanan adalah Parang Kusuma dan Parang Klithik.</p>', 0, '2023-04-06 02:31:59', '2023-04-29 07:08:54'),
(27, 6, NULL, 'Kawung Picis', 'kawung-picis', 'image/batik/1682752361644cc36919a65.jpg', '<p style=\"text-align: justify;\">Kawung Picis merupakan jenis motif Kawung berukuran kecil yaki sebesar uang pecahan 10 sen. Motif ini melambangkan harapan agar manusia selalu ingat akan asal-usulnya. Motif Kawung Picis juga melambangkan empat penjuru (pemimpin harus dapat berperan sebagai pengendali perbuatan baik). Juga melambangkan bahwa hati nurani sebagai pusat pengendali nafsu yang terdapat pada diri manusia, sehingga ada keseimbangan pada diri manusia.</p>', 0, '2023-04-06 03:30:47', '2023-04-29 07:12:41'),
(28, 6, NULL, 'Gringsing Lindri', 'gringsing-lindri', 'image/batik/1682752375644cc3777a347.jpg', '<p style=\"text-align: justify;\">Motif ini bermakna anak perempuan yang melakukan tetesan menjadi wanita yang sehat, cantik, lahir, batin.</p>', 0, '2023-04-06 03:30:49', '2023-04-29 07:12:56'),
(29, 6, NULL, 'Ceplok Sri Dento', 'ceplok-sri-dento', 'image/batik/1682752374644cc3764fe92.jpg', '<p style=\"text-align: justify;\">Ceplok Sri Dento melukiskan keserasian sebagai harapan si anak menjadi wanita yang serasi dan pandai menyelaraskan diri.</p>', 0, '2023-04-06 03:31:06', '2023-04-29 07:12:54'),
(30, 6, NULL, 'Ceplok Keci', 'ceplok-keci', 'image/batik/1682752377644cc37930c4f.jpg', '<p style=\"text-align: justify;\">Ragam hias motif Ceplok Keci dibuat motif kecil-kecil dengan motif Parang, Kawung, Truntum yang biasanya dipakai oleh keluarga raja.</p>\r\n<p style=\"text-align: justify;\">Selain batik yang di atas, motif yang bagus (baik) untuk Tetesan adalah Parang Kusuma dan Kawung Picis.</p>', 1, '2023-04-06 03:31:16', '2023-04-29 07:12:57'),
(31, 7, NULL, 'Grompol', 'grompol', 'image/batik/1682752715644cc4cbb2ace.jpg', '<p style=\"text-align: justify;\">Motif Grompol termasuk pola Nitik. Grompol berarti menggerompol atau berkumpul menjadi satu. Motif ini melambangkan dia dan harapan mendapatkan keberkahan dengan meng-gerompol-nya segala kebaikan. Dengan demikian di masa remaja dewasa diharapkan anak akan mendapatkan keceriaan, keselamatan, kepandaian, rejeki dan kebaikan-kebaikan lainnya.</p>', 0, '2023-04-06 03:34:07', '2023-04-29 07:18:36'),
(32, 7, NULL, 'Parang Centhung', 'parang-centhung', 'image/batik/1682752703644cc4bfe9ae8.jpg', '<p style=\"text-align: justify;\">Parang Centhung merupakan motif parang yang pada bidang parangnya dihiasi dengan bentuk centhung. Centhung adalah rambut tipis dibagian depan kepala yang diatur sebagai hiasan kepala mempelai wanita. Sedangkan Parang Canthel pada bidang parangnya dihiasi bentuk godheg yaitu rambut di pinggir pipi di muka telinga menggambarkan harmoni keindahan. \"Canthel\" berasal dari kata \"kecanthel\" atau tertarik, tertambat hatinya.</p>', 0, '2023-04-06 03:34:20', '2023-04-29 07:18:24'),
(33, 7, NULL, 'Kothak Mangkara', 'kothak-mangkara', 'image/batik/1682752716644cc4cca5096.jpg', '<p style=\"text-align: justify;\">Mangkara adalah bentuk bagian belakang tutup kepala atau jamang atau mahkota, juga merupakan salah satu bentuk dari sumping (hiasan telinga). \"Mangkara\" berasal dari \"maya angakara\" yang berarti \'nir ing sekara-kara\' (=tiada halangan dan rintangan). Melambangkan harapan agar tada halangan dan rintangan bagi anak dalam memasuki masa dewasa.</p>', 0, '2023-04-06 03:34:30', '2023-04-29 07:18:37'),
(34, 7, NULL, 'Parang Klithik Seling Tritik Puspa', 'parang-klithik-seling-tritik-puspa', 'image/batik/1682752710644cc4c6c5ac7.jpg', '<p style=\"text-align: justify;\">Pada motif Parang Klithik ini diselingi dengan motif puspa (bunga), lambang keindahan dan perkembangan. Motif ini menggambarkan harapan agar si anak mampu menghadapi masa kehidupan yang dinamis tetapi tetap harmoni dan indah.</p>', 0, '2023-04-06 03:34:39', '2023-04-29 07:18:31'),
(35, 8, NULL, 'Parang Rusak', 'parang-rusak', 'image/batik/1682753003644cc5eb16976.jpg', '<p style=\"text-align: justify;\">Parang rusak mempunyai komposisi miring 45&deg; melambangkan kekuatan gerak cepat yang mempunyai makna perang melawan yang rusak, manusia harus mampu mengendalikan nafsu di dalam hidupnya, sehingga bisa berwatak dan berperilaku luhur serta mulia. Konon kata Parang berawal dari pereng pesisir selatan Mataram, berupa tebing curam berbatuan dimana tempat salah satu para raja Mataram melakukan semedi (teteki). Dalam acara Ruwatan, batik Parang Rusak mempunyai makna keluhuran dan sebagai tolak sawan atau menolak jenis penyakit fisik maupun gangguan perasaan.</p>', 1, '2023-04-06 03:38:17', '2023-04-29 07:23:23'),
(36, 8, NULL, 'Poleng', 'poleng', 'image/batik/1682753037644cc60de75b8.jpg', '<p style=\"text-align: justify;\">Batik dengan motif Poleng atau disebut juga dengan Bang Bintulu, Poleng merupakan motif batik yang sederhana dengan bentuk kotak segi empat sama sisi. Pada mulanya dengan lima warna atau panca warna yang melambangkan dasar watak manusia. Motif Poleng digunakan dalam upacara Ruwatan sebagai penolak bala.</p>', 1, '2023-04-06 03:38:24', '2023-05-21 01:09:00'),
(37, 8, NULL, 'Kambil (krambil) Secukil', 'kambil-krambil-secukil', 'image/batik/1682753071644cc62fe72a6.jpg', '<p style=\"text-align: justify;\">Motif batik Kambil Secukil juga harus dikenakan pada gelar Murwakala dalam acara Ruwatan. Sebagaimana motif Poleng, Motif Kambil Secukil difungsikan sebagai penolak bala.</p>', 1, '2023-04-06 03:40:25', '2023-06-21 07:10:59'),
(38, 8, NULL, 'Semen Purbondaru', 'semen-purbondaru', 'image/batik/1682753083644cc63b192fb.jpg', '<p style=\"text-align: justify;\">Purbo = memelihara, ndaru = anugerah. Bisa diartikan bahwa segala anugerah yang diberikan oleh Tuhan Yang Maha Esa wajib dipelihara untuk kebaikan hidup dan kehidupan. Ada juga yang menyebut dengan semen giri.</p>', 2, '2023-04-06 03:40:43', '2023-06-21 02:21:09'),
(39, 8, NULL, 'Semen Bondhet', 'semen-bondhet', 'image/batik/1682753089644cc6415e9ff.jpg', '<p style=\"text-align: justify;\">\"Bondhet\" berarti bergandengan tangan, juga adalah salah satu jenis gendhing (lagu). Motif ini melambangkan cinta dan Kasih menuju ketentraman lahir batin. Dengan demikian setelah diruwat, diharapkan si anak/orang yang sukerta hidupnya dipenuhi rasa kasih sayang dan mencapai ketentraman lahir batin.</p>', 0, '2023-04-06 03:40:59', '2023-04-29 07:24:49'),
(40, 8, NULL, 'Tambal Pamiluta', 'tambal-pamiluta', 'image/batik/1682753088644cc6402f108.jpg', '<p style=\"text-align: justify;\">Pamiluto mempunyai arti memikat. Motif batik Tambal Pamiluta terdiri dari berbagai motif batik berbentuk segilima tergambar saling menambal, seakan saling mengisi dengan kebaikan dan keindahannya sehingga menyatu menjadi satu kesatuan yang indah dan memikat. Motif ini melambangkan saling melengkapi dengan kebaikan.</p>', 0, '2023-04-06 03:41:12', '2023-04-29 07:24:48'),
(41, 8, NULL, 'Slobog', 'slobog', 'image/batik/1682753081644cc63924ba0.jpg', '<p style=\"text-align: justify;\">Pada upacara Ruwatan pemakaian kain batik motif Slobog dimaksudkan agar orang yang di-Ruwat dalam menjalani aktifitasnya selalu diberi kemudahan, kelancaran, kesuksesan selama hidupnya.</p>', 0, '2023-04-06 03:41:21', '2023-04-29 07:24:41'),
(42, 9, 1, 'Semen Rante', 'semen-rante', 'image/batik/1682755131644cce3b1b040.jpg', '<p style=\"text-align: justify;\">Semen berasal dari kata \"semi\" yaita tumbuhnya bagian dari tanaman. Sedangkan Rante berasal dari kata \"rantai&rdquo;. Batik Semen Rante dikenakan calon pengantin putri mengibaratkan bahwa sang gadis atau wanita yang dipanah sudah bersedia dirantai atau dilamar/diikat sebagai istri pasangan hidup atau garwa.</p>\r\n<p style=\"text-align: justify;\">Peningsetan - Semen Rante: Kain batik yang dipakai calon mempelai perempuan adalah motif Semen Rante, begitu juga calon mempelai pria juga memakai kain batik dengan motif yang sama.</p>', 0, '2023-04-06 12:03:06', '2023-04-29 07:58:51'),
(43, 9, 1, 'Kuda Rante', 'kuda-rante', 'image/batik/1682755176644cce6889efa.jpg', '<p style=\"text-align: justify;\">Kuda adalah \"turangga\" yang menggambarkan keperkasaan, sedangkan Rante adalah tali ikatan. Motif ini melambangkan seperkasa apapun seorang manusia, ia harus terkendali agar dapat mencapai keharmonisan, keselarasan dengan lingkungannya.</p>', 0, '2023-04-06 12:03:13', '2023-04-29 07:59:37'),
(44, 9, 1, 'Satria Manah', 'satria-manah', 'image/batik/1682755177644cce69c86fa.jpg', '<p style=\"text-align: justify;\">Batik Satria Manah biasanya dikenakan oleh pria yang akan melamar. Pola Satria Manah menggambarkan memanah sang jantung hati yaitu wanita yang dipilih sebagai istri. Diharapkan nantinya istri akan \"bekti\" dan menjadi pendamping hidup yang baik sebagai garwa (sigaraning nyawa = belahan jiwa).</p>', 0, '2023-04-06 12:03:19', '2023-04-29 07:59:38'),
(45, 9, 2, 'Nitik Cakar Ayam', 'nitik-cakar-ayam', 'image/batik/1682755119644cce2f0067c.jpg', '<p style=\"text-align: justify;\">Motif ini menggambarkan cakar ayam (kaki ayam) yang distilisasi dalam pola nitik. Motif ini dikenakan oleh calon pengantin putri. Motif cakar ayam melambangkan harapan agar calon pengantin dapat mengais rejeki, mencari penghidupan secara halal, ibarat ayam yang mencari makan mengais dengan cakarnya.</p>', 0, '2023-04-06 12:05:41', '2023-04-29 07:58:39'),
(46, 9, 2, 'Nitik Nagasari', 'nitik-nagasari', 'image/batik/1682755183644cce6fc46d1.jpg', '<p style=\"text-align: justify;\">Motif Nagasari menggambarkan pohon nagasari, dimana dalam cerita Ramayana, tokoh Dewi Sinta dengan setia menunggu kedatangan Rama di bawah pohon nagasari. Melambangkan kesetiaan yang abadi. Diharapkan bagi calon pengantin dapat menjadi pasangan yang saling mencintai selamanya.</p>\r\n<p style=\"text-align: justify;\">Pingitan - Nitik Nagasari: kain batik yang dipakai calon pengantin pria adalah motif<br />nagasari</p>', 0, '2023-04-06 12:05:49', '2023-04-29 07:59:44'),
(47, 9, 2, 'Tanjung Gunung', 'tanjung-gunung', 'image/batik/1682755170644cce624cb1a.jpg', '<p style=\"text-align: justify;\">Tanjung (bahasa Jawa) merupakan jarwa dhosok/akronim dari kata \'tansah junjung\' Motif Tanjung Gunung merupakan kelompok nitik menggambarkan keindahan bunga tanjung sebagai ornamen pokok. Diharapkan bagi calon pengantin senantiasa menjunjung budi pekerti yang luhur mulia dalam sehari-hari sehingga menebar aroma harum atau memberikan manfaat kepada sesama.</p>\r\n<p style=\"text-align: justify;\">Pingitan: Kain batik yang dipakai calon mempelai perempuan adalah motif tanjung gunung.</p>', 0, '2023-04-06 12:05:56', '2023-04-29 07:59:30'),
(48, 9, 3, 'Wora Wari Rumpuk', 'wora-wari-rumpuk', 'image/batik/1682755133644cce3d01855.jpg', '<p style=\"text-align: justify;\">\'Wora-Wari\' adalah nama bunga. Melambangkan harapan mendapat rejeki yang bertumpuk untuk bisa dimanfaatkan dengan baik, bagi calon pengantin dalam mengarungi kehidupan baru mendapatkan rejeki bertumpuk.</p>\r\n<p style=\"text-align: justify;\">Siraman: Kain batik yg dipakai calon mempelai perempuan adalah motif wora wari rumpuk. Cara pemakaiannya dengan gaya pinjungan dan diluarnya memakai kain putih Kedua orang tua calon mempelai memakai kain batik mofif cakar ayam.</p>', 0, '2023-04-06 12:07:41', '2023-04-29 07:58:53'),
(49, 9, 3, 'Sidoluhur', 'sidoluhur', 'image/batik/1682755173644cce654cb76.jpg', '<p style=\"text-align: justify;\">Melambangkan harapan hidup berbudi luhur. Luhur dalam berkedudukan di masyarakat disertai keluhuran budi dan perilaku.</p>\r\n<p style=\"text-align: justify;\">Siraman - Tahap Kedua: Setelah selesai siraman calon mempelai perempuan memakai kain Batik motif Sidoluhur sebagai penutup bahu.</p>', 0, '2023-04-06 12:07:48', '2023-04-29 07:59:33'),
(50, 9, 4, 'Semen Rama', 'semen-rama', 'image/batik/1682755172644cce6441e19.jpg', '<p style=\"text-align: justify;\">Motif batik Semen Rama memuat lambang ajaran Hasta Brata yaitu delapan ajaran keutamaan bagi seorang pemimpin harus mampu menjadi pelindung dan memberi kemakmuran, bersifat tabah, berwatak luhur, berhati lapang, adil, mampu memberi dan berbagi kebahagiaan, memberi dan membagi kesejahteraan, serta mampu menghadapi dan memerangi musuh. Semen Rama melambangkan harapan agar nanti calon pengantin menjadi seorang yang arif dan bijaksana.</p>', 0, '2023-04-06 14:52:22', '2023-04-29 07:59:32'),
(51, 9, 4, 'Kohinoor', 'kohinoor', 'image/batik/1682755163644cce5bc35b7.jpg', '<p style=\"text-align: justify;\">Merupakan penggambaran dari Kohinoor, permata yang amat kenal Dengan kata lain motif ini tercipta dengan Kohinoor yang membumi.</p>\r\n<p style=\"text-align: justify;\">Midodareni: Upacara sehari sebelum dilaksanakan akad nikah. Calon mempelai perempuan memakai kain batik motif kohinoor.</p>', 1, '2023-04-06 14:52:50', '2023-04-29 07:59:24'),
(52, 9, 5, 'Truntum', 'truntum', 'image/batik/1682755182644cce6ed642c.jpg', '<p style=\"text-align: justify;\">Motif batik tradisional truntum ini melambangkan cinta yang bersemi atau bertautnya kembali cinta. Konon motif truntum ini tercipta tatkala permaisuri Susuhunan Paku Buwono III sedang dilupakan oleh sang suami. Dalam kesedihan karena tidak lagi diperhatikan suami (dilupakan) sang permaisuri mendekatkan diri dan berdoa kepada Tuhan YME sambil membatik, dan terciptalah motif bintang-bintang. Akhirnya ketekunan yang dilambari dengan keheningan mendekatkan diri kepada Sang Pencipta tersebut membuahkan hasil. Cinta sang raja kembali bersemi dan dengan rasa kasih selalu menengok dan memperhatikan sang permaisuri membatik motif. Motif ini kemudian dinamai Truntum yang berarti bertautnya cinta.</p>\r\n<p style=\"text-align: justify;\">ijab: Calon pengantin pria memakai kain batik motif truntum, sedang kedua orang tua calon mempelai pria memakai kain batik motif truntum ceplok kuntul. Calon pengantin perempuan dan kedua orang tuanya juga memakai kain batik dengan motif yg sama.</p>', 0, '2023-04-06 14:56:14', '2023-04-29 07:59:43'),
(53, 9, 5, 'Sidoasih', 'sidoasih', 'image/batik/1682755135644cce3f6dee4.jpg', '<p style=\"text-align: justify;\">\'Sido\' berarti menjadi, \'asih\' berarti sayang, mengasihi. Melambangkan harapan agar kelak menjadi orang dengan penuh welas asih, bisa menyayangi, mengasihi dalam kehidupan.</p>', 0, '2023-04-06 14:56:28', '2023-04-29 07:58:55'),
(54, 9, 5, 'Sidomukti', 'sidomukti', 'image/batik/1682755190644cce769a91c.jpg', '<p style=\"text-align: justify;\">Arti kata \'sida\' berarti menjadi, \'mukti\' berarti mulia. Kain batik dengan motif Sidamukti melambangkan harapan hidup menjadi mulia, berkecukupan dan bahagia lahir batin dunia dan akhirat.</p>', 0, '2023-04-06 14:56:47', '2023-04-29 07:59:51'),
(55, 9, 5, 'Sidoluhur', 'sidoluhur', 'image/batik/1682755181644cce6d666cd.jpg', '<p style=\"text-align: justify;\">Melambangkan harapan hidup berbudi luhur. Luhur dalam berkedudukan di masyarakat disertai keluhuran budi dan perilaku.</p>', 0, '2023-04-06 14:57:09', '2023-04-29 07:59:41'),
(56, 9, 5, 'Sidomulya', 'sidomulya', 'image/batik/1682755190644cce76f3b4f.jpg', '<p style=\"text-align: justify;\">Melambangkan harapan hidup yang berkecukupan, bahagia dan sejahtera.</p>', 1, '2023-04-06 14:57:37', '2023-06-20 20:51:02'),
(57, 10, NULL, 'Babon Nglubuk Yogyakarta', 'babon-nglubuk-yogyakarta', 'image/batik/1682755537644ccfd1151bd.jpg', '<p style=\"text-align: justify;\">Menggambarkan babon (induk ayam) yang sedang mengerami telurnya, dengan harapan telurnya akan menetas pada saatnya. Digambarkan seakan sebagai ayam yang galak melindungi telurnya dengan menegakan bulunya. Melambangkan sifat seorang ibu yang melindungi putra-putrinya dengan selalu ikhlas berkorban. Ada juga yang mengartikan harapan akan kesuburan.</p>', 0, '2023-04-06 15:05:47', '2023-04-29 08:05:37'),
(58, 10, NULL, 'Babon Angrem', 'babon-angrem', 'image/batik/1682755554644ccfe2d9764.jpg', '<p style=\"text-align: justify;\">Menggambarkan babon (induk ayam) yang sedang mengerami telurnya, dengan harapan telurnya akan menetas pada saatnya. Digambarkan seakan sebagai ayam yang galak melindungi telurnya dengan menegakan bulunya. Melambangkan sifat seorang ibu yang melindungi putra-putrinya dengan selalu ikhlas berkorban. Ada juga yang mengartikan harapan akan kesuburan.</p>', 0, '2023-04-06 15:06:31', '2023-04-29 08:05:55'),
(59, 10, NULL, 'Sidoasih', 'sidoasih', 'image/batik/1682755552644ccfe07ad86.jpg', '<p>\'Sido\' berarti menjadi, \'asih\' berarti sayang, mengasihi. Melambangkan harapan agar kelak menjadi orang dengan penuh welas asih, bisa menyayangi, mengasihi dalam kehidupan.</p>', 0, '2023-04-06 15:07:51', '2023-04-29 08:05:53'),
(60, 10, NULL, 'Sidomukti', 'sidomukti', 'image/batik/1682755605644cd01539a55.jpg', '<p style=\"text-align: justify;\">Arti kata \'sida\' berarti menjadi, \'mukti\' berarti mulia. Kain batik dengan motif Sidamukti melambangkan harapan hidup menjadi mulia, berkecukupan dan bahagia lahir batin dunia dan akhirat.</p>', 0, '2023-04-06 15:08:27', '2023-04-29 08:06:45'),
(61, 10, NULL, 'Semen Huk', 'semen-huk', 'image/batik/1682755587644cd0038d6db.jpg', '<p style=\"text-align: justify;\">Motif Semen Huk dengan ornamen pokok Huk diciptakan oleh Sultan Agung Hanyakrakusuma pada abad ke-17, pada masa akulturasi budaya jawa, Hindu, dan Islam. Pemberian nama huk berasal dari kata \"Hu\'Allah-Allahu\", mempunyai konotasi yang sama dengan dua kalimat syahadat. Huk dilukiskan sebagai burung Hong yang ada di dalam cangkang telur, sementara telur tersebut berada dalam sangkar, dan semuanya terlihat transparan. Semen Hok merupakan symbol kepemimpinan yang baik, senantiasa ingat dan taqwa kepada Allah SWT, arif bijaksana, berbudi luhir, terpercaya, tegas, mendidik, dan melindungi bersama rakyat.</p>', 0, '2023-04-06 15:09:28', '2023-04-29 08:06:28'),
(62, 10, NULL, 'Semen Ageng', 'semen-ageng', 'image/batik/1682755602644cd012d93ed.jpeg', '<p style=\"text-align: justify;\">Pada motif ini tergambar ornament pohon hayat yang menggambarkan pohon kehidupan yang berupa symbol keadilan dan kekuasaan, ornament tumbuhan sebagai symbol kesuburan, ornament burung sebagai symbol angin yang bermakna budi luhur, ornament garuda menggambarkan matahari bersifat kejantanan bermakna kekuasaan dan kepemimpinan. Dengan demikian motif ini menggambarkan seorang pemimpin yang berbudi luhur, mengayomi dan melindungi rakyatnya serta lingkungan alam atau sekitarnya.</p>', 1, '2023-04-06 15:10:12', '2023-04-29 08:06:43'),
(63, 10, NULL, 'Semen Gegot', 'semen-gegot', 'image/batik/1682755605644cd015cb01d.jpg', '<p style=\"text-align: justify;\">Motif Gegot termasuk ke dalam motif semen. Nama gegot berasal dari gegotro yang berarti awal mula. Motif in mengandung harapan agar pemakainya dapat hidup berumahtangga dengan berlandaskan prinsip-prinsip hidup yang kuat.</p>\r\n<p style=\"text-align: justify;\">Selain batik diatas batik motif lain yang dipakai adalah Semen Rama, Grompol, Nagasari, Sidomulyo, Sidoluhur.</p>', 0, '2023-04-06 15:11:06', '2023-04-29 08:06:46'),
(64, 11, NULL, 'Kawung', 'kawung', 'image/batik/1682755997644cd19d3391a.jpg', '<p style=\"text-align: justify;\">Kawung mengandung makna mancapat, yang mana batik ini digunakan sebagai lurub dengan harapan dapat lancar kembali ke alam kelanggengan. Di sini kata Kawung dimaksudkan sebagai \"Bali nang alam suwung\" artinya kembali ke alam kosong/hampa yaitu alam yang suwung dari hingar bingar keduniawian (alam baka).</p>', 0, '2023-04-07 05:41:02', '2023-04-29 08:13:17'),
(65, 11, NULL, 'Slobog', 'slobog', 'image/batik/1682756000644cd1a0a93c7.jpg', '<p style=\"text-align: justify;\">Sebagaimana Kawung, Slobong digunakan sebagai lurub dengan harapan arwah yang kembali kealam kelanggengan (keabadian) berjalan dengan lancar karena berjalan di jalan yang lobok (longgar). Bisa juga diartikan \"sidlobokake\" atau dimasukkan, ditelusupkan ke jalan yang tanpa halangan menuju ke alam kelanggengan.</p>', 0, '2023-04-07 05:41:11', '2023-04-29 08:13:21'),
(66, 11, NULL, 'Semen Sidorojo Sunyaruri', 'semen-sidorojo-sunyaruri', 'image/batik/1682756001644cd1a14f879.jpg', '<p style=\"text-align: justify;\">Awal sumber kehidupan yang menempatkan kemuliaan kedudukan tertinggi yang abadi, tanpa batas, masuk dalam alam sepi/sudah hidup di alam lain (kekal abadi).</p>', 0, '2023-04-07 05:41:16', '2023-04-29 08:13:21'),
(67, 12, NULL, 'Cinde Abrit', 'cinde-abrit', 'image/batik/1682756210644cd27232d95.jpg', '<p style=\"text-align: justify;\">Kain batik motif cindhe dengan warna dasar merah yang merupakan benda pokok yang akan turut dilabuh dalam upacara labuhan. Bentuk motifnya merupakan bagian kelompok dari motif nitik. Kain batik in merupakan salahsatu benda yang ditujukan kepada Kanjeng Ratu Kidul melalui ritual di Pantai Parangkusumo.</p>', 0, '2023-04-08 03:10:16', '2023-04-29 08:16:50'),
(68, 12, NULL, 'Cinde Ijem', 'cinde-ijem', 'image/batik/1682756224644cd280bec45.jpg', '<p style=\"text-align: justify;\">Kain batik motif cindhe dengan warna hijau merah yang merupakan benda pokok yang akan turut dilabuh dalam upacara labuhan. Bentuk motifnya merupakan bagian kelompok dari motif nitik. Kain batik in merupakan salahsatu benda yang ditujukan kepada Kanjeng Ratu Kidul melalui ritual di Pantai Parangkusumo.</p>', 0, '2023-04-08 03:10:23', '2023-04-29 08:17:05'),
(69, 12, NULL, 'Cangkring', 'cangkring', 'image/batik/1682756206644cd26ee023c.jpg', '<p style=\"text-align: justify;\">Kain batik motif Cangkring yang merupakan benda pokok yang akan turut dilabuh dalam upacara labuhan. Pemberian nama pada Batik Cangkring diambil dari salah satu nama poon yakni pohon Cangkring. Merupakan salahsatu benda yang ditujukan kepada Kanjeng Ratu Kidul melalui ritual di<br />Pantai Parangkusumo.</p>', 0, '2023-04-08 03:10:28', '2023-04-29 08:16:47'),
(70, 12, NULL, 'Semekan Gadhung', 'semekan-gadhung', 'image/batik/1682756174644cd24ebdd15.jpg', '<p style=\"text-align: justify;\">Semekan Gadhung diambil dari kata Gadhung\' yang merupakan buah berwarna hijau.</p>', 0, '2023-04-08 03:10:36', '2023-04-29 08:16:15'),
(71, 12, NULL, 'Semekan Gadhung Mlathi', 'semekan-gadhung-mlathi', 'image/batik/1682756198644cd26679bf9.jpg', '<p style=\"text-align: justify;\">Gadhung merupakan buah yang berwarna hijau, sedangkan Mlathi itu merupakan bunga yang berwarna putih.</p>', 0, '2023-04-08 03:10:47', '2023-04-29 08:16:38'),
(72, 12, NULL, 'Udorogo', 'udorogo', 'image/batik/1682756209644cd27142c58.jpg', '<p style=\"text-align: justify;\">Udorogo terdiri dari warna Merah, Kuning, dan Hijau yang merupakan simbol dari pencampuran tiga anasir kehidupan, yaitu air, udara, api.</p>', 1, '2023-04-08 03:13:37', '2023-04-29 08:16:49'),
(73, 12, NULL, 'Semekan Bangun Tulak (Bango Tulak)', 'semekan-bangun-tulak-bango-tulak', 'image/batik/1682756206644cd26e747aa.jpg', '<p style=\"text-align: justify;\">Bangun Tulak (Bango Tulak) terdiri dari warna putih dan biru tua (hitam). Bango adalah burung Bangau yang identik dengan warna putih. Lalu Tulak dalam bahasa jawa mengartikan istilah itu dengan warna Hitam. Kemudian Bango Tulak dapat diartikan sebagai ayam tulak atau ayam yang berbulu warna hitam-putih.</p>', 0, '2023-04-08 03:13:41', '2023-04-29 08:16:46'),
(74, 12, NULL, 'Dhestar Bangun Tulak (Bango Tulak)', 'dhestar-bangun-tulak-bango-tulak', 'image/batik/1682756213644cd275902ef.jpg', '<p style=\"text-align: justify;\">Bangun Tulak atau Bango Tulak dalam Dhestar, di Jawa dipakai sebagai penutup kepala. Dhestar tersebut berwarna biru dan putih yang kemudian dibaratkan Doro Muluk.</p>', 1, '2023-04-08 03:13:48', '2023-06-21 07:06:09'),
(75, 12, NULL, 'Poleng', 'poleng', 'image/batik/1682756223644cd27f5a90f.jpg', '<p style=\"text-align: justify;\">Motif poleng yang berbentuk kotak-kotak berwarna hitam-putih layaknya papan catur ini mengandung filosofi yang tinggi. Hitam, merupakan perlambang kekuatan. Sang pemilik kekuatan selalu memiliki watak, perkasa, mudah marah dan tersinggung, serta berwatak berangasan. Apabila dibiarkan, akan menghalangi perbuatan keutamaan. Sedangkan warna Putih, memiliki arti sebagai penuntun ke arah hidup suci. Mumpuni didalam olah spiritualitas dan mampu menerima ilmu ma\'rifat dari Sang Maha Pencipta.</p>', 0, '2023-04-08 03:13:55', '2023-04-29 08:17:03'),
(76, 12, NULL, 'Lurik Tuluh Watu', 'lurik-tuluh-watu', 'image/batik/1682756230644cd286d0daa.jpg', '<p>Tuluh Watu berarti batu yang bersinar dan dianggap bertuah sebagai penolak bala. Corak ini dapat dipergunakan pada upacara ruwatan sukerta dan sebagai pelengkap sesajen upacara labuhan. Tuluh dapat berarti pula kuat atau perkasa, Corak Tuluh Watu termasuk sakral yang dahulu hanya boleh dipakai oleh orang tertentu yang berkepribadian kuat dan berbudi luhur.</p>', 0, '2023-04-08 03:14:03', '2023-04-29 08:17:11'),
(77, 12, NULL, 'Lurik Dringin', 'lurik-dringin', 'image/batik/1682756234644cd28aa31d1.jpg', '<p style=\"text-align: justify;\">Nama Lurik merupakan diambil dari lingkungan alam sekitar dan merupakan simbol dari kerakyatan.</p>', 0, '2023-04-08 03:14:14', '2023-04-29 08:17:15'),
(78, 12, NULL, 'Lurik Songer', 'lurik-songer', 'image/batik/1682756408644cd33831daa.jpg', '<p style=\"text-align: justify;\">Nama Lurik merupakan diambil dari lingkungan alam sekitar dan merupakan simbol dari kerakyatan.</p>', 0, '2023-04-08 03:16:54', '2023-04-29 08:20:08'),
(79, 12, NULL, 'Semekan Pandhan Binethot', 'semekan-pandhan-binethot', 'image/batik/1682756340644cd2f43e330.jpg', '<p style=\"text-align: justify;\">Pandhan Binethot diambil dari pohon pandhan yang di bethot (dicabut). Pandhan Binethot juga merupakan simbol tanah dan tanaman serta simbol kesuburan.</p>', 0, '2023-04-08 03:17:03', '2023-04-29 08:19:00'),
(80, 12, NULL, 'Semekan Podhang Ngisep Sari', 'semekan-podhang-ngisep-sari', 'image/batik/1682756397644cd32d7a662.jpg', '<p style=\"text-align: justify;\">Podhang pada warna kuning diambil dari burung Kepodhang. Ngisep Sari adalah warna kuning dari paruh burung kepodhang yang dipergunakan untuk menghisap sari buah.</p>', 0, '2023-04-08 03:17:20', '2023-04-29 08:19:58'),
(81, 12, NULL, 'Ikat Pinggang Warna Merah', 'ikat-pinggang-warna-merah', 'image/batik/1682756443644cd35b5d751.jpg', '<p style=\"text-align: justify;\">Ikat pinggang merah untuk Penderek (pengikut) Kanjeng Ratu Kidul di Labuhan Parangkusumo.</p>', 0, '2023-04-08 03:17:28', '2023-04-29 08:20:43'),
(82, 12, NULL, 'Ikat Pinggang Warna Hijau', 'ikat-pinggang-warna-hijau', 'image/batik/1682756406644cd33639828.jpg', '<p style=\"text-align: justify;\">Ikat pinggang warna hijau untuk Penderek (pengikut) Kaneman Labuhan di Gunung Lawu dan di Labuhan Dlepih Kahyangan Wonogiri.</p>', 0, '2023-04-08 03:17:37', '2023-04-29 08:20:06'),
(83, 12, NULL, 'Ikat Pinggang Warna Biru', 'ikat-pinggang-warna-biru', 'image/batik/1682756419644cd3433f868.jpg', '<p style=\"text-align: justify;\">Ikat pinggang biru untuk Penderek (pengikut) Kanjeng Ratu Kidul di Labuhan Parangkusumo.</p>', 1, '2023-04-08 03:19:22', '2023-06-18 12:07:48'),
(84, 12, NULL, 'Ikat Pinggang Warna Jingga', 'ikat-pinggang-warna-jingga', 'image/batik/1682756364644cd30c86932.jpg', '<p style=\"text-align: justify;\">Ikat Pinggang Jingga untuk Pengajeng (komandan) Kasepuhan dan Pengajeng (komandan) Kaneman di labuhan Gunung Lawu.</p>', 0, '2023-04-08 03:19:30', '2023-04-29 08:19:25'),
(85, 12, NULL, 'Limaran', 'limaran', 'image/batik/1682756428644cd34cad4ea.jpg', '<p style=\"text-align: justify;\">Limaran merupakan kain batik yang digunakan untuk Labuhan di Gunung Lawu.</p>', 4, '2023-04-08 03:19:43', '2023-06-18 12:07:43'),
(86, 12, NULL, 'Kawung Kemplong', 'kawung-kemplong', 'image/batik/1682756441644cd35943e3a.jpg', '<p style=\"text-align: justify;\">Batik Kawung Kemplong merupakan kain batik yang digunakan untuk Labuhan di Gunung Merapi.</p>', 6, '2023-04-08 03:19:58', '2023-06-18 11:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_picture` varchar(255) NOT NULL,
  `brand_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `category_no` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `city_id`, `category_no`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Kelahiran & Perawatan Ari-ari', 'yogyakarta-kelahiran-perawatan-ari-ari', '2023-04-05 08:25:13', '2023-04-06 02:58:56'),
(3, 1, 2, 'Menggendong Bayi', 'yogyakarta-menggendong-bayi', '2023-04-05 08:25:47', '2023-04-06 02:59:01'),
(4, 1, 3, 'Tedhak Sinten', 'yogyakarta-tedhak-sinten', '2023-04-05 08:26:14', '2023-04-06 02:59:09'),
(5, 1, 4, 'Khitanan/Supitan', 'yogyakarta-khitanansupitan', '2023-04-05 08:26:37', '2023-04-06 02:59:10'),
(6, 1, 5, 'Tetesan', 'yogyakarta-tetesan', '2023-04-05 08:26:51', '2023-04-06 02:59:11'),
(7, 1, 6, 'Tarapan', 'yogyakarta-tarapan', '2023-04-05 08:27:01', '2023-04-06 02:59:12'),
(8, 1, 7, 'Ruwatan', 'yogyakarta-ruwatan', '2023-04-05 08:27:21', '2023-04-06 02:59:14'),
(9, 1, 8, 'Pernikahan', 'yogyakarta-pernikahan', '2023-04-06 11:57:15', '2023-04-06 11:57:45'),
(10, 1, 9, 'Kehamilan - Mitoni', 'yogyakarta-kehamilan-mitoni', '2023-04-06 11:59:43', '2023-04-06 11:59:43'),
(11, 1, 10, 'Kematian', 'yogyakarta-kematian', '2023-04-07 05:38:25', '2023-04-07 05:38:25'),
(12, 1, 11, 'Labuhan', 'yogyakarta-labuhan', '2023-04-07 05:41:43', '2023-04-07 05:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_slug` varchar(255) NOT NULL,
  `city_picture` varchar(255) NOT NULL,
  `city_viewed` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `city_slug`, `city_picture`, `city_viewed`, `created_at`, `updated_at`) VALUES
(1, 'Yogyakarta', 'yogyakarta', 'image/kota/1680751232642e3a802f349.png', 58, '2023-04-05 02:05:12', '2023-06-21 07:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_01_04_101535_create_cities_table', 1),
(6, '2023_01_04_101548_create_categories_table', 1),
(7, '2023_01_04_101607_create_sub_categories_table', 1),
(8, '2023_01_04_101618_create_batiks_table', 1),
(9, '2023_01_24_191709_create_settings_table', 1),
(10, '2023_01_28_122009_create_brands_table', 1),
(11, '2023_01_28_132302_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_title` varchar(255) NOT NULL DEFAULT 'Daur Hidup Batik',
  `setting_address` varchar(255) NOT NULL DEFAULT 'Jl. Raya Tlogomas No.246, Babatan, Tegalgondo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144',
  `setting_description_footer` varchar(255) NOT NULL DEFAULT 'Welcome to the World’s Museum of Modern Art. It in- cludes works of art created during the period stretching. from about 1860 to the 1970s.',
  `setting_no_phone` varchar(255) NOT NULL DEFAULT '0812 3454 3212',
  `setting_email` varchar(255) NOT NULL DEFAULT 'email@gmail.com',
  `setting_banner` varchar(255) NOT NULL DEFAULT 'upload/setting/banner.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_title`, `setting_address`, `setting_description_footer`, `setting_no_phone`, `setting_email`, `setting_banner`, `created_at`, `updated_at`) VALUES
(1, 'Daur Hidup Batik', 'Jl. Raya Tlogomas No.246, Babatan, Tegalgondo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', 'Welcome to the World’s Museum of Modern Art. It in- cludes works of art created during the period stretching. from about 1860 to the 1970s.', '0812 3454 3212', 'email@gmail.com', 'image/banner/1680751144642e3a2803a98.jpg', '2023-04-05 02:03:55', '2023-04-06 03:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_name`, `sub_slug`, `created_at`, `updated_at`) VALUES
(1, 9, 'Peningsetan', 'peningsetan', '2023-04-06 11:57:54', '2023-04-06 11:57:54'),
(2, 9, 'Pingitan', 'pingitan', '2023-04-06 11:58:14', '2023-04-06 11:58:14'),
(3, 9, 'Siraman', 'siraman', '2023-04-06 11:58:29', '2023-04-06 11:58:29'),
(4, 9, 'Midodareni', 'midodareni', '2023-04-06 11:58:41', '2023-04-06 11:58:41'),
(5, 9, 'Ijab dan Panggih', 'ijab-dan-panggih', '2023-04-06 11:59:03', '2023-04-06 11:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_picture` varchar(255) NOT NULL,
  `team_positition` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aria Maulana', 'aria@gmail.com', '2023-04-05 02:03:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u1wXzBa0V5wJzCqMsbMpmFvMr25XPZfPKuCDnfP2Rmt7LlblkGwCWe2MNJQD', '2023-04-05 02:03:55', '2023-04-29 07:49:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batiks`
--
ALTER TABLE `batiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `batiks`
--
ALTER TABLE `batiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

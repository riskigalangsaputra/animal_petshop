-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 08:58 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-12+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'animalpetshop@yopmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `stok` int(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar`, `jenis_barang`, `kategori`, `stok`, `harga`, `keterangan`) VALUES
(1, 'Wishkas Junior 85 Gram', 'makanan2.png', 'makanan', 'makanan', 29, 35000, 'Makanan kucing kesayangan, Tuna flavour'),
(2, 'kandang-kucing-hamster.jpg', 'kandang-hamster.PNG', 'aksesoris', 'kandang dan tas', 9, 1250000, 'Kandang Kucing Hamster Hewan 3 Lantai + Bak Plastik C-226'),
(6, 'tempat tidur anjing', 'tempat_tidur.PNG', 'aksesoris', 'tempat tidur', 6, 300000, 'Tempat Tidur Anjing Kedatangan Baru Cama Para Cachorro Rumah Anjing Lembut Harian Produk untuk Hewan Peliharaan Kucing Anjing Rumah Bentuk 1 Warna Merah-Intl'),
(8, 'Kalung Anti Kutu Kucing Lice Repellent Collar 33cm -Hijau', 'kalung1.jpg', 'aksesoris', 'kalung', 10, 68000, 'Mencegah Kutu secara efektif , Aroma dan perlindungan terhadap kutu tahan lama/awet dan Didesign anti air'),
(22, 'Pet Wash Brush Sisir Grooming Pet Mandi Anjing Kucing', 'sisirkucing.jpg', 'grooming', 'grooming', 8, 15000, 'Permukaannya lembut namun efektif dalam membantu Anda saat memandikan anjing/kucing kesayangan Anda dari kotoran yang menempel di badan saat proses grooming berlangsung.'),
(25, 'me-o persian 7kg 7 kg cat food catfood', 'meo.png', 'makanan', 'makanan', -1, 274000, 'Kucing Persia memiliki mantel rambut panjang yang dapat bermasalah pada terbentuknya bola rambut ketika mereka menelan rambut mereka selama perawatan, Untuk mencegah masalah ini, makanan kucing Me-O Persian menggabungkan serat khusus yang terus menerus melancarkan perjalanan yang aman bagi rambut yang tertelan melalui saluran pencernaan sehingga mengurangi risiko pembentukan bola rambut.'),
(26, 'Kalung Kucing Anjing Kecil Warna Warni Dengan Bell Kerincing Lucu', 'kalungwarnawarni.JPG', 'aksesoris', 'kalung', 18, 15000, 'Tersedia Pilihan Warna : Merah, Pink, Kuning, Biru, Hijau, Hitam Cocok untuk Kucing, Anjing Kecil, Kelinci dan hewan lainnya dengan lingkar leher (19-32cm)'),
(27, 'Kalung Anti Kutu Kucing Anjing Musang Kelinci', 'kalungantikutu.JPG', 'aksesoris', 'kalung', 8, 18000, 'kalung anti kutu bisa digunakan untuk anjing / kucing/musang/kelinci/dll masa pakai 3 bulan dari kemasan dibuka.'),
(28, 'Kalung Anjing Kucing Hewan Gantungan Dog Collar Pet ', 'kalunganjing.JPG', 'aksesoris', 'kalung', 15, 40000, 'Kalung anjing dengan bahan quality tinggi (Faux Leather), Ada bell pendant, Awet dan tahan lama. Size 1 cm x 30 cm (lingkar leher bisa diadjust) '),
(30, 'kolar kalung/harnes/tali tuntun kucing dan anjing', 'kalungpanjang.JPG', 'aksesoris', 'kalung', 20, 20000, 'Harness tali tuntun untuk jalan jalan hewan peliharaan kesayangan, kucing dewasa dan Anjing jenis kecil dengan kwalitas bagus harga tidak mahal  pemakaian tidak mencekik leher hewan kesayangan, bisa diatur besar dan kecil pada lingkar badan. Terbuat dari bahan berkwalitas dengan Ukuran Panjang Tali 130 cm Ukuran Lebar Tali 1,5 cm'),
(31, 'Kalung Kucing Polka Dot dengan Lonceng', 'kalunggg.JPG', 'aksesoris', 'kalung', 10, 10000, 'Kalung motif polka dot. Bahan lembut. Ada lonceng ukuran sedang. Bisa disetel besar-kecil ukuran. Ukuran maksimal 31-32 cm. Tersedia warna : PINK, UNGU, BIRU, SILVER'),
(33, 'Voerzoo Insect Blend 225gr - Pakan Murai Batu, Kacer, Ciblek, Pentet.', 'makanan burung.JPG', 'makanan', 'makanan', 18, 40000, 'ibuat dari bahan utama serangga yang merupakan makanan alami burung pemakan serangga.  Dengan pemberian voerzoo insect blend, burung sudah tidak perlu diberikan serangga seperti jangkrik & kroto.  Mengandung protein tinggi 30% (min) dimana sumber protein terbesar berasal dari serangga sehingga sangat sesuai sebagai makanan utama maupun extra food burung pemakan serangga seperti murai batu, kacer, cendet / pentet, gelatik watu, sirtu / cipoh, dll.'),
(34, 'Royal canin wetfood kitten instinctive jelly / gravy 85gr', 'royal.JPG', 'makanan', 'makanan', 17, 15000, 'Royal canin kitten instinctive jelly / gravy 85gr wetfood buat kitten kesayangan anda'),
(35, 'Makanan pakan kelinci royal rabbit food 1 kg ecer sekelas skr 214', 'makanankelinci.JPG', 'makanan', 'makanan', 10, 12000, 'Royal Rabbit Premium Food Made in Invivo Group France  Kemasan : 1kg Expired Panjang Produk Original Fresh langsung dikemas dari karungan                                                   Kelebihan Menggunakan Royal Rabbit : - Baik untuk semua jenis kelinci dan semua usia kelinci - Mengurangi Bau kotoran & Urine kelinci - Sangat baik untuk pencernaan & Pertumbuhan karena mengandung Timothy & alfalfa  - Multivitamin yang lengkap - Baik untuk kesehatan bulu yang lebat & berkilau - Mengurangi keron'),
(36, 'Agaru Floating Makanan / Pakan ikan koki Terapung 100gr Agaru Floating Makanan / Pakan ikan koki Ter', 'makanan ikan.JPG', 'makanan', 'makanan', 20, 7000, 'Merk : AGARU Type : Mengapung ( floating ) Berat Bersih : 100 gram Exp : 2019'),
(37, 'SISIR GROOMING Anjing, Kucing Dan Kelinci Dua Sisi', 'sisir.JPG', 'grooming', 'grooming', 8, 25000, 'SIsir Grooming untuk Anjing, Kucing, Kelinci Dll dengan bentuk dua sisi dengan kerenggangan sisir yang berbeda yang dapat dengan mudah menata bulu hewan kesayangan anda'),
(38, 'Sisir kucing anjing grooming rake', 'sisiranjing.JPG', 'grooming', 'grooming', 9, 35000, '*Sisir hewan bisa untuk kucing, anjing, kelinci dan hewan lainnya *Untuk menghindari bulu yang kusut *Mudah digunakan dan mudah dibersihkan *Menjaga penampilan hewan peliharaan anda *Material: plastic *Warna: Biru, Hijau, Pink, Orange, Kuning'),
(39, 'Sarung Tangan Sikat Brush Bulu Mandi Grooming Hewan Anjing Kucing', 'sarungtangan.JPG', 'makanan', 'kalung', 10, 55000, 'Sarung Tangan Sisir/Brush ini dapat dipakai sebelum memandikan hewan, yaitu untuk mengeliminasi bulu-bulu rontoknya (kering) dan juga untuk memandikan hewan kesayangan anda (basah) sehingga bulunya bersih Bahan brush ini terbuat dari karet silikon yg lembut dan fleksibel, bahan sarungnya dari nylon'),
(40, 'Bio groom biogroom pro white smooth coat grooming powder bedak kucing', 'biogroom.JPG', 'grooming', 'grooming', 10, 124000, 'SMOOTH COAT GROOMING POWDER.  Pro-White Grooming Powder is a unique grooming powder that has been specially formulated for fineness and softness, as well as for high brightness and high absorbability.  Cleans, texturizes and deodorizes Brushes out easily - leaving the coat well groomed Will not dull the coat, but leaves it well groomed Absorbs excess moisture and oil Essential for soiled urine wet coats Effective on all breeds and colors Contains no abrasives or harmful additives Non-toxic, non-'),
(41, 'Mainan Bola Kerincing Anjing Kucing Small/ Bola Pelangi/ Mainan Hewan', 'maianan.JPG', 'aksesoris', 'mainan', 18, 35000, 'Mainan bola warna-warni yang menarik ini sangat cocok untuk diberikan kepada anjing dan kucing esayangan Anda.  - Ukuran (diameter): 6 cm (approx) cocok untuk anjing kecil seperti pom, poodle dll  - Dengan bahan karet berkualitas tinggi dan aman untuk digigit.  - Didalamnya ada bunyi krincing (dering bel), membuat anjing & kucing kesayangan Anda betah memainkannya.'),
(42, 'Mainan kucing senter anjing pointer hewan cat laser led mouse dog toy', 'maianan led.JPG', 'aksesoris', 'mainan', 20, 30000, 'Material: Aluminum tube + plastic Colour : Silver, Pink, Blue Animation pattern:mouse Size: 78x13mm (length * diameter) Powered by: 3 x button cell batteries(included)'),
(45, 'Mainan gigitan Anjing dan kucing Tali Dog Cat Toy Rope', 'mainan_tali.jpeg', 'aksesoris', 'mainan', 17, 25000, 'Mainan anjing kucing high quality dog toy rope dibuat dari kualitas bahan terbaik beraneka macam warna menarik. membuat anjing anda tidak bosan dan tidak gigit sembarangan. Panjang +-25cm'),
(46, 'Mainan anjing boneka panjang kucing gigitan hewan squeaky dog toy cat', 'maianan boneka.JPG', 'aksesoris', 'mainan', 10, 35000, 'Bahannya halus, dipencet bunyi bunyi. Hewan pasti demen banget gigitin ini.   Material: plush Size: length 25cm diameter 4cm'),
(47, 'Mainan Kucing mainan hewan peliharaan perawatan hewan', 'mainan2.JPG', 'aksesoris', 'mainan', 19, 15000, 'Mainan kucing dengan tongkat bulu dan lonceng agar kucing Anda tertarik. Model Panjang dan warna warni.'),
(51, 'kandang kucing musang kelinci anjing Pet Carrier Cargo sweet small', 'tas3.JPG', 'aksesoris', 'kandang dan tas', 10, 150000, '- ukuran 47 x 32 x 28 cm - Terdapat 2 pintu - Mempermudah untuk membawa hewan kesayangan saat membawa mereka ke luar rumah atau berpergian - Terbuat dari bahan plastik dan logam  - Terdapat pengait dan gagang di bagian atas cargo memudahkan membawa cargo saat harus berpergian - Penutup atas kandang berfungsi untuk memegang atau melihat kucing dari atas yang bisa di buka atau di tutup tanpa harus membuka penutup depan cargo - Penutup depan cargo terbuat dari besi yang kokoh dan kuat berbentuk jar'),
(54, 'Tempat Tidur Anjing Rumah Hewan Kandang Kucing Ranjang alas Dog Bed', 'tempattidur1.JPG', 'aksesoris', 'tempat tidur', 20, 175000, 'Color: Leopard & Stroberry Material: Cotton velveteen material within and outside printing short plush material, backing polyester, plastic cloth. Size L: bottom length 36cm width 36cm, hight 38cm entree 21cm entree width 19cm fit for the pet / dog / cat= 5kg'),
(57, 'Tempat Makan Anjing Portable/ Tempat Makan Hewan', 'tempatmakan.JPG', 'aksesoris', 'perlengkapan makanan', 19, 36000, 'Terbuat dari plastik berkualitas tinggi, bahannya tebal dan bagus sehingga tidak gampang sobek atau rusak. Praktis untuk dibawa kemana-mana, tinggal gantung saja di tas.  Wadah makan ini dirancang untuk dibawa saat bepergian sehingga tidak memakan banyak tempat di tas Anda. Buat Anda yang sering berpergian bersama hewan kesayangan Anda, tempat makan dan minum portable ini merupakan barang yang penting untuk dimiliki.  - Ukuran: diameter 12 cm, kedalaman 6,5 cm. - Tebal saat tempat makan/minum in'),
(59, 'Tempat Makan Minum Pet ANjing Kucing Hewan peliharaan Praktis', 'tempatmakan3.JPG', 'aksesoris', 'perlengkapan makanan', 26, 18000, 'Tempat Makan Dan Minum Untuk Pet Pilihan Warna : Biru, Merah, Pink Dan Hijau Ukuran 28,5cm x 17cm x 7cm Tidak Termasuk Botol Minum Tempat Botol Minum Bisa Dengan Aqua Atau Botol Minum Lainnya.'),
(62, 'Tempat Makan Burung Finch Koloni gantung Tempat Makan Burung Finch Koloni gantung', 'tempatmakan6.JPG', 'aksesoris', 'perlengkapan makanan', 10, 76000, 'Tempat Makan Finch Koloni   -Bahan Plastik -ukuran tinggi 23cm -Cocok untuk Emprot Jepang, Zebra Finch, Gould Amadine, Mozambiq Dan Macam2 burung kecil lainnya'),
(63, 'jajaja', 'brs.jpg', 'makanan', 'kalung', 1000, 1000, 'h1h1h1h1h'),
(64, 'umb', 'mercu logo.png', 'makanan', 'kalung', 150, 150000, 'mantul'),
(65, 'umb', 'mercu logo.png', 'makanan', 'kalung', 10000000, 14890000, 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar`, `keterangan`) VALUES
(35, 'Indo Pet Expo 2018', 'Indo-Pet-Expo-640x640_c.jpg', 'Indo Pet Expo is an annual exhibition devoted entirely to the well-being of pets and also introducing the latest trends and innovations of pet businesses and related professional services, as well as to bring together the interests of the pet hobbyist world, especially the providers of pet needs, including but not limited to pet food and other pet products. In addition to being a major promotional and business platform for all pet industry in Indonesia, Indo Pet Expo also offers a real solution ');

-- --------------------------------------------------------

--
-- Table structure for table `booking_layanan`
--

CREATE TABLE `booking_layanan` (
  `id_booking` int(10) NOT NULL,
  `id_layanan` int(10) NOT NULL,
  `nama_layanan` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jenis_hewan` varchar(20) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_layanan`
--

INSERT INTO `booking_layanan` (`id_booking`, `id_layanan`, `nama_layanan`, `nama`, `email`, `telepon`, `alamat`, `tgl_booking`, `jenis_hewan`, `catatan`) VALUES
(1, 1, 'Mandi Sehat / Grooming', 'Eva', 'evayusriana10@gmail.com', '0856892216', 'jl h. merin jakbar', '2019-06-05', 'Kucing', '-'),
(2, 2, 'Mandi untuk basmi kutu / Capla', 'bagas', 'bagas@gmail.com', '081516602443', 'No. Kebon Jeruk, Jl. Raya Pos Pengumben Blok A No.', '2019-06-08', 'Anjing', '-'),
(3, 3, 'Cukur Pendek / Gundul', 'taka', 'titis.widyastuti12@gmail.com', '085890085581', 'jl. bojong raya rt.08/04', '2019-06-13', 'Kucing', '-'),
(4, 2, 'Mandi untuk basmi kutu / Capla', 'ashari', 'ashari68@gmail.com', '081513651265', 'jl.H.merin, No. 28 Rt 01/ 04 meruya selatan jakart', '2019-06-13', 'Kucing', 'datang jam 2 siang ya abis saya soljum');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `email`, `telepon`, `alamat`, `password`) VALUES
(1, 'Eva ', 'evayusriana10@gmail.com', '0856892216', 'jl h. merin jakbar', '12345'),
(2, 'ayu nandita ashari', 'ayunanditaashari14@gmail.com', '0856892216', 'jl h. merin jakbar 11650', '54321'),
(4, 'anna', 'anna@gmail.com', '0877563425', 'jl h merin meruya selatan jakbar', '123456'),
(5, 'Bagas', 'bagas@gmail.com', '081516602443', 'No. Kebon Jeruk, Jl. Raya Pos Pengumben Blok A No.', '12345'),
(8, 'galang', 'galang@yopmail.com', '085326657721', 'jl mawar,tanggerang ', 'admin'),
(10, 'rinda lindiani', 'rindalindiani@gmail.com', '085344546243', 'jl meruya ilir, Jakarta Barat', 'awe123'),
(11, 'ifan prihandi', 'ifan@gmail.com', '08564333555', 'jl kutilang, Jakarta Selatan', '12345'),
(12, 'selly', 'evayusriana10@gmail.com', '087754553345', 'Bandar, Batang Jateng', '12345'),
(13, 'rahma', 'evayusriana10@gmail.com', '085674455333', 'jl kebon jeruk no 23A Jakbar', '11650'),
(14, 'santi', 'evayusriana10@gmail.com', '087735128734', 'jl pos pengumben', '54321'),
(15, 'ratih', 'evayusriana10@gmail.com', '0856239562', 'jl pesanggrahan ', 'ae123'),
(16, 'taka hiro', 'titis.widyastuti12@gmail.com', '085890085581', 'jl. bojong raya rt.08/04', 'taka12345*'),
(17, 'muhammad ashari', 'ashari68@gmail.com', '081513651265', 'jl.H.merin, No. 28 Rt 01/ 04 meruya selatan jakarta barat', '14september');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(10) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_barang`) VALUES
(1, 'makanan'),
(2, 'aksesoris'),
(3, 'grooming');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'kalung'),
(2, 'mainan'),
(3, 'kandang dan tas'),
(4, 'perlengkapan makanan'),
(5, 'tempat tidur'),
(6, 'makanan'),
(7, 'grooming');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `no_resi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `email`, `alamat`, `telepon`, `kodepos`, `catatan`, `tgl_pemesanan`, `tgl_pengiriman`, `no_resi`, `status`) VALUES
(164, 'ayu', 'ayunanditaashari14@gmail.com', 'jl h. merin jakbar 11650', '856892216', '54213', '', '2019-06-02', '2019-06-06', '088777668796888', 'dikirim'),
(165, 'ayu', 'ayunanditaashari14@gmail.com', 'jl h. merin jakbar 11650', '856892216', '54321', '', '2019-06-02', '2019-06-06', '445467896564355', 'Dikirim'),
(167, 'Eva', 'evayusriana10@gmail.com', 'jl h. merin jakbar', '856892216', '11650', '-', '2019-06-04', '0000-00-00', '', ''),
(168, 'Eva', 'evayusriana10@gmail.com', 'jl h. merin jakbar', '856892216', '11650', '', '2019-06-04', '0000-00-00', '', ''),
(169, 'Eva', 'evayusriana10@gmail.com', 'jl h. merin jakbar', '0856892216', '11650', '-', '2019-06-07', '0000-00-00', '', ''),
(170, 'Eva', 'evayusriana10@gmail.com', 'jl h. merin jakbar', '0856892216', '11650', '-', '2019-06-07', '0000-00-00', '', ''),
(171, 'bagas', 'bagas@gmail.com', 'No. Kebon Jeruk, Jl. Raya Pos Pengumben Blok A No.', '081516602443', '11650', '', '2019-06-08', '2019-06-13', '3245563435646', 'Dikirim'),
(172, 'ashari', 'ashari68@gmail.com', 'jl.H.merin, No. 28 Rt 01/ 04 meruya selatan jakart', '081513651265', '11650', 'dekat toko matrial atau bimba aiueo', '2019-06-13', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'Eva', 'evayusriana10@gmail.com', 'kritik', 'webnya sudah cukup bagus tapi barangnya masih sedikit'),
(2, 'ashari', 'ashari68@gmail.com', 'saran', 'saya saran kan karyawannya yang mandiin datang sesuai jadwal ya ');

-- --------------------------------------------------------

--
-- Table structure for table `petshop`
--

CREATE TABLE `petshop` (
  `id_layanan` int(10) NOT NULL,
  `nama_layanan` varchar(40) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petshop`
--

INSERT INTO `petshop` (`id_layanan`, `nama_layanan`, `gambar`, `keterangan`) VALUES
(1, 'Mandi Sehat / Grooming', 'grooming.png', 'Mandi Sehat / Grooming'),
(2, 'Mandi untuk basmi kutu / Capla', 'groming.jpg', 'Mandi untuk basmi kutu / Capla'),
(3, 'Cukur Pendek / Gundul', 'cukurr.jpg', 'Cukur Pendek / Gundul'),
(4, 'Layanan antar jemput pasien grooming', 'pet delivery.jpg', 'Layanan antar jemput pasien grooming');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id_order` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `id_pemesanan` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id_order`, `id`, `id_pemesanan`, `id_barang`, `jumlah`) VALUES
(133, 2, 164, 1, 1),
(134, 2, 165, 27, 2),
(135, 2, 165, 41, 2),
(136, 2, 165, 45, 3),
(139, 1, 167, 1, 1),
(140, 1, 167, 25, 1),
(141, 1, 168, 2, 1),
(142, 1, 169, 25, 1),
(143, 1, 170, 25, 1),
(144, 1, 170, 33, 1),
(145, 5, 171, 25, 1),
(146, 5, 171, 47, 1),
(147, 5, 171, 22, 1),
(148, 17, 172, 25, 10),
(149, 17, 172, 34, 3),
(150, 8, 0, 37, 1),
(151, 8, 0, 25, 1),
(152, 8, 0, 1, 1),
(153, 8, 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `booking_layanan`
--
ALTER TABLE `booking_layanan`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `booking_layanan`
--
ALTER TABLE `booking_layanan`
  MODIFY `id_booking` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petshop`
--
ALTER TABLE `petshop`
  MODIFY `id_layanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

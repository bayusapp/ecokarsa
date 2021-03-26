-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 22.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecokarsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `judul_banner` varchar(255) DEFAULT NULL,
  `deskripsi_banner` longtext DEFAULT NULL,
  `foto_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `judul_banner`, `deskripsi_banner`, `foto_banner`) VALUES
(1, 'Panel Surya Ramah Lingkungan', 'Panel surya adalah sebuah sistem yang dapat digunakan untuk mengubah energi cahaya matahari menjadi energi listrik dengan menggunakan prinsip yang disebut efek photovoltaic. Energi listrik yang dihasilkan akan disimpan ke dalam sebuah baterai, kemudian digunakan untuk mengoperasikan perangkat elektronik sesuai kebutuhan listriknya.', 'assets/img/banner/66-solar-power-power-station.jpg'),
(2, 'Tanaman Hidroponik', 'Hidroponik adalah suatu budidaya menanam dengan mamakai (memanfaatkan) air tanpa memakai tanah dan menekankan penumbuhan kebutuhan nutrisi untuk tanaman. Kebutuhan air pada tanaman hidroponik lebih sedikit dibandingkan kebutuhan air pada budidaya dengan memakai media tanah. Hidroponik memakai air yang lebih efisien, jadi sangat cocok diterapkan pada daerah yang mempunyai pasokan air yang terbatas.', 'assets/img/banner/62-hydroponics-system-planting-vegetables-herbs-without-using-soil-health.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_perusahaan`
--

CREATE TABLE `tb_data_perusahaan` (
  `id_data` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `tentang_perusahaan` longtext DEFAULT NULL,
  `website_perusahaan` varchar(255) DEFAULT NULL,
  `email_perusahaan` varchar(255) DEFAULT NULL,
  `email_alternatif` varchar(255) DEFAULT NULL,
  `alamat_perusahaan` longtext DEFAULT NULL,
  `no_telp` char(15) DEFAULT NULL,
  `no_hp` char(15) DEFAULT NULL,
  `logo_perusahaan` varchar(255) DEFAULT NULL,
  `icon_website` varchar(255) DEFAULT NULL,
  `foto_tentang` varchar(255) DEFAULT NULL,
  `facebook_perusahaan` varchar(255) DEFAULT NULL,
  `twitter_perusahaan` varchar(255) DEFAULT NULL,
  `instagram_perusahaan` varchar(255) DEFAULT NULL,
  `whatsapp_perusahaan` varchar(255) DEFAULT NULL,
  `maps_perusahaan` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_perusahaan`
--

INSERT INTO `tb_data_perusahaan` (`id_data`, `nama_perusahaan`, `tentang_perusahaan`, `website_perusahaan`, `email_perusahaan`, `email_alternatif`, `alamat_perusahaan`, `no_telp`, `no_hp`, `logo_perusahaan`, `icon_website`, `foto_tentang`, `facebook_perusahaan`, `twitter_perusahaan`, `instagram_perusahaan`, `whatsapp_perusahaan`, `maps_perusahaan`) VALUES
(1, 'Ecokarsa', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'https://ecokarsa.com', 'admin@bayusapp.com', 'bsapp.1207@gmail.com', 'Jl. Telekomunikasi No.1, Jl. Terusan Buah Batu - Bojongsoang, Sukapura, Dayeuhkolot, Bandung', '022-908765', '08989817181', 'assets/img/client-3.png', 'assets/img/58483058cef1014c0b5e4a95.png', 'assets/img/25-4669613.jpg', 'https://www.facebook.com/bayu.sapp', 'https://twitter.com/bayu.sapp', 'https://www.instagram.com/bayu.sapp/', '628989817181', '&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.0383365727309!2d107.63223763793118!3d-6.973097101217011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adee34340b:0x9e4b78b59e959180!2sUnit Laboratorium Fakultas Ilmu Terapan, Universitas Telkom!5e0!3m2!1sid!2sid!4v1600338266929!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"&gt;&lt;/iframe&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL,
  `jawaban` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_faq`
--

INSERT INTO `tb_faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'Non consectetur a erat nam at lectus urna duis?', 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `harga_paket` bigint(20) DEFAULT NULL,
  `terlaris` int(11) DEFAULT 0,
  `id_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `deskripsi`, `harga_paket`, `terlaris`, `id_produk`) VALUES
(1, 'Paket A', 'Paket ini berisi xxx panel surya dan termasuk installasi. (Contoh penulisan)', 1000000, 0, 1),
(2, 'Paket B', 'Paket ini berisi xxx panel surya dan termasuk installasi. (Contoh penulisan)', 1999000, 1, 1),
(3, 'Minimalis', 'Paket ini berisi xxx dan termasuk installasi. (Contoh penulisan)', 399000, 0, 4),
(4, 'Smart Home', 'Paket ini berisi xxx dan termasuk installasi. (Contoh penulisan)', 599000, 0, 5),
(5, 'Family', 'Paket ini berisi xxx dan termasuk installasi. (Contoh penulisan)', 15000, 0, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` longtext DEFAULT NULL,
  `slug_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `foto_produk`, `deskripsi_produk`, `slug_produk`) VALUES
(1, 'Panel Surya', 'assets/img/produk/52-Panel-surya-di-Klaten.jpg', '<p><em><strong>Lorem Ipsum</strong></em> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'panel-surya'),
(4, 'Hidroponik', 'assets/img/produk/82-bisnis-sayur-hidroponik.jpeg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'hidroponik'),
(5, 'IoT', 'assets/img/produk/65-homealliot.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'iot'),
(6, 'Sedotan Bambu', 'assets/img/produk/20-1572009840476-sedotan-yogyakarta.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'sedotan-bambu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_testimoni` varchar(255) DEFAULT NULL,
  `asal_testimoni` varchar(255) DEFAULT NULL,
  `foto_testimoni` varchar(255) DEFAULT NULL,
  `deskripsi_testimoni` longtext DEFAULT NULL,
  `tanggal_testimoni` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id_testimoni`, `nama_testimoni`, `asal_testimoni`, `foto_testimoni`, `deskripsi_testimoni`, `tanggal_testimoni`, `user_id`) VALUES
(1, 'Supriyadi', 'Magelang, Indonesia', 'assets/img/testimoni/70-testimonials-5.jpg', 'Kualitas produk sangat bagus dan ramah lingkungan', '2020-09-18 17:05:41', 1),
(3, 'Magdalena', 'Roma, Italy', 'assets/img/testimoni/97-testimonials-6.jpg', 'I prodotti del pannello solare sono di alta qualità e rispettosi dell\'ambiente. Altamente raccomandato.', '2020-09-18 17:14:47', 1),
(4, 'Lulu', 'Purwokerto, Indonesia', 'assets/img/testimoni/76-testimonials-2.jpg', 'Kualitas produk sangat bagus dan sangat memuaskan', '2020-09-18 18:31:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tim`
--

CREATE TABLE `tb_tim` (
  `id_tim` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tim`
--

INSERT INTO `tb_tim` (`id_tim`, `nama`, `posisi`, `foto`) VALUES
(1, 'Gilang Titah Ramadhan', 'Chief Executive Officer', 'assets/img/tim/11-team-1.jpg'),
(2, 'Bayu Setya Ajie Perdana Putra', 'Web Developer, Back-end Developer, Database Administrator, System Analyst', 'assets/img/tim/77-team-3.jpg'),
(3, 'Lutfia Intan', 'Marketing', 'assets/img/tim/81-team-4.jpg'),
(4, 'Logo', '-', 'assets/img/tim/26-58483058cef1014c0b5e4a95.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(60) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_username`, `user_password`, `user_name`, `user_email`, `user_status`) VALUES
(1, 'bayusapp', '$2y$10$IzBsQpOFIHWwFPTyQmHEXuyv0Dw2EqP.KPHabmGLH7Y77TMe4NVqi', 'Bayu SAPP', 'admin@bayusapp.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `tb_data_perusahaan`
--
ALTER TABLE `tb_data_perusahaan`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indeks untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_data_perusahaan`
--
ALTER TABLE `tb_data_perusahaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

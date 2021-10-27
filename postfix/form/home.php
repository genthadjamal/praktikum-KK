<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sub.css">
  <meta  name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentha Djamal</title>
    <body>
    <header>
<div class="jumbotron">   	
<h1>GNTHDJMLSITE</h1>
<p>Selamat datang di website kami, tetap jaga kesehatan dan tetap #dirumahaja ^_^</p>
</div>
		<nav>
<ul>
	<li><a href="#home">Home</a></li>
	<li><a href="#about">About</a></li>
	<li><a href="#wisata">Wisata</a></li>
  <li><a href="#tiket">Tiket</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="login.php">Logout</a></li>
</ul>
		</nav>
</header>
	<main>
		<div id="content">
			<article id="home" class="card">
<h2 >Apa sih isi website ini ?</h2>
<p>Website ini berisi tentang informasi dan penjelasan wisata wisata yang berada di Kabupaten Kebumen, Provinsi Jawa Tengah. Dimana wisata wisata yang terdapat di Kebumen ini sangat lah beragam dan menarik untuk di kunjungi, oleh karena itu saya sebagai seseorang yang juga tinggal disini ingin memberi infromasi kepada kalian bahwasannya jika ingin berlibur dengan keluarga atau teman Anda bisa jadi referensi bagi kalian yang ingin liburan atau sekedar refreshing.</p>

<p>Wisata di Kebumen banyak sekali yang di kunjungi oleh orang orang luar kota dan juga di liput oleh salah satu stasiun televisi di Indonesia dikarenakan keindahan yang ada pada wisata alam nya menarik banyak orang.</p>
			</article>
			<article id="about" class="card">
<h2>Kebumen</h2>
<img src="kbm.jpg" alt="" width="30%">
<p>Kebumen adalah sebuah Kabupaten di Provinsi Jawa Tengah. Ibu kotanya adalah Kota Kebumen. Kabupaten ini berbatasan dengan Kabupaten Banjarnegara di utara, Kabupaten Wonosobo dan Kabupaten Purworejo di timur, Samudra Hindia di selatan, serta Kabupaten Cilacap dan Kabupaten Banyumas di sebelah barat.</p>
			</article>

			<article id="wisata" class="card">
<h2>Wisata Alam</h2>
<p>Kabupaten Kebumen merupakan daerah yang mempunyai banyak wisata alam yang sangat indah dan sangat direkomendasikan untuk kegiatan liburan dan refreshing bagi kalian yang sedang membaca ini. Di antara wisata alam yang ada di Kebumen saya akan menunjukkan tiga wisata yang paling indah di Kebumen, yaitu Pantai Menganti, Bukit Pentulu Indah Karangsambung dan Curug Silancur.</p>

	<section>
<h2>Pantai Menganti</h2>
<img src="menganti.jpg" class="featured-image" alt="pantai menganti">
<p>Pantai ini terletak di daerah Karangduwur, Kecamatan Ayah yang masih termasuk wilayah Kabupaten Kebumen, Jawa Tengah.Letaknya kira-kira 42 kilometer bila ditempuh dari Kota Kebumen. Sedangkan dari Kecamatan Gombong jaraknya sekitar 35 kilometer.</p>
	</section>
	<section>
<h2>Bukit Pentulu Indah Karangsambung</h2>
<img src="pi.jpg" class="featured-image" alt="pentulu indah">
<p>Bukit Pentulu Indah terletak di dukuh Dakah, masuk wilayah desa Karangsambung, kabupaten Kebumen. Karangsambung sudah sangat dikenal oleh berbagai kalangan dengan adanya LIPI. Terlebih bagi para ahli kebumian khususnya geologi, Karangsambung adalah referensi utama yang tidak dapat diabaikan. Bahkan pada tanggal 10 Nopember 2006 silam, Karangsambung telah ditetapkan sebagai Kawasan Cagar Alam Nasional oleh Menteri Energi dan Sumber Daya Mineral Republik Indonesia.</p>
	</section>
  <section>
    <h2>Curug Silancur</h2>
    <img src="curug.jpg" class="featured-image" alt="curug silancur">
    <p>Curug Silancur adalah air terjun dengan ketinggian 25 meter yang terletak di Cagar Alam Nasional Geologi Karangsambung. Air Terjun Silancur mempunyai daya tarik tersendiri, karena lingkungan masih betul-betul alami. Kesunyian juga masih sangat terasa, sebab belum banyak pelancong yang datang menikmati keindahan alamnya sehingga bisa dikatakan masih tersembunyi. Udara di sekitarnya sejuk dan sepanjang jalan menuju ke sana terdapat area perkebunan yang asri. Banyak dijumpai terasering sawah warga yang sangat cantik serta pohon pinus yang rindang. Air Terjun Silancur terlihat membentuk sebuah garis putih tinggi menjulang. Bersamaan, terdengar suara gemericik air. Tidak seperti air terjun pada umumnya yang memiliki penampungan air di bawahnya, aliran Air Terjun Silancur itu jatuh menghantam batuan besar hingga menghasilkan percikan air yang segar. Jika terik matahari dalam keadaan sempurna, percikan air yang terbawa angin terlihat berwarna-warni seperti pelangi. Air Terjun Silancur berada di lereng perbukitan di ketinggian 220 mdpl.</p>
  </section>
			</article>
      <article id="tiket" class="card">
        <h2>Daftar Harga Tiket Masuk</h2>
        <form name="fform">
        <table>
          <tr>
            <td>Nama Wisata</td>
            <td>Harga Tiket Masuk</td>
          </tr>

          <tr>
            <td>
              <select name="iwisata">
              <option value="">Pilih Wisata Alam</option>
              <option value="Pantai Menganti">Pantai Menganti</option>  
              <option value="Bukit Pentulu Indah Karangsambung">Bukit Pentulu Indah Karangsambung</option>
              <option value="Curug Silancur">Curug Silancur</option>
              </select>
            </td>
            <td><input type="text" name="oharga"></td>
          </tr>

          <tr>
            <td colspan="2" align="center"><input type="button" name="cari" value="Cari" onclick="cariwisata()"></td>
          </tr>
        </table>
        </form>
      </article>

      <article id="contact" class="card">
        <h2>Sosial Media</h2>
        <a href="https://www.instagram.com/gnthadjmal_"><img src="ig.png" width="10%"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://web.facebook.com/profile.php?id=100004993770762"><img src="fb.png" width="10%"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.gmail.com"><img src="gmail.png" width="11%"></a>
      </article>
	</div>
	<aside>
		<article class="profile card">
			<header>
   <h2>Data Diri</h2>
      <figure>
       <img src="avatar.png" width="30%">
      </figure>
   			</header>
   			<section>
		 <table>
      <tr>
         <th>Nama</th>
         <td>Gentha Muhamad Djamal</td>
      </tr>
      <tr>
         <th>TTL</th>
         <td>Jakarta, 23 Mei 2001</td>
      </tr>
      <tr>
         <th>Asal</th>
         <td>Kebumen</td>
      </tr>
      <tr>
         <th>Status</th>
         <td>Mahasiswa</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>genthadjamal@gmail.com</td>
      </tr>
  </table>
   			</section>
   	</article>
</aside>
   </main>
    <footer>
     <p>Gentha Muhamad Djamal &#169; 2020</p>
	</footer>
  <script src="harga.js"></script>
       </body>
</head>
</html>
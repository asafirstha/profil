<?php
$Nama = "Ananda Asa Firstha Affandi";
$TTL = "Kediri, 02 Juni 2003";
$Alamat = "Jl. Ahmad Yani No. 29, Pare";
$NPM = "21081010155";
$Email = "asafirstha05@gmail.com";
$No_Telepon= "081390930261";
$Riwayat_Pendidikan1= "SMPN 2 Pare";
$Riwayat_Pendidikan2= "SMAN 1 Pare";
$Program_Studi= "Informatika";
$Fakultas= "Ilmu Komputer";

#menghitung umur
$tgl_lahir="2003-06-02";
$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y; //untuk menghitung selisih
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Biografi</title>
	<style>
		body {
			background-color: #ebdfd3;
			color: #8b0b54;
			transition: background-color 1s ease-in-out;
		}

		.grey {
			background-color: #988873;
		}

		.black {
			background-color: #2f2a15;
		}

		.mustard {
			background-color: #e09e19;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #dddddd;
		}
	</style>
    <link rel="stylesheet" href="bioprofil.css"></link>
</head>
<div class="table">
<body onscroll="scrollFunction()">
<?php
    ?>
    <h1 class="selamat">Hai, Selamat Datang!!</h1>    
    <p class="nama">- <?php echo $Nama ?> -</p> 
    <tr>
        <table style="width: 700px;">
            <tr> 
    <br><br>
    <p>
        <br>
    </p>
            <img src="foto/WhatsApp Image 2023-02-28 at 18.06.03.jpeg" alt="Foto Profil" class="foto" height="500px" width=350px">
    <div class="container">
        <p style="font-size: 30px;">Haloo, Perkenalkan aku <?php echo $Nama ?>. Saat ini aku berumur <?php echo $umur ?> dan sedang menempuh pendidikan di UPN "Veteran" Jawa Timur,
                        aku mengambil program studi <?php echo $Program_Studi ?> </p>
        <h1 style="font-size: 45px;">SOSIAL MEDIA</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td>Ananda Asa Firstha Affandi</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>asafirstha</td>
            </tr>
            <tr>
                <th>Line</th>
                <td>asafirstha05</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>asafirstha05@gmail.com.com</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>081390930261</td>
            </tr>
        </table>
        </div>
        <tr style="text-align: center;">
            <td>
            <h1 style="font-size: 45px;">PROFILE</h1>
                <table>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $Nama ?> </td>
                    </tr>
                    <tr>
                        <th>TTL</th>
                        <td><?php echo $TTL ?> </td>
                    </tr>
                    <tr>
                        <th>Umur</th>
                        <td><?php echo $umur ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $Alamat ?> </td>
                    </tr>
                    <tr>
                        <th>NPM</th>
                        <td><?php echo $NPM ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $Email ?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td><?php echo $No_Telepon ?></td>
                    </tr>
                    <tr>
                        <th>Riwayat Pendidikan</th>
                        <td><li><?php echo $Riwayat_Pendidikan1 ?></li>
                        <li><?php echo $Riwayat_Pendidikan2 ?></li></td>
                    </tr>
                </table>
                </div>
            </td>
            <td>
                <h1 style="font-size: 45px;">PENGALAMAN</h1>
            </td>
            <table>
                <tr>
                    <th>Loka Karya 2022</th>
                    <td>Divisi Acara</td>
                    <td><li>Membuat rundown untuk keberlangsungan acara selama 3 hari</li>
                    <li>Menjadi MC saat acara berlangsung</li>
               </td>
            </tr>
                <tr>
                    <th>Diklat calon anggota UKM Penalaran dan Kreatifitas 2022</th>
                    <td>Divisi Senior Pendamping</td>
                    <td>
                        <li>Membantu dan bertanggung jawab kepada calon anggota UKM selama acara berlangsung</li>
                        <li>Mengarahkan peserta selama berlangsungnya diklat</li>
                    </td>
                </tr>
                <tr>
                    <th>Pemira Informatika 2023</th>
                    <td>Divisi Acara</td>
                    <td><li>Membuat rundown selama untuk keberlangsungan acara </li>
                    <li>Menjadi time keeper agar waktu tetap sesuai rundown</li></td>
                
                </tr>
            </table>
        </tr>
    </table>
    </div>
</body>
<script>
	function scrollFunction() {
		var scrollPosition = window.pageYOffset;
		var body = document.querySelector("body");
		if (scrollPosition < 200) {
			body.classList.remove("grey", "black", "coffee");
		} else if (scrollPosition >= 200 && scrollPosition < 400) {
			body.classList.add("grey");
			body.classList.remove("black", "mustard");
		} else {
			body.classList.add("mustard");
			body.classList.remove("grey", "black");
		}
	}
</script>
</html>
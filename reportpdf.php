<?php
include ("koneksi2.php");
require_once ("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"select * from biodata_siswa");
$html = '<center><h3>Biodata Peserta Didik Baru</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Akta</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Jalan</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Desa</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Transportasi</th>
 <th>KKS</th>
 <th>Anak Ke-</th>
 <th>Penerima KPS</th>
 <th>No KPS</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tmplahir']."</td>
 <td>".$row['tgllahir']."</td>
 <td>".$row['akta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['kebkhusus']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['desa']."</td>
 <td>".$row['kec']."</td>
 <td>".$row['pos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['tmptinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['kks']."</td>
 <td>".$row['anakke']."</td>
 <td>".$row['penerimakps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('biodata_siswa.pdf');
?>
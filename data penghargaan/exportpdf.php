  <?php
    include "../htmlpdf/fpdf.php";
    include "../_config/config.php";


    $pdf = new FPDF('P','mm','A4');//P atau L = orientasi kertas, mm = ukuran, A4 = jenis kertas
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',10);//Arial = jenis huruf, B = format huruf, 10 = ukuran
    //$pdf->Cell(40,10,'',1);//40 = panjang, 10 = tinggi, 1 = tingkat ketebalan garis
    $pdf->Cell(180,10,'Data Penghargaan',0,0,'C'); 
    $pdf->Ln(10);//Ln = pindah baris
    $pdf->Cell(10,10,'NO','1');
    $pdf->Cell(40,10,'Nama Pegawai','1');
    $pdf->Cell(40,10,'Nama Penghargaan','1');
    $pdf->Cell(40,10,'Tahun','1');
    $pdf->Cell(40,10,'Negara','1');
    
    //pindah baris
    $pdf->Ln(10);

    $no = 1;

    $query=mysqli_query($con, "SELECT * FROM t_penghargaan085 INNER JOIN t_pegawai085 ON t_penghargaan085.id_pegawai085 = t_pegawai085.id_pegawai085 ORDER BY id_penghargaan085 DESC") or die (mysql_error());

    while($data = mysqlI_fetch_array($query)){

      $pdf->Cell(10,10, $no, 1);
      $pdf->Cell(40,10, $data["nama_pegawai085"],1);
      $pdf->Cell(40,10, $data["nama_penghargaan085"],1);
      $pdf->Cell(40,10, $data["tahun085"],1);
      $pdf->Cell(40,10, $data["negara085"],1);

      $pdf->Ln(10);
      $no++;

    }




    //cetak
    $pdf->Output();

                ?>

  
<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{							/*$image1 = "asset/asset_index/images/logo_atas.png";
								$image2 = $foto['foto_pegawai'];
                $this->setFont('Arial','B',10);
								$this->Cell( 40, 40, $this->Image($image1, $this->GetX(), $this->GetY(), 20.28), 0, 0, 'L', false );
								$this->Cell( 40, 40, $this->Image($image2, $this->GetX(), $this->GetY(), 20.28), 0, 0, 'R', false );
								// $this->Image($image1,10,6,30);
                $this->setFillColor(255,255,255);
								// Move to the right
    						$this->Cell(40);
								$this->cell(30,6,"YAYASAN ISLAM ASY-SYUKRIYYAH TANGERANG",0,1,'C',1);
    						$this->Cell(80);
								$this->cell(30,6,"DEPARTEMEN PENDUKUNG (SUPPORT)",0,1,'C',1);
    						$this->Cell(80);
								$this->cell(30,6,"DIVISI ADMINISTRASI & SDM",0,1,'C',1);
*/
                /*$this->Image(base_url().'assets/dist/img/user7-128x128.jpg', 10, 25,'20','20','jpeg');*/

	}

	function Content($data)
	{
									$image1 = "asset/asset_index/images/logo_atas.png";
									$image2 = $data['b']['foto_pegawai'];
	                $this->setFont('Arial','B',10);
									$this->Cell( 40, 40, $this->Image($image1, $this->GetX(), $this->GetY(), 20.28), 0, 0, 'L', false );
									$this->Cell(130);
									$this->Cell( 40, 40, $this->Image($image2, $this->GetX(), $this->GetY(), 20.28), 0, 0, 'R', false );
									$this->ln(5);
									// $this->Image($image1,10,6,30);
	                $this->setFillColor(255,255,255);
									// Move to the right
	    						$this->Cell(80);
									$this->cell(30,6,"YAYASAN ISLAM ASY-SYUKRIYYAH TANGERANG",0,1,'C',1);
	    						$this->Cell(80);
									$this->cell(30,6,"DEPARTEMEN PENDUKUNG (SUPPORT)",0,1,'C',1);
	    						$this->Cell(80);
									$this->cell(30,6,"DIVISI ADMINISTRASI & SDM",0,1,'C',1);
            $ya = 46;
            $rw = 6;

                foreach ($data['a'] as $rows) {
										if($rows->jenis_kelamin==1) $jk = "Laki-laki"; else $jk = "Perempuan";
										if($rows->status_kepegawaian == 1)$sk = "Pegawai Tetap";else if($rows->status_kepegawaian == 2)$sk =  "Pegawai Honorer";else if($rows->status_kepegawaian == 3)$sk =  "Pegawai Kontrak";else if($rows->status_kepegawaian == 4)$sk = "Calon Pegawai Tetap";else if($rows->status_kepegawaian == 5) $sk = "DPK / GBS";
									if($rows->unit_kerja == 0)
			                          $uk = "Tidak Ada";
			                        else if($rows->unit_kerja == 1)
			                          $uk = "Dept. Support";
			                        else if($rows->unit_kerja == 2)
			                          $uk = "LPIA";
			                        else if($rows->unit_kerja == 3)
			                          $uk = "LDSM";
			                        else if($rows->unit_kerja == 4)
			                          $uk = "LPP";
			                        else if($rows->unit_kerja == 5)
			                          $uk = "LEKU";
			                        else if($rows->unit_kerja == 6)
			                          $uk = "TK Islam";
			                        else if($rows->unit_kerja == 7)
			                          $uk = "SDIT";
			                        else if($rows->unit_kerja == 8)
			                          $uk = "MI Plus";
			                        else if($rows->unit_kerja == 9)
			                          $uk = "MTS Plus";
			                        else if($rows->unit_kerja == 10)
			                          $uk = "SMPIT";
			                        else if($rows->unit_kerja == 11)
			                          $uk = "SMAIT";
			                        else if($rows->unit_kerja == 12)
			                          $uk = "STAI";
			                        else if($rows->unit_kerja == 13)
			          								$uk = "Lainnya";
												if($rows->fungsi == 1)$fn = "Guru / Tenaga Pendidik";else if($rows->fungsi == 2) $fn = "Non Guru / Non Tenaga Pendidik";
												if($rows->rt_ktp <= 9){

														$rt_ktp = '00'.$rows->rt_ktp;

												}elseif ($rows->rt_ktp <=99) {
														$rt_ktp = '0'.$rows->rt_ktp;
												}elseif ($rows->rt_ktp>99) {

													$rt_ktp = $rows->rt_ktp;

												}
                        $this->setFont('Arial','',10);
                        $this->Ln(20);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);
                        $this->cell(36,10,'Nama Lengkap ',1,0,'L',0);
												$this->cell(72,10,$rows->nama_lengkap,1,1,'L',1);
                        $this->cell(36,10,'Gelar di depan nama ',1,0,'L',1);
												$this->cell(26,10,$rows->gelar_depan,1,0,'L',1);
                        $this->cell(46,10,'Gelar di belakang nama ',1,0,'L',1);
												$this->cell(46,10,$rows->gelar_belakang,1,1,'L',1);
                        $this->cell(36,10,'Jenis Kelamin ',1,0,'L',1);
												$this->cell(36,10,$jk,1,1,'L',1);
                        $this->cell(36,10,'Tempat Lahir ',1,0,'L',1);
												$this->cell(36,10,$rows->tempat_lahir,1,1,'L',1);
												$this->cell(36,10,'Tanggal Lahir',1,0,'L',1);
												$this->cell(36,10,tgl_indo($rows->tanggal_lahir),1,1,'L',1);
												$this->cell(36,10,'Agama',1,0,'L',1);
												$this->cell(36,10,$rows->agama,1,1,'L',1);
												$this->cell(36,10,'Alamat KTP',1,0,'L',1);
												$this->cell(146,10,$rows->alamat_ktp,1,1,'L',1);
												$this->cell(20);
												$this->cell(16,10,'RT',1,0,'L',1);
												$this->cell(16,10,$rows->rt_ktp,1,0,'L',1);
												$this->cell(16,10,'RW',1,0,'L',1);
												$this->cell(16,10,$rows->rw_ktp,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kelurahan',1,0,'L',1);
												$this->cell(36,10,$rows->kelurahan_ktp,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kecamatan',1,0,'L',1);
												$this->cell(36,10,$rows->kecamatan_ktp,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kota',1,0,'L',1);
												$this->cell(36,10,$rows->kota_ktp,1,1,'L',1);
												$this->cell(36,10,'Alamat Tinggal',1,0,'L',1);
												$this->cell(146,10,$rows->alamat_tinggal,1,1,'L',1);
												$this->cell(20);
												$this->cell(16,10,'RT',1,0,'L',1);
												$this->cell(16,10,$rows->rt_tinggal,1,0,'L',1);
												$this->cell(16,10,'RW',1,0,'L',1);
												$this->cell(16,10,$rows->rw_tinggal,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kelurahan',1,0,'L',1);
												$this->cell(36,10,$rows->kelurahan_tinggal,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kecamatan',1,0,'L',1);
												$this->cell(36,10,$rows->kecamatan_tinggal,1,1,'L',1);
												$this->cell(20);
												$this->cell(28,10,'Kota',1,0,'L',1);
												$this->cell(36,10,$rows->kota_tinggal,1,1,'L',1);
												$this->cell(36,10,'Nomor Telepon ',1,0,'L',1);
												$this->cell(36,10,'Rumah',1,0,'L',1);
												$this->cell(36,10,$rows->no_telepon,1,1,'L',1);
												$this->cell(36);
												$this->cell(36,10,'Handphone',1,0,'L',1);
												$this->cell(36,10,$rows->handphone,1,1,'L',1);


                        // width,height,data,border 1= border 0 = no border,enter 0 = no enter 1 = enter 2 = enter nyesuain, paragraph



                        $ya = $ya + $rw;
                }

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),210,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
                $this->Cell(0,10,'copyright Asy-syukriyyah ' . date('Y'),0,0,'L');
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output();

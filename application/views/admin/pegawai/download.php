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
									if($data['b']['foto_pegawai']!="")
										$image2 = $data['b']['foto_pegawai'];
									else {
										$image2 = "asset/asset_index/images/user1.png";
									}
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
																if( $rows->pendidikan_terakhir == 0)
					                        $pk = "Tidak Sekolah";
					                      else if( $rows->pendidikan_terakhir == 1)
					                        $pk = "SD";
					                      else if( $rows->pendidikan_terakhir == 2)
					                        $pk = "SMP";
					                      else if( $rows->pendidikan_terakhir == 3)
					                        $pk = "SMA";
					                      else if( $rows->pendidikan_terakhir == 4)
					                        $pk = "D1";
					                      else if( $rows->pendidikan_terakhir == 5)
					                        $pk = "D2";
					                      else if( $rows->pendidikan_terakhir == 6)
					                        $pk = "D3";
					                      else if( $rows->pendidikan_terakhir == 7)
					                        $pk = "D4";
					                      else if( $rows->pendidikan_terakhir == 8)
					                        $pk = "S1";
					                      else if( $rows->pendidikan_terakhir == 9)
					                        $pk = "S2";
					                      else if( $rows->pendidikan_terakhir == 10)
					                        $pk = "S3";
					                      else if( $rows->pendidikan_terakhir == 11)
					                        $pk = "Paket B, C";
																	if( $rows->pendidikan_ditempuh == 0)
																	  $pdt = "Tidak Sekolah";
																	else if( $rows->pendidikan_ditempuh == 1)
																	  $pdt = "SD";
																	else if( $rows->pendidikan_ditempuh == 2)
																	  $pdt = "SMP";
																	else if( $rows->pendidikan_ditempuh == 3)
																	  $pdt = "SMA";
																	else if( $rows->pendidikan_ditempuh == 4)
																	  $pdt = "D1";
																	else if( $rows->pendidikan_ditempuh == 5)
																	  $pdt = "D2";
																	else if( $rows->pendidikan_ditempuh == 6)
																	  $pdt = "D3";
																	else if( $rows->pendidikan_ditempuh == 7)
																	  $pdt = "D4";
																	else if( $rows->pendidikan_ditempuh == 8)
																	  $pdt = "S1";
																	else if( $rows->pendidikan_ditempuh == 9)
																	  $pdt = "S2";
																	else if( $rows->pendidikan_ditempuh == 10)
																	  $pdt = "S3";
																	else if( $rows->pendidikan_ditempuh == 11)
																	  $pdt = "Paket B, C";
												if($rows->fungsi == 1)$fn = "Guru / Tenaga Pendidik";else if($rows->fungsi == 2) $fn = "Non Guru / Non Tenaga Pendidik";
												if($rows->rt_ktp <= 9){

														$rt_ktp = '00'.$rows->rt_ktp;

												}elseif ($rows->rt_ktp <=99) {
														$rt_ktp = '0'.$rows->rt_ktp;
												}elseif ($rows->rt_ktp>99) {

													$rt_ktp = $rows->rt_ktp;

												}
												if($rows->tahun_masuk_pd != "0000-00-00"){
			          					$tmd = date('d M Y',strtotime($rows->tahun_masuk_pd));
			          				}
			          				else $tmd = "-";
												if($rows->pengangkatan_calon_tetap != "0000-00-00"){
			          					$pct = date('d M Y',strtotime($rows->pengangkatan_calon_tetap));
			          				}
			          				else $pct = "-";
												if($rows->pengangkatan_tetap != "0000-00-00"){
			          					$pta = date('d M Y',strtotime($rows->pengangkatan_tetap));
			          				}
			          				else $pta = "-";
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
												$this->cell(146,10,substr($rows->alamat_ktp,0,100),1,1,'L',1);
												$this->cell(36);
												$this->cell(146,10,substr($rows->alamat_ktp,100,150),1,1,'L',1);
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
												$this->cell(146,10,substr($rows->alamat_tinggal,0,80),1,1,'L',1);
												$this->cell(36);
												$this->cell(146,10,substr($rows->alamat_tinggal,80,150),1,1,'L',1);
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
												$this->ln(100);
												$this->cell(36,10,'Nama Lengkap ',1,0,'L',0);
												$this->cell(36,10,$rows->nama_lengkap,1,1,'L',1);
												$this->cell(36,10,'Pendidikan Terakhir ',1,0,'L',0);
												$this->cell(36,10,$pk,1,1,'L',1);
												$this->Ln(5);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Tingkat',1,0,'C',1);
                        $this->cell(60,6,'Nama Sekolah/PT',1,0,'C',1);
												$this->cell(40,6,'Tahun',1,0,'C',1);
                        $this->cell(40,6,'Program Jurusan',1,1,'C',1);
                        $this->setFillColor(255,255,255);
												$this->cell(40,6,$pk,1,0,'C',1);
												$this->cell(60,6,$rows->nama_pt,1,0,'C',1);
                        $this->cell(40,6,$tmd,1,0,'C',1);
                        $this->cell(40,6,$rows->jurusan_pd,1,1,'C',1);
												$this->ln(5);
												$this->cell(49,10,'Pendidikan Yang Di Tempuh ',1,0,'L',0);
												$this->cell(36,10,$pdt,1,1,'L',1);
												$this->ln(8);
												$this->setFont('Arial','',8);
												$this->cell(30,6,"Diutus oleh Asy-Syukriyyah",0,1,'L',1);
												$this->setFont('Arial','',10);
												$this->setFillColor(230,230,200);
												$this->cell(40,6,'Tahun',1,0,'C',1);
												$this->cell(60,6,'lamanya',1,0,'C',1);
												$this->cell(40,6,'Jenis',1,0,'C',1);
												$this->cell(40,6,'Diutus',1,1,'C',1);
												if($data['c']!=FALSE){
												foreach ($data['c'] as $rows) {
	                        $this->setFillColor(255,255,255);
													$this->cell(40,6,$rows->tahun,1,0,'C',1);
													$this->cell(60,6,$rows->lamanya,1,0,'C',1);
	                        $this->cell(40,6,$rows->jenis,1,0,'C',1);
	                        $this->cell(40,6,$rows->diutus,1,1,'C',1);
                        // width,height,data,border 1= border 0 = no border,enter 0 = no enter 1 = enter 2 = enter nyesuain, paragraph
												}
											}
											else{

											}

											$this->ln(50);
											$this->setFont('Arial','',8);
											$this->setFillColor(255,255,255);
											$this->cell(30,6,"Eksternal Asy-Syukriyyah atau diutus oleh Lembaga lain atau inisiatif sendiri",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(40,6,'Tahun',1,0,'C',1);
											$this->cell(60,6,'lamanya',1,0,'C',1);
											$this->cell(40,6,'Jenis',1,0,'C',1);
											$this->cell(40,6,'Diutus',1,1,'C',1);
											$this->ln(150);
											$this->setFont('Arial','',10);
											$this->setFillColor(255,255,255);
											$this->cell(46,10,'Unit Kerja Sekarang ',1,0,'L',0);
											$this->cell(36,10,$uk,1,1,'L',1);
											$this->cell(46,10,'Unit Kerja Sebelumnya ',1,0,'L',1);
											$this->cell(36,10,$rows->unit_kerja_sebelumnya,1,1,'L',1);
											$this->cell(46,10,'Mulai Bertugas ',1,0,'L',1);
											$this->cell(36,10,date(' Y',strtotime($rows->mulai_tugas)),1,1,'L',1);
											$this->cell(46,10,'Status Kepegawaian ',1,0,'L',1);
											$this->cell(36,10,$sk,1,1,'L',1);
											$this->setFont('Arial','',8);
											$this->ln(2);
											$this->cell(30,6,"Bagi Pegawai Tetap dan Calon Pegawai Tetap",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(255,255,255);
											$this->cell(77,10,'Pengangkatan Sebagai Calon Pegawai Tetap ',1,0,'L',1);
											$this->cell(46,10,$pct,1,1,'L',1);
											$this->cell(77,10,'Pengangkatan Sebagai Pegawai Tetap ',1,0,'L',1);
											$this->cell(46,10,$pta,1,1,'L',1);
											$this->ln(5);
											$this->cell(36,10,'Fungsi ',1,0,'L',1);
											$this->cell(56,10,$fn,1,1,'L',1);
											$this->cell(36,10,'Sertifikasi Pendidik ',1,0,'L',1);
											$this->cell(56,10,$rows->sertifikasi_pendidik,1,1,'L',1);
											$this->Ln(5);
											$this->setFont('Arial','',8);
											$this->cell(40,6,'Riwayat Jabatan di Asy-Syukriyyah',0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(40,6,'Tahun',1,0,'C',1);
											$this->cell(60,6,'Unit',1,0,'C',1);
											$this->cell(40,6,'Jabatan',1,1,'C',1);
											$this->setFillColor(255,255,255);
											$this->cell(40,6,date(' Y',strtotime($rows->mulai_tugas)),1,0,'C',1);
											$this->cell(60,6,$uk,1,0,'C',1);
											$this->cell(40,6,$rows->jabatan,1,1,'C',1);
											$this->Ln(5);
											$this->setFont('Arial','',8);
											$this->cell(40,6,' Riwayat Pekerjaan dan Jabatan Selain di Asy-Syukriyyah',0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(30,6,'Tahun',1,0,'C',1);
											$this->cell(60,6,'Nama Instansi/Lembaga',1,0,'C',1);
											$this->cell(30,6,'Jabatan',1,0,'C',1);
											$this->cell(60,6,'Alasan Berhenti/keluar',1,1,'C',1);
											$this->setFillColor(255,255,255);





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
$pdf->Output('','Data Pegawai Asy-syukriyyah '.date('YmdHis').'.pdf');

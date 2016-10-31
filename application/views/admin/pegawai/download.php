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
									$image1 = "asset/images/logo.png";
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
								/*$this->SetDrawColor(0, 0, 0);
								$this->Cell(190,2, "", 1, 1, 'C');*/
								$this->Line(10,40,200,40);
								$this->Line(10,40,200,40);
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
																	  $pdt = "Tidak Sekolah / Tidak Ada";
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
			          	$space_left = 50;
                        $this->Ln(20);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);
                        $this->cell($space_left,10,'Nama Lengkap',0,0,'L',0);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
						$this->cell(36,10,$rows->gelar_depan."".$rows->nama_lengkap."".$rows->gelar_belakang,0,1,'L',1);
                        /*$this->cell($space_left,10,'Gelar di depan nama',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
						$this->cell(26,10,$rows->gelar_depan,0,0,'L',1);
						$this->cell(20);
                        $this->cell($space_left,10,'Gelar di belakang nama : ',0,0,'L',1);
						$this->cell(46,10,$rows->gelar_belakang,0,1,'L',1);*/
                        $this->cell($space_left,10,'Jenis Kelamin',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$jk,0,1,'L',1);
                        $this->cell($space_left,10,'Tempat Lahir',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->tempat_lahir,0,1,'L',1);
                        $this->cell($space_left,10,'Tanggal Lahir',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,tgl_indo($rows->tanggal_lahir),0,1,'L',1);
                        $this->cell($space_left,10,'Agama',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,strtoupper(substr($rows->agama,0,1)).substr($rows->agama, 1,100),0,1,'L',1);
                        $this->cell($space_left,10,'Alamat Sesuai KTP',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(146,10,substr($rows->alamat_ktp,0,70),0,1,'L',1);
                        if(strlen($rows->alamat_ktp)>70){
                        $this->cell($space_left+12);
                        $this->cell(146,10,substr($rows->alamat_ktp,70,130),0,1,'L',1);
                    	}
                        $this->cell(62);
                        $this->cell(5,10,'RT',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(22,10,$rows->rt_ktp,0,0,'L',1);
                        $this->cell(5,10,'RW',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(16,10,$rows->rw_ktp,0,1,'L',1);
                        $this->cell(62);
                        $this->cell(28,10,'Kelurahan',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kelurahan_ktp,0,1,'L',1);
                        $this->cell(62);
                        $this->cell(28,10,'Kecamatan',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kecamatan_ktp,0,1,'L',1);
                        $this->cell(62);
                        $this->cell(28,10,'Kota',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kota_ktp,0,1,'L',1);
                        $this->cell($space_left+8,10,'Alamat Sesuai Tempat Tinggal',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(146,10,substr($rows->alamat_tinggal,0,70),0,1,'L',1);
                        if(strlen($rows->alamat_tinggal)>70){
                        $this->cell($space_left+12);
                        $this->cell(146,10,substr($rows->alamat_tinggal,70,130),0,1,'L',1);
                    	}
                    	$this->cell($space_left+12);
                    	$this->cell(5,10,'RT',0,0,'L',1);
                    	$this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(22,10,$rows->rt_tinggal,0,0,'L',1);
                        $this->cell(5,10,'RW',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(16,10,$rows->rw_tinggal,0,1,'L',1);
                        $this->cell($space_left+12);
                        $this->cell(28,10,'Kelurahan',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kelurahan_tinggal,0,1,'L',1);
                        $this->cell($space_left+12);
                        $this->cell(28,10,'Kecamatan',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kecamatan_tinggal,0,1,'L',1);
                        $this->cell($space_left+12);
                        $this->cell(28,10,'Kota',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->kota_tinggal,0,1,'L',1);
                        $this->cell($space_left,10,'Nomor Telepon',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(28,10,'Rumah',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->no_telepon,0,1,'L',1);
                        $this->cell($space_left+12);
                        $this->cell(28,10,'Handphone',0,0,'L',1);
                        $this->cell(2);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->handphone,0,1,'L',1);
                       /* $this->cell($space_left,10,'Email',0,0,'L',1);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$rows->email,0,1,'L',1);*/
                        $this->ln(100);
                        $this->cell($space_left,10,'Pendidikan Terakhir',0,0,'L',0);
                        $this->cell(10);
                        $this->cell(2,10,':',0,0,'L',0);
                        $this->cell(36,10,$pk,0,1,'L',1);
                        $this->Ln(5);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(20,6,'Tingkat',1,0,'C',1);
                        $this->cell(60,6,'Nama Sekolah/PT',1,0,'C',1);
                        $this->cell(30,6,'Tahun Masuk',1,0,'C',1);
                        $this->cell(30,6,'Tahun Selesai',1,0,'C',1);
                        $this->cell(40,6,'Program Jurusan',1,1,'C',1);
                        $this->setFillColor(255,255,255);
						/*$this->cell(40,6,$pk,1,0,'C',1);
						$this->cell(60,6,$rows->nama_pt,1,0,'C',1);
                        $this->cell(40,6,$tmd,1,0,'C',1);
                        $this->cell(40,6,$rows->jurusan_pd,1,1,'C',1);*/
                        if($data['pendidikan_formal'] != FALSE){
					        foreach ($data['pendidikan_formal'] as $rows_pf) {
					        	if( $rows_pf->tingkat == 0)
					                        $pk = "Tidak Sekolah";
					                      else if( $rows_pf->tingkat == 1)
					                        $pk = "SD";
					                      else if( $rows_pf->tingkat == 2)
					                        $pk = "SMP";
					                      else if( $rows_pf->tingkat == 3)
					                        $pk = "SMA";
					                      else if( $rows_pf->tingkat == 4)
					                        $pk = "D1";
					                      else if( $rows_pf->tingkat == 5)
					                        $pk = "D2";
					                      else if( $rows_pf->tingkat == 6)
					                        $pk = "D3";
					                      else if( $rows_pf->tingkat == 7)
					                        $pk = "D4";
					                      else if( $rows_pf->tingkat == 8)
					                        $pk = "S1";
					                      else if( $rows_pf->tingkat == 9)
					                        $pk = "S2";
					                      else if( $rows_pf->tingkat == 10)
					                        $pk = "S3";
					                      else if( $rows_pf->tingkat == 11)
					                        $pk = "Paket B, C";
					        	$this->cell(20,6,$pk,1,0,'C',1);
								$this->cell(60,6,$rows_pf->nama_instansi,1,0,'C',1);
		                        $this->cell(30,6,$rows_pf->tahun_masuk,1,0,'C',1);
		                        $this->cell(30,6,$rows_pf->tahun_selesai,1,0,'C',1);
		                        $this->cell(40,6,$rows_pf->jurusan,1,1,'C',1);
					        }
                        }
												$this->ln(5);
												$this->cell($space_left,10,'Pendidikan Yang Di Tempuh',0,0,'L',0);
												$this->cell(10);
                        						$this->cell(2,10,':',0,0,'L',0);
												$this->cell(36,10,$pdt,0,1,'L',1);
												$this->ln(8);
												$this->setFont('Arial','',8);
												$this->cell(30,6,"Diutus oleh Asy-Syukriyyah",0,1,'L',1);
												$this->setFont('Arial','',10);
												$this->setFillColor(230,230,200);
												$this->cell(20,6,'Tahun',1,0,'C',1);
												$this->cell(30,6,'lamanya',1,0,'C',1);
												$this->cell(70,6,'Lembaga',1,0,'C',1);
												$this->cell(60,6,'Jenis',1,1,'C',1);
												if($data['c']!=FALSE){
												foreach ($data['c'] as $rows_c) {
	                        						$this->setFillColor(255,255,255);
													$this->cell(20,6,$rows_c->tahun,1,0,'C',1);
													$this->cell(30,6,$rows_c->lamanya,1,0,'C',1);
							                        $this->cell(70,6,substr($rows_c->lembaga, 0,70),1,0,'C',1);
							                        $this->cell(60,6,substr($rows_c->jenis, 0,70),1,1,'C',1);
												}
											}
											else{

											}

											$this->ln(10);
											$this->setFont('Arial','',8);
											$this->setFillColor(255,255,255);
											$this->cell(30,6,"Eksternal Asy-Syukriyyah atau diutus oleh Lembaga lain atau inisiatif sendiri",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(20,6,'Tahun',1,0,'C',1);
												$this->cell(30,6,'lamanya',1,0,'C',1);
												$this->cell(70,6,'Lembaga',1,0,'C',1);
												$this->cell(60,6,'Jenis',1,1,'C',1);
												if($data['g']!=FALSE){
												foreach ($data['g'] as $rows_g) {
	                        						$this->setFillColor(255,255,255);
													$this->cell(20,6,$rows_g->tahun,1,0,'C',1);
													$this->cell(30,6,$rows_g->lamanya,1,0,'C',1);
							                        $this->cell(70,6,substr($rows_g->lembaga, 0,70),1,0,'C',1);
							                        $this->cell(60,6,substr($rows_g->jenis, 0,70),1,1,'C',1);
												}
											}
											$this->ln(20);
											$this->setFont('Arial','',10);
											$this->setFillColor(255,255,255);
											$this->cell($space_left+15,10,'Unit Kerja Sekarang',0,0,'L',0);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(36,10,$uk,0,1,'L',1);
											$this->cell($space_left+15,10,'Unit Kerja Sebelumnya',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
                        					if($rows->unit_kerja_sebelumnya == 0){
                        						$unit_kerja = "-";
                        					}
                        					else $unit_kerja = $rows->unit_kerja_sebelumnya;
											$this->cell(36,10,$unit_kerja,0,1,'L',1);
											$this->cell(36,10,'',0,1,'L',1);
											$this->cell($space_left+15,10,'Mulai Bertugas',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(36,10,date('d M Y',strtotime($rows->mulai_tugas)),0,1,'L',1);
											$this->cell($space_left+15,10,'Status Kepegawaian',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(36,10,$sk,0,1,'L',1);
											$this->setFont('Arial','',8);
											$this->ln(2);
											$this->cell(30,6,"Bagi Pegawai Tetap dan Calon Pegawai Tetap",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(255,255,255);
											$this->cell($space_left+15,10,'Pengangkatan Sebagai Calon Pegawai Tetap',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(46,10,$pct,0,1,'L',1);
											$this->cell($space_left,10,'Pengangkatan Sebagai Pegawai Tetap',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(46,10,$pta,0,1,'L',1);
											$this->ln(5);
											$this->cell($space_left+15,10,'Fungsi',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(56,10,$fn,0,1,'L',1);
											$this->cell($space_left+15,10,'Sertifikasi Pendidik',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											//$this->cell(56,10,$rows->sertifikasi_pendidik,0,1,'L',1);
											$this->cell(56,10,'',0,1,'L',1);
											$this->Ln(5);
											$this->setFont('Arial','',8);
											$this->cell(40,6,'Riwayat Jabatan di Asy-Syukriyyah',0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(30,6,'Tahun Mulai',1,0,'C',1);
											$this->cell(30,6,'Tahun Selesai',1,0,'C',1);
											$this->cell(60,6,'Unit',1,0,'C',1);
											$this->cell(60,6,'Jabatan',1,1,'C',1);
											$this->setFillColor(255,255,255);
											if($data['riwayat_jabatan'] != FALSE){
												foreach ($data['riwayat_jabatan'] as $rows_jabatan) {
												$this->cell(30,6,$rows_jabatan->tahun_mulai,1,0,'C',1);
												$this->cell(30,6,$rows_jabatan->tahun_selesai,1,0,'C',1);
												$this->cell(60,6,$rows_jabatan->unit,1,0,'C',1);
												$this->cell(60,6,$rows_jabatan->jabatan,1,1,'C',1);	
												}
											}
											$this->Ln(5);
											$this->setFont('Arial','',8);
											$this->cell(40,6,' Riwayat Pekerjaan dan Jabatan Selain di Asy-Syukriyyah',0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(30,6,'Tahun',1,0,'C',1);
											$this->cell(60,6,'Nama Instansi/Lembaga',1,0,'C',1);
											$this->cell(40,6,'Jabatan',1,0,'C',1);
											$this->cell(50,6,'Alasan Berhenti/keluar',1,1,'C',1);
											$this->setFillColor(255,255,255);
											if($data['riwayat_jabatan_diluar'] != FALSE){
												foreach ($data['riwayat_jabatan_diluar'] as $rows_jabatan_diluar) {
												$this->cell(30,6,$rows_jabatan_diluar->tahun,1,0,'C',1);
												$this->cell(60,6,$rows_jabatan_diluar->nama_instansi,1,0,'C',1);
												$this->cell(40,6,$rows_jabatan_diluar->jabatan,1,0,'C',1);
												$this->cell(50,6,$rows_jabatan_diluar->alasan_keluar,1,1,'C',1);	
												}
											}
											$this->ln(20);

											$keluarga = $data['e'];
											if($keluarga['status_pernikahan'] == 0)
												$status_pernikahan = "Belum Menikah";
											if($keluarga['status_pernikahan'] == 1)
												$status_pernikahan = "Sudah Menikah";
											if($keluarga['status_pernikahan'] == 2)
												$status_pernikahan = "Janda";
											if($keluarga['status_pernikahan'] == 3)
												$status_pernikahan = "Duda";

											$this->setFont('Arial','',10);
											$this->setFillColor(255,255,255);
											$this->cell($space_left,10,'Status Pernikahan',0,0,'L',0);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(72,10,$status_pernikahan,0,1,'L',1);
											$this->cell($space_left,10,'Nama Suami/istri',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(72,10,$keluarga['nama_pasangan'],0,1,'L',1);
											$this->cell($space_left,10,'Pekerjaan Suami/Istri',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(72,10,$keluarga['pekerjaan_pasangan'],0,1,'L',1);
											$this->cell($space_left,10,'Jumlah Anak',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(80,10,'- Kandung',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(25,10,$keluarga['anak_kandung'],0,1,'L',1);
											$this->cell($space_left+12);
											$this->cell(80,10,'- Bukan kandung tetapi menjadi tanggungannya',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(10,10,$keluarga['bukan_anak_kandung'],0,1,'L',1);
											$this->ln(8);
											$this->setFont('Arial','',8);
											$this->cell(30,6,"Data Keluarga",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(30,6,'Hubungan',1,0,'C',1);
											$this->cell(60,6,'Nama',1,0,'C',1);
											$this->cell(8,6,'L/P',1,0,'C',1);
											$this->cell(35,6,'Kandung/Bukan',1,0,'C',1);
											$this->cell(50,6,'Pekerjaan',1,1,'C',1);
											if($data['d']!=FALSE){
												foreach ($data['d'] as $rows_d) {
													if($rows_d->hub_keluarga == 0)
														$hubungan = "Pegawai";
													if($rows_d->hub_keluarga == 1)
														$hubungan = "Pasangan";
													if($rows_d->hub_keluarga == 2)
														$hubungan = "Anak";
													if($rows_d->jenis_kelamin == 0)
														$jk = "P";
													if($rows_d->jenis_kelamin == 1)
														$jk = "L";
													if($rows_d->kandung == 0)
														$kandung = "Kandung";
													if($rows_d->kandung == 1)
														$kandung = "Bukan";
													$this->setFillColor(255,255,255);
													$this->cell(30,6,$hubungan,1,0,'C',1);
													$this->cell(60,6,$rows_d->nama_anggota,1,0,'C',1);
													$this->cell(8,6,$jk,1,0,'C',1);
													$this->cell(35,6,$kandung,1,0,'C',1);
													$this->cell(50,6,$rows_d->pekerjaan,1,1,'C',1);
												}
											}
											$this->ln(20);
											$this->setFillColor(255,255,255);
											$this->cell($space_left,10,'Nama Orang Tua Kandung',0,0,'L',1);
											$this->cell(10);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(10,10,'Ayah',0,0,'L',1);
											$this->cell(2);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(30,10,$keluarga['nama_ayah'],0,1,'L',1);
											$this->cell($space_left+12);
											$this->cell(10,10,'Ibu',0,0,'L',1);
											$this->cell(2);
                        					$this->cell(2,10,':',0,0,'L',0);
											$this->cell(30,10,$keluarga['nama_ibu'],0,1,'L',1);
											$this->cell($space_left+8,10,'Jumlah Saudara Kandung',0,0,'L',1);
											$this->cell(2);
                        					$this->cell(2,10,':',0,0,'L',0);
                        					if($keluarga['jumlah_saudara_kandung'] > 3){
                        						$keluarga['jumlah_saudara_kandung'] = "Lebih Dari 3";
                        					}
											$this->cell(72,10,$keluarga['jumlah_saudara_kandung'],0,1,'L',1);
											$this->ln(8);
											$this->setFont('Arial','',8);
											$this->cell(30,6,"Data Saudara Kandung (cukup 3 orang bila saudara kandung lebih dari 3 orang)",0,1,'L',1);
											$this->setFont('Arial','',10);
											$this->setFillColor(230,230,200);
											$this->cell(45,6,'Nama',1,0,'C',1);
											$this->cell(8,6,'L/P',1,0,'C',1);
											$this->cell(40,6,'Tanggal Lahir / Umur',1,0,'C',1);
											$this->cell(40,6,'Pekerjaan',1,0,'C',1);
											$this->cell(60,6,'Alamat (Tulis Kota Saja)',1,1,'C',1);
											if($data['saudara_kandung']!=FALSE){
												foreach ($data['saudara_kandung'] as $rows_sk) {
													if($rows_sk->jenis_kelamin == 0)
														$jk = "P";
													if($rows_sk->jenis_kelamin == 1)
														$jk = "L";
													$this->setFillColor(255,255,255);
													$this->cell(45,6,$rows_sk->nama_saudara_kandung,1,0,'C',1);
													$this->cell(8,6,$jk,1,0,'C',1);
													$this->cell(40,6,$rows_sk->tanggal_lahir,1,0,'C',1);
													$this->cell(40,6,$rows_sk->pekerjaan,1,0,'C',1);
													$this->cell(60,6,$rows_sk->alamat,1,1,'C',1);
												}
											}
										
										else{

										}

										$this->ln(35);
										$this->setFillColor(255,255,255);

										// Move to the right
										$this->Cell(130);
										/*$tgl = tgl_indo(date('Y-m-d'));
										$this->cell(30,6,"Tangerang, ".$tgl,0,1,'R',1);
										$this->Cell(120);
										$this->cell(30,6,"Operator",0,1,'R',1);
										$this->ln(20);
										$this->Cell(120);
										$this->cell(30,6,$rows->fullname,0,1,'R',1);
										$this->ln(-38);
										$this->cell(30,6,"Mengetahui",0,1,'L',1);
										$this->cell(30,6,"Kepala Departemen Support",0,1,'L',1);
										$this->ln(25);
										$this->cell(30,6,"",0,0,'L',1);*/

										$tgl = tgl_indo(date('Y-m-d'));
										$this->cell(30,6,"Tangerang, ".$tgl,0,1,'R',1);
										$this->Cell(10);
										$this->cell(30,6,"Mengetahui",0,1,'L',1);
										$this->cell(30,6,"Kepala Departemen Support",0,0,'L',1);
										$this->Cell(80);
										$this->cell(30,6,"Operator",0,1,'R',1);
										$this->ln(20);
										$this->Cell(7);
										$this->cell(22,6,"Ahmad Zarkasih, ST.",0,0,'L',1);
										$this->Cell(90);
										$operator = $data['f'];
										$this->cell(30,6,$operator['fullname'],0,0,'L',1);

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

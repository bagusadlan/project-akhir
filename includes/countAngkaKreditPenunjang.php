<?php

	function countAngkaKreditPenunjang()
	{
		$data['angkaKreditPerKategori'] = [];
		$total['1'] = countDataD1($_SESSION['nomor'])[0];
		$total['2'] = countDataD2($_SESSION['nomor'])[0];
		$total['3'] = countDataD3($_SESSION['nomor'])[0];
		$total['4'] = countDataD4($_SESSION['nomor'])[0];
		$total['5'] = countDataD5($_SESSION['nomor'])[0];
		$total['6'] = countDataD6($_SESSION['nomor'])[0];
		$total['7'] = countDataD7($_SESSION['nomor'])[0];
		$total['8'] = countDataD8($_SESSION['nomor'])[0];
		$total['9'] = countDataD9($_SESSION['nomor'])[0];
		$total['10'] = countDataD10($_SESSION['nomor'])[0];

		$data['totalAngkaKredit'] = array_sum($total);
		
		array_push($data['angkaKreditPerKategori'], $total);

		return [
			$data['totalAngkaKredit'],
			$data['angkaKreditPerKategori']
		];
	}

    function countDataD1($nip)
    {
        $group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, kedudukan, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 14 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KEDUDUKAN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$periode[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $arrayKedudukan) {
                    
                    foreach ($arrayKedudukan as $kedudukan => $number) {
                        $count = 0;
						$result[$tahunAjaran][$semester][$kedudukan] = 0;

                        foreach ($number as $index) {
                            $count++;
                        }

                        if ($kedudukan == 'Ketua') {
                            $ak = 3;
                        } elseif ($kedudukan == 'Wakil Ketua') {
                            $ak = 3;
                        } elseif ($kedudukan == 'Anggota') {
                            $ak = 2;
                        }

                        $count *= $ak;
						$periode[$tahunAjaran] = $count;
						$result[$tahunAjaran][$semester][$kedudukan] = $count;
					}
				}
			}
		}
		// echo '<pre>';
		// var_dump($periode);
		// echo '</pre>';
		// exit;
		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        array_push($totalAngkaKredit, $value2);
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
    }

    function countDataD2($nip)
    {
        $group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, jenis_panitia, kedudukan_pada_lembaga, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 15 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['JENIS_PANITIA']][$row['KEDUDUKAN_PADA_LEMBAGA']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$result[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $arrayJenisPanitia) {
                    
                    foreach ($arrayJenisPanitia as $jenisPanitia => $arrayKedudukan) {
						
						foreach ($arrayKedudukan as $kedudukan => $number) {
							$count = 0;
							$result[$tahunAjaran][$semester][$jenisPanitia][$kedudukan] = 0;

							foreach ($number as $index) {
								$count++;
							}

							if ($jenisPanitia == 'Pusat' && $kedudukan == 'Ketua') {
								$ak = 3;
							} elseif ($jenisPanitia == 'Pusat' && $kedudukan == 'Wakil Ketua') {
								$ak = 3;
							} elseif ($jenisPanitia == 'Pusat' && $kedudukan == 'Anggota') {
								$ak = 2;
							} elseif ($jenisPanitia == 'Daerah' && $kedudukan == 'Ketua') {
								$ak = 2;
							} elseif ($jenisPanitia == 'Daerah' && $kedudukan == 'Wakil Ketua') {
								$ak = 2;
							} elseif ($jenisPanitia == 'Daerah' && $kedudukan == 'Anggota') {
								$ak = 1;
							}
	
							$count *= $ak;
	
							$result[$tahunAjaran][$semester][$jenisPanitia][$kedudukan] = $count;
                        }

					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                    	foreach ($value2 as $key3 => $value3) {
                        	array_push($totalAngkaKredit, $value3);
                    	}
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
    }

    function countDataD3($nip)
    {
        $group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tingkatan_organisasi_profesi, kedudukan_organisasi_profesi, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 16 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['TINGKATAN_ORGANISASI_PROFESI']][$row['KEDUDUKAN_ORGANISASI_PROFESI']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$result[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $arrayTingkatan) {
                    
                    foreach ($arrayTingkatan as $tingkatan => $arrayKedudukan) {
						
						foreach ($arrayKedudukan as $kedudukan => $number) {
							$count = 0;
							$result[$tahunAjaran][$semester][$tingkatan][$kedudukan] = 0;

							foreach ($number as $index) {
								$count++;
							}

							if ($tingkatan == 'Internasional' && $kedudukan == 'Pengurus') {
								$ak = 2;
							} elseif ($tingkatan == 'Internasional' && $kedudukan == 'Anggota Atas Permintaan') {
								$ak = 1;
							} elseif ($tingkatan == 'Internasional' && $kedudukan == 'Anggota') {
								$ak = 0.5;
							} elseif ($tingkatan == 'Nasional' && $kedudukan == 'Pengurus') {
								$ak = 1.5;
							} elseif ($tingkatan == 'Nasional' && $kedudukan == 'Anggota Atas Permintaan') {
								$ak = 1;
							} elseif ($tingkatan == 'Nasional' && $kedudukan == 'Anggota') {
								$ak = 0.5;
							}
	
							$count *= $ak;
	
							$result[$tahunAjaran][$semester][$tingkatan][$kedudukan] = $count;
                        }

					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
						foreach ($value2 as $key3 => $value3) {
							array_push($totalAngkaKredit, $value3);
						}
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
    }

	function countDataD4($nip)
    {
        $group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 17 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			
			foreach ($group as $tahunAjaran => $arraySemester) {
				foreach ($arraySemester as $semester => $number) {
					$count = 0;
					$result[$tahunAjaran][$semester] = 0;
                    
                    foreach ($number as $index) {
						$count++;
					}

					$result[$tahunAjaran][$semester] = $count;
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
					array_push($totalAngkaKredit, $value);
				}
			}
		}
		
		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
    }

	function countDataD5($nip) {
		$group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, kedudukan_pada_delegasi, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 18 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KEDUDUKAN_PADA_DELEGASI']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				foreach ($arraySemester as $semester => $arrayKedudukan) {
                    foreach ($arrayKedudukan as $kedudukan => $number) {
                        $count = 0;
						$result[$tahunAjaran][$semester][$kedudukan] = 0;

                        foreach ($number as $index) {
                            $count++;
                        }

                        if ($kedudukan == 'Ketua') {
                            $ak = 3;
                        } elseif ($kedudukan == 'Anggota') {
                            $ak = 2;
                        } else {
                            $ak = 2;
						}

                        $count *= $ak;

						$result[$tahunAjaran][$semester][$kedudukan] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        array_push($totalAngkaKredit, $value2);
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
	}

	function countDataD6($nip) {
		$group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tingkatan_pertemuan_ilmiah, kedudukan_pertemuan_ilmiah, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 19 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['TINGKATAN_PERTEMUAN_ILMIAH']][$row['KEDUDUKAN_PERTEMUAN_ILMIAH']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$result[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $arrayTingkatan) {
                    
                    foreach ($arrayTingkatan as $tingkatan => $arrayKedudukan) {
						
						foreach ($arrayKedudukan as $kedudukan => $number) {
							$count = 0;
							$result[$tahunAjaran][$semester][$tingkatan][$kedudukan] = 0;

							foreach ($number as $index) {
								$count++;
							}

							if ($tingkatan == '1' && $kedudukan == 'Ketua') {
								$ak = 3;
							} elseif ($tingkatan == '1' && $kedudukan == 'Anggota') {
								$ak = 2;
							} elseif ($tingkatan == '2' && $kedudukan == 'Ketua') {
								$ak = 2;
							} elseif ($tingkatan == '2' && $kedudukan == 'Anggota') {
								$ak = 1;
							} else {
								$ak = 1;
							}
	
							$count *= $ak;
	
							$result[$tahunAjaran][$semester][$tingkatan][$kedudukan] = $count;
                        }

					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
						foreach ($value2 as $key3 => $value3) {
							array_push($totalAngkaKredit, $value3);
						}
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
	}

	function countDataD7($nip) {
		$group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, kategori_penghargaan, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 20 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KATEGORI_PENGHARGAAN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				foreach ($arraySemester as $semester => $arrayPenghargaan) {
                    foreach ($arrayPenghargaan as $penghargaan => $number) {
                        $count = 0;
						$result[$tahunAjaran][$semester][$penghargaan] = 0;

                        foreach ($number as $index) {
                            $count++;
                        }

                        if ($penghargaan == '30') {
                            $ak = 3;
                        } elseif ($penghargaan == '20') {
                            $ak = 2;
                        } elseif ($penghargaan == '10') {
                            $ak = 1;
                        } elseif ($penghargaan == 'Internasional') {
                            $ak = 5;
                        } elseif ($penghargaan == 'Nasional') {
                            $ak = 3;
                        } elseif ($penghargaan == 'Daerah') {
                            $ak = 1;
                        } else {
                            $ak = 1;
						}

                        $count *= $ak;

						$result[$tahunAjaran][$semester][$penghargaan] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        array_push($totalAngkaKredit, $value2);
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
	}

	function countDataD8($nip) {
		$group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tingkatan_buku_pelajaran, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 21 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['TINGKATAN_BUKU_PELAJARAN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				foreach ($arraySemester as $semester => $arrayBukuPelajaran) {
                    foreach ($arrayBukuPelajaran as $bukuPelajaran => $number) {
                        $count = 0;
						$result[$tahunAjaran][$semester][$bukuPelajaran] = 0;

                        foreach ($number as $index) {
                            $count++;
                        }

                        if ($bukuPelajaran == 'SMTA') {
                            $ak = 5;
                        } elseif ($bukuPelajaran == 'SMTP') {
                            $ak = 5;
                        } elseif ($bukuPelajaran == 'SD') {
                            $ak = 5;
                        } else {
                            $ak = 5;
						}

                        $count *= $ak;

						$result[$tahunAjaran][$semester][$bukuPelajaran] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        array_push($totalAngkaKredit, $value2);
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
	}

	function countDataD9($nip) {
		$group = null;
		$dataPerTanggal = [];
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tingkatan_prestasi_olahraga, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 22 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['TINGKATAN_PRESTASI_OLAHRAGA']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				foreach ($arraySemester as $semester => $arrayPrestasiOlahraga) {
                    foreach ($arrayPrestasiOlahraga as $prestasiOlahraga => $number) {
                        $count = 0;
						$result[$tahunAjaran][$semester][$prestasiOlahraga] = 0;

                        foreach ($number as $index) {
                            $count++;
                        }

                        if ($prestasiOlahraga == 'Internasional') {
                            $ak = 5;
                        } elseif ($prestasiOlahraga == 'Nasional') {
                            $ak = 3;
                        } elseif ($prestasiOlahraga == 'Daerah') {
                            $ak = 1;
                        } else {
                            $ak = 1;
						}

                        $count *= $ak;

						$result[$tahunAjaran][$semester][$prestasiOlahraga] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $array) {
				foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        array_push($totalAngkaKredit, $value2);
                    }
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
		// return [
		// 	0
		// ];
	}

	function countDataD10($nip) {
		$dataPerTanggal = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 23 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			foreach ($row as $key => $tanggal) {
				array_push($dataPerTanggal, $tanggal);
			}
		}

		$totalAngkaKredit = count($rows) * 0.5;

		return [
			$totalAngkaKredit,
			$dataPerTanggal
		];
		// return [
		// 	0
		// ];
	}
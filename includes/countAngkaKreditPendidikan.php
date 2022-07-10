<?php

	function countAngkaKreditPendidikan()
	{
		$data['angkaKreditPerKategori'] = [];
		$data['arrayPerPeriode'] = [];
		$data['angkaKreditPerPeriode'] = [];

		$return1 = countDataA21($_SESSION['nomor'], $_SESSION['jabfung']);
		$return2 = countDataA22($_SESSION['nomor']);
		$return3 = countDataA23($_SESSION['nomor']);
		$return4 = countDataA24($_SESSION['nomor']);
		$return5 = countDataA25($_SESSION['nomor']);
		$return6 = countDataA26($_SESSION['nomor']);
		$return7 = countDataA27($_SESSION['nomor']);
		$return8 = countDataA28($_SESSION['nomor']);
		$return9 = countDataA29($_SESSION['nomor']);
		$return10 = countDataA210($_SESSION['nomor']);
		$return11 = countDataA211($_SESSION['nomor']);
		$return12 = countDataA212($_SESSION['nomor']);
		$return13 = countDataA213($_SESSION['nomor']);
		
		$total['1'] = $return1[0];
		$total['2'] = $return2[0];
		$total['3'] = $return3[0];
		$total['4'] = $return4[0];
		$total['5'] = $return5[0];
		$total['6'] = $return6[0];
		$total['7'] = $return7[0];
		$total['8'] = $return8[0];
		$total['9'] = $return9[0];
		$total['10'] = $return10[0];
		$total['11'] = $return11[0];
		$total['12'] = $return12[0];
		$total['13'] = $return13[0];

		$periode['1'] = $return1[1];
		$periode['2'] = $return2[1];
		$periode['3'] = $return3[1];
		$periode['4'] = $return4[1];
		$periode['5'] = $return5[1];
		$periode['6'] = $return6[1];
		$periode['7'] = $return7[1];
		$periode['8'] = $return8[1];
		$periode['9'] = $return9[1];
		$periode['10'] = $return10[1];
		$periode['11'] = $return11[1];
		$periode['12'] = $return12[1];
		$periode['13'] = $return13[1];

		$groupPeriode = [
			'year' => [],
			'kredit' => []
		];
		$kreditPeriode = [];
		// $arrayTahun = [];
		// $arrayKredit = [];

		$data['totalAngkaKreditPendidikan'] = array_sum($total);

		array_push($data['arrayPerPeriode'], $periode);

		$data['arrayPerPeriode'] = $data['arrayPerPeriode'][0];

		$data['angkaKreditPerPeriode'] = array_merge_recursive($periode[1], $periode[2], $periode[3], $periode[4], $periode[5], $periode[6], $periode[7], $periode[8], $periode[9], $periode[10], $periode[11], $periode[12], $periode[13]);

		foreach ($data['angkaKreditPerPeriode'] as $tahunAjaran => $angkaKredit) {
			if (is_array($angkaKredit)) {
				$kreditPeriode = array_sum($angkaKredit);
			} else {
				$kreditPeriode = $angkaKredit;
			}
			array_push($groupPeriode['year'], $tahunAjaran);
			array_push($groupPeriode['kredit'], $kreditPeriode);
		}

		if ($data['totalAngkaKreditPendidikan'] >= 73) {
			$con = konekDb();
			$nip = $_SESSION['nomor'];

			$sql = "SELECT * FROM pesan WHERE nip=:v1 AND TIPE = 'Pendidikan'";
			$bind = array(':v1' => $nip);
			$hasil = query_view($con, $sql, $bind);

			oci_fetch_all($hasil, $pesan, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);
			
			if (empty($pesan)) {
				if ($_SESSION['jabfung'] == 'Asisten Ahli') {
					$pesan = '<b>Kum Pendidikan</b> anda sudah memenuhi syarat untuk naik jabatan ke Lektor.';
				} else if ($_SESSION['jabfung'] == 'Lektor') {
					$pesan = '<b>Kum Pendidikan</b> anda sudah memenuhi syarat untuk naik jabatan ke Lektor Kepala.';
				} else if ($_SESSION['jabfung'] == 'Lektor Kepala') {
					$pesan = '<b>Kum Pendidikan</b> anda sudah memenuhi syarat untuk naik jabatan ke Guru Besar.';
				}
				
				$sql = "INSERT INTO PESAN (NOMOR, NIP, PESAN, TIPE) values (PESAN_SEQ.NEXTVAL, :v1, :v2, 'Pendidikan')";
				$bind = array(':v1' => $nip, ':v2' => $pesan);
				$hasil = query_insert($con, $sql, $bind);
			}
		}

		array_push($data['angkaKreditPerKategori'], $total);

		return [
			$data['totalAngkaKreditPendidikan'],
			$data['angkaKreditPerKategori'][0],
			$groupPeriode
		];
	}

	function getPesan() {
		$con = konekDb();
		$nip = $_SESSION['nomor'];

		$sql = "SELECT * FROM pesan WHERE nip=:v1";
		$bind = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $bind);

		oci_fetch_all($hasil, $pesan, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

		return $pesan;
	}

	function getAngkaKreditPerPeriode($angkaKreditPerPeriode) {
		foreach ($angkaKreditPerPeriode as $tahun => $i) {
			$angkaKreditPerPeriode[$tahun] = [];
			$jumlah = 0;
			foreach ($i as $index) {
				$jumlah += $index;
			}
			$angkaKreditPerPeriode[$tahun] = $jumlah;
		}

		return $angkaKreditPerPeriode;
	}

	function countDataA21($nip, $jabfung)
	{
		$group = null;
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, sks, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 1 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			// $dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = 0 + $row['SKS'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $number) {
					$count = 0;
					$result[$tahunAjaran][$semester] = 0;
		
					foreach ($number as $index) {
						$count += $index;
					}
					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
					$result[$tahunAjaran][$semester] = $count;
				}
				$count = null;
			}
		}
		
		if ($jabfung == 'Asisten Ahli') {
			$sksPertama = 0.5;
			$sksBerikutnya = 0.25;
			$batasMaksimal = 2;
		} else if ($jabfung == 'Lektor' || $jabfung == 'Lektor Kepala') {
			$sksPertama = 1;
			$sksBerikutnya = 0.5;
			$batasMaksimal = 2;
		} else if ($jabfung == 'Guru Besar') {
			$sksPertama = 1;
			$sksBerikutnya = 0.5;
			$batasMaksimal = 2;
		} else {
			$sksPertama = 1;
			$sksBerikutnya = 0.5;
			$batasMaksimal = 2;
		}

		if (!empty($result)) {
			foreach ($result as $year) {
				foreach ($year as $sem => $sks) {
					if ($sks <= 10) {
						$angkaKredit = $sks * $sksPertama;
					} else if ($sks > 10 && $sks <= 10 + $batasMaksimal) {
						$angkaKredit = (10 * $sksPertama) + ($sksBerikutnya * ($sks - 10));
					} else {
						$angkaKredit = (10 * $sksPertama) + ($sksBerikutnya * $batasMaksimal);
					}
					array_push($totalAngkaKredit, $angkaKredit);
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);
		
		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode,
		];
	}

	function countDataA22($nip)
	{
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 2 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $number) {
					$count = 0;
					$result[$tahunAjaran][$semester] = 0;

					foreach ($number as $index) {
						$count++;
					}

					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
					$result[$tahunAjaran][$semester] = $count;
				}
			}
		}
		
		$totalAngkaKredit = count($rows);
		
		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode,
		];
	}

	function countDataA23($nip)
	{
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 3 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $number) {
					$count = 0;

					foreach ($number as $index) {
						$count++;
					}

					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
				}
			}
		}

		$totalAngkaKredit = count($rows);
		
		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA24($nip)
	{
		$group = null;
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT KATEGORI_PEMBIMBING, JENIS_TUGASAKHIR, TAHUN_AJARAN, SEMESTER, TANGGAL FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 4 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KATEGORI_PEMBIMBING']][$row['JENIS_TUGASAKHIR']][] = $row['TANGGAL'];

			foreach ($group as $tahun_ajaran => $semester) {
				$angkaKreditPerPeriode[$tahun_ajaran] = [];
		
				foreach ($semester as $kategoriPembimbing => $jenisTugasAkhir) {
					
					foreach ($jenisTugasAkhir as $array => $number) {
						
						foreach ($number as $key => $value) {
							$count = 0;
							$result[$tahun_ajaran][$kategoriPembimbing][$array][$key] = 0;
							
							foreach ($value as $index) {
								$count++;
							}

							if ($array == 'PU' && $key == 'Disertasi') {
								$ak = 8;
							} 
							else if ($array == 'PU' && $key == 'Tesis') {
								$ak = 3;
							}
							else if ($array == 'PU' && $key == 'Skripsi') {
								$ak = 1;
							}
							else if ($array == 'PU' && $key == 'Tugas Akhir') {
								$ak = 1;
							}
							else if ($array == 'PP' && $key == 'Disertasi') {
								$ak = 6;
							}
							else if ($array == 'PP' && $key == 'Tesis') {
								$ak = 2;
							}
							else if ($array == 'PP' && $key == 'Skripsi') {
								$ak = 0.5;
							}
							else if ($array == 'PP' && $key == 'Tugas Akhir') {
								$ak = 0.5;
							} else {
								$ak = 1;
							}

							$count = $count * $ak;

							array_push($angkaKreditPerPeriode[$tahun_ajaran], $count);
							$result[$tahun_ajaran][$kategoriPembimbing][$array][$key] = $count;
							
						}
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahunAjaran => $namaSemester) {
					foreach ($namaSemester as $pembimbing => $tugasAkhir) {
						foreach ($tugasAkhir as $namaTugasAkhir => $namaNumber) {
							array_push($totalAngkaKredit, $namaNumber);
						}
					}
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA25($nip)
	{
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT KATEGORI_PENGUJI, TAHUN_AJARAN, SEMESTER, NAMA_MAHASISWA, TANGGAL FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 5 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KATEGORI_PENGUJI']][] = $row['NAMA_MAHASISWA'];
			foreach ($group as $tahunAjaran => $semester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];
				foreach ($semester as $kategoriSemester => $penguji) {
					foreach ($penguji as $kategoriPenguji => $array) {
						$count = 0;
						foreach ($array as $key) {
								$count += 1;
						}

						if ($kategoriPenguji == 'KP' && $count > 4) {
							$count = 4;
						} else if ($kategoriPenguji == 'AP' && $count > 8) {
							$count = 8;
						}

						if ($kategoriPenguji == 'AP') {
							$angkaKredit = 0.5;
						} else {
							$angkaKredit = 1;
						}
						$count *= $angkaKredit;
						
						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
						$result[$tahunAjaran][$kategoriSemester][$kategoriPenguji] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $tahun) {
				foreach ($tahun as $smstr => $penguji) {
					foreach ($penguji as $jenisPenguji => $value) {
						$totalAngkaKredit[] = $value;
					}
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode,
		];
	}

	function countDataA26($nip)
	{
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 6 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $number) {
					$count = 0;

					foreach ($number as $index) {
						$count++;
					}

					if ($count < 2) {
						$count *= 2;
					} else {
						$count = 4;
					}

					array_push($totalAngkaKredit, $count);
					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA27($nip)
	{
		$totalAngkaKredit = [];

		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 7 ORDER BY TAHUN_AJARAN , SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $number) {
					$count = 0;

					foreach ($number as $index) {
						$count++;
					}

					if ($count >= 1) {
						$count = 2;
					}

					array_push($totalAngkaKredit, $count);
					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA28($nip)
	{
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, jenis_produk, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 8 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['JENIS_PRODUK']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];
				foreach ($arraySemester as $semester => $arrayJenisProduk) {
					foreach ($arrayJenisProduk as $jenisProduk => $number) {
						$count = 0;
						$result[$tahunAjaran][$semester][$jenisProduk] = 0;

						foreach ($number as $index) {
							$count ++;
						}

						if ($jenisProduk == 'Buku Ajar') {
							$ak = 20;
						} elseif ($jenisProduk == 'Diktat' || $jenisProduk == 'Modul' || $jenisProduk == 'Petunjuk Praktikum') {
							$ak = 5;
						}

						$count *= $ak;

						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
						$result[$tahunAjaran][$semester][$jenisProduk] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahun_ajaran => $namaSemester) {
					foreach ($namaSemester as $jenisProduk => $angkaKredit) {
						array_push($totalAngkaKredit, $angkaKredit);
					}
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA29($nip)
	{
		$totalAngkaKredit = [];
		$dataPerTanggal = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 9 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$dataPerTanggal[] = $row['TANGGAL'];
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];
		
				foreach ($arraySemester as $semester => $number) {
					$count = 0;
					$result[$tahunAjaran][$semester] = 0;

					foreach ($number as $index) {
						$count++;
					}

					$count *= 5;
					
					array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
					$result[$tahunAjaran][$semester] = $count;
				}
				$count = null;
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahunAjaran => $namaSemester) {
					
					array_push($totalAngkaKredit, $namaSemester);
				}
			}
		}

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}
		
		$totalAngkaKredit = array_sum($totalAngkaKredit);

		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode,
			$dataPerTanggal
		];
	}

	function countDataA210($nip)
	{
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, jabatan_pimpinan, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 10 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['JABATAN_PIMPINAN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $arrayJabatanPimpinan) {
					foreach ($arrayJabatanPimpinan as $jabatanPimpinan => $array) {
						$count = 0;
						$result[$tahunAjaran][$semester][$jabatanPimpinan] = 0;

						foreach ($array as $index) {
							$count ++;
						}

						if ($jabatanPimpinan == 'Rektor') {
							$ak = 6;
						} elseif ($jabatanPimpinan == 'Wakil Rektor' || $jabatanPimpinan == 'Dekan' || $jabatanPimpinan == 'Direktur Pascasarjana' || $jabatanPimpinan == 'Ketua Lembaga') {
							$ak = 5;
						} elseif ($jabatanPimpinan == 'Ketua Sekolah Tinggi' || $jabatanPimpinan == 'Pembantu Dekan' || $jabatanPimpinan == 'Asisten Direktur Pascasarjana' || $jabatanPimpinan == 'Direktur Politeknik' || $jabatanPimpinan == 'Kepala LLDikti' || $jabatanPimpinan == 'Pembantu Ketua Sekolah' || $jabatanPimpinan == 'Pembantu Direktur Politeknik' || $jabatanPimpinan == 'Direktur Akademi') {
							$ak = 4;
						} else {
							$ak = 3;
						}

						$count *= $ak;

						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
					}
					$result[$tahunAjaran][$semester][$jabatanPimpinan] = $count;
				}
				$count = null;
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahunAjaran => $array) {
					foreach ($array as $semester => $angkaKredit) {
						array_push($totalAngkaKredit, $angkaKredit);
					}
				}
			}
		}
		
		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}
		
		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA211($nip)
	{
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, kategori_pembimbing_dosen, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 11 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KATEGORI_PEMBIMBING_DOSEN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $arrayKategoriPembimbing) {
					foreach ($arrayKategoriPembimbing as $kategoriPembimbingDosen => $countArray) {
						$count = 0;

						foreach ($countArray as $index) {
							$count++;
						}

						if ($kategoriPembimbingDosen == 'Pencangkokan') {
							$ak = 3;
						} else {
							$ak = 2;
						}
						
						$count *= $ak;

						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
					}
					$result[$tahunAjaran][$semester][$kategoriPembimbingDosen] = $count;
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahunAjaran => $array) {
					foreach ($array as $semester => $angkaKredit) {
						array_push($totalAngkaKredit, $angkaKredit);
					}
				}
			}
		}
		
		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}
		
		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA212($nip)
	{
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, kategori_kegiatan, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 12 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['KATEGORI_KEGIATAN']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $arrayKategoriKegiatan) {
					foreach ($arrayKategoriKegiatan as $kategoriKegiatan => $array) {
						$count = 0;
						$result[$tahunAjaran][$semester][$kategoriKegiatan] = 0;

						foreach ($array as $index) {
							$count++;
						}

						if ($kategoriKegiatan == 'Detasering') {
							$ak = 5;
						} elseif ($kategoriKegiatan == 'Pencangkokan') {
							$ak = 4;
						} else {
							$ak = 4;
						}

						$count *= $ak;

						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
						$result[$tahunAjaran][$semester][$kategoriKegiatan] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahunAjaran => $array) {
					foreach ($array as $semester => $angkaKredit) {
						array_push($totalAngkaKredit, $angkaKredit);
					}
				}
			}
		}
		
		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}
		
		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

	function countDataA213($nip)
	{
		$totalAngkaKredit = [];
	
		$con = konekDb();
		$sql = "SELECT tahun_ajaran, semester, durasi_pengembangan_diri, tanggal FROM DOKUMEN_BIDANG WHERE NIP = :v1 AND NOMOR_BIDANG = 13 ORDER BY TAHUN_AJARAN, SEMESTER, TANGGAL";
		$rows = array(':v1' => $nip);
		$hasil = query_view($con, $sql, $rows);
		oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
		
		foreach ($rows as $row) {
			$group[$row['TAHUN_AJARAN']][$row['SEMESTER']][$row['DURASI_PENGEMBANGAN_DIRI']][] = $row['TANGGAL'];
			foreach ($group as $tahunAjaran => $arraySemester) {
				$angkaKreditPerPeriode[$tahunAjaran] = [];

				foreach ($arraySemester as $semester => $arrayDurasiPengembangan) {
					foreach ($arrayDurasiPengembangan as $durasiPengembanganDiri => $array) {
						$count = 0;
						$result[$tahunAjaran][$semester][$durasiPengembanganDiri] = 0;

						foreach ($array as $index) {
							$count ++;
						}

						if ($durasiPengembanganDiri == '10-30') {
							$ak = 0.5;
						} elseif ($durasiPengembanganDiri == '30-80') {
							$ak = 1;
						} elseif ($durasiPengembanganDiri == '81-160') {
							$ak = 2;
						} elseif ($durasiPengembanganDiri == '161-480') {
							$ak = 3;
						} elseif ($durasiPengembanganDiri == '481-640') {
							$ak = 6;
						} elseif ($durasiPengembanganDiri == '641-960') {
							$ak = 9;
						} elseif ($durasiPengembanganDiri == '>960') {
							$ak = 15;
						} else {
							$ak = 1;
						}

						$count *= $ak;

						array_push($angkaKreditPerPeriode[$tahunAjaran], $count);
						$result[$tahunAjaran][$semester][$durasiPengembanganDiri] = $count;
					}
				}
			}
		}

		if (!empty($result)) {
			foreach ($result as $row) {
				foreach ($row as $tahun_ajaran => $array) {
					foreach ($array as $semester => $angkaKredit) {
						array_push($totalAngkaKredit, $angkaKredit);
					}
				}
			}
		}

		$totalAngkaKredit = array_sum($totalAngkaKredit);

		if (!empty($angkaKreditPerPeriode)) {
			$angkaKreditPerPeriode = getAngkaKreditPerPeriode($angkaKreditPerPeriode);
		} else {
			$angkaKreditPerPeriode = [];
		}
		
		return [
			$totalAngkaKredit,
			$angkaKreditPerPeriode
		];
	}

?>
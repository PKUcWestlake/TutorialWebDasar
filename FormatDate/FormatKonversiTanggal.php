<?php 
	
	function KonfersiHari($hari)
	{
		$status = "";

		switch ($hari) {
			case 'Sun':
				$status = "Minggu";
				break;
	 
			case 'Mon':			
				$status = "Senin";
				break;
	 
			case 'Tue':
				$status = "Selasa";
				break;
	 
			case 'Wed':
				$status = "Rabu";
				break;
	 
			case 'Thu':
				$status = "Kamis";
				break;
	 
			case 'Fri':
				$status = "Jumat";
				break;
	 
			case 'Sat':
				$status = "Sabtu";
				break;
		}

		return $status;
	}

	function KonfersiBulan($bulan)
	{
		$status = "";

		switch ($bulan) {
			case '01':
				$status = "Januari";
				break;
	 
			case '02':			
				$status = "Febuari";
				break;
	 
			case '03':
				$status = "Maret";
				break;
	 
			case '04':
				$status = "April";
				break;
	 
			case '05':
				$status = "Mei";
				break;
	 
			case '06':
				$status = "Juni";
				break;
	 
			case '07':
				$status = "Juli";
				break;

			case '08':
				$status = "Agustus";
				break;

			case '09':
				$status = "September";
				break;

			case '10':
				$status = "Oktober";
				break;

			case '11':
				$status = "November";
				break;

			case '12':
				$status = "Desember";
				break;
		}

		return $status;
	}

echo "Format Hari Ini : ". date('D, d-m-Y') ."<br />";
echo "Konversi Hari : ". KonfersiHari(date('D')) .", ". date('d') ." ". KonfersiBulan(date('m')) ." ". date('Y');

 ?>
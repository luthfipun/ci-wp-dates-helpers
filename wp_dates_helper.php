<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('wp_dates'))
{
	function wp_dates($date){
		$change = gmdate($date);
		$changes = explode("-",$change);
		$date = $changes[2];
		$month = month($changes[1]);
		$year = $changes[0];
		return $month.' '.$date.', '.$year;
	}
}

if ( ! function_exists('month'))
{
	function month($month)
	{
		switch ($month)
		{
			case 1:
				return "January";
				break;
			case 2:
				return "February";
				break;
			case 3:
				return "March";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "May";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "July";
				break;
			case 8:
				return "August";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "October";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "December";
				break;
		}
	}
}

/* End of file wp_dates_helper.php */
/* Location: ./application/helpers/wp_dates_helper.php */
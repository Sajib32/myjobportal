<?php

class Testing {

	public static function chk($availability) {

		$lines = preg_split('/\r\n/', $availability);

		for ($start=0; $start < count($lines); $start++) {   
		//echo "<div align=\"left\" class=\"detailsnoncap\">";
		 //echo "<ul>";
		//echo "<li>";   
		 echo $lines[$start];
		 //echo "</li>";
		//echo "</ul>";
		// echo "</div>";
		 }
	}
}
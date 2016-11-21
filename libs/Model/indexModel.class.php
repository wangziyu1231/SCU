<?php
	class indexModel{
		function getScrollImage(){
			DB::query("select `imgName`,`imgDesc`,`date_of_entry` from `source_img` where `imgDesc` is not null order by `date_of_entry` desc");
			$jsarr=DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
			return $jsarr;
			
		}
		
		
		function getVideo(){
			DB::query("select `videoName`,`videoDate` from `index_video` order by `videoDate` desc");
			$jsarr=DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
			return $jsarr;
		}
		
		function getAImage(){
			DB::query("select `imgName`,`imgDesc`,`date_of_entry` from `source_img` where `imgDesc` is  null order by `date_of_entry` desc");
			$jsarr=DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
			return $jsarr;
		}
	}
?>
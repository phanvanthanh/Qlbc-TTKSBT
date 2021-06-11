<?php
namespace App\Helpers;

class Helper
{

	private static $level=-1;
	private static $arrItem=array();
	public static function tableListDonVi($data, $id){
		foreach ($data as $key => $item) {
			if($item['parent']==$id){
                Helper::$level++;
                $item['level']=Helper::$level;
                Helper::$arrItem[]=$item;                
				Helper::tableListDonVi($data, $item['id']);				
				Helper::$level--;
			}			
		}
		return Helper::$arrItem;
	}

	private static $shareDonVi='';
	public static function exportTree($data, $id){
		echo '<ul>';
		foreach ($data as $key => $item) {
			if($item['parent']==$id){
				$class='';
				if(!is_numeric($item['id'])){
					$class='name';
				}
				Helper::$shareDonVi.=$item['id'].';';
				echo '<li class="tree-show '.$class.'" data="'.$item['id'].'">'.$item['ten_don_vi'];
				Helper::exportTree($data, $item['id']);
				echo '</li>';
			}
			
		}
		echo '</ul>';
		return Helper::$shareDonVi;
	}

	public static function tableListDonViById($data, $id){
		foreach ($data as $key => $item) {
			if($item['id']==$id){
				Helper::$level++;
                $item['level']=Helper::$level;
                Helper::$arrItem[]=$item;  
			}
			if($item['parent']==$id){
                Helper::$level++;
                $item['level']=Helper::$level;
                Helper::$arrItem[]=$item;                
				Helper::tableListDonVi($data, $item['id']);				
				Helper::$level--;
			}			
		}
		return Helper::$arrItem;
	}


	public static function rightMenu($data, $id){
		echo '<ul class="nav-second-level" aria-expanded="false">';
		$stt=0;
		foreach ($data as $key => $item) {
			if($item->parent_id==$id){
				$hasChild='';
				$hasIcon='';
				foreach ($data as $key2 => $item2) {
					if($item2->parent_id==$item->id){
						$hasChild=' ';
						$hasIcon=' ';
					}
				}
				echo '<li><a class="go-to" href="/'.$item->uri.'">'.$item->ten_hien_thi.'</a>';
				Helper::rightMenu($data, $item->id);
				echo '</li>';

			}
			
		}
		echo '</ul>';
	}

    public static function subMenu($data, $id){
		echo '<ul>';
		foreach ($data as $key => $item) {
			if($item->parent_id==$id){
				$hasChild='';
				$hasIcon='';
				foreach ($data as $key2 => $item2) {
					if($item2->parent_id==$item->id){
						$hasChild='hassubs';
						$hasIcon=' <i class="fas fa-chevron-right" style="float: right; margin-top: 24px;"></i>';
					}
				}
				echo '<li class="'.$hasChild.'"><a href="/'.$item->uri.'">'.$item->ten_hien_thi.$hasIcon.'</a>';
				Helper::subMenu($data, $item->id);
				echo '</li>';
			}
			
		}
		echo '</ul>';
	}

	public static function subCatMenu($data, $id){
		echo '<ul>';
		foreach ($data as $key => $item) {
			if($item->parent_id==$id){
				$hasChild=''; $hasIcon='';
				foreach ($data as $key2 => $item2) {
					if($item2->parent_id==$item->id){
						$hasChild='hassubs';
						$hasIcon=' <i class="fas fa-chevron-right"></i>';
					}
				}
				echo '<li class="'.$hasChild.'"><a href="#">'.$item->ten_danh_muc.$hasIcon.'</a>';
				Helper::subCatMenu($data, $item->id);
				echo '</li>';
			}
			
		}
		echo '</ul>';
	}


	public static function subMenuXs($data, $id){
		echo '<ul class="page_menu_selection">';
		foreach ($data as $key => $item) {
			if($item->parent_id==$id){
				$hasChild='';
				foreach ($data as $key2 => $item2) {
					if($item2->parent_id==$item->id){
						$hasChild='class="page_menu_item has-children"';
					}
				}
				if($hasChild==''){
					$hasChild='class="go-to"';
				}
				
				echo '<li '.$hasChild.'><a href="/'.$item->uri.'">'.$item->ten_hien_thi.'<i class="fa fa-angle-down"></i></a>';
				Helper::subMenuXs($data, $item->id);
				echo '</li>';
			}
			
		}
		echo '</ul>';
	}

	private static $capController=0;
	private static $arrController=array();

	public static function CapMenuController($data, $id){
	
		foreach ($data as $key => $item) {
			if($item['parent_id']==$id){
				Helper::$capController++;
				$item['cap']=Helper::$capController;
				Helper::$arrController[]=$item;				
				Helper::CapMenuController($data, $item['id']);
				Helper::$capController--;
			}
			
		}
		return Helper::$arrController;
	}


	private static $capLayout=0;
	private static $arrLayout=array();

	public static function CapMenuLayout($data, $id){
	
		foreach ($data as $key => $item) {
			if($item['parent_id']==$id){
				Helper::$capLayout++;
				$item['cap']=Helper::$capLayout;
				Helper::$arrLayout[]=$item;				
				Helper::CapMenuLayout($data, $item['id']);
				Helper::$capLayout--;
			}
			
		}
		return Helper::$arrLayout;
	}




	public static function getAge($birthdate = '0000-00-00') {
		  /*
		  // Tính theo tuổi tháng ngày
		  $date1 = $birthdate;
		  $date2 = date('Y-m-d');
		  $diff = abs(strtotime($date2) - strtotime($date1));
		  $years = floor($diff / (365*60*60*24));
		  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		  return $years . " tuổi, " . $months . " tháng, " . $days . " ngày";
		  */
        if ($birthdate == '0000-00-00') return 'Unknown';
     
        $bits = explode('-', $birthdate);
        $age = date('Y') - $bits[0] - 1;
        $arr[1] = 'm';
        $arr[2] = 'd';
     	
     	$thang=0;
     	$ngay=0;
        for ($i = 1; $arr[$i]; $i++) {
            $n = date($arr[$i]); // 3
            if ($n < $bits[$i]){

                break;
            }
            if ($n >= $bits[$i]) {
                ++$age;
                break;
            }
        }
        if($age>0){
        	return $age.' tuổi ';
        }else{
        	$date1 = $birthdate;
			$date2 = date('Y-m-d');
			$diff = abs(strtotime($date2) - strtotime($date1));
			$years = floor($diff / (365*60*60*24));
			$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			if($months>0){
				return $months . " tháng tuổi ";
			}else{
				return $days . " ngày tuổi";
			}
        }
        
    } 

    public static function getDiffDate($firstDate, $secondDate){
    	$first_date = strtotime($firstDate);
		$second_date = strtotime($secondDate);
		$datediff = abs($first_date - $second_date);
		return floor($datediff / (60*60*24));
    }


	
}
	
?>
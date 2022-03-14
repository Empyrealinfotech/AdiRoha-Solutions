<?php

	if (! function_exists('base64Encode')) {
		function base64Encode($id){
			if($id){
			    $base = base64_encode($id);
	            $base = str_replace('=', '__',$base);
	            $base = str_replace('+', '-', $base);
	            $base = str_replace('/', '--', $base);
	            $base ='__'.$base;
			    return $base;
	        }else{
	        	return '';
	        }
		}
	}

	if (! function_exists('base64Decode')) {
		function base64Decode($id){
			if($id){
			    $id = ltrim($id,'__');
		        $id = str_replace('__', '=', $id);
		        $id = str_replace('--', '/', $id);
		        $id = str_replace('-', '+', $id);
		        $id = base64_decode($id);
			    return $id;
	        }else{
	        	return '';
	        }
		}
	}

	if(! function_exists('cdnMakeDirectory')){
		function cdnMakeDirectory($module,$type='',$code=''){
			if(!\File::exists(cdnPublicPath($module,$type,$code))){
				\File::makeDirectory(cdnPublicPath($module,$type,$code), $mode = 0777, true, true);
			}
			return '1';
		}
	}

	if(! function_exists('cdnPublicPath')){
		function cdnPublicPath($module,$type='',$code=''){
			return public_path(config('constants.storage.uploads').'/'.cdnPath($module,$type,$code));
		}
	}

	if(! function_exists('cdnPath')){
		function cdnPath($module,$type='',$code=''){ 
			$path = $module; //date('Y/F/d').'/'.$module;
			if ($code!='') {
				$path.= '/'.$code;
			}
			if ($type!='') {
				if($type==1){
					$path.= '/photo';
				}elseif ($type==2) {
					$path.= '/photo/thumbnail';
				}elseif ($type==3) {
					$path.= '/video';
				}elseif ($type==4) {
					$path.= '/document';
				}elseif ($type==5) {
					$path.= '/banner';
				}elseif ($type==6) {
					$path.= '/audio';
				}
			}
			return $path;
		}
	}

	if(! function_exists('generateFileName')){
		function generateFileName($extension){
			return date("YmdHis").md5(time().rand(1111,9999)).'.'.$extension;
		}
	}

	if(! function_exists('cdnFetch')){
		function cdnFetch($folder,$name=''){
			if ($name!='') {
				$path = config('constants.storage.uploads').'/'.$folder.'/'.$name;
				if ($path!='' && \File::exists(public_path($path))) {
					return asset($path);
				}
				return '';
			}else{
				return '';
			}
		}
	}

	if(! function_exists('cdnUnlink')){
		function cdnUnlink($folder,$name=''){
			if ($name!='') {
				$path = config('constants.storage.uploads').'/'.$folder.'/'.$name;
				if ($path!='' && \File::exists(public_path($path))) {
				    unlink(public_path($path));
				}
				return 1;
			}else{
				return '';
			}
		}
	}

	if(! function_exists('cdnBannerFetch')){
		function cdnBannerFetch($folder,$name=''){
			if ($name!='') {
				$path = config('constants.storage.uploads').'/'.$folder.'/'.$name;
				if ($path!='' && \File::exists(public_path($path))) {
					return asset($path);
				}
				return '';
			}else{
				return '';
			}
		}
	}

	if(! function_exists('spaceOutString')){
		function spaceOutString($str){
			return str_replace(' ', '', trim($str));
		}
	}

	if(! function_exists('generatePassword')){
		function generatePassword($type=1,$name='',$mobileno='',$bob=''){
			$password = 'admin1234';
			if($type==1){
				if($name!='' && $mobileno!=''){
					$password 	= substr(spaceOutString(ucfirst(strtolower($name))), 0, 4).substr(trim($mobileno),-5);
				}
			}elseif ($type==2) {
				if($name!=''){
					$bob 		= ($bob!='')?\Carbon\Carbon::parse($bob)->format('dm'):'2001';
					$password 	= substr(spaceOutString(ucfirst(strtolower($name))), 0, 4).$bob;
				}
			}
			return $password;
		}
	}


	if(! function_exists('priceFormat')){
		function priceFormat($price) {
			return number_format((float)$price, 2, ".", "");
		}
	}

	if(! function_exists('dropifyExtensions')){
		function dropifyExtensions($extensions) {
			return str_replace([',','.'], '', $extensions);
		}
	}

	if(! function_exists('dateTimeFormatter')){
		function dateTimeFormatter($date,$is_with_time=0){
		    if($is_with_time == 1){
		        return date(config('constants.date_time_format'),strtotime($date));
		    }else{
		        return date(config('constants.date_format'),strtotime($date));
		    }
		}
	}

	if(! function_exists('getStatusName')){
		function getStatusName($status='') {
			$status_name = '';
			if ($status!=='') {
				if ($status=='0') {
				    $status_name = 'Inactive';
				}elseif ($status=='1') {
				    $status_name = 'Active';
				}else{
				    $status_name = '';
				}
			}
			return $status_name;
		}
	}

	if(! function_exists('getNextAutoID')){
		function getNextAutoID($tableName){
			$statement = DB::select("show table status like '{$tableName}'");
			return $statement[0]->Auto_increment;
		}
	}

	if(! function_exists('generateUserUniqueId')){
		function generateUserUniqueId() {
			$unique_id 	= config('constants.admin.user.code').sprintf("%05d", getNextAutoID("users"));
			if (uniqueIdExists($unique_id) > 0) {
			    return generateUserUniqueId();
			}
			return $unique_id;
		}
	}

	if(! function_exists('uniqueIdExists')){
		function uniqueIdExists($unique_id) {
		    return App\Models\User::where('unique_id',$unique_id)->count();
		}
	}

	if(! function_exists('generateVrRefNo')){
		function generateVrRefNo() {
			$ref_no 	= 'VR'.sprintf("%05d", getNextAutoID("user_vrs"));
			if (vrRefNoExists($ref_no) > 0) {
			    return generateVrRefNo();
			}
			return $ref_no;
		}
	}

	if(! function_exists('vrRefNoExists')){
		function vrRefNoExists($ref_no) {
		    return App\Models\UserVr::where('ref_no',$ref_no)->count();
		}
	}

	if(! function_exists('generateSequenceRefNo')){
		function generateSequenceRefNo() {
			$ref_no 	= 'SQ'.sprintf("%05d", getNextAutoID("sequences"));
			return $ref_no;
		}
	}

?>
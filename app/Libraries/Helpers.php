<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

use View;

class Helpers{

	public static $appName = 'Something geek Shop';

	public static function getDistance($lat1, $lon1, $lat2, $lon2) {

		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$km = round(($miles * 1.609344),2);
		$response = array();
		if($km>=1){
			$response['distance'] = $km;
			$response['unit']     = "km";
		}
		else{
			$response['distance'] = $km*1000;
			$response['unit']     = "m";
		}
		return $response;
	}

	public static function hasPermission($idPermiso)
	{
		if(Auth::User()->nivel==0)
			return true;
		$idRol = Auth::User()->idRol;
		$rol = Rol::with('permisos')->where('idRol',$idRol)->first();

		foreach ($rol->permisos as $permiso) {
			if($permiso->idPermiso==$idPermiso)
				return true;
		}
		return false;
	}

	public static function hasRole($arrRoles)
	{
		if(Auth::user()->nivel<=1&&Auth::user()->idRol==1)
			return true;
		return in_array(Auth::user()->idRol, $arrRoles);
	}


	/**
	 * curlRequest()
	 *
	 * Hace una llamada CURL
	 *
	 * @param array,string,bool
	 * @return variable
	 * 
	 **/

	public static function curlRequest($arr_fields,$url,$get = false){

		$fields_string = '';
		foreach($arr_fields as $key=>$value){
			$fields_string .= $key.'='.$value.'&';
		}

		$fields_string = rtrim($fields_string, '&');

		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, ($get)?$url."?".$fields_string:$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if(!$get){
			curl_setopt($ch,CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		}
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}

    public static function timeAgo($time) {
		$time = time() - $time; // to get the time since that moment
		$time = ($time<1)? 1 : $time;
		$tokens = array (
			31536000 => 'año',
			2592000 => 'mese',
			604800 => 'semana',
			86400 => 'día',
			3600 => 'hora',
			60 => 'minuto',
			1 => 'segundo'
		);

		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		}

	}

	public static function upload(Request $request,$folder,$name,$preserve_filename=false)
	{
		$destinationPath = "storage/";
		if($request->hasFile($name)){
			$destinationPath = public_path($destinationPath.$folder);
			if($preserve_filename){
				$filename = $request->file($name)->getClientOriginalName();
				$filename  = date('y-M-d-h:m:s').'_'.str_replace(' ', '_', $filename);
			}
			else{
				$extension = $request->file($name)->getClientOriginalExtension();
        		$filename  = str_random(6).'.'.$extension;
			}

        	$request->file($name)->move($destinationPath, $filename);
        	return $filename;
		}
		else{
			return null;
		}
	}

	public static function alertData($type,$msg,$generic=null)
	{
		$icon = '';
		switch($type){
			case 'success':
				$icon = 'check';
			break;
			case 'danger':
				$icon = 'close-circle';
			break;
		}
		$message = $msg;
		if(!is_null($generic)){
			switch($generic){
				case 'saveSuccess':
					$message = trans('Se ha agregado correctamente');
				break;
				case 'saveError':
					$message = trans('Ocurrio un error');
				break;
				case 'notAuthorized':
					$message = trans('No autorizado');
				break;
				case 'changeSuccess':
					$message = trans('Cambio exitoso.');
				break;
			}
		}
		return ['type'=>$type,'icon'=>$icon,'msg'=>$message];
	}

	public static function intTOmon($cdn) {
		$cdn = trim($cdn);
		$CadLen = strlen($cdn);
		$Newcdn = "";
		if ($CadLen == 0) {
			$cdn = 0;
		}
		if ($CadLen > 3) {
			$cdnDp = "G" . $cdn;
			$mmc = 0;
			for ($i = $CadLen; $i >= 1; $i--) {
				$Newcdn = $cdnDp{$i} . $Newcdn;
				$mmc++;
				if (($mmc == 3) && ($i > 1)) {
					$mmc = 0;
					$Newcdn = "," . $Newcdn;
				}
			}
			$cdn = $Newcdn;
		}
		$cdn = "$" . $cdn . ".00";
		return $cdn;
	}



	public static function isAdmin()
	{
		return (auth()->check()&&auth()->user()->nivel <= 1);
	}

}

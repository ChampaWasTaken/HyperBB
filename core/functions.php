<?php
function GetPost($a){
	if(isset($_POST[$a])) return $_POST[$a];
	else return false;
}

function GetGet($a){
	if(isset($_GET[$a])) return $_GET[$a];
	else return false;
}

function GetCookie($a){
	if(isset($_COOKIE[$a])) return $_COOKIE[$a];
	else return false;
}

function SetPageTitle($title){
	echo '<title>'. $title .'</title>';
}

function GetReq($a){
	if(isset($_REQUEST[$a])) return $_REQUEST[$a];
	else return false;
}

function Redirect($link){
	echo '<script>location.href = \''. $link .'\';</script>';
}

function WriteLog($file, $string){
	if(file_put_contents('logs/'. $file .'.hlog', "<p><strong>". date('d.m.Y H:i:s') ." |</strong> ". $string ."<p>\r\n", FILE_APPEND | LOCK_EX)) return 1;
	else return 0;
}

function TimeRedirect($link, $time){
	echo '<meta http-equiv="refresh" content="', $time ,';url=',  $link ,'">';
}

function HBBSetCookie($name, $value, $time){
	return setcookie($name, $value, $time, "/", NULL, NULL, TRUE);
}

function read_File($file){
	if(!fopen($file, "r")) return false;
	else {
		$read = fopen($file, "r");
		$data = fread($read, filesize($file) + 1);
		fclose($read);
		return $data;
	}
}
	
function write_File($file, $content){
	$open = fopen($file, "w+");
	fwrite($open, $content);
	fclose($open);
	return true;
}

function FormatUnix($unix){
	global $language;
		
	if(date("d.m.Y") == date("d.m.Y", $unix)) $date = $language['today'];
	else if(date("d.m.Y", strtotime("-24 hours")) == date("d.m.Y", $unix)) $date = $language['yesterday'];
	else $date = date("d.m.Y", $unix);
		
	return ''. $date .' '. $language['at'] .' '. date("H:i", $unix) .'';
}

function GetUserIp(){
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';
	 
	return $ipaddress;
}

function getURL(){
	if(!empty($_SERVER['HTTPS'])) $protocol = 'https://';
	else $protocol = 'http://';
	return $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
}

function DestroyCookies(){
	$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
	foreach($cookies as $cookie){
		$parts = explode('=', $cookie); $cookie_name = trim($parts[0]);
		setcookie($cookie_name, '', time()+1, "/", NULL, NULL, TRUE);
	}
}

function TimeGreeting(){
	$vrijeme = date("H");
	if($vrijeme >= 20 && $vrijeme <= 24) return 'Good evening';
	else if($vrijeme >= 6 && $vrijeme < 12) return 'Good morning';
	else if($vrijeme >= 12 && $vrijeme < 20) return 'Good afternoon';
	else return 'Good morning';
}

function userHash($salt, $string){
	return md5($salt . $string);
}

function GetBrowser(){
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";

		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		}
		elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		}
		elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}

		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		}
		elseif(preg_match('/Firefox/i',$u_agent))
		{
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		}
		elseif(preg_match('/Chrome/i',$u_agent))
		{
			$bname = 'Google Chrome';
			$ub = "Chrome";
		}
		elseif(preg_match('/Safari/i',$u_agent))
		{
			$bname = 'Apple Safari';
			$ub = "Safari";
		}
		elseif(preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Opera';
			$ub = "Opera";
		}
		elseif(preg_match('/Netscape/i',$u_agent))
		{
			$bname = 'Netscape';
			$ub = "Netscape";
		}

		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
		}
		$i = count($matches['browser']);
		if ($i != 1) {
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}
			else {
				$version= $matches['version'][1];
			}
		}
		else {
			$version= $matches['version'][0];
		}

		if ($version==null || $version=="") {$version="?";}

		return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		);
	}
	
	function GetOS(){
		
		$user_agent = $_SERVER['HTTP_USER_AGENT'];

		$os_platform    =   "Unknown OS Platform";

		$os_array       =   array(
								'/windows nt 6.3/i'     =>  'Windows 8.1',
								'/windows nt 6.2/i'     =>  'Windows 8',
								'/windows nt 6.1/i'     =>  'Windows 7',
								'/windows nt 6.0/i'     =>  'Windows Vista',
								'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
								'/windows nt 5.1/i'     =>  'Windows XP',
								'/windows xp/i'         =>  'Windows XP',
								'/windows nt 5.0/i'     =>  'Windows 2000',
								'/windows me/i'         =>  'Windows ME',
								'/win98/i'              =>  'Windows 98',
								'/win95/i'              =>  'Windows 95',
								'/win16/i'              =>  'Windows 3.11',
								'/macintosh|mac os x/i' =>  'Mac OS X',
								'/mac_powerpc/i'        =>  'Mac OS 9',
								'/linux/i'              =>  'Linux',
								'/ubuntu/i'             =>  'Ubuntu',
								'/iphone/i'             =>  'iOS - iPhone',
								'/ipod/i'               =>  'iOS - iPod',
								'/ipad/i'               =>  'iOS - iPad',
								'/android/i'            =>  'Android',
								'/blackberry/i'         =>  'BlackBerry',
								'/webos/i'              =>  'Mobile'
							);

		foreach ($os_array as $regex => $value) { 

			if (preg_match($regex, $user_agent)) {
				$os_platform    =   $value;
			}

		}   

		return $os_platform;

	}
?>
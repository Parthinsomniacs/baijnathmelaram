<?php

function getBrowser()
{
	$u_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

	$bname = 'Unknown';
	$platform = 'Unknown';
	$version = '?';
	$ub = '';

	if (preg_match('/windows phone/i', $u_agent)) {
		$platform = 'Windows Phone';
	} elseif (preg_match('/android/i', $u_agent)) {
		$platform = 'Android';
	} elseif (preg_match('/iphone/i', $u_agent)) {
		$platform = 'iPhone (iOS)';
	} elseif (preg_match('/ipad/i', $u_agent)) {
		$platform = 'iPad (iPadOS)';
	} elseif (preg_match('/ipod/i', $u_agent)) {
		$platform = 'iPod (iOS)';
	} elseif (preg_match('/cros/i', $u_agent)) {
		$platform = 'Chrome OS';
	} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
		$platform = 'macOS';
	} elseif (preg_match('/linux/i', $u_agent)) {
		$platform = 'Linux';
	} elseif (preg_match('/windows|win32/i', $u_agent)) {
		$platform = 'Windows';
	}

	if (preg_match('/Edg/i', $u_agent)) {
		$bname = 'Microsoft Edge';
		$ub = 'Edg';
	} elseif (preg_match('/OPR/i', $u_agent)) {
		$bname = 'Opera';
		$ub = 'OPR';
	} elseif (preg_match('/SamsungBrowser/i', $u_agent)) {
		$bname = 'Samsung Internet';
		$ub = 'SamsungBrowser';
	} elseif (preg_match('/Firefox/i', $u_agent)) {
		$bname = 'Mozilla Firefox';
		$ub = 'Firefox';
	} elseif (preg_match('/Chrome/i', $u_agent)) {
		$bname = 'Google Chrome';
		$ub = 'Chrome';
	} elseif (preg_match('/Safari/i', $u_agent)) {
		$bname = 'Apple Safari';
		$ub = 'Version';
	} elseif (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
		$bname = 'Internet Explorer';
		$ub = 'MSIE';
	} elseif (preg_match('/Trident/i', $u_agent)) {
		$bname = 'Internet Explorer';
		$ub = 'rv';
	}

	if (!empty($ub)) {

		$pattern = '#(?<browser>' . preg_quote($ub, '#') . ')[/ ]+(?<version>[0-9.|a-zA-Z._]+)#';

		if (preg_match($pattern, $u_agent, $matches)) {
			$version = $matches['version'];
		}
	}

	return array(
		'userAgent' => $u_agent,
		'name' => $bname,
		'version' => $version,
		'platform' => $platform
	);
}

$ua = getBrowser();

$browser_name = $ua['name'];
$browser_version = $ua['version'];
$browser_platform = $ua['platform'];
$ip_address = $_SERVER['REMOTE_ADDR'];
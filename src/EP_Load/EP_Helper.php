<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; class EP_Helper { public static function compress_htmlcode($codedata) { goto brx8l; brx8l: $searchdata = array("\57\x5c\76\x5b\136\x5c\123\x20\135\53\x2f\x73", "\x2f\x5b\136\x5c\x53\40\x5d\53\134\74\x2f\x73", "\57\50\x5c\x73\x29\x2b\x2f\x73"); goto EvYe4; CtWFC: return $codedata; goto pd5FT; EvYe4: $replacedata = array("\76", "\74", "\134\61"); goto v1t4r; v1t4r: $codedata = preg_replace($searchdata, $replacedata, $codedata); goto CtWFC; pd5FT: } public static function getDriveId($url) { preg_match("\x2f\x5b\55\x5c\167\x5d\173\x32\65\54\175\x2f\151\163", $url, $id); return $id[0]; } public static function getDailyMotionId($url) { preg_match("\x2f\x64\x61\x69\154\171\x6d\x6f\164\x69\x6f\156\134\56\143\157\x6d\x5c\x2f\50\56\52\x3f\51\166\x69\144\x65\157\x5c\x2f\50\x2e\x2a\x29\57\151\x73", $url, $matches); return $matches[2]; } public static function getVimeoId($url) { goto bGXFK; CU_2_: return $matches[1]; goto faEU8; bGXFK: $regex = "\x7e\xa\11\x9\x9\x23\40\115\141\x74\x63\x68\40\126\151\155\145\157\40\x6c\x69\156\x6b\x20\x61\156\x64\x20\x65\x6d\142\145\144\40\x63\x6f\x64\x65\12\x9\11\11\x28\x3f\x3a\74\151\x66\x72\x61\155\x65\x20\133\x5e\x3e\x5d\52\x73\x72\143\75\42\51\77\40\x20\x20\40\40\40\40\x20\x20\x23\40\111\146\40\151\146\162\141\155\x65\40\155\141\164\x63\150\40\x75\160\x20\x74\x6f\x20\146\151\x72\x73\164\x20\x71\x75\x6f\x74\x65\x20\x6f\x66\40\x73\162\x63\xa\x9\11\x9\x28\77\x3a\40\x20\40\x20\x20\40\40\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x23\40\x47\x72\157\165\160\40\x76\151\x6d\x65\x6f\x20\x75\x72\154\xa\x9\11\11\11\x9\150\164\x74\160\x73\77\x3a\134\57\134\x2f\40\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\43\x20\x45\151\x74\x68\145\162\x20\150\164\164\160\40\x6f\162\40\150\164\x74\x70\163\xa\x9\x9\11\x9\x9\50\77\x3a\x5b\x5c\167\x5d\x2b\134\56\51\52\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\x23\x20\x4f\160\164\151\157\x6e\141\154\40\163\x75\142\144\x6f\x6d\141\x69\x6e\x73\xa\11\x9\11\11\x9\x76\x69\x6d\145\157\134\56\x63\x6f\155\x20\x20\40\40\x20\x20\x20\40\40\x20\40\40\40\40\x23\x20\115\141\x74\x63\x68\40\166\x69\x6d\x65\157\x2e\x63\157\x6d\12\x9\x9\11\11\x9\50\77\x3a\x5b\134\57\134\167\x5d\x2a\x5c\x2f\166\x69\144\145\157\163\77\x29\77\x20\40\x20\x23\40\117\x70\164\x69\x6f\x6e\x61\x6c\x20\166\x69\144\145\157\x20\163\165\x62\40\144\x69\x72\145\x63\x74\x6f\162\x79\x20\164\x68\151\x73\40\x68\x61\x6e\x64\154\x65\x73\40\x67\162\157\x75\160\163\40\154\x69\156\153\x73\40\141\154\x73\157\xa\x9\x9\11\11\x9\134\57\x20\x20\40\x20\40\x20\40\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x23\x20\123\154\141\163\150\40\x62\x65\146\157\x72\x65\x20\111\x64\xa\x9\11\11\x9\x9\x28\x5b\60\55\71\135\x2b\x29\40\40\40\40\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\43\40\x24\61\x3a\40\x56\x49\104\x45\117\137\x49\x44\x20\x69\163\40\156\x75\155\145\162\x69\x63\xa\11\11\x9\x9\11\133\136\134\x73\x5d\52\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\43\x20\116\x6f\x74\40\141\x20\163\160\141\x63\145\12\11\11\11\51\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\40\40\40\x20\x23\40\x45\156\144\x20\x67\162\x6f\165\x70\12\x9\11\x9\x22\77\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\40\40\40\x23\x20\115\141\164\x63\x68\40\x65\x6e\x64\40\x71\165\157\164\x65\40\151\x66\40\x70\141\162\164\40\x6f\146\x20\163\162\143\12\x9\x9\x9\x28\77\72\x5b\x5e\76\x5d\x2a\76\74\57\151\x66\162\x61\155\x65\76\51\x3f\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\43\40\115\141\x74\x63\150\40\x74\150\145\40\145\156\x64\x20\x6f\x66\x20\164\150\x65\40\151\x66\x72\x61\155\x65\12\x9\11\11\50\x3f\x3a\74\160\x3e\56\x2a\x3c\57\x70\76\x29\77\40\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\43\x20\x4d\x61\x74\143\x68\40\141\x6e\171\x20\164\151\164\x6c\x65\40\x69\156\146\x6f\x72\x6d\x61\x74\x69\157\156\40\163\164\x75\x66\146\xa\11\x9\x9\x7e\151\170"; goto Ya6ph; Ya6ph: preg_match($regex, $url, $matches); goto CU_2_; faEU8: } public static function getYoutubeId($url) { goto MhkPP; eKVIl: return $matches[1]; goto rFU0R; MhkPP: $regex = "\x7e\xa\x9\x9\x23\x20\x4d\141\164\143\x68\x20\131\157\165\164\x75\x62\145\40\154\x69\x6e\x6b\40\141\x6e\x64\x20\x65\155\142\145\144\40\143\x6f\144\x65\12\11\11\x28\77\x3a\x9\x9\11\x9\x20\43\40\107\x72\x6f\x75\x70\40\x74\157\x20\155\141\164\x63\150\x20\145\155\142\x65\144\x20\143\x6f\x64\x65\x73\xa\x9\x9\40\x20\x20\50\x3f\x3a\x3c\151\146\162\141\155\145\x20\x5b\x5e\76\x5d\x2a\x73\x72\143\x3d\42\51\77\x9\40\x23\x20\111\x66\x20\151\146\x72\x61\155\x65\x20\155\141\x74\x63\x68\40\x75\x70\40\x74\157\x20\x66\x69\162\163\x74\x20\x71\165\x6f\164\x65\x20\x6f\146\40\x73\162\143\xa\x9\11\40\40\x20\x7c\50\x3f\72\11\x9\11\x9\40\x23\40\x47\162\157\x75\160\40\164\157\x20\x6d\x61\164\143\150\x20\151\146\40\x6f\x6c\144\x65\162\40\145\x6d\x62\x65\144\12\11\x9\40\x20\40\40\40\40\50\x3f\72\x3c\x6f\142\x6a\145\143\x74\x20\56\52\76\51\77\11\11\x20\x23\x20\115\141\164\x63\150\x20\x6f\160\145\156\151\x6e\x67\x20\117\x62\152\145\x63\x74\x20\x74\141\147\12\x9\x9\x20\x20\x20\x20\x20\40\50\x3f\72\74\x70\141\x72\x61\x6d\x20\56\52\74\57\160\141\162\x61\x6d\76\x29\x2a\40\40\x20\40\x20\x23\x20\115\141\164\x63\x68\x20\141\154\154\40\x70\x61\162\141\155\40\164\141\147\163\xa\x9\11\x20\40\40\x20\x20\x20\x28\77\72\x3c\x65\155\142\x65\144\40\133\136\x3e\135\x2a\x73\162\x63\x3d\42\51\x3f\x20\40\40\x20\40\43\40\x4d\x61\x74\x63\150\x20\x65\x6d\142\145\x64\x20\x74\x61\147\x20\164\x6f\40\x74\x68\x65\x20\146\151\x72\x73\164\x20\x71\165\157\164\145\x20\x6f\x66\40\x73\162\x63\12\11\x9\40\x20\x20\x29\77\11\11\11\x9\40\43\x20\x45\156\144\x20\157\154\x64\x65\162\x20\145\x6d\x62\145\x64\x20\143\157\x64\x65\x20\x67\x72\x6f\165\x70\12\x9\11\51\x3f\x9\11\11\x9\40\x23\x20\x45\x6e\x64\x20\x65\x6d\x62\x65\144\x20\143\157\x64\145\40\147\x72\x6f\165\x70\x73\12\11\x9\50\77\72\11\x9\11\x9\x20\43\40\x47\162\x6f\x75\160\40\171\157\165\164\165\142\145\40\x75\162\x6c\12\x9\x9\40\x20\40\x68\x74\x74\160\163\x3f\x3a\134\57\134\57\11\x9\40\x20\40\x20\x20\x20\40\x20\40\43\40\x45\151\x74\x68\145\x72\x20\150\164\x74\160\40\157\x72\x20\150\x74\164\x70\163\xa\11\11\40\40\40\50\77\x3a\133\x5c\167\135\53\x5c\x2e\x29\52\11\11\40\x20\40\x20\x20\x20\x20\40\40\x23\x20\x4f\160\164\151\157\x6e\x61\x6c\40\x73\165\x62\144\x6f\x6d\x61\151\156\163\xa\x9\x9\x20\x20\x20\50\x3f\x3a\40\40\x20\40\40\40\40\x20\40\40\40\40\x20\x20\40\11\40\x20\40\x20\40\x20\x20\40\40\x23\x20\107\x72\x6f\165\x70\x20\x68\x6f\163\164\x20\x61\154\164\145\162\156\141\164\151\166\x65\163\56\12\x9\x9\x20\x20\x20\40\x20\40\40\171\157\165\x74\165\x5c\x2e\x62\x65\57\40\x20\40\x20\x20\x20\x9\x20\40\x20\40\x20\40\x20\x20\40\x23\40\x45\151\x74\150\145\162\x20\x79\157\165\x74\165\x2e\x62\x65\x2c\xa\11\11\x20\x20\x20\x20\40\x20\40\174\40\171\x6f\x75\164\165\x62\145\x5c\56\x63\x6f\x6d\11\x9\40\43\x20\x6f\162\40\171\x6f\x75\x74\165\142\x65\56\143\x6f\155\12\11\x9\x20\x20\x20\40\40\40\x20\174\x20\171\157\165\x74\x75\142\145\55\156\157\143\x6f\x6f\153\x69\145\x5c\x2e\143\x6f\155\11\x20\x23\x20\157\x72\x20\171\x6f\x75\164\x75\142\x65\55\x6e\x6f\143\x6f\x6f\153\x69\x65\56\x63\x6f\155\xa\11\11\40\40\x20\51\x9\11\11\x9\40\43\40\105\x6e\x64\40\110\157\x73\x74\x20\107\162\157\x75\160\12\x9\x9\40\x20\x20\50\x3f\x3a\134\123\x2a\x5b\x5e\134\x77\134\x2d\134\163\135\x29\77\x20\40\40\x20\x20\x20\40\x9\x20\x23\40\x45\x78\164\162\x61\40\x73\164\x75\x66\x66\x20\165\160\x20\164\157\x20\126\111\104\x45\x4f\137\x49\x44\xa\11\x9\x20\40\x20\x28\x5b\134\x77\x5c\55\135\173\x31\x31\x7d\51\x9\x9\40\40\x20\40\x20\40\x20\x20\x20\x23\40\44\x31\x3a\40\126\111\104\105\117\137\x49\104\40\x69\x73\x20\x6e\165\x6d\145\162\x69\143\12\x9\x9\40\40\x20\133\136\134\x73\x5d\52\x9\11\11\x20\x23\40\116\157\164\x20\x61\x20\163\x70\x61\143\145\12\x9\x9\51\11\11\x9\x9\40\x23\x20\105\156\x64\x20\x67\x72\x6f\165\160\xa\11\11\x22\x3f\x9\11\x9\11\x20\x23\x20\115\x61\164\x63\x68\40\x65\x6e\x64\x20\161\165\x6f\164\145\40\151\x66\40\x70\x61\162\x74\40\157\x66\x20\163\x72\x63\12\x9\11\50\77\x3a\x5b\x5e\76\x5d\x2a\76\x29\77\11\x9\11\40\43\40\115\x61\x74\143\x68\40\141\x6e\x79\40\x65\x78\164\x72\x61\40\x73\x74\x75\x66\x66\x20\165\160\40\x74\157\x20\x63\154\x6f\163\x65\x20\x62\x72\141\143\145\12\11\11\50\77\72\11\11\x9\11\40\43\40\x47\162\x6f\x75\x70\x20\x74\x6f\x20\x6d\x61\x74\x63\x68\x20\x6c\141\x73\164\x20\x65\x6d\x62\145\x64\x20\143\x6f\144\x65\12\11\11\40\x20\40\x3c\57\x69\x66\x72\141\x6d\x65\76\11\11\x20\x20\40\x20\40\40\x20\x20\40\43\x20\115\141\164\143\150\40\164\x68\x65\x20\x65\156\144\40\157\x66\x20\x74\150\145\x20\151\146\162\x61\x6d\145\12\11\x9\40\x20\x20\x7c\x3c\x2f\x65\x6d\x62\145\x64\x3e\x3c\x2f\157\x62\152\x65\x63\164\x3e\11\40\x20\40\40\x20\40\40\x20\x20\43\x20\157\162\x20\x4d\141\164\x63\x68\x20\x74\150\145\40\x65\156\144\40\157\146\x20\x74\x68\x65\x20\x6f\154\144\145\162\40\x65\155\x62\x65\x64\12\x9\11\51\77\11\11\x9\x9\40\43\x20\105\156\144\x20\107\x72\157\165\x70\x20\x6f\x66\40\x6c\141\x73\164\x20\142\x69\164\40\x6f\x66\x20\145\155\x62\x65\x64\40\x63\157\x64\145\xa\x9\x9\x7e\151\x78"; goto GeVSN; GeVSN: preg_match($regex, $url, $matches); goto eKVIl; rFU0R: } public static function getVideoThumbnailByUrl($url, $format = "\163\x6d\141\154\x6c") { goto NEGBg; pAJNa: n2svp: goto YtMnK; oGhas: goto bYVva; goto a8NYn; uYcMP: if (!("\x6d\x65\x64\151\165\155" === $format)) { goto GmAfa; } goto f0Te5; kdJS7: $hash = unserialize(EP_Helper::cURL("\x68\164\164\x70\x3a\x2f\57\166\x69\x6d\145\157\56\x63\x6f\155\x2f\141\160\x69\x2f\x76\62\57\166\151\144\x65\157\57{$id}\x2e\160\150\160")); goto G4l3c; NEGBg: if (strpos($url, "\x79\x6f\x75\x74\x75\142\x65")) { goto D37H6; } goto nzPcw; YxBtu: $id = EP_Helper::getYoutubeId($url); goto uYcMP; YtMnK: $id = EP_Helper::getVimeoId($url); goto kdJS7; nzPcw: if (strpos($url, "\x76\x69\155\x65\x6f")) { goto n2svp; } goto TyLva; a8NYn: mdmvR: goto UiFY0; oL1Aa: goto bYVva; goto pAJNa; aeOMb: return "\x68\164\x74\x70\x73\72\x2f\57\x69\155\x67\x2e\171\x6f\165\x74\165\x62\145\x2e\x63\157\x6d\x2f\x76\x69\x2f" . $id . "\57\144\145\x66\x61\x75\154\164\56\152\160\147"; goto oL1Aa; UiFY0: $url = str_replace("\x3f\141\165\x74\157\x50\154\141\171\x3d\61", "\57", $url); goto zXyrC; G4l3c: return $hash[0]["\x74\150\x75\155\142\x6e\x61\x69\x6c\137\154\x61\162\147\145"]; goto oGhas; Oh25O: GmAfa: goto aeOMb; f0Te5: return "\x68\x74\x74\x70\163\x3a\x2f\x2f\x69\155\x67\x2e\x79\x6f\x75\x74\165\x62\x65\56\x63\x6f\155\57\166\x69\x2f" . $id . "\x2f\x68\x71\x64\145\x66\141\x75\x6c\164\x2e\x6a\160\147"; goto Oh25O; PiTkG: goto bYVva; goto idG6p; zXyrC: return "\150\x74\x74\160\163\72" . str_replace("\x65\x6d\x62\145\144", "\x74\x68\x75\x6d\142\x6e\141\x69\x6c", $url); goto X7Eej; TyLva: if (strpos($url, "\144\x61\x69\x6c\x79\155\x6f\x74\x69\157\x6e")) { goto mdmvR; } goto PiTkG; X7Eej: bYVva: goto xTBoL; idG6p: D37H6: goto YxBtu; xTBoL: return false; goto bOD74; bOD74: } public static function getVideoLocation($url) { goto IooaD; GYVE8: goto PNEu0; goto rneph; SA4Tr: return "\150\164\x74\160\163\x3a\57\57\167\x77\167\x2e\144\x61\x69\x6c\171\x6d\157\x74\x69\x6f\156\x2e\x63\x6f\155\57\x65\x6d\x62\145\x64\x2f\x76\x69\x64\x65\157\57" . $id; goto leoYi; zQ53E: return "\x68\164\x74\160\163\72\x2f\x2f\x70\x6c\141\x79\145\162\56\x76\151\155\145\x6f\x2e\143\157\x6d\x2f\x76\151\x64\x65\x6f\x2f" . $id; goto GYVE8; KXOpk: DHcRh: goto vS38v; leoYi: PNEu0: goto VlHl2; nnXgy: UmoEP: goto e_8Y5; hFp18: $id = EP_Helper::getDailyMotionId($url); goto SA4Tr; e_8Y5: $id = EP_Helper::getVimeoId($url); goto zQ53E; H4oKd: if (strpos($url, "\144\141\x69\x6c\x79\155\x6f\x74\x69\x6f\156")) { goto Ptiit; } goto w4pbb; rneph: Ptiit: goto hFp18; OeGJL: if (strpos($url, "\x76\151\x6d\x65\157")) { goto UmoEP; } goto H4oKd; VlHl2: return false; goto XVHdM; w4pbb: goto PNEu0; goto KXOpk; vS38v: $id = EP_Helper::getYoutubeId($url); goto yF0MW; YeofR: goto PNEu0; goto nnXgy; yF0MW: return "\150\164\x74\x70\163\72\57\57\167\x77\167\56\171\157\165\164\x75\x62\x65\56\x63\x6f\155\x2f\x65\x6d\x62\x65\144\x2f" . $id; goto YeofR; IooaD: if (strpos($url, "\x79\157\x75\164\165\142\145")) { goto DHcRh; } goto OeGJL; XVHdM: } public static function cURL($url) { goto oejBM; v688b: $response = wp_safe_remote_get($url, $args); goto pNf4U; oejBM: $args = array("\x68\x65\x61\144\145\x72\163" => array("\x43\157\x6e\156\x65\x63\164\151\157\156" => "\x6b\145\145\160\x2d\x61\154\x69\166\x65", "\x4b\145\145\160\x2d\x41\154\151\166\145" => "\x33\60\x30", "\x41\x63\x63\145\160\x74\55\103\150\x61\162\163\x65\x74" => "\111\123\117\x2d\x38\70\x35\71\x2d\61\54\165\164\146\x2d\70\x3b\161\x3d\60\56\x37\x2c\52\x3b\x71\75\x30\x2e\x37", "\101\143\x63\x65\160\x74\x2d\x4c\141\156\x67\165\x61\x67\145" => "\x65\156\x2d\165\x73\x2c\145\156\x3b\161\75\60\x2e\65", "\x55\x73\x65\x72\55\101\147\145\156\x74" => "\115\x6f\172\151\154\154\x61\57\65\x2e\x30\40\50\x69\120\150\157\156\x65\x3b\40\x43\x50\x55\40\x69\120\x68\x6f\x6e\x65\40\x4f\123\x20\61\60\137\x33\x5f\x31\x20\154\x69\x6b\145\40\x4d\141\x63\x20\x4f\123\40\x58\51\x20\x41\x70\x70\154\x65\127\x65\142\113\x69\x74\57\x36\x30\63\x2e\61\x2e\x33\x30\x20\50\x4b\110\124\x4d\114\x2c\x20\x6c\x69\x6b\x65\40\107\145\x63\153\157\51\40\126\x65\x72\x73\151\x6f\x6e\57\x31\60\56\x30\x20\115\x6f\142\151\154\145\x2f\x31\64\105\63\60\x34\x20\x53\141\146\x61\162\x69\x2f\66\x30\x32\56\61"), "\x74\151\155\145\157\x75\x74" => 30, "\163\163\154\x76\145\162\151\x66\x79" => false, "\162\145\144\x69\162\x65\x63\x74\x69\x6f\x6e" => 5); goto v688b; ESKUl: return ''; goto lv9xg; lv9xg: aXVEk: goto bMHTR; bMHTR: return wp_remote_retrieve_body($response); goto LyLbB; pNf4U: if (!is_wp_error($response)) { goto aXVEk; } goto ESKUl; LyLbB: } }

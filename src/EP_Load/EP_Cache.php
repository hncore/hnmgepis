<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; class EP_Cache { public $timeCache; public $folderCache; public function __construct() { goto mFu3c; fcURc: global $wp_filesystem; goto dTvNU; vr63S: if (!function_exists("\x57\120\x5f\106\151\x6c\145\163\171\x73\164\145\x6d")) { require_once ABSPATH . "\x77\x70\55\141\x64\155\x69\x6e\x2f\151\156\143\154\x75\x64\x65\163\x2f\146\151\154\x65\56\x70\150\160"; } goto fcURc; dTvNU: WP_Filesystem(); goto LUYo9; mFu3c: $this->folderCache = HNMG_CACHE; goto Pcgji; Pcgji: if (is_dir($this->folderCache)) { goto qygZT; } goto A_lqO; LUYo9: $this->wp_filesystem = $wp_filesystem; goto dHSJY; yiUQW: $this->timeCache = 3600; goto vr63S; nXS0V: qygZT: goto yiUQW; A_lqO: wp_mkdir_p($this->folderCache); goto nXS0V; dHSJY: } public function register() { goto H_6gu; vb4Ry: xktcc: goto o6lV5; e2PRs: add_filter("\x48\116\x4d\x47\55\x74\x61\142\163", [$this, "\150\x6e\x61\160\x69\163\157\144\x65\x5f\x63\141\x63\150\145\137\x6d\145\x6e\x75"]); goto yzR6F; RPe9v: add_action("\x77\x70\137\141\x6a\x61\x78\137\x6e\157\160\x72\x69\x76\x5f\144\145\154\x65\x74\145\x5f\x61\154\154\137\x63\x61\x63\150\145", [$this, "\144\145\154\145\164\145\x5f\x61\154\x6c\137\x63\141\143\x68\x65"]); goto vb4Ry; yzR6F: add_filter("\x48\116\115\x47\55\x70\x61\147\x65\163", [$this, "\150\156\141\x70\151\163\157\144\145\137\143\x61\x63\x68\x65\x5f\155\145\x6e\x75"]); goto HhRgc; HhRgc: add_action("\x77\x70\x5f\x61\152\141\170\x5f\x64\145\x6c\x65\164\145\137\x61\x6c\x6c\137\x63\141\143\x68\145", [$this, "\x64\x65\x6c\x65\164\145\137\141\154\x6c\137\143\x61\143\150\x65"]); goto RPe9v; X3euR: add_action("\x77\160\x5f\x61\x6a\141\x78\137\162\x65\x73\145\x74\x5f\160\x6c\x61\171\145\x72\x5f\x63\x61\143\150\145", [$this, "\x72\145\163\145\164\x5f\x70\x6c\x61\x79\x65\x72\137\x63\x61\143\x68\x65"]); goto DoHru; H_6gu: if (!(HNCORE()->get_product_status() == "\143\x6f\156\x6e\x65\x63\164\x65\144")) { goto xktcc; } goto X3euR; DoHru: add_action("\x77\x70\x5f\141\x6a\141\170\x5f\x6e\157\x70\162\151\x76\137\162\145\163\x65\164\x5f\x70\x6c\141\x79\145\162\x5f\x63\141\143\x68\145", [$this, "\162\x65\163\145\164\137\160\154\x61\171\x65\x72\x5f\143\141\x63\150\145"]); goto e2PRs; o6lV5: } public function hnapisode_cache_menu($nav) { $nav["\x31\x32\x30"] = array("\x73\154\165\x67" => "\x68\156\x6d\147\x2d\x63\141\143\150\145\x2d\155\x61\x6e\x61\147\145\x72", "\x63\141\x6c\154\x62\x61\x63\x6b" => array($this, "\x68\156\155\147\137\143\x61\x63\150\x65\x5f\155\141\156\x61\147\145\x5f\x70\x61\x67\x65"), "\164\x69\164\154\x65" => __("\x48\x4e\115\x47\x20\103\141\x63\x68\x65", "\x68\x6e\155\147\x65\x70\151\x73"), "\151\143\157\156" => "\x66\141\x2d\160\154\141\x79\x2d\143\151\162\x63\x6c\x65"); return $nav; } public function hnmg_cache_manage_page() { goto COgkN; COgkN: $cache_count = json_decode($this->cacheCount()); goto xp3gk; xp3gk: $get_cache = json_decode($this->getCache()); goto fuBHl; fuBHl: echo view("\x48\x4e\x4d\x47\x3a\72\x6c\x61\171\x6f\x75\x74\163\x2e\143\141\143\150\x65", compact("\143\x61\x63\x68\x65\x5f\143\157\165\x6e\164", "\147\x65\164\x5f\x63\x61\143\x68\x65")); goto FP1RC; FP1RC: } public function delete_all_cache() { goto KyYyx; y8TlG: $total_cache = $result["\164\x6f\x74\x61\154\137\x63\141\x63\x68\x65"] ?? 0; goto OnLBA; q6hVy: wp_send_json_success(["\x73\x74\141\164\x75\163" => $status, "\164\157\x74\141\x6c\x5f\143\x61\x63\150\x65" => $total_cache, "\164\x69\x6d\145\137\154\151\155\151\x74" => $time_limit, "\143\x61\143\x68\145\137\144\x65\154\x65\x74\x65\x64" => $cache_deleted]); goto Cl2Sg; lGDAD: $cache_deleted = $result["\143\x61\x63\150\x65\x5f\144\145\x6c\145\x74\x65\x64"] ?? 0; goto q6hVy; JCMDB: $status = "\123\165\143\143\x65\x73\163\146\165\154\154\171"; goto y8TlG; OnLBA: $time_limit = $result["\x74\x69\x6d\x65\137\x6c\151\x6d\x69\164"] ?? 0; goto lGDAD; Cl2Sg: wp_die(); goto zNQe8; KyYyx: $result = json_decode($this->delAllCache(0), true); goto JCMDB; zNQe8: } public function delAllCache($timeCache) { goto UH0bb; fgioJ: foreach ($getDirContents as $key => $value) { goto HRPZ6; Dh3JG: Q1dJK: goto OoauC; c0WqD: l0MwH: goto Tlc5b; HRPZ6: if (!(strpos($value, "\56\164\x78\x74") !== false)) { goto l0MwH; } goto s0KSd; kcWnA: if (!($timeCache <= time() - filemtime($value))) { goto wyPPV; } goto g94Ww; osMGG: $result["\x73\x74\x61\164\x75\163"] = 1; goto Dh3JG; qKH0X: if (!unlink($value)) { goto Q1dJK; } goto osMGG; s0KSd: $i++; goto kcWnA; Tlc5b: GnYY_: goto hVw0N; OoauC: wyPPV: goto c0WqD; g94Ww: $j++; goto qKH0X; hVw0N: } goto RKoRS; noOhb: $result["\143\141\143\x68\x65\137\143\x6f\165\x6e\164"] = $i - $j; goto Rknkh; rTcdZ: return json_encode($result); goto ccRQo; UH0bb: $result = array("\x73\x74\x61\x74\165\x73" => 0, "\x74\x6f\x74\x61\x6c\137\143\141\143\x68\145" => 0, "\164\x69\155\145\x5f\154\x69\155\x69\164" => $timeCache, "\x63\141\x63\x68\x65\x5f\144\145\154\x65\164\145\x64" => 0, "\143\x61\x63\x68\145\x5f\x63\x6f\x75\x6e\164" => 0); goto t1Srn; SlCma: $this->removeEmptySubFolders($this->folderCache); goto rTcdZ; Rknkh: IEzsl: goto SlCma; BtAYD: $result["\143\x61\x63\150\x65\137\144\x65\154\145\164\x65\144"] = $j; goto noOhb; JPjeI: if (!$getDirContents) { goto IEzsl; } goto EY3S5; EY3S5: $i = $j = 0; goto fgioJ; xjOwZ: $result["\164\x6f\x74\x61\154\137\143\141\x63\150\145"] = $i; goto BtAYD; RKoRS: GVp8X: goto xjOwZ; t1Srn: $getDirContents = $this->getDirContents($this->folderCache); goto JPjeI; ccRQo: } public function reset_player_cache() { goto Vbsus; R0yux: $data = json_decode($film_meta, true); goto P8MUv; oY07R: $cacheData = $this->delCache($link); goto RJPwz; nGjit: $post_id = isset($_POST["\x70\x6f\x73\164\x5f\x69\x64"]) ? (int) $_POST["\x70\x6f\163\164\137\x69\x64"] : ''; goto VFAz0; RJPwz: wp_send_json($cacheData); goto ZyaYy; VFAz0: $episode_slug = isset($_POST["\145\x70\x69\x73\x6f\144\145\137\x73\x6c\x75\x67"]) ? str_replace("\55", "\x5f", wp_strip_all_tags($_POST["\x65\x70\x69\x73\157\x64\145\137\x73\154\x75\147"])) : ''; goto B8Xtr; Vbsus: $server = isset($_POST["\163\145\x72\x76\145\x72\x5f\x69\x64"]) ? (int) $_POST["\163\x65\x72\166\x65\162\137\x69\x64"] : ''; goto nGjit; P8MUv: $link = $data[$server - 1]["\150\x61\165\156\x6d\x6f\166\151\145\163\137\163\145\x72\166\145\162\x5f\x64\x61\x74\141"][$episode_slug]["\x68\141\165\156\x6d\x6f\x76\x69\x65\x73\x5f\x65\x70\x5f\x6c\x69\156\153"]; goto oY07R; B8Xtr: $film_meta = get_haunmovies($post_id, HNMG_EPS, true); goto R0yux; ZyaYy: } public function readCache($name) { goto wqXeM; GS2aC: $result = ''; goto NNVua; sL0ow: if (!($this->timeCache > time() - filemtime($file))) { goto J5zhG; } goto mtnq0; siA4w: g5oVz: goto YwV4E; wqXeM: $name = md5(md5($name)); goto GS2aC; Wk9VB: $result = file_get_contents($file); goto O4pMV; mtnq0: $result = file_get_contents($file); goto Oam2c; wC6dB: if ($this->timeCache != '') { goto WsJzC; } goto Wk9VB; Oam2c: J5zhG: goto utzAU; kGgyq: if (!file_exists($file)) { goto g5oVz; } goto wC6dB; O4pMV: goto sxMjC; goto ALtZI; NNVua: $createFolderCache = $this->createFolderCache($name); goto OZVfF; utzAU: sxMjC: goto siA4w; ALtZI: WsJzC: goto sL0ow; OZVfF: $file = $this->folderCache . "\x2f" . $createFolderCache . "\x2f" . $name . "\x2e\164\x78\x74"; goto kGgyq; YwV4E: return $result; goto c2SX6; c2SX6: } public function getCache() { goto ZkG2v; yLyUx: foreach ($getDirContents as $key => $value) { goto ORGiS; ORGiS: if (!strpos($value, "\x2e\x74\x78\x74")) { goto gWGNm; } goto L38nj; L38nj: $result[] = array("\x66\x69\x6c\145" => $value); goto sv1PI; JsDW2: D3hOp: goto nnu9x; sv1PI: gWGNm: goto JsDW2; nnu9x: } goto Ql01r; nQRFx: $i = 0; goto RQuI4; RQuI4: if (!$getDirContents) { goto Lio98; } goto yLyUx; Ql01r: v9qEr: goto uie1I; ARfef: $getDirContents = $this->getDirContents($this->folderCache); goto nQRFx; ZkG2v: $result = array(); goto ARfef; uie1I: return json_encode($result); goto J7hst; J7hst: Lio98: goto y3sKo; y3sKo: } public function saveCache($name, $data) { goto fiCtF; v4kKH: WHfJ5: goto tRcfP; QCZJu: if (is_dir($this->folderCache)) { goto H6tRs; } goto zrZLk; lRq3j: $dir = $this->folderCache . "\57" . $createFolderCache; goto CHntM; Gjng5: $this->wp_filesystem->put_contents($index_file, "\74\x3f\160\150\x70\40\57\57\40\123\x69\154\145\x6e\x63\x65\x20\151\x73\40\147\x6f\x6c\144\x65\156\56", FS_CHMOD_FILE); goto pZwhS; gYyTf: $index_file = WP_CONTENT_DIR . "\x2f\151\x6e\x64\x65\170\56\x70\x68\160"; goto Gjng5; F0W7L: zd17e: goto lRq3j; M9Pz1: if (chmod($this->folderCache, 0777)) { goto zd17e; } goto Cyg2D; zrZLk: mkdir($this->folderCache, 0777, true); goto nPPoh; tRcfP: $this->wp_filesystem->put_contents($file, $data, FS_CHMOD_FILE); goto gYyTf; nPPoh: H6tRs: goto M9Pz1; CHntM: $file = $dir . "\57" . $name . "\x2e\x74\x78\164"; goto bD2cl; Cyg2D: chmod($this->folderCache, 0777); goto F0W7L; AxOw4: mkdir($dir, 0777, true); goto v4kKH; bD2cl: if (is_dir($dir)) { goto WHfJ5; } goto AxOw4; fiCtF: $name = md5(md5($name)); goto iskmy; iskmy: $createFolderCache = $this->createFolderCache($name); goto QCZJu; pZwhS: } public function delCache($name) { goto JgqiX; H6aOy: $result = array("\x73\x74\141\x74\165\163" => 0, "\x72\x65\x73\x75\154\164" => "\104\145\x6c\145\x74\145\x20\145\162\x72\157\162"); goto ONBzU; adMBL: $name = md5(md5($name)); goto RL8Mk; cCnIR: KN21O: goto QeqQZ; ky8es: $result = array("\163\x74\141\x74\x75\x73" => 0, "\x72\x65\x73\x75\154\164" => "\114\x69\x6e\153\x20\x6e\157\x74\40\145\170\151\163\x74\x73"); goto xBYwW; ONBzU: goto KN21O; goto vdLBQ; QeqQZ: ZYLGv: goto hJADJ; hJADJ: return $result; goto lePPt; vQi3t: $file = $this->folderCache . "\x2f" . $createFolderCache . "\x2f" . $name . "\56\164\x78\164"; goto oFOyy; xBYwW: goto ZYLGv; goto mQj2u; mQj2u: YdFaX: goto vuJGH; oFOyy: if (file_exists($file)) { goto YdFaX; } goto ky8es; JgqiX: $result = ''; goto adMBL; vuJGH: if (unlink($file)) { goto t0YRd; } goto H6aOy; vdLBQ: t0YRd: goto OFr17; RL8Mk: $createFolderCache = $this->createFolderCache($name); goto vQi3t; OFr17: $result = array("\163\164\x61\164\165\x73" => 1, "\162\x65\x73\x75\x6c\x74" => "\104\145\154\x65\164\145\x64"); goto cCnIR; lePPt: } public function cacheCount() { goto W3AAV; ez3Bc: $getDirContents = $this->getDirContents($this->folderCache); goto uU3A8; SHpTO: rUI9o: goto ULNpZ; lbL0Q: foreach ($getDirContents as $key => $value) { goto PWM4V; XE2mc: $result["\164\x6f\x74\x61\x6c\137\x63\x61\143\150\145"] = $i; goto PnaLP; Gt5gS: nYuth: goto FO8Xt; PWM4V: if (!strpos($value, "\x2e\164\x78\x74")) { goto FwbtQ; } goto F59w3; XnKK7: FwbtQ: goto Gt5gS; F59w3: $result["\x72\x65\163\165\x6c\164"] = 1; goto XE2mc; PnaLP: $i++; goto XnKK7; FO8Xt: } goto K22RC; ULNpZ: return json_encode($result); goto pFGtc; uU3A8: $i = 1; goto L8z0F; L8z0F: if (!$getDirContents) { goto rUI9o; } goto lbL0Q; K22RC: GM6s0: goto SHpTO; W3AAV: $result = array(); goto ez3Bc; pFGtc: } private function createFolderCache($name) { goto f2csT; f2csT: $folder1 = substr($name, 0, 2); goto p3tT3; p3tT3: $folder2 = substr($name, 2, 2); goto kQy07; kQy07: return $folder1 . "\x2f" . $folder2; goto lW3sU; lW3sU: } private function getDirContents($dir, &$results = array()) { goto HCzag; JN6aM: ib30V: goto W0kN5; HCzag: $files = scandir($dir); goto cm_5P; cm_5P: foreach ($files as $key => $value) { goto N2mjL; MKto1: goto wAs0y; goto LDiHv; dO06Q: $this->getDirContents($path, $results); goto s2elR; fJHYe: wAs0y: goto HyMmU; LDiHv: kbJ_7: goto AMvjN; eEKUt: dMgL_: goto MKto1; HyMmU: LWabe: goto yimHn; Pk0wf: if (!($value != "\56" && $value != "\x2e\56")) { goto dMgL_; } goto dO06Q; AMvjN: $results[] = $path; goto fJHYe; N2mjL: $path = realpath($dir . DIRECTORY_SEPARATOR . $value); goto xpw6M; xpw6M: if (!is_dir($path)) { goto kbJ_7; } goto Pk0wf; s2elR: $results[] = $path; goto eEKUt; yimHn: } goto JN6aM; W0kN5: return $results; goto wZqIU; wZqIU: } private function removeEmptySubFolders($path) { goto mAWyN; RJAuY: return $empty && @rmdir($path); goto fNUS5; nkYdE: foreach (glob($path . DIRECTORY_SEPARATOR . "\52") as $file) { $empty &= is_dir($file) && $this->removeEmptySubFolders($file); gMnSN: } goto dtQ4g; mAWyN: $empty = true; goto nkYdE; dtQ4g: VOmq2: goto RJAuY; fNUS5: } }

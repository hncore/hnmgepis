<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; use HNMG\EP_Load\EP_GetHost; class EP_Getlink { public function init($url = null) { $this->set_url($url); $this->load_host(); } public function set_url($url) { $this->_url = $url; } public function get_url() { return $this->_url; } public function load_host() { goto F320n; gifwL: $this->host = new $class_name(); goto IY_vx; ETjYi: if (file_exists(get_template_directory() . "\141\160\x70\x2f\120\x6c\x61\x79\x65\x72\x2f\x68\141\165\156\55" . $host . "\56\x70\150\x70")) { goto jkypm; } goto Qgu3z; IsOWA: $host = str_replace("\167\167\x77\56", '', $host); goto ETjYi; IY_vx: kty_6: goto i2CEr; Qr4Gd: $host = isset($info["\x68\x6f\x73\164"]) ? $info["\150\x6f\x73\164"] : "\144\145\146\x61\165\x6c\x74"; goto IsOWA; LoQFU: $info = parse_url($this->_url); goto Qr4Gd; CFRVN: jkypm: goto paNnF; i2CEr: PclHT: goto sFn2X; paNnF: include_once get_template_directory() . "\141\160\x70\57\x50\154\x61\171\x65\x72\x2f\x68\141\165\156\55" . $host . "\x2e\x70\x68\160"; goto mne3m; Qgu3z: $this->host = new EP_GetHost(); goto MD1JU; mne3m: $class_name = "\150\141\165\x6e\137" . str_replace(array("\x2d", "\x2e"), "\137", $host); goto gifwL; F320n: if (!isset($this->_url)) { goto PclHT; } goto LoQFU; MD1JU: goto kty_6; goto CFRVN; sFn2X: } public function get_content($url) { goto CZT1Z; CZT1Z: $args = array("\x68\x65\x61\x64\145\162\x73" => array("\x43\157\156\x6e\145\143\x74\151\x6f\x6e" => "\x6b\145\145\160\x2d\141\x6c\151\x76\145", "\113\x65\145\160\x2d\x41\154\151\166\145" => "\x33\60\x30", "\101\143\143\x65\160\164\55\103\x68\x61\162\163\x65\164" => "\111\123\x4f\55\x38\70\65\x39\55\61\54\165\x74\146\x2d\x38\x3b\161\75\60\56\x37\x2c\52\73\161\75\60\56\x37", "\101\x63\x63\x65\x70\164\55\x4c\141\156\147\x75\x61\147\145" => "\x65\156\55\165\x73\54\145\156\73\161\x3d\x30\56\65", "\x55\163\145\162\x2d\x41\147\x65\156\164" => "\115\157\172\x69\x6c\x6c\141\x2f\x35\x2e\60\40\x28\127\x69\156\144\157\x77\x73\x20\x4e\x54\40\66\56\61\73\40\127\x4f\x57\66\64\51\40\101\160\160\154\x65\x57\x65\x62\x4b\x69\x74\57\x35\63\67\56\x33\x36\x20\50\113\110\x54\115\x4c\x2c\x20\x6c\x69\x6b\x65\40\x47\145\143\153\x6f\51\x20\103\x68\162\x6f\155\145\57\63\x37\56\60\56\x32\x30\66\62\x2e\61\62\x34\x20\x53\141\146\141\x72\x69\57\65\63\67\x2e\63\x36", "\x52\145\x66\x65\x72\145\162" => "\150\x74\x74\160\x73\x3a\x2f\57\147\157\157\147\154\x65\56\143\x6f\x6d"), "\164\x69\x6d\x65\x6f\x75\x74" => 60, "\x73\x73\154\x76\x65\x72\x69\146\x79" => false, "\162\145\x64\151\x72\x65\143\x74\151\157\156" => 5); goto jqVc0; UKDoO: if (!is_wp_error($response)) { goto dh0Dd; } goto U5rSq; q7CSc: dh0Dd: goto l7cwF; U5rSq: return ''; goto q7CSc; jqVc0: $response = wp_safe_remote_get($url, $args); goto UKDoO; l7cwF: return wp_remote_retrieve_body($response); goto NvbFh; NvbFh: } }

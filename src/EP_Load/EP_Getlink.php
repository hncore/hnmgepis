<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; use HNMG\EP_Load\EP_GetHost; class EP_Getlink { public function init($url = null) { $this->set_url($url); $this->load_host(); } public function set_url($url) { $this->_url = $url; } public function get_url() { return $this->_url; } public function load_host() { goto o5OfP; Z6AL2: $host = str_replace("\167\167\x77\x2e", '', $host); goto ikqQr; KJetm: Qru6S: goto OZ2oj; qY6VX: PTz1r: goto YjSln; nepOn: $this->host = new $class_name(); goto M1nMm; M1nMm: JMKwT: goto qY6VX; o5OfP: if (!isset($this->_url)) { goto PTz1r; } goto zCxgI; yi0_h: $host = isset($info["\150\157\163\164"]) ? $info["\x68\x6f\163\164"] : "\x64\x65\146\141\x75\154\x74"; goto Z6AL2; ikqQr: if (file_exists(get_template_directory() . "\141\x70\160\x2f\120\x6c\x61\171\145\x72\57\x68\x61\165\156\x2d" . $host . "\56\160\x68\x70")) { goto Qru6S; } goto ddzrd; zCxgI: $info = parse_url($this->_url); goto yi0_h; VVQF1: goto JMKwT; goto KJetm; OZ2oj: include_once get_template_directory() . "\141\x70\x70\x2f\120\x6c\x61\171\x65\162\x2f\150\141\x75\156\x2d" . $host . "\x2e\x70\x68\160"; goto TVfR5; TVfR5: $class_name = "\150\x61\x75\156\137" . str_replace(array("\x2d", "\x2e"), "\x5f", $host); goto nepOn; ddzrd: $this->host = new EP_GetHost(); goto VVQF1; YjSln: } public function get_content($url) { goto WQPaA; d8Uod: $response = wp_safe_remote_get($url, $args); goto yNNCZ; yNNCZ: if (!is_wp_error($response)) { goto Bse0d; } goto A_ONH; GJsDB: return wp_remote_retrieve_body($response); goto G1PWL; WQPaA: $args = array("\150\145\141\144\x65\162\x73" => array("\103\x6f\x6e\156\x65\x63\164\151\x6f\x6e" => "\x6b\x65\x65\160\55\141\x6c\x69\x76\145", "\113\x65\x65\x70\55\x41\x6c\151\166\x65" => "\x33\x30\x30", "\101\143\x63\x65\x70\164\55\x43\x68\x61\162\x73\145\164" => "\x49\123\x4f\55\x38\70\x35\x39\55\61\x2c\x75\164\x66\55\x38\x3b\161\75\x30\x2e\67\54\52\73\x71\75\x30\56\67", "\x41\x63\143\145\x70\x74\x2d\114\x61\x6e\x67\x75\141\147\145" => "\x65\x6e\55\165\163\x2c\x65\156\73\161\75\x30\56\65", "\x55\x73\x65\x72\x2d\101\x67\x65\156\164" => "\115\157\x7a\151\154\154\x61\57\x35\56\60\x20\x28\x57\x69\x6e\x64\157\x77\163\40\116\x54\40\66\x2e\61\x3b\x20\127\x4f\127\x36\x34\x29\x20\x41\160\x70\x6c\x65\127\145\142\113\151\x74\57\65\x33\67\56\x33\x36\x20\50\x4b\x48\x54\115\114\x2c\40\154\151\x6b\x65\x20\x47\x65\143\153\x6f\x29\40\103\x68\x72\x6f\155\x65\57\63\67\56\60\56\x32\60\x36\x32\x2e\61\x32\64\x20\123\141\x66\x61\x72\x69\x2f\x35\x33\x37\x2e\63\66", "\x52\x65\x66\x65\x72\x65\162" => "\150\x74\164\x70\x73\x3a\57\57\x67\157\x6f\147\154\x65\x2e\x63\157\155"), "\164\151\155\x65\x6f\x75\x74" => 60, "\163\x73\154\x76\x65\162\151\x66\171" => false, "\x72\x65\x64\151\162\145\x63\164\151\x6f\156" => 5); goto d8Uod; t4pIq: Bse0d: goto GJsDB; A_ONH: return ''; goto t4pIq; G1PWL: } }

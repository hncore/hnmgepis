<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; use function Roots\view; use HNMG\EP_Load\EP_Cache; use HNMG\EP_Load\EP_Getlink; use HNMG\EP_Load\EP_Helper; class EP_PLayer { public $cache; public $getlink; public function __construct() { goto ZmT_t; PUkgE: add_action("\167\x70\137\x66\x6f\x6f\164\145\162", [$this, "\150\x6e\141\x64\x64\137\x6c\x69\x67\x68\x74\157\x75\x74"], 100); goto lGi8N; G1LJP: add_action("\x68\x61\x75\156\x5f\160\154\141\x79\145\x72\x5f\144\x65\x66\141\165\154\x74", [$this, "\150\x61\x75\x6e\137\160\x6c\141\171\145\x72\137\x62\157\x78"], 10, 1); goto PUkgE; ZmT_t: $this->cache = new EP_Cache(); goto auHqv; FS5yq: add_shortcode("\150\141\x75\x6e\120\154\x61\x79\x65\x72", [$this, "\x68\x61\165\156\x42\165\151\154\144\x50\154\x61\x79\x65\162\123\150\x6f\x74\x63\157\x64\145"]); goto sRAmx; auHqv: $this->getlink = new EP_Getlink(); goto FS5yq; sRAmx: add_shortcode("\150\x61\x75\x6e\x5f\x64\x65\164\x65\x63\164\137\163\x65\162\x76\x65\x72", [$this, "\150\x61\165\156\x5f\144\145\164\x65\x63\x74\137\163\x65\162\x76\x65\162"], 10, 0); goto G1LJP; lGi8N: } public function hnadd_lightout() { goto ioVYK; FOCKI: soaxP: goto gadVD; bOjRd: echo "\x3c\x64\x69\x76\x20\x69\x64\x3d\42\150\156\x2d\x6c\151\147\x68\x74\x6f\165\x74\x22\x3e\74\57\x64\151\166\76"; goto FOCKI; ioVYK: if (!is_single()) { goto soaxP; } goto bOjRd; gadVD: } public function haun_player_box($meta) { goto UUqAb; UUqAb: global $post; goto g0xkf; HfjdB: $player_autonext = isset($player_options["\152\167\137\x70\x6c\141\171\145\x72\x5f\x61\x75\164\157\156\145\170\164"]) ? $player_options["\x6a\x77\x5f\160\154\141\x79\x65\x72\137\141\165\x74\x6f\156\x65\x78\x74"] : false; goto UuzR_; m1NVW: $player_options = hnmg_value("\150\x61\x75\x6e\x5f\152\x77\137\160\154\141\x79\145\x72\x5f\x6f\x70\164\151\x6f\156\x73"); goto HfjdB; UuzR_: $check = isset($meta["\150\141\x75\156\x5f\x6d\x6f\166\151\x65\x5f\163\164\141\164\165\x73"]) ? $meta["\x68\141\165\156\137\x6d\x6f\x76\151\x65\x5f\x73\164\141\x74\165\x73"] : ''; goto NfanI; co5LP: $is_adult = hnmg_value("\151\163\x5f\141\144\x75\154\x74", HNMG_META); goto m1NVW; g0xkf: $is_copyright = hnmg_value("\151\x73\137\143\157\160\x79\162\151\147\x68\x74", HNMG_META); goto co5LP; m0WZn: echo view("\110\x4e\115\x47\72\x3a\154\x61\171\157\x75\x74\x73\x2e\x6c\x6f\141\x64\160\154\141\x79\x65\x72", compact("\x70\157\x73\164", "\151\163\x5f\143\157\160\x79\x72\x69\147\x68\164", "\x69\x73\x5f\x61\144\x75\154\x74", "\x63\150\145\143\x6b")); goto GBkKi; LlNK5: echo $ajax_html; goto IF_QF; GBkKi: $ajax_html = ob_get_clean(); goto LlNK5; NfanI: ob_start(); goto m0WZn; IF_QF: } public function haun_detect_server($link, $post_id) { goto Ban2v; AYWgK: h2rh2: goto SZ9pw; MliOH: if ($doccahe) { goto gfU4p; } goto p75F0; XjeTB: gfU4p: goto TZgUt; MuQDE: return apply_filters("\150\141\x75\x6e\137\160\x6c\x61\171\x65\162\137\163\157\165\162\x63\145\163", (object) ["\x70\157\x73\x74\x5f\151\x64" => $post_id, "\163\157\x75\x72\x63\145\163" => $dataplayer, "\154\151\156\x6b" => $this->getlink->_url]); goto TXS3v; fGZb6: if (hnmg_value("\160\154\141\171\x65\162\137\143\141\x63\x68\x65")) { goto h2rh2; } goto p2Osw; Ban2v: $this->cache->timeCache = hnmg_value("\160\154\141\x79\145\162\137\143\141\143\150\x65\x5f\164\x69\155\x65"); goto W3HvM; FOZlL: goto WjreW; goto AYWgK; hr21Z: goto JJ62u; goto XjeTB; xUsTU: $this->cache->saveCache($link, json_encode($dataplayer)); goto hr21Z; SZ9pw: $doccahe = $this->cache->readCache($link); goto MliOH; p75F0: $dataplayer = $this->getlink->host->get_link($this->getlink->_url); goto xUsTU; JoFob: JJ62u: goto P2QWJ; P2QWJ: WjreW: goto MuQDE; p2Osw: $dataplayer = $this->getlink->host->get_link($this->getlink->_url); goto FOZlL; W3HvM: $this->getlink->init($link); goto fGZb6; TZgUt: $dataplayer = json_decode($doccahe); goto JoFob; TXS3v: } public function haun_detect_embed($args) { goto cqPCW; z3StL: $id = EP_Helper::getDailyMotionId($args["\154\x69\x6e\153"]); goto zbwuA; HI8q3: sY6Oq: goto Q9Z4H; lnZd6: $detectembed = str_replace("\166\151\145\167", "\160\162\145\x76\x69\145\x77", $args["\154\x69\x6e\153"]); goto PY0Qh; dKcn9: goto U1F_9; goto H1gXG; F2jrs: VC0Uh: goto dKcn9; XmBM9: if (strpos($args["\154\x69\x6e\x6b"], "\56\x6d\63\x75\70") === FALSE) { goto c5fck; } goto hXXXB; t3_gx: $id = EP_Helper::getYoutubeId($args["\154\151\156\153"]); goto OVa4E; F3hTZ: echo apply_filters("\150\141\165\x6e\x5f\145\x6d\142\x65\144\x5f\x70\x6c\141\171\x65\162", $this->load_embed($linkembed)); goto KjM9s; WEIp1: M2Voc: goto z3StL; tEFS3: if (strpos($args["\x6c\x69\156\153"], "\x76\151\155\145\x6f")) { goto bZqJ0; } goto jQmV2; EdC3K: goto sY6Oq; goto dzmfJ; OVa4E: $detectembed = "\x2f\57\167\x77\167\x2e\x79\x6f\x75\x74\x75\x62\x65\x2e\143\x6f\155\x2f\145\x6d\x62\145\x64\x2f" . $id; goto EdC3K; hXXXB: if (strpos($args["\154\x69\x6e\x6b"], "\x64\x72\x69\x76\145")) { goto BQiJo; } goto A2lPP; PY0Qh: G57Pm: goto faIkR; XO3AW: BQiJo: goto lnZd6; YdYfJ: v1n3V: goto PLGhe; QScKN: $id = EP_Helper::getVimeoId($args["\x6c\x69\x6e\x6b"]); goto aP3bs; f6Xxd: $detectembed = $args["\154\151\x6e\x6b"]; goto HI8q3; faIkR: goto sY6Oq; goto kALVi; Q9Z4H: $haun_embed_url = apply_filters("\x68\141\165\156\x5f\145\x6d\142\145\144\x5f\165\162\154", (object) ["\x70\157\x73\x74\x5f\x69\144" => $args["\160\x6f\x73\x74\137\151\144"], "\x6c\151\x6e\x6b" => $detectembed, "\x73\x75\x62\x74\x69\x74\x6c\x65" => $args["\x73\x75\142\164\151\164\154\145"], "\163\x75\142\154\141\x62\x65\x6c" => $args["\x73\x75\x62\154\x61\x62\x65\154"], "\143\x75\163\x74\x6f\x6d\x5f\x76\x61\162" => @$args["\143\165\x73\x74\x6f\x6d\x5f\166\141\162"]]); goto wb_uk; PLGhe: $detectembed = str_replace("\166\151\x64\x65\x6f", "\x76\151\144\x65\157\x65\x6d\x62\145\x64", $args["\x6c\151\156\153"]); goto F2jrs; A2lPP: if (strpos($args["\154\151\x6e\x6b"], "\x64\x61\x69\x6c\x79\x6d\x6f\x74\x69\x6f\156")) { goto M2Voc; } goto tEFS3; OXvT5: goto VC0Uh; goto YdYfJ; uTZcR: U1F_9: goto Ja4wC; FwvMn: goto G57Pm; goto XO3AW; zbwuA: $detectembed = "\x2f\57\167\167\167\56\x64\x61\x69\x6c\x79\155\157\x74\151\157\x6e\x2e\x63\157\x6d\x2f\145\x6d\142\145\144\x2f\166\x69\144\x65\157\57" . $id; goto MPmqu; cqPCW: $detectembed = ''; goto VE6G8; H1gXG: bZqJ0: goto QScKN; wb_uk: $linkembed = has_filter("\150\141\x75\156\x5f\145\x6d\x62\x65\144\x5f\165\x72\x6c") ? $haun_embed_url : $haun_embed_url->link; goto F3hTZ; kALVi: SheIe: goto t3_gx; VE6G8: if (strpos($args["\154\x69\156\153"], "\171\157\x75\164\165\x62\x65")) { goto SheIe; } goto XmBM9; Ja4wC: goto jdgbO; goto WEIp1; dzmfJ: c5fck: goto f6Xxd; MPmqu: jdgbO: goto FwvMn; jQmV2: if (strpos($args["\x6c\x69\156\153"], "\x6f\x6b\56\162\165\x2f\x76\x69\x64\145\x6f\x2f")) { goto v1n3V; } goto VmUnk; aP3bs: $detectembed = "\57\57\x70\x6c\x61\x79\x65\x72\x2e\x76\x69\155\x65\157\x2e\x63\157\x6d\57\x76\151\144\145\x6f\57" . $id; goto uTZcR; VmUnk: $detectembed = $args["\154\x69\156\153"]; goto OXvT5; KjM9s: } public function load_embed($linkembed) { goto G21bl; CZlCM: $haun_embed_player = "\74\144\x69\166\40\151\144\75\x22\150\141\165\156\x2d\145\155\142\x65\x64\x22\x20\x63\x6c\x61\x73\163\75\42\x72\145\154\x61\x74\x69\x76\x65\x20\x77\x2d\146\x75\154\154\x20\x68\55\60\x20\x70\142\55\x5b\65\x36\x2e\62\65\45\x5d\x22\40\163\164\171\x6c\145\x3d\x22\x64\x69\x73\160\154\141\x79\72\x20\x6e\x6f\x6e\145\73\x22\76\12\x9\11\x9\x9\74\151\x66\162\x61\155\145\x20\x63\x6c\x61\163\163\x3d\42\x61\x62\x73\157\154\x75\164\x65\x20\x74\x6f\x70\55\x30\x22\x20\163\143\162\157\154\x6c\151\156\147\x3d\x22\x6e\157\x22\40\x66\x72\x61\155\145\x62\157\162\144\x65\162\x3d\x22\x30\x22\x20\x77\151\x64\x74\150\75\42\61\60\x30\x25\x22\x20\x68\x65\x69\147\150\x74\75\x22\x31\60\60\x25\42\x20\x61\x6c\154\x6f\x77\x66\x75\x6c\x6c\163\143\x72\145\x65\x6e\75\x22\x74\162\165\145\42\x20\x77\145\x62\x6b\151\x74\141\x6c\x6c\x6f\167\146\x75\x6c\x6c\163\x63\162\x65\x65\x6e\75\42\x74\162\165\x65\42\x20\155\x6f\x7a\x61\x6c\154\157\167\x66\x75\x6c\x6c\x73\143\162\145\145\x6e\75\x22\x74\x72\165\145\x22\x20\x73\x72\x63\x3d\42" . $linkembed . "\42\x20\141\154\154\x6f\x77\146\165\154\154\x73\143\x72\x65\145\x6e\x3e\74\57\151\146\162\x61\155\145\76\xa\x9\x9\x9\74\x2f\144\x69\x76\76\xa\x9\x9\11\x3c\x64\x69\x76\x20\151\144\x3d\42\x68\x61\x75\156\55\x70\154\141\x79\x65\162\x22\76\74\x2f\x64\151\166\76\x3c\163\143\162\x69\160\164\x3e\x4c\157\141\144\137\105\155\142\x65\144\50\x29\74\57\163\143\x72\x69\160\164\x3e"; goto X4i7D; T0KdW: xrEoN: goto CZlCM; pnWRq: goto WmV5n; goto T0KdW; X4i7D: WmV5n: goto O28C3; SNBz2: $haun_embed_player = "\x3c\x64\x69\x76\x20\143\x6c\x61\163\x73\x3d\42\x72\x65\x6c\x61\164\x69\x76\145\x20\167\x2d\146\165\x6c\x6c\40\150\x2d\60\40\x70\142\x2d\x5b\65\x36\56\62\65\x25\x5d\x22\x3e\xa\x9\11\11\x9\x3c\x69\146\x72\141\155\x65\x20\x63\x6c\141\163\163\75\42\x61\x62\x73\x6f\x6c\x75\x74\145\40\x74\x6f\160\x2d\60\x22\40\163\x72\x63\75\42" . $linkembed . "\x22\40\x73\143\x72\x6f\154\x6c\x69\156\x67\75\42\x6e\x6f\x22\40\x66\x72\141\x6d\145\x62\157\x72\x64\145\162\75\42\x30\x22\40\x77\151\144\164\150\75\42\x31\60\60\45\42\x20\150\x65\151\147\150\x74\x3d\42\x31\60\60\45\x22\x20\x61\x6c\154\157\x77\146\x75\x6c\x6c\x73\x63\162\x65\x65\156\75\42\x74\162\x75\145\x22\x20\x77\x65\x62\x6b\x69\x74\x61\x6c\154\157\x77\x66\165\154\x6c\x73\x63\162\x65\145\156\x3d\42\164\162\x75\145\x22\40\x6d\157\172\x61\x6c\154\157\167\x66\x75\x6c\154\163\143\162\x65\145\x6e\75\x22\164\162\x75\x65\42\x20\x61\x6c\154\157\167\x3d\42\141\165\164\x6f\x70\154\141\171\x22\76\74\x2f\x69\x66\162\141\155\x65\x3e\xa\11\x9\x9\74\57\x64\151\166\76"; goto pnWRq; O28C3: return $haun_embed_player; goto GtrAL; G21bl: if (hnmg_value("\x6a\167\137\x70\154\141\x79\145\x72\x5f\x73\150\x6f\167\x5f\x61\144") && hnmg_value("\x6a\x77\137\163\x68\157\x77\x5f\145\x6d\142\x65\x64\137\x61\144\163")) { goto xrEoN; } goto SNBz2; GtrAL: } public function haunPlayer($post_id, $episode, $server, $sub_server = '', $custom_var = '') { goto Y2CRG; obCaF: $checksubtitle = isDomain($jw_player_default_subtitle) ? $jw_player_default_subtitle : home_url($jw_player_default_subtitle); goto jA2Of; TNKAJ: gnPJd: goto BTYsU; duaH9: if (!$haunmovies_listsv) { goto jZl3F; } goto bDbAf; j9Uyg: if (!$subtitle_listt) { goto Us3YH; } goto yhZ7o; X90vP: if ($sub_server) { goto n8Gh5; } goto vnemI; wEIPj: tL3mO: goto QJo8Z; krSf5: $subtitleb .= "\135"; goto wW27K; NIDGm: foreach ($subtitle_listt as $key => $value) { goto pS16n; pbyXf: $subtitleb .= "\173\146\151\x6c\145\72\40\x22" . trim($value["\x68\141\x75\156\x6d\x6f\166\151\x65\163\137\145\x70\137\163\x75\142\137\146\151\154\x65"]) . "\x22\x2c\x6c\141\142\x65\x6c\72\x20\42" . trim($value["\150\141\x75\x6e\155\157\x76\x69\145\x73\x5f\145\160\137\x73\165\142\137\x6c\141\x62\x65\x6c"]) . "\42\x2c\153\x69\156\x64\x3a\40\x22\143\x61\160\x74\151\157\x6e\x73\42\54\x64\x65\x66\141\165\x6c\x74\72\x20" . $default . "\175\54"; goto PPiAL; pS16n: $default = $key == 0 ? "\164\x72\165\145" : "\x66\x61\x6c\x73\145"; goto pbyXf; PPiAL: hIV4v: goto Hm97H; Hm97H: } goto VSR2Z; Bn7DZ: wp_send_json($datasub); goto ke4cP; ofnhG: SAXOq: goto NIDGm; YLNkE: goto Yrsyo; goto ofnhG; ZlCA5: goto Xzbxz; goto A2q7G; nC7p6: $subtitleb = "\x5b"; goto WvehF; A3g0W: jZl3F: goto Yaz2M; oQKY1: $datasub["\144\141\x74\x61"] = ["\x73\164\x61\x74\165\163" => true, "\x73\157\x75\162\x63\145\163" => $html]; goto Bn7DZ; rU2if: $datasub["\x64\141\x74\141"] = ["\163\164\141\164\165\x73" => true, "\143\157\x64\x65" => 403]; goto VKWLb; iizVd: goto XVvbS; goto TNKAJ; wW27K: $haunmovies_ep_sub_file = $haunmovies_ep_sub_label = []; goto j9Uyg; J9Vo0: $this->haunPlayerInit($post_id, $sublink, $subtype, $subtitleb, $haunmovies_ep_sub_file, $haunmovies_ep_sub_label, $custom_var); goto A3g0W; HQx2e: $subtitle_listt = $subtitle_list ?: $data[0]["\150\141\165\x6e\x6d\157\166\x69\x65\x73\137\163\x65\162\x76\145\x72\137\144\141\164\x61"][$episode]["\150\141\x75\x6e\155\157\166\x69\145\163\137\x65\x70\137\x73\x75\x62\163"] ?? ''; goto nC7p6; jA2Of: $subtitleb .= "\173\146\151\154\x65\72\40\x22" . trim($checksubtitle) . "\42\54\x6c\141\x62\145\154\x3a\40\42\104\x65\x66\141\x75\x6c\164\x22\x2c\153\x69\156\144\x3a\40\x22\x63\x61\x70\x74\151\157\x6e\x73\42\x2c\x64\145\x66\x61\165\x6c\164\72\40\x74\x72\165\x65\x7d"; goto OX6B3; UC3iO: if (!$jw_player_default_subtitle) { goto rTPgb; } goto obCaF; LKfcB: goto XVvbS; goto fj7d8; MW1RB: Us3YH: goto X90vP; vnemI: $this->haunPlayerInit($post_id, $dataPlayer["\150\141\165\156\155\157\x76\x69\145\163\137\x65\x70\x5f\154\x69\x6e\153"], $dataPlayer["\x68\x61\165\156\x6d\157\166\151\x65\163\137\145\160\x5f\x74\171\x70\145"], $subtitleb, $haunmovies_ep_sub_file, $haunmovies_ep_sub_label, $custom_var); goto ZlCA5; QJo8Z: $haunmovies_ep_sub_file = implode("\174", $haunmovies_ep_sub_file); goto T4CA2; T4CA2: $haunmovies_ep_sub_label = implode("\174", $haunmovies_ep_sub_label); goto MW1RB; Yaz2M: Xzbxz: goto XFqJf; yhZ7o: foreach ($subtitle_listt as $value) { goto haFoq; haFoq: $haunmovies_ep_sub_file[] = $value["\x68\x61\x75\156\x6d\157\x76\151\x65\x73\x5f\x65\x70\137\x73\x75\142\137\146\151\x6c\145"]; goto WG0oz; WG0oz: $haunmovies_ep_sub_label[] = $value["\150\141\165\x6e\155\157\166\x69\x65\163\137\145\x70\x5f\x73\x75\x62\x5f\154\141\x62\145\154"]; goto e_5pC; e_5pC: XjG02: goto cZs9T; cZs9T: } goto wEIPj; VKWLb: wp_send_json($datasub); goto TZbye; VSR2Z: RbWqS: goto SSVja; UgnVg: $haunmovies_listsv = $dataPlayer["\x68\141\x75\x6e\155\157\166\x69\x65\x73\x5f\x65\x70\x5f\x6c\x69\163\x74\163\166"] ?? ''; goto duaH9; Y2CRG: ob_start(); goto iK2lw; bDdDq: $jw_player_default_subtitle = hnmg_value("\x6a\167\137\x70\x6c\x61\171\x65\162\137\x64\x65\x66\141\165\154\x74\137\x73\165\142\164\x69\164\x6c\x65") ?? ''; goto UC3iO; iTcaU: $dataPlayer = $data[$server - 1]["\150\141\x75\156\x6d\x6f\166\x69\145\x73\x5f\x73\145\x72\x76\145\162\137\144\x61\x74\141"][$episode]; goto iizVd; CByLa: $data = json_decode(stripslashes($metaPost), true); goto S6u5g; GC2WL: XVvbS: goto A3daZ; WIs4w: $subtype = $haunmovies_listsv[$sub_server - 1]["\150\x61\x75\x6e\x6d\157\x76\151\x65\163\137\x65\160\x5f\154\151\163\164\x73\x76\x5f\164\x79\160\x65"] ?? ''; goto J9Vo0; S6u5g: if ($data && isset($data[$server - 1]["\x68\x61\165\x6e\x6d\x6f\166\x69\145\x73\x5f\x73\x65\162\x76\x65\x72\x5f\x64\x61\164\141"][$episode])) { goto Ozk2X; } goto Wy3Uj; WvehF: if (!empty($subtitle_listt)) { goto SAXOq; } goto bDdDq; A3daZ: $subtitle_list = $dataPlayer["\x68\141\x75\156\x6d\157\x76\x69\145\163\137\145\160\137\163\x75\142\163"] ?? ''; goto HQx2e; OX6B3: rTPgb: goto YLNkE; WKs_U: Yrsyo: goto krSf5; Wy3Uj: if ($data && isset($data[0]["\150\x61\x75\x6e\x6d\157\166\x69\x65\163\x5f\x73\x65\x72\x76\145\x72\x5f\144\141\x74\x61"][$episode])) { goto gnPJd; } goto rU2if; A2q7G: n8Gh5: goto UgnVg; SSVja: $subtitleb = rtrim($subtitleb, "\54"); goto WKs_U; BTYsU: $dataPlayer = $data[0]["\150\141\x75\x6e\x6d\157\166\151\x65\x73\x5f\x73\145\x72\x76\145\162\x5f\x64\x61\x74\x61"][$episode]; goto GC2WL; TZbye: return; goto LKfcB; iK2lw: $metaPost = get_post_meta($post_id, HNMG_EPS, true); goto CByLa; bDbAf: $sublink = $haunmovies_listsv[$sub_server - 1]["\x68\x61\165\156\x6d\157\166\x69\x65\163\x5f\x65\x70\137\x6c\151\163\164\163\166\137\x6c\x69\x6e\153"] ?? ''; goto WIs4w; fj7d8: Ozk2X: goto iTcaU; XFqJf: $html = ob_get_clean(); goto oQKY1; ke4cP: } public function haunPlayerInit($post_id, $episode_link, $episode_type, $tracks, $list_sub, $list_sub_label, $custom_var = '') { goto ffZH5; J0Nd1: goto F43xP; goto fCPyd; gZDN_: echo "\74\x64\x69\x76\x20\143\x6c\141\163\x73\75\x22\141\154\145\x72\164\x20\x61\x6c\145\x72\164\x2d\144\141\x6e\x67\x65\162\x20\x74\145\x78\x74\55\x63\x65\x6e\164\145\x72\x22\40\162\x6f\154\145\75\x22\x61\x6c\x65\162\x74\x22\76\x45\160\x69\x73\x6f\x64\145\40\x54\x79\x70\x65\x20\42\74\163\x74\162\x6f\x6e\x67\76" . $episode_type . "\x3c\57\163\164\x72\x6f\156\147\76\x22\40\x6b\150\303\264\156\147\x20\x74\xe1\xbb\x93\156\x20\164\xe1\272\xa1\x69\x2e\x3c\x62\x72\x3e\x20\304\x90\xe1\xbb\x83\x20\164\341\xba\xa1\157\40\145\x70\151\163\157\144\x65\x20\164\x79\x70\145\x20\155\341\273\233\151\x2c\x20\x76\165\x69\40\x6c\xc3\262\156\147\x20\x74\162\x75\171\x20\143\341\xba\255\160\40\104\x61\163\x68\x62\x6f\141\162\x64\x20\55\76\x20\104\141\x6e\x68\40\163\xc3\xa1\143\150\x20\160\x68\151\x6d\40\55\76\x20\105\160\x69\163\x6f\144\145\40\124\171\160\145\163\74\57\144\151\x76\76"; goto ZBJWe; YvvRp: cBn5P: goto u1v1P; fCPyd: riPzz: goto n9yJ9; WaDUn: yTVY0: goto OI0eR; A0Be1: if ($haun_type_filter->type == "\152\167\160\x6c\x61\x79\145\x72") { goto eVcdw; } goto FrJsb; RApwS: eBPen: goto uFcgv; Kfna2: HR__b: goto rX0Us; n9yJ9: $this->haun_detect_embed(["\x70\x6f\x73\164\x5f\x69\x64" => $post_id, "\154\x69\156\153" => $haun_type_filter->link, "\x73\165\142\x74\151\x74\x6c\x65" => $haun_type_filter->subtitle, "\163\165\142\x6c\x61\142\x65\x6c" => $haun_type_filter->sublabel]); goto a8T1m; do6yv: bJdvZ: goto hbTYi; QUvq0: ppYna: goto tCgaw; pYm5v: lDVLW: goto o73dm; x92ic: $this->haun_detect_embed(["\160\x6f\163\164\x5f\151\144" => $post_id, "\x6c\151\156\153" => $episode_link, "\163\165\142\164\x69\164\x6c\145" => $list_sub, "\163\x75\x62\x6c\141\142\145\x6c" => $list_sub_label]); goto k0vf9; zBdzO: goto eBPen; goto YG847; tCgaw: $sources = $haun_custom_player_types->sources; goto u5IDl; cVYWs: $sources = json_encode($result); goto j89a1; ZBJWe: goto LFGtr; goto Slf7y; EhYi7: AzMsk: goto pYm5v; eH5ue: gjT0A: goto cxSlA; MvWz1: $haun_custom_player_types = apply_filters("\150\141\165\156\x5f\x63\x75\x73\x74\157\x6d\137\x70\x6c\141\x79\x65\x72\x5f\164\171\160\145\x73", (object) ["\x70\x6f\x73\x74\x5f\x69\144" => $post_id, "\x6c\151\156\153" => $episode_link, "\145\x70\151\163\x6f\144\145\137\x74\171\160\x65" => $episode_type, "\160\154\141\171\x65\162\137\164\x79\160\145" => '', "\x73\x75\142\x74\x69\x74\154\x65" => $list_sub, "\163\165\142\154\141\142\x65\154" => $list_sub_label, "\163\157\165\x72\x63\x65\x73" => '', "\x63\x75\163\x74\157\155\x5f\166\141\x72" => $custom_var]); goto GxyTq; bc8ix: $this->haunBuildPlayer($post_id, $sources, $tracks, $haun_custom_player_types->link); goto cpMKz; Sih6h: goto HR__b; goto IYdRb; Urjpi: goto HuLCu; goto NSuPO; NSuPO: SLsiV: goto YoK8d; Slf7y: AmtB8: goto x92ic; I3t1l: $array_filter = (object) ["\x70\157\x73\x74\137\x69\144" => $post_id, "\154\151\156\153" => $episode_link, "\x74\171\160\145" => $episode_type, "\x73\165\x62\x74\x69\x74\154\x65" => $list_sub, "\163\x75\142\154\141\x62\x65\x6c" => $list_sub_label, "\163\x6f\x75\162\143\145\163" => '', "\x63\165\x73\x74\x6f\155\x5f\x76\141\162" => $custom_var]; goto oRd14; u5NUN: jI9Pr: goto lRr1F; z1E90: AJxzG: goto s9U_o; xImxm: $sources = json_encode($result); goto kc9AM; lnJZO: if ($haun_type_filter->type == "\145\x6d\142\145\144") { goto yTVY0; } goto A0Be1; zgybL: if ($episode_type == "\155\x70\64") { goto BYxdZ; } goto asoyi; u5IDl: $this->haunBuildPlayer($post_id, $sources, $tracks, $haun_custom_player_types->link); goto z1E90; o73dm: goto cPvPR; goto TLqoh; HW4Rm: sz_uq: goto lnJZO; a8T1m: F43xP: goto EhYi7; CbuPo: goto lDVLW; goto umlJo; C2x_h: if ($haun_custom_player_types->episode_type == "\x6d\160\64") { goto VNlak; } goto trGwR; Nvb0D: if ($haun_custom_player_types->episode_type == "\154\151\156\153") { goto I3FoH; } goto C2x_h; z0B4M: if ($haun_custom_player_types->player_type == "\143\165\163\164\157\155\x5f\x69\x66\162\x61\x6d\145") { goto vKD5E; } goto gGYYu; u1v1P: $sources = $haun_type_filter->sources; goto RafXm; OI0eR: $this->haun_detect_embed(["\160\x6f\163\x74\137\x69\144" => $post_id, "\x6c\x69\156\153" => $haun_type_filter->link, "\x73\x75\x62\164\151\164\x6c\x65" => $haun_type_filter->subtitle, "\163\x75\x62\x6c\x61\142\145\154" => $haun_type_filter->sublabel, "\143\x75\x73\x74\157\155\137\x76\141\x72" => $custom_var]); goto S_eTI; m9svi: $array_filter = (object) ["\160\x6f\163\164\x5f\x69\x64" => $post_id, "\x6c\151\156\153" => $episode_link, "\x74\x79\160\x65" => $episode_type, "\x73\x75\x62\164\151\164\154\x65" => $list_sub, "\163\x75\142\x6c\141\x62\145\154" => $list_sub_label, "\163\x6f\165\x72\x63\x65\163" => '']; goto XY1c8; k_6gC: $this->haun_detect_embed(["\160\x6f\x73\164\x5f\x69\x64" => $post_id, "\x6c\151\156\x6b" => $haun_custom_player_types->link, "\163\x75\142\164\151\x74\154\145" => $haun_custom_player_types->subtitle, "\163\x75\x62\154\x61\142\145\x6c" => $haun_custom_player_types->sublabel]); goto zBdzO; bof2e: if ($haun_custom_player_types->sources) { goto ypvsA; } goto k_6gC; asoyi: if ($episode_type == "\x65\x6d\142\x65\x64") { goto AmtB8; } goto gZDN_; XY1c8: $haun_type_filter = apply_filters("\x68\x61\x75\x6e\x5f\164\x79\160\x65\x5f\x66\x69\x6c\164\x65\x72", $array_filter); goto KGeuI; HFq2m: do_action("\x68\x61\x75\x6e\x5f\x63\165\163\x74\x6f\155\137\x74\171\x70\145\137\146\151\x6c\x74\x65\x72\137\163\x6f\x75\162\143\145\x73", $array_filter); goto judFN; QV7gi: if ($episode_type == "\154\x69\x6e\153") { goto PpFwo; } goto zgybL; xfBzh: echo "\x3c\x64\151\166\40\143\154\141\163\x73\75\42\141\154\145\162\164\40\141\154\145\162\x74\55\144\x61\156\147\x65\x72\x20\164\145\x78\x74\x2d\x63\x65\156\x74\145\162\x22\40\x72\157\x6c\x65\x3d\x22\141\x6c\x65\162\x74\42\76\102\x69\341\272\xbf\x6e\40\74\x63\157\x64\145\76\173\x24\144\x61\164\141\55\x3e\160\154\x61\x79\145\162\137\x74\x79\160\x65\175\x3c\57\x63\x6f\144\145\x3e\x20\x63\150\xc6\260\x61\x20\xc4\221\xc6\260\341\273\xa3\143\40\x6b\x68\x61\151\40\142\xc3\xa1\157\x20\x68\x6f\xe1\xba\267\143\40\105\x70\151\163\x6f\x64\145\x20\x54\171\160\145\x20\x3c\163\x74\x72\x6f\156\x67\76" . $haun_custom_player_types->episode_type . "\74\57\163\x74\162\157\156\147\x3e\40\x63\150\xc6\260\x61\x20\304\221\xc6\xb0\341\273\xa3\143\x20\150\xe1\xbb\x97\40\x74\x72\xe1\273\xa3\41\74\142\162\76\40\304\220\xe1\xbb\203\x20\x74\341\272\xa1\157\x20\145\x70\x69\163\x6f\x64\x65\40\x74\171\160\x65\x20\155\xe1\273\233\x69\54\40\x76\165\151\x20\x6c\303\262\156\x67\x20\164\x72\165\171\x20\143\xe1\272\xad\x70\40\x44\141\163\x68\x62\x6f\141\x72\144\40\x2d\x3e\40\x44\141\x6e\x68\x20\x73\xc3\241\x63\150\40\160\150\x69\x6d\x20\x2d\x3e\40\105\x70\x69\163\157\x64\145\x20\124\171\160\145\163\x3c\57\x64\151\166\x3e"; goto Urjpi; TLqoh: MmJe3: goto MvWz1; YG847: ypvsA: goto YMzUX; iYFmd: $sources = $this->haun_detect_server($episode_link, $post_id)->sources; goto aq4Hv; WOErY: vKD5E: goto bof2e; hbTYi: goto ppQTa; goto WOErY; ffZH5: if (has_filter("\x68\x61\x75\x6e\x5f\143\165\163\x74\x6f\x6d\x5f\x70\x6c\141\x79\145\x72\137\x74\x79\160\x65\x73")) { goto MmJe3; } goto QV7gi; S_eTI: BMRIs: goto eH5ue; pWzNn: goto AzMsk; goto FMe90; s9U_o: cPvPR: goto f8Xra; CyF6o: m7wDf: goto CbuPo; YoK8d: $this->haun_detect_embed(["\x70\x6f\x73\164\x5f\x69\144" => $post_id, "\154\x69\156\153" => $haun_custom_player_types->link, "\163\x75\142\164\151\164\x6c\145" => $haun_custom_player_types->subtitle, "\x73\165\x62\x6c\141\x62\145\154" => $haun_custom_player_types->sublabel]); goto PQfWu; HuhjB: goto AJxzG; goto QUvq0; hn1Pw: $sources = $this->haun_detect_server($haun_custom_player_types->link, $post_id)->sources; goto bc8ix; EXPqW: BYxdZ: goto SlRQn; rX0Us: goto BMRIs; goto WaDUn; C9hze: $result[] = ["\x66\x69\x6c\145" => $haun_custom_player_types->link, "\154\141\142\x65\x6c" => "\110\104", "\164\x79\160\x65" => "\166\x69\x64\x65\x6f\x2f\x6d\160\64"]; goto cVYWs; gGYYu: if ($haun_custom_player_types->player_type == "\143\x75\163\164\x6f\x6d\137\x70\154\x61\171\145\162") { goto NqKA8; } goto Nvb0D; uFcgv: ppQTa: goto HuhjB; pjPp4: goto jI9Pr; goto qIt_x; cpMKz: goto gjT0A; goto HW4Rm; k0vf9: LFGtr: goto I1hcB; umlJo: PpFwo: goto m9svi; C8esj: echo $haun_custom_player_types->sources; goto k6m1j; trGwR: if ($haun_custom_player_types->episode_type == "\x65\x6d\x62\145\x64") { goto SLsiV; } goto xfBzh; RafXm: $this->haunBuildPlayer($post_id, $sources, $tracks, $haun_type_filter->link); goto PBE41; PBE41: qp6dQ: goto J0Nd1; I1hcB: goto m7wDf; goto EXPqW; E43LO: $sources = $haun_type_filter->sources; goto Htbm8; KGeuI: if (has_filter("\150\141\x75\x6e\137\164\x79\x70\x65\137\x66\x69\x6c\164\145\x72")) { goto qox6G; } goto iYFmd; Htbm8: $this->haunBuildPlayer($post_id, $sources, $tracks, $haun_type_filter->link); goto Kfna2; R2Xl2: if (!$haun_custom_player_types->sources) { goto HqJfH; } goto C8esj; tVeE8: if ($haun_type_filter->type == "\x65\x6d\142\x65\144") { goto riPzz; } goto ZaSq9; judFN: goto qp6dQ; goto YvvRp; cxSlA: Dd1yu: goto eGiES; bCLCB: if (has_filter("\150\x61\x75\156\137\164\x79\160\145\137\146\x69\154\x74\x65\x72")) { goto sz_uq; } goto hn1Pw; SlRQn: $result[] = ["\x66\x69\154\145" => $episode_link, "\x6c\141\142\x65\x6c" => "\110\104", "\164\x79\160\145" => "\166\x69\x64\x65\x6f\x2f\x6d\160\64"]; goto xImxm; U08EP: I3FoH: goto I3t1l; YMzUX: echo $haun_custom_player_types->sources; goto RApwS; qIt_x: VNlak: goto C9hze; uA7Kn: NqKA8: goto R2Xl2; ZaSq9: if ($haun_type_filter->type == "\x6a\x77\x70\x6c\141\171\x65\162") { goto cBn5P; } goto HFq2m; FMe90: qox6G: goto tVeE8; j89a1: $this->haunBuildPlayer($post_id, $sources, $tracks, $haun_custom_player_types->link); goto u5NUN; eGiES: goto bJdvZ; goto uA7Kn; oRd14: $haun_type_filter = apply_filters("\150\x61\x75\x6e\x5f\x74\171\x70\145\x5f\146\x69\154\x74\145\162", $array_filter); goto bCLCB; IYdRb: eVcdw: goto E43LO; k6m1j: HqJfH: goto do6yv; lRr1F: goto Dd1yu; goto U08EP; GxyTq: if ($haun_custom_player_types->player_type == "\x63\x75\163\x74\x6f\x6d\137\141\160\x69") { goto ppYna; } goto z0B4M; aq4Hv: $this->haunBuildPlayer($post_id, $sources, $tracks, $episode_link); goto pWzNn; FrJsb: do_action("\150\x61\165\x6e\137\143\165\163\x74\x6f\155\137\x74\x79\160\x65\137\146\x69\154\164\x65\x72\137\x73\157\x75\162\x63\x65\163", $array_filter); goto Sih6h; PQfWu: HuLCu: goto pjPp4; kc9AM: $this->haunBuildPlayer($post_id, $sources, $tracks, $episode_link); goto CyF6o; f8Xra: } public function haunBuildPlayer($post_id, $sources = null, $tracks = array(), $link = '') { goto amsqZ; NVV6f: $player_logo_link = hnmg_value("\x6a\167\x5f\160\x6c\141\x79\x65\x72\x5f\154\157\x67\x6f\x5f\x6c\151\156\153") ?: "\150\164\x74\x70\x73\72\x2f\x2f\x68\x61\x75\156\x79\x74\x62\56\143\x6f\x6d"; goto UwBEs; TYR8x: $adblock_msg = hnmg_value("\141\x64\142\154\x6f\143\x6b\x5f\x6d\x73\147") ? hnmg_value("\x61\x64\142\x6c\157\x63\x6b\137\x6d\163\x67") : "\x3c\160\40\x73\x74\x79\154\145\x3d\x22\160\141\x64\x64\x69\156\x67\55\164\x6f\160\x3a\61\65\x70\x78\73\42\x3e\x3c\x68\x32\x3e\123\157\x72\162\171\41\x3c\57\x68\62\76\40\x55\163\145\x72\x73\40\x70\154\145\x61\x73\x65\40\162\145\x6d\157\x76\145\x20\141\x64\40\x62\154\x6f\x63\153\x65\x72\41\74\57\160\76"; goto BtbGV; C58rA: $autopause = hnmg_value("\x6a\x77\137\160\154\x61\171\145\x72\x5f\x61\x75\x74\x6f\x70\x61\165\x73\x65") ? "\164\x72\165\x65" : "\146\141\x6c\163\x65"; goto KXd7l; R1m0q: $player_logo_hide = hnmg_value("\x6a\167\137\160\x6c\141\x79\145\162\137\154\x6f\147\157\x5f\150\x69\144\145") ? true : false; goto AeTBX; BtbGV: $floating = hnmg_value("\x66\154\157\x61\164\151\156\147\x5f\160\x6c\141\171\x65\x72") ? "\61" : "\60"; goto t3sOM; IcA9r: $jwplayer_showad = hnmg_value("\x6a\167\x5f\160\154\x61\171\145\x72\x5f\163\x68\157\x77\x5f\141\x64"); goto sjTRP; sjTRP: $player_cfg = hnmg_value("\x68\141\165\x6e\x5f\x6a\167\x5f\160\x6c\141\x79\145\162\137\157\x70\x74\151\157\x6e\x73"); goto GW8Lu; Uunr7: $autoplay = hnmg_value("\x6a\167\137\x70\154\x61\x79\145\x72\x5f\141\165\x74\157\x70\x6c\141\171") ? "\164\x72\x75\x65" : "\146\x61\154\163\145"; goto C58rA; AeTBX: $logo_position = hnmg_value("\x6a\167\x5f\160\154\x61\171\x65\x72\x5f\154\157\147\x6f\137\x70\x6f\163\151\164\151\157\x6e") ?: ''; goto NVV6f; UwBEs: $captions_color = hnmg_value("\x6a\x77\x5f\164\162\x61\143\153\x73\x5f\x63\x6f\x6c\157\x72") ?: "\43\145\145\145\145\62\x32"; goto GoQXJ; t3sOM: $player_logo = hnmg_value("\152\x77\137\x70\154\141\x79\x65\162\x5f\154\x6f\x67\x6f") ?: ''; goto R1m0q; GoQXJ: $captions_fontsize = hnmg_value("\152\167\x5f\x74\162\141\x63\153\x73\x5f\146\157\x6e\x74\x5f\x73\x69\172\145") ?: 12; goto QcshT; DcUSZ: $sources = $sources == "\133\135" || $sources == '' || $sources == "\156\x75\154\x6c" || !json_decode($sources)[0]->file ? "\x5b\173\40\x66\x69\x6c\145\x3a\x20\x22\57\57\143\x6f\x6e\164\x65\156\x74\x2e\x6a\x77\160\x6c\141\164\x66\x6f\162\x6d\x2e\143\157\155\x2f\x76\151\144\x65\157\x73\57\156\157\164\55\141\55\162\x65\141\x6c\x2d\166\151\144\x65\x6f\55\146\151\x6c\x65\x2e\155\160\64\x22\54\40\x6c\141\142\145\x6c\72\40\x22\x37\62\x30\160\x22\54\x20\164\x79\160\x65\x3a\x20\x22\166\151\x64\145\157\x2f\155\x70\x34\42\175\135" : $sources; goto fyfN5; iEn1H: $player_sharing = hnmg_value("\x6a\x77\x5f\160\x6c\141\171\x65\162\137\163\150\141\x72\145") ?: ''; goto Uunr7; GW8Lu: $adblock = hnmg_value("\x64\145\164\x65\x63\164\137\141\144\x62\x6c\x6f\143\153") ? "\164\x72\x75\x65" : "\x66\x61\x6c\163\x65"; goto TYR8x; IPcsU: $jw_adcode = hnmg_value("\x6a\167\x5f\160\154\141\171\145\162\137\x63\165\163\x74\x6f\155\x5f\141\x64\x73\x5f\143\x6f\144\145") ?: ''; goto DcUSZ; KXd7l: $meta = get_post_meta($post_id, HNMG_META, true); goto L3Yug; L3Yug: $poster = isset($meta["\150\x61\x75\156\x5f\160\x6f\x73\164\x65\162\137\165\x72\154"]) && $meta["\x68\x61\165\x6e\x5f\160\157\163\x74\145\162\x5f\x75\x72\x6c"] ? $meta["\150\141\x75\156\137\160\157\x73\x74\x65\162\x5f\165\162\154"] : ''; goto IPcsU; fyfN5: echo view("\110\x4e\115\107\72\x3a\154\x61\171\157\165\164\163\x2e\160\x6c\x61\x79\145\x72", compact("\163\x6f\x75\x72\x63\145\x73", "\x6a\167\160\x6c\x61\x79\145\x72\153\x65\x79", "\160\157\163\x74\137\151\x64", "\160\157\163\x74\x65\x72", "\164\x72\x61\143\153\x73", "\x63\x61\x70\x74\151\157\x6e\163\x5f\143\x6f\x6c\x6f\162", "\x63\x61\x70\164\x69\157\156\163\x5f\x66\x6f\156\164\x73\151\x7a\x65", "\160\154\141\x79\145\162\137\154\157\x67\x6f", "\x70\x6c\141\x79\x65\162\137\x6c\157\x67\x6f\x5f\x6c\x69\156\153", "\160\154\141\171\x65\x72\x5f\154\157\147\157\137\x68\151\144\x65", "\154\x6f\x67\157\137\x70\157\x73\x69\164\x69\157\x6e", "\x66\154\x6f\141\164\151\156\147", "\x61\x75\164\157\160\x61\x75\x73\x65", "\x61\165\164\x6f\160\154\x61\171", "\x70\x6c\141\171\x65\x72\137\163\150\141\x72\x69\x6e\x67", "\x6a\167\137\141\144\143\x6f\144\x65", "\x6a\167\x70\x6c\141\x79\x65\x72\x5f\163\x68\x6f\x77\141\144", "\x61\144\142\x6c\157\x63\x6b", "\141\x64\142\154\157\143\x6b\x5f\155\163\x67")); goto aH4sd; aH4sd: do_action("\150\x61\165\156\x5f\x70\154\141\171\x65\x72\x5f\151\156\163\x74\141\x6e\143\145", (object) ["\x70\157\163\x74\137\151\x64" => $post_id, "\154\x69\x6e\153" => $link]); goto qKSDa; amsqZ: $cache_time = hnmg_value("\160\154\141\171\x65\162\137\143\x61\143\150\x65\137\x74\x69\x6d\145"); goto IcA9r; QcshT: $jwplayerkey = hnmg_value("\152\x77\137\160\154\x61\171\x65\x72\x5f\x6c\151\x63\x65\156\x73\x65\137\153\x65\x79") ?: "\x4d\x42\166\x72\x69\x65\x71\x4e\x64\x6d\126\x4c\x34\152\x56\60\x78\x36\x4c\120\112\60\167\113\x42\57\116\x62\x7a\62\x51\161\57\x6c\161\x6d\63\147\75\x3d"; goto iEn1H; qKSDa: } public function haunBuildPlayerShotcode($attr) { $args = shortcode_atts(array("\154\151\x6e\x6b" => "\43", "\160\157\163\164\137\x69\144" => get_the_ID(), "\163\157\x75\162\x63\x65\163" => '', "\164\162\x61\143\153\163" => "\x5b\135"), $attr); $this->haunBuildPlayer($args["\160\x6f\163\164\137\x69\144"], HauNCrypt::decrypt($args["\163\157\x75\x72\x63\145\163"]), $args["\x74\162\x61\x63\x6b\x73"], $args["\154\x69\156\153"]); } }

<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; use HNMG\EP_Load\EP_List; class EP_Helper { private $list; private $cached_meta = []; public function __construct() { $this->list = new EP_List(); } public function hn_info($type, $value1, $value2) { goto UwBg5; X6xN4: vfjCy: goto Ze4OF; r1qdG: RnPhX: goto X6xN4; UwBg5: switch ($type) { case "\x71\x75\141\154\x69\164\171": return $this->hn_loadinfo("\150\x61\x75\156\x5f\161\x75\141\x6c\x69\164\171", $value1); case "\x6c\151\x6b\145\163": return $this->hn_loadinfo("\x68\141\165\x6e\x5f\154\x69\x6b\x65\163", $value1); case "\144\x69\x73\x6c\151\153\145\163": return $this->hn_loadinfo("\x68\x61\x75\x6e\137\x64\x69\163\154\x69\153\x65\163", $value1); case "\x72\x75\156\164\151\155\x65": return $this->hn_loadinfo("\x68\x61\x75\156\137\x72\165\x6e\x74\151\155\x65", $value1); case "\145\x70\151\x73\157\x64\x65": return $this->hn_loadinfo("\150\x61\x75\x6e\x5f\145\x70\x69\x73\157\144\x65", $value1); case "\164\x6f\164\141\154\145\x70\151\x73": return $this->hn_loadinfo("\150\x61\x75\156\x5f\x74\157\x74\x61\x6c\x5f\145\160\151\163\x6f\x64\145", $value1); case "\x63\x6f\x64\145": return $this->hn_loadinfo("\143\x6f\x64\145\137\x70\x6f\163\164", $value1); case "\x6f\162\x67\164\x69\x74\154\145": return $this->hn_loadinfo("\150\x61\x75\156\x5f\157\162\x69\x67\x69\x6e\141\154\x5f\x74\151\x74\x6c\145", $value1); case "\141\143\164\157\162": case "\x64\x69\x65\156\55\166\x69\145\x6e": case "\161\165\x6f\x63\55\147\x69\141": case "\144\141\157\x2d\x64\151\145\156": case "\x74\x68\145\x2d\x6c\x6f\x61\151": case "\143\141\164\x65\147\x6f\x72\x79": case "\x63\x6f\x75\156\164\x72\x79": case "\144\151\x72\x65\143\x74\157\162": case "\171\x65\141\162": case "\162\145\154\x65\x61\x73\x65": return $this->hnterms($type, $value1 = true, $value2 = 10); case "\x74\151\x74\154\145": return $this->hn_title($value1); case "\x6c\x69\x6e\153": return $this->hn_permalink($value1); case "\163\164\x61\x74\x75\163": return $this->hn_status(); case "\x70\145\x72\143\x65\156\164\141\x67\145": return $this->hn_percentage(); case "\166\151\145\x77\x73": return $this->list->hnshow_views($value1); case "\165\x70\144\141\164\x65\166\x69\x65\167\163": return $this->list->hnupdate_views($value1); case "\143\x61\x74\x65": return $this->hn_category($value1); case "\x74\145\162\x6d\163": return $this->hnthe_terms($value1); case "\143\157\x6e\164\145\156\x74": return $this->hn_content($value1); case "\163\x65\x72\x76\145\x72": return get_query_var("\x68\141\x75\156\x5f\x73\145\x72\166\145\x72") ?: 1; case "\x74\150\165\x6d\x62": return $this->list->hnimage_display($value1 = false, $value2); case "\x70\x6f\x73\x74\145\162": return $this->hn_poster($value1 = false, $value2); default: return $this->hn_loadinfo("\150\141\x75\x6e\137\157\x72\151\x67\x69\156\x61\x6c\137\x74\x69\x74\154\145", $value1); } goto r1qdG; Ze4OF: } public function hn_loadinfo($type, $post_id = null) { goto rVstI; q44kN: GO7Ew: goto A0d3V; AXvNq: $this->cached_meta[$postid] = get_haunmovies($postid, HNMG_META, true); goto W4eYf; c_jxF: S_ddi: goto qijOV; PnbWf: return $meta[$type] ?? 0; goto q44kN; dX226: if (!($type == "\163\x74\141\x74\x75\163")) { goto S_ddi; } goto rSqkY; hyNCd: $meta = $this->cached_meta[$postid]; goto dX226; rSqkY: return $this->list->hnis_type("\x74\x76\137\x73\145\162\x69\x65\x73") ? $this->list->label_tvseries($postid) : $this->list->label_movies($postid); goto c_jxF; A0d3V: return $meta[$type] ?? ''; goto hGmO_; rVstI: $postid = $post_id ?? get_the_ID(); goto YcFVN; W4eYf: cFqrl: goto hyNCd; YcFVN: if (isset($this->cached_meta[$postid])) { goto cFqrl; } goto AXvNq; qijOV: if (!($type === "\150\x61\x75\x6e\x5f\144\151\163\154\151\153\x65\x73" || $type === "\150\141\x75\156\x5f\x6c\151\x6b\x65\x73")) { goto GO7Ew; } goto PnbWf; hGmO_: } public function hnimage_display($postid, $single = false, $type = "\x70\157\163\164") { goto SxMVV; o3rjt: $img = in_array($type, ["\x76\151\x64\145\x6f", "\156\x65\x77\163"]) ? "\x64\145\x66\141\165\154\164\x2e\x70\156\x67" : "\144\x65\146\141\x75\154\x74\55\x70\157\163\164\x65\x72\x2e\152\x70\147"; goto k1NZi; SHh0t: $post = get_post($postid); goto jw4Li; Ihb2T: $meta_data = get_haunmovies($postid, HNMG_META, true, $type); goto CD6jT; SxMVV: $thumb = ''; goto Ihb2T; adVcJ: if (!($single && isset($meta_data["\x68\141\165\156\x5f\160\x6f\163\x74\x65\x72\x5f\165\x72\154"]) && $meta_data["\150\x61\165\156\137\160\x6f\163\x74\145\162\x5f\x75\x72\x6c"] != '')) { goto ALTTw; } goto GXr84; yASqU: $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($postid), "\x6d\x6f\166\x69\x65\x2d\x74\150\165\155\142")[0]; goto iZpxK; Q2E12: goto Kj00L; goto pCqCx; iZpxK: goto Kj00L; goto GX02f; lXDav: if ($type == "\166\x69\144\145\x6f" && isset($meta_data["\166\x69\x64\x65\x6f\137\x74\150\x75\x6d\x62\156\x61\x69\154\137\165\x72\x6c"])) { goto WqMfv; } goto JeQlm; k1NZi: $image_url = HNMG_EPIURL . "\x2f\x69\x6d\x61\147\x65\163\x2f" . $img; goto p4qIM; sXgeY: Bm5dN: goto BlIac; Qa3PT: goto OhbnD; goto n_mwc; GX02f: NcvQo: goto rK0DV; JeQlm: if ($type != "\166\151\x64\145\157" && isset($meta_data["\150\141\x75\x6e\x5f\x74\x68\x75\155\x62\x5f\x75\x72\x6c"])) { goto VEs0n; } goto nZe2G; jw4Li: if (!$post) { goto u_MQX; } goto CAnVS; rK0DV: $image_url = $thumb; goto XHNW2; ubHMm: WqMfv: goto NqNgR; p4qIM: jQurH: goto Q2E12; XhSko: return esc_url($image_url); goto KhpEO; X5cKw: $thumb = $meta_data["\x68\x61\x75\x6e\137\164\x68\x75\x6d\x62\x5f\x75\162\x6c"]; goto VUdd6; jvGOg: if (!empty($image_url)) { goto jQurH; } goto o3rjt; GXr84: return $meta_data["\x68\141\165\x6e\x5f\160\x6f\163\x74\145\162\x5f\x75\x72\x6c"]; goto HdKB3; RdThl: if (!empty($thumb)) { goto NcvQo; } goto SHh0t; nZe2G: goto OhbnD; goto ubHMm; VUdd6: OhbnD: goto sXgeY; bD6ba: $image_url = !empty($matches[1][0]) ? $matches[1][0] : ''; goto WihjV; pCqCx: e0xld: goto yASqU; NqNgR: $thumb = $meta_data["\x76\151\144\145\x6f\x5f\x74\x68\165\155\142\156\x61\x69\154\137\165\x72\154"]; goto Qa3PT; CAnVS: preg_match_all("\57\74\x69\155\147\56\x2b\x73\162\x63\x3d\x5b\x27\42\135\x28\x5b\x5e\47\x22\135\53\51\133\47\42\x5d\56\52\x3e\57\151", $post->post_content, $matches); goto bD6ba; BlIac: $image_url = ''; goto W2_6c; HdKB3: ALTTw: goto lXDav; W2_6c: if (has_post_thumbnail($postid) && !$single) { goto e0xld; } goto RdThl; CD6jT: if (empty($meta_data)) { goto Bm5dN; } goto adVcJ; n_mwc: VEs0n: goto X5cKw; XHNW2: Kj00L: goto XhSko; WihjV: u_MQX: goto jvGOg; KhpEO: } public function hn_content($value1) { goto ePGG0; iXJeL: return !empty($value1) ? $this->list->hnexcerpt($post->ID, $value1) : get_post($post->ID)->post_content; goto SZYYH; YXG8a: return ''; goto ikVNJ; aPIIy: if (!empty($post->ID)) { goto h0Umj; } goto YXG8a; ikVNJ: h0Umj: goto iXJeL; ePGG0: global $post; goto aPIIy; SZYYH: } public function hnthe_terms($value1) { goto C_y6u; PaJIL: if (empty($value1)) { goto cefUK; } goto Ew8S5; C_y6u: global $post; goto PaJIL; Zz6Gc: return the_terms($post->ID, $value1, '', "\x2c\40"); goto gNqH7; Q4tij: cefUK: goto Zz6Gc; Ew8S5: return ''; goto Q4tij; gNqH7: } public function hn_percentage() { goto rLu7p; rLu7p: global $post; goto KCPdO; mbVf5: $totaldislikes = isset($meta["\x68\141\x75\156\x5f\144\151\x73\154\x69\153\x65\x73"]) && $meta["\150\141\165\x6e\x5f\x64\x69\x73\154\x69\x6b\x65\x73"] ? $meta["\150\x61\x75\x6e\137\144\x69\163\154\x69\x6b\145\x73"] : "\60"; goto riQ_2; IF126: return $percentage; goto w_CWE; KCPdO: $meta = get_haunmovies($post->ID, HNMG_META, true); goto Q4F_a; i2iPf: $percentage = $total_votes == 0 ? 50 : $totallikes / $total_votes * 100; goto IF126; riQ_2: $total_votes = $totallikes + $totaldislikes; goto i2iPf; Q4F_a: $totallikes = isset($meta["\x68\x61\165\156\x5f\x6c\151\x6b\x65\163"]) && $meta["\150\141\x75\156\x5f\x6c\151\x6b\x65\163"] ? $meta["\x68\141\165\156\x5f\154\151\x6b\x65\163"] : "\60"; goto mbVf5; w_CWE: } public function hn_category($value1 = '') { goto I4cfa; D57s6: return $value1 == "\165\162\x6c" ? get_category_link($category->term_id) : $category->name; goto zJVf_; AImfm: if ($category) { goto exf0D; } goto eFlTT; I4cfa: $category = get_the_category(get_the_ID())[0] ?? null; goto AImfm; eFlTT: return ''; goto U4RLu; U4RLu: exf0D: goto D57s6; zJVf_: } public function hn_status() { return $this->list->hnis_type("\x74\166\137\163\145\x72\x69\x65\x73") ? $this->list->label_tvseries(get_the_ID()) : $this->list->label_movies(get_the_ID()); } public function hn_title($single = '') { goto cwfiu; OfPA0: uLSqj: goto FSta0; qa0mV: if ($single == "\x73\145\157") { goto bi66H; } goto HrTng; gfHow: bi66H: goto sCzMo; FSta0: $value = single_term_title('', false); goto NUq0Z; NUq0Z: goto cmxur; goto gfHow; sx6Ol: return $value; goto n3Fa4; HrTng: $value = get_the_title(get_the_ID()); goto uCDo8; sCzMo: $value = $this->list->haun_title(get_the_ID()); goto Lr43l; Lr43l: cmxur: goto sx6Ol; uCDo8: goto cmxur; goto OfPA0; cwfiu: if ($single == "\x74\x65\x72\155") { goto uLSqj; } goto qa0mV; n3Fa4: } public function hn_permalink($single = '') { goto lZ0LE; BAU_I: $link = get_permalink(get_the_ID()); goto xkajm; TzuUq: $link = get_term_link(get_queried_object()); goto pokLA; pokLA: DtiRz: goto Mp_ee; cUkE6: if (!empty($single) && $single == "\164\145\162\x6d") { goto Gp6tz; } goto BAU_I; lZ0LE: if (!empty($single) && $single == "\x77\x61\164\143\150") { goto eJKaW; } goto cUkE6; YOA_S: eJKaW: goto cyRTK; Mp_ee: return $link; goto WrMix; LtUcS: Gp6tz: goto TzuUq; J5n5v: goto DtiRz; goto LtUcS; xkajm: goto DtiRz; goto YOA_S; cyRTK: $link = hnmg_value("\x77\x61\164\143\150\x5f\x62\164\156\137\144\151\x73\x70\154\141\171") == "\146\151\x72\x73\x74\x5f\145\x70\151\x73\157\x64\145" ? $this->list->firstlast_link(get_the_ID()) : $this->list->firstlast_link(get_the_ID(), "\x6c\141\x73\x74"); goto J5n5v; WrMix: } public function hnterms($term, $single, $limit = 10) { goto FFCgL; xHmkA: $taxonomy = isset($taxonomy_map[$term]) ? $taxonomy_map[$term] : $term; goto yVBxh; FFCgL: $taxonomy_map = ["\161\x75\157\x63\55\x67\151\x61" => "\x63\x6f\x75\x6e\164\162\171", "\144\151\x65\x6e\55\x76\151\145\156" => "\141\x63\x74\x6f\x72", "\144\141\x6f\x2d\x64\x69\x65\x6e" => "\144\x69\162\145\143\x74\157\x72", "\x74\150\x65\x2d\154\157\141\151" => "\143\x61\164\145\147\x6f\162\x79", "\171\x65\141\x72" => "\x72\x65\154\145\141\163\145"]; goto xHmkA; lSKHI: if (!(is_array($values) && !empty($values))) { goto DwooG; } goto ylkSL; M240B: rcftH: goto vBz5S; ylkSL: foreach (array_slice($values, 0, $limit) as $value) { $links[] = $single ? "\74\141\40\150\162\x65\x66\75\42" . esc_url(get_term_link($value)) . "\x22\40\x63\154\x61\163\x73\x3d\x22\x74\x65\170\164\x2d\x67\162\145\145\156\55\65\60\60\42\40\164\151\164\154\145\x3d\42" . esc_attr($value->name) . "\x22\x3e" . esc_html($value->name) . "\74\x2f\x61\x3e" : esc_html($value->name); Xsm2I: } goto M240B; E_PLq: $links = []; goto lSKHI; hP8IF: akXNY: goto lxWpL; vBz5S: DwooG: goto G1GRD; yVBxh: $values = get_the_terms(get_the_ID(), $taxonomy); goto E_PLq; G1GRD: if (!empty($links)) { goto akXNY; } goto e0Mm1; e0Mm1: return ''; goto hP8IF; lxWpL: return implode("\54\40", $links); goto JCbkd; JCbkd: } public static function compress_htmlcode($codedata) { goto Ux0rl; jOXeY: $codedata = preg_replace($searchdata, $replacedata, $codedata); goto d5wUv; Ux0rl: $searchdata = array("\x2f\x5c\76\x5b\x5e\x5c\123\x20\135\53\x2f\163", "\57\x5b\x5e\x5c\x53\40\135\53\x5c\x3c\x2f\x73", "\x2f\50\x5c\x73\x29\x2b\57\163"); goto ANtwI; d5wUv: return $codedata; goto GOmsP; ANtwI: $replacedata = array("\x3e", "\x3c", "\134\x31"); goto jOXeY; GOmsP: } public static function getDriveId($url) { preg_match("\57\133\x2d\x5c\167\135\x7b\x32\x35\54\175\57\151\163", $url, $id); return $id[0]; } public static function getDailyMotionId($url) { preg_match("\57\144\141\x69\154\x79\x6d\x6f\x74\x69\157\156\134\56\x63\x6f\x6d\x5c\x2f\50\x2e\52\x3f\51\x76\151\144\145\x6f\x5c\57\x28\x2e\52\x29\x2f\x69\x73", $url, $matches); return $matches[2]; } public static function getVimeoId($url) { goto CGWAO; CGWAO: $regex = "\x7e\xa\x9\x9\11\43\x20\115\141\164\143\x68\x20\x56\x69\x6d\145\x6f\x20\154\x69\x6e\153\x20\141\x6e\x64\x20\145\x6d\x62\145\x64\x20\143\157\144\x65\12\x9\11\x9\50\77\72\74\151\x66\162\x61\155\x65\40\133\x5e\76\135\52\x73\162\143\75\42\x29\x3f\40\x20\x20\40\x20\x20\x20\40\x20\43\40\111\x66\40\x69\146\162\141\x6d\x65\x20\155\x61\x74\x63\x68\x20\165\x70\40\164\157\x20\146\x69\162\x73\x74\40\x71\x75\x6f\164\x65\40\x6f\146\x20\x73\162\143\12\11\x9\x9\x28\x3f\72\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\40\43\40\107\162\157\165\x70\x20\x76\151\155\x65\157\40\x75\x72\154\12\11\11\x9\11\11\x68\164\x74\160\x73\77\x3a\x5c\x2f\x5c\x2f\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x23\40\x45\x69\x74\x68\x65\x72\x20\x68\164\164\x70\40\x6f\x72\40\x68\164\x74\160\163\xa\x9\x9\11\x9\11\50\77\x3a\x5b\134\167\135\x2b\x5c\56\x29\52\40\x20\40\40\x20\x20\40\40\40\40\x20\x20\43\x20\x4f\x70\x74\151\157\x6e\x61\x6c\40\x73\165\x62\144\x6f\x6d\x61\x69\x6e\x73\12\x9\x9\11\11\11\166\151\155\x65\x6f\x5c\56\x63\x6f\x6d\40\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\43\40\115\x61\164\x63\150\40\166\x69\x6d\x65\157\56\x63\x6f\x6d\xa\11\11\x9\11\x9\50\77\72\x5b\134\x2f\x5c\167\135\52\x5c\x2f\x76\151\x64\145\157\163\x3f\x29\x3f\x20\40\x20\43\40\x4f\160\x74\x69\x6f\x6e\x61\x6c\x20\166\151\144\x65\x6f\x20\x73\x75\142\x20\x64\x69\x72\x65\x63\164\157\162\x79\x20\x74\x68\151\x73\40\x68\141\x6e\144\154\145\x73\40\147\162\157\165\x70\x73\40\154\151\156\x6b\163\x20\x61\x6c\x73\157\12\11\11\x9\11\x9\x5c\57\x20\40\40\40\40\40\40\40\40\40\x20\x20\40\x20\40\40\40\40\x20\x20\x20\x20\43\40\123\154\141\163\x68\x20\142\145\x66\x6f\162\x65\x20\111\144\12\11\x9\x9\11\11\x28\133\60\55\71\x5d\x2b\x29\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\x20\40\40\40\x23\40\44\61\x3a\x20\x56\111\104\x45\x4f\x5f\x49\104\40\151\x73\x20\x6e\x75\155\145\x72\151\x63\xa\11\11\11\x9\11\133\x5e\134\163\135\52\x20\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\40\x23\x20\x4e\x6f\x74\40\x61\40\x73\x70\141\x63\145\12\x9\11\x9\x29\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x23\40\105\156\144\40\x67\x72\157\x75\x70\xa\x9\x9\x9\42\77\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\40\43\x20\x4d\141\164\143\x68\40\x65\x6e\144\40\161\x75\157\164\145\x20\x69\146\40\160\x61\162\164\x20\157\x66\x20\x73\x72\143\xa\11\11\11\50\x3f\72\133\136\76\x5d\52\x3e\74\57\151\146\162\141\x6d\x65\76\x29\x3f\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x23\x20\x4d\141\x74\143\x68\x20\164\x68\x65\x20\145\x6e\144\40\157\146\40\164\x68\x65\40\151\x66\162\x61\x6d\145\xa\x9\11\11\50\77\72\x3c\160\76\56\52\x3c\57\x70\76\51\77\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\40\40\40\x20\43\x20\115\x61\164\143\150\x20\x61\156\x79\x20\164\x69\164\154\145\40\x69\x6e\146\x6f\162\x6d\141\x74\x69\157\156\x20\163\x74\x75\146\x66\xa\11\x9\11\x7e\151\x78"; goto WmBDc; VX3EU: return $matches[1]; goto BR4os; WmBDc: preg_match($regex, $url, $matches); goto VX3EU; BR4os: } public static function getYoutubeId($url) { goto flSo8; VGsnt: return $matches[1]; goto ruI1a; flSo8: $regex = "\176\12\11\11\43\40\x4d\x61\164\143\x68\40\x59\157\165\164\165\x62\x65\40\154\x69\156\x6b\40\141\x6e\x64\x20\x65\155\x62\x65\x64\40\x63\157\x64\x65\12\11\11\50\x3f\72\11\11\x9\11\x20\43\x20\x47\x72\157\x75\160\x20\164\157\x20\155\x61\x74\x63\150\x20\145\x6d\x62\x65\x64\40\x63\157\144\x65\x73\12\x9\11\x20\x20\40\x28\x3f\72\74\151\146\162\x61\155\x65\x20\133\x5e\x3e\x5d\x2a\x73\x72\143\75\42\x29\77\11\x20\x23\40\x49\x66\x20\151\146\162\x61\x6d\x65\x20\155\x61\164\143\x68\40\165\160\40\164\157\40\x66\x69\x72\163\164\40\x71\165\x6f\x74\x65\40\157\146\40\x73\x72\143\12\11\x9\x20\x20\x20\x7c\x28\77\x3a\11\x9\11\11\x20\x23\40\107\162\157\x75\x70\40\164\x6f\x20\155\x61\x74\143\x68\40\x69\x66\x20\157\x6c\144\x65\x72\x20\145\155\142\145\x64\12\x9\11\40\x20\x20\40\x20\x20\50\x3f\x3a\74\x6f\x62\x6a\145\143\164\40\56\52\x3e\x29\77\11\11\x20\x23\40\115\x61\164\x63\x68\40\157\160\x65\156\151\156\147\40\x4f\x62\152\x65\x63\x74\x20\164\x61\x67\xa\x9\11\40\40\40\x20\40\x20\x28\x3f\x3a\74\160\x61\x72\x61\x6d\x20\56\52\74\x2f\x70\x61\162\x61\155\76\51\x2a\x20\x20\x20\40\x20\43\40\115\x61\164\x63\x68\40\141\154\154\40\x70\141\x72\x61\x6d\40\x74\x61\147\163\xa\x9\11\x20\x20\x20\x20\x20\40\x28\77\72\x3c\x65\155\x62\x65\144\x20\x5b\x5e\76\x5d\x2a\163\162\x63\75\42\51\77\40\x20\40\40\40\x23\40\x4d\x61\x74\x63\x68\x20\145\x6d\x62\x65\144\40\164\141\x67\x20\x74\x6f\40\x74\x68\145\40\x66\x69\162\x73\164\x20\x71\165\x6f\x74\145\x20\157\146\x20\163\162\143\xa\x9\11\40\40\40\x29\x3f\x9\x9\x9\x9\x20\x23\x20\105\x6e\144\40\157\x6c\144\x65\x72\x20\x65\155\142\145\144\40\143\x6f\x64\145\40\x67\162\157\x75\x70\xa\x9\11\x29\77\11\x9\11\11\40\x23\40\105\156\x64\40\145\155\142\145\x64\40\143\x6f\144\x65\x20\x67\x72\157\x75\x70\x73\12\11\11\50\77\x3a\11\11\x9\11\x20\x23\x20\107\x72\x6f\x75\160\40\171\157\165\x74\x75\x62\x65\x20\x75\x72\x6c\xa\11\x9\x20\40\40\x68\x74\x74\160\x73\x3f\72\x5c\x2f\134\57\x9\x9\x20\40\40\40\40\40\x20\40\40\x23\x20\x45\151\164\150\x65\162\x20\150\x74\164\160\40\x6f\x72\40\x68\x74\x74\160\x73\12\11\11\x20\x20\x20\x28\x3f\72\x5b\134\167\x5d\53\134\56\51\52\11\11\40\x20\40\40\40\40\40\x20\x20\43\x20\x4f\x70\164\x69\x6f\x6e\141\154\x20\x73\165\142\144\x6f\155\x61\x69\156\x73\12\11\x9\x20\x20\40\x28\77\72\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\x20\40\x20\x9\40\x20\x20\40\40\40\x20\40\40\x23\40\x47\x72\x6f\x75\x70\40\x68\x6f\x73\164\x20\141\x6c\x74\145\x72\x6e\x61\x74\151\166\145\163\x2e\xa\x9\x9\x20\40\40\x20\x20\40\x20\x79\x6f\x75\x74\165\134\56\x62\145\57\40\40\40\x20\40\x20\11\40\40\40\x20\40\40\40\x20\40\43\40\x45\151\164\x68\x65\x72\x20\x79\157\165\164\x75\56\142\x65\x2c\xa\11\11\40\40\x20\40\40\x20\x20\174\x20\171\x6f\x75\x74\x75\x62\145\x5c\56\x63\x6f\155\x9\11\x20\x23\40\157\162\x20\x79\157\x75\164\165\142\x65\x2e\143\x6f\155\xa\x9\x9\x20\x20\40\40\x20\40\40\174\x20\171\157\165\x74\x75\142\x65\x2d\156\157\x63\157\x6f\153\151\145\x5c\x2e\143\157\155\x9\x20\x23\40\x6f\162\40\x79\157\x75\x74\165\142\x65\55\x6e\157\143\157\157\153\x69\x65\56\143\x6f\x6d\xa\x9\11\x20\40\x20\x29\11\11\x9\11\40\x23\40\105\x6e\x64\40\x48\157\x73\x74\x20\x47\162\x6f\165\x70\12\11\x9\x20\40\40\x28\77\x3a\134\x53\52\133\136\134\167\x5c\55\134\x73\135\51\77\40\40\x20\40\x20\40\40\11\40\43\40\x45\x78\164\162\x61\40\163\x74\x75\x66\x66\40\165\160\40\164\x6f\x20\x56\x49\x44\105\117\137\x49\x44\xa\x9\11\40\40\40\50\133\x5c\x77\x5c\x2d\x5d\173\x31\61\175\51\x9\11\40\x20\x20\40\40\x20\40\x20\x20\x23\40\44\61\x3a\40\126\111\104\105\117\137\111\104\x20\x69\163\40\156\x75\155\145\162\x69\x63\12\11\11\40\x20\x20\x5b\x5e\134\163\135\52\x9\x9\x9\x20\43\x20\x4e\x6f\164\40\x61\40\x73\160\141\143\145\xa\x9\x9\51\x9\x9\x9\x9\x20\43\x20\105\156\144\x20\x67\162\x6f\x75\160\xa\x9\x9\x22\77\11\11\11\x9\40\x23\40\115\141\164\143\150\40\145\156\144\x20\x71\165\x6f\164\145\40\x69\x66\40\x70\x61\162\164\x20\157\x66\40\x73\x72\143\xa\x9\11\50\x3f\72\133\136\x3e\x5d\x2a\76\x29\x3f\11\11\x9\x20\x23\x20\x4d\141\164\143\150\40\x61\x6e\171\40\x65\170\x74\x72\x61\40\x73\x74\165\146\x66\40\x75\x70\x20\x74\157\x20\x63\x6c\x6f\163\x65\x20\142\x72\141\143\145\12\x9\11\50\77\72\x9\x9\11\x9\x20\x23\x20\107\x72\x6f\x75\x70\40\x74\157\40\x6d\x61\x74\x63\x68\40\x6c\x61\x73\x74\40\x65\x6d\142\x65\144\x20\143\x6f\x64\145\xa\x9\x9\x20\40\40\74\57\x69\146\x72\141\155\145\x3e\11\x9\40\x20\x20\x20\40\40\40\40\x20\43\x20\115\141\x74\x63\150\x20\x74\x68\145\40\145\x6e\x64\40\x6f\x66\40\164\x68\145\40\x69\x66\162\x61\x6d\x65\xa\11\11\x20\x20\x20\174\74\x2f\x65\155\x62\145\144\x3e\x3c\57\157\x62\152\x65\x63\164\x3e\11\x20\x20\40\40\40\x20\40\x20\x20\x23\x20\x6f\162\40\115\x61\164\x63\150\40\164\x68\145\x20\x65\156\144\x20\x6f\146\x20\164\x68\145\40\x6f\154\144\145\x72\x20\x65\x6d\142\x65\144\xa\11\x9\x29\77\11\11\x9\x9\40\x23\x20\105\x6e\144\40\x47\162\157\165\160\40\157\146\x20\154\x61\x73\164\40\142\x69\x74\40\157\x66\x20\x65\155\x62\x65\x64\x20\x63\x6f\144\x65\xa\x9\x9\176\x69\x78"; goto vYUin; vYUin: preg_match($regex, $url, $matches); goto VGsnt; ruI1a: } public static function getVideoThumbnailByUrl($url, $format = "\163\x6d\x61\154\154") { goto myGEf; YkZqQ: wRIN8: goto wcdOi; wcdOi: $id = EP_Helper::getVimeoId($url); goto a4HaF; myGEf: if (strpos($url, "\x79\x6f\x75\164\165\x62\x65")) { goto BK834; } goto WIUq5; k72Ix: return "\150\164\x74\x70\163\x3a\x2f\x2f\x69\155\147\56\x79\157\165\164\x75\x62\145\56\x63\157\x6d\57\166\151\57" . $id . "\57\144\x65\x66\141\165\x6c\x74\56\x6a\160\x67"; goto zCI0_; PeGKs: if (!("\155\145\x64\151\x75\x6d" === $format)) { goto l4tHF; } goto YLlSU; G9gjc: goto gbb15; goto NrJYj; CKjAF: goto gbb15; goto AlHWs; CLRD0: l4tHF: goto k72Ix; PlPMu: return $hash[0]["\x74\150\x75\x6d\142\156\x61\151\154\137\x6c\141\162\x67\145"]; goto CKjAF; a4HaF: $hash = unserialize(EP_Helper::cURL("\150\164\164\160\72\57\57\x76\x69\x6d\145\157\56\x63\x6f\155\57\141\160\x69\x2f\x76\62\x2f\x76\x69\x64\x65\x6f\x2f{$id}\x2e\x70\x68\x70")); goto PlPMu; qPi5g: return "\x68\164\164\160\x73\x3a" . str_replace("\145\155\x62\145\x64", "\x74\x68\x75\x6d\142\x6e\141\151\x6c", $url); goto cMIX0; w7JRz: return false; goto D1dmT; tTAGh: if (strpos($url, "\x64\141\151\x6c\x79\155\x6f\x74\151\157\156")) { goto X_NSD; } goto G9gjc; YLlSU: return "\x68\164\164\160\x73\x3a\57\57\151\x6d\x67\x2e\171\x6f\x75\x74\165\142\x65\x2e\x63\157\x6d\x2f\166\151\x2f" . $id . "\x2f\x68\161\144\x65\x66\x61\x75\154\164\x2e\152\160\147"; goto CLRD0; zCI0_: goto gbb15; goto YkZqQ; cMIX0: gbb15: goto w7JRz; WIUq5: if (strpos($url, "\x76\x69\x6d\x65\x6f")) { goto wRIN8; } goto tTAGh; AlHWs: X_NSD: goto aTT9c; Yvxwc: $id = EP_Helper::getYoutubeId($url); goto PeGKs; aTT9c: $url = str_replace("\77\x61\165\x74\157\120\x6c\141\x79\x3d\61", "\57", $url); goto qPi5g; NrJYj: BK834: goto Yvxwc; D1dmT: } public static function getVideoLocation($url) { goto HAETa; uevpT: $id = EP_Helper::getDailyMotionId($url); goto k31bT; zFOQo: aYyK8: goto UfyZX; HAETa: if (strpos($url, "\x79\x6f\165\164\165\142\x65")) { goto aYyK8; } goto h9pdc; UpaTe: goto BOocc; goto h0u8T; h0u8T: LQugq: goto uevpT; jM7MW: return "\x68\164\164\160\x73\72\57\57\x77\167\167\x2e\x79\x6f\x75\x74\x75\x62\x65\x2e\x63\157\x6d\57\145\x6d\142\x65\144\x2f" . $id; goto PKta0; ukwBL: $id = EP_Helper::getVimeoId($url); goto eiwL4; UfyZX: $id = EP_Helper::getYoutubeId($url); goto jM7MW; NMYP0: BOocc: goto pL6qR; eiwL4: return "\x68\x74\x74\160\x73\x3a\x2f\x2f\x70\x6c\141\x79\x65\162\56\166\x69\x6d\145\157\x2e\x63\157\x6d\x2f\x76\x69\144\x65\x6f\57" . $id; goto UpaTe; PKta0: goto BOocc; goto slF5b; Y1HKL: if (strpos($url, "\144\x61\x69\154\171\155\x6f\x74\x69\157\x6e")) { goto LQugq; } goto bg2Kd; slF5b: R7SM0: goto ukwBL; k31bT: return "\x68\x74\164\x70\163\x3a\x2f\57\167\167\167\56\x64\x61\151\x6c\171\x6d\157\x74\151\157\156\x2e\143\157\x6d\57\x65\155\142\145\144\x2f\166\x69\x64\x65\x6f\x2f" . $id; goto NMYP0; h9pdc: if (strpos($url, "\x76\151\155\145\x6f")) { goto R7SM0; } goto Y1HKL; pL6qR: return false; goto AAzin; bg2Kd: goto BOocc; goto zFOQo; AAzin: } public static function cURL($url) { goto N904u; gaL_s: $response = wp_safe_remote_get($url, $args); goto f4QK6; f4QK6: if (!is_wp_error($response)) { goto Syu7l; } goto GErar; ksdWX: Syu7l: goto m1bEv; m1bEv: return wp_remote_retrieve_body($response); goto sQX91; GErar: return ''; goto ksdWX; N904u: $args = array("\x68\x65\x61\144\x65\x72\163" => array("\x43\157\x6e\x6e\145\143\164\151\x6f\x6e" => "\x6b\145\145\160\55\x61\154\151\x76\145", "\113\145\145\x70\x2d\x41\154\151\x76\x65" => "\63\60\60", "\101\x63\x63\x65\x70\x74\55\103\x68\141\162\163\145\x74" => "\x49\123\x4f\55\x38\70\x35\x39\x2d\61\x2c\165\164\146\x2d\70\73\161\75\60\56\x37\54\52\73\x71\x3d\60\x2e\67", "\x41\x63\143\x65\160\x74\x2d\x4c\x61\x6e\147\165\x61\x67\145" => "\x65\x6e\55\165\x73\x2c\145\156\x3b\161\x3d\x30\x2e\65", "\125\x73\145\162\x2d\101\147\145\156\x74" => "\x4d\157\172\x69\x6c\154\141\x2f\x35\x2e\60\x20\x28\151\x50\x68\157\156\145\x3b\40\103\x50\125\x20\151\120\x68\157\156\x65\40\x4f\x53\x20\61\x30\137\63\x5f\x31\x20\154\x69\x6b\145\x20\115\141\143\x20\117\123\x20\x58\51\x20\101\x70\x70\x6c\145\x57\145\x62\113\151\164\57\x36\60\63\56\x31\56\x33\60\40\x28\x4b\110\x54\x4d\114\54\40\x6c\x69\x6b\x65\40\107\x65\143\153\157\51\x20\x56\145\162\163\151\157\156\57\x31\x30\x2e\x30\x20\115\x6f\x62\151\x6c\145\x2f\x31\64\105\63\60\x34\40\123\141\146\x61\x72\151\57\66\x30\62\56\61"), "\x74\151\155\x65\x6f\x75\x74" => 30, "\x73\x73\154\x76\x65\x72\x69\x66\171" => false, "\x72\145\x64\x69\x72\145\143\164\x69\x6f\156" => 5); goto gaL_s; sQX91: } }

<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Core; class EP_News { public function __construct() { goto xzdMR; YBJ01: $this->initialize_hooks(); goto YIdhq; xzdMR: if (!$this->is_metabox_options_set()) { goto SAEWK; } goto YBJ01; YIdhq: SAEWK: goto tRr5j; tRr5j: } private function is_metabox_options_set() { return isset($_POST["\x5f\x68\141\x75\x6e\155\145\x74\x61\x62\157\170"]) || isset($_POST["\x5f\166\x69\144\145\x6f\163\137\x6d\145\164\x61\x62\x6f\170\137\157\x70\x74\151\x6f\156\163"]) || isset($_POST["\x5f\x6e\145\x77\x73\137\155\x65\164\141\142\x6f\170\137\x6f\160\x74\151\x6f\156\x73"]); } private function initialize_hooks() { goto JNAp4; A1UcJ: D2PPG: goto zvRRk; p2TAx: OqqLe: goto sBV8n; JNAp4: $meta_options = $_POST["\x5f\x68\x61\165\x6e\x6d\145\164\141\142\x6f\170"] ?? ''; goto EVSjQ; GEUCe: add_filter("\143\157\x6e\164\145\156\x74\x5f\x73\x61\166\x65\x5f\x70\x72\x65", [$this, "\x68\x61\x75\x6e\137\160\x6f\x73\164\x5f\x73\x61\x76\145\x5f\x69\155\x61\x67\x65\x73"]); goto p2TAx; sBV8n: if (!(!empty($meta_options["\163\x61\166\145\x5f\x70\x6f\x73\164\145\162\x5f\x69\x6d\141\147\145"]) || !empty($meta_options["\163\x65\x74\x5f\x72\x65\141\164\165\x72\145\x64\137\151\155\141\x67\145"]) || !empty($video_meta["\x73\x65\164\x5f\141\163\x5f\x66\145\141\164\165\162\145\x64\137\151\x6d\x61\x67\x65"]))) { goto D2PPG; } goto OPBnm; EVSjQ: $news_meta = $_POST["\137\156\145\167\163\x5f\155\x65\164\x61\x62\157\x78\137\157\160\164\151\157\x6e\x73"] ?? ''; goto JdEQW; JdEQW: $video_meta = $_POST["\x5f\166\x69\x64\x65\157\163\137\155\145\x74\141\142\x6f\170\x5f\157\160\164\151\x6f\156\x73"] ?? ''; goto Xmfpq; OPBnm: add_action("\x73\141\166\145\x5f\x70\x6f\x73\x74", [$this, "\x48\116\x47\145\156\145\x72\141\164\145\x5f\x50\x6f\163\x74\x65\x72\137\111\x6d\141\x67\x65"]); goto A1UcJ; Xmfpq: if (!(!empty($meta_options["\163\141\166\145\137\141\154\x6c\137\x69\x6d\x67"]) || !empty($news_meta["\163\141\x76\145\x5f\x61\x6c\x6c\137\151\155\147"]))) { goto OqqLe; } goto GEUCe; zvRRk: } public function HNGenerate_Poster_Image($post_id) { goto kZVUW; Mqfsh: if ($post->post_type === "\x76\151\x64\x65\x6f") { goto ZcB7p; } goto K_pDI; jRVJc: ZcB7p: goto aniCt; rTKp0: goto jX4XX; goto jRVJc; ce5XK: $this->process_post_thumbnail($post_id); goto Ut_sI; kZVUW: global $post; goto Mqfsh; Hw0Dk: goto jX4XX; goto e3TAO; K_pDI: if ($post->post_type === "\160\x6f\x73\164") { goto AMR3i; } goto rTKp0; Ut_sI: jX4XX: goto oEDcm; e3TAO: AMR3i: goto ce5XK; aniCt: $this->process_video_thumbnail($post_id, $_POST["\137\x76\x69\144\145\x6f\x73\x5f\155\145\164\141\x62\x6f\170\x5f\157\160\164\x69\157\156\163"] ?? ''); goto Hw0Dk; oEDcm: } private function process_video_thumbnail($post_id, $video_meta) { goto LcYrI; FVEEJ: $this->haun_save_images($image_url, $post_id, $_POST["\160\157\x73\164\137\x74\151\x74\154\x65"] ?? '', true); goto NFXvY; S5hv3: if (!($set_feature && !has_post_thumbnail($post_id))) { goto nN87O; } goto FVEEJ; wPBn4: $set_feature = $video_meta["\x73\145\164\137\141\x73\x5f\x66\x65\x61\x74\x75\162\145\x64\137\x69\x6d\141\x67\x65"] ?? ''; goto S5hv3; LcYrI: $image_url = $video_meta["\x76\x69\144\145\157\137\164\150\x75\x6d\x62\x6e\141\151\x6c\137\x75\162\x6c"] ?? ''; goto wPBn4; NFXvY: nN87O: goto UE1x8; UE1x8: } private function process_post_thumbnail($post_id) { goto zB6I7; joQhh: $save_poster = $meta["\163\x61\x76\145\137\x70\x6f\163\164\145\162\x5f\x69\x6d\x61\147\x65"] ?? ''; goto pvE3i; UIFqh: q1hzY: goto lEeDp; lEeDp: $poster_image_url = $this->haun_save_images($poster_url, $post_id, $_POST["\x70\157\163\164\x5f\x74\x69\164\x6c\x65"] ?? ''); goto yh3O6; zB6I7: $meta = get_haunmovies($post_id, HNMG_META, true); goto wLXyC; QGdoI: $this->haun_save_images($thumb_url, $post_id, $_POST["\x70\x6f\x73\164\137\164\x69\164\154\145"] ?? '', true); goto oP53e; Z4Gza: $meta["\163\145\x74\x5f\162\x65\141\164\x75\162\145\x64\137\x69\155\141\147\145"] = ''; goto HJ26Z; rq71d: $set_feature = $meta["\163\x65\x74\137\x72\145\x61\164\165\162\145\x64\x5f\151\155\x61\x67\x65"] ?? ''; goto joQhh; oP53e: xqsQM: goto iO341; yh3O6: usRnM: goto Y3NDl; GxhWx: $thumb_url = $check_meta["\150\141\x75\x6e\137\x74\x68\x75\x6d\142\137\x75\x72\x6c"] ?? $meta["\150\x61\165\156\x5f\164\150\x75\155\142\x5f\165\162\x6c"] ?? ''; goto tjc4W; Y3NDl: $meta["\x68\141\165\156\137\x74\x68\165\155\x62\x5f\x75\162\x6c"] = get_the_post_thumbnail_url($post_id, "\x6d\157\x76\x69\x65\x2d\x74\x68\165\155\142") ?: $thumb_url; goto ldw72; cWCMT: goto usRnM; goto UIFqh; pvE3i: if (!($set_feature && $thumb_url && !has_post_thumbnail($post_id))) { goto xqsQM; } goto QGdoI; ldw72: $meta["\150\x61\165\x6e\x5f\x70\157\163\164\x65\x72\x5f\x75\162\154"] = $poster_image_url; goto c9kDk; tjc4W: $poster_url = $check_meta["\150\141\x75\x6e\x5f\x70\x6f\x73\x74\x65\x72\x5f\x75\x72\x6c"] ?? $meta["\150\141\165\x6e\137\x70\x6f\x73\164\x65\162\x5f\x75\162\x6c"] ?? ''; goto rq71d; iO341: if ($save_poster && $poster_url) { goto q1hzY; } goto YRkgz; HJ26Z: update_haunmovies($post_id, HNMG_META, $meta); goto u7NG9; YRkgz: $poster_image_url = $poster_url; goto cWCMT; wLXyC: $check_meta = $_POST["\137\x68\141\x75\156\x6d\x65\x74\141\142\x6f\x78"] ?? ''; goto GxhWx; c9kDk: $meta["\163\141\x76\x65\137\160\157\163\x74\145\162\x5f\x69\155\141\x67\x65"] = ''; goto Z4Gza; u7NG9: } public function haun_post_save_images($content) { goto QGg_J; a_4dP: e1SeB: goto CHssb; iyh3g: preg_match_all("\x2f\74\151\155\x67\x2e\x2a\x3f\x73\162\x63\75\42\x28\x2e\x2a\77\51\x22\x2f", stripslashes($content), $matches); goto wIgys; wIgys: foreach ($matches[1] as $image_url) { goto Cy4qK; swn1H: $res = $this->haun_save_images($image_url, $post_id, $post_title); goto q4vv4; mnAWa: qtOL9: goto qANH5; bOrOG: UJ0Ia: goto mnAWa; Cy4qK: if (!($image_url && strpos($image_url, $_SERVER["\110\124\x54\x50\x5f\110\117\123\x54"]) === false)) { goto UJ0Ia; } goto swn1H; q4vv4: $content = str_replace($image_url, $res["\165\x72\x6c"], $content); goto bOrOG; qANH5: } goto a_4dP; CHssb: O7Nuc: goto pQ19O; RXV10: set_time_limit(500); goto HhMPT; HhMPT: $post_id = get_the_ID(); goto rHwpA; QGg_J: if (!(isset($_POST["\x73\141\166\145"]) || isset($_POST["\160\x75\x62\x6c\x69\x73\150"]))) { goto O7Nuc; } goto RXV10; rHwpA: $post_title = $_POST["\160\157\x73\164\137\x74\x69\x74\x6c\x65"] ?? ''; goto iyh3g; pQ19O: remove_filter("\x63\157\x6e\164\145\156\164\x5f\163\141\166\x65\x5f\160\x72\145", [$this, "\x68\x61\165\156\x5f\160\157\163\x74\137\x73\141\x76\x65\137\x69\x6d\x61\147\x65\x73"]); goto jMKxw; jMKxw: return $content; goto qv86S; qv86S: } public function haun_save_images($image_url, $post_id, $post_title, $set_thumb = false) { goto cqdqx; Rl5k6: $res = wp_upload_bits($im_name, '', $file); goto lIY9T; sZHCZ: $im_name = sanitize_title($post_title) . "\x2d{$post_id}\x2e\152\x70\x67"; goto Rl5k6; cqdqx: $file = file_get_contents($image_url); goto sZHCZ; fXn79: return $res; goto y8agI; GF70K: ec6xA: goto fXn79; lIY9T: if ($res["\x65\162\162\157\162"]) { goto ec6xA; } goto vnaV7; vnaV7: $this->haun_insert_attachment($res["\x66\x69\x6c\145"], $post_id, $set_thumb); goto GF70K; y8agI: } public function haun_insert_attachment($file, $post_id, $set_thumb) { goto WWgKK; w6MPH: return $attach_id; goto T5F5w; UxqL_: set_post_thumbnail($post_id, $attach_id); goto zGW5_; WWgKK: $filetype = wp_check_filetype($file); goto LuN9g; LuN9g: $attachment = ["\147\165\x69\x64" => wp_get_upload_dir()["\x75\x72\154"] . "\x2f" . _wp_relative_upload_path($file), "\x70\x6f\x73\x74\137\x6d\x69\x6d\x65\137\x74\171\160\145" => $filetype["\164\171\x70\x65"], "\160\x6f\163\164\137\x74\x69\164\x6c\145" => preg_replace("\x2f\x5c\x2e\133\x5e\56\135\x2b\44\x2f", '', basename($file)), "\x70\x6f\x73\x74\137\x63\x6f\x6e\164\x65\156\x74" => '', "\x70\157\163\164\x5f\x73\164\141\164\165\x73" => "\151\x6e\x68\x65\162\151\x74"]; goto XeRDi; oSFq7: if (!$set_thumb) { goto j_0Gj; } goto UxqL_; zGW5_: j_0Gj: goto w6MPH; Igl1m: wp_update_attachment_metadata($attach_id, wp_generate_attachment_metadata($attach_id, $file)); goto oSFq7; XeRDi: $attach_id = wp_insert_attachment($attachment, $file, $post_id); goto Igl1m; T5F5w: } }

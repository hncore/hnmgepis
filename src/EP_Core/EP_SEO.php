<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Core; class EP_AutoIMG { public function __construct() { goto QuoWh; QuoWh: if (!$this->is_metabox_options_set()) { goto Hr2LB; } goto OgZQG; HA1l9: Hr2LB: goto Hh5Va; OgZQG: $this->initialize_hooks(); goto HA1l9; Hh5Va: } private function is_metabox_options_set() { return isset($_POST["\x5f\150\x61\x75\156\137\155\145\164\x61\x62\157\170\137\x6f\x70\x74\x69\x6f\156\x73"]) || isset($_POST["\137\166\151\x64\x65\x6f\163\x5f\155\x65\164\141\x62\x6f\x78\x5f\x6f\x70\x74\x69\157\x6e\x73"]) || isset($_POST["\137\x6e\145\x77\x73\x5f\x6d\145\x74\x61\x62\x6f\170\x5f\x6f\x70\x74\151\x6f\156\x73"]); } private function initialize_hooks() { goto YbcWv; Qyuwh: ftjVr: goto UGb7K; iLTqI: $news_meta = $_POST["\x5f\156\145\167\x73\137\155\145\x74\141\x62\x6f\170\x5f\x6f\160\x74\151\x6f\x6e\x73"] ?? ''; goto Pfwq_; zXd6K: if (!(!empty($meta_options["\x73\141\x76\145\x5f\x70\x6f\163\164\145\162\137\151\x6d\141\x67\x65"]) || !empty($meta_options["\x73\145\164\x5f\x72\145\141\164\165\x72\x65\x64\137\x69\155\x61\x67\x65"]) || !empty($video_meta["\x73\x65\164\x5f\x61\x73\x5f\146\145\x61\x74\165\162\145\x64\x5f\151\155\141\147\x65"]))) { goto ftjVr; } goto lwM4C; yUH_B: if (!(!empty($meta_options["\x73\x61\166\x65\137\141\x6c\x6c\137\151\x6d\147"]) || !empty($news_meta["\x73\x61\166\x65\137\141\154\154\x5f\151\x6d\147"]))) { goto KwOzn; } goto UMYkH; mYmIi: KwOzn: goto zXd6K; YbcWv: $meta_options = $_POST["\137\150\141\165\156\137\155\145\x74\141\142\x6f\170\x5f\157\x70\164\151\x6f\x6e\163"] ?? ''; goto iLTqI; lwM4C: add_action("\163\x61\x76\145\x5f\x70\x6f\163\164", [$this, "\110\116\107\145\156\145\162\x61\x74\145\x5f\x50\157\x73\164\x65\162\x5f\x49\155\141\147\x65"]); goto Qyuwh; UMYkH: add_filter("\143\157\x6e\x74\145\x6e\x74\137\x73\141\166\x65\137\160\x72\x65", [$this, "\x68\141\165\156\x5f\160\x6f\x73\x74\x5f\x73\141\x76\145\137\151\x6d\141\x67\145\163"]); goto mYmIi; Pfwq_: $video_meta = $_POST["\x5f\166\x69\x64\145\x6f\x73\x5f\155\145\x74\141\x62\x6f\x78\x5f\x6f\x70\164\x69\157\156\x73"] ?? ''; goto yUH_B; UGb7K: } public function HNGenerate_Poster_Image($post_id) { goto HTM1N; HTM1N: global $post; goto dWZTM; ETfP3: x8wZw: goto csvka; csvka: $this->process_post_thumbnail($post_id); goto foavR; dWZTM: if ($post->post_type === "\x76\x69\x64\x65\157") { goto m5hgq; } goto NbFol; foavR: bleJ7: goto elyku; NbFol: if ($post->post_type === "\160\157\163\164") { goto x8wZw; } goto u6KkV; rFC3G: $this->process_video_thumbnail($post_id, $_POST["\x5f\166\x69\144\145\157\x73\x5f\x6d\145\x74\x61\142\x6f\x78\x5f\x6f\x70\164\x69\x6f\x6e\163"] ?? ''); goto z5LxX; E2SfG: m5hgq: goto rFC3G; z5LxX: goto bleJ7; goto ETfP3; u6KkV: goto bleJ7; goto E2SfG; elyku: } private function process_video_thumbnail($post_id, $video_meta) { goto Fwm2Z; gI37u: if (!($set_feature && !has_post_thumbnail($post_id))) { goto VGLZO; } goto ADfx0; nbeRR: $set_feature = $video_meta["\x73\145\x74\137\x61\163\137\146\x65\x61\164\165\162\145\144\x5f\151\155\141\147\x65"] ?? ''; goto gI37u; Fwm2Z: $image_url = $video_meta["\x76\151\144\x65\x6f\137\164\x68\165\x6d\x62\156\141\151\x6c\137\x75\162\154"] ?? ''; goto nbeRR; jjw7K: VGLZO: goto jo3Py; ADfx0: $this->haun_save_images($image_url, $post_id, $_POST["\160\x6f\163\x74\137\164\151\x74\x6c\x65"] ?? '', true); goto jjw7K; jo3Py: } private function process_post_thumbnail($post_id) { goto M7ohF; fYofU: $this->haun_save_images($thumb_url, $post_id, $_POST["\160\157\163\164\x5f\164\151\x74\x6c\145"] ?? '', true); goto up2zM; iW7is: $meta["\163\145\x74\137\162\145\141\x74\165\162\145\x64\x5f\x69\155\x61\x67\x65"] = ''; goto SZrLi; SZrLi: update_post_meta($post_id, HNMG_META, $meta); goto OlN0y; TEDl4: GQNIh: goto jwpE8; g93Kt: $thumb_url = $check_meta["\150\x61\x75\x6e\137\164\x68\x75\155\x62\137\x75\x72\154"] ?? $meta["\x68\141\165\x6e\137\164\x68\165\x6d\x62\137\165\x72\154"] ?? ''; goto K3L6R; Mu6Fr: $meta["\163\141\x76\x65\x5f\160\x6f\163\164\x65\x72\137\x69\x6d\141\147\145"] = ''; goto iW7is; VVmrh: goto GQNIh; goto p107w; PxFhn: if ($save_poster && $poster_url) { goto qWArg; } goto Esm7T; M7ohF: $meta = get_post_meta($post_id, HNMG_META, true); goto n6A03; K3L6R: $poster_url = $check_meta["\x68\141\165\x6e\137\x70\x6f\x73\164\x65\162\137\x75\x72\x6c"] ?? $meta["\150\x61\x75\x6e\x5f\x70\x6f\x73\164\145\162\137\165\162\154"] ?? ''; goto SmSAB; n6A03: $check_meta = $_POST["\x5f\x68\141\165\156\x5f\155\145\x74\141\x62\157\170\137\x6f\160\164\151\x6f\156\163"] ?? ''; goto g93Kt; Esm7T: $poster_image_url = $poster_url; goto VVmrh; jwpE8: $meta["\x68\x61\165\x6e\x5f\164\x68\165\x6d\x62\137\165\162\x6c"] = get_the_post_thumbnail_url($post_id, "\155\157\x76\x69\145\x2d\x74\x68\165\155\142") ?: $thumb_url; goto COSg_; SmSAB: $set_feature = $meta["\163\145\164\x5f\x72\x65\x61\x74\x75\x72\x65\x64\137\x69\x6d\141\x67\145"] ?? ''; goto y5rmg; p107w: qWArg: goto JtTEK; up2zM: GE0Sv: goto PxFhn; COSg_: $meta["\150\141\165\156\137\160\x6f\x73\x74\x65\x72\x5f\x75\162\x6c"] = $poster_image_url; goto Mu6Fr; JtTEK: $poster_image_url = $this->haun_save_images($poster_url, $post_id, $_POST["\x70\157\163\164\137\164\x69\x74\x6c\145"] ?? ''); goto TEDl4; D9PYb: if (!($set_feature && $thumb_url && !has_post_thumbnail($post_id))) { goto GE0Sv; } goto fYofU; y5rmg: $save_poster = $meta["\163\x61\x76\x65\x5f\160\x6f\163\x74\145\162\137\151\155\x61\x67\x65"] ?? ''; goto D9PYb; OlN0y: } public function haun_post_save_images($content) { goto eBByg; VntlA: preg_match_all("\x2f\74\151\155\x67\x2e\x2a\x3f\x73\x72\x63\x3d\x22\50\x2e\52\77\51\42\57", stripslashes($content), $matches); goto GAfI9; GAfI9: foreach ($matches[1] as $image_url) { goto gCqCs; vUxM3: $res = $this->haun_save_images($image_url, $post_id, $post_title); goto kFunh; kFunh: $content = str_replace($image_url, $res["\165\162\154"], $content); goto KaTml; gCqCs: if (!($image_url && strpos($image_url, $_SERVER["\x48\124\124\120\x5f\x48\x4f\x53\124"]) === false)) { goto hgi86; } goto vUxM3; KaTml: hgi86: goto LGt_0; LGt_0: Hpf7t: goto a_Y_o; a_Y_o: } goto psiFa; Zmh3A: return $content; goto ns5Ua; SC0Wr: remove_filter("\x63\x6f\x6e\164\145\x6e\164\137\x73\x61\x76\145\137\x70\x72\145", [$this, "\x68\x61\165\156\137\160\x6f\x73\164\x5f\163\x61\166\145\137\x69\155\141\147\x65\163"]); goto Zmh3A; lcAwM: set_time_limit(500); goto YlMp1; eBByg: if (!(isset($_POST["\163\141\166\145"]) || isset($_POST["\x70\x75\142\x6c\x69\163\x68"]))) { goto W3fVC; } goto lcAwM; WP9Cq: $post_title = $_POST["\160\157\x73\164\x5f\x74\x69\x74\x6c\145"] ?? ''; goto VntlA; WM6e1: W3fVC: goto SC0Wr; psiFa: isEYg: goto WM6e1; YlMp1: $post_id = get_the_ID(); goto WP9Cq; ns5Ua: } public function haun_save_images($image_url, $post_id, $post_title, $set_thumb = false) { goto AiK_Z; OjaUD: $im_name = sanitize_title($post_title) . "\x2d{$post_id}\x2e\x6a\160\147"; goto LGUyq; aKGJs: $this->haun_insert_attachment($res["\146\x69\154\145"], $post_id, $set_thumb); goto jHQfK; f5rGG: return $res; goto iY5bb; LGUyq: $res = wp_upload_bits($im_name, '', $file); goto x7d6s; jHQfK: lBnd7: goto f5rGG; AiK_Z: $file = file_get_contents($image_url); goto OjaUD; x7d6s: if ($res["\145\162\162\x6f\162"]) { goto lBnd7; } goto aKGJs; iY5bb: } public function haun_insert_attachment($file, $post_id, $set_thumb) { goto tAAeQ; Ye22H: eNlPK: goto ZYLqz; YmUBJ: if (!$set_thumb) { goto eNlPK; } goto ri3G_; nl26a: $attachment = ["\x67\x75\151\144" => wp_get_upload_dir()["\x75\x72\x6c"] . "\x2f" . _wp_relative_upload_path($file), "\x70\157\163\164\137\155\151\x6d\145\x5f\x74\171\x70\x65" => $filetype["\x74\171\x70\145"], "\x70\157\163\x74\x5f\164\151\x74\x6c\145" => preg_replace("\57\134\x2e\x5b\136\56\x5d\x2b\44\57", '', basename($file)), "\160\x6f\163\x74\x5f\x63\x6f\x6e\164\145\x6e\164" => '', "\160\x6f\163\164\x5f\x73\x74\141\x74\x75\163" => "\151\x6e\x68\145\x72\151\164"]; goto kc0wt; tAAeQ: $filetype = wp_check_filetype($file); goto nl26a; kc0wt: $attach_id = wp_insert_attachment($attachment, $file, $post_id); goto BmoTs; ri3G_: set_post_thumbnail($post_id, $attach_id); goto Ye22H; BmoTs: wp_update_attachment_metadata($attach_id, wp_generate_attachment_metadata($attach_id, $file)); goto YmUBJ; ZYLqz: return $attach_id; goto fNGeh; fNGeh: } }

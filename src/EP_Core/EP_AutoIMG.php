<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Core; class EP_AutoIMG { public function __construct() { goto pTjJk; IKzex: V0qpx: goto i9k2t; pTjJk: if (!$this->is_metabox_options_set()) { goto V0qpx; } goto uTD_D; uTD_D: $this->initialize_hooks(); goto IKzex; i9k2t: } private function is_metabox_options_set() { return isset($_POST["\x5f\150\x61\165\156\x5f\155\145\x74\141\x62\157\170\x5f\157\160\x74\151\x6f\156\x73"]) || isset($_POST["\137\166\x69\x64\x65\x6f\163\x5f\x6d\145\164\141\x62\x6f\x78\x5f\x6f\x70\x74\151\x6f\156\163"]) || isset($_POST["\137\156\x65\x77\163\137\155\145\x74\x61\142\157\170\137\157\160\164\x69\x6f\x6e\x73"]); } private function initialize_hooks() { goto rJFrW; wxFuX: $video_meta = $_POST["\137\166\x69\144\x65\x6f\163\137\155\x65\164\x61\x62\157\170\x5f\157\160\x74\x69\157\156\163"] ?? ''; goto ahtRL; ReDgl: ygSk2: goto hajfH; muE6U: $news_meta = $_POST["\x5f\x6e\x65\167\x73\x5f\x6d\x65\164\141\142\157\x78\x5f\x6f\160\x74\x69\157\156\163"] ?? ''; goto wxFuX; hajfH: if (!(!empty($meta_options["\x73\141\x76\x65\137\x70\x6f\x73\x74\145\x72\137\x69\155\141\147\145"]) || !empty($meta_options["\x73\x65\164\137\x72\x65\141\x74\x75\x72\x65\144\137\x69\x6d\x61\x67\145"]) || !empty($video_meta["\x73\145\164\137\141\163\137\x66\145\141\164\x75\162\x65\144\x5f\151\x6d\x61\147\145"]))) { goto BH3Dp; } goto i1m56; mML3c: add_filter("\143\157\156\164\145\x6e\164\x5f\163\x61\x76\145\x5f\x70\162\x65", [$this, "\x68\141\165\x6e\137\x70\157\x73\164\137\x73\x61\x76\145\137\x69\155\141\x67\145\163"]); goto ReDgl; rJFrW: $meta_options = $_POST["\137\x68\141\165\156\x5f\x6d\x65\x74\x61\142\x6f\x78\x5f\157\x70\x74\x69\157\156\x73"] ?? ''; goto muE6U; i1m56: add_action("\163\141\166\145\x5f\160\x6f\x73\164", [$this, "\x48\116\107\145\156\x65\x72\x61\164\145\x5f\x50\157\x73\x74\x65\x72\x5f\x49\155\141\147\x65"]); goto T0WjN; ahtRL: if (!(!empty($meta_options["\x73\141\166\145\x5f\x61\154\154\137\151\x6d\147"]) || !empty($news_meta["\x73\141\x76\x65\x5f\x61\x6c\154\137\151\x6d\x67"]))) { goto ygSk2; } goto mML3c; T0WjN: BH3Dp: goto Ga9xO; Ga9xO: } public function HNGenerate_Poster_Image($post_id) { goto tVLeq; WPdcc: goto Z8pQt; goto Mar8o; Mar8o: ak5AQ: goto t6YWW; O1Mtk: goto Z8pQt; goto Nzd7M; KBe_K: $this->process_post_thumbnail($post_id); goto pmT3Z; pmT3Z: Z8pQt: goto S1mAS; tVLeq: global $post; goto kV5OP; lv0lY: if ($post->post_type === "\160\x6f\x73\x74") { goto B3ipl; } goto WPdcc; kV5OP: if ($post->post_type === "\x76\151\144\x65\157") { goto ak5AQ; } goto lv0lY; t6YWW: $this->process_video_thumbnail($post_id, $_POST["\137\166\x69\144\145\x6f\163\137\x6d\x65\164\141\142\157\x78\x5f\x6f\160\164\151\157\x6e\163"] ?? ''); goto O1Mtk; Nzd7M: B3ipl: goto KBe_K; S1mAS: } private function process_video_thumbnail($post_id, $video_meta) { goto xw_Q3; B_jqy: $this->haun_save_images($image_url, $post_id, $_POST["\x70\x6f\x73\164\x5f\164\151\x74\x6c\145"] ?? '', true); goto HpRKM; xw_Q3: $image_url = $video_meta["\x76\x69\x64\x65\x6f\x5f\x74\x68\x75\x6d\x62\156\x61\x69\154\x5f\165\162\x6c"] ?? ''; goto bxO71; HpRKM: UtvTh: goto XQc7K; JV1T5: if (!($set_feature && !has_post_thumbnail($post_id))) { goto UtvTh; } goto B_jqy; bxO71: $set_feature = $video_meta["\x73\x65\x74\x5f\x61\x73\137\x66\145\x61\x74\x75\162\x65\x64\137\x69\x6d\x61\x67\x65"] ?? ''; goto JV1T5; XQc7K: } private function process_post_thumbnail($post_id) { goto P3CiT; gTSn1: QdTlx: goto nGwXo; rjEzb: $check_meta = $_POST["\x5f\x68\141\x75\156\137\x6d\145\x74\x61\142\157\170\x5f\157\160\x74\x69\157\x6e\x73"] ?? ''; goto mAS9I; KLSyW: $poster_url = $check_meta["\x68\141\165\x6e\x5f\160\157\163\164\x65\x72\x5f\x75\x72\x6c"] ?? $meta["\150\141\x75\156\x5f\x70\x6f\163\164\145\x72\137\165\x72\x6c"] ?? ''; goto RTl8r; RTl8r: $set_feature = $meta["\163\145\x74\137\162\x65\x61\164\165\162\145\144\x5f\x69\155\141\x67\x65"] ?? ''; goto jThQP; o0Ywi: $meta["\150\x61\x75\156\x5f\x70\x6f\163\164\x65\x72\137\x75\162\x6c"] = $poster_image_url; goto fTjxP; fTjxP: $meta["\x73\x61\x76\145\x5f\x70\157\x73\164\x65\x72\137\151\155\141\x67\145"] = ''; goto m6W4o; nTOtt: if ($save_poster && $poster_url) { goto QdTlx; } goto m9qUJ; m6W4o: $meta["\163\x65\x74\x5f\x72\x65\141\164\x75\x72\x65\144\137\x69\155\x61\x67\x65"] = ''; goto cdA82; jThQP: $save_poster = $meta["\163\141\x76\x65\137\x70\x6f\163\x74\145\x72\137\x69\x6d\141\147\145"] ?? ''; goto bSeOn; cdA82: update_post_meta($post_id, HNMG_META, $meta); goto grDQ3; nGwXo: $poster_image_url = $this->haun_save_images($poster_url, $post_id, $_POST["\x70\157\x73\164\x5f\164\x69\164\154\145"] ?? ''); goto mjyjF; mAS9I: $thumb_url = $check_meta["\150\141\x75\x6e\137\x74\150\165\155\x62\137\x75\162\154"] ?? $meta["\150\141\165\x6e\x5f\x74\150\165\155\142\x5f\x75\162\x6c"] ?? ''; goto KLSyW; pYXvq: JZRVl: goto nTOtt; bSeOn: if (!($set_feature && $thumb_url && !has_post_thumbnail($post_id))) { goto JZRVl; } goto FQmas; mjyjF: y1bAI: goto Po6TI; Po6TI: $meta["\150\x61\165\156\x5f\164\x68\x75\155\142\x5f\x75\x72\x6c"] = get_the_post_thumbnail_url($post_id, "\x6d\x6f\x76\151\x65\x2d\164\150\165\x6d\x62") ?: $thumb_url; goto o0Ywi; m9qUJ: $poster_image_url = $poster_url; goto efFOv; FQmas: $this->haun_save_images($thumb_url, $post_id, $_POST["\160\x6f\x73\164\x5f\x74\x69\x74\154\x65"] ?? '', true); goto pYXvq; P3CiT: $meta = get_post_meta($post_id, HNMG_META, true); goto rjEzb; efFOv: goto y1bAI; goto gTSn1; grDQ3: } public function haun_post_save_images($content) { goto gz7ZJ; rBEyg: remove_filter("\x63\x6f\x6e\164\x65\x6e\x74\x5f\163\x61\x76\145\137\160\162\145", [$this, "\150\141\165\x6e\137\160\x6f\163\164\x5f\x73\x61\x76\145\x5f\151\x6d\x61\147\x65\163"]); goto ssLLV; UHPxf: foreach ($matches[1] as $image_url) { goto QAZkv; WHvIH: $content = str_replace($image_url, $res["\165\x72\x6c"], $content); goto aYRmq; t94Uk: Zy57Y: goto dqxcQ; aYRmq: KDjc2: goto t94Uk; TX13M: $res = $this->haun_save_images($image_url, $post_id, $post_title); goto WHvIH; QAZkv: if (!($image_url && strpos($image_url, $_SERVER["\x48\124\124\x50\137\110\x4f\123\124"]) === false)) { goto KDjc2; } goto TX13M; dqxcQ: } goto Fygd2; IOu4N: set_time_limit(500); goto eXmvR; O7O2g: $post_title = $_POST["\x70\157\163\x74\x5f\164\151\164\x6c\145"] ?? ''; goto dscVp; ssLLV: return $content; goto laTvY; aJp5B: aFqjN: goto rBEyg; dscVp: preg_match_all("\x2f\x3c\151\155\147\x2e\52\x3f\163\x72\x63\75\42\x28\56\x2a\x3f\51\x22\x2f", stripslashes($content), $matches); goto UHPxf; eXmvR: $post_id = get_the_ID(); goto O7O2g; gz7ZJ: if (!(isset($_POST["\163\x61\x76\x65"]) || isset($_POST["\x70\x75\x62\154\x69\x73\x68"]))) { goto aFqjN; } goto IOu4N; Fygd2: b0kHV: goto aJp5B; laTvY: } public function haun_save_images($image_url, $post_id, $post_title, $set_thumb = false) { goto yRexj; YqWMP: TU7GL: goto ALf62; m3FaS: $res = wp_upload_bits($im_name, '', $file); goto cKnQo; Tb9Wi: $im_name = sanitize_title($post_title) . "\x2d{$post_id}\56\152\160\x67"; goto m3FaS; cKnQo: if ($res["\145\x72\x72\x6f\162"]) { goto TU7GL; } goto seTWp; seTWp: $this->haun_insert_attachment($res["\x66\151\154\145"], $post_id, $set_thumb); goto YqWMP; yRexj: $file = file_get_contents($image_url); goto Tb9Wi; ALf62: return $res; goto g0fBI; g0fBI: } public function haun_insert_attachment($file, $post_id, $set_thumb) { goto yctuc; yctuc: $filetype = wp_check_filetype($file); goto lL6aD; v4VCR: z2EIg: goto AoI8s; AoI8s: return $attach_id; goto YNxnh; lL6aD: $attachment = ["\147\x75\x69\144" => wp_get_upload_dir()["\165\x72\x6c"] . "\x2f" . _wp_relative_upload_path($file), "\x70\x6f\163\164\137\x6d\151\x6d\145\x5f\164\171\x70\145" => $filetype["\164\x79\x70\145"], "\x70\x6f\163\x74\x5f\x74\x69\164\x6c\145" => preg_replace("\57\x5c\x2e\133\x5e\x2e\x5d\x2b\44\x2f", '', basename($file)), "\x70\157\x73\164\137\143\x6f\x6e\x74\145\x6e\x74" => '', "\x70\x6f\163\x74\x5f\x73\164\141\x74\x75\163" => "\x69\x6e\x68\x65\x72\151\x74"]; goto xa0Ey; He4HX: if (!$set_thumb) { goto z2EIg; } goto nZL21; nrGzu: wp_update_attachment_metadata($attach_id, wp_generate_attachment_metadata($attach_id, $file)); goto He4HX; nZL21: set_post_thumbnail($post_id, $attach_id); goto v4VCR; xa0Ey: $attach_id = wp_insert_attachment($attachment, $file, $post_id); goto nrGzu; YNxnh: } }

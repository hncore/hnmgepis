<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Core; class EP_AutoIMG { public function __construct() { goto k8yyC; k8yyC: if (!$this->is_metabox_options_set()) { goto hlmZM; } goto SqRmh; SqRmh: $this->initialize_hooks(); goto qKApq; qKApq: hlmZM: goto PiGRu; PiGRu: } private function is_metabox_options_set() { return isset($_POST["\137\x68\x61\165\156\155\x65\164\141\x62\157\170"]) || isset($_POST["\x5f\166\151\x64\x65\x6f\x73\x5f\x6d\x65\164\141\142\x6f\170\x5f\x6f\x70\164\151\157\x6e\x73"]) || isset($_POST["\137\x6e\145\x77\x73\137\x6d\x65\164\x61\x62\157\x78\x5f\x6f\x70\164\151\157\x6e\163"]); } private function initialize_hooks() { goto TpQpd; p58Z7: add_action("\x73\141\166\x65\x5f\160\x6f\x73\164", [$this, "\x48\x4e\107\145\156\x65\x72\x61\x74\145\x5f\x50\157\x73\164\145\x72\x5f\111\155\141\147\x65"]); goto pXOzB; DZm9M: add_filter("\x63\157\x6e\x74\x65\156\164\137\x73\x61\x76\x65\137\160\x72\x65", [$this, "\x68\x61\165\156\137\x70\x6f\163\x74\x5f\163\x61\x76\145\x5f\151\155\141\147\x65\163"]); goto r33q5; lnxTp: $news_meta = $_POST["\137\x6e\145\167\x73\x5f\155\145\164\x61\x62\x6f\170\x5f\x6f\160\164\151\x6f\x6e\x73"] ?? ''; goto Sxi2k; oGsMc: if (!(!empty($meta_options["\x73\x61\166\x65\x5f\160\157\163\164\x65\162\137\x69\155\x61\x67\x65"]) || !empty($meta_options["\163\x65\164\x5f\x72\x65\x61\x74\x75\x72\x65\x64\x5f\x69\155\141\147\x65"]) || !empty($video_meta["\x73\x65\164\137\141\163\x5f\x66\x65\x61\164\165\x72\x65\144\x5f\151\155\x61\147\x65"]))) { goto Fp6xP; } goto p58Z7; r33q5: QquEX: goto oGsMc; TpQpd: $meta_options = $_POST["\137\150\141\165\156\x6d\145\x74\141\x62\157\170"] ?? ''; goto lnxTp; Sxi2k: $video_meta = $_POST["\x5f\x76\151\x64\x65\x6f\x73\x5f\155\x65\164\x61\x62\x6f\170\x5f\x6f\160\164\151\157\x6e\163"] ?? ''; goto WPJz7; WPJz7: if (!(!empty($meta_options["\x73\141\x76\x65\137\x61\x6c\154\137\x69\x6d\147"]) || !empty($news_meta["\163\x61\166\145\x5f\x61\x6c\154\137\x69\155\x67"]))) { goto QquEX; } goto DZm9M; pXOzB: Fp6xP: goto n20pc; n20pc: } public function HNGenerate_Poster_Image($post_id) { goto lPOZy; mSsqN: $this->process_post_thumbnail($post_id); goto dVgoH; G8IDi: goto VOGnT; goto W22GL; A2sUe: qIyYK: goto mSsqN; W22GL: aQJjG: goto mtuG9; uX7x4: if ($post->post_type === "\x70\x6f\x73\164") { goto qIyYK; } goto G8IDi; mtuG9: $this->process_video_thumbnail($post_id, $_POST["\137\x76\151\144\145\x6f\x73\137\x6d\x65\x74\141\142\x6f\170\137\x6f\160\164\151\x6f\156\163"] ?? ''); goto IqxzQ; syenW: if ($post->post_type === "\166\151\144\x65\157") { goto aQJjG; } goto uX7x4; IqxzQ: goto VOGnT; goto A2sUe; dVgoH: VOGnT: goto c7c_g; lPOZy: global $post; goto syenW; c7c_g: } private function process_video_thumbnail($post_id, $video_meta) { goto qWMK_; QeZLe: $set_feature = $video_meta["\163\x65\164\x5f\x61\163\x5f\x66\145\x61\164\165\162\145\x64\x5f\x69\x6d\x61\x67\x65"] ?? ''; goto QpK93; qWMK_: $image_url = $video_meta["\166\151\x64\145\x6f\x5f\164\150\165\155\142\156\x61\151\x6c\137\165\x72\154"] ?? ''; goto QeZLe; FxLPx: BbVct: goto wbJDh; QKf1O: $this->haun_save_images($image_url, $post_id, $_POST["\x70\x6f\163\x74\x5f\164\x69\164\154\x65"] ?? '', true); goto FxLPx; QpK93: if (!($set_feature && !has_post_thumbnail($post_id))) { goto BbVct; } goto QKf1O; wbJDh: } private function process_post_thumbnail($post_id) { goto YG3W4; EvqGv: $poster_image_url = $poster_url; goto AbvVf; YG3W4: $meta = get_haunmovies($post_id, HNMG_META, true); goto PHmuT; a6C3s: $meta["\x73\x65\164\137\x72\x65\x61\x74\165\x72\145\x64\137\151\x6d\x61\x67\145"] = ''; goto rzE6I; AZ5Iu: Ew7Qy: goto CeCLF; s_Iny: z0ow_: goto NPOxA; ScBnD: $set_feature = $meta["\x73\145\x74\137\162\145\141\164\x75\162\x65\x64\x5f\151\x6d\x61\x67\x65"] ?? ''; goto Va7x7; F3ubA: $thumb_url = $check_meta["\150\x61\165\156\x5f\164\x68\165\155\142\x5f\165\x72\154"] ?? $meta["\x68\141\165\x6e\137\x74\x68\165\155\142\137\165\x72\x6c"] ?? ''; goto zZc_j; zZc_j: $poster_url = $check_meta["\150\x61\x75\156\137\160\157\163\164\145\x72\137\165\x72\x6c"] ?? $meta["\150\x61\x75\156\137\160\157\163\x74\145\x72\137\x75\162\x6c"] ?? ''; goto ScBnD; PHmuT: $check_meta = $_POST["\137\x68\141\165\156\155\145\164\141\x62\157\170"] ?? ''; goto F3ubA; Va7x7: $save_poster = $meta["\x73\x61\166\145\x5f\x70\157\163\x74\x65\162\x5f\151\x6d\x61\x67\x65"] ?? ''; goto XdbEH; AbvVf: goto Ew7Qy; goto s_Iny; Ya39u: $meta["\163\141\x76\145\x5f\x70\x6f\x73\164\145\162\x5f\151\155\x61\147\x65"] = ''; goto a6C3s; Dm0Z6: $this->haun_save_images($thumb_url, $post_id, $_POST["\160\x6f\x73\164\137\164\151\164\154\145"] ?? '', true); goto aMLcD; NPOxA: $poster_image_url = $this->haun_save_images($poster_url, $post_id, $_POST["\160\x6f\x73\164\x5f\164\x69\x74\x6c\x65"] ?? ''); goto AZ5Iu; XdbEH: if (!($set_feature && $thumb_url && !has_post_thumbnail($post_id))) { goto Z2xl7; } goto Dm0Z6; CeCLF: $meta["\x68\x61\x75\x6e\137\164\x68\x75\x6d\x62\137\165\x72\x6c"] = get_the_post_thumbnail_url($post_id, "\155\x6f\x76\151\x65\x2d\x74\150\165\155\x62") ?: $thumb_url; goto fMuFA; fMuFA: $meta["\150\x61\x75\x6e\137\160\157\x73\x74\145\x72\x5f\x75\162\154"] = $poster_image_url; goto Ya39u; E1UqF: if ($save_poster && $poster_url) { goto z0ow_; } goto EvqGv; aMLcD: Z2xl7: goto E1UqF; rzE6I: update_haunmovies($post_id, HNMG_META, $meta); goto YteL0; YteL0: } public function haun_post_save_images($content) { goto EkFyy; rSp83: foreach ($matches[1] as $image_url) { goto MCqn6; kHb6R: $res = $this->haun_save_images($image_url, $post_id, $post_title); goto HE4T7; aa6JV: weNYA: goto LfSud; HE4T7: $content = str_replace($image_url, $res["\x75\x72\x6c"], $content); goto aa6JV; MCqn6: if (!($image_url && strpos($image_url, $_SERVER["\110\x54\124\120\x5f\x48\x4f\123\x54"]) === false)) { goto weNYA; } goto kHb6R; LfSud: J2Fxs: goto tfWNq; tfWNq: } goto h3JBW; EkFyy: if (!(isset($_POST["\x73\141\166\145"]) || isset($_POST["\160\x75\x62\154\151\x73\150"]))) { goto pdeIt; } goto FRoSM; M1U4q: $post_title = $_POST["\160\157\163\x74\137\x74\151\164\154\145"] ?? ''; goto AWAAS; pWihp: $post_id = get_the_ID(); goto M1U4q; hJd9G: pdeIt: goto pG_8y; AWAAS: preg_match_all("\57\x3c\x69\x6d\x67\x2e\52\77\x73\162\143\x3d\42\x28\x2e\52\x3f\x29\x22\x2f", stripslashes($content), $matches); goto rSp83; pG_8y: remove_filter("\x63\157\x6e\x74\x65\x6e\x74\x5f\163\x61\x76\145\x5f\x70\x72\x65", [$this, "\x68\141\165\156\x5f\160\157\163\x74\x5f\x73\x61\166\x65\x5f\x69\155\x61\147\x65\163"]); goto I2V2Y; FRoSM: set_time_limit(500); goto pWihp; I2V2Y: return $content; goto Y3ILH; h3JBW: OG1vY: goto hJd9G; Y3ILH: } public function haun_save_images($image_url, $post_id, $post_title, $set_thumb = false) { goto cnu1W; BY63C: uKRCz: goto g2IOf; En8CV: $res = wp_upload_bits($im_name, '', $file); goto SUx6r; SUx6r: if ($res["\145\162\162\157\162"]) { goto uKRCz; } goto XGe1w; XGe1w: $this->haun_insert_attachment($res["\x66\151\154\x65"], $post_id, $set_thumb); goto BY63C; g2IOf: return $res; goto o68YN; cnu1W: $file = file_get_contents($image_url); goto tvK6C; tvK6C: $im_name = sanitize_title($post_title) . "\55{$post_id}\56\152\x70\147"; goto En8CV; o68YN: } public function haun_insert_attachment($file, $post_id, $set_thumb) { goto XoSHH; ouubL: $attach_id = wp_insert_attachment($attachment, $file, $post_id); goto V8v4l; DwfYf: set_post_thumbnail($post_id, $attach_id); goto OHu5I; rt1_d: return $attach_id; goto wGuRm; ImQ83: $attachment = ["\147\165\151\144" => wp_get_upload_dir()["\165\162\154"] . "\x2f" . _wp_relative_upload_path($file), "\160\x6f\163\x74\137\x6d\151\x6d\x65\x5f\164\171\160\x65" => $filetype["\x74\171\x70\145"], "\160\x6f\163\x74\x5f\164\151\x74\x6c\x65" => preg_replace("\x2f\134\x2e\x5b\136\x2e\135\53\x24\x2f", '', basename($file)), "\x70\157\163\164\137\x63\x6f\156\164\x65\156\164" => '', "\x70\x6f\163\164\137\x73\x74\141\x74\165\163" => "\x69\x6e\x68\145\162\x69\164"]; goto ouubL; YyPLP: if (!$set_thumb) { goto ufPiT; } goto DwfYf; XoSHH: $filetype = wp_check_filetype($file); goto ImQ83; V8v4l: wp_update_attachment_metadata($attach_id, wp_generate_attachment_metadata($attach_id, $file)); goto YyPLP; OHu5I: ufPiT: goto rt1_d; wGuRm: } }

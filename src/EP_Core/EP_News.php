<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Core; class EP_News { public function __construct() { goto EfpTp; Sf75i: vR0Ht: goto ovww5; sdm3p: $this->initialize_hooks(); goto Sf75i; EfpTp: if (!$this->is_metabox_options_set()) { goto vR0Ht; } goto sdm3p; ovww5: } private function is_metabox_options_set() { return isset($_POST["\x5f\150\141\x75\x6e\137\155\x65\164\x61\142\157\x78\x5f\x6f\160\164\x69\157\x6e\x73"]) || isset($_POST["\x5f\166\151\144\145\157\163\x5f\x6d\145\x74\141\x62\157\x78\x5f\x6f\x70\x74\151\x6f\x6e\x73"]) || isset($_POST["\x5f\156\145\167\x73\x5f\155\x65\x74\141\x62\x6f\x78\137\x6f\160\164\151\x6f\156\163"]); } private function initialize_hooks() { goto LrBmR; lWC7D: add_filter("\143\x6f\x6e\164\x65\156\164\x5f\x73\x61\x76\x65\137\x70\162\x65", [$this, "\x68\x61\165\x6e\137\x70\x6f\163\x74\137\163\x61\166\145\x5f\151\155\x61\x67\145\163"]); goto l3jon; CK3P3: add_action("\163\141\166\145\x5f\160\157\163\x74", [$this, "\x48\116\107\145\156\145\162\141\164\145\x5f\120\157\163\164\x65\x72\x5f\111\x6d\141\147\145"]); goto YrNZO; aFB7k: if (!(!empty($meta_options["\163\141\x76\x65\137\141\154\x6c\137\x69\155\147"]) || !empty($news_meta["\163\141\166\145\137\x61\x6c\154\x5f\x69\x6d\x67"]))) { goto q3HI6; } goto lWC7D; b6eCE: $news_meta = $_POST["\x5f\x6e\145\167\163\x5f\x6d\x65\x74\x61\142\157\x78\137\157\x70\164\x69\x6f\156\x73"] ?? ''; goto VK_uY; VK_uY: $video_meta = $_POST["\x5f\166\151\144\145\x6f\x73\137\155\145\164\141\x62\x6f\170\x5f\157\160\164\151\157\x6e\163"] ?? ''; goto aFB7k; l3jon: q3HI6: goto Umv3i; YrNZO: yYpbK: goto Anrkc; LrBmR: $meta_options = $_POST["\x5f\150\141\165\156\137\155\145\164\x61\142\x6f\170\x5f\157\160\x74\x69\x6f\x6e\x73"] ?? ''; goto b6eCE; Umv3i: if (!(!empty($meta_options["\x73\141\x76\x65\x5f\160\x6f\x73\164\x65\x72\x5f\x69\155\x61\147\x65"]) || !empty($meta_options["\163\145\x74\137\162\x65\x61\x74\165\x72\145\x64\137\151\155\141\x67\145"]) || !empty($video_meta["\163\145\164\137\141\163\137\146\145\141\x74\165\x72\145\x64\x5f\151\x6d\141\x67\145"]))) { goto yYpbK; } goto CK3P3; Anrkc: } public function HNGenerate_Poster_Image($post_id) { goto ktwA3; JK43y: goto MsUHR; goto Bp6VE; I290m: if ($post->post_type === "\160\x6f\x73\164") { goto Kk2Vo; } goto DbSVQ; MPB90: $this->process_video_thumbnail($post_id, $_POST["\x5f\x76\151\x64\145\x6f\163\137\155\145\164\x61\142\x6f\x78\x5f\x6f\x70\164\x69\157\x6e\x73"] ?? ''); goto JK43y; Bp6VE: Kk2Vo: goto OMW87; hUruK: MsUHR: goto es8Gk; cN4ZK: mkNJp: goto MPB90; ktwA3: global $post; goto xS59q; xS59q: if ($post->post_type === "\166\151\x64\145\157") { goto mkNJp; } goto I290m; OMW87: $this->process_post_thumbnail($post_id); goto hUruK; DbSVQ: goto MsUHR; goto cN4ZK; es8Gk: } private function process_video_thumbnail($post_id, $video_meta) { goto sPVYY; sPVYY: $image_url = $video_meta["\x76\151\x64\145\157\x5f\x74\x68\165\x6d\142\156\x61\151\154\x5f\165\162\154"] ?? ''; goto unVc7; BAI4R: fErgj: goto siAd4; unVc7: $set_feature = $video_meta["\163\145\164\x5f\141\163\137\x66\145\141\x74\x75\x72\x65\x64\x5f\x69\x6d\x61\147\x65"] ?? ''; goto oeSw5; tbav7: $this->haun_save_images($image_url, $post_id, $_POST["\160\157\x73\164\x5f\164\x69\x74\x6c\145"] ?? '', true); goto BAI4R; oeSw5: if (!($set_feature && !has_post_thumbnail($post_id))) { goto fErgj; } goto tbav7; siAd4: } private function process_post_thumbnail($post_id) { goto hElql; dRLac: if ($save_poster && $poster_url) { goto uv91D; } goto GK8C9; sZDm8: update_post_meta($post_id, HNMG_META, $meta); goto ZTU_A; hElql: $meta = get_post_meta($post_id, HNMG_META, true); goto peggh; A2Iah: $meta["\163\145\x74\x5f\x72\x65\141\164\x75\x72\x65\144\137\x69\155\x61\147\x65"] = ''; goto sZDm8; peggh: $check_meta = $_POST["\x5f\x68\141\165\x6e\137\155\145\x74\x61\142\157\170\x5f\157\x70\164\x69\157\x6e\x73"] ?? ''; goto FNRG9; mqesE: $poster_image_url = $this->haun_save_images($poster_url, $post_id, $_POST["\160\x6f\163\164\x5f\x74\x69\164\154\x65"] ?? ''); goto UsK9f; YHO22: $this->haun_save_images($thumb_url, $post_id, $_POST["\x70\x6f\163\x74\137\x74\x69\x74\154\x65"] ?? '', true); goto p9Goc; SwY45: $meta["\150\141\165\156\137\x70\x6f\163\x74\x65\x72\137\x75\162\x6c"] = $poster_image_url; goto pGBCo; pDiFu: goto VT0Bl; goto PceKC; pGBCo: $meta["\x73\141\166\x65\137\x70\157\163\x74\x65\x72\137\151\x6d\x61\x67\145"] = ''; goto A2Iah; FNRG9: $thumb_url = $check_meta["\x68\141\x75\x6e\137\x74\150\165\x6d\142\x5f\165\162\154"] ?? $meta["\x68\141\x75\156\137\164\150\165\155\x62\x5f\165\162\154"] ?? ''; goto Y3t5j; p9Goc: TD6oT: goto dRLac; uhyOd: if (!($set_feature && $thumb_url && !has_post_thumbnail($post_id))) { goto TD6oT; } goto YHO22; pXhUw: $save_poster = $meta["\163\x61\x76\145\x5f\x70\x6f\163\x74\x65\162\x5f\x69\x6d\141\147\x65"] ?? ''; goto uhyOd; UsK9f: VT0Bl: goto RsRh6; GK8C9: $poster_image_url = $poster_url; goto pDiFu; Y3t5j: $poster_url = $check_meta["\150\x61\165\156\x5f\160\157\163\164\x65\x72\137\165\162\154"] ?? $meta["\150\141\165\x6e\x5f\x70\x6f\163\164\x65\x72\x5f\165\x72\154"] ?? ''; goto uSk2k; PceKC: uv91D: goto mqesE; uSk2k: $set_feature = $meta["\x73\x65\x74\x5f\x72\x65\x61\164\165\x72\x65\x64\137\151\x6d\x61\147\145"] ?? ''; goto pXhUw; RsRh6: $meta["\x68\141\x75\156\137\x74\x68\165\155\142\x5f\165\x72\154"] = get_the_post_thumbnail_url($post_id, "\x6d\157\x76\x69\x65\x2d\164\x68\x75\155\x62") ?: $thumb_url; goto SwY45; ZTU_A: } public function haun_post_save_images($content) { goto AmFvu; u1rVp: return $content; goto oYS7X; sY1F2: set_time_limit(500); goto rwvvN; Q12uY: remove_filter("\143\x6f\x6e\x74\145\156\x74\137\163\x61\166\x65\137\x70\162\145", [$this, "\150\x61\165\156\137\160\x6f\x73\x74\137\x73\x61\x76\x65\137\151\155\x61\147\x65\163"]); goto u1rVp; EfA7Q: $post_title = $_POST["\160\x6f\x73\164\137\164\151\x74\x6c\145"] ?? ''; goto DqiH4; D7BAh: foreach ($matches[1] as $image_url) { goto VrkEG; VrkEG: if (!($image_url && strpos($image_url, $_SERVER["\x48\x54\x54\x50\137\110\x4f\123\x54"]) === false)) { goto Y7nMw; } goto yLlxL; wGFve: Y7nMw: goto lJSVc; yLlxL: $res = $this->haun_save_images($image_url, $post_id, $post_title); goto nrA2j; nrA2j: $content = str_replace($image_url, $res["\x75\162\x6c"], $content); goto wGFve; lJSVc: KAyR8: goto ly6HS; ly6HS: } goto YwdHx; YwdHx: csmXx: goto EuSuq; EuSuq: r3hLV: goto Q12uY; DqiH4: preg_match_all("\57\74\x69\155\147\x2e\52\x3f\163\x72\143\75\x22\x28\56\52\x3f\51\42\x2f", stripslashes($content), $matches); goto D7BAh; AmFvu: if (!(isset($_POST["\163\x61\x76\145"]) || isset($_POST["\160\165\142\x6c\x69\x73\x68"]))) { goto r3hLV; } goto sY1F2; rwvvN: $post_id = get_the_ID(); goto EfA7Q; oYS7X: } public function haun_save_images($image_url, $post_id, $post_title, $set_thumb = false) { goto xcvI7; IMl2y: return $res; goto rZgbC; CjW0u: $res = wp_upload_bits($im_name, '', $file); goto KctAP; KctAP: if ($res["\145\x72\x72\157\162"]) { goto pw44s; } goto YDWzr; YDWzr: $this->haun_insert_attachment($res["\x66\x69\x6c\x65"], $post_id, $set_thumb); goto h8v_q; xcvI7: $file = file_get_contents($image_url); goto LpUZo; h8v_q: pw44s: goto IMl2y; LpUZo: $im_name = sanitize_title($post_title) . "\55{$post_id}\56\152\160\147"; goto CjW0u; rZgbC: } public function haun_insert_attachment($file, $post_id, $set_thumb) { goto iwXB2; igyQo: return $attach_id; goto CWGg7; iwXB2: $filetype = wp_check_filetype($file); goto zPENa; Q3AW2: wp_update_attachment_metadata($attach_id, wp_generate_attachment_metadata($attach_id, $file)); goto Bdh6R; xcDxe: $attach_id = wp_insert_attachment($attachment, $file, $post_id); goto Q3AW2; RbhWt: GZ7uW: goto igyQo; Bdh6R: if (!$set_thumb) { goto GZ7uW; } goto Hrhh4; Hrhh4: set_post_thumbnail($post_id, $attach_id); goto RbhWt; zPENa: $attachment = ["\147\165\x69\144" => wp_get_upload_dir()["\165\x72\x6c"] . "\57" . _wp_relative_upload_path($file), "\160\157\163\x74\137\x6d\151\155\145\x5f\164\171\x70\x65" => $filetype["\164\171\x70\145"], "\x70\157\163\x74\137\164\151\164\154\x65" => preg_replace("\57\x5c\x2e\x5b\x5e\56\135\53\44\57", '', basename($file)), "\160\157\x73\164\137\143\x6f\156\164\145\x6e\x74" => '', "\160\x6f\163\x74\137\163\x74\x61\164\x75\x73" => "\x69\156\x68\x65\x72\x69\x74"]; goto xcDxe; CWGg7: } }

<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; class EP_Comment { public function register() { goto XClrY; pmvqm: add_filter("\x68\x6e\155\x67\x5f\x6d\141\x69\x6e\164\x61\x62\137\157\x70\164\x69\157\156", [$this, "\x6c\157\141\x64\x5f\143\157\155\x6d\x65\156\x74\x5f\x74\141\142\x5f\157\x6e\x65"], 1); goto U42OF; Fs3b9: add_action("\167\x70\137\141\152\141\x78\x5f\x6e\157\x70\162\x69\166\x5f\x6c\x69\153\145\137\x63\x6f\155\x6d\145\156\164", [$this, "\x68\x61\156\144\154\145\x5f\x6c\151\x6b\x65\137\143\x6f\x6d\155\145\156\x74"]); goto JOvUv; XClrY: add_action("\167\160\137\x61\152\x61\x78\x5f\x61\144\144\137\x63\x6f\155\155\145\x6e\x74", [$this, "\x61\x64\144\137\143\x6f\x6d\x6d\145\156\x74\x5f\143\141\154\154\142\x61\x63\153"]); goto fN1EX; ilUIj: add_action("\167\x70\137\x61\x6a\141\x78\137\154\x69\x6b\145\137\143\x6f\155\155\x65\156\x74", [$this, "\x68\141\156\x64\x6c\x65\137\x6c\151\x6b\145\x5f\x63\157\x6d\155\145\156\x74"]); goto Fs3b9; JOvUv: add_action("\x68\x6e\x6d\x67\137\157\x70\145\x6e\x74\x61\x62\137\x6f\x70\164\151\157\156", [$this, "\164\x61\142\x69\x74\x65\155\137\164\150\x72\145\145\137\143\157\155\x6d\x65\156\x74"]); goto pmvqm; fN1EX: add_action("\167\x70\x5f\x61\152\141\x78\x5f\x6e\157\160\162\151\x76\137\141\x64\x64\137\x63\157\155\155\145\156\164", [$this, "\141\144\x64\x5f\143\x6f\155\x6d\x65\x6e\164\137\143\141\x6c\x6c\x62\x61\x63\x6b"]); goto H0pQp; j0UqB: add_action("\167\x70\137\141\x6a\141\170\137\x6e\x6f\160\162\x69\166\137\154\x6f\x61\144\x5f\x6d\x6f\162\145\137\143\x6f\155\155\145\x6e\164", [$this, "\x6c\157\141\144\x5f\x6d\157\162\x65\x5f\143\x6f\x6d\x6d\x65\x6e\164\137\143\141\x6c\x6c\142\x61\x63\x6b"]); goto ilUIj; H0pQp: add_action("\167\160\137\x61\152\141\170\x5f\x6c\x6f\x61\x64\x5f\x6d\x6f\x72\145\137\x63\157\155\155\145\x6e\164", [$this, "\x6c\x6f\x61\144\137\155\157\x72\x65\x5f\143\157\155\x6d\145\x6e\164\137\143\141\154\154\x62\x61\x63\153"]); goto j0UqB; U42OF: } public function load_comment_tab_one($items) { $items["\x73\145\x74\164\151\x6e\147\55\143\157\155\155\x65\156\164"] = "\x3c\151\x20\x63\154\x61\x73\x73\x3d\x22\150\x6e\x6d\147\x62\x6f\170\x2d\151\x63\x6f\x6e\x20\x68\x6e\x6d\x67\142\157\170\55\x69\x63\157\x6e\55\x63\x6f\x6d\155\145\156\164\42\76\74\57\x69\76" . __("\123\x65\164\164\151\156\147\x73\x20\x43\157\155\155\x65\x6e\164", "\x68\156\x6d\x67\x65\x70\x69\163"); return $items; } public function tabitem_three_comment($hnmgbox) { goto TPIYu; wKZY_: $hnmgbox->close_tab_item("\x73\145\164\x74\151\156\147\55\x63\157\x6d\x6d\x65\156\x74"); goto pnvUv; rerWN: $hnmgbox->close_mixed_field(); goto wKZY_; hthKJ: $hnmgbox->open_mixed_field(array("\156\141\155\145" => __("\111\103\x4f\x4e\40\x43\x6f\155\x6d\145\x6e\x74\163", "\x68\x6e\155\147\x65\160\151\x73"))); goto jzDWe; TPIYu: $hnmgbox->open_tab_item("\163\145\x74\x74\x69\156\147\x2d\143\x6f\x6d\155\145\x6e\164"); goto nAXmj; Ag7ER: $hnmgbox->add_field(array("\x69\144" => "\146\x62\137\x63\157\x6d\155\145\x6e\x74\x5f\x64\151\x73\x70\154\141\x79", "\x6e\x61\x6d\145" => __("\x4e\x75\x6d\142\x65\x72\40\157\x66\40\x63\157\155\155\145\x6e\x74\40\x74\x6f\40\163\150\x6f\167", "\x68\156\x6d\x67\145\x70\x69\163"), "\x74\x79\x70\x65" => "\x6e\165\x6d\142\x65\x72", "\x64\145\146\141\165\x6c\164" => "\65", "\x64\145\163\x63" => __("\124\x68\x65\40\156\x75\x6d\x62\145\162\40\x6f\x66\x20\x63\x6f\x6d\155\x65\156\164\x73\x20\164\x6f\40\x73\x68\x6f\167\x20\142\171\40\144\x65\146\141\165\154\164\56\40\124\x68\x65\40\x6d\x69\x6e\151\x6d\x75\x6d\x20\x76\141\154\165\x65\40\x69\163\x20\61\x2e", "\x68\x6e\x6d\147\x65\160\x69\x73"))); goto Py5Vq; vwLlz: $hnmgbox->open_mixed_field(array("\x69\144" => "\146\x62\x5f\143\x6f\x6d\155\x65\x6e\x74\x73\x5f\163\x65\164\164\151\156\x67", "\156\141\155\x65" => __("\106\141\143\x65\142\157\157\x6b\40\x73\145\164\x74\x69\x6e\x67\x73", "\150\x6e\x6d\147\145\x70\151\163"))); goto sIrYN; diV17: $hnmgbox->add_field(array("\151\144" => "\144\x69\x73\x71\x75\x73\x5f\x73\150\x6f\162\x74\x6e\141\x6d\x65", "\x74\171\x70\x65" => "\x74\145\170\164", "\x6e\x61\155\x65" => "\104\x69\x73\161\x75\163\40\123\150\157\x72\x74\156\141\155\145", "\x61\x74\x74\162\x69\x62\x75\164\x65\x73" => array("\160\154\x61\x63\x65\150\x6f\154\x64\x65\x72" => "\150\x61\x75\x6e\171\164\142"))); goto FvEWx; FvEWx: $hnmgbox->close_mixed_field(); goto hthKJ; Tp3bp: $hnmgbox->add_field(array("\x69\144" => "\163\145\154\x65\143\x74\x5f\x63\x6f\x6d\x6d\x65\156\x74\163", "\x6e\141\x6d\x65" => __("\123\145\x6c\145\143\164\x20\103\157\155\155\145\156\x74\x73", "\150\x6e\x6d\x67\x65\x70\x69\x73"), "\164\171\160\145" => "\x73\145\154\145\x63\x74", "\x64\145\146\141\x75\154\x74" => "\x66\x62\x5f\x63\157\x6d\x6d\145\156\164\x73", "\151\164\145\155\x73" => array("\x64\151\x73\161\x75\x73\x5f\143\x6f\x6d\155\x65\156\x74" => __("\x44\151\x73\161\x75\x73\x20\x43\157\155\155\145\156\164\163", "\150\156\155\147\x65\160\151\163"), "\x66\x62\137\x63\157\155\155\x65\156\x74\x73" => __("\106\x61\x63\145\142\x6f\x6f\153\40\103\157\155\155\x65\156\x74", "\x68\156\155\x67\145\160\x69\x73"), "\163\x79\163\x74\x65\155\x5f\x63\157\155\155\145\156\164\x73" => __("\123\171\163\x74\145\x6d\40\103\x6f\x6d\x6d\x65\x6e\164", "\150\x6e\x6d\x67\145\160\x69\x73")))); goto vwLlz; Py5Vq: $hnmgbox->add_field(array("\x69\x64" => "\x66\x62\x5f\143\x6f\x6d\155\145\x6e\x74\x5f\x6f\x72\x64\145\162\137\x62\x79", "\156\x61\155\145" => __("\x4f\x72\144\145\162\40\x62\171", "\150\156\155\147\145\x70\x69\x73"), "\x74\171\160\145" => "\x73\145\x6c\145\x63\x74", "\144\x65\x66\141\165\x6c\x74" => "\x72\145\166\145\162\x73\145\x5f\164\x69\155\x65", "\x69\164\x65\155\163" => array("\162\145\166\x65\x72\163\145\137\x74\x69\x6d\x65" => __("\122\x65\x76\145\x72\163\145\x20\164\x69\x6d\x65", "\x68\x6e\155\x67\x65\160\151\x73"), "\163\157\143\x69\x61\x6c" => __("\x53\157\x63\x69\x61\x6c", "\x68\x6e\x6d\x67\x65\160\x69\163"), "\x74\x69\x6d\x65" => __("\x54\x69\155\145", "\x68\x6e\x6d\147\x65\160\x69\x73")), "\144\x65\x73\143" => __("\x54\150\x65\40\157\x72\x64\x65\x72\40\x74\x6f\40\x75\163\x65\x20\167\150\x65\156\40\x64\x69\163\160\x6c\141\x79\151\156\x67\x20\143\x6f\155\155\145\156\164\163\56\40\x43\141\156\x20\142\145\40\x22\x73\x6f\x63\x69\141\x6c\x22\54\40\x22\162\x65\166\x65\162\x73\x65\x5f\164\x69\x6d\x65\x22\54\40\157\162\40\x22\164\x69\155\x65\42\56\x20\x54\x68\145\40\x64\151\x66\146\x65\x72\145\x6e\x74\x20\157\x72\x64\145\162\40\164\x79\x70\x65\x73\x20\141\162\x65\40\x65\x78\x70\x6c\x61\x69\156\145\144\40\151\x6e\x20\164\x68\145\40\106\101\x51", "\150\x6e\155\147\x65\160\x69\163"))); goto aUrdO; uHOHG: $hnmgbox->open_mixed_field(array("\151\144" => "\144\151\x73\161\165\x73\x5f\143\157\x6d\155\x65\x6e\x74\x73\137\x73\145\164\164\x69\x6e\x67", "\x6e\x61\155\x65" => __("\104\151\x73\161\x75\163\40\x53\150\157\162\x74\156\141\155\145", "\x68\x6e\x6d\x67\x65\160\x69\163"))); goto diV17; jzDWe: $hnmgbox->add_field(array("\x69\x64" => "\x65\x6d\x6f\152\x69\163\x5f\143\x6f\155\155\145\x6e\164\x73", "\x74\171\160\x65" => "\x74\145\170\164\x61\x72\x65\x61", "\156\141\155\145" => "\x45\x6d\157\152\x69\163\x20\103\x6f\x6d\155\145\156\164\x73", "\x61\164\x74\162\151\142\165\x74\145\163" => array("\x70\x6c\141\143\145\x68\x6f\154\144\x65\162" => "\360\x9f\245\x92\x7c\xf0\x9f\215\206"), "\144\x65\163\143" => __("\x59\x6f\165\x20\143\141\x6e\x20\x61\144\x64\40\171\157\165\162\40\x6f\x77\x6e\40\145\155\157\x6a\151\163\x20\x62\171\x20\x74\171\x70\151\x6e\x67\x20\x69\156\x20\164\150\x65\40\142\157\x78\x20\x61\x62\157\x76\x65\x20\x77\x69\x74\150\x20\164\150\145\x20\146\157\162\x6d\141\x74\40\x65\x6d\157\x6a\151\40\x31\x7c\145\155\x6f\x6a\151\x20\x32\x2e\x2e\56", "\x68\156\155\147\145\x70\x69\163"))); goto rerWN; nAXmj: $hnmgbox->add_field(array("\x69\x64" => "\x65\x6e\x61\142\154\145\x5f\x73\x69\x74\145\137\x63\x6f\x6d\155\145\x6e\x74", "\156\x61\x6d\x65" => __("\x45\156\x61\x62\154\x65\x20\103\157\155\155\145\156\164", "\x68\156\x6d\147\x65\x70\x69\163"), "\164\x79\160\145" => "\x73\167\151\x74\143\150\145\x72", "\144\x65\x66\x61\165\x6c\x74" => "\157\x6e")); goto Tp3bp; sIrYN: $hnmgbox->add_field(array("\x69\x64" => "\x68\141\165\156\137\x66\142\137\x61\160\x70\x73\137\151\144", "\x74\171\160\145" => "\x74\x65\170\164", "\156\x61\155\x65" => "\106\141\143\145\142\x6f\x6f\153\x20\101\160\x70\x73\40\x49\x44", "\141\164\x74\162\151\x62\165\164\145\x73" => array("\x70\154\141\x63\x65\150\x6f\154\x64\x65\162" => "\61\63\70\x34\70\71\x34\71\64\x38\64\x33\67\x36\x33\x37"), "\x64\145\x73\x63" => __("\x49\x66\40\x54\150\151\163\x20\126\x61\x6c\165\x65\x20\x44\157\x65\x73\x20\x4e\x6f\164\40\x45\170\151\163\164\x20\x2e\x20\x46\x61\x63\x65\142\x6f\x6f\x6b\x20\x43\157\155\155\x65\156\164\x73\40\141\x6e\144\x20\114\x69\x6b\x65\40\x61\156\144\40\123\x68\x61\x72\x65\x20\x42\165\x74\164\157\x6e\x73\x20\x57\151\154\154\x20\x4e\x6f\x74\x20\127\x6f\x72\153", "\150\156\155\147\145\160\151\163"))); goto Ag7ER; aUrdO: $hnmgbox->close_mixed_field(); goto uHOHG; pnvUv: } public function add_comment_callback() { goto EZ2wQ; cm_DW: echo "\x22\40\x63\154\141\163\x73\x3d\x22\155\154\x2d\70\40\x6d\164\55\62\42\76\74\x2f\144\151\166\76\12\x9\x9\11\11"; goto OSnP0; Lq2ed: echo "\42\40\x64\x61\164\x61\55\x63\157\x6d\x6d\x65\156\x74\x69\144\75\42"; goto HnLac; M5VcP: $comment_id = wp_insert_comment($commentdata); goto XETqd; gtlWw: echo "\11\11\11\x9\11\x3c\x64\x69\166\x20\143\154\141\163\163\x3d\42\146\154\x65\170\x20\x73\160\141\143\x65\x2d\x78\x2d\62\40\x74\145\170\164\x2d\x78\x73\x20\x74\145\170\x74\55\x67\162\x61\171\x2d\x34\x30\x30\40\x6d\164\x2d\61\40\x6d\154\55\x32\x22\x3e\xa\x9\11\11\x9\x9\11\x3c\144\151\166\x20\143\x6c\141\163\163\x3d\42\150\157\166\x65\x72\72\x75\x6e\144\x65\162\x6c\151\156\x65\40\143\165\162\163\x6f\x72\x2d\x70\157\151\x6e\x74\145\x72\42\40\144\x61\164\141\x2d\x70\x6f\163\x74\151\144\75\42"; goto q8_Fo; HnLac: echo esc_attr($comment_id); goto kL7ze; qmJ3X: echo "\11\11\11\11\11\11\74\x2f\x64\x69\166\76\xa\x9\x9\x9\x9\11\11\74\163\x70\141\x6e\76\302\267\74\x2f\x73\x70\x61\156\76\12\x9\x9\x9\x9\x9\11\74\144\x69\166\40\143\154\x61\163\x73\75\x22\x66\x6f\x6e\164\55\x62\x6f\154\x64\x20\x69\164\x61\x6c\x69\x63\42\x3e"; goto Z01Qq; Z4_3G: echo "\74\57\x64\x69\166\x3e\xa\11\x9\11\11\74\x2f\x64\151\x76\x3e\xa\x9\11\11\x9"; goto qLQV4; EZ2wQ: $post_id = isset($_POST["\166\151\144\x65\157\137\151\x64"]) ? intval($_POST["\166\x69\144\145\157\137\151\144"]) : 0; goto cET1f; ZW0bW: echo get_avatar($comment_name, 32); goto Jc57U; A7Yqs: BS5rM: goto i5M3G; cET1f: $comment_content = isset($_POST["\x63\x6f\x6d\155\x65\x6e\164"]) ? sanitize_text_field($_POST["\143\x6f\155\155\145\x6e\x74"]) : ''; goto TUVcd; Jc57U: echo "\74\x2f\x64\x69\166\x3e\xa\x9\11\x9\x3c\x64\x69\166\40\x63\154\x61\x73\163\75\x22\x66\154\145\170\x2d\147\x72\157\x77\42\x3e\xa\x9\x9\11\x9\x3c\x64\151\x76\40\x63\x6c\141\x73\x73\75\x22\x62\x67\x2d\133\43\62\141\x32\143\x32\x64\x5d\x20\x73\x68\141\x64\157\x77\x2d\x6d\144\40\162\x6f\x75\156\x64\x65\x64\55\155\x64\40\x70\170\55\x33\x20\160\x79\x2d\x31\56\65\40\167\55\146\165\x6c\154\42\76\xa\x9\x9\x9\11\x9\74\x64\151\x76\x20\143\x6c\141\163\x73\75\x22\146\x6f\156\x74\x2d\155\145\144\x69\x75\155\x20\164\145\x78\x74\55\x77\x68\x69\x74\x65\x22\76\12\x9\x9\x9\11\11\11\74\x61\40\150\162\x65\146\75\42\x23\x22\x20\x63\154\x61\163\163\x3d\x22\150\x6f\166\145\x72\x3a\165\x6e\x64\145\162\x6c\x69\156\145\x20\164\x65\x78\x74\x2d\x6d\x64\x20\x66\x6f\x6e\x74\x2d\142\x6f\x6c\144\x22\76"; goto bmJMt; KTAm9: echo "\x9\11\x3c\144\x69\x76\x20\x63\x6c\x61\x73\163\x3d\42\x66\x6c\145\170\40\151\x74\x65\x6d\163\x2d\x73\x74\141\x72\x74\40\163\x70\x61\x63\x65\55\170\55\63\40\167\55\146\x75\154\x6c\42\76\12\11\11\11\x3c\144\x69\x76\x20\x63\154\x61\x73\x73\x3d\42\x66\154\x65\170\x2d\x73\x68\162\151\x6e\x6b\x2d\x30\x22\76"; goto ZW0bW; i5M3G: ob_start(); goto KTAm9; Zqzjc: echo esc_attr($comment_id); goto cm_DW; q8_Fo: echo esc_attr($post_id); goto Lq2ed; JJOT2: echo "\42\x3e\x30\x3c\x2f\163\160\x61\x6e\76\12\x9\x9\x9\11\x9\11\74\x2f\144\151\166\76\12\x9\11\11\x9\x9\11\x3c\x73\160\141\156\x3e\302\xb7\74\57\x73\x70\141\x6e\76\12\11\x9\11\11\x9\x9\x3c\144\x69\x76\x20\143\x6c\x61\x73\163\75\x22\150\x6f\x76\145\162\x3a\x75\156\144\x65\162\154\x69\x6e\145\x20\x63\165\162\163\x6f\162\x2d\x70\157\x69\156\164\145\162\42\40\100\x63\x6c\151\x63\153\x3d\x22\x6d\x6f\x76\x65\x52\145\x70\x6c\171\106\157\162\x6d\50\47"; goto eu3Hk; soMfj: echo esc_html($comment_content); goto Z4_3G; Kg7y9: wp_send_json_error(["\x6d\x65\x73\163\141\x67\145" => __("\125\x6e\141\142\x6c\145\x20\164\x6f\x20\x73\x61\166\x65\x20\164\x68\145\x20\143\x6f\155\x6d\x65\156\164\x2e", "\x68\x6e\155\x67\145\160\151\163")]); goto A7Yqs; x_gLM: echo "\40\74\163\160\141\156\x20\151\144\x3d\x22\x6c\x69\153\145\x43\157\x75\156\164\x2d"; goto e2Ihh; htjue: echo __("\x52\x65\x70\x6c\171", "\150\x6e\155\x67\x65\160\x69\163"); goto qmJ3X; kL7ze: echo "\42\x20\x40\143\154\151\143\153\x3d\x22\141\x64\x64\114\x69\x6b\x65\x22\x3e\12\x9\x9\x9\11\x9\11\11"; goto ac5q5; WGubA: ARsi4: goto Jlub5; XETqd: if ($comment_id) { goto BS5rM; } goto Kg7y9; OSnP0: fGsae: goto F1Peu; xUIns: $parent_comment_id = isset($_POST["\x70\141\x72\x65\x6e\x74\x5f\x63\157\155\x6d\145\x6e\x74\137\151\144"]) ? intval($_POST["\x70\x61\162\145\x6e\x74\x5f\x63\x6f\x6d\155\145\156\x74\137\151\144"]) : 0; goto dJUXl; rHqT8: wp_send_json_error(["\x6d\145\163\163\x61\x67\x65" => __("\115\151\x73\163\x69\156\147\x20\x72\145\161\165\151\162\145\x64\40\x66\x69\x65\154\x64\163\x2e", "\x68\x6e\155\147\x65\x70\x69\x73")]); goto WGubA; TUVcd: $comment_name = isset($_POST["\156\x61\155\x65"]) ? sanitize_text_field($_POST["\156\x61\x6d\145"]) : ''; goto xUIns; Jlub5: $commentdata = array("\143\x6f\x6d\x6d\x65\156\164\137\x70\157\x73\x74\x5f\111\104" => $post_id, "\143\157\x6d\x6d\x65\x6e\164\137\141\x75\x74\150\157\162" => $comment_name, "\143\157\155\155\145\156\164\137\143\x6f\x6e\164\x65\156\x74" => $comment_content, "\143\x6f\x6d\155\x65\x6e\x74\137\x61\160\160\162\x6f\x76\145\144" => 0, "\143\157\x6d\x6d\x65\x6e\x74\137\x70\x61\162\145\156\164" => $parent_comment_id, "\x63\x6f\155\x6d\145\x6e\x74\x5f\144\141\x74\x65" => current_time("\155\x79\163\161\154"), "\x63\x6f\155\155\145\156\164\x5f\144\x61\164\x65\x5f\x67\155\x74" => current_time("\155\171\163\x71\x6c", 1)); goto M5VcP; dJUXl: if (!(empty($post_id) || empty($comment_content) || empty($comment_name))) { goto ARsi4; } goto rHqT8; qLQV4: if (!($parent_comment_id === 0)) { goto fGsae; } goto gtlWw; bmJMt: echo esc_html($comment_name); goto M00Am; F1Peu: echo "\x9\x9\11\74\57\144\151\166\x3e\12\11\11\74\x2f\144\x69\166\76\12\x9\11"; goto bzw2r; Z01Qq: echo $this->time_ago($commentdata["\143\x6f\155\155\145\x6e\164\137\x64\x61\x74\145"]); goto w2GnK; ac5q5: echo __("\x4c\x69\x6b\x65", "\x68\x6e\x6d\x67\x65\x70\x69\163"); goto x_gLM; M00Am: echo "\74\57\x61\76\xa\x9\x9\11\11\11\x3c\57\x64\151\x76\76\xa\x9\11\11\11\x9\74\x64\x69\166\x20\143\x6c\141\163\x73\75\x22\164\145\x78\164\x2d\170\x73\40\x74\145\170\x74\55\x67\162\141\171\55\x33\x30\x30\40\x6d\x74\55\61\x20\142\x72\x65\x61\153\x2d\x61\x6c\x6c\x22\76"; goto soMfj; eu3Hk: echo esc_attr($comment_id); goto H3gOK; bvFyq: wp_send_json_success(["\150\x74\155\x6c" => $html]); goto l1bMF; bzw2r: $html = ob_get_clean(); goto bvFyq; w2GnK: echo "\x3c\57\144\x69\x76\x3e\xa\11\11\11\x9\x9\74\57\144\x69\166\x3e\xa\x9\11\11\x9\x9\x3c\x64\151\166\40\151\x64\75\42\162\x65\160\154\151\145\x73\55"; goto Zqzjc; H3gOK: echo "\x27\51\x22\x3e\12\11\11\x9\11\x9\x9\11"; goto htjue; e2Ihh: echo esc_attr($comment_id); goto JJOT2; l1bMF: } public function load_more_comment_callback() { goto gtU_W; krt9z: $response = array("\x63\x6f\155\155\145\x6e\x74" => $comment_data, "\x74\157\164\141\154" => $total, "\143\x6f\x75\156\x74" => count($comments)); goto YSNVo; UucjJ: $post_id = $_POST["\160\x6f\x73\164\137\x69\x64"]; goto Ba3su; AuT7u: $total = isset($_POST["\164\157\164\141\x6c"]) ? intval($_POST["\x74\157\x74\x61\x6c"]) : 0; goto F0pAP; RJnSo: if (!$comments) { goto VFZkc; } goto zReIm; zReIm: foreach ($comments as $comment) { goto yeNMb; vQsP5: $comment_data .= "\x3c\144\151\x76\x20\143\x6c\x61\x73\163\75\x22\164\x65\x78\x74\55\x78\163\40\164\145\170\x74\x2d\147\x72\x61\x79\55\x33\x30\x30\x20\x6d\164\55\61\40\x62\x72\x65\x61\153\x2d\141\154\154\x22\x3e" . $comment_content . "\x3c\x2f\144\x69\166\x3e"; goto yasaA; EY32L: $comment_data .= "\74\57\144\x69\166\x3e"; goto hVVv1; q_EtQ: $replies = get_comments(array("\x70\141\162\x65\156\164" => $comment->comment_ID, "\x73\164\x61\x74\x75\x73" => "\141\160\x70\x72\x6f\x76\145")); goto eJpzi; bbQkr: $comment_data .= "\74\x64\x69\166\40\143\x6c\141\163\163\75\x22\150\x6f\166\145\162\72\x75\x6e\144\145\162\154\x69\156\x65\x20\x63\165\162\163\x6f\x72\55\160\157\x69\x6e\x74\x65\162\42\40\144\141\164\x61\x2d\x70\157\x73\164\x69\x64\x3d\42" . esc_attr($post_id) . "\x22\40\144\x61\164\141\x2d\x63\x6f\155\155\145\156\164\151\144\75\42" . esc_attr($comment->comment_ID) . "\42\40\x40\143\x6c\x69\143\x6b\x3d\42\x61\x64\144\114\151\x6b\x65\x22\x3e"; goto nI5iK; atLcV: $comment_data .= "\74\x64\x69\166\x20\x63\154\x61\x73\x73\x3d\42\146\157\x6e\164\55\x6d\x65\144\151\165\155\x20\x74\x65\x78\164\x2d\x77\x68\151\x74\145\x22\x3e" . $comment_author . "\x3c\57\x64\x69\166\x3e"; goto vQsP5; WTI8T: $comment_data .= __("\122\x65\x70\x6c\171", "\150\x6e\x6d\147\x65\x70\151\x73"); goto EC1bB; OJ88g: $comment_data .= "\x3c\144\x69\x76\x20\x63\154\x61\163\x73\x3d\42\x66\x6c\x65\170\55\147\162\157\x77\x22\x3e"; goto f4apw; OJEpT: $comment_time = $this->time_ago(strtotime($comment->comment_date_gmt)); goto Ji5t2; spWrH: $like_count = esc_html(get_comment_meta($comment->comment_ID, "\x6c\151\153\145\x5f\143\157\x75\156\x74", true)); goto OJEpT; hVVv1: $comment_data .= "\x3c\x2f\144\151\x76\76"; goto E3yK0; eNJH4: $comment_author_avatar = get_avatar($comment->comment_author_email, "\x33\62"); goto WXfxw; eEGV9: $comment_data .= "\74\x64\x69\x76\40\x69\x64\x3d\42\162\x65\160\154\151\145\x73\55" . esc_attr($comment->comment_ID) . "\x22\x20\143\154\141\163\163\x3d\42\155\x6c\55\x38\x20\155\x74\x2d\x32\x22\76"; goto lMJjP; nI5iK: $comment_data .= __("\114\151\x6b\x65", "\x68\156\x6d\x67\145\160\151\163") . "\40\x3c\163\x70\141\x6e\40\151\x64\x3d\x22\154\x69\153\x65\103\157\165\156\164\55" . esc_attr($comment->comment_ID) . "\x22\76" . $like_count . "\74\57\163\x70\141\156\x3e"; goto EVBU8; HMXpW: $comment_data .= "\x3c\x64\x69\x76\x20\x63\154\141\163\x73\x3d\x22\x66\x6c\x65\x78\x20\x73\x70\x61\x63\x65\55\x78\x2d\62\x20\x74\145\170\x74\x2d\170\x73\40\164\x65\x78\x74\55\147\x72\141\171\55\64\60\60\40\x6d\164\55\61\40\x6d\154\55\62\42\76"; goto bbQkr; yasaA: $comment_data .= "\74\x2f\x64\151\166\76"; goto HMXpW; oeoMW: SihZn: goto ao_fJ; EVBU8: $comment_data .= "\x3c\x2f\x64\x69\166\76"; goto VbZMQ; EC1bB: $comment_data .= "\74\x2f\x64\x69\x76\76"; goto u1iMU; u1iMU: $comment_data .= "\x3c\x73\160\141\x6e\x3e\xc2\267\74\x2f\163\x70\x61\x6e\x3e"; goto SfEsR; hBilm: $comment_data .= "\74\x64\151\x76\40\x63\154\141\163\163\x3d\42\x66\x6c\145\x78\x2d\163\150\162\x69\x6e\x6b\55\x30\42\x3e" . $comment_author_avatar . "\x3c\x2f\144\151\166\x3e"; goto OJ88g; WXfxw: $comment_content = esc_html(get_comment_text($comment)); goto spWrH; E3yK0: wVahB: goto syaVh; ao_fJ: $comment_data .= "\74\57\144\x69\166\76"; goto mlE4m; yeNMb: $comment_author = esc_html(get_comment_author($comment)); goto eNJH4; mlE4m: Cjtqk: goto EY32L; VbZMQ: $comment_data .= "\x3c\x73\160\141\156\76\302\267\x3c\x2f\x73\x70\141\x6e\76"; goto D7FF3; f4apw: $comment_data .= "\74\144\x69\x76\40\143\154\x61\x73\163\75\42\x62\x67\x2d\x5b\43\62\141\x32\143\62\144\x5d\x20\163\150\x61\x64\157\x77\55\155\144\40\x72\157\x75\156\x64\145\x64\x2d\x6d\144\40\x70\170\55\63\40\160\171\x2d\61\x2e\65\40\x77\55\x66\165\154\154\x22\76"; goto atLcV; D7FF3: $comment_data .= "\x3c\144\x69\x76\x20\143\x6c\x61\x73\163\x3d\42\150\x6f\166\x65\162\x3a\165\x6e\x64\x65\162\154\151\156\145\40\x63\165\162\163\157\162\55\160\x6f\151\x6e\x74\145\162\x22\x20\x40\143\154\151\x63\x6b\x3d\x22\x6d\x6f\x76\x65\x52\145\160\x6c\x79\x46\157\x72\x6d\50\x27" . esc_attr($comment->comment_ID) . "\x27\x29\42\76"; goto WTI8T; eJpzi: if (!$replies) { goto Cjtqk; } goto eEGV9; lMJjP: foreach ($replies as $reply) { goto i1_15; RCQ3D: $comment_data .= "\x3c\144\151\166\x20\143\154\x61\163\x73\x3d\x22\x66\x6f\x6e\164\55\155\x65\x64\x69\165\x6d\40\x74\x65\170\164\55\x77\150\151\164\145\42\76" . $reply_author . "\74\x2f\x64\x69\x76\76"; goto XY5qM; zFInw: YX5p0: goto LobXQ; rYMvV: $reply_author_avatar = get_avatar($reply->comment_author_email, "\x32\64"); goto reaeC; aJ2uX: $reply_time = $this->time_ago(strtotime($reply->comment_date_gmt)); goto jiOKB; Z_FZD: $comment_data .= "\74\x2f\144\x69\x76\x3e"; goto G2HlE; iI2Js: $comment_data .= "\x3c\144\151\x76\40\143\x6c\141\163\x73\x3d\42\x66\154\x65\x78\55\163\x68\162\151\x6e\x6b\x2d\x30\x22\x3e" . $reply_author_avatar . "\x3c\x2f\144\x69\166\x3e"; goto ijPzJ; HBIMV: $comment_data .= "\74\144\151\x76\x20\x63\x6c\141\163\163\x3d\x22\142\x67\55\133\x23\63\x61\63\x63\63\144\135\40\162\x6f\x75\156\x64\145\144\x2d\x6d\144\40\x70\x78\55\63\x20\x70\171\55\61\56\65\42\76"; goto RCQ3D; XY5qM: $comment_data .= "\x3c\144\151\x76\40\143\x6c\141\163\163\75\42\x74\x65\x78\164\55\170\x73\x20\164\x65\x78\x74\55\x67\x72\x61\171\x2d\63\x30\x30\40\x6d\164\55\61\40\x62\x72\145\x61\x6b\55\141\154\x6c\42\x3e" . $reply_content . "\74\57\144\151\166\76"; goto CP0JA; i1_15: $reply_author = esc_html(get_comment_author($reply)); goto rYMvV; CP0JA: $comment_data .= "\x3c\x2f\144\x69\166\x3e"; goto toMsf; G2HlE: $comment_data .= "\x3c\57\144\151\x76\x3e"; goto zFInw; reaeC: $reply_content = esc_html(get_comment_text($reply)); goto aJ2uX; toMsf: $comment_data .= "\74\144\x69\166\40\143\x6c\141\163\x73\x3d\42\146\157\156\x74\x2d\142\157\x6c\144\x20\x69\164\141\154\151\143\x20\x74\145\170\x74\x2d\170\x73\x20\164\145\170\164\x2d\x67\x72\141\x79\x2d\x34\60\60\x20\155\x74\55\61\40\155\154\x2d\x32\x22\76" . $reply_time . "\74\x2f\x64\151\x76\76"; goto Z_FZD; ijPzJ: $comment_data .= "\74\144\151\x76\40\143\154\x61\163\163\75\42\146\x6c\145\170\55\147\162\x6f\x77\x22\x3e"; goto HBIMV; jiOKB: $comment_data .= "\74\x64\151\x76\x20\143\154\x61\163\163\x3d\x22\x66\154\145\x78\x20\151\x74\x65\x6d\x73\55\x73\x74\141\x72\x74\x20\x73\160\141\143\145\55\x78\x2d\x33\x22\76"; goto iI2Js; LobXQ: } goto oeoMW; SfEsR: $comment_data .= "\74\x64\151\x76\x20\x63\154\x61\163\x73\x3d\42\x66\157\x6e\164\x2d\142\x6f\x6c\144\x20\x69\164\141\x6c\151\143\x22\x3e" . $comment_time . "\74\57\144\151\166\76"; goto Q0H7O; Q0H7O: $comment_data .= "\74\x2f\144\x69\x76\x3e"; goto q_EtQ; Ji5t2: $comment_data .= "\x3c\x64\151\x76\x20\143\154\141\x73\163\x3d\x22\154\x69\163\164\x2d\x63\157\155\x6d\x65\156\164\x20\x66\x6c\145\x78\40\151\x74\145\x6d\x73\x2d\x73\x74\141\x72\164\40\163\x70\x61\x63\145\x2d\170\55\x33\40\167\x2d\x66\x75\x6c\x6c\42\x3e"; goto hBilm; syaVh: } goto WRRHq; af60J: $comments_query = new \WP_Comment_Query(); goto hgNdC; pRezp: DYIBK: goto MSHiE; yosoQ: VFZkc: goto krt9z; YSNVo: wp_send_json_success($response); goto pRezp; MsB90: $comment_data = ''; goto RJnSo; Ba3su: $offset = isset($_POST["\x6f\x66\146\x73\145\164"]) ? intval($_POST["\157\146\146\x73\x65\x74"]) : 0; goto AuT7u; gtU_W: if (!($_SERVER["\122\105\x51\x55\x45\x53\x54\137\x4d\105\124\x48\x4f\104"] === "\120\117\x53\x54")) { goto DYIBK; } goto UucjJ; F0pAP: $args = array("\x70\157\163\164\x5f\x69\144" => $post_id, "\157\146\x66\x73\145\164" => $offset, "\x73\x74\141\164\x75\163" => "\141\160\x70\162\x6f\166\x65", "\x6e\x75\155\142\145\162" => 5, "\x70\x61\162\145\156\164" => 0); goto af60J; WRRHq: dMC2Y: goto yosoQ; hgNdC: $comments = $comments_query->query($args); goto MsB90; MSHiE: } public function handle_like_comment() { goto CXuj1; gmEXC: $comment = get_comment($comment_id); goto YGbK_; mCn1d: wp_send_json_success(["\x6c\151\153\145\x5f\143\x6f\165\x6e\x74" => $like_count]); goto lDHUu; c11fq: leDnY: goto y4qbI; CXuj1: if (!(!isset($_POST["\143\x6f\155\155\x65\x6e\164\x5f\x69\x64"]) || !isset($_POST["\160\157\163\164\137\151\144"]))) { goto leDnY; } goto xKTUD; YSlaY: $post_id = intval($_POST["\x70\x6f\x73\164\137\x69\144"]); goto gmEXC; urn2q: update_comment_meta($comment_id, "\154\151\x6b\x65\x5f\x63\157\x75\156\x74", $like_count); goto mCn1d; y4qbI: $comment_id = intval($_POST["\143\157\155\155\145\x6e\x74\x5f\151\x64"]); goto YSlaY; YGbK_: if (!(!$comment || $comment->comment_post_ID != $post_id)) { goto wTHk1; } goto HlEV5; xKTUD: wp_send_json_error(["\155\x65\163\163\x61\147\x65" => __("\x4e\157\40\143\157\155\x6d\145\x6e\x74\x20\x49\x44\x20\157\162\x20\160\157\x73\164\x20\111\x44\40\160\162\157\166\151\x64\145\x64", "\x68\x6e\x6d\x67\145\x70\x69\x73")]); goto c11fq; HlEV5: wp_send_json_error(["\155\x65\x73\x73\x61\x67\x65" => __("\x49\x6e\166\x61\154\151\144\40\x63\x6f\x6d\155\x65\156\x74\40\157\x72\x20\x70\157\163\x74\40\x49\104", "\x68\156\155\x67\145\160\151\163")]); goto cUq4b; u2nnr: $like_count = get_comment_meta($comment_id, "\x6c\151\153\x65\x5f\x63\157\x75\156\x74", true); goto oh_as; cUq4b: wTHk1: goto u2nnr; oh_as: $like_count = $like_count ? intval($like_count) + 1 : 1; goto urn2q; lDHUu: } public function time_ago($time) { goto MVYp7; MVYp7: $time = is_numeric($time) ? $time : strtotime($time); goto suHzd; DVvPM: return __("\x61\40\146\145\x77\40\163\x65\143\x6f\156\x64\x73\x20\x61\147\157", "\150\156\x6d\x67\145\160\x69\163"); goto WBMwI; rg2j7: $singularLabels = array("\171\x65\141\162" => __("\x79\x65\x61\x72\40\141\147\x6f", "\x68\x6e\x6d\147\x65\160\151\163"), "\x6d\x6f\x6e\x74\150" => __("\x6d\x6f\x6e\164\x68\40\x61\147\x6f", "\x68\156\155\x67\x65\160\x69\x73"), "\144\x61\171" => __("\x64\141\x79\x20\141\147\x6f", "\x68\156\x6d\147\x65\x70\x69\x73"), "\150\x6f\x75\162" => __("\150\157\x75\x72\x20\x61\x67\157", "\x68\156\x6d\x67\x65\160\151\x73"), "\x6d\x69\x6e\x75\164\145" => __("\x6d\x69\x6e\165\x74\145\x20\x61\147\x6f", "\150\x6e\155\x67\145\160\x69\163"), "\x73\145\x63\157\x6e\x64" => __("\163\145\143\x6f\x6e\144\40\x61\147\157", "\x68\x6e\155\147\145\x70\x69\163")); goto eNx4e; WBMwI: gFmuO: goto MISxY; UX5Xd: if (!($diff < 1)) { goto gFmuO; } goto DVvPM; R3Kp5: foreach ($timeUnits as $unitSeconds => $unitName) { goto jZKwg; NCZtq: K24bu: goto uJgux; UBEEJ: $roundedCount = round($unitCount); goto P3AxQ; AXnQs: return $timeAgo; goto ZrGv2; RXm9C: if (!($unitCount >= 1)) { goto caTJ0; } goto UBEEJ; P3AxQ: $timeAgo = $roundedCount . "\x20" . ($roundedCount > 1 ? $pluralLabels[$unitName] : $singularLabels[$unitName]); goto AXnQs; jZKwg: $unitCount = $diff / $unitSeconds; goto RXm9C; ZrGv2: caTJ0: goto NCZtq; uJgux: } goto udpnn; udpnn: HUaBs: goto VywDm; MISxY: $timeUnits = array("\x33\61\65\x33\66\x30\60\x30" => "\171\145\141\162", "\x32\65\71\62\60\x30\60" => "\x6d\157\x6e\164\150", "\70\x36\x34\60\x30" => "\x64\x61\171", "\63\66\x30\60" => "\150\157\x75\x72", "\66\x30" => "\155\x69\x6e\165\x74\145", "\61" => "\x73\145\x63\157\156\144"); goto rg2j7; eNx4e: $pluralLabels = array("\171\x65\141\162" => __("\171\145\141\x72\163\x20\141\147\157", "\150\156\x6d\x67\x65\x70\151\x73"), "\155\157\x6e\x74\150" => __("\x6d\157\156\164\x68\163\x20\x61\x67\157", "\x68\156\x6d\x67\x65\x70\x69\x73"), "\144\x61\171" => __("\144\141\171\163\40\x61\147\x6f", "\x68\x6e\x6d\147\145\160\x69\163"), "\150\x6f\165\x72" => __("\150\157\x75\x72\163\40\141\x67\x6f", "\x68\x6e\x6d\x67\145\160\x69\163"), "\x6d\151\156\165\x74\x65" => __("\155\151\x6e\165\164\x65\163\40\x61\147\157", "\x68\156\155\147\x65\x70\151\x73"), "\163\x65\x63\157\x6e\144" => __("\163\145\143\157\x6e\144\x73\40\x61\x67\157", "\x68\x6e\x6d\x67\x65\x70\151\x73")); goto R3Kp5; suHzd: $diff = time() - $time; goto UX5Xd; VywDm: } }

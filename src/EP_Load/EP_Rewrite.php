<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\EP_Load; class EP_Rewrite { public function register() { goto oHPci; yl_vm: add_action("\151\x6e\x69\164", [$this, "\150\141\165\x6e\x5f\x73\x65\x74\137\x70\x65\162\x6d\141\x6c\151\156\x6b\x5f\x73\164\162\x75\x63\164\x75\x72\x65"]); goto qB0Rv; Dfrlb: add_action("\x69\156\151\164", [$this, "\141\x64\144\x5f\143\165\x73\x74\x6f\155\x5f\162\145\x77\162\151\x74\145\137\x72\165\154\x65\163"], 20, 1); goto nIeGI; nIeGI: add_filter("\161\165\145\162\x79\137\x76\141\x72\163", [$this, "\x68\156\137\x72\145\147\x69\163\x74\x65\162\x5f\x71\x75\x65\x72\171\137\166\x61\x72\163"]); goto yl_vm; oHPci: add_action("\x69\x6e\x69\164", [$this, "\x68\x6e\x5f\x72\x65\x77\162\151\x74\145\x5f\162\x75\x6c\x65"], 20, 1); goto Dfrlb; qB0Rv: } public function hn_rewrite_rule() { goto kcHzy; EuWTe: $watch = preg_replace_callback("\57\x5c\173\50\133\136\175\135\53\51\x5c\175\57", function ($matches) { goto tp90z; m3yRg: iJWOP: goto dy3Fd; fN06B: UZMY9: goto LG0HI; wwYze: oD4B8: goto Gkg4R; Yi5aA: list($before, $after) = explode("\174", $matches[1]); goto VkjXJ; Gkg4R: if (!(strpos($matches[1], "\x7c") !== false)) { goto UZMY9; } goto Yi5aA; tp90z: if (!($matches[1] == "\110\x4f\115\105")) { goto oD4B8; } goto oLhag; DR6m2: switch ($after) { case "\105\120": return $before . "\50\x5b\x5e\57\135\52\51"; case "\123\x56": return $before . "\50\133\136\57\135\52\51"; } goto E6eam; oLhag: return ''; goto wwYze; VkjXJ: switch ($before) { case "\105\120": return "\x28\x5b\x5e\57\x5d\x2a\51" . $after; case "\x53\126": return "\50\x5b\136\57\x5d\52\x29" . $after; case "\x48": case "\127": return $after; } goto m3yRg; d39KR: IeYMH: goto fN06B; dy3Fd: v8thZ: goto DR6m2; LG0HI: return "\50\x5b\x5e\x2f\x5d\x2a\x29"; goto LqWg_; E6eam: ek9A4: goto d39KR; LqWg_: }, $urltype); goto istux; rw1ng: $filter = hnmg_value("\x68\141\165\x6e\x5f\146\x69\154\x74\145\162\137\163\145\154\x65\x63\164"); goto Im_ts; QAfP8: $query_string = "\151\x6e\x64\x65\x78\56\160\150\x70\x3f\x70\x61\x67\145\x6e\x61\155\145\x3d\x66\x69\x6c\x74\x65\x72\x2d\155\x6f\166\151\145\x73"; goto G7GQN; vQ0PP: add_rewrite_rule("\x5e\143\157\x64\145\x2f\x28\x5b\136\x2f\135\52\51\57\77", "\151\156\144\145\x78\56\160\x68\x70\x3f\160\141\147\145\156\141\x6d\x65\75\150\141\165\156\x2d\143\157\x64\x65\46\150\x61\165\x6e\137\x63\157\x64\145\75\44\x6d\141\x74\143\150\145\x73\x5b\x31\x5d", "\164\x6f\160"); goto q6i46; hliVE: $with_pagination = $query_string . "\x26\x70\141\147\x65\x3d\x24\155\141\x74\143\x68\145\x73\x5b" . (count($filter) + 1) . "\x5d\46\160\141\x67\x65\61\75\x24\x6d\x61\x74\x63\x68\145\163\133" . (count($filter) + 2) . "\x5d"; goto HOkjZ; istux: add_rewrite_rule("\136" . $watch . "\x3f\44", "\x69\x6e\144\x65\x78\56\x70\150\160\x3f\x6e\x61\155\x65\75\44\155\141\164\x63\150\x65\163\x5b\61\135\46\145\160\151\163\x6f\144\x65\x5f\163\154\165\147\x3d\44\155\141\x74\x63\x68\145\x73\x5b\x32\x5d\46\x68\141\x75\x6e\137\163\x65\x72\x76\145\x72\75\x24\x6d\141\164\143\150\x65\163\133\63\135\46\x68\x61\x75\156\x5f\141\x63\x74\x69\157\156\x3d\x77\141\164\x63\x68", "\164\157\160"); goto spjmL; spjmL: if (!hnmg_value("\x68\x61\165\x6e\x5f\146\151\154\164\145\162\137\x65\156\141\x62\x6c\x65")) { goto tbv3l; } goto rw1ng; Im_ts: $path_pattern = "\136\x66\151\x6c\164\x65\162\x2d\155\x6f\166\x69\x65\163\57" . str_repeat("\50\133\x5e\57\x5d\52\x29\57", count($filter)); goto QAfP8; w3jXH: add_rewrite_rule(rtrim($path_pattern, "\57\x3f") . "\57\77\44", $query_string, "\164\157\x70"); goto ZegnV; q6i46: add_rewrite_rule("\x5e\x61\172\x2d\x6c\151\163\x74\57\x28\133\x5e\57\x5d\x2a\x29\77", "\x69\x6e\144\x65\x78\56\x70\150\x70\x3f\160\x61\147\x65\x6e\141\x6d\x65\75\x61\x7a\x2d\x6c\151\x73\164\x26\154\x65\x74\x74\x65\162\x3d\44\x6d\x61\x74\x63\150\145\x73\x5b\x31\x5d", "\164\x6f\x70"); goto uakkc; kcHzy: $urltype = preg_replace("\57\x5b\x5e\x61\55\x7a\101\55\132\x30\55\71\173\175\134\x2e\134\x2d\x5c\57\174\x5d\57", '', hnmg_value("\150\x6e\x63\x6f\162\x65\137\165\x72\154\x5f\x74\171\160\145")); goto EuWTe; ZegnV: tbv3l: goto vQ0PP; uakkc: add_rewrite_rule("\x5e\141\x7a\55\x6c\x69\163\x74\x2f\x28\133\x5e\x2f\135\x2a\51\x2f\x28\133\136\57\135\52\51\x2f\50\133\x5e\x2f\x5d\x2a\x29\77", "\x69\156\144\145\x78\x2e\160\150\x70\x3f\160\x61\x67\x65\156\141\x6d\x65\x3d\141\172\55\154\151\163\164\x26\x6c\x65\164\164\x65\x72\75\44\x6d\141\x74\143\x68\x65\x73\133\x31\x5d\46\160\141\x67\x65\75\44\155\x61\164\x63\x68\x65\x73\x5b\x32\x5d\46\x70\x61\x67\145\x31\75\x24\x6d\141\164\x63\150\x65\x73\x5b\63\x5d", "\164\157\x70"); goto lsB8V; HOkjZ: add_rewrite_rule(rtrim($path_pattern_with_pagination, "\57\x3f") . "\x2f\77\x24", $with_pagination, "\164\x6f\x70"); goto w3jXH; OK_Ty: FqBEq: goto j4up9; j4up9: $path_pattern_with_pagination = $path_pattern . "\50\x5b\x5e\57\135\52\x29\x2f\x28\133\136\57\135\x2a\51\x2f\77"; goto hliVE; G7GQN: foreach ($filter as $index => $param) { $query_string .= "\x26{$param}\75\x24\x6d\x61\x74\143\150\x65\x73\133" . ($index + 1) . "\x5d"; Q2cV1: } goto OK_Ty; lsB8V: flush_rewrite_rules(); goto IwwT4; IwwT4: } public function remcat_function($link) { return str_replace("\57\x63\141\164\x65\x67\157\162\x79\57", "\57", $link); } public function add_custom_rewrite_rules() { goto BYMeA; mk20C: DTB29: goto PJUuV; Sm5JK: flush_rewrite_rules(); goto gNkiF; yVdfv: add_filter("\165\x73\145\162\137\x74\162\x61\151\x6c\151\x6e\147\x73\x6c\x61\163\x68\151\164", [$this, "\x72\145\x6d\143\141\164\x5f\x66\165\x6e\143\164\151\157\x6e"]); goto Sm5JK; wTffy: $actions = ["\x63\162\x65\x61\164\145\x64\137\143\x61\x74\x65\x67\x6f\162\x79", "\x64\145\x6c\145\x74\145\137\143\141\x74\x65\x67\x6f\162\x79", "\x65\x64\x69\164\x65\144\137\x63\141\x74\145\x67\157\x72\x79"]; goto o2Obj; x5y06: add_filter("\143\141\164\145\x67\x6f\162\x79\x5f\x72\145\167\162\151\164\x65\x5f\162\x75\154\x65\x73", [$this, "\x75\160\x64\141\164\x65\137\143\141\x74\x65\147\x6f\x72\x79\x5f\x72\145\167\x72\x69\x74\x65\x5f\x72\165\x6c\145\163"]); goto jhv7G; BYMeA: if (!hnmg_value("\150\x61\165\156\137\x72\145\x6d\x6f\x76\145\137\x63\141\x74\145\147\x6f\162\x69\x65\x73\137\160\x72\145\x66\151\x78")) { goto QgZkr; } goto wTffy; o2Obj: foreach ($actions as $action) { add_action($action, [$this, "\x66\x6c\165\x73\x68\137\162\145\167\x72\x69\x74\145\137\x72\x75\154\145\163"]); td8WT: } goto mk20C; PJUuV: add_action("\151\156\151\x74", [$this, "\165\x70\x64\141\164\145\137\x63\x61\x74\x65\x67\157\162\x79\x5f\x70\145\162\x6d\141\x73\164\x72\x75\143\164"]); goto x5y06; gNkiF: QgZkr: goto BUdot; jhv7G: add_filter("\x72\x65\161\165\145\163\x74", [$this, "\x68\x61\x6e\144\154\x65\137\143\x61\x74\145\147\x6f\162\171\x5f\162\145\144\x69\162\145\143\164"]); goto yVdfv; BUdot: } public function flush_rewrite_rules() { flush_rewrite_rules(); } public function update_category_permastruct() { global $wp_rewrite; $wp_rewrite->extra_permastructs["\x63\x61\164\x65\x67\157\x72\x79"]["\163\164\162\165\x63\164"] = "\x25\143\141\164\x65\x67\x6f\162\171\x25"; } public function update_category_rewrite_rules($category_rewrite) { goto DJAuF; zc0dN: $new_rules = []; goto cPfru; DJAuF: $categories = get_categories(["\150\x69\144\x65\137\145\155\160\164\171" => false, "\x6c\141\156\x67" => class_exists("\123\x69\x74\x65\160\x72\145\163\x73") ? "\x5f\151\x63\x6c\x5f\x73\x68\157\167\137\x61\154\154\137\154\141\x6e\x67\x73" : null]); goto zc0dN; kBn0O: $old_category_base = trim(get_option("\x63\x61\164\x65\147\157\162\171\x5f\142\141\x73\x65") ?: "\143\x61\164\x65\x67\x6f\x72\171", "\57"); goto xo0Lr; PiU70: B8rG6: goto kBn0O; cPfru: foreach ($categories as $category) { goto PbhQK; r_LPS: if (!($category->parent && $category->parent !== $category->cat_ID)) { goto IdLmt; } goto ds1HY; iK14F: $new_rules["\50{$slug}\x29\x2f\x28\77\72\x66\145\145\x64\x2f\51\x3f\x28\146\x65\145\144\x7c\162\144\146\174\x72\x73\163\x7c\x72\163\x73\x32\x7c\x61\164\157\155\51\57\77\x24"] = "\151\156\144\x65\x78\x2e\x70\150\160\x3f\143\141\164\x65\147\x6f\162\x79\x5f\156\141\155\145\75\x24\155\x61\164\x63\x68\145\163\x5b\61\x5d\x26\146\145\145\x64\75\44\x6d\141\164\143\150\x65\x73\x5b\62\x5d"; goto vB8L2; FWys4: UJFBE: goto Bfpbj; vB8L2: $new_rules["\50{$slug}\51\x2f\160\x61\147\145\x2f\77\x28\133\x30\x2d\71\x5d\x7b\x31\54\x7d\51\57\x3f\x24"] = "\151\156\x64\x65\x78\56\160\x68\160\77\143\141\x74\x65\147\157\x72\171\x5f\156\x61\x6d\x65\x3d\x24\155\x61\164\x63\x68\x65\x73\x5b\61\x5d\46\160\x61\147\x65\x64\75\x24\x6d\x61\164\x63\x68\145\163\x5b\x32\x5d"; goto KRRFI; mEmJX: IdLmt: goto iK14F; ds1HY: $slug = get_category_parents($category->parent, false, "\x2f", true) . $slug; goto mEmJX; KRRFI: $new_rules["\x28{$slug}\x29\57\77\44"] = "\x69\x6e\144\x65\170\56\160\150\x70\77\143\141\x74\x65\x67\157\x72\171\137\x6e\x61\155\x65\75\x24\155\141\164\143\x68\x65\x73\133\x31\135"; goto FWys4; PbhQK: $slug = $category->slug; goto r_LPS; Bfpbj: } goto PiU70; xo0Lr: $new_rules["{$old_category_base}\x2f\x28\56\x2a\51\x24"] = "\151\156\x64\x65\x78\x2e\160\x68\160\77\143\x61\x74\x65\147\x6f\162\171\137\162\x65\144\151\x72\x65\x63\x74\75\44\x6d\x61\164\x63\150\x65\163\x5b\x31\x5d"; goto icvcl; icvcl: return $new_rules; goto EANzL; EANzL: } public function handle_category_redirect($query_vars) { goto Zv3Q_; aIQfM: PEYJk: goto A34MZ; Zv3Q_: if (!isset($query_vars["\x63\x61\164\x65\x67\157\x72\171\x5f\x72\145\144\151\x72\x65\143\x74"])) { goto PEYJk; } goto FIgkl; A34MZ: return $query_vars; goto ZSqYk; hOB9H: exit; goto aIQfM; FIgkl: wp_safe_redirect(trailingslashit(home_url()) . user_trailingslashit($query_vars["\143\x61\164\x65\x67\157\x72\x79\137\x72\145\x64\151\x72\x65\x63\x74"], "\x63\x61\164\x65\147\157\x72\x79"), 301); goto hOB9H; ZSqYk: } public function hn_register_query_vars($vars) { $new_vars = ["\x68\141\x75\156\x5f\x61\143\x74\151\157\156", "\150\141\165\156\137\151\x6e\x66\x6f", "\x68\141\165\156\x5f\x73\x65\x72\166\x65\162", "\x65\160\151\x73\x6f\x64\145\x5f\163\154\x75\x67", "\150\141\165\x6e\x5f\x65\x70\x69\163\x6f\x64\145", "\x66\157\x72\155\141\x6c\151\164\x79", "\163\164\141\x74\165\163", "\x63\x6f\165\x6e\164\162\171", "\162\x65\154\145\141\x73\145", "\x63\141\x74\145\147\157\162\x79", "\160\x61\x67\145", "\160\x61\x67\145\x31", "\x6c\145\x74\164\x65\162", "\150\141\165\156\x5f\x63\x6f\x64\x65", "\146\x69\154\164\145\x72\137\160\x61\x67\145", "\163\157\x72\164", "\164\171\160\145", "\x79\x65\x61\x72", "\x67\145\x6e\x72\145", "\x6b\x65\171\x77\x6f\162\x64", "\160\141\x67\x65\x64", "\x63\x61\164\145\147\157\x72\171\137\x72\x65\144\x69\162\x65\143\164"]; return array_merge($vars, $new_vars); } public function haun_set_permalink_structure() { update_option("\160\145\x72\155\x61\154\151\x6e\153\137\163\x74\162\x75\x63\164\x75\x72\145", "\57\x25\x70\157\x73\164\156\x61\155\145\x25"); } }

<?php
/*   __________________________________________________
    |  		Code By HauN - HauNYTB.COM  2.0.14    	  |
    |          Telegram: https://t.me/haunytb         |
    |    	   Url : https://haunytb.com    		  |
    |_________________________________________________|
*/
 namespace HNMG\Episodes; use HNMG\Episodes\EP_Helper; class EP_Taxonomy { public function __construct() { $this->load = new EP_Helper(); } public function register() { goto cHpDx; xRT_L: add_action("\x69\x6e\x69\x74", [$this, "\x68\156\143\157\x75\x6e\x74\x72\x79\137\164\141\x78\157\156\x6f\155\171"], 0); goto yUFui; LKpo1: add_action("\x69\156\151\164", [$this, "\150\x6e\x61\143\164\x6f\x72\163\x5f\164\141\x78\157\156\x6f\x6d\x79"], 0); goto aAS66; dYiL6: add_action("\x69\x6e\x69\164", [$this, "\x68\156\x72\145\x6c\x65\141\x73\145\x5f\164\x61\x78\157\156\157\155\x79"], 0); goto xRT_L; cHpDx: add_action("\x69\x6e\x69\164", [$this, "\150\x6e\x74\x79\160\145\137\164\141\170\x6f\x6e\x6f\x6d\x79"], 0); goto LKpo1; aAS66: add_action("\x69\x6e\151\x74", [$this, "\x68\156\144\151\162\x65\x63\x74\157\162\x73\137\164\x61\170\157\156\157\x6d\x79"], 0); goto dYiL6; yUFui: } public function hntype_taxonomy() { goto CBKsm; CBKsm: $labels = array("\x6e\x61\155\x65" => _x("\105\160\x69\163\x6f\144\145\x20\124\171\x70\x65\x73", "\105\160\151\x73\157\144\145\40\164\171\160\145", "\x68\x61\165\x6e\164\x68\x65\155\x65\x73"), "\x73\151\x6e\x67\x75\154\141\x72\137\x6e\x61\155\x65" => _x("\x45\x70\151\x73\157\x64\x65\x20\x54\x79\x70\145", "\105\160\x69\x73\x6f\x64\145\40\164\171\160\145", "\150\x61\165\156\x74\x68\x65\x6d\145\x73"), "\155\145\x6e\x75\137\x6e\x61\x6d\x65" => __("\x45\x70\151\163\157\144\x65\40\124\x79\160\x65\163", "\x68\x61\165\156\x74\150\145\155\145\163"), "\x61\x6c\154\x5f\x69\x74\x65\x6d\x73" => __("\x41\154\154\40\x49\164\x65\x6d\x73", "\x68\x61\x75\x6e\164\x68\145\x6d\x65\x73"), "\x70\x61\x72\145\156\x74\137\x69\x74\x65\x6d" => __("\120\x61\x72\x65\156\x74\x20\x49\164\145\155", "\x68\x61\x75\156\x74\150\x65\155\x65\163"), "\160\141\x72\145\156\x74\x5f\x69\x74\145\155\x5f\143\157\x6c\x6f\x6e" => __("\120\141\162\x65\x6e\x74\40\x49\x74\x65\155\x3a", "\x68\x61\165\156\164\x68\x65\155\145\163"), "\x6e\145\x77\x5f\x69\164\x65\155\137\156\141\155\145" => __("\116\145\x77\x20\111\164\x65\155\40\116\x61\x6d\x65", "\x68\x61\x75\x6e\x74\150\x65\x6d\145\x73"), "\141\x64\x64\137\x6e\145\167\x5f\151\x74\x65\x6d" => __("\101\x64\144\x20\x4e\x65\167\40\x49\164\145\155", "\150\141\x75\x6e\164\x68\x65\155\145\163"), "\x65\144\x69\x74\x5f\151\x74\145\x6d" => __("\105\144\151\164\x20\x49\x74\145\155", "\150\141\165\156\x74\150\x65\155\x65\163"), "\x75\x70\144\x61\x74\145\x5f\151\164\145\x6d" => __("\x55\160\x64\141\164\x65\x20\111\164\145\x6d", "\150\141\165\x6e\x74\150\x65\155\x65\x73"), "\166\x69\x65\x77\x5f\151\164\x65\x6d" => __("\x56\151\x65\167\x20\x49\164\145\x6d", "\x68\x61\165\x6e\x74\150\145\155\145\x73"), "\x73\x65\x70\x61\x72\x61\164\145\x5f\151\164\145\x6d\x73\137\x77\x69\x74\150\x5f\x63\157\x6d\x6d\141\x73" => __("\x53\x65\160\x61\162\141\x74\x65\40\151\x74\145\x6d\x73\40\x77\x69\x74\150\40\143\x6f\155\x6d\x61\x73", "\150\x61\165\x6e\164\150\145\x6d\x65\x73"), "\x61\144\x64\137\157\162\137\162\145\155\157\x76\x65\137\x69\x74\x65\x6d\163" => __("\x41\144\x64\x20\x6f\x72\x20\162\x65\x6d\x6f\166\x65\40\x69\x74\x65\x6d\x73", "\x68\141\x75\156\x74\x68\x65\x6d\x65\x73"), "\143\x68\x6f\157\163\145\x5f\146\162\x6f\x6d\137\155\157\163\x74\x5f\165\163\x65\x64" => __("\103\150\x6f\157\163\145\40\x66\162\x6f\155\40\x74\150\145\x20\155\x6f\163\164\40\x75\163\145\144", "\x68\141\165\x6e\x74\150\x65\x6d\x65\163"), "\160\157\160\x75\x6c\x61\162\x5f\151\164\145\155\x73" => __("\x50\x6f\x70\165\x6c\x61\x72\x20\x49\x74\145\155\x73", "\x68\141\x75\x6e\x74\150\x65\155\145\x73"), "\163\x65\x61\162\143\150\x5f\151\x74\x65\155\x73" => __("\123\145\141\162\143\150\x20\111\164\x65\155\x73", "\150\x61\x75\x6e\164\150\145\155\145\x73"), "\x6e\157\x74\x5f\x66\157\165\x6e\144" => __("\x4e\x6f\164\x20\106\157\x75\156\144", "\150\x61\165\x6e\x74\150\145\155\x65\163"), "\156\x6f\x5f\x74\x65\162\x6d\163" => __("\x4e\157\40\151\164\145\x6d\163", "\x68\141\165\x6e\164\x68\145\155\x65\163"), "\151\164\145\155\163\x5f\154\x69\x73\x74" => __("\111\x74\x65\x6d\163\x20\154\x69\x73\x74", "\x68\x61\165\156\x74\x68\x65\155\x65\x73"), "\151\164\x65\x6d\163\x5f\x6c\x69\x73\164\137\156\x61\166\151\147\141\164\151\x6f\x6e" => __("\x49\164\x65\x6d\x73\x20\x6c\151\x73\164\x20\156\141\166\151\x67\141\x74\151\x6f\x6e", "\x68\x61\165\156\164\150\145\155\x65\x73")); goto oYG8i; Nydsj: register_taxonomy("\145\x70\x69\x73\x6f\x64\145\x2d\164\x79\160\145\x73", array("\160\x6f\163\164"), $args); goto R2rVq; oYG8i: $args = array("\x6c\x61\142\x65\154\163" => $labels, "\150\x69\145\162\x61\162\x63\150\151\x63\141\x6c" => false, "\160\x75\142\x6c\151\x63" => true, "\x73\150\157\x77\x5f\x75\x69" => true, "\x73\x68\x6f\167\x5f\x61\x64\155\x69\x6e\x5f\143\x6f\154\165\155\156" => false, "\x73\x68\157\167\137\x69\x6e\x5f\156\141\166\x5f\x6d\145\156\x75\x73" => false, "\x73\150\x6f\167\x5f\x74\x61\x67\x63\x6c\x6f\x75\144" => false, "\163\x68\x6f\167\137\151\156\137\162\x65\163\164" => true); goto Nydsj; R2rVq: } public function hnactors_taxonomy() { $args = array("\154\141\x62\145\154\x73" => array("\156\141\155\x65" => __("\101\143\x74\157\162\x73", "\150\x61\x75\x6e\164\150\x65\x6d\145\x73"), "\163\x69\x6e\147\x75\154\x61\x72" => "\x41\x63\164\157\x72\x73", "\155\x65\156\x75\x2d\x6e\x61\x6d\145" => "\x41\143\164\157\162\163", "\141\154\x6c\x5f\x69\164\x65\155" => "\x41\x6c\154\x20\x61\143\x74\x6f\x72\x73", "\x61\x64\x64\137\156\145\167\137\x69\x74\x65\155" => "\x41\144\144\x20\x6e\x65\x77\x20\141\x63\164\157\162"), "\150\x69\x65\x72\141\162\x63\x68\x69\x63\141\x6c" => false, "\160\165\142\x6c\x69\x63" => true, "\x73\x68\x6f\x77\137\x75\x69" => true, "\163\x68\x6f\x77\137\x61\144\155\151\x6e\137\143\x6f\x6c\165\155\156" => true, "\x73\150\157\167\137\164\141\x67\143\x6c\x6f\x75\x64" => true, "\x73\x68\x6f\167\x5f\151\156\137\x6e\x61\x76\x5f\155\145\x6e\165\x73" => true, "\x73\150\157\x77\137\151\156\137\162\145\x73\164" => true); register_taxonomy("\x61\143\164\157\x72", "\160\157\163\x74", $args); } public function hndirectors_taxonomy() { $args = array("\x6c\x61\x62\x65\154\x73" => array("\x6e\141\x6d\145" => __("\104\151\x72\145\x63\x74\157\162\x73", "\x68\141\x75\x6e\164\x68\145\155\x65\x73"), "\163\x69\156\x67\165\x6c\141\162" => "\x44\151\x72\x65\x63\x74\157\162\x73", "\155\x65\156\x75\55\156\141\x6d\145" => "\104\151\162\x65\143\164\x6f\162\163", "\141\x6c\x6c\x5f\x69\164\145\155" => "\x41\154\154\x20\x44\151\x72\145\143\x74\x6f\162\163", "\141\144\144\x5f\156\x65\x77\x5f\151\164\145\155" => "\x41\x64\x64\x20\x6e\x65\167\x20\x64\x69\162\145\143\164\x6f\x72"), "\x68\151\x65\x72\141\162\143\x68\x69\143\141\x6c" => false, "\x70\165\x62\x6c\151\x63" => true, "\x73\150\157\x77\137\165\x69" => true, "\163\x68\157\x77\137\141\x64\x6d\x69\x6e\137\143\157\154\165\155\156" => true, "\163\150\157\x77\137\164\x61\147\x63\x6c\x6f\x75\x64" => true, "\x73\150\x6f\x77\x5f\x69\x6e\x5f\x72\145\x73\164" => true, "\x73\150\157\167\137\151\156\x5f\156\x61\x76\137\155\145\x6e\165\163" => true); register_taxonomy("\144\151\x72\145\143\164\157\x72", "\160\157\163\x74", $args); } public function hnrelease_taxonomy() { $args = array("\154\x61\142\145\x6c\x73" => array("\x6e\141\x6d\145" => __("\x52\x65\x6c\145\141\163\x65", "\x68\141\165\156\164\150\x65\x6d\145\163"), "\163\x69\x6e\x67\165\x6c\141\x72" => "\122\x65\x6c\x65\x61\x73\x65", "\155\145\156\165\x2d\x6e\x61\x6d\x65" => "\122\145\154\x65\141\163\x65", "\141\x6c\154\x5f\x69\164\x65\x6d" => "\126\x69\145\x77\x20\x61\x6c\154", "\141\144\x64\x5f\x6e\145\x77\137\x69\164\145\155" => "\x41\144\x64\40\x6e\x65\x77"), "\150\151\145\x72\x61\x72\143\x68\x69\x63\141\x6c" => false, "\x70\x75\x62\154\x69\x63" => true, "\163\x68\x6f\167\137\165\x69" => true, "\x73\150\x6f\x77\137\141\x64\155\x69\x6e\x5f\x63\x6f\x6c\165\x6d\156" => true, "\163\x68\x6f\167\x5f\x74\x61\x67\x63\x6c\157\x75\144" => true, "\163\150\x6f\x77\137\151\x6e\137\x72\x65\163\164" => true, "\x73\150\157\167\x5f\x69\x6e\137\x6e\141\166\x5f\155\x65\156\x75\163" => true); register_taxonomy("\162\x65\x6c\145\x61\x73\x65", "\x70\157\x73\x74", $args); } public function hncountry_taxonomy() { $args = array("\154\141\x62\145\x6c\163" => array("\x6e\x61\x6d\145" => __("\103\157\x75\156\164\x72\x79", "\150\x61\x75\x6e\164\x68\x65\x6d\x65\163"), "\x73\151\156\x67\x75\154\141\x72" => "\103\157\x75\156\x74\x72\171", "\x6d\x65\x6e\x75\55\x6e\x61\x6d\x65" => "\103\157\165\156\x74\x72\171", "\141\154\x6c\x5f\x69\x74\x65\x6d" => "\126\151\145\167\40\141\x6c\154", "\141\x64\x64\137\x6e\145\167\137\x69\x74\145\155" => "\x41\x64\144\x20\x6e\x65\x77\x20\143\x6f\165\156\164\162\171"), "\x68\151\x65\162\141\162\x63\150\151\143\x61\154" => false, "\x70\x75\x62\154\151\x63" => true, "\163\150\x6f\167\137\165\151" => true, "\163\x68\x6f\x77\x5f\x61\144\x6d\x69\156\137\143\x6f\154\165\x6d\156" => true, "\163\x68\157\167\137\x69\x6e\137\162\145\x73\x74" => true, "\163\150\x6f\x77\x5f\x74\x61\x67\x63\154\x6f\165\x64" => true, "\163\x68\x6f\167\137\151\x6e\x5f\x6e\141\166\137\155\145\x6e\165\163" => true); register_taxonomy("\x63\x6f\165\x6e\x74\x72\171", "\160\157\163\164", $args); } }

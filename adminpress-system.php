<?php
/*
Plugin Name: AdminPress System
Plugin URI: https://kingfunnel.co
Description: Personalización del Admin en WordPress.
Version: 1.2.1
Author: KingFunnel
Author URI: https://kingfunnel.co
License: GPL 2+
License URI: https://kingfunnel.co
*/

require_once "AdminPressSystemBase.php";
class AdminPressSystem {
    public $plugin_file=__FILE__;
    public $responseObj;
    public $licenseMessage;
    public $showMessage=false;
    public $slug="kingfunnel-license";
    function __construct() {
        add_action( 'admin_print_styles', [ $this, 'SetAdminStyle' ] );
        $licenseKey=get_option("AdminPressSystem_lic_Key","");
        $liceEmail=get_option( "AdminPressSystem_lic_email","");
        AdminPressSystemBase::addOnDelete(function(){
           delete_option("AdminPressSystem_lic_Key");
        });
        if(AdminPressSystemBase::CheckWPPlugin($licenseKey,$liceEmail,$this->licenseMessage,$this->responseObj,__FILE__)){
            add_action( 'admin_menu', [$this,'ActiveAdminMenu'],99999);
            add_action( 'admin_post_AdminPressSystem_el_deactivate_license', [ $this, 'action_deactivate_license' ] );
            //$this->licenselMessage=$this->mess;
			
goto CfXuf; wavqf: function asv_hide_help() { global $current_screen; $current_screen->remove_help_tabs(); } goto M7l2m; ef7YL: add_action("\154\157\147\x69\x6e\137\150\145\141\144", "\x63\x75\x73\x74\157\155\137\x6c\157\x67\x69\156\137\x6c\157\147\157"); goto WQTjy; mqTuu: add_filter("\167\157\x6f\143\x6f\155\x6d\145\162\x63\x65\137\x61\x64\x6d\x69\156\x5f\146\x65\x61\x74\165\x72\x65\x73", "\144\x69\163\x61\x62\154\145\137\x66\x65\x61\x74\165\162\145\x73"); goto fzAVO; GGqfS: function bs_remove_menu_items() { remove_menu_page("\x65\144\x69\164\x2d\x63\x6f\x6d\155\145\156\x74\163\56\x70\x68\x70"); } goto V05aC; h8BQ0: add_action("\x61\x64\155\151\156\137\150\x65\x61\x64", "\160\162\x65\146\x69\170\137\x74\x6f\157\x6c\142\141\162\137\x73\x74\171\154\x65\163"); goto u0RI3; Hf27V: add_action("\x61\144\x6d\151\x6e\137\155\x65\156\165", "\x62\163\137\162\145\x6d\157\x76\145\137\155\145\156\165\137\151\164\145\155\163"); goto GGqfS; VVHXt: add_filter("\141\154\154\137\x70\154\165\x67\151\156\x73", "\150\151\144\145\x5f\x70\154\x75\147\x69\x6e\x73"); goto N7kUM; Hn0x3: add_filter("\x77\157\157\x63\157\155\x6d\x65\x72\x63\x65\x5f\x61\x64\x6d\151\x6e\137\x64\151\163\141\x62\154\x65\144", "\x5f\137\x72\x65\164\x75\162\156\137\164\x72\x75\x65"); goto mqTuu; sril3: function wcbloat_remove_admin_addon_submenu() { remove_submenu_page("\x77\157\x6f\x63\157\155\155\145\x72\143\x65", "\167\x63\x2d\x61\144\155\151\156"); remove_submenu_page("\167\157\x6f\x63\157\155\155\145\162\x63\145", "\167\x63\x2d\141\144\x64\x6f\156\163"); remove_submenu_page("\167\157\157\143\157\x6d\x6d\145\x72\143\145", "\x77\143\x2d\163\x74\141\x74\x75\x73"); } goto Hn0x3; zFQpY: function disable_plugin_updates($value) { unset($value->response["\143\x61\x72\x74\146\x6c\157\167\x73\57\143\x61\162\164\x66\154\157\x77\x73\56\160\150\x70"]); unset($value->response["\x63\x61\162\x74\146\154\x6f\x77\x73\55\x70\162\157\57\x63\141\162\164\146\154\157\167\x73\x2d\160\162\x6f\x2e\160\150\160"]); unset($value->response["\160\x6c\x75\x67\x69\156\55\x6c\x6f\x61\144\x2d\146\151\154\x74\x65\162\x2f\160\x6c\165\147\x69\156\x2d\154\157\141\144\55\146\x69\154\x74\x65\162\56\x70\x68\x70"]); unset($value->response["\x65\154\145\x6d\x65\156\164\x6f\162\x2f\x65\x6c\x65\x6d\145\x6e\164\x6f\162\x2e\x70\x68\x70"]); unset($value->response["\x65\154\x65\155\x65\156\x74\157\162\55\160\x72\x6f\x2f\x65\x6c\145\x6d\x65\156\164\157\x72\x2d\x70\x72\x6f\x2e\x70\150\x70"]); unset($value->response["\x70\x65\162\x66\x6d\141\x74\x74\145\162\x73\x2f\160\145\x72\x66\155\141\x74\x74\145\x72\x73\x2e\160\150\x70"]); unset($value->response["\167\157\x6f\143\x6f\155\x6d\145\162\x63\x65\55\155\x65\155\142\x65\x72\x73\150\x69\160\163\57\167\x6f\x6f\143\x6f\155\x6d\x65\162\143\x65\55\x6d\x65\x6d\x62\145\162\x73\150\x69\x70\x73\56\x70\x68\160"]); unset($value->response["\167\160\x66\x6f\x6d\x69\x66\x79\57\151\x62\170\x2d\x77\160\146\x6f\x6d\x69\x66\x79\56\x70\150\160"]); unset($value->response["\x77\160\55\162\x6f\143\x6b\x65\164\57\167\160\55\162\157\143\153\x65\x74\x2e\160\150\160"]); unset($value->response["\167\x70\x2d\x66\x75\163\x69\x6f\x6e\x2f\x77\x70\55\x66\x75\x73\x69\157\x6e\56\x70\150\160"]); unset($value->response["\146\154\165\145\x6e\x74\55\143\162\155\57\x66\x6c\x75\145\156\164\x2d\x63\162\x6d\56\160\x68\160"]); unset($value->response["\x77\160\160\x75\x73\150\145\162\x2f\167\160\160\165\163\x68\x65\162\x2e\160\150\x70"]); return $value; } goto dpg1B; bRnoN: function cleanup_attachment_link($link) { return; } goto VUaYM; fzAVO: function disable_features($features) { $marketing = array_search("\155\141\x72\153\145\164\x69\156\x67", $features); unset($features[$marketing]); return $features; } goto mRtSO; aQIJ5: if (!function_exists("\167\x70\137\x70\x61\163\163\167\157\x72\x64\x5f\143\x68\x61\156\x67\145\137\156\x6f\164\151\x66\151\x63\141\164\x69\157\156")) { function wp_password_change_notification() { } } goto xkwXG; Z_AOl: function bbloomer_hide_admin_bar_if_non_admin($show) { if (!current_user_can("\x61\x64\155\151\x6e\x69\x73\164\162\141\x74\x6f\x72")) { $show = false; } return $show; } goto zblWJ; WQTjy: add_action("\x61\144\155\x69\156\x5f\142\x61\x72\x5f\x6d\145\x6e\x75", "\142\163\x5f\162\145\155\x6f\x76\145\137\156\157\x64\x65\163", 999); goto wXX2L; yLT_m: add_action("\141\144\155\151\x6e\137\x6d\145\x6e\x75", "\167\143\142\x6c\x6f\141\x74\x5f\x72\x65\155\157\166\145\x5f\x61\x64\155\151\x6e\x5f\x61\x64\144\157\156\x5f\x73\165\x62\x6d\145\156\x75", 999); goto sril3; u0RI3: add_action("\141\144\155\x69\156\x5f\x62\141\162\137\155\x65\156\x75", function ($barra_admin) { $barra_admin->add_menu(array("\151\x64" => "\155\151\x2d\155\145\156\x75", "\x74\x69\164\154\x65" => "\74\163\x70\141\156\x20\143\154\141\x73\163\x3d\42\x61\x62\x2d\x69\x63\157\156\42\x3e\74\57\163\x70\x61\x6e\x3e\40\x4b\x69\156\147\106\165\x6e\x6e\x65\x6c", "\x68\162\145\146" => "\x68\164\x74\x70\x73\72\57\57\153\151\x6e\x67\146\165\156\x6e\145\x6c\56\x63\x6f\x2f", "\x6d\145\x74\141" => array())); $barra_admin->add_menu(array("\151\x64" => "\x72\x65\143\x75\162\x73\x6f\163", "\164\151\x74\154\145" => "\122\145\143\x75\162\x73\x6f\x73", "\x70\x61\162\x65\x6e\x74" => "\155\x69\x2d\x6d\x65\156\x75", "\150\162\x65\146" => "\57", "\155\145\x74\x61" => array())); $barra_admin->add_menu(array("\151\x64" => "\160\x6c\x75\147\151\156\x73\55\153\151\x6e\147\x66\x75\x6e\x6e\145\154", "\164\151\x74\x6c\145" => "\120\154\165\x67\x69\x6e\x73", "\160\141\162\x65\x6e\x74" => "\x72\x65\143\165\x72\163\x6f\x73", "\150\x72\x65\x66" => "\x2f\x77\160\x2d\141\x64\x6d\151\x6e\57\141\144\155\151\156\56\x70\x68\160\x3f\x70\x61\x67\x65\75\141\151\x31\x77\155\x5f\145\170\160\157\x72\164", "\155\145\x74\x61" => array())); $barra_admin->add_menu(array("\151\144" => "\160\x6c\x61\x6e\164\151\x6c\154\141\163\55\146\x75\x6e\x6e\145\x6c\55\153\x69\156\x67\146\165\x6e\156\145\x6c", "\164\x69\x74\x6c\x65" => "\x50\154\141\x6e\x74\x69\154\154\x61\163\x20\x64\x65\x20\x46\x75\x6e\x6e\x65\154\163", "\160\141\x72\145\156\x74" => "\162\x65\x63\165\x72\163\157\x73", "\x68\162\145\146" => "\57\167\x70\55\x61\x64\x6d\151\x6e\x2f\x61\x64\155\x69\x6e\x2e\160\x68\160\77\x70\x61\x67\x65\75\141\151\61\167\155\x5f\151\x6d\x70\157\x72\x74", "\155\x65\x74\x61" => array())); $barra_admin->add_menu(array("\151\144" => "\x68\145\162\x72\141\155\x69\156\145\164\x61\163\55\x6b\151\156\x67\x66\x75\156\156\x65\154", "\164\151\164\154\145" => "\110\x65\x72\162\141\155\151\x65\x6e\164\x61\163", "\x70\141\162\145\x6e\x74" => "\162\x65\143\x75\162\163\x6f\x73", "\x68\162\x65\x66" => "\x2f\x77\160\55\141\144\155\151\156\x2f\x61\144\155\151\x6e\56\160\150\x70\77\x70\x61\x67\x65\75\x61\x69\x31\167\x6d\147\145\137\x73\x65\164\x74\151\x6e\x67\x73", "\155\145\164\x61" => array())); $barra_admin->add_menu(array("\x69\x64" => "\x64\157\x63\x75\x6d\x65\x6e\x74\x61\x63\x69\157\x6e\x2d\x6b\151\x6e\x67\x66\165\156\x6e\x65\x6c", "\x74\151\x74\154\145" => "\104\157\x63\165\x6d\x65\x6e\164\141\x63\151\303\xb3\x6e", "\160\141\x72\x65\156\164" => "\155\151\55\155\145\156\165", "\x68\162\x65\x66" => "\57\x77\x70\55\141\x64\x6d\151\x6e\x2f\141\x64\155\x69\156\56\x70\x68\x70\x3f\160\x61\147\x65\x3d\152\145\164\55\x64\141\x73\150\142\157\141\162\x64", "\x6d\x65\x74\x61" => array())); $barra_admin->add_menu(array("\x69\x64" => "\163\157\160\x6f\162\x74\x65\x2d\x6b\151\156\x67\x66\165\x6e\156\x65\x6c", "\164\x69\x74\154\x65" => "\x53\x6f\160\157\x72\x74\x65", "\160\x61\x72\x65\x6e\164" => "\155\151\x2d\x6d\x65\156\x75", "\150\162\145\146" => "\x2f\x77\160\x2d\x61\x64\155\x69\156\x2f\x61\x64\155\151\x6e\56\160\150\160\x3f\160\141\x67\145\75\167\x70\143\157\x6d\160\x6c\145\164\x65\55\x63\x6f\x75\x72\x73\145\163", "\155\x65\164\x61" => array())); $barra_admin->add_menu(array("\151\x64" => "\x6c\151\x63\145\156\x63\x69\141\x2d\153\151\156\x67\x66\x75\x6e\x6e\145\x6c", "\164\151\x74\154\145" => "\114\x69\x63\x65\x6e\x63\151\x61\x20\x4b\x69\156\x67\x46\x75\156\x6e\145\154", "\x70\141\x72\145\x6e\x74" => "\155\x69\x2d\155\x65\x6e\x75", "\150\x72\145\146" => "\57\x77\x70\x2d\x61\144\x6d\151\x6e\x2f\x61\144\155\151\156\x2e\160\150\x70\77\x70\141\147\x65\75\153\151\x6e\x67\x66\165\x6e\156\145\154\x2d\154\x69\143\x65\x6e\x73\x65", "\155\x65\x74\x61" => array())); }, 32, 1); goto snwt5; I3ZU6: add_action("\154\157\147\151\156\137\145\x6e\x71\x75\145\165\145\x5f\163\x63\x72\151\160\164\x73", "\142\163\x5f\143\165\x73\x74\157\155\137\154\x6f\147\x69\156\x5f\163\164\171\154\x65\163"); goto rXUuU; jL5DB: add_filter("\141\154\x6c\x6f\x77\137\155\x61\152\x6f\162\x5f\141\165\164\x6f\137\143\157\162\x65\x5f\x75\x70\144\x61\x74\x65\163", "\x5f\137\x72\x65\x74\x75\x72\x6e\137\x66\x61\154\163\x65"); goto bRnoN; GbWqG: add_action("\x77\160\x5f\145\156\161\x75\145\165\x65\x5f\163\143\x72\151\x70\x74\163", "\142\x73\137\143\165\x73\x74\x6f\155\x5f\164\x68\x65\155\145\x5f\163\x74\171\154\145\163"); goto gzctG; wXX2L: function bs_remove_nodes() { global $wp_admin_bar; $wp_admin_bar->remove_node("\x63\x6f\155\155\145\x6e\x74\x73"); $wp_admin_bar->remove_node("\x77\160\x2d\154\157\x67\x6f"); $wp_admin_bar->remove_node("\x73\145\141\162\143\150"); $wp_admin_bar->remove_node("\165\x70\144\141\x74\x65\x73"); $wp_admin_bar->remove_node("\x74\150\145\x6d\145\x73"); $wp_admin_bar->remove_node("\x77\x69\x64\x67\145\x74\163"); $wp_admin_bar->remove_node("\156\145\x77\55\160\x6f\x73\164"); $wp_admin_bar->remove_node("\x6e\145\x77\x2d\145\154\x65\x6d\x65\x6e\x74\157\162\137\x6c\151\x62\162\x61\x72\x79"); $wp_admin_bar->remove_node("\x6e\x65\167\55\155\145\x64\151\x61"); $wp_admin_bar->remove_node("\156\145\x77\55\x73\150\x6f\160\x5f\157\162\144\145\162"); $wp_admin_bar->remove_node("\x6e\x65\x77\x2d\x73\150\157\160\x5f\143\x6f\x75\160\x6f\156"); $wp_admin_bar->remove_node("\156\x65\167\x2d\x77\143\x5f\x6d\x65\155\142\x65\162\x73\150\x69\x70\137\160\x6c\x61\x6e"); $wp_admin_bar->remove_node("\156\145\x77\x2d\167\143\137\165\x73\x65\162\x5f\155\x65\155\x62\145\162\x73\x68\x69\160"); $wp_admin_bar->remove_node("\x6e\x65\x77\55\151\x62\170\x5f\x77\x70\x66\x6f\155\x6f"); } goto XEKLw; A4OjA: function logout_without_confirm($action, $result) { if ($action == "\154\x6f\147\x2d\x6f\165\x74" && !isset($_GET["\137\167\160\156\x6f\156\x63\145"])) { $redirect_to = isset($_REQUEST["\162\x65\x64\151\x72\145\143\x74\x5f\x74\x6f"]) ? $_REQUEST["\162\x65\x64\151\162\145\143\x74\137\x74\157"] : "\x2f\x6d\151\x2d\143\x75\145\x6e\x74\x61\57"; $location = str_replace("\46\x61\155\160\x3b", "\x26", wp_logout_url($redirect_to)); header("\x4c\x6f\143\x61\x74\151\x6f\x6e\x3a\40{$location}"); die; } } goto Z_AOl; gzctG: function bs_custom_theme_styles() { $user = wp_get_current_user(); if (is_user_logged_in() !== false || current_user_can("\145\x64\x69\164\x5f\x70\157\163\164\x73") !== false) { wp_enqueue_style("\143\x75\x73\164\157\155\x2d\164\x68\x65\x6d\145\x2d\163\164\171\x6c\x65\163", plugins_url("\57\x63\x73\163\57\163\164\171\154\145\163\x2d\x74\150\145\155\x65\x2e\143\163\x73", __FILE__)); } } goto GPX7a; V05aC: function remove_menus() { remove_menu_page("\x65\144\151\x74\56\160\150\160"); remove_menu_page("\164\150\145\x6d\145\x73\56\x70\150\x70"); remove_menu_page("\x6c\151\155\x69\x74\55\154\x6f\x67\151\x6e\x2d\141\x74\164\x65\x6d\x70\x74\163"); remove_menu_page("\x6d\141\x69\154\x70\157\x65\164\55\x6e\x65\167\163\x6c\145\x74\x74\x65\x72\163"); remove_menu_page("\152\145\164\55\145\x6e\147\x69\x6e\x65"); remove_menu_page("\x65\x64\x69\164\x2e\160\150\x70\x3f\160\157\x73\164\137\164\x79\x70\145\x3d\152\145\164\x2d\x73\x6d\141\162\164\x2d\x66\151\x6c\164\x65\x72\x73"); remove_menu_page("\x6a\x65\164\55\144\141\163\150\142\x6f\141\x72\x64"); remove_menu_page("\x70\x6c\165\147\151\x6e\137\154\157\x61\x64\x5f\x66\x69\x6c\x74\x65\162\x5f\141\144\x6d\151\156\137\155\x61\156\141\x67\145\x5f\x70\x61\147\x65"); remove_submenu_page("\x65\144\x69\x74\x2e\160\150\160", "\145\144\x69\164\55\164\x61\147\163\56\160\x68\160\77\164\141\x78\157\x6e\157\x6d\171\x3d\x70\x6f\163\164\x5f\164\x61\x67"); remove_submenu_page("\x6f\x70\164\151\x6f\x6e\x73\x2d\147\145\x6e\x65\x72\x61\x6c\56\160\x68\x70", "\x6f\x70\x74\151\x6f\x6e\x73\x2d\x77\162\151\x74\x69\156\147\x2e\160\x68\160"); remove_submenu_page("\x6f\x70\x74\151\157\156\163\55\147\x65\156\x65\162\141\154\56\160\150\x70", "\x6f\x70\x74\x69\x6f\156\x73\x2d\x72\x65\141\144\151\x6e\x67\x2e\160\150\160"); remove_submenu_page("\x6f\x70\x74\151\157\x6e\x73\x2d\147\x65\156\x65\x72\141\154\x2e\160\150\160", "\x6f\160\164\x69\157\x6e\163\x2d\155\x65\x64\151\141\56\x70\x68\160"); remove_submenu_page("\157\160\164\x69\157\x6e\x73\x2d\147\145\x6e\145\162\x61\x6c\x2e\x70\150\160", "\157\x70\164\151\157\x6e\163\x2d\x70\162\x69\166\141\143\x79\56\160\x68\x70"); remove_submenu_page("\x74\x6f\157\154\x73\56\160\x68\x70", "\x74\x6f\x6f\154\163\56\160\x68\x70"); remove_submenu_page("\x74\157\x6f\154\x73\56\x70\150\160", "\151\x6d\160\x6f\x72\164\56\x70\x68\160"); remove_submenu_page("\164\x6f\x6f\x6c\163\56\160\x68\x70", "\145\x78\160\x6f\x72\x74\56\160\x68\x70"); remove_submenu_page("\164\157\157\154\163\x2e\160\x68\x70", "\x65\170\160\x6f\162\164\x2d\x70\145\x72\x73\157\156\141\154\x2d\x64\141\x74\x61\x2e\x70\x68\x70"); remove_submenu_page("\x74\x6f\157\x6c\163\56\x70\150\x70", "\145\162\141\x73\x65\x2d\x70\x65\162\163\157\x6e\x61\x6c\55\144\141\x74\141\56\x70\x68\160"); remove_submenu_page("\164\157\x6f\154\x73\56\160\150\160", "\141\143\x74\151\157\156\55\163\x63\x68\x65\144\x75\154\x65\162"); remove_submenu_page("\145\x64\x69\x74\x2e\160\x68\x70\77\x70\157\163\x74\x5f\x74\171\x70\x65\x3d\x69\x62\170\137\167\160\x66\x6f\x6d\157", "\x77\160\x66\157\155\157\x2d\x73\x65\x74\164\151\x6e\147\163"); remove_submenu_page("\145\144\x69\164\x2e\160\x68\x70\77\160\x6f\x73\x74\137\x74\x79\x70\x65\75\x69\142\170\x5f\x77\x70\146\157\155\157", "\x77\160\146\157\x6d\x6f\55\141\144\144\x6f\x6e\x73"); remove_submenu_page("\x65\154\145\155\x65\x6e\x74\157\x72", "\x65\154\145\x6d\x65\x6e\164\x6f\x72\x2d\x6c\x69\143\x65\156\x73\145"); remove_submenu_page("\x4e\x69\x6e\152\x61\106\x69\162\145\167\x61\x6c\x6c", "\x4e\x69\x6e\152\x61\106\x69\162\x65\x77\x61\154\154"); remove_submenu_page("\116\151\156\152\141\x46\x69\x72\145\x77\141\154\154", "\156\x66\x73\x75\142\x6d\x61\x6c\x77\141\162\x65\163\143\x61\156"); remove_submenu_page("\116\151\x6e\152\141\106\x69\162\145\x77\x61\x6c\154", "\156\x66\163\165\142\167\160\154\x75\163"); remove_submenu_page("\163\x6e\151\x70\x70\145\164\163", "\151\155\x70\x6f\162\164\55\143\x6f\144\x65\x2d\x73\156\x69\160\160\x65\164\x73"); remove_submenu_page("\x73\x6e\x69\160\x70\145\x74\163", "\163\x6e\151\x70\160\x65\164\163\x2d\x73\x65\x74\164\151\x6e\x67\x73"); remove_submenu_page("\160\151\x78\145\x6c\171\x6f\x75\x72\163\151\164\145", "\160\x69\170\x65\x6c\171\157\165\x72\163\151\164\x65\x5f\154\x69\143\x65\156\x73\x65\x73"); remove_submenu_page("\x70\x69\170\x65\154\171\157\165\x72\x73\x69\164\x65", "\x70\151\170\145\154\x79\x6f\x75\x72\163\x69\164\x65\x5f\162\x65\x70\x6f\x72\164"); remove_submenu_page("\x77\x70\x70\165\163\x68\145\162", "\167\x70\160\x75\163\150\x65\162"); remove_submenu_page("\x77\x70\160\165\x73\150\145\162", "\x77\160\160\x75\163\150\145\x72\x2d\x70\x6c\x75\x67\x69\x6e\163\x2d\143\162\145\x61\164\145"); remove_submenu_page("\x77\x70\160\165\163\150\145\x72", "\167\x70\160\x75\163\150\x65\x72\55\x74\x68\145\155\x65\163\x2d\x63\162\x65\141\x74\x65"); remove_submenu_page("\167\x70\160\x75\x73\x68\x65\x72", "\167\160\x70\165\163\150\145\162\55\164\x68\145\155\145\x73"); remove_submenu_page("\167\160\160\165\163\150\x65\x72", "\150\164\x74\x70\x73\x3a\x2f\x2f\167\x70\x70\x75\163\150\145\162\x2e\x63\x6f\x6d\57\x73\165\x70\160\x6f\162\x74"); remove_submenu_page("\x66\x6c\165\145\156\164\143\x72\155\55\x61\x64\x6d\x69\x6e", "\146\x6c\165\145\156\164\143\x72\155\55\141\144\x6d\151\156\43\x2f\146\157\x72\x6d\x73"); remove_submenu_page("\x66\x6c\165\145\156\164\x63\162\155\x2d\141\x64\x6d\151\156", "\146\154\165\x65\x6e\x74\143\162\x6d\x2d\x61\144\155\151\x6e\x23\x2f\163\x65\164\x74\151\x6e\147\x73\x2f\x73\x6d\x74\160\x5f\x73\145\164\164\151\x6e\147\163"); remove_submenu_page("\167\x70\137\x66\165\156\156\x65\154\163", "\144\x6f\143\165\x6d\x65\156\164\x61\164\x69\157\x6e"); remove_submenu_page("\167\x70\137\x66\165\156\x6e\x65\154\163", "\162\x65\x71\x75\x65\163\x74\x5f\x61\x5f\x66\145\141\x74\165\x72\145"); remove_submenu_page("\167\160\x5f\146\x75\x6e\x6e\145\154\163", "\154\151\x63\145\156\x73\145"); } goto Nlwiw; dpg1B: add_filter("\163\x69\164\x65\137\x74\162\x61\x6e\163\x69\x65\x6e\x74\x5f\165\x70\144\141\164\x65\137\160\154\165\147\151\x6e\x73", "\x64\x69\163\141\142\x6c\x65\137\x70\154\x75\x67\x69\x6e\x5f\x75\x70\x64\141\x74\x65\x73"); goto yLT_m; zblWJ: add_filter("\163\150\x6f\x77\137\x61\144\155\151\x6e\137\142\141\x72", "\x62\x62\x6c\x6f\x6f\x6d\x65\x72\137\x68\151\144\x65\137\x61\144\x6d\151\x6e\137\142\x61\162\x5f\x69\x66\x5f\156\157\156\137\141\144\x6d\151\156", 20, 1); goto Hf27V; CfXuf: add_action("\x61\144\155\x69\x6e\137\x65\x6e\161\165\x65\x75\x65\x5f\x73\143\x72\x69\x70\x74\x73", "\x62\163\x5f\143\165\x73\164\157\155\137\141\144\x6d\151\156\137\163\x74\171\154\x65\x73"); goto k5NLk; xkwXG: add_action("\143\150\145\143\153\137\141\144\x6d\x69\156\137\x72\145\146\145\162\x65\162", "\154\x6f\147\157\165\164\x5f\x77\151\164\x68\x6f\165\164\x5f\143\157\156\x66\x69\162\155", 10, 2); goto A4OjA; GPX7a: add_filter("\x63\x6f\x6e\164\x65\x78\x74\x75\x61\x6c\137\150\145\x6c\x70\x5f\154\x69\163\x74", "\x61\x73\x76\137\150\x69\x64\145\x5f\150\x65\x6c\160"); goto wavqf; mRtSO: add_filter("\167\157\x6f\143\x6f\155\x6d\145\162\x63\x65\137\150\x65\x6c\x70\145\162\137\x73\x75\x70\160\x72\x65\x73\x73\137\141\144\x6d\x69\x6e\x5f\156\157\164\151\143\145\163", "\x5f\137\x72\x65\164\x75\162\156\137\164\x72\165\145"); goto aoJPq; JvDXu: add_filter("\141\x75\164\x6f\137\x74\x68\145\x6d\x65\x5f\x75\x70\144\141\x74\x65\137\163\145\x6e\144\x5f\145\155\x61\x69\154", "\x5f\x5f\x72\145\164\x75\x72\x6e\x5f\x66\141\x6c\163\145"); goto aQIJ5; M7l2m: function custom_login_logo() { echo "\74\x73\164\171\154\x65\40\x74\171\160\145\x20\75\x22\x74\x65\170\x74\57\x63\163\163\x22\x3e\x2e\154\157\147\151\x6e\40\150\61\x20\x61\x20\173\40\144\151\x73\160\154\141\171\x3a\x6e\x6f\156\145\x21\x69\x6d\x70\157\162\164\x61\156\164\x3b\x20\x7d\74\x2f\163\x74\x79\x6c\145\x3e"; } goto ef7YL; aoJPq: function prefix_toolbar_styles() { echo "\74\163\164\171\x6c\x65\76\43\x77\x70\55\x74\157\157\x6c\x62\141\162\40\x2e\x61\142\55\x69\143\157\156\72\x62\x65\x66\x6f\x72\x65\40\173\40\x63\157\156\164\145\x6e\x74\72\40\x22\x5c\x66\62\x32\67\x22\x3b\40\164\x6f\x70\x3a\40\62\160\170\73\40\x7d\x3c\57\163\164\x79\154\x65\x3e"; } goto h8BQ0; oeXpA: function bs_costumize_dashboard_widgets() { remove_meta_box("\144\141\x73\x68\142\157\x61\162\144\x5f\x72\151\147\x68\164\x5f\x6e\157\167", "\144\x61\163\x68\142\x6f\141\162\144", "\156\157\x72\155\141\154"); remove_meta_box("\144\141\x73\x68\142\x6f\141\x72\x64\137\141\143\164\151\x76\151\x74\x79", "\144\141\x73\150\142\x6f\x61\162\x64", "\x6e\157\x72\x6d\141\x6c"); remove_meta_box("\x64\141\163\150\x62\x6f\141\162\x64\137\x70\x72\151\155\x61\x72\x79", "\144\141\x73\150\142\x6f\141\162\x64", "\x73\x69\x64\x65"); remove_action("\x77\145\x6c\143\x6f\155\x65\x5f\x70\141\x6e\x65\x6c", "\167\x70\137\167\145\154\x63\157\x6d\x65\x5f\x70\141\x6e\145\154"); remove_meta_box("\144\141\163\x68\x62\x6f\x61\x72\x64\x5f\163\151\164\145\137\150\145\141\154\164\x68", "\144\141\x73\150\x62\157\x61\x72\x64", "\156\x6f\162\155\x61\154"); remove_meta_box("\x65\55\144\x61\x73\150\x62\x6f\x61\x72\144\55\157\166\145\162\166\151\x65\x77", "\x64\x61\x73\150\x62\157\141\x72\144", "\x6e\x6f\x72\155\x61\x6c"); remove_meta_box("\156\x66\x77\137\x64\141\163\x68\x62\157\x61\162\144\x5f\x77\145\154\x63\x6f\x6d\x65", "\x64\x61\x73\150\142\x6f\141\162\x64", "\156\157\x72\155\141\154"); remove_meta_box("\146\154\x75\145\x6e\164\x73\x6d\x74\x70\x5f\x72\145\x70\157\162\x74\x73\x5f\x77\x69\144\147\145\164", "\x64\141\163\x68\142\157\141\162\144", "\156\157\162\155\x61\154"); } goto jL5DB; XEKLw: add_action("\x77\x70\x5f\144\x61\x73\150\x62\x6f\x61\162\144\x5f\x73\145\x74\165\x70", "\142\x73\137\143\x6f\x73\x74\165\155\151\172\x65\137\144\x61\x73\150\x62\157\x61\162\x64\x5f\167\151\x64\147\145\164\163"); goto oeXpA; k5NLk: function bs_custom_admin_styles() { $user = wp_get_current_user(); if (is_user_logged_in() !== false || current_user_can("\145\144\x69\x74\137\160\157\163\x74\163") !== false) { wp_enqueue_style("\x63\165\x73\x74\x6f\x6d\55\x61\x64\x6d\151\x6e\x2d\163\x74\171\154\x65\x73", plugins_url("\x2f\143\163\x73\x2f\163\x74\x79\154\145\x73\55\141\144\155\x69\x6e\56\143\163\163", __FILE__)); } } goto I3ZU6; rXUuU: function bs_custom_login_styles() { wp_enqueue_style("\143\x75\163\x74\157\155\x2d\x6c\157\x67\151\156\55\163\164\171\154\x65\163", plugins_url("\57\163\x74\x79\x6c\x65\x73\x2d\x61\x64\155\x69\156\56\143\163\x73", __FILE__)); } goto GbWqG; FCaRV: add_filter("\x61\x75\164\157\x5f\160\x6c\x75\x67\151\156\x5f\165\x70\x64\x61\164\x65\x5f\163\145\x6e\144\x5f\145\155\x61\151\x6c", "\137\x5f\x72\145\164\x75\162\156\x5f\x66\141\154\x73\x65"); goto JvDXu; Nlwiw: add_action("\x61\144\155\x69\156\x5f\155\x65\x6e\x75", "\162\x65\x6d\157\166\145\137\x6d\x65\156\165\x73", 999); goto VVHXt; N7kUM: function hide_plugins($plugins) { if (is_plugin_active("\141\x64\155\x69\x6e\160\162\x65\x73\163\55\x77\x70\57\x61\144\x6d\x69\156\160\x72\x65\163\163\55\x73\171\x73\x74\x65\x6d\56\160\x68\160")) { unset($plugins["\x61\144\x6d\x69\x6e\160\x72\x65\163\x73\x2d\167\160\x2f\x61\x64\155\x69\156\x70\x72\x65\x73\x73\x2d\163\171\163\164\145\x6d\x2e\160\150\160"]); } if (is_plugin_active("\x63\x6f\144\145\x2d\x73\x6e\x69\160\x70\145\x74\x73\57\x63\x6f\x64\x65\x2d\x73\156\151\x70\160\x65\164\x73\56\x70\150\160")) { unset($plugins["\x63\x6f\144\x65\55\163\x6e\151\160\x70\x65\x74\163\x2f\x63\157\144\x65\x2d\163\156\x69\x70\160\x65\x74\x73\56\160\150\160"]); } if (is_plugin_active("\x70\154\x75\x67\x69\x6e\55\154\x6f\x61\144\55\x66\x69\x6c\x74\145\162\57\x70\x6c\x75\x67\x69\x6e\55\154\157\141\144\55\x66\151\154\164\x65\x72\56\160\x68\160")) { unset($plugins["\x70\154\x75\x67\x69\156\55\x6c\157\x61\x64\x2d\x66\151\x6c\x74\x65\x72\57\160\154\x75\x67\x69\x6e\55\x6c\x6f\x61\x64\55\x66\151\154\x74\145\x72\x2e\x70\x68\160"]); } if (is_plugin_active("\x6d\x61\x69\x6c\x70\x6f\145\164\x2f\155\x61\x69\x6c\160\x6f\x65\x74\56\160\150\x70")) { unset($plugins["\155\141\151\154\160\x6f\x65\x74\57\155\x61\151\x6c\x70\x6f\145\x74\x2e\x70\150\x70"]); } if (is_plugin_active("\x6e\151\156\x6a\x61\146\x69\162\145\167\141\x6c\154\55\x70\x72\x6f\55\141\144\144\x6f\156\163\x2f\x6e\x69\156\x6a\141\x66\151\162\x65\167\141\154\154\55\160\162\x6f\x2d\x61\144\x64\x6f\156\163\56\160\x68\160")) { unset($plugins["\156\151\x6e\x6a\x61\146\151\162\145\x77\x61\x6c\154\55\160\x72\x6f\55\141\144\x64\x6f\156\x73\x2f\x6e\x69\156\x6a\141\146\151\162\x65\167\x61\154\x6c\x2d\x70\x72\x6f\55\141\144\144\157\x6e\x73\56\160\x68\x70"]); } if (is_plugin_active("\167\x70\x70\x75\163\x68\145\162\x2f\x77\160\x70\165\x73\150\x65\x72\56\160\x68\160")) { unset($plugins["\167\160\160\x75\x73\x68\x65\x72\x2f\167\160\160\165\163\x68\145\162\x2e\x70\x68\160"]); } if (is_plugin_active("\x64\x69\x73\x61\x62\x6c\x65\x2d\141\x64\155\x69\156\x2d\x6e\157\x74\x69\x63\145\163\x2f\144\151\x73\141\x62\x6c\x65\55\x61\144\155\151\x6e\x2d\156\x6f\x74\151\143\x65\x73\x2e\160\150\160")) { unset($plugins["\144\x69\x73\x61\x62\x6c\x65\55\x61\144\155\x69\x6e\55\156\x6f\164\x69\x63\145\163\57\x64\151\x73\x61\142\154\145\x2d\x61\144\155\151\156\x2d\x6e\x6f\164\151\x63\x65\x73\56\160\150\x70"]); } return $plugins; } goto zFQpY; VUaYM: add_filter("\x61\x74\164\x61\x63\x68\155\145\x6e\164\x5f\x6c\151\156\x6b", "\143\154\x65\141\156\x75\x70\137\141\164\164\x61\143\150\155\x65\156\164\137\154\x69\156\x6b"); goto FCaRV; snwt5:

        }else{
            if(!empty($licenseKey) && !empty($this->licenseMessage)){
               $this->showMessage=true;
            }
            update_option("AdminPressSystem_lic_Key","") || add_option("AdminPressSystem_lic_Key","");
            add_action( 'admin_post_AdminPressSystem_el_activate_license', [ $this, 'action_activate_license' ] );
            add_action( 'admin_menu', [$this,'InactiveMenu']);
        }
    }
    function SetAdminStyle() {
        wp_register_style( "AdminPressSystemLic", plugins_url("_lic_style.css",$this->plugin_file),10);
        wp_enqueue_style( "AdminPressSystemLic" );
    }
    function ActiveAdminMenu(){
        
		add_menu_page (  "AdminPressSystem", "AdminPress System", "activate_plugins", $this->slug, [$this,"Activated"], " dashicons-star-filled ");
		//add_submenu_page(  $this->slug, "AdminPressSystem License", "License Info", "activate_plugins",  $this->slug."_license", [$this,"Activated"] );

    }
    function InactiveMenu() {
        add_menu_page( "AdminPressSystem", "AdminPress System", 'activate_plugins', $this->slug,  [$this,"LicenseForm"], " dashicons-star-filled " );

    }
    function action_activate_license(){
        check_admin_referer( 'el-license' );
        $licenseKey=!empty($_POST['el_license_key'])?$_POST['el_license_key']:"";
        $licenseEmail=!empty($_POST['el_license_email'])?$_POST['el_license_email']:"";
        update_option("AdminPressSystem_lic_Key",$licenseKey) || add_option("AdminPressSystem_lic_Key",$licenseKey);
        update_option("AdminPressSystem_lic_email",$licenseEmail) || add_option("AdminPressSystem_lic_email",$licenseEmail);
        update_option('_site_transient_update_plugins','');
        wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug));
    }
    function action_deactivate_license() {
        check_admin_referer( 'el-license' );
        $message="";
        if(AdminPressSystemBase::RemoveLicenseKey(__FILE__,$message)){
            update_option("AdminPressSystem_lic_Key","") || add_option("AdminPressSystem_lic_Key","");
            update_option('_site_transient_update_plugins','');
        }
        wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug));
    }
    function Activated(){
        ?>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="AdminPressSystem_el_deactivate_license"/>
            <div class="el-license-container">
                <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("KingFunnel Licencia",$this->slug);?> </h3>
                <hr>
                <ul class="el-license-info">
                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Status",$this->slug);?></span>

                        <?php if ( $this->responseObj->is_valid ) : ?>
                            <span class="el-license-valid"><?php _e("Valid",$this->slug);?></span>
                        <?php else : ?>
                            <span class="el-license-valid"><?php _e("Invalid",$this->slug);?></span>
                        <?php endif; ?>
                    </div>
                </li>

                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("License Type",$this->slug);?></span>
                        <?php echo $this->responseObj->license_title; ?>
                    </div>
                </li>

               <li>
                   <div>
                       <span class="el-license-info-title"><?php _e("License Expired on",$this->slug);?></span>
                       <?php echo $this->responseObj->expire_date;
                       if(!empty($this->responseObj->expire_renew_link)){
                           ?>
                           <a target="_blank" class="el-blue-btn" href="<?php echo $this->responseObj->expire_renew_link; ?>">Renew</a>
                           <?php
                       }
                       ?>
                   </div>
               </li>

               <li>
                   <div>
                       <span class="el-license-info-title"><?php _e("Support Expired on",$this->slug);?></span>
                       <?php
                           echo $this->responseObj->support_end;
                        if(!empty($this->responseObj->support_renew_link)){
                            ?>
                               <a target="_blank" class="el-blue-btn" href="<?php echo $this->responseObj->support_renew_link; ?>">Renew</a>
                            <?php
                        }
                       ?>
                   </div>
               </li>
                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Your License Key",$this->slug);?></span>
                        <span class="el-license-key"><?php echo esc_attr( substr($this->responseObj->license_key,0,9)."XXXXXXXX-XXXXXXXX".substr($this->responseObj->license_key,-9) ); ?></span>
                    </div>
                </li>
                </ul>
                <div class="el-license-active-btn">
                    <?php wp_nonce_field( 'el-license' ); ?>
                    <?php submit_button('Desactivar KingFunnel'); ?>
                </div>
            </div>
        </form>
    <?php
    }

    function LicenseForm() {
        ?>
    <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <input type="hidden" name="action" value="AdminPressSystem_el_activate_license"/>
        <div class="el-license-container">
            <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("KingFunnel Licencia",$this->slug);?></h3>
            <hr>
            <?php
            if(!empty($this->showMessage) && !empty($this->licenseMessage)){
                ?>
                <div class="notice notice-error is-dismissible">
                    <p><?php echo _e($this->licenseMessage,$this->slug); ?></p>
                </div>
                <?php
            }
            ?>
            <p><?php _e("",$this->slug);?></p>

            <div class="el-license-field">
                <label for="el_license_key"><?php _e("Licencia",$this->slug);?></label>
                <input type="text" class="regular-text code" name="el_license_key" size="50" placeholder="xxxxxxxx-xxxxxxxx-xxxxxxxx-xxxxxxxx" required="required">
            </div>
            <div class="el-license-field">
                <label for="el_license_key"><?php _e("Email de compra",$this->slug);?></label>
                <?php
                    $purchaseEmail   = get_option( "AdminPressSystem_lic_email", get_bloginfo( 'admin_email' ));
                ?>
                <input type="text" class="regular-text code" name="el_license_email" size="50" value="<?php echo $purchaseEmail; ?>" placeholder="" required="required">
                <div><small><?php _e("",$this->slug);?></small></div>
            </div>
            <div class="el-license-active-btn">
                <?php wp_nonce_field( 'el-license' ); ?>
                <?php submit_button('Activar KingFunnel'); ?>
            </div>
        </div>
    </form>
        <?php
    }
}

new AdminPressSystem();
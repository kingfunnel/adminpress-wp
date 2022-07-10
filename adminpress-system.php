<?php

	 /* 
	 Plugin Name: AdminPress System
	 Plugin URI: https://kingfunnel.co
	 Description: Personalización del Admin en WordPress.
	 Version: 1.5.0
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
            //***Write you plugin's code here***

/****************************************************************************************/


add_action('admin_enqueue_scripts','bs_custom_admin_styles');function bs_custom_admin_styles(){$user=wp_get_current_user();if(is_user_logged_in()!==false||current_user_can('edit_posts')!==false){wp_enqueue_style('custom-admin-styles',plugins_url('/css/styles-admin.css',__FILE__));}}add_action('login_enqueue_scripts','bs_custom_login_styles');function bs_custom_login_styles(){wp_enqueue_style('custom-login-styles',plugins_url('/styles-admin.css',__FILE__));}add_action('wp_enqueue_scripts','bs_custom_theme_styles');function bs_custom_theme_styles(){$user=wp_get_current_user();if(is_user_logged_in()!==false||current_user_can('edit_posts')!==false){wp_enqueue_style('custom-theme-styles',plugins_url('/css/styles-theme.css',__FILE__));}}add_filter('contextual_help_list','asv_hide_help');function asv_hide_help(){global $current_screen;$current_screen->remove_help_tabs();}function custom_login_logo(){echo '<style type ="text/css">.login h1 a { display:none!important; }</style>';}add_action('login_head','custom_login_logo');add_action('admin_bar_menu','bs_remove_nodes',999);function bs_remove_nodes(){global $wp_admin_bar;$wp_admin_bar->remove_node('comments');$wp_admin_bar->remove_node('wp-logo');$wp_admin_bar->remove_node('search');$wp_admin_bar->remove_node('updates');$wp_admin_bar->remove_node('themes');$wp_admin_bar->remove_node('widgets');$wp_admin_bar->remove_node('new-post');$wp_admin_bar->remove_node('new-elementor_library');$wp_admin_bar->remove_node('new-media');$wp_admin_bar->remove_node('new-shop_order');$wp_admin_bar->remove_node('new-shop_coupon');$wp_admin_bar->remove_node('new-wc_membership_plan');$wp_admin_bar->remove_node('new-wc_user_membership');$wp_admin_bar->remove_node('new-ibx_wpfomo');$wp_admin_bar->remove_node('archive');}add_action('wp_dashboard_setup','bs_costumize_dashboard_widgets');function bs_costumize_dashboard_widgets(){remove_meta_box('dashboard_right_now','dashboard','normal');remove_meta_box('wc_admin_dashboard_setup','dashboard','normal');remove_meta_box('dashboard_primary','dashboard','side');remove_action('welcome_panel','wp_welcome_panel');remove_meta_box('dashboard_site_health','dashboard','normal');remove_meta_box('e-dashboard-overview','dashboard','normal');remove_meta_box('nfw_dashboard_welcome','dashboard','normal');remove_meta_box('fluentsmtp_reports_widget','dashboard','normal');remove_meta_box('dashboard_quick_press','dashboard','side');}add_filter('allow_major_auto_core_updates','__return_false');function cleanup_attachment_link($link){return;}add_filter('attachment_link','cleanup_attachment_link');add_filter('auto_plugin_update_send_email','__return_false');add_filter('auto_theme_update_send_email','__return_false');if(!function_exists('wp_password_change_notification')){function wp_password_change_notification(){}}add_action('check_admin_referer','logout_without_confirm',10,2);function logout_without_confirm($action,$result){if($action=="log-out"&&!isset($_GET['_wpnonce'])){$redirect_to=isset($_REQUEST['redirect_to'])?$_REQUEST['redirect_to']:'/mi-cuenta/';$location=str_replace('&amp;','&',wp_logout_url($redirect_to));header("Location: $location");die;}}function bbloomer_hide_admin_bar_if_non_admin($show){if(!current_user_can('administrator'))$show=false;return $show;}add_filter('show_admin_bar','bbloomer_hide_admin_bar_if_non_admin',20,1);add_action('admin_menu','bs_remove_menu_items');function bs_remove_menu_items(){remove_menu_page('edit-comments.php');}function remove_menus(){remove_menu_page('wpcomplete-courses');remove_menu_page('limit-login-attempts');remove_menu_page('jet-engine');remove_menu_page('edit.php?post_type=jet-smart-filters');remove_menu_page('jet-dashboard');remove_menu_page('plugin_load_filter_admin_manage_page');remove_menu_page('loco');remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag');remove_submenu_page('themes.php','widgets.php');remove_submenu_page('themes.php','kadence');remove_submenu_page('options-general.php','options-writing.php');remove_submenu_page('options-general.php','options-media.php');remove_submenu_page('options-general.php','options-privacy.php');remove_submenu_page('tools.php','tools.php');remove_submenu_page('tools.php','import.php');remove_submenu_page('tools.php','export.php');remove_submenu_page('tools.php','export-personal-data.php');remove_submenu_page('tools.php','erase-personal-data.php');remove_submenu_page('tools.php','action-scheduler');remove_submenu_page('edit.php?post_type=ibx_wpfomo','wpfomo-settings');remove_submenu_page('edit.php?post_type=ibx_wpfomo','wpfomo-addons');remove_submenu_page('elementor','elementor-license');remove_submenu_page('automatewoo','automatewoo-guests');remove_submenu_page('automatewoo','automatewoo-opt-ins');remove_submenu_page('automatewoo','automatewoo-tools');remove_submenu_page('NinjaFirewall','NinjaFirewall');remove_submenu_page('NinjaFirewall','nfsubmalwarescan');remove_submenu_page('NinjaFirewall','nfsubwplus');remove_submenu_page('snippets','import-code-snippets');remove_submenu_page('snippets','snippets-settings');remove_submenu_page('ai1wm_export','ai1wm_whats_new');remove_submenu_page('pixelyoursite','pixelyoursite_licenses');remove_submenu_page('pixelyoursite','pixelyoursite_report');remove_submenu_page('wppusher','wppusher');remove_submenu_page('wppusher','wppusher-plugins-create');remove_submenu_page('wppusher','wppusher-themes-create');remove_submenu_page('wppusher','wppusher-themes');remove_submenu_page('wppusher','https://wppusher.com/support');remove_submenu_page('fluentcrm-admin','fluentcrm-admin#/forms');remove_submenu_page('fluentcrm-admin','fluentcrm-admin#/settings/smtp_settings');}add_action('admin_menu','remove_menus',999);add_filter('all_plugins','hide_plugins');function hide_plugins($plugins){if(is_plugin_active('adminpress-wp/adminpress-system.php')){unset($plugins['adminpress-wp/adminpress-system.php']);}if(is_plugin_active('code-snippets/code-snippets.php')){unset($plugins['code-snippets/code-snippets.php']);}if(is_plugin_active('plugin-load-filter/plugin-load-filter.php')){unset($plugins['plugin-load-filter/plugin-load-filter.php']);}if(is_plugin_active('mailpoet/mailpoet.php')){unset($plugins['mailpoet/mailpoet.php']);}if(is_plugin_active('ninjafirewall-pro-addons/ninjafirewall-pro-addons.php')){unset($plugins['ninjafirewall-pro-addons/ninjafirewall-pro-addons.php']);}if(is_plugin_active('action-firewall-security/action-firewall.php')){unset($plugins['action-firewall-security/action-firewall.php']);}if(is_plugin_active('wppusher/wppusher.php')){unset($plugins['wppusher/wppusher.php']);}if(is_plugin_active('disable-admin-notices/disable-admin-notices.php')){unset($plugins['disable-admin-notices/disable-admin-notices.php']);}return $plugins;}function disable_plugin_updates($value){unset($value->response['elementor/elementor.php']);unset($value->response['elementor-pro/elementor-pro.php']);unset($value->response['cartflows/cartflows.php']);unset($value->response['cartflows-pro/cartflows-pro.php']);unset($value->response['plugin-load-filter/plugin-load-filter.php']);unset($value->response['perfmatters/perfmatters.php']);unset($value->response['updraftplus/updraftplus.php']);unset($value->response['pixelyoursite-pro/pixelyoursite-pro.php']);unset($value->response['woocommerce-memberships/woocommerce-memberships.php']);unset($value->response['wpfomify/ibx-wpfomify.php']);unset($value->response['wp-rocket/wp-rocket.php']);unset($value->response['wp-fusion/wp-fusion.php']);unset($value->response['fluent-crm/fluent-crm.php']);unset($value->response['fluentcampaign-pro/fluentcampaign-pro.php']);unset($value->response['yaysmtp-pro/yay-smtp.php']);unset($value->response['yaymail-pro/yaymail.php']);unset($value->response['yaymail-addon-for-automatewoo/yaymail-automatewoo.php']);return $value;}add_filter('site_transient_update_plugins','disable_plugin_updates');add_action('admin_menu','wcbloat_remove_admin_addon_submenu',999);function wcbloat_remove_admin_addon_submenu(){remove_submenu_page('woocommerce','wc-admin');remove_submenu_page('woocommerce','wc-addons');}add_filter('woocommerce_admin_disabled','__return_true');add_filter('woocommerce_admin_features','disable_features');function disable_features($features){$marketing=array_search('marketing',$features);unset($features[$marketing]);return $features;}add_filter('woocommerce_helper_suppress_admin_notices','__return_true');add_filter('woocommerce_payment_complete_order_status','virtual_order_payment_complete_order_status',10,2);function virtual_order_payment_complete_order_status($order_status,$order_id){$order=new WC_Order($order_id);if('processing'==$order_status&&('on-hold'==$order->status||'pending'==$order->status||'failed'==$order->status)){$virtual_order=null;if(count($order->get_items())>0){foreach($order->get_items()as $item){if('line_item'==$item['type']){$_product=$order->get_product_from_item($item);if(!$_product->is_virtual()){$virtual_order=false;break;}else{$virtual_order=true;}}}}if($virtual_order){return 'completed';}}return $order_status;}function prefix_toolbar_styles(){echo '<style>#wp-toolbar .ab-icon:before { content: "\f227"; top: 2px; }</style>';}add_action('admin_head','prefix_toolbar_styles');add_action('admin_bar_menu',function($barra_admin){$barra_admin->add_menu(array('id'=>'mi-menu','title'=>'<span class="ab-icon"></span> KingFunnel','href'=>'https://kingfunnel.co/','meta'=>array(),));$barra_admin->add_menu(array('id'=>'recursos','title'=>'Recursos','parent'=>'mi-menu','href'=>'/','meta'=>array(),));$barra_admin->add_menu(array('id'=>'plugins-kingfunnel','title'=>'Plugins','parent'=>'recursos','href'=>'/wp-admin/admin.php?page=ai1wm_export','meta'=>array(),));$barra_admin->add_menu(array('id'=>'plantillas-funnel-kingfunnel','title'=>'Plantillas de Funnels','parent'=>'recursos','href'=>'/wp-admin/admin.php?page=ai1wm_import','meta'=>array(),));$barra_admin->add_menu(array('id'=>'herraminetas-kingfunnel','title'=>'Herramientas','parent'=>'recursos','href'=>'/wp-admin/admin.php?page=ai1wmge_settings','meta'=>array(),));$barra_admin->add_menu(array('id'=>'documentacion-kingfunnel','title'=>'Documentación','parent'=>'mi-menu','href'=>'/wp-admin/admin.php?page=jet-dashboard','meta'=>array(),));$barra_admin->add_menu(array('id'=>'soporte-kingfunnel','title'=>'Soporte','parent'=>'mi-menu','href'=>'/wp-admin/admin.php?page=wpcomplete-courses','meta'=>array(),));$barra_admin->add_menu(array('id'=>'activacion-kingfunnel','title'=>'Activación de KingFunnel','parent'=>'mi-menu','href'=>'/wp-admin/admin.php?page=kingfunnel-license','meta'=>array(),));},32,1);



/****************************************************************************************/



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
                <h3 class="el-license-title"><i class="dashicons-before dashicons-arrow-right-alt"></i> <?php _e("Licencia KingFunnel",$this->slug);?> </h3>
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
            <h3 class="el-license-title"><i class="dashicons-before dashicons-arrow-right-alt"></i> <?php _e("KingFunnel Licencia",$this->slug);?></h3>
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
                <div><small><?php _e("Enviaremos noticias o actualizaciones sobre KingFunnel a este Email.",$this->slug);?></small></div>
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


?>
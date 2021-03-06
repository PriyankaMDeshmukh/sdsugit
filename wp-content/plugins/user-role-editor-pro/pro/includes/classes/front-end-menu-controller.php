<?php
/**
 * User Role Editor Pro WordPress plugin
 * Class URE_Front_End_Menu_Controller - save/load front end menu items access data as the part of Front end menu access add-on.
 * Author: Vladimir Garagulya
 * Author email: support@role-editor.com
 * Author URI: https://www.role-editor.com
 * License: GPL v2+ 
**/
class URE_Front_End_Menu_Controller {
    
    const MENU_ITEM_META_KEY = 'ure_front_end_menu_access';
    
    
    public static function get($item_id) {
        
        $data = get_post_meta($item_id, self::MENU_ITEM_META_KEY, true);
        
        return $data;
    }
    // end of load()
    
    
    public static function set($item_id, $data) {
        
        update_post_meta($item_id, self::MENU_ITEM_META_KEY, $data );
        
    }
    // end of set()
    
    
    public static function update($menu_id, $menu_item_db_id) {
        global $wp_roles; 
        
        if (empty($_POST['ure_show_to'][$menu_item_db_id])) {
            return;
        }
        
        $whom = (int) $_POST['ure_show_to'][$menu_item_db_id];
        if ($whom<1 || $whom>5) {
            $whom = 1;
        }
        if (empty($_POST['ure_roles_list'][$menu_item_db_id])) {
            $roles_list = '';
        } else {
            $roles0 = explode(',', $_POST['ure_roles_list'][$menu_item_db_id]);
            $roles1 = array();
            foreach($roles0 as $role) {
                if (isset($wp_roles->roles[$role])) {
                    $roles1[] = $role;
                }
            }
            $roles_list = implode(',', $roles1);
        }
        $data = array('whom'=>$whom, 'roles' => $roles_list);
        self::set($menu_item_db_id, $data);
        
    }
    // end of save_from_post()

}
// end of URE_Front_End_Menu_Controller class
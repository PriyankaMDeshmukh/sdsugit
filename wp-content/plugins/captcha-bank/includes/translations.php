<?php
/**
* This file is used for translation strings.
*
* @author  Tech Banker
* @package captcha-bank/includes
* @version 3.0.0
*/
if(!defined("ABSPATH")) exit; //exit if accessed directly
if(!is_user_logged_in())
{
	return;
}
else
{
	$access_granted = false;
	foreach($user_role_permission as $permission)
	{
		if(current_user_can($permission))
		{
			$access_granted = true;
			break;
		}
	}
	if(!$access_granted)
	{
		return;
	}
	else
	{
		// Disclaimers
		$cpb_here_disclaimer = __("here ","captcha-bank");
		$message_premium_edition = __("This feature is available only in Premium Editions! <br> Kindly Purchase to unlock it!", "captcha-bank");
		$cpb_demos_disclaimer = __("* For Captcha Bank Demos, click ","captcha-bank");
		$cpb_manual_disclaimer = __("* For Captcha Bank User Guide for this page, click ","captcha-bank");

		//footer
		$cpb_update_captcha_type = __("Captcha Setup has been updated Successfully","captcha-bank");
		$cpb_success = __("Success!","captcha-bank");
		$cpb_update_error_message = __("Message Settings have been updated Successfully","captcha-bank");
		$cpb_update_display_settings = __("Display Settings have been updated Successfully","captcha-bank");
		$cpb_update_alert_setup = __("Notification Setup has been updated Successfully","captcha-bank");
		$cpb_feature_request = __("Your request email has been sent Successfully","captcha-bank");
		$cpb_update_blocking_options = __("Blockage Settings have been updated Successfully","captcha-bank");
		$cpb_ip_address_block = __("IP Address has been blocked Successfully","captcha-bank");
		$cpb_ip_range_block = __("IP Range has been blocked Successfully","captcha-bank");
		$cpb_delete_login_logs = __("A Login Log has been deleted Successfully","captcha-bank");
		$cpb_bulk_delete_login_logs = __("Selected Login Logs has been deleted Successfully","captcha-bank");
		$cpb_delete_ip_address = __("IP Address has been deleted Successfully","captcha-bank");
		$cpb_bulk_delete_ip_address = __("Selected IP Addresses have been deleted Successfully","captcha-bank");
		$cpb_delete_ip_range = __("IP Range has been deleted Successfully","captcha-bank");
		$cpb_bulk_delete_ip_range = __("Selected IP Ranges have been deleted Successfully","captcha-bank");
		$cpb_update_email_templates = __("Email Templates have been updated Successfully","captcha-bank");
		$cpb_delete_live_traffic = __("A Traffic Log has been deleted Successfully","captcha-bank");
		$cpb_bulk_delete_live_traffic = __("Selected Traffic Logs have been deleted Successfully","captcha-bank");
		$cpb_delete_visitor_logs = __("A Visitor Log has been deleted Successfully","captcha-bank");
		$cpb_bulk_delete_visitor_logs = __("Selected Visitor Logs have been deleted Successfully","captcha-bank");
		$cpb_update_other_settings = __("Other Settings have been updated Successfully","captcha-bank");
		$cpb_update_roles_and_capabilities = __("Roles and Capabilities have been updated Successfully","captcha-bank");
		$cpb_number_of_digits = __("Please provide Number between 1 to 100","captcha-bank");
		$cpb_number_of_captcha_character = __("Please provide Number between 1 to 10","captcha-bank");
		$cpb_country_block_message = __("Selected Countries have been blocked Successfully","captcha-bank");
		$cpb_country_unblock_message = __("Selected Countries have been unblocked Successfully","captcha-bank");
		$cpb_error_message = __("Error Message","captcha-bank");
		$cpb_arithmetic_action = __("Please choose at least one Arithmetic action!","captcha-bank");
		$cpb_relational_action = __("Please choose at least one Relational action!","captcha-bank");
		$cpb_arranged_action = __("Please choose at least one Arrange order action!","captcha-bank");
		$cpb_ip_address = __("IP Address","captcha-bank");
		$cpb_location = __("Location","captcha-bank");
		$cpb_latitude = __("Latitude","captcha-bank");
		$cpb_longitude = __("Longitude","captcha-bank");
		$cpb_na = __("N/A","captcha-bank");
		$cpb_choose_action = __("Please choose an Action from Dropdown!","captcha-bank");
		$cpb_delete_action = __("Please choose at least one record to delete!","captcha-bank");
		$cpb_confirm_delete = __("Are you sure you want to delete ?","captcha-bank");
		$cpb_valid_ip_range = __("Please provide valid IP Range","captcha-bank");
		$cpb_valid_ip_address = __("Please provide valid IP Address","captcha-bank");
		$cpb_ip_address_already_blocked = __("This IP Address has been already blocked!","captcha-bank");
		$cpb_notification = __("Notification!","captcha-bank");
		$cpb_ip_range_already_blocked = __("This IP Range has been already blocked!","captcha-bank");

		//captcha setup
		$cpb_captcha_bank_type_tooltip = __("In this field, you would need to choose between different types of captcha. You could choose between Text Captcha and Logical Captcha", "captcha-bank");
		$cpb_captcha_bank_text_captcha = __("Text Captcha","captcha-bank");
		$cpb_captcha_bank_logical_captcha = __("Logical Captcha","captcha-bank");
		$cpb_captcha_bank_character_title = __("Captcha Characters","captcha-bank");
		$cpb_captcha_bank_character_tooltip = __("In this field, you would need to provide number of characters to be used for creating a captcha control", "captcha-bank");
		$cpb_captcha_bank_character_placeholder = __("Please provide Captcha Characters", "captcha-bank");
		$cpb_captcha_bank_string_type_title = __("Captcha String Type","captcha-bank");
		$cpb_captcha_bank_string_type_tooltip = __("In this field, you would need to choose whether to create captcha control with Alphabets and Digits, Only Alphabets, Only Digits", "captcha-bank");
		$cpb_captcha_bank_alphabets_digits = __("Alphabets And Digits","captcha-bank");
		$cpb_captcha_bank_only_alphabets = __("Only Alphabets","captcha-bank");
		$cpb_captcha_bank_only_digits = __("Only Digits","captcha-bank");
		$cpb_captcha_bank_text_case_title = __("Text Case","captcha-bank");
		$cpb_captcha_bank_text_case_tooltip = __("In this field, you would need to choose whether to create captcha control with Upper Case, Lower Case, Random", "captcha-bank");
		$cpb_captcha_bank_upper_case = __("Upper Case","captcha-bank");
		$cpb_captcha_bank_lower_case = __("Lower Case","captcha-bank");
		$cpb_captcha_bank_random_case = __("Random","captcha-bank");
		$cpb_captcha_bank_case_sensitive_title = __("Case Sensitive","captcha-bank");
		$cpb_captcha_bank_case_sensitive_tooltip = __("In this field, you would need to choose whether to create captcha control with Case Sensitive or vice versa", "captcha-bank");
		$cpb_captcha_bank_width_title = __("Captcha Width","captcha-bank");
		$cpb_captcha_bank_width_tooltip = __("In this field, you would need to provide a width of captcha control in pixels", "captcha-bank");
		$cpb_captcha_bank_width_placeholder = __("Please provide Captcha Width", "captcha-bank");
		$cpb_captcha_bank_height_title = __("Captcha Height","captcha-bank");
		$cpb_captcha_bank_height_tooltip = __("In this field, you would need to provide a height of captcha control in pixels", "captcha-bank");
		$cpb_captcha_bank_height_placeholder = __("Please provide Captcha Height", "captcha-bank");
		$cpb_captcha_bank_background_title = __("Captcha Background","captcha-bank");
		$cpb_captcha_bank_background_tooltip = __("In this field, you would need to choose different backgrounds for captcha control", "captcha-bank");
		$cpb_captcha_bank_background_pattern1 = __("Pattern 1","captcha-bank");
		$cpb_captcha_bank_background_pattern2 = __("Pattern 2","captcha-bank");
		$cpb_captcha_bank_background_pattern3 = __("Pattern 3","captcha-bank");
		$cpb_captcha_bank_background_pattern4 = __("Pattern 4","captcha-bank");
		$cpb_captcha_bank_background_pattern5 = __("Pattern 5","captcha-bank");
		$cpb_captcha_bank_background_pattern6 = __("Pattern 6","captcha-bank");
		$cpb_captcha_bank_background_pattern7 = __("Pattern 7","captcha-bank");
		$cpb_captcha_bank_background_pattern8 = __("Pattern 8","captcha-bank");
		$cpb_captcha_bank_background_pattern9 = __("Pattern 9","captcha-bank");
		$cpb_captcha_bank_background_pattern10 = __("Pattern 10","captcha-bank");
		$cpb_captcha_bank_background_pattern11 = __("Pattern 11","captcha-bank");
		$cpb_captcha_bank_background_pattern12 = __("Pattern 12","captcha-bank");
		$cpb_captcha_bank_background_pattern13 = __("Pattern 13","captcha-bank");
		$cpb_captcha_bank_background_pattern14 = __("Pattern 14","captcha-bank");
		$cpb_captcha_bank_background_pattern15 = __("Pattern 15","captcha-bank");
		$cpb_captcha_bank_background_pattern16 = __("Pattern 16","captcha-bank");
		$cpb_captcha_bank_background_pattern17 = __("Pattern 17","captcha-bank");
		$cpb_captcha_bank_background_pattern18 = __("Pattern 18","captcha-bank");
		$cpb_captcha_bank_text_style_title = __("Text Style","captcha-bank");
		$cpb_captcha_bank_text_style_tooltip = __("In this field, you would need to choose Font Size and Font Color for captcha control", "captcha-bank");
		$cpb_captcha_bank_text_font_title = __("Text Font","captcha-bank");
		$cpb_captcha_bank_text_font_tooltip = __("In this field, you would need to choose Font Type for captcha control", "captcha-bank");
		$cpb_captcha_bank_border_style_title = __("Border Style","captcha-bank");
		$cpb_captcha_bank_border_style_tooltip = __("In this field, you would need to choose Border Color, Size and Type for captcha control", "captcha-bank");
		$cpb_captcha_bank_border_solid = __("Solid","captcha-bank");
		$cpb_captcha_bank_border_dotted = __("Dotted","captcha-bank");
		$cpb_captcha_bank_border_dashed = __("Dashed","captcha-bank");
		$cpb_captcha_bank_lines_title = __("Lines","captcha-bank");
		$cpb_captcha_bank_lines_tooltip = __("In this field, you would need to provide number of lines for captcha control", "captcha-bank");
		$cpb_captcha_bank_lines_placeholder = __("Please provide number of Lines", "captcha-bank");
		$cpb_captcha_bank_lines_color_title = __("Lines Color","captcha-bank");
		$cpb_captcha_bank_lines_color_tooltip = __("In this field, you would need to choose Line Color for captcha control", "captcha-bank");
		$cpb_captcha_bank_noise_level_title = __("Noise level","captcha-bank");
		$cpb_captcha_bank_noise_level_tooltip = __("In this field, you would need to provide Noise Level for captcha control", "captcha-bank");
		$cpb_captcha_bank_noise_level_placeholder = __("Please provide Noise Level", "captcha-bank");
		$cpb_captcha_bank_noise_color_title = __("Noise Color","captcha-bank");
		$cpb_captcha_bank_noise_color_tooltip = __("In this field, you would need to choose Noise Color for captcha control", "captcha-bank");
		$cpb_captcha_bank_text_transparency_title = __("Text Transparency %","captcha-bank");
		$cpb_captcha_bank_text_transparency_tooltip = __("In this field, you would need to provide Text Transparency for captcha control", "captcha-bank");
		$cpb_captcha_bank_text_transparency_placeholder = __("Please provide Text Transparency", "captcha-bank");
		$cpb_captcha_bank_signature_text_title = __("Signature Text","captcha-bank");
		$cpb_captcha_bank_signature_text_tooltip = __("In this field, you would need to provide Signature Text for captcha control", "captcha-bank");
		$cpb_captcha_bank_signature_text_palceholder = __("Please provide Signature Text", "captcha-bank");
		$cpb_captcha_bank_signature_style_title = __("Signature Style","captcha-bank");
		$cpb_captcha_bank_signature_style_tooltip = __("In this field, you would need to choose Signature Style and Color for captcha control", "captcha-bank");
		$cpb_captcha_bank_signature_font_title = __("Signature Font","captcha-bank");
		$cpb_captcha_bank_signature_font_tooltip = __("In this field, you would need to choose Font Family for captcha control", "captcha-bank");
		$cpb_captcha_bank_shadow_color_title = __("Text Shadow Color","captcha-bank");
		$cpb_captcha_bank_shadow_color_tooltip = __("In this field, you would need to choose Text Shadow Color for captcha control", "captcha-bank");
		$cpb_captcha_bank_mathematical_title = __("Mathematical Operations","captcha-bank");
		$cpb_captcha_bank_mathematical_tooltip = __("In this field, you would need to choose whether to create a Captcha control with Arithmetic Relational Arrange Order", "captcha-bank");
		$cpb_captcha_bank_arithmetic = __("Arithmetic","captcha-bank");
		$cpb_captcha_bank_relational = __("Relational","captcha-bank");
		$cpb_captcha_bank_arithmetic_title = __("Arithmetic Actions","captcha-bank");
		$cpb_captcha_bank_addition = __("Addition(+)", "captcha-bank");
		$cpb_captcha_bank_subtraction = __("Subtraction(-)", "captcha-bank");
		$cpb_captcha_bank_multiplication = __("Multiplication(*)", "captcha-bank");
		$cpb_captcha_bank_division = __("Division(/)", "captcha-bank");
		$cpb_captcha_bank_arithmetic_tooltip = __("In this field, you would need to choose specific arithmetic actions to create a captcha control", "captcha-bank");
		$cpb_captcha_bank_relational_title = __("Relational Actions","captcha-bank");
		$cpb_captcha_bank_relational_tooltip = __("In this field, you would need to choose specific relational actions to create a captcha control", "captcha-bank");
		$cpb_captcha_bank_largest_number = __("Largest Number", "captcha-bank");
		$cpb_captcha_bank_smallest_number = __("Smallest Number", "captcha-bank");
		$cpb_captcha_bank_arrange_title = __("Arrange Order","captcha-bank");
		$cpb_captcha_bank_arrange_tooltip = __("In this field, you would need to choose the specific arranging order for captcha", "captcha-bank");
		$cpb_captcha_bank_ascending_order = __("Ascending Order", "captcha-bank");
		$cpb_captcha_bank_descending_order = __("Descending Order", "captcha-bank");

		//other settings
		$cpb_other_settings_automatic_plugin_updates_tooltip = __("If you would like that plugin would be automatically updated whenever there is a new version available then choose enable or vice-versa from dropdown","captcha-bank");
		$cpb_other_settings_automatic_plugin_updates = __("Automatic Plugin Updates","captcha-bank");
		$cpb_other_settings_live_traffic_monitoring_label = __("Live Traffic Monitoring","captcha-bank");
		$cpb_other_settings_live_traffic_monitoring_tooltip = __("If you would like to monitor details of user who are currently visiting the website and pages visited by them then choose enable or vice-versa from dropdown", "captcha-bank");
		$cpb_other_settings_visitor_logs_monitoring_label = __("Visitor Logs Monitoring","captcha-bank");
		$cpb_other_settings_visitor_logs_monitoring_tooltip = __("If you would like to monitor details of user who are visiting the website and pages visited by them then choose enable or vice-versa from dropdown", "captcha-bank");
		$cpb_other_settings_remove_tables =  __("Remove Tables At Uninstall", "captcha-bank");
		$cpb_other_settings_remove_tables_tootltip = __("If you would like to remove tables at uninstall then you would need to choose enable or vice-versa from dropdown", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_method = __("How does Captcha Bank get IPs", "captcha-bank");
		$cpb_other_settings_ip_address_tooltips = __("In this field, you would need to choose a specific option for how does Captcha Bank get IPs", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_option1 = __("Let Captcha Bank use the most secure method to get visitor IP address. Prevents spoofing and works with most sites.", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_option2 = __("Use PHP's built in REMOTE_ADDR and don't use anything else. Very secure if this is compatible with your site.", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_option3 = __("Use the X-Forwarded-For HTTP header. Only use if you have a front-end proxy or spoofing may result.", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_option4 = __("Use the X-Real-IP HTTP header. Only use if you have a front-end proxy or spoofing may result.", "captcha-bank");
		$cpb_other_settings_ip_address_fetching_option5 = __("Use the Cloudflare 'CF-Connecting-IP' HTTP header to get a visitor IP. Only use if you're using Cloudflare.", "captcha-bank");

		//alert setup
		$cpb_alert_setup_email_fails_login_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when a user fails to login","captcha-bank");
		$cpb_alert_setup_email_success_login_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when a user succeeds in login","captcha-bank");
		$cpb_alert_setup_email_ip_address_blocked_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when an IP Address is being blocked","captcha-bank");
		$cpb_alert_setup_email_ip_address_unblocked_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when an IP Address is being unblocked","captcha-bank");
		$cpb_alert_setup_email_ip_range_blocked_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when an IP Range is being blocked","captcha-bank");
		$cpb_alert_setup_email_ip_range_unblocked_tooltip = __("In this field, you would need to choose Enable to automatically send an email to the Administrator when an IP Range is being unblocked","captcha-bank");
		$cpb_alert_setup_email_fails_login_title = __("Email when a User Fails Login","captcha-bank");
		$cpb_alert_setup_email_success_login_title = __("Email when a User Success Login","captcha-bank");
		$cpb_alert_setup_email_ip_address_blocked_title = __("Email when an IP Address is Blocked","captcha-bank");
		$cpb_alert_setup_email_ip_address_unblocked_title = __("Email when an IP Address is Unblocked","captcha-bank");
		$cpb_alert_setup_email_ip_range_blocked_title = __("Email when an IP Range is Blocked","captcha-bank");
		$cpb_alert_setup_email_ip_range_unblocked_title = __("Email when an IP Range is Unblocked","captcha-bank");

		//email template
		$cpb_email_templates_tooltip = __("In this field, you would need to choose Email Template from dropdown","captcha-bank");
		$cpb_email_templates_choose_title = __("Choose Email Template","captcha-bank");
		$cpb_email_templates_send_to_title = __("Send To","captcha-bank");
		$cpb_email_templates_send_to_email_tooltip = __("In this field, you would need to provide a valid email address where you would like to send an email notification","captcha-bank");
		$cpb_email_templates_send_email_address_placeholder = __("Please provide valid Email Address","captcha-bank");
		$cpb_email_templates_cc_title = __("Cc","captcha-bank");
		$cpb_email_templates_cc_email_tooltip = __("In this field, you would need to provide valid Cc Email Address","captcha-bank");
		$cpb_email_templates_cc_email_address_placeholder = __("Please provide Cc Email","captcha-bank");
		$cpb_email_templates_bcc_title = __("Bcc","captcha-bank");
		$cpb_email_templates_bcc_email_tooltip = __("In this field, you would need to provide valid Bcc Email Address","captcha-bank");
		$cpb_email_templates_bcc_email_address_placeholder = __("Please provide Bcc Email","captcha-bank");
		$cpb_email_templates_subject_tooltip = __("In this field, you would need to provide subject for email notification","captcha-bank");
		$cpb_email_templates_cpb_message_title = __("Message","captcha-bank");
		$cpb_email_templates_message_content_tooptip= __("In this field, you would need to provide content which has to be sent to the Administrator","captcha-bank");
		$cpb_email_templates_successful_login = __("Template For User Successful Login","captcha-bank");
		$cpb_email_templates_failure_login = __("Template For User Failure Login","captcha-bank");
		$cpb_email_templates_ip_address_blocked = __("Template For IP Address Blocked","captcha-bank");
		$cpb_email_templates_ip_address_unblocked= __("Template For IP Address Unblocked","captcha-bank");
		$cpb_email_templates_ip_range_blocked = __("Template For IP Range Blocked","captcha-bank");
		$cpb_email_templates_ip_range_unblocked = __("Template For IP Range Unblocked","captcha-bank");

		//roles and capabilities
		$cpb_show_roles_and_capabilities_menu = __("Show Captcha Bank Menu","captcha-bank");
		$cpb_roles_and_capabilities_menu_tooltip =  __("In this field, you would need to choose a specific role who can see Sidebar Menu", "captcha-bank");
		$cpb_roles_and_capabilities_administrator = __("Administrator", "captcha-bank");
		$cpb_roles_and_capabilities_author = __("Author", "captcha-bank");
		$cpb_roles_and_capabilities_editor = __("Editor", "captcha-bank");
		$cpb_roles_and_capabilities_contributor = __("Contributor", "captcha-bank");
		$cpb_roles_and_capabilities_subscriber = __("Subscriber", "captcha-bank");
		$cpb_roles_and_capabilities_others = __("Others", "captcha-bank");
		$cpb_roles_and_capabilities_topbar_menu = __("Show Captcha Bank Top Bar Menu","captcha-bank");
		$cpb_roles_and_capabilities_topbar_menu_tooltip = __("If you would like to show Captcha Bank Top Bar Menu then you would need to choose enable or vice-versa from dropdown", "captcha-bank");
		$cpb_roles_and_capabilities_administrator_role = __("An Administrator Role can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_administrator_role_tooltip = __("Administrators will have by default full control to manage different options in Captcha Bank, so all checkboxes will already be selected for the Administrator Role as mentioned below", "captcha-bank");
		$cpb_roles_and_capabilities_author_role = __("An Author Role can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_author_role_tooltip = __("You can choose what pages could be accessed by users having an Author Role and you can also choose additional capabilities that could be accessed by users on your Captcha Bank for security purpose which is mentioned below in Author Role checkboxes", "captcha-bank");
		$cpb_roles_and_capabilities_editor_role = __("An Editor Role can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_editor_role_tooltip = __("You can choose what pages could be accessed by the users having an Editor Role and you can also choose additional capabilities that could be accessed by users on your Captcha Bank for security purpose which is mentioned below in Editor Role checkboxes", "captcha-bank");
		$cpb_roles_and_capabilities_contributor_role = __("A Contributor Role can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_contributor_role_tooltip = __("You can choose what pages could be accessed by the users having a Contributor Role and you can also choose additional capabilities that could be accessed by users on your Captcha Bank for security purpose which is mentioned below in Contributor Role checkboxes", "captcha-bank");
		$cpb_roles_and_capabilities_subscriber_role = __("A Subscriber Role can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_subscriber_role_tooltip = __("You can choose what pages could be accessed by the users having a Subscriber Role and you can also choose additional capabilities that could be accessed by users on your Captcha Bank for security purpose which is mentioned below in Subscriber Role checkboxes", "captcha-bank");
		$cpb_roles_and_capabilities_other_role = __("Other Roles can do the following ","captcha-bank");
		$cpb_roles_and_capabilities_other_role_tooltip = __("You can choose what pages could be accessed by the users having an Others Role and you can also choose additional capabilities that could be accessed by users on your Captcha Bank for security purpose which is mentioned below in Others Role checkboxes", "captcha-bank");
		$cpb_roles_and_capabilities_other_roles_capabilities = __("In this field, you would need to choose appropriate capabilities for security purposes","captcha-bank");
		$cpb_roles_and_capabilities_other_roles_capabilities_tooltip = __("In this field, only users can access to these capabilities of Captcha Bank", "captcha-bank");

		//live traffic and login logs
		$cpb_recent_login_logs_start_date_tooltip = __("In this field, you would need to specify start date to view information about users who logged within a specified period","captcha-bank");
		$cpb_recent_login_logs_end_date_tooltip = __("In this field, you would need to specify end date to view information about users who logged within a specified period","captcha-bank");
		$cpb_live_traffic_start_date_tooltip = __("In this field, you would need to specify start date to view information about users who visit to your website within a specified period","captcha-bank");
		$cpb_live_traffic_end_date_tooltip = __("In this field, you would need to specify end date to view information about users who visit to your website within a specified period","captcha-bank");
		$cpb_live_traffic_monitoring_message = __("Live Traffic Monitoring is Turned Off. Please go to Other Settings Menu to enable it","captcha-bank");
		$cpb_recent_login_on_world_map = __("Login Logs On World Map","captcha-bank");
		$cpb_live_traffic_on_world_map = __("Live Traffic On World Map","captcha-bank");
		$cpb_visitor_logs_on_world_map = __("Visitor Logs On World Map","captcha-bank");
		$cpb_visitor_logs_monitoring_message = __("Visitor Logs Monitoring is Turned Off. Please go to Other Settings Menu to enable it","captcha-bank");
		$cpb_details = __("Details","captcha-bank");
		$cpb_status = __("Status","captcha-bank");

		//error messages
		$cpb_error_message_login_failure_title = __("For Maximum Login Attempts Error Message","captcha-bank");
		$cpb_error_message_login_failure_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever a user exceeds maximum number of login attempts","captcha-bank");
		$cpb_error_message_login_failure_placeholder = __("Please provide Login Attempts Error Message","captcha-bank");
		$cpb_error_message_invalid_captcha_title = __("For Invalid Captcha Error Message","captcha-bank");
		$cpb_error_message_invalid_captcha_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever an Invalid captcha is being provided by a user","captcha-bank");
		$cpb_error_message_invalid_captcha_placeholder = __("Please provide Invalid Captcha Error Message","captcha-bank");
		$cpb_error_message_blocked_ip_address_title = __("For Blocked IP Address Error Message","captcha-bank");
		$cpb_error_message_blocked_ip_address_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever a user IP Address is being blocked by the Administrator","captcha-bank");
		$cpb_error_message_blocked_ip_address_placeholder = __("Please provide Blocked IP Address Error Message","captcha-bank");
		$cpb_error_message_empty_captcha_title = __("For Captcha Empty Error Message","captcha-bank");
		$cpb_error_message_empty_captcha_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever Captcha is empty","captcha-bank");
		$cpb_error_message_empty_captcha_placeholder = __("Please provide Empty Captcha Error Message","captcha-bank");
		$cpb_error_message_blocked_ip_range_title = __("For Blocked IP Range Error Message","captcha-bank");
		$cpb_error_message_blocked_ip_range_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever a user IP Range is being blocked by the Administrator","captcha-bank");
		$cpb_error_message_blocked_ip_range_placeholder = __("Please provide Blocked IP Range Error Message","captcha-bank");
		$cpb_error_messages_blocked_country_label = __("For Blocked Country Error Message","captcha-bank");
		$cpb_error_messages_blocked_country_tooltip = __("In this field, you would need to provide an error message that you would like to display whenever a user country is being blocked by the Administrator", "captcha-bank");
		$cpb_error_messages_blocked_country_placeholder = __("Please provide your Blocked Country Error Message", "captcha-bank");

		// Display settings
		$cpb_display_settings_enable_captcha_for = __("Enable Captcha For","captcha-bank");
		$cpb_display_settings_enable_captcha_tooltip = __("If you would like to use Captcha on your form then you would need to choose at particular Check Box to display a captcha on required forms","captcha-bank");
		$cpb_display_settings_login_form = __("Login Form","captcha-bank");
		$cpb_display_settings_registration_form = __("Registration Form","captcha-bank");
		$cpb_display_settings_reset_password_form = __("Reset Password Form","captcha-bank");
		$cpb_display_settings_comment_form = __("Comment Form","captcha-bank");
		$cpb_display_settings_admin_comment_form = __("Admin Comment Form","captcha-bank");
		$cpb_display_settings_hide_captcha_register_user = __("Hide Captcha For Registered user","captcha-bank");
		$cpb_display_settings_captcha_woocommerce = __("Captcha For WooCommerce","captcha-bank");
		$cpb_display_settings_contact_form7 = __("Captcha For Contact Form 7","captcha-bank");
		$cpb_display_settings_buddypress = __("Captcha For BuddyPress Registration Form","captcha-bank");
		$cpb_display_settings_captcha_shortcode = __("Please copy and paste this shortcode in your Contact Form after Saving Changes","captcha-bank");

		//feature Requests
		$cpb_feature_requests_thank_you =  __("Thank You!","captcha-bank");
		$cpb_feature_requests_fill_form = __("Kindly fill in the below form, if you would like to suggest some features which are not in the Plugin","captcha-bank");
		$cpb_feature_requests_any_suggestion = __("If you also have any suggestion/complaint, you can use the same form below","captcha-bank");
		$cpb_feature_requests_write_us_on = __("You can also write us on","captcha-bank");
		$cpb_feature_requests_name_title = __("Your Name","captcha-bank");
		$cpb_feature_requests_name_tooltip = __("In this field, you would need to provide your Name which will be sent along with your Feature Request","captcha-bank");
		$cpb_feature_requests_name_placeholder = __("Please provide your Name","captcha-bank");
		$cpb_feature_requests_email_title = __("Your Email","captcha-bank");
		$cpb_feature_requests_email_tooltip = __("In this field, you would need to provide your Email which will be sent along with your Feature Request","captcha-bank");
		$cpb_feature_requests_email_placeholder = __("Please provide your Email","captcha-bank");
		$cpb_feature_requests_title = __("Feature Request","captcha-bank");
		$cpb_feature_requests_tooltip = __("In this field, you would need to provide a feature which you would like to request to be added to this Plugin","captcha-bank");
		$cpb_feature_requests_placeholder = __("Please provide your Feature Request","captcha-bank");
		$cpb_feature_requests_send_request = __("Send Request","captcha-bank");

		//Blocking Options
		$cpb_blocking_options_title = __("Auto IP Block","captcha-bank");
		$cpb_blocking_options_tooltip = __("In this field, you would need to choose Enable to automatically block IP Addresses of users who exceeds their Maximum number of Login attempts","captcha-bank");
		$cpb_blocking_options_login_attempts_title = __("Maximum Login Attempts in a Day","captcha-bank");
		$cpb_blocking_options_login_attempts_tooltip = __("In this field, you would need to provide maximum number of login attempts in a day to restrict number of login attempts by users","captcha-bank");
		$cpb_blocking_options_login_attempts_placeholder = __("Please provide Maximum Login Attempts","captcha-bank");

		//Manage IP Addresses
		$cpb_manage_ip_addresses_tooltip = __("In this field, you would need to provide a valid IP Address which you would like to block","captcha-bank");
		$cpb_manage_ip_addresses_View_block = __("View Blocked IP Addresses","captcha-bank");
		$cpb_manage_ip_addresses_tooltip_start_date = __("In this field, you would need to choose start date to view information about IP Addresses which were blocked within a specified period", "captcha-bank");
		$cpb_manage_ip_addresses_tooltip_end_date = __("In this field, you would need to choose end date to view information about IP Addresses which were blocked within a specified periods", "captcha-bank");
		$cpb_tooltip_comment = __("In this field, you would need to provide comments to give an overview about reason for blocking these IP Addresses", "captcha-bank");

		//Manage IP Ranges
		$cpb_manage_ip_ranges_start_range_title = __("Start IP Range","captcha-bank");
		$cpb_manage_ip_ranges_start_range_tooltip = __("In this field, you would need to provide a valid Start IP Ranges which you would like to block", "captcha-bank");
		$cpb_manage_ip_ranges_start_range_placeholder = __("Please provide Start IP Range", "captcha-bank");
		$cpb_manage_ip_ranges_end_range_title = __("End IP Range","captcha-bank");
		$cpb_manage_ip_ranges_end_range_tooltip = __("In this field, you would need to provide a valid End IP Ranges which you would like to block", "captcha-bank");
		$cpb_manage_ip_ranges_end_range_placeholder = __("Please provide End IP Range", "captcha-bank");
		$cpb_manage_ip_ranges_block_tooltip = __("In this field, you would need to choose time duration to block an IP Range, so that particular IP Range will be blocked for fixed time interval as per your settings","captcha-bank");
		$cpb_manage_ip_ranges_comment = __("In this field, you would need to provide comments to give an overview about reason for blocking these IP Ranges", "captcha-bank");
		$cbp_manage_ip_ranges_block = __("Block IP Range","captcha-bank");
		$cpb_manage_ip_ranges_view_block = __("View Blocked IP Ranges","captcha-bank");
		$cpb_manage_ip_ranges_start_date_tooltip = __("In this field, you would need to choose start date to view information about IP Ranges which were blocked within a specified period", "captcha-bank");
		$cpb_manage_ip_ranges_end_date_tooltip = __("In this field, you would need to choose end date to view information about IP Ranges which were blocked within a specified period", "captcha-bank");

		//Common Variables
		$cpb_captcha_bank_title = __("Captcha Bank","captcha-bank");
		$cpb_color_code = __("Please provide Color Code","captcha-bank");
		$cpb_block_for_title = __("Blocked For","captcha-bank");
		$cpb_block_for_tooltip = __("In this field, you would need to choose time duration to block an IP Address, so that particular IP Address will be blocked for the fixed time interval as per your settings","captcha-bank");
		$cpb_one_hour= __("1 Hour","captcha-bank");
		$cpb_twelve_hours = __("12 Hours","captcha-bank");
		$cpb_twenty_four_hours = __("24 Hours","captcha-bank");
		$cpb_forty_eight_hours = __("48 Hours","captcha-bank");
		$cpb_one_week = __("1 Week","captcha-bank");
		$cpb_one_month = __("1 Month","captcha-bank");
		$cpb_permanently = __("Permanently","captcha-bank");
		$cpb_never = __("Never", "captcha-bank");
		$cpb_button_clear = __("Clear", "captcha-bank");
		$cpb_comments = __("Comments","captcha-bank");
		$cpb_placeholder_comment = __("Please provide Comments", "captcha-bank");
		$cpb_start_date_heading = __("Start Date","captcha-bank");
		$cpb_end_date_heading = __("End Date","captcha-bank");
		$cpb_bulk_action = __("Bulk Action","captcha-bank");
		$cpb_apply = __("Apply","captcha-bank");
		$cpb_feature_requests = __("Feature Requests","captcha-bank");
		$cpb_submit = __("Submit","captcha-bank");
		$cpb_resources = __("Resources","captcha-bank");
		$cpb_http_user_agent = __("HTTP User Agent","captcha-bank");
		$cpb_message_settings_label = __("Message Settings","captcha-bank");
		$cpb_live_traffic_title = __("Live Traffic","captcha-bank");
		$cpb_visitor_logs_title = __("Visitor Logs","captcha-bank");
		$cpb_recent_login_log_title = __("Login Logs","captcha-bank");
		$cpb_delete = __("Delete","captcha-bank");
		$cpb_block_ip_address = __("Block IP Address","captcha-bank");
		$cpb_start_date_placeholder = __("Please choose Start Date","captcha-bank");
		$cpb_end_date_placeholder = __("Please choose End Date","captcha-bank");
		$cpb_premium_editions_menu = __("Premium Editions","captcha-bank");
		$cpb_captcha_settings_label = __("Captcha Settings","captcha-bank");
		$cpb_captcha_setup_menu = __("Captcha Setup", "captcha-bank");
		$cpb_notification_setup_label = __("Notifications Setup","captcha-bank");
		$cpb_logs_menu= __("Logs", "captcha-bank");
		$cpb_security_settings_label = __("Security Settings","captcha-bank");
		$cpb_blockage_settings_label = __("Blockage Settings","captcha-bank");
		$cpb_block_unblock_ip_address_label = __("Block / Unblock IP Addresses","captcha-bank");
		$cpb_block_unblock_ip_range_label = __("Block / Unblock IP Ranges","captcha-bank");
		$cpb_block_unblock_countries_label = __("Block / Unblock Countries","captcha-bank");
		$cpb_email_templates_menu = __("Email Templates", "captcha-bank");
		$cpb_other_settings_menu = __("Other Settings", "captcha-bank");
		$cpb_roles_and_capabilities_menu = __("Roles & Capabilities", "captcha-bank");
		$cpb_system_information_menu = __("System Information", "captcha-bank");
		$cpb_roles_and_capabilities_full_control = __("Full Control","captcha-bank");
		$cpb_captcha_bank_type_breadcrumb = __("Captcha Type","captcha-bank");
		$cpb_display_settings_title = __("Display Settings","captcha-bank");
		$cpb_ip_ranges = __("IP Ranges","captcha-bank");
		$cpb_enable = __("Enable","captcha-bank");
		$cpb_disable = __("Disable","captcha-bank");
		$cpb_save_changes = __("Save Changes","captcha-bank");
		$cpb_email_subject_title = __("Subject","captcha-bank");
		$cpb_placeholder_subject = __("Please provide Subject","captcha-bank");
		$cpb_block_time = __("Blocked Date & Time","captcha-bank");
		$cpb_release_time=__("Release Date & Time","captcha-bank");
		$cpb_user_name = __("User Name","captcha-bank");
		$cpb_date_time = __("Date & Time","captcha-bank");
		$cpb_action = __("Action","captcha-bank");
		$cpb_user_access_message = __("You don't have Sufficient Access to this Page. Kindly contact the Administrator for more Privileges.","captcha-bank");
		$cpb_general_settings_menu = __("General Settings", "captcha-bank");

		//country Blocks
		$cpb_country_blocks_available_countries_label = __("Available Countries","captcha-bank");
		$cpb_country_blocks_available_countries_tooltip = __("List of all Countries","captcha-bank");
		$cpb_country_blocks_add_button_label = __("Add >>","captcha-bank");
		$cpb_country_blocks_remove_button_label = __("<< Remove","captcha-bank");
		$cpb_country_blocks_blocked_countries_label = __("Blocked Countries","captcha-bank");
		$cpb_country_blocks_blocked_countries_tooltip = __("List of all Countries being Blocked","captcha-bank");

		// error log
		$cpb_error_logs = __("Error Logs","captcha-bank");
		$cpb_error_logs_output = __("Output","captcha-bank");
		$cpb_error_logs_download = __("Download Error Logs","captcha-bank");
		$cpb_error_logs_clear = __("Clear Error Logs","captcha-bank");
		$cpb_error_logs_output_tooltip = __("In this field,you would be able to see all PHP Errors","captcha-bank");
		$cpb_clear_error_logs_success = __("Error logs has been cleared Successfully","captcha-bank");
	}
}
?>

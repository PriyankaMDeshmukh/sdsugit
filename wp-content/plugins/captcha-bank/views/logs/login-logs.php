<?php
/**
* This Template is used for managing recent login logs.
*
* @author  Tech Banker
* @package captcha-bank/views/logs
* @version 3.1.0
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
	elseif(logs_captcha_bank == "1")
	{
		$end_date = time();
		$start_date = $end_date - 604800;
		?>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="icon-custom-home"></i>
					<a href="admin.php?page=captcha_bank">
						<?php echo $cpb_captcha_bank_title; ?>
					</a>
					<span>></span>
				</li>
				<li>
					<a href="admin.php?page=captcha_bank_login_logs">
						<?php echo $cpb_logs_menu; ?>
					</a>
					<span>></span>
				</li>
				<li>
					<span>
						<?php echo $cpb_recent_login_log_title; ?>
					</span>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet box vivid-green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-custom-clock"></i>
							<?php echo $cpb_recent_login_on_world_map; ?>
						</div>
					</div>
					<div class="portlet-body form">
						<form id="ux_frm_recent_login_logs">
							<div class="form-body">
								<div id="map_canvas" class="custom-map"></div>
							</div>
						</form>
					</div>
				</div>
				<div class="portlet box vivid-green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-custom-clock"></i>
							<?php echo $cpb_recent_login_log_title; ?>
						</div>
					</div>
					<div class="portlet-body form">
						<form id="ux_frm_recent_login">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">
												<?php echo $cpb_start_date_heading;?> :
												<i class="icon-custom-question tooltips" data-original-title="<?php echo $cpb_recent_login_logs_start_date_tooltip;?>" data-placement="right"></i>
												<span style="color:red">( Premium Edition )</span>
											</label>
											<input type="text" class="form-control" name="ux_txt_cpb_start_date" id="ux_txt_cpb_start_date" value="<?php echo date("m/d/Y",$start_date) ?>" onkeypress="prevent_data_captcha_bank(event);" placeholder="<?php echo $cpb_start_date_placeholder; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">
												<?php echo $cpb_end_date_heading;?> :
												<i class="icon-custom-question tooltips" data-original-title="<?php echo $cpb_recent_login_logs_end_date_tooltip;?>" data-placement="right"></i>
												<span style="color:red">( Premium Edition )</span>
											</label>
											<input type="text" class="form-control" name="ux_txt_cpb_end_date" id="ux_txt_cpb_end_date" value="<?php echo date("m/d/Y",$end_date) ?>" onkeypress="prevent_data_captcha_bank(event);" placeholder="<?php echo $cpb_end_date_placeholder;?>">
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="pull-right">
										<input type="submit" class="btn vivid-green" name="ux_btn_recent_logs" id="ux_btn_recent_logs" value="<?php echo $cpb_submit;?>">
									</div>
								</div>
								<div class="line-separator"></div>
								<div class="form-actions">
									<div class="table-top-margin">
										<select name="ux_ddl_recent_logs" id="ux_ddl_recent_logs" class="custom-bulk-width">
											<option value=""><?php echo $cpb_bulk_action; ?></option>
											<option value="delete" style="color:red"><?php echo $cpb_delete; ?>( Premium Edition )</option>
										</select>
										<input type="button" class="btn vivid-green" name="ux_btn_apply" id="ux_btn_apply" onclick='premium_edition_notification_captcha_bank();' value="<?php echo $cpb_apply;?>">
									</div>
									<table class="table table-striped table-bordered table-hover table-margin-top" id="ux_tbl_recent_logs">
										<thead>
											<tr>
												<th style="text-align:center;width: 5%;" class="chk-action">
													<input type="checkbox" class="custom-chkbox-operation" name="ux_chk_all_user" id="ux_chk_all_user">
												</th>
												<th>
													<label class="control-label">
														<?php echo $cpb_user_name;?>
													</label>
												</th>
												<th>
													<label class="control-label">
														<?php echo $cpb_ip_address;?>
													</label>
												</th>
												<th>
													<label class="control-label">
														<?php echo $cpb_location;?>
													</label>
												</th>
												<th>
													<label class="control-label">
														<?php echo $cpb_date_time;?>
													</label>
												</th>
												<th>
													<label class="control-label">
														<?php echo $cpb_status;?>
													</label>
												</th>
												<th style="text-align:center;" class="chk-action">
													<label class="control-label">
														<?php echo $cpb_action;?>
													</label>
												</th>
											</tr>
										</thead>
										<tbody id="dynamic_table_filter">
										<?php
										foreach($cpb_data_logs as $row)
										{
											?>
											<tr>
												<td style="text-align:center;width: 5%;">
													<label>
														<input  type="checkbox" onclick="check_all_captcha_bank('#ux_chk_all_user');" name="ux_chk_recent_login_<?php echo $row["meta_id"]?>" id="ux_chk_recent_login_<?php echo $row["meta_id"]?>" value="<?php echo $row["meta_id"]?>">
													</label>
												</td>
												<td>
													<label>
														<?php echo $row["username"] != "" ? $row["username"] : $cpb_na;?>
													</label>
												</td>
												<td>
													<label>
														<?php echo long2ip($row["user_ip_address"])?>
													</label>
												</td>
												<td>
													<label>
														<?php echo $row["location"] != "" ? $row["location"]: $cpb_na;?>
													</label>
												</td>
												<td>
													<label>
														<?php echo date("d M Y H:i A",  $row["date_time"]);?>
													</label>
												</td>
												<td>
													<?php $status = $row["status"]; ?>
													<div style="background-color:<?php echo $status=="Success" ? "#00934A" : "#D11919" ?>; text-align:center; color:#FFFFFF;">
														<?php echo $status; ?>
													</div>
												</td>
												<td class="custom-alternative" style="width: 10%;">
													<a href="javascript:void(0);" class="icon-custom-trash tooltips" data-original-title="<?php echo $cpb_delete; ?>" onclick='premium_edition_notification_captcha_bank()' data-placement="top"></a>
													<a href="javascript:void(0);" onclick='premium_edition_notification_captcha_bank()' class="icon-custom-ban tooltips" data-original-title="<?php echo $cpb_block_ip_address;?>" data-placement="right"></a>
												</td>
											</tr>
											<?php
											}
										?>
									</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	else
	{
		?>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="icon-custom-home"></i>
					<a href="admin.php?page=captcha_bank">
						<?php echo $cpb_captcha_bank_title; ?>
					</a>
					<span>></span>
				</li>
				<li>
					<a href="admin.php?page=captcha_bank_login_logs">
						<?php echo $cpb_logs_menu; ?>
					</a>
					<span>></span>
				</li>
				<li>
					<span>
						<?php echo $cpb_recent_login_log_title; ?>
					</span>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet box vivid-green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-custom-clock"></i>
							<?php echo $cpb_recent_login_log_title; ?>
						</div>
					</div>
					<div class="portlet-body form">
						<form id="ux_frm_recent_login">
							<div class="form-body">
								<strong><?php echo $cpb_user_access_message;?></strong>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
?>
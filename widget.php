<?php
/** Notes: 
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */
?>


<!-- Start Popup window code -->
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<!-- End Popup window code -->

<!-- Style Sheet Start note: move to its onw file and include for future update -->
<style>
h1 {font-size:250%;}
  hcct2 {font-size:100%;}
p {font-size:100%;}
</style>
<!-- Style Sheet Start note: move to its onw file and include for future update -->

<?php 
$url = home_url();

?>


<!--  Start Widget Output -->
<table align=center style="width:100%;">
  <tr>
	<td width=97% align=center><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/zd-logo.png" height="30px" width="300px" title="Thank You for Being a CaliCotek Customer" />
  </td></tr>
</table>

<table align=center style="background-color:#e4e4e4; width:99%; float:left;">
  <tr>
  <td><a href="admin.php?page=cctpage"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/dashboard.png" height="30px" width="30px" alt="text test" title="CCT Admin Dashboard" /></a></td>
  
  <td><a href="<?php echo home_url() ?>:2095/webmail/x3/index.html"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/mail-box.png" height="30px" width="30px" alt="text test" title="Server Email"/></a></td>
  
	<td><a href="<?php echo home_url() ?>/cpanel" target="new"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/Home-Server-icon.png" height="30px" width="30px" alt="text test" title="C-Panel Server Access" /></a></td>
    
  <td><a href="JavaScript:newPopup('http://calicotek.com/support/support-ticket');"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/support-ticket.png" height="30px" width="30px" alt="text test" title="HelpMe Ticket" /></a></td>
     
  <td><a href="http://calicotek.com/support" target="new"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/help-icon.png" height="30px" width="30px" alt="text test" title="Support" /></a></td>
     
  <td><a href="http://calicotek.com/category/tek_stuff_posts/tek_lessons_posts" target="new"><img src="<?php echo plugins_url(); ?>/zd-design-agency-support-dashboard/images/school-bus-icon.png" height="30px" width="30px" alt="text test" title="Lessons" /></a></td>
  </tr>
  
</table>
 <!--  Start news feed Output -->

   <div style="height:200px;width:98%;background-color:#FFFF99;border:1px solid #ccc;font: 12px/30px Georgia, Garamond, Serif;overflow:auto;">
	 <center><b><u>ZD  News Feed</u></b></center>
	 <script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http://www.zddesignagency.com/feed&num=10&date=y&targ=y&utf=y"  charset="UTF-8" type="text/javascript"></script>
   </div>
 <!--  End News Feed Output -->

<?php 
// Start Config 2nd edit, Page widget code
echo self::get_dashboard_widget_option(self::wid, 'version_number'); 
// End Config 2nd edit, Page widget code
?>
<!--  End Widget Output -->
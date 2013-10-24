<?php
	/*
		Plugin Name: DDM Newsletter
		Plugin URI: http://freestyle.com
		Description: E-mail marketing.
		Author: Mary LOK
		Version: 1.0
		Author URI: http://freestyle.com
	*/
	
	//back-end	
	add_action('admin_menu','newsletterplugin_admin_actions');
	function newsletterplugin_admin_actions(){
		//1-Title of page, 2- name of submenu, 3-control submenu, 4-menu slug, 5-function disply page
		add_options_page('Newsletter','Newsletter','manage_options',__FILE__, 'newsletterplugin_admin');
	}
	
	function newsletterplugin_admin(){
		global $wpdb;
		$data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}newsletter ORDER BY n_id DESC" );
?>
	<div class="wrap">
		<div class="icon32 icon32-posts-page" id="icon-edit-pages"><br/></div>
		<h2>Newseltter</h2>
		<br/>
		<table class="wp-list-table widefat fixed posts" cellspacing="0">
			<thead>
				<tr>			
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail</th>			
				</tr>
			</thead>
			<tfoot>
				<tr>			
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail</th>			
				</tr>
			</tfoot>
			<tbody>
	<?php
			foreach($data as $row){
				echo "<tr>";
					echo "<td>".$row->first_name."</td>";
					echo "<td>".$row->last_name."</td>";
					echo "<td>".$row->n_email."</td>";
				echo "</tr>";
			}
	?>
			</tbody>
		</table>
	</div>
<?php
	}
	
?>
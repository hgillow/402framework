<?php
/**
 * plugin.php - plugin controller class for Digital Orlando
 */

require_once MODEL_DIR."query_builder.php";

/**
 * load and initialise plugin controller class for Digital Orlando
 */
class PluginController extends BuildQuery {

	//plugins
	private static $db_all_plugins;
	private static $db_group_plugins;
	private static $db_controller_plugins;
	private static $db_plugin_details;
	
	/**
	 * return the plugins available for the specified controller and format
	 */
	function get_plugins($controller, $format) {
	$this->plugin_query($controller, $format);
	return self::$db_all_plugins;
	}
	
	/**
	 * return the plugins available for the specified group
	 */
	function get_group_plugins($group) {
	$this->group_plugin_query($group);
	return self::$db_group_plugins;
	}
	
	/**
	 * return the plugins available for the specified controller
	 */
	function get_controller_plugins($controller) {
	$this->controller_plugin_query($controller);
	return self::$db_controller_plugins;
	}
	
	/**
	 * return all details for the specified plugin_id
	 */
	function get_plugin($plugin_id) {
	$this->plugin_details($plugin_id);
	return self::$db_plugin_details;
	}

 	//plugin lookup query for controller, format
	private function plugin_query($controller, $format) {
	$tables = DB_PLUGINS.', '.DB_PLUGINS_LOOKUP;
	//set variable value to retrieve plugin_id
	$columns = DB_PLUGINS_LOOKUP.'.plugin_id';
	$where = DB_PLUGINS_LOOKUP.'.plugin_id='.DB_PLUGINS.'.plugin_id AND '.DB_PLUGINS_LOOKUP.'.plugin_type=? AND '.DB_PLUGINS_LOOKUP.'.content_type=?';
	$fields = array($controller, $format);
	//build query and return results
	$db_results = BuildQuery::all_field_query($tables, $columns, $where, $fields);
	self::$db_all_plugins = $db_results;
	}
	
	function group_plugin_query($group) {
	$tables = DB_PLUGINS.', '.DB_PLUGINS_LOOKUP;
	//set variable value to retrieve plugin_id
	$columns = DB_PLUGINS_LOOKUP.'.plugin_id';
	$where = DB_PLUGINS_LOOKUP.'.plugin_id='.DB_PLUGINS.'.plugin_id AND '.DB_PLUGINS_LOOKUP.'.content_group=?';
	$field = array($group);
	//build query and return results
	$db_results = BuildQuery::all_field_query($tables, $columns, $where, $field);
	self::$db_group_plugins = $db_results;
	}
	
	function controller_plugin_query($controller) {
	$tables = DB_PLUGINS.', '.DB_PLUGINS_LOOKUP;
	//set variable value to retrieve plugin_id
	$columns = 'DISTINCT('.DB_PLUGINS_LOOKUP.'.plugin_id)';
	$where = DB_PLUGINS_LOOKUP.'.plugin_id='.DB_PLUGINS.'.plugin_id AND '.DB_PLUGINS_LOOKUP.'.plugin_type=?';
	$field = array($controller);
	//build query and return results
	$db_results = BuildQuery::all_field_query($tables, $columns, $where, $field);
	self::$db_controller_plugins = $db_results;
	}
	
	//plugin query for specific field id
	function plugin_details($plugin_id) {
	if (isset($plugin_id)) {
	$table = DB_PLUGINS;
	//set variable value to retrieve all columns
	$column = '*';
	$where = 'plugin_id';
	$field = array($plugin_id);
	//build single query from BuildQuery class
	$db_results = BuildQuery::single_field_query($table, $column, $where, $field);
	self::$db_plugin_details = $db_results;
	}
	}
	
}
?>